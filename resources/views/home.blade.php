@extends('layouts.app')

@section('content')
    @include('tools.'.$toolKey)
@endsection

@push('page_scripts')
    @vite('resources/js/home.js')
@endpush