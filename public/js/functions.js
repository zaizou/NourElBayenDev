// CSRF protection

   $.ajaxSetup({
        headers: {
            'X-CSRF-Token': $('meta[name="csrf_token"]').attr('content')
        }
    });
 /*
        //Ripple
     * Waves Animation
     */
    (function(){
         Waves.attach('.btn:not(.btn-icon):not(.btn-float)');
         Waves.attach('.btn-icon, .btn-float', ['waves-circle', 'waves-float']);
        Waves.init();
    })();

 /*
  * Text Feild
  */

 //Add blue animated border and remove with condition when focus and blur
 if($('.fg-line')[0]) {
     $('body').on('focus', '.fg-line .form-control', function(){
         $(this).closest('.fg-line').addClass('fg-toggled');
     })

     $('body').on('blur', '.form-control', function(){
         var p = $(this).closest('.form-group, .input-group');
         var i = p.find('.form-control').val();

         if (p.hasClass('fg-float')) {
             if (i.length == 0) {
                 $(this).closest('.fg-line').removeClass('fg-toggled');
             }
         }
         else {
             $(this).closest('.fg-line').removeClass('fg-toggled');
         }
     });
 }

 //Add blue border for pre-valued fg-flot text feilds
 if($('.fg-float')[0]) {
     $('.fg-float .form-control').each(function(){
         var i = $(this).val();

         if (!i.length == 0) {
             $(this).closest('.fg-line').addClass('fg-toggled');
         }

     });
 }

 //Add blue border for pre-valued fg-flot text feilds
 if($('.fg-float')[0]) {
     $('.fg-float .form-control').each(function(){
         var i = $(this).val();

         if (!i.length == 0) {
             $(this).closest('.fg-line').addClass('fg-toggled');
         }

     });
 }


 /*
  * Date Time Picker
  */

 //Date Time Picker
 if ($('.date-time-picker')[0]) {
     $('.date-time-picker').datetimepicker();
 }

 //Time
 if ($('.time-picker')[0]) {
     $('.time-picker').datetimepicker({
         format: 'TL'

     });
 }

 //Date
 if ($('.date-picker')[0]) {
     $('.date-picker').datetimepicker({
         format: 'DD/MM/YYYY'
     });
 }


 /*
  * Skin Change
  */
 $('body').on('click', '[data-skin]', function() {
     var currentSkin = $('[data-current-skin]').data('current-skin');
     var skin = $(this).data('skin');

     $('[data-current-skin]').attr('data-current-skin', skin)

 });


  /* --------------------------------------------------------
        Scrollbar
    -----------------------------------------------------------*/
    function scrollBar(selector, theme, mousewheelaxis) {
        $(selector).mCustomScrollbar({
            theme: theme,
            scrollInertia: 100,
            axis:'yx',
            mouseWheel: {
                enable: true,
                axis: mousewheelaxis,
                preventDefault: true
            }
        });
    }

    if (!$('html').hasClass('ismobile')) {
        //On Custom Class
        if ($('.c-overflow')[0]) {
            scrollBar('.c-overflow', 'minimal-dark', 'y');
        }
    }





/* JQUERY Validator examples
$(document).ready(function(){
    var response;
    $.validator.addMethod(
        "uniqueUserName", 
        function(value, element) {
            $.ajax({
                type: "POST",
                url: "http://"+location.host+"/checkUser.php",
                data: "checkUsername="+value,
                dataType:"html",
                success: function(msg)
                {
                    //If username exists, set response to true
                    response = ( msg == 'true' ) ? true : false;
                }
             });
            return response;
        },
        "Username is Already Taken"
        
    );});

// add a method. calls one built-in method, too.
jQuery.validator.addMethod("optdate", function(value, element) {
        return jQuery.validator.methods['date'].call(
            this,value,element
        )||value==("0000/00/00");
    }, "Please enter a valid date."
);

// connect it to a css class
jQuery.validator.addClassRules({
    optdate : { optdate : true }    
});



*/

// add a method. calls one built-in method, too.
jQuery.validator.addMethod("optdate", function(value, element) {
        return jQuery.validator.methods['date'].call(
            this,value,element
        )||value==("0000/00/00");
    }, "Please enter a valid date."
);

// connect it to a css class
jQuery.validator.addClassRules({
    optdate : { optdate : true }    
});



function verifyGeneralInforsInput(){
   $(".selector").validate({
  rules: {
    name: {
      required: true,
      minlength: 2
    }
  },
  messages: {
    name: {
      required: "We need your email address to contact you",
      minlength: jQuery.validator.format("At least {0} characters required!")
    }
  }
});
    return 1;
}




/*login Interface */
//handling loging click
var interfacesCpt=0;
$( document ).ready(function() {
    
    $("a.btn.btn-login.btn-danger.btn-float").click(function(){
        //General Information Interface
        
        if(!interfacesCpt){
            //alert(interfacesCpt);
            var correct=verifyGeneralInforsInput();
            if(correct){
            $("#f-genaral-infos").removeClass();
            $("#f-genaral-infos").toggleClass("lc-block");
            $("#f-add-infos").removeClass();
            $("#f-add-infos").toggleClass("lc-block toggled");
            interfacesCpt++;
        }
        
        
        }
        //additionnal Information Interface
        else{

            /*var queryString = $('#test').formSerialize();
            alert(queryString);
            $.post('/register', queryString); 
            */
            
            $('form').submit();
            
        }
        
        
 });
 
 
});
 
 
 $("li.bgm-green").click(function(){
    $("#l-forget-password").removeClass();
    $("#l-forget-password").toggleClass("lc-block");
    $("#l-login").removeClass();
     $("#l-login").toggleClass("lc-block toggled");
 });
 
 $("li.bgm-orange").click(function(){
     $("#l-login").removeClass();
     $("#l-login").toggleClass("lc-block");
     $("#l-forget-password").removeClass();
     $("#l-forget-password").removeClass();
     $("#l-forget-password").toggleClass("lc-block toggled");
 });
 
 
  $("li.bgm-red").click(function(){
        window.location.href = "/auth/register";
 });
 
 /*Jquery Validation*/
 
 
 jQuery.validator.addMethod("issm", function( value, element ) {
		var result = this.optional(element) || value.length < 0;
		if (!result) {
			element.value = "";
			var validator = this;
			setTimeout(function() {
				validator.blockFocusCleanup = true;
				element.focus();
				validator.blockFocusCleanup = false;
			}, 1);
		}
		return result;
	}, "Erreur fl ISSM.");
 
 
/*
 
 $("#f-genaral-infos > a.btn.btn-login.btn-danger.btn-float.waves-effect.waves-circle.waves-float").click(function(){
     
    
		
     
 });*/
 
 
 
 