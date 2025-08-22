@extends('layouts.app')

@section('content')
    <div class="fd-calculator-container">
        <div class="calculator-header">
            <div class="header-content">
                <div class="header-icon">
                    <i class="fas fa-toolbox"></i>
                </div>
                <div class="header-text">
                    <h1 class="calculator-title">Tool List</h1>
                    @if(!empty($category))
                        <p class="calculator-subtitle text-capitalize">Showing {{ $category }} tools</p>
                    @else
                        <p class="calculator-subtitle">Browse all available tools in one place.</p>
                    @endif
                </div>
            </div>
        </div>

        <div class="calculator-main">
            @foreach(array_chunk($tools, 2) as $pairIdx => $pair)
                <div class="row mb-4">
                    @foreach($pair as $idx => $tool)
                        @php
                            $globalIndex = $pairIdx * 2 + $idx; // 0-based
                            $isOdd = ($globalIndex % 2) === 0; // 1st, 3rd, 5th... entries
                        @endphp
                        <div class="col-lg-6 col-md-6 mb-4">
                            <div class="calculator-card h-100">
                                <div class="card-header d-flex align-items-center gap-2">
                                    <i class="{{ $tool['icon'] }}"></i>
                                    <h3 class="m-0">{{ $tool['title'] }}</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row align-items-center g-3">
                                        <div class="col-5 {{ $isOdd ? 'order-1' : 'order-2' }} text-center">
                                            <img src="/images/tools/{{ $tool['key'] }}.png" alt="{{ $tool['title'] }}" style="max-height:100px;" class="img-fluid">
                                        </div>
                                        <div class="col-7 {{ $isOdd ? 'order-2' : 'order-1' }} d-flex flex-column">
                                            <p class="mb-3">{{ $tool['desc'] }}</p>
                                            <div class="mt-auto">
                                                <a href="{{ route('toollist', $tool['key']) }}" class="invoice-action-btn" title="Open {{ $tool['title'] }}">
                                                    Open <i class="fas fa-arrow-right ms-1"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @if(count($pair) === 1)
                        <div class="col-lg-6 col-md-6 mb-4"></div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
@endsection


