<template>
    <div :id="id" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog">
            <form class="form-horizontal" :method="method" :action="action">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><slot name="header"></slot></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <slot></slot>
                    </div>
                    <div class="modal-footer">
                        <h4><slot name="footer"></slot></h4>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
    export default  {
        props: ['id','method','action'],
    }
</script>

<style scoped>

</style>
