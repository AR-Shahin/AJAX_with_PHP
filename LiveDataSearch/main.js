$(document).ready(function(){
    $('#search').keyup(function () {
        var search = $(this).val();
        if(search != ""){
            $.ajax({
                url:"inc/process.php",
                method:'POST',
                data:{search:search},
                datatype:"text",
                success:function (data) {
                    $('#searchTxt').html(data);
                }
            })
        }else {
            $('#searchTxt').html('');
        }
    })
});
