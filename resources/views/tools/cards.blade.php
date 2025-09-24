@extends('layouts.app')

@section('content')
<div class="container mt-4">
	<h2 class="mb-4">🎉 Find your perfect match</h2>
	<p>Create personalized greeting cards for every special moment.</p>
	<div class="row" id="card-templates">
		@forelse($cards as $card)
			<div class="col-md-4 mb-3">
				<div class="card card-template" data-card-id="{{ $card->slug }}" title="Click to use this template">
					<div class="card-preview-container" >
						<a href="{{route('greeting-cards.show',$card->slug)}}" title="Use This Template">
							<img src="{{$card->thumbnail}}" style="display: inline-block; width: 100%; cursor:pointer;"/>
						</a>
					</div>
					
					<div class="text-center m-2">
						<h6 class="card-title">
							<a href="{{route('greeting-cards.show',$card->slug)}}" title="Use This Template" style="color:#667eea;">{{ $card->title }}</a>
						</h6>						
						{{--@if($card->description)
							<small class="text-muted">{{ $card->description }}</small>
						@endif--}}
						<a href="{{route('greeting-cards.show',$card->slug)}}" class="invoice-action-btn tool-cta-btn" title="Try Now">
							Edit Now <i class="fas fa-arrow-right ms-1"></i>
						</a>
					</div>
				</div>				
			</div>
		@empty
			<div class="col-12">
				<div class="alert alert-info">No card templates found.</div>
			</div>
		@endforelse
	</div>

	<!-- Step-by-step guide -->
    <div class="info-section">
        <div class="row">
            <div class="col-lg-12">
                <div class="info-content-card">
                    <div class="content-header">
                        <h3><i class="fas fa-gift"></i>Make every celebration special for the ones you love.</h3>
                    </div>
                    <div class="content-body">
						<div class="row">
							<div class="col-lg-12">
								<p><b>🎉 Celebrate Every Occasion with ToolHubSpot's Free Online Card Maker 🎉</b></p>
								<p>From birthdays to business events, ToolHubSpot makes it effortless to design personalized greeting cards that leave a lasting impression. Whether you're celebrating a Birthday, Anniversary, Wedding, Love & Romance, Thank You, Congratulations, Festival, Sympathy, Friendship, Invitation, Farewell, Apology, Humor, Spiritual, Business, Get Well Soon, New Baby, Graduation, Retirement, Mother's Day, Father's Day, Valentine's Day, Easter, Christmas, New Year, Halloween, Diwali, Holi, Ramadan, Eid, or any special moment—you'll find the perfect template to match.</p>

								
								<p>Pick a template, personalize it with your own message, and let your creativity shine. Designing greeting cards has never been this fun, fast, and stress-free!</p>
								<ul>
									<li><b>Easy for everyone:</b> Perfect for kids, parents, teachers, friends, and professionals.</li>
									<li><b>Flexible & fast:</b> Customize cards for any occasion in minutes.</li>
									<li><b>Share your wishes:</b> Download, print, or send your card to make someone's day special.</li>
								</ul>
							</div>
						</div>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</div>
@endsection

@push('page_scripts')
@vite('resources/js/tools/cards.js')
@endpush
