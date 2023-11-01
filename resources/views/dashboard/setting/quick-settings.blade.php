@extends('layouts.master')
@section('content')
    <section class="quick-settings-section d-flex h-100vh p-4 bg-black-50">
      <div class="bg-white container-fluid m-auto text-center shadow p-4 rounded">
        <div class="">
           <div class="mb-3">
           <h1 class="fw-bold">Quick Settings</h1>
            <h3>Enable or Disable Settings Instantly</h3>
           </div>
           <!-- <div class="row bg-blue p-2 mb-3 mx-1">
                <h5 class="mb-0">Show or Hide<br>These Visitor Questions</h5>
           </div> -->
            <div class="row flex-wrap justify-content-center mb-3">
                <div class="col-4 p-2">
                    <div class="quick-box px-2 py-4 rounded">
                        <h5>Working with an Agent?</h5>
                        <div class="switch-field justify-content-center mt-3">
                            <input type="radio" id="working-with-an-agent-yes" name="switch-one" value="yes" checked="">
                            <label for="working-with-an-agent-yes"><i class="fas fa-check"></i></label>
                            <input type="radio" id="working-with-an-agent-no" name="switch-one" value="no">
                            <label for="working-with-an-agent-no"><i class="fas fa-times"></i></label>
                        </div>
                    </div>
                </div>
                <div class="col-4 p-2">
                    <div class="quick-box px-2 py-4 rounded">
                        <h5 class="">Prequalified by a Lender?</h5>
                        <div class="switch-field justify-content-center mt-3">
                            <input type="radio" id="prequalified-by-a-lender-yes" name="switch-two" value="yes" checked="">
                            <label for="prequalified-by-a-lender-yes"><i class="fas fa-check"></i></label>
                            <input type="radio" id="prequalified-by-a-lender-no" name="switch-two" value="no">
                            <label for="prequalified-by-a-lender-no"><i class="fas fa-times"></i></label>
                        </div>
                    </div>
                </div>
                <div class="col-4 p-2">
                    <div class="quick-box px-2 py-4 rounded">
                        <h5>Home Address Fields?</h5>
                        <div class="switch-field justify-content-center mt-3">
                            <input type="radio" id="home-address-fields-yes" name="switch-three" value="yes" checked="">
                            <label for="home-address-fields-yes"><i class="fas fa-check"></i></label>
                            <input type="radio" id="home-address-fields-no" name="switch-three" value="no">
                            <label for="home-address-fields-no"><i class="fas fa-times"></i></label>
                        </div>
                    </div>
                </div>
                <div class="col-4 p-2">
                    <div class="quick-box px-2 py-4 rounded">
                        <h5>Require Phone?</h5>
                        <div class="switch-field justify-content-center mt-3">
                            <input type="radio" id="require-email-address-yes" name="switch-four" value="yes" checked="">
                            <label for="require-email-address-yes"><i class="fas fa-check"></i></label>
                            <input type="radio" id="require-email-address-no" name="switch-four" value="no">
                            <label for="require-email-address-no"><i class="fas fa-times"></i></label>
                        </div>
                    </div>
                </div>
                <div class="col-4 p-2">
                    <div class="quick-box px-2 py-4 rounded">
                        <h5>Require Phone?</h5>
                        <div class="switch-field justify-content-center mt-3">
                            <input type="radio" id="require-phone-yes" name="switch-five" value="yes" checked="">
                            <label for="require-phone-yes"><i class="fas fa-check"></i></label>
                            <input type="radio" id="require-phone-no" name="switch-five" value="no">
                            <label for="require-phone-no"><i class="fas fa-times"></i></label>
                        </div>
                    </div>
                </div>
                <div class="col-4 p-2">
                    <div class="quick-box px-2 py-4 rounded">
                        <h5>Timeframe?</h5>
                        <div class="switch-field justify-content-center mt-3">
                            <input type="radio" id="timeframe-yes" name="switch-six" value="yes" checked="">
                            <label for="timeframe-yes"><i class="fas fa-check"></i></label>
                            <input type="radio" id="timeframe-no" name="switch-six" value="no">
                            <label for="timeframe-no"><i class="fas fa-times"></i></label>
                        </div>
                    </div>
                </div>
                <div class="col-4 p-2">
                    <div class="quick-box px-2 py-4 rounded">
                        <h5>Enable Feedback?</h5>
                        <div class="switch-field justify-content-center mt-3">
                            <input type="radio" id="enable-feedback-yes" name="switch-seven" value="yes" checked="">
                            <label for="enable-feedback-yes"><i class="fas fa-check"></i></label>
                            <input type="radio" id="enable-feedback-no" name="switch-seven" value="no">
                            <label for="enable-feedback-no"><i class="fas fa-times"></i></label>
                        </div>
                    </div>
                </div>
                <div class="col-4 p-2">
                    <div class="quick-box px-2 py-4 rounded">
                        <h5>Email Visitor Details to You?</h5>
                        <div class="switch-field justify-content-center mt-3">
                            <input type="radio" id="email-visitor-details-to-you-yes" name="switch-eight" value="yes" checked="">
                            <label for="email-visitor-details-to-you-yes"><i class="fas fa-check"></i></label>
                            <input type="radio" id="email-visitor-details-to-you-no" name="switch-eight" value="no">
                            <label for="email-visitor-details-to-you-no"><i class="fas fa-times"></i></label>
                        </div>
                    </div>
                </div>
                <div class="col-4 p-2">
                    <div class="quick-box px-2 py-4 rounded">
                        <h5>How Heard of Open?</h5>
                        <div class="switch-field justify-content-center mt-3">
                            <input type="radio" id="how-heard-of-open-yes" name="switch-nine" value="yes" checked="">
                            <label for="how-heard-of-open-yes"><i class="fas fa-check"></i></label>
                            <input type="radio" id="how-heard-of-open-no" name="switch-nine" value="no">
                            <label for="how-heard-of-open-no"><i class="fas fa-times"></i></label>
                        </div>
                    </div>
                </div>
                <div class="col-4 p-2">
                    <div class="quick-box px-2 py-4 rounded">
                        <h5>Consent to Contact?</h5>
                        <div class="switch-field justify-content-center mt-3">
                            <input type="radio" id="consent-to-contact-yes" name="switch-ten" value="yes" checked="">
                            <label for="consent-to-contact-yes"><i class="fas fa-check"></i></label>
                            <input type="radio" id="consent-to-contact-no" name="switch-ten" value="no">
                            <label for="consent-to-contact-no"><i class="fas fa-times"></i></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row bg-blue p-2 mb-3 mx-1">
                <h5 class="mb-0">Other Quick Settings</h5>
           </div>
            <div class="row flex-wrap justify-content-center">
                <div class="col-4 p-2">
                    <div class="quick-box px-2 py-4 rounded">
                        <h5>Email Validation?</h5>
                        <div class="switch-field justify-content-center mt-3">
                            <input type="radio" id="email-validation-yes" name="email-validation" value="yes" checked="">
                            <label for="email-validation-yes"><i class="fas fa-check"></i></label>
                            <input type="radio" id="email-validation-no" name="email-validation" value="no">
                            <label for="email-validation-no"><i class="fas fa-times"></i></label>
                        </div>
                    </div>
                </div>
                <div class="col-4 p-2">
                    <div class="quick-box px-2 py-4 rounded">
                        <h5 class="">Team Leader can View Leads?</h5>
                        <div class="switch-field justify-content-center mt-3">
                            <input type="radio" id="team-leader-can-view-leads-yes" name="Team Leader can View Leads?" value="yes" checked="">
                            <label for="team-leader-can-view-leads-yes"><i class="fas fa-check"></i></label>
                            <input type="radio" id="team-leader-can-view-leads-no" name="Team Leader can View Leads?" value="no">
                            <label for="team-leader-can-view-leads-no"><i class="fas fa-times"></i></label>
                        </div>
                    </div>
                </div>
                <div class="col-4 p-2">
                    <div class="quick-box px-2 py-4 rounded">
                        <h5>Use Team CRM Connection?</h5>
                        <div class="switch-field justify-content-center mt-3">
                            <input type="radio" id="use-team-crm-connection-yes" name="Use Team CRM Connection?" value="yes" checked="">
                            <label for="use-team-crm-connection-yes"><i class="fas fa-check"></i></label>
                            <input type="radio" id="use-team-crm-connection-no" name="Use Team CRM Connection?" value="no">
                            <label for="use-team-crm-connection-no"><i class="fas fa-times"></i></label>
                        </div>
                    </div>
                </div>
                <div class="col-4 p-2 additional-email">
                    <div class="quick-box px-2 py-4 rounded">
                        <h5>Copy Leads to Additional Email(s)</h5>
                        <div class="switch-field justify-content-center mt-3">
                            <input type="radio" id="copy-leads-to-additional-email-yes" name="Copy Leads to Additional Email(s)" value="yes" checked="" onclick="document.getElementById('copy-leads-to-additional-email').style.display='block'">
                            <label for="copy-leads-to-additional-email-yes"><i class="fas fa-check"></i></label>
                            <input type="radio" id="copy-leads-to-additional-email-no" name="Copy Leads to Additional Email(s)" value="no" onclick="document.getElementById('copy-leads-to-additional-email').style.display='block'">
                            <label for="copy-leads-to-additional-email-no"><i class="fas fa-times"></i></label>
                        </div>
                    </div>
                    <!-- popup  -->
                    <div id="copy-leads-to-additional-email" class="modal">
                        <form class="modal-content" action="/action_page.php">
                            <span onclick="document.getElementById('copy-leads-to-additional-email').style.display='none'" class="close" title="Close Modal">×</span>
                            <div class="container py-4 px-3 text-center">
                                <h3><b>Copy Leads to Additional Email(s)</b></h3>
                                <h6>These email addresses will be copied on visitor sign-ins.</h6>
                                <div>
                                    <h4>Add a 2nd or More Email Address(s)?</h4>
                                    <div class="switch-field justify-content-center my-3 ">
                                        <input type="radio" id="add-a-2nd-or-more-email-address-yes" name="Add a 2nd or More Email Address(s)" value="yes" checked="">
                                        <label for="add-a-2nd-or-more-email-address-yes">Yes</label>
                                        <input type="radio" id="add-a-2nd-or-more-email-address-no" name="Add a 2nd or More Email Address(s)" value="no">
                                        <label for="add-a-2nd-or-more-email-address-no">No</label>
                                    </div>
                                    <div class="email-address-content">
                                        <h6 class="mb-3">For 2+ emails, use a comma & a space between them.</h6>
                                            <div class="col-10 mx-auto mb-3"><input type="text" id="" name="" placeholder="rmoreno@smartlivingaz.com" value="rmoreno@smartlivingaz.com" required=""></div>
                                    </div>
                                        <button class="btn btn-primary px-5" type="submit" name=" go to properties.php"><h3 class="mb-0">SUBMIT</h3></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-4 p-2">
                    <div class="quick-box px-2 py-4 rounded">
                        <h5>Add or Change Welcome Message</h5>
                        <div class="switch-field justify-content-center mt-3">
                            <input type="radio" id="add-or-change-welcome-message-yes" name="Add or Change Welcome Message" value="yes" checked=""  onclick="document.getElementById('add-or-change-welcome-message').style.display='block'">
                            <label for="add-or-change-welcome-message-yes"><i class="fas fa-check"></i></label>
                            <input type="radio" id="add-or-change-welcome-message-no" name="Add or Change Welcome Message" value="no" onclick="document.getElementById('add-or-change-welcome-message').style.display='block'">
                            <label for="add-or-change-welcome-message-no"><i class="fas fa-times"></i></label>
                        </div>
                    </div>
                     <!-- popup  -->
                     <div id="add-or-change-welcome-message" class="modal">
                        <form class="modal-content" action="/action_page.php">
                            <span onclick="document.getElementById('add-or-change-welcome-message').style.display='none'" class="close" title="Close Modal">×</span>
                            <div class="container py-4 px-4 text-center">
                                <h5 class="mb-3">This message appears at the top of the Smartphone Visitor <br>Registration page and on Classic Sign In pages.</h5>
                                <div>
                                    <div class="email-address-content">
                                            <div class="col-10 mx-auto mb-3"><input type="text" id="" name="" placeholder="Welcome to the Open House! Please Sign In..." value="Welcome to the Open House! Please Sign In..." required=""></div>
                                    </div>
                                        <button class="btn btn-primary px-5" type="submit" name=" go to properties.php"><h3 class="mb-0">SUBMIT</h3></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-4 p-2 add-custom-questions">
                    <div class="quick-box px-2 py-4 rounded">
                        <h5>Add Custom Questions</h5>
                        <div class="switch-field justify-content-center mt-3">
                            <input type="radio" id="add-custom-questions-yes" name="Add Custom Questions" value="yes" checked="" onclick="document.getElementById('add-custom-questions').style.display='block'">
                            <label for="add-custom-questions-yes"><i class="fas fa-check"></i></label>
                            <input type="radio" id="add-custom-questions-no" name="Add Custom Questions" value="no" onclick="document.getElementById('add-custom-questions').style.display='block'">
                            <label for="add-custom-questions-no"><i class="fas fa-times"></i></label>
                        </div>
                    </div>
                    <!-- popup  -->
                    <div id="add-custom-questions" class="modal">
                        <form class="modal-content p-3" action="/action_page.php">
                            <span onclick="document.getElementById('add-custom-questions').style.display='none'" class="close" title="Close Modal">×</span>
                            <div class="container py-2 px-4 text-center">
                                <h5 class="mb-3"><b>Add a Question by Type?</b></h5>
                                <div class="d-flex justify-content-center my-3 custom-questions">
                                    <div class="form-check d-flex ms-3">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="custom-questions-text">
                                        <label class="form-check-label" for="custom-questions-text">Text</label>
                                    </div>
                                    <div class="form-check d-flex ms-3">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="custom-questions-radio-yn">
                                        <label class="form-check-label" for="custom-questions-radio-yn">Radio YN</label>
                                    </div>
                                    <div class="form-check d-flex ms-3">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="custom-questions-none" checked>
                                        <label class="form-check-label" for="custom-questions-none">None</label>
                                    </div>
                                </div>
                                <div class="custom-questions-text-content">
                                    <h6><b>Question #1</b></h6>
                                    <input type="text" id="" name="" placeholder="Add Text Type Question #1 Here" value="" required="">
                                </div>
                                <div class="custom-questions-radio-yn-content">
                                    <h6><b>YN Question #1</b></h6>
                                    <input type="text" id="" name="" placeholder="Add Yes/No Question #1 Here" value="" required="">
                                </div>
                            </div>
                            <div class="container py-2 px-4 text-center">
                                <h5 class="mb-3"><b>Add a 2nd Question by Type?</b></h5>
                                <div class="d-flex justify-content-center my-3 custom-questions-2">
                                    <div class="form-check d-flex ms-3">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault1" id="custom-questions-2-text">
                                        <label class="form-check-label" for="custom-questions-2-text">Text</label>
                                    </div>
                                    <div class="form-check d-flex ms-3">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault1" id="custom-questions-2-radio-yn">
                                        <label class="form-check-label" for="custom-questions-2-radio-yn">Radio YN</label>
                                    </div>
                                    <div class="form-check d-flex ms-3">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault1" id="custom-questions-2-none" checked>
                                        <label class="form-check-label" for="custom-questions-2-none">None</label>
                                    </div>
                                </div>
                                <div class="custom-questions-2-text-content">
                                    <h6><b>Question #2</b></h6>
                                    <input type="text" id="" name="" placeholder="Add Text Type Question #2 Here" value="" required="">
                                </div>
                                <div class="custom-questions-2-radio-yn-content">
                                    <h6><b>YN Question #2</b></h6>
                                    <input type="text" id="" name="" placeholder="Add Yes/No Question #2 Here" value="" required="">
                                </div>
                            </div>
                            <div class="container py-2 px-4 text-center" id="email-to-send-leads-to">
                                <h5 class="mb-3"><b>2nd Email to Send Leads to?</b></h5>
                                <div class="d-flex justify-content-center my-3 email-to-send-leads-to">
                                    <div class="form-check d-flex ms-3">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault2" id="email-to-send-leads-to-yes" checked>
                                        <label class="form-check-label" for="email-to-send-leads-to-yes">Yes</label>
                                    </div>
                                    <div class="form-check d-flex ms-3">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault2" id="email-to-send-leads-to-no">
                                        <label class="form-check-label" for="email-to-send-leads-to-no">No</label>
                                    </div>
                                </div>
                                <div class="email-to-send-leads-to-yes-content">
                                    <input type="text" id="" name="" placeholder="rmoreno@smartlivingaz.com" value="" required="">
                                </div>
                            </div>
                            <div class="col-4 mx-auto my-2"><button class="btn btn-primary px-5" type="submit" name=" go to"><h3 class="mb-0">SUBMIT</h3></button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>
</div>
@endsection
