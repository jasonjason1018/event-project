"use strict";function _classCallCheck(e,o){if(!(e instanceof o))throw new TypeError("Cannot call a class as a function")}function _defineProperties(e,o){for(var t=0;t<o.length;t++){var n=o[t];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(e,n.key,n)}}function _createClass(e,o,t){return o&&_defineProperties(e.prototype,o),t&&_defineProperties(e,t),e}var player;function onYouTubeIframeAPIReady(){player=new YT.Player("player",{height:"100%",width:"100%",playerVars:{autoplay:0,controls:1,showinfo:0,modestbranding:0,loop:1,autohide:0,rel:0}})}var LightBox=function(){function e(){_classCallCheck(this,e)}return _createClass(e,[{key:"open",value:function(e){$(".lightBox").fadeIn(300),player.loadVideoById(e,0,"default")}},{key:"close",value:function(){$(".lightBox").fadeOut(300),player.stopVideo()}}]),e}(),lightBox=new LightBox;$(".teach__video").on("click",function(){var e=$(this).attr("data-id");lightBox.open(e)}),$(".lightBox__close").on("click",function(){lightBox.close()});