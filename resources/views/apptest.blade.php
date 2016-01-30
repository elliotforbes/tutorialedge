<div class="header">
			
			<div class="collapse" id="exCollapsingNavbar">
				<div class="bg-inverse p-a">
					<h4>Main Menu</h4>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/') }}/courses">Courses</a></li>
                    </ul>
				</div>
			</div>
			<nav class="navbar navbar-light navbar-inverse bg-faded">
				<button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
					&#9776;
				</button>
				<div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar">
					<a class="navbar-brand" href="{{ url('/') }}">TutorialEdge</a>
                   
					<ul class="nav navbar-nav pull-right">
						<li class="nav-item">
							<a class="nav-link" href="{{ url('/courses') }}">Courses</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">About</a>
						</li>
                        @if (Auth::guest())
                        
                        <li class="nav-item">
                            <a href="{{ url('/auth/register') }}" class="nav-link">Register</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/auth/login') }}" class="nav-link">Log In</a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a href="{{ url('/auth/logout') }}" class="nav-link">Logout</a>
                        </li>
                        @endif
					</ul>
				</div>
			</nav>		
		</div>