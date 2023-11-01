@extends('layouts.master')
@section('content')
<section class="property-page-section d-flex h-100vh p-4 bg-black-50">
    <div class="container-fluid m-auto text-center shadow p-4 rounded">
    <div class="row justify-content-between p-3">
        <div class="col-5 text-left">
        <h5 class="mb-2">You will show here as you created.</h5>
        <h2 class="mb-2">ALL Flyer or Virtual Brochure.</h2>
        <a href="{{Route('create-flyer22-dt')}}" class="btn btn-primary mt-2 text-light"><i class="fas fa-plus"></i> Add Flyer or Virtual Brochure</a>
        </div>
        <div class="col-6 text-start">
        <h5 class="mb-3">Click Emails or Phone Numbers to Email or Call. Press the <b>CTRL Key</b> & click on Rows to select only specific rows to export or save.</h5>
        <div class="mb-3 d-flex">
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
                    <th scope="col"><span class="centerr">Flyer Name</span></th>
                    <th scope="col"><span class="centerr">Property Name</span></th>
                    <th scope="col"><span class="centerr">Original Price</span></th>
                    <th scope="col"><span class="centerr">Offer Price</span></th>
                    <th scope="col"><span class="centerr">Broker / Team Name</span></th>
                    <th scope="col"><span class="centerr">View </span></th>
                    <th scope="col"><span class="centerr"> Edit</span></th>
                    <th scope="col">Remove</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <th>Test</th>
                    <td>Easton Town Ctr</td>
                    <td>15749</td>
                    <td>12499</td>
                    <td>John Deo</td>
                    <td><a class="btn btn-primary" href="#" data-toggle="tooltip" title="View"><i class="far fa-eye"></i> View</a></td>
                    <td><a class="btn btn-primary" href="#" data-toggle="tooltip" title="Edit"><i class="fas fa-edit"></i> Edit</a></td>
                    <td><a class="btn btn-primary" href="#" data-toggle="tooltip" title="Remove"><i class="fas fa-trash-alt"></i> Remove </a> </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="row mb-3 align-items-center">
            <div class="col-4 text-start d-flex align-items-center">
                <span>Showing 1 to 1 of 1 entries</span>
            </div>
            <div class="col-4 d-flex align-items-center justify-content-center">
                <div class="pagination-box">
                <button class="arrow" id="prevPage" disabled>←</button>
                <div class="pages">
                    <div class="page-number active">1</div>
                    <div class="page-number">2</div>
                    <div class="page-number">3</div>
                </div>
                <button class="arrow" id="nextPage">→</button>
                </div>
            </div>
            <div class="col-4 d-flex justify-content-end">
                <a class="btn btn-primary" href="{{Route('property')}}">RETURN TO PROPERTIES</a>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection