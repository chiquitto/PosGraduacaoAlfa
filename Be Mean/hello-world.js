const http = require('http')

http.createServer((request, response) =>{
	response.writeHead(200,{"Content-type":"application-json;charset=utf-8"})

	const url = request.url
	console.log('url', url)

	const listagem = [
	{name: "Alex", age: 23},
	{name: "Suissa", age: 3},
	{name: "Tiago", age: 23},
	{name: "Burnes", age: 85}
	]

	switch (url) {
		case '/listar':
		response.write(JSON.stringify(listagem));
		break;

		case '/criar':
		response.write('criar');
		break;

		case '/deletar':
		response.write('deletar');
		break;

		case '/alterar':
		response.write('alterar');
		break;

		default:
		response.end('Rota não encontrada');
		break;

	}

	response.end()

}).listen(3000)
console.log("Server rodando em localhost:3000")