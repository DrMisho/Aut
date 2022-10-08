<template>
    <v-flex md12>
    <v-form v-model="feature.valid">

        <v-text-field
        :error="feature.error"
            md12
            outlined
            v-model="email_value"
            color="grey"
            :hint="feature.hint"
            :rules="feature.is_require ? email_rule : []"
            :label="feature.name"
            class=""
        ></v-text-field>
    </v-form>
    </v-flex>
</template>

<script>
import Temp from "./../../Class/Temp.js";
export default {
    name: "att-email",
    props: ["feature", "id"],
    data: function() {
        return {
            value: this.initialValue(),
            email_rule: [
                v => !!v || this.translate("required"),
                v => (/.+@.+/) || this.translate("required_email")
            ],
            email_value: this.storeEmail()
        };
    },
    watch: {
        email_value(value) {
             if(value){
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
        storeEmail() {
            if (this.feature.value) {
                return this.feature.value.value;
            } else {
                return null;
            }
        },
        initialValue() {
            let value = this.storeEmail();
            let temp = new Temp();
            temp.setWithVal("value", value);
            temp.setWithVal("id", this.id);
            temp.setWithVal("type_code", "email");
            temp.setWithVal("feature_id", this.feature.id);
            this.value = temp;
            this.feature.value = temp;

            return temp;
        },
        storeValue() {
            let temp = new Temp();
            temp.setWithVal("value", this.email_value);
            temp.setWithVal("id", this.id);
            temp.setWithVal("type_code", "email");
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
