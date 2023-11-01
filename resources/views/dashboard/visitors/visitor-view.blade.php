
@extends('layouts.master')
@section('content')
    <section class="property-page-section d-flex h-100vh p-4 bg-black-50">
      <div class="container-fluid m-auto text-center shadow p-4 rounded">
        <div class="row justify-content-between p-3">
          <div class="col-6 text-left">
            <h4 class="mb-2">Visitor Details(Only displaying fields that are not empty.)</h5>
          </div>
          <div class="col-6 text-end">
            <div class="mb-3">
                  <a class="btn btn-primary px-2" href="{{route('visitor-show')}}"> RETURN TO VISITORS LIST</a><br>
            </div>
          </div>
        </div>
        <div class="text-start">
            <ul>
                <li><h5>Visitor Name: <b>Test Test</b></h5></li>
                <li><h5>Visitor Email: <b>Jfwoei@gjdj.com</b></h5></li>
                <li><h5>Visitor Phone: <b>374-839-3844</b></h5></li>
                <li><h5>Visitor Type: <b>Visitor</b></h5></li>
                <li><h5>Has an Agent?: <b>No</b></h5></li>
                <li><h5>Property: <b>ew</b></h5></li>
            </ul>
        </div>
      </div>
    </section>
@endsection
