webpackJsonp([6],{108:function(e,t,r){var n=r(52)(r(81),r(82),!1,function(e){r(79)},"data-v-739461c0",null);e.exports=n.exports},50:function(e,t,r){var n="undefined"!=typeof document;if("undefined"!=typeof DEBUG&&DEBUG&&!n)throw new Error("vue-style-loader cannot be used in a non-browser environment. Use { target: 'node' } in your Webpack config to indicate a server-rendering environment.");var i=r(51),s={},o=n&&(document.head||document.getElementsByTagName("head")[0]),a=null,l=0,d=!1,c=function(){},p=null,u="data-vue-ssr-id",f="undefined"!=typeof navigator&&/msie [6-9]\b/.test(navigator.userAgent.toLowerCase());function g(e){for(var t=0;t<e.length;t++){var r=e[t],n=s[r.id];if(n){n.refs++;for(var i=0;i<n.parts.length;i++)n.parts[i](r.parts[i]);for(;i<r.parts.length;i++)n.parts.push(v(r.parts[i]));n.parts.length>r.parts.length&&(n.parts.length=r.parts.length)}else{var o=[];for(i=0;i<r.parts.length;i++)o.push(v(r.parts[i]));s[r.id]={id:r.id,refs:1,parts:o}}}}function h(){var e=document.createElement("style");return e.type="text/css",o.appendChild(e),e}function v(e){var t,r,n=document.querySelector("style["+u+'~="'+e.id+'"]');if(n){if(d)return c;n.parentNode.removeChild(n)}if(f){var i=l++;n=a||(a=h()),t=w.bind(null,n,i,!1),r=w.bind(null,n,i,!0)}else n=h(),t=function(e,t){var r=t.css,n=t.media,i=t.sourceMap;n&&e.setAttribute("media",n);p.ssrId&&e.setAttribute(u,t.id);i&&(r+="\n/*# sourceURL="+i.sources[0]+" */",r+="\n/*# sourceMappingURL=data:application/json;base64,"+btoa(unescape(encodeURIComponent(JSON.stringify(i))))+" */");if(e.styleSheet)e.styleSheet.cssText=r;else{for(;e.firstChild;)e.removeChild(e.firstChild);e.appendChild(document.createTextNode(r))}}.bind(null,n),r=function(){n.parentNode.removeChild(n)};return t(e),function(n){if(n){if(n.css===e.css&&n.media===e.media&&n.sourceMap===e.sourceMap)return;t(e=n)}else r()}}e.exports=function(e,t,r,n){d=r,p=n||{};var o=i(e,t);return g(o),function(t){for(var r=[],n=0;n<o.length;n++){var a=o[n];(l=s[a.id]).refs--,r.push(l)}t?g(o=i(e,t)):o=[];for(n=0;n<r.length;n++){var l;if(0===(l=r[n]).refs){for(var d=0;d<l.parts.length;d++)l.parts[d]();delete s[l.id]}}}};var m,y=(m=[],function(e,t){return m[e]=t,m.filter(Boolean).join("\n")});function w(e,t,r,n){var i=r?"":n.css;if(e.styleSheet)e.styleSheet.cssText=y(t,i);else{var s=document.createTextNode(i),o=e.childNodes;o[t]&&e.removeChild(o[t]),o.length?e.insertBefore(s,o[t]):e.appendChild(s)}}},51:function(e,t){e.exports=function(e,t){for(var r=[],n={},i=0;i<t.length;i++){var s=t[i],o=s[0],a={id:e+":"+i,css:s[1],media:s[2],sourceMap:s[3]};n[o]?n[o].parts.push(a):r.push(n[o]={id:o,parts:[a]})}return r}},52:function(e,t){e.exports=function(e,t,r,n,i,s){var o,a=e=e||{},l=typeof e.default;"object"!==l&&"function"!==l||(o=e,a=e.default);var d,c="function"==typeof a?a.options:a;if(t&&(c.render=t.render,c.staticRenderFns=t.staticRenderFns,c._compiled=!0),r&&(c.functional=!0),i&&(c._scopeId=i),s?(d=function(e){(e=e||this.$vnode&&this.$vnode.ssrContext||this.parent&&this.parent.$vnode&&this.parent.$vnode.ssrContext)||"undefined"==typeof __VUE_SSR_CONTEXT__||(e=__VUE_SSR_CONTEXT__),n&&n.call(this,e),e&&e._registeredComponents&&e._registeredComponents.add(s)},c._ssrRegister=d):n&&(d=n),d){var p=c.functional,u=p?c.render:c.beforeCreate;p?(c._injectStyles=d,c.render=function(e,t){return d.call(t),u(e,t)}):c.beforeCreate=u?[].concat(u,d):[d]}return{esModule:o,exports:a,options:c}}},79:function(e,t,r){var n=r(80);"string"==typeof n&&(n=[[e.i,n,""]]),n.locals&&(e.exports=n.locals);r(50)("03001e93",n,!0,{})},80:function(e,t,r){(e.exports=r(11)(!1)).push([e.i,".swiper-slide[data-v-739461c0],.swiper-wrapper[data-v-739461c0]{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.swiper-slide[data-v-739461c0]{-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;min-height:150px;height:100%;-webkit-filter:grayscale(100%);filter:grayscale(100%);-webkit-transition:.3s;transition:.3s}.swiper-slide[data-v-739461c0]:hover{-webkit-filter:grayscale(0);filter:grayscale(0)}",""])},81:function(e,t,r){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var n=r(13);r.n(n);t.default={components:{swiper:n.swiper,swiperSlide:n.swiperSlide},data:function(){return{options:{slidesPerView:4,spaceBetween:0,freeMode:!1,loop:!0,autoplay:!0,delay:3e3}}}}},82:function(e,t){e.exports={render:function(){var e=this.$createElement,t=this._self._c||e;return t("div",[t("swiper",{attrs:{options:this.options}},[t("swiper-slide",[t("img",{attrs:{src:"img/company_logo/avent.png",alt:"",width:"60%"}})]),this._v(" "),t("swiper-slide",[t("img",{attrs:{src:"img/company_logo/carters.png",alt:"",width:"60%"}})]),this._v(" "),t("swiper-slide",[t("img",{attrs:{src:"img/company_logo/disney.png",alt:"",width:"60%"}})]),this._v(" "),t("swiper-slide",[t("img",{attrs:{src:"img/company_logo/garanimals.png",alt:"",width:"60%"}})]),this._v(" "),t("swiper-slide",[t("img",{attrs:{src:"img/company_logo/gerber.png",alt:"",width:"60%"}})]),this._v(" "),t("swiper-slide",[t("img",{attrs:{src:"img/company_logo/tommee.png",alt:"",width:"60%"}})])],1)],1)},staticRenderFns:[]}}});