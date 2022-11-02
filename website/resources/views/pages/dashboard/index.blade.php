<x-app-layout>
				
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3">
			Dashboard
		</h1>

		<div class="row">
			<div class="col-5">
				<div class="w-100">
					<div class="row">

						@empty($bins)
							<p>No bins available</p>
						@else
							@foreach ($bins as $key => $bin)
								<div class="col-sm-6">
									<div class="card">
										<div class="card-body">
											<div class="row">
												<div class="col mt-0">
													<h5 class="card-title">
														{{ $bin->name }}
													</h5>
												</div>

												<div class="col-auto">
													<div class="stat text-primary">
														<i class="align-middle" data-feather="trash"></i>
													</div>
												</div>
											</div>
											<h1 class="mt-1 mb-3">{{ $bin->capacity }}M</h1>
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
						@endempty

					</div>
				</div>
			</div>

			<div class="col-7">
				<div class="card flex-fill w-100">
					<div class="card-body py-3">
						<div class="chart chart-sm">
							<canvas id="trash-accumulation-chart"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-4 d-flex order-1 order-xxl-1">
				<div class="card flex-fill">
					<div class="card-header">
						<h5 class="card-title mb-0">Calendar</h5>
					</div>
					<div class="card-body d-flex">
						<div class="align-self-center w-100">
							<div class="chart">
								<div id="datetimepicker-dashboard"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-8 d-flex">
				<div class="card flex-fill w-100">
					<div class="card-header">
						<h5 class="card-title mb-0">Monthly Collections</h5>
					</div>
					<div class="card-body d-flex w-100">
						<div class="align-self-center chart chart-lg">
							<canvas id="yearly-data-chart"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script> 
			
	<script>
		const ctx_live = document.getElementById("trash-accumulation-chart");
		const trashBins = new Chart(ctx_live, {
			type: 'line',
			data: {
				labels: [],
				datasets: [{
					data: [],
					borderWidth: 1,
					borderColor:'#006699',
					label: 'Bin Distance',
				}]
			},
			options: {
				responsive: true,
				title: {
					display: true,
					text: "Trash Accumulation",
				},
				legend: {
					display: false
				},
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero: true,
						}
					}]
				}
			}
		});
		
		const getData = function() {
			$.ajax({
				url: "{{ route("bin-log.show", $activeBin->id ?? 100) }}",
				success: (data) => {
					trashBins.data
							.labels
							.push(data.log.time);

					trashBins.data
							.datasets[0]
							.data
							.push(data.log.distance);

					trashBins.update();
				}
			});
		};

		setInterval(getData, 10000);
	</script>

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Bar chart
			new Chart(document.getElementById("yearly-data-chart"), {
				type: "bar",
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "This year",
						backgroundColor: window.theme.primary,
						borderColor: window.theme.primary,
						hoverBackgroundColor: window.theme.primary,
						hoverBorderColor: window.theme.primary,
						data: @json($yearlyData->all()),
						barPercentage: .75,
						categoryPercentage: .5
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					scales: {
						yAxes: [{
							gridLines: {
								display: false
							},
							stacked: false,
							ticks: {
								stepSize: 5,
								max: {{ $yearlyData->max() }}+5,
							}
						}],
						xAxes: [{
							stacked: false,
							gridLines: {
								color: "transparent"
							}
						}]
					}
				}
			});
		});
	</script>

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
			var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();
			document.getElementById("datetimepicker-dashboard").flatpickr({
				inline: true,
				prevArrow: "<span title=\"Previous month\">&laquo;</span>",
				nextArrow: "<span title=\"Next month\">&raquo;</span>",
				defaultDate: defaultDate
			});
		});
	</script>
</x-app-layout>