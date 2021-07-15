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

(function ($) {

$(function() {
  var googleCSEWatermark = function(id) {
    var f = $(id)[0];
    if (f && (f.query || f['edit-search-block-form--2'] || f['edit-keys'])) {
      var q = f.query ? f.query : (f['edit-search-block-form--2'] ? f['edit-search-block-form--2'] : f['edit-keys']);
      var n = navigator;
      var l = location;
      if (n.platform == 'Win32') {
        q.style.cssText = 'border: 1px solid #7e9db9; padding: 2px;';
      }
      var b = function() {
        if (q.value == '') {
          q.style.background = '#FFFFFF url(https://www.google.com/cse/intl/' + Drupal.settings.googleCSE.language + '/images/google_custom_search_watermark.gif) left no-repeat';
        }
      };
      var f = function() {
        q.style.background = '#ffffff';
      };
      q.onfocus = f;
      q.onblur = b;
//      if (!/[&?]query=[^&]/.test(l.search)) {
        b();
//      }
    }
  };
  googleCSEWatermark('#search-block-form.google-cse');
  googleCSEWatermark('#search-form.google-cse');
  googleCSEWatermark('#google-cse-results-searchbox-form');
});

})(jQuery);


}
/*
     FILE ARCHIVED ON 15:19:23 Oct 08, 2012 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 12:34:53 Jul 14, 2021.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
*/
/*
playback timings (ms):
  exclusion.robots: 0.14
  RedisCDXSource: 2.723
  esindex: 0.013
  captures_list: 767.709
  exclusion.robots.policy: 0.131
  load_resource: 1038.236
  CDXLines.iter: 21.53 (3)
  LoadShardBlock: 739.354 (3)
  PetaboxLoader3.datanode: 864.134 (4)
  PetaboxLoader3.resolve: 856.47
*/