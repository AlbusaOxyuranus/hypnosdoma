<section id="our_teachers">

    <div class="divider"></div>

    <div class="content">
        <div class="container">
            <h1 class="single">Наши преподаватели</h1>

            <div class="teacher-table">
                @forelse(\App\Specialist::all() as $specialist)
                <div class="col">
                    <div class="table">
                        <div class="photo">
                            <img src="{{ asset('/storage/uploaded_images/specialist/' .  $specialist->img) }}"
                                alt="">
                        </div>
                        <div class="fio">
                            <h4>{{ $specialist->surname }}</h4>
                            <h4>{{ $specialist->name }} {{ $specialist->patronymic }}</h4>
                            <hr>
                        </div>
                        <div class="study">
                            <p>{!! $specialist->description !!}</p>
                        </div>
                    </div>
                </div>

            @empty
            <div>
                <h4>Преподаватели пока не созданы</h4>
            </div>
            @endforelse
        </div>
            {{-- <div class="main-content">
                    <div class="slider-con">
                        <ul class="bxslider">
                                @forelse(\App\Specialist::all() as $specialist)
                            <li>
                                    <div class="container">
                                            <div class="row">

                                                    <div class="col-3">
                                                        <div class="card mb-3">
                                                            <img src="{{ asset('/storage/uploaded_images/specialist/' .  $specialist->img) }}"
            class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $specialist->surname }} {{ $specialist->name }} {{ $specialist->patronymic }}
                </h5>
                <p class="card-text">{!! Illuminate\Support\Str::limit($specialist->description, $limit = 100, $end =
                    '...') !!}</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>

    </div>
    </div>

    </li>
    @empty
    <div>
        <h4>Пакеты пока не созданы</h4>
    </div>
    @endforelse

    </ul>
    </div>
    </div> --}}


    </div>
    <!-- / container -->
    </div>

</section>
