            <!-- TOP BAR -->
<nav class="navbar navbar-default ">
  <div class="top-bar">
    <div class="container">
      <div class="col-md-6">
        <img src="{{ URL::to('/images/phgov.png') }}">
        <a href="http://tup.edu.ph/" title="tup.edu.ph">Technological University of the Philippines</a>
      </div>
      <div class="col-md-6 right-top-link">
        <a href="/home" title="">Home</a>
        <a href="#" title="">Contact</a>
        <a href="#" title="">About</a>
      </div> 
    </div>
  </div>
  <!-- MAIN NAVIGATION -->
  <div class="home-header">
    <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="col-md-4 navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ route('home') }}" title="Accreditation Document Management System">ACCREDITATION<br>DOCUMENT MANAGEMENT<br>SYSTEM</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         @guest
      <ul class="col-md-8 nav navbar-nav">
        <li class="col-md-6 home-logo active"><img src="{{ URL::to('/images/logo.png') }}"></li>
        <li class="col-md-6 home-login-reg">
          <button class="login-btn" type="submit"><a href="{{ route('login') }}">Login</a></button>
          <button class="reg-btn" type="submit"><a href="{{ route('register') }}">Register</a></button>
        </li>
        </ul>
        </div>
        </div>
      </ul>
  </div>
</div>
</div>
         @else
      <ul class="nav navbar-nav navbar-right col-xs-4">
        <div id="custom-search-input">
          <div class="input-group ">
            {!!  Form::open(['route' => 'result', 'method' => 'GET', 'id'=> 'searchForm'])!!}
                    <input type="text" class="search-query form-control" placeholder="Search" id="searchItem" name="searchItem"/>
            {{ Form::close() }}
            <span class="input-group-btn">
            <button class="btn btn-danger" type="button">
              <span class=" glyphicon glyphicon-search"></span>
            </button>
            </span>
          </div>
        </div>
      </ul> 
      </ul>
    </div>
    </div>
  </div>
</nav>
<nav class="navbar nav-menu navbar-inverse menu-categories">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#categories">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>
    <div class=" collapse navbar-collapse" id="categories">
      <ul class="nav navbar-nav col-md-8">
        <li><a href="{{ ('uploads')}}">My Uploads</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">All Areas <span class="caret"></span></a>
          <ul class="dropdown-menu panel-group">
            <li><a href="" title="Area 1">Vision, Mission, Goals and Obejectives</a></li>
            <li><a href="{{('area2')}}" title="Area 2">The Faculty</a></li>
            <li><a href="" title="Area 3">Curriculum and Instruction</a></li>
            <li><a href="" title="Area 4">Support to Students</a></li>
            <li><a href="" title="Area 5">Research</a></li>
            <li><a href="" title="Area 6">Extension and Community Involvement</a></li>
            <li><a href="" title="Area 7">Library</a></li>
            <li><a href="" title="Area 8">Physical Plant and Facilities</a></li>
            <li><a href="" title="Area 9">Laboratories</a></li>
            <li><a href="" title="Area 10">Administration</a></li>
          </ul>
        </li>
        <li><a href="{{'assignedArea'}}">My Area</a></li>
        <li><a href="{{'bin'}}">Bin</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right col-xs-4">
        <div class="col-xs-6 user-navbar">
          <li class="dropdown name-drpdwn">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
          <span class="glyphicon glyphicon-user"></span>
          <span class="caret"></span>
          </a>
          <!-- Dropdown menu content -->
          <ul class="dropdown-menu" role="menu">
            <li><a href="">{{ Auth::user()->name }}</a></li>
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
          <li class="dropdown notif-drpdwn" id="markasread" onclick="markNotificationAsRead('{{ count(auth()->user()->unreadNotifications)}}')">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            <span class="glyphicon glyphicon-bell" aria-hidden="true" title="Notifications"></span>
              @if( count(auth()->user()->unreadNotifications) !== 0)
            <span id="notifCount" class="badge">{{ count(auth()->user()->unreadNotifications)}}</span>
              @endif
            </a>
            <!-- Dropdown menu content -->
            <ul class="dropdown-menu" role="menu">
              <li>
                @if(count(auth()->user()->unreadNotifications) == 0)
                <i style="color: #000; text-align: center; ">No unread notifications</i>
                @else
                  @foreach(auth()->user()->unreadNotifications as $notification)
                  @include('notif.'.snake_case(class_basename($notification->type)))
                  @endforeach
                @endif
              </li>
            </ul>
          </li><!--notifications-->
          <li class="upload">
            <a href="/post/create" class="btn upload-btn">
            <span class="glyphicon glyphicon-upload" aria-hidden="true" title="Upload a file"></span>
            </a>
          </li>
          </div>
        </ul>
      </div>
    </div>
</nav>
@endguest
                           


