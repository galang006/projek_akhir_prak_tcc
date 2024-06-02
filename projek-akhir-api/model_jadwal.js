var dbConn = require("./db");

var Jadwal = function(jadwal) {
    this.mk = jadwal.mk;
    this.jurusan = jadwal.jurusan;
    this.lab = jadwal.lab;
    this.waktu = jadwal.waktu;
};

Jadwal.create = function(newJadwal, result) {
    dbConn.query(
        'INSERT INTO jadwal (mk, jurusan, lab, waktu) VALUES (?, ?, ?, ?)',
        [newJadwal.mk, newJadwal.jurusan, newJadwal.lab, newJadwal.waktu],
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

Jadwal.findAll = function(result) {
    dbConn.query(
        'SELECT * FROM jadwal',
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

Jadwal.findById = function(id_jadwal, result) {
    dbConn.query(
        'SELECT * FROM jadwal WHERE id_jadwal = ?',
        [id_jadwal],
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

Jadwal.update = function(id_jadwal, jadwal, result) {
    dbConn.query(
        'UPDATE jadwal SET mk = ?, jurusan = ?, lab = ?, waktu = ? WHERE id_jadwal = ?',
        [jadwal.mk, jadwal.jurusan, jadwal.lab, jadwal.waktu, id_jadwal],
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

Jadwal.delete = function(id_jadwal, result) {
    dbConn.query(
        'DELETE FROM jadwal WHERE id_jadwal = ?',
        [id_jadwal],
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

module.exports = Jadwal;
