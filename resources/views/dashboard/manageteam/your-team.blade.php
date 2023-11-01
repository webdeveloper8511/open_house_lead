@extends('layouts.master')
@section('content')
        <section class="property-page-section d-flex h-100vh p-4 bg-black-50">
          <div class="container-fluid m-auto text-center shadow p-4 rounded">
          <h2 class="mb-3">Your Team</h2>
            <div class="row mb-3 align-itens-end">
                <div class="col-6 text-left">
                    <a href="{{route('add-agent')}}" class="btn btn-primary text-light"><i class="fas fa-plus"></i> ADD AGENTS</a>
                </div>
                <div class="col-6 text-end">
                    <a class="btn btn-primary px-2" href="#"><i class="far fa-copy"></i> COPY SETTINGS TO AGENTS</a><br>
                </div>
            </div>
            <div class="col text-left">
                <h5>Click Properties button to create Flyers, Download QR & Text Codes and View Visitors</h5>
              <h5>No Agents found or you do not have a current Team Leader Account.</h5>
              <h6>If you have a Team Leader Account please Add Agents above.
                Or you can upgrade to a Team Account on our Pricing page.
                If you believe this is in error please Contact Support
                </h6>
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
                          <th scope="col"><span class="centerr">Team Name</span></th>
                          <th scope="col"><span class="centerr">Agent Name</span></th>
                          <th scope="col"><span class="centerr">View</span></th>
                          <th scope="col"><span class="centerr"> Edit</span></th>
                          <th scope="col">Remove</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <th>Robert Mareno's Team</th>
                          <td>Robert Mareno</td>
                          <td><a class="btn btn-primary" href="{{Route('view-agent')}}" data-toggle="tooltip" title="View"><i class="far fa-eye"></i> View</a></td>
                          <td><a class="btn btn-primary" href="{{Route('edit-agent')}}" data-toggle="tooltip" title="Edit"><i class="fas fa-edit"></i> Edit</a></td>
                          <td><a class="btn btn-primary" href="#" onclick="document.getElementById('delete-agent').style.display='block'"><i class="fas fa-trash-alt"></i> Remove </a></td>
                        </tr>
                      </tbody>
                    </table>
                </div>
                <div class="col mb-3 text-left">
                <h6><b>*Note: Branded Accounts require that you Add Agents to your Team above. (At least one)</b></h6>
              <h6>Those Agent accounts will automatically include the Team Leader’s Branding on Emails, Flyers & the Smartphone Sign-In page.
              Team Leader will also be copied on all Visitor Registrations. 
                </h6>
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
                      <a class="btn btn-primary" href="property.php">RETURN TO PROPERTIES</a>
                    </div>
                </div>
            </div>
          </div>
        </section>
        <!-- Delete agent? -->
    <div id="delete-agent" class="modal">
      <form class="modal-content" action="/action_page.php">
      <span onclick="document.getElementById('delete-agent').style.display='none'" class="close" title="Close Modal">×</span>
        <div class="container py-4 px-3 text-center">
          <h3><b>Delete Agent?</b></h3>
          <h6 class="mb-3"><b>Are You Sure You Want To Delete Agent?</b></h6>
        
          <div class="clearfix">
            <button type="button" class="btn btn-primary me-2 px-4" onclick="document.getElementById('delete-agent').style.display='none'" class="cancelbtn">Cancel</button>
            <button type="button" class="btn btn-danger px-4" onclick="document.getElementById('delete-agent').style.display='none'" class="deletebtn">Delete</button>
          </div>
        </div>
      </form>
    </div>
    </div>
@endsection
