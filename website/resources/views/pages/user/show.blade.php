<x-app-layout title="My Profile" :active="route('profile', Auth::id(), )">
				
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3">
			My Profile
		</h1>
	
		<div class="col-12 col-xl-6">
			<div class="card">
				<div class="card-body">
					<form action="{{ route("user.store") }}" method="POST">
						@csrf
						@method('POST')

						<div class="mb-3">
							<label class="form-label">Full Name</label>
							<input type="text" class="form-control" placeholder="Full name">
						</div>
						<div class="mb-3">
							<label class="form-label">Email address</label>
							<input type="email" class="form-control" placeholder="Email">
						</div>
						<button type="submit" class="btn btn-primary">
							Update
						</button>
					</form>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-12">
			<div class="card">
				<div class="card-header">
					<h5 class="card-title">Change Password</h5>
				</div>
				<div class="card-body">
					<form action="{{ route('user.update', auth()->id()) }}" method="POST">
						@csrf
						@method('post')

						<div class="mb-3">
							<label class="form-label" for="old-password">Old Password</label>
							<input type="password" class="form-control" id="old-password" placeholder="Current password">
						</div>

						<div class="mb-3">
							<label class="form-label" for="new-password">New Password</label>
							<input type="password" class="form-control" id="new-password" placeholder="New Password">
						</div>

						<div class="mb-3">
							<label class="form-label" for="confirm-password">Confirm Password</label>
							<input type="password" class="form-control" id="confirm-password" placeholder="Confirm Password">
						</div>

						<div class="mb-3">
							<button type="submit" class="btn btn-primary mb-2">
								Change
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

</x-app-layout>