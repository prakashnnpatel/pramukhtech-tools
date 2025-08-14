@extends('layouts.app')

@section('content')
    @php
		$viewPath = 'tools.' . $toolKey;
	@endphp

	@if (View::exists($viewPath))
		@include($viewPath)
	@else
		@include("errors.404")
	@endif
@endsection

@push('page_scripts')
@if($toolKey == "signature" || $toolKey == "digital-document")
	@vite("resources/js/jquery.signature.js")
@endif
@php
	$relativePath = "resources/js/tools/{$toolKey}.js";
	$fullPath = base_path($relativePath);
@endphp
	@if (file_exists($fullPath))
		@vite($relativePath)
	@endif
@endpush
