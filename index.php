<?php include('baglan.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <link href="fontawesome-free-5.14.0-web/css/all.css" rel="stylesheet"> <!-- indirdiğimiz icon dosyasındaki kütüphaneyi burda çağırıyoruz -->

    <link rel="stylesheet" href="css/giris.css">



</head>


<body>
    <!-- shift+alt+f tuşu kodu düzenliyor -->
    <!-- css kodları tarayıcıda kaldığı için ctrl+f5 ile yenile tarayıcıyı -->
    <nav>
        <!-- mantıksal etiket kullandık html5  -->
        <div class="ust">
            <div id="logo-box">

                <a href="index.php" class="logo text-uppercase">
                    <i class="fas fa-home" id="home">Home</i>

                </a>
            </div>

            <div id="nav-links">
                <ul>
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">
                            Giriş Sayfası
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="kayit.php" class="nav-link">
                            Kayıt Ol
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            İletişim
                        </a>
                    </li>
                </ul>
            </div>

        </div>


    </nav>

    <div class="sol">

        <img src="css/resim/gorsel.png" width="412" height="412" alt="tel">

    </div>


    <div class="sag">
        <?php
        $baglan1 = $_SESSION["baglan"];
        $mail = '';
        if (isset($_COOKIE['guvenlik'])) $mail = $_COOKIE['guvenlik'];
        $ad = '';
        $email = '';
        $sorgu = mysqli_query($baglan1, "Select *from uyeler where mail='$mail'");
        while ($vt = mysqli_fetch_array($sorgu)) {
            $ad = $vt['ad'];
            $email = $vt['mail'];
        }
        ?>
        <table border="0">
            <tr>
                <td width="100" rowspan="1" align="center" valign="center">

                <span><span style="display:<?php if(!isset($_COOKIE['guvenlik'])) echo 'none;' ?>"> <!-- devamı altta -->
                Hoşgeldin<a href="#'<?php echo $email;  ?>'" class=""> <?php echo $ad; ?>
                </td>
                <td><span style="display:<?php if(!isset($_COOKIE['guvenlik'])) echo 'none;' ?>"><a href="cikis.php">Çıkış</a></td>
            </tr>
        </table>
    </div>



    <div class="orta">


        <form id="form1" name="form1" method="post" action="action.php">
            <p id="birinci"> <b> Mail Adresiniz : </b></p>
            <input id="input1" type="text" name="mail">

            <p id="ikinci"> <b> Şifreniz : </b></p>
            <input id="input2" type="sifre" name="sifre">

            <br>

            <input name="action" type="hidden" id="action" value="entrance" />
            <input type="submit" class="btn btn-primary btn-lg" name="button3" id="button3" value="Giriş Yap" />
        </form>
    </div>

</body>

</html>