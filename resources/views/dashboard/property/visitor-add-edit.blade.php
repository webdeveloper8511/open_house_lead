@extends('layouts.master')
@section('content')
        <section class="d-flex h-100vh p-4 bg-black-50">
          <div class="container-fluid bg-white m-auto text-center shadow p-3 rounded">
            <h1 class="text-center mb-3">Add / Edit a Visitor </h1>
            <form action="">
              <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne"> Main Details </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="form-container text-left">
                            <h4 class="fw-bold">Contact Info & Notes.</h4>
                            <div class="d-flex flex-wrap align-items-end mb-3">
                                <div class="col-3">
                                    <label for="First Name">First Name</label>
                                    <input type="text" id="First Name" name="First Name" placeholder="First Name" required>
                                </div>
                                <div class="col-3">
                                    <label for="Last Name">Last Name</label>
                                    <input type="text" id="Last Name" name="Last Name" placeholder="Last Name" required>
                                </div>
                                <div class="col-3">
                                    <label for="Email Address">Email Address</label>
                                    <input type="text" id="Email Address" name="Email Address" placeholder="Email Address">
                                </div>
                                <div class="col-3">
                                    <label for="Phone">Phone</label>
                                    <input type="text" id="ziPhonep" name="Phone" placeholder="Phone" required>
                                </div>
                            </div>
                            <div class="working-with-agent">
                                <div class="d-flex flex-wrap align-items-end mb-2">
                                    <div class="col-3">
                                        <label for="">Working with Agent?</label>
                                        <div class="switch-field">
                                            <input type="radio" id="with-agent-yes" name="with-agent" value="yes">
                                            <label for="with-agent-yes">Yes</label>
                                            <input type="radio" id="with-agent-no" name="with-agent" value="no" checked="">
                                            <label for="with-agent-no">No</label>
                                        </div>
                                    </div>
                                    <div class="with-agent-yes-content col-3">
                                        <label for="If Yes, Agent Info">If Yes, Agent Info</label>
                                        <input type="text" id="If Yes, Agent Info" name="" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                 <label for="If Yes, Agent Info">Agent Notes</label>
                                <textarea name="" id="" class="w-100" cols="" rows="3"></textarea>
                            </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo"> Questions </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                      <div class="container-flui text-left">
                       <div class="row">
                            <div class="col-3">
                                <label class="mt-2" for="">Prequalified?</label>
                                <div class="switch-field">
                                    <input type="radio" id="Prequalified-yes" name="Prequalified" value="yes">
                                    <label for="Prequalified-yes">Yes</label>
                                    <input type="radio" id="Prequalified-no" name="Prequalified" value="no">
                                    <label for="Prequalified-no">No</label>
                                </div>
                            </div>
                            <div class="col-3">
                                <label class="mt-2" for="">Timeframe to Buy/Sell</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option value="" selected="selected" class="gf_placeholder">Choose One</option>
                                    <option value="1-3 Months">1-3 Months</option>
                                    <option value="3-6 Months">3-6 Months</option>
                                    <option value="Within a Year">Within a Year</option>
                                    <option value="More than a Year">More than a Year</option>
                                    <option value="Just Looking Not Ready">Just Looking Not Ready</option>
                                    <option value="Actually - Looking to Sell">Actually - Looking to Sell</option>
                                </select>
                            </div>
                            <div class="col-3">
                                <label class="mt-2" for="">How Heard of the Open?</label>
                                <select  class="form-select" aria-label="Default select example">
                                    <option value="" selected="selected" class="gf_placeholder">Choose One</option>
                                    <option value="Directional Signs">Directional Signs</option>
                                    <option value="Facebook">Facebook</option>
                                    <option value="Twitter">Twitter</option>
                                    <option value="Instagram">Instagram</option>
                                    <option value="Zillow">Zillow</option>
                                    <option value="Realtor.com">Realtor.com</option>
                                    <option value="Other">Other</option>
                                  </select>
                            </div>
                            <div class="col-3">
                                <label class="mt-2" for="">If other</label>
                                <input type="text" id="" name="" placeholder="" required>
                            </div>
                            <div class="col-3">
                                <label class="mt-2" for="">Consent to Contact?</label>
                                <div class="switch-field">
                                    <input type="radio" id="consent-to-contact-yes" name="consent-to-contact" value="yes">
                                    <label for="consent-to-contact-yes">Yes</label>
                                    <input type="radio" id="consent-to-contact-no" name="consent-to-contact" value="no">
                                    <label for="consent-to-contact-no">No</label>
                                </div>
                            </div>
                            <div class="col-3">
                                <label class="mt-2" for="">Visitor Type</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option value="" class="gf_placeholder">Visitor Type</option>
                                    <option value="Visitor" selected="selected">Visitor</option>
                                    <option value="Broker">Agent or Broker</option>
                                </select>
                            </div>
                       </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree"> Home Address</button>
                  </h2>
                  <div id="flush-collapseThree" class="flush-collapseThree accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="form-container text-left">
                            <div class="d-flex flex-wrap align-items-end mb-3">
                                <div class="col-3">
                                    <label for="Home Address Street">Home Address Street</label>
                                    <input type="text" id="" name="" placeholder="">
                                </div>
                                <div class="col-3">
                                    <label for="City">City</label>
                                    <input type="text" id="" name="" placeholder="">
                                </div>
                                <div class="col-3">
                                    <label for="State">State</label>
                                    <input type="text" id="" name="State" placeholder="">
                                </div>
                                <div class="col-3">
                                    <label for="Zip">Zip</label>
                                    <input type="text" id="" name="" placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive"> Visitor Feedback </button>
                  </h2>
                  <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="container-flui text-left">
                         <div class="row">
                              <div class="col-4">
                                  <select class="form-select" aria-label="Default select example">
                                    <option value="" selected="selected" class="gf_placeholder">How's the Condition?</option>
                                    <option value="Great Condition">Great Condition</option>
                                    <option value="Not so Great Condition">Not so Great Condition</option>
                                    <option value="Needs Work">Needs Work</option>
                                </select>
                              </div>
                              <div class="col-4">
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="" selected="selected" class="gf_placeholder">How does this House Show?</option>
                                        <option value="Shows Well">Shows Well</option>
                                        <option value="Shows Really Well">Shows Really Well</option>
                                        <option value="Does not Show Well">Does not Show Well</option>
                                    </select>
                              </div>
                              <div class="col-4">
                                  <select class="form-select" aria-label="Default select example">
                                    <option value="" selected="selected" class="gf_placeholder">How's the Price?</option>
                                    <option value="Just Right">Just Right</option>
                                    <option value="A Little High">A Little High</option>
                                    <option value="Way too High">Way too High</option>
                                    <option value="Too Low">Too Low</option>
                                  </select>
                              </div>
                              <div class="col-12 mt-3">
                                <label for="Visitor Feedback">Visitor Feedback</label>
                               <textarea name="" id="" class="w-100" cols="" rows="3"></textarea>
                           </div>
                         </div>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="col-4 m-auto text-center">
                <button class="btn btn-primary px-5" type="submit" name=" go to properties.php"><h3 class="mb-0">SAVE VISITOR</h3></button>
              </div>
            </form>
          </div>
        </section>
@endsection
