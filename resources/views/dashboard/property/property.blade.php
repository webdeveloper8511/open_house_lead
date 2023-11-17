@extends('layouts.master')
<style>
  div#example1_info, div#example1_length {
    display: flex;
}
.overflow-scroll {
    overflow: hidden !important;
}
.col-4.d-flex.justify-content-end{
    margin-top: -45px;
}
</style>
@section('content')
  <!-- Content Wrapper. Contains page content -->
    <section class="property-page-section d-flex h-100vh p-4 bg-black-50">
      <div class="container-fluid m-auto text-center shadow p-4 rounded">
        <div class="row justify-content-between">
          <div class="col-5 text-left">
            <h2 class="mb-3">Properties, Opens, Events & Visitors</h2>
            <h5 class="mb-4">Create Flyers & Manage Visitors & Properties Here.</h5>
            <a href="{{route('property-create')}}" class="btn btn-primary mb-3 text-light">
              ADD A PROPERTY OR EVENT
            </a>
          </div>
          <div class="col-4 text-start">
            <div class="mb-3 helps-link">
              <h3>Help Links:</h3>
                  <a href="#"><i class="fas fa-home"></i> PROPERTIES & VISITORS</a><br>
                  <a href="#"><i class="far fa-file-pdf"></i> FLYERS</a><br>
                  <a href="#"><i class="fas fa-sign"></i> PROPERTY SITES & RIDERS</a><br>
            </div>
          </div>
        </div>
        <div class="mb-3 bg-blue">
          <span>Open TEXT Sign-in Number: 888-680-8357 | Sign Rider TEXT Number: 888-459-2023</span>
        </div>
        <div class="overflow-Scrolls" style="overflow: hidden;">
          <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col"><span class="centerr"> Property Address</span></th>
                <th scope="col"><span class="centerr"> Visitors</span></th>
                <th scope="col"><span class="centerr">TEXT Code </span></th>
                <th scope="col"><span class="centerr"> RIDER Code</span></th>
                <th scope="col"><span class="centerr"> View/Add Visitors</span></th>
                <th scope="col"><span class="centerr"> Add a Flyer</span></th>
                <th scope="col"><span class="centerr"> Open QRCODE</span></th>
                <th scope="col"><span class="centerr"> PROPERTY SITE</span></th>
                <th scope="col"><span class="centerr"> Edit</span></th>
                <th scope="col">Remove</th>
              </tr>
            </thead>
            <tbody>
              @foreach($perportys as $perporty)
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{$perporty->street}}</td>
                <td>0</td>
                <td>49740</td>
                @if(!empty($perporty->rider_code))
                  <td>{{$perporty->rider_code}}</td>
                @else
                  <td>
                    <div class="flex align-items-center">
                      <form action="{{route('rider-codes')}}" method="post">
                        @csrf
                        <input type="hidden" name="property_id" value="{{$perporty->id}}">
                        <select class="form-select" name="rider_code" aria-label="Default select example">
                          <option value="" selected="selected">NONE</option>
                          @foreach($riderCodes as $riderCode)
                            <option value="{{$riderCode->code}}">{{ $riderCode->code }}</option>
                          @endforeach
                        </select>
                        <button class="btn btn-primary px-5" type="submit"><h5 class="mb-0">Save</h5></button>
                      </form>
                    </div>
                  </td>
                @endif
                <td><a class="btn btn-primary" href="{{route('show-opens-dt-view-add-visitors')}}" data-toggle="tooltip" title="View"><i class="far fa-eye"></i> View</a></td>
                <td><a class="btn btn-primary" href="{{route('create-flyer22-dt')}}" data-toggle="tooltip" title="Add"><i class="fas fa-plus-circle"></i> Add</a></td>
                <td>
                    <a class="btn btn-primary" href="{{url('assets/dist/img/qrcode-open-50033.png')}}" download data-toggle="tooltip" title="QR"><i class="fas fa-qrcode"></i> QR</a>
                </td>
                @if(!empty($perporty->rider_code))
                <td><a class="btn btn-primary" href="#" data-toggle="tooltip" title="Site">Site</a></td>
                @else
                <td>
                  <span class="">ADD RIDER CODE</span>
                </td>
                @endif
                  <td><a class="btn btn-primary" href="{{url('property/edit/'.$perporty->id)}}" data-toggle="tooltip" title="Edit"><i class="fas fa-edit"></i> Edit</a></td>
                  <td><a class="btn btn-primary" href="#" onclick="document.getElementById('delete-property').style.display='block'"><i class="fas fa-trash-alt"></i> Remove </a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
          </div>
        </div>
        
        <div class="row mb-3 align-items-center justify-content-center">
          <div class="col-4 d-flex justify-content-end">
            <a class="btn btn-primary" href="show-visitors-dt.php">VIEW / EDIT / EXPORT LEADS FROM ALL PROPERTIES</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Delete Property? -->
    <div id="delete-property" class="modal">
      <form class="modal-content" action="/action_page.php">
      <span onclick="document.getElementById('delete-property').style.display='none'" class="close" title="Close Modal">×</span>
        <div class="container py-4 px-3 text-center">
          <h3><b>Delete Property?</b></h3>
          <h6 class="mb-3"><b>Are You Sure You Want To Delete Property?</b></h6>
        
          <div class="clearfix">
            <button type="button" class="btn btn-primary me-2 px-4" onclick="document.getElementById('delete-property').style.display='none'" class="cancelbtn">Cancel</button>
            <button type="button" class="btn btn-danger px-4" onclick="document.getElementById('delete-property').style.display='none'" class="deletebtn">Delete</button>
          </div>
        </div>
      </form>
    </div>
@endsection

