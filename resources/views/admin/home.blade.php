@extends('layouts.admin-app')
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
    @endsection