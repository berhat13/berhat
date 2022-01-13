<?php include 'geekprank.html'; ?>
<?php
$host ="github"; 
$username ="berhat";
$password ="berhat123@#$";
$db ="prank";

$db=mssql_connect($host, $username, $password);
mssql_select_db($db);
?>
    <?php 
    $db=mysqli_connect('github','berhat','berhat123@#$','prank');
    ?>
        <?php  
    if(isset($_POST['submit'])){
    $file=$_POST['file'];
    $query = mysqli_query($db , "INSERT INTO `geek`(`file`) VALUE ('$file')");
      }
      if(isset($_POST['open'])){
         // $open=$_POST['open'];
          $query = mysqli_query($db , "SELECT `file` FROM `geek`");
          while($row = mysqli_fetch_assoc($query)){
           $query = mysqli_query($db , "SELECT `file` FROM `geek`");
              }
      }
      ?>    
    <?php  /*Important !!!!!!!!!!!!!!!!!! <?php  
    if(isset($_POST['submit'])){
      $password = mysqli_query($db , "SELECT `mark` FROM `$db`");
    }
      ?> */?>
         
      
