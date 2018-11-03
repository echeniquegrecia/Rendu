var mongoose = require('mongoose');

//Connection with the db: StartPitch
mongoose.connect('//localhost/microbloggos');



exports.usersReadAll = function(request, response){
    response.render('index');
};

exports.usersUpdateOne = function(request, response){
    response.render('index', {
        id: request.param('userid')});
};

exports.usersDeleteOne = function(request, response){
    response.render('index', {
        id: request.param('userid')});
};

