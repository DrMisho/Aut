@extends('vue-dashboard::layout')

@section('body')
<div id="app">
    <main class="preloader v-content" style="min-height: 100vh">
        <div class="v-content__wrap">
            <div class="container fluid fill-height">
                <div class="layout align-center justify-center">
                    <div class="flex xs12 sm6">
                        <div class="layout row wrap align-center justify-center">
                            <div class="flex text-xs-center xs5">
                                <div class="v-responsive v-image">
                                    <div class="v-responsive__sizer" style="padding-bottom: 100%;"></div>
                                    <div class="v-image__image v-image__image--contain"
                                         style="background-image: url('{{ config('vue-dashboard.loader_logo') }}'); background-position: center center;"></div>
                                    <div class="v-responsive__content"></div>
                                </div>
                                <h2 class="headline">@lang('app.loading_ui')</h2>
                                <div class="dot-elastic"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection
