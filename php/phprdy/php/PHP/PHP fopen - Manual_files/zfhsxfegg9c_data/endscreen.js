(function(g){var window=this;'use strict';var bTa=function(a,b){a.Oa("onAutonavCoundownStarted",b)},J5=function(a,b,c){g.M(a.element,"ytp-suggestion-set",!!b.videoId);
var d=b.playlistId;c=b.Je(c?c:"mqdefault.jpg");var e=null,f=null;b instanceof g.fF&&(b.lengthText?(e=b.lengthText||null,f=b.fq||null):b.lengthSeconds&&(e=g.mL(b.lengthSeconds),f=g.mL(b.lengthSeconds,!0)));var h=!!d;d=h&&"RD"===g.bF(d).type;var l=b instanceof g.fF?b.isLivePlayback:null,m=b instanceof g.fF?b.isUpcoming:null;c={title:b.title,author:b.author,author_and_views:b.shortViewCount?b.author+" \u2022 "+b.shortViewCount:b.author,aria_label:b.Bl||g.BH("Watch $TITLE",{TITLE:b.title}),duration:e,
timestamp:f,url:b.Fk(),is_live:l,is_upcoming:m,is_list:h,is_mix:d,background:c?"background-image: url("+c+")":"",views_and_publish_time:b.shortViewCount?b.shortViewCount+" \u2022 "+b.publishedTimeText:b.publishedTimeText,autoplayAlternativeHeader:b.Tm};b instanceof g.eF&&(c.playlist_length=b.playlistLength);a.update(c)},K5=function(a){var b=a.V(),c=b.i;
g.W.call(this,{G:"a",L:"ytp-autonav-suggestion-card",W:{href:"{{url}}",target:c?b.I:"","aria-label":"{{aria_label}}","data-is-live":"{{is_live}}","data-is-list":"{{is_list}}","data-is-mix":"{{is_mix}}","data-is-upcoming":"{{is_upcoming}}"},U:[{G:"div",Ha:["ytp-autonav-endscreen-upnext-thumbnail","ytp-autonav-thumbnail-small"],W:{style:"{{background}}"},U:[{G:"div",W:{"aria-label":"{{timestamp}}"},Ha:["ytp-autonav-timestamp"],ya:"{{duration}}"},{G:"div",Ha:["ytp-autonav-live-stamp"],ya:"Live"},{G:"div",
Ha:["ytp-autonav-upcoming-stamp"],ya:"Upcoming"},{G:"div",L:"ytp-autonav-list-overlay",U:[{G:"div",L:"ytp-autonav-mix-text",ya:"Mix"},{G:"div",L:"ytp-autonav-mix-icon"}]}]},{G:"div",Ha:["ytp-autonav-endscreen-upnext-title","ytp-autonav-title-card"],ya:"{{title}}"},{G:"div",Ha:["ytp-autonav-endscreen-upnext-author","ytp-autonav-author-card"],ya:"{{author}}"},{G:"div",Ha:["ytp-autonav-endscreen-upnext-author","ytp-autonav-view-and-date-card"],ya:"{{views_and_publish_time}}"}]});this.J=a;this.suggestion=
null;this.i=c;this.Qa("click",this.onClick);this.Qa("keypress",this.onKeyPress)},M5=function(a,b){b=void 0===b?!1:b;
g.W.call(this,{G:"div",L:"ytp-autonav-endscreen-countdown-container"});var c=this;this.I=b;this.D=void 0;this.u=0;b=a.V();var d=b.i;this.J=a;this.suggestion=null;this.onVideoDataChange("newdata",this.J.getVideoData());this.T(a,"videodatachange",this.onVideoDataChange);this.i=new g.W({G:"div",L:"ytp-autonav-endscreen-upnext-container",W:{"aria-label":"{{aria_label}}","data-is-live":"{{is_live}}","data-is-list":"{{is_list}}","data-is-mix":"{{is_mix}}","data-is-upcoming":"{{is_upcoming}}"},U:[{G:"div",
L:"ytp-autonav-endscreen-upnext-header"},{G:"div",L:"ytp-autonav-endscreen-upnext-alternative-header",ya:"{{autoplayAlternativeHeader}}"},{G:"a",L:"ytp-autonav-endscreen-link-container",W:{href:"{{url}}",target:d?b.I:""},U:[{G:"div",L:"ytp-autonav-endscreen-upnext-thumbnail",W:{style:"{{background}}"},U:[{G:"div",W:{"aria-label":"{{timestamp}}"},Ha:["ytp-autonav-timestamp"],ya:"{{duration}}"},{G:"div",Ha:["ytp-autonav-live-stamp"],ya:"Live"},{G:"div",Ha:["ytp-autonav-upcoming-stamp"],ya:"Upcoming"}]},
{G:"div",L:"ytp-autonav-endscreen-video-info",U:[{G:"div",L:"ytp-autonav-endscreen-premium-badge"},{G:"div",L:"ytp-autonav-endscreen-upnext-title",ya:"{{title}}"},{G:"div",L:"ytp-autonav-endscreen-upnext-author",ya:"{{author}}"},{G:"div",L:"ytp-autonav-view-and-date",ya:"{{views_and_publish_time}}"},{G:"div",L:"ytp-autonav-author-and-view",ya:"{{author_and_views}}"}]}]}]});g.H(this,this.i);this.i.Ea(this.element);d||this.T(this.i.Fa("ytp-autonav-endscreen-link-container"),"click",this.bI);this.J.Jb(this.element,
this,115127);this.J.Jb(this.i.Fa("ytp-autonav-endscreen-link-container"),this,115128);this.overlay=new g.W({G:"div",L:"ytp-autonav-overlay"});g.H(this,this.overlay);this.overlay.Ea(this.element);this.B=new g.W({G:"div",L:"ytp-autonav-endscreen-button-container"});g.H(this,this.B);this.B.Ea(this.element);this.cancelButton=new g.W({G:"button",Ha:["ytp-autonav-endscreen-upnext-button","ytp-autonav-endscreen-upnext-cancel-button"],W:{"aria-label":"Cancel autoplay"},ya:"Cancel"});g.H(this,this.cancelButton);
this.cancelButton.Ea(this.B.element);this.cancelButton.Qa("click",this.iQ,this);this.J.Jb(this.cancelButton.element,this,115129);this.playButton=new g.W({G:"a",Ha:["ytp-autonav-endscreen-upnext-button","ytp-autonav-endscreen-upnext-play-button"],W:{href:"{{url}}",role:"button","aria-label":"Play next video"},ya:"Play Now"});g.H(this,this.playButton);this.playButton.Ea(this.B.element);this.playButton.Qa("click",this.bI,this);this.J.Jb(this.playButton.element,this,115130);this.C=new g.I(function(){L5(c)},
500);
g.H(this,this.C);this.aI();this.T(a,"autonavvisibility",this.aI)},P5=function(a){var b=a.J.mj(!0,a.J.isFullscreen());
g.M(a.element,"ytp-autonav-endscreen-small-mode",a.uf(b));g.M(a.element,"ytp-autonav-endscreen-is-premium",!!a.suggestion&&!!a.suggestion.bB);g.M(a.J.getRootNode(),"ytp-autonav-endscreen-cancelled-state",!a.J.Wd());g.M(a.J.getRootNode(),"countdown-running",a.Fh());g.M(a.element,"ytp-player-content",a.J.Wd());g.ym(a.overlay.element,{width:b.width+"px"});if(!a.Fh()){a.J.Wd()?N5(a,Math.round(O5(a)/1E3)):N5(a);b=!!a.suggestion&&!!a.suggestion.Tm;var c=a.J.Wd()||!b;g.M(a.element,"ytp-autonav-endscreen-upnext-alternative-header-only",
!c&&b);g.M(a.element,"ytp-autonav-endscreen-upnext-no-alternative-header",c&&!b);g.pK(a.B,a.J.Wd())}},L5=function(a){var b=O5(a),c=Math,d=c.min;
var e=a.u?Date.now()-a.u:0;c=d.call(c,e,b);N5(a,Math.ceil((b-c)/1E3));500>=b-c&&a.Fh()?a.select(!0):a.Fh()&&a.C.start()},O5=function(a){var b=a.J.Ep();
return 0<=b?b:g.S(a.J.V().experiments,"autoplay_time")||1E4},N5=function(a,b){b=void 0===b?-1:b;
a=a.i.Fa("ytp-autonav-endscreen-upnext-header");g.Zg(a);if(0<=b){b=String(b);var c="Up next in $SECONDS".match(RegExp("\\$SECONDS","gi"))[0],d="Up next in $SECONDS".indexOf(c);if(0<=d){a.appendChild(g.Yg("Up next in $SECONDS".slice(0,d)));var e=g.Xg("span");g.Fr(e,"ytp-autonav-endscreen-upnext-header-countdown-number");g.dh(e,b);a.appendChild(e);a.appendChild(g.Yg("Up next in $SECONDS".slice(d+c.length)));return}}g.dh(a,"Up next")},Q5=function(a,b){g.W.call(this,{G:"div",
Ha:["html5-endscreen","ytp-player-content",b||"base-endscreen"]});this.created=!1;this.player=a},R5=function(a){g.W.call(this,{G:"div",
Ha:["ytp-upnext","ytp-player-content"],W:{"aria-label":"{{aria_label}}"},U:[{G:"div",L:"ytp-cued-thumbnail-overlay-image",W:{style:"{{background}}"}},{G:"span",L:"ytp-upnext-top",U:[{G:"span",L:"ytp-upnext-header",ya:"Up Next"},{G:"span",L:"ytp-upnext-title",ya:"{{title}}"},{G:"span",L:"ytp-upnext-author",ya:"{{author}}"}]},{G:"a",L:"ytp-upnext-autoplay-icon",W:{role:"button",href:"{{url}}","aria-label":"Play next video"},U:[{G:"svg",W:{height:"100%",version:"1.1",viewBox:"0 0 72 72",width:"100%"},
U:[{G:"circle",L:"ytp-svg-autoplay-circle",W:{cx:"36",cy:"36",fill:"#fff","fill-opacity":"0.3",r:"31.5"}},{G:"circle",L:"ytp-svg-autoplay-ring",W:{cx:"-36",cy:"36","fill-opacity":"0",r:"33.5",stroke:"#FFFFFF","stroke-dasharray":"211","stroke-dashoffset":"-211","stroke-width":"4",transform:"rotate(-90)"}},{G:"path",L:"ytp-svg-fill",W:{d:"M 24,48 41,36 24,24 V 48 z M 44,24 v 24 h 4 V 24 h -4 z"}}]}]},{G:"span",L:"ytp-upnext-bottom",U:[{G:"span",L:"ytp-upnext-cancel"},{G:"span",L:"ytp-upnext-paused",
ya:"Autoplay is paused"}]}]});this.api=a;this.cancelButton=null;this.D=this.Fa("ytp-svg-autoplay-ring");this.B=this.notification=this.i=this.suggestion=null;this.C=new g.I(this.zy,5E3,this);this.u=0;var b=this.Fa("ytp-upnext-cancel");this.cancelButton=new g.W({G:"button",Ha:["ytp-upnext-cancel-button","ytp-button"],W:{tabindex:"0","aria-label":"Cancel autoplay"},ya:"Cancel"});g.H(this,this.cancelButton);this.cancelButton.Qa("click",this.jQ,this);this.cancelButton.Ea(b);this.cancelButton&&this.api.Jb(this.cancelButton.element,
this,115129);g.H(this,this.C);this.api.Jb(this.element,this,18788);b=this.Fa("ytp-upnext-autoplay-icon");this.T(b,"click",this.kQ);this.api.Jb(b,this,115130);this.cI();this.T(a,"autonavvisibility",this.cI);this.T(a,"mdxnowautoplaying",this.PU);this.T(a,"mdxautoplaycanceled",this.QU);g.M(this.element,"ytp-upnext-mobile",this.api.V().isMobile)},cTa=function(a,b){return b?b:0<=a.api.Ep()?a.api.Ep():g.S(a.api.V().experiments,"autoplay_time")||1E4},S5=function(a,b){b=cTa(a,b);
var c=Math,d=c.min;var e=(0,g.P)()-a.u;c=d.call(c,e,b);b=0===b?1:Math.min(c/b,1);a.D.setAttribute("stroke-dashoffset",""+-211*(b+1));1<=b&&a.Fh()&&3!==a.api.getPresentingPlayerType()?a.select(!0):a.Fh()&&a.i.start()},T5=function(a){Q5.call(this,a,"autonav-endscreen");
this.overlay=this.videoData=null;this.table=new g.W({G:"div",L:"ytp-suggestion-panel",U:[{G:"div",Ha:["ytp-autonav-endscreen-upnext-header","ytp-autonav-endscreen-more-videos"],ya:"More videos"}]});this.K=new g.W({G:"div",L:"ytp-suggestions-container"});this.videos=[];this.B=null;this.D=this.I=!1;this.u=new M5(this.player);g.H(this,this.u);this.u.Ea(this.element);a.getVideoData().Fc?this.i=this.u:(this.i=new R5(a),g.rM(this.player,this.i.element,4),g.H(this,this.i));this.overlay=new g.W({G:"div",
L:"ytp-autonav-overlay-cancelled-state"});g.H(this,this.overlay);this.overlay.Ea(this.element);this.C=new g.KC(this);g.H(this,this.C);g.H(this,this.table);this.table.Ea(this.element);this.table.show();g.H(this,this.K);this.K.Ea(this.table.element);this.hide()},U5=function(a){var b=a.Wd();
b!==a.D&&(a.D=b,a.player.ea("autonavvisibility"),a.D?(a.u!==a.i&&a.u.hide(),a.table.hide()):(a.u!==a.i&&a.u.show(),a.table.show()))},V5=function(a){Q5.call(this,a,"subscribecard-endscreen");
this.i=new g.W({G:"div",L:"ytp-subscribe-card",U:[{G:"img",L:"ytp-author-image",W:{src:"{{profilePicture}}"}},{G:"div",L:"ytp-subscribe-card-right",U:[{G:"div",L:"ytp-author-name",ya:"{{author}}"},{G:"div",L:"html5-subscribe-button-container"}]}]});g.H(this,this.i);this.i.Ea(this.element);var b=a.getVideoData();this.subscribeButton=new g.HN("Subscribe",null,"Unsubscribe",null,!0,!1,b.Xi,b.subscribed,"trailer-endscreen",null,null,a);g.H(this,this.subscribeButton);this.subscribeButton.Ea(this.i.Fa("html5-subscribe-button-container"));
this.T(a,"videodatachange",this.Pa);this.Pa();this.hide()},W5=function(a){var b=a.V(),c=g.zj||g.jE?{style:"will-change: opacity"}:void 0,d=b.i,e=["ytp-videowall-still"];
b.isMobile&&e.push("ytp-videowall-show-text");g.W.call(this,{G:"a",Ha:e,W:{href:"{{url}}",target:d?b.I:"","aria-label":"{{aria_label}}","data-is-live":"{{is_live}}","data-is-list":"{{is_list}}","data-is-mix":"{{is_mix}}"},U:[{G:"div",L:"ytp-videowall-still-image",W:{style:"{{background}}"}},{G:"span",L:"ytp-videowall-still-info",U:[{G:"span",L:"ytp-videowall-still-info-bg",U:[{G:"span",L:"ytp-videowall-still-info-content",W:c,U:[{G:"span",L:"ytp-videowall-still-info-title",ya:"{{title}}"},{G:"span",
L:"ytp-videowall-still-info-author",ya:"{{author_and_views}}"},{G:"span",L:"ytp-videowall-still-info-live",ya:"Live"},{G:"span",L:"ytp-videowall-still-info-duration",ya:"{{duration}}"}]}]}]},{G:"span",Ha:["ytp-videowall-still-listlabel-regular","ytp-videowall-still-listlabel"],U:[{G:"span",L:"ytp-videowall-still-listlabel-icon"},"Playlist",{G:"span",L:"ytp-videowall-still-listlabel-length",U:[" (",{G:"span",ya:"{{playlist_length}}"},")"]}]},{G:"span",Ha:["ytp-videowall-still-listlabel-mix","ytp-videowall-still-listlabel"],
U:[{G:"span",L:"ytp-videowall-still-listlabel-mix-icon"},"Mix",{G:"span",L:"ytp-videowall-still-listlabel-length",ya:" (50+)"}]}]});this.suggestion=null;this.u=d;this.api=a;this.i=new g.KC(this);g.H(this,this.i);this.Qa("click",this.onClick);this.Qa("keypress",this.onKeyPress);this.i.T(a,"videodatachange",this.onVideoDataChange);a.Og(this.element,this);this.onVideoDataChange()},X5=function(a){Q5.call(this,a,"videowall-endscreen");
var b=this;this.J=a;this.B=0;this.stills=[];this.C=this.videoData=null;this.D=this.K=!1;this.S=null;this.u=new g.KC(this);g.H(this,this.u);this.I=new g.I(function(){g.L(b.element,"ytp-show-tiles")},0);
g.H(this,this.I);var c=new g.W({G:"button",Ha:["ytp-button","ytp-endscreen-previous"],W:{"aria-label":"Previous"},U:[g.uK()]});g.H(this,c);c.Ea(this.element);c.Qa("click",this.oQ,this);this.table=new g.mK({G:"div",L:"ytp-endscreen-content"});g.H(this,this.table);this.table.Ea(this.element);c=new g.W({G:"button",Ha:["ytp-button","ytp-endscreen-next"],W:{"aria-label":"Next"},U:[g.vK()]});g.H(this,c);c.Ea(this.element);c.Qa("click",this.nQ,this);a.getVideoData().Fc?this.i=new M5(a,!0):this.i=new R5(a);
g.H(this,this.i);g.rM(this.player,this.i.element,4);this.hide()},Y5=function(a){return g.sM(a.player)&&a.Ku()&&!a.C},Z5=function(a){var b=a.Wd();
b!==a.K&&(a.K=b,a.player.ea("autonavvisibility"))},$5=function(a){g.EM.call(this,a);
var b=this;this.endScreen=null;this.i=this.u=this.B=!1;this.listeners=new g.KC(this);g.H(this,this.listeners);this.env=a.V();dTa(a)?(this.B=!0,eTa(this),this.i?this.endScreen=new T5(a):this.endScreen=new X5(this.player)):this.env.fd?this.endScreen=new V5(this.player):this.endScreen=new Q5(this.player);g.H(this,this.endScreen);g.rM(this.player,this.endScreen.element,4);fTa(this);this.listeners.T(a,"videodatachange",this.onVideoDataChange,this);this.listeners.T(a,g.$y("endscreen"),function(c){b.onCueRangeEnter(c)});
this.listeners.T(a,g.az("endscreen"),function(c){b.onCueRangeExit(c)})},eTa=function(a){var b=a.player.getVideoData();
if(!b||a.i===b.Gh&&a.u===b.Fc)return!1;a.i=b.Gh;a.u=b.Fc;return!0},dTa=function(a){a=a.V();
return a.vb&&!a.fd},fTa=function(a){a.player.Xe("endscreen");
var b=a.player.getVideoData();b=new g.Yy(Math.max(1E3*(b.lengthSeconds-10),0),0x8000000000000,{id:"preload",namespace:"endscreen"});var c=new g.Yy(0x8000000000000,0x8000000000000,{id:"load",priority:8,namespace:"endscreen"});a.player.Dd([b,c])};
g.kM.prototype.Ep=g.ca(2,function(){return this.app.Ep()});
g.QX.prototype.Ep=g.ca(1,function(){return this.getVideoData().eM});g.w(K5,g.W);K5.prototype.select=function(){(this.J.Nj(this.suggestion.videoId,this.suggestion.sessionData,this.suggestion.playlistId,void 0,void 0,this.suggestion.fv||void 0)||this.J.N("web_player_endscreen_double_log_fix_killswitch"))&&this.J.Cb(this.element)};
K5.prototype.onClick=function(a){g.aN(a,this.J,this.i,this.suggestion.sessionData||void 0)&&this.select()};
K5.prototype.onKeyPress=function(a){switch(a.keyCode){case 13:case 32:g.cv(a)||(this.select(),g.bv(a))}};g.w(M5,g.W);g.k=M5.prototype;g.k.Tx=function(a){this.suggestion!==a&&(this.suggestion=a,J5(this.i,a),this.playButton.Ra("url",this.suggestion.Fk()),P5(this))};
g.k.Fh=function(){return 0<this.u};
g.k.Et=function(){this.Fh()||(this.u=Date.now(),L5(this),bTa(this.J,O5(this)),g.M(this.J.getRootNode(),"countdown-running",this.Fh()))};
g.k.qq=function(){this.Em();L5(this);var a=this.i.Fa("ytp-autonav-endscreen-upnext-header");a&&g.dh(a,"Up next")};
g.k.Em=function(){this.Fh()&&(this.C.stop(),this.u=0)};
g.k.select=function(a){this.J.nextVideo(!1,void 0===a?!1:a);this.Em()};
g.k.bI=function(a){g.aN(a,this.J)&&(a.currentTarget===this.playButton.element?this.J.Cb(this.playButton.element):a.currentTarget===this.i.Fa("ytp-autonav-endscreen-link-container")&&(a=this.i.Fa("ytp-autonav-endscreen-link-container"),this.J.gb(a,!0),this.J.Cb(a)),this.select())};
g.k.iQ=function(){this.J.Cb(this.cancelButton.element);g.mM(this.J,!0);this.D&&this.J.Oa("innertubeCommand",this.D)};
g.k.onVideoDataChange=function(a,b){a=b.OX;this.D=null===a||void 0===a?void 0:a.command};
g.k.aI=function(){var a=this.J.Wd();this.I&&this.yb!==a&&g.pK(this,a);P5(this);this.J.gb(this.element,a);this.J.gb(this.cancelButton.element,a);this.J.gb(this.i.Fa("ytp-autonav-endscreen-link-container"),a);this.J.gb(this.playButton.element,a)};
g.k.uf=function(a){return 400>a.width||459>a.height};g.w(Q5,g.W);g.k=Q5.prototype;g.k.create=function(){this.created=!0};
g.k.destroy=function(){this.created=!1};
g.k.Ku=function(){return!1};
g.k.Wd=function(){return!1};
g.k.qL=function(){return!1};g.w(R5,g.W);g.k=R5.prototype;g.k.zy=function(){this.notification&&(this.C.stop(),this.qc(this.B),this.B=null,this.notification.close(),this.notification=null)};
g.k.Tx=function(a){this.suggestion=a;J5(this,a,"hqdefault.jpg")};
g.k.cI=function(){g.pK(this,this.api.Wd());this.api.gb(this.element,this.api.Wd());this.api.gb(this.Fa("ytp-upnext-autoplay-icon"),this.api.Wd());this.cancelButton&&this.api.gb(this.cancelButton.element,this.api.Wd())};
g.k.YU=function(){window.focus();this.zy()};
g.k.Et=function(a){var b=this;this.Fh()||(g.Cv("a11y-announce","Up Next "+this.suggestion.title),this.u=(0,g.P)(),this.i=new g.I(function(){S5(b,a)},25),S5(this,a),bTa(this.api,cTa(this,a)));
g.Ir(this.element,"ytp-upnext-autoplay-paused")};
g.k.hide=function(){g.W.prototype.hide.call(this)};
g.k.Fh=function(){return!!this.i};
g.k.qq=function(){this.Em();this.u=(0,g.P)();S5(this);g.L(this.element,"ytp-upnext-autoplay-paused")};
g.k.Em=function(){this.Fh()&&(this.i.dispose(),this.i=null)};
g.k.select=function(a){a=void 0===a?!1:a;if(this.api.V().N("autonav_notifications")&&a&&window.Notification&&"function"===typeof document.hasFocus){var b=Notification.permission;"default"===b?Notification.requestPermission():"granted"!==b||document.hasFocus()||(this.zy(),this.notification=new Notification("Up Next",{body:this.suggestion.title,icon:this.suggestion.Je()}),this.B=this.T(this.notification,"click",this.YU),this.C.start())}this.Em();this.api.nextVideo(!1,a)};
g.k.kQ=function(a){!g.ch(this.cancelButton.element,g.Yu(a))&&g.aN(a,this.api)&&(this.api.Wd()&&this.api.Cb(this.Fa("ytp-upnext-autoplay-icon")),this.select())};
g.k.jQ=function(){this.api.Wd()&&this.cancelButton&&this.api.Cb(this.cancelButton.element);g.mM(this.api,!0)};
g.k.PU=function(a){this.api.getPresentingPlayerType();this.show();this.Et(a)};
g.k.QU=function(){this.api.getPresentingPlayerType();this.Em();this.hide()};
g.k.xa=function(){this.Em();this.zy();g.W.prototype.xa.call(this)};g.w(T5,Q5);g.k=T5.prototype;g.k.create=function(){Q5.prototype.create.call(this);this.C.T(this.player,"appresize",this.Bu);this.C.T(this.player,"onVideoAreaChange",this.Bu);this.C.T(this.player,"videodatachange",this.onVideoDataChange);this.C.T(this.player,"autonavchange",this.dI);this.C.T(this.player,"autonavcancel",this.lQ);this.onVideoDataChange()};
g.k.show=function(){Q5.prototype.show.call(this);(this.I||this.B&&this.B!==this.videoData.clientPlaybackNonce)&&g.mM(this.player,!1);g.sM(this.player)&&this.Ku()&&!this.B?(U5(this),2===this.videoData.autonavState?this.player.V().N("fast_autonav_in_background")&&3===this.player.getVisibilityState()?this.i.select(!0):this.i.Et():3===this.videoData.autonavState&&this.i.qq()):(g.mM(this.player,!0),U5(this));this.Bu()};
g.k.hide=function(){Q5.prototype.hide.call(this);this.i.qq();U5(this)};
g.k.Bu=function(){var a=this.player.mj(!0,this.player.isFullscreen());U5(this);P5(this.u);g.M(this.element,"ytp-autonav-cancelled-small-mode",this.uf(a));g.M(this.element,"ytp-autonav-cancelled-tiny-mode",this.Gz(a));g.M(this.element,"ytp-autonav-cancelled-mini-mode",400>=a.width||360>=a.height);this.overlay&&g.ym(this.overlay.element,{width:a.width+"px"});if(!this.D){a=g.q(this.videos.entries());for(var b=a.next();!b.done;b=a.next()){var c=g.q(b.value);b=c.next().value;c=c.next().value;g.M(c.element,
"ytp-suggestion-card-with-margin",1===b%2)}}};
g.k.onVideoDataChange=function(){var a=this.player.getVideoData();if(this.videoData!==a&&a){this.videoData=a;if((a=this.videoData.suggestions)&&a.length){this.i.Tx(a[0]);this.i!==this.u&&this.u.Tx(a[0]);for(var b=0;b<gTa.length;++b){var c=gTa[b];if(a&&a[c]){this.videos[b]=new K5(this.player);var d=this.videos[b];c=a[c];d.suggestion!==c&&(d.suggestion=c,J5(d,c));g.H(this,this.videos[b]);this.videos[b].Ea(this.K.element)}}}this.Bu()}};
g.k.dI=function(a){1===a?(this.I=!1,this.B=this.videoData.clientPlaybackNonce,this.i.Em(),this.yb&&this.Bu()):(this.I=!0,this.Wd()&&(2===a?this.i.Et():3===a&&this.i.qq()))};
g.k.lQ=function(a){a?this.dI(1):(this.B=null,this.I=!1)};
g.k.Ku=function(){return 1!==this.videoData.autonavState};
g.k.uf=function(a){return(910>a.width||459>a.height)&&!this.Gz(a)&&!(400>=a.width||360>=a.height)};
g.k.Gz=function(a){return 800>a.width&&!(400>=a.width||360>=a.height)};
g.k.Wd=function(){return this.yb&&g.sM(this.player)&&this.Ku()&&!this.B};
var gTa=[1,3,2,4];g.w(V5,Q5);V5.prototype.Pa=function(){var a=this.player.getVideoData();this.i.update({profilePicture:a.Mh,author:a.author});this.subscribeButton.channelId=a.Xi;var b=this.subscribeButton;a.subscribed?b.u():b.B()};g.w(W5,g.W);W5.prototype.select=function(){(this.api.Nj(this.suggestion.videoId,this.suggestion.sessionData,this.suggestion.playlistId,void 0,void 0,this.suggestion.fv||void 0)||this.api.N("web_player_endscreen_double_log_fix_killswitch"))&&this.api.Cb(this.element)};
W5.prototype.onClick=function(a){g.aN(a,this.api,this.u,this.suggestion.sessionData||void 0)&&this.select()};
W5.prototype.onKeyPress=function(a){switch(a.keyCode){case 13:case 32:g.cv(a)||(this.select(),g.bv(a))}};
W5.prototype.onVideoDataChange=function(){var a=this.api.getVideoData(),b=this.api.V();this.u=a.D?!1:b.i};g.w(X5,Q5);g.k=X5.prototype;g.k.create=function(){Q5.prototype.create.call(this);var a=this.player.getVideoData();a&&(this.videoData=a);this.jl();this.u.T(this.player,"appresize",this.jl);this.u.T(this.player,"onVideoAreaChange",this.jl);this.u.T(this.player,"videodatachange",this.onVideoDataChange);this.u.T(this.player,"autonavchange",this.eC);this.u.T(this.player,"autonavcancel",this.mQ);a=this.videoData.autonavState;a!==this.S&&this.eC(a);this.u.T(this.element,"transitionend",this.oW)};
g.k.destroy=function(){g.Jx(this.u);(0,g.ne)(this.stills);this.stills=[];Q5.prototype.destroy.call(this);g.Ir(this.element,"ytp-show-tiles");this.I.stop();this.S=this.videoData.autonavState};
g.k.Ku=function(){return 1!==this.videoData.autonavState};
g.k.show=function(){Q5.prototype.show.call(this);g.Ir(this.element,"ytp-show-tiles");this.player.V().isMobile?g.Ar(this.I):this.I.start();(this.D||this.C&&this.C!==this.videoData.clientPlaybackNonce)&&g.mM(this.player,!1);Y5(this)?(Z5(this),2===this.videoData.autonavState?this.player.V().N("fast_autonav_in_background")&&3===this.player.getVisibilityState()?this.i.select(!0):this.i.Et():3===this.videoData.autonavState&&this.i.qq()):(g.mM(this.player,!0),Z5(this))};
g.k.hide=function(){Q5.prototype.hide.call(this);this.i.qq();Z5(this)};
g.k.oW=function(a){g.Yu(a)===this.element&&this.jl()};
g.k.jl=function(){if(this.videoData&&this.videoData.suggestions&&this.videoData.suggestions.length){g.L(this.element,"ytp-endscreen-paginate");var a=this.J.mj(!0,this.J.isFullscreen()),b=g.hM(this.J);b&&(b=b.Se()?48:32,a.width-=2*b);var c=a.width/a.height,d=96/54,e=b=2,f=Math.max(a.width/96,2),h=Math.max(a.height/54,2),l=this.videoData.suggestions.length,m=Math.pow(2,2);var n=l*m+(Math.pow(2,2)-m);n+=Math.pow(2,2)-m;for(n-=m;0<n&&(b<f||e<h);){var p=b/2,r=e/2,t=b<=f-2&&n>=r*m,u=e<=h-2&&n>=p*m;if((p+
1)/r*d/c>c/(p/(r+1)*d)&&u)n-=p*m,e+=2;else if(t)n-=r*m,b+=2;else if(u)n-=p*m,e+=2;else break}d=!1;n>=3*m&&6>=l*m-n&&(4<=e||4<=b)&&(d=!0);m=96*b;n=54*e;c=m/n<c?a.height/n:a.width/m;c=Math.min(c,2);m=Math.floor(Math.min(a.width,m*c));n=Math.floor(Math.min(a.height,n*c));a=this.table.element;g.Mm(a,m,n);g.ym(a,{marginLeft:m/-2+"px",marginTop:n/-2+"px"});this.i.Tx(this.videoData.suggestions[0]);this.i instanceof M5&&P5(this.i);g.M(this.element,"ytp-endscreen-takeover",Y5(this));Z5(this);m+=4;n+=4;for(f=
c=0;f<b;f++)for(h=0;h<e;h++)if(p=c,r=0,d&&f>=b-2&&h>=e-2?r=1:0===h%2&&0===f%2&&(2>h&&2>f?0===h&&0===f&&(r=2):r=2),p=g.ng(p+this.B,l),0!==r){t=this.stills[c];t||(t=new W5(this.player),this.stills[c]=t,a.appendChild(t.element));u=Math.floor(n*h/e);var v=Math.floor(m*f/b),y=Math.floor(n*(h+r)/e)-u-4,z=Math.floor(m*(f+r)/b)-v-4;g.Fm(t.element,v,u);g.Mm(t.element,z,y);g.ym(t.element,"transitionDelay",(h+f)/20+"s");g.M(t.element,"ytp-videowall-still-mini",1===r);g.M(t.element,"ytp-videowall-still-large",
2<r);r=t;p=this.videoData.suggestions[p];r.suggestion!==p&&(r.suggestion=p,t=r.api.V(),u=g.Gr(r.element,"ytp-videowall-still-large")?"hqdefault.jpg":"mqdefault.jpg",J5(r,p,u),g.lE(t)&&(t=p.Fk(),t=g.Pi(t,g.ZL("emb_rel_end")),r.Ra("url",t)),(p=(p=p.sessionData)&&p.itct)&&r.api.Bm(r.element,p));c++}g.M(this.element,"ytp-endscreen-paginate",c<l);for(b=this.stills.length-1;b>=c;b--)e=this.stills[b],g.ah(e.element),(0,g.me)(e);this.stills.length=c}};
g.k.onVideoDataChange=function(){var a=this.player.getVideoData();this.videoData!==a&&(this.B=0,this.videoData=a,this.jl())};
g.k.nQ=function(){this.B+=this.stills.length;this.jl()};
g.k.oQ=function(){this.B-=this.stills.length;this.jl()};
g.k.qL=function(){return this.i.Fh()};
g.k.eC=function(a){1===a?(this.D=!1,this.C=this.videoData.clientPlaybackNonce,this.i.Em(),this.yb&&this.jl()):(this.D=!0,this.yb&&Y5(this)&&(2===a?this.i.Et():3===a&&this.i.qq()))};
g.k.mQ=function(a){if(a){for(a=0;a<this.stills.length;a++)this.J.gb(this.stills[a].element,!0);this.eC(1)}else this.C=null,this.D=!1;this.jl()};
g.k.Wd=function(){return this.yb&&Y5(this)};g.w($5,g.EM);g.k=$5.prototype;g.k.Fq=function(){var a=this.player.getVideoData(),b=!!(a&&a.suggestions&&a.suggestions.length);b=!dTa(this.player)||b;var c=a.Oe||g.wE(a.u),d=this.player.vv();a=a.mutedAutoplay;return b&&!c&&!d&&!a};
g.k.Wd=function(){return this.endScreen.Wd()};
g.k.NS=function(){return this.Wd()?this.endScreen.qL():!1};
g.k.xa=function(){this.player.Xe("endscreen");g.EM.prototype.xa.call(this)};
g.k.load=function(){var a=this.player.getVideoData();var b=a.EK;if(b&&b.videoId){var c=this.player.tb().Gd.get("heartbeat");a&&a.suggestions&&a.suggestions.length&&b.videoId===a.suggestions[0].videoId&&!a.rI?a=!1:(this.player.Nj(b.videoId,void 0,void 0,!0,!0,b),c&&c.Pz("HEARTBEAT_ACTION_TRIGGER_AT_STREAM_END","HEARTBEAT_ACTION_TRANSITION_REASON_HAS_NEW_STREAM_TRANSITION_ENDPOINT"),a=!0)}else a=!1;a||(g.EM.prototype.load.call(this),this.endScreen.show())};
g.k.unload=function(){g.EM.prototype.unload.call(this);this.endScreen.hide();this.endScreen.destroy()};
g.k.onCueRangeEnter=function(a){this.Fq()&&(this.endScreen.created||this.endScreen.create(),"load"===a.getId()&&this.load())};
g.k.onCueRangeExit=function(a){"load"===a.getId()&&this.loaded&&this.unload()};
g.k.onVideoDataChange=function(){fTa(this);this.B&&eTa(this)&&(this.endScreen&&(this.endScreen.hide(),this.endScreen.created&&this.endScreen.destroy(),this.endScreen.dispose()),this.i?this.endScreen=new T5(this.player):this.endScreen=new X5(this.player),g.H(this,this.endScreen),g.rM(this.player,this.endScreen.element,4))};g.DM("endscreen",$5);})(_yt_player);
