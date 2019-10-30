<?php
session_start();
?>

<?php
$phone=$_SESSION['phone'];
$name=$_SESSION['name'];
echo"$phone";
echo"$name";
$con=mysql_connect('localhost','root','')or die ('Unable to Connect');
$db='a';
$db_selected=mysql_select_db($db,$con);
$query = "select * from orderid where phoneNumber='$phone'";
$ret = mysql_query ($query, $con);

echo " <table border='1'  width='50%' cellspacing='0' align='center'>

        <tr align='center' bgcolor='lightblue'>
             <th width='25%'>PhoneName</th> 
             <th width='25%'>Qty</th>
             <th width='25%'>price</th>
             <th width='25%'>UserName</th>
             <th width='25%'>PhoneNumber</th>
             <th width='25%'>total</th>
        </tr> ";
     $noRows=mysql_num_rows($ret);
     $total=0; 
     while($row=mysql_fetch_assoc($ret))
     {    
         echo "<tr>";                                                                                                                                                                                                         
         echo "<td>".$row['PhoneName']."</td>";
         echo "<td>".$row['Qty']."</td>";
         echo "<td>".$row['Price']."</td>"; 
         echo "<td>".$row['UserName']."</td>";
         echo "<td>".$row['phoneNumber']."</td>";
         echo "<td>".$row['Total']."</td>"; 
         echo "</tr>"; 
         $price=$row['Total'];
         $total+=$price;     
     }
     
   echo   "</table>";
   echo"
   <html>
   <head>
  <style>
  body{text-align:center;}
p{font-size:10;}
h2{text-align:right;}
body{text-align:center;}
form{font-size:20;}
  h1{color:red;font-size:100;text-align:center;};
  </style> 
   </head>
   <body>
   <h1>Order Form</h1>
   <h2>
    <a href='Main.php' style='font-style:italic;color:maroon; background-color:cornsilk; font-size:35; text-decoration:none'>Home</a>&nbsp;
    <a href='Contact.php' style='font-style:italic; color:maroon; font-size:35; background-color:cornsilk; text-decoration:none'>Contact Us</a>&nbsp;
    <a href='About.php' style='font-style:italic; color:maroon; font-size:35; background-color:cornsilk; text-decoration:none'>About Us</a> &nbsp;
    <a href='Feedback.php' style='font-style:italic; color:maroon; font-size:35; background-color:cornsilk; text-decoration:none'>Feedback</a> &nbsp;
</h2>              
<img src='u.png' width=300px height=300px>
<form method='post' action='userlink.php'>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <input type='text' name='name' value='$name' disabled ></br></br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Address:
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='text' size='25' required='required' name='address'></br></br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
City:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='text' name='city' required='required'><br> <br>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
Phone.No:&nbsp;&nbsp;<input type='text' value='$phone'disabled name='phone'>  </br>   </br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
E-mail:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' required='required' size='30' name='email'></br></br>
Your Account number&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <input type='text' name='useraccount' required='required'> </br></br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  
  &nbsp;&nbsp;
Our Account Number&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <input type='text' value='152351325135' disabled> </br></br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  
  Transfer Amount&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input tupe='text' disabled value='$total' name='amount' required='required'>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  
  <input type='submit' value='Confirm'>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;<input type='submit' value='Cancel'>
 </form>
   </body>
   </html>
   " ;
?>
