@extends('layouts.master')
@section('content')
    <div class="bg-black-50 welcome-email-text-default-settings">
        <section class="d-flex h-100vh p-4">
          <div class="container-fluid bg-white m-auto text-center shadow p-3 rounded">
            <div class="text-start">
                <h4><b>Welcome Email / Text – Default Settings</b></h4>
                <div class="row my-4 align-items-center bg-blue p-3">
                    <div class="col-3">
                        <img class="img-fluid w-100" src="{{url('assets/images/Welcome-email.png')}}" alt="">
                    </div>
                    <div class="col-9 ps-3">
                        <h5 class="mb-2">These settings will become your default Welcome Email and/or Text settings.When adding or editing a new Property for an Open or Event, these settings will show on the Welcome Email / Text for that property.
                        </h5>
                        <h5 class="mb-2">You can then edit those settings there to allow a ‘Unique Welcome Email or Text’ for the property.</h5>
                        <hr>
                        <h5 class="fw-bold mb-2">Welcome Emails/Texts are Sent Instantly to Visitors After they Register.</h5>
                        <h5 class="">Make sure to click the SAVE button at the bottom of this section to save your changes. To Test the Welcome Email, Scroll to the Bottom of the Page to the Test App.</h5>
                    </div>
                </div>
              </div>
            <form action="" class="border-10 p-3 my-3">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne"> Welcome Email / Text Settings </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body welcome-email-text-settings">
                            <div class="row text-start justify-content-start">
                            <h5 class="fw-bold">Setup the default Welcome Email or Text.</h5>
                            <h5>This Email or Text will be Sent Instantly to Visitors After they Register.</h5>
                                <div class="col-12 px-3 row align-items-end my-3">
                                   <div class="col-4">
                                        <label class="mt-2" for="">Send a Welcome Email?</label>
                                        <div class="switch-field">
                                            <input type="radio" id="send-a-welcome-email-yes" name="send-a-welcome-email" value="yes" checked="">
                                            <label for="send-a-welcome-email-yes">Yes</label>
                                            <input type="radio" id="send-a-welcome-email-no" name="send-a-welcome-email" value="no">
                                            <label for="send-a-welcome-email-no">No</label>
                                        </div>
                                   </div>
                                   <div class="col-4">
                                        <label class="mt-2" for="">Enable Welcome Email Signature?</label>
                                        <label class="mt-2" for="">To disable our signature choose 'No' to use your own.</label>
                                        <div class="switch-field">
                                            <input type="radio" id="enable-welcome-email-signature-yes" name="enable-welcome-email-signature" value="yes" checked="">
                                            <label for="enable-welcome-email-signature-yes">Yes</label>
                                            <input type="radio" id="enable-welcome-email-signature-no" name="enable-welcome-email-signature" value="no">
                                            <label for="enable-welcome-email-signature-no">No</label>
                                        </div>
                                   </div>
                                   <div class="col-4">
                                        <label class="mt-2" for="">Enable Feedback Link ?</label>
                                        <label class="mt-2" for="">Visitors will see a link to leave feedback.</label>
                                        <div class="switch-field">
                                            <input type="radio" id="enable-feedback-link-yes" name="enable-feedback-link" value="yes" checked="">
                                            <label for="enable-feedback-link-yes">Yes</label>
                                            <input type="radio" id="enable-feedback-link-no" name="enable-feedback-link" value="no">
                                            <label for="enable-feedback-link-no">No</label>
                                        </div>
                                   </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="">
                                            <label class="mb-2" for="">
                                                Welcome Email Subject
                                            </label>
                                            <input type="text" id="" name="" placeholder="" value="Thanks for visiting here today" required="">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="">
                                            <label class="mb-2" for="">
                                                Email Headline (inside email)
                                            </label>
                                            <input type="text" id="" name="" placeholder="" value="Welcome to the Open House" required="">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-6 text-start justify-content-start pb-3 headline-color">
                                        <div class="">
                                          <label class="mt-2">Headline Color</label>
                                          <label class="mt-2">WATCH OUT! Make sure to choose a proper text color that works with the color chosen.</label>
                                          <select class="form-select my-select" aria-label="Default select example">
                                            <option value="Custom">Custom</option>
                                            <option value="Black">Black</option>
                                            <option value="Red">Red</option>
                                            <option value="White" selected="selected">White</option>
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
                                        <div class="custom-color px-2">
                                          <label class="mt-2" for="favcolor">Enter a Custom Color</label>
                                          <div class="d-flex align-items-center">
                                            <input class="me-2" type="color" id="" name="" value="">
                                            <span class="fw-bold"> pink Color</span>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col-6 text-start justify-content-start pb-3 headline-text-color">
                                        <div class="">
                                          <label class="mt-2">Headline Color</label>
                                          <label class="mt-2">WATCH OUT! Make sure to choose a proper text color that works with the color chosen.</label>
                                          <select class="form-select my-select" aria-label="Default select example">
                                            <option value="Custom">Custom</option>
                                            <option value="Black">Black</option>
                                            <option value="Red">Red</option>
                                            <option value="White" selected="selected">White</option>
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
                                        <div class="custom-color px-2">
                                          <label class="mt-2" for="favcolor">Enter a Custom Color</label>
                                          <div class="d-flex align-items-center">
                                            <input class="me-2" type="color" id="" name="" value="">
                                            <span class="fw-bold"> pink Color</span>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <h5 class="text-start">Welcome Email Message Body</h5>
                                    <h5 class="text-start">Thank you for visiting my Open House today. Please feel free to reach out to me at anytime if you have any questions about this property or if you have a minute to discuss your Real Estate plans. My contact information is below.</h5>
                                    <textarea class="text-editor-code"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">Welcome Email Image </button>
                        </h2>
                        <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body text-start">
                                <div class="container-fluid">
                                   <div class="row align-items-center my-3">
                                        <div class="col-6 text-center">
                                            <h5 class="fw-bold">Current Image</h5>
                                            <img class="img-fluid w-25 border-dashed" src="{{url('assets/images/RM-Logo-1.jpg')}}" alt="">
                                            <div class="col-12 py-2">
                                                <a class="btn btn-primary px-2" href="#">Remove</a>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="">
                                                <label class="">Add/Change Image</label>
                                                <input class="border-dashed p-3" type="file" name="Add/Change Image" class="field">
                                            </div>
                                        </div>
                                   </div>
                                </div>
                                <div class="row col-12 m-auto my-3 bg-blue align-items-end py-3 my-3">
                                    <h4 class="fw-bold mb-4"> Attachments</h4>
                                <div class="col-6 d-flex mb-3 border-bottom-dashed">
                                    <div class="col-5">
                                    <div class="timelinee-item">
                                        <img class="img-fluid" src="{{url('assets/dist/img/dummy-image-square.jpg')}}" alt="Image 1">
                                        <p>Add an Attachment #1</p>
                                    </div>
                                    </div>
                                    <div class="col-7">
                                    <div class="small-12 large-4 columns">
                                        <div class="row align-items-center text-start">
                                        <div class="w-100">
                                            <h4>Add/Replace Attachment #1 Image</h4>
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
                                        <img class="img-fluid" src="{{url('assets/dist/img/dummy-image-square.jpg')}}" alt="Image 1">
                                        <p>Add an Attachment #2</p>
                                    </div>
                                    </div>
                                    <div class="col-7">
                                    <div class="small-12 large-4 columns">
                                        <div class="row align-items-center text-start">
                                        <div class="w-100">
                                            <h4>Add/Replace Attachment #2 Image</h4>
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
                                        <img class="img-fluid" src="{{url('assets/dist/img/dummy-image-square.jpg')}}" alt="Image 1">
                                        <p>Add an Attachment #3</p>
                                    </div>
                                    </div>
                                    <div class="col-7">
                                    <div class="small-12 large-4 columns">
                                        <div class="row align-items-center text-start">
                                        <div class="w-100">
                                            <h4>Add/Replace Attachment #3 Image</h4>
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
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">Visitor TEXT Welcome</button>
                    </h2>
                    <div id="flush-collapseThree" class="flush-collapseThree accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body text-start">
                        <h5 class="mb-3 fw-bold">Setup the default visitor welcome text.</h5>
                        <h5 class="mb-3 fw-bold">*The Text Add-on has been discontinued for new orders. For existing Text Add-on clients you can change the Text Message settings here.</h5>
                            <div class="row">
                                <div class="col-6">
                                    <label class="mb-2">Send Visitors a Text Message?</label>
                                    <div class="switch-field justify-content-start">
                                        <input type="radio" id="send-visitors-a-text-message-yes" name="send-visitors-a-text-message" value="yes" checked />
                                        <label for="send-visitors-a-text-message-yes">Yes</label>
                                        <input type="radio" id="send-visitors-a-text-message-no" name="send-visitors-a-text-message" value="no" />
                                        <label for="send-visitors-a-text-message-no">No</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label class="mb-2">Ask for Consent to Contact? (TCPA Compliance)</label>
                                    <div class="switch-field justify-content-start">
                                        <input type="radio" id="ask-for-consent-to-contact-yes" name="ask-for-consent-to-contact" value="yes" checked />
                                        <label for="ask-for-consent-to-contact-yes">Yes</label>
                                        <input type="radio" id="ask-for-consent-to-contact-no" name="ask-for-consent-to-contact" value="no" />
                                        <label for="ask-for-consent-to-contact-no">No</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row my-3">
                                <h5 for="fw-bold">Adds an 'Ok to Contact? Field to the Signup page. <a href="https://www.google.com/search?q=what+is+tcpa+text+messaging+compliance" target="_blank" rel="noopener">Click for More Info on TCPA.</a></h5>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Text Message</label>
                                    <textarea class="form-control rounded-0" id="exampleFormControlTextarea1" placeholder="Add your message here." rows="3"></textarea>
                                  </div>
                            </div>
                            <div class="row align-items-center my-3">
                                <div class="col-6 text-center">
                                    <h5 class="fw-bold">Current Image</h5>
                                    <img class="{{url('assets/img-fluid w-25 border-dashed')}}" src="" alt="">
                                    Image Not Found Please Add Image
                                </div>
                                <div class="col-6">
                                    <div class="">
                                        <label class="">Add/Change Image</label>
                                        <input class="border-dashed p-3" type="file" name="Add/Change Image" class="field">
                                    </div>
                                </div>
                           </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-12 mx-auto text-center mb-3">
                     <button class="btn btn-primary px-5" type="submit" name=" go to property.php"><h3 class="mb-0">SAVE</h3></button>
                </div>
            </form>
            <hr>
            <div class="text-start">
                <div class="">
                    <h4 class="fw-bold">Test the Welcome Email</h4>
                    <h5>Enter the name and email address you want to use for the test, then Click TEST.</h5>
                    <h5>Choose <b>REGULAR</b> to test a regular welcome email or <b>COOP </b> to test a COOP Welcome Email. (Co-Branded)</h5>
                    <h5>For COOP, 1st Add & Activate a COOP Partner. (On the ADVANCED/COOP PARTNERS Tab)</h5>
                    <h5><b>IMPORTANT</b>: After activating a partner, reload this page before testing the COOP Welcome Email.</h5>
                </div>
                <form action="" class="border-10 p-3 my-3">
                    <div class="row">
                        <div class="col-4 send-a-regular-or-coop">
                            <label class="mb-2">Send a Regular or COOP (Co-Branded) Email?</label>
                            <div class="switch-field justify-content-start">
                                <input type="radio" id="send-a-regular" name="send-a" value="regular" checked="">
                                <label for="send-a-regular">REGULAR</label>
                                <input type="radio" id="send-a-coop" name="send-a" value="coop">
                                <label for="send-a-coop">COOP</label>
                            </div>
                            <p>For Coop, 1st Add & Activate a Coop partner on the Coop Partners page.</p>
                        </div>
                        <div class="col-4">
                            <label for="First Name">First Name</label>
                            <input type="text" id="First Name" name="First Name" placeholder="First Name" required="">
                        </div>
                        <div class="col-4">
                            <label for="">Email Address to Send to</label>
                            <input type="text" id="" name="" placeholder="" required="">
                        </div>
                    </div>  
                    <div class="col-12 mx-auto text-center my-3">
                        <button class="btn btn-primary px-5" type="submit" name=" go to property.php"><h3 class="mb-0">TEST</h3></button>
                   </div>                 
                </form>
            </div>
          </div>
        </section>
      </div>
@endsection
