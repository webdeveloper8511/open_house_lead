@extends('layouts.master')
@section('content')
<section class="d-flex h-100vh p-4 bg-black-50">
    <div class="container-fluid bg-white m-auto text-center shadow p-3 rounded">
    <h1 class="text-center mb-3">Add a Coop Partner </h1>
    <form class="border-10 p-3" action="">
        <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne"> Partner Details </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <div class="form-container text-left">
                    <h4 class="fw-bold">Name, Phone & more.</h4>
                    <div class="d-flex flex-wrap align-items-end mb-4">
                        <div class="col-4 mb-3">
                            <label for="First Name">Add a Team Member as a Coop Partner</label> 
                            <select class="form-select" aria-label="Default select example">
                                <option value="Add an Existing Team member" selected="selected" class="">Add an Existing Team member</option>
                            </select>
                        </div>
                        <div class="col-4 mb-3">
                            <label for="">Disclaimer or Disclosure</label>
                            <input type="text" id="" name="" placeholder="Disclaimer or Disclosure">
                        </div>
                        <div class="col-4 mb-3">
                            <label for="">Copy Leads to the Active Partner?</label>
                            <div class="switch-field">
                                <input type="radio" id="copy-leads-to-the-active-partner-yes" name="copy-leads-to-the-active-partner" value="yes">
                                <label for="copy-leads-to-the-active-partner-yes">Yes</label>
                                <input type="radio" id="copy-leads-to-the-active-partner-no" name="copy-leads-to-the-active-partner" value="no" checked="">
                                <label for="copy-leads-to-the-active-partner-no">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="d-flex flex-wrap align-items-end mb-2">
                            <div class="col-4 mb-3">
                                <label for="">First Name</label>
                                <input type="text" id="" name="" placeholder="" required>
                            </div>
                            <div class="col-4 mb-3">
                                <label for="">Last Name</label>
                                <input type="text" id="" name="" placeholder="" required>
                            </div>
                            <div class="col-4 mb-3">
                                <label for="">Phone</label>
                                <input type="text" id="" name="" placeholder="" required>
                            </div>
                            <div class="col-4 mb-3">
                                <label for="">Email</label>
                                <input type="text" id="" name="" placeholder="" required>
                            </div>
                            <div class="col-4 mb-3">
                                <label for="">Company</label>
                                <input type="text" id="" name="" placeholder="" required>
                            </div>
                            <div class="col-4 mb-3">
                                <label for="">Website</label>
                                <input type="text" id="" name="" placeholder="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo"> Images </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <div class="container-fluid text-left">
                    <h5 class="fw-bold">Add the partner's headshot & logo.</h5>
                    <h5 class="fw-bold">*Not needed if choosing a Team Member above.</h5>
                    <div class="row py-3">
                        <div class="col-6">
                            <div class="border-dashed rounded p-3">
                                <label>Headshot*</label>
                                <input type="file" name="" class="field">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="border-dashed rounded p-3">
                                <label>Logo</label>
                                <input type="file" name="" class="field">
                            </div>
                            </div>
                    </div>
                    <div class="logo-background-color">
                        <h5 class="mb-3">Logo Background Color</h5>
                        <div class="switch-field">
                            <input type="radio" id="logo-background-color-none" name="logo-background-color" value="">
                            <label for="logo-background-color-none">None</label>
                            <input type="radio" id="logo-background-color-black" name="logo-background-color" value="Black" checked="">
                            <label for="logo-background-color-black">Black</label>
                            <input type="radio" id="logo-background-color-white" name="logo-background-color" value="White" checked="">
                            <label for="logo-background-color-white">White</label>
                        </div>
                        <p>OPTIONAL: If using a Transparent logo, add a White or Black background here.</p>
                    </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="col-12 m-auto text-center">
        <button class="btn btn-primary px-5 my-3" type="submit" name=" go to properties.php"><h3 class="mb-0">SUBMIT</h3></button>
        </div>
    </form>
    <div class="pt-3 mt-3">
        <a href="coopagents.php" class="btn btn-primary mb-3 text-light">YOUR COOP PARTNERS</a>
    </div>
    </div>
</section>
@endsection
      