<div class="divider"></div>
<section id="payment_forms"  class="payment_forms">
    <div class="container">
        <div class="content">
            <div class="container">
                <h1 class="single">Формы оплаты</h1>
                @foreach($payment_forms as $payment_form)
                    <article>
                        <div class="pic"><img width="121"
                                src="{{ asset('/storage/uploaded_images/payment_forms/' .  $payment_form->image_name) }}" alt="">
                        </div>
                        <div class="info">
                            <h3>{{ $payment_form->title }}</h3>
                            <p>{!! Illuminate\Support\Str::limit($payment_form->description, $limit = 500, $end = '...') !!}
                            </p>
                        </div>
                    </article>
                @endforeach
                {{--<article>
                    <div class="pic"><img width="121"
                            src="../images/visa_icon.png">
                    </div>
                    <div class="info">
                        <h3>Оплата с помощью карты VISA</h3>
                        <p>Быстро и легко
                        </p>
                    </div>
                </article>
                <article>
                    <div class="pic"><img width="121"
                        src="../images/mastercard_icon.png">
                </div>
                <div class="info">
                    <h3>Оплата с помощью карты MASTER CARD</h3>
                    <p>Быстро и легко
                    </p>
                </div>
                </article>
                <article>
                    <div class="pic"><img width="121"
                        src="../images/qiwi_icon.png">
                </div>
                <div class="info">
                    <h3>Оплата с помощью карты QIWI</h3>
                    <p>Выбирайте удобный вариант
                    </p>
                </article>
                <article>
                    <div class="pic"><img width="121"
                        src="../images/yandexmaney_icon.jpg">
                </div>
                <div class="info">
                    <h3>Оплата с помощью Яндекс Денег</h3>
                    <p>Оплата по полученым реквизитам
                    </p>
                </article>--}}
            </div>
        </div>
    </div>
</section>
