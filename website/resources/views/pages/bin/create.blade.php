<x-app-layout title="Bins" :active="route('bin.index')">		
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3">
			All Bins
			<a href="{{ route('bin.index') }}" class="btn btn-primary float-end">All Bins</a>
		</h1>

		<div class="col-12 col-xl-6">
			<div class="card">
				<div class="card-body">
					<form action="{{ route("bin.store") }}" method="POST">
						@csrf
						@method('POST')

						<div class="mb-3">
							<label class="form-label">Bin Name</label>
							<input type="text" class="form-control" name="name" placeholder="Bin name" required>
						</div>
						<div class="mb-3">
							<label class="form-label">Location</label>
							<input type="text" class="form-control" name="location" placeholder="Location" required>
						</div>
						<div class="mb-3">
							<label class="form-label">Capacity</label>
							<input type="number" class="form-control" name="capacity" placeholder="Capacity" required>
						</div>
						<button type="submit" class="btn btn-primary">
							Add Bin
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</x-app-layout>