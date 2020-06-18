<section class="news">
        <div class="container">
            <h2>Последние новости</h2>

            @foreach($articles as $article)
                <article>
                    <div class="pic"><img src="{{ asset('/storage/uploaded_images/articles/' .  $article->image_name) }}" alt=""></div>
                    <div class="info">
                        <h4>{{ $article->title }}</h4>
                        <p class="date">{{ date('d', strtotime($article->date)) }} {{ \App\Http\Controllers\HomeController::MONTH_STRINGS[(int)(date('m', strtotime($article->date)))] }} {{ date('Y', strtotime($article->date)) }}</p>
                        <p>{!!  Illuminate\Support\Str::limit($article->description, $limit = 100, $end = '...') !!}</p>
                        @if(!empty($article->link)) <a href="{{ $article->link }}" class="more" target="_blank">Read more</a> @endif
                    </div>
                </article>
            @endforeach

            <div class="btn-holder">
                <a class="btn" href="#">See archival news</a>
            </div>
        </div>
    </section>
