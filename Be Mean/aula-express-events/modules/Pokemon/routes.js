const express = require('express')
const CRUD = require('./_crud.js')
const router = express.Router()


router.post('/', Controller.create)
router.get('/', Controller.getAll)
router.get('/:id', Controller.get)
router.put('/:id', Controller.update)
router.delete('/:id', Controller.delete)

module.exports = router
