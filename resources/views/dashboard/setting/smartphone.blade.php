@extends('layouts.master')
@section('content')
        <section class="add-edit-property-dt-section d-flex h-100vh p-4">
          <div class="container-fluid  m-auto text-center shadow p-3 rounded">
            <div class="row justify-content-between">
                <!-- <div class="col-5 text-left">
                  <a href="#" class="btn btn-primary text-light">
                    VIEW FLYER DESIGNS
                  </a>
                </div>
                <div class="col-4 text-end">
                    <a href="#" class="btn btn-primary text-light">
                        View Last Flyer
                      </a>
                </div> -->
                <h4><b>Smartphone Page Default Settings</b></h4>
                <p>These default settings can be overridden on each property.</p>
              </div>
            <form action="" class="border-10 p-3 my-3">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item smartphone-setting">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne"> Smartphone Settings </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="row text-start justify-content-start choose-a-flyer-design">
                            <h5 class="fw-bold">Smartphone registration page settings</h5>
                                <div class="col-4">
                                    <label class="mt-2">QRCODE & TEXT Smartphone Page Color</label>
                                    <select class="form-select ny-select" aria-label="Default select example">
                                        <option value="#555f61" selected="selected">Default</option>
                                        <option value="Custom">Custom</option>
                                        <option value="Black">Black</option>
                                        <option value="Red">Red</option>
                                        <option value="White">White</option>
                                        <option value="Silver">Silver</option>
                                        <option value="Gray">Gray</option>
                                        <option value="Maroon">Maroon</option>
                                        <option value="Purple">Purple</option>
                                        <option value="Fuchsia">Fuchsia</option>
                                        <option value="Green">Green</option>
                                        <option value="Lime">Lime</option>
                                        <option value="Olive">Olive</option>
                                        <option value="Yellow">Yellow</option>
                                        <option value="Navy">Navy</option>
                                        <option value="Blue">Blue</option>
                                        <option value="Teal">Teal</option>
                                        <option value="Aqua">Aqua</option>
                                        <option value="Aliceblue">Aliceblue</option>
                                        <option value="Antiquewhite">Antiquewhite</option>
                                        <option value="Aquamarine">Aquamarine</option>
                                        <option value="Azure">Azure</option>
                                        <option value="#84bacd">BasicBlue</option>
                                        <option value="Beige">Beige</option>
                                        <option value="Bisque">Bisque</option>
                                        <option value="Blanchedalmond">Blanchedalmond</option>
                                        <option value="Blueviolet">Blueviolet</option>
                                        <option value="Brown">Brown</option>
                                        <option value="Burlywood">Burlywood</option>
                                        <option value="Cadetblue">Cadetblue</option>
                                        <option value="Chartreuse">Chartreuse</option>
                                        <option value="Chocolate">Chocolate</option>
                                        <option value="Coral">Coral</option>
                                        <option value="Cornflowerblue">Cornflowerblue</option>
                                        <option value="Cornsilk">Cornsilk</option>
                                        <option value="Crimson">Crimson</option>
                                        <option value="Cyan">Cyan</option>
                                        <option value="Darkblue">Darkblue</option>
                                        <option value="Darkcyan">Darkcyan</option>
                                        <option value="#422d1a">DarkBrown</option>
                                        <option value="Darkgoldenrod">Darkgoldenrod</option>
                                        <option value="Darkgray">Darkgray</option>
                                        <option value="Darkgreen">Darkgreen</option>
                                        <option value="Darkgrey">Darkgrey</option>
                                        <option value="Darkkhaki">Darkkhaki</option>
                                        <option value="Darkmagenta">Darkmagenta</option>
                                        <option value="Darkolivegreen">Darkolivegreen</option>
                                        <option value="Darkorange">Darkorange</option>
                                        <option value="Darkorchid">Darkorchid</option>
                                        <option value="Darkred">Darkred</option>
                                        <option value="Darksalmon">Darksalmon</option>
                                        <option value="Darkseagreen">Darkseagreen</option>
                                        <option value="Darkslateblue">Darkslateblue</option>
                                        <option value="Darkslategray">Darkslategray</option>
                                        <option value="Darkslategrey">Darkslategrey</option>
                                        <option value="Darkturquoise">Darkturquoise</option>
                                        <option value="Darkviolet">Darkviolet</option>
                                        <option value="Deeppink">Deeppink</option>
                                        <option value="Deepskyblue">Deepskyblue</option>
                                        <option value="Dimgray">Dimgray</option>
                                        <option value="Dimgrey">Dimgrey</option>
                                        <option value="Dodgerblue">Dodgerblue</option>
                                        <option value="Firebrick">Firebrick</option>
                                        <option value="Floralwhite">Floralwhite</option>
                                        <option value="Forestgreen">Forestgreen</option>
                                        <option value="Gainsboro">Gainsboro</option>
                                        <option value="Ghostwhite">Ghostwhite</option>
                                        <option value="Gold">Gold</option>
                                        <option value="Goldenrod">Goldenrod</option>
                                        <option value="Greenyellow">Greenyellow</option>
                                        <option value="Grey">Grey</option>
                                        <option value="Honeydew">Honeydew</option>
                                        <option value="Hotpink">Hotpink</option>
                                        <option value="Indianred">Indianred</option>
                                        <option value="Indigo">Indigo</option>
                                        <option value="Ivory">Ivory</option>
                                        <option value="Khaki">Khaki</option>
                                        <option value="Lavender">Lavender</option>
                                        <option value="Lavenderblush">Lavenderblush</option>
                                        <option value="Lawngreen">Lawngreen</option>
                                        <option value="Lemonchiffon">Lemonchiffon</option>
                                        <option value="Lightblue">Lightblue</option>
                                        <option value="Lightcoral">Lightcoral</option>
                                        <option value="Lightcyan">Lightcyan</option>
                                        <option value="Lightgoldenrodyellow">Lightgoldenrodyellow</option>
                                        <option value="Lightgray">Lightgray</option>
                                        <option value="Lightgreen">Lightgreen</option>
                                        <option value="Lightgrey">Lightgrey</option>
                                        <option value="Lightpink">Lightpink</option>
                                        <option value="Lightsalmon">Lightsalmon</option>
                                        <option value="Lightseagreen">Lightseagreen</option>
                                        <option value="Lightskyblue">Lightskyblue</option>
                                        <option value="Lightslategray">Lightslategray</option>
                                        <option value="Lightslategrey">Lightslategrey</option>
                                        <option value="Lightsteelblue">Lightsteelblue</option>
                                        <option value="Lightyellow">Lightyellow</option>
                                        <option value="Limegreen">Limegreen</option>
                                        <option value="Linen">Linen</option>
                                        <option value="Magenta">Magenta</option>
                                        <option value="Mediumaquamarine">Mediumaquamarine</option>
                                        <option value="Mediumblue">Mediumblue</option>
                                        <option value="Mediumorchid">Mediumorchid</option>
                                        <option value="Mediumpurple">Mediumpurple</option>
                                        <option value="Mediumseagreen">Mediumseagreen</option>
                                        <option value="Mediumslateblue">Mediumslateblue</option>
                                        <option value="Mediumspringgreen">Mediumspringgreen</option>
                                        <option value="Mediumturquoise">Mediumturquoise</option>
                                        <option value="Mediumvioletred">Mediumvioletred</option>
                                        <option value="Midnightblue">Midnightblue</option>
                                        <option value="Mintcream">Mintcream</option>
                                        <option value="Mistyrose">Mistyrose</option>
                                        <option value="Moccasin">Moccasin</option>
                                        <option value="Navajowhite">Navajowhite</option>
                                        <option value="Oldlace">Oldlace</option>
                                        <option value="Olivedrab">Olivedrab</option>
                                        <option value="Orange">Orange</option>
                                        <option value="Orangered">Orangered</option>
                                        <option value="Orchid">Orchid</option>
                                        <option value="Palegoldenrod">Palegoldenrod</option>
                                        <option value="Palegreen">Palegreen</option>
                                        <option value="Paleturquoise">Paleturquoise</option>
                                        <option value="Palevioletred">Palevioletred</option>
                                        <option value="Papayawhip">Papayawhip</option>
                                        <option value="Peachpuff">Peachpuff</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Pink">Pink</option>
                                        <option value="Plum">Plum</option>
                                        <option value="Powderblue">Powderblue</option>
                                        <option value="Rosybrown">Rosybrown</option>
                                        <option value="Royalblue">Royalblue</option>
                                        <option value="Saddlebrown">Saddlebrown</option>
                                        <option value="Salmon">Salmon</option>
                                        <option value="Sandybrown">Sandybrown</option>
                                        <option value="Seagreen">Seagreen</option>
                                        <option value="Seashell">Seashell</option>
                                        <option value="Sienna">Sienna</option>
                                        <option value="Skyblue">Skyblue</option>
                                        <option value="Slateblue">Slateblue</option>
                                        <option value="Slategray">Slategray</option>
                                        <option value="Slategrey">Slategrey</option>
                                        <option value="Snow">Snow</option>
                                        <option value="Springgreen">Springgreen</option>
                                        <option value="Steelblue">Steelblue</option>
                                        <option value="Tan">Tan</option>
                                        <option value="Thistle">Thistle</option>
                                        <option value="Tomato">Tomato</option>
                                        <option value="Turquoise">Turquoise</option>
                                        <option value="Violet">Violet</option>
                                        <option value="Wheat">Wheat</option>
                                        <option value="Whitesmoke">Whitesmoke</option>
                                        <option value="Yellowgreen">Yellowgreen</option>
                                    </select>
                                </div>
                                <div class="col-3 custom-color px-2">
                                    <label class="mt-2" for="favcolor">Enter a Custom Color</label>
                                <div class="d-flex align-items-center">
                                        <input class="me-2" type="color" id="favcolor" name="favcolor" value="#FFC0CB">
                                        <span class="fw-bold"> pink Color</span>
                                </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <p class="mb-0">Choose a Background Color (Optional)</p>
                                    <p class="mb-0">You can also change Fonts & other Settings on the Fonts & Colors page or Tab.</p>
                                </div>
                                <div class="col-12 px-3">
                                    <label class="mt-2" for="">how Property on Registration page? <br>This will replace your headshot on the smartphone visitor registration page with the property image.</label>
                                    <div class="switch-field">
                                        <input type="radio" id="property-on-registration-yes" name="property-on-registration" value="yes" checked="">
                                        <label for="property-on-registration-yes">Yes</label>
                                        <input type="radio" id="property-on-registration-no" name="property-on-registration" value="no">
                                        <label for="property-on-registration-no">No</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="accordion-item Smartphone-page-setting">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">Custom 'Thank You' Page </button>
                    </h2>
                    <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body text-start">
                        <h5 class="mb-3 fw-bold">Customize the Visitor's Thank You page settings which shows on a Visitor's Smartphone after registration.</h5>
                        <div class="row">
                            <div class="col-12">
                            <h6 class="mb-2">Enable Custom 'Thank You' page settings?</h6>
                            <div class="switch-field justify-content-start">
                                <input type="radio" id="smartphone-thankyou-yes" name="switch-one" value="yes" checked />
                                <label for="smartphone-thankyou-yes">Enable</label>
                                <input type="radio" id="smartphone-thankyou-no" name="switch-one" value="no" />
                                <label for="smartphone-thankyou-no">Disable</label>
                            </div>
                            </div>
                        </div>
                        <div class="phone-thnk-content">
                            <div class="block-1">
                            <div class="row">
                                <h5 class="text-start">Add a short 'Thank You' Message After a Visitor Signs In</h5>
                                <textarea class="text-editor-code"></textarea>
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
                                        <label>1st Link/File - Short Description</label>
                                        <input type="text" id="file-desc_1" name="file-desc_1" placeholder="*Such as 'Floorplans'">
                                        </div>
                                        <div class="content-field field-2 youtube_link">
                                        <label>ADD OR PASTE 1ST LINK</label>
                                        <input type="text" id="file-link_1" name="file-link_1" placeholder="https://www.yourwebsite.com">
                                        </div>
                                        <div class="content-field field-3 upload_file">
                                        <label>LINK #1 - UPLOAD FILE</label>
                                        <input type="file" id="file-file_1" name="file-file_1">
                                        </div>
                                    </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="add-file-link_2">
                                    <div class="data-type">
                                        <div class="radio-btn">
                                        <input type="radio" id="file_2-None" class="none" name="file_2" value="file_2-None" checked>
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
                                        <label>2nd Link/File - Short Description</label>
                                        <input type="text" id="file-desc_2" name="file-desc_2" placeholder="*Such as 'Floorplans'">
                                        </div>
                                        <div class="content-field field-2 youtube_link">
                                        <label>ADD OR PASTE 2ND LINK</label>
                                        <input type="text" id="file-link_2" name="file-link_2" placeholder="https://www.yourwebsite.com">
                                        </div>
                                        <div class="content-field field-3 upload_file">
                                        <label>LINK #2 - UPLOAD FILE</label>
                                        <input type="file" id="file-file_2" name="file-file_2">
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
                                        <label>3rd Link/File - Short Description</label>
                                        <input type="text" id="file-desc_3" name="file-desc_3" placeholder="*Such as 'Floorplans'">
                                        </div>
                                        <div class="content-field field-2 youtube_link">
                                        <label>ADD OR PASTE 3RD LINK</label>
                                        <input type="text" id="file-link_3" name="file-link_3" placeholder="https://www.yourwebsite.com">
                                        </div>
                                        <div class="content-field field-3 upload_file">
                                        <label>LINK #3 - UPLOAD FILE</label>
                                        <input type="file" id="file-file_3" name="file-file_3">
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
                    <div class="accordion-item add-disclosure-settings">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">Add Disclosure Settings</button>
                    </h2>
                    <div id="flush-collapseThree" class="flush-collapseThree accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body text-start">
                        <h5 class="mb-3 fw-bold">Disclosures and Signed PDFs</h5>
                        <div class="row">
                            <div class="col-12">
                            <h6 class="mb-2">Enable / Disable Disclosures</h6>
                            <h6 class="mb-2">Choosing YES will require a Visitor to View a Disclosure(s) (Optional), and Agree by their Signature before registering.</h6>
                            <div class="switch-field justify-content-start">
                                <input type="radio" id="add-disclosure-yes" name="add-disclosure" value="yes" checked />
                                <label for="add-disclosure-yes">Yes</label>
                                <input type="radio" id="add-disclosure-no" name="add-disclosure" value="no" />
                                <label for="add-disclosure-no">No</label>
                            </div>
                            </div>
                        </div>
                        <div class="add-disclosure-yes-content">
                            <div class="blocks-1 mb-2">
                                <div class="row">
                                    <div class="bg-off-white p-3 mb-3 ">
                                        <h6><b> IMPORTANT If on a Team as a Team Member & not the Team Leader: (No need to Add a Disclosure here)</b></h6>
                                        <h6><b>Disclosures now automatically load from the Team Leader's Account. This is so they only need to be setup once on the Team Leader's account and then will flow to all Team Members.</b></h6>
                                        <h6>If you require a different disclosure than the one on the Team Leader's account, please Contact Support.</h6>
                                    </div>
                                    <div class="bg-off-white p-3 mb-3 ">
                                        <h6>This will add a disclosure that Visitors will see on their Smartphones before they register.</h6>
                                        <h6>The Visitor can agree and register or not agree and then cannot register.</h6>
                                        <h6><b>You can also generate a signed PDF with the Visitor's name and signature by using our 'Signed PDFs' Add-on. See the Pricing page for more information.</b></h6>
                                    </div>
                                    <div class="bg-off-white p-3 mb-3 ">
                                        <h5 class="mb-0">If you would like to enable & use Visitor Signed PDFs, <a href="#">Click Here.</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="blocks-1">
                                <h6><b>Copy you on Signed PDFs?</b></h6>
                                <h6>If using the Signed PDF Add-on, copy you on Visitor signed PDFs.</h6>
                                <div class="switch-field justify-content-start">
                                    <input type="radio" id="copy-you-on-signed-pdfs-yes" name="copy-you-on-signed-pdfs" value="yes" checked />
                                    <label for="copy-you-on-signed-pdfs-yes">Yes</label>
                                    <input type="radio" id="copy-you-on-signed-pdfs-no" name="copy-you-on-signed-pdfs" value="no" />
                                    <label for="copy-you-on-signed-pdfs-no">No</label>
                                </div>
                                <div class="row mb-3">
                                    <h6> Add a Disclosure *This works only with the Smartphone Sign-In Page</h6>
                                    <textarea class="text-editor-code"></textarea>
                                </div>
                                <div class="row add-disclosure-settings-upload px-3">
                                    <div class="col-4 p-3 border-right">
                                        <div class="add-disclosure-settings-upload-field">
                                            <label class="">Add a PDF #1</label>
                                            <input type="file" name="Add a PDF #1" class="field">
                                            <p>Add a Downloadable Disclosure PDF that can be reviewed by a Visitor.</p>
                                        </div>
                                        <div class="">
                                            <label class="mb-2" for="">
                                            Short Name or Description for PDF #1
                                            </label>
                                            <input type="text" id="" name="" placeholder="" value="" required="">
                                            <p>To Remove this PDF Disclosure, delete this name & click Save below.</p>
                                        </div>
                                    </div>
                                    <div class="col-4 p-3 border-right">
                                    <div class="add-disclosure-settings-upload-field">
                                            <label class="">Add a PDF #2</label>
                                            <input type="file" name="Add a PDF #2" class="field">
                                            <p>Add a Downloadable Disclosure PDF that can be reviewed by a Visitor.</p>
                                        </div>
                                        <div class="">
                                            <label class="mb-2" for="">
                                            Short Name or Description for PDF #2
                                            </label>
                                            <input type="text" id="" name="" placeholder="" value="" required="">
                                            <p>To Remove this PDF Disclosure, delete this name & click Save below.</p>
                                        </div>
                                    </div>
                                    <div class="col-4 p-3">
                                        <div class="add-disclosure-settings-upload-field">
                                            <label class="">Add a PDF #3</label>
                                            <input type="file" name="Add a PDF #3" class="field">
                                            <p>Add a Downloadable Disclosure PDF that can be reviewed by a Visitor.</p>
                                        </div>
                                        <div class="">
                                            <label class="mb-2" for="">
                                            Short Name or Description for PDF #3
                                            </label>
                                            <input type="text" id="" name="" placeholder="" value="" required="">
                                            <p>To Remove this PDF Disclosure, delete this name & click Save below.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        </div>
                    </div>
                    </div>
                    </div>
                    <div class="col-4 mx-auto text-center mb-3">
                    <button class="btn btn-primary px-5" type="submit" name=" go to property.php"><h3 class="mb-0">SAVE</h3></button>
                </div>
            </form>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item remove-disclosures">
                    <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix1" aria-expanded="false" aria-controls="flush-collapseSix1">Remove Disclosures </button>
                    </h2>
                    <div id="flush-collapseSix1" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body text-start">
                        <h5 class="mb-3 fw-bold">This will delete all of your saved disclosures.</h5>
                        <div class="row">
                        <div class="col-12">
                            <h6 class="mb-2">Delete ALL Disclosures?</h6>
                            <div class="switch-field justify-content-start">
                            <input type="radio" id="remove-disclosures-yes" name="switch-one" value="yes" checked />
                            <label for="remove-disclosures-yes">Yes</label>
                            <input type="radio" id="remove-disclosures-no" name="switch-one" value="no" />
                            <label for="remove-disclosures-no">No</label>
                            </div>
                        </div>
                        </div>
                        <div class="remove-disclosures-yes-content">
                            <div class="col-4 mx-auto text-center"><button class="btn btn-primary px-5" type="submit" name=" go to property.php"><h3 class="mb-0">REMOVE DISCLOSURES</h3></button></div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
          </div>
        </section>
@endsection