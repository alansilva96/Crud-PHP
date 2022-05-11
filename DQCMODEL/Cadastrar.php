<?php
include '../DQCMODEL/Action.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Alan">
        <title>Tela CAD/ALT em dqcmodel</title>
    </head>
    <body>
        <main>
            <h2>Cadastrar/Alterar DQCMODEL</h2>
            <form action="../DQCMODEL/Action.php" method="post" enctype="multipart/form-data">
                
                <input type="hidden" name="id" value="<?= $id; ?>">
                
                    Digitar o Model:
                    <input type="text" value="<?php $model ?>" id="model" name="model" required>
  <?php if($update==true){?> 
    
        <input type="submit" name="update" class="btn btn-success btn-block" value="Alterar">
  <?php }else{ ?>
        <input type="submit" name="add" class="btn btn-success btn-block" value="Cadastrar">
  <?php } ?> 
        <a href="../DQCMODEL/Listar.php">Listar</a> <a href="../index.php">Inicio</a>
            </form>
            
        </main>
    </body>
    </body>
</html>
