var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http);
var port = process.env.PORT || 3000;
//var cors = require('cors'); // sonradan ekledik cors ile 2 farklı domain arasındaki alışverişi sağlamak için

app.get('/', function(req, res){
  res.sendFile(__dirname + '/chat.html');
});

//app.use(cors());// sonradan ekledik cors ile 2 farklı domain arasındaki alışverişi sağlamak için

io.on('connection', function(socket){
  socket.on('chat message', function(msg){
    io.emit('chat message', msg);
  });
});

http.listen(port, function(){
  console.log('listening on *:' + port);
});
