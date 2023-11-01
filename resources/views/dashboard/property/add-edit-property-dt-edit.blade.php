@extends('layouts.master')
@section('content')
    <section class="add-edit-property-dt-section d-flex h-100vh p-4 bg-black-50">
        <div class="container-fluid  m-auto text-center shadow p-3 rounded">
        <h1 class="text-center mb-3">Add / Edit Property or Event </h1>
        <form action="properties.php">
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
                        <input type="text" id="Street" name="Street" placeholder="Enter Location:" value="Easton Town Ctr" required>
                        </div>
                        <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" id="city" name="city" placeholder="City:" value="Columbus" required>
                        </div>
                        <div class="form-group">
                        <label for="state">State</label>
                        <input type="text" id="state" name="state" placeholder="State:" value="Ohio" required>
                        </div>
                        <div class="form-group">
                        <label for="zip">Zip Code</label>
                        <input type="text" id="zip" name="zip" placeholder="Zip Code:" value="43219" required>
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
                        <img class="img-fluid" src="../dist/img/flyers.jpg" alt="">
                    </div>
                    <div class="col-7 px-4">
                        <div class="d-flex flex-wrap justify-content-center align-items-center second-form">
                        <div class="row justify-content-center">
                            <div class="form-group col-6">
                            <label class="text-left" for="OPEN_HOUSE">Heading at Top of Flyer, like "OPEN HOUSE"</label>
                            <input type="text" id="OPEN_HOUSE" name="OPEN_HOUSE" placeholder="Such as 'Open House on 12/31/2020 from 1pm to 4pm, Refreshments will be served'" value="OPEN HOUSE" required>
                            </div>
                            <div class="form-group col-6">
                            <label class="text-left" for="anything">Open Date/Time or anything</label>
                            <input type="text" id="anything" name="anything" placeholder="Such as Open House on 12/31/2020 from 1pm to 4pm." value="3" required>
                            </div>
                            <div class="form-group col-6">
                            <label class="text-left" for="Before-Price">Before Price such as Offered at:, or Anything</label>
                            <input type="text" id="state" name="Before-Price" placeholder="Before Price such as Offered at:" value="12222" required>
                            </div>
                            <div class="form-group col-6">
                            <label class="text-left" for="Price">Price (Use only a $ and a number)</label>
                            <input type="text" id="Price" name="Price" placeholder="Price (such as $900,000)" value="4133133" required>
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
                    <h5 class="mb-3">There are (3) Images Needed for a Flyer and are the 1st (3) images shown on a Slideshow for a Mini Property Site. The Flyers also use your Headshot & Logo which can be added under 'Settings/Your Details'.section</h5>
                    <div>
                    <div class="row col-7 m-auto my-3 bg-blue align-items-center">
                        <div class="timelinee col-4 py-3">
                        <div class="timelinee-item">
                            <img class="img-fluid" src="../dist/img/img1.jpg" alt="Image 1">
                            <p>Large 1</p>
                        </div>
                        <div class="timelinee-item">
                            <img class="img-fluid" src="../dist/img/img2.jpg" alt="Image 2">
                            <p>Image 2</p>
                        </div>
                        <div class="timelinee-item">
                            <img class="img-fluid" src="../dist/img/img3.jpg" alt="Image 3">
                            <p>Image 3</p>
                        </div>
                        <div class="timelinee-item">
                            <img class="img-fluid" src="../dist/img/img4.png" alt="Image 4">
                            <p>Logo</p>
                        </div>
                        <div class="timelinee-item">
                            <img class="img-fluid" src="../dist/img/img5.jpg" alt="Image 5">
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
                                    <input id="inpu" type="file" class="file-input">Choose File </button>
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
                                    <input id="inpu1" type="file" class="file-input">Choose File </button>
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
                                    <input id="inpu2" type="file" class="file-input">Choose File </button>
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
                            <select class="form-select" aria-label="Default select example">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9+">9+</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <label class="mt-2" for="">Bathrooms</label>
                            <select class="form-select" aria-label="Default select example">
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
                            </select>
                        </div>
                        <div class="col-4">
                            <label class="mt-2" for="">SQ Footage</label>
                            <input type="text" id="SQ-Footage" name="SQ-Footage" placeholder="SQ Footage" required>
                        </div>
                        <div class="col-12">
                            <div>
                            <label class="mt-2" for=""> Optional: Brief Description *Used on Property Sites & some of the Classic Sign-In pages. </label>
                            <textarea id="" name="" rows="4" cols="50"></textarea>
                            </div>
                            <div>
                            <label class="mt-2" for=""> Add a custom landing page or link for the Rider & Virtual Brochure QR Code or Text Code. (will be used instead of our Mini Property Site) </label>
                            <input type="text" id="" name="" placeholder="" required>
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
                                <img id="showpre3" class="file-image" src="{{('assets/dist/img/dummy-image-square.jpg')}}">
                                </div>
                            </div>
                            </div>
                            <div class="w-auto text-start">
                            <p id="img-name3">Image Name</p>
                            <button class="file-upload">
                                <input id="inpu3" type="file" multiple="multiple" class="file-input">Choose File </button>
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
                            <input type="radio" id="radio-one" name="switch-one" value="yes" checked />
                            <label for="radio-one">Yes</label>
                            <input type="radio" id="radio-two" name="switch-one" value="no" />
                            <label for="radio-two">No</label>
                        </div>
                        <p>Choose Yes to Automatically Send to Visitors.</p>
                        </div>
                        <div class="form">
                        <h5>Enable Welcome Email Signature?</h5>
                        <h5>To disable our signature choose 'No' to use your own.</h5>
                        <div class="switch-field">
                            <input type="radio" id="radio-three" name="switch-three" value="yes" checked />
                            <label for="radio-three">Yes</label>
                            <input type="radio" id="radio-four" name="switch-three" value="no" />
                            <label for="radio-four">No</label>
                        </div>
                        </div>
                    </div>
                    <div class="col-6 p-3 ">
                        <div class="row justify-content-center">
                        <div class="form-group col-6">
                            <label class="text-left" for="">Welcome Email Subject</label>
                            <input type="text" id="" name="" placeholder="Add the Welcome Email Subject" value="Thanks for visiting here today" required="">
                        </div>
                        <div class="form-group col-6">
                            <label class="text-left" for="anything">Email Headline (inside email)</label>
                            <input type="text" id="anything" name="anything" placeholder="Add the Welcome Email Headline here" value="Welcome to the Open House" required="">
                        </div>
                        </div>
                        <div class="text-start">
                        <h5>WATCH OUT!If using a 'Custom Color', make sure to choose a proper headline (background) & text color that work together.</h5>
                        <div class="row align-items-center">
                            <div class="col-6">
                            <label class="mt-2">Headline Color</label>
                            <select  class="form-select" aria-label="Default select example">
                                <option value="Custom">Custom</option>
                                <option value="Green">Green</option>
                                <option value="Black" selected="selected">Black</option>
                                <option value="Red">Red</option>
                                <option value="White">White</option>
                                <option value="Silver">Silver</option>
                                <option value="Gray">Gray</option>
                                <option value="Maroon">Maroon</option>
                                <option value="Purple">Purple</option>
                                <option value="Fuchsia">Fuchsia</option>
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
                            <div class="col-6">
                            <label class="mt-2" for="favcolor">Select your favorite color:</label>
                            <input type="color" id="favcolor" name="favcolor" value="#FFC0CB"></input>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-6">
                            <label class="mt-2">Headline Text Color</label>
                            <select class="form-select" aria-label="Default select example">
                                <option value="Custom" selected="selected">Custom</option>
                                <option value="White">White</option>
                                <option value="Gold">Gold</option>
                                <option value="Yellow">Yellow</option>
                                <option value="Green">Green</option>
                                <option value="Black">Black</option>
                                <option value="Red">Red</option>
                                <option value="Silver">Silver</option>
                                <option value="Gray">Gray</option>
                                <option value="Maroon">Maroon</option>
                                <option value="Purple">Purple</option>
                                <option value="Fuchsia">Fuchsia</option>
                                <option value="Lime">Lime</option>
                                <option value="Olive">Olive</option>
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
                            <div class="col-6">
                            <label class="mt-2" for="favcolor">Select your favorite color:</label>
                            <input type="color" id="favcolor" name="favcolor" value="#FFC0CB">
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="row bg-off-white">
                    <h5 class="text-start">Add a short 'Thank You' Message After a Visitor Signs In</h5>
                    <textarea class="text-editor-code">
                        <p>Thank you for visiting my Open House today. <br>Please feel free to reach out to me at anytime if you have any questions about this property or if you have a minute to discuss your Real Estate plans.</p>
                        <p>My contact information is below.</p>
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
                                <input id="inpu4" type="file" class="file-input">Choose File </button>
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
                                <input id="inpu5" type="file" class="file-input">Choose File </button>
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
                        <input type="radio" id="smartphone-thankyou-yes" name="switch-one" value="yes" checked />
                        <label for="smartphone-thankyou-yes">Yes</label>
                        <input type="radio" id="smartphone-thankyou-no" name="switch-one" value="no" />
                        <label for="smartphone-thankyou-no">No</label>
                        </div>
                        <h6>These Smartphone Settings including the 'Thank You' message as well as files and links are specific to this Property or Event.</h6>
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
                                    <label>Short Description</label>
                                    <input type="text" id="file-desc_1" name="file-desc_1" placeholder="*Such as 'Floorplans'">
                                </div>
                                <div class="content-field field-2 youtube_link">
                                    <label>Link</label>
                                    <input type="text" id="file-link_1" name="file-link_1" placeholder="https://www.yourwebsite.com">
                                </div>
                                <div class="content-field field-3 upload_file">
                                    <label>Upload File</label>
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
                                    <label>Short Description</label>
                                    <input type="text" id="file-desc_2" name="file-desc_2" placeholder="*Such as 'Floorplans'">
                                </div>
                                <div class="content-field field-2 youtube_link">
                                    <label>Link</label>
                                    <input type="text" id="file-link_2" name="file-link_2" placeholder="https://www.yourwebsite.com">
                                </div>
                                <div class="content-field field-3 upload_file">
                                    <label>Upload File</label>
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
                                    <label>Short Description</label>
                                    <input type="text" id="file-desc_3" name="file-desc_3" placeholder="*Such as 'Floorplans'">
                                </div>
                                <div class="content-field field-2 youtube_link">
                                    <label>Link</label>
                                    <input type="text" id="file-link_3" name="file-link_3" placeholder="https://www.yourwebsite.com">
                                </div>
                                <div class="content-field field-3 upload_file">
                                    <label>Upload File</label>
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
            </div>
            <div class="col-4 m-auto text-center">
            <button class="btn btn-primary px-5" type="submit" name=" go to properties.php"><h3 class="mb-0">SUBMIT</h3></button>
            </div>
        </form>
        </div>
    </section>
@endsection
      