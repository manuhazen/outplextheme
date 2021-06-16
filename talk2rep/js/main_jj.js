console.log('ready from main.jj.js mireille beleau - chez renaultx');

// // Mobile menu status
// ------------------
let isMenuOpen = false;

//------------------------------------------------------
// ---RESPONSIVE EVENTS, LAYOUT DESIGN------------------1071 
// -----------------------------------------------------
//let wf = x => x - 14;

let wf = x => x;

function respondToSize(){
	if(window.innerWidth < wf(1071) ){ // ------------------------------->>
		// ==
		$('ul#primary-menu').insertAfter( $('header#masthead') );
		
		/*
		$('ul#primary-menu').css({
			'height':'0',
			'opacity':'0'
		});
		isMenuOpen = false;
		*/
		$('.home-video-over')
                        .css('height', $('video.home-video').height()+'px');
                $('section.video-home-section')
                        .css('height', $('video.home-video').height()+'px' );

	}
	if(window.innerWidth >= wf(1071) ){ // ------------------------------->>
		// ==
		$('div.menu-top-main-container').append( $('ul#primary-menu') );
		$('ul#primary-menu').css({
			'height':'auto',
			'opacity':'1'
		});
		
		// ==
		$('.home-video-over')
			.css('height', $('video.home-video').height()+'px');
		$('section.video-home-section')
			.css('height', $('video.home-video').height()+'px' );
		
		/*
		console.log('**** video.home-video height-->', $('video.home-video').height());
		console.log('.home-video-over-->', $('.home-video-over').css('height'));
		console.log('.video-home-section-->', $('.video-home-section').css('height'));
		console.log(' ======================== ');
		*/
	}
	

}
respondToSize();

$(window).resize(function(){
	respondToSize();
});





// =============Click event Mobile menu
// ====================================
// ====================================
$('.menu-container button.menu-toggle > img').click(()=>{
	//alert('xuxa');
	if( isMenuOpen == true ){
		isMenuOpen = false;
		console.log('menu is open');
		console.log('isMenuOpen', isMenuOpen);
		$('ul#primary-menu').animate({
			'opacity':'0',
			'height':'0'
		},300);
	}else if( isMenuOpen == false ){
	    isMenuOpen = true;
		console.log('menu is not open');
		console.log('isMenuOpen', isMenuOpen);
		$('ul#primary-menu').animate({
			'opacity':'1',
			'height': $("ul#primary-menu").get(0).scrollHeight
		},300, ()=>{
			$('ul#primary-menu').css('height','auto');
		});
	}
});


// ------------------------------------------ ReCaptcha ERROR Styling
// ------------------------------------------------------------------
$('body').prepend($('.form-status-error'));


