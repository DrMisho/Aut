<template>
    <div :id="id" class="form-group">
            <label :class="labelClass"><slot></slot></label>
            <input :name="name" type="text" :class="inputClass" :placeholder="placeHolder">
    </div>
</template>

<script>
    export default  {
        props: ['id',
                'labelClass',
                'name',
                'inputClass',
                'placeHolder',
                'csrf_token'],
    }
</script>

<style scoped>

</style>
