<?php
// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);
session_start();
require_once("functions.php");
require_once("./header.php");
$rs = getAllPost();
?>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
<div class="main">

            <div class="container">
                <div class="content">
            <?php if(isset($_SESSION['message'])){?>
                <div style="color:green;text-align:center;font-size:14px;margin-bottom:10px">

                        <?php 
    
                            echo $_SESSION['message'];
                            unset($_SESSION['message'])
                        ?>
                </div>
             <?php } ?>   
                <?php if(!empty($rs)){?>
                    <table id='customers'>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>   
                           
                        <?php 
                        while($row = mysqli_fetch_assoc($rs)) { ?>
                            <tr>
                                <td><?php echo $row['title'];?></td>
                                <td><?php echo $row['description'];?></td>
                                <td>
                                    <?php 
                                    // if($row['status']==1){
                                    //         echo "Active";
                                    // }else if($row['status']==2){
                                    //     echo "Inactive";
                                    // }
                                    
                                    
                                    
                                    ?>
                                <?php echo $row['status_name'];?>
                                </td>
                                <td>

                                <a href="post_view.php?id=<?php echo $row['id'];?>">Details</a>|
                                <a href="edit.php?id=<?php echo base64_encode($row['id']);?>">Edit</a>|
                                <a href="">Delete</a>

                                </td>
                    
                            </tr> 

                       <?php } ?>     

                        </table>
                        <?php } ?> 
                    </form>   
                </div>
                <div class="sidebar">
                  <?php 
                   require_once("sidebar.php")
                  ?>
                </div>
            </div>
        </div>
        <?php
            include_once('./footer.php')
        ?>
    </body>
</html>