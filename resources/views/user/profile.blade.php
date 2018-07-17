@extends('adminlte::page')

@section('title', 'User Profile')

@section('content_header')
    <h1>User Profile</h1>
@stop

@section('content')
    @php
        $user = Auth::user();
        $role = $user->role();
    @endphp

    <div class="box box-widget widget-user-2">
        <div class="widget-user-header bg-green">
            <div class="widget-user-image">
                <img class="img-circle" src="{{ asset('img/' . $role->slug .'.png') }}" alt="User Avatar">
            </div>
            <h3 class="widget-user-username">{{ $user->name }}</h3>
            <h5 class="widget-user-desc">{{ $role->name }}</h5>
            </div>
            <div class="box-footer no-padding">
            <ul class="nav nav-stacked">
                <li>
                    <a>Username: {{ $user->username }}</a>
                </li>
                <li>
                    <a>Permissions:
                        <ul class="nav nav-pills nav-stacked" style="margin-left:10px;">
                            @foreach ($role->permissions as $permission => $status)
                                @if($status)
                                    <li><i class="fa fa-circle-o text-green"></i> {{ strtoupper($permission) }}</li>
                                @endif
                            @endforeach
                        </ul>
                    </a>
                </li>
            </ul>
        </div>
    </div>
@stop

@section('css')

@stop

@section('js')

@stop