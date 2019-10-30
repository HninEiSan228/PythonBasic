<?php
    echo"
        <style>body{background-image:url('picture/admin.jpg');background-size:cover;background-repeat:no-                   repeat;background-attachment:fixed;padding-top:300px;padding-bottom:300px;padding-left:550px;                padding-right:300px}
               label{color:white;}
        </style>
<body>
        <form action='removeCards1.php' method='post'>
        <label> Card name &nbsp;&nbsp;&nbsp;</label><input type='text' name='name'><br><br>
        <input type='submit' value='remove'>
    </form>
       <form action='adminpage2.php' method='post'>
            <input type='submit' value='Return'>
        </form></body>
";
  // echo   "successful";   
    ?>
