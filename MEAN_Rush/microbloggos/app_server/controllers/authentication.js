var User = require('../models/users');
var passwordHash = require('password-hash');

//Controller register
exports.register = function (req, response) {
    if (req.body.username == null || req.body.password == null || req.body.email == null) {
        response.status(400).send('Parameters are missing');
        return;
    }
    var item = {
        username: req.body.username,
        password: passwordHash.generate(req.body.password),
        email: req.body.email,
        followings: [],
        followers: [],
        tweet: []
    };
    var NewUser = new User.User(item);
    NewUser.save(function (err) {
            if (err)
            {
                response.sendStatus(404).send('Error while saving the user')
            }
            response.sendStatus(200);
        //response.render('index');
    });

    //To test in the console if the values are taken.
    console.log('requete body name = ' + req.body.username);
    console.log('requete body password = ' + req.body.password);
    console.log('requete body email = ' + req.body.email);
};


exports.login = function (req, response) {
    if (req.body.email == null || req.body.password == null) {
        response.status(400).send('Parameters are missing');
    }
    User.User.findOne({'email': req.body.email}, function (err, res) {
        if (res !== null)
        {
            User.User.find({'email': req.body.email}, {'password':1}, function (err, res)
            {
               if(passwordHash.verify(req.body.password, res[0]['password'])== true)
               {
                   response.status(200).send('Fine!');
               }
               else
               {
                   response.status(400).send('password is not correct');
               }
            });
        }
        else
        {
            response.status(400).send('email is not correct');
        }
    });
};
