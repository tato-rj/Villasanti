@extends('layouts.raw')

@section('content')
<div class="d-flex justify-content-center align-items-center h-100vh">
    <div class="text-center">
        <h2 class="">
            Site em breve no ar!
        </h2>
    </div>
    <div class="position-absolute" style="bottom: 10px; right: 12px">
        <div class="text-muted" onclick="login()" style="cursor: pointer;" id="login">Log in</div>
    </div>
</div>
@endsection