<!-- jQuery -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<!-- <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{ asset('assets/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{ asset('assets/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{ asset('assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{ asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('assets/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{ asset('assets/plugins/moment/moment.min.js')}}"></script>
<script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{ asset('assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('assets/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('assets/dist/js/pages/dashboard.js')}}"></script>
<!-- custom js  -->
<script src="{{ asset('assets/plugins/custom-js/custom.js')}}"></script>
<script src="{{ asset('assets/js/dashboard-script.js')}}"></script>
<script>
  const reuse = (inpu_, prew_, text_) => {
    return inpu_.addEventListener('change', () => {
      if (inpu_.files !== undefined) {
        text_.innerText = inpu_.files[0].name;
        let blob = URL.createObjectURL(inpu_.files[0]);
        prew_.src = blob;
      }
    });
  }
  const inpu = document.getElementById('inpu')
  const prew = document.getElementById('showpre');
  const img_name = document.getElementById('img-name');
  reuse(inpu, prew, img_name);
  const inpu1 = document.getElementById('inpu1')
  const prew1 = document.getElementById('showpre1');
  const img_name1 = document.getElementById('img-name1');
  reuse(inpu1, prew1, img_name1);
  const inpu2 = document.getElementById('inpu2')
  const prew2 = document.getElementById('showpre2');
  const img_name2 = document.getElementById('img-name2');
  reuse(inpu2, prew2, img_name2);
  // Images for Flyers, Riders, Sites
  const inpu3 = document.getElementById('inpu3')
  const prew3 = document.getElementById('showpre3');
  const img_name3 = document.getElementById('img-name3');
  reuse(inpu3, prew3, img_name3);
  // Property Options
  const inpu4 = document.getElementById('inpu4')
  const prew4 = document.getElementById('showpre4');
  const img_name4 = document.getElementById('img-name4');
  reuse(inpu4, prew4, img_name4);
  const inpu5 = document.getElementById('inpu5')
  const prew5 = document.getElementById('showpre5');
  const img_name5 = document.getElementById('img-name5');
  reuse(inpu5, prew5, img_name5);
</script>

<script>
  // Your Team Page 

  //Delete Agent?
  // Get the modal
var modal = document.getElementById('delete-agent');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// scrooll off when pop up on 
setInterval(function () {
    if($(".modal").css("display") == "block"){
    $('body').addClass("o-hidden");
}else{
    $('body').removeClass("o-hidden");
}
}, 100);

document.addEventListener("DOMContentLoaded", () => {
  const content_box = document.querySelector('.email-address-content');
  function handleRadioClick() {
    if (document.getElementById('add-a-2nd-or-more-email-address-yes').checked) {
      content_box.style.display = 'block';
    } else {
      content_box.style.display = 'none';
    }
  }
  const radioButtons = document.querySelectorAll('.additional-email .switch-field input');
  radioButtons.forEach(radio => {
    radio.addEventListener('click', handleRadioClick);
  });
});

// Quick Settings Page

document.addEventListener("DOMContentLoaded", () => {
  const content_box11 = document.querySelector('.custom-questions-text-content');
  const content_box22 = document.querySelector('.custom-questions-radio-yn-content');
  content_box11.style.display = 'none';
  content_box22.style.display = 'none';
  function handleRadioClick() {
    if (document.getElementById('custom-questions-none').checked) {
      content_box11.style.display = 'none';
      content_box22.style.display = 'none';
    } else if (document.getElementById('custom-questions-text').checked) {
      content_box11.style.display = 'block';
      content_box22.style.display = 'none';
    }
    else{
      content_box22.style.display = 'block';
      content_box11.style.display = 'none';

    }
  }

  const radioButtons = document.querySelectorAll('.custom-questions input');
  radioButtons.forEach(radio => {
    radio.addEventListener('click', handleRadioClick);
  });
});


// --------------------------------------------------
// Quick Settings Page
document.addEventListener("DOMContentLoaded", () => {
  const content_box111 = document.querySelector('.custom-questions-2-text-content');
  const content_box222 = document.querySelector('.custom-questions-2-radio-yn-content');
  content_box111.style.display = 'none';
  content_box222.style.display = 'none';
  function handleRadioClick() {
    if (document.getElementById('custom-questions-2-none').checked) {
      content_box111.style.display = 'none';
      content_box222.style.display = 'none';
    } else if (document.getElementById('custom-questions-2-text').checked) {
      content_box111.style.display = 'block';
      content_box222.style.display = 'none';
    }
    else{
      content_box222.style.display = 'block';
      content_box111.style.display = 'none';

    }
  }

  const radioButtons = document.querySelectorAll('.add-custom-questions .custom-questions-2 input');
  radioButtons.forEach(radio => {
    radio.addEventListener('click', handleRadioClick);
  });
});

// Quick Settings Page
document.addEventListener("DOMContentLoaded", () => {
  const email_box = document.querySelector('.email-to-send-leads-to-yes-content');
  function handleRadioClick() {
    if (document.getElementById('email-to-send-leads-to-yes').checked) {
      email_box.style.display = 'block';
    } else {
      email_box.style.display = 'none';
    }
  }
  const radioButtons = document.querySelectorAll('.email-to-send-leads-to input');
  radioButtons.forEach(radio => {
    radio.addEventListener('click', handleRadioClick);
  });
});



// Add Disclosure Settings 
document.addEventListener("DOMContentLoaded", () => {
  const disclosure_box = document.querySelector('.add-disclosure-yes-content');
  function handleRadioClick() {
    if (document.getElementById('add-disclosure-yes').checked) {
      disclosure_box.style.display = 'block';
    } else {
      disclosure_box.style.display = 'none';
    }
  }
  const radioButtons = document.querySelectorAll('.add-disclosure-settings input');
  radioButtons.forEach(radio => {
    radio.addEventListener('click', handleRadioClick);
  });
});


// REMOVE DISCLOSURES 
document.addEventListener("DOMContentLoaded", () => {
  const remove_disclosures = document.querySelector('.remove-disclosures-yes-content');
  function handleRadioClick() {
    if (document.getElementById('remove-disclosures-yes').checked) {
      remove_disclosures.style.display = 'block';
    } else {
      remove_disclosures.style.display = 'none';
    }
  }
  const radioButtons = document.querySelectorAll('.remove-disclosures input');
  radioButtons.forEach(radio => {
    radio.addEventListener('click', handleRadioClick);
  });
});


// ========================================================

// CHOOSE A FLYER DESIGN*
$(document).ready(function() {
  $("select.my-select").change(function() {
      let selectedItem = $(this).children("option:selected").val();
      if(selectedItem == 'option_2'){
        $(".default-none").show();
      }else{
        $(".default-none").hide();
      }
      
    });
});



// smartphone Page Smartphone Setting tab 
$(document).ready(function() {
  $(".smartphone-setting .custom-color").hide();
  $(".smartphone-setting select.ny-select").change(function() {

      let selectedItem = $(this).children("option:selected").val();
      if(selectedItem == 'Custom'){
        $(".smartphone-setting .custom-color").show();
      }else{
        $(".smartphone-setting .custom-color").hide();
      }
      
    });
});


// Branding – Colors & Fonts tab 
$(document).ready(function() {
  $(".sign-in-form-main-background-color .custom-color").hide();
  $(".main-border-color .custom-color").hide();
  $(".sign-in-button-color .custom-color").hide();
  $(".sign-in-button-text-color .custom-color").hide();
  $(".sign-in-button-border-color .custom-color").hide();
  $(".choose-a-font-color .custom-color").hide();
  $(".qr-code-text-smartphone-page-color .custom-color").hide();
  $(".classic-pages-background-color .choose-a-color .custom-color").hide();
  // Advanced – Connect to CRM Page 
  $(".request-connection .not-in-list-below").hide();


    $(".sign-in-form-main-background-color select.my-select").change(function() {
        let selectedItem = $(this).children("option:selected").val();
        if(selectedItem == 'Custom'){
          $(".sign-in-form-main-background-color .custom-color").show();
        }else{
          $(".sign-in-form-main-background-color .custom-color").hide();
        }
      });

    $(".main-border-color select.my-select").change(function() {
      let selectedItem = $(this).children("option:selected").val();
      if(selectedItem == 'Custom'){
        $(".main-border-color .custom-color").show();
      }else{
        $(".main-border-color .custom-color").hide();
      }
    });

    $(".sign-in-button-color select.my-select").change(function() {
      let selectedItem = $(this).children("option:selected").val();
      if(selectedItem == 'Custom'){
        $(".sign-in-button-color .custom-color").show();
      }else{
        $(".sign-in-button-color .custom-color").hide();
      }
    });

    $(".sign-in-button-text-color select.my-select").change(function() {
      let selectedItem = $(this).children("option:selected").val();
      if(selectedItem == 'Custom'){
        $(".sign-in-button-text-color .custom-color").show();
      }else{
        $(".sign-in-button-text-color .custom-color").hide();
      }
    });

    $(".sign-in-button-border-color select.my-select").change(function() {
      let selectedItem = $(this).children("option:selected").val();
      if(selectedItem == 'Custom'){
        $(".sign-in-button-border-color .custom-color").show();
      }else{
        $(".sign-in-button-border-color .custom-color").hide();
      }
    });

    $(".choose-a-font-color select.my-select").change(function() {
      let selectedItem = $(this).children("option:selected").val();
      if(selectedItem == 'Custom'){
        $(".choose-a-font-color .custom-color").show();
      }else{
        $(".choose-a-font-color .custom-color").hide();
      }
    });

    $(".qr-code-text-smartphone-page-color select.my-select").change(function() {
      let selectedItem = $(this).children("option:selected").val();
      if(selectedItem == 'Custom'){
        $(".qr-code-text-smartphone-page-color .custom-color").show();
      }else{
        $(".qr-code-text-smartphone-page-color .custom-color").hide();
      }
    });
    
    $(".classic-pages-background-color .choose-a-color select.my-select").change(function() {
      let selectedItem = $(this).children("option:selected").val();
      if(selectedItem == 'Custom'){
        $(".classic-pages-background-color .choose-a-color .custom-color").show();
      }else{
        $(".classic-pages-background-color .choose-a-color .custom-color").hide();
      }
    });

    $(".request-connection select.request-connection-select").change(function() {
      let selectedItem = $(this).children("option:selected").val();
      if(selectedItem == 'Not in List Below'){
        $(".request-connection .not-in-list-below").show();
      }else{
        $(".request-connection .not-in-list-below").hide();
      }
    });

});


// account-dt.php page
var modal = document.getElementById('your-qr');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// visitor-add-edit.php Page

document.addEventListener("DOMContentLoaded", () => {
  const with_agent = document.querySelector('.with-agent-yes-content');
  with_agent.style.display = 'none';
  function handleRadioClick() {
    if (document.getElementById('with-agent-yes').checked) {
      with_agent.style.display = 'block';
    } else {
      with_agent.style.display = 'none';
    }
  }
  const radioButtons = document.querySelectorAll('.working-with-agent input');
  radioButtons.forEach(radio => {
    radio.addEventListener('click', handleRadioClick);
  });
});


// Account & Billing Page 
$(".biling-nav-tabs li.biling-nav-item a.nav-link").click(function() {
  $(".biling-nav-tabs li.biling-nav-item a.nav-link").removeClass('active');
});



// Create a QUICK Sign-In Flyer  

document.addEventListener("DOMContentLoaded", () => {
  const quick_create = document.querySelector('.quick-create-flyer-yes-content');
  const quick_create2 = document.querySelector('.quick-create-flyer-no-content');
  quick_create.style.display = 'none';
  function handleRadioClick() {
    if (document.getElementById('quick-create-flyer-yes').checked) {
      quick_create.style.display = 'block';
      quick_create2.style.display = 'none';
    } else {
      quick_create.style.display = 'none';
      quick_create2.style.display = 'block';
    }
  }
  const radioButtons = document.querySelectorAll('.quick-create-flyer input');
  radioButtons.forEach(radio => {
    radio.addEventListener('click', handleRadioClick);
  });
});


// Welcome Email / Text – Default Settings Page 

$(document).ready(function() {
  $(".welcome-email-text-settings .headline-color .custom-color").hide();
  $(".welcome-email-text-settings .headline-color select.my-select").change(function() {
      let selectedItem = $(this).children("option:selected").val();
      if(selectedItem == 'Custom'){
        $(".welcome-email-text-settings .headline-color .custom-color").show();
      }else{
        $(".welcome-email-text-settings .headline-color .custom-color").hide();
      }
    });


  $(".welcome-email-text-settings .headline-text-color .custom-color").hide();
  $(".welcome-email-text-settings .headline-text-color select.my-select").change(function() {
      let selectedItem = $(this).children("option:selected").val();
      if(selectedItem == 'Custom'){
        $(".welcome-email-text-settings .headline-text-color .custom-color").show();
      }else{
        $(".welcome-email-text-settings .headline-text-color .custom-color").hide();
      }
    });
});





//  drips-dt Page ====> TEST ALL DRIPS

document.addEventListener("DOMContentLoaded", () => {
  const drips_email = document.querySelector('.test-email-or-text-drips-email-content');
  const drips_text = document.querySelector('.test-email-or-text-drips-text-content');
  drips_email.style.display = 'none';
  function handleRadioClick() {
    if (document.getElementById('test-email-or-text-drips-email').checked) {
      drips_email.style.display = 'block';
      drips_text.style.display = 'none';
    } else {
      drips_email.style.display = 'none';
      drips_text.style.display = 'block';
    }
  }
  const radioButtons = document.querySelectorAll('.test-email-or-text-drips input');
  radioButtons.forEach(radio => {
    radio.addEventListener('click', handleRadioClick);
  });
});



//  drips-dt Page ====> Individual Text/Email Setup

document.addEventListener("DOMContentLoaded", () => {
  const as_email = document.querySelector('.enable-drip-1-as-email-content');
  const as_text = document.querySelector('.enable-drip-1-as-text-content');
  as_email.style.display = 'none';
  function handleRadioClick() {
    if (document.getElementById('enable-drip-1-as-email').checked) {
      as_email.style.display = 'block';
      as_text.style.display = 'none';
    } else if(document.getElementById('enable-drip-1-as-text').checked) {
      as_email.style.display = 'none';
      as_text.style.display = 'block';
    }else{
      as_email.style.display = 'none';
      as_text.style.display = 'none';
    }
  }
  const radioButtons = document.querySelectorAll('.enable-drip-1-as-email-or-text input');
  radioButtons.forEach(radio => {
    radio.addEventListener('click', handleRadioClick);
  });
});



//  drips-dt Page ====>  Enable Drip #1 as EMAIL or TEXT?

document.addEventListener("DOMContentLoaded", () => {
  const as_email = document.querySelector('.enable-drip-1-as-email-content');
  const as_text = document.querySelector('.enable-drip-1-as-text-content');
  as_email.style.display = 'none';
  as_text.style.display = 'none';
  function handleRadioClick() {
    if (document.getElementById('enable-drip-1-as-email').checked) {
      as_email.style.display = 'block';
      as_text.style.display = 'none';
    } else if(document.getElementById('enable-drip-1-as-text').checked) {
      as_email.style.display = 'none';
      as_text.style.display = 'block';
    }else{
      as_email.style.display = 'none';
      as_text.style.display = 'none';
    }
  }
  const radioButtons = document.querySelectorAll('.enable-drip-1-as-email-or-text input');
  radioButtons.forEach(radio => {
    radio.addEventListener('click', handleRadioClick);
  });
});

//  drips-dt Page ====> Enable Drip #2 as EMAIL or TEXT?

document.addEventListener("DOMContentLoaded", () => {
  const as_email2 = document.querySelector('.enable-drip-2-as-email-content');
  const as_text2 = document.querySelector('.enable-drip-2-as-text-content');
  as_email2.style.display = 'none';
  as_text2.style.display = 'none';
  function handleRadioClick() {
    if (document.getElementById('enable-drip-2-as-email').checked) {
      as_email2.style.display = 'block';
      as_text2.style.display = 'none';
    }
    else if(document.getElementById('enable-drip-2-as-text').checked) {
      as_email2.style.display = 'none';
      as_text2.style.display = 'block';
    }
    else{
      as_email2.style.display = 'none';
      as_text2.style.display = 'none';
    }
  }
  const radioButtons = document.querySelectorAll('.enable-drip-2-as-email-or-text input');
  radioButtons.forEach(radio => {
    radio.addEventListener('click', handleRadioClick);
  });
});

//  drips-dt Page ====> Enable Drip #3 as EMAIL or TEXT?

document.addEventListener("DOMContentLoaded", () => {
  const as_email3 = document.querySelector('.enable-drip-3-as-email-content');
  const as_text3 = document.querySelector('.enable-drip-3-as-text-content');
  as_email3.style.display = 'none';
  as_text3.style.display = 'none';
  function handleRadioClick() {
    if (document.getElementById('enable-drip-3-as-email').checked) {
      as_email3.style.display = 'block';
      as_text3.style.display = 'none';
    }
    else if(document.getElementById('enable-drip-3-as-text').checked) {
      as_email3.style.display = 'none';
      as_text3.style.display = 'block';
    }
    else{
      as_email3.style.display = 'none';
      as_text3.style.display = 'none';
    }
  }
  const radioButtons = document.querySelectorAll('.enable-drip-3-as-email-or-text input');
  radioButtons.forEach(radio => {
    radio.addEventListener('click', handleRadioClick);
  });
});

//  drips-dt Page ====> Enable Drip #3 as EMAIL or TEXT?

document.addEventListener("DOMContentLoaded", () => {
  const as_email4 = document.querySelector('.enable-drip-4-as-email-content');
  const as_text4 = document.querySelector('.enable-drip-4-as-text-content');
  as_email4.style.display = 'none';
  as_text4.style.display = 'none';
  function handleRadioClick() {
    if (document.getElementById('enable-drip-4-as-email').checked) {
      as_email4.style.display = 'block';
      as_text4.style.display = 'none';
    }
    else if(document.getElementById('enable-drip-4-as-text').checked) {
      as_email4.style.display = 'none';
      as_text4.style.display = 'block';
    }
    else{
      as_email4.style.display = 'none';
      as_text4.style.display = 'none';
    }
  }
  const radioButtons = document.querySelectorAll('.enable-drip-4-as-email-or-text input');
  radioButtons.forEach(radio => {
    radio.addEventListener('click', handleRadioClick);
  });
});

//  drips-dt Page ====> Enable Drip #3 as EMAIL or TEXT?

document.addEventListener("DOMContentLoaded", () => {
  const as_email5 = document.querySelector('.enable-drip-5-as-email-content');
  const as_text5 = document.querySelector('.enable-drip-5-as-text-content');
  as_email5.style.display = 'none';
  as_text5.style.display = 'none';
  function handleRadioClick() {
    if (document.getElementById('enable-drip-5-as-email').checked) {
      as_email5.style.display = 'block';
      as_text5.style.display = 'none';
    }
    else if(document.getElementById('enable-drip-5-as-text').checked) {
      as_email5.style.display = 'none';
      as_text5.style.display = 'block';
    }
    else{
      as_email5.style.display = 'none';
      as_text5.style.display = 'none';
    }
  }
  const radioButtons = document.querySelectorAll('.enable-drip-5-as-email-or-text input');
  radioButtons.forEach(radio => {
    radio.addEventListener('click', handleRadioClick);
  });
});

//  drips-dt Page ====> Enable Drip #3 as EMAIL or TEXT?

document.addEventListener("DOMContentLoaded", () => {
  const as_email6 = document.querySelector('.enable-drip-6-as-email-content');
  const as_text6 = document.querySelector('.enable-drip-6-as-text-content');
  as_email6.style.display = 'none';
  as_text6.style.display = 'none';
  function handleRadioClick() {
    if (document.getElementById('enable-drip-6-as-email').checked) {
      as_email6.style.display = 'block';
      as_text6.style.display = 'none';
    }
    else if(document.getElementById('enable-drip-6-as-text').checked) {
      as_email6.style.display = 'none';
      as_text6.style.display = 'block';
    }
    else{
      as_email6.style.display = 'none';
      as_text6.style.display = 'none';
    }
  }
  const radioButtons = document.querySelectorAll('.enable-drip-6-as-email-or-text input');
  radioButtons.forEach(radio => {
    radio.addEventListener('click', handleRadioClick);
  });
});

//  drips-dt Page ====> Enable Drip #3 as EMAIL or TEXT?

document.addEventListener("DOMContentLoaded", () => {
  const as_email7 = document.querySelector('.enable-drip-7-as-email-content');
  const as_text7 = document.querySelector('.enable-drip-7-as-text-content');
  as_email7.style.display = 'none';
  as_text7.style.display = 'none';
  function handleRadioClick() {
    if (document.getElementById('enable-drip-7-as-email').checked) {
      as_email7.style.display = 'block';
      as_text7.style.display = 'none';
    }
    else if(document.getElementById('enable-drip-7-as-text').checked) {
      as_email7.style.display = 'none';
      as_text7.style.display = 'block';
    }
    else{
      as_email7.style.display = 'none';
      as_text7.style.display = 'none';
    }
  }
  const radioButtons = document.querySelectorAll('.enable-drip-7-as-email-or-text input');
  radioButtons.forEach(radio => {
    radio.addEventListener('click', handleRadioClick);
  });
});

var modal = document.getElementById('open-address');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
