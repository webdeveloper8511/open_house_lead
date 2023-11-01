@extends('layouts.master')
@section('content')
        <section class="page-content quick-start-section h-100vh p-4 bg-black-50">
          <div class="container-fluid m-auto text-center shadow p-4 rounded bg-white">
            <h1 class="main-heading">Quick Start - Add Setting</h1>
            <h5 class="main-sub_heading">Click next & <span>Submit</span> on the last step</h5>
            <div class="multi-step-form-block">
              <form method="post" id="quick-start-multi-form" class="quick-start-multi-form">
                <div class="mutliform-step step-1">
                  <div class="row multi-form-content">
                    <div class="multi-form-field col-12 col-md-6">
                      <label>First Name</label>
                      <input type="text" name="quickstart_fn" class="field" value="Roberto" placeholder="First Name">
                    </div>
                    <div class="multi-form-field col-12 col-md-6">
                      <label>Last Name</label>
                      <input type="text" name="quickstart_ln" class="field" value="Moreno" placeholder="Last Name">
                    </div>
                    <div class="multi-form-field col-12 col-md-6">
                      <label>Email Address</label>
                      <input type="text" name="quickstart_email" class="field" value="rmoreno@smartlivingaz.com" placeholder="Email Address">
                    </div>
                    <div class="multi-form-field col-12 col-md-6">
                      <label>Phone</label>
                      <input type="text" name="quickstart_phone" class="field" value="(520) 668-2769" placeholder="Phone">
                    </div>
                    <div class="multi-form-field col-12 col-md-6">
                      <label>Disclaimer or Disclosure</label>
                      <input type="text" name="quickstart_disclaimer" class="field" value="Real Estate Consultant" placeholder="Disclaimer or Disclosure">
                    </div>
                  </div>
                  <div class="multistep-form-footer">
                    <input type="button" id="step-2" value="Next" class="multistep-button multistep_next btn btn-info">
                  </div>
                </div>
                <div class="mutliform-step step-2">
                  <div class="step-heading">
                    <h4 class="heading">Add Headshot, Logo then Click NEXT</h4>
                  </div>
                  <div class="row multi-form-content">
                    <div class="quickstart-addimage quickstart-addimage-step2 btn btn-primary">Add Images</div>
                    <div class="quickstart-addimage-model">
                        <div class="quickstart-addimage-model-inner">        
                          <div class="close-btn">×</div>
                          <div class="quickstart-addimage-model-wrap">
                            <div class="row multi-form-content">
                              <div class="multi-form-field col-12">
                                <label>Add Headshot (or main image)</label>
                                <input type="file" name="quickstart_main_image" class="field">
                              </div>
                              <div class="multi-form-field col-12">
                                <label>Add Logo</label>
                                <input type="file" name="quickstart_logo" class="field">
                              </div>
                              <div class="multi-form-field col-12">
                                <label>Logo Background Color</label>
                                <div class="field-wrap">
                                  <input type="radio" id="quickstart-addimage_bg_none" name="Logo_Background_Color" value="Quickstart Image Bg None" checked>
                                  <label for="quickstart-addimage_bg_none">None</label>
                                </div>
                                <div class="field-wrap">
                                  <input type="radio" id="quickstart-addimage_bg_white" name="Logo_Background_Color" value="Quickstart Image Bg White">
                                  <label for="quickstart-addimage_bg_white">White</label>
                                </div>
                                <div class="field-wrap">
                                  <input type="radio" id="quickstart-addimage_bg_blk" name="Logo_Background_Color" value="Quickstart Image Bg Black">
                                  <label for="quickstart-addimage_bg_blk">Black</label>
                                </div>
                              </div>
                              <input type="button" id="quickstart_logo" value="Submit" class="btn btn-success w-auto">
                            </div>
                            <p><span>Optional:</span> For a Transparent logo you can add a White or Black background.</p>
                          </div>  
                        </div>  
                        <div class="bg-overlay"></div>
                    </div>
                  </div>
                  <div class="multistep-form-footer">
                    <input type="button" id="step-1" value="Previous" class="multistep-button multistep_previous btn btn-outline-info">
                    <input type="button" id="step-3" value="Next" class="multistep-button multistep_next btn btn-info">
                  </div>
                </div>
                <div class="mutliform-step step-3">
                  <div class="step-heading">
                    <h4 class="heading">Add a Property</h4>
                    <h6 class="sub_heading">Add the address for the Open House or Event. This will Autofill the address for you once you start typing.</h6>
                  </div>
                  <div class="row multi-form-content">
                    <div class="multi-form-field col-12">
                      <label>Street</label>
                      <input type="text" name="quickstart_street" class="field" value="123 Main Street" placeholder="Such as: 123 Main Street">
                    </div>
                    <div class="multi-form-field col-12 col-md-6">
                      <label>City</label>
                      <input type="text" name="quickstart_city" class="field" placeholder="City">
                    </div>
                    <div class="multi-form-field col-12 col-md-6">
                      <label>State</label>
                      <input type="text" name="quickstart_state" class="field" placeholder="State">
                    </div>
                    <div class="multi-form-field col-12 col-md-6">
                      <label>Zip</label>
                      <input type="text" name="quickstart_zip" class="field" placeholder="Zip">
                    </div>
                  </div>
                  <div class="multistep-form-footer">
                    <input type="button" id="step-2" value="Previous" class="multistep-button multistep_previous btn btn-outline-info">
                    <input type="button" id="step-4" value="Next" class="multistep-button multistep_next btn btn-info">
                  </div>
                </div>
                <div class="mutliform-step step-4">
                  <div class="step-heading">
                    <h4 class="heading">Registration Flyer Details</h4>
                  </div>
                  <div class="row multi-form-content">
                    <div class="multi-form-field col-12 col-md-6">
                      <label>Open Date/Time or anything</label>
                      <input type="text" name="quickstart_open_date" class="field" value="" placeholder='Such as "Open House on 1/1/23 from 1-4'>
                    </div>
                    <div class="multi-form-field col-12 col-md-6">
                      <label>Price (Use only a $ and a number)</label>
                      <input type="text" name="quickstart_price" class="field" value="" placeholder="Price (such as $900,000)">
                    </div>
                    <div class="quickstart-flyer-image mb-2">
                      <p>The Visitor Registration Flyer uses (3) Property Photos. (Or, add any images you like for testing!)</p>
                      <div class="quickstart-addimage quickstart-addimage-step4 btn btn-primary">Add Images</div>
                      <div class="quickstart-addimage-model">
                          <div class="quickstart-addimage-model-inner">        
                            <div class="close-btn">×</div>
                            <div class="quickstart-addimage-model-wrap">
                            <div class="step-heading">
                              <h4 class="heading">Add Flyer Images</h4>
                              <h6 class="sub_heading text-center">The Visitor Registration Flyer uses (3) Property Photos. (Or, add any images you like for testing!)</h6>
                            </div>
                              <div class="row multi-form-content">
                                <div class="multi-form-field col-12">
                                  <label>Add Property Image 1</label>
                                  <input type="file" name="flyer_prop_img1" class="field">
                                </div>
                                <div class="multi-form-field col-12">
                                  <label>Add Property Image 2</label>
                                  <input type="file" name="flyer_prop_img2" class="field">
                                </div>
                                <div class="multi-form-field col-12">
                                  <label>Add Property Image 3</label>
                                  <input type="file" name="flyer_prop_img3" class="field">
                                </div>                                
                                <input type="button" id="flyer_prop_img" value="Submit" class="btn btn-success w-auto">
                              </div>
                            </div>  
                          </div>  
                          <div class="bg-overlay"></div>
                      </div>
                    </div>
                  </div>
                  <div class="multistep-form-footer">
                    <input type="button" id="step-3" value="Previous" class="multistep-button multistep_previous btn btn-outline-info">
                    <input type="button" id="step-5" value="Next" class="multistep-button multistep_next btn btn-info">
                  </div>
                </div>
                <div class="mutliform-step step-5">
                  <div class="step-heading">
                    <h4 class="heading">Congrats - Last Page!</h4>
                    <h6 class="sub_heading">Check your email, a QR Code Visitor Registration Flyer will be sent to use for your next open house. Simply print it and display at your Open House & Good Luck!</h6>
                  </div>
                  <div class="row multi-form-content">
                    <h5 class="field-heading text-left">Add your Broker / Company Info & Click Submit below to save your settings.</h5>
                    <div class="multi-form-field col-12 col-md-4">
                      <label>Broker / Team Name</label>
                      <input type="text" name="quickstart_broker" class="field" value="Casas Real Estate" placeholder='Broker / Team Name'>
                    </div>
                    <div class="multi-form-field col-12 col-md-4">
                      <label>Broker / Office Address</label>
                      <input type="text" name="quickstart_price" class="field" value="58966" placeholder="Broker / Office Address">
                    </div>
                    <div class="multi-form-field col-12 col-md-4">
                      <label>Office Phone</label>
                      <input type="text" name="quickstart_price" class="field" value="(520) 329-5850" placeholder="Office Phone">
                    </div>
                  </div>
                  <div class="quickstart-final_next">
                    <h4 class="heading">Next Steps (Optional)</h4>
                    <div class="row">
                      <div class="col-12">
                        <h4>How to Setup a New Open House.</h4>
                      </div>
                      <div class="col-12 col-md-6">
                        <h6>PAID SUBSCRIBERS: 1st, Open the Properties & Flyers Menu Option, Then :-</h6>
                        <ul>
                          <li>Add a property with Images, Price etc.</li>
                          <li>Add a QR Code / Text Registration Flyer to the Property </li>
                          <li>Print the Flyer and Display at your Open House for Visitor Regstration</li>
                        </ul>
                        <h6>During the Open & After :-</h6>
                        <ul>
                          <li>View Visitors by using the Property & Flyers page (click on the property)</li>
                          <li>Or by using the View Visitors link on the menu</li>
                        </ul>
                      </div>
                      <div class="col-12 col-md-6">
                        <h6>For Free Subscribers :-</h6>
                        <p>Click the 'QUICK FLYER' menu option to create a QR Code Visitor Registration Flyer to display at your open house.</p>
                      </div>
                    </div>
                  </div>
                  <div class="multistep-form-footer">
                    <input type="button" id="step-4" value="Previous" class="multistep-button multistep_previous btn btn-outline-info">
                    <input type="submit" id="quickstart_submit" value="Submit" class="multistep-button multistep_submit btn btn-success">
                  </div>
                </div>
              </form>
            </div>
            <div class="form-notice">
              <p>To further customize your account & branding, use the Settings option on the menu.</p>
              <p><span>IMPORTANT:</span> Check your changes by doing a ‘test’ Visitor Sign-In.</p>
            </div>
          </div>
        </section>
@endsection