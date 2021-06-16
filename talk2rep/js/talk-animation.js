( function( $ ) {
  console.log('Running Animation');
  $(document).ready(function(){

    /// Append image to submenu
    $('.main-navigation ul ul').append('<div class="triangle-up"></div>');

    var testimonial = [
      {
        name: '-CLIENT 1',
        text: '“Client Quote”'
      },
      {
        name: '-CLIENT 2',
        text: '“Client Quote”'
      },
      {
        name: '-CLIENT 3',
        text: '“Client Quote”'
      },
      {
        name: '-CLIENT 4',
        text: '“Client Quote”'
      },
      {
        name: '-CLIENT 5',
        text: '“Client Quote”'
      },
      {
        name: '-CLIENT 6',
        text: '“Client Quote”'
      }
    ];


    var count = 0;
    function Effecct() {
      $("#demo-sli").addClass('effect-appear');
      $("#demo-sli p:nth-child(1)").text(testimonial[count].text);
      $("#demo-sli p:nth-child(2)").text(testimonial[count].name);

      if(count % 2 === 0) {
        $("#demo-sli").removeClass('effect-appear')
      }
      if(count < Number(testimonial.length - 1)) {
        count++
      } else {
        count = 0;
      }
    }


    var count2 = 0;
    function Effecct2() {
      $("#demo-sli2").addClass('effect-appear');
      $("#demo-sli2 p:nth-child(1)").text(testimonial[count2].text);
      $("#demo-sli2 p:nth-child(2)").text(testimonial[count2].name);

      if(count2 % 2 === 0) {
        $("#demo-sli2").removeClass('effect-appear')
      }
      if(count2 < Number(testimonial.length - 1)) {
        count2++;
      } else {
        count2 = 0;
      }
    }

    // setInterval(function() {
    //   Effecct();
    // }, 3000);


    // setInterval(function() {
    //   Effecct2();
    // }, 3500);


    var options = {
        useEasing: true,
        useGrouping: true,
        separator: ',',
        decimal: '.',
      };
      //counter-thousand
      var million = new CountUp('counter-million', 0, 21939486, 0, 1.5, options);
      if (!million.error) {
      million.start();
      } else {
        console.error(million.error);
      }


      var thousand = new CountUp('counter-thousand', 0, 2000, 0, 1.5, options);
      if (!thousand.error) {
      thousand.start();
      } else {
        console.error(thousand.error);
      }

        ///counter-hundred
        var hundred = new CountUp('counter-hundred', 0, 2000, 0, 1.5, options);
        if (!hundred.error) {
        hundred.start();
        } else {
          console.error(hundred.error);
        }


        ///counter-teen
        var teen = new CountUp('counter-teen', 0, 20, 0, 3.5, options);
        if (!teen.error) {
        teen.start();
        } else {
          console.error(teen.error);
        }

  });



})( jQuery );