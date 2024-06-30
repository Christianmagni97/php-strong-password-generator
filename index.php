
<?php
session_start();

if(isset($_GET['username'])){
    $_SESSION['name'] = $_GET['username'];?>
    <h1>
        <?php echo 'Benvenuto '. $_SESSION['name']?>
    </h1>
<?php } elseif(isset($_SESSION['name'])) {?>
    <h1>
        <?php echo 'Benvenuto '. $_SESSION['name']?>
    </h1>
<?php } else{?>
    <h1>Non hai accesso</h1>
    <?php }?>