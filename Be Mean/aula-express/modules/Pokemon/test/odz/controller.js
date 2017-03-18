'use strict';
let PokemonModel = require('./model.js')
let CRUD = require('./crud.js')

const Controller = {
	create: (req, res) =>{
		let mod = req.body
		let callback = (err, data) =>{
			if(err) throw new Error(err)
				res.json(data)
		}
		CRUD.create(mod, callback)
	},

	getAll: (req, res) => {
		let callback = () =>{
			if(err) throw new Error(err)
				res.json(data)
		}
		CRUD.find({}, callback)
	},

	get:(req, res) => {
		PokemonModel.findOne({_id: req.params.id}, function (err, data) {
			if (err) return console.log('ERRO: ', err);
			return console.log('Buscou:', data);
		})
	},

	update: (req, res) => {
		PokemonModel.update({_id: req.params.id}, req.body, function(err, data) {
			if(err) throw new Error(err)
				res.json(data)
		})
	},

	delete: (req, res) => {
		let query = {_id: req.params.id}
		PokemonModel.remove(query, function(err, data) {
			if(err) throw new Error(err)
				res.json(data)
		})
	}
}

module.exports = Controller