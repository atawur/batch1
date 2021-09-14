<?php
     require_once("functions.php");
     require_once("./header.php");
     $rs = getAllPost();

     $id = $_GET['id'];

     if($id){
        $postInfo = getPostById($id);
        if($postInfo){
            extract($postInfo);
        }
     }
     
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
            <?php if($postInfo){?>
                    <table id='customers'>
                            <tr>
                                <td>Title</td>
                                <td><?php echo $title ?></td>
                            </tr>   
                            <tr>
                                <td>Description</td>
                                <td><?php echo $description; ?></td>
                            </tr>
                    
                            <tr>
                                <td>Status</td>
                                <td><?php echo $status_name; ?></td>
                            </tr>

                            <tr>
                                <td>Created At</td>
                                <td><?php echo date('d-m-Y H:i:s',strtotime($created_at)); ?></td>
                            </tr>
                            </tr> 
                        </table>
                    <?php }else{ ?>
                        <h2 style='color:red !important;text-align:center'>No Data found</h2>
                     <?php } ?>   
            
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