<?php 

    require_once('./config/dbconn.php');
    $db = new crud();   
    
    if(isset($_GET['D_ID']))
    {
        global $db;
        $id = $_GET['D_ID'];

        if($db->del_movie($id))
        {
            $db->set_messsage('<div class="alert alert-danger">   Record Has Been Deleted </div>');
            header("location:movies.php");
        }
        else
        {
            $db->set_messsage('<div class="alert alert-danger">  Something Wrong when Deleting Record</div>'); 
        }

    }
?>