@extends('layouts.app')

@section('content')
<div class="bg d-flex justify-content-center align-items-center">
    <div class="text-center">
        <h2 class="text-primary px-3 py-1 bg-white">
            Site em breve no ar!
        </h2>
    </div>
    <div class="position-absolute" style="bottom: 10px; right: 12px">
        <div class="text-muted" onclick="login()" style="cursor: pointer;" id="login">Log in</div>
    </div>
</div>
@endsection