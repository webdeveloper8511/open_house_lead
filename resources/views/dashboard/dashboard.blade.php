@extends('layouts.master')
@section('content')
   <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
     <!-- Main content -->
     <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>258</h3>

                <p>Properties</p>
              </div>
              <div class="icon">
                <i class="fas fa-hotel"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>1553<sup style="font-size: 20px"></sup></h3>

                <p>Visitors</p>
              </div>
              <div class="icon">
                <i class="fas fa-chart-bar"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>86</h3>

                <p>Leads</p>
              </div>
              <div class="icon">
                <i class="fas fa-male"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>36</h3>

                <p>Teams</p>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Leads
                </h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    <!-- <li class="nav-item">
                      <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                    </li> -->
                  </ul>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="revenue-chart"
                       style="position: relative; height: 300px;">
                      <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
                   </div>
                  <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                    <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
                  </div>
                </div>
              </div><!-- /.card-body -->
            </div>
            <div class="card" bis_skin_checked="1">
              <div class="card-header border-transparent" bis_skin_checked="1">
                <h3 class="card-title">Recent Leads</h3>
  
                <div class="card-tools" bis_skin_checked="1">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0" bis_skin_checked="1">
                <div class="table-responsive" bis_skin_checked="1">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>Lead ID</th>
                      <th>Name</th>
                      <!-- <th>Status</th> -->
                      <th>Property Address</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td><a href="#">OR9842</a></td>
                      <td>Peg Legge</td>
                      <!-- <td><span class="badge badge-success">Shipped</span></td> -->
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20" bis_skin_checked="1">74113 Ruecker Ranch</div>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="#">OR1848</a></td>
                      <td>Allie Grater</td>
                      <!-- <td><span class="badge badge-warning">Pending</span></td> -->
                      <td>
                        <div class="sparkbar" data-color="#f39c12" data-height="20" bis_skin_checked="1">	6408 Wintheiser Circles United States, USA</div>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="#">OR7429</a></td>
                      <td>Teri Dactyl</td>
                      <!-- <td><span class="badge badge-danger">Delivered</span></td> -->
                      <td>
                        <div class="sparkbar" data-color="#f56954" data-height="20" bis_skin_checked="1">202 Dooley Drive United States, USA</div>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="#">OR7429</a></td>
                      <td>Olive Yew</td>
                      <!-- <td><span class="badge badge-info">Processing</span></td> -->
                      <td>
                        <div class="sparkbar" data-color="#00c0ef" data-height="20" bis_skin_checked="1">2004 Smets dreef België</div>
                      </td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <!-- <div class="card-footer clearfix" bis_skin_checked="1">
                <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a>
              </div> -->
              <!-- /.card-footer -->
            </div>
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">

            <!-- Map card -->
            <div class="card bg-gradient-primary">
              <div class="card-header border-0">
                <h3 class="card-title">
                  <i class="fas fa-map-marker-alt mr-1"></i>
                  Countries Wise Visitors 
                </h3>
                <!-- card tools -->
                <div class="card-tools">
                  <button type="button" class="btn btn-primary btn-sm daterange" title="Date range">
                    <i class="far fa-calendar-alt"></i>
                  </button>
                  <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <div class="card-body">
                <div id="world-map" style="height: 250px; width: 100%;"></div>
              </div>
              <!-- /.card-body-->
              <div class="card-footer bg-transparent">
                <div class="row">
                  <div class="col-4 text-center d-none">
                    <div id="sparkline-1"></div>
                    <!-- <div class="text-white">Visitors</div> -->
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center d-none">
                    <div id="sparkline-2"></div>
                    <!-- <div class="text-white">Online</div> -->
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center d-none">
                    <div id="sparkline-3"></div>
                    <!-- <div class="text-white">Sales</div> -->
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
            </div>

          <!-- order -->

            <!-- userlist -->
            <div class="card" bis_skin_checked="1">
              <div class="card-header" bis_skin_checked="1">
                <h3 class="card-title">Latest Agents</h3>

                <div class="card-tools" bis_skin_checked="1">
                  <span class="badge badge-danger">8 New Agents</span>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0" bis_skin_checked="1">
                <ul class="users-list clearfix">
                  <li>
                    <img src="{{ url('assets/dist/img/user1-128x128.jpg')}}" alt="User Image">
                    <a class="users-list-name" href="#">Alexander Pierce</a>
                    <span class="users-list-date">Today</span>
                  </li>
                  <li>
                    <img src="{{ url('assets/dist/img/user8-128x128.jpg')}}" alt="User Image">
                    <a class="users-list-name" href="#">Norman</a>
                    <span class="users-list-date">Yesterday</span>
                  </li>
                  <li>
                    <img src="{{ url('assets/dist/img/user7-128x128.jpg')}}" alt="User Image">
                    <a class="users-list-name" href="#">Jane</a>
                    <span class="users-list-date">12 Jan</span>
                  </li>
                  <li>
                    <img src="{{ url('assets/dist/img/user6-128x128.jpg')}}" alt="User Image">
                    <a class="users-list-name" href="#">John</a>
                    <span class="users-list-date">12 Jan</span>
                  </li>
                  <li>
                    <img src="{{url('assets/dist/img/user2-160x160.jpg')}}" alt="User Image">
                    <a class="users-list-name" href="#">Alexander</a>
                    <span class="users-list-date">13 Jan</span>
                  </li>
                  <li>
                    <img src="{{ url('assets/dist/img/user5-128x128.jpg')}}" alt="User Image">
                    <a class="users-list-name" href="#">Sarah</a>
                    <span class="users-list-date">14 Jan</span>
                  </li>
                  <li>
                    <img src="{{ url('assets/dist/img/user4-128x128.jpg')}}" alt="User Image">
                    <a class="users-list-name" href="#">Nora</a>
                    <span class="users-list-date">15 Jan</span>
                  </li>
                  <li>
                    <img src="{{ url('assets/dist/img/user3-128x128.jpg')}}" alt="User Image">
                    <a class="users-list-name" href="#">Nadia</a>
                    <span class="users-list-date">15 Jan</span>
                  </li>
                </ul>
                <!-- /.users-list -->
              </div>
              <!-- /.card-body -->
              <!-- <div class="card-footer text-center" bis_skin_checked="1">
                <a href="javascript:">View All Users</a>
              </div> -->
              <!-- /.card-footer -->
            </div>
            
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection