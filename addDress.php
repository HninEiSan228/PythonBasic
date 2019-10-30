<?php
  
?>
<?php
    echo"
        <style>body{background-image:url('picture/admin.jpg');background-size:cover;background-repeat:no-                   repeat;background-attachment:fixed;padding-top:300px;padding-bottom:300px;padding-left:550px;                padding-right:300px}
               label{color:white;}
        </style>
<body>
        <form action='insertDress.php' method='post'>
        <label> Image name &nbsp;&nbsp;&nbsp;</label><input type='text' name='imgName' placeholder='image.jpg'><br><br>

        <label> Dress name &nbsp;&nbsp;&nbsp;</label><input type='text' name='name'><br><br>

        <label> Dress size </label><input type='text' name='size'><br><br>
        <label> venue price   &nbsp;&nbsp;&nbsp; </label><input type='text' name='price'> <br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;            &nbsp;&nbsp;&nbsp;&nbsp;
        <input type='submit' value='add'>
    </form>
       <form action='adminpage2.php' method='post'>
            <input type='submit' value='Return'>
        </form></body>
";  ?>
