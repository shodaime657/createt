<?php
session_start();

require 'database.php';

if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
        $user = $results;
    }
}
?>
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand page-scroll" href="index.php">Create Teach</a>

        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#about" class="page-scroll">Quienes somos?</a></li>
                <li><a  class="page-scroll">Blog</a></li>
                <li><a  class="page-scroll">Foros</a></li>
                <li><a  class="page-scroll">Business</a></li>
                <li><a href="#contact" class="page-scroll">Contactanos</a></li>
                <li><a href="planes.php" class="page-scroll">Planes</a></li>
                <?PHP
                if (empty($_SESSION['email'])) {
                    echo '<li><a class="getstarted scrollto" href="loginmenu.php">¡Ingresar!</a></li>';
                } else {

                    echo '<li><a class="getstarted scrollto" href="loginmenu.php">Cuenta</a></li>';
                }
                ?>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
</nav>