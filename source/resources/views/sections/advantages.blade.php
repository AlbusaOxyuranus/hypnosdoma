<section id="posts" class="posts">
    <div class="container">
            <h1 class="single">Преимущества</h1><br>
        @foreach($advantages as $advantage)

            <article>
                <div class="pic"><img width="121" src="{{ asset('/storage/uploaded_images/advantages/' .  $advantage->image_name) }}" alt=""></div>
                <div class="info">
                    <h3>{{ $advantage->title }}</h3>
                    <p>{!!  Illuminate\Support\Str::limit($advantage->description, $limit = 500, $end = '...') !!}</p>
                </div>
            </article>
        @endforeach

    </div>
</section>
