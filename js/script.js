
  
    function f(){
      $('#svgfeiras').addClass('fundosvg');
    }
    
    function ent(el){
      console.log('sobre');
    }
    
    function sai(el){
      console.log('saida');
    }

    $(document).ready(function(){
      $('#mysvg').ready(function(){

        $('#my-svg').find('#linkreionalrds').hover(  //rio do sul
          function(){ $('#my-svg').find('#_linkriodosul').addClass('linksel'); },
          function(){ $('#my-svg').find('#_linkriodosul').removeClass('linksel');}
          );

        $('#my-svg').find('#rect2484').hover( //ibirama
          function(){ $('#my-svg').find('#linkibirama').addClass('linksel'); },
          function(){ $('#my-svg').find('#linkibirama').removeClass('linksel');}
          );

        $('#my-svg').find('#rect2976').hover( // ituporanga
          function(){ $('#my-svg').find('#linkituporanga').addClass('linksel'); },
          function(){ $('#my-svg').find('#linkituporanga').removeClass('linksel');}
        );


        $('#my-svg').find('#rect3036').hover( // taio
          function(){ $('#my-svg').find('#linktaio').addClass('linksel'); },
          function(){ $('#my-svg').find('#linktaio').removeClass('linksel');}
        );

      });



      $('#mnregionais').on('click',function(){
        $('#svgfeiras').removeClass('fundosvg');

        myvivus.stop().reset().play(2);
      });

      myvivus = new Vivus('my-svg', { type:'sync', duration: 100 }, f);
      
     
      
    });
