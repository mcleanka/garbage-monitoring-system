<x-app-layout title="Bin Logs" :active="route('bin-log.index')">
				
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3">
			Bin Logs
		</h1>

		<div class="col-12 col-lg-12 col-xxl-12 d-flex">
			<div class="card flex-fill">
				<div class="card-body">
					<table class="table table-hover my-0" id="bin-log-datatable">
						<thead>
							<tr>
								<th>ID</th>
								<th>Bin Name</th>
								<th>Location</th>
								<th>Percentage</th>
								<th>Status</th>
								<th>Date</th>
							</tr>
						</thead>
						<tbody></tbody>
					</table>
				</div>
			</div>
		</div>
	
	</div>

	<script type="text/javascript">
		$(function () {
			const table = $('#bin-log-datatable').DataTable({
				processing: true,
				serverSide: true,
				ajax: "{{ route('bin-log.index') }}",
				columns: [
					{data: 'DT_RowIndex', name: 'DT_RowIndex'},
					{data: 'name', name: 'name'},
					{data: 'email', name: 'email'},
					{data: 'dob', name: 'dob'},
					{
						data: 'action', 
						name: 'action', 
						orderable: true, 
						searchable: true
					},
				]
			});
		});
	</script>

</x-app-layout>