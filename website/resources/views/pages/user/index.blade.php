<x-app-layout title="Users" :active="route('user.index')">		
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3">
			System Users
			<a href="{{ route('user.create') }}" class="btn btn-primary float-end">Add User</a>
		</h1>

		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<table class="table table-striped" id="users-table" style="width:100%">
							<thead>
								<tr>
									<th>#</th>
									<th>Name</th>
									<th>Email</th>
									<th>Verified</th>
									<th>Created At</th>
									<th>Updated At</th>
								</tr>
							</thead>
							<tbody></tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	
	</div>

	<script type="text/javascript">
		$(function () {
			const table = $('#users-table').DataTable({
				processing: true,
				serverSide: true,
				ajax: "{{ route('user.index') }}",
				columns: [
					{data: 'DT_RowIndex', name: 'DT_RowIndex'},
					{data: 'name', name: 'name'},
					{data: 'email', name: 'email'},
					{data: 'verified', name: 'verified'},
					{data: 'created_on', name: 'created_on'},
					{data: 'updated_on', name: 'updated_on'},
				]
			});
		});
	</script>

</x-app-layout>