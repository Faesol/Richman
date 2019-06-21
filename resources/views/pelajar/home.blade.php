@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @section('content')
        <main class="main-container">
      <div class="main-content">


        <div class="card">
          <h4 class="card-title">Dashboard Pengajar</h4>

          <div class="card-body">
            <div class="row">
              <div class="col-md-4">
                <div class="card card-body">
                  <h6>
                    <span class="text-uppercase">Total Penghasilan</span>
                    <span class="float-right"><a class="btn btn-xs btn-primary" href="#">View</a></span>
                  </h6>
                  <br>
                  <p class="fs-28 fw-100">$21,642</p>
                  <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 35%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="text-gray fs-12"><i class="ti-stats-down text-danger mr-1"></i> %18 decrease from last month</div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card card-body">
                  <h6>
                    <span class="text-uppercase">Total Kelas</span>
                    <span class="float-right"><a class="btn btn-xs btn-primary" href="#">View</a></span>
                  </h6>
                  <br>
                  <p class="fs-28 fw-100">5</p>
                  <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 35%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="text-gray fs-12"><i class="ti-stats-down text-danger mr-1"></i> %18 decrease from last month</div>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div><!--/.main-content -->


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
    @endsection
</body>
</html>