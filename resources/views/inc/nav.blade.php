            <!-- TOP BAR -->
            <nav class="navbar navbar-default navbar-fixed-top">
            <div class="top-bar">
                <div class="container">
                    <div class="col-md-6">
                    <img src="{{ URL::to('/images/phgov.png') }}">
                    <a href="http://tup.edu.ph/" title="tup.edu.ph">Technological University of the Philippines</a>
                    </div>
                    <div class="col-md-6 right-top-link">
                    <a href="/home" title="">Home</a>
                    <a href="#" title="">Contact</a>
                    <a href="/about" title="">About</a>
                    </div> 
                </div>
            </div>

            <div class="navigation-menu">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="col-xs-4 navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="{{ route('home') }}" title="Accreditation Document Management System">ACCREDITATION<br>DOCUMENT MANAGEMENT<br>SYSTEM</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="col-xs-8 nav navbar-nav">
                    <li class="col-xs-6 home-logo active"><img src="{{ URL::to('/images/logo.png') }}"></li>

                        @guest
                          <li class="col-xs-6 home-login-reg">
                            <button class="login-btn" type="submit"><a href="{{ route('login') }}">Login</a></button>
                            <button class="reg-btn" type="submit"><a href="{{ route('register') }}">Register</a></button>
                          </li>
                        @else
                            <div class="col-xs-6 user-navbar navbar-right">
                                <li class="col-xs-4"><a href="/post/create" class="btn upload-btn"><span class="glyphicon glyphicon-upload" aria-hidden="true" title="Upload a file"></span></a></li>
                                <li class="col-xs-3"><a href="/post/create" class="btn upload-btn"><span class="glyphicon glyphicon-bell" aria-hidden="true" title="Notifications"></span></a></li>
                                <li class="col-xs-5 dropdown name-drpdwn">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
                                    <!-- Dropdown menu content -->
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            </div> <!--User Navbar -->
                    </ul>
                </div>


            </div>
            </div>


          

            <!-- </div> -->
        </nav>
        <nav class="navbar nav-menu navbar-inverse">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
              </button>
              <a class="navbar-brand" href="#"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav">
                <li><a href="{{ ('uploads')}}">My Uploads</a></li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">All Areas <span class="caret"></span></a>
                  <ul id="accordion" class="accordion">
  <li>
    <div class="link"><i class="fa fa-database"></i>Web Design<i class="fa fa-chevron-down"></i></div>
    <ul class="submenu">
      <li><a href="#">Photoshop</a></li>
      <li><a href="#">HTML</a></li>
      <li><a href="#">CSS</a></li>
    </ul>
  </li>
  <li>
    <div class="link"><i class="fa fa-code"></i>Coding<i class="fa fa-chevron-down"></i></div>
    <ul class="submenu">
      <li><a href="#">Javascript</a></li>
      <li><a href="#">jQuery</a></li>
      <li><a href="#">Ruby</a></li>
    </ul>
  </li>
  <li>
    <div class="link"><i class="fa fa-mobile"></i>Devices<i class="fa fa-chevron-down"></i></div>
    <ul class="submenu">
      <li><a href="#">Tablet</a></li>
      <li><a href="#">Mobile</a></li>
      <li><a href="#">Desktop</a></li>
    </ul>
  </li>
  <li>
    <div class="link"><i class="fa fa-globe"></i>Global<i class="fa fa-chevron-down"></i></div>
    <ul class="submenu">
      <li><a href="#">Google</a></li>
      <li><a href="#">Bing</a></li>
      <li><a href="#">Yahoo</a></li>
    </ul>
  </li>
</ul>
                  <!-- <ul class="dropdown-menu panel-group" id="accordion">
                    <li>
                    
                    </li>
                        
                    <li><a href="" title="Area 2">The Faculty</a></li>
                    <li><a href="" title="Area 3">Curriculum and Instruction</a></li>
                    <li><a href="" title="Area 4">Support to Students</a></li>
                    <li><a href="" title="Area 5">Research</a></li>
                    <li><a href="" title="Area 6">Extension and Community Involvement</a></li>
                    <li><a href="" title="Area 7">Library</a></li>
                    <li><a href="" title="Area 8">Physical Plant and Facilities</a></li>
                    <li><a href="" title="Area 9">Laboratories</a></li>
                    <li><a href="" title="Area 10">Administration</a></li>
                  </ul> -->
                </li>
                <li><a href="{{'assignedArea'}}">My Area</a></li>
                <li><a href="{{'bin'}}">Bin</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <!-- <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
              </ul>
            </div>
          </div>
        </nav>
        @endguest

        