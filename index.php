<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Início</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
        <link rel="stylesheet" href="style/style.css">
    </head>
    <body>
        
        <div class="container mt-5 d-flex justify-content-center align-items-center" >
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-12">
                    <div id="regForm">
                        <img id="logo" src="img/safra-home.png" alt="safra">
                        <h2 class="title-home">Formulário para Antecipação do FGTS</h2>
                        <div class="mt-5 d-flex justify-content-center align-items-center">
                            <button type="button" style="color:#daa520" class="btn btn-outline-warning mb-3" onclick="pageForm()">Preencher Formulário</button>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        
        <script>
            function pageForm() {
                window.location.href = "formulario.php";
            }
        </script>
    </body>
</html>