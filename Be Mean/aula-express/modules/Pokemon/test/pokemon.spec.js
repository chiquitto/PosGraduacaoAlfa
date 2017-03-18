'use strict'
require('./../../../db/config.test')
const assert = require('assert')
const Controller = require('./../_controller')

describe('Pokemon module',() => {
	//before((done) => {
	//	Controller.delete({}, (err,data)=> done())
	//})
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
describe(msg2, () => {
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

describe('_id é o mesmo porém muda o nome', () => {
	it('O objeto alterado deve ter o nome diferente do mod, mas o _id é igual',(done) =>{
		var query = {
			_id: '57af6d7d0391d80c06b6f818'
		}

		var mod = {
			name: 'alex'
		}

		var callback = (err, data) => {
			assert.ok(data.ok)
			done()
		}

		Controller.update(query, mod, callback)

	})
})

describe('removemos um item do banco', () => {
	it('O objeto alterado deve ter o nome diferente do mod',(done) =>{
		var query = {
			_id: '57af6d7d0391d80c06b6f818'
		}

		var mod = {
			name: 'alex'
		}

		var callback = (err, data) => {
			assert.ok(data.ok)
			done()
		}

		Controller.update(query, mod, callback)

	})
})

describe('o objeto deve ser deletado e sua operacao concluida com sucesso', () => {
	it('o objeto precisa ser removido do banco', (done) => {
		let query = {
			_id : '57af6d7d0391d80c06b6f818'
		}
		let callback = (err, data) => {
			assert.ok(data.result.ok)
			done()
		}
		Controller.delete(query, callback)
	})
})
})
