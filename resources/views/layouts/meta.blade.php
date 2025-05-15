<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="author" content="{{ config('app.name') }}">
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{url()->current()}}" />
<meta property="og:site_name" content="{{ config('app.name') }}" />
<meta property="og:image" content="{{Request::root()}}/images/logo.png" />
<meta property="og:title" content="{{ config('app.name') }}" />
<meta property="og:description" content="" />
@if(config('app.env') == 'production')
	<meta name="robots" content="index, follow" />
@else
	<meta name="robots" content="noindex, nofollow" />
@endif

@if(request()->segment(1) !== NULL)
	@switch(request()->segment(1))
		@case('sip-calculator')
			<meta name="description" content="" />
		@break

        @case('sip-calculator')
			<meta name="description" content="" />
		@break
	@endswitch
@else
    <meta name="description" content=""/>
@endif