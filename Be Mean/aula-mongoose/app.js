const http = require('http')
require('./config')
const mongoose = require('mongoose');
const Schema = mongoose.Schema

const _schema = {
	name:  String,
	attack: Number,
	defense: Number
}


const pokemonSchema = new Schema(_schema);
const PokemonModel = mongoose.model('Pokemon', pokemonSchema);

http.createServer((request, response) =>{
	response.writeHead(200,{"Content-type":"application-json;charset=utf-8"})

	const url = request.url
	console.log('url', url)

	switch (url) {
		case '/listar':
		PokemonModel.find({}, function (err, data) {
			if (err) return console.log('ERRO: ', err);
			return response.end(JSON.stringify(data));
		})
		break;

		case '/criar':
		PokemonModel.create({ name: 'teste' }, function (err, data) {
			if (err) return console.log('ERRO: ', err);
			return response.end(JSON.stringify(data));
		});
		break;

		case '/deletar':
		query = { name: /suissamon/i}

		PokemonModel.remove(query, (err, data) => {
			if (err) return console.log('ERRO: ', err)
				return response.end(JSON.stringify(data));
		})
		break;

		case '/alterar':
		query = { name: /suissamon/i}
		mod = {attack: 9001}

		PokemonModel.update(query, mod, (err, data) => {
			if (err) return console.log('ERRO: ', err)
				return response.end(JSON.stringify(data));
		})
		break;

		default:
		response.end('Rota não encontrada');
		break;

	}

//	response.end()

}).listen(3000)
console.log("Server rodando em localhost:3000")