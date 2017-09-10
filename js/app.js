
angular.module('myApp',['ngAnimate']);

angular.module('myApp').controller('FormController',FormController);

function FormController(){

	vm = this;
	vm.step = "one";
	vm.stepTwo = stepTwo;
	vm.stepThree = stepThree;
	vm.stepFour = stepFour;
	vm.stepFive = stepFive;

	function stepTwo(){
		vm.step = "two";
	}
	function stepThree(){
		vm.step = "three";
	}
	function stepFour(){
		vm.step = "four";
	}
	function stepFive(){
		vm.step = "five";
	}
}