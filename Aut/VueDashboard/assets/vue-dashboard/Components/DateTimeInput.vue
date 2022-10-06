<template>
    <div>
        <slot :value="inputValue" :label="{date: dateLabel, time: timeLabel}">
            <!--Do not pass $listeners (conflict with input event)-->
            <date-input v-bind="$attrs" v-model="inputValue.date" :label="dateLabel" :date-picker-attr="datePickerAttr"/>
            <time-input v-bind="$attrs" v-model="inputValue.time" :label="timeLabel" :time-picker-attr="timePickerAttr"/>
        </slot>
    </div>
</template>

<script>
export default {
    name: "DateTimeInput",
    inheritAttrs: false,
    props: {
        label: {
            type: [String, Object],
        },
        value: {
            default: null,
        },
        datePickerAttr: {},
        timePickerAttr: {},
    },
    data() {
        return {
            inputValue: {
                date: null,
                time: null,
            }
        }
    },
    computed: {
        dateLabel() {
            if (!this.label) {
                return null;
            }
            if (typeof this.label == 'object') {
                return this.label.date;
            }
            return `${this.label} (date)`;
        },
        timeLabel() {
            if (!this.label) {
                return null;
            }
            if (typeof this.label == 'object') {
                return this.label.time;
            }
            return `${this.label} (time)`;
        },
    },
    watch: {
        inputValue: {
            deep: true,
            handler(newval) {
                if ((!newval.date) && (!newval.time)) {
                    this.$emit('input', null);
                } else {
                    this.$emit('input', `${newval.date || ''} ${newval.time || ''}`);
                }
            }
        },
        value: {
            immediate: true,
            handler(newval) {
                let input = [];
                if (newval) {
                    input = newval.split(' ');
                }
                this.inputValue.date = input[0] ? input[0] : null;
                this.inputValue.time = input[1] ? input[1] : null;
            }
        }
    }
}
</script>

<style scoped>

</style>
