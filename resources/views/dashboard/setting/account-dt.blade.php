@extends('layouts.master')
@section('content')
    <section class=" d-flex h-100vh p-4 bg-black-50">
      <div class="container-fluid m-auto bg-white shadow p-4 rounded">
        <div class="row text-left px-3">
          <h3 class="fw-bold mb-3">Account & Billing</h3>
          <a href="billing.php"><h5>Billing, Payments and Your Account</h5></a>
          <a href="billing-lost-password.php"><h5>Change Password</h5></a>
          <a href=""><h5>Cancel & Delete Account</h5></a>
          <p>For Visitor Registration on your own Flyers or other Marketing, your personal QRCODE & Text codes are</p>
        </div>
        <div class="px-3">
            <a class="btn btn-primary" href="#" onclick="document.getElementById('your-qr').style.display='block'"> YOUR QRCODE </a>
        </div>
        <div class="row p-3">
            <h4 class="fw-bold">Your Text Code is: 3751</h4>
            <h4 class="mb-3 fw-bold">Texting Phone Number: 888-680-8357</h4>
            <h6>*If using these, to tag Visitors to a property, add the address under SETTINGS/YOUR DETAILS.</h6>
            <h6>Please Note: This is your personal QRCODE, so is not tied to a specific property. To use property specific QRCODEs go to the Properies & Visitors page.</h6>
        </div>
      </div>
    </section>
      <!-- QR Popoup -->
      <div id="your-qr" class="modal">
      <form class="modal-content" action="/action_page.php">
      <span onclick="document.getElementById('your-qr').style.display='none'" class="close" title="Close Modal">×</span>
        <div class="container py-4 px-3 text-center">
          <h3><b>Your QRCODE</b></h3>
                <img class="img-fluid mb-3" src="./images/yourqr.png" alt="">
          <div class="clearfix mb-3 ">
            <a class="btn btn-primary" href="https://webdevelopment33.com/open_house_lead/pages/images/yourqr.png" download> DOWNLOAD QR CODE</a>
          </div>
        </div>
      </form>
    </div>
      </div>
    </div>
@endsection

