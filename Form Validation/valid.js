            function isEmail(email) {
  
                var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  
                return regex.test(email);
                
            }
            
            $("form").submit(function(e){
                    e.preventDefault();
                
                var errorMessage = "";
                var fieldsMissing = "";


                if ($("#uname").val() == "") {
                    
                    fieldsMissing += "<br>user Name";
                    
                }
                
                if ($("#email").val() == "") {
                    
                    fieldsMissing += "<br>Email";
                    
                }
                
                if ($("#phone").val() == "") {
                    
                    fieldsMissing += "<br>Telephone";
                    
                }
                
                if ($("#password").val() == "") {
                    
                    fieldsMissing += "<br>Password";
                    
                }
                
                if ($("#passwordConfirm").val() == "") {
                    
                    fieldsMissing += "<br>Confirm Password";
                    
                }

                if ($("#city").val() == "") {
                    
                    fieldsMissing += "<br>City";
                    
                } 

                if ($("#state").val() == "") {
                    
                    fieldsMissing += "<br>Email";
                    
                }
                if ($("#img").val() == "") {
                    
                    fieldsMissing += "<br>Image";
                    
                }
                
                

                if (fieldsMissing != "") {
                    
                    errorMessage += "<p>The following field(s) are missing:" + fieldsMissing;
                    
                }
                
                if (isEmail($("#email").val()) == false) {
                    
                    
                    errorMessage += "<p>Your email address is not valid</p>";
                    
                }
                
                if ($.isNumeric($("#phone").val()) == false) {
                    
                    errorMessage += "<p>Your phone number is not numeric</p>"
                    
                }
                
                if ($("#password").val() != $("#passwordConfirm").val()) {
                    
                    errorMessage += "<p>Your passwords don't match</p>";
                    
                }
                
                if (errorMessage != "") {
                    
                      $("#errorMessage").html('<div class="alert alert-danger" role="alert"><p><strong>' + errorMessage + '</div>');
                  
                    
                } else {
                    
                    $("form").unbind("submit").submit();
                    
                    
                }
                
            });
            
           