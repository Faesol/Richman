<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
        <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,300i" rel="stylesheet">

    <!-- Styles -->
    <link href="{{asset ('../assets_pengajar1/css/core.min.css')}}" rel="stylesheet">
    <link href="{{asset ('../assets_pengajar1/css/app.min.css')}}" rel="stylesheet">
    <link href="{{asset ('../assets_pengajar1/css/style.min.css')}}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{asset ('../assets_pengajar1/img/apple-touch-icon.png')}}">
    <link rel="icon" href="{{asset ('../assets_pengajar1/img/favicon.png')}}">
  
</head>
<body>
  <header class="topbar">
    <div class="topbar-left">
      <span class="topbar-btn sidebar-toggler"><i>&#9776;</i></span>
    </div>

    <div class="topbar-right">
      <ul class="topbar-btns">
        <li class="dropdown show">
          <span class="topbar-btn" data-toggle="dropdown" aria-expanded="true"><img class="avatar" src="{{asset ('assets_pengajar/img/avatar.png')}}" alt="..."></span>
          <div class="dropdown-menu dropdown-menu-right show" x-placement="bottom-end" style="position: absolute; top: 64px; left: -120px; will-change: top, left;">
            <a class="dropdown-item" href="#"><i class="ti-user"></i> Profile</a>
            <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
            <a class="dropdown-item" href="#"><i class="ti-help"></i> Help</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();"><i class="ti-power-off"></i> Logout</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
          </li>
        </ul>
        <ul class="topbar-btns">

          <!-- Notifications -->
          <li class="dropdown d-none d-md-block">
            <span class="topbar-btn has-new" data-toggle="dropdown"><i class="ti-bell"></i></span>
            <div class="dropdown-menu dropdown-menu-right">

              <div class="media-list media-list-hover media-list-divided media-list-xs">
                <a class="media media-new" href="#">
                  <span class="avatar bg-success"><i class="ti-user"></i></span>
                  <div class="media-body">
                    <p>New user registered</p>
                    <time datetime="2018-07-14 20:00">Just now</time>
                  </div>
                </a>

                <a class="media" href="#">
                  <span class="avatar bg-info"><i class="ti-shopping-cart"></i></span>
                  <div class="media-body">
                    <p>New order received</p>
                    <time datetime="2018-07-14 20:00">2 min ago</time>
                  </div>
                </a>

                <a class="media" href="#">
                  <span class="avatar bg-warning"><i class="ti-face-sad"></i></span>
                  <div class="media-body">
                    <p>Refund request from <b>Ashlyn Culotta</b></p>
                    <time datetime="2018-07-14 20:00">24 min ago</time>
                  </div>
                </a>

                <a class="media" href="#">
                  <span class="avatar bg-primary"><i class="ti-money"></i></span>
                  <div class="media-body">
                    <p>New payment has made through PayPal</p>
                    <time datetime="2018-07-14 20:00">53 min ago</time>
                  </div>
                </a>
              </div>

              <div class="dropdown-footer">
                <div class="left">
                  <a href="#">Read all notifications</a>
                </div>

                <div class="right">
                  <a href="#" data-provide="tooltip" title="Mark all as read"><i class="fa fa-circle-o"></i></a>
                  <a href="#" data-provide="tooltip" title="Update"><i class="fa fa-repeat"></i></a>
                  <a href="#" data-provide="tooltip" title="Settings"><i class="fa fa-gear"></i></a>
                </div>
              </div>

            </div>
          </li>
          <!-- END Notifications -->

        </ul>


        <div class="topbar-divider"></div>

      </div>
    </header>

    <!-- Sidebar -->
    <aside class="sidebar sidebar-icons-right sidebar-icons-boxed sidebar-expand-lg">
      <header class="sidebar-header">
        <a class="logo-icon" href="../index.html"><img src="{{asset ('assets_pengajar/img/logo-icon-light.png')}}" alt="logo icon"></a>
        <span class="logo">
          <a href="../index.html"><img src="{{asset ('assets_pengajar//img/logo-light.png')}}" alt="logo"></a>
        </span>
        <span class="sidebar-toggle-fold"></span>
      </header>

      <nav class="sidebar-navigation">
        <ul class="menu">

          <li class="menu-category">Category 1</li>

          <li class="menu-item active">
            <a class="menu-link" href="/admin">
              <span class="icon fa fa-home"></span>
              <span class="title">Dashboard</span>
            </a>
          </li>

          <li class="menu-item">
            <a class="menu-link" href="#">
              <span class="icon fa fa-university"></span>
              <span class="title">Manajemen Kelas</span>
              <span class="arrow"></span>
            </a>

            <ul class="menu-submenu">
              <li class="menu-item">
                <a class="menu-link" href="">
                  <span class="dot"></span>
                  <span class="title">Kelola Kelas</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="#">
                  <span class="dot"></span>
                  <span class="title">Kelola Topik</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-category">Category 2</li>
          <li class="menu-item">
            <a class="menu-link" href="#">
              <span class="icon ti-layout"></span>
              <span class="title">Terserah</span>
              <span class="arrow"></span>
            </a>
            <ul class="menu-submenu">
              <li class="menu-item">
                <a class="menu-link" href="#">
                  <span class="dot"></span>
                  <span class="title">Sidebar</span>
                </a>
              </li>

              <li class="menu-item">
                <a class="menu-link" href="#">
                  <span class="dot"></span>
                  <span class="title">Header</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="#">
                  <span class="dot"></span>
                  <span class="title">Footer</span>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </aside>

    <main>
            @yield('content')
    </main>

    <!-- Footer -->
      <footer class="site-footer">
        <div class="row">
          <div class="col-md-6">
            <p class="text-center text-md-left">Copyright © 2019 <a href="http://thetheme.io/theadmin">TheAdmin</a>. All rights reserved.</p>
          </div>

          <div class="col-md-6">
            <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
              <li class="nav-item">
                <a class="nav-link" href="../help/articles.html">Documentation</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../help/faq.html">FAQ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://themeforest.net/item/theadmin-responsive-bootstrap-4-admin-dashboard-webapp-template/20475359?license=regular&amp;open_purchase_for_item_id=20475359&amp;purchasable=source&amp;ref=thethemeio">Purchase Now</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
      <!-- END Footer -->

    </main>
    <!-- END Main container -->



    <!-- Global quickview -->
    <div id="qv-global" class="quickview" data-url="assets/data/quickview-global.html">
      <div class="spinner-linear">
        <div class="line"></div>
      </div>
    </div>
    <!-- END Global quickview -->
            <script src="{{asset ('/assets_pengajar1/data/js/jsgrid-db.js')}}"></script>

            <!-- Scripts -->
    <script src="{{asset ('../assets_pengajar1/js/core.min.js')}}"></script>
    <script src="{{asset ('../assets_pengajar1/js/app.min.js')}}"></script>
    <script src="{{asset ('../assets_pengajar/js/script.min.js')}}"></script>

</body>
</html>