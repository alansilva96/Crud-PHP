<?php
include '../DQC84/Action.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Alan">
        <title>Tela CAD/ALT em dqc84</title>
    </head>
    <body>
        <main>
            <h2>Cadastrar/Alterar DQC84</h2>
            <form action="../DQC84/Action.php" method="post" enctype="multipart/form-data">
                
                <input type="hidden" name="id" value="<?= $id; ?>">
                
                    Digitar o Model:
                    <input type="text" value="<?php $model ?>" id="model" name="model" required>
                    Digitar o FAT PART NO:
                    <input type="text" value="<?php $fat ?>" id="fat" name="fat" required>
                    Digitar o TOTAL LOCATION:
                    <input type="text" value="<?php $location ?>" id="location" name="location" required>
                    
  <?php if($update==true){?> 
    
        <input type="submit" name="update" class="btn btn-success btn-block" value="Alterar">
  <?php }else{ ?>
        <input type="submit" name="add" class="btn btn-success btn-block" value="Cadastrar">
  <?php } ?> 
        <a href="../DQC84/Listar.php">Listar</a> <a href="../index.php">Inicio</a>
            </form>
            
        </main>
    </body>
    </body>
</html>
