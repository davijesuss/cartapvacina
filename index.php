<?php
require_once 'CONEXAO.PHP';


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartão de vacina</title>
    <link rel="stylesheet" href="style.css">
    <style>*{
        margin: 0;
        padding: 0;
    }
     #titulo{
         font-family: inpact,fantasy;
         
         color: rgb(0, 20, 36);
         
     }
     #subtitulo{
         font-family: sans-serif;
         color: rgb(1, 37, 66);
         
     }
     fieldset{
         border: 0;
     }
    body{
        background-image: linear-gradient(to right, rgb(67, 79, 195) , rgb(9, 204, 238));
         font-family: sans-serif;
         font-size: 1em;
         margin-left: 36%;
         margin-top: 2%;
         justify-content: center;
        
         
    }
    input,select, textarea{
        border-radius: 5px;
        width: 55%;
        height: 25px;
        font-size: 20px
    
    }
    .campo{
        margin-bottom: 1em;
      
       
       
    }
    .campo label{
        
    margin-bottom: 0.2em;
    display: block;
    }
    fieldset.grupo.campo{
        float: left;
        margin-right: 1em;
      
    }
    .campo input[type="text"] .campo input[type="email"] .campo select, .campo textarea {
        padding: 0.2em;
        border: 1px solid blue;
        box-shadow: 2px 2px 2px rgb(0, 0, 0);
    display: block;
    
    
    }
    .campo select option{
        padding-right: 1em;
       
    }
    .campo input:focus, .campo select:focus, .campo textarea:focus{
    background-color: white;
    
    }
    .botao{
        font-size: 1.2em;
        background-color: rgb(21, 133, 21);
        border: 0;
        margin-bottom: 1em ;
        color: white;
        padding: 0.2em 0.6em ;
        box-shadow: 2px 2px 2px black;
        text-shadow: 1px 1px 1px black ; 
        position:absolute;
        top: 70%;
        left: 55%;
        margin-right: -50%;
        transform: translate(-50%, -50%);
    }
    .botao:hover{
        background: #ccbbff;
        box-shadow: inset 2px 2px 2px black;
        text-shadow: none;
    }
    .imagem{
        position: relative;
        bottom: 680px;
        right: 300px;
    }
        
        </style>
 </head>
 <body>
  <div>
      <h1 id="titulo">Cartão de Vacina UCSAL</h1>
      <p id="subtitulo">Este formulario irá validar su entrada na universidade<br/>Sem precisar fazer usu do cartão !</p> <br/> <br/>
  </div>
 
  <form action="cadastro.php" method="$_POST">
      <fieldset class="grupo">
          <div class="campo">
              <label for="nome"><strong> Nome completo</strong></label>

              <input type="text" name="nome"  required> 
              
          </div>

          <div class="campo">
            <label for="cpf"><strong>CPF</strong></label>
            <input type="number" name="cpf" required>
          </div>
          <div class="campo">
            <label for="email"><strong>E-mail</E-mail></strong></label>
            <input type="email" name="email" required>
          </div>
      </fieldset>
      <fieldset class="campo">
      <div class="campo">
          
        <label for="curso"><strong>Informe seu curso</strong></label>
        <input type="text" name="curso">
    </div>
        <div class="campo">
            <label for="periodo"><strong>Qual periodo está cursando </strong></label>
            <input type="text" name="periodo" >
        </div>
        <div class="campo">
            <label> <strong>Qual o seu turno ?</strong></label>
            <select id="turno" name="turno">
                <option selected disabled value="">Selecione</option>
                <option>matutino</option>
                <option>vespertino</option>
                <option>noturno</option>
            </select>
        </div>
        <div class="campo">
            <label><strong> Você está vacinado ?</strong></label>
                  <select id="vacina" name="vacina">
                    <option selected disabled value="" required>Selecione</option>
                    <option>Sima, as duas doses</option>
                    <option>Sim, com apenas uma dose</option>
                    <option>Não, preferi não me vacinar</option>
                </select>
            </div>
        </fieldset>
            <button class="botao"type="submit">Enviar formulario</button>
            <div class="imagem">
                <img src="ucsal.webp" alt="ucsal">
            </div>
       
         </form>
 
 </body>
 </html>
