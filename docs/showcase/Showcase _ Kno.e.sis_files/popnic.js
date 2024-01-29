var _____WB$wombat$assign$function_____ = function(name) {return (self._wb_wombat && self._wb_wombat.local_init && self._wb_wombat.local_init(name)) || self[name]; };
if (!self.__WB_pmw) { self.__WB_pmw = function(obj) { this.__WB_source = obj; return this; } }
{
  let window = _____WB$wombat$assign$function_____("window");
  let self = _____WB$wombat$assign$function_____("self");
  let document = _____WB$wombat$assign$function_____("document");
  let location = _____WB$wombat$assign$function_____("location");
  let top = _____WB$wombat$assign$function_____("top");
  let parent = _____WB$wombat$assign$function_____("parent");
  let frames = _____WB$wombat$assign$function_____("frames");
  let opener = _____WB$wombat$assign$function_____("opener");

// JavaScript Document

// basicamente o efeito funciona clonando o div e colocando o clone por cima na mesma posição e, então, fazendo uma animação de tamanho.
(function( $ ){
    $.fn.popnic = function(user_opts) {
    
        var opts = $.extend({
            useId : "poppedOut",
            padding : 20,
            border: 0,
            speed: 200
        }, user_opts);
     
        return this.each(function(){
        
    // fazer uma cópia do div
            
            //var    $div = $(this).clone();    
      var    $div = $(this).clone();    
            $(this).mouseenter(function(){
                
                // se o div de sobreposição já existe na página, matá-lo.
                $("#"+opts.useId).remove();
                 
                
                // colocar o div na página sobre o outro
                $div.css({
                         "position" : "absolute",
                         "border" : opts.border,
                         "width" : opts.width,
						 "height" : "auto",
                         "top" : $(this).offset().top,
                         "left" : $(this).offset().left,
                         "-moz-border-shadow" : "0px 0px 5px black",
                         "-webkit-box-shadow" : "2px 2px 5px black",
                         //"-webkit-border-radius" : "20px",
                         "z-index" : "500"
                });
                
                // guardar os atributos antigos para fazer a animação de volta
                $div.attr("id", opts.useId)
                    .attr("oldWidth", $(this).width())
                    .attr("oldHeight", "auto")
                    .attr("oldTop", Math.abs($(this).offset().top))
                    .attr("oldLeft", Math.abs($(this).offset().left))
                    .attr("oldPadding", Math.abs($(this).css("padding")));
                    
                // adiciona ao body pra que ele apareça
                $("body").prepend($div);
                
                // animar o div pra fora
                $div.stop().animate({
                    "top" : $(this).offset().top - Math.abs($(this).height - opts.height),
                    "left" : $(this).offset().left - opts.padding,
                    "height" : "auto",
                    "padding" : opts.padding    
                }, opts.speed );
            });
            
            $div.bind('mouseleave', function(){
                $(this).detach();
            
        });
    });

  };
})( jQuery );

}
/*
     FILE ARCHIVED ON 23:14:34 Apr 01, 2015 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 18:22:45 Aug 23, 2022.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
*/
/*
playback timings (ms):
  captures_list: 121.185
  exclusion.robots: 0.119
  exclusion.robots.policy: 0.109
  RedisCDXSource: 5.646
  esindex: 0.009
  LoadShardBlock: 95.278 (3)
  PetaboxLoader3.datanode: 134.303 (5)
  CDXLines.iter: 16.515 (3)
  load_resource: 806.297 (2)
  PetaboxLoader3.resolve: 702.197 (2)
*/