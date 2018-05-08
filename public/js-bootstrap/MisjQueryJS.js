
/* ------------------------------------------ */
/*       CLASE ACTIVA MENU NAVEGACIÓN
/* Basicamente selecciona la clase activa según 
/*el href donde estemos. Por defecto pone el primer 
/* <a> como clase activa.
/* ------------------------------------------ */
$(document).ready(function(){
        var cambio = false;
        $('.nav li a').each(function(index) {
            if(this.href.trim() == window.location){
                $(this).addClass("active");
                cambio = true;
            }
        });
        if(!cambio){
            $('.nav a:first').addClass("active");
        }
        
}); 



/* ------------------------------------------ */
/*       MOSTRAR DIV OCULTO COMENTARIOS
/*  Script para mostrar u ocultar el div oculto
/* ------------------------------------------ */
    
    function mostrar(e, id){

        document.getElementById('flotante_'+id).style.display='block';

    }

    function cerrar(e, id){

        document.getElementById('flotante_'+id).style.display='none';

    }




/* ------------------------------------------ */
/*       MOSTRAR DIV OCULTO TAGS
/*  Script para mostrar u ocultar el div oculto
/* ------------------------------------------ */

    function mostrartags(e){

        document.getElementById('flotante').style.display='block';

    }

    function cerrartags(e){

        document.getElementById('flotante').style.display='none';

    }

