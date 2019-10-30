<?php
        $name=$_POST['name'];
        $password=$_POST['n1'];
        if($name!='Hsu Aung')
        {
           echo "<font color='red'>Your name is incorrect.Please fill again!</font><br>";
        }
        else if($password!='hsuaung@12345'){
          echo "<font color='red'>Your password is incorrect.Please fill again!</font><br>";
        }
        else
           echo"
           <style>a{font-weight:bold;color:pink;font-size:30px;}
           body{background-image:url('picture/admin.jpg');background-attachment:fixed;
           background-repeat:no-repeat;background-size:cover;}
           h1{font-size:50px;color:#f00058;}
           h2{font-weight:bold;background-color:#f00058;width:20%}
         
           </style><body>
           <h1>Admin Page</h1>
            <ul>
            <li>
            <a href='checkOrder.php'>Check Order Forms </a>  <br>
            </li></ul>
            
            <div><h2>For Venue</h2>
            <ul>
                <li><a href='addVenue.php'>Add new venue</a></li>
                <li><a href='updateVenue.php'> Update Price </a></li>  
                 <li><a href='removeVenue.php'>Remove venue</a></li>
             </ul>
            </div>
            <div>
            <h2>For Photographer</h2>
             <ul>
            <li> <a href='addPhotographer.php'>Add new photographer</a></li>
             <li><a href='updatePhotographer.php'> Update Price </a></li>  
             <li><a href='removePhotographer.php'>Remove photographer</li></a>
            </ul>
             </div>
            <div><h2>For Makeup Artist</h2>
             <ul>
             <li><a href='addMakeupArtist.php'>Add new Makeup Artist</a></li>
             <li><a href='updateMakeupArtist.php'> Update Price </a> </li>
             <li><a href='removeMakeupArtist.php'>Remove Makeup Artist</a></li>
            </ul>
             </div>
             <div><h2>For Floral Service</h2>
             <ul>
             <li><a href='addFloralService.php'>Add new Floral Service</a></li>
             <li><a href='updateFloralService.php'> Update Price </a>  <br></li>
             <li><a href='removeFloralService.php'>Remove Floral Service</a></li>
             </ul
            </div>
            <div><h2>For Cards</h2>
             <ul>
             <li><a href='addCards.php'>Add new Cards</a></li>
             <li><a href='updateCards.php'> Update Price </a> </li>
             <li><a href='removeCards.php'>Remove Cards </a></li>
            </ul>
             </div>
             <div><h2>For Gifts</h2>
             <ul>
             <li><a href='addGift.php'>Add new Gifts</a></li>
             <li><a href='updateGift.php'> Update Price </a> </li>
             <li><a href='removeGift.php'>Remove Gifts</a></li>
            </ul>
             </div>
        
             <div><h2>For Coustumes</h2>
             <ul>
             <li><a href='addDress.php'>Add new Costumes</a></li>
             <li><a href='updateDress.php'> Update Price </a>  <br></li>
             <li><a href='removeDress.php'>Remove Costumes</a></li>
             </ul>
            </div>
            <form action='links.php' method='post'>
            <input type='submit' value='Log Out'  style='background-color:#f00058;font-size:30px;'>
            </form>
            
            </body>
            
            ";
            
?>
