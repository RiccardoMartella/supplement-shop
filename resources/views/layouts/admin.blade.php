@extends('layouts.app')

@section('content')
<div class="container w-75 m-auto">
    <h2 class=" fs-4 text-secondary my-4">
        {{ __('Dashboard') }}
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <div class="mb-2 rounded-3">
                @yield('content-admin')
            </div>
        </div>
    </div>
</div>
@endsection
