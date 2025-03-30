@extends('app')
@push('styles')
    <link rel="stylesheet" href="{{ asset('about_us.css') }}">
    <link rel="stylesheet" href="{{ asset('nicepage.css') }}">
@endpush

@push('scripts')
    <script type="text/javascript" src="{{ asset('jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('nicepage.js') }}"></script>
@endpush
@section('content')
    <section class="u-clearfix u-palette-1-light-3 u-section-1" id="carousel_8fae">
        <div class="u-clearfix u-sheet u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
            <div class="custom-expanded u-palette-1-light-2 u-shape u-shape-rectangle u-shape-1"
                 data-animation-name="customAnimationIn" data-animation-duration="1500"
                 data-animation-delay="700"></div>
            <div class="custom-expanded u-palette-1-light-2 u-shape u-shape-rectangle u-shape-2"
                 data-animation-name="customAnimationIn" data-animation-duration="1500"
                 data-animation-delay="500"></div>
            <img src="storage/about_us/{{$aboutUs['first_main_image']}}" alt=""
                 class="u-image u-image-default u-image-1" data-image-width="1500" data-image-height="1000"
                 data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="0">
            <div class="u-container-align-left u-container-style u-expanded-width-xs u-group u-white u-group-1"
                 data-animation-name="flipIn" data-animation-duration="1500" data-animation-delay="800"
                 data-animation-direction="X">
                <div class="u-container-layout u-valign-middle u-container-layout-1">
                    <h2 class="u-align-left u-text u-text-1">About Us<br>
                    </h2>
                    <p class="u-align-left u-text u-text-2" data-animation-name="" data-animation-duration="0"
                       data-animation-delay="0" data-animation-direction=""> {{$aboutUs['first_main_text']}}</p>
                    <a href="#"
                       class="u-active-palette-5-dark-3 u-align-left u-border-none u-btn u-btn-round u-button-style u-hover-palette-5-dark-3 u-palette-1-base u-radius-2 u-text-active-white u-text-hover-white u-btn-2">Learn
                        more </a>
                </div>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-container-align-center-lg u-container-align-center-xl u-palette-1-light-3 u-section-2"
             id="sec-df17">
        <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-xl u-sheet-1">
            <div
                class="u-container-align-left u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-shape-rectangle u-group-1"
                data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="0">
                <div class="u-container-layout u-valign-middle u-container-layout-1">
                    <h2 class="u-align-left u-text u-text-1"> Why Choose us?</h2>
                    <p class="u-align-left u-text u-text-default u-text-2"> {{$aboutUs['reasons_main_text']}}</p>
                    <a href="#"
                       class="u-active-palette-5-dark-3 u-align-left u-border-none u-btn u-btn-round u-button-style u-hover-palette-5-dark-3 u-palette-1-base u-radius-2 u-text-active-white u-text-hover-white u-btn-1">Learn
                        more </a>
                </div>
            </div>
            <div class="u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    <div
                        class="u-container-align-left u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-1"
                        data-href="#" data-animation-name="customAnimationIn" data-animation-duration="1500">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
                            <h5 class="u-align-left u-text u-text-default u-text-3"> {{$aboutUs['reason_title_1']}}</h5>
                            <p class="u-align-left u-text u-text-default u-text-4"> {{$aboutUs['reason_text_1']}}</p>
                        </div>
                    </div>
                    <div
                        class="u-container-align-left u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-2"
                        data-href="#" data-animation-direction="Up" data-animation-name="customAnimationIn"
                        data-animation-duration="1500" data-animation-delay="250">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                            <h5 class="u-align-left u-text u-text-default u-text-5"> {{$aboutUs['reason_title_2']}}</h5>
                            <p class="u-align-left u-text u-text-default u-text-6">{{$aboutUs['reason_text_2']}}</p>
                        </div>
                    </div>
                    <div
                        class="u-container-align-left u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-3"
                        data-href="#" data-animation-direction="Up" data-animation-name="customAnimationIn"
                        data-animation-duration="1500" data-animation-delay="500">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4">
                            <h5 class="u-align-left u-text u-text-default u-text-7"> {{$aboutUs['reason_title_3']}}<br>
                            </h5>
                            <p class="u-align-left u-text u-text-default u-text-8"> {{$aboutUs['reason_text_3']}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-align-center u-clearfix u-container-align-center u-white u-section-3" id="carousel_76ce">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <div class="data-layout-selected u-clearfix u-expanded-width u-gutter-26 u-layout-wrap u-layout-wrap-1">
                <div class="u-layout" style="">
                    <div class="u-layout-row" style="">
                        <div
                            class="u-align-center u-container-align-center u-container-style u-layout-cell u-left-cell u-palette-1-light-3 u-size-30-lg u-size-30-xl u-size-60-md u-size-60-sm u-size-60-xs u-size-xs-60 u-layout-cell-1"
                            src="" data-animation-name="customAnimationIn" data-animation-duration="1500"
                            data-animation-delay="500">
                            <div class="u-container-layout u-valign-middle u-container-layout-1">
                                <h3 class="u-align-center u-text u-text-default u-text-1">Our Clients Say</h3>
                                <div id="carousel-4870" data-interval="5000" data-u-ride="carousel"
                                     class="u-carousel u-expanded-width u-slider u-slider-1">
                                    <ol class="u-absolute-hcenter u-carousel-indicators u-carousel-indicators-1">
                                        @foreach($aboutUs['reviews'] as $index=>$review)
                                            @if($index==0)
                                                <li data-u-target="#carousel-4870"
                                                    class="u-active u-active-palette-1-base u-grey-30 u-hover-palette-1-base u-shape-circle"
                                                    data-u-slide-to="{{$index}}"
                                                    style="width: 10px; height: 10px;"></li>
                                            @else
                                                <li data-u-target="#carousel-4870"
                                                    class="u-active-palette-1-base u-grey-30 u-hover-palette-1-base u-shape-circle"
                                                    data-u-slide-to="{{$index}}"
                                                    style="width: 10px; height: 10px;"></li>
                                            @endif

                                        @endforeach
                                    </ol>
                                    <div class="u-carousel-inner" role="listbox">
                                        @foreach($aboutUs['reviews'] as $index=>$review)
                                            @if($index==0)
                                                <div
                                                    class="u-active u-align-center u-carousel-item u-container-align-center u-container-style u-slide">
                                                    <div
                                                        class="u-container-layout u-valign-top u-container-layout-{{$index+2}}">
                                                        <p class="u-align-center u-text u-text-{{($index+1)*2}}">{{$review['text']}}</p>
                                                        <h5 class="u-align-center u-text u-text-default u-text-3">{{$review['full_name']}}</h5>
                                                    </div>
                                                </div>
                                            @else
                                                <div
                                                    class="u-align-center u-carousel-item u-container-align-center u-container-style u-slide">
                                                    <div
                                                        class="u-container-layout u-valign-top u-container-layout-{{$index+2}}">
                                                        <p class="u-align-center u-text u-text-{{($index+1)*2}}">{{$review['text']}}</p>
                                                        <h5 class="u-align-center u-text u-text-default u-text-3">{{$review['full_name']}}</h5>
                                                    </div>
                                                </div>
                                            @endif

                                        @endforeach
                                    </div>
                                    <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-icon-rectangle u-spacing-10 u-text-hover-palette-1-base u-carousel-control-1"
                                       href="#carousel-4870" role="button" data-u-slide="prev">
                      <span aria-hidden="true">
                        <svg viewBox="0 0 31.494 31.494"><path d="M10.273,5.009c0.444-0.444,1.143-0.444,1.587,0c0.429,0.429,0.429,1.143,0,1.571l-8.047,8.047h26.554
	c0.619,0,1.127,0.492,1.127,1.111c0,0.619-0.508,1.127-1.127,1.127H3.813l8.047,8.032c0.429,0.444,0.429,1.159,0,1.587
	c-0.444,0.444-1.143,0.444-1.587,0l-9.952-9.952c-0.429-0.429-0.429-1.143,0-1.571L10.273,5.009z"></path></svg>
                      </span>
                                        <span class="sr-only">
                        <svg viewBox="0 0 31.494 31.494"><path d="M10.273,5.009c0.444-0.444,1.143-0.444,1.587,0c0.429,0.429,0.429,1.143,0,1.571l-8.047,8.047h26.554
	c0.619,0,1.127,0.492,1.127,1.111c0,0.619-0.508,1.127-1.127,1.127H3.813l8.047,8.032c0.429,0.444,0.429,1.159,0,1.587
	c-0.444,0.444-1.143,0.444-1.587,0l-9.952-9.952c-0.429-0.429-0.429-1.143,0-1.571L10.273,5.009z"></path></svg>
                      </span>
                                    </a>
                                    <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-icon-rectangle u-spacing-10 u-text-hover-palette-1-base u-carousel-control-2"
                                       href="#carousel-4870" role="button" data-u-slide="next">
                      <span aria-hidden="true">
                        <svg viewBox="0 0 31.49 31.49"><path d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111
	C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587
	c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"></path></svg>
                      </span>
                                        <span class="sr-only">
                        <svg viewBox="0 0 31.49 31.49"><path d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111
	C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587
	c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"></path></svg>
                      </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div
                            class="u-align-center u-container-align-center u-container-style u-image u-layout-cell u-right-cell u-size-30-lg u-size-30-xl u-size-60-md u-size-60-sm u-size-60-xs u-size-xs-60 u-image-1"
                            style="background-image: url('storage/about_us/{{$aboutUs['reviews_side_image']}}');"
                            src="" data-animation-name="customAnimationIn" data-animation-duration="1500"
                            data-animation-delay="0" data-image-width="638" data-image-height="780">
                            <div class="u-container-layout u-valign-middle u-container-layout-5" src=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-white u-section-4" id="carousel_bf84">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-palette-1-light-2 u-shape u-shape-rectangle u-shape-1" data-animation-name="customAnimationIn"
                 data-animation-duration="1500" data-animation-delay="500"></div>
            <img src="storage/about_us/{{$aboutUs['our_history_image']}}" alt="" class="u-align-left u-image u-image-1"
                 data-image-width="1380" data-image-height="920" data-animation-name="customAnimationIn"
                 data-animation-duration="1500" data-animation-delay="500">
            <div class="custom-expanded data-layout-selected u-clearfix u-layout-wrap u-layout-wrap-1"
                 data-animation-delay="700">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div
                            class="u-container-align-left u-container-style u-layout-cell u-size-30-lg u-size-30-xl u-size-60-md u-size-60-sm u-size-60-xs u-white u-layout-cell-1"
                            data-animation-name="customAnimationIn" data-animation-duration="1500"
                            data-animation-delay="700">
                            <div class="u-container-layout u-valign-middle u-container-layout-1">
                                <h2 class="u-align-left u-text u-text-1">Our History</h2>
                                <p class="u-align-left u-text u-text-default u-text-2"> {{$aboutUs['our_history_text']}}</p>
                                <a href="#"
                                   class="u-active-palette-5-dark-3 u-align-left u-border-none u-btn u-btn-round u-button-style u-hover-palette-5-dark-3 u-palette-1-base u-radius-2 u-text-active-white u-text-hover-white u-btn-1">Learn
                                    more </a>
                            </div>
                        </div>
                        <div
                            class="u-container-align-left u-container-style u-layout-cell u-size-30-lg u-size-30-xl u-size-60-md u-size-60-sm u-size-60-xs u-white u-layout-cell-2"
                            data-animation-name="customAnimationIn" data-animation-duration="1500"
                            data-animation-delay="0">
                            <div class="u-container-layout u-valign-middle u-container-layout-2">
                                <ul class="u-align-left u-custom-list u-spacing-10 u-text u-text-3">
                                    <li>
                                        <div class="u-list-icon u-text-black" style="padding-top:24px">
                                            <svg class="u-svg-content" viewBox="0 0 512 512" id="svg-311a">
                                                <path
                                                    d="m433.1 67.1-231.8 231.9c-6.2 6.2-16.4 6.2-22.6 0l-99.8-99.8-78.9 78.8 150.5 150.5c10.5 10.5 24.6 16.3 39.4 16.3 14.8 0 29-5.9 39.4-16.3l282.7-282.5z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </div>
                                        {{$aboutUs['our_history_title_mark_1']}}
                                    </li>
                                    <li>
                                        <div class="u-list-icon u-text-black" style="padding-top:24px">
                                            <svg class="u-svg-content" viewBox="0 0 512 512" id="svg-311a">
                                                <path
                                                    d="m433.1 67.1-231.8 231.9c-6.2 6.2-16.4 6.2-22.6 0l-99.8-99.8-78.9 78.8 150.5 150.5c10.5 10.5 24.6 16.3 39.4 16.3 14.8 0 29-5.9 39.4-16.3l282.7-282.5z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </div>
                                        {{$aboutUs['our_history_title_mark_2']}}
                                    </li>
                                    <li>
                                        <div class="u-list-icon u-text-black" style="padding-top:24px">
                                            <svg class="u-svg-content" viewBox="0 0 512 512" id="svg-311a">
                                                <path
                                                    d="m433.1 67.1-231.8 231.9c-6.2 6.2-16.4 6.2-22.6 0l-99.8-99.8-78.9 78.8 150.5 150.5c10.5 10.5 24.6 16.3 39.4 16.3 14.8 0 29-5.9 39.4-16.3l282.7-282.5z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </div>
                                        {{$aboutUs['our_history_title_mark_3']}}
                                    </li>
                                    <li>
                                        <div class="u-list-icon u-text-black" style="padding-top:24px">
                                            <svg class="u-svg-content" viewBox="0 0 512 512" id="svg-311a">
                                                <path
                                                    d="m433.1 67.1-231.8 231.9c-6.2 6.2-16.4 6.2-22.6 0l-99.8-99.8-78.9 78.8 150.5 150.5c10.5 10.5 24.6 16.3 39.4 16.3 14.8 0 29-5.9 39.4-16.3l282.7-282.5z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </div>
                                        {{$aboutUs['our_history_title_mark_4']}}<br>
                                    </li>
                                    <li>
                                        <div class="u-list-icon u-text-black" style="padding-top:24px">
                                            <svg class="u-svg-content" viewBox="0 0 512 512" id="svg-311a">
                                                <path
                                                    d="m433.1 67.1-231.8 231.9c-6.2 6.2-16.4 6.2-22.6 0l-99.8-99.8-78.9 78.8 150.5 150.5c10.5 10.5 24.6 16.3 39.4 16.3 14.8 0 29-5.9 39.4-16.3l282.7-282.5z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </div>
                                        {{$aboutUs['our_history_title_mark_5']}}<br>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-container-align-center u-palette-1-light-3 u-section-5" id="carousel_97fb">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <div class="data-layout-selected u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div
                            class="u-container-align-center-md u-container-align-center-sm u-container-align-center-xs u-container-align-left-lg u-container-align-left-xl u-container-style u-layout-cell u-size-40-lg u-size-40-xl u-size-60-md u-size-60-sm u-size-60-xs u-white u-layout-cell-1"
                            data-animation-name="customAnimationIn" data-animation-duration="1500"
                            data-animation-delay="500">
                            <div class="u-container-layout u-valign-middle u-container-layout-1">
                                <h3 class="u-align-center-md u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-xl u-text u-text-default u-text-1">
                                    Certified Repair Shop</h3>
                                <p class="u-align-center-md u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-xl u-text u-text-default u-text-2">
                                    We are certified to make your vehicle periodic inspection</p>
                            </div>
                        </div>
                        <div
                            class="u-container-align-center u-container-style u-layout-cell u-size-20-lg u-size-20-xl u-size-60-md u-size-60-sm u-size-60-xs u-white u-layout-cell-2"
                            data-animation-name="customAnimationIn" data-animation-duration="1500"
                            data-animation-delay="500">
                            <div class="u-container-layout u-valign-middle u-container-layout-2">
                                <a href="#"
                                   class="u-active-palette-5-dark-3 u-align-center u-border-none u-btn u-btn-round u-button-style u-hover-palette-5-dark-3 u-palette-1-base u-radius-2 u-text-active-white u-text-hover-white u-btn-1">appointment </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-align-center u-clearfix u-container-align-center u-section-6" id="carousel_3f98">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <h2 class="u-align-center u-text u-text-default u-text-1"> Team members</h2>
            <div class="u-expanded-width u-layout-horizontal u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    @foreach($aboutUs['employees'] as $employee)
                        <div
                            class="u-container-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-1"
                            data-animation-name="customAnimationIn" data-animation-duration="1500"
                            data-animation-delay="500">
                            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                                <img alt="" class="u-expanded-width u-image u-image-default u-image-1"
                                     data-image-width="638" data-image-height="780"
                                     src="storage/main/{{$employee['image']}}"
                                     data-animation-name="customAnimationIn" data-animation-duration="1250"
                                     data-animation-delay="250">
                                <h4 class="u-align-center u-text u-text-default u-text-2" data-animation-name=""
                                    data-animation-duration="0" data-animation-delay="0"
                                    data-animation-direction="">{{$employee['full_name']}}</h4>
                                <p class="u-align-center u-large-text u-text u-text-default u-text-variant u-text-3">
                                    {{$employee['position']}}</p>
                            </div>
                        </div>
                    @endforeach

                </div>
                <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-prev u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-1"
                   href="#" role="button">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
                    <span class="sr-only">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
                </a>
                <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-next u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-2"
                   href="#" role="button">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
                    <span class="sr-only">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
                </a>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-container-align-center u-palette-1-light-3 u-section-7" id="carousel_156e">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <h2 class="u-align-center u-text u-text-default u-text-1" data-animation-name="customAnimationIn"
                data-animation-duration="1500" data-animation-delay="0"> What Makes Us Special</h2>
            <p class="u-align-center u-text u-text-2" data-animation-name="customAnimationIn"
               data-animation-duration="1500" data-animation-delay="0"> Sample text. Click to select the Text Element.&nbsp;​Duis
                aute irure dolor in reprehenderit.</p>
            <div class="u-expanded-width u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    <div
                        class="u-container-align-center u-container-style u-list-item u-repeater-item u-white u-list-item-1"
                        data-animation-name="flipIn" data-animation-duration="1500" data-animation-delay="500"
                        data-animation-direction="X">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                            <h5 class="u-align-center u-text u-text-palette-1-base u-text-3"
                                data-animation-name="counter" data-animation-event="scroll"
                                data-animation-duration="3000">25</h5>
                            <p class="u-align-center u-text u-text-4"> Years of experience</p>
                        </div>
                    </div>
                    <div
                        class="u-container-align-center u-container-style u-list-item u-repeater-item u-white u-list-item-2"
                        data-animation-name="flipIn" data-animation-duration="1500" data-animation-direction="X"
                        data-animation-delay="500">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
                            <h5 class="u-align-center u-text u-text-palette-1-base u-text-5"
                                data-animation-name="counter" data-animation-event="scroll"
                                data-animation-duration="3000">18</h5>
                            <p class="u-align-center u-text u-text-6"> Amazing employees</p>
                        </div>
                    </div>
                    <div
                        class="u-container-align-center u-container-style u-list-item u-repeater-item u-white u-list-item-3"
                        data-animation-name="flipIn" data-animation-duration="1500" data-animation-direction="X"
                        data-animation-delay="500">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                            <h5 class="u-align-center u-text u-text-palette-1-base u-text-7"
                                data-animation-name="counter" data-animation-event="scroll"
                                data-animation-duration="3000">10k</h5>
                            <p class="u-align-center u-text u-text-8"> Hours of maintenance</p>
                        </div>
                    </div>
                    <div
                        class="u-container-align-center u-container-style u-list-item u-repeater-item u-white u-list-item-4"
                        data-animation-name="flipIn" data-animation-duration="1500" data-animation-direction="X"
                        data-animation-delay="500">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4">
                            <h5 class="u-align-center u-text u-text-palette-1-base u-text-9"
                                data-animation-name="counter" data-animation-event="scroll"
                                data-animation-duration="3000">2k</h5>
                            <p class="u-align-center u-text u-text-10"> Projects done</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-section-8" id="carousel_9629">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-container-style u-layout-cell u-size-20 u-layout-cell-1">
                            <div class="u-container-layout u-container-layout-1">
                                <h2 class="u-text u-text-default u-text-1">Write Us</h2>
                                <p class="u-align-left u-text u-text-2">Images from <a href="https://www.freepik.com"
                                                                                       class="u-active-none u-border-1 u-border-active-palette-1-base u-border-black u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-link u-button-style u-hover-none u-none u-radius-0 u-text-body-color u-top-left-radius-0 u-top-right-radius-0 u-btn-1"
                                                                                       target="_blank">Freepik</a>
                                </p>
                            </div>
                        </div>
                        <div class="u-container-style u-layout-cell u-size-40 u-layout-cell-2">
                            <div class="u-container-layout u-container-layout-2">
                                <div class="u-form u-form-1">
                                    <form method="POST" action="/write-message"
                                          class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" name="form"
                                          style="padding: 10px;">
                                        @csrf
                                        <div class="u-form-group u-form-name">
                                            <label for="name-175e" class="u-label">Імʼя</label>
                                            <input type="text" placeholder="Введіть своє імʼя" id="name-175e" name="name"
                                                   class="u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle"
                                                   required="">
                                            @error('name')
                                            <span style="color:red"> Це поле обовʼязкове </span>
                                            @enderror
                                        </div>
                                        <div class="u-form-email u-form-group">
                                            <label for="email-175e" class="u-label">Електронна пошта</label>
                                            <input type="email" placeholder="Введіть свою електронну пошту"
                                                   id="email-175e" name="email"
                                                   class="u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle"
                                                   required="">
                                            @error('email')
                                            <span style="color:red"> Це поле обовʼязкове </span>
                                            @enderror
                                        </div>
                                        <div class="u-form-group u-form-message">
                                            <label for="message-175e" class="u-label">Message</label>
                                            <textarea placeholder="Введіть своє повідомлення" rows="4" cols="50"
                                                      id="message-175e" name="message"
                                                      class="u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle"
                                                      required=""></textarea>
                                            @error('message')
                                            <span style="color:red"> Це поле обовʼязкове </span>
                                            @enderror
                                        </div>
                                        <div class="u-align-right u-form-group u-form-submit">
                                            <a href="#" class="u-border-none u-btn u-btn-submit u-button-style u-btn-2">Відправити
                                                повідомлення</a>
                                            <input type="submit" value="submit" class="u-form-control-hidden">
                                        </div>
                                        <div class="u-form-send-message u-form-send-success">Дякуємо! Ваше повідомлення
                                            відправлене.
                                        </div>
                                        <div class="u-form-send-error u-form-send-message">Відправлення не вдалося.
                                            Будь-ласка, виправте помилки і спробуйте ще раз.
                                        </div>
                                        <input type="hidden" value="" name="recaptchaResponse">
                                        <input type="hidden" name="formServices" value="">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-section-9" id="carousel_ffc8">
        <div class="u-expanded u-grey-10 u-map">
            <div class="embed-responsive">
                <iframe class="embed-responsive-item" src="//maps.google.com/maps?output=embed&amp;q=Manhattan&amp;t=m"
                        data-map="JTdCJTIyYWRkcmVzcyUyMiUzQSUyMk1hbmhhdHRhbiUyMiUyQyUyMnpvb20lMjIlM0FudWxsJTJDJTIydHlwZUlkJTIyJTNBJTIycm9hZCUyMiUyQyUyMmxhbmclMjIlM0FudWxsJTJDJTIyYXBpS2V5JTIyJTNBbnVsbCUyQyUyMm1hcmtlcnMlMjIlM0ElNUIlNUQlN0Q="></iframe>
            </div>
        </div>
    </section>
@endsection
