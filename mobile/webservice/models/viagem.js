'use strict';

module.exports = class Modal {
    constructor(conexao) {
        this.conexao = conexao;
    }

    buscar() {
        var $query =
                'SELECT * FROM viagens';

            return new Promise((resolve, reject) => {
                this.conexao.query($query, (err, results, fields) => {
                    if (err) {
                        // Reject the Promise with an error
                        return reject(err);
                    }

                    // Resolve (or fulfill) the promise with data
                    return resolve(results);
                });
            });
    }


    buscar_por_id(id) {

        var $query =
            'SELECT * FROM viagens where id =?';

        return new Promise((resolve, reject) => {
            this.conexao.query($query, [id],(err, results, fields) => {
                if (err) {
                    // Reject the Promise with an error
                    return reject(err);
                }

            
                // Resolve (or fulfill) the promise with data
                return resolve(results);
            });
        });

    }

    buscar_por_id_join_modal(id) {

        var $query =
            'SELECT viagens.*,modais.nome as nome_modal FROM viagens JOIN modais ON viagens.id_modal = modais.id where viagens.id =?';

        return new Promise((resolve, reject) => {
            this.conexao.query($query, [id],(err, results, fields) => {
                if (err) {
                    // Reject the Promise with an error
                    return reject(err);
                }
            
                // Resolve (or fulfill) the promise with data
                return resolve(results);
            });
        });

    }

    inserir(viagem) {
        return new Promise((resolve, reject) => {
            this.conexao.query('INSERT INTO viagens (id_modal, id_usuario, quilometragem, horario_inicial, horario_final, imagem) VALUES (?,?,?,?,?,?)', [viagem.id_modal, viagem.id_usuario, viagem.quilometragem, viagem.horario_inicial, viagem.horario_final, viagem.imagem], function (err, results, fields) {
                if (err) {
                    // Reject the Promise with an error
                    return reject(err);
                }

                // Resolve (or fulfill) the promise with data
                return resolve(results);
            });
        });
    }


    atualizar(id_viagem, viagem) {
        return new Promise((resolve, reject) => {
            this.conexao.query('UPDATE viagens SET ? WHERE ?', [viagem, id_viagem], function (err, results, fields) {
                if (err) {
                    // Reject the Promise with an error
                    return reject(err);
                }

                // Resolve (or fulfill) the promise with data
                return resolve(results);
            });
        });
    }


    deletar(id_viagem) {
        return new Promise((resolve, reject) => {
            this.conexao.query('DELETE FROM viagens WHERE ?', id_viagem, function (err, results, fields) {
                if (err) {
                    // Reject the Promise with an error
                    return reject(err);
                }

                // Resolve (or fulfill) the promise with data
                return resolve(results);
            });
        });
    }




};