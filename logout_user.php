<?php
session_start();
if(isset($_SESSION['admin_username']) && isset($_SESSION['admin_password']))
{
unset($_SESSION['user_username']);
unset($_SESSION['user_password']);
unset($_SESSION['cart']);
//  session_destroy();
print_r($_SESSION);
?>
     <script type="text/javascript">
    window.location.href = 'home.php';
    </script> 

    <?php

}
else
{
    session_unset();
    session_destroy();
print_r($_SESSION);
    // session_destroy();
    ?>
     <script type="text/javascript">
    window.location.href = 'home.php';
    </script> 
<?php
}
?>