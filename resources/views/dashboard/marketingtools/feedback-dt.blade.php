@extends('layouts.master')
@section('content')
      <div class="bg-black-50 welcome-email-text-default-settings">
        <section class="d-flex h-100vh p-4">
          <div class="container-fluid bg-white m-auto text-center shadow p-3 rounded">
            <div class="text-start">
                <h4><b>Tools – Feedback</b></h4>
                <div class="row my-4 align-items-center bg-blue p-3">
                    <div class="col-3">
                        <img class="img-fluid w-100" src="{{url('assets/images/Feedback-REPORT.jpg')}}" alt="">
                    </div>
                    <div class="col-9 ps-3">
                        <h5 class="fw-bold mb-2">Generate Automatic or Custom Seller Feedback Reports</h5>
                        <h5 class="mb-2">Once you have collected Feedback from Open House Visitors, the Sellers Feedback Report is a Great Tool to Easily Generate a Report to Send to your Sellers…</h5>
                        <hr>
                        <h5 class="fw-bold mb-2">Here you Can:</h5>
                        <ul>
                            <li>Generate an Automatic PDF Feedback Report</li>
                            <li>Add Your Own Custom Message to the Seller on the Report</li>
                            <li>Edit or ‘Fixup’ any of the Visitor Entries before Generating the Reports
                                <li>Print the Feedback Report</li>
                                <li>Export Feedback to Excel or CSV to Create Your Own Custom Report</li>
                            </li>
                        </ul>
                    </div>
                </div>
                <div>
                    <h4><b>  To Get Started:</b></h4>
                    <h5><a href="#">1st – Checkout ‘How to Get & Use Visitor Feedback’ & Generate a Feedback Report</a></h5>
                    <h5 class="fw-bold">Then –</h5>
                    <ul class="s-3">
                        <li>
                        Add your (Optional) Message for the Seller to the Report Below
                        </li>
                        <li>Run the Report
                            <ul>
                                <li>
                                Click <b>Today</b> for an Open you ran Today
                                </li>
                                <li>
                                Click <b>Sunday</b> for an Open run last Sunday
                                </li>
                                <li>
                                Click <b>Saturday</b> for an Open run last Saturday
                                </li>
                            </ul>
                        </li>
                        <li>After that, Choose PDF, Excel, Print or CSV on the Report page</li>
                    </ul>
                </div>
                <div class="row my-4">
                    <form class="border-dashed p-3" action="">
                        <h5 class="text-start fw-bold">(Optional) You can add the Open's Address and any Notes to be included for the Seller here.</h5>
                        <textarea class="text-editor-code"></textarea>
                        <div class="col-12 m-auto text-center">
                        <button class="btn btn-primary px-5  mt-2" type="submit" name="">
                            <h3 class="mb-0">SUBMIT</h3>
                        </button>
                    </div>
                    </form>
                </div>
                <div class="">
                    <h4 class="fw-bold">Choose Your Report:</h4>
                    <div class="d-flex my-3">
                        <a class="btn btn-primary px-2" href="#"><i class="fas fa-copy"></i>  FEEDBACK REPORT for an OPEN YOU DID TODAY</a><br>
                        <a class="btn btn-primary px-2 mx-md-2 mx-3" href="#"><i class="fas fa-file-csv"></i>  FEEDBACK REPORT for an OPEN YOU DID SATURDAY</a><br>
                        <a class="btn btn-primary px-2" href="#"><i class="fas fa-save"></i>  FEEDBACK REPORT for an OPEN YOU DID SUNDAY</a><br>
                    </div>
                    <h5><b>IMPORTANT</b>: If you wish to do more advanced editing like deleting entries & more, please use the Visitors & Leads Management tool (shown on a Tab above) before running the Feedback Report.</h5>
                </div>
              </div>
          </div>
        </section>
      </div>
@endsection
