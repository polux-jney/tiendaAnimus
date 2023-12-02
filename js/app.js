(function(){

var app = angular.module('app',[ ]);



app.controller('mainCtrl', ['$scope','$http', function($scope,$http){
  
    $scope.ropas = {};
    $scope.tablaRopas ='../view/inc/tablaRopa.html';

    
    $http.get('../json/ropas.json').success(function(data){
        //peticion correcta
        //ubicacion de la data
        //accinar los valores a la variable local
        //agregar la variable de la data
        
        $scope.ropas = data.ropas;

    });

    $scope.mostrarFil = false;
    $scope.mostrarDes = false;




	$scope.filter = function () {
		
		$scope.mostrarFil = true;
	}

    $scope.filterDes = function () {
		
		$scope.mostrarDes = true;
	}

    $scope.cancelar = function () {
		
		$scope.mostrarFil = false;
        $scope.mostrarDes = false;
       
	}
    $scope.limpiar = function () {

         // Obtén el elemento select
         var miSelect0 = document.getElementById("miSelect0");
         var miSelect1 = document.getElementById("miSelect1");
         var miSelect2 = document.getElementById("miSelect2");
   
         // Obtén el valor de la opción seleccionada actualmente y cambiarlo
         var valorSeleccionado0= miSelect0.value;
         var valorSeleccionado1 = miSelect1.value;
         var valorSeleccionado2 = miSelect2.value;
 
         miSelect0.options[miSelect0.selectedIndex].value = valorSeleccionado0 + "";
         miSelect1.options[miSelect1.selectedIndex].value = valorSeleccionado1 + "";
         miSelect2.options[miSelect2.selectedIndex].value = valorSeleccionado2 + "";
   
         // Cambia el índice seleccionado a la opción 2
         miSelect0.selectedIndex = 0;
         miSelect1.selectedIndex = 0;
         miSelect2.selectedIndex = 0;

         $scope.busqueda = "";

    }


    $scope.colecciones = [
        {id:"", nombre:""},
        { id:"Suéteres", nombre:"Suéteres"},
        { id:"Jeans", nombre:"Jeans"},
        { id:"Playeras", nombre:"Playeras"},
        { id:"Sudaderas", nombre:"Sudaderas"},
        { id:"Gorras", nombre:"Gorras"},
        { id:"Accesorios", nombre:"Accesorios"},
        { id:"bufandas", nombre:"Bufandas"}

    ];

    



}]);





})();
