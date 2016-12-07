

app.config(function($stateProvider){
	var homeState = {
		name:'home',
		url:'/home',
		templateUrl:'app/modules/home/home.html'
	}
	var aboutState = {
		name:'about',
		url:'/about',
		templateUrl:'app/modules/about/about.html'
	}


	$stateProvider.state(homeState);
	$stateProvider.state(aboutState);

	
});