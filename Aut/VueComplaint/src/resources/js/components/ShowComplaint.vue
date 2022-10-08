<template>
    <div>
                <div class="table-responsive">
                    <table class="table  table-hover">
                        <thead>
                           <tr class="text-center">
                            <td>#</td>
        <!--                    <td>{{trans('complaint.complaint_name')}}</td>-->
        <!--                    <td>{{trans('complaint.time_of_complaint')}}</td>-->
        <!--                    <td>{{trans('complaint.status_of_complaint')}}</td>-->
        <!--                    <td>{{trans('complaint.information_of_complaint')}}</td>-->
        <!--                    <td>{{trans('complaint.timeline_of_complaint')}}</td>-->
                            <td>Complaint Name</td>
                            <td>Time of Complaint</td>
                            <td>Status of Complaint</td>
                            <td>Information of Complaint</td>
                            <td>Timeline of Complaint</td>
                        </tr>
                        </thead>
                        <tbody class="text-center">
                             <tr v-for="requesterRequest in data['requesterRequests']" :key="requesterRequest.REQUEST_ID">
                                 <td>#</td>
                                 <td>{{ requesterRequest.REQUEST_TYPE_NAME }}</td>
                                 <td>{{ requesterRequest.REQUEST_DATE }}</td>
                                 <td>{{ requesterRequest.REQUEST_STATUS_NAME }}</td>
                                 <td>Lama</td>
                                 <td>Yozqtli</td>
                             </tr>
                        </tbody>
                    </table>
                </div>
    </div>
</template>

<script>
    export default {
        name: "ShowComplaint",
        props:['data']
    }
</script>

<style scoped>

</style>
