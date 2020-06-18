<div class="slider">

    @php( $seo_page = \App\SEOPage::where('page_url', url()->current())->first() )


		<ul class="bxslider">
			<li class="slider-1">
				<div class="container">
					<div class="info">

                        @if(!empty($seo_page->page_h1))
                            <h2><strong>{{ $seo_page->page_h1 }}</strong></h2>
                        @else
                            <h1>Получай образование <br><span>Не выходя из дома</span></h1>
                        @endif
						<a href="#">Узнать больше о наших программах обучения</a>
					</div>
				</div>
				<!-- / content -->
			</li>
			<li class="slider-2">
				<div class="container">
					<div class="info">
						<h2>Обучение в короткие сроки<br><span>Индивидуальный подход</span></h2>
						<a href="#">Узнать больше о наших программах обучения</a>
					</div>
				</div>
				<!-- / content -->
			</li>
			<li class="slider-3">
				<div class="container">
					<div class="info">
						<h2>Профессия на которой можно зарабатывать<br><span>Приступай к работе сразу после обучения</span></h2>
						<a href="#">Узнать больше о наших программах обучения</a>
					</div>
				</div>
				<!-- / content -->
			</li>
		</ul>
		<div class="bg-bottom"></div>
    </div>
