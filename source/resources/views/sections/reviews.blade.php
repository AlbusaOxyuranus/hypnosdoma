<section id="reviews">

    <div class="divider"></div>

    <div class="content">
            <div class="container">
                <h1 class="single"> Отзывы</h1>
                <div class="main-content">
                        <div class="container">
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner row">
                                        {{--@if (!empty(\App\Rewiew::all()[0]))
                                            <div class="carousel-item active">
                                                <img src="{{ asset('/storage/uploaded_images/rewiews/' .  \App\Rewiew::all()[0]->img) }}" class="d-block w-25" alt="{{ \App\Rewiew::all()[0]->title }}">
                                            </div>
                                        @endif--}}
                                        @forelse(\App\Rewiew::all() as $rewiew)
                                            <div class="carousel-item">
                                                <img src="{{ asset('/storage/uploaded_images/rewiews/' .  $rewiew->img) }}" class="d-block w-25" alt="{{ $rewiew->title }}">
                                            </div>
                                        @empty
                                            <div><h4>Отзывов пока нет</h4></div>
                                        @endforelse
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                </div>
            </div>
    </div>
</section>
