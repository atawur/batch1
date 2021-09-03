<?php

$persons = array(
    array('name'=>"ati","age"=>34,"hobby"=>"Travelling"),
    array('name'=>"asraf","age"=>33,"hobby"=>"Football"),
    array('name'=>"munju","age"=>40,"hobby"=>"cricket"),
    array('name'=>"samir","age"=>50,"hobby"=>"fishing"),
)    

?>

<table style="border:1px solid #ccc">
    <tr style="border:1px solid #ccc">
        <th style="border:1px solid #ccc">Sl</th>
        <th style="border:1px solid #ccc">name</th>
        <th style="border:1px solid #ccc" >Age</th>
        <th style="border:1px solid #ccc">Hobby</th>
    </tr>   
    
<?php 
$sl=1;
foreach($persons  as $key=>$person ){ ?>
    <tr style="border:1px solid #ccc">
           <th style="border:1px solid #ccc"><?php echo $sl++;?></th>
            <?php foreach($person as $k=>$value) {?>
                <th style="border:1px solid #ccc"><?php echo $value;?></th>
            <?php } ?>    
       
        
    </tr> 
<?php } ?>    

<table>