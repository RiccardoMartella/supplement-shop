@extends('layouts.admin')

@section('content-admin')
<div class="card ">
    <div class="card-header">{{ __('User Dashboard') }}</div>

    <div class="card-body">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif

        {{ __('You are logged in!') }}
    </div>
</div>
<div class="container p-0">
    <div class="mt-2">
        <a href="{{route('admin.indexAdmin')}}">lista inteagratori</a>
    </div>
    <div  class="mt-2">
        <a href="{{route('admin.create')}}">Crea Integratore</a>
    </div>
</div>
@endsection
