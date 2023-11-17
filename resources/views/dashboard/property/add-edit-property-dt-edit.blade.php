@extends('layouts.master')
@section('content')
<section class="add-edit-property-dt-section d-flex h-100vh p-4 bg-black-50">
          <div class="container-fluid  m-auto text-center shadow p-3 rounded">
            <h1 class="text-center mb-3">Edit Property or Event </h1>
            <form action="{{url('property/update/'.$property->id)}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne"> Property Address </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                      <div class="form-container">
                        <h5>PROPERTY ADDRESS* <a class="" href="#" data-toggle="tooltip" title="Add the address for the Open House or Event.  This will Autofill the address for you once you start typing.">
                            <i class="fas fa-question-circle"></i>
                          </a>
                        </h5>
                        <div class="d-flex flex-wrap justify-content-center align-items-end text-start">
                          <div class="form-group">
                            <label for="Street">Street</label>
                            <input type="text" id="Street" name="street" value="{{$property->street}}" placeholder="Enter Location:" required>
                          </div>
                          <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" id="city" name="city" value="{{$property->city}}" placeholder="City:" required>
                          </div>
                          <div class="form-group">
                            <label for="state">State</label>
                            <input type="text" id="state" name="state" value="{{$property->state}}" placeholder="State:" required>
                          </div>
                          <div class="form-group">
                            <label for="zip">Zip Code</label>
                            <input type="text" id="zip" name="zip_code" value="{{$property->zip_code}}" placeholder="Zip Code:" required>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo"> City State Zip Flyers, Riders, Sites Info </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                      <h5 class="my-3">OPTIONAL ONLY IF USING FLYERS, VIRTUAL BROCHURES OR MINI PROPERTY SITES.</h5>
                      <div class="row align-items-center py-4">
                        <div class="col-5">
                          <img class="img-fluid" src="{{url('assets/dist/img/flyers.jpg')}}" alt="">
                        </div>
                        <div class="col-7 px-4">
                          <div class="d-flex flex-wrap justify-content-center align-items-center second-form">
                            <div class="row justify-content-center">
                              <div class="form-group col-6">
                                <label class="text-left" for="OPEN_HOUSE">Heading at Top of Flyer, like "OPEN HOUSE"</label>
                                <input type="text" id="OPEN_HOUSE" value="{{$property->open_house}}" name="open_house" placeholder="Such as 'Open House on 12/31/2020 from 1pm to 4pm, Refreshments will be served' " required>
                              </div>
                              <div class="form-group col-6">
                                <label class="text-left" for="anything">Open Date/Time or anything</label>
                                <input type="text" id="anything" value="{{$property->datatime_anything}}"  name="datatime_anything" placeholder="Such as Open House on 12/31/2020 from 1pm to 4pm." required>
                              </div>
                              <div class="form-group col-6">
                                <label class="text-left" for="Before-Price">Before Price such as Offered at:, or Anything</label>
                                <input type="text" id="state" value="{{$property->before_price}}" name="before_price" placeholder="Before Price such as Offered at:" required>
                              </div>
                              <div class="form-group col-6">
                                <label class="text-left" for="Price">Price (Use only a $ and a number)</label>
                                <input type="text" id="Price" name="price" value="{{$property->price}}" placeholder="Price (such as $900,000)" required>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree"> Images for Flyers, Riders, Sites </button>
                  </h2>
                  <div id="flush-collapseThree" class="flush-collapseThree accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                      <h5 class="mb-3">There are (3) Images Needed for a Flyer or Virtual Brochure.</h5>
                      <h5 class="mb-3">There are (3) Images Needed for a Flyer and are the 1st (3) images shown on a Slideshow for a Mini Property Site. <br>The Flyers also use your Headshot & Logo which can be added under 'Settings/Your Details'.section</h5>
                      <div>
                        <div class="row col-7 m-auto my-3 bg-blue align-items-center">
                          <div class="timelinee col-4 py-3">
                            <div class="timelinee-item">
                              <img class="img-fluid" src="{{url('assets/dist/img/img1.jpg')}}" alt="Image 1">
                              <p>Large 1</p>
                            </div>
                            <div class="timelinee-item">
                              <img class="img-fluid" src="{{url('assets/dist/img/img2.jpg')}}" alt="Image 2">
                              <p>Image 2</p>
                            </div>
                            <div class="timelinee-item">
                              <img class="img-fluid" src="{{url('assets/dist/img/img3.jpg')}}" alt="Image 3">
                              <p>Image 3</p>
                            </div>
                            <div class="timelinee-item">
                              <img class="img-fluid" src="{{url('assets/dist/img/img4.png')}}" alt="Image 4">
                              <p>Logo</p>
                            </div>
                            <div class="timelinee-item">
                              <img class="img-fluid" src="{{url('assets/dist/img/img5.jpg')}}" alt="Image 5">
                              <p>Headshot</p>
                            </div>
                          </div>
                          <div class="col-8 bg-blue">
                            <div class="row">
                              <div class="small-12 large-4 columns">
                                <div class="row p-3 align-items-center text-start">
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
                                      <input id="inpu" type="file" name="flyer_riders_first_image" class="file-input">Choose File </button>
                                  </div>
                                </div>
                              </div>
                              <div class="small-12 large-4 columns">
                                <div class="row p-3 align-items-center text-start">
                                  <div class="w-100">
                                    <h4>Add/Replace 2nd Image</h4>
                                  </div>
                                  <div class="w-auto">
                                    <div class="upload-containers">
                                      <div class="imageWrapper">
                                        <img id="showpre1" class="file-image" src="{{url('assets/dist/img/dummy-image-square.jpg')}}">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="w-auto text-start">
                                    <p id="img-name1">Image Name</p>
                                    <button class="file-upload">
                                      <input id="inpu1" type="file" name="flyer_riders_second_image" class="file-input">Choose File </button>
                                  </div>
                                </div>
                              </div>
                              <div class="small-12 large-4 columns">
                                <div class="row p-3 align-items-center text-start">
                                  <div class="w-100">
                                    <h4>Add/Replace 3rd Image</h4>
                                  </div>
                                  <div class="w-auto">
                                    <div class="upload-containers">
                                      <div class="imageWrapper">
                                        <img id="showpre2" class="file-image" src="{{url('assets/dist/img/dummy-image-square.jpg')}}">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="w-auto text-start">
                                    <p id="img-name2">Image Name</p>
                                    <button class="file-upload">
                                      <input id="inpu2" type="file" name="flyer_riders_three_image" class="file-input">Choose File </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour"> Sites & Virtual Brochure Settings </button>
                  </h2>
                  <div id="flush-collapseFour" class=" flush-collapseFour accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                      <h5 class="mb-3">PROPERTY SITES & VIRTUAL BROCHURE SETTINGS, DETAILS & EXTRA IMAGES.</h5>
                      <div class="row">
                        <div class="col-6 px-3">
                          <div class="row text-start">
                            <div class="col-4">
                              <label class="mt-2">Bedrooms</label>
                              <select class="form-select" name="bedrooms" aria-label="Default select example">
                                @if($property->bedrooms)
                                <option value="{{$property->bedrooms}}" selected>{{$property->bedrooms}}</option>
                                @else
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9+">9+</option>
                                @endif
                              </select>
                            </div>
                            <div class="col-4">
                              <label class="mt-2" for="">Bathrooms</label>
                              <select class="form-select" name="bathrooms" aria-label="Default select example">
                                @if($property->bathrooms)
                                    <option value="{{$property->bathrooms}}" selected>{{$property->bathrooms}}</option>
                                @else
                                <option value="1">1</option>
                                <option value="1.5">1.5</option>
                                <option value="2">2</option>
                                <option value="2.5">2.5</option>
                                <option value="3">3</option>
                                <option value="3.5">3.5</option>
                                <option value="4">4</option>
                                <option value="4.5">4.5</option>
                                <option value="5">5</option>
                                <option value="5.5">5.5</option>
                                <option value="6">6</option>
                                <option value="6.5">6.5</option>
                                <option value="7+">7+</option>
                                @endif
                              </select>
                            </div>
                            <div class="col-4">
                              <label class="mt-2" for="">SQ Footage</label>
                              <input type="text" id="SQ-Footage" name="sq_footage" value="{{$property->sq_footage}}" placeholder="SQ Footage" required>
                            </div>
                            <div class="col-12">
                              <div>
                                <label class="mt-2" for=""> Optional: Brief Description *Used on Property Sites & some of the Classic Sign-In pages. </label>
                                <textarea id="" name="property_sites_desc" rows="4" cols="50">{{$property->property_sites_desc}}</textarea>
                              </div>
                              <div>
                                <label class="mt-2" for=""> Add a custom landing page or link for the Rider & Virtual Brochure QR Code or Text Code. (will be used instead of our Mini Property Site) </label>
                                <input type="text" id="" name="mini_property_site" value="{{$property->mini_property_site}}" placeholder="" required>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-6 bg-blue d-flex align-items-center p-3">
                          <div class="small-12 large-4 columns">
                            <div class="col-12 text-start">
                              <h4 class="mb-3">Extra Images for the Mini Property Sites - Add / Replace Images</h4>
                            </div>
                            <div class="row align-items-center text-start mb-2">
                              <div class="w-auto mb-2">
                                <div class="upload-containers">
                                  <div class="imageWrapper">
                                    <img id="showpre3" class="file-image" src="{{url('assets/dist/img/dummy-image-square.jpg')}}">
                                  </div>
                                </div>
                              </div>
                              <div class="w-auto text-start">
                                <p id="img-name3">Image Name</p>
                                <button class="file-upload">
                                  <input id="inpu3" type="file" name="extra_image_mini_property_sites" multiple="multiple" class="file-input">Choose File </button>
                              </div>
                            </div>
                            <div class="col-12 text-start mb-3">
                              <p class="mb-0">Upload ALL Extra Images needed for the Property Site Slideshow.</p>
                              <p class="fw-bold mb-0">If extra images have been uploaded previously this will overwrite those images.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive"> Property Options </button>
                  </h2>
                  <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                      <h5 class="mb-3">There are (3) Images Needed for a Flyer or Virtual Brochure.</h5>
                      <div class="row align-items-center py-3 bg-off-white">
                        <h5 class="fw-bold">Add a Unique Welcome Email.</h5>
                        <h5 class="fw-bold">The Welcome Email can contain property specific information, image & links as well as an attachment.</h5>
                        <div class="col-6 text-start p-3">
                          <div class="form">
                            <h5>Send a Unique Welcome Email?</h5>
                            <div class="switch-field">

                              <input type="radio" id="radio-one" name="switch_one1" value="yes" checked />
                              <label for="radio-one">Yes</label>
                              <input type="radio" id="radio-two" name="switch_one1" value="no" />
                              <label for="radio-two">No</label>

                            </div>
                            <p>Choose Yes to Automatically Send to Visitors.</p>
                          </div>
                          <div class="form">
                            <h5>Enable Welcome Email Signature?</h5>
                            <h5>To disable our signature choose 'No' to use your own.</h5>
                            <div class="switch-field">
                              <input type="radio" id="radio-three" name="switch_three" value="yes" checked />
                              <label for="radio-three">Yes</label>
                              <input type="radio" id="radio-four" name="switch_three" value="no" />
                              <label for="radio-four">No</label>
                            </div>
                          </div>
                        </div>
                        <div class="col-6 p-3 ">
                          <div class="row justify-content-center">
                            <div class="form-group col-6">
                              <label class="text-left" for="">Welcome Email Subject</label>
                              <input type="text" id="" name="welcome_email_sub" value="{{$property->propertyOption->welcome_email_sub}}" placeholder="Add the Welcome Email Subject" required="">
                            </div>
                            <div class="form-group col-6">
                              <label class="text-left" for="anything">Email Headline (inside email)</label>
                              <input type="text" id="anything" name="headline_email" value="{{$property->propertyOption->headline_email}}" placeholder="Add the Welcome Email Headline here" required="">
                            </div>
                          </div>
                          <div class="text-start">
                            <h5>WATCH OUT!If using a 'Custom Color', make sure to choose a proper headline (background) & text color that work together.</h5>
                            <div class="row align-items-center">
                              <div class="col-6">
                                <label class="mt-2">Headline Color</label>
                                <select  class="form-select" name="headline_color" aria-label="Default select example" id="headlin_color">
                                    @foreach($headlineTextColor as $headlineTextColors)
                                        <option value="{{$headlineTextColors->name}}" {{ ( $headlineTextColors->name == $property->propertyOption->headline_color ) ? 'selected' : '' }}>{{ $headlineTextColors->name }}</option>
                                    @endforeach
                                </select>
                              </div>
                              <div class="col-6">
                                <label class="mt-2" for="favcolor">Headline Custom Color:</label>
                                <input type="color" id="favcolor_headline" name="headline_custom_color" value="#FFC0CB"></input>
                              </div>
                            </div>
                            <div class="row align-items-center">
                              <div class="col-6">
                                <label class="mt-2">Headline Text Color</label>
                                <select class="form-select" name="headline_text_color" aria-label="Default select example">
                                  @foreach($headlineColor as $headlineColors)
                                    <option value="{{$headlineColors->name}}" {{ ( $headlineColors->name == $property->propertyOption->headline_text_color) ? 'selected' : '' }}>{{ $headlineColors->name }}</option>
                                  @endforeach
                                </select>
                              </div>
                              <div class="col-6">
                                <label class="mt-2" for="favcolor">Custom Text Color:</label>
                                <input type="color" id="favcolor" name="custom_text_color" value="#FFC0CB">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row bg-off-white">
                        <h5 class="text-start">Add a short 'Thank You' Message After a Visitor Signs In</h5>
                        <textarea class="text-editor-code" name="short_thank_you_message">
                            @if(!empty($property->propertyOption->short_thank_you_message))
                                {{$property->propertyOption->short_thank_you_message}}
                            @else
                          <p>
                            Thank you for visiting my Open House today. Please feel free to reach out to me at anytime if you have any questions about this property or if you have a minute to discuss your Real Estate plans. My contact information is below.
                          </p>
                          @endif
                        </textarea>
                      </div>
                      <div class="row bg-blue">
                        <div class="col-6">
                          <div class="small-12 large-4 columns">
                            <div class="row p-3 align-items-center text-center justify-content-center">
                              <div class="w-100  text-center">
                                <h4>Add/Change Email Image</h4>
                              </div>
                              <div class="w-auto">
                                <div class="upload-containers">
                                  <div class="imageWrapper">
                                    <img id="showpre4" class="file-image" src="{{url('assets/dist/img/dummy-image-square.jpg')}}">
                                  </div>
                                </div>
                              </div>
                              <div class="w-auto text-start">
                                <p id="img-name4">Image Name</p>
                                <button class="file-upload">
                                  <input id="inpu4" name="add_change_email_image" type="file" class="file-input">Choose File </button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="small-12 large-4 columns">
                            <div class="row p-3 align-items-center text-center justify-content-center">
                              <div class="w-100 text-center">
                                <h4>Add an Attachment</h4>
                              </div>
                              <div class="w-auto">
                                <div class="upload-containers">
                                  <div class="imageWrapper">
                                    <img id="showpre5" class="file-image" src="{{url('assets/dist/img/dummy-image-square.jpg')}}">
                                  </div>
                                </div>
                              </div>
                              <div class="w-auto text-start">
                                <p id="img-name5">Image Name</p>
                                <button class="file-upload">
                                  <input id="inpu5" type="file" name="attachment_image" class="file-input">Choose File </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item Smartphone-page-setting">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix"> Smartphone Sign-In Page </button>
                  </h2>
                  <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                      <h5 class="mb-3">Unique Smartphone Settings.</h5>
                      <div class="row">
                        <div class="col-12">
                          <h5 class="mb-2">Enable Custom 'Thank You' page settings?</h5>
                          <div class="switch-field">
                            <input type="radio" id="smartphone-thankyou-yes" name="smartphone_switch_one" value="yes" checked />
                            <label for="smartphone-thankyou-yes">Yes</label>
                            <input type="radio" id="smartphone-thankyou-no" name="smartphone_switch_one" value="no" />
                            <label for="smartphone-thankyou-no">No</label>
                          </div>
                          <h6>These Smartphone Settings including the 'Thank You' message as well as files and links are specific to this Property or Event.</h6>
                        </div>
                      </div>
                      <div class="phone-thnk-content">
                        <div class="block-1">
                          <div class="row">
                            <h5 class="text-start">Add a short 'Thank You' Message After a Visitor Signs In</h5>
                            <textarea class="text-editor-code" name="smartphone_thank_you_message">{{$property->PropertySmartphone->smartphone_thank_you_message}}</textarea>
                          </div>
                        </div>
                        <div class="block-2">
                          <h5 class="mb-2">Show Links and/or File Downloads After a Visitor Registers.</h5>
                          <div class="vertical-tab mt-4">
                            <div class="d-flex align-items-start justify-content-between">
                              <div class="nav flex-column" role="tablist" aria-orientation="vertical">
                                <button class="nav-link active" id="add-file-link_1" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Add File or Link #1</button>
                                <button class="nav-link" id="add-file-link_2" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Add File or Link #2</button>
                                <button class="nav-link" id="add-file-link_3" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Add File or Link #3</button>
                              </div>
                              <div class="tab-content">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="add-file-link_1">
                                  <div class="data-type">
                                    <div class="radio-btn">
                                      <input type="radio" id="file_1-None" class="none" name="file_1" value="file_1-None" checked>
                                      <label for="file_1-None">None</label>
                                    </div>
                                    <div class="radio-btn">
                                      <input type="radio" id="file_1-Link" class="link" name="file_1" value="file_1-Link">
                                      <label for="file_1-Link">Link</label>
                                    </div>
                                    <div class="radio-btn">
                                      <input type="radio" id="file_1-File" class="file" name="file_1" value="file_1-File">
                                      <label for="file_1-File">File</label>
                                    </div>
                                  </div>
                                  <div class="data-content">
                                    <div class="content-field field-1 description">
                                      <label>Short Description</label>
                                      <input type="text" id="file-desc_1" name="file_desc_1" value="{{$property->PropertySmartphone->file_desc_1}}" placeholder="*Such as 'Floorplans'">
                                    </div>
                                    <div class="content-field field-2 youtube_link">
                                      <label>Link</label>
                                      <input type="text" id="file-link_1" name="file_link_1" value="{{$property->PropertySmartphone->file_link_1}}" placeholder="https://www.yourwebsite.com">
                                    </div>
                                    <div class="content-field field-3 upload_file">
                                      <label>Upload File</label>
                                      <input type="file" id="file-file_1" name="file_file_1">
                                    </div>
                                  </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="add-file-link_2">
                                  <div class="data-type">
                                    <div class="radio-btn">
                                      <input type="radio" id="file_2-None" class="none"  name="file_2" value="file_2-None" checked>
                                      <label for="file_2-None">None</label>
                                    </div>
                                    <div class="radio-btn">
                                      <input type="radio" id="file_2-Link" class="link" name="file_2" value="file_2-Link">
                                      <label for="file_2-Link">Link</label>
                                    </div>
                                    <div class="radio-btn">
                                      <input type="radio" id="file_2-File" class="file" name="file_2" value="file_2-File">
                                      <label for="file_2-File">File</label>
                                    </div>
                                  </div>
                                  <div class="data-content">
                                    <div class="content-field field-1 description">
                                      <label>Short Description</label>
                                      <input type="text" id="file-desc_2" name="file_desc_2" value="{{$property->PropertySmartphone->file_desc_2}}" placeholder="*Such as 'Floorplans'">
                                    </div>
                                    <div class="content-field field-2 youtube_link">
                                      <label>Link</label>
                                      <input type="text" id="file-link_2" name="file_link_2" value="{{$property->PropertySmartphone->file_link_2}}"  placeholder="https://www.yourwebsite.com">
                                    </div>
                                    <div class="content-field field-3 upload_file">
                                      <label>Upload File</label>
                                      <input type="file" id="file-file_2" name="file_file_2">
                                    </div>
                                  </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                  <div class="data-type">
                                    <div class="radio-btn">
                                      <input type="radio" id="file_3-None" class="none" name="file_3" value="file_3-None" checked>
                                      <label for="file_3-None">None</label>
                                    </div>
                                    <div class="radio-btn">
                                      <input type="radio" id="file_3-Link" class="link" name="file_3" value="file_3-Link">
                                      <label for="file_3-Link">Link</label>
                                    </div>
                                    <div class="radio-btn">
                                      <input type="radio" id="file_3-File" class="file" name="file_3" value="file_3-File">
                                      <label for="file_3-File">File</label>
                                    </div>
                                  </div>
                                  <div class="data-content">
                                    <div class="content-field field-1 description">
                                      <label>Short Description</label>
                                      <input type="text" id="file-desc_3" name="file_desc_3" value="{{$property->PropertySmartphone->file_desc_3}}" placeholder="*Such as 'Floorplans'">
                                    </div>
                                    <div class="content-field field-2 youtube_link">
                                      <label>Link</label>
                                      <input type="text" id="file-link_3" name="file_link_3" value="{{$property->PropertySmartphone->file_link_3}}" placeholder="https://www.yourwebsite.com">
                                    </div>
                                    <div class="content-field field-3 upload_file">
                                      <label>Upload File</label>
                                      <input type="file" id="file-file_3" name="file_file_3">
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-4 m-auto text-center">
                <button class="btn btn-primary px-5" type="submit"><h3 class="mb-0">SUBMIT</h3></button>
              </div>
            </form>
          </div>
        </section>

<script>
    $("#headlin_color").change(function(){
        var selectedValue = $(this).val();
        if(selectedValue == 'Custom'){
            $('#Headline_custom_color').show();
        }else{
            $('#Headline_custom_color').hide();
        }
        });

        jQuery('#favcolor_headline').on('change',function(){
        console.log(jQuery(this).val());
            jQuery('#choosen-color').text(jQuery(this).val());
    });
</script>

@endsection
      