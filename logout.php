<?php
session_start();
if(isset($_SESSION['user_username']) && isset($_SESSION['user_password']))
{
    unset($_SESSION['admin_username']);
    unset($_SESSION['admin_password']);
 
?>
    <script type="text/javascript">
    window.location.href = 'login.php';
    </script>

    <?php
}
else
{
    session_unset();
    session_destroy();
    ?>
    
    <script type="text/javascript">
    window.location.href = 'login.php';
    </script>
    <?php
}

?>