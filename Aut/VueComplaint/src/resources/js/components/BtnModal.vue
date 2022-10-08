<template>
    <button class="btn" :class="bClass" data-toggle="modal" :data-target="modal" :data-key="DataKey" :id="id">
       <slot></slot>
    </button>
</template>

<script>
    export default  {
        props: ['bClass','modal','DataKey','id'],
    }
</script>

<style scoped>

</style>
