(function($){
  function scrollIntoDiv(view) {
    document.getElementById(view).scrollIntoView({block: 'start', behavior: 'smooth'});
  }
  
  $(document).ready(function() {
   var path = window.location.pathname;
   console.log('MYPATH', path);
   $('.main-navigation ul ul li a').click(function(event) {

    var splipath = path.split('/').indexOf('about-us');
    var splitUrl = $(this).attr('href').split('/').indexOf('about-us')
    console.log('SplitURL', splitUrl);
    console.log('ESELPATH', splipath);
    if (splipath > -1) {

      if (splitUrl > -1) {
        
        event.preventDefault();
       var idEl = $(this).attr('href').split('/').pop().replace('#','');
       console.log('ELDID', idEl);
     scrollIntoDiv(idEl);
      }
    }

})
  })
})(jQuery)

var myIndex = 0;
// carousel();
// function carousel() {
//   var i;
//   var elements = document.getElementsByClassName("mySlides");
//   console.log('CountSlider', elements.length);
//   for (i = 0; i < elements.length; i++) {
//     elements[i].style.display = "none";  
//   }
//   myIndex++;
//   if (myIndex > elements.length) {myIndex = 1}    
//   elements[myIndex-1].style.display = "block";  
//   setTimeout(carousel, 3000); // Change image every 2 seconds
// }