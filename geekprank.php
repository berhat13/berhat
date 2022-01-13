<?php include 'geekprank.html'; ?>
<?php
$host ="localhost"; 
$username ="root";
$password ="berhat123@#$";
$db ="prank";
$db=mssqli_connect($host, $username, $password,$db);

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
         
      
