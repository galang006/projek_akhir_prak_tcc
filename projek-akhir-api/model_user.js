var dbConn = require("./db");

var User = function(user) {
    this.username = user.username;
    this.password = user.password;
};

User.create = function(newUser, result) {
    dbConn.query(
        'INSERT INTO user (username, password) VALUES (?, ?)',
        [newUser.username, newUser.password],
        function (err, res) {
            if (err) {
                console.log('error: ', err);
                result(err, null);
            } else {
                console.log(res.insertId);
                result(null, res.insertId);
            }
        }
    );
};

User.findAll = function(result) {
    dbConn.query(
        'SELECT * FROM user',
        function (err, res) {
            if (err) {
                console.log('error: ', err);
                result(null, err);
            } else {
                console.log(res);
                result(null, res);
            }
        }
    );
};

User.findByUsername = function(username, result) {
    dbConn.query(
        'SELECT * FROM user WHERE username = ?',
        [username],
        function (err, res) {
            if (err) {
                console.log('error: ', err);
                result(err, null);
            } else {
                console.log(res);
                result(null, res);
            }
        }
    );
};

User.update = function(id_user, user, result) {
    dbConn.query(
        'UPDATE user SET username = ?, password = ? WHERE id_user = ?',
        [user.username, user.password, id_user],
        function (err, res) {
            if (err) {
                console.log('error: ', err);
                result(err, null);
            } else {
                console.log(res);
                result(null, res);
            }
        }
    );
};

User.delete = function(id_user, result) {
    dbConn.query(
        'DELETE FROM user WHERE id_user = ?',
        [id_user],
        function (err, res) {
            if (err) {
                console.log('error: ', err);
                result(null, err);
            } else {
                result(null, res);
            }
        }
    );
};

module.exports = User;
