@extends('app')
@push('styles')
    <link rel="stylesheet" href="{{ asset('index.css') }}">
    <link rel="stylesheet" href="{{ asset('nicepage.css') }}">
@endpush

@push('scripts')
    <script type="text/javascript" src="{{ asset('jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('nicepage.js') }}"></script>
@endpush
@section('content')
    <section class="u-clearfix u-container-align-center-xs u-palette-1-light-3 u-section-1" id="carousel_8fae">
        <div class="u-expanded-width u-palette-1-light-2 u-shape u-shape-rectangle u-shape-1"
             data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500"></div>
        <img src="storage/images/mechanic-preparing-check-list3.jpg" alt="" class="u-image u-image-default u-image-1"
             data-image-width="1500" data-image-height="1000" data-animation-name="customAnimationIn"
             data-animation-duration="1500" data-animation-delay="0">
        <div class="custom-expanded u-container-align-center-xs u-container-align-left-lg u-container-align-left-md u-container-align-left-sm u-container-align-left-xl u-container-style u-group u-white u-group-1"
             data-animation-name="flipIn" data-animation-duration="1500" data-animation-delay="800"
             data-animation-direction="X">
            <div class="u-container-layout u-valign-middle u-container-layout-1">
                <h2 class="u-align-center-xs u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-text u-text-1">
                    Car Repair<br>
                </h2>
                <p class="u-align-center-xs u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-text u-text-2"
                   data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident </p>
                <a href="#"
                   class="u-active-palette-5-dark-3 u-align-center-xs u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-border-none u-btn u-btn-round u-button-style u-hover-palette-5-dark-3 u-palette-1-base u-radius-2 u-text-active-white u-text-hover-white u-btn-1">
                    Need a car inspection?</a>
            </div>
        </div>
    </section>
    <section class="u-align-center u-clearfix u-container-align-center u-palette-1-light-3 u-section-2" id="carousel_535d">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <h2 class="u-align-center u-text u-text-default u-text-1"> Our services include</h2>
            <div class="u-expanded-width u-layout-horizontal u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    <div class="u-align-left u-container-align-left u-container-style u-list-item u-repeater-item u-white u-list-item-1">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                            <h3 class="u-align-left u-text u-text-2"> Auto Repair</h3>
                            <p class="u-align-left u-text u-text-3">Sample text. Click to select the Text Element.</p>
                            <span class="u-align-left u-file-icon u-icon u-text-palette-2-base u-icon-1"><img
                                    src="storage/images/2822686-d51604f5.png" alt=""></span>
                        </div>
                    </div>
                    <div class="u-align-left u-container-align-left u-container-style u-list-item u-repeater-item u-video-cover u-white u-list-item-2">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
                            <h3 class="u-align-left u-text u-text-4"> Auto Repair</h3>
                            <p class="u-align-left u-text u-text-5">Sample text. Click to select the Text Element.</p>
                            <span class="u-align-left u-file-icon u-icon u-text-palette-2-base u-icon-2"><img
                                    src="storage/images/1743705-6a3eb0b6.png" alt=""></span>
                        </div>
                    </div>
                    <div class="u-align-left u-container-align-left u-container-style u-list-item u-repeater-item u-video-cover u-white u-list-item-3">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                            <h3 class="u-align-left u-text u-text-6"> Auto Glass Repair</h3>
                            <p class="u-align-left u-text u-text-7">Sample text. Click to select the Text Element.</p>
                            <span class="u-align-left u-file-icon u-icon u-text-palette-2-base u-icon-3"><img
                                    src="storage/images/16096073-d0fe1288.png" alt=""></span>
                        </div>
                    </div>
                    <div class="u-align-left u-container-align-left u-container-style u-list-item u-repeater-item u-video-cover u-white u-list-item-4">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4">
                            <h3 class="u-align-left u-text u-text-8"> Oil Change</h3>
                            <p class="u-align-left u-text u-text-9">Sample text. Click to select the Text Element.</p>
                            <span class="u-align-left u-file-icon u-icon u-text-palette-2-base u-icon-4"><img
                                    src="storage/images/5442963-a212bfbf.png" alt=""></span>
                        </div>
                    </div>
                    <div class="u-align-left u-container-align-left u-container-style u-list-item u-repeater-item u-video-cover u-white u-list-item-5">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-5">
                            <h3 class="u-align-left u-text u-text-10"> General repair</h3>
                            <p class="u-align-left u-text u-text-11">Sample text. Click to select the Text Element.</p>
                            <span class="u-align-left u-file-icon u-icon u-text-palette-2-base u-icon-5"><img
                                    src="storage/images/942147-dd80c966.png" alt=""></span>
                        </div>
                    </div>
                    <div class="u-align-left u-container-align-left u-container-style u-list-item u-repeater-item u-video-cover u-white u-list-item-6">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-6">
                            <h3 class="u-align-left u-text u-text-12"> Auto Body Work</h3>
                            <p class="u-align-left u-text u-text-13">Sample text. Click to select the Text Element.</p>
                            <span class="u-align-left u-file-icon u-icon u-text-palette-2-base u-icon-6"><img
                                    src="storage/images/12050562-ea0861df.png" alt=""></span>
                        </div>
                    </div>
                </div>
                <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-prev u-icon-circle u-opacity u-opacity-70 u-palette-1-base u-spacing-10 u-text-white u-gallery-nav-1"
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
                <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-next u-icon-circle u-opacity u-opacity-70 u-palette-1-base u-spacing-10 u-text-white u-gallery-nav-2"
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
    <section class="u-align-center u-clearfix u-container-align-center u-white u-section-3" id="carousel_76ce">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <div class="data-layout-selected u-clearfix u-expanded-width u-gutter-26 u-layout-wrap u-layout-wrap-1">
                <div class="u-layout" style="">
                    <div class="u-layout-row" style="">
                        <div class="u-align-center u-container-align-center u-container-align-left u-container-style u-layout-cell u-left-cell u-size-30-lg u-size-30-xl u-size-60-md u-size-60-sm u-size-60-xs u-size-xs-60 u-layout-cell-1"
                             src="" data-animation-name="customAnimationIn" data-animation-duration="1500"
                             data-animation-delay="500">
                            <div class="u-container-layout u-valign-middle u-container-layout-1" src="">
                                <h3 class="u-align-left u-text u-text-1">About Us</h3>
                                <p class="u-align-left u-large-text u-text u-text-default u-text-variant u-text-2">Sample
                                    text. Click to select the Text Element.&nbsp;​Duis aute irure dolor in reprehenderit in
                                    voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                    cupidatat non proident</p>
                                <a href="#"
                                   class="u-active-palette-5-dark-3 u-align-left u-border-none u-btn u-btn-round u-button-style u-hover-palette-5-dark-3 u-palette-1-base u-radius-2 u-text-active-white u-text-hover-white u-btn-1">Learn
                                    more </a>
                            </div>
                        </div>
                        <div class="u-container-align-center u-container-style u-layout-cell u-right-cell u-shape-rectangle u-size-30-lg u-size-30-xl u-size-60-md u-size-60-sm u-size-60-xs u-size-xs-60 u-layout-cell-2"
                             src="" data-animation-name="customAnimationIn" data-animation-duration="1500"
                             data-animation-delay="0">
                            <div class="u-container-layout u-valign-middle u-container-layout-2">
                                <div class="u-list u-list-1">
                                    <div class="u-repeater u-repeater-1">
                                        <div class="u-container-align-left u-container-style u-list-item u-palette-1-light-3 u-repeater-item u-shape-rectangle u-list-item-1"
                                             data-href="#" data-animation-name="customAnimationIn"
                                             data-animation-duration="1500">
                                            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                                                <h5 class="u-align-left u-text u-text-default u-text-3"> Modern
                                                    Workshop</h5>
                                                <p class="u-align-left u-text u-text-default u-text-4"> Sample text. Click
                                                    to select the Text Element.&nbsp;Nunc placerat pharetra lorem lorem
                                                    metus.</p>
                                            </div>
                                        </div>
                                        <div class="u-container-align-left u-container-style u-list-item u-palette-1-light-3 u-repeater-item u-shape-rectangle u-list-item-2"
                                             data-href="#" data-animation-direction="Up"
                                             data-animation-name="customAnimationIn" data-animation-duration="1500"
                                             data-animation-delay="250">
                                            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4">
                                                <h5 class="u-align-left u-text u-text-default u-text-5"> Talented
                                                    Workers</h5>
                                                <p class="u-align-left u-text u-text-default u-text-6">Sample text. Click to
                                                    select the Text Element.&nbsp;Nunc placerat pharetra lorem lorem
                                                    metus.</p>
                                            </div>
                                        </div>
                                        <div class="u-container-align-left u-container-style u-list-item u-palette-1-light-3 u-repeater-item u-shape-rectangle u-list-item-3"
                                             data-href="#" data-animation-direction="Up"
                                             data-animation-name="customAnimationIn" data-animation-duration="1500"
                                             data-animation-delay="500">
                                            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-5">
                                                <h5 class="u-align-left u-text u-text-default u-text-7"> Leading Auto
                                                    Specialist<br>
                                                </h5>
                                                <p class="u-align-left u-text u-text-default u-text-8"> Sample text. Click
                                                    to select the Text Element.&nbsp;Nunc placerat pharetra lorem lorem
                                                    metus.</p>
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
    <section class="u-align-center u-clearfix u-container-align-center u-palette-1-light-3 u-section-4" id="carousel_4254">


        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <h2 class="u-align-center u-text u-text-default u-text-1" data-animation-name="flipIn"
                data-animation-duration="1500" data-animation-delay="500" data-animation-direction="X"> Our Areas Of
                Expertise</h2>
            <p class="u-align-center u-text u-text-2" data-animation-name="customAnimationIn" data-animation-duration="1500"
               data-animation-delay="250"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua.</p>
            <div class="u-expanded-width u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    <div class="u-align-center u-container-align-center u-container-align-center-xs u-container-style u-image u-image-default u-list-item u-repeater-item u-shape-round u-image-1"
                         data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500"
                         data-image-width="1380" data-image-height="918">
                        <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-1">
                            <div class="u-black u-container-align-center u-container-style u-expanded-width u-group u-opacity u-opacity-65 u-group-1">
                                <div class="u-container-layout u-valign-middle u-container-layout-2">
                                    <h6 class="u-align-center u-hover-feature u-text u-text-3"> Filter Change Service</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="u-align-center u-container-align-center u-container-align-center-xs u-container-style u-image u-image-default u-list-item u-repeater-item u-shape-round u-image-2"
                         data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500"
                         data-image-width="1380" data-image-height="920">
                        <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-3">
                            <div class="u-black u-container-style u-expanded-width u-group u-opacity u-opacity-65 u-group-2">
                                <div class="u-container-layout u-valign-middle u-container-layout-4">
                                    <h6 class="u-align-center u-hover-feature u-text u-text-4"> Tire Care </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="u-align-center u-container-align-center u-container-align-center-xs u-container-style u-image u-image-default u-list-item u-repeater-item u-shape-round u-image-3"
                         data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500"
                         data-image-width="1380" data-image-height="920">
                        <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-5">
                            <div class="u-black u-container-align-center u-container-style u-expanded-width u-group u-opacity u-opacity-65 u-group-3">
                                <div class="u-container-layout u-valign-middle u-container-layout-6">
                                    <h6 class="u-align-center u-hover-feature u-text u-text-5"> Power Steering</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="u-align-center u-container-align-center u-container-align-center-xs u-container-style u-image u-image-default u-list-item u-repeater-item u-shape-round u-image-4"
                         data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="750"
                         data-image-width="1380" data-image-height="920">
                        <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-7">
                            <div class="u-black u-container-align-center u-container-style u-expanded-width u-group u-opacity u-opacity-65 u-group-4">
                                <div class="u-container-layout u-valign-middle u-container-layout-8">
                                    <h6 class="u-align-center u-hover-feature u-text u-text-6"> Suspension Repair</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="u-align-center u-container-align-center u-container-align-center-xs u-container-style u-image u-image-default u-list-item u-repeater-item u-shape-round u-image-5"
                         data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="750"
                         data-image-width="1380" data-image-height="920">
                        <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-9">
                            <div class="u-black u-container-style u-expanded-width u-group u-opacity u-opacity-65 u-group-5">
                                <div class="u-container-layout u-valign-middle u-container-layout-10">
                                    <h6 class="u-align-center u-hover-feature u-text u-text-7"> Transmission</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="u-align-center u-container-align-center u-container-align-center-xs u-container-style u-image u-image-default u-list-item u-repeater-item u-shape-round u-image-6"
                         data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="750"
                         data-image-width="1380" data-image-height="920">
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
    <section class="u-align-center u-clearfix u-container-align-center u-palette-1-light-3 u-section-5" id="sec-ad2d">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <h2 class="u-align-center u-text u-text-default u-text-1">Facts &amp; Questions</h2>
            <p class="u-align-center u-text u-text-2">Sample text. Click to select the text box. Click again or double click
                to start editing the text.</p>
            <div class="u-accordion u-expanded-width u-faq u-spacing-10 u-accordion-1">
                <div class="u-accordion-item">
                    <a class="active u-accordion-link u-active-palette-1-light-2 u-button-style u-hover-palette-1-light-2 u-text-active-white u-text-hover-white u-text-palette-2-dark-3 u-white u-accordion-link-1"
                       id="link-accordion-f600" aria-controls="accordion-f600" aria-selected="true">
                        <span class="u-accordion-link-text"> How Often Should I Change My Oil? </span>
                        <span class="u-accordion-link-icon u-icon u-text-active-white u-text-hover-white u-text-palette-1-light-2 u-icon-1"><svg
                                class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 448 448" style=""><use
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-fe6a"></use></svg><svg
                                class="u-svg-content" viewBox="0 0 448 448" id="svg-fe6a" style=""><path
                                    d="m272 184c-4.417969 0-8-3.582031-8-8v-176h-80v176c0 4.417969-3.582031 8-8 8h-176v80h176c4.417969 0 8 3.582031 8 8v176h80v-176c0-4.417969 3.582031-8 8-8h176v-80zm0 0"></path></svg></span>
                    </a>
                    <div class="u-accordion-active u-accordion-pane u-container-style u-white u-accordion-pane-1"
                         id="accordion-f600" aria-labelledby="link-accordion-f600" aria-expanded="true">
                        <div class="u-container-layout u-container-layout-1">
                            <div class="fr-view u-clearfix u-rich-text u-text">
                                <p>Answer. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id suscipit
                                    ex. Suspendisse rhoncus laoreet purus quis elementum. Phasellus sed efficitur dolor, et
                                    ultricies sapien. Quisque fringilla sit amet dolor commodo efficitur. Aliquam et sem
                                    odio. In ullamcorper nisi nunc, et molestie ipsum iaculis sit amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="u-accordion-item">
                    <a class="u-accordion-link u-active-palette-1-light-2 u-button-style u-hover-palette-1-light-2 u-text-active-white u-text-hover-white u-text-palette-2-dark-3 u-white u-accordion-link-2"
                       id="link-accordion-72f4" aria-controls="accordion-72f4" aria-selected="false">
                        <span class="u-accordion-link-text"> How does the rectification of defects work?</span>
                        <span class="u-accordion-link-icon u-icon u-text-active-white u-text-hover-white u-text-palette-1-light-2 u-icon-2"><svg
                                class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 448 448" style=""><use
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-85d7"></use></svg><svg
                                class="u-svg-content" viewBox="0 0 448 448" id="svg-85d7" style=""><path
                                    d="m272 184c-4.417969 0-8-3.582031-8-8v-176h-80v176c0 4.417969-3.582031 8-8 8h-176v80h176c4.417969 0 8 3.582031 8 8v176h80v-176c0-4.417969 3.582031-8 8-8h176v-80zm0 0"></path></svg></span>
                    </a>
                    <div class="u-accordion-pane u-container-style u-white u-accordion-pane-2" id="accordion-72f4"
                         aria-labelledby="link-accordion-72f4">
                        <div class="u-container-layout u-container-layout-2">
                            <div class="u-clearfix u-rich-text u-text">
                                <p>Answer. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id suscipit
                                    ex. Suspendisse rhoncus laoreet purus quis elementum. Phasellus sed efficitur dolor, et
                                    ultricies sapien. Quisque fringilla sit amet dolor commodo efficitur. Aliquam et sem
                                    odio. In ullamcorper nisi nunc, et molestie ipsum iaculis sit amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="u-accordion-item">
                    <a class="u-accordion-link u-active-palette-1-light-2 u-button-style u-hover-palette-1-light-2 u-text-active-white u-text-hover-white u-text-palette-2-dark-3 u-white u-accordion-link-3"
                       id="link-accordion-854e" aria-controls="accordion-854e" aria-selected="false">
                        <span class="u-accordion-link-text"> Compensation from the workshop?</span>
                        <span class="u-accordion-link-icon u-icon u-text-active-white u-text-hover-white u-text-palette-1-light-2 u-icon-3"><svg
                                class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 448 448" style=""><use
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7f79"></use></svg><svg
                                class="u-svg-content" viewBox="0 0 448 448" id="svg-7f79" style=""><path
                                    d="m272 184c-4.417969 0-8-3.582031-8-8v-176h-80v176c0 4.417969-3.582031 8-8 8h-176v80h176c4.417969 0 8 3.582031 8 8v176h80v-176c0-4.417969 3.582031-8 8-8h176v-80zm0 0"></path></svg></span>
                    </a>
                    <div class="u-accordion-pane u-container-style u-white u-accordion-pane-3" id="accordion-854e"
                         aria-labelledby="link-accordion-854e">
                        <div class="u-container-layout u-container-layout-3">
                            <div class="fr-view u-clearfix u-rich-text u-text">
                                <p>Answer. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id suscipit
                                    ex. Suspendisse rhoncus laoreet purus quis elementum. Phasellus sed efficitur dolor, et
                                    ultricies sapien. Quisque fringilla sit amet dolor commodo efficitur. Aliquam et sem
                                    odio. In ullamcorper nisi nunc, et molestie ipsum iaculis sit amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-align-center u-clearfix u-container-align-center u-valign-top-lg u-valign-top-xl u-section-6"
             id="carousel_43ff">
        <img class="u-expanded-width u-image u-image-1" src="storage/images/worker-follows-car-checklist-fixing-tires4-min.jpg"
             data-image-width="1980" data-image-height="1320">
        <h2 class="u-align-center u-text u-text-body-alt-color u-text-default-lg u-text-default-xl u-text-1">Read what our
            customers say</h2>
        <div class="custom-expanded u-layout-grid u-list u-list-1">
            <div class="u-repeater u-repeater-1">
                <div class="u-container-style u-list-item u-palette-1-light-3 u-repeater-item u-shape-rectangle">
                    <div class="u-container-layout u-similar-container u-container-layout-1">
              <span class="u-align-left u-icon u-icon-circle u-text-palette-1-light-2 u-white u-icon-1"
                    data-animation-name="" data-animation-duration="0" data-animation-delay="0"
                    data-animation-direction=""><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice"
                                                     viewBox="0 0 351.128 351.128" style=""><use
                          xlink:href="#svg-7dd2"></use></svg><svg class="u-svg-content" viewBox="0 0 351.128 351.128"
                                                                  x="0px" y="0px" id="svg-7dd2"
                                                                  style="enable-background:new 0 0 351.128 351.128;"><g><path
                              d="M72.326,147.33c4.284-26.928,37.944-55.692,64.26-56.304c1.836,0,3.672-0.612,4.896-1.836   c1.224-0.612,2.448-1.224,3.06-3.06c9.18-17.136,4.284-30.6-11.016-41.616c-17.748-12.852-45.9,0-59.976,11.628   C38.054,85.518,1.946,136.313,3.782,184.662c-6.12,32.437-4.896,67.32,4.284,96.084c6.12,18.36,23.868,27.54,42.228,28.764   c18.36,1.225,56.304,6.732,72.828-4.283c16.524-11.017,17.748-32.437,19.584-50.796c1.836-20.196,7.344-58.141-9.792-74.053   C115.778,165.078,66.818,181.602,72.326,147.33z"></path><path
                              d="M274.286,147.33c4.284-26.928,37.943-55.692,64.26-56.304c1.836,0,3.672-0.612,4.896-1.836   c1.225-0.612,2.448-1.224,3.061-3.06c9.18-17.136,4.284-30.6-11.016-41.616c-17.748-12.852-45.9,0-59.977,11.628   c-35.496,29.376-71.604,80.172-69.768,128.52c-6.12,32.437-4.896,67.32,4.283,96.084c6.12,18.36,23.868,27.54,42.229,28.764   c18.36,1.225,56.304,6.732,72.828-4.283c16.523-11.017,17.748-32.437,19.584-50.796c1.836-20.196,7.344-58.141-9.792-74.053   C317.738,165.078,268.166,181.602,274.286,147.33z"></path>
</g></svg></span>
                        <p class="u-text u-text-2">Proin sed libero enim sed faucibus turpis. At imperdiet dui accumsan sit
                            amet nulla facilisi morbi tempus. Ut sem nulla pharetra diam sit amet nisl.&nbsp;</p>
                        <h5 class="u-text u-text-3">Celia Almeda</h5>
                    </div>
                </div>
                <div class="u-container-style u-list-item u-palette-1-light-3 u-repeater-item u-shape-rectangle">
                    <div class="u-container-layout u-similar-container u-container-layout-2">
              <span class="u-align-left u-icon u-icon-circle u-text-palette-1-light-2 u-white u-icon-2"
                    data-animation-name="" data-animation-duration="0" data-animation-delay="0"
                    data-animation-direction=""><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice"
                                                     viewBox="0 0 351.128 351.128" style=""><use
                          xlink:href="#svg-0a4b"></use></svg><svg class="u-svg-content" viewBox="0 0 351.128 351.128"
                                                                  x="0px" y="0px" id="svg-0a4b"
                                                                  style="enable-background:new 0 0 351.128 351.128;"><g><path
                              d="M72.326,147.33c4.284-26.928,37.944-55.692,64.26-56.304c1.836,0,3.672-0.612,4.896-1.836   c1.224-0.612,2.448-1.224,3.06-3.06c9.18-17.136,4.284-30.6-11.016-41.616c-17.748-12.852-45.9,0-59.976,11.628   C38.054,85.518,1.946,136.313,3.782,184.662c-6.12,32.437-4.896,67.32,4.284,96.084c6.12,18.36,23.868,27.54,42.228,28.764   c18.36,1.225,56.304,6.732,72.828-4.283c16.524-11.017,17.748-32.437,19.584-50.796c1.836-20.196,7.344-58.141-9.792-74.053   C115.778,165.078,66.818,181.602,72.326,147.33z"></path><path
                              d="M274.286,147.33c4.284-26.928,37.943-55.692,64.26-56.304c1.836,0,3.672-0.612,4.896-1.836   c1.225-0.612,2.448-1.224,3.061-3.06c9.18-17.136,4.284-30.6-11.016-41.616c-17.748-12.852-45.9,0-59.977,11.628   c-35.496,29.376-71.604,80.172-69.768,128.52c-6.12,32.437-4.896,67.32,4.283,96.084c6.12,18.36,23.868,27.54,42.229,28.764   c18.36,1.225,56.304,6.732,72.828-4.283c16.523-11.017,17.748-32.437,19.584-50.796c1.836-20.196,7.344-58.141-9.792-74.053   C317.738,165.078,268.166,181.602,274.286,147.33z"></path>
</g></svg></span>
                        <p class="u-text u-text-4">Proin sed libero enim sed faucibus turpis. At imperdiet dui accumsan sit
                            amet nulla facilisi morbi tempus. Ut sem nulla pharetra diam sit amet nisl.&nbsp;</p>
                        <h5 class="u-text u-text-5">Frank Kinney</h5>
                    </div>
                </div>
                <div class="u-container-style u-list-item u-palette-1-light-3 u-repeater-item u-shape-rectangle">
                    <div class="u-container-layout u-similar-container u-container-layout-3">
              <span class="u-align-left u-icon u-icon-circle u-text-palette-1-light-2 u-white u-icon-3"
                    data-animation-name="" data-animation-duration="0" data-animation-delay="0"
                    data-animation-direction=""><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice"
                                                     viewBox="0 0 351.128 351.128" style=""><use
                          xlink:href="#svg-c43b"></use></svg><svg class="u-svg-content" viewBox="0 0 351.128 351.128"
                                                                  x="0px" y="0px" id="svg-c43b"
                                                                  style="enable-background:new 0 0 351.128 351.128;"><g><path
                              d="M72.326,147.33c4.284-26.928,37.944-55.692,64.26-56.304c1.836,0,3.672-0.612,4.896-1.836   c1.224-0.612,2.448-1.224,3.06-3.06c9.18-17.136,4.284-30.6-11.016-41.616c-17.748-12.852-45.9,0-59.976,11.628   C38.054,85.518,1.946,136.313,3.782,184.662c-6.12,32.437-4.896,67.32,4.284,96.084c6.12,18.36,23.868,27.54,42.228,28.764   c18.36,1.225,56.304,6.732,72.828-4.283c16.524-11.017,17.748-32.437,19.584-50.796c1.836-20.196,7.344-58.141-9.792-74.053   C115.778,165.078,66.818,181.602,72.326,147.33z"></path><path
                              d="M274.286,147.33c4.284-26.928,37.943-55.692,64.26-56.304c1.836,0,3.672-0.612,4.896-1.836   c1.225-0.612,2.448-1.224,3.061-3.06c9.18-17.136,4.284-30.6-11.016-41.616c-17.748-12.852-45.9,0-59.977,11.628   c-35.496,29.376-71.604,80.172-69.768,128.52c-6.12,32.437-4.896,67.32,4.283,96.084c6.12,18.36,23.868,27.54,42.229,28.764   c18.36,1.225,56.304,6.732,72.828-4.283c16.523-11.017,17.748-32.437,19.584-50.796c1.836-20.196,7.344-58.141-9.792-74.053   C317.738,165.078,268.166,181.602,274.286,147.33z"></path>
</g></svg></span>
                        <p class="u-text u-text-6">Proin sed libero enim sed faucibus turpis. At imperdiet dui accumsan sit
                            amet nulla facilisi morbi tempus. Ut sem nulla pharetra diam sit amet nisl.&nbsp;</p>
                        <h5 class="u-text u-text-7"> Sam Perry</h5>
                    </div>
                </div>
                <div class="u-container-style u-list-item u-palette-1-light-3 u-repeater-item u-shape-rectangle">
                    <div class="u-container-layout u-similar-container u-container-layout-4">
              <span class="u-align-left u-icon u-icon-circle u-text-palette-1-light-2 u-white u-icon-4"
                    data-animation-name="" data-animation-duration="0" data-animation-delay="0"
                    data-animation-direction=""><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice"
                                                     viewBox="0 0 351.128 351.128" style=""><use
                          xlink:href="#svg-c13e"></use></svg><svg class="u-svg-content" viewBox="0 0 351.128 351.128"
                                                                  x="0px" y="0px" id="svg-c13e"
                                                                  style="enable-background:new 0 0 351.128 351.128;"><g><path
                              d="M72.326,147.33c4.284-26.928,37.944-55.692,64.26-56.304c1.836,0,3.672-0.612,4.896-1.836   c1.224-0.612,2.448-1.224,3.06-3.06c9.18-17.136,4.284-30.6-11.016-41.616c-17.748-12.852-45.9,0-59.976,11.628   C38.054,85.518,1.946,136.313,3.782,184.662c-6.12,32.437-4.896,67.32,4.284,96.084c6.12,18.36,23.868,27.54,42.228,28.764   c18.36,1.225,56.304,6.732,72.828-4.283c16.524-11.017,17.748-32.437,19.584-50.796c1.836-20.196,7.344-58.141-9.792-74.053   C115.778,165.078,66.818,181.602,72.326,147.33z"></path><path
                              d="M274.286,147.33c4.284-26.928,37.943-55.692,64.26-56.304c1.836,0,3.672-0.612,4.896-1.836   c1.225-0.612,2.448-1.224,3.061-3.06c9.18-17.136,4.284-30.6-11.016-41.616c-17.748-12.852-45.9,0-59.977,11.628   c-35.496,29.376-71.604,80.172-69.768,128.52c-6.12,32.437-4.896,67.32,4.283,96.084c6.12,18.36,23.868,27.54,42.229,28.764   c18.36,1.225,56.304,6.732,72.828-4.283c16.523-11.017,17.748-32.437,19.584-50.796c1.836-20.196,7.344-58.141-9.792-74.053   C317.738,165.078,268.166,181.602,274.286,147.33z"></path>
</g></svg></span>
                        <p class="u-text u-text-8">Proin sed libero enim sed faucibus turpis. At imperdiet dui accumsan sit
                            amet nulla facilisi morbi tempus. Ut sem nulla pharetra diam sit amet nisl.&nbsp;</p>
                        <h5 class="u-text u-text-9"> Marry Hudson</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-align-center u-clearfix u-container-align-center u-section-7" id="carousel_3f98">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <h2 class="u-align-center u-text u-text-default u-text-1" data-animation-name="customAnimationIn"
                data-animation-duration="1500" data-animation-delay="0"> Team members</h2>
            <div class="u-expanded-width u-layout-horizontal u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    <div class="u-container-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-1"
                         data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                            <img alt="" class="u-expanded-width u-image u-image-default u-image-1" data-image-width="638"
                                 data-image-height="780" src="storage/images/1.jpg" data-animation-name="customAnimationIn"
                                 data-animation-duration="1250" data-animation-delay="250">
                            <h4 class="u-align-center u-text u-text-default u-text-2" data-animation-name=""
                                data-animation-duration="0" data-animation-delay="0" data-animation-direction="">Nat
                                Reynolds</h4>
                            <p class="u-align-center u-large-text u-text u-text-default u-text-variant u-text-3"> Automotive
                                Technician</p>
                        </div>
                    </div>
                    <div class="u-container-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle u-video-cover u-white u-list-item-2"
                         data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
                            <img alt="" class="u-expanded-width u-image u-image-default u-image-2" data-image-width="638"
                                 data-image-height="780" src="storage/images/2.jpg" data-animation-name="customAnimationIn"
                                 data-animation-duration="1250" data-animation-delay="250">
                            <h4 class="u-align-center u-text u-text-default u-text-4" data-animation-name=""
                                data-animation-duration="0" data-animation-delay="0" data-animation-direction="">Peter
                                Pouli</h4>
                            <p class="u-align-center u-large-text u-text u-text-default u-text-variant u-text-5">
                                Maintenance Mechanic</p>
                        </div>
                    </div>
                    <div class="u-container-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle u-video-cover u-white u-list-item-3"
                         data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                            <img alt="" class="u-expanded-width u-image u-image-default u-image-3" data-image-width="638"
                                 data-image-height="780" src="storage/images/6.jpg" data-animation-name="customAnimationIn"
                                 data-animation-duration="1250" data-animation-delay="250">
                            <h4 class="u-align-center u-text u-text-default u-text-6" data-animation-name=""
                                data-animation-duration="0" data-animation-delay="0" data-animation-direction=""> &nbsp;Mila
                                Parker</h4>
                            <p class="u-align-center u-large-text u-text u-text-default u-text-variant u-text-7"> Diesel
                                Mechanic</p>
                        </div>
                    </div>
                    <div class="u-container-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle u-video-cover u-white u-list-item-4"
                         data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4">
                            <img alt="" class="u-expanded-width u-image u-image-default u-image-4" data-image-width="638"
                                 data-image-height="780" src="storage/images/4.jpg" data-animation-name="customAnimationIn"
                                 data-animation-duration="1250" data-animation-delay="250">
                            <h4 class="u-align-center u-text u-text-default u-text-8" data-animation-name=""
                                data-animation-duration="0" data-animation-delay="0" data-animation-direction=""> Kristopher
                                Roberts</h4>
                            <p class="u-align-center u-large-text u-text u-text-default u-text-variant u-text-9"> Helicopter
                                Mechanic</p>
                        </div>
                    </div>
                    <div class="u-container-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle u-video-cover u-white u-list-item-5"
                         data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-5">
                            <img alt="" class="u-expanded-width u-image u-image-default u-image-5" data-image-width="638"
                                 data-image-height="780" src="storage/images/7.jpg" data-animation-name="customAnimationIn"
                                 data-animation-duration="1250" data-animation-delay="250">
                            <h4 class="u-align-center u-text u-text-default u-text-10" data-animation-name=""
                                data-animation-duration="0" data-animation-delay="0" data-animation-direction="">Joe
                                Howard</h4>
                            <p class="u-align-center u-large-text u-text u-text-default u-text-variant u-text-11">
                                Automotive Technician</p>
                        </div>
                    </div>
                    <div class="u-container-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle u-video-cover u-white u-list-item-6"
                         data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-6">
                            <img alt="" class="u-expanded-width u-image u-image-default u-image-6" data-image-width="638"
                                 data-image-height="780" src="storage/images/8.jpg" data-animation-name="customAnimationIn"
                                 data-animation-duration="1250" data-animation-delay="250">
                            <h4 class="u-align-center u-text u-text-default u-text-12" data-animation-name=""
                                data-animation-duration="0" data-animation-delay="0" data-animation-direction=""> Sasha
                                Payne</h4>
                            <p class="u-align-center u-large-text u-text u-text-default u-text-variant u-text-13"> Auto body
                                technician</p>
                        </div>
                    </div>
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
    <section class="u-clearfix u-container-align-center u-palette-1-light-3 u-section-8" id="sec-5d62">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <h2 class="u-align-center u-text u-text-default u-text-1" data-animation-name="customAnimationIn"
                data-animation-duration="1500" data-animation-delay="500"> What Makes Us Special</h2>
            <p class="u-align-center u-text u-text-2" data-animation-name="customAnimationIn" data-animation-duration="1500"
               data-animation-delay="500"> Sample text. Click to select the Text Element.&nbsp;​Duis aute irure dolor in
                reprehenderit.</p>
            <div class="u-expanded-width u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    <div class="u-container-align-center u-container-style u-list-item u-repeater-item u-white u-list-item-1"
                         data-animation-name="flipIn" data-animation-duration="1500" data-animation-delay="500"
                         data-animation-direction="X">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                            <h5 class="u-align-center u-text u-text-3" data-animation-name="counter"
                                data-animation-event="scroll" data-animation-duration="3000">25</h5>
                            <p class="u-align-center u-text u-text-4"> Years of experience</p>
                        </div>
                    </div>
                    <div class="u-container-align-center u-container-style u-list-item u-repeater-item u-white u-list-item-2"
                         data-animation-name="flipIn" data-animation-duration="1500" data-animation-direction="X"
                         data-animation-delay="500">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
                            <h5 class="u-align-center u-text u-text-5" data-animation-name="counter"
                                data-animation-event="scroll" data-animation-duration="3000">18</h5>
                            <p class="u-align-center u-text u-text-6"> Amazing employees</p>
                        </div>
                    </div>
                    <div class="u-container-align-center u-container-style u-list-item u-repeater-item u-white u-list-item-3"
                         data-animation-name="flipIn" data-animation-duration="1500" data-animation-direction="X"
                         data-animation-delay="500">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                            <h5 class="u-align-center u-text u-text-7" data-animation-name="counter"
                                data-animation-event="scroll" data-animation-duration="3000">10k</h5>
                            <p class="u-align-center u-text u-text-8"> Hours of maintenance</p>
                        </div>
                    </div>
                    <div class="u-container-align-center u-container-style u-list-item u-repeater-item u-white u-list-item-4"
                         data-animation-name="flipIn" data-animation-duration="1500" data-animation-direction="X"
                         data-animation-delay="500">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4">
                            <h5 class="u-align-center u-text u-text-9" data-animation-name="counter"
                                data-animation-event="scroll" data-animation-duration="3000">2k</h5>
                            <p class="u-align-center u-text u-text-10"> Projects done</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-align-center u-clearfix u-container-align-center u-palette-1-light-3 u-section-9" id="carousel_831b">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <h2 class="u-align-center u-text u-text-default u-text-1">Car Tips</h2><!--blog--><!--blog_options_json-->
            <!--{"type":"Recent","source":"","tags":"","count":""}--><!--/blog_options_json-->
            <div class="u-blog u-expanded-width u-blog-1" data-site-sorting-prop="created" data-site-sorting-order="desc"
                 data-blog-id="blog-1">
                <div class="u-list-control"></div>
                <div class="u-repeater u-repeater-1"><!--blog_post-->
                    <div class="u-align-center u-blog-post u-container-align-center u-container-style u-repeater-item u-video-cover u-white u-repeater-item-1">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                            <a class="u-post-header-link" href="blog/post-5.html"><!--blog_post_image-->
                                <img alt="" class="u-blog-control u-expanded-width u-image u-image-default u-image-1"
                                     src="storage/images/mechanical-woman-holding-wrench.jpg" data-image-width="1380"
                                     data-image-height="920"><!--/blog_post_image-->
                            </a><!--blog_post_header-->
                            <h4 class="u-blog-control u-text u-text-2">
                                <a class="u-post-header-link" href="blog/post-5.html">Post 6 Headline</a>
                            </h4><!--/blog_post_header--><!--blog_post_content-->
                            <div class="u-blog-control u-post-content u-text u-text-3 fr-view">Sample small text. Lorem
                                ipsum dolor sit amet.
                            </div><!--/blog_post_content--><!--blog_post_readmore-->
                            <a href="blog/post-5.html"
                               class="u-blog-control u-border-active-none u-border-hover-none u-btn u-btn-rectangle u-button-style u-none u-text-body-color u-btn-1">
                                <!--blog_post_readmore_content--><!--options_json-->
                                <!--{"content":"Read More","defaultValue":"Читати далі"}--><!--/options_json-->Read More
                                <!--/blog_post_readmore_content--></a><!--/blog_post_readmore-->
                        </div>
                    </div>
                    <div class="u-align-center u-blog-post u-container-align-center u-container-style u-repeater-item u-video-cover u-white u-repeater-item-2">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
                            <a class="u-post-header-link" href="blog/post-4.html"><!--blog_post_image-->
                                <img alt="" class="u-blog-control u-expanded-width u-image u-image-default u-image-2"
                                     src="storage/images/low-angle-woman-replacing-car-wh.jpg" data-image-width="626"
                                     data-image-height="417"><!--/blog_post_image-->
                            </a><!--blog_post_header-->
                            <h4 class="u-blog-control u-text u-text-4">
                                <a class="u-post-header-link" href="blog/post-4.html">Post 5 Headline</a>
                            </h4><!--/blog_post_header--><!--blog_post_content-->
                            <div class="u-blog-control u-post-content u-text u-text-5 fr-view">Sample small text. Lorem
                                ipsum dolor sit amet.
                            </div><!--/blog_post_content--><!--blog_post_readmore-->
                            <a href="blog/post-4.html"
                               class="u-blog-control u-border-active-none u-border-hover-none u-btn u-btn-rectangle u-button-style u-none u-text-body-color u-btn-2">
                                <!--blog_post_readmore_content--><!--options_json-->
                                <!--{"content":"Read More","defaultValue":"Читати далі"}--><!--/options_json-->Read More
                                <!--/blog_post_readmore_content--></a><!--/blog_post_readmore-->
                        </div>
                    </div>
                    <div class="u-align-center u-blog-post u-container-align-center u-container-style u-repeater-item u-video-cover u-white u-repeater-item-3">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                            <a class="u-post-header-link" href="blog/post-3.html"><!--blog_post_image-->
                                <img alt="" class="u-blog-control u-expanded-width u-image u-image-default u-image-3"
                                     src="storage/images/auto-service-with-beautiful-woma.jpg" data-image-width="1600"
                                     data-image-height="1067"><!--/blog_post_image-->
                            </a><!--blog_post_header-->
                            <h4 class="u-blog-control u-text u-text-6">
                                <a class="u-post-header-link" href="blog/post-3.html">Post 4 Headline</a>
                            </h4><!--/blog_post_header--><!--blog_post_content-->
                            <div class="u-blog-control u-post-content u-text u-text-7 fr-view">Sample small text. Lorem
                                ipsum dolor sit amet.
                            </div><!--/blog_post_content--><!--blog_post_readmore-->
                            <a href="blog/post-3.html"
                               class="u-blog-control u-border-active-none u-border-hover-none u-btn u-btn-rectangle u-button-style u-none u-text-body-color u-btn-3">
                                <!--blog_post_readmore_content--><!--options_json-->
                                <!--{"content":"Read More","defaultValue":"Читати далі"}--><!--/options_json-->Read More
                                <!--/blog_post_readmore_content--></a><!--/blog_post_readmore-->
                        </div>
                    </div><!--/blog_post--><!--blog_post-->
                    <!--/blog_post--><!--blog_post-->
                    <!--/blog_post-->
                </div>
                <div class="u-list-control"></div>
            </div><!--/blog-->
            <a href="#"
               class="u-active-palette-5-dark-3 u-align-center u-border-none u-btn u-btn-round u-button-style u-hover-palette-5-dark-3 u-palette-1-base u-radius-2 u-text-active-white u-text-hover-white u-btn-4">Learn
                more </a>
        </div>
    </section>
    <section class="u-clearfix u-section-10" id="carousel_9629">
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
                                    <form action="https://forms.nicepagesrv.com/v2/form/process"
                                          class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="email"
                                          name="form" style="padding: 10px;">
                                        <div class="u-form-group u-form-name">
                                            <label for="name-175e" class="u-label">Name</label>
                                            <input type="text" placeholder="Enter your Name" id="name-175e" name="name"
                                                   class="u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle"
                                                   required="">
                                        </div>
                                        <div class="u-form-email u-form-group">
                                            <label for="email-175e" class="u-label">Email</label>
                                            <input type="email" placeholder="Enter a valid email address" id="email-175e"
                                                   name="email"
                                                   class="u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle"
                                                   required="">
                                        </div>
                                        <div class="u-form-group u-form-message">
                                            <label for="message-175e" class="u-label">Message</label>
                                            <textarea placeholder="Enter your message" rows="4" cols="50" id="message-175e"
                                                      name="message"
                                                      class="u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle"
                                                      required=""></textarea>
                                        </div>
                                        <div class="u-align-right u-form-group u-form-submit">
                                            <a href="#"
                                               class="u-active-palette-1-dark-1 u-border-none u-btn u-btn-submit u-button-style u-hover-palette-1-dark-1 u-btn-2">send
                                                a message</a>
                                            <input type="submit" value="submit" class="u-form-control-hidden">
                                        </div>
                                        <div class="u-form-send-message u-form-send-success">Дякую! Ваше повідомлення
                                            відправлене.
                                        </div>
                                        <div class="u-form-send-error u-form-send-message">Відправлення не вдалося.
                                            Будь-ласка, виправте помилки і спробуйте ще раз.
                                        </div>
                                        <input type="hidden" value="" name="recaptchaResponse">
                                        <input type="hidden" name="formServices"
                                               value="a18da5c3-ba72-b11c-c92e-be333a6ff337">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-section-11" id="carousel_ffc8">
        <div class="u-expanded u-grey-10 u-map">
            <div class="embed-responsive">
                <iframe class="embed-responsive-item" src="//maps.google.com/maps?output=embed&amp;q=Manhattan&amp;t=m"
                        data-map="JTdCJTIyYWRkcmVzcyUyMiUzQSUyMk1hbmhhdHRhbiUyMiUyQyUyMnpvb20lMjIlM0FudWxsJTJDJTIydHlwZUlkJTIyJTNBJTIycm9hZCUyMiUyQyUyMmxhbmclMjIlM0FudWxsJTJDJTIyYXBpS2V5JTIyJTNBbnVsbCUyQyUyMm1hcmtlcnMlMjIlM0ElNUIlNUQlN0Q="></iframe>
            </div>
        </div>
    </section>
@endsection
