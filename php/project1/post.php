     <?php 
       //include_once('./header.php');
       //include_once('./header.php');

       require_once("./header.php");
       require_once("functions.php");
       //$allStatus = getAllStatus();
       $allStatus = getMasterData('status');
      ?>

      <?php 
      
      if(isset($_POST['submit'])){

        // echo "<pre>";
        // print_r($_POST);
        savePost($_POST);
        //extract($_POST);

        //echo $description;
        //print_r($data);

        /*

            Array
                (
                    [title] => teet
                    [description] => dddd
                    [status] => 1
                    [submit] => Save
                )
                 
                
             extract
                $title = teet
                $description = dddd
                $status= 1
                $submit = Save

             

        */
      }
       
      ?>
        <div class="main">

            <div class="container">
                <div class="content">
                    <form  action="post.php" method="post">
                    <table>
                            <tr>
                                <td>Title</td>
                                <td>:</td>
                                <td><input type="text" name="title"></td>
                            </tr>   
                            <tr>
                                <td>Description</td>
                                <td>:</td>
                                <td>
                                    <textarea name='description'></textarea>
                                </td>
                            </tr> 
                            <tr>
                                <td>Status</td>
                                <td>:</td>
                                <td>
                                <select name="status">
                                      
                                      <?php while($row = mysqli_fetch_assoc($allStatus ) ){?>
                                          <option value="<?php echo $row['status_name'];?>"><?php echo $row['status_name'];?></option>
                                      <?php } ?>    
                      
                                </td>
                                
                            </tr> 
                            <tr>
                                <td></td>
                                <td></td>
                                <td>
                                    <input type="submit" name='submit' value="Save"/>
                                </td>
                                
                            </tr>    
                        </table>
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