<x-app-layout title="Users" :active="route('user.index')">		
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3">
			Create User
			<a href="{{ route('user.index') }}" class="btn btn-primary float-end">All Users</a>
		</h1>

	</div>
</x-app-layout>