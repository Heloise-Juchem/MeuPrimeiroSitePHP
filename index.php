<!DOCTYPE html>
<html lang="pt-br">
   <head>
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Agenda Digital</title>
     <style>
    
       body{
         background-color: #2E6BDB;
       }

       h1{
         font-family: "Sofia", sans-serif;
         text-align: center;
         color: #ffffff;
       }

       label{
         color:#ffffff;
       }
p{
  border-style:dotted;
}
       h2{
           font-family: Georgia, sans-serif;
           font-size: 16px;
           color: #ffffff;
         text-align:center;
         }  
       
       </style>
   </head>
   <body>
     <?php
     date_default_timezone_set('America/Sao_Paulo');
     $arquivo = "agenda.json";
     $tarefas = json_decode(file_get_contents($arquivo), true);

     if($_SERVER["REQUEST_METHOD"] == "POST"){
       $nova_tarefa = $_POST["tarefas"];
       $tarefas[] = [
         "tarefas" => $nova_tarefas,
         "data" => date("d/m/Y H:i:s")
       ];
     }
       file_put_contents($arquivo, json_encode($tarefas,JSON_PRETTY_PRINT));
      $tarefas = json_decode(file_get_contents($arquivo), true);
     ?>
     <h1>Minha Lista de Tarefas</h1>
     <h1> *ੈ✩‧₊˚༺☆༻*ੈ✩‧₊˚<h1>
     <h2>Hoje é dia:  <?php echo date('d/m/Y'); ?></h2>
     <h2>Agora são:  <?php echo date('H:i:s'); ?></h2>

      <br/><br/>

     <form method="post" action="">
       <label for="tarefas">Tarefas</label>
       <input type="text" id="tarefa" name="tarefas">
       <input type="submit" value="Salvar">
         </form>
     <br/><br/>

     <h2>Para hoje temos:</h2>
     <ul>
       <li>
         <p> O que eu tenho que fazer?
         <?php echo htmlspecialchars($tarefas["tarefa"]); ?></p>
         <p> Quando salvei essa tarefa?
         <?php echo htmlspecialchars($tarefas["data"]); ?></p>
       </li>
     </ul>
   </body>
</html> 