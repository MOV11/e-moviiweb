var express = require('express');

var cors = require('cors');

var app = express();

var port = process.env.port || 3999;

var api_controller = require('./controller/api_controller');

app.set('view engine', 'ejs');

app.use('/assets', express.static(__dirname + '/public'));

app.use(cors());

api_controller(app);

app.listen(port, () => {
  console.log('Server ouvindo a porta ' + port);

});