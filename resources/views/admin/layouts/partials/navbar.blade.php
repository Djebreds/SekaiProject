<nav class="navbar navbar-expand navbar-light navbar-bg">
	<a class="sidebar-toggle">
		<i class="hamburger align-self-center"></i>
	</a>

	<div class="navbar-collapse collapse">
		<ul class="navbar-nav navbar-align">
			<li class="nav-item dropdown">
				<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
					<i class="align-middle" data-feather="settings"></i>
				</a>

				<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
					@php
						$get_initial = explode(' ', ucwords(Auth::user()->full_name));
						$initial_name = count($get_initial) > 1 ? substr($get_initial[0], 0, 1) . substr($get_initial[1], 0, 1) : substr($get_initial[0], 0, 1);
						$color = ['bg-primary', 'bg-warning', 'bg-info', 'bg-danger', 'bg-success', 'bg-dark'];
					@endphp

					@if (Auth::user()->provider_id != null)
						<img class="avatar-img rounded-circle me-2" width="35" src="{{ Auth::user()->profile_picture }}"
							alt="avatar">
					@else
						@if (in_array(Auth::user()->profile_picture, $color))
							<div class="avatar-img rounded-circle {{ Auth::user()->profile_picture }}"><span
									class="text-white position-absolute top-50 start-50 translate-middle fw-bold">{{ $initial_name }}</span>
							</div>
						@else
							<img class="avatar-img rounded-circle" src="{{ Auth::user()->profile_picture }}" alt="avatar">
						@endif
					@endif
					<span class="text-dark">{{ Auth::user()->full_name }}</span>
				</a>
				<div class="dropdown-menu dropdown-menu-end">
					<a class="dropdown-item" href="{{ route('admin.profile.show', Auth::user()->id) }}"><i class="align-middle me-1"
							data-feather="user"></i> Profile</a>
					<a class="dropdown-item" href="pages-settings.html"><i class="align-middle me-1"
							data-feather="settings"></i>Settings & Privacy</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="info"></i>Help</a>
					<a class="dropdown-item" href="{{ route('logout') }}"
						onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
							class="align-middle me-1" data-feather="power"></i>Sign out</a>
					<form action="{{ route('logout') }}" id="logout-form" method="POST" class="d-none">
						@csrf
					</form>
				</div>
			</li>
		</ul>
	</div>
</nav>
