$(document).ready(function(){

    $('#btnSend').click(function(){

        var errores = '';

        if( $('#name').val() == '' ){
            errores += '<p>Escriba un nombre</p>';
            $('#name').css("border-bottom-color", "#F14B4B")
        } else{
            $('#name').css("border-bottom-color", "#d1d1d1")
        }

        if( $('#apellido').val() == '' ){
            errores += '<p>Escriba un apellido</p>';
            $('#apellido').css("border-bottom-color", "#F14B4B")
        } else{
            $('#apellido').css("border-bottom-color", "#d1d1d1")
        }

        if( errores == '' == false){
            var mensajeModal = '<div class="modal_wrap">'+
                                    '<div class="mensaje_modal">'+
                                        '<h3>Errores encontrados</h3>'+
                                        errores+
                                        '<span id="btnClose">Cerrar</span>'+
                                    '</div>'+
                                '</div>'

            $('body').append(mensajeModal);

        }else{
            var datos=$('#frmajax').serialize();
                    $.ajax({
                        type:"POST",
                        url:"php/insertar.php",
                        data:datos,
                        success:function(r){
                           if(r==1){
                                alert("agregado con exito");
                                
                            }else{
                                alert("Fallo el server");
                            }
                        }
                    });

                    

            return false;
        }

        $('#btnClose').click(function(){
            $('.modal_wrap').remove();
        });
    });

});
