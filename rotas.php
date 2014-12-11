<!DOCTYPE html>
<html lang="pt" ng-app="Funcionarios">
	
	<head>
	  <meta charset="UTF-8"/>
	  <title>Angular APP</title>
	</head>
	
	<body>
		
		<div ng-include="'header.html'"></div>
		
		<hr />
		
		<div>
			
			<ng-view></ng-view>
			
		</div>
		
		<footer>
			<hr />
			<p>Rodapé</p>
		</footer>
		
		<script src="js/angular.min.js"></script>
		<script src="js/angular-route.min.js"></script>
		<script src="js/angular-resource.min.js"></script>
		<script src="js/main-rotas.js"></script>
		<script src="controller/FuncionariosController.js"></script>
		
	</body>
	
</html>