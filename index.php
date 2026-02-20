<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Agenda Digital</title>
     <style>
       body{
         background-color: #b1c0c9;
       }
       </style>
   </head>
   <body>
     <?php
     date_default_timezone_set('America/Sao_Paulo');
     $tarefas = "Nada por enquanto...";

     if($_SERVER["REQUEST_METHOD"] == "POST"){
       $tarefas = $_POST["tarefa"];
     }
     ?>
     <h1>Minha Lista de Tarefas</h1>
     <h2>Hoje é dia:  <?php echo date('d/m/Y'); ?></h2>
     <h2>Agora são:  <?php echo date('H/i/s'); ?></h2>

      <br/><br/>

     <form method="post" action="">
       <label for="tarefas">Tarefas</label>
       <input type="text" id="tarefa" name="tarefa">
       <input type="submit" value="Salvar">
         </form>
     <br/><br/>

     <h2> Para hoje temos:</h2>
     <p><?php echo $tarefas; ?></p>
   </body>
</html>