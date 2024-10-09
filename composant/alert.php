<?php
if(isset($sucess_msgs))
{
    foreach($sucess_msgs as $sucess_msg)
    {
        echo'<script>swal("'.$sucess_msg.'", "","sucess");</script>';
    }
}
if(isset($warning_msgs))
{
    foreach($warning_msgs as $warning_msg)
    {
        echo'<script>swal("'.$warning_msg.'", "","warning");</script>';
    }
}
if(isset($info_msgs))
{
    foreach($info_msgs as $info_msg)
    {
        echo'<script>swal("'.$info_msg.'", "","info");</script>';
    }
}
if(isset($error_msgs))
{
    foreach($error_msgs as $error_msg)
    {
        echo'<script>swal("'.$error_msg.'", "","error");</script>';
    }
}
?> 