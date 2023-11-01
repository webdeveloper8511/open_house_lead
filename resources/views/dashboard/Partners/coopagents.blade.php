@extends('layouts.master')
@section('content')
        <section class="property-page-section d-flex h-100vh p-4 bg-black-50">
          <div class="container-fluid m-auto text-center shadow p-4 rounded">
          <h2 class="mb-3">Your Co-Host Partners</h2>
            <div class="row mb-3 align-itens-end">
                <div class="col-6 text-left">
                    <a href="{{route('add-agent')}}" class="btn btn-primary text-light"><i class="fas fa-plus"></i> ADD A PARTNER</a>
                </div>
                <div class="col-6 text-end">
                    <a class="btn btn-primary px-2" href="#"><i class="far fa-copy"></i> COPY SETTINGS TO PARTNER</a><br>
                </div>
            </div>
            <div class="col text-center">
                <h5>A Partner must be ‘ACTIVE’ to work. Click YES/NO buttons to Activate or Deactivate Partners.</h5>
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
                          <th scope="col"><span class="centerr">Co-Host Partner Name</span></th>
                          <th scope="col"><span class="centerr">View</span></th>
                          <th scope="col"><span class="centerr"> Edit</span></th>
                          <th scope="col">Remove</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row"></th>
                          <td></td>
                          <td>
                            <!-- <a class="btn btn-primary" href="view-agent.php" data-toggle="tooltip" title="View"><i class="far fa-eye"></i> </a> -->
                        </td>
                          <td>
                            <!-- <a class="btn btn-primary" href="edit-agent.php" data-toggle="tooltip" title="Edit"><i class="fas fa-edit"></i> </a> -->
                        </td>
                          <td>
                            <!-- <a class="btn btn-primary" href="#" onclick="document.getElementById('id01').style.display='block'"><i class="fas fa-trash-alt"></i>  </a> -->
                        </td>
                        </tr>
                      </tbody>
                    </table>
                </div>
                <div class="col mb-3 text-left">
                    <h6>After Activating, the Partner/Agent will appear on the Mobile Sign-In page, the COOP Flyer & the ‘Classic’ Coop Sign-In page. They also will be included in the Open House Welcome Email.</h6>
                <h6><b>Please Note: This service allows you to setup ‘virtual partners’ that can be activated for an Open. It does not include an account for the partners. If you partner with Agents and wish to provide accounts for them you need a ‘Team’ account. Team accounts support co-branding and lead sharing.</b></h6>
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
                      <a class="btn btn-primary" href="{{route('property')}}">RETURN TO PROPERTIES</a>
                    </div>
                </div>
            </div>
          </div>
        </section>
        <!-- Delete agent? -->
    <div id="id01" class="modal">
      <span onclick="document.getElementById('delete-agent').style.display='none'" class="close" title="Close Modal">×</span>
      <form class="modal-content" action="/action_page.php">
        <div class="container py-4 px-3 text-center">
          <h3><b>Delete Agent?</b></h3>
          <h6 class="mb-3"><b>Are You Sure You Want To Delete Agent?</b></h6>
        
          <div class="clearfix">
            <button type="button" class="btn btn-primary me-2 px-4" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            <button type="button" class="btn btn-danger px-4" onclick="document.getElementById('id01').style.display='none'" class="deletebtn">Delete</button>
          </div>
        </div>
      </form>
    </div>
    @endsection