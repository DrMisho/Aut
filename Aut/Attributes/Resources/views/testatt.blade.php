@extends('Attributes::test')


@section('content')
<h1>car</h1>
<x-car-view :car="$car"/>
@endsection