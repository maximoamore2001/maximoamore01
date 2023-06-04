<?php
// Comprobar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores enviados por el formulario
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    // Validar los campos del formulario
    if (empty($nombre) || empty($email) || empty($mensaje)) {
        echo "Por favor, complete todos los campos.";
    } else {
        // Enviar el correo electrónico
        $to = "cybertechrosario@gmail.com";
        $subject = "Nuevo mensaje del formulario";
        $body = "Nombre: $nombre\nEmail: $email\nMensaje: $mensaje";

        if (mail($to, $subject, $body)) {
            echo "Mensaje enviado con éxito.";
        } else {
            echo "Hubo un error al enviar el mensaje.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/498d1e9147.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Great+Vibes&family=Roboto+Slab&family=Yellowtail&display=swap" rel="stylesheet">
    <title>portfolioVsssss2</title>
</head>

<body>
    <div class="container-fluid wrapper">
        <div class="row">
            <div class="col-12 logo">
                <H1><span>M</span>A</H1>
            </div>
        </div>
        <main class="main row">
            <div class="info-content col-sm-8 col-12 text-center">
                <h1><i class="d-none d-sm-none d-md-block bi bi-mouse"></i>Máximo Amore</h1>
                <p>Desarrollador Front-end y Back-end
                    dedicado a crear sitios web
                </p>
                <a download href="#">
                    <button class="download-cv">Download CV <i class="bi bi-download"></i></button>
                </a>
            </div>
            <div class="col-sm-4 text-center p-3 col-12">
                <img src="img/30_5_2023 07_26_33.png" alt="maximo amore picture">
            </div>
        </main>
    </div>
    </div>
    <div>
        <div class="container-fluid">
            <div class="about row">
                <div class="col-12 col-sm-5 pic d-none d-sm-none d-md-block">
                    <img src="img/DSC_0348.jpeg" alt="maximo amore portrait">
                </div>
                <div class="about-info  col-sm-7 mt-5 col-12">
                    <div>
                        <h2>About Me</h2>
                        <p>Soy un desarrollador web apasionado por la tecnología y entusiasta de la creatividad. Me
                            encanta crear sitios web y aplicaciones, y siempre estoy buscando formas de mejorar mis
                            habilidades en esta área. Aunque no tengo mucha experiencia, estoy emocionado por aprender y
                            enfrentar nuevos desafíos en el campo del desarrollo web.</p>
                    </div>
                    <div class="text-center">

                        <a href="github.com" target="_blank"><button class="download-cv "><i class="bi bi-github"></i></button></a>
                        <a href="linkedin.com" target="_blank"><button class="download-cv "><i class="bi bi-linkedin"></i></button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="skills">
        <div class="container">
            <div class="text-center col-sm-12 col-12">
                <h2 class="pc d-none d-sm-none d-md-block">STACK <i class="bi bi-tools"></i></h2>
                <h2 class="smartphone d-block d-sm-block d-md-none">STACK <i class="bi bi-tools"></i></h2>
            </div>
            <div class="row bloque-programa pt-5" id="">
                <div class="col-sm-3 col-6 text-center html1" id="html1">
                    <p>HTML</p>
                    <img src="img/html5-logo-html-logo-0.png" alt="">
                </div>
                <div class="col-sm-3 col-6 text-center css2" id="css2">
                    <p>CSS</p>
                    <img src="img/css.png" alt="">
                </div>
                <div class="col-sm-3 col-6 text-center js3" id="js3">
                    <p>JAVASCRIPT</p>
                    <img src="img/javascript.jpeg" alt="">
                </div>
                <div class="col-sm-3 col-6 text-center git4" id="git4">
                    <p>GIT</p>
                    <img src="img/git.png" alt="">
                </div>
            </div>
            <div class="row bloque-programa">
                <div class="col-sm-3 col-6 text-center php5" id="php5">
                    <p>PHP</p>
                    <img src="img/hwUcGZ41_400x400.jpg" alt="">
                </div>
                <div class="col-sm-3 col-6 text-center laravel6" id="laravel6">
                    <p>LARAVEL</p>
                    <img src="img/LALARAVELlogo-laravel-1024.png" alt="">
                </div>
                <div class="col-sm-3 col-6 text-center mysql8" id="mysql8">
                    <p>MYSQL</p>
                    <img src="img/mariadb-logo-400x400.png" alt="">
                </div>
                <div class="col-sm-3 col-6 text-center bs9" id="bs9">
                    <p>BOOTSTRAP</p>
                    <img src="img/C9QJ7V3X.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="seccion-3">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="proyecto">Proyectos <i class="bi bi-briefcase-fill"></i></h2>
                </div>
            </div>
            <div class="row proyectos-tarjetas">
                <div class="col-sm-4 col-12">
                    <div class="tarjeta">
                        <a href="https://maximoamoresite.000webhostapp.com/index.php" target="_blank"><img src="img/paginaweb1.png" alt=""></a>
                        <h4 class="text-center">Portfolio anterior</h4>
                        <p class="p-proyecto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque velit ad
                            libero
                            quos accusamus earum? Quod exercitationem ipsam qui quas rem veritatis provident placeat
                            molestiae facilis velit. Praesentium, totam ex.</p>
                    </div>
                </div>
                <div class="col-sm-4 col-12">
                    <div class="tarjeta">
                        <a href="https://maximoamoresite.000webhostapp.com/index.php" target="_blank"><img src="img/paginaweb1.png" alt=""></a>
                        <h4 class="text-center">e-commerce</h4>
                        <p class="p-proyecto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque velit ad
                            libero
                            quos accusamus earum? Quod exercitationem ipsam qui quas rem veritatis provident placeat
                            molestiae facilis velit. Praesentium, totam ex.</p>
                    </div>
                </div>
                <div class="col-sm-4 col-12">
                    <div class="tarjeta">
                        <a href="https://maximoamoresite.000webhostapp.com/index.php" target="_blank"><img src="img/paginaweb1.png" alt=""></a>
                        <h4 class="text-center">Restaurante</h4>
                        <p class="p-proyecto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque velit ad
                            libero
                            quos accusamus earum? Quod exercitationem ipsam qui quas rem veritatis provident placeat
                            molestiae facilis velit. Praesentium, totam ex.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid footer-cliente">
        <div class="row ">
            <div class="text-center ubicacion col-sm-6 col-12">
                <p>Rosario, Santa Fé, Argentina<i class="bi bi-geo-alt"></i></p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d107134.75303890098!2d-60.77903987120364!3d-32.952038204631734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b6539335d7d75b%3A0xec4086e90258a557!2sRosario%2C%20Santa%20Fe!5e0!3m2!1ses-419!2sar!4v1685636183510!5m2!1ses-419!2sar" width="400" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="contacto text-center col-sm-6 col-12">
                <h3>Contacto</h3>
                <p>Para consultas no dudes en comunicarte mediante los siguientes medios
                    <br><i class="bi bi-caret-down-fill"></i>
                </p>
                <a href="github.com" target="_blank"><button class="download-cv "><i class="bi bi-whatsapp"></i></button></a>
                <a href="github.com" target="_blank"><button class="download-cv "><i class="bi bi-envelope"></i></button></a>
                <a href="github.com" target="_blank"><button class="download-cv "><i class="bi bi-facebook"></i></button></a>
            </div>
            <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre"><br><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email"><br><br>

                <label for="mensaje">Mensaje:</label><br>
                <textarea id="mensaje" name="mensaje" rows="4" cols="30"></textarea><br><br>

                <input type="submit" value="Enviar">
            </form>

        </div>
    </div>