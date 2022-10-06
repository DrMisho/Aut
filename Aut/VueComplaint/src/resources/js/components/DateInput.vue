<template>
    <div>
        <div :id="id" class="form-group">
            <label  :class="labelClass"><slot></slot></label>
            <input  :name="name" type="date" :class="inputClass" :value="value">
        </div>
    </div>
</template>

<script>
    module.exports =  {
        props: ['id','labelClass','name','inputClass','value'],
    }
</script>

<style scoped>

</style>
