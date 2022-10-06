<template>
    <div>
        <div class="container">
            <div class="row">
                <div v-if="data['requestTypes']!=[]">
                    <form method="post">
                        <input type="hidden" name="_token" id="csrf-token" />
                        <select-input id="15" input-class="form-control" label-class="text-success" input-value="REQUEST_TYPE_ID" input-text="REQUEST_TYPE_NAME" :options="data['requestTypes']">Select Category of Complaints:
                        </select-input>



                        <!--                                @lang('complaint::complaint.complaint_category')-->
                        <!--                            </bs-select>-->
                        <!--                            @endif-->
                        <!--                            <section id="ajax-content" style="margin-top: 80px">-->
                        <!--                                @include('complaint::form_complaint',['requestGroups'=>$requestGroups])-->
                        <!--                            </section>-->
                        <!--                            <div class="dropzone dropzone_preview" id="dropzoneFileUpload" style="margin-bottom: 15px;">-->
                        <!--                            </div>-->
                        <!--                            <bs-form-button id="send" color="primary">@lang("complaint::complaint.complaint_save")</bs-form-button>-->
                        <!--                        @if(session()->has('message'))-->
                        <!--                        <bs-alert>-->
                        <!--                            {{ session()->get('message') }}-->
                        <!--                        </bs-alert>-->

                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import SelectInput from "../components/SelectInput";

    export default {
        props:['data'],
        components: {
            SelectInput
        }
    }
</script>
