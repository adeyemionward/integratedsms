    $(document).ready(function() {
      // ajax hanlder to register school
      $("#register_school").submit(function(e) {
        e.preventDefault();

        $("#message").html('<div class="progress"><div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:100%">registering</div></div>');

        var all = $(this).serialize();
         $.ajax({
            url:  "registration_handler.php",
            type: "POST",
            data: all,
            success: function(data){
                if (data==12) {
                    $("#message").html("<p class='alert alert-danger' style='color:red;'>School already registered</p>");
                }else if(data==13){
                    $("#message").html("<p class='alert alert-danger' style='color:red;'>Email already registered</p>");
                }else if(data == 1){
                  swal({
                        title: "Registration Successful",
                        text: "Redirecting to the Admin Dashboard",
                        type: "success",
                    });
                       setInterval(function(){
                    window.location.href="admin-dashboard";
                },2000)
                }else{
                  alert("Error: Failed");
                }
                    
            }
            })
      });

    })