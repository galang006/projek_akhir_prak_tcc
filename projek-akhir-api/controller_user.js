const User = require("./model_user");

exports.findAll = function(req, res) {
    User.findAll(function(err, user) {
        console.log('controller_user');
        if (err) res.send(err);
        console.log('res', user);
        res.send(user);
    });
};

exports.create = function(req, res) {
    const new_user = new User(req.body);

    if (req.body.constructor === Object && Object.keys(req.body).length === 0) {
        res.status(400).send({ error: true, message: "Please provide all required fields" });
    } else {
        User.create(new_user, function(err, user) {
            if (err) res.send(err);
            res.json({ error: false, message: "User added successfully!", data: user });
        });
    }
};

exports.findByUsername = function(req, res) {
    User.findByUsername(req.params.username, function(err, user) {
        if (err) res.send(err);
        res.json(user);
    });
};

exports.update = function(req, res) {
    if (req.body.constructor === Object && Object.keys(req.body).length === 0) {
        res.status(400).send({ error: true, message: "Please provide all required fields" });
    } else {
        User.update(req.params.id_user, new User(req.body), function(err, user) {
            if (err) res.send(err);
            res.json({ error: false, message: "User successfully updated" });
        });
    }
};

exports.delete = function(req, res) {
    User.delete(req.params.id_user, function(err, user) {
        if (err) res.send(err);
        res.json({ error: false, message: "User successfully deleted" });
    });
};
