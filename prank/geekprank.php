<?php include 'geekprank.html';
include 'geek.sql';
?>
    <?php 
    $db=mysqli_connect('sql','root','','prank');
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
