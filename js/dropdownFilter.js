$(document).ready(function() {
    $('#make').on('change', function() {
        var make = this.value;
        $.ajax({
            url: "dependantDropdown.php",
            type: "POST",
            data: {
                make: make
            },
            cache: false,
            success: function(result) {
                $("#model").html(result);
            }
        });
    });

    $('.resetButton').click(function(){
        $('#model option:not(:first)').remove();
    });
});