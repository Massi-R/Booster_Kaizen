import{dispatch}from"d3-dispatch";import{select,pointer}from"d3-selection";const nonpassive={passive:!1},nonpassivecapture={capture:!0,passive:!1};function nopropagation(e){e.stopImmediatePropagation()}function noevent(e){e.preventDefault(),e.stopImmediatePropagation()}function nodrag(e){var t=e.document.documentElement,n=select(e).on("dragstart.drag",noevent,nonpassivecapture);"onselectstart"in t?n.on("selectstart.drag",noevent,nonpassivecapture):(t.__noselect=t.style.MozUserSelect,t.style.MozUserSelect="none")}function yesdrag(e,t){var n=e.document.documentElement,a=select(e).on("dragstart.drag",null);t&&(a.on("click.drag",noevent,nonpassivecapture),setTimeout((function(){a.on("click.drag",null)}),0)),"onselectstart"in n?a.on("selectstart.drag",null):(n.style.MozUserSelect=n.__noselect,delete n.__noselect)}var constant=e=>()=>e;function DragEvent(e,{sourceEvent:t,subject:n,target:a,identifier:o,active:r,x:i,y:c,dx:u,dy:l,dispatch:s}){Object.defineProperties(this,{type:{value:e,enumerable:!0,configurable:!0},sourceEvent:{value:t,enumerable:!0,configurable:!0},subject:{value:n,enumerable:!0,configurable:!0},target:{value:a,enumerable:!0,configurable:!0},identifier:{value:o,enumerable:!0,configurable:!0},active:{value:r,enumerable:!0,configurable:!0},x:{value:i,enumerable:!0,configurable:!0},y:{value:c,enumerable:!0,configurable:!0},dx:{value:u,enumerable:!0,configurable:!0},dy:{value:l,enumerable:!0,configurable:!0},_:{value:s}})}function defaultFilter(e){return!e.ctrlKey&&!e.button}function defaultContainer(){return this.parentNode}function defaultSubject(e,t){return null==t?{x:e.x,y:e.y}:t}function defaultTouchable(){return navigator.maxTouchPoints||"ontouchstart"in this}function drag(){var e,t,n,a,o=defaultFilter,r=defaultContainer,i=defaultSubject,c=defaultTouchable,u={},l=dispatch("start","drag","end"),s=0,d=0;function f(e){e.on("mousedown.drag",g).filter(c).on("touchstart.drag",h).on("touchmove.drag",m,nonpassive).on("touchend.drag touchcancel.drag",b).style("touch-action","none").style("-webkit-tap-highlight-color","rgba(0,0,0,0)")}function g(i,c){if(!a&&o.call(this,i,c)){var u=y(this,r.call(this,i,c),i,c,"mouse");u&&(select(i.view).on("mousemove.drag",v,nonpassivecapture).on("mouseup.drag",p,nonpassivecapture),nodrag(i.view),nopropagation(i),n=!1,e=i.clientX,t=i.clientY,u("start",i))}}function v(a){if(noevent(a),!n){var o=a.clientX-e,r=a.clientY-t;n=o*o+r*r>d}u.mouse("drag",a)}function p(e){select(e.view).on("mousemove.drag mouseup.drag",null),yesdrag(e.view,n),noevent(e),u.mouse("end",e)}function h(e,t){if(o.call(this,e,t)){var n,a,i=e.changedTouches,c=r.call(this,e,t),u=i.length;for(n=0;n<u;++n)(a=y(this,c,e,t,i[n].identifier,i[n]))&&(nopropagation(e),a("start",e,i[n]))}}function m(e){var t,n,a=e.changedTouches,o=a.length;for(t=0;t<o;++t)(n=u[a[t].identifier])&&(noevent(e),n("drag",e,a[t]))}function b(e){var t,n,o=e.changedTouches,r=o.length;for(a&&clearTimeout(a),a=setTimeout((function(){a=null}),500),t=0;t<r;++t)(n=u[o[t].identifier])&&(nopropagation(e),n("end",e,o[t]))}function y(e,t,n,a,o,r){var c,d,g,v=l.copy(),p=pointer(r||n,t);if(null!=(g=i.call(e,new DragEvent("beforestart",{sourceEvent:n,target:f,identifier:o,active:s,x:p[0],y:p[1],dx:0,dy:0,dispatch:v}),a)))return c=g.x-p[0]||0,d=g.y-p[1]||0,function n(r,i,l){var h,m=p;switch(r){case"start":u[o]=n,h=s++;break;case"end":delete u[o],--s;case"drag":p=pointer(l||i,t),h=s}v.call(r,e,new DragEvent(r,{sourceEvent:i,subject:g,target:f,identifier:o,active:h,x:p[0]+c,y:p[1]+d,dx:p[0]-m[0],dy:p[1]-m[1],dispatch:v}),a)}}return f.filter=function(e){return arguments.length?(o="function"==typeof e?e:constant(!!e),f):o},f.container=function(e){return arguments.length?(r="function"==typeof e?e:constant(e),f):r},f.subject=function(e){return arguments.length?(i="function"==typeof e?e:constant(e),f):i},f.touchable=function(e){return arguments.length?(c="function"==typeof e?e:constant(!!e),f):c},f.on=function(){var e=l.on.apply(l,arguments);return e===l?f:e},f.clickDistance=function(e){return arguments.length?(d=(e=+e)*e,f):Math.sqrt(d)},f}DragEvent.prototype.on=function(){var e=this._.on.apply(this._,arguments);return e===this._?this:e};export{drag,nodrag as dragDisable,yesdrag as dragEnable};