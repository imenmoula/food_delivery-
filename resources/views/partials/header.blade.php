

<div class="header">
	<div class="header-content">
		<nav class="navbar navbar-expand">
			<div class="collapse navbar-collapse justify-content-between">
				<div class="header-left">
					<div class="search_bar dropdown show">
						
					</div>
				</div>

				<ul class="navbar-nav header-right">
					<li class="nav-item dropdown notification_dropdown">
						
					</li>
					<li class="nav-item dropdown notification_dropdown">
						
					</li>
					
					<li class="nav-item dropdown header-profile">
						<a class="nav-link" href="#" role="button" data-toggle="dropdown">
							<div class="header-info">
								<span>Bonjour, <strong>{{ Auth::user()->name }}</strong></span>
							</div>
							<img src="{{ asset('admin/images/profile/profile.webp') }}" width="250" alt=""/>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<a href="" class="dropdown-item ai-icon">
								<svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
								<span class="ml-2">  </span>
							</a>
							
							<a href="#" class="dropdown-item ai-icon">
								<svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
								<form method="POST" action="{{ route('logout') }}">
									@csrf
									<span class="ml-2"><button type="submit">Déconnexion</button></span>
								</form>
								 </span>
							</a>
						</div>
					</li>
				</ul>
			</div>
		</nav>
	</div>
</div>