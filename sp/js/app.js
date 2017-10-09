
var app = angular.module('MyApp',[]);
var compareTo = function() {
    return {
        require: "ngModel",
        scope: {
            otherModelValue: "=compareTo"
        },
        link: function(scope, element, attributes, ngModel) {
             
            ngModel.$validators.compareTo = function(modelValue) {
                return modelValue == scope.otherModelValue;
            };
 
            scope.$watch("otherModelValue", function() {
                ngModel.$validate();
            });
        }
    };
};
 
app.directive("compareTo", compareTo);

app.controller('FormController',['$scope',function($scope){
	var subForms = [ 
		['enrollment','password','con_password'],
		['fname','mname','lname','father_name','mother_name','f_profession','m_profession','dob','blood_group','catogory'],
		['contact_num','email','p_street','p_city','p_state','p_pincode','l_street','l_city','l_state','l_pincode'],
		['ssc','hsc','guj_per','guj_merit','acpc_merit','d2d_cgpa','year_of_admission','branch','division','sem'],
		['account_num','ifsc','bank_name','bank_branch','adhar_num','election_num']
	];
	$scope.init= function (){
		$scope.user = {
			gender:'male'
		}
	}
	$scope.reg = function(){
		$scope.msg = "Registered..!";
	}
	$scope.isValid= function(param){
		// alert();
		var args = subForms[param];
		for ( i in args){
	
			if( $scope.form[ args[i] ].$valid ){
				continue;
			}
			return false;
		}
		return true;
		// return false;
	}

	$scope.onFormSubmit = function(){
		if( !$scope.form.$valid ){
			return false;
		}
		var that = $(this),
		url = that.attr('action'),
		method = that.attr('method'),
		data = {};

		that.find('[name]').each(function(index ,value){
			var that = $(this),
			name = that.attr('name'),
			value = that.val();

			data[name] = value;
		});

		$.ajax({
			url : url,
			type : method,
			data : data,
			success : function(response){
				console.log(data);
			}
		});
			
	}

/*	$scope.check = function(){
		console.log('hey');
		return false;
	}*/

	

}]);