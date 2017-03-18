var express = require('express');
//PokemonModel = require('./models/pokemon')
var router = express.Router();

const mongoose = require('mongoose');
const Schema = mongoose.Schema;
const _schema = {
	name:  String,
	attack: Number,
	defense: Number
}
const pokemonSchema = new Schema(_schema);
const PokemonModel = mongoose.model('Pokemon', pokemonSchema);

router.post('/', (req, res, next) => {
	PokemonModel.create(req.body, function(err, data) {
		if(err) throw new Error(err)
			res.json(data)
	})
})

router.get('/', function(req, res, next) {
	PokemonModel.find({}, function (err, data) {
		if(err) throw new Error(err)
			res.json(data)
	})
});

router.get('/:id', function(req, res, next) {
	PokemonModel.find({_id: req.params.id}, function (err, data) {
		if (err) return console.log('ERRO: ', err);
		return console.log('Buscou:', data);
	})
});

router.put('/:id', (req, res, next) => {
	PokemonModel.update({_id: req.params.id}, req.body, function(err, data) {
		if(err) throw new Error(err)
			res.json(data)
	})
})

router.delete('/:id', (req, res, next) => {
	query = {_id: req.params.id}
	PokemonModel.remove(query, function(err, data) {
		if(err) throw new Error(err)
			res.json(data)
	})
});

module.exports = router;
