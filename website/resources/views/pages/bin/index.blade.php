<x-app-layout title="Bins" :active="route('bin.index')">
				
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3">
			Bins
		</h1>
	
		<div class="row">
			
			@foreach ($bins as $key => $bin)
			
				<div class="col-6 d-flex">
					<div class="card flex-fill">
						<div class="card-body">
							<div class="row">
								<div class="col mt-0">
									<h5 class="card-title">{{ $bin->name }}</h5>
								</div>

								<div class="col-auto">
									<a href="{{ route('bin.show', $bin->id) }}" class="stat">
										<i class="fa-solid fa-dollar-sign align-middle" data-feather="edit"></i>
									</a>
								</div>
							</div>
							<h4 class="mt-0 mb-1"> <span class="text-muted">Total Height:</span> {{ $bin->capacity }}Meters</h4>

							<div class="mb-0">
								<span class="text-danger">
									<i class="mdi mdi-arrow-bottom-right"></i>
									{{ $bin->level->first()->percentage ?? 0 }}%
								</span>
								
								@if ($bin->level->first())
								<span class="text-muted">
									{{ $bin->level->first()->created_at->diffForHumans() ?? '--' }}
								</span>
								@else
									<span class="text-muted">
										--
									</span>
								@endif
							</div>
						</div>
					</div>
				</div>

			@endforeach

		</div>

	</div>

</x-app-layout>