<section class="events">
		<div class="container">
			<h2>Предстоящие События</h2>

			@foreach($events as $event)
				<article>
					<div class="current-date">
						<p>{{ \App\Http\Controllers\HomeController::MONTH_STRINGS[(int)(date('m', strtotime($event->date)))] }}</p>
						<p class="date">{{ date('d', strtotime($event->date)) }}</p>
					</div>
					<div class="info">
						<div>{!!  Illuminate\Support\Str::limit($event->description, $limit = 200, $end = '...') !!}</div>
						@if(!empty($event->link)) <a href="{{ $event->link }}" class="more" target="_blank">Read more</a> @endif
					</div>
				</article>
			@endforeach

			<div class="btn-holder">
				<a class="btn blue" href="#">See all upcoming events</a>
			</div>
		</div>
    </section>
