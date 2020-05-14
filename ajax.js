$(document).ready(function(){
   $('#btn').click(function(){
       //Vamos a usar el AJAX
       $.ajax({
           //URL : Hace referencia a nuestro archivo consulta.php
            url : "consulta.php",
            type : "GET",
            dataType : "json",
            success : function(data){
                $('#resultado').append(data)
            }
       })
   })
})