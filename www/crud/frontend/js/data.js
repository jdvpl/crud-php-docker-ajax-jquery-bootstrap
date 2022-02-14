$(document).ready(function(){
    $.ajax({
        type:"GET",
        url:"backend/get_users.php",
        success: function(data){
            $("#tabla").html(data)
        }
    })
})