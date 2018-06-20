  <div class="blog-masthead">

      <div class="container">
        
        <nav class="nav blog-nav">
          <a class="nav-link active" href="/">The Internet of Things</a>
          <a class="nav-link" href="/iotconsumer">IoT Consumer</a>
          <a class="nav-link" href="/iotindustry">IoT Industry</a>
          <a class="nav-link" href="/iotvalue">IoT Value</a>
          <a class="nav-link" href="/todo">my IoT To-Do List</a>

						@auth
						  <li class="nav-link">
							<a href="#">{{ Auth::user()->name }}</a>
                <ul class="dropdown">
                  <li><a href="">Profile</a></li>
                  
                  <li><a href="{{ route('admin.dashboard') }}">Panel</a></li>
                  
                  <li>
                    <a href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                  </li>

                </ul>
              
              </li>
            
            @endauth
            
        </nav>
        
      </div>

  </div>