$(document).ready(function(){
    $('#username').blur(function () {
        var username = $(this).val();
        if(username == ''){
            alert("Field Must not be empty!");
        }else {
            $.ajax({
                url : "inc/process.php",
                method :"POST",
                data:{username : username},
                dataType : "text",
                success:function (data) {
                    $('#checkTxt').html(data);
                }

            })
        }

    })
});
