(window.webpackJsonp_yith_plugin_framewowrk=window.webpackJsonp_yith_plugin_framewowrk||[]).push([[1],{27:function(e,t,n){},28:function(e,t,n){}}]),function(e){function t(t){for(var r,a,l=t[0],i=t[1],u=t[2],f=0,p=[];f<l.length;f++)a=l[f],Object.prototype.hasOwnProperty.call(o,a)&&o[a]&&p.push(o[a][0]),o[a]=0;for(r in i)Object.prototype.hasOwnProperty.call(i,r)&&(e[r]=i[r]);for(s&&s(t);p.length;)p.shift()();return c.push.apply(c,u||[]),n()}function n(){for(var e,t=0;t<c.length;t++){for(var n=c[t],r=!0,l=1;l<n.length;l++){var i=n[l];0!==o[i]&&(r=!1)}r&&(c.splice(t--,1),e=a(a.s=n[0]))}return e}var r={},o={0:0},c=[];function a(t){if(r[t])return r[t].exports;var n=r[t]={i:t,l:!1,exports:{}};return e[t].call(n.exports,n,n.exports,a),n.l=!0,n.exports}a.m=e,a.c=r,a.d=function(e,t,n){a.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},a.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},a.t=function(e,t){if(1&t&&(e=a(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var n=Object.create(null);if(a.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)a.d(n,r,function(t){return e[t]}.bind(null,r));return n},a.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return a.d(t,"a",t),t},a.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},a.p="";var l=window.webpackJsonp_yith_plugin_framewowrk=window.webpackJsonp_yith_plugin_framewowrk||[],i=l.push.bind(l);l.push=t,l=l.slice();for(var u=0;u<l.length;u++)t(l[u]);var s=i;c.push([29,1]),n()}([function(e,t){e.exports=window.wp.element},function(e,t){e.exports=window.wp.components},function(e,t){e.exports=window.React},function(e,t,n){var r=n(17),o=n(18),c=n(19),a=n(21);e.exports=function(e,t){return r(e)||o(e,t)||c(e,t)||a()}},function(e,t){e.exports=window.wp.hooks},function(e,t,n){var r,o,c,a,l;r=n(22),o=n(9).utf8,c=n(23),a=n(9).bin,(l=function(e,t){e.constructor==String?e=t&&"binary"===t.encoding?a.stringToBytes(e):o.stringToBytes(e):c(e)?e=Array.prototype.slice.call(e,0):Array.isArray(e)||e.constructor===Uint8Array||(e=e.toString());for(var n=r.bytesToWords(e),i=8*e.length,u=1732584193,s=-271733879,f=-1732584194,p=271733878,h=0;h<n.length;h++)n[h]=16711935&(n[h]<<8|n[h]>>>24)|4278255360&(n[h]<<24|n[h]>>>8);n[i>>>5]|=128<<i%32,n[14+(i+64>>>9<<4)]=i;var b=l._ff,d=l._gg,y=l._hh,g=l._ii;for(h=0;h<n.length;h+=16){var m=u,v=s,_=f,j=p;u=b(u,s,f,p,n[h+0],7,-680876936),p=b(p,u,s,f,n[h+1],12,-389564586),f=b(f,p,u,s,n[h+2],17,606105819),s=b(s,f,p,u,n[h+3],22,-1044525330),u=b(u,s,f,p,n[h+4],7,-176418897),p=b(p,u,s,f,n[h+5],12,1200080426),f=b(f,p,u,s,n[h+6],17,-1473231341),s=b(s,f,p,u,n[h+7],22,-45705983),u=b(u,s,f,p,n[h+8],7,1770035416),p=b(p,u,s,f,n[h+9],12,-1958414417),f=b(f,p,u,s,n[h+10],17,-42063),s=b(s,f,p,u,n[h+11],22,-1990404162),u=b(u,s,f,p,n[h+12],7,1804603682),p=b(p,u,s,f,n[h+13],12,-40341101),f=b(f,p,u,s,n[h+14],17,-1502002290),u=d(u,s=b(s,f,p,u,n[h+15],22,1236535329),f,p,n[h+1],5,-165796510),p=d(p,u,s,f,n[h+6],9,-1069501632),f=d(f,p,u,s,n[h+11],14,643717713),s=d(s,f,p,u,n[h+0],20,-373897302),u=d(u,s,f,p,n[h+5],5,-701558691),p=d(p,u,s,f,n[h+10],9,38016083),f=d(f,p,u,s,n[h+15],14,-660478335),s=d(s,f,p,u,n[h+4],20,-405537848),u=d(u,s,f,p,n[h+9],5,568446438),p=d(p,u,s,f,n[h+14],9,-1019803690),f=d(f,p,u,s,n[h+3],14,-187363961),s=d(s,f,p,u,n[h+8],20,1163531501),u=d(u,s,f,p,n[h+13],5,-1444681467),p=d(p,u,s,f,n[h+2],9,-51403784),f=d(f,p,u,s,n[h+7],14,1735328473),u=y(u,s=d(s,f,p,u,n[h+12],20,-1926607734),f,p,n[h+5],4,-378558),p=y(p,u,s,f,n[h+8],11,-2022574463),f=y(f,p,u,s,n[h+11],16,1839030562),s=y(s,f,p,u,n[h+14],23,-35309556),u=y(u,s,f,p,n[h+1],4,-1530992060),p=y(p,u,s,f,n[h+4],11,1272893353),f=y(f,p,u,s,n[h+7],16,-155497632),s=y(s,f,p,u,n[h+10],23,-1094730640),u=y(u,s,f,p,n[h+13],4,681279174),p=y(p,u,s,f,n[h+0],11,-358537222),f=y(f,p,u,s,n[h+3],16,-722521979),s=y(s,f,p,u,n[h+6],23,76029189),u=y(u,s,f,p,n[h+9],4,-640364487),p=y(p,u,s,f,n[h+12],11,-421815835),f=y(f,p,u,s,n[h+15],16,530742520),u=g(u,s=y(s,f,p,u,n[h+2],23,-995338651),f,p,n[h+0],6,-198630844),p=g(p,u,s,f,n[h+7],10,1126891415),f=g(f,p,u,s,n[h+14],15,-1416354905),s=g(s,f,p,u,n[h+5],21,-57434055),u=g(u,s,f,p,n[h+12],6,1700485571),p=g(p,u,s,f,n[h+3],10,-1894986606),f=g(f,p,u,s,n[h+10],15,-1051523),s=g(s,f,p,u,n[h+1],21,-2054922799),u=g(u,s,f,p,n[h+8],6,1873313359),p=g(p,u,s,f,n[h+15],10,-30611744),f=g(f,p,u,s,n[h+6],15,-1560198380),s=g(s,f,p,u,n[h+13],21,1309151649),u=g(u,s,f,p,n[h+4],6,-145523070),p=g(p,u,s,f,n[h+11],10,-1120210379),f=g(f,p,u,s,n[h+2],15,718787259),s=g(s,f,p,u,n[h+9],21,-343485551),u=u+m>>>0,s=s+v>>>0,f=f+_>>>0,p=p+j>>>0}return r.endian([u,s,f,p])})._ff=function(e,t,n,r,o,c,a){var l=e+(t&n|~t&r)+(o>>>0)+a;return(l<<c|l>>>32-c)+t},l._gg=function(e,t,n,r,o,c,a){var l=e+(t&r|n&~r)+(o>>>0)+a;return(l<<c|l>>>32-c)+t},l._hh=function(e,t,n,r,o,c,a){var l=e+(t^n^r)+(o>>>0)+a;return(l<<c|l>>>32-c)+t},l._ii=function(e,t,n,r,o,c,a){var l=e+(n^(t|~r))+(o>>>0)+a;return(l<<c|l>>>32-c)+t},l._blocksize=16,l._digestsize=16,e.exports=function(e,t){if(null==e)throw new Error("Illegal argument "+e);var n=r.wordsToBytes(l(e,t));return t&&t.asBytes?n:t&&t.asString?a.bytesToString(n):r.bytesToHex(n)}},function(e,t){e.exports=window.wp.blockEditor},function(e,t){e.exports=window.wp.compose},function(e,t){function n(t){return e.exports=n=Object.setPrototypeOf?Object.getPrototypeOf:function(e){return e.__proto__||Object.getPrototypeOf(e)},n(t)}e.exports=n},function(e,t){var n={utf8:{stringToBytes:function(e){return n.bin.stringToBytes(unescape(encodeURIComponent(e)))},bytesToString:function(e){return decodeURIComponent(escape(n.bin.bytesToString(e)))}},bin:{stringToBytes:function(e){for(var t=[],n=0;n<e.length;n++)t.push(255&e.charCodeAt(n));return t},bytesToString:function(e){for(var t=[],n=0;n<e.length;n++)t.push(String.fromCharCode(e[n]));return t.join("")}}};e.exports=n},function(e,t){e.exports=window.wp.blocks},function(e,t){e.exports=window.wp.url},function(e,t){e.exports=function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}},function(e,t){function n(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}e.exports=function(e,t,r){return t&&n(e.prototype,t),r&&n(e,r),e}},function(e,t,n){var r=n(24);e.exports=function(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function");e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,writable:!0,configurable:!0}}),t&&r(e,t)}},function(e,t,n){var r=n(25),o=n(26);e.exports=function(e,t){return!t||"object"!==r(t)&&"function"!=typeof t?o(e):t}},function(e,t){e.exports=window.lodash},function(e,t){e.exports=function(e){if(Array.isArray(e))return e}},function(e,t){e.exports=function(e,t){if("undefined"!=typeof Symbol&&Symbol.iterator in Object(e)){var n=[],r=!0,o=!1,c=void 0;try{for(var a,l=e[Symbol.iterator]();!(r=(a=l.next()).done)&&(n.push(a.value),!t||n.length!==t);r=!0);}catch(e){o=!0,c=e}finally{try{r||null==l.return||l.return()}finally{if(o)throw c}}return n}}},function(e,t,n){var r=n(20);e.exports=function(e,t){if(e){if("string"==typeof e)return r(e,t);var n=Object.prototype.toString.call(e).slice(8,-1);return"Object"===n&&e.constructor&&(n=e.constructor.name),"Map"===n||"Set"===n?Array.from(e):"Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)?r(e,t):void 0}}},function(e,t){e.exports=function(e,t){(null==t||t>e.length)&&(t=e.length);for(var n=0,r=new Array(t);n<t;n++)r[n]=e[n];return r}},function(e,t){e.exports=function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}},function(e,t){var n,r;n="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/",r={rotl:function(e,t){return e<<t|e>>>32-t},rotr:function(e,t){return e<<32-t|e>>>t},endian:function(e){if(e.constructor==Number)return 16711935&r.rotl(e,8)|4278255360&r.rotl(e,24);for(var t=0;t<e.length;t++)e[t]=r.endian(e[t]);return e},randomBytes:function(e){for(var t=[];e>0;e--)t.push(Math.floor(256*Math.random()));return t},bytesToWords:function(e){for(var t=[],n=0,r=0;n<e.length;n++,r+=8)t[r>>>5]|=e[n]<<24-r%32;return t},wordsToBytes:function(e){for(var t=[],n=0;n<32*e.length;n+=8)t.push(e[n>>>5]>>>24-n%32&255);return t},bytesToHex:function(e){for(var t=[],n=0;n<e.length;n++)t.push((e[n]>>>4).toString(16)),t.push((15&e[n]).toString(16));return t.join("")},hexToBytes:function(e){for(var t=[],n=0;n<e.length;n+=2)t.push(parseInt(e.substr(n,2),16));return t},bytesToBase64:function(e){for(var t=[],r=0;r<e.length;r+=3)for(var o=e[r]<<16|e[r+1]<<8|e[r+2],c=0;c<4;c++)8*r+6*c<=8*e.length?t.push(n.charAt(o>>>6*(3-c)&63)):t.push("=");return t.join("")},base64ToBytes:function(e){e=e.replace(/[^A-Z0-9+\/]/gi,"");for(var t=[],r=0,o=0;r<e.length;o=++r%4)0!=o&&t.push((n.indexOf(e.charAt(r-1))&Math.pow(2,-2*o+8)-1)<<2*o|n.indexOf(e.charAt(r))>>>6-2*o);return t}},e.exports=r},function(e,t){function n(e){return!!e.constructor&&"function"==typeof e.constructor.isBuffer&&e.constructor.isBuffer(e)}e.exports=function(e){return null!=e&&(n(e)||function(e){return"function"==typeof e.readFloatLE&&"function"==typeof e.slice&&n(e.slice(0,0))}(e)||!!e._isBuffer)}},function(e,t){function n(t,r){return e.exports=n=Object.setPrototypeOf||function(e,t){return e.__proto__=t,e},n(t,r)}e.exports=n},function(e,t){function n(t){return"function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?e.exports=n=function(e){return typeof e}:e.exports=n=function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},n(t)}e.exports=n},function(e,t){e.exports=function(e){if(void 0===e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return e}},,,function(e,t,n){"use strict";n.r(t);var r=n(3),o=n.n(r),c=n(0),a=n(2),l=n(5),i=n.n(l),u=n(10),s=n(11);function f(e){if(e.status>=200&&e.status<300)return e;throw e}function p(e){return e.json?e.json():e.text()}var h=Object(c.createElement)("svg",{viewBox:"0 0 22 22",xmlns:"http://www.w3.org/2000/svg",width:"22",height:"22",role:"img","aria-hidden":"true",focusable:"false"},Object(c.createElement)("path",{width:"22",height:"22",d:"M 18.24 7.628 C 17.291 8.284 16.076 8.971 14.587 9.688 C 15.344 7.186 15.765 4.851 15.849 2.684 C 15.912 0.939 15.133 0.045 13.514 0.003 C 11.558 -0.06 10.275 1.033 9.665 3.284 C 10.007 3.137 10.359 3.063 10.723 3.063 C 11.021 3.063 11.267 3.184 11.459 3.426 C 11.651 3.668 11.736 3.947 11.715 4.262 C 11.695 5.082 11.276 5.961 10.46 6.896 C 9.644 7.833 8.918 8.3 8.282 8.3 C 7.837 8.3 7.625 7.922 7.646 7.165 C 7.667 6.765 7.804 5.955 8.056 4.735 C 8.287 3.579 8.403 2.801 8.403 2.401 C 8.403 1.707 8.224 1.144 7.867 0.713 C 7.509 0.282 6.994 0.098 6.321 0.161 C 5.858 0.203 5.175 0.624 4.27 1.422 C 3.596 2.035 2.923 2.644 2.25 3.254 L 2.976 4.106 C 3.564 3.664 3.922 3.443 4.048 3.443 C 4.448 3.443 4.637 3.717 4.617 4.263 C 4.617 4.306 4.427 4.968 4.049 6.251 C 3.671 7.534 3.471 8.491 3.449 9.122 C 3.407 9.985 3.565 10.647 3.924 11.109 C 4.367 11.677 5.106 11.919 6.142 11.835 C 7.366 11.751 8.591 11.298 9.816 10.479 C 10.323 10.142 10.808 9.753 11.273 9.311 C 11.105 10.153 10.905 10.868 10.673 11.457 C 8.402 12.487 6.762 13.37 5.752 14.107 C 4.321 15.137 3.554 16.241 3.449 17.419 C 3.259 19.459 4.29 20.479 6.541 20.479 C 8.055 20.479 9.517 19.554 10.926 17.703 C 12.125 16.126 13.166 14.022 14.049 11.394 C 15.578 10.635 16.87 9.892 17.928 9.164 C 17.894 9.409 18.319 7.308 18.24 7.628 Z  M 7.393 16.095 C 7.056 16.095 6.898 15.947 6.919 15.653 C 6.961 15.106 7.908 14.38 9.759 13.476 C 8.791 15.221 8.002 16.095 7.393 16.095 Z"})),b=function(e,t){var n=e.controlType,r=!0;if(e.deps&&e.deps.id&&"value"in e.deps){var o=e.deps.value;"toggle"!==n&&"checkbox"!==n||(o=!0===o||"yes"===o||1===o),r=void 0!==t[e.deps.id]&&o===t[e.deps.id]}return r},d=function(e,t){var n="",r=!1;if(void 0!==e.callback&&(jQuery&&e.callback in jQuery.fn?r=jQuery.fn[e.callback]:e.callback in window&&(r=window[e.callback])),"function"==typeof r)n=r(t,e);else{var c=e.attributes?Object.entries(e.attributes).map((function(e){var n=o()(e,2),r=n[0],c=n[1],a=b(c,t),l=t[r];if(a&&void 0!==l)return r+"="+(c.remove_quotes?l:'"'.concat(l,'"'))})):[],a=c.length?" "+c.join(" "):"";n="[".concat(e.shortcode_name).concat(a,"]")}return n},y=n(1),g=n(6),m=n(12),v=n.n(m),_=n(13),j=n.n(_),w=n(14),k=n.n(w),x=n(15),O=n.n(x),C=n(8),E=n.n(C),S=n(16),T=n(4);n(27);var A=function(e){k()(o,e);var t,n,r=(t=o,n=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Date.prototype.toString.call(Reflect.construct(Date,[],(function(){}))),!0}catch(e){return!1}}(),function(){var e,r=E()(t);if(n){var o=E()(this).constructor;e=Reflect.construct(r,arguments,o)}else e=r.apply(this,arguments);return O()(this,e)});function o(){var e;return v()(this,o),(e=r.apply(this,arguments)).state={html:"",shortcode:"",shortcodeHash:"",ajaxUpdated:!1,ajaxSuccess:!1,ajaxResponse:!1,loading:!1},e.ajaxTimeout=!1,e}return j()(o,[{key:"componentDidMount",value:function(){this.updateShortcode()}},{key:"componentDidUpdate",value:function(e,t,n){var r=this.state,o=r.shortcode,c=r.shortcodeHash,a=r.ajaxSuccess,l=r.ajaxResponse,i=r.ajaxUpdated;Object(S.isEqual)(e,this.props)||this.updateShortcode(),this.props.blockArgs.do_shortcode&&i&&(a&&Object(T.doAction)("yith_plugin_fw_gutenberg_success_do_shortcode",o,c,l),Object(T.doAction)("yith_plugin_fw_gutenberg_after_do_shortcode",o,c,l),this.setState({ajaxUpdated:!1}))}},{key:"updateShortcode",value:function(){var e=this,t=this.props,n=t.attributes,r=t.blockArgs;this.setState({loading:!0,ajaxSuccess:!1,ajaxResponse:!1});var o=d(r,n),c=i()(o);r.do_shortcode?(this.ajaxTimeout&&clearTimeout(this.ajaxTimeout),Object(T.doAction)("yith_plugin_fw_gutenberg_before_do_shortcode",o,c),this.ajaxTimeout=setTimeout((function(){(function(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:yithGutenberg.ajaxurl;return t=Object(s.addQueryArgs)(t,e),fetch(t).then(f).then(p)})({action:"yith_plugin_fw_gutenberg_do_shortcode",shortcode:o}).then((function(t){e.setState({loading:!1,html:t.html,shortcode:o,shortcodeHash:c,ajaxSuccess:!0,ajaxUpdated:!0,ajaxResponse:t})})).catch((function(e){console.log({error:e})}))}),300)):this.setState({loading:!1,html:o,shortcode:o,shortcodeHash:c})}},{key:"render",value:function(){var e=this.state,t=e.html,n=e.loading,r=e.shortcode,o=e.shortcodeHash,a=this.props.blockArgs,l=a.do_shortcode,i=a.title,u=a.empty_message,s="block-editor-yith-plugin-fw-shortcode-block",f=[s],p=l?"html":"shortcode",b=t,d="";l&&!t&&(p="empty-html",b=r,u&&(d=u));var g=["shortcode","empty-html"].includes(p),m="empty-html"!==p,v=!!d;return f.push("".concat(s,"--").concat(p)),f.push("".concat(s,v?"--has-message":"--no-message")),f.push("yith_block_".concat(o)),Object(c.createElement)(c.Fragment,null,Object(c.createElement)("div",{className:f.join(" ")},n?Object(c.createElement)("div",{className:"".concat(s,"__spinner-wrap")},Object(c.createElement)(y.Spinner,null)):"",g&&Object(c.createElement)("div",{className:"".concat(s,"__title components-placeholder__label")},h,i),v&&Object(c.createElement)(c.RawHTML,{className:"".concat(s,"__message")},d),m&&Object(c.createElement)(c.RawHTML,{className:"".concat(s,"__content")},b)))}}]),o}(a.Component),B=n(7);function N(e){var t=e.className,n=e.label,r=e.onChange,o=e.value,a=e.help,l=e.disableAlpha,i=Object(B.useInstanceId)(N),u="inspector-yith-color-picker-control-".concat(i);return Object(c.createElement)(y.BaseControl,{id:u,label:n,className:"block-editor-yith-color-control ".concat(t),help:a},Object(c.createElement)(y.ColorPicker,{color:o,disableAlpha:l,onChangeComplete:r}))}function R(e){var t=e.label,n=e.colorValue;return Object(c.createElement)(c.Fragment,null,t,!!n&&Object(c.createElement)(y.ColorIndicator,{colorValue:n}))}function P(e){var t=e.className,n=e.label,r=e.onChange,o=e.value,a=e.help,l=e.palette,i=e.clearable;l=l||Object(g.__experimentalUseEditorFeature)("color.palette");var u=Object(B.useInstanceId)(P),s="inspector-yith-color-palette-control-".concat(u);return Object(c.createElement)(y.BaseControl,{id:s,className:"block-editor-yith-color-palette-control ".concat(t),help:a},Object(c.createElement)("fieldset",null,Object(c.createElement)("legend",null,Object(c.createElement)("div",{className:"block-editor-yith-color-palette-control__color-indicator"},Object(c.createElement)(y.BaseControl.VisualLabel,null,Object(c.createElement)(R,{colorValue:o,label:n})))),Object(c.createElement)(y.ColorPalette,{value:o,onChange:r,colors:l,clearable:i})))}n(28);for(var M=function(e,t){return function(n){var r=n.attributes,a=(n.className,n.setAttributes),l=function(e,t,n){["colorpicker","color"].includes(n)&&(e=e.color.getAlpha()<1?e.color.toRgbString():e.color.toHexString());var r={};r[t]=e,a(r)};return Object(c.createElement)(c.Fragment,null,!!t.attributes&&Object(c.createElement)(g.InspectorControls,null,Object(c.createElement)(y.PanelBody,null,Object.entries(t.attributes).map((function(t){var n=o()(t,2),a=function(t,n){var o=n.controlType,a=r[t],i=function(e,t){var n="";return e.helps&&e.helps.checked&&e.helps.unchecked?n=t?e.helps.checked:e.helps.unchecked:e.help&&(n=e.help),n}(n,a),u="".concat(e,"__").concat(t,"-field-wrapper"),s=b(n,r);n.wrapper_class&&(u+=" "+n.wrapper_class);var f=!1;if(s)switch(o){case"select":f=Object(c.createElement)(y.SelectControl,{className:u,key:t,value:a,label:n.label,options:n.options,selected:a,help:i,multiple:!!n.multiple,onChange:function(e){l(e,t,o)}});break;case"text":f=Object(c.createElement)(y.TextControl,{className:u,key:t,value:a,label:n.label,help:i,onChange:function(e){l(e,t,o)}});break;case"textarea":f=Object(c.createElement)(y.TextareaControl,{className:u,key:t,value:a,label:n.label,help:i,onChange:function(e){l(e,t,o)}});break;case"toggle":f=Object(c.createElement)(y.ToggleControl,{className:u,key:t,value:a,label:n.label,help:i,checked:a,onChange:function(e){l(e,t,o)}});break;case"checkbox":f=Object(c.createElement)(y.CheckboxControl,{className:u,key:t,value:a,label:n.label,help:i,checked:a,onChange:function(e){l(e,t,o)}});break;case"number":case"range":f=Object(c.createElement)(y.RangeControl,{className:u,key:t,value:a,label:n.label,help:i,min:n.min,max:n.max,onChange:function(e){l(e,t,o)}});break;case"color":case"colorpicker":f=Object(c.createElement)(N,{className:u,key:t,label:n.label,help:i,value:a,disableAlpha:n.disableAlpha,onChange:function(e){l(e,t,o)}});break;case"color-palette":f=Object(c.createElement)(P,{className:u,key:t,label:n.label,help:i,value:a,clearable:n.clearable||!1,onChange:function(e){l(e,t,o)}});break;case"radio":f=Object(c.createElement)(y.RadioControl,{key:t,value:a,label:n.label,options:n.options,selected:a,checked:a,help:i,onChange:function(e){l(e,t,o)}});break;default:f=!1}return f}(n[0],n[1]);if(a)return a})))),Object(c.createElement)(A,{attributes:r,blockArgs:t}))}},I=function(){var e=U[H];Object(T.addAction)(e.key,"yith-plugin-fw/jquery-events",(function(){for(var t=arguments.length,n=new Array(t),r=0;r<t;r++)n[r]=arguments[r];"jQuery"in window&&(e.delay?setTimeout((function(){jQuery(document).trigger(e.key,Object.values(n))}),e.delay):jQuery(document).trigger(e.key,Object.values(n)))}))},H=0,U=[{key:"yith_plugin_fw_gutenberg_before_do_shortcode",delay:0},{key:"yith_plugin_fw_gutenberg_success_do_shortcode",delay:200},{key:"yith_plugin_fw_gutenberg_after_do_shortcode",delay:200}];H<U.length;H++)I();for(var Q=function(){var e=o()(F[L],2),t=e[0],n=e[1];Object(u.registerBlockType)("yith/"+t,{title:n.title,description:n.description,category:n.category,attributes:n.attributes,icon:void 0!==n.icon?n.icon:h,keywords:n.keywords,edit:M(t,n),save:function(e){var t=e.attributes;return d(n,t)},deprecated:[{attributes:n.attributes,save:function(e){var t=e.attributes,r=d(n,t),o='<span class="yith_block_'+i()(r)+'">'+r+"</span>";return Object(c.createElement)(c.RawHTML,null,o)}}]})},L=0,F=Object.entries(yithGutenbergBlocks);L<F.length;L++)Q()}]);