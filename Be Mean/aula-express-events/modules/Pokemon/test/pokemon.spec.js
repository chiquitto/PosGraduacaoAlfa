'use strict'
require('./../../../db/config.test')
const assert = require('assert')
const Controller = require('./../_controller')

describe('Pokemon module',() => {
	before((done) => {
		Controller.delete({}, (err,data)=> done())
	})
	var msg1 = 'Quando iniciamos sem pokemons o FIND deve vir vazia'
	describe(msg1, () => {
		it('Deve retornar um Array VAZIO',(done) =>{
			var query = {}
			var callback = (err, data) => {
				assert.equal([], data, 'Lista veio vazia')
			}
			Controller.find(query, callback)
			done()
		})
	})

	var msg2 = 'CREAT'
	describe(msg1, () => {
		it('No CREAT o retorno deve ser o mesmo objeto enviado, adicionado _id',(done) =>{
			var mod = {
				name: 'TESTE',
				attack: 9001,
				defense: 8001
			}
			var callback = (err, data) => {
				assert.ok(data._id, 'Objeto veio correto')
				assert.equal('object', typeof data._id)
				assert.equal('TESTE', data.name)
				assert.equal(9001, data.attack)
				assert.equal(8001, data.defense)
				done()
			}
			Controller.create(mod, callback)

		})
	})
})
