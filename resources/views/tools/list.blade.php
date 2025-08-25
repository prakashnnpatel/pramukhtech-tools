@extends('layouts.app')

@section('content')
    <div class="fd-calculator-container">
        <div class="calculator-main">
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <div class="calculator-card">
                        <div class="card-header">
                            <h3><i class="fas fa-search"></i> Search & Explore Free Online Tools</h3>
                            {{--<p class="calculator-subtitle">Browse all available tools in one place.</p>--}}
                        </div>
                        <div class="card-body">
                            <form method="GET" action="javascript:void(0);" id="toolSearchFrm" name="toolSearchFrm">
                                <div class="row g-3 align-items-end">
                                    <div class="col-12 col-lg-10">
                                        <label for="search" class="form-label">Search</label>
                                        <input type="text" class="form-control" id="search" name="search" value="{{$param['search']??''}}" placeholder="Browse all available tools in one place." />
                                    </div>
									{{--
                                    <div class="col-lg-3">
                                        <label for="category" class="form-label">Categories</label>
                                        <select id="category" name="category" class="form-select">
                                            <option value="" selected>All</option>
                                            @foreach(config('constants.tools_category') as $cat_key=>$category_val)
                                                <option value="{{$category_val}}" @if(!empty($category) && $category == $category_val) selected @endif>{{$category_val}}</option>
                                            @endforeach
                                        </select>
                                    </div>
									--}}
                                    <div class="col-12 col-lg-2">
                                        <button type="button" class="invoice-action-btn w-100 mt-2 mt-lg-4" id="toolSearchBtn">
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
										<a href="{{ route('tools') }}" type="button" class="@if(!empty($category)) invoice-defaul-btn @else invoice-action-btn  @endif" title="Explore All Free Tools Online | Easy to Use" style="padding: 7px 18px;">
											All Tools
										</a>
                                        @foreach(config('constants.tools_category') as $cat_key=>$category_val)
											<a href="{{ route('tools',$category_val) }}" type="button" class="@if(!empty($category) && $category == $category_val) invoice-action-btn @else invoice-defaul-btn @endif" title="Explore All {{$category_val}} Tools Online | Free & Easy to Use" style="padding: 7px 20px;">
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

        <div class="calculator-main">
            @if($tools->total() > 0)
            <div class="row mb-4">
                <div class="col-lg-12">
                    <h4 style="color:#667eea;font-weight: bold;padding: 0px 0px 10px 10px;">{{$tools->total()}} Tools Found
                    @if(!empty($category))
                        in {{$category}} category
                    @endif
                    </h4>                   
                </div>
                @foreach($tools as $idx => $tool)
                    @php
                        $isOdd = ($idx % 2) === 0; // 1st, 3rd, 5th... entries
                    @endphp
                    <div class="col-12 col-md-6 mb-4">
                        <div class="calculator-card h-100">
                            <div class="card-header d-flex align-items-center gap-2">
                                <i class="{{ $tool->icon }}"></i>
                                <h3 class="m-0">{{ $tool->title }}</h3>
                            </div>
                            <div class="card-body" style="padding:20px;">
                                <div class="row align-items-center g-3">
                                    <div class="col-12 col-sm-5 {{ $isOdd ? 'order-1' : 'order-2' }} text-center">
                                        <img src="/images/tools/{{$tool->image}}" alt="{{ $tool->title }}" style="max-height:215px;" class="img-fluid tool-list-thumb">
                                    </div>
                                    <div class="col-12 col-sm-7 {{ $isOdd ? 'order-2' : 'order-1' }} d-flex flex-column">
                                        <p class="mb-3">{!! \Illuminate\Support\Str::limit(strip_tags($tool->description), 200, '...') !!}</p>
                                        <div class="mt-auto">
                                            <a href="{{ route('toollist', $tool->slug) }}" class="invoice-action-btn tool-cta-btn" title="Open {{ $tool->title }}">
                                                Try Now <i class="fas fa-arrow-right ms-1"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-lg-12 d-flex justify-content-center">
                    {{ $tools->onEachSide(1)->links('pagination.centered') }}
                </div>
            </div>
            @else
            <div class="row mb-4">
                <div class="col-lg-12">
                    <div class="calculator-card h-100">
                        <div class="no-tools text-center p-4">
                            <h4>No tools found for your search criteria.</h4>
                            <p>Please try different keywords or categories.</p>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
@endsection

@push('page_scripts')
    @vite("resources/js/tools/search.js")
@endpush


