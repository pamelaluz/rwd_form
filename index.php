<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Formulario</title>
    <style>
    *{
            margin: 0;
            padding: 0;
        }
        .container{
            background-image: linear-gradient(45deg,gray,blue) ;
            height: 100%;
            color: blue;
            font-family: Georgia, 'Times New Roman', Times, serif;
            text-align: center;
        }
        .Formulario{
            position: absolute;
            background-color: rgba(0, 0,0, 0.3);
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            border-radius: 15px;
            padding: 15px;
        }
        .full-box{
          width: 100px;
          height: 400px;
          font-size: 25px;
          cursor: pointer;
          color: gray;
          margin: 2px; 
        }
        .half-boxspacing{
          width: 100px;
          height: 20px;
          font-size: 25px;
          cursor: pointer;
          color: blue;
          margin: 2px;
          }

    </style>
</head>
<body> 
    <div class="container">
         <div class=Formulario>
    <h1> Chamado Synergy Impex</h1>
        <form method="POST" action = "meus_dados.php"> 

             <div class ="full-box">
             <div class= "half-box spacing">
             <label for="e-mail">E-mail</label>
             <input type="email" name="e-mail" id="e-mail" placeholder="Digite seu e-mail">
             </div>
         
         <div class="half-box spacing">
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" placeholder="Digite o seu nome">
        </div>
        <div class="half-box">
            <label for="lastname">Suporte</label>
            
            <input type="text" name="lastname" id="lastname" placeholder="Digite o problema">
        </div>
        <div class="half-box spacing">
            <label for="password"></label>
            <div class="full-box">
            <input type="submit" id="btn-submit" value="Registrar" onclick="validar()">
        </div>  

                 </div>
            </div>
         </div>
       </form>
    
</body>
</html>