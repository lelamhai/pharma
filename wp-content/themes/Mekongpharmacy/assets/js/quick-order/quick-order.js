$( ".button-minus" ).click(function() {
    var id = $(this).data("id");
    var value = parseInt($("#value-"+id).val());
    if(value > 0)
    {
        value -= 1;
        $("#value-"+id).val(value);
    }
});

$( ".button-add" ).click(function() {
    var id = $(this).data("id");
    var value = parseInt($("#value-"+id).val());
    value += 1;
    $("#value-"+id).val(value);
});