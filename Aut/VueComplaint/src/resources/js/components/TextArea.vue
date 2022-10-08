<template>
    <div :id="id" class="form-group">
        <label :class="labelClass"><slot></slot></label>
        <textarea :rows="rows" :cols="column" :name="name" :class="inputClass" :placeholder="placeHolder">
        </textarea>
    </div>
</template>

<script>
    export default   {
        props: ['id','labelClass','name','inputClass','rows','column','placeHolder'],
    }
</script>

<style scoped>

</style>
