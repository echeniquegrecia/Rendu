var mongoose = require('mongoose');
//Build of the schema User
var userSchema = mongoose.Schema({
    username: {type:String, index:true},
    email: {type:String, required:[true], unique:true},
    password: {type:String},
    followings: [{ type: mongoose.Schema.Types.ObjectId, ref: 'User' }],
    followers: [{ type: mongoose.Schema.Types.ObjectId, ref: 'User' }],
    tweet: [{ type: mongoose.Schema.Types.ObjectId, ref: 'Tweet' }]
});
//Build of the schema Tweet
var tweetSchema = mongoose.Schema({
    tweet: {type:String, index:true},
    author: { type: mongoose.Schema.Types.ObjectId, ref: 'User' },
    date: {type: Date, default: Date.now},
    hashtag: [{ type: mongoose.Schema.Types.ObjectId, ref: 'Hashtag' }]
});
//Build of the schema Hashtag
var hashtagSchema = mongoose.Schema({
    hashtag: {type:String, index:true},
    author: { type: mongoose.Schema.Types.ObjectId, ref: 'User' },
    date: {type: Date, default: Date.now}

});

//The model
var User = mongoose.model('user', userSchema); //'user' is the table name in the db
var Tweet = mongoose.model('tweet', tweetSchema); //'tweet' is the table name in the db
var Hashtag = mongoose.model('hashtag', hashtagSchema); //'hashtag' is the table name in the db



//Export of the model
module.exports.User = User;
module.exports.Tweet = Tweet;
module.exports.Hashtag = Hashtag;                                                  