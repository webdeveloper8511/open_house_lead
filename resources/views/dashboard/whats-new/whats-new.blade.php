@extends('layouts.master')
@section('content')
<section class="page-content whats-new-section h-100vh p-4 bg-black-50">
    <div class="container-fluid m-auto text-center shadow p-4 rounded bg-white">
    <h1 class="main-heading m-0">What's New & Awesome</h1>
    </div>
    <div class="container-fluid mx-auto text-center shadow p-4 rounded bg-white my-3">
    <h2 class="section-heading">Upgraded Feedback Options</h2>
    <div class="row">
        <div class="col-12 col-md-3">
        <div class="lightbox-image">
            <img src="{{url('assets/images/smartphone-transparent-whats-new.png')}}" 
                alt="smartphone-transparent-whats-new" 
                title="smartphone-transparent-whats-new" 
                class="whats-new_sec-img">
        </div>
        <p class="lightbox-info mt-3 mx-auto mt-2 w-75">Click the Image to see a Larger Size</p>
        </div>
        <div class="whats-new-section-content col-12 col-md-9">
        <h3>Add a Feedback Link to the Visitor Welcome Email</h3>
        <h5><strong>Besides being able to add a feedback button on the Smartphone Visitor Registration 'Thank You' page, you can also add one to the Visitor Welcome Email.</strong></h5>
        <div class="row">
            <div class="col-12 col-md-8">
            <p><strong>With just one click you can add a Feedback request link to the Visitor Welcome Email.</strong></p>
            <p><strong>HOW ENABLE THE FEEDBACK BUTTON.</strong></p>
            <p>When clicking the feedback link Visitors will be directed to a Property Feedback page where they can quickly and easily add their comments as well as answer some basic questions about the property.</p>
            <p><strong>GREAT FOR LISTING AGENTS.</strong></p>
            <p>All feedback sent from visitors will arrive in your email inbox where you can review and collect the feedback for presentation to the property owner(s). Besides being emailed to you, the feedback information is also saved with the Visitor Details where it can be reviewed by viewing the Visitor.</p>
            <p><strong>HOW ENABLE FEEDBACK ON THE VISITOR THANK YOU PAGE. </strong></p>
            <p>Simply go to the Settings/Quick Settings page from the menu.  On that page click the Enable Feedback feature.</p>
            <p><strong>* COMING SOON</strong> - Automatic Feedback PDFs that can be generated with the click of a button!</p>
            </div>
            <div class="col-12 col-md-4">
            <img src="{{url('assets/images/smartphone-fb.png')}}" class="extra-img">
            <img src="{{url('assets/images/fb-arrow.png')}}" class="extra-img">
            </div>
        </div>
        </div>
    </div>
    </div>
    <div class="container-fluid mx-auto text-center shadow p-4 rounded bg-white my-3">
    <h2 class="section-heading">New App & Mobile Dashboard</h2>
    <div class="row">
        <div class="col-12 col-md-3">
        <div class="lightbox-image">
            <img src="{{url('assets/images/smartphone-dashboard-properties.jpg')}}" 
            alt="smartphone-dashboard-properties" 
            title="smartphone-dashboard-properties" class="whats-new_sec-img">
        </div>
        <p class="lightbox-info mt-3 mx-auto mt-2 w-75">Click the Image to see a Larger Size</p>
        </div>
        <div class="whats-new-section-content col-12 col-md-9">
        <h3>Login on your Smartphone and checkout our cool new Mobile Dashboard!</h3>
        <h5><strong>Now on the Apple App Store & Google Play!</strong></h5>
        <p>There are two ways to Access the Mobile Dashboard. You can either Login to our Website on your Smartphone, OR - if you prefer, Download our App from your favorite App Store on your Smartphone.</p>
        <img src="{{url('assets/images/google_play_badge-sm.png')}}" class="w-auto mt-3">
        <img src="{{url('assets/images/ios_badge-sm.png')}}" class="w-auto mt-3">
        <p><strong>Its simple!</strong> Just download the app, then login using your Open House Wizard login.</p>
        <p><strong>Conveniently manage pretty much everything Open House Wizard on your Smartphone.</strong></p>
        <p><strong>GREAT DURING AN OPEN.</strong> Login on your Smartphone during an Open House and monitor Visitor Sign Ins with the greatest of ease.  Visitors will show automatically as they register.</p>
        <p><strong>MAKE ADJUSTMENTS INSTANTLY.</strong> Use the 'Quick Settings' page to instantly adjust many of your settings on the fly.  Many other settings can be changed including: Properties and their details, Team Management, Visitor Welcome Email / Text, Email / Text Drip Campaign Settings, Coop Partner management and much more.</p>
        <p><strong>VISITORS & NOTES.</strong> Edit Visitors to add notes or make corrections. You can also Email or Text Visitors with one Tap.</p>
        <p><strong>SECURITY FEATURE.</strong> Easily copy a Visitor's Email address or Phone Number with one click to then paste into your favorite security app (such as Forewarn) to look them up.</p>
        </div>
    </div>
    </div>
    <div class="container-fluid mx-auto text-center shadow p-4 rounded bg-white my-3">
    <h2 class="section-heading">New Virtual Brochures</h2>
    <div class="row">
        <div class="col-12 col-md-3">
        <div class="lightbox-image">
            <img src="{{url('assets/images/Virtual-Brochure-2022-sm.jpg')}}" alt="Virtual-Brochure-2022-sm" title="Virtual-Brochure-2022-sm" class="whats-new_sec-img">
        </div>
        <p class="lightbox-info mt-3 mx-auto mt-2 w-75">Click the Image to see a Larger Size</p>
        </div>
        <div class="whats-new-section-content col-12 col-md-9">
        <h3>Say Goodbye to Old Fashioned Paper Brochures!</h3>
        <h5>Our Virtual Brochure can easily take the place of those printed color brochures for your listings.  Many people nowadays prefer an online experience vs a piece of paper.</h5>
        <p>A lot of Agents have noticed that the amount of Buyers taking a brochure at a Property Showing has declined over the years simply because Buyers increasingly no longer want them.</p>
        <p>Enter the Virtual Brochure.</p>
        <p class="m-0"><strong>How it works:</strong></p>
        <ul>
            <li>Simply create a Virtual Brochure with a couple clicks *Under a Property, Click 'Add Flyer', then choose 'Brochure' for the Flyer type</li>
            <li>The Virtual Brochure PDF will be sent to your Email Address</li>
            <li>Print the Brochure and display in a stand at your property</li>
            <li>Property Visitors can scan the QR Code or use the Text Code to access the Virtual Brochure or Tour Link on their Smartphone</li>
        </ul>
        <p>The Virtual Tour link can be an Open House Wizard Property Mini Site or it can be your own custom url that you supply to an Online Tour, Video, 360 Walkthough or any kind of link for the Property.</p>
        <p><strong>Go TOTALLY Paperless...</strong> Use the Open House Wizard 'Reusable Sign Riders' to replace your outside Brochure Box flyers and then inside use a Virtual Brochure. Voila!</p>
        <h5 class="image-text"><img src="{{url('assets/images/money-sm.jpg')}}" class="w-auto"><strong>Think about how much time and money you would save by going paperless.</strong></h5>
        </div>
    </div>
    </div>
    <div class="container-fluid mx-auto text-center shadow p-4 rounded bg-white my-3">
    <h2 class="section-heading">New +Add Contact Buttons</h2>
    <div class="row">
        <div class="col-12 col-md-3">
        <div class="lightbox-image">
            <img src="{{url('assets/images/smartphone-ADD-CONTACT.png')}}" alt="smartphone-ADD-CONTACT" title="smartphone-ADD-CONTACT" class="whats-new_sec-img">
        </div>
        <p class="lightbox-info mt-3 mx-auto mt-2 w-75">Click the Image to see a Larger Size</p>
        </div>
        <div class="whats-new-section-content col-12 col-md-9">
        <h4>New Add Contact Buttons Allow Visitors to Save you as a Contact on their Smartphones Instantly.</h4>
        <h5>These Add Contact Buttons show on the Visitor 'Thank You' page they see on their Smartphone after registering for an open house & also on the Welcome to the Open House Email that Visitors receive.</h5>
        <img src="{{url('assets/images/ad-contact-buttons.png')}}" class="my-2">
        <p><strong>The 'Thank You' page also displays a Call & Email button as well.</strong></p>
        <p><strong class="m-0">The Visitor Welcome to the Open House email includes an Add Contact button after the Signature section.</strong></p>
        <img src="{{url('assets/images/add-contact-email.jpg')}}" class="my-2">
        </div>
    </div>
    </div>
    <div class="container-fluid mx-auto text-center shadow p-4 rounded bg-white my-3">
    <h2 class="section-heading">New! Reusable Sign Riders</h2>
    <div class="row">
        <div class="col-12 col-md-3">
        <div class="lightbox-image">
            <img src="{{url('assets/images/rider.jpg')}}" alt="rider" title="rider" class="whats-new_sec-img">
        </div>
        <div class="lightbox-image">
            <img src="{{url('assets/images/riderqr.jpg')}}" alt="riderqr" title="riderqr" class="whats-new_sec-img">
        </div>
        <div class="lightbox-image">
            <img src="{{url('assets/images/riderhs.jpg')}}" alt="riderhs" title="riderhs" class="whats-new_sec-img">
        </div>
        <p class="lightbox-info mt-3 mx-auto mt-2 w-75">Click the Image to see a Larger Size</p>
        </div>
        <div class="whats-new-section-content col-12 col-md-9">
        <p>A Rider Code can be assigned to every Property you add for an Open House or Event.</p>
        <p><strong>Easy Peasy.</strong> You can download a ready to print PDF Rider with the TEXT & QR Code on it to order a Sign Rider from a Print Shop. Simply upload the PDF to the Print Shop and order away! (Print shop must allow PDF as an upload type for the Rider Artwork, and most do.)</p>
        <p><strong>Get Leads.</strong> Place these Sign Riders on your listings to generate leads from passersby.  When someone TEXTs or scans the QR Code on the Rider they will receive a Mini Property Site that they can view as well as TEXT message (if they texted) from you with your contact info as well as.</p>
        <p><strong>Reusable.</strong> Tired of ordering new riders for Listings all the time?  Our Sign Rider codes can be instantly moved to a different property at any point you choose (usually once sold) making the riders reusable.  This can all be done on the Properties Tab.  So an Agent can order just a few Riders from a Print Shop and then recycle them from one Listing to the next.</p>
        <p>Our automatically generated Property Sites work hand in hand with the Sign Riders, so check them out also!</p>
        <div class="whats-new-content-btn justify-content-start">
            <a href="/propsites-riders/" target="_blank" class="btn btn-primary mt-3">Check it out</a>
        </div>
        </div>
    </div>
    </div>
    <div class="container-fluid mx-auto text-center shadow p-4 rounded bg-white my-3">
    <h2 class="section-heading">New & Free! Lead Generating Property Sites</h2>
    <div class="row">
        <div class="col-12 col-md-3">
        <div class="lightbox-image">
            <img src="{{url('assets/images/propsite3.jpg')}}" alt="propsite3" title="propsite3" class="whats-new_sec-img">
        </div>
        <div class="lightbox-image">
            <img src="{{url('assets/images/propsite2.jpg')}}" alt="propsite2" title="propsite2" class="whats-new_sec-img">
        </div>
        <div class="lightbox-image">
            <img src="{{url('assets/images/propsite1.jpg')}}" alt="propsite1" title="propsite1" class="whats-new_sec-img">
        </div>
        <p class="lightbox-info mt-3 mx-auto mt-2 w-75">Click the Image to see a Larger Size</p>
        </div>
        <div class="whats-new-section-content col-12 col-md-9">
        <h4>Want even MORE leads?? Well, get ready. Introducing Property Sites...</h4>  
        <p>Every Property you add for an Open House or Event Automatically includes Beautiful Mini Property Sites in three different styles.</p>
        <p>These Property Sites also work hand in hand with our new re-useable Sign Riders.</p>
        <p>These sites are ready to use once a Property is added.  There are three different styles created so you can choose to use whichever one you think looks best for your purposes.  These sites not only look pretty but they are designed from the ground up to generate Agent's some serious leads.</p>
        <p>Now your Properties added here can go to work for you.</p>
        <img src="{{url('assets/images/propsite3-med.jpg')}}" class="whats-new-content-img_main">
        <p><strong>The Property Sites can Generate Leads on Social Media:- <img src="{{url('assets/images/facebook-twitter.gif')}}" class="social-icon"></strong></p>
        <p>These Property sites have built in Social Media sharing links and are designed to generate leads once you or a Visitor shares them to a favorite social media site.</p>
        <p>The Property Sites also work hand in hand with our Reusable Sign Riders.  When a Visitor TEXTs or Scans a QR Code on an Agent's Sign Rider they will be directed to a Mini Property Site.</p>
        <p>On the Mini Property Site the Visitor can view information on the Property, view a Property Slideshow, View the Agent Info and are also presented with a 'Get More Info' form.</p>
        <div class="whats-new-content-btn justify-content-start">
            <a href="/propsites-riders/" target="_blank" class="btn btn-primary mt-3">Check it out</a>
        </div>
        </div>
    </div>
    </div>
    <div class="container-fluid mx-auto text-center shadow p-4 rounded bg-white my-3">
    <h2 class="section-heading">Custom Flyers & New Flyer Designs for Individuals, Teams & Coop Partners</h2>
    <div class="row">
        <div class="col-12 col-md-3">
        <div class="lightbox-image">
            <img src="{{url('assets/images/Agent-Flyer-2022.jpg')}}" class="whats-new_sec-img">
        </div>
        <p class="lightbox-info mt-3 mx-auto mt-2 w-75">Click the Image to see a Larger Size</p>
        </div>
        <div class="whats-new-section-content col-12 col-md-9">
        <h3>Get your own Custom QR Code / Text Flyer for yourself or your Team.</h3>
        <h5>Also, more designs & colors are here! Way over a hundred different combinations are possible.</h5>
        <img src="{{url('assets/images/2022-flyers-small.jpg')}}" class="whats-new-content-img_main">
        <p>These new flyers still work the same way, your Visitors can choose to Text for Sign-In or scan the QRCODE.  </p>
        <p><strong>Check them out on the under the PROPERTIES, FLYERS & VISITORS Tab.</strong></p>
        <p>For Custom Flyers, get the Custom Flyer Add-on from here: <strong><a href="/open_house_lead/pages/create-flyer22-dt.php" target="_blank">Click Here</a></strong></p>
        <div class="whats-new-content-btn justify-content-start">
            <a href="/propsites-riders/" target="_blank" class="btn btn-primary mt-3">Check it out</a>
        </div>
        </div>
    </div>
    </div>
    <div class="container-fluid mx-auto text-center shadow p-4 rounded bg-white my-3">
    <h2 class="section-heading">Team Text & QRCode Flyers - (Printable)</h2>
    <div class="row align-items-center">
        <div class="col-12 col-md-3">
        <div class="lightbox-image">
            <img src="{{url('assets/images/Qrcode-Text-Team-Flyer.jpg')}}" class="whats-new_sec-img">
        </div>
        <p class="lightbox-info mt-3 mx-auto mt-2 w-75">Click the Image to see a Larger Size</p>
        </div>
        <div class="whats-new-section-content col-12 col-md-9">
        <p>NEW! Team Flyers. Easily generate a professional & beautiful TEXT or QRCODE Sign In Flyer for your next Open House. *More designs & colors coming soon!</p>
        <p>For those that pair up with another Agent for Open Houses the Team Flyer is for you.  Just choose your Team Partner, then a couple clicks later and your Team Flyer is generated.  Print it and display it at your Open House for Visitor Registration.</p>
        <p>Two Agent's Branding and Contact info are shown.  Both receive a copy of the Visitor registrations. And just like our other QR Code and Text Flyers, the Visitor details can also be sent to a Teams CRM or an Agent's or both.</p>
        <p>The Team Logo and Info are automatically added to the Flyer for you.</p>
        <p>Your Visitors can choose to Text for Sign-In or scan the QRCODE.</p>
        <p><strong>Check it out on the under the PROPERTIES, FLYERS & VISITORS Tab.</strong></p>
        <div class="whats-new-content-btn justify-content-start">
            <a href="/propsites-riders/" target="_blank" class="btn btn-primary mt-3">Check it out</a>
        </div>
        </div>
    </div>
    </div>
    <div class="container-fluid mx-auto text-center shadow p-4 rounded bg-white my-3">
    <h2 class="section-heading"><span>New & Improved</span> - Visitor Feedback Features Updated & Upgraded</h2>
    <div class="row">
        <div class="col-12 col-md-3">
        <div class="lightbox-image">
            <img src="{{url('assets/images/Qrcode-Text-Team-Flyer.jpg')}}" class="whats-new_sec-img">
        </div>
        <p class="lightbox-info mt-3 mx-auto mt-2 w-75">Click the Image to see a Larger Size</p>
        </div>
        <div class="whats-new-section-content col-12 col-md-9">
        <h3>Now you can enable Feedback for the QRCODE/Text Smartphone Registration page</h3>
        <h5>This allows you to capture visitor feedback without even having to ask for it!</h5>
        <div class="list-with-img">
            <div class="list-block">
            <p class="m-0"><strong>How it works:</strong></p>
            <ul>
                <li>After a Visitor Registers on their Smartphone they will see the ‘Add Feedback’ button.</li>
                <li>The Visitor can then add feedback on our easy and fast feedback form.</li>
                <li>You will receive an email with their Feedback and the Feedback is added to their Visitor details on Open House Wizard.</li>
                <li>You can also view feedback on the ‘View Sign-Ins’ page.</li>
                <li>After the Open you can generate a Visitor Feedback report in PDF format or download the feedback to a CSV or Excel format.</li>
            </ul>
            </div>
            <div class="img-block">
            <img src="{{url('assets/images/visitor-feedback.jpg')}}">
            </div>
        </div>               
        <p>To enable Feedback, enable Feedback under the Dashboard / Your Settings / Questions and Settings</p>
        <div class="whats-new-content-btn justify-content-start">
            <a href="#" target="_blank" class="btn btn-primary mt-3">Enable Feedback Now</a>
        </div>
        </div>
    </div>
    </div>
    <div class="container-fluid mx-auto text-center shadow p-4 rounded bg-white my-3">
    <h2 class="section-heading"><span>New</span> - Signed PDF Disclosures & Visitor Signature Capture</h2>
    <div class="row">
        <div class="col-12 col-md-3">
        <div class="lightbox-image">
            <img src="{{url('assets/images/signed-disclosures-sm.jpg')}}" alt="signed-disclosures-sm" title="signed-disclosures-sm" class="whats-new_sec-img">
        </div>
        <p class="lightbox-info mt-3 mx-auto mt-2 w-75">Click the Image to see a Larger Size</p>
        </div>
        <div class="whats-new-section-content col-12 col-md-9">
        <h3>If you are required to have a visitor view and sign disclosures before attending an Open House this can make life a LOT easier!</h3>
        <p>The Signed PDFs Add-on is now available and builds on our existing Disclosure capabilities. (See it on the Smartphone settings page.)</p>
        <p class="m-0"><strong>How it works:</strong></p>
        <ul>
            <li>Visitors are shown your disclosure text as well as links to view your PDF disclosures.</li>
            <li>The Visitor can then sign and proceed to the Open House Registration page.</li>
            <li>Visitors also have the option to have the signed PDF emailed to them as well.</li>
            <li>You can also view feedback on the ‘View Sign-Ins’ page.</li>
            <li>Agents can also opt to be copied on the signed PDF also.</li>
        </ul>             
        <p>To add it to your account, visit the Pricing page and you will see the Signed PDFs Add-on there. After ordering it, we will provide a form where you can upload your disclosure(s) and any instructions to support.</p>
        <div class="whats-new-content-btn justify-content-start">
            <a href="#" target="_blank" class="btn btn-primary mt-3">Check It Out</a>
        </div>
        </div>
    </div>
    </div>
    <div class="container-fluid mx-auto text-center shadow p-4 rounded bg-white my-3">
    <h2 class="section-heading"><span>New</span> - Easier Usability for the Forewarn App and other Security Apps</h2>
    <div class="row align-items-center">
        <div class="col-12 col-md-3">
        <div class="lightbox-image">
            <img src="{{url('assets/images/forewarn-logo-sm1.jpg')}}" alt="forewarn-logo-sm1" title="forewarn-logo-sm1" class="whats-new_sec-img">
        </div>
        <p class="lightbox-info mt-3 mx-auto mt-2 w-75">Click the Image to see a Larger Size</p>
        </div>
        <div class="whats-new-section-content col-12 col-md-9">
        <h3>This can make it a lot easier to use a Security App</h3>
        <p>Security is an important topic in Real Estate and the great news is that more and more state of the art security apps are being released all the time.</p>
        <p>We have added a feature to Copy a Visitors phone number so that it can be used in security apps such as Forewarn to speed up the lookup process.</p>
        <p>To use this feature, just open ‘View Visitors Live’ from the Dashboard, or login to Openhousewiz.com on your Smartphone. On the Visitors list you’ll see a new button labeled ‘Copy Visitor Phone Number’.  Click the button then switch to your Forewarn App or other security App and paste the number there on the lookup page.</p>
        <div class="whats-new-content-btn justify-content-start">
            <a href="/2021-forewarn-security-app/" target="_blank" class="btn btn-primary mt-3">Check It Out</a>
        </div>
        </div>
    </div>
    </div>
    <div class="container-fluid mx-auto text-center shadow p-4 rounded bg-white my-3">
    <h2 class="section-heading"><span>New</span> - Team Branding</h2>
    <div class="row align-items-center">
        <div class="col-12 col-md-3">
        <div class="lightbox-image">
            <img src="{{url('assets/images/Branded-smartphone-sm.jpg')}}" alt="Branded-smartphone-sm" title="Branded-smartphone-sm" class="whats-new_sec-img">
        </div>
        <p class="lightbox-info mt-3 mx-auto mt-2 w-75">Click the Image to see a Larger Size</p>
        </div>
        <div class="whats-new-section-content col-12 col-md-9 ">
        <h3>Perfect for Mortgage Professionals, Teams & Brokers.</h3>
        <p>Similar to our Coop Co-Branding Service except each Agent Partner receives their own Open House Wizard Subscription.</p>
        <p>The Team Branding Service allows the Team Owner’s branding and contact info to be automatically displayed to Visitors at Open Houses.  The dual branding contains the Real Estate Agent Team Member or Partner’s branding alongside the Team Owner or Broker’s branding.  This branding is in place on the Smartphone Visitor Registration page, the QRCODE / TEXT Flyers and the Welcome to the Open House email to name a few places.</p>
        <p>Visitor registration details are sent ‘Live’ as they occur to the hosting Agent as well as the Team Owner. They can also be sent to a CRM of choice.</p>
        <p>For Loan Pros and Home Loan Consultants who partner with Real Estate Agents for Open Houses this service can provide a valuable service for their partner agents as well as help them grow their own business at the same time. See more details on <a href="https://openhousewiz.com/teams2021/"><strong>our Team page</strong></a> or for pricing and <a href="https://openhousewiz.com/storew/#bteams"><strong>ordering info here.</strong></a></p>
        <div class="whats-new-content-btn justify-content-start">
            <a href="/2021-forewarn-security-app/" target="_blank" class="btn btn-primary mt-3">Check It Out</a>
        </div>
        </div>
    </div>
    </div>
    <div class="container-fluid mx-auto text-center shadow p-4 rounded bg-white my-3">
    <h2 class="section-heading"><span>New</span> - Properties, Events, Visitors & Flyers page. Manage them all in one place.</h2>
    <div class="row">
        <div class="col-12 col-md-3">
        <div class="lightbox-image">
            <img src="{{url('assets/images/prop-main.jpg')}}" alt="prop-main" title="prop-main" class="whats-new_sec-img">
        </div>
        <p class="lightbox-info mt-3 mx-auto mt-2 w-75">Click the Image to see a Larger Size</p>
        </div>
        <div class="whats-new-section-content col-12 col-md-9">
        <h3>Everything Flyers, Visitors, Opens and Events can be managed with ease. Here are some of the highlights:</h3>
        <p>Choose from multiple flyer designs including those with options for bedrooms, bathrooms and other property details with more designs being added all the time.</p>
        <ul>
            <li>View all of your Properties / Opens / Events and the number of registered visitors for each one.</li>
            <li>Add / Edit / Remove your saved Properties / Opens / Events.</li>
            <li>Flyer Images and other details are saved with the property.  Why is this great?  Well if you want to redo an open for a property on a future date & reprint a flyer, all of the flyer information is already saved.</li>
            <li>Add a unique Welcome Email with its own image and attachment to each property, open or event.</li>
            <li>Add unique Smartphone settings to each property, open or event.  These can include a custom thank you message after a Visitor registers as well as download links and/or files,  all shown on the Visitor’s smartphone.</li>
            <li>View / Edit and Manage Visitors for each  open or event.</li>
            <li>Download property specific QRCODEs that can be used for an Open or Event on your own flyer design.  Coming soon will be a Rider QRCODE that will show  your own property details page.</li>
        </ul>
        <div class="whats-new-content-btn justify-content-start">
            <a href="#" target="_blank" class="btn btn-primary mt-3">Check It Out</a>
        </div>
        </div>
    </div>
    </div>
    <div class="container-fluid mx-auto text-center shadow p-4 rounded bg-white my-3">
    <h2 class="section-heading"><span>New</span> - Coop / Branded Flyers and Coop / Partner Rosters with Branding.</h2>
    <div class="row">
        <div class="col-12 col-md-3">
        <div class="lightbox-image">
            <img src="{{url('assets/images/coop-flyer.jpg')}}" alt="coop-flyer" title="coop-flyer" class="whats-new_sec-img">
        </div>
        <p class="lightbox-info mt-3 mx-auto mt-2 w-75">Click the Image to see a Larger Size</p>
        </div>
        <div class="whats-new-section-content col-12 col-md-9">
        <h3>Everything Flyers, Visitors, Opens and Events can be managed with ease. Here are some of the highlights:  </h3>
        <p>Our Coop / Co-Branding Visitor Registration service is perfect for Loan Officers or for Agents who work within a small team and partner up for open houses.</p>
        <div class="list-with-img">
            <div class="list-block">
            <p class="mb-0">The new Coop Co-Branding service features some great improvements. Among them are:</p>
            <ul>
                <li>Coop / Co-Branding Flyers.  These can display both the host and a partner’s branding information.  Behind the scenes leads can be delivered to both parties of course.</li>
                <li>Another great feature will be the Coop Partner management page.  Here you can add, remove, change and activate coop partners.  Unlimited partners can be added as well.</li>
                <li>Coop Smartphone Visitor Registration page.  Visitors will be able to sign-in via Text or Qrcode on their smartphones and your co-branding will be shown on the page.</li>
            </ul>
            </div>
            <div class="img-block">
            <img src="{{url('assets/images/agent-management.jpg')}}">
            <p>Coop Agent Rosters</p>
            </div>
        </div>
        <div class="whats-new-content-btn justify-content-start">
            <a href="#" target="_blank" class="btn btn-primary mt-3">Check It Out</a>
        </div>
        </div>
    </div>
    </div>
    <div class="container-fluid mx-auto text-center shadow p-4 rounded bg-white my-3">
    <h2 class="section-heading"><span>New</span> - Custom Thank You Message with Links & Custom Disclosures</h2>
    <div class="row">
        <div class="col-12 col-md-3">
        <div class="lightbox-image">
            <img src="{{url('assets/images/smartphone-links-downloads.png')}}" alt="smartphone-links-downloads" title="smartphone-links-downloads" class="whats-new_sec-img">
        </div>
        <p class="lightbox-info mt-3 mx-auto mt-2 w-75">Click the Image to see a Larger Size</p>
        </div>
        <div class="whats-new-section-content col-12 col-md-9">
        <h3>Custom Thank You Message with Links & Custom Disclosures</h3>
        <p>Add a custom Thank You message that Visitors will see after registering for the open house on their smartphone. You can also include downloadable files or links to Tours or other content. <strong>Check it out on the left menu under: YOUR SETTINGS / SMARTPHONE</strong></p>
        <p><strong>Custom Disclosures or Disclaimers.</strong></p>
        <p>Add a Custom Disclosure (such as an Open House Covid Disclosure) that Visitors need to agree to before signing in. <strong>Check it out on the left menu under: YOUR SETTINGS / SMARTPHONE</strong></p>
        <p><strong>Custom Smartphone Sign-In Page</strong></p>
        <p>Now allows custom and additional questions as well as your Branding including Colors, Fonts and more.  Enable questions and branding on the Smartphone Settings page. <strong>Check it out on the left menu under: YOUR SETTINGS / SMARTPHONE</strong></p>
        <div class="whats-new-content-btn justify-content-start">
            <a href="#" target="_blank" class="btn btn-primary mt-3">Check It Out</a>
        </div>
        </div>
    </div>
    </div>
    <div class="container-fluid mx-auto text-center shadow p-4 rounded bg-white my-3">
    <h2 class="section-heading">Text & QRCode Flyer - (Printable)</h2>
    <div class="row align-items-center">
        <div class="col-12 col-md-3">
        <div class="lightbox-image">
            <img src="{{url('assets/images/flyer-modern-small.jpg')}}" alt="flyer-modern-small" title="flyer-modern-small" class="whats-new_sec-img">
        </div>
        <p class="lightbox-info mt-3 mx-auto mt-2 w-75">Click the Image to see a Larger Size</p>
        </div>
        <div class="whats-new-section-content col-12 col-md-9">
        <h3>NEW! Easily generate a professional & beautiful TEXT or QRCODE Sign In Flyer for your next Open House.</h3>
        <p class="mb-0">Use these amazing Sign-In tools with your favorite Sign-In page template.</p>
        <p class="mb-0">Enable or Disable this Feature on the Smartphone Settings page.</p>
        <p>So now your Visitors can choose to Text for Sign-In or scan the QRCODE.  This gives Visitors more flexibility on how they choose to sign-in.</p>
        <p><strong>Check it out on the under: FLYERS / PROPERTIES, or FAST QRCODE FLYERS.</strong></p>
        <div class="whats-new-content-btn justify-content-start">
            <a href="#" target="_blank" class="btn btn-primary mt-3">Check It Out</a>
        </div>
        </div>
    </div>
    </div>
</section>

@endsection