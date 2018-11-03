var express = require('express');
var router = express.Router();
var users = require('../controllers/users');
var authentication = require('../controllers/authentication');
var bodyParser = require('body-parser');
router.use(bodyParser.urlencoded({extended:true}));
var path = require('path');
var app = express();
var cors = require('cors');


/* GET home page. */
router.get('/', function(req, res, next) {
  //res.render('index', { title: 'Express' }); //this it is for text
    //res.send("hellooooo"); // test
    res.render('index', { title: 'Hey', message: 'Hello there!'});
});



//******************Users****************************//
router.get('/users', users.usersReadAll);
router.put('/users/:userid', users.usersUpdateOne);
router.delete('/users/:userid', users.usersDeleteOne);

//****************Authentication*******************//
router.post('/register', authentication.register);
router.post('/login', authentication.login);



module.exports = router;
