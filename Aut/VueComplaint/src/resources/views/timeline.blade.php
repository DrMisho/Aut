    @if($requestApprovals == [])
       <p>@lang('complaint::complaint.complaint_approval')</p>
    @else
        <div class="table-responsive">
            <table class="table  table-bordered table-hover table-condensed">
                <thead>
                <tr class="text-center">
                    <td  width="35">#</td>
                    <td>@lang('complaint::complaint.complaint_department')</td>
                    <td>@lang('complaint::complaint.complaint_employee')</td>
                    <td>@lang('complaint::complaint.complaint_action')</td>
                    <td>@lang('complaint::complaint.complaint_date_of_action')</td>
                    <td>@lang('complaint::complaint.complaint_note')</td>
                </tr>
                </thead>
                <tbody class="text-center">
                @foreach($requestApprovals as $key=>$value)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$value['DEPARTMENT']}}</td>
                        <td>{{$value['EMPLOYEE']}}</td>
                        <td>{{$value['ACTION']}}</td>
                        <td>{{$value['DATE_OF_ACTION']}}</td>
                        <td>{{$value['NOTE']}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @endif