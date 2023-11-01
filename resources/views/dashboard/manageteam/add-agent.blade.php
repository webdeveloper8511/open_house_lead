@extends('layouts.master')
@section('content')
        <section class="property-page-section d-flex h-100vh p-4 bg-black-50">
        <div class="container-fluid  m-auto text-center shadow p-3 rounded accordion-flush">
            <h2 class="mb-3">Add Agent</h2>
                <div class="row mb-3">
                    <div class="col-6 text-left">
                        <!-- <a class="btn btn-primary" href="your-team.php">Manage Your Team</a> -->
                    </div>
                    <div class="col-6 text-end">
                        <a class="btn btn-primary" href="{{route('your-team')}}">Manage Your Team</a>
                    </div>
                </div>
                <form action="">
                    <div class="row mb-3">
                        <div class="form-group col-6">
                            <label class="text-left" for="Team Name	">Robert Mareno's Team</label>
                            <input type="text" id="Team Name" name="Team Name" placeholder="Team Name" required="">
                        </div>
                        <div class="form-group col-6">
                            <label class="text-left" for="Robert Mareno">Agent Name</label>
                            <input type="text" id="OPEN_Robert MarenoHOUSE" name="Robert Mareno" placeholder="Agent Name" required="">
                        </div>
                    </div>
                    <div class="mx-auto text-center">
                    <a class="btn btn-primary" href="{{route('your-team')}}"><h5 class="mb-0">Add Agent</h5></a>
                    </div>
                </form>
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
