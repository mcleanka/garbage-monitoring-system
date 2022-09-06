<x-app-layout title="Bin Notifications" :active="route('notify.index')">
				
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3">
			Notifications
		</h1>
	
		<div class="row">
			<div class="col-12 mx-auto">
				<div class="card">
					<div class="card-body">
						<div class="table-responsive table-upgrade">
							<table class="table">
								<tbody>

									@foreach ($notifications as $key => $notification)
										
										<tr>
											<td>{{ $notification->data }}</td>
											<td>{{ $notification->notifiable_type }}</td>
											<td class="text-center">
												@if ($notification->read_at)
													<span role="img" aria-label="yes">✔</span>
												@else
													<span role="img" aria-label="no">❌</span>
												@endif
											</td>
										</tr>

									@endforeach

									@empty($notifications)
										<tr>
											<td>No notifications found</td>
										</tr>
									@endempty
									
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

</x-app-layout>