'use strict';

module.exports = class Modal {
    constructor(conexao) {
        this.conexao = conexao;
    }

    buscar() {
        var $query =
                'SELECT * FROM usuarios';

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
            'SELECT * FROM usuarios where id =?';

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

    inserir(usuario) {
        return new Promise((resolve, reject) => {
            this.conexao.query('INSERT INTO usuarios (nome) VALUES (?)', [usuario.nome], function (err, results, fields) {
                if (err) {
                    // Reject the Promise with an error
                    return reject(err);
                }

                // Resolve (or fulfill) the promise with data
                return resolve(results);
            });
        });
    }


    atualizar(id_usuario, usuario) {
        return new Promise((resolve, reject) => {
            this.conexao.query('UPDATE usuarios SET ? WHERE ?', [usuario, id_usuario], function (err, results, fields) {
                if (err) {
                    // Reject the Promise with an error
                    return reject(err);
                }

                // Resolve (or fulfill) the promise with data
                return resolve(results);
            });
        });
    }


    deletar(id_usuario) {
        return new Promise((resolve, reject) => {
            this.conexao.query('DELETE FROM usuarios WHERE ?', id_usuario, function (err, results, fields) {
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