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

/* $Id: lightbox_video.js,v 1.1.4.20 2010/09/21 17:57:22 snpower Exp $ */

/**
 * Lightbox video
 * @author
 *   Stella Power, <http://drupal.org/user/66894>
 */
var Lightvideo;

// start jQuery block
(function ($) {

Lightvideo = {

  // startVideo()
  startVideo: function (href) {
    if (Lightvideo.checkKnownVideos(href)) {
      return;
    }
    else if (href.match(/\.mov$/i)) {
      if (navigator.plugins && navigator.plugins.length) {
        Lightbox.modalHTML ='<object id="qtboxMovie" type="video/quicktime" codebase="https://web.archive.org/web/20121008151948/http://www.apple.com/qtactivex/qtplugin.cab" data="'+href+'" width="'+Lightbox.modalWidth+'" height="'+Lightbox.modalHeight+'"><param name="allowFullScreen" value="true"></param><param name="src" value="'+href+'" /><param name="scale" value="aspect" /><param name="controller" value="true" /><param name="autoplay" value="true" /><param name="bgcolor" value="#000000" /><param name="enablejavascript" value="true" /></object>';
      } else {
        Lightbox.modalHTML = '<object classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="https://web.archive.org/web/20121008151948/http://www.apple.com/qtactivex/qtplugin.cab" width="'+Lightbox.modalWidth+'" height="'+Lightbox.modalHeight+'" id="qtboxMovie"><param name="allowFullScreen" value="true"></param><param name="src" value="'+href+'" /><param name="scale" value="aspect" /><param name="controller" value="true" /><param name="autoplay" value="true" /><param name="bgcolor" value="#000000" /><param name="enablejavascript" value="true" /></object>';
      }
    }
    else if (href.match(/\.wmv$/i) || href.match(/\.asx$/i)) {
      Lightbox.modalHTML = '<object NAME="Player" WIDTH="'+Lightbox.modalWidth+'" HEIGHT="'+Lightbox.modalHeight+'" align="left" hspace="0" type="application/x-oleobject" CLASSID="CLSID:6BF52A52-394A-11d3-B153-00C04F79FAA6"><param name="allowFullScreen" value="true"></param><param NAME="URL" VALUE="'+href+'"></param><param NAME="AUTOSTART" VALUE="true"></param><param name="showControls" value="true"></param><embed WIDTH="'+Lightbox.modalWidth+'" HEIGHT="'+Lightbox.modalHeight+'" align="left" hspace="0" SRC="'+href+'" TYPE="application/x-oleobject" AUTOSTART="false"></embed></object>';
    }
    else {
      Lightbox.videoId = href;
      variables = '';
      if (!href.match(/\.swf$/i)) {
        href = Lightbox.flvPlayer + '?file=' + href;
        if (Lightbox.flvFlashvars.length) {
          variables = Lightbox.flvFlashvars;
        }
      }

      Lightvideo.createEmbed(href, "flvplayer", "#ffffff", variables);
    }
  },

  // createEmbed()
  createEmbed: function(href, id, color, variables) {
    var bgcolor = 'bgcolor="' + color + '"';
    var flashvars = '';
    if (variables) {
      flashvars = 'flashvars="' + variables + '"';

    }
    Lightbox.modalHTML = '<embed type="application/x-shockwave-flash" ' +
      'src="' + href + '" ' +
      'id="' + id + '" name="' + id + '" ' + bgcolor + ' ' +
      'quality="high" wmode="transparent" ' + flashvars + ' ' +
      'height="' + Lightbox.modalHeight + '" ' +
      'width="' + Lightbox.modalWidth + '" ' +
      'allowfullscreen="true" ' +
      '></embed>';
  },


  // checkKnownVideos()
  checkKnownVideos: function(href) {
    if (Lightvideo.checkYouTubeVideo(href) || Lightvideo.checkGoogleVideo(href) ||
      Lightvideo.checkMySpaceVideo(href) || Lightvideo.checkLiveVideo(href) ||
      Lightvideo.checkMetacafeVideo(href) ||
      Lightvideo.checkIFilmSpikeVideo(href)
      ) {
      return true;
    }
    return false;
  },


  // checkYouTubeVideo()
  checkYouTubeVideo: function(href) {
    var patterns = [
      'youtube.com/v/([^"&]+)',
      'youtube.com/watch\\?v=([^"&]+)',
      'youtube.com/\\?v=([^"&]+)'
      ];

    for (var i = 0; i < patterns.length; i++) {
      var pattern = new RegExp(patterns[i], "i");
      var results = pattern.exec(href);
      if (results !== null) {
        Lightbox.videoId = results[1];
        var href = "https://web.archive.org/web/20121008151948/http://www.youtube.com/v/"+Lightbox.videoId;
        var variables = 'fs=1';
        if (Lightbox.flvFlashvars.length) {
          variables = variables + '&' + Lightbox.flvFlashvars;
          href = href + '&' + variables;
        }
        Lightvideo.createEmbed(href, "flvvideo", "#ffffff", variables);
        return true;
      }
    }
    return false;
  },

  // checkGoogleVideo()
  checkGoogleVideo: function(href) {
    var patterns = [
      'https://web.archive.org/web/20121008151948/http://video.google.[a-z]{2,4}/googleplayer.swf\\?docId=(-?\\d*)',
      'https://web.archive.org/web/20121008151948/http://video.google.[a-z]{2,4}/videoplay\\?docid=([^&]*)&',
      'https://web.archive.org/web/20121008151948/http://video.google.[a-z]{2,4}/videoplay\\?docid=(.*)'
      ];

    for (var i = 0; i < patterns.length; i++) {
      var pattern = new RegExp(patterns[i], "i");
      var results = pattern.exec(href);
      if (results !== null) {
        Lightbox.videoId = results[1];
        var href = "https://web.archive.org/web/20121008151948/http://video.google.com/googleplayer.swf?docId="+Lightbox.videoId+"&hl=en";
        var variables = 'fs=true';
        if (Lightbox.flvFlashvars.length) {
          variables = variables + '&' + Lightbox.flvFlashvars;
          href = href + '&' + variables;
        }
        Lightvideo.createEmbed(href, "flvvideo", "#ffffff", variables);
        return true;
      }
    }
    return false;
  },

  // checkMetacafeVideo()
  checkMetacafeVideo: function(href) {
    var patterns = [
      'metacafe.com/watch/(\.[^/]*)/(\.[^/]*)/',
      'metacafe.com/watch/(\.[^/]*)/(\.*)',
      'metacafe.com/fplayer/(\.[^/]*)/(\.[^.]*).'
      ];

    for (var i = 0; i < patterns.length; i++) {
      var pattern = new RegExp(patterns[i], "i");
      var results = pattern.exec(href);
      if (results !== null) {
        Lightbox.videoId = results[1];
        Lightvideo.createEmbed("https://web.archive.org/web/20121008151948/http://www.metacafe.com/fplayer/"+Lightbox.videoId+"/.swf", "flvvideo", "#ffffff");
        return true;
      }
    }
    return false;
  },

  // checkIFilmSpikeVideo()
  checkIFilmSpikeVideo: function(href) {
    var patterns = [
      'spike.com/video/[^/&"]*?/(\\d+)',
      'ifilm.com/video/[^/&"]*?/(\\d+)',
      'spike.com/video/([^/&"]*)',
      'ifilm.com/video/([^/&"]*)'
      ];

    for (var i = 0; i < patterns.length; i++) {
      var pattern = new RegExp(patterns[i], "i");
      var results = pattern.exec(href);
      if (results !== null) {
        Lightbox.videoId = results[1];
        Lightvideo.createEmbed("https://web.archive.org/web/20121008151948/http://www.spike.com/efp", "flvvideo", "#000", "flvbaseclip="+Lightbox.videoId+"&amp;");
        return true;
      }
    }
    return false;
  },

  // checkMySpaceVideo()
  checkMySpaceVideo: function(href) {
    var patterns = [
      'src="myspace.com/index.cfm\\?fuseaction=vids.individual&videoid=([^&"]+)',
      'myspace.com/index.cfm\\?fuseaction=vids.individual&videoid=([^&"]+)',
      'src="myspacetv.com/index.cfm\\?fuseaction=vids.individual&videoid=([^&"]+)"',
      'myspacetv.com/index.cfm\\?fuseaction=vids.individual&videoid=([^&"]+)'
      ];

    for (var i = 0; i < patterns.length; i++) {
      var pattern = new RegExp(patterns[i], "i");
      var results = pattern.exec(href);
      if (results !== null) {
        Lightbox.videoId = results[1];
        Lightvideo.createEmbed("https://web.archive.org/web/20121008151948/http://lads.myspace.com/videos/vplayer.swf", "flvvideo", "#ffffff", "m="+Lightbox.videoId);
        return true;
      }
    }
    return false;
  },

  // checkLiveVideo()
  checkLiveVideo: function(href) {
    var patterns = [
      'livevideo.com/flvplayer/embed/([^"]*)"',
      'livevideo.com/video/[^/]*?/([^/]*)/',
      'livevideo.com/video/([^/]*)/'
      ];

    for (var i = 0; i < patterns.length; i++) {
      var pattern = new RegExp(patterns[i], "i");
      var results = pattern.exec(href);
      if (results !== null) {
        Lightbox.videoId = results[1];
        Lightvideo.createEmbed("https://web.archive.org/web/20121008151948/http://www.livevideo.com/flvplayer/embed/"+Lightbox.videoId, "flvvideo", "#ffffff");
        return true;
      }
    }
    return false;
  }

};

//End jQuery block
}(jQuery));

}
/*
     FILE ARCHIVED ON 15:19:48 Oct 08, 2012 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 12:34:51 Jul 14, 2021.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
*/
/*
playback timings (ms):
  captures_list: 288.049
  exclusion.robots: 0.211
  exclusion.robots.policy: 0.192
  RedisCDXSource: 0.823
  esindex: 0.015
  LoadShardBlock: 261.586 (3)
  PetaboxLoader3.datanode: 296.965 (4)
  CDXLines.iter: 22.109 (3)
  load_resource: 101.719
  PetaboxLoader3.resolve: 50.617
*/