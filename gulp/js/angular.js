var themeFolder = '/wp-content/themes/pn';

var ProspectNowApplication = angular.module('ProspectNowMarketing', [
	'ngMaterial',
	'ngMessages'
]).config(['$httpProvider', function($httpProvider) {
	$httpProvider.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded';
	$httpProvider.defaults.transformRequest = [function(obj) {
        var str = [];
        for(var p in obj) {
            str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
        }
        return str.join("&");
    }].concat($httpProvider.defaults.transformRequest);
}]);

// ProspectNow Login Modal
ProspectNowApplication.controller('LogInController', ['$scope', '$http', '$mdDialog', function($scope, $http, $mdDialog) {
	$scope.openLogin = function(ev) {
		$mdDialog.show({
	      controller: 'DialogLoginController',
	      templateUrl: themeFolder + '/_assets/html/login.tpl.html',
	      parent: angular.element(document.body),
	      targetEvent: ev,
	      clickOutsideToClose: true
	  	});
	};
}]);

ProspectNowApplication.controller('PortalController', ['$scope', '$http', '$mdDialog', function($scope, $http, $mdDialog) {
	$scope.openVideo = function(ev) {
		$mdDialog.show({
			controller: 'VideoViewController',
			templateUrl: themeFolder + '/_assets/html/video.tpl.html',
			parent: angular.element(document.body),
			targetEvent: ev,
			clickOutsideToClose: true,
			locals: {
				videoEmbed: ev.currentTarget.dataset.dialog
			}
		});
	}
}]);

ProspectNowApplication.controller('VideoViewController', ['$scope', '$http', '$mdDialog', 'videoEmbed', '$sce', function($scope, $http, $mdDialog, videoEmbed, $sce) {
	$scope.video = $sce.trustAsResourceUrl(videoEmbed);
	$scope.close = function() {
      $mdDialog.cancel();
    };

}]);

ProspectNowApplication.controller('DialogLoginController', ['$scope', '$http', '$mdDialog', function($scope, $http, $mdDialog) {
	$scope.loginForm = {
		'remember_me': false
	};

	$scope.cancel = function() {
      $mdDialog.cancel();
    };

}]);

ProspectNowApplication.controller('SignUpController', ['$http', function($http) {
	var signup = this;
	signup.form = {
		'first_name': '',
		'last_name': '',
		'user_name': '',
		'phone': '',
		'prole': '',
		'cPassword': '',
		'newsletter': true,
		'TOU': '',
	};

}]);

ProspectNowApplication.controller('SliderController', ['$scope', function($scope) {
	$scope.commissions = {
		"marketing": parseInt(document.getElementById('defaultMarketing').value),
		"sales": parseInt(document.getElementById('defaultSales').value),
		"deal": parseInt(document.getElementById('defaultDeal').value)
	};
}]);

angular.element(document).ready(function ($) {

	console.log('jquery document ready works');

	var inputFields = '.field input:not([type="checkbox"]), .field textarea';
	var bodyTag = jQuery('body');

	jQuery(inputFields).each(function(i) {
		var inputFieldsObject = jQuery(inputFields);
		if(jQuery(inputFieldsObject[i]).val() != '') {
			jQuery(inputFieldsObject[i]).prev('label').addClass('focused');
		}
	});

	bodyTag.on('focus', '.field input, .field textarea', function() {
		var currentInput = jQuery(this);
		currentInput.prev('label').addClass('focused');
	});

	bodyTag.on('blur', '.field input, .field textarea', function() {
		var currentInput = jQuery(this);
		if(currentInput.val() == '') {
			currentInput.prev('label').removeClass('focused');
		}
	});
	
	/*
	 * Chart JS
	 */
	jQuery('.chart').each(function(){

		var ctx = jQuery(this);

		var data = {
		    labels: [
		        "bLuE",
		        "oRaNgE",
		        "gReEn"
		    ],
		    datasets: [
		        {
		            data: [70, 15, 15],
		            backgroundColor: [
		                "#A2CFF6",
		                "#FC8801",
		                "#7AC16F"
		            ],
		            hoverBackgroundColor: [
		                "#A2CFF6",
		                "#FC8801",
		                "#7AC16F"
		            ]
		        }]
		};

		var myPieChart = new Chart(ctx,{
		    type: 'pie',
		    data: data,
		    options: {
				legend: {
					display: false
				}
			}
		});

	});
	
	/*
	 * Accordion Functions
	 */
	jQuery('.accordion-title').on('click tap', function(){
		jQuery(this).parent().toggleClass('show-content');
	});
	
	/*
	 * Mobile Menu
	 */
	jQuery(document).on('click tap', '.mobile-menu', function(e){
		e.preventDefault();
		jQuery('body').toggleClass('menu-visible');
	});
	
	/*
	 * If Demo Callouts Template
	 */
	if ( $('.page-template-tpl-demo-callouts').length ) {
		
		var $videoIframe = $('#videoPlaying'),
			$modalTitle = $('.md-toolbar-tools .title');
		
		/*
		 * On click of video-dialog link
		 */
		jQuery(document).on('click tap', '.demo-sections .video-dialog', function(e){
			var $this = $(this),
				$videoURL = $this.data('video-url'),
				$modalTitleText = $this.data('title'),
				$id = $this.data('id');
			$('body').addClass('md-dialog-is-showing');
			$videoIframe.attr('src', $videoURL + '?autoplay=1');
			$modalTitle.append( '<h2>' + $modalTitleText + '</h2>' );
			$('.other-videos a[data-id="'+$id+'"]').addClass('active');
			return false;
		});
		
		/*
		 * On click of other videos link
		 */
		jQuery(document).on('click tap', '.other-videos.popup a', function(e){
			var $this = $(this),
				$videoURL = $this.data('video-url'),
				$modalTitleText = $this.data('title');
			$videoIframe.attr('src', $videoURL + '?autoplay=1');
			$modalTitle.find('h2').text($modalTitleText);
			$this.addClass('active').parent().siblings().find('a').removeClass('active');
			return false;
		});
		
		jQuery(document).on('click tap', '.other-videos.training a', function(e){
			var $this = $(this),
				$videoURL = $this.data('video-url');
			$videoIframe.attr('src', $videoURL + '?autoplay=1');
			$this.addClass('active').parent().siblings().find('a').removeClass('active');
			return false;
		});
		
		/*
		 * Close modal function
		 */
		function closeModal($videoIframe){
			$('body').removeClass('md-dialog-is-showing');
			$videoIframe.attr('src', '');
			$modalTitle.find('h2').remove();
			$('.other-videos a').removeClass('active');
			return false;
		}
		
		/*
		 * On click of close-modal link
		 */
		jQuery(document).on('click tap', '.close-modal', function(){
			closeModal($videoIframe);
		});
		
		/*
		 * On click of md-dialog-backdrop
		 */
		jQuery(document).on('click tap', '.demo-sections .md-dialog-backdrop', function(){
			closeModal($videoIframe);
		});
		
	}
	
	if ( $('.page-template-tpl-training').length ) {
		
		var $videoIframe = $('#videoPlaying');
		
		jQuery(document).on('click tap', '.other-videos.training a', function(e){
			var $this = $(this),
				$videoURL = $this.data('video-url');
			$videoIframe.attr('src', $videoURL + '?autoplay=1');
			$this.addClass('active').parent().siblings().find('a').removeClass('active');
			return false;
		});
		
		jQuery('.other-videos.training li:first-child a').addClass('active');
		
	}
	
	jQuery('#Hero select').each(function(){
		$(this).wrap('<span class="custom-select"></span>');
	});
	
	jQuery('#MainNavigation .menu-item-has-children').append('<span class="sub-menu-toggle fa fa-chevron-down"></span>');
	
	jQuery(document).on('click tap', '.sub-menu-toggle', function(){
		$(this).parent().toggleClass('open-sub-menu');
	});

});
