$('#tampil').load("tampil.php");
$(document).ready(function(){
    // input
    $("#input").submit(function(event){
        event.preventDefault(); //mencegah terjadinya aksi default
        var url = $("#input").attr('action');
        $.ajax({
            url: url,
            type: 'POST',
            data: $("#input").serialize(),
            datatype: 'json',
            success: function(data){
                    $('#tampil').load("tampil.php");
                    document.getElementById("input").reset();
            }
        });
    });
});