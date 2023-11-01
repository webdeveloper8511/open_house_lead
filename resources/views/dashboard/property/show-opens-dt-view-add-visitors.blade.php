@extends('layouts.master')
@section('content')
    <section class="property-page-section d-flex h-100vh p-4 bg-black-50">
      <div class="container-fluid m-auto text-center shadow p-4 rounded">
        <div class="row justify-content-between p-3">
          <div class="col-5 text-left">
            <h5 class="mb-2">Doing an Open? Visitors will show here as they register.</h5>
            <h2 class="mb-3">Property has <b>No Visitors Yet.</b></h2>
          </div>
          <div class="col-6 text-zzzzz">
            <div class="mb-3 d-flex justify-content-end">
                  <a class="btn btn-primary px-2" href="{{route('visitor-add-edit')}}"><i class="fas fa-user-plus nav-icon"></i> ADD A VISITOR</a><br>
            </div>
            <div class="mb-3 d-flex justify-content-end">
              <a class="btn btn-primary px-2" href="#"><i class="fas fa-copy"></i> Copy to Clipboard</a><br>
              <a class="btn btn-primary px-2 mx-md-2 mx-3" href="#"><i class="fas fa-file-csv"></i> Save to CSV File</a><br>
              <a class="btn btn-primary px-2" href="#"><i class="fas fa-save"></i> Save to Excel File</a><br>
          </div>
          </div>
        </div>
        <div class="">
          <hr>
        </div>
        <div class="">
            <div class="row mb-3">
                <div class="col-6 d-flex align-items-center gap-2">
                  <span>show</span>
                  <select class="form-select" aria-label="Default select example">
                    <option selected value="5">5</option>
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="all">All</option>
                  </select>
                  <span>entry</span>
                </div>
                <div class="col-6">
                  <form class="form-inline my-2 my-lg-0 justify-content-end">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                  </form>
                </div>
            </div>
            <div class="overflow-Scroll">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col"></th>
                      <th scope="col"><span class="centerr"> Open Date</span></th>
                      <th scope="col"><span class="centerr"> Name</span></th>
                      <th scope="col"><span class="centerr">Email </span></th>
                      <th scope="col"><span class="centerr"> Phone</span></th>
                      <th scope="col"><span class="centerr"> Has Agent?</span></th>
                      <th scope="col"><span class="centerr">View </span></th>
                      <th scope="col"><span class="centerr"> Edit</span></th>
                      <th scope="col">Remove</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td colspan="9" >No data available in table</td>
                    </tr>
                  </tbody>
                </table>
            </div>
            <div class="row mb-3 align-items-center">
                <div class="col-4 text-start d-flex align-items-center">
                  <span>Showing 0 to 0 of 0 entries</span>
                </div>
                <div class="col-4 d-flex align-items-center justify-content-center">
                  <div class="pagination-box">
                    <button class="arrow" id="prevPage" disabled>←</button>
                    <div class="pages">
                        <div class="page-number active">1</div>
                    </div>
                    <button class="arrow" id="nextPage">→</button>
                  </div>
                </div>
                <div class="col-4 d-flex justify-content-end">
                  <a class="btn btn-primary" href="{{route('property')}}">RETURN TO PROPERTIES</a>
                </div>
            </div>
        </div>
      </div>
    </section>
@endsection
