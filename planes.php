<?php
include_once("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CreateTeach</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicons
        ================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

    <!-- Stylesheet
        ================================================== -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
    <link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<?php
require_once("layout/header.php");
?>
<!-- Header -->
<header id="header">
    <div class="intro">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 intro-text">
                        <h1>CREATE TEACH</h1>
                        <p>Aprende Online y vuelvete un profesional en el area de tecnologia :) </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- ======= Pricing Section ======= -->
<div id="pricing" class="pricing-area area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h2>Tabla de Precios</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="pri_table_list">
                    <h3>Gold <br/> <span>$100 / month</span></h3>
                    <ol>
                        <li class="check"><i class="bi bi-check"></i><span>Todos los beneficios de la Básica</span></li>
                        <li class="check"><i class="bi bi-x"></i><span>Mentorías semanales en grupo y en vivo</span>
                        </li>
                        <li class="check"><i class="bi bi-check"></i><span>certificación físico de las Escuelas aprobadas</span>
                        </li>
                        <li class="check"><i class="bi bi-check"></i><span>Paypal hasta en 12 meses sin intereses</span>
                        </li>
                        <li class="check"><i class="bi bi-check"></i><span>Pago en depósito y otros métodos</span></li>

                    </ol>
                    <button>Compra ya!</button>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="pri_table_list active">
                    <span class="saleon">Top ventas</span>
                    <h3>Premium <br/> <span>$300 / month</span></h3>
                    <ol>
                        <li class="check"><i class="bi bi-check"></i><span>Todos los beneficios de la Básica</span></li>
                        <li class="check"><i class="bi bi-check"></i><span>Mentorías semanales en grupo y en vivo</span>
                        </li>
                        <li class="check"><i class="bi bi-check"></i><span>certificación físico de las Escuelas aprobadas</span>
                        </li>
                        <li class="check"><i class="bi bi-check"></i><span>Paypal hasta en 12 meses sin intereses</span>
                        </li>
                        <li class="check"><i class="bi bi-check"></i><span>Pago en depósito y otros métodos</span></li>
                        <li class="check"><i class="bi bi-check"></i><span>Agrega a dos persona a tu plan como beneficiario</span>
                        </li>
                        <li class="check"><i class="bi bi-x"></i><span>Cash back</span></li>
                    </ol>
                    <button>Compra ya!</button>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="pri_table_list">
                    <h3>Empresarial <br/> <span>$1000 / month</span></h3>
                    <ol>
                        <li class="check"><i class="bi bi-check"></i><span>Capacitación online efectiva para elevar el talento en tu empresa</span>
                        </li>
                        <li class="check"><i
                                    class="bi bi-check"></i><span>cursos efectivos de capacitación empresarial.</span>
                        </li>
                        <li class="check"><i
                                    class="bi bi-check"></i><span>Cursos enfocados en generar mejores líderes</span>
                        </li>
                        <li class="check"><i
                                    class="bi bi-check"></i><span>Sigue y analiza el crecimiento de tu equipo</span>
                        </li>
                        <li class="check"><i class="bi bi-check"></i><span>Monitorea el avance de tus colaboradores y analiza su
                                desempeño para motivar el aprendizaje efectivo.</span></li>
                        <li class="check"><i class="bi bi-check"></i><span>Visualiza los cursos más vistos</span></li>
                        <li class="check"><i class="bi bi-check"></i><span>Conoce los cursos destacados más vistos entre tus colaboradores.</span>
                        </li>
                        <li class="check"><i class="bi bi-check"></i><span>Te ayudamos a crear una ruta para favorecer la cultura de aprendizaje en tu empresa.</span>
                        </li>
                        <li class="check"><i class="bi bi-check"></i><span>Analiza el progreso de tu equipo</span></li>
                        <li class="check"><i class="bi bi-check"></i><span>Accede a reportes y estadísticas con el avance de tu equipo al instante.</span>
                        </li>
                        <li class="check"><i
                                    class="bi bi-check"></i><span>Cursos empresariales 100% online y efectivos</span>
                        </li>
                        <li class="check"><i class="bi bi-check"></i><span>Capacita de forma efectiva a tus colaboradores y logra resultados rápidos y de alto impacto para tu empresa.</span>
                        </li>
                        <li class="check"><i class="bi bi-check"></i><span>Certifica a tu equipo.</span></li>
                    </ol>
                    <button>Compra ya!</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Pricing Section -->

<!-- Footer Section -->
<?php
require_once("layout/footer.php");
?>
</body>
</html>