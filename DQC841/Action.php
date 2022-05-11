<?php

session_start();

$update = false;

include '../DQC84/Conect.php';

    if(isset($_POST['add'])){
    $fat=$_POST['fat'];
    $part=$_POST['part'];
    $unt=$_POST['unt']; 
    $desc=$_POST['desc'];
    $refe=$_POST['refe'];
    $query = "insert into dqc841 values('',$fat,'$part',$unt,'$desc',$refe,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP)";
    if(mysqli_query($conn, $query)){
        echo "new insert successfully";
    }else{
        echo "Error: ".$query . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
    header('location: ../DQC841/Cadastrar.php');
    }
    
    
    
    if(isset($_GET['edit'])){

$id=$_GET['edit'];

$query="SELECT * FROM dqc841 WHERE id=?";
$stmt=$conn->prepare($query);
$stmt->bind_param("i",$id);
$stmt->execute();
$result=$stmt->get_result();
$row=$result->fetch_assoc();

$id=$row['id']; 
$fat=$row['fat_part_no'];


$update=true;

}
    
    if(isset($_POST['update'])){

$id=$_POST['id'];
$fat=$_POST['fat'];
$part=$_POST['part'];
$unt=$_POST['unt'];
$desc=$_POST['desc'];
$refe=$_POST['refe'];
$query="UPDATE dqc841 SET fat_part_no = $fat, parts_no = '$part', unt_usg = $unt,description = '$desc', ref_designator = $refe, update_dt = CURRENT_TIMESTAMP WHERE id=$id";

if(mysqli_query($conn, $query)){
        echo "new insert successfully";
    }else{
        echo "Error: ".$query . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);

$_SESSION['response']="Alterado com Sucesso!";
$_SESSION['res_type']="primary";
header('location: ../DQC84/Listar.php');

}

if(isset($_GET['delete'])){

//deleta foto
$id=$_GET['delete'];

$query="DELETE FROM dqc841 WHERE id=?";
$stmt=$conn->prepare($query);
$stmt->bind_param("i",$id);
$stmt->execute();

header('location: ../DQC841/Listar.php');
$_SESSION['response']="Deletado com Sucesso!";
$_SESSION['res_type']="danger";
}