<?php 
require 'db_con.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>My ToDo List</title>
</head>

<body>

    <div class="main-section">
       <div class="add-section">
          <form action="add.php" method="POST" autocomplete="off">
             <?php if(isset($_GET['mess']) && $_GET['mess'] == 'error'){ ?>
                <input type="text" 
                     name="title" 
                     style="border-color: #ff6666"
                     placeholder="Remplir ici" />
              <button type="submit">Ajouter &nbsp; <span>&#43;</span></button>

             <?php }else{ ?>
              <input type="text" 
                     name="title" 
                     placeholder="Nouvelle tâche" />
              <button type="submit">Ajouter &nbsp; <span>&#43;</span></button>
             <?php } ?>
          </form>
       </div>

       <div class= titre> A faire </div>

       <?php 
          $todos = $conn->query("SELECT * FROM todo ORDER BY id DESC");
       ?>

       <div class="show-todo-section">
            <?php while($todo = $todos->fetch(PDO::FETCH_ASSOC)) { ?>
                <div class="todo-item">
                    <span id="<?php echo $todo['id']; ?>"
                          class="remove-to-do">x</span>
                    <?php if($todo['checked']){ ?> 
                        <input type="checkbox"
                               class="check-box"
                               data-todo-id ="<?php echo $todo['id']; ?>"
                               checked />
                        <h2 class="checked"><?php echo $todo['nom'] ?></h2>
                    <?php }else { ?>
                        <input type="checkbox"
                               data-todo-id ="<?php echo $todo['id']; ?>"
                               class="check-box" />
                        <h2><?php echo $todo['nom'] ?></h2>
                    <?php } ?>
                    <br>
                    <small>créé le : <?php echo $todo['date'] ?></small> 
                </div>
                    <?php }?>
       </div>

       <div class= titre> Fait </div>

       <?php 
          $todof = $conn->query("SELECT * FROM fait ORDER BY id DESC");
       ?>

       <div class="show-todo-section">
            <?php while($Todo = $todof->fetch(PDO::FETCH_ASSOC)) { ?>
                <div class="todo-item">
                    <span id="<?php echo $Todo['id']; ?>"
                          class="remove-to-do">x</span>
                    <?php if($Todo['checked']){ ?> 
                        <input type="checkbox"
                               class="check-box"
                               data-todo-id ="<?php echo $Todo['id']; ?>"
                               checked />
                        <h2 class="checked"><?php echo $Todo['nom'] ?></h2>
                    <?php }else { ?>
                        <input type="checkbox"
                               data-todo-id ="<?php echo $Todo['id']; ?>"
                               class="check-box" />
                        <h2><?php echo $Todo['nom'] ?></h2>
                    <?php } ?>
                    <br>
                    <small>créé le : <?php echo $Todo['date'] ?></small> 
                </div>
            <?php } ?>
       </div>
    </div>

</body>

</html>