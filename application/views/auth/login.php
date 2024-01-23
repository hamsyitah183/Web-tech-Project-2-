<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>

    <style>
#loginSection {
    border: 1px solid blue;
    width: 80%;
    overflow-x:hidden;

}

#loginPick {
    display: flex;
    justify-content: center;
}


</style>

</head>
<body>
<h1 class="text-center text-bold">Login Section</h1>
<div class="container"  id = "loginSection">
 
  <ul class="nav nav-pills " id = "loginPick">
    <li class="active"><a data-toggle="pill" href="#home">User</a></li>
   
    <li><a data-toggle="pill" href="#admin">Admin</a></li>
    
  </ul>
  
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      
        
        <?php include ('C:\xampp\htdocs\MVC_BI20110033\application\views\auth\loginUser.php');?>
        

    </div>
   
    <div id="admin" class="tab-pane fade">
      
      <?php include ('C:\xampp\htdocs\MVC_BI20110033\application\views\auth\loginAdmin.php');?>
    </div>
   
  </div>
</div>




