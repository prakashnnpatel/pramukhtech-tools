<div class="container mt-4">
	{{-- Search & Filter Section --}}
	<div class="calculator-main">
		<div class="row">
			<div class="col-lg-12 mb-4">
				<div class="calculator-card">
					<div class="card-header">
						<h3>🎉 Find your perfect match</h3>
						{{--<p class="calculator-subtitle">Browse all available tools in one place.</p>--}}
					</div>
					<div class="card-body">
						<form method="GET" action="javascript:void(0);" id="cardSearchFrm" name="cardSearchFrm">
							<div class="row g-3 align-items-end">
								<div class="col-12 col-lg-10">
									<label for="search" class="form-label">Search</label>
									<input type="text" class="form-control" id="search" name="search" value="{{$param['search']??''}}" placeholder="Browse the best cards for special moments." />
								</div>								
								<div class="col-12 col-lg-2 text-center text-lg-start">
									<button type="button" class="invoice-action-btn mt-2 mt-lg-4 tool-search-btn" id="cardSearchBtn">
										<i class="fas fa-search"></i> Search
									</button>
								</div>
							</div>
							<hr/>
							{{-- Display Category buttons --}}
							<div class="row">
								<div class="col-lg-12">
									<input type="hidden" id="category" name="category" value="@if(!empty($category)){{$category}}@endif"/>
									<div class="d-flex flex-wrap gap-2 category-chip-wrap">
									<a href="{{ route('cards') }}" type="button" class="@if(!empty($category)) invoice-defaul-btn @else invoice-action-btn  @endif" title="Explore All Free Tools Online | Easy to Use" style="padding: 7px 18px;">
										All
									</a>
									@foreach(config('constants.card_category') as $cat_key=>$category_val)
										<a href="{{ route('cards',$category_val) }}" type="button" class="@if(!empty($category) && $category == $category_val) invoice-action-btn @else invoice-defaul-btn @endif" title="Explore All {{$category_val}} Cards Online | Free & Easy to Use" style="padding: 7px 20px;">
											{{$category_val}}
										</a>
									@endforeach
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>          
		</div>
	</div>
	<div class="row" id="card-templates">
	@if($cards->total() > 0)
		<div class="col-md-12 mb-3">
			<h4 style="color:#667eea;font-weight: bold;padding: 0px 0px 10px 10px;">{{$cards->total()}} Cards Found
			</h4> 
			<p>Create personalized greeting cards for every special moment.</p>                  
		</div>
		@foreach($cards as $idx => $card)
			<div class="col-md-4 mb-3">
				<div class="calculator-card card card-template" data-card-id="{{ $card->slug }}" title="Click to use this template">
					<div class="card-preview-container">
						<a href="{{route('greeting-cards.show',$card->slug)}}" title="Use This Template">
							<img src="{{$card->thumbnail}}" style="display: inline-block; width: 100%; cursor:pointer;"/>
						</a>
					</div>
					{{--
					<div class="text-center m-2">
						<h6 class="card-title">
							<a href="{{route('greeting-cards.show',$card->slug)}}" title="Use This Template" style="color:#667eea;">{{ $card->title }}</a>
						</h6>
						<a href="{{route('greeting-cards.show',$card->slug)}}" class="invoice-action-btn tool-cta-btn" title="Try Now">
							Edit Now <i class="fas fa-arrow-right ms-1"></i>
						</a>
					</div>
					--}}
				</div>
			</div>
		@endforeach
		<div class="col-lg-12 d-flex justify-content-center">
			{{ $cards->onEachSide(1)->links('pagination.centered') }}
		</div>
	@else
		<div class="col-12">
			<div class="alert alert-info">No card templates found. Please refine your search criteria.</div>
		</div>
	@endif
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