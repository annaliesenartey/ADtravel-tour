function change(){
    var txt=document.getElementById("I").innerHTML;
    document.getElementById("form32").value=txt;
}

$(function() {
    $('input[name="type"]').on('click', function() {
        if ($(this).val() == 'Experienced') {
            $('#textboxes').show();
        }
        else {
            $('#textboxes').hide();
        }
    });
});