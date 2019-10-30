<?php
    session_start();
?>
<?php
     $_SESSION['userName']=$_SESSION['user'];
     $connect=mysql_connect("localhost","root","");
     mysql_select_db("weddingproject",$connect);
     $query1="SELECT * FROM service where description='venue'";
    $result=mysql_query($query1,$connect);
    $number_of_row=mysql_num_rows($result); 
    
   
   //$product_array = $db_handle->runQuery("SELECT * FROM service where description='venue' ");
 
        for($i=0;$i<$number_of_row;$i++){
             $product_array=mysql_fetch_array($result);
   
?>
    <div class="product-item">
        <form method="post" action="noname5.php?action=<?php echo $product_array["name"]; ?>">
        <div class="product-image"><img src="picture/<?php echo $product_array["img"]?>"></div>
        <div class="product-tile-footer">
        <div class="product-title"><?php echo $product_array["name"]; ?></div>
        <div class="product-price"><?php echo "$".$product_array["price"]; ?></div>
        <div class="cart-action">
        <input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
        </div>
        </form>
    </div>
<?php
    }
?>





