@extends('layouts.master')
@section('content')
    <section class="add-edit-property-dt-section d-flex h-100vh p-4">
        <div class="container-fluid  m-auto text-center shadow p-3 rounded">
        <div class="row justify-content-between">
            <div class="col-5 text-left">
                <a href="#" class="btn btn-primary text-light">
                VIEW FLYER DESIGNS
                </a>
            </div>
            <div class="col-4 text-end">
                <a href="#" class="btn btn-primary text-light">
                    View Last Flyer
                    </a>
            </div>
            </div>
        <form action="" class="border-10 p-3 my-3">
            <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne"> Create a Flyer for Easton Town Ctr </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <div class="form-container">
                    <h5>Main Settings</h5>
                    <div>
                        <div class="wrapperr d-flex justify-content-center flex-wrap ">
                            <h4 class="w-100 mb-3">Open Flyer or Virtual Brochure?</h4>
                            <input class="d-none" type="radio" name="tab" id="tab-1" checked>
                            <label class="btn-3d" for="tab-1">Flyer</label>
                            <input class="d-none" type="radio" name="tab" id="tab-2">
                            <label class="btn-3d" for="tab-2">Brochure</label>

                            <div class="content mt-3">
                                <article class="tab-1">
                                    <div class=" col-10 mx-auto row justify-content-start mb-4">
                                    <div class="col-4">
                                        <label class="text-left" for="">Before Price such as 'Offered at:'</label>
                                        <input type="text" id="" name="" placeholder="Text before Price such as 'Offered at'" value="12222" required>
                                    </div>
                                    <div class="col-4">
                                        <label class="text-left" for="anything">Price</label>
                                        <input type="text" id="anything" name="anything" placeholder="Price (such as $000,000)" value="4133133" required>
                                    </div>
                                    </div>
                                    <div class="col-10 mx-auto">
                                    <h5 class="mb-3 text-start">For 2-Person Team or Coop Flyers 1st Add a Coop Partner <a href="#">CLICK HERE.</a></h5>
                                    <div class="row text-start mb-3 justify-content-start choose-a-flyer-design">
                                        <div class="col-4">
                                        <label class="mt-2">CHOOSE A FLYER DESIGN*</label>
                                        <select class="form-select my-select" aria-label="Default select example" required>
                                            <option class="option_1" value="AGENT FLYER (DEFAULT) *Individual Agent">AGENT FLYER (DEFAULT) *Individual Agent</option>
                                            <option value="option_2">COOP FLYER *(2) Person</option>
                                            <option value="option_3">TEAM FLYER *(2) Person, Team Logo/Info</option>
                                        </select>
                                        </div>
                                        <div class="col-2 default-none">
                                        <label class="mt-2" for="">Create a 2 Person Flyer*</label>
                                        <select name="input_81" class="form-select" aria-label="Default select example" required>
                                            <option value="MODERN (DEFAULT)" selected="selected"><option>
                                        </select>
                                        </div>
                                        <div class="col-2 default-none">
                                        <label class="mt-2" for="">Copy Partner on Lead Emails?</label>
                                        <div class="switch-field">
                                            <input type="radio" id="radio-three" name="switch-three" value="yes" checked="">
                                            <label for="radio-three">Yes</label>
                                            <input type="radio" id="radio-four" name="switch-three" value="no">
                                            <label for="radio-four">No</label>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="row mx-auto text-start mb-3 justify-content-start">
                                        <div class="col-4">
                                        <label class="mt-2" for="">CHOOSE FONT STYLE*</label>
                                        <select name="input_81" class="form-select" aria-label="Default select example" required>
                                            <option value="MODERN (DEFAULT)" selected="selected">MODERN (DEFAULT)</option><option value="CLASSIC">CLASSIC</option>
                                        </select>
                                        </div>
                                        <div class="col-4">
                                        <label class="mt-2" for="">CHOOSE COLOR SCHEME*</label>
                                        <select name="input_82" class="form-select" aria-label="Default select example" required>
                                            <option value="Default Color" selected="selected">Default Color</option>
                                            <option value="Aqua &amp; Black *Douglas Elliman">Aqua &amp; Black *Douglas Elliman</option>
                                            <option value="Dark Blue &amp; White *Sotheby's">Dark Blue &amp; White *Sotheby's</option>
                                            <option value="Droplets *Cool Water Vibe">Droplets *Cool Water Vibe</option>
                                            <option value="Gold &amp; Black *Century 21">Gold &amp; Black *Century 21</option>
                                            <option value="Green &amp; White *Better Homes &amp; Gardens">Green &amp; White *Better Homes &amp; Gardens</option>
                                            <option value="Gray &amp; Black *Compass">Gray &amp; Black *Compass</option>
                                            <option value="Light Blue &amp; White *Coldwell Banker">Light Blue &amp; White *Coldwell Banker</option>
                                            <option value="Orange &amp; Blue *exp Realty">Orange &amp; Blue *exp Realty</option>
                                            <option value="Purple &amp; White *Berkshire Hathaway">Purple &amp; White *Berkshire Hathaway</option>
                                            <option value="Red, White &amp; Blue *RE/MAX">Red, White &amp; Blue *RE/MAX</option>
                                            <option value="Red &amp; Gray *Keller Williams">Red &amp; Gray *Keller Williams</option>
                                            <option value="Yellow &amp; Black *Weichert">Yellow &amp; Black *Weichert</option>
                                            <option value="Black *Plain no pattern">Black *Plain no pattern</option>
                                            <option value="Blue *Plain no pattern">Blue *Plain no pattern</option>
                                            <option value="Gold *Plain no pattern">Gold *Plain no pattern</option>
                                            <option value="Gray *Plain no pattern">Gray *Plain no pattern</option>
                                            <option value="Green *Plain no pattern">Green *Plain no pattern</option>
                                            <option value="Red *Plain no pattern">Red *Plain no pattern</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="row mx-auto justify-content-start mb-3">
                                        <div class="col-4">
                                        <label class="text-left" for="">Heading such as "OPEN HOUSE"*</label>
                                        <input type="text" id="" name="" placeholder="Text before Price such as 'Offered at'" value="OPEN HOUSE" required>
                                        </div>
                                        <div class="col-4">
                                        <label class="text-left" for="anything">Sub-Heading such as Open Date*</label>
                                        <input type="text" id="anything" name="anything" placeholder="Like: Open House on 1/8/23 1-4pm" value="3" required>
                                        </div>
                                    </div>
                                    </div>
                                </article>
                                <article class="tab-2">
                                    <div class="row col-10 mx-auto justify-content-start mb-3">
                                    <div class="col-4">
                                        <label class="text-left" for="">Optional Brochure Features</label>
                                        <div class="d-flex flex-wrap align-items-center">
                                            <div class="d-flex align-items-center me-3">
                                            <input type="checkbox" class="me-2" id="Floorplan" name="Floorplan" value="Floorplan">
                                            <label class="mb-0" for="Floorplan"> Floorplan?</label>
                                            </div>
                                            <div class="d-flex align-items-center">
                                            <input type="checkbox" class="me-2" id="3D-Tour" name="3D Tour" value="3D Tour">
                                            <label class="mb-0" for="3D-Tour"> 3D Tour?</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <label class="text-left" for="">Site Style or Url</label>
                                        <select name="input_105" class="form-select" aria-label="Default select example" required>
                                        <option value="" selected="selected" class="gf_placeholder">CHOOSE A STYLE</option>
                                        <option value="1">Property Site - Style I</option>
                                        <option value="2">Property Site - Style II</option>
                                        <option value="3">Property Site - Style III</option>
                                        <option value="Custom">Custom URL</option>
                                        </select>
                                    </div>
                                    </div>
                                    <div class="row text-start my-3 p-3 bg-blue align-items-center">
                                    <div class="col-4">
                                        <img class="img-fluid w-100 p-3" src="{{url('assests/images/Virtual-Brochure-2022-sm.jpg')}}" alt="">
                                    </div>
                                    <div class="col-8">
                                        <h5><b>Virtual Brochures</b> can be created and printed to display at your listings and/or open in place of a printed brochure. Visitors can then view on their smartphones by scanning a QRCODE or Texting a code.</h5>
                                        <h5 class="mb-3">You can use your own tour url or use our mini property site as the online 'virtual brochure'.</h5>
                                        <h5 class="mb-3"><b>To add more than (3) property site images:</b> Go to Edit this property on Properties page</h5>
                                        <h5 class="mb-3">To add or user your own Tour url: Choose 'Custom' above on the Site Style dropdown.</h5>
                                        <h5 class="mb-3"><b>(A mini property site will be used for this property, but you can also use your own custom url instead.)</b></h5>
                                        <div>
                                        <div class="mb-3">
                                            <label for="">Heading such as "VIRTUAL BROCHURE"*</label>
                                            <input type="text" id="" name="" placeholder="Heading such as 'VIRTUAL BROCHURE'* " value="" required="">
                                        </div>
                                        <div class="">
                                            <label for="">Sub-Heading such as Property or Event Details*</label>
                                            <input type="text" id="" name="" placeholder="Sub-Heading such as Property or Event Details" value="" required="">
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </article>
                            </div>
                            <!-- <br class="clear:both" /> -->
                        </div><!-- //wrapper -->
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo"> Images</button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body text-start">
                    <h5>(3) Property Images are needed for Flyers. Brochures use the first (2).</h5>
                    <div class="create-flyer-current-img">
                    <h5>The flyer uses 5 images. Two are your Headshot & Logo images.</h5>
                    <h5>The other three include a large image of the property and two additional smaller images.</h5>
                    <form action="">
                        <div class="row col-12 m-auto my-3 bg-blue align-items-end py-3">
                        <div class="col-6 d-flex mb-3 border-bottom-dashed">
                            <div class="col-5">
                            <div class="col-12 text-left mb-4">
                                <h5>
                                <b>YOUR CURRENT IMAGES</b>
                                </h5>
                            </div>
                            <div class="timelinee-item">
                                <img class="img-fluid" src="{{url('assets/dist/img/img1.jpg')}}" alt="Image 1">
                                <p>Large 1</p>
                            </div>
                            </div>
                            <div class="col-7">
                            <div class="col-12 text-start mb-4">
                                <h5>
                                <b>IF ADD/CHANGE IMAGES</b>
                                </h5>
                            </div>
                            <div class="small-12 large-4 columns">
                                <div class="row align-items-center text-start">
                                <div class="w-100">
                                    <h4>Add/Replace Large Image</h4>
                                </div>
                                <div class="w-auto">
                                    <div class="upload-containers">
                                    <div class="imageWrapper">
                                        <img id="showpre" class="file-image" src="{{url('assets/dist/img/dummy-image-square.jpg')}}">
                                    </div>
                                    </div>
                                </div>
                                <div class="w-auto text-start">
                                    <p id="img-name">Image Name</p>
                                    <button class="file-upload">
                                    <input id="inpu" type="file" class="file-input">Choose File </button>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-6 d-flex mb-3 border-bottom-dashed">
                            <div class="col-5">
                            <div class="col-12 text-left mb-4">
                                <h5>
                                <b>YOUR CURRENT IMAGES</b>
                                </h5>
                            </div>
                            <div class="timelinee-item">
                                <img class="img-fluid" src="{{url('assets/dist/img/img1.jpg')}}" alt="Image 1">
                                <p>Image 2</p>
                            </div>
                            </div>
                            <div class="col-7">
                            <div class="col-12 text-start mb-4">
                                <h5>
                                <b>IF ADD/CHANGE IMAGES</b>
                                </h5>
                            </div>
                            <div class="small-12 large-4 columns">
                                <div class="row align-items-center text-start">
                                <div class="w-100">
                                    <h4>Add/Replace Large Image</h4>
                                </div>
                                <div class="w-auto">
                                    <div class="upload-containers">
                                    <div class="imageWrapper">
                                        <img id="showpre" class="file-image" src="{{url('assets/dist/img/dummy-image-square.jpg')}}">
                                    </div>
                                    </div>
                                </div>
                                <div class="w-auto text-start">
                                    <p id="img-name">Image Name</p>
                                    <button class="file-upload">
                                    <input id="inpu" type="file" class="file-input">Choose File </button>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-6 d-flex mb-3 border-bottom-dashed">
                            <div class="col-5">
                            <div class="timelinee-item">
                                <img class="img-fluid" src="{{url('assets/dist/img/img1.jpg')}}" alt="Image 1">
                                <p>Image 3</p>
                            </div>
                            </div>
                            <div class="col-7">
                            <div class="small-12 large-4 columns">
                                <div class="row align-items-center text-start">
                                <div class="w-100">
                                    <h4>Add/Replace Large Image</h4>
                                </div>
                                <div class="w-auto">
                                    <div class="upload-containers">
                                    <div class="imageWrapper">
                                        <img id="showpre" class="file-image" src="{{url('assets/dist/img/dummy-image-square.jpg')}}">
                                    </div>
                                    </div>
                                </div>
                                <div class="w-auto text-start">
                                    <p id="img-name">Image Name</p>
                                    <button class="file-upload">
                                    <input id="inpu" type="file" class="file-input">Choose File </button>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-6 d-flex mb-3 border-bottom-dashed">
                            <div class="col-5">
                            <div class="timelinee-item">
                                <img class="img-fluid" src="{{url('assets/dist/img/img1.jpg')}}" alt="Image 1">
                                <p>Logo</p>
                            </div>
                            </div>
                            <div class="col-7">
                            <div class="small-12 large-4 columns">
                                <div class="row align-items-center text-start">
                                <div class="w-100">
                                    <h4>Add/Replace Large Image</h4>
                                </div>
                                <div class="w-auto">
                                    <div class="upload-containers">
                                    <div class="imageWrapper">
                                        <img id="showpre" class="file-image" src="{{('assets/dist/img/dummy-image-square.jpg')}}">
                                    </div>
                                    </div>
                                </div>
                                <div class="w-auto text-start">
                                    <p id="img-name">Image Name</p>
                                    <button class="file-upload">
                                    <input id="inpu" type="file" class="file-input">Choose File </button>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-6 d-flex mb-3 border-bottom-dashed">
                            <div class="col-5">
                            <div class="timelinee-item">
                                <img class="img-fluid" src="{{url('assets/dist/img/img1.jpg')}}" alt="Image 1">
                                <p>Headshot</p>
                            </div>
                            </div>
                            <div class="col-7">
                            <div class="small-12 large-4 columns">
                                <div class="row align-items-center text-start">
                                <div class="w-100">
                                    <h4>Add/Replace Large Image</h4>
                                </div>
                                <div class="w-auto">
                                    <div class="upload-containers">
                                    <div class="imageWrapper">
                                        <img id="showpre" class="file-image" src="{{url('assets/dist/img/dummy-image-square.jpg')}}">
                                    </div>
                                    </div>
                                </div>
                                <div class="w-auto text-start">
                                    <p id="img-name">Image Name</p>
                                    <button class="file-upload">
                                    <input id="inpu" type="file" class="file-input">Choose File </button>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-5 text-center mx-auto my-3"><a class="btn btn-primary px-5">
                        <h3 class="mb-0">SAVE FLYER IMAGES</h3></a>
                        </div>
                    </form>
                    </div>
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">Address</button>
                </h2>
                <div id="flush-collapseThree" class="flush-collapseThree accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <div class="">
                    <h5><b>View or Change</b></h5>
                    <div class="d-flex flex-wrap justify-content-center align-items-end text-start">
                        <div class="col-12 col-md-6 col-lg-3">
                        <label for="Street">Property <a href="{{route('property')}}">Click to Change</a></label>
                        <input type="text" id="Street" name="Street" placeholder="Enter Location:"  value="Easton Town Ctr" disabled="disabled">
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                        <label for="city">City</label>
                        <input type="text" id="city" name="city" placeholder="City:" value="Columbus" required="">
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                        <label for="state">State</label>
                        <input type="text" id="state" name="state" placeholder="State:" value="Ohio" required="">
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                        <label for="zip">Zip Code</label>
                        <input type="text" id="zip" name="zip" placeholder="Zip Code:" value="43219" required="">
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">Broker / Team</button>
                </h2>
                <div id="flush-collapseFour" class=" flush-collapseFour accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <div class="">
                    <h5><b>View / Change Details.</b></h5>
                    <div class="d-flex flex-wrap justify-content-center align-items-end text-start">
                        <div class="col-12 col-md-6 col-lg-3">
                        <label for="Street">Broker / Team Name</label>
                        <input type="text" id="Street" name="Street" placeholder=""  value="Casas Real Estate">
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                        <label for="Street, City, State ZIP">Broker / Office Address</label>
                        <input type="text" id="Street, City, State ZIP" name="Street, City, State ZIP" placeholder="Street, City, State ZIP:" value="58966" required>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                        <label for="number">Office Phone</label>
                        <input type="number" id="number" name="number" placeholder="(___) ___-____:" value="975875987" required>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="col-4 mx-auto text-center mb-3">
                <button class="btn btn-primary px-5" type="submit" name="go to property.php"><h3 class="mb-0">COMPLATED</h3></button>
            </div>
        </form>
        <div class="col-6 mx-auto text-center mt-3">
            <a class="btn btn-primary px-5" href="{{route('property')}}">RETURN TO PROPERTIES</a>
        </div>
        </div>
    </section>
@endsection
