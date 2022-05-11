<?php

session_start();

$update = false;

include '../DQC84/Conect.php';

    if(isset($_POST['add'])){
    $model=$_POST['model'];
    $fat=$_POST['fat'];
    $location=$_POST['location']; 
    $query = "insert into dqc84 values('',$model,'$fat',$location,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP)";
    if(mysqli_query($conn, $query)){
        echo "new insert successfully";
    }else{
        echo "Error: ".$query . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
    header('location: ../DQC84/Cadastrar.php');
    }
    
    
    
    if(isset($_GET['edit'])){

$id=$_GET['edit'];

$query="SELECT * FROM dqc84 WHERE id=?";
$stmt=$conn->prepare($query);
$stmt->bind_param("i",$id);
$stmt->execute();
$result=$stmt->get_result();
$row=$result->fetch_assoc();

$id=$row['id']; 
$model=$row['model'];
$fat=$row['fat_part_no'];
$location=$row['total_location'];

$update=true;

}
    
    if(isset($_POST['update'])){

$id=$_POST['id'];
$model=$_POST['model'];
$fat=$_POST['fat'];
$location=$_POST['location'];
$query="UPDATE dqc84 SET model = $model, fat_part_no = '$fat', total_location = $location, update_dt = CURRENT_TIMESTAMP WHERE id=$id";

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

$query="DELETE FROM dqc84 WHERE id=?";
$stmt=$conn->prepare($query);
$stmt->bind_param("i",$id);
$stmt->execute();

header('location: ../DQC84/Listar.php');
$_SESSION['response']="Deletado com Sucesso!";
$_SESSION['res_type']="danger";
}