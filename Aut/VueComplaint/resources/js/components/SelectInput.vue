<template>
    <div class="form-group">
        <label :class="labelClass"><slot></slot></label>
        <select :class="inputClass" :value="value" @input="$emit('input', $event.target.value)">
            <option :value="null">– Select a ... –</option>
            <option v-for="option in options" :value="option[inputValue]">
                {{ option[inputText] }}
            </option>
        </select>
    </div>
</template>
<script>
    export default  {
        // props: ['id','labelClass','inputClass','name','options'],
        name: "SelectInput",
        props: {
            inputValue: {
                default: 'id'
            },
            inputText: {
                default: 'text'
            },
            options: {
                type: Array
            },
            inputClass:
                {
                   type: String
                },
            labelClass:
                {
                    type: String
                }
        }
    }
</script>

<style scoped>

</style>
