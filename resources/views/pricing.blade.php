@extends('app')
@push('styles')
    <link rel="stylesheet" href="{{ asset('pricing_page.css') }}">
    <link rel="stylesheet" href="{{ asset('nicepage.css') }}">
@endpush

@push('scripts')
    <script type="text/javascript" src="{{ asset('jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('nicepage.js') }}"></script>
@endpush
@section('content')
    <section class="u-align-center u-clearfix u-container-align-center u-palette-1-light-3 u-section-3" id="carousel_bc3e">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <h2 class="u-align-center u-text u-text-default u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="0"> Ціни</h2>
            <p class="u-align-center u-large-text u-text u-text-variant" style="margin-top: 0px;margin-bottom: 0px" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="0">
                Ми дбаємо про те, щоб якісні перевезення були доступні для кожного.
            </p>
            <p class="u-align-center u-large-text u-text u-text-variant" style="margin-top: 0px;margin-bottom: 0px" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="0">
                Гнучка система цін залежно від маршруту та потреб клієнта.
            </p>
            <p class="u-align-center u-large-text u-text u-text-variant" style="margin-top: 0px;margin-bottom: 0px" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="0">
                Тури "під ключ" – без зайвого клопоту: транспорт, проживання, харчування, екскурсії.
            </p>
            <p class="u-align-center u-large-text u-text u-text-variant" style="margin-top: 0px;margin-bottom: 0px" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="0">
                Доступні пропозиції як для невеликих груп, так і для великих організацій.
            </p>
            <p class="u-align-center u-large-text u-text u-text-variant" style="margin-top: 0px;margin-bottom: 0px" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="0">
                Подорож у будь-яку країну Європи (а при потребі – ще далі).
            </p>
            <p class="u-align-center u-large-text u-text u-text-variant" style="margin-top: 0px;margin-bottom: 0px" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="0">
                З нами вигідно подорожувати – бо ми цінуємо кожного клієнта.
            </p>
        </div>
    </section>
    <section class="u-align-center u-clearfix u-container-align-center u-palette-1-light-3 u-section-3" id="carousel_bc3e">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <h2 class="u-align-center u-text u-text-default u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="0"> Послуги</h2>
            <p class="u-align-center u-large-text u-text u-text-variant" style="margin-top: 0px;margin-bottom: 0px" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="0">
                Туристичні автобусні перевезення Україною та Європою.
            </p>
            <p class="u-align-center u-large-text u-text u-text-variant" style="margin-top: 0px;margin-bottom: 0px" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="0">
                Міжнародні та міжміські групові поїздки.
            </p>
            <p class="u-align-center u-large-text u-text u-text-variant" style="margin-top: 0px;margin-bottom: 0px" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="0">
                Організація шкільних турів, корпоративних заходів, весільних перевезень.
            </p>
            <p class="u-align-center u-large-text u-text u-text-variant" style="margin-top: 0px;margin-bottom: 0px" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="0">
                Тури "під ключ": транспорт + харчування + проживання + екскурсії.
            </p>
            <p class="u-align-center u-large-text u-text u-text-variant" style="margin-top: 0px;margin-bottom: 0px" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="0">
                Оренда автобусів під замовлення для будь-яких подій.
            </p>
            <p class="u-align-center u-large-text u-text u-text-variant" style="margin-top: 0px;margin-bottom: 0px" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="0">
                Технічний супровід та консультації при складанні маршруту.
            </p>
        </div>
    </section>

    <section class="u-clearfix u-section-10" id="carousel_9629">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-container-style u-layout-cell u-size-20 u-layout-cell-1">
                            <div class="u-container-layout u-container-layout-1">
                                <h2 class="u-text u-text-default u-text-1">Напишіть нам</h2>

                            </div>
                        </div>
                        <div class="u-container-style u-layout-cell u-size-40 u-layout-cell-2">
                            <div class="u-container-layout u-container-layout-2">
                                <div class="u-form u-form-1">
                                    <form method="POST" action="/write-message"
                                          class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form"
                                          name="form_write_us"
                                          style="padding: 10px;">
                                        @csrf
                                        <div class="u-form-group u-form-name">
                                            <label for="name-175e" class="u-label">Імʼя</label>
                                            <input type="text" placeholder="Введіть своє імʼя" id="name-175e"
                                                   name="name"
                                                   class="u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle"
                                                   required="">
                                        </div>
                                        <div class="u-form-email u-form-group">
                                            <label for="email-175e" class="u-label">Електронна пошта</label>
                                            <input type="email" placeholder="Введіть свою електронну пошту"
                                                   id="email-175e" name="email"
                                                   class="u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle"
                                                   required="">
                                        </div>
                                        <div class="u-form-email u-form-group">
                                            <label for="email-175e" class="u-label">Номер телефону</label>
                                            <input type="text" placeholder="+380 98 765 4321"
                                                   id="email-175e" name="phone"
                                                   class="u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle"
                                                   required="">
                                        </div>
                                        <div class="u-form-group u-form-message">
                                            <label for="message-175e" class="u-label">Повідомлення</label>
                                            <textarea placeholder="Введіть своє повідомлення" rows="4" cols="50"
                                                      id="message-175e" name="message"
                                                      class="u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle"
                                                      required=""></textarea>
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
    <section class="u-clearfix u-section-11" id="carousel_ffc8">
        <div class="u-expanded u-grey-10 u-map">
            <div class="embed-responsive">
                <iframe
                        class="embed-responsive-item"
                        src="https://maps.google.com/maps?q=49.32326416334298,28.09199529115664+(НазарійЛ)&z=15&output=embed">
                </iframe>
            </div>
        </div>
    </section>
@endsection
