<section id="service_packages">

    <div class="divider"></div>

    <div class="content">
            <div class="container">
                <h1 class="single"> Ценовые пакеты</h1>




                                    <div class="pricing-table">
                                            @forelse(\App\Package::all() as $package)
                                            <div class="col">
                                                <div class="table">
                                                    <h2>{{ $package->name }}</h2>
                                                    @if(!empty($package->popular))
                                                        <div class="pop">Популярный</div>
                                                    @endif
                                                    <hr>
                                                    <div class="price">
                                                            {{ $package->price }}
                                                        <span>{{ $package->currency }}</span>
                                                    </div>
                                                    <hr>
                                                    <ul>
                                                        <li><strong>{{ $package->description }}</strong></li>
                                                        {!! $package->content !!}
                                                    </ul>
                                                    <a href="#"> Купить сейчас</a>
                                                </div>
                                            </div>


                                    {{-- <div class="col-4">

                                            <div class="card" style="background-color:brown;width:400px">
                                                <div class="card-header">
                                                    <h3>{{ $package->name }}</h3>
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $package->description }}</h5>
                                                    <p class="card-text">{!!  Illuminate\Support\Str::limit($package->content, $limit = 100, $end = '...') !!}</p>
                                                    <a href="#" class="btn btn-primary">Заказать</a>
                                                </div>
                                            </div>
                                        </div>
                                         --}}

                                         {{-- <div class="card mb-4">
                                                <div class="card-img-wrapper">
                                                  {{-- <img class="card-img-top" src="{{user.photoUrl || '../../../assets/user.png'}}" alt="{{user.knownAs}}"> --}}
                                                  {{-- <ul class="list-inline member-icons animate text-center">
                                                    <li class="list-inline-item"><button class="btn btn-primary"
                                                        [routerLink]="['/members/', user.id]"><i class="fa fa-user"></i></button></li>
                                                    <li class="list-inline-item"><button class="btn btn-primary" (click)="sendLike(user.id)"><i class="fa fa-heart"></i></button></li>
                                                    <li class="list-inline-item"><button class="btn btn-primary" [routerLink]="['/members/', user.id]" [queryParams]="{tab: 3}" ><i class="fa fa-envelope"></i></button></li>
                                                  </ul> --}}
                                                {{-- </div>
                                                <div class="card-body p-1">
                                                        <h5 class="card-title">{{ $package->description }}</h5>
                                                        <p class="card-text">{!!  Illuminate\Support\Str::limit($package->content, $limit = 100, $end = '...') !!}</p>
                                                        <a href="#" class="btn btn-primary">Заказать</a>
                                                </div>
                                              </div>
                                            </div> --}}
                                    @empty
                                        <div><h4>Пакеты пока не созданы</h4></div>
                                    @endforelse
                                </div>


            </div>
    </div>
</section>
