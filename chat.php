<?php include('baglan.php'); ?>
<!doctype html>
<html>
  <head>
    <title>Chat</title>
    <style>
      * { margin: 0; padding: 0; box-sizing: border-box; }
      body { font: 13px Helvetica, Arial; }
      form { background: #000; padding: 3px; position: fixed; bottom: 0; width: 100%; }
      form input { border: 0; padding: 10px; width: 90%; margin-right: .5%; }
      form button { width: 9%; background: rgb(130, 224, 255); border: none; padding: 10px; }
      #messages { list-style-type: none; margin: 0; padding: 0; }
      #messages li { padding: 5px 10px; }
      #messages li:nth-child(odd) { background: #eee; }
      #messages { margin-bottom: 40px }
      .chat{ 
          position:absolute;
          margin-left: 90%;
        }
    </style>
  </head>
  <body>

  <div class="chat">
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
        <table border="1">
            <tr>
                <td width="100" rowspan="1" align="center" valign="center">

                <span><span style="display:<?php if(!isset($_COOKIE['guvenlik'])) echo 'none;' ?>"> <!-- devamı altta -->
                Hoşgeldin <?php echo $ad; ?> </span>
               
                </td>
                
            </tr>
        </table>
    </div>
    <ul id="messages"> </ul>
    <form action="">
      <input id="m" autocomplete="off" value="<?php echo $ad; echo " : " ?>"/><button>Send</button>
    </form>
    <script src="https://cdn.socket.io/socket.io-1.2.0.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.js"></script>
    <script>
      $(function () {
		  var socket = io.connect('http://localhost:8080'); // server bilgilerine ait olan link
          
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
   
  </body>
</html>
 