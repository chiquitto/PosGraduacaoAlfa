'use strict';

const Model = require('./model');
const events = require('events')

const eventEmitter = new events.EventEmitter()

function cbCrudCreate(i){
	console.log('recebe: ' i)
	const mod = data.mod
	const callback = data.callback
}

eventEmitter.on('crud:create', cbCrudCreate)

const Controller = {
	create: function(data,callback) {
		const model = new Model(data);
		model.save(callback);
	},
	find: function(query,callback) {
		Model.find(query,callback);
	},
	update: function(query, mod, options) {
		options = options || {};
		Model.update(query, mod, options, callback);
	},
	delete: function(query, callback) {
		Model.remove(query, callback);
	},
};

module.exports = Controller;