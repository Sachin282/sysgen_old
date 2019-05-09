$(document).ready(function(){
       
        $("#phone").change(function(e){
            var phone = $("#phone").val();
     if(phone.charAt(0)!=7 && phone.charAt(0)!=8 && phone.charAt(0)!=9 && phone.charAt(0)!=6)
     {
 $("#erphone").html("Invalid phone").show().fadeOut(3000);
       $("#phone").val('');
     }
     else
     {    
     }
      if(phone.length<10)
     {
       $("#erphone").html("Accepts 10 numbers").show().fadeOut(3000);
         $('#phone').val('');
     }
    })
    
    
    $("#phone").keypress(function(e){
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
               return false;
    }
 
   })
        
         $("#name").blur(function(){
                    var FIRST_NAME =$("#name").val();
                    var namechk = /^[a-z A-Z]+$/;
                    var rsname = namechk.test(FIRST_NAME);
                    if(rsname == false){
            $("#ername").html("Invalid User Name!").show().fadeOut(3000);
               $("#name").val('')
                         $("#signup").attr('disabled',true);
                           return false;
                       }else{
                       document.getElementById("errname").innerHTML = '';
                            $("#signup").attr('disabled',false);
                            return true;
                       }
                })
                
                $("#email").blur( function(){
            var EMAIL =$("#email").val();
            var patt = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
            var rsemail = patt.test(EMAIL);

            if(rsemail == false){
                        $("#ermail").html("Please enter correct email address.").show().fadeOut(3000);
                        $("#email").val('');
                 $("#signup").attr('disabled',false);
                        return false; 
                        
                   }else{
                    document.getElementById("errorun").innerHTML = '';
                        return true;
               }
   
            
        })

     $("#message").keypress(function(e){
     if (e.which == 8 || e.which == 0 || e.which == 32 || e.which == 46 || (e.which > 47 && e.which < 58) || (e.which > 64 && e.which <91) || (e.which > 96 && e.which < 123) || e.which == 33 || e.which == 63) {
               return true;
    }
    else{
    	return false;
    }
 
   })


     });
        



         var input = document.querySelector("#phone");
    window.intlTelInput(input, {
      // allowDropdown: false,
      // autoHideDialCode: false,
      // autoPlaceholder: "off",
      // dropdownContainer: document.body,
      // excludeCountries: ["us"],
      // formatOnDisplay: false,
      geoIpLookup: function(callback) {
        $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
          var countryCode = (resp && resp.country) ? resp.country : "";
          callback(countryCode);
        });
      },
      // hiddenInput: "full_number",
      initialCountry: "auto",
      // localizedCountries: { 'de': 'Deutschland' },
      // nationalMode: false,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      // placeholderNumberType: "MOBILE",
      // preferredCountries: ['us', 'in'],
      separateDialCode: true,
      utilsScript: "build/js/utils.js",
    });




    
        //  $("#CON_PASSWORD").blur(function(){
        // if($("#LOGIN_PASSWORD").val()!=$(this).val()){
        //         $('#erpass').html("Password and Confirm Password must be same!").show().fadeOut(6000);
        //         $("#CON_PASSWORD").val("");
        //         $(this).val("");
        //         $("#signup").attr('disabled',true);
        //         return false;
        // }
        // })      

    
        //  $("#LOGIN_PASSWORD").keydown(function(e){
        // if($("#LOGIN_PASSWORD").val().length>4){
        
        //       if($("#name").val()=='' || $("#contact").val()=='' || $("#EMAIL").val()=='' || $("#LOGIN_PASSWORD").val()=='' | $("#company").val()=='')
        //  {
        //     $('#erpass').html("Please fill all the Field.").show().fadeOut(6000);
        //     $("#signup").attr('disabled',true);
        // }   
        // else
        // {   
        //     $("#getotp").attr('disabled',false);
        //     $("#signup").attr('disabled',true);
        // }

        // }
        //      else{
        //          $("#signup").attr('disabled',true);
        //         $("#getotp").attr('disabled',true);
        //      }
        // })      



   // $("#CON_PASSWORD").blur(function(e){
   //      if($("#LOGIN_PASSWORD").val()==$(this).val()){
   //            if($("#USER").val()=='' || $("#contact").val()=='' || $("#EMAIL").val()=='' || $("#LOGIN_PASSWORD").val()=='' | $("#company").val()=='')
   //       {
   //          $('#erpass').html("Please fill all the Field.").show().fadeOut(6000);
   //          $("#signup").attr('disabled',true);
   //      }   
   //      else
   //      {   
   //          $("#getotp").attr('disabled',false);
   //          $("#signup").attr('disabled',true);
   //             $("#USER").attr('disabled',true);
   //          $("#contact").attr('disabled',true);
   //          $("#EMAIL").attr('disabled',true);
   //          $("#gstin").attr('disabled',true);
   //          $("#company").attr('disabled',true);
   //          $("#LOGIN_PASSWORD").attr('disabled',true);
   //          $("#CON_PASSWORD").attr('disabled',true);
   //      }
   //      }
   //  })
   //  $("#signup").click(function(){
   //           if($("#name").val()=='' || $("#phone").val()=='' || $("#email").val()=='')
   //               {
   //                    $("#signup").attr('disabled',true);
   //                  $('#error').html("Please fill all the Field.").show().fadeOut(6000);
   //               }
   //  })
   //  $("#getotp").click(function(){
   //      if($("#USER").val()=='' || $("#contact").val()=='' || $("#EMAIL").val()=='' || $("#LOGIN_PASSWORD").val()=='')
   //       {
   //       //   $('#error').html("Please fill all the Field.").show().fadeOut(6000);
   //          $("#signup").attr('disabled',true);
   //      }   
   //      else
   //      {   
   //          $("#USER").attr('disabled',true);
   //          $("#contact").attr('disabled',true);
   //          $("#EMAIL").attr('disabled',true);
   //          $("#gstin").attr('disabled',true);
   //          $("#LOGIN_PASSWORD").attr('disabled',true);
   //          $("#CON_PASSWORD").attr('disabled',true);    
   //          $("#company").attr('disabled',true);    
   //      }
   //  })
   //   $("#otpnumber").keypress(function(e){
   //       if($("#otpnumber").val().length>2)
   //           {
   //   $("#submit").attr('disabled',false);
   //           }
   //  })
    
   //  $("#getotp").click(function(){
   //   $("#signup").attr('disabled',false);
   //   $("#getotp").val('Resend');
        
   //  })
    
  // });

 

 //    $(document).ready(function(){

 //        $("#contact2").change(function(e){
 //            var phone = $("#contact2").val();
 //     if(phone.charAt(0)!=7 && phone.charAt(0)!=8 && phone.charAt(0)!=9 && phone.charAt(0)!=6)
 //     {
 // $("#erphone").html("Invalid phone").show().fadeOut(3000);
 //       $("#contact2").val('');
 //     }
 //     else
 //     {    
 //     }
 //      if(phone.length<10)
 //     {
 //       $("#erphone").html("Accepts 10 numbers").show().fadeOut(3000);
 //         $('#contact2').val('');
 //     }
 //    })
    
    
 //    $("#contact2").keypress(function(e){
 //     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
 //               return false;
 //    }
 
 //   })
   
 //   $("#USER2").blur(function(){
 //                    var FIRST_NAME =$("#USER2").val();
 //                    var namechk = /^[a-z A-Z]+$/;
 //                    var rsname = namechk.test(FIRST_NAME);
 //                    if(rsname == false){
 //            $("#ername").html("Invalid User Name!").show().fadeOut(3000);
 //               $("#USER2").val('')
 //                         $("#signup").attr('disabled',true);
 //                           return false;
 //                       }else{
 //                       document.getElementById("errname").innerHTML = '';
 //                            $("#signup").attr('disabled',false);
 //                            return true;
 //                       }
 //                })
 //        $("#EMAIL2").blur( function(){
 //            var EMAIL =$("#EMAIL2").val();
 //            var patt = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
 //            var rsemail = patt.test(EMAIL);

 //            if(rsemail == false){
 //                        $("#ermail").html("Please enter correct email address.").show().fadeOut(3000);
 //                        $("#EMAIL2").val('');
 //                 $("#signup").attr('disabled',false);
 //                        return false; 
                        
 //                   }else{
 //                    document.getElementById("errorun").innerHTML = '';
 //                        return true;
 //               }
   
            
 //        })
 //            $("#contact3").change(function(e){
 //            var phone = $("#contact3").val();
 //     if(phone.charAt(0)!=7 && phone.charAt(0)!=8 && phone.charAt(0)!=9 && phone.charAt(0)!=6)
 //     {
 // $("#erphone").html("Invalid phone").show().fadeOut(3000);
 //       $("#contact3").val('');
 //     }
 //     else
 //     {    
 //     }
 //      if(phone.length<10)
 //     {
 //       $("#erphone").html("Accepts 10 numbers").show().fadeOut(3000);
 //         $('#contact3').val('');
 //     }
 //    })
    
    
 //    $("#contact3").keypress(function(e){
 //     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
 //               return false;
 //    }
 
 //   })
   
 //   $("#USER3").blur(function(){
 //                    var FIRST_NAME =$("#USER3").val();
 //                    var namechk = /^[a-z A-Z]+$/;
 //                    var rsname = namechk.test(FIRST_NAME);
 //                    if(rsname == false){
 //            $("#ername").html("Invalid User Name!").show().fadeOut(3000);
 //               $("#USER3").val('')
 //                         $("#signup").attr('disabled',true);
 //                           return false;
 //                       }else{
 //                       document.getElementById("errname").innerHTML = '';
 //                            $("#signup").attr('disabled',false);
 //                            return true;
 //                       }
 //                })
 //        $("#EMAIL3").blur( function(){
 //            var EMAIL =$("#EMAIL3").val();
 //            var patt = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
 //            var rsemail = patt.test(EMAIL);

 //            if(rsemail == false){
 //                        $("#ermail").html("Please enter correct email address.").show().fadeOut(3000);
 //                        $("#EMAIL3").val('');
 //                 $("#signup").attr('disabled',false);
 //                        return false; 
                        
 //                   }else{
 //                    document.getElementById("errorun").innerHTML = '';
 //                        return true;
 //               }
   
            
 //        })
 //            $("#contact9").change(function(e){
 //            var phone = $("#contact9").val();
 //     if(phone.charAt(0)!=7 && phone.charAt(0)!=8 && phone.charAt(0)!=9 && phone.charAt(0)!=6)
 //     {
 // $("#erphone").html("Invalid phone").show().fadeOut(3000);
 //       $("#contact9").val('');
 //     }
 //     else
 //     {    
 //     }
 //      if(phone.length<10)
 //     {
 //       $("#erphone").html("Accepts 10 numbers").show().fadeOut(3000);
 //         $('#contact9').val('');
 //     }
 //    })
    
    
 //    $("#contact9").keypress(function(e){
 //     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
 //               return false;
 //    }
 
 //   })
   
 //   $("#USER9").blur(function(){
 //                    var FIRST_NAME =$("#USER9").val();
 //                    var namechk = /^[a-z A-Z]+$/;
 //                    var rsname = namechk.test(FIRST_NAME);
 //                    if(rsname == false){
 //            $("#ername").html("Invalid User Name!").show().fadeOut(3000);
 //               $("#USER9").val('')
 //                         $("#signup").attr('disabled',true);
 //                           return false;
 //                       }else{
 //                       document.getElementById("errname").innerHTML = '';
 //                            $("#signup").attr('disabled',false);
 //                            return true;
 //                       }
 //                })
 //        $("#EMAIL9").blur( function(){
 //            var EMAIL =$("#EMAIL9").val();
 //            var patt = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
 //            var rsemail = patt.test(EMAIL);

 //            if(rsemail == false){
 //                        $("#ermail").html("Please enter correct email address.").show().fadeOut(3000);
 //                        $("#EMAIL9").val('');
 //                 $("#signup").attr('disabled',false);
 //                        return false; 
                        
 //                   }else{
 //                    document.getElementById("errorun").innerHTML = '';
 //                        return true;
 //               }
   
            
 //        })

 //                  $("#phone0").change(function(e){
 //            var phone = $("#phone0").val();
 //     if(phone.charAt(0)!=7 && phone.charAt(0)!=8 && phone.charAt(0)!=9 && phone.charAt(0)!=6)
 //     {
 // $("#erphone").html("Invalid phone").show().fadeOut(3000);
 //       $("#phone0").val('');
 //     }
 //     else
 //     {    
 //     }
 //      if(phone.length<10)
 //     {
 //       $("#erphone").html("Accepts 10 numbers").show().fadeOut(3000);
 //         $('#phone0').val('');
 //     }
 //    })
    
    
 //    $("#phone0").keypress(function(e){
 //     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
 //               return false;
 //    }
 
 //   })
   
 //   $("#name0").blur(function(){
 //                    var FIRST_NAME =$("#name0").val();
 //                    var namechk = /^[a-z A-Z]+$/;
 //                    var rsname = namechk.test(FIRST_NAME);
 //                    if(rsname == false){
 //            $("#ername").html("Invalid User Name!").show().fadeOut(3000);
 //               $("#name0").val('')
 //                         $("#signup").attr('disabled',true);
 //                           return false;
 //                       }else{
 //                       document.getElementById("errname").innerHTML = '';
 //                            $("#signup").attr('disabled',false);
 //                            return true;
 //                       }
 //                })
 //        $("#email0").blur( function(){
 //            var EMAIL =$("#email0").val();
 //            var patt = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
 //            var rsemail = patt.test(EMAIL);

 //            if(rsemail == false){
 //                        $("#ermail").html("Please enter correct email address.").show().fadeOut(3000);
 //                        $("#email0").val('');
 //                 $("#signup").attr('disabled',false);
 //                        return false; 
                        
 //                   }else{
 //                    document.getElementById("errorun").innerHTML = '';
 //                        return true;
 //               }
   
            
 //        })

 //                  $("#contact4").change(function(e){
 //            var phone = $("#contact4").val();
 //     if(phone.charAt(0)!=7 && phone.charAt(0)!=8 && phone.charAt(0)!=9 && phone.charAt(0)!=6)
 //     {
 // $("#erphone").html("Invalid phone").show().fadeOut(3000);
 //       $("#contact4").val('');
 //     }
 //     else
 //     {    
 //     }
 //      if(phone.length<10)
 //     {
 //       $("#erphone").html("Accepts 10 numbers").show().fadeOut(3000);
 //         $('#contact4').val('');
 //     }
 //    })
    
    
 //    $("#contact4").keypress(function(e){
 //     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
 //               return false;
 //    }
 
 //   })
   
 //   $("#USER4").blur(function(){
 //                    var FIRST_NAME =$("#USER4").val();
 //                    var namechk = /^[a-z A-Z]+$/;
 //                    var rsname = namechk.test(FIRST_NAME);
 //                    if(rsname == false){
 //            $("#ername").html("Invalid User Name!").show().fadeOut(3000);
 //               $("#USER4").val('')
 //                         $("#signup").attr('disabled',true);
 //                           return false;
 //                       }else{
 //                       document.getElementById("errname").innerHTML = '';
 //                            $("#signup").attr('disabled',false);
 //                            return true;
 //                       }
 //                })
 //        $("#EMAIL4").blur( function(){
 //            var EMAIL =$("#EMAIL4").val();
 //            var patt = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
 //            var rsemail = patt.test(EMAIL);

 //            if(rsemail == false){
 //                        $("#ermail").html("Please enter correct email address.").show().fadeOut(3000);
 //                        $("#EMAIL4").val('');
 //                 $("#signup").attr('disabled',false);
 //                        return false; 
                        
 //                   }else{
 //                    document.getElementById("errorun").innerHTML = '';
 //                        return true;
 //               }
   
            
 //        })

 //                  $("#contact5").change(function(e){
 //            var phone = $("#contact5").val();
 //     if(phone.charAt(0)!=7 && phone.charAt(0)!=8 && phone.charAt(0)!=9 && phone.charAt(0)!=6)
 //     {
 // $("#erphone").html("Invalid phone").show().fadeOut(3000);
 //       $("#contact5").val('');
 //     }
 //     else
 //     {    
 //     }
 //      if(phone.length<10)
 //     {
 //       $("#erphone").html("Accepts 10 numbers").show().fadeOut(3000);
 //         $('#contact5').val('');
 //     }
 //    })
    
    
 //    $("#contact5").keypress(function(e){
 //     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
 //               return false;
 //    }
 
 //   })
   
 //   $("#USER5").blur(function(){
 //                    var FIRST_NAME =$("#USER5").val();
 //                    var namechk = /^[a-z A-Z]+$/;
 //                    var rsname = namechk.test(FIRST_NAME);
 //                    if(rsname == false){
 //            $("#ername").html("Invalid User Name!").show().fadeOut(3000);
 //               $("#USER5").val('')
 //                         $("#signup").attr('disabled',true);
 //                           return false;
 //                       }else{
 //                       document.getElementById("errname").innerHTML = '';
 //                            $("#signup").attr('disabled',false);
 //                            return true;
 //                       }
 //                })
 //        $("#EMAIL5").blur( function(){
 //            var EMAIL =$("#EMAIL5").val();
 //            var patt = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
 //            var rsemail = patt.test(EMAIL);

 //            if(rsemail == false){
 //                        $("#ermail").html("Please enter correct email address.").show().fadeOut(3000);
 //                        $("#EMAIL5").val('');
 //                 $("#signup").attr('disabled',false);
 //                        return false; 
                        
 //                   }else{
 //                    document.getElementById("errorun").innerHTML = '';
 //                        return true;
 //               }
   
            
 //        })

 //                  $("#contact6").change(function(e){
 //            var phone = $("#contact6").val();
 //     if(phone.charAt(0)!=7 && phone.charAt(0)!=8 && phone.charAt(0)!=9 && phone.charAt(0)!=6)
 //     {
 // $("#erphone").html("Invalid phone").show().fadeOut(3000);
 //       $("#contact6").val('');
 //     }
 //     else
 //     {    
 //     }
 //      if(phone.length<10)
 //     {
 //       $("#erphone").html("Accepts 10 numbers").show().fadeOut(3000);
 //         $('#contact6').val('');
 //     }
 //    })
    
    
 //    $("#contact6").keypress(function(e){
 //     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
 //               return false;
 //    }
 
 //   })
   
 //   $("#USER6").blur(function(){
 //                    var FIRST_NAME =$("#USER6").val();
 //                    var namechk = /^[a-z A-Z]+$/;
 //                    var rsname = namechk.test(FIRST_NAME);
 //                    if(rsname == false){
 //            $("#ername").html("Invalid User Name!").show().fadeOut(3000);
 //               $("#USER6").val('')
 //                         $("#signup").attr('disabled',true);
 //                           return false;
 //                       }else{
 //                       document.getElementById("errname").innerHTML = '';
 //                            $("#signup").attr('disabled',false);
 //                            return true;
 //                       }
 //                })
 //        $("#EMAIL6").blur( function(){
 //            var EMAIL =$("#EMAIL6").val();
 //            var patt = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
 //            var rsemail = patt.test(EMAIL);

 //            if(rsemail == false){
 //                        $("#ermail").html("Please enter correct email address.").show().fadeOut(3000);
 //                        $("#EMAIL6").val('');
 //                 $("#signup").attr('disabled',false);
 //                        return false; 
                        
 //                   }else{
 //                    document.getElementById("errorun").innerHTML = '';
 //                        return true;
 //               }
   
            
 //        })

 //                  $("#contact7").change(function(e){
 //            var phone = $("#contact7").val();
 //     if(phone.charAt(0)!=7 && phone.charAt(0)!=8 && phone.charAt(0)!=9 && phone.charAt(0)!=6)
 //     {
 // $("#erphone").html("Invalid phone").show().fadeOut(3000);
 //       $("#contact7").val('');
 //     }
 //     else
 //     {    
 //     }
 //      if(phone.length<10)
 //     {
 //       $("#erphone").html("Accepts 10 numbers").show().fadeOut(3000);
 //         $('#contact7').val('');
 //     }
 //    })
    
    
 //    $("#contact7").keypress(function(e){
 //     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
 //               return false;
 //    }
 
 //   })
   
 //   $("#USER7").blur(function(){
 //                    var FIRST_NAME =$("#USER7").val();
 //                    var namechk = /^[a-z A-Z]+$/;
 //                    var rsname = namechk.test(FIRST_NAME);
 //                    if(rsname == false){
 //            $("#ername").html("Invalid User Name!").show().fadeOut(3000);
 //               $("#USER7").val('')
 //                         $("#signup").attr('disabled',true);
 //                           return false;
 //                       }else{
 //                       document.getElementById("errname").innerHTML = '';
 //                            $("#signup").attr('disabled',false);
 //                            return true;
 //                       }
 //                })
 //        $("#EMAIL7").blur( function(){
 //            var EMAIL =$("#EMAIL7").val();
 //            var patt = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
 //            var rsemail = patt.test(EMAIL);

 //            if(rsemail == false){
 //                        $("#ermail").html("Please enter correct email address.").show().fadeOut(3000);
 //                        $("#EMAIL7").val('');
 //                 $("#signup").attr('disabled',false);
 //                        return false; 
                        
 //                   }else{
 //                    document.getElementById("errorun").innerHTML = '';
 //                        return true;
 //               }
   
            
 //        })

 //                  $("#contact8").change(function(e){
 //            var phone = $("#contact8").val();
 //     if(phone.charAt(0)!=7 && phone.charAt(0)!=8 && phone.charAt(0)!=9 && phone.charAt(0)!=6)
 //     {
 // $("#erphone").html("Invalid phone").show().fadeOut(3000);
 //       $("#contact8").val('');
 //     }
 //     else
 //     {    
 //     }
 //      if(phone.length<10)
 //     {
 //       $("#erphone").html("Accepts 10 numbers").show().fadeOut(3000);
 //         $('#contact8').val('');
 //     }
 //    })
    
    
 //    $("#contact8").keypress(function(e){
 //     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
 //               return false;
 //    }
 
 //   })
   
 //   $("#USER8").blur(function(){
 //                    var FIRST_NAME =$("#USER8").val();
 //                    var namechk = /^[a-z A-Z]+$/;
 //                    var rsname = namechk.test(FIRST_NAME);
 //                    if(rsname == false){
 //            $("#ername").html("Invalid User Name!").show().fadeOut(3000);
 //               $("#USER8").val('')
 //                         $("#signup").attr('disabled',true);
 //                           return false;
 //                       }else{
 //                       document.getElementById("errname").innerHTML = '';
 //                            $("#signup").attr('disabled',false);
 //                            return true;
 //                       }
 //                })
 //        $("#EMAIL8").blur( function(){
 //            var EMAIL =$("#EMAIL8").val();
 //            var patt = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
 //            var rsemail = patt.test(EMAIL);

 //            if(rsemail == false){
 //                        $("#ermail").html("Please enter correct email address.").show().fadeOut(3000);
 //                        $("#EMAIL8").val('');
 //                 $("#signup").attr('disabled',false);
 //                        return false; 
                        
 //                   }else{
 //                    document.getElementById("errorun").innerHTML = '';
 //                        return true;
 //               }
   
            
 //        })

   // });