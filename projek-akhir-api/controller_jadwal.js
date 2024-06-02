const Jadwal = require("./model_jadwal");

exports.findAll = function(req, res) {
    Jadwal.findAll(function(err, jadwal) {
        console.log('controller_jadwal');
        if (err) res.send(err);
        console.log('res', jadwal);
        res.send(jadwal);
    });
};

exports.create = function(req, res) {
    const new_jadwal = new Jadwal(req.body);

    if (req.body.constructor === Object && Object.keys(req.body).length === 0) {
        res.status(400).send({ error: true, message: "Please provide all required fields" });
    } else {
        Jadwal.create(new_jadwal, function(err, jadwal) {
            if (err) res.send(err);
            res.json({ error: false, message: "Jadwal added successfully!", data: jadwal });
        });
    }
};

exports.findById = function(req, res) {
    Jadwal.findById(req.params.id_jadwal, function(err, jadwal) {
        if (err) res.send(err);
        res.json(jadwal);
    });
};

exports.update = function(req, res) {
    if (req.body.constructor === Object && Object.keys(req.body).length === 0) {
        res.status(400).send({ error: true, message: "Please provide all required fields" });
    } else {
        Jadwal.update(req.params.id_jadwal, new Jadwal(req.body), function(err, jadwal) {
            if (err) res.send(err);
            res.json({ error: false, message: "Jadwal successfully updated" });
        });
    }
};

exports.delete = function(req, res) {
    Jadwal.delete(req.params.id_jadwal, function(err, jadwal) {
        if (err) res.send(err);
        res.json({ error: false, message: "Jadwal successfully deleted" });
    });
};
