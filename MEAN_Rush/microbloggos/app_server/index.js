const express = require('express');
const app = express();
const cors = require('cors');
//const indexRouter= require('./routes/index'); app.use(indexRoute); according to indexroute
const tasksRoutes = require('./routes/tasks');


//settings
app.set('port',process.env.PORT || 3000);
app.engine('html', require('jade').renderFile);
app.set('view engine', 'jade');


//middlewares: fonction that are executed before a request from a client
app.use(cors()); //Angular will generate a client with a server(4000) differente to the server of the app server(3000), 2 server communicating
app.use(express.json()); //This lets to implement body parser, this allows to the server of the express to understand the infomation json sent by Angular

//Routes
//app.use(indexRouter); according to indexroute
app.use('/api', tasksRoutes);

