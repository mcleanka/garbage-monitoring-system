<x-guest-layout>
   <main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<a href="{{ route('home') }}" class="h2">Welcome to GMS</a>
							<p class="lead">
								Sign in to your account to continue
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<div class="text-center">
										<a href="{{ route('home') }}">
                                            <img src="{{ asset('assets/img/icons/icon-48x48.png')}}" alt="Charles Hall"
											class="img-fluid rounded-circle" width="132" height="132" />
                                        </a>
									</div>

                                     <!-- Session Status -->
                                    <x-auth-session-status class="mb-4" :status="session('status')" />

                                    <!-- Validation Errors -->
                                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                    
									<form action="{{ route('login') }}" method="POST" autocomplete="off">
                                        @csrf
                                        @method('POST')

										<div class="mb-3">
											<label class="form-label">Email</label>
											<input class="form-control rounded-0 form-control-lg" type="email" name="email"
												placeholder="Enter your email" required/>
										</div>
										<div class="mb-3">
											<label class="form-label">Password</label>
											<input class="form-control rounded-0 form-control-lg" type="password" name="password" placeholder="Enter your password" required/>
											
                                            @if (Route::has('password.request'))
                                                <a class="text-muted" href="{{ route('password.request') }}" style="margin-right: 15px; margin-top: 15px;">
                                                    {{ __('Forgot your password?') }}
                                                </a>
                                            @endif
										</div>
										<div>
											<label class="form-check">
												<input class="form-check-input" type="checkbox" name="remember">
												<span class="form-check-label">
													Remember me next time
												</span>
											</label>
										</div>
										<div class="text-center mt-3">
											<button type="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>
										</div>
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>
</x-guest-layout>

