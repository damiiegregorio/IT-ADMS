            <!-- TOP BAR -->
            <nav class="navbar navbar-default ">
            <div class="top-bar">
                <div class="container">
                    <div class="col-md-6">
                    <img src="{{ URL::to('/images/phgov.png') }}">
                    <a href="http://tup.edu.ph/" title="tup.edu.ph">Technological University of the Philippines</a>
                    </div>
                    <div class="col-md-6 right-top-link">
                    <a href="#" title="">Home</a>
                    <a href="#" title="">Contact</a>
                    <a href="#" title="">About</a>
                    </div> 
                </div>
            </div>

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
                  <a class="navbar-brand" href="#">ACCREDITATION<br>DOCUMENT MANAGEMENT<br>SYSTEM</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="col-md-8 nav navbar-nav">
                    <li class="col-md-6 home-logo active"><img src="{{ URL::to('/images/logo.png') }}"></li>

                       <!--  @guest
                          <li class="col-md-6 home-login-reg">
                            <button class="login-btn"><a href="{{ route('login') }}">Login</a></button>
                            <button class="reg-btn"><a href="{{ route('register') }}">Register</a></button>
                          </li>
                        @else
                            
                            <li><a href="/post/create" class="btn btn-default"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></li>

                            <li><a href="/post/create" class="btn btn-default">Create Post</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

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
                        @endguest -->
                    </ul>
                </div>
            </div>
        </nav>
        