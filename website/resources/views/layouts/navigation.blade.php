<nav id="sidebar" class="sidebar js-sidebar">
	<div class="sidebar-content js-simplebar">
		<a class="sidebar-brand" href="{{ route('home') }}">
			<span class="align-middle">
				GM System
			</span>
		</a>

		<ul class="sidebar-nav">

			<li class="sidebar-item @if ($isActive==route('dashboard.index'))
				{{ __('active') }}
			@endif">
				<a class="sidebar-link" href="{{ route('dashboard.index') }}">
					<i class="align-middle" data-feather="home"></i>
					<span class="align-middle">Dashboard</span>
				</a>
			</li>

			<li class="sidebar-item @if ($isActive==route('bin-log.index'))
				{{ __('active') }}
			@endif">
				<a class="sidebar-link" href="{{ route('bin-log.index') }}">
					<i class="align-middle" data-feather="list"></i>
					<span class="align-middle">Bin Logs</span>
				</a>
			</li>

			<li class="sidebar-item @if ($isActive==route('bin.index'))
				{{ __('active') }}
			@endif">
				<a class="sidebar-link" href="{{ route('bin.index') }}">
					<i class="align-middle" data-feather="trash"></i>
					<span class="align-middle">Bins</span>
				</a>
			</li>

			<li class="sidebar-item @if ($isActive==route('notify.index'))
				{{ __('active') }}
			@endif">
				<a class="sidebar-link" href="{{ route('notify.index') }}">
					<i class="align-middle" data-feather="bell"></i>
					<span class="align-middle">Notifications</span>
				</a>
			</li>

			<li class="sidebar-item @if ($isActive==route('user.index'))
				{{ __('active') }}
			@endif">
				<a class="sidebar-link" href="{{ route('user.index') }}">
					<i class="align-middle" data-feather="users"></i>
					<span class="align-middle">Users</span>
				</a>
			</li>

			<li class="sidebar-item @if ($isActive==route('profile', auth()->id()))
				{{ __('active') }}
			@endif">
				<a class="sidebar-link" href="{{ route('profile', auth()->id()) }}">
					<i class="align-middle" data-feather="user"></i>
					<span class="align-middle">My Profile</span>
				</a>
			</li>

		</ul>

		<div class="sidebar-cta">
			<div class="sidebar-cta-content">
				<div class="d-grid">
					<a href="{{ route('home') }}" class="btn btn-primary">Go to Home</a>
				</div>
			</div>
		</div>

	</div>
</nav>

