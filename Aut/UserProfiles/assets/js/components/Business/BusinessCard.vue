<template>
    <v-card>
        <v-img v-if="cardInfo.company_logo" :src="cardInfo.company_logo" aspect-ratio="2.75">
            <v-container fill-height fluid class="pa-0" v-if="cardInfo.is_current">
                <v-layout fill-height>
                    <v-flex xs12 align-end flexbox>
                        <v-chip color="secondary" text-color="white" small>
                            <v-avatar>
                                <v-icon>check_circle</v-icon>
                            </v-avatar>
                            {{ trans('current') }}
                        </v-chip>
                    </v-flex>
                </v-layout>
            </v-container>
        </v-img>
        <v-card-title>
            <div>
                <h3 v-if="cardInfo.company" class="headline mb-0">{{ cardInfo.company.company }}</h3>
                <div>{{ cardInfo.job_title.job_title }}</div>
                <div class="grey--text">{{ experience }}</div>
            </div>
        </v-card-title>
        <v-card-actions>
            <v-spacer></v-spacer>
            <v-btn @click="$emit('edit', cardInfo)" flat icon color="success"><v-icon >edit</v-icon></v-btn>
            <v-btn @click="$emit('delete', cardInfo)" flat icon color="red"><v-icon >delete</v-icon></v-btn>
        </v-card-actions>
    </v-card>
</template>

<script>
    export default {
        name: "BusinessCard",
        props: {
            cardInfo: {
                type: Object,
            }
        },
        computed: {
            experience() {
                let till = this.cardInfo.end_date || moment();
                let since = moment(this.cardInfo.started_at).from(till, this.cardInfo.ended_at);
                if (this.cardInfo.ended_at) {
                    return `${this.trans('for')} ${since}`;
                }
                return since;
            }
        },
        methods:{
            trans(key) {
                return this.$t(`profiles.business.${key}`)
            }
        }
    }
</script>

<style scoped>

</style>