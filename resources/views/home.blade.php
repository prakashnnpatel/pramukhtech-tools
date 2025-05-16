@extends('layouts.app')

@section('content')
    @include('tools.'.$toolKey)
@endsection

@push('page_scripts')
@vite("resources/js/jquery-ui.min.js")
@vite("resources/js/jqueryUiTouch.js")
@php
	$relativePath = "resources/js/tools/{$toolKey}.js";
	$fullPath = base_path($relativePath);
@endphp
	@if (file_exists($fullPath))
		@vite($relativePath)	
	@endif
@endpush

