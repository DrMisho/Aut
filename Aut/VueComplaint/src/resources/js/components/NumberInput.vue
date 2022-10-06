<template>
    <div :id="id" class="form-group">
        <label :class="labelClass"><slot></slot></label>
        <input :name="name" type="number" :class="inputClass">
    </div>
</template>
<script>
    module.exports = {
        props: ['id','labelClass','name','inputClass'],
    }
</script>

<style scoped>

</style>
