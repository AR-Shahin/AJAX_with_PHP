$(document).ready(function(){
    $('#skill').keyup(function () {
        var skill = $(this).val();
        if(skill != ''){
            $.ajax({
                url : "inc/process.php",
                method : "POST",
                data :{skill:skill},
                success:function (data) {
                    $('#suggestTxt').fadeIn();
                    $('#suggestTxt').html(data);
                }
            })
        }
    });

    $(document).on('click','li',function () {
        $('#skill').val($(this).text());
        $('#suggestTxt').fadeOut();
    })

});
