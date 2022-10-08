<template>
    <v-flex md12>
    <v-form v-model="feature.valid">

       <div class="justify-center align-center d-flex" md1 sm1 xl1 xm1>
        <p>{{feature.name}}</p>
    </div>
        <v-layout wrap row md11 sm11 xl11 xm11>
            <v-flex md6 sm6 xl6 xm6>
                <v-text-field
                :error="feature.error"
                    md12
                    outlined
                    :label="translate('from')"
                    :hint="feature.hint"
                    color="grey"
                    v-model="number_start"
                    :rules="feature.is_require ? number_rule : []"
                    class=""
                ></v-text-field>
            </v-flex>
            <v-flex md6 sm6 xl6 xm6>
                <v-text-field
                :error="feature.error"
                    md12
                    outlined
                    :label="translate('to')"
                    :hint="feature.hint"
                    v-model="number_end"
                    :rules="feature.is_require ? number_rule : []"
                    class=""
                ></v-text-field>
            </v-flex>
        </v-layout>
    </v-form>
    </v-flex>
</template>

<script>
import Temp from "./../../Class/Temp.js";
export default {
    name: "att-number-range",
    props: ["feature", "id"],
    data: function() {
        return {
            value: this.initialValue(),
            number_rule: [
                v => !!v ||this.translate("required"),
                v => (v && !isNaN(v)) || this.translate("required_number")
            ],
            number_start: this.storeNumberStart(),
            number_end: this.storeNumberEnd(),
            show_dailog: false,
            show_dailog_end: false
        };
    },
    watch: {
        number_start(value) {
               if(value && this.number_end){
                this.feature.error = false;
            }
            this.storeValue();
        },
        number_end(value) {
             if(value && this.number_start){
                this.feature.error = false;
            }
            this.storeValue();
        },
        value() {
            this.$emit("input", this.value);
        }
    },
    methods: {
        translate(key) {
            return this.$t(`attributes.${key}`);
        },
        storeNumberStart() {
            if (this.feature.value) {
                let number_start = this.feature.value.number_start;
               return number_start
            } else {
                return 0;
            }
        },
        storeNumberEnd() {
            if (this.feature.value) {
                let number_end = this.feature.value.number_end;
               return number_end
            } else {
                return 0;
            }
        },
        initialValue() {
            let number_start = this.storeNumberStart();
            let number_end = this.storeNumberEnd();
            let temp = new Temp();
            temp.setWithVal("number_start", number_start);
            temp.setWithVal("type_code", "number_range");
            temp.setWithVal("number_end", number_end);
            temp.setWithVal("id", this.id);
            temp.setWithVal("feature_id", this.feature.id);
            this.value = temp;
            this.feature.value = temp;

            return temp;
        },
        storeValue() {
            let temp = new Temp();
            temp.setWithVal("number_start", this.number_start);
            temp.setWithVal("number_end", this.number_end);
            temp.setWithVal("type_code", "number_range");
            temp.setWithVal("id", this.id);
            temp.setWithVal("feature_id", this.feature.id);
            this.value = temp;
            this.feature.value = temp;

            return temp;
        }
    },
    created() {}
};
</script>

<style scoped></style>
