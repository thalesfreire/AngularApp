<!DOCTYPE html>
<html lang="pt" ng-app="Hello">
	
	<head>
	  <meta charset="UTF-8"/>
	  <title>Angular APP</title>
	</head>
	
	<body ng-controller="HelloController">
		
		<button ng-click="incrementar()">Clicar</button>	
			
		<label>Você clicou: {{total}} vezes.</label>
		
		<footer ng-controller="RodapeController">{{copyright}}</footer>
		
		<script src="js/angular.js"></script>
		<script src="js/main.js"></script>
		<script src="controller/HelloController.js"></script>
		<script src="controller/RodapeController.js"></script>
		
	</body>
	
</html>