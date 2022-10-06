@extends('Attributes::test')


@section('content')

<div class="col-md-3"></div>
<div id="accordion container col-md-6 ">
@foreach ($info['struct'] as $group)
<x-group-view :group='$group'/>
@endforeach
</div>
@endsection 