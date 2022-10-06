<template >
    <v-flex xs12>
        <translation-files />
        <v-layout>


            <!--<v-flex>
                <v-form ref="form" v-model="valid">
                    <v-text-field v-model="form.test2" label="label" :rules="[v => !!v || 'Name is required']"/>
                    <file-pond-input v-model="form.test4" :rules="fileRules" multiple label="upload your portrait here" :error-messages="errorMessage"/>
                    <geolocation-input :rules="rules" multi-markers clearable label="Office Location" v-model="geolocation" :error-messages="errorMessage" :size="['100%', '400px']" :zoom="8"/>
                </v-form>
            </v-flex>-->
            <!--<v-flex xs4>
                <date-time-input v-model="form.started_at" />
            </v-flex>-->
            <!--
            <v-flex>
                <price-input label="Label" v-model="form.price" :currencies="currencies" item-text="name" item-id="id" select-currency :currency.sync="form.currency" :currency-id.sync="form.currency_id" />
            </v-flex>-->
        </v-layout>
        <!--<v-layout>
            <v-flex>
                <price-input v-model="price" label="Fee" return-formatted-value currency="$"/>
            </v-flex>
        </v-layout>-->
        <!--<v-layout>
            <v-flex>
                <translation-input v-model="form" :fields="['name', 'nickname', 'last_name']">
                    <template v-slot:locales="{supportedLocales, value}">
                        <v-layout row wrap>
                            <v-flex sm5>
                                <template v-for="(locale, lang) in supportedLocales">
                                    <v-text-field v-model="value[lang].name" :label="`name (${locale.native})`"/>
                                    <v-text-field v-model="value[lang].nickname" :label="`nickname (${locale.native})`"/>
                                </template>
                            </v-flex>
                            <v-flex sm5>
                                <template v-for="(locale, lang) in supportedLocales">
                                    <v-text-field v-model="value[lang].last_name" :label="`Last name (${locale.native})`"/>
                                </template>
                            </v-flex>
                        </v-layout>
                    </template>
                </translation-input>
            </v-flex>
        </v-layout>
        <v-divider class="my-2" />
        <v-layout>
            <v-flex>
                <translation-input v-model="form" :fields="['name', 'nickname']">
                    <template v-slot:default="{ value, locale, lang }">
                        <v-layout row wrap>
                            <v-flex sm5>
                                <v-text-field v-model="value[lang].name" :label="`name (${locale.native})`"/>
                            </v-flex>
                            <v-flex sm6>
                                <v-text-field v-model="value[lang].nickname" :label="`nickname (${locale.native})`"/>
                            </v-flex>
                        </v-layout>
                    </template>
                </translation-input>
            </v-flex>
        </v-layout>
        <v-divider class="my-2" />
        <v-layout>
            <translation-input v-model="form" fields="name">
                <template v-slot:default="{ value, locale, lang }">
                    <v-flex sm5>
                        <v-text-field v-model="value[lang].name" :label="`name (${locale.native})`"/>
                    </v-flex>
                </template>
            </translation-input>
        </v-layout>-->

        <!--<v-layout>
            <v-flex>
                <date-time-input v-model="datetime">
                    <template v-slot:default="{ value }">
                        <v-layout row wrap>
                            <v-flex sm6>
                                <date-input v-model="value.date"/>
                            </v-flex>
                            <v-flex sm6>
                                <time-input v-model="value.time"/>
                            </v-flex>
                        </v-layout>
                    </template>
                </date-time-input>
            </v-flex>
        </v-layout>-->

        <!--<v-layout>
            <v-flex>
                <geolocation-preview :geolocation="'35,37'" width="700px">
                    <template v-slot:activator="{ on, geolocation, center, size, zoom }">
                        <geolocation-input v-model="geolocation" :draggable="false" :center="center" :size="size" :zoom="zoom"/>
                    </template>
                </geolocation-preview>
            </v-flex>
        </v-layout>-->

        <!--<v-layout>
            <v-flex>
                <autocomplete resource="currencies"  :query="{active: true}" @change="test" />
            </v-flex>
        </v-layout>-->

        <!--<v-layout>
            <v-flex>
                <color-input  />
            </v-flex>
        </v-layout>
        <v-layout>
            <translation-input  v-model="form">
                <v-text-field name="first_name" label="First Name" type="text" />
                <v-text-field name="last_name" label="Last Name" />
            </translation-input>
        </v-layout>

        <v-layout>
            <data-table-btn :source="'users'" width="700px">
                <template v-slot:default="{ on }">
                    <v-btn v-on="on">
                        Open DataTable
                    </v-btn>
                </template>
            </data-table-btn>
        </v-layout>

        <v-layout>
            <geolocation-preview :geolocation="'35,37'" width="700px">
                <template v-slot:activator="{ on }">
                    <v-btn v-on="on">
                        Preview Geolocation
                    </v-btn>
                </template>
            </geolocation-preview>
        </v-layout>
        <v-layout row class="mb-5">
            <v-flex xs12>
                <geolocation-input label="Office Location" v-model="geolocation" :center="{lat: '45', lng: '45'}" :size="['100%', '400px']" :zoom="8"/>
            </v-flex>
        </v-layout>
        <v-layout row class="mb-5">
            <v-flex xs12>
                <file-pond-input
                    multiple
                    :label="`ارفع ملفات`"
                    :allowReplace="true"
                    :instantUpload="true"
                    v-model="filesInput"
                    :uploader="`test`"
                />
            </v-flex>
        </v-layout>
        <v-layout row class="mb-5">
            <v-flex md6>
                <v-text-field label="Regular" mask="###-#######" />
            </v-flex>
            <v-flex md6>
                <v-text-field reverse label="Prefix call" class="prepend-input" mask="###-#######">
                    <template v-slot:prepend>
                        <v-select :items="['021', '011']" class="pa-0 ma-0" style="width: 60px;"/>
                    </template>
                </v-text-field>
            </v-flex>
        </v-layout>
        <v-layout row class="mb-5">
            <v-flex shrink>
                <image-preview :src="'images/user.png'" />
            </v-flex>
            <v-flex shrink>
                <image-preview :src="'images/user.png'" >
                    <template v-slot:activator="{ on }">
                        <v-btn v-on="on">
                            Preview Image
                        </v-btn>
                    </template>
                </image-preview>
            </v-flex>
        </v-layout>-->
    </v-flex>
</template>

<script>
    import TranslationFiles from "../../../../../Aut/VueDashboard/assets/vue-dashboard/Langs/Components/TranslationFiles";
    export default {
        name: "Test",
        components: {TranslationFiles},
        data() {
            return {
                form: {
                    started_at: null,
                    test4: []
                },
                valid: false,
                datetime: null,
                geolocation: [],
                mutations: 0,
                // files: ["168","169"],
                filesInput: ["168","169"],
                errorMessage: null,
                fileRules: [
                    v => (v !== null || (v.length !== 0)) || 'FIle is Required',
                    v => (v === null) || (v.length >= 4 || v.length === 0) || `File Require ${4 - v.length} more markers to be added`,
                ],
                rules: [
                    v => v.length !== 0 || 'Geolocation is Required',
                    v => (v.length >= 4 || v.length === 0) || `Geolocation Require ${4 - v.length} more markers to be added`,
                ],
            }
        },
        methods: {
            onMutate () {
                this.mutations++;
            },
            test() {
                alert('test');
            },
        }
    }
</script>

<style scoped>

</style>
