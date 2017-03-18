'use strict';

const Model = require('./model');

const Controller = {
	create: function(data,callback) {
		const model = new Model(data);
		model.save(callback);
	},
	find: function(query,callback) {
		Model.find(query,callback);
	},
	update: function(query, mod, options, callback) {
		options = options || {};
		Model.update(query, mod, options, callback);
	},
	delete: function(query, callback) {
		Model.remove(query, callback);
	}
};

module.exports = Controller;