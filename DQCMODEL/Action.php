<?php

session_start();

$update = false;

include '../Database.php';

    if(isset($_POST['add'])){
    $model=$_POST['model'];
    $query = "insert into dqcmodel (model) values (?)";
    $stmt=$conn->prepare($query);
    $stmt->bind_param('s',$model);
    $stmt->execute();
    header('location: ../DQCMODEL/Cadastrar.php');
    }
    
    
    
    if(isset($_GET['edit'])){

$id=$_GET['edit'];

$query="SELECT * FROM dqcmodel WHERE id=?";
$stmt=$conn->prepare($query);
$stmt->bind_param("i",$id);
$stmt->execute();
$result=$stmt->get_result();
$row=$result->fetch_assoc();

$id=$row['id']; 
$model=$row['model'];

$update=true;

}
    
    if(isset($_POST['update'])){

$id=$_POST['id'];
$model=$_POST['model'];

$query="UPDATE dqcmodel SET model=? WHERE id=?";
$stmt=$conn->prepare($query);
$stmt->bind_param("si",$model,$id);
$stmt->execute();

$_SESSION['response']="Alterado com Sucesso!";
$_SESSION['res_type']="primary";
header('location: ../DQCMODEL/Listar.php');

}

if(isset($_GET['delete'])){

//deleta foto
$id=$_GET['delete'];

$query="DELETE FROM dqcmodel WHERE id=?";
$stmt=$conn->prepare($query);
$stmt->bind_param("i",$id);
$stmt->execute();

header('location: ../DQCMODEL/Listar.php');
$_SESSION['response']="Deletado com Sucesso!";
$_SESSION['res_type']="danger";
}