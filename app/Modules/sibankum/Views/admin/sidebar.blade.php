<div class="page-sidebar-wrapper">
			<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
			<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
			<div class="page-sidebar navbar-collapse collapse">
				<!-- BEGIN SIDEBAR MENU -->
				<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
				<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
				<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
				<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
				<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
				<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
				<ul class="page-sidebar-menu page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
					<li class="start @yield('dashboard-active')">
						<a href="/home">
						<i class="icon-home"></i>
						<span class="title">Dashboard</span>
						<span class="selected"></span>
						</a>
					</li>
					<li class="@yield('case-active')">
						<a href="javascript:;">
						<i class="icon-briefcase"></i>
						<span class="title">Case</span>
						<span class="selected"></span>
						<span class="arrow open"></span>
						</a>
						<ul class="sub-menu">
							<li class="@yield('case-active')">
								<a href="/cases">Case</a>
							</li>
						</ul>
					</li>
					<li class="@yield('settings-active')">
						<a href="javascript:;">
						<i class="icon-settings"></i>
						<span class="title">Settings</span>
						<span class="selected"></span>
						<span class="arrow open"></span>
						</a>
						<ul class="sub-menu">
							<li class="@yield('court_party-active')">
								<a href="/court_party">Court Party</a>
							</li>
							<li class="@yield('court_level-active')">
								<a href="/court_level">Court Level</a>
							</li>
							<li class="@yield('court_type-active')">
								<a href="/court_type">Court Type</a>
							</li>
						</ul>
					</li>
					<li class="last @yield('user-active')">
						<a href="javascript:;">
						<i class="icon-user"></i>
						<span class="title">Users & Roles</span>
						<span class="arrow "></span>
						@yield('user-selected')
						</a>
						<ul class="sub-menu">
							<li>
								<a href="/users">
								Manage Users</a>
							</li>
							<li>
								<a href="/roles">
								Manage Roles</a>
							</li>
						</ul>
					</li>
				</ul>
				<!-- END SIDEBAR MENU -->
			</div>
		</div>