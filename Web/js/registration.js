$(document).ready(function(){
    $("#submit").click(function(event){
        event.preventDefault();
        var name_js=$("#name").val();
        var number_js=$("#number").val();
        var email_js=$("#email").val();
        var password_js=$("#password").val();
        if(!name_js.match(/^[a-zA-z]*$/)){
            document.getElementById('exist').innerHTML="Email valid name";
        }
        else if(!number_js.match(/^[0-9]*$/) || number_js.length!=10){
            document.getElementById('exist').innerHTML="Enter valid number";
        }
        else if(password_js.length<6){
            document.getElementById('exist').innerHTML="Enter valid password";
        }
        else{
            $.ajax({
                url: "php/Registration.php",
                type: "post",
                data: {name_js,number_js,email_js,password_js},
                dataType:"text",
                success:function(data){
                    var response=data;
                    if(response[response.length-1]==1){
                        document.getElementById('exist').innerHTML="Email already exist!";
                    }
                    else if(response[response.length-1]==2){
                        window.location="Customer_Login.php";
                    }
                }
            });
        }
    });
});