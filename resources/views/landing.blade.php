@extends('app')
@push('styles')
    <link rel="stylesheet" href="{{ asset('landing.css') }}">
    <link rel="stylesheet" href="{{ asset('nicepage.css') }}">
@endpush

@push('scripts')
    <script type="text/javascript" src="{{ asset('jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('nicepage.js') }}"></script>
@endpush
@section('content')
    <section class="u-clearfix u-palette-1-light-3 u-section-1" id="carousel_8fae">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <div class="custom-expanded u-palette-1-light-2 u-shape u-shape-rectangle u-shape-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="700"></div>
            <div class="u-palette-1-light-2 u-shape u-shape-rectangle u-shape-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500"></div>
            <img src="storage/images/hand-car-mechanic-with-wrench_14.jpg" alt="" class="u-image u-image-default u-image-1" data-image-width="1380" data-image-height="921" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="0">
            <div class="u-container-align-center-xs u-container-align-left-lg u-container-align-left-md u-container-align-left-sm u-container-align-left-xl u-container-style u-expanded-width-sm u-expanded-width-xs u-group u-white u-group-1" data-animation-name="flipIn" data-animation-duration="1500" data-animation-delay="800" data-animation-direction="X">
                <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-container-layout-1">
                    <h2 class="u-align-center-xs u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-text u-text-1"> Highly skilled certified mechanics<br>
                    </h2>
                    <p class="u-align-center-xs u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-text u-text-2" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident </p>
                    <a href="#" class="u-active-palette-5-dark-3 u-align-center-xs u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-border-none u-btn u-btn-round u-button-style u-hover-palette-5-dark-3 u-palette-1-base u-radius-2 u-text-active-white u-text-hover-white u-btn-1"> Need a car inspection?</a>
                </div>
            </div>
        </div>
    </section>
    <section class="u-align-center u-clearfix u-container-align-center u-white u-section-2" id="carousel_76ce">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <div class="data-layout-selected u-clearfix u-expanded-width u-gutter-26 u-layout-wrap u-layout-wrap-1">
                <div class="u-layout" style="">
                    <div class="u-layout-row" style="">
                        <div class="u-align-center u-container-align-center u-container-style u-layout-cell u-left-cell u-palette-1-light-3 u-size-30-lg u-size-30-xl u-size-60-md u-size-60-sm u-size-60-xs u-size-xs-60 u-layout-cell-1" src="" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                            <div class="u-container-layout u-valign-middle u-container-layout-1">
                                <h3 class="u-align-center u-text u-text-default u-text-1">Our Clients Say</h3>
                                <div id="carousel-f7f8" data-interval="5000" data-u-ride="carousel" class="u-carousel u-expanded-width u-slider u-slider-1">
                                    <ol class="u-absolute-hcenter u-carousel-indicators u-carousel-indicators-1">
                                        <li data-u-target="#carousel-f7f8" class="u-active u-active-palette-1-base u-grey-30 u-hover-palette-1-base u-shape-circle" data-u-slide-to="0" style="width: 10px; height: 10px;"></li>
                                        <li data-u-target="#carousel-f7f8" class="u-active-palette-1-base u-grey-30 u-hover-palette-1-base u-shape-circle" data-u-slide-to="1" style="width: 10px; height: 10px;"></li>
                                        <li data-u-target="#carousel-f7f8" class="u-active-palette-1-base u-grey-30 u-hover-palette-1-base u-shape-circle" data-u-slide-to="2" style="width: 10px; height: 10px;"></li>
                                    </ol>
                                    <div class="u-carousel-inner" role="listbox">
                                        <div class="u-active u-align-center u-carousel-item u-container-align-center u-container-style u-slide">
                                            <div class="u-container-layout u-valign-top u-container-layout-2">
                                                <p class="u-align-center u-text u-text-2">"Aenean pulvinar dui ornare, feugiat lorem non, ultrices justo. Mauris efficitur, mauris in auctor euismod, quam elit ultrices urna, eget eleifend arcu risus id metus."</p>
                                                <h5 class="u-align-center u-text u-text-default u-text-3">Marry Larson</h5>
                                            </div>
                                        </div>
                                        <div class="u-align-center u-carousel-item u-container-align-center u-container-style u-slide">
                                            <div class="u-container-layout u-valign-top u-container-layout-3">
                                                <p class="u-align-center u-text u-text-4">"Aenean pulvinar dui ornare, feugiat lorem non, ultrices justo. Mauris efficitur, mauris in auctor euismod, quam elit ultrices urna, eget eleifend arcu risus id metus."</p>
                                                <h5 class="u-align-center u-text u-text-default u-text-5"> Alex Grinfield</h5>
                                            </div>
                                        </div>
                                        <div class="u-align-center u-carousel-item u-container-align-center u-container-style u-slide">
                                            <div class="u-container-layout u-valign-top u-container-layout-4">
                                                <p class="u-align-center u-text u-text-6">"Aenean pulvinar dui ornare, feugiat lorem non, ultrices justo. Mauris efficitur, mauris in auctor euismod, quam elit ultrices urna, eget eleifend arcu risus id metus"</p>
                                                <h5 class="u-align-center u-text u-text-default u-text-7"> Alex Grinfield</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-icon-rectangle u-spacing-10 u-text-hover-palette-1-base u-carousel-control-1" href="#carousel-f7f8" role="button" data-u-slide="prev">
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
                                    <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-icon-rectangle u-spacing-10 u-text-hover-palette-1-base u-carousel-control-2" href="#carousel-f7f8" role="button" data-u-slide="next">
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
                        <div class="u-align-center u-container-align-center u-container-style u-layout-cell u-right-cell u-shape-rectangle u-size-30-lg u-size-30-xl u-size-60-md u-size-60-sm u-size-60-xs u-size-xs-60 u-layout-cell-2" src="" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="0">
                            <div class="u-container-layout u-valign-middle u-container-layout-5" src="">
                                <h3 class="u-align-center u-text u-text-8">About Us</h3>
                                <p class="u-align-center u-large-text u-text u-text-default u-text-variant u-text-9">Sample text. Click to select the Text Element.&nbsp;​Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident</p>
                                <a href="#" class="u-active-palette-5-dark-3 u-align-center u-border-none u-btn u-btn-round u-button-style u-hover-palette-5-dark-3 u-palette-1-base u-radius-2 u-text-active-white u-text-hover-white u-btn-1">Learn more </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-white u-section-3" id="carousel_bf84">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <img src="storage/images/technician-smiling-garage4.jpg" alt="" class="u-align-left u-image u-image-1" data-image-width="1200" data-image-height="800" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
            <img src="storage/images/male-mechanic-working-shop-car_2.jpg" alt="" class="u-align-left u-border-7 u-border-white u-image u-image-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-image-width="1380" data-image-height="920">
            <div class="custom-expanded u-align-left u-container-align-left u-container-style u-group u-palette-1-light-3 u-group-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="750">
                <div class="u-container-layout u-valign-middle u-container-layout-1">
                    <h3 class="u-align-left u-text u-text-1"> Preventive Work</h3>
                    <p class="u-align-left u-text u-text-2"> Sample text. Click to select the Text Element.&nbsp;​Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                    <a href="#" class="u-active-palette-5-dark-3 u-align-center u-border-none u-btn u-btn-round u-button-style u-hover-palette-5-dark-3 u-palette-1-base u-radius-2 u-text-active-white u-text-hover-white u-btn-1">Learn more </a>
                </div>
            </div>
        </div>
    </section>
    <section class="u-align-center u-clearfix u-container-align-center u-palette-1-light-3 u-section-4" id="carousel_535d">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <h2 class="u-align-center u-text u-text-default u-text-1"> Our services include</h2>
            <div class="u-expanded-width u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    <div class="u-align-left u-container-align-left u-container-style u-list-item u-repeater-item u-video-cover u-white">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                            <h3 class="u-align-left u-text u-text-2"> Auto Repair</h3>
                            <p class="u-align-left u-text u-text-3">Sample text. Click to select the Text Element.</p>
                            <span class="u-align-left u-file-icon u-icon u-text-palette-1-base u-icon-1" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><img src="storage/images/2822686-d51604f5.png" alt=""></span>
                        </div>
                    </div>
                    <div class="u-align-left u-container-align-left u-container-style u-list-item u-repeater-item u-video-cover u-white">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
                            <h3 class="u-align-left u-text u-text-4"> Auto Repair</h3>
                            <p class="u-align-left u-text u-text-5">Sample text. Click to select the Text Element.</p>
                            <span class="u-align-left u-file-icon u-icon u-text-palette-1-base u-icon-2" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><img src="storage/images/1743705-6a3eb0b6.png" alt=""></span>
                        </div>
                    </div>
                    <div class="u-align-left u-container-align-left u-container-style u-list-item u-repeater-item u-video-cover u-white">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                            <h3 class="u-align-left u-text u-text-6"> Auto Glass Repair</h3>
                            <p class="u-align-left u-text u-text-7">Sample text. Click to select the Text Element.</p>
                            <span class="u-align-left u-file-icon u-icon u-text-palette-1-base u-icon-3" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><img src="storage/images/16096073-d0fe1288.png" alt=""></span>
                        </div>
                    </div>
                    <div class="u-align-left u-container-align-left u-container-style u-list-item u-repeater-item u-video-cover u-white">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4">
                            <h3 class="u-align-left u-text u-text-8"> Oil Change</h3>
                            <p class="u-align-left u-text u-text-9">Sample text. Click to select the Text Element.</p>
                            <span class="u-align-left u-file-icon u-icon u-text-palette-1-base u-icon-4" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><img src="storage/images/5442963-a212bfbf.png" alt=""></span>
                        </div>
                    </div>
                    <div class="u-align-left u-container-align-left u-container-style u-list-item u-repeater-item u-video-cover u-white">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-5">
                            <h3 class="u-align-left u-text u-text-10"> General repair</h3>
                            <p class="u-align-left u-text u-text-11">Sample text. Click to select the Text Element.</p>
                            <span class="u-align-left u-file-icon u-icon u-text-palette-1-base u-icon-5" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><img src="storage/images/942147-dd80c966.png" alt=""></span>
                        </div>
                    </div>
                    <div class="u-align-left u-container-align-left u-container-style u-list-item u-repeater-item u-video-cover u-white">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-6">
                            <h3 class="u-align-left u-text u-text-12"> Auto Body Work</h3>
                            <p class="u-align-left u-text u-text-13">Sample text. Click to select the Text Element.</p>
                            <span class="u-align-left u-file-icon u-icon u-text-palette-1-base u-icon-6" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><img src="storage/images/12050562-ea0861df.png" alt=""></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-align-center u-clearfix u-container-align-center u-palette-1-light-3 u-section-5" id="carousel_4254">























        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <h2 class="u-align-center u-text u-text-default u-text-1" data-animation-name="flipIn" data-animation-duration="1500" data-animation-delay="500" data-animation-direction="X"> Our Areas Of Expertise</h2>
            <p class="u-align-center u-text u-text-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="250"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <div class="u-expanded-width u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    <div class="u-align-center u-container-align-center u-container-align-center-xs u-container-style u-image u-image-default u-list-item u-repeater-item u-shape-round u-image-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500" data-image-width="1380" data-image-height="918">
                        <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-1">
                            <div class="u-black u-container-align-center u-container-style u-expanded-width u-group u-opacity u-opacity-65 u-group-1">
                                <div class="u-container-layout u-valign-middle u-container-layout-2">
                                    <h6 class="u-align-center u-hover-feature u-text u-text-3"> Filter Change Service</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="u-align-center u-container-align-center u-container-align-center-xs u-container-style u-image u-image-default u-list-item u-repeater-item u-shape-round u-image-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500" data-image-width="1380" data-image-height="920">
                        <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-3">
                            <div class="u-black u-container-style u-expanded-width u-group u-opacity u-opacity-65 u-group-2">
                                <div class="u-container-layout u-valign-middle u-container-layout-4">
                                    <h6 class="u-align-center u-hover-feature u-text u-text-4"> Tire Care </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="u-align-center u-container-align-center u-container-align-center-xs u-container-style u-image u-image-default u-list-item u-repeater-item u-shape-round u-image-3" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500" data-image-width="1380" data-image-height="920">
                        <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-5">
                            <div class="u-black u-container-align-center u-container-style u-expanded-width u-group u-opacity u-opacity-65 u-group-3">
                                <div class="u-container-layout u-valign-middle u-container-layout-6">
                                    <h6 class="u-align-center u-hover-feature u-text u-text-5"> Power Steering</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="u-align-center u-container-align-center u-container-align-center-xs u-container-style u-image u-image-default u-list-item u-repeater-item u-shape-round u-image-4" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="750" data-image-width="1380" data-image-height="920">
                        <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-7">
                            <div class="u-black u-container-align-center u-container-style u-expanded-width u-group u-opacity u-opacity-65 u-group-4">
                                <div class="u-container-layout u-valign-middle u-container-layout-8">
                                    <h6 class="u-align-center u-hover-feature u-text u-text-6"> Suspension Repair</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="u-align-center u-container-align-center u-container-align-center-xs u-container-style u-image u-image-default u-list-item u-repeater-item u-shape-round u-image-5" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="750" data-image-width="1380" data-image-height="920">
                        <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-9">
                            <div class="u-black u-container-style u-expanded-width u-group u-opacity u-opacity-65 u-group-5">
                                <div class="u-container-layout u-valign-middle u-container-layout-10">
                                    <h6 class="u-align-center u-hover-feature u-text u-text-7"> Transmission</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="u-align-center u-container-align-center u-container-align-center-xs u-container-style u-image u-image-default u-list-item u-repeater-item u-shape-round u-image-6" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="750" data-image-width="1380" data-image-height="920">
                        <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-11">
                            <div class="u-black u-container-align-center u-container-style u-expanded-width u-group u-opacity u-opacity-65 u-group-6">
                                <div class="u-container-layout u-valign-middle u-container-layout-12">
                                    <h6 class="u-align-center u-hover-feature u-text u-text-8"> Engine Diagnostics</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>












    </section>
    <section class="u-align-center-lg u-align-center-md u-align-center-xl u-align-left-sm u-align-left-xs u-clearfix u-palette-1-light-3 u-section-6" id="carousel_bdbe" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <div class="data-layout-selected u-clearfix u-expanded-width u-gutter-20 u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-container-style u-layout-cell u-shape-rectangle u-size-30-lg u-size-30-xl u-size-60-md u-size-60-sm u-size-60-xs u-layout-cell-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                            <div class="u-container-layout u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-container-layout-1">
                                <h2 class="u-align-left u-text u-text-1"> Why Choose us?</h2>
                                <p class="u-align-left u-text u-text-default u-text-2"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                                <a href="#" class="u-active-palette-5-dark-3 u-align-center u-border-none u-btn u-btn-round u-button-style u-hover-palette-5-dark-3 u-palette-1-base u-radius-2 u-text-active-white u-text-hover-white u-btn-1">Learn more </a>
                            </div>
                        </div>
                        <div class="u-container-align-center-lg u-container-align-center-xl u-container-align-left-md u-container-align-left-sm u-container-align-left-xs u-container-style u-layout-cell u-shape-rectangle u-size-30-lg u-size-30-xl u-size-60-md u-size-60-sm u-size-60-xs u-layout-cell-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                            <div class="u-container-layout u-valign-middle u-container-layout-2">
                                <div class="u-list u-list-1">
                                    <div class="u-repeater u-repeater-1">
                                        <div class="u-container-align-left u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-1" data-href="#" data-animation-name="customAnimationIn" data-animation-duration="1500">
                                            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                                                <h5 class="u-align-left u-text u-text-default u-text-3"> Modern Workshop</h5>
                                                <p class="u-align-left u-text u-text-default u-text-4"> Sample text. Click to select the Text Element.&nbsp;Nunc placerat pharetra lorem lorem metus.</p>
                                            </div>
                                        </div>
                                        <div class="u-container-align-left u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-2" data-href="#" data-animation-direction="Up" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="250">
                                            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4">
                                                <h5 class="u-align-left u-text u-text-default u-text-5"> Talented Workers</h5>
                                                <p class="u-align-left u-text u-text-default u-text-6">Sample text. Click to select the Text Element.&nbsp;Nunc placerat pharetra lorem lorem metus.</p>
                                            </div>
                                        </div>
                                        <div class="u-container-align-left u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-3" data-href="#" data-animation-direction="Up" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                                            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-5">
                                                <h5 class="u-align-left u-text u-text-default u-text-7"> Leading Auto Specialist<br>
                                                </h5>
                                                <p class="u-align-left u-text u-text-default u-text-8"> Sample text. Click to select the Text Element.&nbsp;Nunc placerat pharetra lorem lorem metus.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-container-align-center u-section-7" id="carousel_34fe">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <div class="data-layout-selected u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-align-center u-container-align-center u-container-style u-image u-layout-cell u-left-cell u-size-27 u-image-1" data-image-width="1380" data-image-height="920" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                            <div class="u-container-layout u-valign-middle u-container-layout-1"></div>
                        </div>
                        <div class="u-align-left u-container-align-left u-container-style u-layout-cell u-right-cell u-size-33 u-layout-cell-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="700">
                            <div class="u-container-layout u-valign-middle u-container-layout-2">
                                <h3 class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-custom-font u-font-montserrat u-text u-text-1"> Call Us Anytime<br>
                                    <span style="font-weight: 700;">
                      <a href="#" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"> 1.800.123.4567</a>
                    </span>
                                </h3>
                                <a href="#" class="u-active-palette-5-dark-3 u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-border-none u-btn u-btn-round u-button-style u-hover-palette-5-dark-3 u-palette-1-base u-radius-2 u-text-active-white u-text-hover-white u-btn-2"> Need a car inspection?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-align-center u-clearfix u-container-align-center u-palette-1-light-3 u-section-8" id="carousel_ad34">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <div class="data-layout-selected u-clearfix u-expanded-width u-gutter-30 u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-size-30 u-size-60-md">
                            <div class="u-layout-col">
                                <div class="u-size-40">
                                    <div class="u-layout-row">
                                        <div class="u-container-align-left u-container-style u-layout-cell u-left-cell u-size-60 u-white u-layout-cell-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="0">
                                            <div class="u-container-layout u-valign-middle u-container-layout-1">
                                                <h2 class="u-align-left u-text u-text-1"> 24/7 Service</h2>
                                                <p class="u-align-left u-text u-text-default u-text-2"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                                                <a href="#" class="u-active-palette-5-dark-3 u-align-left u-border-none u-btn u-btn-round u-button-style u-hover-palette-5-dark-3 u-palette-1-base u-radius-2 u-text-active-white u-text-hover-white u-btn-1">Learn more </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="u-size-20">
                                    <div class="u-layout-row">
                                        <div class="u-align-left u-container-align-left u-container-style u-hidden-sm u-hidden-xs u-layout-cell u-left-cell u-size-30 u-layout-cell-2">
                                            <div class="u-container-layout u-container-layout-2"></div>
                                        </div>
                                        <div class="u-align-left u-container-align-left u-container-style u-image u-layout-cell u-size-30 u-image-1" data-image-width="1380" data-image-height="920" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                                            <div class="u-container-layout u-container-layout-3" src=""></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="u-size-30 u-size-60-md">
                            <div class="u-layout-col">
                                <div class="u-size-20">
                                    <div class="u-layout-row">
                                        <div class="u-align-left u-container-align-left u-container-style u-image u-layout-cell u-size-30 u-image-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500" data-image-width="1380" data-image-height="920">
                                            <div class="u-container-layout u-container-layout-4" src=""></div>
                                        </div>
                                        <div class="u-align-left u-container-align-left u-container-style u-hidden-sm u-hidden-xs u-layout-cell u-right-cell u-size-30 u-layout-cell-5">
                                            <div class="u-container-layout u-container-layout-5"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="u-size-40">
                                    <div class="u-layout-row">
                                        <div class="u-align-left u-container-align-left u-container-style u-image u-layout-cell u-right-cell u-size-60 u-image-3" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500" data-image-width="1380" data-image-height="920">
                                            <div class="u-container-layout u-container-layout-6" src=""></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-align-center u-clearfix u-container-align-center u-palette-1-light-3 u-section-9" id="sec-ad2d">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <h2 class="u-align-center u-text u-text-default u-text-1">Facts &amp; Questions</h2>
            <p class="u-align-center u-text u-text-2">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
            <div class="u-accordion u-expanded-width u-faq u-spacing-10 u-accordion-1">
                <div class="u-accordion-item">
                    <a class="active u-accordion-link u-active-palette-1-light-2 u-button-style u-hover-palette-1-light-2 u-text-active-white u-text-hover-white u-text-palette-2-dark-3 u-white u-accordion-link-1" id="link-accordion-f600" aria-controls="accordion-f600" aria-selected="true">
                        <span class="u-accordion-link-text"> How Often Should I Change My Oil? </span>
                        <span class="u-accordion-link-icon u-icon u-text-active-white u-text-hover-white u-text-palette-1-light-2 u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 448 448" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-fe6a"></use></svg><svg class="u-svg-content" viewBox="0 0 448 448" id="svg-fe6a" style=""><path d="m272 184c-4.417969 0-8-3.582031-8-8v-176h-80v176c0 4.417969-3.582031 8-8 8h-176v80h176c4.417969 0 8 3.582031 8 8v176h80v-176c0-4.417969 3.582031-8 8-8h176v-80zm0 0"></path></svg></span>
                    </a>
                    <div class="u-accordion-active u-accordion-pane u-container-style u-white u-accordion-pane-1" id="accordion-f600" aria-labelledby="link-accordion-f600" aria-expanded="true">
                        <div class="u-container-layout u-container-layout-1">
                            <div class="fr-view u-clearfix u-rich-text u-text">
                                <p>Answer. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id suscipit ex. Suspendisse rhoncus laoreet purus quis elementum. Phasellus sed efficitur dolor, et ultricies sapien. Quisque fringilla sit amet dolor commodo efficitur. Aliquam et sem odio. In ullamcorper nisi nunc, et molestie ipsum iaculis sit amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="u-accordion-item">
                    <a class="u-accordion-link u-active-palette-1-light-2 u-button-style u-hover-palette-1-light-2 u-text-active-white u-text-hover-white u-text-palette-2-dark-3 u-white u-accordion-link-2" id="link-accordion-72f4" aria-controls="accordion-72f4" aria-selected="false">
                        <span class="u-accordion-link-text"> How does the rectification of defects work?</span>
                        <span class="u-accordion-link-icon u-icon u-text-active-white u-text-hover-white u-text-palette-1-light-2 u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 448 448" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-85d7"></use></svg><svg class="u-svg-content" viewBox="0 0 448 448" id="svg-85d7" style=""><path d="m272 184c-4.417969 0-8-3.582031-8-8v-176h-80v176c0 4.417969-3.582031 8-8 8h-176v80h176c4.417969 0 8 3.582031 8 8v176h80v-176c0-4.417969 3.582031-8 8-8h176v-80zm0 0"></path></svg></span>
                    </a>
                    <div class="u-accordion-pane u-container-style u-white u-accordion-pane-2" id="accordion-72f4" aria-labelledby="link-accordion-72f4">
                        <div class="u-container-layout u-container-layout-2">
                            <div class="u-clearfix u-rich-text u-text">
                                <p>Answer. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id suscipit ex. Suspendisse rhoncus laoreet purus quis elementum. Phasellus sed efficitur dolor, et ultricies sapien. Quisque fringilla sit amet dolor commodo efficitur. Aliquam et sem odio. In ullamcorper nisi nunc, et molestie ipsum iaculis sit amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="u-accordion-item">
                    <a class="u-accordion-link u-active-palette-1-light-2 u-button-style u-hover-palette-1-light-2 u-text-active-white u-text-hover-white u-text-palette-2-dark-3 u-white u-accordion-link-3" id="link-accordion-854e" aria-controls="accordion-854e" aria-selected="false">
                        <span class="u-accordion-link-text"> Compensation from the workshop?</span>
                        <span class="u-accordion-link-icon u-icon u-text-active-white u-text-hover-white u-text-palette-1-light-2 u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 448 448" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7f79"></use></svg><svg class="u-svg-content" viewBox="0 0 448 448" id="svg-7f79" style=""><path d="m272 184c-4.417969 0-8-3.582031-8-8v-176h-80v176c0 4.417969-3.582031 8-8 8h-176v80h176c4.417969 0 8 3.582031 8 8v176h80v-176c0-4.417969 3.582031-8 8-8h176v-80zm0 0"></path></svg></span>
                    </a>
                    <div class="u-accordion-pane u-container-style u-white u-accordion-pane-3" id="accordion-854e" aria-labelledby="link-accordion-854e">
                        <div class="u-container-layout u-container-layout-3">
                            <div class="fr-view u-clearfix u-rich-text u-text">
                                <p>Answer. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id suscipit ex. Suspendisse rhoncus laoreet purus quis elementum. Phasellus sed efficitur dolor, et ultricies sapien. Quisque fringilla sit amet dolor commodo efficitur. Aliquam et sem odio. In ullamcorper nisi nunc, et molestie ipsum iaculis sit amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-align-center u-clearfix u-container-align-center u-section-10" id="carousel_3f98">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <h2 class="u-align-center u-text u-text-default u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="0"> Team members</h2>
            <div class="u-expanded-width u-layout-horizontal u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    <div class="u-container-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                            <img alt="" class="u-expanded-width u-image u-image-default u-image-1" data-image-width="638" data-image-height="780" src="storage/images/1.jpg" data-animation-name="customAnimationIn" data-animation-duration="1250" data-animation-delay="250">
                            <h4 class="u-align-center u-text u-text-default u-text-2" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">Nat Reynolds</h4>
                            <p class="u-align-center u-large-text u-text u-text-default u-text-variant u-text-3"> Automotive Technician</p>
                        </div>
                    </div>
                    <div class="u-container-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle u-video-cover u-white u-list-item-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
                            <img alt="" class="u-expanded-width u-image u-image-default u-image-2" data-image-width="638" data-image-height="780" src="storage/images/2.jpg" data-animation-name="customAnimationIn" data-animation-duration="1250" data-animation-delay="250">
                            <h4 class="u-align-center u-text u-text-default u-text-4" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">Peter Pouli</h4>
                            <p class="u-align-center u-large-text u-text u-text-default u-text-variant u-text-5"> Maintenance Mechanic</p>
                        </div>
                    </div>
                    <div class="u-container-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle u-video-cover u-white u-list-item-3" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                            <img alt="" class="u-expanded-width u-image u-image-default u-image-3" data-image-width="638" data-image-height="780" src="storage/images/6.jpg" data-animation-name="customAnimationIn" data-animation-duration="1250" data-animation-delay="250">
                            <h4 class="u-align-center u-text u-text-default u-text-6" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""> &nbsp;Mila Parker</h4>
                            <p class="u-align-center u-large-text u-text u-text-default u-text-variant u-text-7"> Diesel Mechanic</p>
                        </div>
                    </div>
                    <div class="u-container-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle u-video-cover u-white u-list-item-4" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4">
                            <img alt="" class="u-expanded-width u-image u-image-default u-image-4" data-image-width="638" data-image-height="780" src="storage/images/4.jpg" data-animation-name="customAnimationIn" data-animation-duration="1250" data-animation-delay="250">
                            <h4 class="u-align-center u-text u-text-default u-text-8" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""> Kristopher Roberts</h4>
                            <p class="u-align-center u-large-text u-text u-text-default u-text-variant u-text-9"> Helicopter Mechanic</p>
                        </div>
                    </div>
                    <div class="u-container-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle u-video-cover u-white u-list-item-5" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-5">
                            <img alt="" class="u-expanded-width u-image u-image-default u-image-5" data-image-width="638" data-image-height="780" src="storage/images/7.jpg" data-animation-name="customAnimationIn" data-animation-duration="1250" data-animation-delay="250">
                            <h4 class="u-align-center u-text u-text-default u-text-10" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">Joe Howard</h4>
                            <p class="u-align-center u-large-text u-text u-text-default u-text-variant u-text-11"> Automotive Technician</p>
                        </div>
                    </div>
                    <div class="u-container-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle u-video-cover u-white u-list-item-6" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-6">
                            <img alt="" class="u-expanded-width u-image u-image-default u-image-6" data-image-width="638" data-image-height="780" src="storage/images/8.jpg" data-animation-name="customAnimationIn" data-animation-duration="1250" data-animation-delay="250">
                            <h4 class="u-align-center u-text u-text-default u-text-12" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""> Sasha Payne</h4>
                            <p class="u-align-center u-large-text u-text u-text-default u-text-variant u-text-13"> Auto body technician</p>
                        </div>
                    </div>
                </div>
                <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-prev u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-1" href="#" role="button">
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
                <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-next u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-2" href="#" role="button">
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
    <section class="u-clearfix u-container-align-center u-palette-1-light-3 u-section-11" id="sec-5d62">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <h2 class="u-align-center u-text u-text-default u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500"> What Makes Us Special</h2>
            <p class="u-align-center u-text u-text-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500"> Sample text. Click to select the Text Element.&nbsp;​Duis aute irure dolor in reprehenderit.</p>
            <div class="u-expanded-width u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    <div class="u-container-align-center u-container-style u-list-item u-repeater-item u-white u-list-item-1" data-animation-name="flipIn" data-animation-duration="1500" data-animation-delay="500" data-animation-direction="X">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                            <h5 class="u-align-center u-text u-text-palette-1-base u-text-3" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">25</h5>
                            <p class="u-align-center u-text u-text-4"> Years of experience</p>
                        </div>
                    </div>
                    <div class="u-container-align-center u-container-style u-list-item u-repeater-item u-white u-list-item-2" data-animation-name="flipIn" data-animation-duration="1500" data-animation-direction="X" data-animation-delay="500">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
                            <h5 class="u-align-center u-text u-text-palette-1-base u-text-5" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">18</h5>
                            <p class="u-align-center u-text u-text-6"> Amazing employees</p>
                        </div>
                    </div>
                    <div class="u-container-align-center u-container-style u-list-item u-repeater-item u-white u-list-item-3" data-animation-name="flipIn" data-animation-duration="1500" data-animation-direction="X" data-animation-delay="500">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                            <h5 class="u-align-center u-text u-text-palette-1-base u-text-7" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">10k</h5>
                            <p class="u-align-center u-text u-text-8"> Hours of maintenance</p>
                        </div>
                    </div>
                    <div class="u-container-align-center u-container-style u-list-item u-repeater-item u-white u-list-item-4" data-animation-name="flipIn" data-animation-duration="1500" data-animation-direction="X" data-animation-delay="500">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4">
                            <h5 class="u-align-center u-text u-text-palette-1-base u-text-9" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">2k</h5>
                            <p class="u-align-center u-text u-text-10"> Projects done</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-align-center u-clearfix u-container-align-center u-section-12" id="sec-d167">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-container-style u-layout-cell u-size-20-lg u-size-20-xl u-size-60-md u-size-60-sm u-size-60-xs u-layout-cell-1">
                            <div class="u-container-layout u-container-layout-1">
                                <h2 class="u-text u-text-default u-text-1">Write Us</h2>
                                <p class="u-align-left u-text u-text-2">Images from <a href="https://www.freepik.com" class="u-active-none u-border-1 u-border-active-palette-1-base u-border-black u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-link u-button-style u-hover-none u-none u-radius-0 u-text-body-color u-top-left-radius-0 u-top-right-radius-0 u-btn-1" target="_blank">Freepik</a>
                                </p>
                            </div>
                        </div>
                        <div class="u-container-align-left-md u-container-align-left-sm u-container-align-left-xs u-container-style u-layout-cell u-size-40-lg u-size-40-xl u-size-60-md u-size-60-sm u-size-60-xs u-layout-cell-2">
                            <div class="u-border-2 u-border-grey-75 u-container-layout u-container-layout-2">
                                <div class="u-form u-form-1">
                                    <form action="https://forms.nicepagesrv.com/v2/form/process" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="email" name="form" style="padding: 10px;">
                                        <div class="u-form-group u-form-name">
                                            <label for="name-175e" class="u-label">Name</label>
                                            <input type="text" placeholder="Enter your Name" id="name-175e" name="name" class="u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle" required="">
                                        </div>
                                        <div class="u-form-email u-form-group">
                                            <label for="email-175e" class="u-label">Email</label>
                                            <input type="email" placeholder="Enter a valid email address" id="email-175e" name="email" class="u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle" required="">
                                        </div>
                                        <div class="u-form-group u-form-message">
                                            <label for="message-175e" class="u-label">Message</label>
                                            <textarea placeholder="Enter your message" rows="4" cols="50" id="message-175e" name="message" class="u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle" required=""></textarea>
                                        </div>
                                        <div class="u-align-center u-form-group u-form-submit">
                                            <a href="#" class="u-border-none u-btn u-btn-submit u-button-style u-btn-2">send a message</a>
                                            <input type="submit" value="submit" class="u-form-control-hidden">
                                        </div>
                                        <div class="u-form-send-message u-form-send-success">Дякую! Ваше повідомлення відправлене.</div>
                                        <div class="u-form-send-error u-form-send-message">Відправлення не вдалося. Будь-ласка, виправте помилки і спробуйте ще раз.</div>
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
    <section class="u-clearfix u-section-13" id="carousel_ffc8">
        <div class="u-expanded u-grey-10 u-map">
            <div class="embed-responsive">
                <iframe class="embed-responsive-item" src="//maps.google.com/maps?output=embed&amp;q=Manhattan&amp;t=m" data-map="JTdCJTIyYWRkcmVzcyUyMiUzQSUyMk1hbmhhdHRhbiUyMiUyQyUyMnpvb20lMjIlM0FudWxsJTJDJTIydHlwZUlkJTIyJTNBJTIycm9hZCUyMiUyQyUyMmxhbmclMjIlM0FudWxsJTJDJTIyYXBpS2V5JTIyJTNBbnVsbCUyQyUyMm1hcmtlcnMlMjIlM0ElNUIlNUQlN0Q="></iframe>
            </div>
        </div>
    </section>
@endsection
