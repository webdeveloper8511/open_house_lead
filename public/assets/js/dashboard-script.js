document.addEventListener("DOMContentLoaded", () => {
    const box = document.querySelector('.phone-thnk-content');
    function handleRadioClick() {
      if (document.getElementById('smartphone-thankyou-yes').checked) {
        box.style.display = 'block';
      } else {
        box.style.display = 'none';
      }
    }
    const radioButtons = document.querySelectorAll('.Smartphone-page-setting .switch-field input');
    radioButtons.forEach(radio => {
      radio.addEventListener('click', handleRadioClick);
    });
  
    $(".nav-link").click(function(){
      var tab_id = $(this).attr('id');
      $('.tab-content').each(function(){
          if($(this).attr('aria-labelledby') == tab_id){
            $(this).find('.data-content .content-field').show();
          }
      });
    });
  
    $(".tab-content .tab-pane .data-type .radio-btn input").click(function(){
      if($(this).hasClass('none')){
        $(this).parents('.tab-pane').find('.data-content .content-field').hide();
      }else if($(this).hasClass('link')){
        $(this).parents('.tab-pane').find('.data-content .description').show();
        $(this).parents('.tab-pane').find('.data-content .youtube_link').show();
        $(this).parents('.tab-pane').find('.data-content .upload_file').hide();
      }else{
        $(this).parents('.tab-pane').find('.data-content .description').show();
        $(this).parents('.tab-pane').find('.data-content .youtube_link').hide();
        $(this).parents('.tab-pane').find('.data-content .upload_file').show();
      }
    });
  
    $(".multistep-form-footer .multistep-button:not(.multistep_submit)").click(function(){
      var multistep_id = $(this).attr('id');
      $(".mutliform-step").hide();
      $(".mutliform-step."+multistep_id).show();
    });
  
    $(".quickstart-addimage").on('click', function() {
      $(this).next().addClass('model-open');
      $("body").addClass('scroll-stop');
    }); 
    $(".quickstart-addimage-model .close-btn, .quickstart-addimage-model .bg-overlay").click(function(){
      $(".quickstart-addimage-model").removeClass('model-open');
      $("body").removeClass('scroll-stop');
    });
   
  });
  