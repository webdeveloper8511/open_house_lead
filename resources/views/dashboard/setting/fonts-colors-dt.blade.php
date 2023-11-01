@extends('layouts.master')
@section('content')
        <section class="add-edit-property-dt-section d-flex h-100vh p-4">
          <div class="container-fluid  m-auto text-center shadow p-3 rounded">
            <div class="row justify-content-between">
              <!-- <div class="col-5 text-left"><a href="#" class="btn btn-primary text-light">
                    VIEW FLYER DESIGNS
                  </a></div><div class="col-4 text-end"><a href="#" class="btn btn-primary text-light">
                        View Last Flyer
                      </a></div> -->
              <h4>
                <b>Branding – Colors & Fonts</b>
              </h4>
            </div>
            <form action="" class="border-10 p-3 my-3">
              <div class="accordion accordion-flush branding-colors-fonts" id="accordionFlushExample">
                <div class="accordion-item prebuilt-custom-fonts-colors">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">Prebuilt & Custom Fonts & Colors </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                      <div class="text-start">
                        <h5 class="fw-bold">Choose Fonts & Colors for the Classic & Smartphone Sign In pages.</h5>
                        <div class="col-4 mb-3">
                          <label class="mt-2">Choose a Prebuilt Font & Color Scheme</label>
                          <select class="form-select ny-select" aria-label="Default select example">
                            <option value="0" selected="selected">None</option>
                            <option value="1">Gray scheme</option>
                            <option value="2">Cosmo</option>
                            <option value="3">Dark Elegance</option>
                            <option value="4">Gray II</option>
                            <option value="5">Hot Pink</option>
                            <option value="6">The Blues</option>
                            <option value="7">Ferrari</option>
                            <option value="8">Lambo</option>
                            <option value="9">Coastal</option>
                            <option value="10">Green</option>
                            <option value="11">Light Blue</option>
                            <option value="12">Purple</option>
                            <option value="13">Yellow</option>
                            <option value="14">Olive</option>
                            <option value="15">Teal</option>
                            <option value="16">Wall Street</option>
                          </select>
                        </div>
                        <h4>Choose 'NONE' to Customize the Fonts & Colors manually.</h4>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item sign-in-form-colors">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsetwo" aria-expanded="false" aria-controls="flush-collapsetwo">Sign-In Form Colors</button>
                  </h2>
                  <div id="flush-collapsetwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample" style="">
                    <div class="accordion-body">
                      <h5 class="fw-bold text-start">Customize the Fonts &amp; Colors</h5>
                      <div>
                        <div class="row text-start justify-content-start bb-dashed pb-3 sign-in-form-main-background-color">
                          <div class="col-4">
                            <label class="mt-2">Sign-In Form Main Background Color</label>
                            <select class="form-select my-select" aria-label="Default select example">
                              <option value="Custom">Custom</option>
                              <option value="Black">Black</option>
                              <option value="Red">Red</option>
                              <option value="White">White</option>
                              <option value="Silver">Silver</option>
                              <option value="Gray" selected="selected">Gray</option>
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
                          <div class="col-8 custom-color px-2" style="display: none;">
                            <label class="mt-2" for="favcolor">Custom Background Color</label>
                            <div class="d-flex align-items-center">
                              <input class="me-2" type="color" id="" name="" value="">
                              <span class="fw-bold"> pink Color</span>
                            </div>
                          </div>
                        </div>
                        <div class="row text-start justify-content-start bb-dashed pb-3 main-border-color">
                          <div class="col-4">
                            <label class="mt-2">Main Border Color</label>
                            <select class="form-select my-select" aria-label="Default select example">
                              <option value="Custom">Custom</option>
                              <option value="Black" selected="selected">Black</option>
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
                          <div class="col-8 custom-color px-2" style="display: none;">
                            <label class="mt-2" for="favcolor">Enter a Custom Main Border Color</label>
                            <div class="d-flex align-items-center">
                              <input class="me-2" type="color" id="" name="" value="#FFC0CB">
                              <span class="fw-bold"> pink Color</span>
                            </div>
                          </div>
                        </div>
                        <div class="row text-start justify-content-start bb-dashed pb-3 sign-in-button-color">
                          <div class="col-4">
                            <label class="mt-2">Sign-In Button Color</label>
                            <select class="form-select my-select" aria-label="Default select example">
                              <option value="Custom">Custom</option>
                              <option value="Black">Black</option>
                              <option value="Red">Red</option>
                              <option value="White">White</option>
                              <option value="Silver">Silver</option>
                              <option value="Gray" selected="selected">Gray</option>
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
                          <div class="col-8 custom-color px-2" style="display: none;">
                            <label class="mt-2" for="">Custom Sign In Button Color</label>
                            <div class="d-flex align-items-center">
                              <input class="me-2" type="color" id="" name="" value="#FFC0CB">
                              <span class="fw-bold"> pink Color</span>
                            </div>
                          </div>
                        </div>
                        <div class="row text-start justify-content-start bb-dashed pb-3 sign-in-button-text-color">
                          <div class="col-4">
                            <label class="mt-2">Sign-In Button TEXT Color</label>
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
                          <div class="col-8 custom-color px-2" style="display: none;">
                            <label class="mt-2" for="favcolor">Custom Sign In Button Text Color</label>
                            <div class="d-flex align-items-center">
                              <input class="me-2" type="color" id="favcolor" name="favcolor" value="#FFC0CB">
                              <span class="fw-bold"> pink Color</span>
                            </div>
                          </div>
                        </div>
                        <div class="row text-start justify-content-start bb-dashed pb-3 sign-in-button-border-color">
                          <div class="col-4">
                            <label class="mt-2">Sign-In Button BORDER Color</label>
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
                          <div class="col-8 custom-color px-2" style="display: none;">
                            <label class="mt-2" for="favcolor">Custom Sign In Button Border Color</label>
                            <div class="d-flex align-items-center">
                              <input class="me-2" type="color" id="favcolor" name="favcolor" value="#FFC0CB">
                              <span class="fw-bold"> pink Color</span>
                            </div>
                          </div>
                        </div>
                        <div class="row text-start justify-content-start sign-in-button-text-shadow-yes-no">
                          <div class="col-4">
                            <label class="mt-2">Sign-In Button Text Shadow Yes/No</label>
                            <div class="switch-field">
                              <input type="radio" id="sign-in-button-text-shadow-yes" name="Sign-In Button Text Shadow Yes/No" value="yes" checked="">
                              <label for="sign-in-button-text-shadow-yes">Yes</label>
                              <input type="radio" id="sign-in-button-text-shadow-no" name="Sign-In Button Text Shadow Yes/No" value="no">
                              <label for="sign-in-button-text-shadow-no">No</label>
                            </div>
                          </div>
                        </div>
                        <div class="row text-start justify-content-start pb-3 border-size">
                          <div class="col-4">
                            <label class="mt-2">Border Size</label>
                            <select class="form-select my-select" aria-label="Default select example">
                              <option value="Thick">Thick</option>
                              <option value="Thin">Thin</option>
                              <option value="">None</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item sign-in-form-font-style">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsethree" aria-expanded="false" aria-controls="flush-collapsethree">Sign-In Form FONT Style</button>
                  </h2>
                  <div id="flush-collapsethree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample" style="">
                    <div class="accordion-body">
                      <h5 class="fw-bold text-start">Find a font that matches your branding.</h5>
                      <div>
                        <div class="row text-start justify-content-start bb-dashed pb-3">
                          <div class="col-3">
                            <label class="mt-2">Choose a Font</label>
                            <select class="form-select" aria-label="Default select example">
                              <option value="Georgia">Georgia</option>
                              <option value="Arial">Arial</option>
                              <option value="Verdana">Verdana</option>
                              <option value="Tahoma" selected="selected">Tahoma</option>
                              <option value="Open Sans Condensed">Open Sans Condensed</option>
                              <option value="PT Sans Narrow">PT Sans Narrow</option>
                              <option value="Lato">Lato</option>
                              <option value="PT Sans">PT Sans</option>
                              <option value="Oswald">Oswald</option>
                              <option value="Josefin Sans">Josefin Sans</option>
                              <option value="EB Garamond">EB Garamond</option>
                              <option value="Montserrat">Montserrat</option>
                              <option value="Merriweather">Merriweather</option>
                              <option value="Roboto Regular">Roboto Regular</option>
                              <option value="Roboto Slab">Roboto Slab</option>
                              <option value="Raleway">Raleway</option>
                              <option value="Playfair Display">Playfair Display</option>
                              <option value="Noto Sans">Noto Sans</option>
                              <option value="Alegreya">Alegreya</option>
                            </select>
                          </div>
                          <div class="col-3 bold-yes-no">
                            <label class="mt-2">Bold Yes/No</label>
                            <div class="switch-field">
                              <input type="radio" id="bold-yes" name="bold-yes-no" value="yes" checked="">
                              <label for="bold-yes">Yes</label>
                              <input type="radio" id="bold-no" name="bold-yes-no" value="no">
                              <label for="bold-no">No</label>
                            </div>
                          </div>
                          <div class="col-3 italic-yes-no">
                            <label class="mt-2">Italic Yes/No</label>
                            <div class="switch-field">
                              <input type="radio" id="italic-yes" name="italic-yes-no" value="yes" checked="">
                              <label for="italic-yes">Yes</label>
                              <input type="radio" id="italic-no" name="italic-yes-no" value="no">
                              <label for="italic-no">No</label>
                            </div>
                          </div>
                          <div class="col-3 text-shadow-yes-no">
                            <label class="mt-2">Text Shadow Yes/No</label>
                            <div class="switch-field">
                              <input type="radio" id="text-shadow-yes" name="text-shadow-yes-no" value="yes" checked="">
                              <label for="text-shadow-yes">Yes</label>
                              <input type="radio" id="text-shadow-no" name="text-shadow-yes-no" value="no">
                              <label for="text-shadow-no">No</label>
                            </div>
                          </div>
                        </div>
                        <div class="row text-start justify-content-start bb-dashed pb-3 choose-a-font-color">
                          <div class="col-4">
                            <label class="mt-2">Choose a Font Color</label>
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
                          <div class="col-8 custom-color px-2" style="display: none;">
                            <label class="mt-2" for="favcolor">Enter a Custom Color</label>
                            <div class="d-flex align-items-center">
                              <input class="me-2" type="color" id="" name="" value="">
                              <span class="fw-bold"> pink Color</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item smartphone-page-color">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">Smartphone Page Color</button>
                  </h2>
                  <div id="flush-collapsefour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample" style="">
                    <div class="accordion-body">
                      <h5 class="text-start">Choose a color that matches your branding.</h5>
                      <h5 class="fw-bold text-start">WARNING: Changing the Smartphone page color here overrides all other page color settings. Test to make sure this color looks good.</h5>
                      <h5 class="text-start">If not it can be changed back to 'Optional' or other colors on the page can be adjusted above.</h5>
                      <div>
                        <div class="row text-start justify-content-start bb-dashed pb-3 qr-code-text-smartphone-page-color">
                          <div class="col-4">
                            <label class="mt-2">QR CODE & TEXT Smartphone Page Color</label>
                            <select class="form-select my-select" aria-label="Default select example">
                              <option value="" class="gf_placeholder">OPTIONAL</option>
                              <option value="#555f61">Default Color</option>
                              <option value="Custom" selected="selected">Custom</option>
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
                            <p>Choose a Background Color (Optional)</p>
                          </div>
                          <div class="col-8 custom-color px-2">
                            <label class="mt-2" for="favcolor">Enter a Custom Color</label>
                            <div class="d-flex align-items-center">
                              <input class="me-2" type="color" id="" name="" value="">
                              <span class="fw-bold"> pink Color</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item classic-pages-background-color">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapsefive">Smartphone Page Color</button>
                  </h2>
                  <div id="flush-collapsefive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample" style="">
                    <div class="accordion-body">
                      <h5 class="text-start">Choose a color that matches your branding.</h5>
                      <h5 class="text-start">If a Background Color is chosen, the Property Photo will not show as the background on Classic Sign In Pages.</h5>
                      <div>
                        <div class="row text-start justify-content-start bb-dashed pb-3 choose-a-color">
                          <div class="col-4">
                            <label class="mt-2">CHOOSE A COLOR</label>
                            <select class="form-select my-select" aria-label="Default select example">
                              <option value="None">None</option>
                              <option value="Custom">Custom</option>
                              <option value="Black">Black</option>
                              <option value="Red">Red</option>
                              <option value="White">White</option>
                              <option value="Silver">Silver</option>
                              <option value="Gray" selected="selected">Gray</option>
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
                          <div class="col-8 custom-color px-2">
                            <label class="mt-2" for="favcolor">Enter a Custom Color</label>
                            <div class="d-flex align-items-center">
                              <input class="me-2" type="color" id="" name="" value="">
                              <span class="fw-bold"> pink Color</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item font-examples">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsesix" aria-expanded="false" aria-controls="flush-collapsesix">Font Examples</button>
                  </h2>
                  <div id="flush-collapsesix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample" style="">
                    <div class="accordion-body">
                      <h5 class="text-start">View our selection of available fonts.</h5>
                      <div class="row text-start">
                        <div class="col">
                          <span class="font-priview" style="font-size: 30px; line-height: 1.2!important; font-family:Georgia!important;">Georgia</span>
                          <br>
                          <span class="font-priview" style="font-size: 30px; line-height: 1.2!important; font-family:Arial!important;">Arial</span>
                          <br>
                          <span class="font-priview" style="font-size: 30px; line-height: 1.2!important; font-family:Verdana!important;">Verdana</span>
                          <br>
                          <span class="font-priview" style="font-size: 30px; line-height: 1.2!important; font-family:Tahoma!important;">Tahoma</span>
                          <br>
                          <span class="font-priview" style="font-size: 30px; line-height: 1.2!important; font-family:Open Sans Condensed!important;">Open Sans Condensed</span>
                          <br>
                          <span class="font-priview" style="font-size: 30px; line-height: 1.2!important; font-family:PT Sans Narrow!important;">PT Sans Narrow</span>
                        </div>
                        <div class="col">
                          <span class="font-priview" style="font-size: 30px; line-height: 1.2!important; font-family:Lato!important;">Lato</span>
                          <br>
                          <span class="font-priview" style="font-size: 30px; line-height: 1.2!important; font-family:Oswald!important;">Oswald</span>
                          <br>
                          <span class="font-priview" style="font-size: 30px; line-height: 1.2!important; font-family:Josefin Sans!important;">Josefin Sans</span>
                          <br>
                          <span class="font-priview" style="font-size: 30px; line-height: 1.2!important; font-family:EB Garamond!important;">EB Garamond</span>
                          <br>
                          <span class="font-priview" style="font-size: 30px; line-height: 1.2!important; font-family:Montserrat!important;">Montserrat</span>
                          <br>
                          <span class="font-priview" style="font-size: 30px; line-height: 1.2!important; font-family:Merriweather!important;">Merriweather</span>
                        </div>
                        <div class="col">
                          <span class="font-priview" style="font-size: 30px; line-height: 1.2!important; font-family:Roboto!important;">Roboto Regular</span>
                          <br>
                          <span class="font-priview" style="font-size: 30px; line-height: 1.2!important; font-family:Roboto Slab!important;">Roboto Slab</span>
                          <br>
                          <span class="font-priview" style="font-size: 30px; line-height: 1.2!important; font-family:Raleway!important;">Raleway</span>
                          <br>
                          <span class="font-priview" style="font-size: 30px; line-height: 1.2!important; font-family:Playfair Display!important;">Playfair Display</span>
                          <br>
                          <span class="font-priview" style="font-size: 30px; line-height: 1.2!important; font-family:Noto Sans!important;">Noto Sans</span>
                          <br>
                          <span class="font-priview" style="font-size: 30px; line-height: 1.2!important; font-family:Alegreya!important;">Alegreya</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4 mx-auto text-center mb-3">
                  <button class="btn btn-primary px-5" type="submit" name=" go to property.php">
                    <h3 class="mb-0">SAVE</h3>
                  </button>
                </div>
              </div>
            </form>
            <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapselastone" aria-expanded="false" aria-controls="flush-collapselastone">Prebuilt Color & Font Scheme Previews </button>
                </h2>
                <div id="flush-collapselastone" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body text-start">
                    <h5 class="mb-3 fw-bold">Don't want to Spend a Lot of Time Choosing Color & Font Combinations?</h5>
                    <h5 class="mb-3">Then Checkout our 'Prebuilt' Font & Color Combination Schemes. Choose one from the dropdown menu above. These Schemes also include their own (optional) background.</h5>
                    <h5 class="mb-4">To use your own background image, add it using the 'Main Images' Tab item above.</h5>
                    <div class="row flex-wrap">
                      <div class="col-3 text-center mb-2">
                        <img class="mb-3 img-fluid" src="{{url('assets/images/Gray.jpg')}}" alt="">
                        <p class="fw-bold">Gray</p>
                      </div>
                      <div class="col-3 text-center mb-2">
                        <img class="mb-3 img-fluid" src="{{url('assets/images/Cosmo.jpg')}}" alt="">
                        <p class="fw-bold">Cosmo</p>
                      </div>
                      <div class="col-3 text-center mb-2">
                        <img class="mb-3 img-fluid" src="{{url('assets/images/Dark-Elegance.jpg')}}" alt="">
                        <p class="fw-bold">Dark Elegance</p>
                      </div>
                      <div class="col-3 text-center mb-2">
                        <img class="mb-3 img-fluid" src="{{url('assets/images/Gray-II.jpg')}}" alt="">
                        <p class="fw-bold">Gray II</p>
                      </div>
                      <div class="col-3 text-center mb-2">
                        <img class="mb-3 img-fluid" src="{{url('assets/images/Hot-Pink.jpg')}}" alt="">
                        <p class="fw-bold">Hot Pink</p>
                      </div>
                      <div class="col-3 text-center mb-2">
                        <img class="mb-3 img-fluid" src="{{url('assets/images/The-Blues.jpg')}}" alt="">
                        <p class="fw-bold">The Blues</p>
                      </div>
                      <div class="col-3 text-center mb-2">
                        <img class="mb-3 img-fluid" src="{{url('assets/images/Ferrari-1.jpg')}}" alt="">
                        <p class="fw-bold">Ferrari</p>
                      </div>
                      <div class="col-3 text-center mb-2">
                        <img class="mb-3 img-fluid" src="{{url('assets/images/Lambo-1.jpg')}}" alt="">
                        <p class="fw-bold">Lambo</p>
                      </div>
                      <div class="col-3 text-center mb-2">
                        <img class="mb-3 img-fluid" src="{{url('assets/images/Coastal.jpg')}}" alt="">
                        <p class="fw-bold">Coastal</p>
                      </div>
                      <div class="col-3 text-center mb-2">
                        <img class="mb-3 img-fluid" src="{{url('assets/images/Green.jpg')}}" alt="">
                        <p class="fw-bold">Green</p>
                      </div>
                      <div class="col-3 text-center mb-2">
                        <img class="mb-3 img-fluid" src="{{url('assets/images/Light-Blue.jpg')}}" alt="">
                        <p class="fw-bold">Light Blue</p>
                      </div>
                      <div class="col-3 text-center mb-2">
                        <img class="mb-3 img-fluid" src="{{url('assets/images/Purple.jpg')}}" alt="">
                        <p class="fw-bold">Purple</p>
                      </div>
                      <div class="col-3 text-center mb-2">
                        <img class="mb-3 img-fluid" src="{{url('assets/images/Yellow.jpg')}}" alt="">
                        <p class="fw-bold">Yellow</p>
                      </div>
                      <div class="col-3 text-center mb-2">
                        <img class="mb-3 img-fluid" src="{{url('assets/images/Olive.jpg')}}" alt="">
                        <p class="fw-bold">Olive</p>
                      </div>
                      <div class="col-3 text-center mb-2">
                        <img class="mb-3 img-fluid" src="{{url('assets/images/Teal.jpg')}}" alt="">
                        <p class="fw-bold">Teal</p>
                      </div>
                      <div class="col-3 text-center mb-2">
                        <img class="mb-3 img-fluid" src="{{url('assets/images/Wall-Street.jpg')}}" alt="">
                        <p class="fw-bold">Wall Street</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapselasttwo" aria-expanded="false" aria-controls="flush-collapselasttwo">See All Color Examples</button>
                </h2>
                <div id="flush-collapselasttwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body text-start">
                    <div class="row flex-wrap basic-colors-sec">
                      <div class="col-12">
                        <h5 class="fw-bold mb-3">Basic Colors</h5>
                      </div>
                      <div class="col-3 text-center mb-2">
                        <table class="table table-bordered color-table">
                          <tbody>
                            <tr class="color-box">
                              <td class="Black "></td>
                              <td>Black</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Silver "></td>
                              <td>Silver</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Gray "></td>
                              <td>Gray</td>
                            </tr>
                            <tr class="color-box">
                              <td class="White "></td>
                              <td>White</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="col-3 text-center mb-2">
                        <table class="table table-bordered color-table">
                          <tbody>
                            <tr class="color-box">
                              <td class="Maroon "></td>
                              <td>Maroon</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Red "></td>
                              <td>Red</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Purple "></td>
                              <td>Purple</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Fuchsia "></td>
                              <td>Fuchsia</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="col-3 text-center mb-2">
                        <table class="table table-bordered color-table">
                          <tbody>
                            <tr class="color-box">
                              <td class="Green "></td>
                              <td>Green</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Lime "></td>
                              <td>Lime</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Olive "></td>
                              <td>Olive</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Yellow"></td>
                              <td>Yellow</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="col-3 text-center mb-2">
                        <table class="table table-bordered color-table">
                          <tbody>
                            <tr class="color-box">
                              <td class="Navy"></td>
                              <td>Navy</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Navy"></td>
                              <td>Navy</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Teal"></td>
                              <td>Teal</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Aqua"></td>
                              <td>Aqua</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="row flex-wrap nore-color-sec">
                      <div class="col-12">
                        <h5 class="fw-bold mb-3">More Colors</h5>
                      </div>
                      <div class="col-3 text-center mb-2">
                        <table class="table table-bordered color-table">
                          <tbody>
                            <tr class="color-box">
                              <td class="Aliceblue "></td>
                              <td>Aliceblue</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Antiquewhite "></td>
                              <td>Antiquewhite</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Aqua "></td>
                              <td>Aqua</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Aquamarine "></td>
                              <td>Aquamarine</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Azure "></td>
                              <td>Azure</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Beige "></td>
                              <td>Beige</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Bisque "></td>
                              <td>Bisque</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Black "></td>
                              <td>Black</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Blanchedalmond "></td>
                              <td>Blanchedalmond</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Blue "></td>
                              <td>Blue</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Blueviolet "></td>
                              <td>Blueviolet</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Brown "></td>
                              <td>Brown</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Burlywood "></td>
                              <td>Burlywood</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Cadetblue "></td>
                              <td>Cadetblue</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Chartreuse "></td>
                              <td>Chartreuse</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Chocolate "></td>
                              <td>Chocolate</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Coral"></td>
                              <td>Coral</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Cornflowerblue "></td>
                              <td>Cornflowerblue</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Cornsilk "></td>
                              <td>Cornsilk</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Crimson "></td>
                              <td>Crimson</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Cyan "></td>
                              <td>Cyan</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Darkblue "></td>
                              <td>Darkblue</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Darkcyan "></td>
                              <td>Darkcyan</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Darkgoldenrod "></td>
                              <td>Darkgoldenrod</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Darkgray "></td>
                              <td>Darkgray</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Darkgreen "></td>
                              <td>Darkgreen</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Darkgrey "></td>
                              <td>Darkgrey</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Darkkhaki "></td>
                              <td>Darkkhaki</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Darkmagenta "></td>
                              <td>Darkmagenta</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Darkolivegreen "></td>
                              <td>Darkolivegreen</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Darkorange "></td>
                              <td>Darkorange</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Darkorchid "></td>
                              <td>Darkorchid</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Darkred "></td>
                              <td>Darkred</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Darksalmon "></td>
                              <td>Darksalmon</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Darkseagreen "></td>
                              <td>Darkseagreen</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Darkslateblue "></td>
                              <td>Darkslateblue</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Darkslategray "></td>
                              <td>Darkslategray</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="col-3 text-center mb-2">
                        <table class="table table-bordered color-table">
                          <tbody>
                            <tr class="color-box">
                              <td class="Darkturquoise "></td>
                              <td>Darkturquoise</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Darkviolet "></td>
                              <td>Darkviolet</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Deeppink "></td>
                              <td>Deeppink</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Deepskyblue "></td>
                              <td>Deepskyblue</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Dimgray "></td>
                              <td>Dimgray</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Dodgerblue "></td>
                              <td>Dodgerblue</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Firebrick "></td>
                              <td>Firebrick</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Floralwhite "></td>
                              <td>Floralwhite</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Forestgreen "></td>
                              <td>Forestgreen</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Fuchsia "></td>
                              <td>Fuchsia</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Gainsboro "></td>
                              <td>Gainsboro</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Ghostwhite "></td>
                              <td>Ghostwhite</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Gold "></td>
                              <td>Gold</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Goldenrod "></td>
                              <td>Goldenrod</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Gray "></td>
                              <td>Gray</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Green "></td>
                              <td>Green</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Greenyellow "></td>
                              <td>Greenyellow</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Grey "></td>
                              <td>Grey</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Honeydew "></td>
                              <td>Honeydew</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Hotpink "></td>
                              <td>Hotpink</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Indianred "></td>
                              <td>Indianred</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Indigo "></td>
                              <td>Indigo</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Ivory "></td>
                              <td>Ivory</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Khaki "></td>
                              <td>Khaki</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Lavender "></td>
                              <td>Lavender</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Lavenderblush "></td>
                              <td>Lavenderblush</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Lawngreen "></td>
                              <td>Lawngreen</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Lemonchiffon "></td>
                              <td>Lemonchiffon</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Lightblue "></td>
                              <td>Lightblue</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Lightcoral "></td>
                              <td>Lightcoral</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Lightcyan "></td>
                              <td>Lightcyan</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Lightgoldenrodyellow "></td>
                              <td>Lightgoldenrodyellow</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Lightgray "></td>
                              <td>Lightgray</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Lightgreen "></td>
                              <td>Lightgreen</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Lightgrey "></td>
                              <td>Lightgrey</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Lightpink "></td>
                              <td>Lightpink</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Lightsalmon "></td>
                              <td>Lightsalmon</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="col-3 text-center mb-2">
                        <table class="table table-bordered color-table">
                          <tbody>
                            <tr class="color-box">
                              <td class="Lightseagreen "></td>
                              <td>Lightseagreen</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Lightskyblue "></td>
                              <td>Lightskyblue</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Lightslategray "></td>
                              <td>Lightslategray</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Lightslategrey "></td>
                              <td>Lightslategrey</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Lightsteelblue "></td>
                              <td>Lightsteelblue</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Lightyellow "></td>
                              <td>Lightyellow</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Lime "></td>
                              <td>Lime</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Limegreen "></td>
                              <td>Limegreen</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Linen "></td>
                              <td>Linen</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Magenta "></td>
                              <td>Magenta</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Maroon "></td>
                              <td>Maroon</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Mediumaquamarine "></td>
                              <td>Mediumaquamarine</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Mediumblue "></td>
                              <td>Mediumblue</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Mediumorchid "></td>
                              <td>Mediumorchid</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Mediumpurple "></td>
                              <td>Mediumpurple</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Mediumseagreen "></td>
                              <td>Mediumseagreen</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Mediumslateblue "></td>
                              <td>Mediumslateblue</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Mediumspringgreen "></td>
                              <td>Mediumspringgreen</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Mediumturquoise "></td>
                              <td>Mediumturquoise</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Mediumvioletred "></td>
                              <td>Mediumvioletred</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Midnightblue "></td>
                              <td>Midnightblue</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Mintcream "></td>
                              <td>Mintcream</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Mistyrose "></td>
                              <td>Mistyrose</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Moccasin "></td>
                              <td>Moccasin</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Navajowhite "></td>
                              <td>Navajowhite</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Navy "></td>
                              <td>Navy</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Oldlace "></td>
                              <td>Oldlace</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Olive "></td>
                              <td>Olive</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Olivedrab "></td>
                              <td>Olivedrab</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Orange "></td>
                              <td>Orange</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Orangered "></td>
                              <td>Orangered</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Orchid "></td>
                              <td>Orchid</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Palegoldenrod "></td>
                              <td>Palegoldenrod</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Palegreen "></td>
                              <td>Palegreen</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Paleturquoise "></td>
                              <td>Paleturquoise</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Palevioletred "></td>
                              <td>Palevioletred</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Papayawhip "></td>
                              <td>Papayawhip</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="col-3 text-center mb-2">
                        <table class="table table-bordered color-table">
                          <tbody>
                            <tr class="color-box">
                              <td class="Peachpuff "></td>
                              <td>Peachpuff</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Peru "></td>
                              <td>Peru</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Pink "></td>
                              <td>Pink</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Plum "></td>
                              <td>Plum</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Powderblue "></td>
                              <td>Powderblue</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Purple "></td>
                              <td>Purple</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Red "></td>
                              <td>Red</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Rosybrown "></td>
                              <td>Rosybrown</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Royalblue "></td>
                              <td>Royalblue</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Saddlebrown "></td>
                              <td>Saddlebrown</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Salmon"></td>
                              <td>Salmon</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Sandybrown"></td>
                              <td>Sandybrown</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Seagreen"></td>
                              <td>Seagreen</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Seashell"></td>
                              <td>Seashell</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Sienna"></td>
                              <td>Sienna</td>
                            </tr>
                            <tr class="color-box">
                              <td class="NavSilvery"></td>
                              <td>Silver</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Skyblue"></td>
                              <td>Skyblue</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Slateblue"></td>
                              <td>Slateblue</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Slategray"></td>
                              <td>Slategray</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Slategrey"></td>
                              <td>Slategrey</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Snow"></td>
                              <td>Snow</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Springgreen"></td>
                              <td>Springgreen</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Steelblue"></td>
                              <td>Steelblue</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Tan"></td>
                              <td>Tan</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Teal"></td>
                              <td>Teal</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Thistle"></td>
                              <td>Thistle</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Tomato"></td>
                              <td>Tomato</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Turquoise"></td>
                              <td>Turquoise</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Violet"></td>
                              <td>Violet</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Wheat"></td>
                              <td>Wheat</td>
                            </tr>
                            <tr class="color-box">
                              <td class="White"></td>
                              <td>White</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Whitesmoke"></td>
                              <td>Whitesmoke</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Yellow"></td>
                              <td>Yellow</td>
                            </tr>
                            <tr class="color-box">
                              <td class="Yellowgreen"></td>
                              <td>Yellowgreen</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="click-to-reset">
              <div class="col-4 mx-auto text-center bg-blue p-4">
                <h3 class="fw-bold mb-3">Reset Fonts & Colors to Defaults?</h3>
                <button class="btn bg-white px-5" type="submit" name=" go to property.php">
                  <h3 class="mb-0">CLICK TO RESET</h3>
                </button>
              </div>
            </div>
          </div>
        </section>
@endsection