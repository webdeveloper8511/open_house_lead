@extends('layouts.master')
@section('content')
        <div class="bg-black-50 welcome-email-text-default-settings">
            <section class="d-flex h-100vh p-4">
                <div class="container-fluid bg-white m-auto text-center shadow p-3 rounded">
                    <div class="text-start">
                        <h4><b>Marketing: Setup an Open House Drip Campaign</b></h4>
                        <h5>To use TEXT, the <b>TEXT Add-on</b> is required. If you’d like to add it, <a href="">Click
                                Here</a></h5>
                        <div class="row my-4 align-items-center bg-blue p-3">
                            <div class="col-3">
                                <img class="img-fluid w-100" src="{{url('assets/images/The-Open-House-Wizard-TEXT.jpg')}}" alt="">
                            </div>
                            <div class="col-9 ps-3">
                                <h5 class="mb-2 fw-bold">Here you can activate your own open house Email or TEXT drip campaign.
                                    Our campaign will send up to 7 Emails or TEXT Messages to your signed in Visitors.
                                </h5>
                                <h5 class="mb-2">You can just activate the Drip Campaign and use our pre-built drip email/texts or you can edit and change each individual drip’s message body and email subject.</h5>  
                                <h5 class="mb-2">To use our prebuilt drip campaigns, just click Enable ALL Drips.  Or you can choose to customize each drip and enable/disable each individually below.</h5>
                                <hr>
                                <h5 class="mb-2"><b>IMPORTANT</b>: Make sure to test the drips before using for an Open
                                    House.</h5>
                                <h6 class="mb-2 fw-bold">Customize or Enable / Disable Individual Drips Below (Optional)</h6>
                            </div>
                        </div>
                    </div>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="true"
                                    aria-controls="flush-collapseOne"> ENABLE or DISABLE ALL DRIPS at ONCE </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body welcome-email-text-settings">
                                    <div class="text-start">
                                        <h4 class="fw-bold">Enable ALL Drips</h4>
                                        <h5>This Email or Text will be Sent Instantly to Visitors After they Register.
                                        </h5>
                                        <h5>By clicking 'Email' or 'Text' all 7 drips Email or Text drips below will
                                            become active. This means that starting with your next Visitor Sign-In the
                                            Drips will be sent to your visitors. Make sure that you have tested all
                                            drips before activating.</h5>
                                        <h5 class="fw-bold">Warning:</h5>
                                        <h5>By clicking '<b>Disable</b>' all 7 drips below will be disabled for
                                            <b>NEW</b> sign-ins. This will not affect drip campaigns that are already
                                            being sent to previous signed-in visitors. To stop active drips being sent
                                            to previously signed-in visitors, use the 'Manage & Stop' item below.
                                        </h5>
                                        <h5>You can also activate drips individually as part the of the drip's settings.
                                        </h5>
                                    </div>
                                    <div class="col-12 border-dashed p-3 my-3 text-start">
                                        <form action="">
                                            <div class="row align-items-center">
                                                <div class="col-6 enable-or-disable-all-drips">
                                                    <label class="">Enable or Disable ALL Drips</label>
                                                    <div class="switch-field">
                                                        <input type="radio" id="enable-or-disable-all-drips-email"
                                                            name="enable-or-disable-all-drips" value="email">
                                                        <label for="enable-or-disable-all-drips-email">EMAIL</label>
                                                        <input type="radio" id="enable-or-disable-all-drips-text"
                                                            name="enable-or-disable-all-drips" value="text" checked="">
                                                        <label for="enable-or-disable-all-drips-text">TEXT</label>
                                                        <input type="radio" id="enable-or-disable-all-drips-disable"
                                                            name="enable-or-disable-all-drips" value="text">
                                                        <label for="enable-or-disable-all-drips-disable">DISABLE</label>
                                                    </div>
                                                </div>
                                                <div class="col-6 text-end">
                                                    <button class="btn btn-primary px-5" type="submit"
                                                        name=" go to property.php">
                                                        <h3 class="mb-0">SAVE</h3>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">TEST ALL DRIPS </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body text-start">
                                    <div class="container-fluid">
                                        <div class="text-start">
                                            <h4 class="fw-bold">'One-Click' - Test ALL Drips</h4>
                                            <h5 class="fw-bold">Warning:</h5>
                                            <h5>By clicking <b>Test</b>, All Email or Text Drips below will run and be
                                                sent to your email address or phone number.</h5>
                                        </div>
                                        <hr>
                                        <div class="my-3 border-dashed">
                                            <div class="d-flex flex-wrap align-items-end mb-2">
                                                <div class="col-12 mb-3 test-email-or-text-drips">
                                                    <label for="">Test Email or Text Drips?</label>
                                                    <div class="switch-field">
                                                        <input type="radio" id="test-email-or-text-drips-email"
                                                            name="test-email-or-text-drips" value="email">
                                                        <label for="test-email-or-text-drips-email">Email</label>
                                                        <input type="radio" id="test-email-or-text-drips-text"
                                                            name="test-email-or-text-drips" value="text" checked="">
                                                        <label for="test-email-or-text-drips-text">text</label>
                                                    </div>
                                                </div>
                                                <div class=" col-12">
                                                    <form action="" class="border-10 p-3 my-3">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <label for="First Name">First Name</label>
                                                                <input type="text" id="First Name" name="First Name"
                                                                    placeholder="First Name" required="">
                                                            </div>
                                                            <div class="col-6 test-email-or-text-drips-email-content">
                                                                <label for="">Email to Send Email Drips to</label>
                                                                <input type="text" id="" name="" placeholder=""
                                                                    required="">
                                                            </div>
                                                            <div class="col-6 test-email-or-text-drips-text-content">
                                                                <label for="">Phone number to send Text Drips to</label>
                                                                <input type="text" id="" name="" placeholder=""
                                                                    required="">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mx-auto text-center my-3">
                                                            <button class="btn btn-primary px-5" type="submit"
                                                                name=" go to property.php">
                                                                <h3 class="mb-0">TEST</h3>
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">THE DRIP SCHEDULE & INFORMATION</button>
                            </h2>
                            <div id="flush-collapseThree" class="flush-collapseThree accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body text-start">
                                    <div>
                                        <h5 class="mb-3 fw-bold">Drip Email or Text Campaign Schedule & Info</h5>
                                        <ul>
                                            <li>
                                                <b>DRIP #1</b> - 5 Hours after Visitor Sign-In
                                            </li>
                                            <li><b>DRIP #2 </b>- Next Day after Visitor Sign-In</li>
                                            <li><b>DRIP #3</b> - 4 Days after Visitor Sign-In</li>
                                            <li><b>DRIP #4</b> - 8 Days after Visitor Sign-In</li>
                                            <li><b>DRIP #5</b> - 12 Days after Visitor Sign-In</li>
                                            <li>
                                                <b>DRIP #6</b> - 22 Days after Visitor Sign-In
                                            </li>
                                            <li>
                                                <b>DRIP #7</b> - 29 Days after Visitor Sign-In
                                            </li>
                                        </ul>
                                        <h5>
                                            These drips will continue unless you cancel them using the Manage Drips
                                            item below.</h5>
                                        <h5>It is recommended to immediately <b>stop or cancel</b> the drip campaign
                                            once someone answers or replies to one of these texts or emails.</h5>
                                        <h5>If a Visitor asks to unsubscribe you can unsubscribe them by cancelling
                                            the drip campaign from the Manage Drips item below as well.</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFour" aria-expanded="false"
                                    aria-controls="flush-collapseFour">HELP & HOW-TO INFORMATION FOR DRIP
                                    CAMPAIGNS</button>
                            </h2>
                            <div id="flush-collapseFour" class="flush-collapseFour accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body text-start">
                                    <div class="mb-2">
                                        <h4 class="mb-2 fw-bold">Here are the steps to setup all of the drip emails:
                                        </h4>
                                        <h5>To use the (awesome) Pre-made Campaigns just click Enable ALL Drips,
                                            then Save.</h5>
                                        <h5>Or you can Customize the Drips to your liking:</h5>
                                        <ul>
                                            <li>Click Drip Email #1</li>
                                            <li>Click Email or Text to <b>‘Enable’</b></li>
                                            <li>Edit the Subject</li>
                                            <li>Edit the Message body</li>
                                            <li>Add an image (to be used on all drips)</li>
                                            <li>Click <b>‘Save’</b></li>
                                            <li>Click through the rest of the drips and enable, edit & save each one
                                            </li>
                                            <li>After finishing that, Click <b>‘Test All drips’</b></li>
                                            <li>Look at the individual emails or texts and make any edits for each
                                                if you want to change anything</li>
                                            <li>That’s It!</li>
                                        </ul>
                                    </div>
                                    <div class="mb-2">
                                        <h4 class="mb-2 fw-bold">To check the Drip Campaign Statuses:</h4>
                                        <ul>
                                            <li>Go to the Drip Status Tab Above</li>
                                            <li>There you can see the Name & Emails of recent Visitors</li>
                                            <li>The Status field shows 3 different statuses:
                                                <ul>
                                                    <li>Complete - Drip is completed</li>
                                                    <li>Pending - Drip is in process</li>
                                                    <li>Cancelled - Drip that you cancelled or customer
                                                        'un-subscribed'</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mb-2">
                                        <h4 class="mb-2 fw-bold">To stop Drips for specific Visitors:</h4>
                                        <ul>
                                            <li>Go to the Status Tab Above</li>
                                            <li>Click the ID of a person there</li>
                                            <li>Then on the dropdown menu choose ‘Cancel Drip Campaign’</li>
                                            <li>Then click APPLY</li>
                                        </ul>
                                    </div>
                                    <div class="mb-2">
                                        <h4 class="mb-2 fw-bold">Drips run automatically, but if you want to add
                                            someone to a drip manually:</h4>
                                        <ul>
                                            <li>Go to the Drip Status Tab Above</li>
                                            <li>Click the ID of a person there to add to a drip</li>
                                            <li>Then on the dropdown menu choose ‘Email 1’ to start them on a drip
                                                campaign at the first email <br>*Or choose text, for those with our
                                                Text add on</li>
                                            <li>Then click APPLY</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="col-12 p-3 border-10">
                            <form action="">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseFive" aria-expanded="false"
                                            aria-controls="flush-collapseFive">Drip Campaign Settings</button>
                                    </h2>
                                    <div id="flush-collapseFive" class="flush-collapseFive accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body text-start">
                                            <div class="row align-items-center my-3">
                                                <div class="col-4 text-center">
                                                    <h5 class="fw-bold">Current Image</h5>
                                                    <img class="img-fluid w-25 border-dashed" src="{{url('assets/images/RM-Logo-1.jpg')}}" alt="">
                                                    <div class="col-12 py-2">
                                                        <a class="btn btn-primary px-2" href="#">Remove</a>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="">
                                                        <label class="">Add/Change Image</label>
                                                        <input class="border-dashed p-3" type="file" name="Add/Change Image">
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <label for="">Enable Our EMAIL Signature?</label>
                                                    <div class="switch-field">
                                                        <input type="radio" id="enable-our-email-signature-yes" name="enable-our-email-signature" value="email">
                                                        <label for="enable-our-email-signature-yes">Yes</label>
                                                        <input type="radio" id="enable-our-email-signature-no" name="enable-our-email-signature" value="text" checked="">
                                                        <label for="enable-our-email-signature-no">No</label>
                                                    </div>
                                                    <p>We provide a default email signature with your contact details. If you would like to use your own in the email/text message below choose 'No' to disable ours.</p>
                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseSix" aria-expanded="false"
                                            aria-controls="flush-collapseSix">Individual Text/Email Setup</button>
                                    </h2>
                                    <div id="flush-collapseSix" class="flush-collapseSix accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body text-start">
                                           <div class="bb-dashed my-2">
                                                <h5 class="fw-bold">Enable up to (7) Drip Messages to be sent. Each message can be changed or you can use the default messages.</h5>
                                                <h5  class="fw-bold">To use TEXT, the TEXT Add-on is required.</h5>
                                           </div>
                                            <div class="my-2 py-2 enable-drip-1-as-email-or-text bb-dashed">
                                                <h5 class="fw-bold">Enable Drip #1 as EMAIL or TEXT?</h5>
                                                    <div class="my-3"> 
                                                        <div class="switch-field">
                                                            <input type="radio" id="enable-drip-1-as-email" name="enable-drip-1-as" value="email">
                                                            <label for="enable-drip-1-as-email">EMAIL</label>
                                                            <input type="radio" id="enable-drip-1-as-text" name="enable-drip-1-as" value="text">
                                                            <label for="enable-drip-1-as-text">TEXT</label>
                                                            <input type="radio" id="enable-drip-1-as-none" name="enable-drip-1-as" value="text" checked="">
                                                            <label for="enable-drip-1-as-none">None</label>
                                                        </div>
                                                        <p>Choose 'None' to Disable this Drip.</p>
                                                    </div>
                                                    <div class="enable-drip-1-as-email-content">
                                                        <div class="col-6 p-0">
                                                            <h5 class="text-start fw-bold">Drip Email #1 Subject</h5>
                                                            <input type="text" id="Drip Email #1 Subject" name="" placeholder="" value="Thank you and Great Meeting You Today!" required="">
                                                        </div>
                                                        <div class="my-3">
                                                            <h5 class="text-start fw-bold">Drip Email #1 Message Body</h5>
                                                            <h5 class="text-start">Enter the Email Body Message here. Make sure to include your contact information at the end if your are not using our default signature.</h5>
                                                            <textarea class="text-editor-code"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="enable-drip-1-as-text-content">
                                                        <div>
                                                            <h5 class="text-start fw-bold">Drip TEXT #1 - Message Body</h5>
                                                            <h5 class="text-start">Add your message for this Text drip.</h5>
                                                            <h5 class="text-start">We automatically add a 'Hi First_name' and end with your contact info. So here would be just the body of the Text. The shorter it is the more effective it can be.</h5>
                                                            <textarea rows="3" class="w-100 p-3">First I want to thank you again for your stopping by my open house today! I know how busy you are and I greatly appreciate you taking the time to meet with me! If you ever have any specific property questions, general questions or want to go see a property please feel free to text me or call me at anytime and we will set that up immediately.
                                                            </textarea>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="my-2 py-2 enable-drip-2-as-email-or-text bb-dashed">
                                                <h5 class="fw-bold">Enable Drip #2 as EMAIL or TEXT?</h5>
                                                <div class="my-3"> 
                                                    <div class="switch-field">
                                                        <input type="radio" id="enable-drip-2-as-email" name="enable-drip-2-as" value="email">
                                                        <label for="enable-drip-2-as-email">EMAIL</label>
                                                        <input type="radio" id="enable-drip-2-as-text" name="enable-drip-2-as" value="text">
                                                        <label for="enable-drip-2-as-text">TEXT</label>
                                                        <input type="radio" id="enable-drip-2-as-none" name="enable-drip-2-as" value="text" checked="">
                                                        <label for="enable-drip-2-as-none">None</label>
                                                    </div>
                                                    <p>Choose 'None' to Disable this Drip.</p>
                                                </div>
                                                <div class="enable-drip-2-as-email-content">
                                                    <div class="col-6 p-0">
                                                        <h5 class="text-start fw-bold">Drip Email #2 Subject</h5>
                                                        <input type="text" id="" name="" placeholder="" value="It was a pleasure meeting you at the Open House!" required="">
                                                    </div>
                                                    <div class="my-3">
                                                        <h5 class="text-start fw-bold">Drip Email #2 Message Body</h5>
                                                        <h5 class="text-start">Enter the Email Body Message here. Make sure to include your contact information at the end if your are not using our default signature.</h5>
                                                        <textarea class="text-editor-code"></textarea>
                                                    </div>
                                                </div>
                                                <div class="enable-drip-2-as-text-content">
                                                    <div>
                                                        <h5 class="text-start fw-bold">Drip TEXT #2 - Message Body</h5>
                                                        <textarea rows="3" class="w-100 p-3">If you have any real estate related questions or if you ever want to go look at houses together, feel free to let me know. Hope you enjoy the rest of the week!
                                                        </textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="my-2 py-2 enable-drip-3-as-email-or-text bb-dashed">
                                                <h5 class="fw-bold">Enable Drip #3 as EMAIL or TEXT?</h5>
                                                <div class="my-3"> 
                                                    <div class="switch-field">
                                                        <input type="radio" id="enable-drip-3-as-email" name="enable-drip-3-as" value="email">
                                                        <label for="enable-drip-3-as-email">EMAIL</label>
                                                        <input type="radio" id="enable-drip-3-as-text" name="enable-drip-3-as" value="text">
                                                        <label for="enable-drip-3-as-text">TEXT</label>
                                                        <input type="radio" id="enable-drip-3-as-none" name="enable-drip-3-as" value="text" checked="">
                                                        <label for="enable-drip-3-as-none">None</label>
                                                    </div>
                                                    <p>Choose 'None' to Disable this Drip.</p>
                                                </div>
                                                <div class="enable-drip-3-as-email-content">
                                                    <div class="col-6 p-0">
                                                        <h5 class="text-start fw-bold">Drip Email #3 Subject</h5>
                                                        <input type="text" id="" name="" placeholder="" value="Following up" required="">
                                                    </div>
                                                    <div class="my-3">
                                                        <h5 class="text-start fw-bold">Drip Email #3 Message Body</h5>
                                                        <h5 class="text-start">Enter the Email Body Message here. Make sure to include your contact information at the end if your are not using our default signature.</h5>
                                                        <textarea class="text-editor-code"></textarea>
                                                    </div>
                                                </div>
                                                <div class="enable-drip-3-as-text-content">
                                                    <div>
                                                        <h5 class="text-start fw-bold">Drip TEXT #3 - Message Body</h5>
                                                        <textarea rows="3" class="w-100 p-3">If you have any real estate related questions or if you ever want to go look at houses together, feel free to let me know. Hope you enjoy the rest of the week!
                                                        </textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="my-2 py-2 enable-drip-4-as-email-or-text bb-dashed">
                                                <h5 class="fw-bold">Enable Drip #4 as EMAIL or TEXT?</h5>
                                                <div class="my-3"> 
                                                    <div class="switch-field">
                                                        <input type="radio" id="enable-drip-4-as-email" name="enable-drip-4-as" value="email">
                                                        <label for="enable-drip-4-as-email">EMAIL</label>
                                                        <input type="radio" id="enable-drip-4-as-text" name="enable-drip-4-as" value="text">
                                                        <label for="enable-drip-4-as-text">TEXT</label>
                                                        <input type="radio" id="enable-drip-4-as-none" name="enable-drip-4-as" value="text" checked="">
                                                        <label for="enable-drip-4-as-none">None</label>
                                                    </div>
                                                    <p>Choose 'None' to Disable this Drip.</p>
                                                </div>
                                                <div class="enable-drip-4-as-email-content">
                                                    <div class="col-6 p-0">
                                                        <h5 class="text-start fw-bold">Drip Email #4 Subject</h5>
                                                        <input type="text" id="" name="" placeholder="" value="Following up" required="">
                                                    </div>
                                                    <div class="my-3">
                                                        <h5 class="text-start">Drip Email #4 Message Body</h5>
                                                        <h5 class="text-start">Enter the Email Body Message here. Make sure to include your contact information at the end if your are not using our default signature.</h5>
                                                        <textarea class="text-editor-code"></textarea>
                                                    </div>
                                                </div>
                                                <div class="enable-drip-4-as-text-content">
                                                    <div>
                                                        <h5 class="text-start fw-bold">Drip TEXT #4 - Message Body</h5>
                                                        <textarea rows="3" class="w-100 p-3">If you have any real estate related questions or if you ever want to go look at houses together, feel free to let me know. Hope you enjoy the rest of the week!
                                                        </textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="my-2 py-2 enable-drip-5-as-email-or-text bb-dashed">
                                                <h5 class="fw-bold">Enable Drip #5 as EMAIL or TEXT?</h5>
                                                <div class="my-3"> 
                                                    <div class="switch-field">
                                                        <input type="radio" id="enable-drip-5-as-email" name="enable-drip-5-as" value="email">
                                                        <label for="enable-drip-5-as-email">EMAIL</label>
                                                        <input type="radio" id="enable-drip-5-as-text" name="enable-drip-5-as" value="text">
                                                        <label for="enable-drip-5-as-text">TEXT</label>
                                                        <input type="radio" id="enable-drip-5-as-none" name="enable-drip-5-as" value="text" checked="">
                                                        <label for="enable-drip-5-as-none">None</label>
                                                    </div>
                                                    <p>Choose 'None' to Disable this Drip.</p>
                                                </div>
                                                <div class="enable-drip-5-as-email-content">
                                                    <div class="col-6 p-0">
                                                        <h5 class="text-start fw-bold">Drip Email #5 Subject</h5>
                                                        <input type="text" id="" name="" placeholder="" value="Following up" required="">
                                                    </div>
                                                    <div class="my-3">
                                                        <h5 class="text-start fw-bold">Drip Email #5 Message Body</h5>
                                                        <h5 class="text-start">Enter the Email Body Message here. Make sure to include your contact information at the end if your are not using our default signature.</h5>
                                                        <textarea class="text-editor-code"></textarea>
                                                    </div>
                                                </div>
                                                <div class="enable-drip-5-as-text-content">
                                                    <div>
                                                        <h5 class="text-start fw-bold">Drip TEXT #5 - Message Body</h5>
                                                        <textarea rows="3" class="w-100 p-3">If you have any real estate related questions or if you ever want to go look at houses together, feel free to let me know. Hope you enjoy the rest of the week!
                                                        </textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="my-2 py-2 enable-drip-6-as-email-or-text bb-dashed">
                                                <h5 class="fw-bold">Enable Drip #6 as EMAIL or TEXT?</h5>
                                                <div class="my-3"> 
                                                    <div class="switch-field">
                                                        <input type="radio" id="enable-drip-6-as-email" name="enable-drip-6-as" value="email">
                                                        <label for="enable-drip-6-as-email">EMAIL</label>
                                                        <input type="radio" id="enable-drip-6-as-text" name="enable-drip-6-as" value="text">
                                                        <label for="enable-drip-6-as-text">TEXT</label>
                                                        <input type="radio" id="enable-drip-6-as-none" name="enable-drip-6-as" value="text" checked="">
                                                        <label for="enable-drip-6-as-none">None</label>
                                                    </div>
                                                    <p>Choose 'None' to Disable this Drip.</p>
                                                </div>
                                                <div class="enable-drip-6-as-email-content">
                                                    <div class="col-6 p-0">
                                                        <h5 class="text-start fw-bold">Drip Email #6 Subject</h5>
                                                        <input type="text" id="" name="" placeholder="" value="Following up" required="">
                                                    </div>
                                                    <div class="my-3">
                                                        <h5 class="text-start fw-bold">Drip Email #6 Message Body</h5>
                                                        <h5 class="text-start">Enter the Email Body Message here. Make sure to include your contact information at the end if your are not using our default signature.</h5>
                                                        <textarea class="text-editor-code"></textarea>
                                                    </div>
                                                </div>
                                                <div class="enable-drip-6-as-text-content">
                                                    <div>
                                                        <h5 class="text-start fw-bold">Drip TEXT #6 - Message Body</h5>
                                                        <textarea rows="3" class="w-100 p-3">If you have any real estate related questions or if you ever want to go look at houses together, feel free to let me know. Hope you enjoy the rest of the week!
                                                        </textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="my-2 py-2 enable-drip-7-as-email-or-text">
                                                <h5 class="fw-bold">Enable Drip #7 as EMAIL or TEXT?</h5>
                                                <div class="my-3"> 
                                                    <div class="switch-field">
                                                        <input type="radio" id="enable-drip-7-as-email" name="enable-drip-7-as" value="email">
                                                        <label for="enable-drip-7-as-email">EMAIL</label>
                                                        <input type="radio" id="enable-drip-7-as-text" name="enable-drip-7-as" value="text">
                                                        <label for="enable-drip-7-as-text">TEXT</label>
                                                        <input type="radio" id="enable-drip-7-as-none" name="enable-drip-7-as" value="text" checked="">
                                                        <label for="enable-drip-7-as-none">None</label>
                                                    </div>
                                                    <p>Choose 'None' to Disable this Drip.</p>
                                                </div>
                                                <div class="enable-drip-7-as-email-content">
                                                    <div class="col-6 p-0">
                                                        <h5 class="text-start fw-bold">Drip Email #7 Subject</h5>
                                                        <input type="text" id="" name="" placeholder="" value="Following up" required="">
                                                    </div>
                                                    <div class="my-3">
                                                        <h5 class="text-start fw-bold">Drip Email #7 Message Body</h5>
                                                        <h5 class="text-start">Enter the Email Body Message here. Make sure to include your contact information at the end if your are not using our default signature.</h5>
                                                        <textarea class="text-editor-code"></textarea>
                                                    </div>
                                                </div>
                                                <div class="enable-drip-7-as-text-content">
                                                    <div>
                                                        <h5 class="text-start fw-bold">Drip TEXT #7 - Message Body</h5>
                                                        <textarea rows="3" class="w-100 p-3">If you have any real estate related questions or if you ever want to go look at houses together, feel free to let me know. Hope you enjoy the rest of the week!
                                                        </textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseSeven" aria-expanded="false"
                                            aria-controls="flush-collapseSeven">Unsubscribe or Stop Drips</button>
                                    </h2>
                                    <div id="flush-collapseSeven" class="flush-collapseSeven accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body text-start">
                                            <h5 class="mb-3">
                                                Unsubscribe Visitors from Drip Campaigns. Alternatively you can also 'Resubscribe' Visitors as well.
                                            </h5>
                                            <div class="row">
                                                <div class="col-4">
                                                    <select  class="form-select ny-select" aria-label="Default select example">
                                                        <option value="" selected="selected" class="gf_placeholder">CHOOSE A VISITOR</option>
                                                        <option value="Jfwoei@gjdj.com">Jfwoei@gjdj.com | Test Test</option>
                                                    </select>
                                                </div>
                                                <div class="col-8">
                                                    <button class="btn btn-danger px-5 mx-2" type="submit" name=" "><h4 class="mb-0">Unsubscribe</h4></button>
                                                    <button class="btn btn-primary px-5 mx-2" type="submit" name=" "><h4 class="mb-0">Resubscribe</h4></button>
                                                    <h6 class="m-2">Normally you probably want to unsubscribe someone here, but you can also add them back to get any remaining emails from your Drip Campaigns by using Resubscribe.</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 text-center m-auto my-2">
                                    <button class="btn btn-primary px-5 mx-2" type="submit" name=" "><h3 class="mb-0">SAVE</h3></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
@endsection
