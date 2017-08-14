'use strict';


angular.module('app').controller('homepage', ['$scope','$document','$rootScope','$stateParams','$http','$state','$timeout','uiGmapGoogleMapApi','$filter','Upload',
    function($scope,$document,$rootScope,$stateParams,$http,$state,$timeout,uiGmapGoogleMapApi,$filter,Upload) {
        
        $scope.profileName ="Home";
        $scope.c_next_index = 1;
        $('#horizontalTab').easyResponsiveTabs({
			type: 'default', //Types: default, vertical, accordion           
			width: 'auto', //auto or any width like 600px
			fit: true,   // 100% fit in a container
			closed: 'accordion', // Start closed if in accordion view
			activate: function(event) { // Callback function if tab is switched
			var $tab = $(this);
			var $info = $('#tabInfo');
			var $name = $('span', $info);
			$name.text($tab.text());
			$info.show();
			}
		});

        $scope.shiftTab = function(index)
        {
        	//alert(index)
        	$('.step_head_li').removeClass('active');
        	$('#step_head_'+index).addClass('active');
        	$('.step_body_li').removeClass('active');
        	$('#step_body_'+index).addClass('active');
        }

        $scope.teacher = {};
        $scope.teacher.virtual_money = 25.00;
        $scope.step = 1;
		$scope.openModal = function()
		{			
			$('#addStudent').modal('show');
			$scope.step= 1;
		}
               
		$scope.nextstep = function()
		{
			if($scope.step == 1)
				$scope.step = 2;
			else if($scope.step == 2)
				$scope.step = 3;
		}

		$scope.prevstep = function()
		{
			if($scope.step == 2)
				$scope.step = 1;
			else if($scope.step == 3)
				$scope.step = 2;
		}

		$scope.selectFile = function(file)
		{
			console.log(file);
			$scope.file = file;
		}

		$scope.start = function()
		{			
			console.log($scope.teacher)
			if($scope.teacher.start_date != undefined && $scope.teacher.start_date == null)
				$scope.teacher.start_date = $filter('date')($scope.teacher.start_date, 'yyyy-MM-dd');
			if($scope.teacher.end_date != undefined && $scope.teacher.end_date == null)
				$scope.teacher.end_date = $filter('date')($scope.teacher.end_date, 'yyyy-MM-dd');
			console.log($scope.teacher)

			Upload.upload({
				method: 'POST',				
				url: 'api/saveteacher',
				data:{
					file: $scope.file,
					teacher :$scope.teacher,
				}
			})
			.then(function(success){
				console.log(success)
				if(success.data.status == 'success')
				{
					$('$addStudent').modal('hide');
				}				
			},function(error){

			})
		}

		$scope.teacher_signup = function()
		{
			console.log($scope.teacher)
			$http({
				method: 'POST',
				url: 'api/teacher/signup',
				data:$scope.teacher
			}).then(function(success){
				console.log(success)
				if(success.data.status == 'success')
				{
					$scope.teacher.id = success.data.teacher_id;
					$('#addStudent').modal('show');					
				}
			},function(error){

			})
		} 
    }
    ]);