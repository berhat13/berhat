<title>GeekPrank</title>
        <link rel="icon" href="b.svg">
        <style>
            body{
                background: #222;
                margin: 0px;
            }.tech{
                background: black;
                padding: 20px;
                border: none;
                border-radius:3px;
                margin: auto;
                margin-bottom: 20px;
                width: 500px;
                height: 500px;
                text-align: center;
                /* Bakcgound  style */
                background-image: url('skall.jpg');
                background-repeat: no-repeat;
                background-size: 550px;
                background-position: center center;
            }.h1{
                color: black;
                background: rgb(243, 41, 6);
                padding: 10px;
                border-radius: 3px;
                transition: 0.6s;
            }.h1:hover{
                color: white;
                background: rgb(192, 10, 10);
            }.a{
                color: white;
                padding: 15px;
                margin: 20px;
                display: inline-block;
                text-decoration: none;
                font-size: 27px;
                background: rgb(20, 136, 5);
                border-radius: 3px;
                transition: 0.6s;
            }.a:hover{
                color: black;
                background-color: chartreuse;
            }</style>
</head>
<body> 
    <?php 
    $db=mysqli_connect('localhost','root','','prank');
    ?>
    <a href="/About.html" class="a">Go Back</a>
    <div class="tech">
        <h1 class="h1">Please Don't Try Open This</h1>
        <br>      
        <!-- form --> 
        <form action="geekprank.php" method="POST" enctype="mutlipart/form-data">
            <input type="file" name="file" accept=".html">
            <button  name="submit">add</button>
            <!-- OPEN VIRUS --> 
            <input type="submit" name="open" value="OPEN">
        </form>
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
        <style>
            form{
                margin-left: 36px;
                margin-top: 102px;
            }
            input{
                height: 50px;
                width: 50px;
                border: none;
}</style>      
    </div>
</body>
</html>