<footer class="footer mt-auto fixed-bottom py-3 ">
    <div class="container">
        <span  class="text-light">&copy; Twitter Clone Website 2022</span>
    </div>
</footer>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha3/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalTitle">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class ="alert alert-danger" id="loginAlert"></div>
        <form>
           <input type="hidden" id="loginActive" name="loginActive" value="1">
  <div class="mb-3">
    <label for="email1" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" placeholder="Email address" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password">
  </div>
</form>
      </div>
      <div class="modal-footer">
        <a href="#" id="toggleLogin"> Sign up </a>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" id="loginSignUpButton" class="btn btn-primary">Login</button>
      </div>
    </div>
  </div>
</div>

 <script>
  
    $("#toggleLogin").click(function(){
        
        if ($("#loginActive").val() == "1") {
            
           $("#loginActive").val("0");
           $("#loginModalTitle").html("Sign Up");
           $("#loginSignUpButton").html("Sign Up");
           $("#toggleLogin").html("Login");
              
      } else {
            
           $("#loginActive").val("1");
           $("#loginModalTitle").html("Login");
           $("#loginSignUpButton").html("Login");
           $("#toggleLogin").html("Sign Up");
            
            
            
        }
 
    });
    
        $("#loginSignUpButton").click(function(){
            
        $.ajax({
              type:"POST",
              url:"actions.php?action=loginSignup",
              data:"email="+$("#email").val()+"&password="+$("#password").val()+"&loginActive="+$("#loginActive").val(),
              success:function(result){
                  
                if(result == "1"){
                    
                  window.location.assign("https://webdevbuilder.tech/12-twitter/"); 
                    
                    
                } else {
                    
                    $("#loginAlert").html(result).show();
                    
                    
                  }
                  
              }
              
            
          });  
              
            
     });
    
    
    $(".toggleFollow").click(function(){
        
            
      var id = $(this).attr("data-userId");

      $.ajax({
              type:"POST",
              url:"actions.php?action=toggleFollow",
              data:"userId="+$(this).attr("data-userId"),
              success:function(result){
                  
                if (result == "1") {
                    
                   $("a[data-userId= '" + id + "']").html("Follow"); 
                    
                } else if (result == "2") {
                    
                    
                  $("a[data-userId='" + id +"']").html("Unfollow"); 
                    
                }
                
                  
              }
              
            
          });       
        
        
    });
 
 
     $("#postTweetButton").click(function(){
         
        $.ajax({
              type:"POST",
              url:"actions.php?action=postTweet",
              data:"tweetContent=" + $("#tweetContent").val(),
              success:function(result){
                  
                if(result == "1") {
                    
                    $("#tweetSuccess").show();
                    $("#tweetFail").hide();
                    
                   } else if (result != "") {
                       
                    $("#tweetFail").html(result).show();   
                    $("#tweetSuccess").hide();
                    
                     }
                    
                 }
                
                  
              });
   
        });
 
 </script>

</body>
</html>