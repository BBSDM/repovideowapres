﻿(function(g,e,b,f,c,d,h){/*! Jssor */
new(function(){});var k=g.$JssorEasing$={$EaseLinear:function(a){return a},$EaseGoBack:function(a){return 1-b.abs(2-1)},$EaseSwing:function(a){return-b.cos(a*b.PI)/2+.5},$EaseInQuad:function(a){return a*a},$EaseOutQuad:function(a){return-a*(a-2)},$EaseInOutQuad:function(a){return(a*=2)<1?1/2*a*a:-1/2*(--a*(a-2)-1)},$EaseInCubic:function(a){return a*a*a},$EaseOutCubic:function(a){return(a-=1)*a*a+1},$EaseInOutCubic:function(a){return(a*=2)<1?1/2*a*a*a:1/2*((a-=2)*a*a+2)},$EaseInQuart:function(a){return a*a*a*a},$EaseOutQuart:function(a){return-((a-=1)*a*a*a-1)},$EaseInOutQuart:function(a){return(a*=2)<1?1/2*a*a*a*a:-1/2*((a-=2)*a*a*a-2)},$EaseInQuint:function(a){return a*a*a*a*a},$EaseOutQuint:function(a){return(a-=1)*a*a*a*a+1},$EaseInOutQuint:function(a){return(a*=2)<1?1/2*a*a*a*a*a:1/2*((a-=2)*a*a*a*a+2)},$EaseInSine:function(a){return 1-b.cos(a*b.PI/2)},$EaseOutSine:function(a){return b.sin(a*b.PI/2)},$EaseInOutSine:function(a){return-1/2*(b.cos(b.PI*a)-1)},$EaseInExpo:function(a){return a==0?0:b.pow(2,10*(a-1))},$EaseOutExpo:function(a){return a==1?1:-b.pow(2,-10*a)+1},$EaseInOutExpo:function(a){return a==0||a==1?a:(a*=2)<1?1/2*b.pow(2,10*(a-1)):1/2*(-b.pow(2,-10*--a)+2)},$EaseInCirc:function(a){return-(b.sqrt(1-a*a)-1)},$EaseOutCirc:function(a){return b.sqrt(1-(a-=1)*a)},$EaseInOutCirc:function(a){return(a*=2)<1?-1/2*(b.sqrt(1-a*a)-1):1/2*(b.sqrt(1-(a-=2)*a)+1)},$EaseInElastic:function(a){if(!a||a==1)return a;var c=.3,d=.075;return-(b.pow(2,10*(a-=1))*b.sin((a-d)*2*b.PI/c))},$EaseOutElastic:function(a){if(!a||a==1)return a;var c=.3,d=.075;return b.pow(2,-10*a)*b.sin((a-d)*2*b.PI/c)+1},$EaseInOutElastic:function(a){if(!a||a==1)return a;var c=.45,d=.1125;return(a*=2)<1?-.5*b.pow(2,10*(a-=1))*b.sin((a-d)*2*b.PI/c):b.pow(2,-10*(a-=1))*b.sin((a-d)*2*b.PI/c)*.5+1},$EaseInBack:function(a){var b=1.70158;return a*a*((b+1)*a-b)},$EaseOutBack:function(a){var b=1.70158;return(a-=1)*a*((b+1)*a+b)+1},$EaseInOutBack:function(a){var b=1.70158;return(a*=2)<1?1/2*a*a*(((b*=1.525)+1)*a-b):1/2*((a-=2)*a*(((b*=1.525)+1)*a+b)+2)},$EaseInBounce:function(a){return 1-k.$EaseOutBounce(1-a)},$EaseOutBounce:function(a){return a<1/2.75?7.5625*a*a:a<2/2.75?7.5625*(a-=1.5/2.75)*a+.75:a<2.5/2.75?7.5625*(a-=2.25/2.75)*a+.9375:7.5625*(a-=2.625/2.75)*a+.984375},$EaseInOutBounce:function(a){return a<1/2?k.$EaseInBounce(a*2)*.5:k.$EaseOutBounce(a*2-1)*.5+.5},$EaseInWave:function(a){return 1-b.cos(a*b.PI*2)},$EaseOutWave:function(a){return b.sin(a*b.PI*2)},$EaseOutJump:function(a){return 1-((a*=2)<1?(a=1-a)*a*a:(a-=1)*a*a)},$EaseInJump:function(a){return(a*=2)<1?a*a*a:(a=2-a)*a*a}},p={gd:37,Ae:39},m,i,a=new function(){var i=this,mb=1,F=2,F=3,fb=4,jb=5,q=0,l=0,u=0,Z=0,x=0,rb=navigator.appName,k=navigator.userAgent,p=e.documentElement,B;function D(){if(!q)if(rb=="Microsoft Internet Explorer"&&!!g.attachEvent&&!!g.ActiveXObject){var d=k.indexOf("MSIE");q=mb;u=n(k.substring(d+5,k.indexOf(";",d)));/*@cc_on Z=@_jscript_version@*/;l=e.documentMode||u}else if(rb=="Netscape"&&!!g.addEventListener){var c=k.indexOf("Firefox"),a=k.indexOf("Safari"),h=k.indexOf("Chrome"),b=k.indexOf("AppleWebKit");if(c>=0){q=F;l=n(k.substring(c+8))}else if(a>=0){var i=k.substring(0,a).lastIndexOf("/");q=h>=0?fb:F;l=n(k.substring(i+1,a))}if(b>=0)x=n(k.substring(b+12))}else{var f=/(opera)(?:.*version|)[ \/]([\w.]+)/i.exec(k);if(f){q=jb;l=n(f[2])}}}function s(){D();return q==mb}function N(){return s()&&(l<6||e.compatMode=="BackCompat")}function sb(){D();return q==F}function P(){D();return q==F}function eb(){D();return q==fb}function ib(){D();return q==jb}function ab(){return P()&&x>534&&x<535}function A(){return s()&&l<9}function v(a){if(!B){j(["transform","WebkitTransform","msTransform","MozTransform","OTransform"],function(b){if(a.style[b]!=h){B=b;return c}});B=B||"transform"}return B}function pb(a){return Object.prototype.toString.call(a)}var I;function j(a,d){if(pb(a)=="[object Array]"){for(var b=0;b<a.length;b++)if(d(a[b],b,a))return c}else for(var e in a)if(d(a[e],e,a))return c}function xb(){if(!I){I={};j(["Boolean","Number","String","Function","Array","Date","RegExp","Object"],function(a){I["[object "+a+"]"]=a.toLowerCase()})}return I}function z(a){return a==f?String(a):xb()[pb(a)]||"object"}function y(a,b){return{x:a,y:b}}function qb(b,a){setTimeout(b,a||0)}function G(b,d,c){var a=!b||b=="inherit"?"":b;j(d,function(c){var b=c.exec(a);if(b){var d=a.substr(0,b.index),e=a.substr(b.lastIndex+1,a.length-(b.lastIndex+1));a=d+e}});a=c+(a.indexOf(" ")!=0?" ":"")+a;return a}function cb(b,a){if(l<9)b.style.filter=a}function ub(b,a,c){if(Z<9){var e=b.style.filter,g=new RegExp(/[\s]*progid:DXImageTransform\.Microsoft\.Matrix\([^\)]*\)/g),f=a?"progid:DXImageTransform.Microsoft.Matrix(M11="+a[0][0]+", M12="+a[0][1]+", M21="+a[1][0]+", M22="+a[1][1]+", SizingMethod='auto expand')":"",d=G(e,[g],f);cb(b,d);i.Oc(b,c.y);i.Qc(b,c.x)}}i.Cb=s;i.ae=sb;i.xb=eb;i.Eb=A;i.D=function(){return l};i.bc=function(){return x};i.$Delay=qb;function nb(a){a.constructor===nb.caller&&a.fc&&a.fc()}i.fc=nb;i.F=function(a){if(i.Yd(a))a=e.getElementById(a);return a};function t(a){return a||g.event}t=t;i.Xd=function(a){a=t(a);return a.target||a.srcElement||e};i.hc=function(a){a=t(a);var b=e.body;return{x:a.pageX||a.clientX+(p.scrollLeft||b.scrollLeft||0)-(p.clientLeft||b.clientLeft||0)||0,y:a.pageY||a.clientY+(p.scrollTop||b.scrollTop||0)-(p.clientTop||b.clientTop||0)||0}};function E(c,d,a){if(a!=h)c.style[d]=a;else{var b=c.currentStyle||c.style;a=b[d];if(a==""&&g.getComputedStyle){b=c.ownerDocument.defaultView.getComputedStyle(c,f);b&&(a=b.getPropertyValue(d)||b[d])}return a}}function W(b,c,a,d){if(a!=h){d&&(a+="px");E(b,c,a)}else return n(E(b,c))}function o(d,a){var b=a&2,c=a?W:E;return function(e,a){return c(e,d,a,b)}}function vb(b){if(s()&&u<9){var a=/opacity=([^)]*)/.exec(b.style.filter||"");return a?n(a[1])/100:1}else return n(b.style.opacity||"1")}function wb(c,a,f){if(s()&&u<9){var h=c.style.filter||"",i=new RegExp(/[\s]*alpha\([^\)]*\)/g),e=b.round(100*a),d="";if(e<100||f)d="alpha(opacity="+e+") ";var g=G(h,[i],d);cb(c,g)}else c.style.opacity=a==1?"":b.round(a*100)/100}function Y(e,a){var d=a.$Rotate||0,c=a.$Scale==h?1:a.$Scale;if(A()){var k=i.me(d/180*b.PI,c,c);ub(e,!d&&c==1?f:k,i.le(k,a.$OriginalWidth,a.$OriginalHeight))}else{var g=v(e);if(g){var j="rotate("+d%360+"deg) scale("+c+")";if(eb()&&x>535)j+=" perspective(2000px)";e.style[g]=j}}}i.ie=function(b,a){if(ab())qb(i.o(f,Y,b,a));else Y(b,a)};i.he=function(b,c){var a=v(b);if(a)b.style[a+"Origin"]=c};i.Md=function(a,c){if(s()&&u<9||u<10&&N())a.style.zoom=c==1?"":c;else{var b=v(a);if(b){var f="scale("+c+")",e=a.style[b],g=new RegExp(/[\s]*scale\(.*?\)/g),d=G(e,[g],f);a.style[b]=d}}};i.Ld=function(a){if(!a.style[v(a)]||a.style[v(a)]=="none")a.style[v(a)]="perspective(2000px)"};i.rb=function(b,a){return function(c){c=t(c);var e=c.type,d=c.relatedTarget||(e=="mouseout"?c.toElement:c.fromElement);(!d||d!==a&&!i.Nd(a,d))&&b(c)}};i.d=function(a,c,d,b){a=i.F(a);if(a.addEventListener){c=="mousewheel"&&a.addEventListener("DOMMouseScroll",d,b);a.addEventListener(c,d,b)}else if(a.attachEvent){a.attachEvent("on"+c,d);b&&a.setCapture&&a.setCapture()}};i.Hd=function(a,c,d,b){a=i.F(a);if(a.removeEventListener){c=="mousewheel"&&a.removeEventListener("DOMMouseScroll",d,b);a.removeEventListener(c,d,b)}else if(a.detachEvent){a.detachEvent("on"+c,d);b&&a.releaseCapture&&a.releaseCapture()}};i.Yc=function(b,a){i.d(A()?e:g,"mouseup",b,a)};i.R=function(a){a=t(a);a.preventDefault&&a.preventDefault();a.cancel=c;a.returnValue=d};i.o=function(d,c){var a=[].slice.call(arguments,2),b=function(){var b=a.concat([].slice.call(arguments,0));return c.apply(d,b)};return b};i.Pd=function(a,b){if(b==h)return a.textContent||a.innerText;var c=e.createTextNode(b);i.rc(a);a.appendChild(c)};i.rc=function(a){a.innerHTML=""};i.ab=function(c){for(var b=[],a=c.firstChild;a;a=a.nextSibling)a.nodeType==1&&b.push(a);return b};function ob(a,c,e,b){b=b||"u";for(a=a?a.firstChild:f;a;a=a.nextSibling)if(a.nodeType==1){if(S(a,b)==c)return a;if(!e){var d=ob(a,c,e,b);if(d)return d}}}i.r=ob;function gb(a,c,d){for(a=a?a.firstChild:f;a;a=a.nextSibling)if(a.nodeType==1){if(a.tagName==c)return a;if(!d){var b=gb(a,c,d);if(b)return b}}}i.oe=gb;i.qe=function(b,a){return b.getElementsByTagName(a)};function V(c){for(var b=1;b<arguments.length;b++){var a=arguments[b];if(a)for(var d in a)c[d]=a[d]}return c}i.q=V;i.ze=function(a){return z(a)=="function"};i.Yd=function(a){return z(a)=="string"};i.Ce=function(a){return!isNaN(n(a))&&isFinite(a)};i.f=j;function Q(a){return e.createElement(a)}i.Q=function(){return Q("DIV",e)};i.ye=function(){return Q("SPAN",e)};i.Bb=function(){};function T(b,c,a){if(a==h)return b.getAttribute(c);b.setAttribute(c,a)}function S(a,b){return T(a,b)||T(a,"data-"+b)}i.W=S;function r(b,a){if(a==h)return b.className;b.className=a}i.lc=r;i.nc=function(a){return a.parentNode};i.E=function(a){i.H(a,"none")};i.p=function(a,b){i.H(a,b?"none":"")};i.hd=function(b,a){b.removeAttribute(a)};i.fd=function(){return s()&&l<10};i.ed=function(d,c){if(c)d.style.clip="rect("+b.round(c.$Top)+"px "+b.round(c.$Right)+"px "+b.round(c.$Bottom)+"px "+b.round(c.$Left)+"px)";else{var g=d.style.cssText,f=[new RegExp(/[\s]*clip: rect\(.*?\)[;]?/i),new RegExp(/[\s]*cliptop: .*?[;]?/i),new RegExp(/[\s]*clipright: .*?[;]?/i),new RegExp(/[\s]*clipbottom: .*?[;]?/i),new RegExp(/[\s]*clipleft: .*?[;]?/i)],e=G(g,f,"");a.lb(d,e)}};i.z=function(){return+new Date};i.t=function(b,a){b.appendChild(a)};i.ib=function(c,b,a){c.insertBefore(b,a)};i.hb=function(b,a){b.removeChild(a)};i.Wc=function(b,a){j(a,function(a){i.hb(b,a)})};i.Vc=function(a){i.Wc(a,i.ab(a))};function n(a){return parseFloat(a)}i.Nd=function(b,a){var c=e.body;while(a&&b!=a&&c!=a)try{a=a.parentNode}catch(f){return d}return b==a};function U(b,a){return b.cloneNode(!a)}i.gb=U;function M(a){if(a){var b=a.$FlyDirection;if(b&1)a.x=a.$ScaleHorizontal||1;if(b&2)a.x=-a.$ScaleHorizontal||-1;if(b&4)a.y=a.$ScaleVertical||1;if(b&8)a.y=-a.$ScaleVertical||-1;M(a.$Brother)}}i.kb=function(a){if(a){for(var b=0;b<a.length;b++)M(a[b]);for(var c in a)M(a[c])}};function O(b,a,c){a.onload=f;a.abort=f;b&&b(a,c)}i.U=function(d,b){if(ib()&&l<11.6||!d)O(b,f);else{var a=new Image;a.onload=i.o(f,O,b,a);a.onabort=i.o(f,O,b,a,c);a.src=d}};i.wd=function(e,b,f){var d=e.length+1;function c(a){d--;if(b&&a&&a.src==b.src)b=a;!d&&f&&f(b)}j(e,function(b){a.U(b.src,c)});c()};i.oc=function(c,j,i,h){if(h)c=U(c);for(var g=a.qe(c,j),e=g.length-1;e>-1;e--){var b=g[e],d=U(i);r(d,r(b));a.lb(d,b.style.cssText);var f=a.nc(b);a.ib(f,d,b);a.hb(f,b)}return c};var C;function zb(b){var g=this,m,k,l,e;function f(){var a=m;if(e)a+="ds";else if(k)a+="dn";else if(l)a+="av";r(b,a)}function n(a){if(e)i.R(a);else{C.push(g);k=c;f()}}g.ud=function(){k=d;f()};g.pc=function(a){if(a!=h){l=a;f()}else return l};g.$Enable=function(a){if(a!=h){e=!a;f()}else return!e};b=i.F(b);if(!C){i.Yc(function(){var a=C;C=[];j(a,function(a){a.ud()})});C=[]}m=r(b);a.d(b,"mousedown",n)}i.jb=function(a){return new zb(a)};i.nb=E;i.Y=o("overflow");i.k=o("top",2);i.m=o("left",2);i.g=o("width",2);i.i=o("height",2);i.Qc=o("marginLeft",2);i.Oc=o("marginTop",2);i.u=o("position");i.H=o("display");i.C=o("zIndex",1);i.Yb=function(b,a,c){if(a!=h)wb(b,a,c);else return vb(b)};i.lb=function(a,b){if(b!=h)a.style.cssText=b;else return a.style.cssText};var R={$Opacity:i.Yb,$Top:i.k,$Left:i.m,Wb:i.g,Tb:i.i,V:i.u,Zf:i.H,$ZIndex:i.C},w;function H(){if(!w)w=V({Yf:i.Oc,Xf:i.Qc,$Clip:i.ed,eb:i.ie},R);return w}i.md=H;i.G=function(c,b){var a=H();j(b,function(d,b){a[b]&&a[b](c,d)})};m=new function(){var a=this;function b(d,g){for(var j=d[0].length,i=d.length,h=g[0].length,f=[],c=0;c<i;c++)for(var k=f[c]=[],b=0;b<h;b++){for(var e=0,a=0;a<j;a++)e+=d[c][a]*g[a][b];k[b]=e}return f}a.wb=function(d,c){var a=b(d,[[c.x],[c.y]]);return y(a[0][0],a[1][0])}};i.me=function(d,a,c){var e=b.cos(d),f=b.sin(d);return[[e*a,-f*c],[f*a,e*c]]};i.le=function(d,c,a){var e=m.wb(d,y(-c/2,-a/2)),f=m.wb(d,y(c/2,-a/2)),g=m.wb(d,y(c/2,a/2)),h=m.wb(d,y(-c/2,a/2));return y(b.min(e.x,f.x,g.x,h.x)+c/2,b.min(e.y,f.y,g.y,h.y)+a/2)};i.eb=function(j,k,t,q,u,w,h){var c=k;if(j){c={};for(var e in k){var x=w[e]||1,r=u[e]||[0,1],d=(t-r[0])/r[1];d=b.min(b.max(d,0),1);d=d*x;var o=b.floor(d);if(d!=o)d-=o;var v=q[e]||q.ub,p=v(d),g,s=j[e],n=k[e];if(a.Ce(n))g=s+(n-s)*p;else{g=a.q({K:{}},j[e]);a.f(n.K,function(c,b){var a=c*p;g.K[b]=a;g[b]+=a})}c[e]=g}if(j.$Zoom)c.eb={$Rotate:c.$Rotate||0,$Scale:c.$Zoom,$OriginalWidth:h.$OriginalWidth,$OriginalHeight:h.$OriginalHeight}}if(k.$Clip&&h.$Move){var i=c.$Clip.K,m=(i.$Top||0)+(i.$Bottom||0),l=(i.$Left||0)+(i.$Right||0);c.$Left=(c.$Left||0)+l;c.$Top=(c.$Top||0)+m;c.$Clip.$Left-=l;c.$Clip.$Right-=l;c.$Clip.$Top-=m;c.$Clip.$Bottom-=m}if(c.$Clip&&a.fd()&&!c.$Clip.$Top&&!c.$Clip.$Left&&c.$Clip.$Right==h.$OriginalWidth&&c.$Clip.$Bottom==h.$OriginalHeight)c.$Clip=f;return c}},l=function(){var b=this,d=[];function i(a,b){d.push({Hb:a,Pb:b})}function h(b,c){a.f(d,function(a,e){a.Hb==b&&a.Pb===c&&d.splice(e,1)})}b.$On=b.addEventListener=i;b.$Off=b.removeEventListener=h;b.a=function(b){var c=[].slice.call(arguments,1);a.f(d,function(a){try{a.Hb==b&&a.Pb.apply(g,c)}catch(d){}})}};i=function(m,l,g,N,L,H){m=m||0;var e=this,q,n,o,w,x=0,E,F,D,z,i=0,s=0,A,j=m,h,f,p,t=[],y;function I(b){h+=b;f+=b;j+=b;i+=b;s+=b;a.f(t,function(a){a,a.$Shift(b)})}function M(a,b){var c=a-h+m*b;I(c);return f}function v(n,o){var d=n;if(p&&(d>=f||d<=h))d=((d-h)%p+p)%p+h;if(!A||w||o||i!=d){var k=b.min(d,f);k=b.max(k,h);if(!A||w||o||k!=s){if(H){var m=(k-j)/(l||1);if(g.td&&a.xb()&&l)m=b.round(m/16*l)*16/l;if(g.$Reverse)m=1-m;var q=a.eb(L,H,m,E,D,F,g);a.f(q,function(b,a){y[a]&&y[a](N,b)})}e.Rb(s-j,k-j)}s=k;a.f(t,function(b,c){var a=n<i?t[t.length-c-1]:b;a.B(n,o)});var u=i,r=n;i=d;A=c;e.tb(u,r)}}function B(a,c){c&&a.xc(f,1);f=b.max(f,a.cb());t.push(a)}function G(){if(q){var d=a.z(),e=b.min(d-x,80),c=i+e*o;x=d;if(c*o>=n*o)c=n;v(c);if(!w&&c*o>=n*o)J(z);else a.$Delay(G,g.$Interval)}}function u(d,g,j){if(!q){q=c;w=j;z=g;d=b.max(d,h);d=b.min(d,f);n=d;o=n<i?-1:1;e.sc();x=a.z();G()}}function J(a){if(q){w=q=z=d;e.tc();a&&a()}}e.$Play=function(a,b,c){u(a?i+a:f,b,c)};e.cc=u;e.N=J;e.sd=function(a){u(a)};e.A=function(){return i};e.dc=function(){return n};e.T=function(){return s};e.B=v;e.ac=function(){v(h,c)};e.$Move=function(a){v(i+a)};e.$IsPlaying=function(){return q};e.Rc=function(a){p=a};e.xc=M;e.$Shift=I;e.Lb=function(a){B(a,0)};e.Xb=function(a){B(a,1)};e.cb=function(){return f};e.tb=e.sc=e.tc=e.Rb=a.Bb;e.Ub=a.z();g=a.q({$Interval:15},g);p=g.yc;y=a.q({},a.md(),g.jc);h=j=m;f=m+l;F=g.$Round||{};D=g.$During||{};E=a.q({ub:a.ze(g.$Easing)&&g.$Easing||k.$EaseSwing},g.$Easing)};var q;new function(){;function m(q,kc){var j=this;function Fc(){var a=this;i.call(a,-1e8,2e8);a.te=function(){var c=a.T(),d=b.floor(c),f=u(d),e=c-b.floor(c);return{J:f,re:d,V:e}};a.tb=function(d,a){var e=b.floor(a);if(e!=a&&a>d)e++;Xb(e,c);j.a(m.$EVT_POSITION_CHANGE,u(a),u(d),a,d)}}function Ec(){var b=this;i.call(b,0,0,{yc:t});a.f(D,function(a){M&1&&a.Rc(t);b.Xb(a);a.$Shift(lb/ec)})}function Dc(){var a=this,b=Wb.$Elmt;i.call(a,-1,2,{$Easing:k.$EaseLinear,jc:{V:cc},yc:t},b,{V:1},{V:-1});a.pb=b}function sc(q,p){var e=this,k,l,g,n,h;i.call(e,-1e8,2e8);e.sc=function(){T=c;Y=f;j.a(m.$EVT_SWIPE_START,u(y.A()),y.A())};e.tc=function(){T=d;n=d;var a=y.te();j.a(m.$EVT_SWIPE_END,u(y.A()),y.A());!a.V&&Hc(a.re,s)};e.tb=function(f,e){var d;if(n)d=h;else{d=l;if(g){var c=e/g;if(a.xb()||a.ae()){b.round(c*16/g)/16*g;if(a.D()<38)c=parseFloat(c.toFixed(4))}d=o.$SlideEasing(c)*(l-k)+k}}y.B(d)};e.ob=function(a,c,b,d){k=a;l=c;g=b;y.B(a);e.B(0);e.cc(b,d)};e.Ud=function(a){n=c;h=a;e.$Play(a,f,c)};e.Kd=function(a){h=a};y=new Fc;y.Lb(q);y.Lb(p)}function tc(){var c=this,b=bc();a.C(b,0);c.$Elmt=b;c.vb=function(){a.E(b);a.rc(b)}}function Cc(p,n){var e=this,r,x,H,y,g,A=[],R,q,T,G,P,F,h,w,k;i.call(e,-v,v+1,{});function E(a){x&&x.Ab();r&&r.Ab();S(p,a);F=c;r=new I.$Class(p,I,1);x=new I.$Class(p,I);x.ac();r.ac()}function Z(){r.Ub<I.Ub&&E()}function M(n,q,l){if(!G){G=c;if(g&&l){var f=l.width,b=l.height,k=f,i=b;if(f&&b&&o.$FillMode){if(o.$FillMode&3&&(!(o.$FillMode&4)||f>L||b>K)){var h=d,p=L/K*b/f;if(o.$FillMode&1)h=p>1;else if(o.$FillMode&2)h=p<1;k=h?f*K/b:L;i=h?K:b*L/f}a.g(g,k);a.i(g,i);a.k(g,(K-i)/2);a.m(g,(L-k)/2)}a.u(g,"absolute");j.a(m.$EVT_LOAD_END,hc)}}a.E(q);n&&n(e)}function X(b,c,d,f){if(f==Y&&s==n&&U)if(!Gc){var a=u(b);B.Be(a,n,c,e,d);c.ce();fb.xc(a,1);fb.B(a);z.ob(b,b,0)}}function ab(b){if(b==Y&&s==n){if(!h){var a=f;if(B)if(B.J==n)a=B.ne();else B.vb();Z();h=new Ac(n,a,e.be(),e.de());h.Nc(k)}!h.$IsPlaying()&&h.yb()}}function Q(d,c){if(d==n){if(d!=c)D[c]&&D[c].Zd();else h&&h.ke();k&&k.$Enable();var j=Y=a.z();e.U(a.o(f,ab,j))}else{var i=b.abs(n-d),g=v+o.$LazyLoading;(!P||i<=g||t-i<=g)&&e.U()}}function bb(){if(s==n&&h){h.N();k&&k.$Quit();k&&k.$Disable();h.Dc()}}function cb(){s==n&&h&&h.N()}function O(b){if(W)a.R(b);else j.a(m.$EVT_CLICK,n,b)}function N(){k=w.pInstance;h&&h.Nc(k)}e.U=function(d,b){b=b||y;if(A.length&&!G){a.p(b);if(!T){T=c;j.a(m.$EVT_LOAD_START);a.f(A,function(b){if(!b.src){b.src=a.W(b,"src2");a.H(b,b["display-origin"])}})}a.wd(A,g,a.o(f,M,d,b))}else M(d,b)};e.Jd=function(){if(B){var b=B.Fd(t);if(b){var e=Y=a.z(),c=n+ac,d=D[u(c)];return d.U(a.o(f,X,c,d,b,e),y)}}gb(s+o.$AutoPlaySteps*ac)};e.Db=function(){Q(n,n)};e.Zd=function(){k&&k.$Quit();k&&k.$Disable();e.Kc();h&&h.Vd();h=f;E()};e.ce=function(){a.E(p)};e.Kc=function(){a.p(p)};e.Qd=function(){k&&k.$Enable()};function S(b,e,d){if(b["jssor-slider"])return;d=d||0;if(!F){if(b.tagName=="IMG"){A.push(b);if(!b.src){P=c;b["display-origin"]=a.H(b);a.E(b)}}a.Eb()&&a.C(b,(a.C(b)||0)+1);if(o.$HWA&&a.bc()>0)(!J||a.bc()<534||!jb)&&a.Ld(b)}var f=a.ab(b);a.f(f,function(f){var i=a.W(f,"u");if(i=="player"&&!w){w=f;if(w.pInstance)N();else a.d(w,"dataavailable",N)}if(i=="caption"){if(!a.Cb()&&!e){var h=a.gb(f);a.ib(b,h,f);a.hb(b,f);f=h;e=c}}else if(!F&&!d&&!g&&a.W(f,"u")=="image"){g=f;if(g){if(g.tagName=="A"){R=g;a.G(R,V);q=a.gb(g,c);a.d(q,"click",O);a.G(q,V);a.H(q,"block");a.Yb(q,0);a.nb(q,"backgroundColor","#000");g=a.oe(g,"IMG")}g.border=0;a.G(g,V)}}S(f,e,d+1)})}e.Rb=function(c,b){var a=v-b;cc(H,a)};e.be=function(){return r};e.de=function(){return x};e.J=n;l.call(e);var C=a.r(p,"thumb",c);if(C){e.De=a.gb(C);a.hd(C,"id");a.E(C)}a.p(p);y=a.gb(ib);a.C(y,1e3);a.d(p,"click",O);E(c);e.mc=g;e.Lc=q;e.pb=H=p;a.t(H,y);j.$On(203,Q);j.$On(28,cb);j.$On(24,bb)}function Ac(h,q,v,u){var b=this,l=0,x=0,n,g,e,f,k,r,w,t,p=D[h];i.call(b,0,0);function y(){a.Vc(P);ic&&k&&p.Lc&&a.t(P,p.Lc);a.p(P,!k&&p.mc)}function z(){if(r){r=d;j.a(m.$EVT_ROLLBACK_END,h,e,l,g,e,f);b.B(g)}b.yb()}function A(a){t=a;b.N();b.yb()}b.yb=function(){var a=b.T();if(!C&&!T&&!t&&s==h){if(!a){if(n&&!k){k=c;b.Dc(c);j.a(m.$EVT_SLIDESHOW_START,h,l,x,n,f)}y()}var d,o=m.$EVT_STATE_CHANGE;if(a!=f)if(a==e)d=f;else if(a==g)d=e;else if(!a)d=g;else if(a>e){r=c;d=e;o=m.$EVT_ROLLBACK_START}else d=b.dc();j.a(o,h,a,l,g,e,f);var i=U&&(!Q||G);if(a==f)i&&p.Jd();else(i||a!=e)&&b.cc(d,z)}};b.ke=function(){e==f&&e==b.T()&&b.B(g)};b.Vd=function(){B&&B.J==h&&B.vb();var a=b.T();a<f&&j.a(m.$EVT_STATE_CHANGE,h,-a-1,l,g,e,f)};b.Dc=function(b){q&&a.Y(nb,b&&q.kc.$Outside?"":"hidden")};b.Rb=function(b,a){if(k&&a>=n){k=d;y();p.Kc();B.vb();j.a(m.$EVT_SLIDESHOW_END,h,l,x,n,f)}j.a(m.$EVT_PROGRESS_CHANGE,h,a,l,g,e,f)};b.Nc=function(a){if(a&&!w){w=a;a.$On($JssorPlayer$.Dd,A)}};q&&b.Xb(q);n=b.cb();b.cb();b.Xb(v);g=v.cb();e=g+o.$AutoPlayInterval;u.$Shift(e);b.Lb(u);f=b.cb()}function cc(e,g){var f=x>0?x:mb,c=Eb*g*(f&1),d=Fb*g*(f>>1&1);if(a.xb()&&a.D()<38){c=c.toFixed(3);d=d.toFixed(3)}else{c=b.round(c);d=b.round(d)}if(a.Cb()&&a.D()>=10&&a.D()<11)e.style.msTransform="translate("+c+"px, "+d+"px)";else if(a.xb()&&a.D()>=30&&a.D()<34){e.style.WebkitTransition="transform 0s";e.style.WebkitTransform="translate3d("+c+"px, "+d+"px, 0px) perspective(2000px)"}else{a.m(e,c);a.k(e,d)}}function yc(c){var b=a.Xd(c).tagName;!N&&b!="INPUT"&&b!="TEXTAREA"&&b!="SELECT"&&wc()&&xc(c)}function Lb(){ub=T;Pb=z.dc();E=y.A();if(C||!G&&Q&12){z.N();j.a(m.cd)}}function jc(e){if(!C&&(G||!(Q&12))&&!z.$IsPlaying()){var c=y.A(),a=b.ceil(E);if(e&&b.abs(F)>=o.$MinDragOffsetToSlide){a=b.ceil(c);a+=kb}if(!(M&1))a=b.min(t-v,b.max(a,0));var d=b.abs(a-c);d=1-b.pow(1-d,5);if(!W&&ub)z.sd(Pb);else if(c==a){xb.Qd();xb.Db()}else z.ob(c,a,d*Yb)}}function xc(b){C=c;Db=d;Y=f;a.d(e,sb,fc);a.z();W=0;Lb();if(!ub)x=0;if(J){var h=b.touches[0];yb=h.clientX;zb=h.clientY}else{var g=a.hc(b);yb=g.x;zb=g.y;a.R(b)}F=0;hb=0;kb=0;j.a(m.$EVT_DRAG_START,u(E),E,b)}function fc(e){if(C&&(!a.Eb()||e.button)){var f;if(J){var l=e.touches;if(l&&l.length>0)f={x:l[0].clientX,y:l[0].clientY}}else f=a.hc(e);if(f){var j=f.x-yb,k=f.y-zb;if(b.floor(E)!=E)x=x||mb&N;if((j||k)&&!x){if(N==3)if(b.abs(k)>b.abs(j))x=2;else x=1;else x=N;if(J&&x==1&&b.abs(k)-b.abs(j)>3)Db=c}if(x){var d=k,i=Fb;if(x==1){d=j;i=Eb}if(!(M&1)){if(d>0){var g=i*s,h=d-g;if(h>0)d=g+b.sqrt(h)*5}if(d<0){var g=i*(t-v-s),h=-d-g;if(h>0)d=-g-b.sqrt(h)*5}}if(F-hb<-2)kb=0;else if(F-hb>2)kb=-1;hb=F;F=d;wb=E-F/i/(eb||1);if(F&&x&&!Db){a.R(e);if(!T)z.Ud(wb);else z.Kd(wb)}else a.Eb()&&a.R(e)}}}else Ib(e)}function Ib(f){uc();if(C){C=d;a.z();a.Hd(e,sb,fc);W=F;W&&a.R(f);z.N();var b=y.A();j.a(m.$EVT_DRAG_END,u(b),b,u(E),E,f);jc(c);Lb()}}function rc(a){D[s];s=u(a);xb=D[s];Xb(a);return s}function Hc(a,b){x=0;rc(a);j.a(m.$EVT_PARK,u(a),b)}function Xb(b,c){Bb=b;a.f(S,function(a){a.zb(u(b),b,c)})}function wc(){var b=m.Fc||0,a=R;if(J)a&1&&(a&=1);m.Fc|=a;return N=a&~b}function uc(){if(N){m.Fc&=~R;N=0}}function bc(){var b=a.Q();a.G(b,V);a.u(b,"absolute");return b}function u(a){return(a%t+t)%t}function oc(a,c){if(c)if(!M){a=b.min(b.max(a+Bb,0),t-v);c=d}else if(M&2){a=u(a+Bb);c=d}gb(a,o.$SlideDuration,c)}function Cb(){a.f(S,function(a){a.Vb(a.mb.$ChanceToShow<=G)})}function mc(){if(!G){G=1;Cb();if(!C){Q&12&&jc();Q&3&&D[s].Db()}}}function lc(){if(G){G=0;Cb();C||!(Q&12)||Lb()}}function nc(){V={Wb:L,Tb:K,$Top:0,$Left:0};a.f(Z,function(b){a.G(b,V);a.u(b,"absolute");a.Y(b,"hidden");a.E(b)});a.G(ib,V)}function qb(b,a){gb(b,a,c)}function gb(g,f,k){if(Ub&&(!C||o.$NaviQuitDrag)){T=c;C=d;z.N();if(f==h)f=Yb;var e=Jb.T(),a=g;if(k){a=e+g;if(g>0)a=b.ceil(a);else a=b.floor(a)}if(!(M&1)){a=u(a);a=b.max(0,b.min(a,t-v))}var j=(a-e)%t;a=e+j;var i=e==a?0:f*b.abs(j);i=b.min(i,f*v*1.5);z.ob(e,a,i||1)}}j.$PlayTo=gb;j.$GoTo=function(a){gb(a,1)};j.$Next=function(){qb(1)};j.$Prev=function(){qb(-1)};j.$Pause=function(){U=d};j.$Play=function(){if(!U){U=c;D[s]&&D[s].Db()}};j.$SetSlideshowTransitions=function(b){a.kb(b);o.$SlideshowOptions.$Transitions=b};j.$SetCaptionTransitions=function(b){a.kb(b);I.vd=b;I.Ub=a.z()};j.$SlidesCount=function(){return Z.length};j.$CurrentIndex=function(){return s};j.$IsAutoPlaying=function(){return U};j.$IsDragging=function(){return C};j.$IsSliding=function(){return T};j.$IsMouseOver=function(){return!G};j.$LastDragSucceded=function(){return W};function db(){return a.g(w||q)}function ob(){return a.i(w||q)}j.$OriginalWidth=j.$GetOriginalWidth=db;j.$OriginalHeight=j.$GetOriginalHeight=ob;function Mb(c,f){if(c==h)return a.g(q);if(!w){var b=a.Q(e);a.lb(b,a.lb(q));a.lc(b,a.lc(q));a.u(b,"relative");a.k(b,0);a.m(b,0);a.Y(b,"visible");w=a.Q(e);a.u(w,"absolute");a.k(w,0);a.m(w,0);a.g(w,a.g(q));a.i(w,a.i(q));a.he(w,"0 0");a.t(w,b);var i=a.ab(q);a.t(q,w);a.nb(q,"backgroundImage","");var g={navigator:bb&&bb.$Scale==d,arrowleft:O&&O.$Scale==d,arrowright:O&&O.$Scale==d,thumbnavigator:H&&H.$Scale==d,thumbwrapper:H&&H.$Scale==d};a.f(i,function(c){a.t(g[a.W(c,"u")]?q:b,c)});a.p(b);a.p(w)}eb=c/(f?a.i:a.g)(w);a.Md(w,eb);a.g(q,f?eb*db():c);a.i(q,f?c:eb*ob());a.f(S,function(a){a.Zb()})}j.$ScaleHeight=j.$GetScaleHeight=function(b){if(b==h)return a.i(q);Mb(b,c)};j.$ScaleWidth=j.$SetScaleWidth=j.$GetScaleWidth=Mb;j.Jc=function(a){var d=b.ceil(u(lb/ec)),c=u(a-s+d);if(c>v){if(a-s>t/2)a-=t;else if(a-s<=-t/2)a+=t}else a=s+c-d;return a};l.call(this);j.$Elmt=q=a.F(q);var o=a.q({$FillMode:0,$LazyLoading:1,$StartIndex:0,$AutoPlay:d,$Loop:1,$HWA:c,$NaviQuitDrag:c,$AutoPlaySteps:1,$AutoPlayInterval:3e3,$PauseOnHover:1,$SlideDuration:500,$SlideEasing:k.$EaseOutQuad,$MinDragOffsetToSlide:20,$SlideSpacing:0,$DisplayPieces:1,$ParkingPosition:0,$UISearchMode:1,$PlayOrientation:1,$DragOrientation:1},kc),mb=o.$PlayOrientation&3,ac=(o.$PlayOrientation&4)/-4||1,cb=o.$SlideshowOptions,I=a.q({$Class:r},o.Ke);a.kb(I.vd);var bb=o.$BulletNavigatorOptions,O=o.$ArrowNavigatorOptions,H=o.$ThumbnailNavigatorOptions,X=!o.$UISearchMode,w,A=a.r(q,"slides",X),ib=a.r(q,"loading",X)||a.Q(e),Ob=a.r(q,"navigator",X),gc=a.r(q,"arrowleft",X),dc=a.r(q,"arrowright",X),Nb=a.r(q,"thumbnavigator",X),qc=a.g(A),pc=a.i(A),V,Z=[],zc=a.ab(A);a.f(zc,function(b){b.tagName=="DIV"&&!a.W(b,"u")&&Z.push(b)});var s=-1,Bb,xb,t=Z.length,L=o.$SlideWidth||qc,K=o.$SlideHeight||pc,Zb=o.$SlideSpacing,Eb=L+Zb,Fb=K+Zb,ec=mb&1?Eb:Fb,v=b.min(o.$DisplayPieces,t),nb,x,N,Db,J,S=[],Tb,Vb,Sb,ic,Gc,U,Q=o.$PauseOnHover,Yb=o.$SlideDuration,vb,jb,lb,Ub=v<t,M=Ub?o.$Loop:0,R,W,G=1,T,C,Y,yb=0,zb=0,F,hb,kb,Jb,y,fb,z,Wb=new tc,eb;U=o.$AutoPlay;j.mb=kc;nc();q["jssor-slider"]=c;a.C(A,a.C(A)||0);a.u(A,"absolute");nb=a.gb(A);a.ib(a.nc(A),nb,A);if(cb){ic=cb.$ShowLink;vb=cb.$Class;a.kb(cb.$Transitions);jb=v==1&&t>1&&vb&&(!a.Cb()||a.D()>=8)}lb=jb||v>=t||!(M&1)?0:o.$ParkingPosition;R=(v>1||lb?mb:-1)&o.$DragOrientation;var Ab=A,D=[],B,P,Hb="mousedown",sb="mousemove",Kb="mouseup",rb,E,ub,Pb,wb,ab;if(g.navigator.pointerEnabled||(ab=g.navigator.msPointerEnabled)){Hb=ab?"MSPointerDown":"pointerdown";sb=ab?"MSPointerMove":"pointermove";Kb=ab?"MSPointerUp":"pointerup";rb=ab?"MSPointerCancel":"pointercancel";if(R){var Gb="none";if(R==1)Gb="pan-y";else if(R==2)Gb="pan-x";a.nb(Ab,ab?"msTouchAction":"touchAction",Gb)}}else if("ontouchstart"in g||"createTouch"in e){J=c;Hb="touchstart";sb="touchmove";Kb="touchend";rb="touchcancel"}fb=new Dc;if(jb)B=new vb(Wb,L,K,cb,J);a.t(nb,fb.pb);a.Y(A,"hidden");P=bc();a.nb(P,"backgroundColor","#000");a.Yb(P,0);a.ib(Ab,P,Ab.firstChild);for(var tb=0;tb<Z.length;tb++){var Bc=Z[tb],hc=new Cc(Bc,tb);D.push(hc)}a.E(ib);Jb=new Ec;z=new sc(Jb,fb);if(R){a.d(A,Hb,yc);a.d(e,Kb,Ib);rb&&a.d(e,rb,Ib)}Q&=J?10:5;if(Ob&&bb){Tb=new bb.$Class(Ob,bb,db(),ob());S.push(Tb)}if(O&&gc&&dc){Vb=new O.$Class(gc,dc,O,db(),ob());S.push(Vb)}if(Nb&&H){H.$StartIndex=o.$StartIndex;Sb=new H.$Class(Nb,H);S.push(Sb)}a.f(S,function(a){a.Mb(t,D,ib);a.$On(n.sb,oc)});Mb(db());a.d(q,"mouseout",a.rb(mc,q));a.d(q,"mouseover",a.rb(lc,q));Cb();o.$ArrowKeyNavigation&&a.d(e,"keydown",function(a){if(a.keyCode==p.gd)qb(-1);else a.keyCode==p.Ae&&qb(1)});var pb=o.$StartIndex;if(!(M&1))pb=b.max(0,b.min(pb,t-v));z.ob(pb,pb,0)}m.$EVT_CLICK=21;m.$EVT_DRAG_START=22;m.$EVT_DRAG_END=23;m.$EVT_SWIPE_START=24;m.$EVT_SWIPE_END=25;m.$EVT_LOAD_START=26;m.$EVT_LOAD_END=27;m.cd=28;m.$EVT_POSITION_CHANGE=202;m.$EVT_PARK=203;m.$EVT_SLIDESHOW_START=206;m.$EVT_SLIDESHOW_END=207;m.$EVT_PROGRESS_CHANGE=208;m.$EVT_STATE_CHANGE=209;m.$EVT_ROLLBACK_START=210;m.$EVT_ROLLBACK_END=211;g.$JssorSlider$=q=m};var n={sb:1};g.$JssorBulletNavigator$=function(g,F,E,C){var h=this;l.call(h);g=a.F(g);var t,u,s,r,m=0,e,o,k,y,z,j,i,q,p,D=[],A=[];function x(a){a!=-1&&A[a].pc(a==m)}function v(a){h.a(n.sb,a*o)}h.$Elmt=g;h.zb=function(a){if(a!=r){var d=m,c=b.floor(a/o);m=c;r=a;x(d);x(c)}};h.Vb=function(b){a.p(g,b)};var B;h.Zb=function(){if(!B||e.$Scale==d){e.$AutoCenter&1&&a.m(g,(E-u)/2);e.$AutoCenter&2&&a.k(g,(C-s)/2);B=c}};var w;h.Mb=function(C){if(!w){t=b.ceil(C/o);m=0;var n=q+y,r=p+z,l=b.ceil(t/k)-1;u=q+n*(!j?l:k-1);s=p+r*(j?l:k-1);a.g(g,u);a.i(g,s);for(var d=0;d<t;d++){var B=a.ye();a.Pd(B,d+1);var h=a.oc(i,"NumberTemplate",B,c);a.u(h,"absolute");var x=d%(l+1);a.m(h,!j?n*x:d%k*n);a.k(h,j?r*x:b.floor(d/(l+1))*r);a.t(g,h);D[d]=h;e.$ActionMode&1&&a.d(h,"click",a.o(f,v,d));e.$ActionMode&2&&a.d(h,"mouseover",a.rb(a.o(f,v,d),h));A[d]=a.jb(h)}w=c}};h.mb=e=a.q({$SpacingX:0,$SpacingY:0,$Orientation:1,$ActionMode:1},F);i=a.r(g,"prototype");q=a.g(i);p=a.i(i);a.hb(g,i);o=e.$Steps||1;k=e.$Lanes||1;y=e.$SpacingX;z=e.$SpacingY;j=e.$Orientation-1};g.$JssorArrowNavigator$=function(e,g,t,o,m){var b=this;l.call(b);var h,j,r=a.g(e),p=a.i(e);function k(a){b.a(n.sb,a,c)}b.zb=function(b,a,c){if(c);};b.Vb=function(b){a.p(e,b);a.p(g,b)};var s;b.Zb=function(){if(!s||h.$Scale==d){if(h.$AutoCenter&1){a.m(e,(o-r)/2);a.m(g,(o-r)/2)}if(h.$AutoCenter&2){a.k(e,(m-p)/2);a.k(g,(m-p)/2)}s=c}};var q;b.Mb=function(b){if(!q){a.d(e,"click",a.o(f,k,-j));a.d(g,"click",a.o(f,k,j));a.jb(e);a.jb(g);q=c}};b.mb=h=a.q({$Steps:1},t);j=h.$Steps};g.$JssorThumbnailNavigator$=function(i,A){var h=this,x,m,e,u=[],y,w,f,o,p,t,s,k,r,g,j;l.call(h);i=a.F(i);function z(o,d){var g=this,b,l,k;function p(){l.pc(m==d)}function i(){if(!r.$LastDragSucceded()){var a=f-d%f,b=r.Jc((d+a)/f-1),c=b*f+f-a;h.a(n.sb,c)}}g.J=d;g.Pc=p;k=o.De||o.mc||a.Q();g.pb=b=a.oc(j,"ThumbnailTemplate",k,c);l=a.jb(b);e.$ActionMode&1&&a.d(b,"click",i);e.$ActionMode&2&&a.d(b,"mouseover",a.rb(i,b))}h.zb=function(c,d,e){var a=m;m=c;a!=-1&&u[a].Pc();u[c].Pc();!e&&r.$PlayTo(r.Jc(b.floor(d/f)))};h.Vb=function(b){a.p(i,b)};h.Zb=a.Bb;var v;h.Mb=function(F,D){if(!v){x=F;b.ceil(x/f);m=-1;k=b.min(k,D.length);var h=e.$Orientation&1,n=t+(t+o)*(f-1)*(1-h),l=s+(s+p)*(f-1)*h,C=n+(n+o)*(k-1)*h,A=l+(l+p)*(k-1)*(1-h);a.u(g,"absolute");a.Y(g,"hidden");e.$AutoCenter&1&&a.m(g,(y-C)/2);e.$AutoCenter&2&&a.k(g,(w-A)/2);a.g(g,C);a.i(g,A);var j=[];a.f(D,function(l,e){var i=new z(l,e),d=i.pb,c=b.floor(e/f),k=e%f;a.m(d,(t+o)*k*(1-h));a.k(d,(s+p)*k*h);if(!j[c]){j[c]=a.Q();a.t(g,j[c])}a.t(j[c],d);u.push(i)});var E=a.q({$AutoPlay:d,$NaviQuitDrag:d,$SlideWidth:n,$SlideHeight:l,$SlideSpacing:o*h+p*(1-h),$MinDragOffsetToSlide:12,$SlideDuration:200,$PauseOnHover:1,$PlayOrientation:e.$Orientation,$DragOrientation:e.$DisableDrag?0:e.$Orientation},e);r=new q(i,E);v=c}};h.mb=e=a.q({$SpacingX:3,$SpacingY:3,$DisplayPieces:1,$Orientation:1,$AutoCenter:3,$ActionMode:1},A);y=a.g(i);w=a.i(i);g=a.r(i,"slides",c);j=a.r(g,"prototype");t=a.g(j);s=a.i(j);a.hb(g,j);f=e.$Lanes||1;o=e.$SpacingX;p=e.$SpacingY;k=e.$DisplayPieces};function r(){i.call(this,0,0);this.Ab=a.Bb}})(window,document,Math,null,true,false)