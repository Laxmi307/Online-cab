<?php
  include('../db/connection.php');
 ?>
<html>
 <head>
     <title> Homepage </title>     
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
 </head>
 <body>
    
      <div class="row topnav">
         <h3 style="margin-left: 500px;">Online Cab Service</h3>
         <a href="logoutprocess.php">   <button style="float:right; margin-top:-22px; background-color:maroon;"> Log Out
         </button>
         <a href="driverdetail.php">   <button style="float:right; margin-top:-22px; background-color:maroon;"> Driver Details
         </button>
         <a href="userdetail.php">   <button style="float:right; margin-top:-22px; background-color:maroon;"> User Details
         </button>
         </a>
         <a href="ride_history.php">   <button style="float:right; margin-top:-22px; background-color:maroon;"> Ride History
         </button>
        
      
       </a>
       <a href="feedback.php">   <button style="float:right; margin-top:-22px; background-color:maroon;"> Feedback
         </button>
        
       </a>

         <br>
         </div>
        
      <?php
        $query = "SELECT * FROM `tbl_user` WHERE user_type='User'";
     
        $result = $conn->query($query);
       if($result->num_rows>0){ ?>
       
       <h2>USER INFORMATION</h2>
          <table style="width:80%; border:1px solid black; ">
            
         <tr style=" border:1px solid black;">
         <th  style=" border:1px solid black;" >Id</th>
                <th  style=" border:1px solid black;" >Name</th>
                <th  style=" border:1px solid black;">User name</th>
                <th style=" border:1px solid black;" >Contact no.</th>
<th  style=" border:1px solid black;">Email</th>
                <th  style=" border:1px solid black;">Date_of_birth</th>
                <th  style=" border:1px solid black;"> Address</th>
                <th  style=" border:1px solid black;"> Gender</th>
                <th style=" border:1px solid black;" > Date of join</th>
                <!-- <th style=" border:1px solid black;" >Action</th> -->
                </tr>
            
           <?php while($row = $result->fetch_assoc()){ ?>

              <tr >
              <td  style=" border:1px solid black;"><?php echo $row['id'];?></td>
              <td  style=" border:1px solid black;"><?php echo $row['name'];?></td>
                <td  style=" border:1px solid black;"><?php echo $row['user_name'];?></td>
                <td  style=" border:1px solid black;"><?php echo $row['mobile'];?></td>
                <td  style=" border:1px solid black;"><?php echo $row['email'];?></td>
                <td style=" border:1px solid black;"><?php echo $row['date_of_birth'];?></td>
                <td style=" border:1px solid black;" ><?php echo $row['address'];?></td>
                <td  style=" border:1px solid black;"><?php echo $row['gender'];?></td>
                <td  style=" border:1px solid black;"><?php echo $row['date_of_join'];?></td>
             <!-- <td style=" border:1px solid black; display:block"> <a href="delete.php">Delete account</a></td> -->
                   </tr>
            <?php  } ?>
           </table>
        <?php }else{ ?>
           <h3>No result found</h3>
        <?php }
      ?>
    </body>