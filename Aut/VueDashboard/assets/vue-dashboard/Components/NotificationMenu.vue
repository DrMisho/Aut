<template>
    <v-menu offset-y :left="!right" :right="right" :close-on-content-click="false" :nudge-width="250">
        <template v-slot:activator="{ on: menu }">
            <v-tooltip bottom>
                <template #activator="{ on: tooltip }">
                    <v-btn icon v-on="{ ...tooltip, ...menu }">
                        <v-badge v-model="badge" right overlap color="red">
                            <template v-slot:badge>
                                <span>{{ unread_count }}</span>
                            </template>
                            <v-icon>fas fa-bell</v-icon>
                        </v-badge>
                    </v-btn>
                </template>
                <span>{{ trans('notifications') }}</span>
            </v-tooltip>
        </template>

        <v-card>
            <v-list dense :class="{'pl-3': right, 'pr-3': !right}">
                <v-list-tile>
                    <v-list-tile-content>
                        <v-btn flat small class="ma-0" >{{ viewRead }}</v-btn>
                    </v-list-tile-content>
                    <v-list-tile-action>
                        <v-tooltip bottom>
                            <template v-slot:activator="{on}">
                                <v-btn icon v-on="on" @click="markAllAsRead">
                                    <v-icon color="grey darken-1">fas fa-envelope</v-icon>
                                </v-btn>
                            </template>
                            <span>{{ trans('mark_all_as_read') }}</span>
                        </v-tooltip>
                    </v-list-tile-action>
                </v-list-tile>
            </v-list>

            <v-divider />

            <v-list dense three-line class="pa-0" style="overflow-y: scroll;max-height: 180px;">
                <v-list-tile v-for="(notification, i) in notifications" :key="i" @click="action(notification)" :class="{'grey lighten-3': !!notification.read_at}">
                    <v-list-tile-content>
                        <v-list-tile-title>{{ notification.data.title }} <span class="grey--text">- {{ notification.data.since }}</span></v-list-tile-title>
                        <v-list-tile-title>{{ notification.data.text }}</v-list-tile-title>
                    </v-list-tile-content>
                    <v-list-tile-action>
                        <v-btn v-if="!!notification.read_at" icon @click.stop="markAsUnread(notification)">
                            <v-icon color="grey darken-1">fas fa-envelope-open</v-icon>
                        </v-btn>
                        <v-btn v-if="!notification.read_at" icon @click.stop="markAsRead(notification)">
                            <v-icon color="grey darken-1">fas fa-envelope</v-icon>
                        </v-btn>
                    </v-list-tile-action>
                </v-list-tile>
            </v-list>

            <v-divider />

            <v-list dense>
                <v-list-tile @click="loadMore">
                    <v-list-tile-content class="align-center">
                        <span class="body-2" v-if="!loadingMore">{{ trans('load_more') }}</span>
                        <span class="body-2" v-if="loadingMore">{{ trans('loading_more') }}</span>
                    </v-list-tile-content>
                </v-list-tile>
            </v-list>
        </v-card>
    </v-menu>
</template>

<script>
export default {
    name: "NotificationMenu",
    data() {
        return {
            loadingMore: false,
            unread_count: 0,
            right: automata.isRtl,
            notifications: [],
            page: 1,
        };
    },
    computed: {
        unreadNotifications() {
            return this.notifications.filter(item => !item.read_at);
        },
        viewRead() {
            return `${this.trans('unread')} (${this.unreadNotifications.length})`;
        },
        badge() {
            return !!this.unread_count;
        },
    },
    watch: {
        '$store.state.auth.user': {
            handler(newValue) {
                if (newValue) {
                    this.listenToNotificationsChannel();
                    this.fcmPushNotification();
                }
            }
        }
    },
    methods: {
        fetch() {
            return this.$http.get(`api/notifications`).then(res => {
                this.page = 1;
                this.notifications = res.data.data;
                this.unread_count = res.data.meta.unread_count;
            });
        },
        loadMore() {
            this.loadingMore = true;
            this.page = this.page + 1;
            return this.$http.get(`api/notifications?page=${this.page}`).then(res => {
                if (res.data.data) {
                    this.notifications.push(...res.data.data);
                    this.unread_count = res.data.meta.unread_count;
                }
            }).finally(() => this.loadingMore = false);
        },
        action(notification) {
            if (notification.data.url) {
                this.$router.push(notification.data.url).catch(error => {});
                if (!notification.read_at) {
                    this.markAsRead(notification);
                }
            }
        },
        markAllAsRead() {
            return this.$http.post(`api/notifications/all/read`).then(res => {
                this.fetch();
            });
        },
        markAsRead(notification) {
            return this.$http.post(`api/notifications/${notification.id}/read`).then(res => {
                notification.read_at = res.data.read_at;
                notification.data = res.data.data
                this.unread_count = this.unread_count - 1;
            });
        },
        markAsUnread(notification) {
            return this.$http.post(`api/notifications/${notification.id}/unread`).then(res => {
                notification.read_at = res.data.read_at;
                notification.data = res.data.data
                this.unread_count = this.unread_count + 1;
            });
        },
        listenToNotificationsChannel() {
            let id = this.$store.getters['auth/info'].id;
            this.$echo
                .private(`notifications.${id}`)
                .notification((notification) => {
                    this.fetch().then(() => this.$notification.show('You have new notification, check it out'));
                });
            console.log(`Subscribed with Channel 'notifications.${id}'`);
        },
        fcmPushNotification() {
            if (!this.$automata.config.firebase.driver) {
                return;
            }

            let messaging = this.$firebase.messaging();

            navigator
                .serviceWorker
                .register(this.$automata.config.firebase.service_worker_script)
                .then((sw) => {
                    messaging
                        .getToken(sw)
                        .then((token) => {
                            this.$http.post('api/notifications/fcm/token', {token});
                        });
                });

            messaging.onMessage(function (payload) {
                new Notification(
                    payload.notification.title,
                    {
                        body: payload.notification.body,
                        icon: payload.notification.icon,
                    }
                );
            });

            console.log(`Push Notification initialized`);
        },
        trans(key, local, values) {
            return this.$t(`notification.${key}`, local, values);
        }
    },
    mounted() {
        this.fetch();
    }
}
</script>

<style scoped>

</style>
