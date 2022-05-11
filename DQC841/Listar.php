<?php
include '../DQC84/Action.php';
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $query = 'select * from dqc841';
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
        ?>
        <h2>Listagem DQC841</h2>
        <table class="tb-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Fat_part_no</th>
                    <th scope="col">Parts_no</th>
                    <th scope="col">Unt_USG</th>
                    <th scope="col">Description</th>
                    <th scope="col">Ref_Designator</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                while($row = $result->fetch_assoc()){
                ?>
                <tr>
                    <th scope="row"><?=$row['id']?></th>
            <td><?=$row['fat_part_no']?></td>
            <td><?=$row['parts_no']?></td>
            <td><?=$row['unt_usg']?></td>
            <td><?=$row['description']?></td>
            <td><?=$row['ref_designator']?></td>
                    <td><a href="Cadastrar.php?edit=<?= $row['id']; ?>" class="badge badge-success p-2"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
</svg>Alterar</a></td>
<td><td><a href="action.php?delete=<?= $row['id']; ?>" class="badge badge-danger p-2" onclick="return confirm('Voce deseja deletar esse usuario ??');" ><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg>Excluir</a></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
            <td><a href="Cadastrar.php">Novo</a></td>
            <td><a href="../index.php">Inicio</a></td>
        </table>
    </body>
</html>
