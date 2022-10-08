<template>
    <div :id="id" class="form-group">
            <label :class="labelClass"><slot></slot></label>
            <input type="text" :name="name" :class="inputClass">
    </div>
</template>

<script>
    module.exports = {
        props: ['id','labelClass','name','inputClass'],
    }
</script>

<style scoped>

</style>
