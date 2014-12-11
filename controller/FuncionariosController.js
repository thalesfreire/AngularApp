app.controller('FuncionariosController', function($scope, $http, $resource){
	
	$scope.mostra = true;
	
	$scope.funcionarios = [];
	
	// $http.get('/AngularApp/rest/FuncionariosRest.php').success(function(retorno) {
		// $scope.funcionarios = retorno;
	// }).error(function(msg){
		// $scope.mensagem = 'Ocorreu um erro durante a chamada do serviço.';
		// console.log(msg);
	// });
	
	var resource = $resource('/AngularApp/rest/FuncionariosRest.php');
	
	function listarFuncionarios() {
		resource.query(function (retorno) {
			$scope.funcionarios = retorno;
		});
	}
	
	listarFuncionarios();
	
	$scope.remove = function(funcionario) {
		//alert(funcionario.id);
		// resource.delete({id: funcionario.id}, function(status){
			// listarFuncionarios();
		// });
	};
});
