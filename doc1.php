<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pruebas</title>
</head>
<body>
    <h1>Documento de prueba</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <input type="text" name="" class="clase">
            </div>
            <div class="col-md-4">
                <input type="text" name="" class="clase">
            </div>
            <div class="col-md-4">
                <input type="text" name="" class="clase">
            </div>
        </div>
    </div>
    
    <script>
        $(document).ready(function(){

            $('.clase').keyup(function(){
                console.log($(this).val());
            });
        });
    </script>
</body>
</html>