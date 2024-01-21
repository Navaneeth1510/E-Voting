<?php
    session_destroy();
    echo '<script type="text/javascript">
            window.onload = function () { 
            window.location.href = "VoterLoginPage2.php";
            }</script>';
?>