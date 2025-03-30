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
        <div class="u-expanded-width u-palette-1-light-2 u-shape u-shape-rectangle u-shape-1"
             data-animation-name="flipIn" data-animation-duration="1000" data-animation-delay="500"
             data-animation-direction="X"></div>
        <img src="storage/our_team/{{$ourTeam['first_main_image']}}" alt="" class="u-image u-image-default u-image-1"
             data-image-width="1700" data-image-height="1133" data-animation-name="customAnimationIn"
             data-animation-duration="1500" data-animation-delay="0">
        <div class="custom-expanded u-container-align-left u-container-style u-group u-white u-group-1"
             data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="800"
             data-animation-direction="X">
            <div class="u-container-layout u-valign-middle u-container-layout-1">
                <h2 class="u-align-left u-text u-text-1">Our Team<br>
                </h2>
                <p class="u-align-left u-text u-text-2" data-animation-name="" data-animation-duration="0"
                   data-animation-delay="0" data-animation-direction=""> {{$ourTeam['first_main_text']}}</p>
                <a href="#"
                   class="u-active-palette-5-dark-3 u-align-left u-border-none u-btn u-btn-round u-button-style u-hover-palette-5-dark-3 u-palette-1-base u-radius-2 u-text-active-white u-text-hover-white u-btn-1">Learn
                    more </a>
            </div>
        </div>
    </section>
    <section class="u-align-center u-clearfix u-container-align-center u-palette-1-light-3 u-section-2"
             id="carousel_bc3e">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <h2 class="u-align-center u-text u-text-default u-text-1" data-animation-name="customAnimationIn"
                data-animation-duration="1500" data-animation-delay="0">About Us</h2>
            <p class="u-align-center u-large-text u-text u-text-variant u-text-2"
               data-animation-name="customAnimationIn" data-animation-duration="1500"
               data-animation-delay="0"> {{$ourTeam['about_us_text']}}</p>
            <a href="#"
               class="u-active-palette-5-dark-3 u-align-center u-border-none u-btn u-btn-round u-button-style u-hover-palette-5-dark-3 u-palette-1-base u-radius-2 u-text-active-white u-text-hover-white u-btn-1"
               data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">Learn
                more </a>
        </div>
    </section>
    <section class="u-align-center u-clearfix u-container-align-center u-section-3" id="carousel_3f98">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <h2 class="u-align-center u-text u-text-default u-text-1" data-animation-name="customAnimationIn"
                data-animation-duration="1500" data-animation-delay="0"> Team members</h2>
            <div class="u-expanded-width u-layout-grid u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    @foreach($ourTeam['employees'] as $index=>$employee)
                        <div
                            class="u-container-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-{{$index+1}}"
                            data-animation-name="customAnimationIn" data-animation-duration="1500"
                            data-animation-delay="500">
                            <div
                                class="u-container-layout u-similar-container u-valign-top u-container-layout-{{$index+1}}">
                                <img alt="" class="u-expanded-width u-image u-image-default u-image-1"
                                     data-image-width="638" data-image-height="780"
                                     src="storage/main/{{$employee['image']}}" data-animation-name="customAnimationIn"
                                     data-animation-duration="1250" data-animation-delay="250">
                                <h4 class="u-align-center u-text u-text-default u-text-2" data-animation-name=""
                                    data-animation-duration="0" data-animation-delay="0"
                                    data-animation-direction="">{{$employee['full_name']}}</h4>
                                <p class="u-align-center u-large-text u-text u-text-default u-text-variant u-text-3"> {{$employee['position']}}</p>
                            </div>
                        </div>
                    @endforeach
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
    <section class="u-clearfix u-section-5" id="carousel_ffc8">
        <div class="u-expanded u-grey-10 u-map">
            <div class="embed-responsive">
                <iframe class="embed-responsive-item" src="//maps.google.com/maps?output=embed&amp;q=Manhattan&amp;t=m"
                        data-map="JTdCJTIyYWRkcmVzcyUyMiUzQSUyMk1hbmhhdHRhbiUyMiUyQyUyMnpvb20lMjIlM0FudWxsJTJDJTIydHlwZUlkJTIyJTNBJTIycm9hZCUyMiUyQyUyMmxhbmclMjIlM0FudWxsJTJDJTIyYXBpS2V5JTIyJTNBbnVsbCUyQyUyMm1hcmtlcnMlMjIlM0ElNUIlNUQlN0Q="></iframe>
            </div>
        </div>
    </section>
@endsection
