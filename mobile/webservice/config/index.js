var config_bd = require('./configBD.json');

module.exports = {

    get_conexao_bd: function () {
        return config_bd.BD;
    }
}