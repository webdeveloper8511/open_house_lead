@extends('layouts.master')
@section('content')
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Profile</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item">
                    <a href="#">Home</a>
                  </li>
                  <li class="breadcrumb-item active">User Profile</li>
                </ol>
              </div>
            </div>
          </div>
          <!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid pb-3">
            <form action="">
              <div class="row">
                <div class="col-md-3">
                  <!-- Profile Image -->
                  <div class="card card-primary card-outline mb-3">
                    <div class="card-body box-profile">
                      <div class="text-center">
                        <!-- <img class="profile-user-img img-fluid img-circle" src="../dist/img/user2-160x160.jpg" id="output" alt="User profile picture"> -->
                        <div class="profile-pic">
                          <label class="-label mb-0" for="file">
                            <span class="glyphicon glyphicon-camera"></span>
                            <span>Change Avtar</span>
                          </label>
                          <input id="file" type="file" onchange="loadFile(event)" />
                          <img class="profile-user-img img-circle" src="{{ url('assets/dist/img/user2-160x160.jpg')}}" id="output" width="100" alt="User profile picture" />
                        </div>
                      </div>
                      <h3 class="profile-username text-center">Robert Mareno</h3>
                      <!-- <p class="text-muted text-center">Software Engineer</p> -->
                      <!-- <ul class="list-group list-group-unbordered mb-3"><li class="list-group-item"><b>Followers</b><a class="float-right">1,322</a></li><li class="list-group-item"><b>Following</b><a class="float-right">543</a></li><li class="list-group-item"><b>Friends</b><a class="float-right">13,287</a></li></ul> -->
                      <!-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                  <div class="card card-primary mb-3">
                    <div class="card-header">
                      <h3 class="card-title">Your Details</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-3">
                      <div class="mb-3">
                        <label class="mb-2" for="">
                          <label>Name</label>
                        </label>
                        <div class="row">
                          <div class="col-6">
                            <input type="text" id="f_name" name="f_name" placeholder="First Name" value="Roberto" required="">
                          </div>
                          <div class="col-6">
                            <input type="text" id="l_name" name="l_name" placeholder="Last Name" value="Moreno" required="">
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="row">
                          <div class="col-6">
                            <label class="mb-2" for="">
                              <strong>
                                <i class="fas fa-envelope"></i> Email </strong>
                            </label>
                            <input type="text" id="Email" name="Email" placeholder="Your Email" value="rmoreno@smartlivingaz.com" required="">
                          </div>
                          <div class="col-6">
                            <label class="mb-2" for="">
                              <strong>
                                <i class="fas fa-phone-alt"></i> Phone </strong>
                            </label>
                            <input type="text" id="l_name" name="l_name" placeholder="Your Number" value="(520) 668-2769" required="">
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.card-body -->
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <div class="card col-12">
                <div class="card-header p-2">
                  <ul class="nav nav-pills">
                    <li class="nav-item">
                      <a class="nav-link active" href="#your-images" data-toggle="tab">Your Images</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#broker-team-details" data-toggle="tab">Broker / Team Details</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#other-details" data-toggle="tab">Other Details</a>
                    </li>
                  </ul>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="active tab-pane" id="your-images">
                      <!-- Post -->
                      <div class="row profile-content mb-3 col-8">
                        <h5 class="px-1 mb-3 fw-bold">Add your headshot and logo here.</h5>
                        <div class="profile-content-field col-6">
                          <label class="">Headshot (or main image)</label>
                          <input type="file" name="headshot-(or-main-image)" class="field">
                        </div>
                        <div class="profile-content-field col-6">
                          <label>Logo</label>
                          <input type="file" name="" class="field">
                        </div>
                      </div>
                      <div class="row col-8">
                        <div class="switch-field flex-wrap">
                          <div class="col-12 mb-2 px-0">
                            <strong>Logo Background Color</strong>
                          </div>
                          <input type="radio" id="logo-background-color-none" name="logo-background-color" value="" checked="">
                          <label for="logo-background-color-none">None</label>
                          <input type="radio" id="logo-background-color-black" name="logo-background-color" value="Black">
                          <label for="logo-background-color-black">Black</label>
                          <input type="radio" id="logo-background-color-white" name="logo-background-color" value="White">
                          <label for="logo-background-color-white">White</label>
                        </div>
                        <h6>
                          <b>OPTIONAL:</b> If a Transparent logo add a White or Black background.
                        </h6>
                      </div>
                      <!-- /.post -->
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="broker-team-details">
                      <!-- The timeline -->
                      <div class="row col-8">
                        <h5 class="px-1 mb-3 fw-bold">Broker, Team, Company</h5>
                        <div class="col-6 mb-3">
                          <div class="">
                            <label>Company Name</label>
                            <input type="text" id="company-name" name="company-name" placeholder="Company Name" value="Casas Real Estate" required="">
                          </div>
                        </div>
                        <div class="col-6 mb-3">
                          <div class="">
                            <label>Company Phone</label>
                            <input type="text" id="company-phone" name="company-phone" placeholder="Company Phone" value="(520) 329-5850" required="">
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="">
                            <label>Company Address</label>
                            <input type="text" id="company-address" name="company-address" placeholder="Company Address" value="58966" required="">
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="other-details">
                      <div class="row col-8">
                        <h5 class="px-1 mb-3 fw-bold">Current Open Address, Tags, Disclaimer</h5>
                        <div class="col-6 mb-3">
                          <div class="">
                            <label>Open Address or Tag</label>
                            <input type="text" id="address-or-crm-tag" name="address-or-crm-tag" placeholder="Address or CRM Tag" value="Easton Town Ctr">
                          </div>
                        </div>
                        <div class="col-6 mb-3">
                          <div class="">
                            <label>Tag #2</label>
                            <input type="text" id="crm-tag-#2" name="crm-tag-#2" placeholder="CRM Tag #2" value="">
                          </div>
                        </div>
                      </div>
                      <div class="row col-8">
                        <div class="col-6 mb-3">
                          <div class="">
                            <label>Disclaimer</label>
                            <input type="text" id="disclaimer" name="disclaimer" placeholder="Disclosure" value="Real Estate Consultant">
                          </div>
                        </div>
                        <div class="col-6 mb-3">
                          <div class="">
                            <label>Your Website</label>
                            <input type="text" id="your-website" name="your-website" placeholder="" value="www.smartlivingaz.com">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col p-0">
                <button type="save" class="btn btn-primary px-5" type="" name=" go ">
                  <h4 class="mb-0">save</h4>
                </button>
              </div>
            </form>
          </div>
        </section>
@endsection

