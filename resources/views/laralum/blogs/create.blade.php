@extends('layouts.admin.panel')
@section('breadcrumb')
    <div class="ui breadcrumb">
        <a class="section" href="{{ route('Laralum::blogs') }}">{{ trans('laralum.blogs_title') }}</a>
        <i class="right angle icon divider"></i>
        <div class="active section">{{ trans('laralum.blogs_create_title') }}</div>
    </div>
@endsection
@section('title', trans('laralum.blogs_create_title'))
@section('icon', "plus")
@section('subtitle', trans('laralum.blogs_create_subtitle'))
@section('content')
<div class="ui doubling stackable grid container">
    <div class="three wide column"></div>
    <div class="ten wide column">
        <div class="ui very padded segment">
            <form class="ui form" method="POST">
                {{ csrf_field() }}
                @include('laralum/forms/master')
                <br>
                <button type="submit" class="ui {{ Laralum::settings()->button_color }} submit button">{{ trans('laralum.submit') }}</button>
            </form>
        </div>
    </div>
    <div class="three wide column"></div>
</div>
@endsection
