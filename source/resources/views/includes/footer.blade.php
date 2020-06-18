<footer id="footer">
        <div class="container">
            <section>
                <article class="col-1">
                    <h3>Контакты</h3>
                    <ul>

                        @forelse(\App\Contact::all() as $contact)
                                <li>
                                    <img width="30" src="/img/contacts_img/{{ $contact->img }}" alt="{{ $contact->title }}">
                                    <a href="#">{{ $contact->content }}</a>
                                </li>
                        @empty
                            <div><h4>Контакты пока не созданы</h4></div>
                        @endforelse

                        {{--<li class="address"><a href="#">г. Москва<br>ул. Снежная 20</a></li>
                        <li class="mail"><a href="#">info@hypnosdoma.com</a></li>
                        <li class="phone last"><a href="#">7 (958) 223-45-74 </a></li>--}}
                    </ul>
                </article>

                @if(count($payment_forms = \App\Payment_form::all()->where('show', true)) > 0)
                    <article class="col-2">
                        <h3>Формы оплаты</h3>
                        <ul>
                            @foreach($payment_forms as $payment_form)
                                <li><a href="{{ $payment_form->id }}">{{ mb_strtoupper($payment_form->title) }}</a></li>
                            @endforeach
                            {{--<li><a href="#">КАРТОЙ VISA</a></li>
                            <li><a href="#"> КАРТОЙ MASTERCARD</a></li>
                            <li><a href="#">КОШЕЛЕК QIWI</a></li>
                            <li class="last"><a href="#">ЯНДЕКС ДЕНЬГИ</a></li>--}}
                        </ul>
                    </article>
                @endif

                <article class="col-3">
                    <h3>Социальные сети</h3>
                    <p>Следите за нами и нашими новыми статьями и видео.</p>
                    <ul>
                        <li class="facebook"><a href="#">Facebook</a></li>
                        <li class="google-plus"><a href="#">Google+</a></li>
                        <li class="twitter"><a href="#">Twitter</a></li>
                        <li class="pinterest"><a href="#">Pinterest</a></li>
                    </ul>
                </article>

                <article class="col-4">
                    <h3>Подписка</h3>
                    <p>Будьте всегда вкурсе наших событий</p>
                    <form action="#">
                        <input placeholder="Адрес электронной почты" type="text">
                        <button type="submit">Подписаться</button>
                    </form>
                    <ul>
                        <li><a href="#"></a></li>
                    </ul>
                </article>
            </section>
            <p class="copy"><a href="https://o2bionics.com">Copyright 2019 © O2 Bionics Inc. Разработка и продвижение веб-сайтов</a></p>
        </div>
        <!-- / container -->
    </footer>
    <!-- / footer -->
