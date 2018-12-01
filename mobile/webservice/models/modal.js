'use strict';

module.exports = class Modal {
    constructor(conexao) {
        this.conexao = conexao;
    }

    buscar() {
        var $query =
                'SELECT * FROM modais';

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
            'SELECT * FROM modal where id =?';

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

    inserir(modal) {
        return new Promise((resolve, reject) => {
            this.conexao.query('INSERT INTO modais (nome) VALUES (?)', modal.nome, function (err, results, fields) {
                if (err) {
                    // Reject the Promise with an error
                    return reject(err);
                }

                // Resolve (or fulfill) the promise with data
                return resolve(results);
            });
        });
    }


    atualizar(id_modal, modal) {
        return new Promise((resolve, reject) => {
            this.conexao.query('UPDATE modais SET ? WHERE ?', [modal, id_modal], function (err, results, fields) {
                if (err) {
                    // Reject the Promise with an error
                    return reject(err);
                }

                // Resolve (or fulfill) the promise with data
                return resolve(results);
            });
        });
    }


    deletar(id_modal) {
        return new Promise((resolve, reject) => {
            this.conexao.query('DELETE FROM modais WHERE ?', id_modal, function (err, results, fields) {
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