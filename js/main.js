$('#form').on('submit',function(e){
    var url = $( this ).attr( "action" );
    e.preventDefault();
    $.post( url, $( this ).serialize(), success );
});

function success(data){
    data = JSON.parse(data);
    if(data['success']){
        $( "#form" ).animate({
            opacity: 0,
            height: 0
        }, 1500 ,function(){
            $( "#form").css('display', 'none');
            $('main').append("<span class='exito'>Gracias por realizar la encuesta!!</span>")
        });
    }else{
        $('.errors').addClass('show');
        var jsonData = data["message"];
        for(i in jsonData){
            var key = i;
            var val = jsonData[i];
            for(j in val){
                var sub_key = j;
                var sub_val = val[j];

                $('#list-error').append('<li> El campo ' + sub_key + ' : ' + sub_val + ' </li>');
            }

        }

    }
}
$('.close').on('click',function(){
    $('#list-error').text('');
    $('.errors').removeClass('show');
});
$('#formExcel').on('submit',function(e){
    //e.preventDefault();
    var url = $( this ).attr( "action" );
    $.post( url, $( this ).serialize(), successSubmit );
});
function successSubmit(data){

    data = JSON.parse(data);
    if(data['success']){
        location.reload();
    }else{
        alert('error');
    }
}