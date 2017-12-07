<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Proyecto Redes</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
$(document).ready(function(){
    $("#prendido").click(function(){
        $.get("/led/1", function(data){
            alert("Ventilador Encendido");
        });
    });
});
</script>
 <script>
$(document).ready(function(){
    $("#apagado").click(function(){
        $.get("/led/0", function(data){
            alert("Ventilador Apagado");
        });
    });
});


</script>
<script>
            $(document).ready(function(){
                $("#info").click(function(){
                    $.get("/temp/", function(data){
                        alert(data);
                    });
                });
            });
        </script>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                color: #AACB30;
                font-size: 54px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 40px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
           

            <div class="content">
                <div class="title m-b-md">
                 
                  
  <h1> Controlador invernadero </ h1>

<br>
<br>

  <button id="prendido">  Encender ventilador </button>

  <button id="apagado">  Apagar ventilador </button>


  <button id="info">Mostrar temperatura y Humedad</button>

                </div>

                
            </div>
        </div>
    </body>
</html>
