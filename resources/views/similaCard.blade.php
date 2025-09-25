@if(!empty($slidertype) && $slidertype == "H")
<div id="swiper-horizontal" class="info-content swiper" style="padding: 0px 0px;">
        <div class="swiper-wrapper">
            @foreach($similarTools as $key => $tooInfo)
                <a href="{{route('greeting-cards.show', $tooInfo->slug)}}" class="swiper-slide" title="{{$tooInfo['title']}}">
                    <div class="info-item" style="background: #fff;  box-shadow: 0 2px 5px rgb(0 0 0 / 10%);">
                        <div class="info-icon mr-5"">
                            <img src="{{$tooInfo['thumbnail']}}" style="width:110px; height:89px; border-radius: 15px 0 0 15px;"></i>
                        </div>
                        <div class="info-text">
                            <h5 style="font-size: 17px;">{{$tooInfo['title']}}</h5>
                            <span class="tool-link" style="pointer-events:none;">
                                Try Now <i class="fas fa-arrow-right"></i>
                            </span>
                        </div>
                    </div>
                </a> 
            @endforeach                                                       
        </div>                                        
    </div>
@else
    {{-- Suggestion List: Vertical Slider --}}
    <div class="info-card" style="height: auto;">
        <div class="info-header">
            <h4><i class="fas fa-info-circle"></i> You may also like</h4>
        </div>
        <div id="swiper-vertical" class="info-content swiper" style="height: 500px; padding: 25px 30px;">
            <div class="swiper-wrapper" style="padding-bottom: 20px;">
                @foreach($similarTools as $key => $tooInfo)
                    <a href="{{route('greeting-cards.show', $tooInfo->slug)}}" class="swiper-slide" title="{{$tooInfo['title']}}">
                        <div class="info-item">
                            <div class="info-icon">
                                <img src="{{$tooInfo['thumbnail']}}" style="width:110px; height:89px; border-radius: 15px 0 0 15px;"></i>
                            </div>
                            <div class="info-text ml-4">
                                <h5 style="font-size: 17px;">{{$tooInfo['title']}}</h5>
                                <span class="tool-link" style="pointer-events:none;">
                                    Try Now <i class="fas fa-arrow-right"></i>
                                </span>
                            </div>
                        </div>
                    </a> 
                @endforeach                                                       
            </div>                                        
        </div>
    </div>
@endif