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

    </div>

    
        <div class="orta-kayit">
        <form id="form1" name="form1" method="post" action="islem.php">
            
            <p id="ad"> <b> Adınız : </b></p>
            <input id="inputAd" type="text" name="ad"> 
            
            <p id="soyad"> <b> Soyadınız : </b></p>
            <input id="inputSoyad" type="text" name="soyad">
            <p id="mail"> <b> Mail Adresiniz : </b></p>
            <input id="inputMail" type="text" name="mail"> 
            
            <p id="sifre"> <b> Şifreniz : </b></p>
            <input id="inputSifre" type="password" name="sifre">
            <p id="tel"> <b> Telefon Numaranız : </b></p>
            <input id="inputTel" type="text" name="cep">
            
            <br>
            
            <input type="submit" class="btn btn-primary btn-lg" name="button4" id="button4" value="Kayıt Ol"/>
        </form>
    
        </div>
    
</body>

</html>