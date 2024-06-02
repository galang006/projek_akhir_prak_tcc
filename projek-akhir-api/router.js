const express = require('express');
const router = express.Router();
const controller_user = require("./controller_user");
const controller_jadwal = require("./controller_jadwal");

router.get('/user/', controller_user.findAll);
router.post('/user/', controller_user.create);
router.get('/user/:username', controller_user.findByUsername);
router.put('/user/:id_user', controller_user.update);
router.delete('/user/:id_user', controller_user.delete);

router.get('/jadwal/', controller_jadwal.findAll);
router.post('/jadwal/', controller_jadwal.create);
router.get('/jadwal/:id_jadwal', controller_jadwal.findById);
router.put('/jadwal/:id_jadwal', controller_jadwal.update);
router.delete('/jadwal/:id_jadwal', controller_jadwal.delete);

module.exports = router;
