@extends('layouts.app')

@section('content')
    @php
		$viewPath = 'tools.' . $toolKey;
	@endphp

	@if (View::exists($viewPath))
		@include($viewPath)
	@elseif(View::exists($toolKey))
		@include($toolKey)
	@else
		@include("errors.404")
	@endif
@endsection

@push('page_scripts')
@vite("resources/js/jquery-ui.min.js")
@if($toolKey == "signature")
	@vite("resources/js/jquery.signature.js")
@endif
@vite("resources/js/jqueryUiTouch.js")
@php
	$relativePath = "resources/js/tools/{$toolKey}.js";
	$fullPath = base_path($relativePath);
@endphp
	@if (file_exists($fullPath))
		@vite($relativePath)
	@endif
@endpush

