<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Union Solution Inc">
  
    <!-- theme meta -->
    <meta name="theme-name" content="sleek" />
    
    <title>Union Solution Inc</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />

    <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />
  
    <!-- PLUGINS CSS STYLE -->
    <link href="{{ asset('import/assets/plugins/simplebar/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('import/assets/plugins/nprogress/nprogress.css')}}" rel="stylesheet" />
  
    <!-- No Extra plugin used -->
    <link href="{{ asset('import/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css') }}" rel='stylesheet'>
    <link href="{{ asset('import/assets/plugins/daterangepicker/daterangepicker.css') }}" rel='stylesheet'>
    
    
    <link href="{{ asset('import/assets/plugins/toastr/toastr.min.css') }}" rel='stylesheet'>
    
    
    
    
    
    

    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="{{ asset('import/assets/css/sleek.css')}}" />
  
   <!-- FAVICON -->
   <link href="{{ asset('import/assets/img/') }}" rel="shortcut icon" />
  
    <!--
      HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
    -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="{{ asset('import/assets/plugins/nprogress/nprogress.js') }}"></script>
  </head>

  <body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>

    <div id="toaster"></div>

    <!-- ====================================
    ——— WRAPPER
    ===================================== -->
    <div class="wrapper">

      <!-- Github Link -->
      <!-- <a href="https://github.com/tafcoder/sleek-dashboard"  target="_blank" class="github-link">
        <svg width="70" height="70" viewBox="0 0 250 250" aria-hidden="true">
          <defs>
            <linearGradient id="grad1" x1="0%" y1="75%" x2="100%" y2="0%">
              <stop offset="0%" style="stop-color:#896def;stop-opacity:1" />
              <stop offset="100%" style="stop-color:#482271;stop-opacity:1" />
            </linearGradient>
          </defs>
          <path d="M 0,0 L115,115 L115,115 L142,142 L250,250 L250,0 Z" fill="url(#grad1)"></path>
        </svg>
        <i class="mdi mdi-github-circle"></i>
      </a> -->




        <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
        <aside class="left-sidebar bg-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
              <a href="/" title="">
                <!-- <svg
                  class="brand-icon"
                  xmlns="http://www.w3.org/2000/svg"
                  preserveAspectRatio="xMidYMid"
                  width="30"
                  height="33"
                  viewBox="0 0 30 33"> -->
                  <g fill="none" fill-rule="evenodd">
                    <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                    <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                  </g>
                </svg>

                <span class="brand-name text-truncate">Union Solution Inc</span>
              </a>
            </div>

            <!-- begin sidebar scrollbar -->
            <div class="" data-simplebar style="height: 100%;">
              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">
                <li class="has-sub active expand">
                  <a class="sidenav-item-link" href="/dashboard" data-toggle="collapse" data-target="#dashboard"
                    aria-expanded="false" aria-controls="dashboard">
                    <i class="mdi mdi-view-dashboard-outline"></i>
                    <span class="nav-text">Dashboard</span> <b class="caret"></b>
                  </a>

                  <ul class="collapse show" id="dashboard" data-parent="#sidebar-menu">
                    <div class="sub-menu">
                      <li class="active">
                        <a class="sidenav-item-link" href="/employee">
                          <span class="nav-text">Employee</span>
                        </a>
                      </li>

                      <li class="">
                        <a class="sidenav-item-link" href="/expenditure">
                          <span class="nav-text">Expenditure</span>
                          
                        </a>
                      </li>

                      <li class="">
                        <a class="sidenav-item-link" href="/revenue">
                          <span class="nav-text">Revenue</span>
                          
                        </a>
                      </li>

                      <li class="">
                        <a class="sidenav-item-link" href="/project">
                          <span class="nav-text">Project</span>
                          
                        </a>
                      </li>

                      <li class="">
                        <a class="sidenav-item-link" href="/client">
                          <span class="nav-text">Client</span>
                          
                        </a>
                      </li> 

                      <li class="">
                        <a class="sidenav-item-link" href="/users">
                          <span class="nav-text">Users</span>
                          
                        </a>
                      </li>
                    </div>
                  </ul>
                </li>
                

              
                <!-- <li class="section-title">
                  UI Elements
                </li> -->

            

                <!-- <li class="section-title">
                  Pages
                </li> -->

                <!-- <li class="section-title">
                  Documentation
                </li> -->
              </ul>
            </div>

            <div class="sidebar-footer">
              <hr class="separator mb-0" />
              <div class="sidebar-footer-content">
            </div>
          </div>
        </aside>


          <!-- ====================================
        ——— PAGE WRAPPER
        ===================================== -->
        <div class="page-wrapper">
          
          <!-- Header -->
          <header class="main-header " id="header">
            <nav class="navbar navbar-static-top navbar-expand-lg">
              <!-- Sidebar toggle button -->
              <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <!-- search form -->
              <div class="search-form d-none d-lg-inline-block">
                <div class="input-group">
                  <button type="button" name="search" id="search-btn" class="btn btn-flat">
                    <i class="mdi mdi-magnify"></i>
                  </button>
                  <input type="text" name="query" id="search-input" class="form-control" placeholder="'button', 'chart' etc."
                    autofocus autocomplete="off" />
                </div>
                <div id="search-results-container">
                  <ul id="search-results"></ul>
                </div>
              </div>
              <div class="navbar-right ">
                <ul class="nav navbar-nav">
                  <li class="dropdown notifications-menu custom-dropdown">
                    <button class="dropdown-toggle notify-toggler custom-dropdown-toggler">
                      <i class="mdi mdi-bell-outline"></i>
                    </button>

                    <div class="card card-default dropdown-notify dropdown-menu-right mb-0">

                        
                    </div>

                    <ul class="dropdown-menu dropdown-menu-right d-none">
                      <li class="dropdown-header">You have 5 notifications</li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-account-plus"></i> New user registered
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-account-remove"></i> User deleted
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 07 AM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-chart-areaspline"></i> Sales report is ready
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 12 PM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-account-supervisor"></i> New client
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-server-network-off"></i> Server overloaded
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 05 AM</span>
                        </a>
                      </li>
                      <li class="dropdown-footer">
                        <a class="text-center" href="#"> View All </a>
                      </li>
                    </ul>
                  </li>
                  <li class="right-sidebar-in right-sidebar-2-menu">
                    <i class="mdi mdi-settings mdi-spin"></i>
                  </li>
                  <!-- User Account -->
                  <li class="dropdown user-menu">
                    <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                      <img src="{{ asset('import/assets/img/user/user.png')}}" class="user-image" alt="User Image" />
                      <span class="d-none d-lg-inline-block"> Uzodike Chisom</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <!-- User image -->
                      <li class="dropdown-header">
                        <img src="{{ asset('import/assets/img/user/user.png') }}" class="img-circle" alt="User Image" />
                        <div class="d-inline-block">
                          Uzodike Chisom<small class="pt-1">chisomuchenna@gmail.com</small>
                        </div>
                      </li>

                      <li>
                        <a href="user-profile.html">
                          <i class="mdi mdi-account"></i> My Profile
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-email"></i> Message
                        </a>
                      </li>
                      <li>
                        <a href="#"> <i class="mdi mdi-diamond-stone"></i> Projects </a>
                      </li>
                      <li class="right-sidebar-in">
                        <a href="javascript:0"> <i class="mdi mdi-settings"></i> Setting </a>
                      </li>

                      <li class="dropdown-footer">
                        <a href="index.html"> <i class="mdi mdi-logout"></i> Log Out </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>
          </header>

          
    <div>
        @yield('content')
   </div>  
    <!-- <script type="module">
      import 'https://cdn.jsdelivr.net/npm/@pwabuilder/pwaupdate';

      const el = document.createElement('pwa-update');
      document.body.appendChild(el);
    </script> -->

    <!-- Javascript -->
    <script src="{{ asset('import/assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('import/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('import/assets/plugins/simplebar/simplebar.min.js')}}"></script>
 
    <script src="{{ asset('import/assets/plugins/charts/Chart.min.js')}}"></script>
    <script src="{{ asset('import/assets/js/chart.js')}}"></script>

    
    

    <script src="{{ asset('import/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js')}}"></script>
    <script src="{{ asset('import/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js')}}"></script>
    <script src="{{ asset('import/assets/js/vector-map.js')}}"></script>

    <script src="{{ asset('import/assets/plugins/daterangepicker/moment.min.js')}}"></script>
    <script src="{{ asset('import/assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{ asset('import/assets/js/date-range.js')}}"></script>

    

    
    
    
    

    <script src="{{ asset('import/assets/plugins/toastr/toastr.min.js')}}"></script>

    

    
    
    

    
    

    

    <!-- <script src="{{ asset('import/assets/js/sleek.js')}}"></script> -->
  <link href="{{ asset('import/assets/options/optionswitch.css')}}" rel="stylesheet">
<script src="{{ asset('import/assets/options/optionswitcher.js')}}"></script>
</body>
</html>

