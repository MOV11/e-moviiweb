const body_parser = require('body-parser');
const config = require('../config');
const mysql = require('mysql');
const Modal = require('../models/modal');
const Usuario = require('../models/usuario');
const Viagem = require('../models/viagem');
const conexao = mysql.createConnection(config.get_conexao_bd());
const modal_model = new Modal(conexao);
const usuario_model = new Usuario(conexao);
const viagem_model = new Viagem(conexao);

conexao.connect();

module.exports = function (app) {
    

    app.use(body_parser.json());
    app.use(body_parser.urlencoded({
        extended: true
    }));


    app.get('/api/modal/', function req_handle(req, res, next) {
        modal_model
            .buscar()
            .then(results => {
        
                res.status(200).send(results);
            })
            .catch(err => {
                res.status(500).send(err);
            });
    });

    app.get('/api/modal/:id', function req_handle(req, res, next) {
        modal_model
            .buscar_por_id(req.params.id)
            .then(results => {
                console.log(results);

                res.status(200).send(results);
            })
            .catch(err => {
                res.status(500).send(err);
            });
    });

    app.post('/api/modal/', function req_handle(req, res, next) {
        modal_model
            .inserir(req.body)
            .then(results => {
                console.log(results);

                res.status(200).send(results);
            })
            .catch(err => {
                res.status(500).send(err);
            });
    });

    app.put('/api/modal/:id', function req_handle(req, res, next) {
        modal_model
            .atualizar(req.params.id)
            .then(results => {
                console.log(results);

                res.status(200);
            })
            .catch(err => {
                res.status(500).send(err);
            });
    });

    app.delete('/api/modal/:id', function req_handle(req, res, next) {
        modal_model
            .deletar(req.params.id)
            .then(results => {
                console.log(results);

                res.status(200);
            })
            .catch(err => {
                res.status(500).send(err);
            });
    });

    app.get('/api/usuario/', function req_handle(req, res, next) {
        usuario_model
            .buscar()
            .then(results => {
        
                res.status(200).send(results);
            })
            .catch(err => {
                res.status(500).send(err);
            });
    });

    app.get('/api/usuario/:id', function req_handle(req, res, next) {
        usuario_model
            .buscar_por_id(req.params.id)
            .then(results => {
        
                res.status(200).send(results);
            })
            .catch(err => {
                res.status(500).send(err);
            });
    });

    app.post('/api/usuario/', function req_handle(req, res, next) {
        usuario_model
            .inserir(req.body)
            .then(results => {
        
                res.status(200).send(results);
            })
            .catch(err => {
                res.status(500).send(err);
            });
    });

    app.put('/api/usuario/:id', function req_handle(req, res, next) {
        usuario_model
            .atualizar(req.params.id, req.body)
            .then(results => {
        
                res.status(200);
            })
            .catch(err => {
                res.status(500).send(err);
            });
    });

    app.delete('/api/usuario/:id', function req_handle(req, res, next) {
        usuario_model
            .deletar(req.params.id)
            .then(results => {
        
                res.status(200);
            })
            .catch(err => {
                res.status(500).send(err);
            });
    });

    app.get('/api/viagem/', function req_handle(req, res, next) {
        viagem_model
            .buscar()
            .then(results => {
        
                res.status(200).send(results);
            })
            .catch(err => {
                res.status(500).send(err);
            });
    });

    app.get('/api/viagem/:id', function req_handle(req, res, next) {
        viagem_model
            .buscar_por_id(req.params.id)
            .then(results => {
        
                res.status(200).send(results);
            })
            .catch(err => {
                res.status(500).send(err);
            });
    });

    app.post('/api/viagem/', function req_handle(req, res, next) {
        viagem_model
            .inserir(req.body)
            .then(results => {
        
                res.status(200).send(results);
            })
            .catch(err => {
                res.status(500).send(err);
            });
    });

    app.put('/api/viagem/:id', function req_handle(req, res, next) {
        viagem_model
            .atualizar(req.params.id)
            .then(results => {
        
                res.status(200);
            })
            .catch(err => {
                res.status(500).send(err);
            });
    });

    app.delete('/api/viagem/:id', function req_handle(req, res, next) {
        viagem_model
            .deletar(req.params.id)
            .then(results => {
        
                res.status(200);
            })
            .catch(err => {
                res.status(500).send(err);
            });
    });

    
};