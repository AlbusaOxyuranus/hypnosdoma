<div class="divider"></div>
<section id="contacts" class="contacts">

        <div class="container">
            <h1 class="single">Наши контакты</h1>
            @forelse(\App\Contact::all() as $contact)
                <article>
                    <div class="pic">
                        <img width="65" src="/img/contacts_img/{{ $contact->img }}" alt="{{ $contact->title }}">
                    </div>

                    <div class="info">
                            <h3 class="card-title">{{ $contact->title }}</h3>
                            <p class="card-text">{{ $contact->content }}</p>
                    </div>
                </article>
            @empty
                <div><h4>Контакты пока не созданы</h4></div>
            @endforelse
        </div>
</section>
