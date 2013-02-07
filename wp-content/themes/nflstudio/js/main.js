
jQuery(document).ready(function($) {
	
	// create the viruss
	var randomNumber = Math.floor((Math.random()*2)+1);	
	if(randomNumber == 1) { // only play it 1/2 of the times
		var windowsize = $(window).width()
		if(windowsize > 750) { // and to windows that are bigger then 750 px
				/* $.firefly({images : ['http://www.nukufilmilastestuudio.ee/uus/wp-content/themes/nflstudio/img/virus1.png', 'http://www.nukufilmilastestuudio.ee/uus/wp-content/themes/nflstudio/img/virus2.png'],total : 1}); */
				$.firefly({images : ['http://www.nukufilmilastestuudio.ee/uus2/wp-content/themes/nflstudio/img/virus1.png', 'http://www.nukufilmilastestuudio.ee/uus2/wp-content/themes/nflstudio/img/virus1.png'],total : 1});
		$("#viiruss").wrap( 
			$('<a>').attr({href: 'http://www.nukufilmilastestuudio.ee/uus2/wp-content/themes/nflstudio/img/viiruse-jutt-kodukale-2.gif', class:'lightview'})); // and don't forget to create the link
		}
	}

	// Creates the time ago text
	$("abbr.timeago").timeago();
		
	// create the mobile navigation
	$(function () {
		$(".menuContainer>ul").tinyNav({
			active: 'current_page_item', // String: Set the "active" class
		});
	});

	// make the sun go around			
	var angle =0;
	setInterval(function(){
			angle+=1;
		 $("#logo").rotate(angle);
	},100);
	

/*
	// functions to make the virus happen
	function makeNewPosition(){
		// Get viewport dimensions (remove the dimension of the div)
		var h = $('#virusWrap').height() - 50;
		var w = $('#virusWrap').width() - 50;
		var nh = Math.floor(Math.random() * h);
		var nw = Math.floor(Math.random() * w);
		return [nh,nw];    
	}


	// initiate the virus
	//virusGoGo(); // we use a new virus instead
	
	function virusGoGo(){
		var newq = makeNewPosition();
		var oldq = $('#virus').offset();
		var speed = calcSpeed([oldq.top, oldq.left], newq);
		$('#virus').animate({ top: newq[0], left: newq[1] }, speed, function(){
			virusGoGo();        
		});
	};

	function calcSpeed(prev, next) {
		var x = Math.abs(prev[1] - next[1]);
		var y = Math.abs(prev[0] - next[0]);
		var greatest = x > y ? x : y;
		var speedModifier = 0.03;
		var speed = Math.ceil(greatest/speedModifier);
		return speed;
	}
	
	// virus taken from:
	// http://stackoverflow.com/questions/13774659/random-movement-in-a-fixed-container
	// http://jsfiddle.net/Xw29r/375/
	*/	
	
});
