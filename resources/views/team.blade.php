@extends('app')
@push('styles')
    <link rel="stylesheet" href="{{ asset('team.css') }}">
    <link rel="stylesheet" href="{{ asset('nicepage.css') }}">
@endpush

@push('scripts')
    <script type="text/javascript" src="{{ asset('jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('nicepage.js') }}"></script>
@endpush
@section('content')
    <section class="u-clearfix u-palette-1-light-3 u-section-1" id="carousel_8fae">
        <div class="u-expanded-width u-palette-1-light-2 u-shape u-shape-rectangle u-shape-1" data-animation-name="flipIn" data-animation-duration="1000" data-animation-delay="500" data-animation-direction="X"></div>
        <img src="storage/images/mechanics-repairing-car-workshop7.jpg" alt="" class="u-image u-image-default u-image-1" data-image-width="1700" data-image-height="1133" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="0">
        <div class="custom-expanded u-container-align-left u-container-style u-group u-white u-group-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="800" data-animation-direction="X">
            <div class="u-container-layout u-valign-middle u-container-layout-1">
                <h2 class="u-align-left u-text u-text-1">Our Team<br>
                </h2>
                <p class="u-align-left u-text u-text-2" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident </p>
                <a href="#" class="u-active-palette-5-dark-3 u-align-left u-border-none u-btn u-btn-round u-button-style u-hover-palette-5-dark-3 u-palette-1-base u-radius-2 u-text-active-white u-text-hover-white u-btn-1">Learn more </a>
            </div>
        </div>
    </section>
    <section class="u-align-center u-clearfix u-container-align-center u-palette-1-light-3 u-section-2" id="carousel_bc3e">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <h2 class="u-align-center u-text u-text-default u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="0">About Us</h2>
            <p class="u-align-center u-large-text u-text u-text-variant u-text-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="0"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            <a href="#" class="u-active-palette-5-dark-3 u-align-center u-border-none u-btn u-btn-round u-button-style u-hover-palette-5-dark-3 u-palette-1-base u-radius-2 u-text-active-white u-text-hover-white u-btn-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">Learn more </a>
        </div>
    </section>
    <section class="u-align-center u-clearfix u-container-align-center u-section-3" id="carousel_3f98">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <h2 class="u-align-center u-text u-text-default u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="0"> Team members</h2>
            <div class="u-expanded-width u-layout-grid u-list u-list-1">
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
                    <div class="u-container-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle u-video-cover u-white u-list-item-4" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="700">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4">
                            <img alt="" class="u-expanded-width u-image u-image-default u-image-4" data-image-width="638" data-image-height="780" src="storage/images/4.jpg" data-animation-name="customAnimationIn" data-animation-duration="1250" data-animation-delay="500">
                            <h4 class="u-align-center u-text u-text-default u-text-8" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""> Kristopher Roberts</h4>
                            <p class="u-align-center u-large-text u-text u-text-default u-text-variant u-text-9"> Helicopter Mechanic</p>
                        </div>
                    </div>
                    <div class="u-container-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle u-video-cover u-white u-list-item-5" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="700">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-5">
                            <img alt="" class="u-expanded-width u-image u-image-default u-image-5" data-image-width="638" data-image-height="780" src="storage/images/7.jpg" data-animation-name="customAnimationIn" data-animation-duration="1250" data-animation-delay="500">
                            <h4 class="u-align-center u-text u-text-default u-text-10" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">Joe Howard</h4>
                            <p class="u-align-center u-large-text u-text u-text-default u-text-variant u-text-11"> Automotive Technician</p>
                        </div>
                    </div>
                    <div class="u-container-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle u-video-cover u-white u-list-item-6" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="700">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-6">
                            <img alt="" class="u-expanded-width u-image u-image-default u-image-6" data-image-width="638" data-image-height="780" src="storage/images/8.jpg" data-animation-name="customAnimationIn" data-animation-duration="1250" data-animation-delay="500">
                            <h4 class="u-align-center u-text u-text-default u-text-12" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""> Sasha Payne</h4>
                            <p class="u-align-center u-large-text u-text u-text-default u-text-variant u-text-13"> Auto body technician</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-section-4" id="carousel_9629">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-container-style u-layout-cell u-size-20 u-layout-cell-1">
                            <div class="u-container-layout u-container-layout-1">
                                <h2 class="u-text u-text-default u-text-1">Write Us</h2>
                                <p class="u-align-left u-text u-text-2">Images from <a href="https://www.freepik.com" class="u-active-none u-border-1 u-border-active-palette-1-base u-border-black u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-link u-button-style u-hover-none u-none u-radius-0 u-text-body-color u-top-left-radius-0 u-top-right-radius-0 u-btn-1" target="_blank">Freepik</a>
                                </p>
                            </div>
                        </div>
                        <div class="u-container-style u-layout-cell u-size-40 u-layout-cell-2">
                            <div class="u-container-layout u-container-layout-2">
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
                                        <div class="u-align-right u-form-group u-form-submit">
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
    <section class="u-clearfix u-section-5" id="carousel_ffc8">
        <div class="u-expanded u-grey-10 u-map">
            <div class="embed-responsive">
                <iframe class="embed-responsive-item" src="//maps.google.com/maps?output=embed&amp;q=Manhattan&amp;t=m" data-map="JTdCJTIyYWRkcmVzcyUyMiUzQSUyMk1hbmhhdHRhbiUyMiUyQyUyMnpvb20lMjIlM0FudWxsJTJDJTIydHlwZUlkJTIyJTNBJTIycm9hZCUyMiUyQyUyMmxhbmclMjIlM0FudWxsJTJDJTIyYXBpS2V5JTIyJTNBbnVsbCUyQyUyMm1hcmtlcnMlMjIlM0ElNUIlNUQlN0Q="></iframe>
            </div>
        </div>
    </section>
@endsection
