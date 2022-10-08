<template>
    <button class="btn" :class="bClass"  :id="id" type="submit" >
        <slot></slot>
    </button>
</template>

<script>
    module.exports = {
        props: ['id','bClass'],
    }
</script>

<style scoped>

</style>
