@extends('layouts.app')

@section('content')
    @include('tools.'.$toolKey)
@endsection

@push('page_scripts')
@php
	$relativePath = "resources/js/{$toolKey}.js";
	$fullPath = base_path($relativePath);
@endphp
@if (file_exists($fullPath))
	@vite($relativePath)	
@endif
@endpush

