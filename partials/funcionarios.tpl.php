<h1>Lista de Funcionários</h1>
<p>{{mensagem}}</p>
<label>
	Exibir lista
	<input type="checkbox" ng-model="mostra" />
</label>

<label>
	<input type="search" placeholder="parte nome" 
		ng-model="textoFiltro"/>
</label>

<ul ng-show="mostra">
	<li ng-repeat="funcionario in funcionarios | filter: textoFiltro">
		{{funcionario.nome}} <button ng-click="remove(funcionario)">Remover</button>
	</li>
</ul>

<a ng-href="#/">
	Voltar
</a>