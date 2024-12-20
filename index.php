<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/8b4042ccf0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">
    <title>Previsão do Tempo</title>
</head>

<body>
    <div class="weather-app">
        <div class="container">
            <header>
                <h3 class="brand">Previsão do Tempo</h3>
                <?php 
                    if (isset($_SESSION['email'])) {
                        echo '<a href="sistema.php"><button type="button" class="btnLogin">Perfil</button></a>';
                    }else {
                        echo '<a href="home-login.php"><button type="button" class="btnLogin">Login</button></a>';
                    }
                ?>
            </header>
            <section>
                <h1 class="temp">--&#176;</h1>
                <div class="city-time">
                    <h1 class="name">--</h1>
                    <small>
                        <span class="max">--</span>
                        -
                        <span class="min">--</span>
                        <br>
                        <span class="time"></span>

                        <span class="date"></span>
                    </small>
                </div>
                <div class="weather">
                    <img src="http://openweathermap.org/img/wn/10d@2x.png" alt="icon" width="75" height="75"
                        class="icon">
                    <span class="condition">--</span>
                </div>
            </section>
        </div>
        <div class="panel">
            <form id="locationInput">
                <input type="text" class="search" placeholder="Buscar Localização...">
                <button type="submit" class="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>
            <ul class="cities">
                <li class="city ld">Luanda</li>
                <li class="city be">Benguela</li>
                <li class="city hu">Huambo</li>
                <li class="city lu">Lubango</li>
            </ul>
            <ul class="details">
                <h4>Detalhes do clima</h4>
                <li>
                    <span>Nuvens</span>
                    <span class="cloud">0%</span>
                </li>
                <li>
                    <span>Umidade</span>
                    <span class="humidity">0%</span>
                </li>
                <li>
                    <span>Vento</span>
                    <span class="wind">0km/h</span>
                </li>
            </ul>
            <footer>
                <a target="_blank">© Angola-Luanda</a>
            </footer>
        </div>
    </div>
    <script src="./js/app.js"></script>
</body>

</html>