<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>signup</title>
  </head>
  <body>
        
            
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
            <form method="post"  enctype="multipart/form-data">
                 
                 
                 <div class="container">
                     <div class="row">
                        <div class="col-sm">
                            <div class="form-group">
                              <label for="uname">Name</label>
                              <input type="text" class="form-control" name="uname" id="uname">
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                              <label for="email">Email</label>
                              <input type="text" name="email" class="form-control" id="email" placeholder = "eg. yourname@gmail.com">
                             </div>
                 
                
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6">
                             <div class="form-group">
                                <label for="phone">Telephone</label>
                                <input type="text" name="pNumber" class="form-control" id="phone" placeholder = "eg. 0123456789">
                             </div>
                        </div>
                      </div>
                      
                       <div class="row">
                          <div class="col-sm">      
                             <div class="form-group">
                               <label for="password">Password</label>
                               <input type="password" class="form-control" name="pass" id="password">
                              </div>
                           </div>
                           <div class="col-sm"> 
           
                             <div class="form-group">
                                 <label for="passwordConfirm">Confirm Password</label>
                                 <input type="password" class="form-control" name="passwordConfirm" id="passwordConfirm">
                             </div>
                           </div>
                       </div>       
                     
                        <div class="row">
                          <div class="col-sm">    
                 
                             <div class="form-group">
                                 <label for="city">City</label>
                                 <input type="text"  class="form-control" name="city" id="city" >
                             </div>
                           </div>
                           <div class="col-sm">   
                              <div class="form-group">
                                 <label for="state">State</label>
                                 <input type="text" class="form-control" name="state" id="state" >
                              </div>
                            </div>
                        </div>    
                 
                        <div class="row">
                          <div class="col-6"> 
                              <div class="form-group">
                                  <label for="img">Image</label>
                                  <input type="file"  class="form-control" id="img" name="image" />
                             </div>
                          </div>
                        </div>  
                  <div class="form-group">
                   <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
           
            </div>

            </form>
            <div id="errorMessage"></div>
       
        
        <script src="valid.js"></script>

        
    </body>

</html>