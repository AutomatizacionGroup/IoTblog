<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="fl_left">
      <ul>
        <li><i class="fa fa-envelope-o"></i> info@iotsense.io</li>
      </ul>
    </div>
    <div class="fl_right">
      <ul>
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
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear">
    <div id="logo"> 
      <!-- ################################################################################################ -->
      <h1><a href="/original">IoT Space</a></h1>
      <p>develop yourself on IoT Vangard</p>
      <!-- ################################################################################################ -->
    </div>
    <nav id="mainav" class="clear"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li class="active"><a href="/iothome">Home</a></li>
        <li><a class="drop" href="#">Pages</a>
          <ul>
            <li><a href="pages/gallery.html">Gallery</a></li>
            <li><a href="pages/full-width.html">Full Width</a></li>
            <li><a href="pages/sidebar-left.html">Sidebar Left</a></li>
            <li><a href="pages/sidebar-right.html">Sidebar Right</a></li>
            <li><a href="pages/basic-grid.html">Basic Grid</a></li>
          </ul>
        </li>
        <li><a class="drop" href="/iotconsumer">IoT Consumer</a>
          <ul>
            <li><a href="/iotconsumer">Articles</a></li>
            <li><a class="drop" href="#">my articles</a>
              <ul>
                <li><a href="#">view my articles</a></li>
                <li><a href="#">create article</a></li>
                <li><a href="#">Edit articles</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a class="drop" href="/iotindustry">IoT Industry</a>
          <ul>
            <li><a href="/iotindustry">Articles</a></li>
            <li><a class="drop" href="#">My articles</a>
              <ul>
                <li><a href="#">view my articles</a></li>
                <li><a href="#">create article</a></li>
                <li><a href="#">Edit articles</a></li>               
              </ul>
            </li>
          </ul>
        </li>
        <li><a href="/iotvalue">IoT Value</a></li>
        <li><a class="drop" href="">my Iot Plan</a>
          <ul>
            <li><a href="/todo">Todo List</a></li>
            <li><a href="/todo">my IoT Calendar</a></li>
          </ul>
        </li>

      </ul>
      <!-- ################################################################################################ -->
    </nav>
  </header>
</div>
