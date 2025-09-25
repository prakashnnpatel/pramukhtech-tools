@extends('layouts.app')

@section('content')
	<input type="hidden" id="tool_id" value="{{$tool_id ?? ''}}"/>
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
@vite("resources/js/tools/common.js")
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
