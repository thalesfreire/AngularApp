var app = angular.module('Funcionarios', ['ngRoute', 'ngResource']);

app.config(function($routeProvider) {
	
	$routeProvider.when('/', {
		templateUrl: 'partials/bem-vindo.tpl.php'	
	});
	
	$routeProvider.when('/funcionarios', {
		templateUrl: 'partials/funcionarios.tpl.php',
		controller: 'FuncionariosController'	
	});
	
	$routeProvider.otherwise({redirectTo: '/'});
	
});
