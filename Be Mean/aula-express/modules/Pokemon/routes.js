const express = require('express')
const CRUD = require('./_crud.js')
const router = express.Router()


router.post('/', CRUD.create)
router.get('/', CRUD.getAll)
router.get('/:id', CRUD.get)
router.put('/:id', CRUD.update)
router.delete('/:id', CRUD.delete)

module.exports = router
