var mongoose = require('mongoose');
const dbURI = 'mongodb://localhost:27017/microbloggos'; //Creation of the connection

module.exports = class Db {
    constructor() {
        // Creation of the db connection
        mongoose.connect(dbURI);
        //When the connection is succesfull
        mongoose.connection.once('open', function () {
            console.log('Mongoose default connection open to ' + dbURI+ ' connection is succesfull');
        });
    };
};