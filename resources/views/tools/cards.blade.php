@extends('layouts.app')

@section('content')
<div class="container mt-4">
	<h2 class="mb-4">Select a Greeting Card Template</h2>
	<div class="row" id="card-templates">
		@forelse($cards as $card)
			<div class="col-md-3 mb-4">
				<div class="card card-template" data-card-id="{{ $card->slug }}">
					<div class="card-preview-container" style="width: 100%; height: 160px; background: #f8f9fa; border-bottom: 1px solid #eee; position: relative;">
						<img src="{{$card->thumbnail}}" style="display: inline-block;width: 100%;height: 100%;"/>
					</div>
					<div class="card-body text-center">
						<h6 class="card-title">{{ $card->title }}</h6>
						@if($card->description)
							<small class="text-muted">{{ $card->description }}</small>
						@endif
					</div>					
				</div>				
			</div>
		@empty
			<div class="col-12">
				<div class="alert alert-info">No card templates found.</div>
			</div>
		@endforelse
	</div>
</div>
@endsection

@push('page_scripts')
@vite('resources/js/tools/cards.js')
@endpush
