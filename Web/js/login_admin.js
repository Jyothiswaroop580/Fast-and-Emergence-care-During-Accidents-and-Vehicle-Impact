$(document).ready(function(){
    $("#submit").click(function(event){
        event.preventDefault();
        var email_js=$("#email").val();
        var password_js=$("#password").val();
        if(password_js.length<6){
            document.getElementById('exist').innerHTML="Enter valid password";
        }
        else{
            $.ajax({
                url: "php/Login_admin.php",
                type: "post",
                data: {email_js,password_js},
                dataType:"text",
                success:function(data){
                    var response=data;
                    if(response[response.length-1]==1){
                        document.getElementById('exist').innerHTML="Email does not exist!";
                    }
                    else if(response[response.length-1]==2){
                        document.getElementById('exist').innerHTML="Wrong password!";
                    }
                    else if(response[response.length-1]==3){
                        window.location="Admin.php";
                    }
                }
            });
        }
    });
});