var router = require('express').Router();

router.get('/tasks', function(req, res, next) {
    res.send('API here');
});

module.exports = router;
