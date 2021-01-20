<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnlineChat - Chat Odası</title>


    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <link href="fontawesome-free-5.14.0-web/css/all.css" rel="stylesheet"> <!-- indirdiğimiz icon dosyasındaki kütüphaneyi burda çağırıyoruz -->

    <link rel="stylesheet" href="css/giris.css">

    <style>
      * { margin: 0; padding: 0; box-sizing: border-box; }
      body { font: 13px Helvetica, Arial; }
      form { background: #000; padding: 3px; position: fixed; bottom: 26px;  width: 41%; }
      form input { border: 0; padding: 10px; width: 90%; margin-right: .5%; }
      form button { width: 9%; background: rgb(130, 224, 255); border: none; padding: 10px; }
      #messages { list-style-type: none; margin: 0; padding: 0;   }
      #messages li { padding: 5px 10px; }
      #messages li:nth-child(odd) { background: #eee; }
      #messages { margin-bottom: 40px; margin-top: 47px; }
    </style>

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
                        <a href="#" class="nav-link">
                            Profil
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            Chat Odası
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            Çıkış
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

    
        <div class="orta-kayit" style="width: 557px;">
            
        <ul id="messages"></ul>
            <form action="">
            <input id="m" autocomplete="off" /><button>Send</button>
            </form>
             <script src="https://cdn.socket.io/socket.io-1.2.0.js"></script>
            <script src="https://code.jquery.com/jquery-1.11.1.js"></script>
            <script>
         $(function () {
		  var endpoint = 'https://chat-uygulamasi.herokuapp.com/'; // server bilgilerine ait olan link
          var socket = io(endpoint);
      // var socket = io();
        $('form').submit(function(){
          socket.emit('chat message', $('#m').val());
          $('#m').val('');
          return false;
        });
        socket.on('chat message', function(msg){
          $('#messages').append($('<li>').text(msg));
          window.scrollTo(0, document.body.scrollHeight);
        });
      });
    </script>
    
        </div>
        
    
</body>

</html>