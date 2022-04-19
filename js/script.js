$(document).ready(function(){

    $('#keyword').on('keyup', function(){
        $('.loader').show();

        $('#container').load('ajax/siswa.php?keyword=' + $('#keyword').val());
    });

});