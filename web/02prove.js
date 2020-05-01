$(function() {
    $('#hoverhide').hover(function() { 
        $('#showNumber').fadeOut("slow");
        $('#hoverhide').fadeOut("slow"); 
    }, function() {
        $('#showNumber').fadeIn("slow");
        $('#hoverhide').fadeIn("slow"); 
    });
    });
  
$(document).ready(function() {
    setInterval(timestamp, 1000);
});
    
function timestamp() {
    $.ajax({
        url: 'http://localhost/timestamp.php',
        success: function(data) {
            $('#timestamp').html(data);
        },
    });
}            