var createError = require('http-errors');
var express = require('express');
var path = require('path');
var cookieParser = require('cookie-parser');
var logger = require('morgan');
var indexRouter = require('./app_server/routes/index');
var usersRouter = require('./app_server/routes/users');
var tasksRoutes = require('./app_server/routes/tasks');//test
var bodyParser = require('body-parser');
var passwordHash = require('password-hash');
var app = express();
var db = require('./app_server/models/db');
const cors = require('cors');
db = new db();


app.set('port',process.env.PORT);
app.engine('html', require('jade').renderFile);
app.set('view engine', 'jade');
//middlewares: fonction that are executed before a request from a client
app.use(cors()); //Angular will generate a client with a server(4000) differente to the server of the app server(3000), 2 server communicating
app.use(express.json()); //This lets to implement body parser, this allows to the server of the express to understand the infomation json sent by Angular
//static files
app.use(express.static(path.join(__dirname, 'dist'))); // This is to create a code the html and javscript from Angular



// app.use(function (req, res, next) {
//
//     // Website you wish to allow to connect
//     res.setHeader('Access-Control-Allow-Origin', 'http://localhost:4200');
//
//     // Request methods you wish to allow
//     res.setHeader('Access-Control-Allow-Methods', 'GET, POST, OPTIONS, PUT, PATCH, DELETE');
//
//     // Request headers you wish to allow
//     res.setHeader('Access-Control-Allow-Headers', 'X-Requested-With,content-type');
//
//     // Set to true if you need the website to include cookies in the requests sent
//     // to the API (e.g. in case you use sessions)
//     res.setHeader('Access-Control-Allow-Credentials', true);
//
//     // Pass to next layer of middleware
//     next();
// });

// view engine setup
app.set('views', path.join(__dirname,'app_server', 'views'));
app.set('view engine', 'jade');
app.use(logger('dev'));
app.use(express.json());
app.use(express.urlencoded({ extended: false }));
app.use(cookieParser());
app.use(express.static(path.join(__dirname, 'public')));
app.use('/', indexRouter);
app.use('/users', usersRouter);
app.use('/api', tasksRoutes);
app.use(indexRouter);

//BodyParser
app.use(bodyParser.urlencoded({extended: false}));
app.use(bodyParser.json());

// catch 404 and forward to error handler
app.use(function(req, res, next) {
  next(createError(404));
});

// error handler
app.use(function(err, req, res, next) {
  // set locals, only providing error in development
  res.locals.message = err.message;
  res.locals.error = req.app.get('env') === 'development' ? err : {};

  // render the error page
  res.status(err.status || 500);
  res.render('error');
});

module.exports = app;
