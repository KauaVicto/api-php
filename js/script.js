$(document).ready(function () {

    $('#searce').on('keyup', function () {
        
        $.ajax({
            url: "teste.php",
            type: 'post',
            data: {
                valor: $('#searce').val()
            },
            success: function (response) {
                $('#resposta').html(response)
            },
            error: function(){
                alert('deu ruim!')
            }
        })

    })



})