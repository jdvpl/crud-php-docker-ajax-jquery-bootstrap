$(document).ready(function(){
    $.ajax({
        type:"GET",
        url:"php/get_users.php",
        success: function(data){
            $("#tabla").html(data)
        }
    })
})