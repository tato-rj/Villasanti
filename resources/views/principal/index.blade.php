@extends('layouts.app')

@push('header')
<style type="text/css">
</style>
@endpush

@section('content')

@include('principal.lead')
@include('principal.porque')
{{-- @include('principal.praticas') --}}
@include('principal.quem')

@endsection

@push('scripts')
@endpush