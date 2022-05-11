<?php
include '../DQC841/Action.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Alan">
        <title>Tela CAD/ALT em dqc841</title>
    </head>
    <body>
        <main>
            <h2>Cadastrar/Alterar DQC841</h2>
            <form action="../DQC841/Action.php" method="post" enctype="multipart/form-data">
                
                <input type="hidden" name="id" value="<?= $id; ?>">
                
                    Digitar o FAT PART NO:
                    <input type="text" value="<?php $fat ?>" id="fat" name="fat" required>
                    Digitar o PART NO:
                    <input type="text" value="<?php $part ?>" id="part" name="part" required>
                    Digitar o UNT USG:
                    <input type="text" value="<?php $unt ?>" id="unt" name="unt" required>
                    Digitar o DESCRIPTION:
                    <input type="text" value="<?php $desc ?>" id="desc" name="desc" required>
                    Digitar o REF DESIGNATOR:
                    <input type="text" value="<?php $refe ?>" id="refe" name="refe" required>
  <?php if($update==true){?> 
    
        <input type="submit" name="update" class="btn btn-success btn-block" value="Alterar">
  <?php }else{ ?>
        <input type="submit" name="add" class="btn btn-success btn-block" value="Cadastrar">
  <?php } ?> 
        <a href="../DQC841/Listar.php">Listar</a> <a href="../index.php">Inicio</a>
            </form>
            
        </main>
    </body>
    </body>
</html>
