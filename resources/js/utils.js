$(document).ready(function() {
    $('.instructionButton').click(function(event) {
        id = $(this).attr('instructionId');
        $.get("https://www.themealdb.com/api/json/v1/1/lookup.php?i=" + id, function(data, status) {
            if (status == 'success'){
                instructionFinal = data.meals[0].strInstructions;
                nameFinal = data.meals[0].strMeal;
                imgFinal = data.meals[0].strMealThumb;

                $('#instructionField').html(instructionFinal);
                $('#instructionModalLabel').html(nameFinal);
                $('#imgMealFinal').attr('src', imgFinal).attr('alt', nameFinal);
            }else{
                $('#instructionModalLabel').html('ERROR');
                $('#instructionField').html('Erro ao carregar! Tente novamente.');
                
            }
        }).done(function(){
            $('#instructionModal').modal('show');
        });
    });
});