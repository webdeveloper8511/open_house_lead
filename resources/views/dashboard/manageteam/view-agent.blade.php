@extends('layouts.master')
@section('content')
        <section class="property-page-section d-flex h-100vh p-4 bg-black-50">
          <div class="container-fluid m-auto text-center shadow p-4 rounded">
          <h2 class="mb-3">Your Team View</h2>
            <div class="row mb-3 align-items-end">
                <div class="col-6 text-left">
                    <a href="edit-agent.php" class="btn btn-primary mt-2 text-light"><i class="fas fa-edit"></i> EDIT AGENTS</a>
                </div>
                <div class="col-6 text-end">
                    <a class="btn btn-primary px-2" href="{{Route('view-agent')}}"> BACK TO MANAGE TEAM</a><br>
                </div>
            </div>
            <div class="">
                <div class="overflow-Scroll">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col"></th>
                          <th scope="col"><span class="centerr">Team Name</span></th>
                          <th scope="col"><span class="centerr">Agent Name</span></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <th>Robert Mareno's Team</th>
                          <td>Robert Mareno</td>
                        </tr>
                      </tbody>
                    </table>
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