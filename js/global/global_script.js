function loadNav() {
    $.post("nav/nav_main.php", {}, function (data) {
        $('#sampleid').html('');
        $('#sampleid').html(data);
    });
 
 }