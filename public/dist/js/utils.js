$(document).ready(function() {
    $('.instructionButton').click(function(event) {
        id = $(this).attr('instructionId');
        $.get("https://www.themealdb.com/api/json/v1/1/lookup.php?i=" + id, function(data, status) {
            if (status == 'success'){
                responseFinal = JSON.stringify(data.meals[0].strInstructions);
                $('#instructionField').html(responseFinal);
            }else{
                $('#instructionField').html('Erro ao carregar! Tente novamente.');
                
            }
        }).done(function(){
            $('#instructionModal').modal('show');
        });
    });
});