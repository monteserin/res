function Of(t,e){for(var n=0;n<e.length;n++){const r=e[n];if(typeof r!="string"&&!Array.isArray(r)){for(const i in r)if(i!=="default"&&!(i in t)){const s=Object.getOwnPropertyDescriptor(r,i);s&&Object.defineProperty(t,i,s.get?s:{enumerable:!0,get:()=>r[i]})}}}return Object.freeze(Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}))}(function(){const e=document.createElement("link").relList;if(e&&e.supports&&e.supports("modulepreload"))return;for(const i of document.querySelectorAll('link[rel="modulepreload"]'))r(i);new MutationObserver(i=>{for(const s of i)if(s.type==="childList")for(const a of s.addedNodes)a.tagName==="LINK"&&a.rel==="modulepreload"&&r(a)}).observe(document,{childList:!0,subtree:!0});function n(i){const s={};return i.integrity&&(s.integrity=i.integrity),i.referrerPolicy&&(s.referrerPolicy=i.referrerPolicy),i.crossOrigin==="use-credentials"?s.credentials="include":i.crossOrigin==="anonymous"?s.credentials="omit":s.credentials="same-origin",s}function r(i){if(i.ep)return;i.ep=!0;const s=n(i);fetch(i.href,s)}})();function zf(t){return t&&t.__esModule&&Object.prototype.hasOwnProperty.call(t,"default")?t.default:t}var Vu={exports:{}},ts={},Gu={exports:{}},z={};/**
 * @license React
 * react.production.min.js
 *
 * Copyright (c) Facebook, Inc. and its affiliates.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */var zr=Symbol.for("react.element"),Wf=Symbol.for("react.portal"),Mf=Symbol.for("react.fragment"),Df=Symbol.for("react.strict_mode"),$f=Symbol.for("react.profiler"),Ff=Symbol.for("react.provider"),Bf=Symbol.for("react.context"),Uf=Symbol.for("react.forward_ref"),Hf=Symbol.for("react.suspense"),Vf=Symbol.for("react.memo"),Gf=Symbol.for("react.lazy"),mo=Symbol.iterator;function qf(t){return t===null||typeof t!="object"?null:(t=mo&&t[mo]||t["@@iterator"],typeof t=="function"?t:null)}var qu={isMounted:function(){return!1},enqueueForceUpdate:function(){},enqueueReplaceState:function(){},enqueueSetState:function(){}},Qu=Object.assign,Yu={};function $n(t,e,n){this.props=t,this.context=e,this.refs=Yu,this.updater=n||qu}$n.prototype.isReactComponent={};$n.prototype.setState=function(t,e){if(typeof t!="object"&&typeof t!="function"&&t!=null)throw Error("setState(...): takes an object of state variables to update or a function which returns an object of state variables.");this.updater.enqueueSetState(this,t,e,"setState")};$n.prototype.forceUpdate=function(t){this.updater.enqueueForceUpdate(this,t,"forceUpdate")};function Ju(){}Ju.prototype=$n.prototype;function cl(t,e,n){this.props=t,this.context=e,this.refs=Yu,this.updater=n||qu}var hl=cl.prototype=new Ju;hl.constructor=cl;Qu(hl,$n.prototype);hl.isPureReactComponent=!0;var vo=Array.isArray,Xu=Object.prototype.hasOwnProperty,fl={current:null},Ku={key:!0,ref:!0,__self:!0,__source:!0};function Zu(t,e,n){var r,i={},s=null,a=null;if(e!=null)for(r in e.ref!==void 0&&(a=e.ref),e.key!==void 0&&(s=""+e.key),e)Xu.call(e,r)&&!Ku.hasOwnProperty(r)&&(i[r]=e[r]);var l=arguments.length-2;if(l===1)i.children=n;else if(1<l){for(var o=Array(l),u=0;u<l;u++)o[u]=arguments[u+2];i.children=o}if(t&&t.defaultProps)for(r in l=t.defaultProps,l)i[r]===void 0&&(i[r]=l[r]);return{$$typeof:zr,type:t,key:s,ref:a,props:i,_owner:fl.current}}function Qf(t,e){return{$$typeof:zr,type:t.type,key:e,ref:t.ref,props:t.props,_owner:t._owner}}function dl(t){return typeof t=="object"&&t!==null&&t.$$typeof===zr}function Yf(t){var e={"=":"=0",":":"=2"};return"$"+t.replace(/[=:]/g,function(n){return e[n]})}var xo=/\/+/g;function Es(t,e){return typeof t=="object"&&t!==null&&t.key!=null?Yf(""+t.key):e.toString(36)}function ui(t,e,n,r,i){var s=typeof t;(s==="undefined"||s==="boolean")&&(t=null);var a=!1;if(t===null)a=!0;else switch(s){case"string":case"number":a=!0;break;case"object":switch(t.$$typeof){case zr:case Wf:a=!0}}if(a)return a=t,i=i(a),t=r===""?"."+Es(a,0):r,vo(i)?(n="",t!=null&&(n=t.replace(xo,"$&/")+"/"),ui(i,e,n,"",function(u){return u})):i!=null&&(dl(i)&&(i=Qf(i,n+(!i.key||a&&a.key===i.key?"":(""+i.key).replace(xo,"$&/")+"/")+t)),e.push(i)),1;if(a=0,r=r===""?".":r+":",vo(t))for(var l=0;l<t.length;l++){s=t[l];var o=r+Es(s,l);a+=ui(s,e,n,o,i)}else if(o=qf(t),typeof o=="function")for(t=o.call(t),l=0;!(s=t.next()).done;)s=s.value,o=r+Es(s,l++),a+=ui(s,e,n,o,i);else if(s==="object")throw e=String(t),Error("Objects are not valid as a React child (found: "+(e==="[object Object]"?"object with keys {"+Object.keys(t).join(", ")+"}":e)+"). If you meant to render a collection of children, use an array instead.");return a}function Hr(t,e,n){if(t==null)return t;var r=[],i=0;return ui(t,r,"","",function(s){return e.call(n,s,i++)}),r}function Jf(t){if(t._status===-1){var e=t._result;e=e(),e.then(function(n){(t._status===0||t._status===-1)&&(t._status=1,t._result=n)},function(n){(t._status===0||t._status===-1)&&(t._status=2,t._result=n)}),t._status===-1&&(t._status=0,t._result=e)}if(t._status===1)return t._result.default;throw t._result}var yt={current:null},ci={transition:null},Xf={ReactCurrentDispatcher:yt,ReactCurrentBatchConfig:ci,ReactCurrentOwner:fl};z.Children={map:Hr,forEach:function(t,e,n){Hr(t,function(){e.apply(this,arguments)},n)},count:function(t){var e=0;return Hr(t,function(){e++}),e},toArray:function(t){return Hr(t,function(e){return e})||[]},only:function(t){if(!dl(t))throw Error("React.Children.only expected to receive a single React element child.");return t}};z.Component=$n;z.Fragment=Mf;z.Profiler=$f;z.PureComponent=cl;z.StrictMode=Df;z.Suspense=Hf;z.__SECRET_INTERNALS_DO_NOT_USE_OR_YOU_WILL_BE_FIRED=Xf;z.cloneElement=function(t,e,n){if(t==null)throw Error("React.cloneElement(...): The argument must be a React element, but you passed "+t+".");var r=Qu({},t.props),i=t.key,s=t.ref,a=t._owner;if(e!=null){if(e.ref!==void 0&&(s=e.ref,a=fl.current),e.key!==void 0&&(i=""+e.key),t.type&&t.type.defaultProps)var l=t.type.defaultProps;for(o in e)Xu.call(e,o)&&!Ku.hasOwnProperty(o)&&(r[o]=e[o]===void 0&&l!==void 0?l[o]:e[o])}var o=arguments.length-2;if(o===1)r.children=n;else if(1<o){l=Array(o);for(var u=0;u<o;u++)l[u]=arguments[u+2];r.children=l}return{$$typeof:zr,type:t.type,key:i,ref:s,props:r,_owner:a}};z.createContext=function(t){return t={$$typeof:Bf,_currentValue:t,_currentValue2:t,_threadCount:0,Provider:null,Consumer:null,_defaultValue:null,_globalName:null},t.Provider={$$typeof:Ff,_context:t},t.Consumer=t};z.createElement=Zu;z.createFactory=function(t){var e=Zu.bind(null,t);return e.type=t,e};z.createRef=function(){return{current:null}};z.forwardRef=function(t){return{$$typeof:Uf,render:t}};z.isValidElement=dl;z.lazy=function(t){return{$$typeof:Gf,_payload:{_status:-1,_result:t},_init:Jf}};z.memo=function(t,e){return{$$typeof:Vf,type:t,compare:e===void 0?null:e}};z.startTransition=function(t){var e=ci.transition;ci.transition={};try{t()}finally{ci.transition=e}};z.unstable_act=function(){throw Error("act(...) is not supported in production builds of React.")};z.useCallback=function(t,e){return yt.current.useCallback(t,e)};z.useContext=function(t){return yt.current.useContext(t)};z.useDebugValue=function(){};z.useDeferredValue=function(t){return yt.current.useDeferredValue(t)};z.useEffect=function(t,e){return yt.current.useEffect(t,e)};z.useId=function(){return yt.current.useId()};z.useImperativeHandle=function(t,e,n){return yt.current.useImperativeHandle(t,e,n)};z.useInsertionEffect=function(t,e){return yt.current.useInsertionEffect(t,e)};z.useLayoutEffect=function(t,e){return yt.current.useLayoutEffect(t,e)};z.useMemo=function(t,e){return yt.current.useMemo(t,e)};z.useReducer=function(t,e,n){return yt.current.useReducer(t,e,n)};z.useRef=function(t){return yt.current.useRef(t)};z.useState=function(t){return yt.current.useState(t)};z.useSyncExternalStore=function(t,e,n){return yt.current.useSyncExternalStore(t,e,n)};z.useTransition=function(){return yt.current.useTransition()};z.version="18.2.0";Gu.exports=z;var k=Gu.exports;const Qt=zf(k),Kf=Of({__proto__:null,default:Qt},[k]);/**
 * @license React
 * react-jsx-runtime.production.min.js
 *
 * Copyright (c) Facebook, Inc. and its affiliates.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */var Zf=k,td=Symbol.for("react.element"),ed=Symbol.for("react.fragment"),nd=Object.prototype.hasOwnProperty,rd=Zf.__SECRET_INTERNALS_DO_NOT_USE_OR_YOU_WILL_BE_FIRED.ReactCurrentOwner,id={key:!0,ref:!0,__self:!0,__source:!0};function tc(t,e,n){var r,i={},s=null,a=null;n!==void 0&&(s=""+n),e.key!==void 0&&(s=""+e.key),e.ref!==void 0&&(a=e.ref);for(r in e)nd.call(e,r)&&!id.hasOwnProperty(r)&&(i[r]=e[r]);if(t&&t.defaultProps)for(r in e=t.defaultProps,e)i[r]===void 0&&(i[r]=e[r]);return{$$typeof:td,type:t,key:s,ref:a,props:i,_owner:rd.current}}ts.Fragment=ed;ts.jsx=tc;ts.jsxs=tc;Vu.exports=ts;var P=Vu.exports,ia={},ec={exports:{}},Pt={},nc={exports:{}},rc={};/**
 * @license React
 * scheduler.production.min.js
 *
 * Copyright (c) Facebook, Inc. and its affiliates.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */(function(t){function e(C,_){var A=C.length;C.push(_);t:for(;0<A;){var F=A-1>>>1,N=C[F];if(0<i(N,_))C[F]=_,C[A]=N,A=F;else break t}}function n(C){return C.length===0?null:C[0]}function r(C){if(C.length===0)return null;var _=C[0],A=C.pop();if(A!==_){C[0]=A;t:for(var F=0,N=C.length,L=N>>>1;F<L;){var $=2*(F+1)-1,lt=C[$],It=$+1,Ot=C[It];if(0>i(lt,A))It<N&&0>i(Ot,lt)?(C[F]=Ot,C[It]=A,F=It):(C[F]=lt,C[$]=A,F=$);else if(It<N&&0>i(Ot,A))C[F]=Ot,C[It]=A,F=It;else break t}}return _}function i(C,_){var A=C.sortIndex-_.sortIndex;return A!==0?A:C.id-_.id}if(typeof performance=="object"&&typeof performance.now=="function"){var s=performance;t.unstable_now=function(){return s.now()}}else{var a=Date,l=a.now();t.unstable_now=function(){return a.now()-l}}var o=[],u=[],d=1,p=null,g=3,v=!1,x=!1,y=!1,I=typeof setTimeout=="function"?setTimeout:null,h=typeof clearTimeout=="function"?clearTimeout:null,c=typeof setImmediate<"u"?setImmediate:null;typeof navigator<"u"&&navigator.scheduling!==void 0&&navigator.scheduling.isInputPending!==void 0&&navigator.scheduling.isInputPending.bind(navigator.scheduling);function f(C){for(var _=n(u);_!==null;){if(_.callback===null)r(u);else if(_.startTime<=C)r(u),_.sortIndex=_.expirationTime,e(o,_);else break;_=n(u)}}function m(C){if(y=!1,f(C),!x)if(n(o)!==null)x=!0,Zt(w);else{var _=n(u);_!==null&&St(m,_.startTime-C)}}function w(C,_){x=!1,y&&(y=!1,h(E),E=-1),v=!0;var A=g;try{for(f(_),p=n(o);p!==null&&(!(p.expirationTime>_)||C&&!mt());){var F=p.callback;if(typeof F=="function"){p.callback=null,g=p.priorityLevel;var N=F(p.expirationTime<=_);_=t.unstable_now(),typeof N=="function"?p.callback=N:p===n(o)&&r(o),f(_)}else r(o);p=n(o)}if(p!==null)var L=!0;else{var $=n(u);$!==null&&St(m,$.startTime-_),L=!1}return L}finally{p=null,g=A,v=!1}}var b=!1,S=null,E=-1,U=5,j=-1;function mt(){return!(t.unstable_now()-j<U)}function ae(){if(S!==null){var C=t.unstable_now();j=C;var _=!0;try{_=S(!0,C)}finally{_?le():(b=!1,S=null)}}else b=!1}var le;if(typeof c=="function")le=function(){c(ae)};else if(typeof MessageChannel<"u"){var Ut=new MessageChannel,Gn=Ut.port2;Ut.port1.onmessage=ae,le=function(){Gn.postMessage(null)}}else le=function(){I(ae,0)};function Zt(C){S=C,b||(b=!0,le())}function St(C,_){E=I(function(){C(t.unstable_now())},_)}t.unstable_IdlePriority=5,t.unstable_ImmediatePriority=1,t.unstable_LowPriority=4,t.unstable_NormalPriority=3,t.unstable_Profiling=null,t.unstable_UserBlockingPriority=2,t.unstable_cancelCallback=function(C){C.callback=null},t.unstable_continueExecution=function(){x||v||(x=!0,Zt(w))},t.unstable_forceFrameRate=function(C){0>C||125<C?console.error("forceFrameRate takes a positive int between 0 and 125, forcing frame rates higher than 125 fps is not supported"):U=0<C?Math.floor(1e3/C):5},t.unstable_getCurrentPriorityLevel=function(){return g},t.unstable_getFirstCallbackNode=function(){return n(o)},t.unstable_next=function(C){switch(g){case 1:case 2:case 3:var _=3;break;default:_=g}var A=g;g=_;try{return C()}finally{g=A}},t.unstable_pauseExecution=function(){},t.unstable_requestPaint=function(){},t.unstable_runWithPriority=function(C,_){switch(C){case 1:case 2:case 3:case 4:case 5:break;default:C=3}var A=g;g=C;try{return _()}finally{g=A}},t.unstable_scheduleCallback=function(C,_,A){var F=t.unstable_now();switch(typeof A=="object"&&A!==null?(A=A.delay,A=typeof A=="number"&&0<A?F+A:F):A=F,C){case 1:var N=-1;break;case 2:N=250;break;case 5:N=1073741823;break;case 4:N=1e4;break;default:N=5e3}return N=A+N,C={id:d++,callback:_,priorityLevel:C,startTime:A,expirationTime:N,sortIndex:-1},A>F?(C.sortIndex=A,e(u,C),n(o)===null&&C===n(u)&&(y?(h(E),E=-1):y=!0,St(m,A-F))):(C.sortIndex=N,e(o,C),x||v||(x=!0,Zt(w))),C},t.unstable_shouldYield=mt,t.unstable_wrapCallback=function(C){var _=g;return function(){var A=g;g=_;try{return C.apply(this,arguments)}finally{g=A}}}})(rc);nc.exports=rc;var sd=nc.exports;/**
 * @license React
 * react-dom.production.min.js
 *
 * Copyright (c) Facebook, Inc. and its affiliates.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */var ic=k,_t=sd;function R(t){for(var e="https://reactjs.org/docs/error-decoder.html?invariant="+t,n=1;n<arguments.length;n++)e+="&args[]="+encodeURIComponent(arguments[n]);return"Minified React error #"+t+"; visit "+e+" for the full message or use the non-minified dev environment for full errors and additional helpful warnings."}var sc=new Set,mr={};function sn(t,e){In(t,e),In(t+"Capture",e)}function In(t,e){for(mr[t]=e,t=0;t<e.length;t++)sc.add(e[t])}var pe=!(typeof window>"u"||typeof window.document>"u"||typeof window.document.createElement>"u"),sa=Object.prototype.hasOwnProperty,ad=/^[:A-Z_a-z\u00C0-\u00D6\u00D8-\u00F6\u00F8-\u02FF\u0370-\u037D\u037F-\u1FFF\u200C-\u200D\u2070-\u218F\u2C00-\u2FEF\u3001-\uD7FF\uF900-\uFDCF\uFDF0-\uFFFD][:A-Z_a-z\u00C0-\u00D6\u00D8-\u00F6\u00F8-\u02FF\u0370-\u037D\u037F-\u1FFF\u200C-\u200D\u2070-\u218F\u2C00-\u2FEF\u3001-\uD7FF\uF900-\uFDCF\uFDF0-\uFFFD\-.0-9\u00B7\u0300-\u036F\u203F-\u2040]*$/,yo={},wo={};function ld(t){return sa.call(wo,t)?!0:sa.call(yo,t)?!1:ad.test(t)?wo[t]=!0:(yo[t]=!0,!1)}function od(t,e,n,r){if(n!==null&&n.type===0)return!1;switch(typeof e){case"function":case"symbol":return!0;case"boolean":return r?!1:n!==null?!n.acceptsBooleans:(t=t.toLowerCase().slice(0,5),t!=="data-"&&t!=="aria-");default:return!1}}function ud(t,e,n,r){if(e===null||typeof e>"u"||od(t,e,n,r))return!0;if(r)return!1;if(n!==null)switch(n.type){case 3:return!e;case 4:return e===!1;case 5:return isNaN(e);case 6:return isNaN(e)||1>e}return!1}function wt(t,e,n,r,i,s,a){this.acceptsBooleans=e===2||e===3||e===4,this.attributeName=r,this.attributeNamespace=i,this.mustUseProperty=n,this.propertyName=t,this.type=e,this.sanitizeURL=s,this.removeEmptyString=a}var ct={};"children dangerouslySetInnerHTML defaultValue defaultChecked innerHTML suppressContentEditableWarning suppressHydrationWarning style".split(" ").forEach(function(t){ct[t]=new wt(t,0,!1,t,null,!1,!1)});[["acceptCharset","accept-charset"],["className","class"],["htmlFor","for"],["httpEquiv","http-equiv"]].forEach(function(t){var e=t[0];ct[e]=new wt(e,1,!1,t[1],null,!1,!1)});["contentEditable","draggable","spellCheck","value"].forEach(function(t){ct[t]=new wt(t,2,!1,t.toLowerCase(),null,!1,!1)});["autoReverse","externalResourcesRequired","focusable","preserveAlpha"].forEach(function(t){ct[t]=new wt(t,2,!1,t,null,!1,!1)});"allowFullScreen async autoFocus autoPlay controls default defer disabled disablePictureInPicture disableRemotePlayback formNoValidate hidden loop noModule noValidate open playsInline readOnly required reversed scoped seamless itemScope".split(" ").forEach(function(t){ct[t]=new wt(t,3,!1,t.toLowerCase(),null,!1,!1)});["checked","multiple","muted","selected"].forEach(function(t){ct[t]=new wt(t,3,!0,t,null,!1,!1)});["capture","download"].forEach(function(t){ct[t]=new wt(t,4,!1,t,null,!1,!1)});["cols","rows","size","span"].forEach(function(t){ct[t]=new wt(t,6,!1,t,null,!1,!1)});["rowSpan","start"].forEach(function(t){ct[t]=new wt(t,5,!1,t.toLowerCase(),null,!1,!1)});var pl=/[\-:]([a-z])/g;function gl(t){return t[1].toUpperCase()}"accent-height alignment-baseline arabic-form baseline-shift cap-height clip-path clip-rule color-interpolation color-interpolation-filters color-profile color-rendering dominant-baseline enable-background fill-opacity fill-rule flood-color flood-opacity font-family font-size font-size-adjust font-stretch font-style font-variant font-weight glyph-name glyph-orientation-horizontal glyph-orientation-vertical horiz-adv-x horiz-origin-x image-rendering letter-spacing lighting-color marker-end marker-mid marker-start overline-position overline-thickness paint-order panose-1 pointer-events rendering-intent shape-rendering stop-color stop-opacity strikethrough-position strikethrough-thickness stroke-dasharray stroke-dashoffset stroke-linecap stroke-linejoin stroke-miterlimit stroke-opacity stroke-width text-anchor text-decoration text-rendering underline-position underline-thickness unicode-bidi unicode-range units-per-em v-alphabetic v-hanging v-ideographic v-mathematical vector-effect vert-adv-y vert-origin-x vert-origin-y word-spacing writing-mode xmlns:xlink x-height".split(" ").forEach(function(t){var e=t.replace(pl,gl);ct[e]=new wt(e,1,!1,t,null,!1,!1)});"xlink:actuate xlink:arcrole xlink:role xlink:show xlink:title xlink:type".split(" ").forEach(function(t){var e=t.replace(pl,gl);ct[e]=new wt(e,1,!1,t,"http://www.w3.org/1999/xlink",!1,!1)});["xml:base","xml:lang","xml:space"].forEach(function(t){var e=t.replace(pl,gl);ct[e]=new wt(e,1,!1,t,"http://www.w3.org/XML/1998/namespace",!1,!1)});["tabIndex","crossOrigin"].forEach(function(t){ct[t]=new wt(t,1,!1,t.toLowerCase(),null,!1,!1)});ct.xlinkHref=new wt("xlinkHref",1,!1,"xlink:href","http://www.w3.org/1999/xlink",!0,!1);["src","href","action","formAction"].forEach(function(t){ct[t]=new wt(t,1,!1,t.toLowerCase(),null,!0,!0)});function ml(t,e,n,r){var i=ct.hasOwnProperty(e)?ct[e]:null;(i!==null?i.type!==0:r||!(2<e.length)||e[0]!=="o"&&e[0]!=="O"||e[1]!=="n"&&e[1]!=="N")&&(ud(e,n,i,r)&&(n=null),r||i===null?ld(e)&&(n===null?t.removeAttribute(e):t.setAttribute(e,""+n)):i.mustUseProperty?t[i.propertyName]=n===null?i.type===3?!1:"":n:(e=i.attributeName,r=i.attributeNamespace,n===null?t.removeAttribute(e):(i=i.type,n=i===3||i===4&&n===!0?"":""+n,r?t.setAttributeNS(r,e,n):t.setAttribute(e,n))))}var xe=ic.__SECRET_INTERNALS_DO_NOT_USE_OR_YOU_WILL_BE_FIRED,Vr=Symbol.for("react.element"),un=Symbol.for("react.portal"),cn=Symbol.for("react.fragment"),vl=Symbol.for("react.strict_mode"),aa=Symbol.for("react.profiler"),ac=Symbol.for("react.provider"),lc=Symbol.for("react.context"),xl=Symbol.for("react.forward_ref"),la=Symbol.for("react.suspense"),oa=Symbol.for("react.suspense_list"),yl=Symbol.for("react.memo"),Se=Symbol.for("react.lazy"),oc=Symbol.for("react.offscreen"),Ro=Symbol.iterator;function qn(t){return t===null||typeof t!="object"?null:(t=Ro&&t[Ro]||t["@@iterator"],typeof t=="function"?t:null)}var J=Object.assign,Ts;function er(t){if(Ts===void 0)try{throw Error()}catch(n){var e=n.stack.trim().match(/\n( *(at )?)/);Ts=e&&e[1]||""}return`
`+Ts+t}var Is=!1;function js(t,e){if(!t||Is)return"";Is=!0;var n=Error.prepareStackTrace;Error.prepareStackTrace=void 0;try{if(e)if(e=function(){throw Error()},Object.defineProperty(e.prototype,"props",{set:function(){throw Error()}}),typeof Reflect=="object"&&Reflect.construct){try{Reflect.construct(e,[])}catch(u){var r=u}Reflect.construct(t,[],e)}else{try{e.call()}catch(u){r=u}t.call(e.prototype)}else{try{throw Error()}catch(u){r=u}t()}}catch(u){if(u&&r&&typeof u.stack=="string"){for(var i=u.stack.split(`
`),s=r.stack.split(`
`),a=i.length-1,l=s.length-1;1<=a&&0<=l&&i[a]!==s[l];)l--;for(;1<=a&&0<=l;a--,l--)if(i[a]!==s[l]){if(a!==1||l!==1)do if(a--,l--,0>l||i[a]!==s[l]){var o=`
`+i[a].replace(" at new "," at ");return t.displayName&&o.includes("<anonymous>")&&(o=o.replace("<anonymous>",t.displayName)),o}while(1<=a&&0<=l);break}}}finally{Is=!1,Error.prepareStackTrace=n}return(t=t?t.displayName||t.name:"")?er(t):""}function cd(t){switch(t.tag){case 5:return er(t.type);case 16:return er("Lazy");case 13:return er("Suspense");case 19:return er("SuspenseList");case 0:case 2:case 15:return t=js(t.type,!1),t;case 11:return t=js(t.type.render,!1),t;case 1:return t=js(t.type,!0),t;default:return""}}function ua(t){if(t==null)return null;if(typeof t=="function")return t.displayName||t.name||null;if(typeof t=="string")return t;switch(t){case cn:return"Fragment";case un:return"Portal";case aa:return"Profiler";case vl:return"StrictMode";case la:return"Suspense";case oa:return"SuspenseList"}if(typeof t=="object")switch(t.$$typeof){case lc:return(t.displayName||"Context")+".Consumer";case ac:return(t._context.displayName||"Context")+".Provider";case xl:var e=t.render;return t=t.displayName,t||(t=e.displayName||e.name||"",t=t!==""?"ForwardRef("+t+")":"ForwardRef"),t;case yl:return e=t.displayName||null,e!==null?e:ua(t.type)||"Memo";case Se:e=t._payload,t=t._init;try{return ua(t(e))}catch{}}return null}function hd(t){var e=t.type;switch(t.tag){case 24:return"Cache";case 9:return(e.displayName||"Context")+".Consumer";case 10:return(e._context.displayName||"Context")+".Provider";case 18:return"DehydratedFragment";case 11:return t=e.render,t=t.displayName||t.name||"",e.displayName||(t!==""?"ForwardRef("+t+")":"ForwardRef");case 7:return"Fragment";case 5:return e;case 4:return"Portal";case 3:return"Root";case 6:return"Text";case 16:return ua(e);case 8:return e===vl?"StrictMode":"Mode";case 22:return"Offscreen";case 12:return"Profiler";case 21:return"Scope";case 13:return"Suspense";case 19:return"SuspenseList";case 25:return"TracingMarker";case 1:case 0:case 17:case 2:case 14:case 15:if(typeof e=="function")return e.displayName||e.name||null;if(typeof e=="string")return e}return null}function Me(t){switch(typeof t){case"boolean":case"number":case"string":case"undefined":return t;case"object":return t;default:return""}}function uc(t){var e=t.type;return(t=t.nodeName)&&t.toLowerCase()==="input"&&(e==="checkbox"||e==="radio")}function fd(t){var e=uc(t)?"checked":"value",n=Object.getOwnPropertyDescriptor(t.constructor.prototype,e),r=""+t[e];if(!t.hasOwnProperty(e)&&typeof n<"u"&&typeof n.get=="function"&&typeof n.set=="function"){var i=n.get,s=n.set;return Object.defineProperty(t,e,{configurable:!0,get:function(){return i.call(this)},set:function(a){r=""+a,s.call(this,a)}}),Object.defineProperty(t,e,{enumerable:n.enumerable}),{getValue:function(){return r},setValue:function(a){r=""+a},stopTracking:function(){t._valueTracker=null,delete t[e]}}}}function Gr(t){t._valueTracker||(t._valueTracker=fd(t))}function cc(t){if(!t)return!1;var e=t._valueTracker;if(!e)return!0;var n=e.getValue(),r="";return t&&(r=uc(t)?t.checked?"true":"false":t.value),t=r,t!==n?(e.setValue(t),!0):!1}function Ci(t){if(t=t||(typeof document<"u"?document:void 0),typeof t>"u")return null;try{return t.activeElement||t.body}catch{return t.body}}function ca(t,e){var n=e.checked;return J({},e,{defaultChecked:void 0,defaultValue:void 0,value:void 0,checked:n??t._wrapperState.initialChecked})}function So(t,e){var n=e.defaultValue==null?"":e.defaultValue,r=e.checked!=null?e.checked:e.defaultChecked;n=Me(e.value!=null?e.value:n),t._wrapperState={initialChecked:r,initialValue:n,controlled:e.type==="checkbox"||e.type==="radio"?e.checked!=null:e.value!=null}}function hc(t,e){e=e.checked,e!=null&&ml(t,"checked",e,!1)}function ha(t,e){hc(t,e);var n=Me(e.value),r=e.type;if(n!=null)r==="number"?(n===0&&t.value===""||t.value!=n)&&(t.value=""+n):t.value!==""+n&&(t.value=""+n);else if(r==="submit"||r==="reset"){t.removeAttribute("value");return}e.hasOwnProperty("value")?fa(t,e.type,n):e.hasOwnProperty("defaultValue")&&fa(t,e.type,Me(e.defaultValue)),e.checked==null&&e.defaultChecked!=null&&(t.defaultChecked=!!e.defaultChecked)}function bo(t,e,n){if(e.hasOwnProperty("value")||e.hasOwnProperty("defaultValue")){var r=e.type;if(!(r!=="submit"&&r!=="reset"||e.value!==void 0&&e.value!==null))return;e=""+t._wrapperState.initialValue,n||e===t.value||(t.value=e),t.defaultValue=e}n=t.name,n!==""&&(t.name=""),t.defaultChecked=!!t._wrapperState.initialChecked,n!==""&&(t.name=n)}function fa(t,e,n){(e!=="number"||Ci(t.ownerDocument)!==t)&&(n==null?t.defaultValue=""+t._wrapperState.initialValue:t.defaultValue!==""+n&&(t.defaultValue=""+n))}var nr=Array.isArray;function Sn(t,e,n,r){if(t=t.options,e){e={};for(var i=0;i<n.length;i++)e["$"+n[i]]=!0;for(n=0;n<t.length;n++)i=e.hasOwnProperty("$"+t[n].value),t[n].selected!==i&&(t[n].selected=i),i&&r&&(t[n].defaultSelected=!0)}else{for(n=""+Me(n),e=null,i=0;i<t.length;i++){if(t[i].value===n){t[i].selected=!0,r&&(t[i].defaultSelected=!0);return}e!==null||t[i].disabled||(e=t[i])}e!==null&&(e.selected=!0)}}function da(t,e){if(e.dangerouslySetInnerHTML!=null)throw Error(R(91));return J({},e,{value:void 0,defaultValue:void 0,children:""+t._wrapperState.initialValue})}function ko(t,e){var n=e.value;if(n==null){if(n=e.children,e=e.defaultValue,n!=null){if(e!=null)throw Error(R(92));if(nr(n)){if(1<n.length)throw Error(R(93));n=n[0]}e=n}e==null&&(e=""),n=e}t._wrapperState={initialValue:Me(n)}}function fc(t,e){var n=Me(e.value),r=Me(e.defaultValue);n!=null&&(n=""+n,n!==t.value&&(t.value=n),e.defaultValue==null&&t.defaultValue!==n&&(t.defaultValue=n)),r!=null&&(t.defaultValue=""+r)}function Co(t){var e=t.textContent;e===t._wrapperState.initialValue&&e!==""&&e!==null&&(t.value=e)}function dc(t){switch(t){case"svg":return"http://www.w3.org/2000/svg";case"math":return"http://www.w3.org/1998/Math/MathML";default:return"http://www.w3.org/1999/xhtml"}}function pa(t,e){return t==null||t==="http://www.w3.org/1999/xhtml"?dc(e):t==="http://www.w3.org/2000/svg"&&e==="foreignObject"?"http://www.w3.org/1999/xhtml":t}var qr,pc=function(t){return typeof MSApp<"u"&&MSApp.execUnsafeLocalFunction?function(e,n,r,i){MSApp.execUnsafeLocalFunction(function(){return t(e,n,r,i)})}:t}(function(t,e){if(t.namespaceURI!=="http://www.w3.org/2000/svg"||"innerHTML"in t)t.innerHTML=e;else{for(qr=qr||document.createElement("div"),qr.innerHTML="<svg>"+e.valueOf().toString()+"</svg>",e=qr.firstChild;t.firstChild;)t.removeChild(t.firstChild);for(;e.firstChild;)t.appendChild(e.firstChild)}});function vr(t,e){if(e){var n=t.firstChild;if(n&&n===t.lastChild&&n.nodeType===3){n.nodeValue=e;return}}t.textContent=e}var ar={animationIterationCount:!0,aspectRatio:!0,borderImageOutset:!0,borderImageSlice:!0,borderImageWidth:!0,boxFlex:!0,boxFlexGroup:!0,boxOrdinalGroup:!0,columnCount:!0,columns:!0,flex:!0,flexGrow:!0,flexPositive:!0,flexShrink:!0,flexNegative:!0,flexOrder:!0,gridArea:!0,gridRow:!0,gridRowEnd:!0,gridRowSpan:!0,gridRowStart:!0,gridColumn:!0,gridColumnEnd:!0,gridColumnSpan:!0,gridColumnStart:!0,fontWeight:!0,lineClamp:!0,lineHeight:!0,opacity:!0,order:!0,orphans:!0,tabSize:!0,widows:!0,zIndex:!0,zoom:!0,fillOpacity:!0,floodOpacity:!0,stopOpacity:!0,strokeDasharray:!0,strokeDashoffset:!0,strokeMiterlimit:!0,strokeOpacity:!0,strokeWidth:!0},dd=["Webkit","ms","Moz","O"];Object.keys(ar).forEach(function(t){dd.forEach(function(e){e=e+t.charAt(0).toUpperCase()+t.substring(1),ar[e]=ar[t]})});function gc(t,e,n){return e==null||typeof e=="boolean"||e===""?"":n||typeof e!="number"||e===0||ar.hasOwnProperty(t)&&ar[t]?(""+e).trim():e+"px"}function mc(t,e){t=t.style;for(var n in e)if(e.hasOwnProperty(n)){var r=n.indexOf("--")===0,i=gc(n,e[n],r);n==="float"&&(n="cssFloat"),r?t.setProperty(n,i):t[n]=i}}var pd=J({menuitem:!0},{area:!0,base:!0,br:!0,col:!0,embed:!0,hr:!0,img:!0,input:!0,keygen:!0,link:!0,meta:!0,param:!0,source:!0,track:!0,wbr:!0});function ga(t,e){if(e){if(pd[t]&&(e.children!=null||e.dangerouslySetInnerHTML!=null))throw Error(R(137,t));if(e.dangerouslySetInnerHTML!=null){if(e.children!=null)throw Error(R(60));if(typeof e.dangerouslySetInnerHTML!="object"||!("__html"in e.dangerouslySetInnerHTML))throw Error(R(61))}if(e.style!=null&&typeof e.style!="object")throw Error(R(62))}}function ma(t,e){if(t.indexOf("-")===-1)return typeof e.is=="string";switch(t){case"annotation-xml":case"color-profile":case"font-face":case"font-face-src":case"font-face-uri":case"font-face-format":case"font-face-name":case"missing-glyph":return!1;default:return!0}}var va=null;function wl(t){return t=t.target||t.srcElement||window,t.correspondingUseElement&&(t=t.correspondingUseElement),t.nodeType===3?t.parentNode:t}var xa=null,bn=null,kn=null;function Eo(t){if(t=Dr(t)){if(typeof xa!="function")throw Error(R(280));var e=t.stateNode;e&&(e=ss(e),xa(t.stateNode,t.type,e))}}function vc(t){bn?kn?kn.push(t):kn=[t]:bn=t}function xc(){if(bn){var t=bn,e=kn;if(kn=bn=null,Eo(t),e)for(t=0;t<e.length;t++)Eo(e[t])}}function yc(t,e){return t(e)}function wc(){}var Ns=!1;function Rc(t,e,n){if(Ns)return t(e,n);Ns=!0;try{return yc(t,e,n)}finally{Ns=!1,(bn!==null||kn!==null)&&(wc(),xc())}}function xr(t,e){var n=t.stateNode;if(n===null)return null;var r=ss(n);if(r===null)return null;n=r[e];t:switch(e){case"onClick":case"onClickCapture":case"onDoubleClick":case"onDoubleClickCapture":case"onMouseDown":case"onMouseDownCapture":case"onMouseMove":case"onMouseMoveCapture":case"onMouseUp":case"onMouseUpCapture":case"onMouseEnter":(r=!r.disabled)||(t=t.type,r=!(t==="button"||t==="input"||t==="select"||t==="textarea")),t=!r;break t;default:t=!1}if(t)return null;if(n&&typeof n!="function")throw Error(R(231,e,typeof n));return n}var ya=!1;if(pe)try{var Qn={};Object.defineProperty(Qn,"passive",{get:function(){ya=!0}}),window.addEventListener("test",Qn,Qn),window.removeEventListener("test",Qn,Qn)}catch{ya=!1}function gd(t,e,n,r,i,s,a,l,o){var u=Array.prototype.slice.call(arguments,3);try{e.apply(n,u)}catch(d){this.onError(d)}}var lr=!1,Ei=null,Ti=!1,wa=null,md={onError:function(t){lr=!0,Ei=t}};function vd(t,e,n,r,i,s,a,l,o){lr=!1,Ei=null,gd.apply(md,arguments)}function xd(t,e,n,r,i,s,a,l,o){if(vd.apply(this,arguments),lr){if(lr){var u=Ei;lr=!1,Ei=null}else throw Error(R(198));Ti||(Ti=!0,wa=u)}}function an(t){var e=t,n=t;if(t.alternate)for(;e.return;)e=e.return;else{t=e;do e=t,e.flags&4098&&(n=e.return),t=e.return;while(t)}return e.tag===3?n:null}function Sc(t){if(t.tag===13){var e=t.memoizedState;if(e===null&&(t=t.alternate,t!==null&&(e=t.memoizedState)),e!==null)return e.dehydrated}return null}function To(t){if(an(t)!==t)throw Error(R(188))}function yd(t){var e=t.alternate;if(!e){if(e=an(t),e===null)throw Error(R(188));return e!==t?null:t}for(var n=t,r=e;;){var i=n.return;if(i===null)break;var s=i.alternate;if(s===null){if(r=i.return,r!==null){n=r;continue}break}if(i.child===s.child){for(s=i.child;s;){if(s===n)return To(i),t;if(s===r)return To(i),e;s=s.sibling}throw Error(R(188))}if(n.return!==r.return)n=i,r=s;else{for(var a=!1,l=i.child;l;){if(l===n){a=!0,n=i,r=s;break}if(l===r){a=!0,r=i,n=s;break}l=l.sibling}if(!a){for(l=s.child;l;){if(l===n){a=!0,n=s,r=i;break}if(l===r){a=!0,r=s,n=i;break}l=l.sibling}if(!a)throw Error(R(189))}}if(n.alternate!==r)throw Error(R(190))}if(n.tag!==3)throw Error(R(188));return n.stateNode.current===n?t:e}function bc(t){return t=yd(t),t!==null?kc(t):null}function kc(t){if(t.tag===5||t.tag===6)return t;for(t=t.child;t!==null;){var e=kc(t);if(e!==null)return e;t=t.sibling}return null}var Cc=_t.unstable_scheduleCallback,Io=_t.unstable_cancelCallback,wd=_t.unstable_shouldYield,Rd=_t.unstable_requestPaint,K=_t.unstable_now,Sd=_t.unstable_getCurrentPriorityLevel,Rl=_t.unstable_ImmediatePriority,Ec=_t.unstable_UserBlockingPriority,Ii=_t.unstable_NormalPriority,bd=_t.unstable_LowPriority,Tc=_t.unstable_IdlePriority,es=null,ie=null;function kd(t){if(ie&&typeof ie.onCommitFiberRoot=="function")try{ie.onCommitFiberRoot(es,t,void 0,(t.current.flags&128)===128)}catch{}}var Yt=Math.clz32?Math.clz32:Td,Cd=Math.log,Ed=Math.LN2;function Td(t){return t>>>=0,t===0?32:31-(Cd(t)/Ed|0)|0}var Qr=64,Yr=4194304;function rr(t){switch(t&-t){case 1:return 1;case 2:return 2;case 4:return 4;case 8:return 8;case 16:return 16;case 32:return 32;case 64:case 128:case 256:case 512:case 1024:case 2048:case 4096:case 8192:case 16384:case 32768:case 65536:case 131072:case 262144:case 524288:case 1048576:case 2097152:return t&4194240;case 4194304:case 8388608:case 16777216:case 33554432:case 67108864:return t&130023424;case 134217728:return 134217728;case 268435456:return 268435456;case 536870912:return 536870912;case 1073741824:return 1073741824;default:return t}}function ji(t,e){var n=t.pendingLanes;if(n===0)return 0;var r=0,i=t.suspendedLanes,s=t.pingedLanes,a=n&268435455;if(a!==0){var l=a&~i;l!==0?r=rr(l):(s&=a,s!==0&&(r=rr(s)))}else a=n&~i,a!==0?r=rr(a):s!==0&&(r=rr(s));if(r===0)return 0;if(e!==0&&e!==r&&!(e&i)&&(i=r&-r,s=e&-e,i>=s||i===16&&(s&4194240)!==0))return e;if(r&4&&(r|=n&16),e=t.entangledLanes,e!==0)for(t=t.entanglements,e&=r;0<e;)n=31-Yt(e),i=1<<n,r|=t[n],e&=~i;return r}function Id(t,e){switch(t){case 1:case 2:case 4:return e+250;case 8:case 16:case 32:case 64:case 128:case 256:case 512:case 1024:case 2048:case 4096:case 8192:case 16384:case 32768:case 65536:case 131072:case 262144:case 524288:case 1048576:case 2097152:return e+5e3;case 4194304:case 8388608:case 16777216:case 33554432:case 67108864:return-1;case 134217728:case 268435456:case 536870912:case 1073741824:return-1;default:return-1}}function jd(t,e){for(var n=t.suspendedLanes,r=t.pingedLanes,i=t.expirationTimes,s=t.pendingLanes;0<s;){var a=31-Yt(s),l=1<<a,o=i[a];o===-1?(!(l&n)||l&r)&&(i[a]=Id(l,e)):o<=e&&(t.expiredLanes|=l),s&=~l}}function Ra(t){return t=t.pendingLanes&-1073741825,t!==0?t:t&1073741824?1073741824:0}function Ic(){var t=Qr;return Qr<<=1,!(Qr&4194240)&&(Qr=64),t}function As(t){for(var e=[],n=0;31>n;n++)e.push(t);return e}function Wr(t,e,n){t.pendingLanes|=e,e!==536870912&&(t.suspendedLanes=0,t.pingedLanes=0),t=t.eventTimes,e=31-Yt(e),t[e]=n}function Nd(t,e){var n=t.pendingLanes&~e;t.pendingLanes=e,t.suspendedLanes=0,t.pingedLanes=0,t.expiredLanes&=e,t.mutableReadLanes&=e,t.entangledLanes&=e,e=t.entanglements;var r=t.eventTimes;for(t=t.expirationTimes;0<n;){var i=31-Yt(n),s=1<<i;e[i]=0,r[i]=-1,t[i]=-1,n&=~s}}function Sl(t,e){var n=t.entangledLanes|=e;for(t=t.entanglements;n;){var r=31-Yt(n),i=1<<r;i&e|t[r]&e&&(t[r]|=e),n&=~i}}var D=0;function jc(t){return t&=-t,1<t?4<t?t&268435455?16:536870912:4:1}var Nc,bl,Ac,_c,Pc,Sa=!1,Jr=[],je=null,Ne=null,Ae=null,yr=new Map,wr=new Map,ke=[],Ad="mousedown mouseup touchcancel touchend touchstart auxclick dblclick pointercancel pointerdown pointerup dragend dragstart drop compositionend compositionstart keydown keypress keyup input textInput copy cut paste click change contextmenu reset submit".split(" ");function jo(t,e){switch(t){case"focusin":case"focusout":je=null;break;case"dragenter":case"dragleave":Ne=null;break;case"mouseover":case"mouseout":Ae=null;break;case"pointerover":case"pointerout":yr.delete(e.pointerId);break;case"gotpointercapture":case"lostpointercapture":wr.delete(e.pointerId)}}function Yn(t,e,n,r,i,s){return t===null||t.nativeEvent!==s?(t={blockedOn:e,domEventName:n,eventSystemFlags:r,nativeEvent:s,targetContainers:[i]},e!==null&&(e=Dr(e),e!==null&&bl(e)),t):(t.eventSystemFlags|=r,e=t.targetContainers,i!==null&&e.indexOf(i)===-1&&e.push(i),t)}function _d(t,e,n,r,i){switch(e){case"focusin":return je=Yn(je,t,e,n,r,i),!0;case"dragenter":return Ne=Yn(Ne,t,e,n,r,i),!0;case"mouseover":return Ae=Yn(Ae,t,e,n,r,i),!0;case"pointerover":var s=i.pointerId;return yr.set(s,Yn(yr.get(s)||null,t,e,n,r,i)),!0;case"gotpointercapture":return s=i.pointerId,wr.set(s,Yn(wr.get(s)||null,t,e,n,r,i)),!0}return!1}function Lc(t){var e=Ve(t.target);if(e!==null){var n=an(e);if(n!==null){if(e=n.tag,e===13){if(e=Sc(n),e!==null){t.blockedOn=e,Pc(t.priority,function(){Ac(n)});return}}else if(e===3&&n.stateNode.current.memoizedState.isDehydrated){t.blockedOn=n.tag===3?n.stateNode.containerInfo:null;return}}}t.blockedOn=null}function hi(t){if(t.blockedOn!==null)return!1;for(var e=t.targetContainers;0<e.length;){var n=ba(t.domEventName,t.eventSystemFlags,e[0],t.nativeEvent);if(n===null){n=t.nativeEvent;var r=new n.constructor(n.type,n);va=r,n.target.dispatchEvent(r),va=null}else return e=Dr(n),e!==null&&bl(e),t.blockedOn=n,!1;e.shift()}return!0}function No(t,e,n){hi(t)&&n.delete(e)}function Pd(){Sa=!1,je!==null&&hi(je)&&(je=null),Ne!==null&&hi(Ne)&&(Ne=null),Ae!==null&&hi(Ae)&&(Ae=null),yr.forEach(No),wr.forEach(No)}function Jn(t,e){t.blockedOn===e&&(t.blockedOn=null,Sa||(Sa=!0,_t.unstable_scheduleCallback(_t.unstable_NormalPriority,Pd)))}function Rr(t){function e(i){return Jn(i,t)}if(0<Jr.length){Jn(Jr[0],t);for(var n=1;n<Jr.length;n++){var r=Jr[n];r.blockedOn===t&&(r.blockedOn=null)}}for(je!==null&&Jn(je,t),Ne!==null&&Jn(Ne,t),Ae!==null&&Jn(Ae,t),yr.forEach(e),wr.forEach(e),n=0;n<ke.length;n++)r=ke[n],r.blockedOn===t&&(r.blockedOn=null);for(;0<ke.length&&(n=ke[0],n.blockedOn===null);)Lc(n),n.blockedOn===null&&ke.shift()}var Cn=xe.ReactCurrentBatchConfig,Ni=!0;function Ld(t,e,n,r){var i=D,s=Cn.transition;Cn.transition=null;try{D=1,kl(t,e,n,r)}finally{D=i,Cn.transition=s}}function Od(t,e,n,r){var i=D,s=Cn.transition;Cn.transition=null;try{D=4,kl(t,e,n,r)}finally{D=i,Cn.transition=s}}function kl(t,e,n,r){if(Ni){var i=ba(t,e,n,r);if(i===null)Fs(t,e,r,Ai,n),jo(t,r);else if(_d(i,t,e,n,r))r.stopPropagation();else if(jo(t,r),e&4&&-1<Ad.indexOf(t)){for(;i!==null;){var s=Dr(i);if(s!==null&&Nc(s),s=ba(t,e,n,r),s===null&&Fs(t,e,r,Ai,n),s===i)break;i=s}i!==null&&r.stopPropagation()}else Fs(t,e,r,null,n)}}var Ai=null;function ba(t,e,n,r){if(Ai=null,t=wl(r),t=Ve(t),t!==null)if(e=an(t),e===null)t=null;else if(n=e.tag,n===13){if(t=Sc(e),t!==null)return t;t=null}else if(n===3){if(e.stateNode.current.memoizedState.isDehydrated)return e.tag===3?e.stateNode.containerInfo:null;t=null}else e!==t&&(t=null);return Ai=t,null}function Oc(t){switch(t){case"cancel":case"click":case"close":case"contextmenu":case"copy":case"cut":case"auxclick":case"dblclick":case"dragend":case"dragstart":case"drop":case"focusin":case"focusout":case"input":case"invalid":case"keydown":case"keypress":case"keyup":case"mousedown":case"mouseup":case"paste":case"pause":case"play":case"pointercancel":case"pointerdown":case"pointerup":case"ratechange":case"reset":case"resize":case"seeked":case"submit":case"touchcancel":case"touchend":case"touchstart":case"volumechange":case"change":case"selectionchange":case"textInput":case"compositionstart":case"compositionend":case"compositionupdate":case"beforeblur":case"afterblur":case"beforeinput":case"blur":case"fullscreenchange":case"focus":case"hashchange":case"popstate":case"select":case"selectstart":return 1;case"drag":case"dragenter":case"dragexit":case"dragleave":case"dragover":case"mousemove":case"mouseout":case"mouseover":case"pointermove":case"pointerout":case"pointerover":case"scroll":case"toggle":case"touchmove":case"wheel":case"mouseenter":case"mouseleave":case"pointerenter":case"pointerleave":return 4;case"message":switch(Sd()){case Rl:return 1;case Ec:return 4;case Ii:case bd:return 16;case Tc:return 536870912;default:return 16}default:return 16}}var Ee=null,Cl=null,fi=null;function zc(){if(fi)return fi;var t,e=Cl,n=e.length,r,i="value"in Ee?Ee.value:Ee.textContent,s=i.length;for(t=0;t<n&&e[t]===i[t];t++);var a=n-t;for(r=1;r<=a&&e[n-r]===i[s-r];r++);return fi=i.slice(t,1<r?1-r:void 0)}function di(t){var e=t.keyCode;return"charCode"in t?(t=t.charCode,t===0&&e===13&&(t=13)):t=e,t===10&&(t=13),32<=t||t===13?t:0}function Xr(){return!0}function Ao(){return!1}function Lt(t){function e(n,r,i,s,a){this._reactName=n,this._targetInst=i,this.type=r,this.nativeEvent=s,this.target=a,this.currentTarget=null;for(var l in t)t.hasOwnProperty(l)&&(n=t[l],this[l]=n?n(s):s[l]);return this.isDefaultPrevented=(s.defaultPrevented!=null?s.defaultPrevented:s.returnValue===!1)?Xr:Ao,this.isPropagationStopped=Ao,this}return J(e.prototype,{preventDefault:function(){this.defaultPrevented=!0;var n=this.nativeEvent;n&&(n.preventDefault?n.preventDefault():typeof n.returnValue!="unknown"&&(n.returnValue=!1),this.isDefaultPrevented=Xr)},stopPropagation:function(){var n=this.nativeEvent;n&&(n.stopPropagation?n.stopPropagation():typeof n.cancelBubble!="unknown"&&(n.cancelBubble=!0),this.isPropagationStopped=Xr)},persist:function(){},isPersistent:Xr}),e}var Fn={eventPhase:0,bubbles:0,cancelable:0,timeStamp:function(t){return t.timeStamp||Date.now()},defaultPrevented:0,isTrusted:0},El=Lt(Fn),Mr=J({},Fn,{view:0,detail:0}),zd=Lt(Mr),_s,Ps,Xn,ns=J({},Mr,{screenX:0,screenY:0,clientX:0,clientY:0,pageX:0,pageY:0,ctrlKey:0,shiftKey:0,altKey:0,metaKey:0,getModifierState:Tl,button:0,buttons:0,relatedTarget:function(t){return t.relatedTarget===void 0?t.fromElement===t.srcElement?t.toElement:t.fromElement:t.relatedTarget},movementX:function(t){return"movementX"in t?t.movementX:(t!==Xn&&(Xn&&t.type==="mousemove"?(_s=t.screenX-Xn.screenX,Ps=t.screenY-Xn.screenY):Ps=_s=0,Xn=t),_s)},movementY:function(t){return"movementY"in t?t.movementY:Ps}}),_o=Lt(ns),Wd=J({},ns,{dataTransfer:0}),Md=Lt(Wd),Dd=J({},Mr,{relatedTarget:0}),Ls=Lt(Dd),$d=J({},Fn,{animationName:0,elapsedTime:0,pseudoElement:0}),Fd=Lt($d),Bd=J({},Fn,{clipboardData:function(t){return"clipboardData"in t?t.clipboardData:window.clipboardData}}),Ud=Lt(Bd),Hd=J({},Fn,{data:0}),Po=Lt(Hd),Vd={Esc:"Escape",Spacebar:" ",Left:"ArrowLeft",Up:"ArrowUp",Right:"ArrowRight",Down:"ArrowDown",Del:"Delete",Win:"OS",Menu:"ContextMenu",Apps:"ContextMenu",Scroll:"ScrollLock",MozPrintableKey:"Unidentified"},Gd={8:"Backspace",9:"Tab",12:"Clear",13:"Enter",16:"Shift",17:"Control",18:"Alt",19:"Pause",20:"CapsLock",27:"Escape",32:" ",33:"PageUp",34:"PageDown",35:"End",36:"Home",37:"ArrowLeft",38:"ArrowUp",39:"ArrowRight",40:"ArrowDown",45:"Insert",46:"Delete",112:"F1",113:"F2",114:"F3",115:"F4",116:"F5",117:"F6",118:"F7",119:"F8",120:"F9",121:"F10",122:"F11",123:"F12",144:"NumLock",145:"ScrollLock",224:"Meta"},qd={Alt:"altKey",Control:"ctrlKey",Meta:"metaKey",Shift:"shiftKey"};function Qd(t){var e=this.nativeEvent;return e.getModifierState?e.getModifierState(t):(t=qd[t])?!!e[t]:!1}function Tl(){return Qd}var Yd=J({},Mr,{key:function(t){if(t.key){var e=Vd[t.key]||t.key;if(e!=="Unidentified")return e}return t.type==="keypress"?(t=di(t),t===13?"Enter":String.fromCharCode(t)):t.type==="keydown"||t.type==="keyup"?Gd[t.keyCode]||"Unidentified":""},code:0,location:0,ctrlKey:0,shiftKey:0,altKey:0,metaKey:0,repeat:0,locale:0,getModifierState:Tl,charCode:function(t){return t.type==="keypress"?di(t):0},keyCode:function(t){return t.type==="keydown"||t.type==="keyup"?t.keyCode:0},which:function(t){return t.type==="keypress"?di(t):t.type==="keydown"||t.type==="keyup"?t.keyCode:0}}),Jd=Lt(Yd),Xd=J({},ns,{pointerId:0,width:0,height:0,pressure:0,tangentialPressure:0,tiltX:0,tiltY:0,twist:0,pointerType:0,isPrimary:0}),Lo=Lt(Xd),Kd=J({},Mr,{touches:0,targetTouches:0,changedTouches:0,altKey:0,metaKey:0,ctrlKey:0,shiftKey:0,getModifierState:Tl}),Zd=Lt(Kd),tp=J({},Fn,{propertyName:0,elapsedTime:0,pseudoElement:0}),ep=Lt(tp),np=J({},ns,{deltaX:function(t){return"deltaX"in t?t.deltaX:"wheelDeltaX"in t?-t.wheelDeltaX:0},deltaY:function(t){return"deltaY"in t?t.deltaY:"wheelDeltaY"in t?-t.wheelDeltaY:"wheelDelta"in t?-t.wheelDelta:0},deltaZ:0,deltaMode:0}),rp=Lt(np),ip=[9,13,27,32],Il=pe&&"CompositionEvent"in window,or=null;pe&&"documentMode"in document&&(or=document.documentMode);var sp=pe&&"TextEvent"in window&&!or,Wc=pe&&(!Il||or&&8<or&&11>=or),Oo=String.fromCharCode(32),zo=!1;function Mc(t,e){switch(t){case"keyup":return ip.indexOf(e.keyCode)!==-1;case"keydown":return e.keyCode!==229;case"keypress":case"mousedown":case"focusout":return!0;default:return!1}}function Dc(t){return t=t.detail,typeof t=="object"&&"data"in t?t.data:null}var hn=!1;function ap(t,e){switch(t){case"compositionend":return Dc(e);case"keypress":return e.which!==32?null:(zo=!0,Oo);case"textInput":return t=e.data,t===Oo&&zo?null:t;default:return null}}function lp(t,e){if(hn)return t==="compositionend"||!Il&&Mc(t,e)?(t=zc(),fi=Cl=Ee=null,hn=!1,t):null;switch(t){case"paste":return null;case"keypress":if(!(e.ctrlKey||e.altKey||e.metaKey)||e.ctrlKey&&e.altKey){if(e.char&&1<e.char.length)return e.char;if(e.which)return String.fromCharCode(e.which)}return null;case"compositionend":return Wc&&e.locale!=="ko"?null:e.data;default:return null}}var op={color:!0,date:!0,datetime:!0,"datetime-local":!0,email:!0,month:!0,number:!0,password:!0,range:!0,search:!0,tel:!0,text:!0,time:!0,url:!0,week:!0};function Wo(t){var e=t&&t.nodeName&&t.nodeName.toLowerCase();return e==="input"?!!op[t.type]:e==="textarea"}function $c(t,e,n,r){vc(r),e=_i(e,"onChange"),0<e.length&&(n=new El("onChange","change",null,n,r),t.push({event:n,listeners:e}))}var ur=null,Sr=null;function up(t){Xc(t,0)}function rs(t){var e=pn(t);if(cc(e))return t}function cp(t,e){if(t==="change")return e}var Fc=!1;if(pe){var Os;if(pe){var zs="oninput"in document;if(!zs){var Mo=document.createElement("div");Mo.setAttribute("oninput","return;"),zs=typeof Mo.oninput=="function"}Os=zs}else Os=!1;Fc=Os&&(!document.documentMode||9<document.documentMode)}function Do(){ur&&(ur.detachEvent("onpropertychange",Bc),Sr=ur=null)}function Bc(t){if(t.propertyName==="value"&&rs(Sr)){var e=[];$c(e,Sr,t,wl(t)),Rc(up,e)}}function hp(t,e,n){t==="focusin"?(Do(),ur=e,Sr=n,ur.attachEvent("onpropertychange",Bc)):t==="focusout"&&Do()}function fp(t){if(t==="selectionchange"||t==="keyup"||t==="keydown")return rs(Sr)}function dp(t,e){if(t==="click")return rs(e)}function pp(t,e){if(t==="input"||t==="change")return rs(e)}function gp(t,e){return t===e&&(t!==0||1/t===1/e)||t!==t&&e!==e}var Kt=typeof Object.is=="function"?Object.is:gp;function br(t,e){if(Kt(t,e))return!0;if(typeof t!="object"||t===null||typeof e!="object"||e===null)return!1;var n=Object.keys(t),r=Object.keys(e);if(n.length!==r.length)return!1;for(r=0;r<n.length;r++){var i=n[r];if(!sa.call(e,i)||!Kt(t[i],e[i]))return!1}return!0}function $o(t){for(;t&&t.firstChild;)t=t.firstChild;return t}function Fo(t,e){var n=$o(t);t=0;for(var r;n;){if(n.nodeType===3){if(r=t+n.textContent.length,t<=e&&r>=e)return{node:n,offset:e-t};t=r}t:{for(;n;){if(n.nextSibling){n=n.nextSibling;break t}n=n.parentNode}n=void 0}n=$o(n)}}function Uc(t,e){return t&&e?t===e?!0:t&&t.nodeType===3?!1:e&&e.nodeType===3?Uc(t,e.parentNode):"contains"in t?t.contains(e):t.compareDocumentPosition?!!(t.compareDocumentPosition(e)&16):!1:!1}function Hc(){for(var t=window,e=Ci();e instanceof t.HTMLIFrameElement;){try{var n=typeof e.contentWindow.location.href=="string"}catch{n=!1}if(n)t=e.contentWindow;else break;e=Ci(t.document)}return e}function jl(t){var e=t&&t.nodeName&&t.nodeName.toLowerCase();return e&&(e==="input"&&(t.type==="text"||t.type==="search"||t.type==="tel"||t.type==="url"||t.type==="password")||e==="textarea"||t.contentEditable==="true")}function mp(t){var e=Hc(),n=t.focusedElem,r=t.selectionRange;if(e!==n&&n&&n.ownerDocument&&Uc(n.ownerDocument.documentElement,n)){if(r!==null&&jl(n)){if(e=r.start,t=r.end,t===void 0&&(t=e),"selectionStart"in n)n.selectionStart=e,n.selectionEnd=Math.min(t,n.value.length);else if(t=(e=n.ownerDocument||document)&&e.defaultView||window,t.getSelection){t=t.getSelection();var i=n.textContent.length,s=Math.min(r.start,i);r=r.end===void 0?s:Math.min(r.end,i),!t.extend&&s>r&&(i=r,r=s,s=i),i=Fo(n,s);var a=Fo(n,r);i&&a&&(t.rangeCount!==1||t.anchorNode!==i.node||t.anchorOffset!==i.offset||t.focusNode!==a.node||t.focusOffset!==a.offset)&&(e=e.createRange(),e.setStart(i.node,i.offset),t.removeAllRanges(),s>r?(t.addRange(e),t.extend(a.node,a.offset)):(e.setEnd(a.node,a.offset),t.addRange(e)))}}for(e=[],t=n;t=t.parentNode;)t.nodeType===1&&e.push({element:t,left:t.scrollLeft,top:t.scrollTop});for(typeof n.focus=="function"&&n.focus(),n=0;n<e.length;n++)t=e[n],t.element.scrollLeft=t.left,t.element.scrollTop=t.top}}var vp=pe&&"documentMode"in document&&11>=document.documentMode,fn=null,ka=null,cr=null,Ca=!1;function Bo(t,e,n){var r=n.window===n?n.document:n.nodeType===9?n:n.ownerDocument;Ca||fn==null||fn!==Ci(r)||(r=fn,"selectionStart"in r&&jl(r)?r={start:r.selectionStart,end:r.selectionEnd}:(r=(r.ownerDocument&&r.ownerDocument.defaultView||window).getSelection(),r={anchorNode:r.anchorNode,anchorOffset:r.anchorOffset,focusNode:r.focusNode,focusOffset:r.focusOffset}),cr&&br(cr,r)||(cr=r,r=_i(ka,"onSelect"),0<r.length&&(e=new El("onSelect","select",null,e,n),t.push({event:e,listeners:r}),e.target=fn)))}function Kr(t,e){var n={};return n[t.toLowerCase()]=e.toLowerCase(),n["Webkit"+t]="webkit"+e,n["Moz"+t]="moz"+e,n}var dn={animationend:Kr("Animation","AnimationEnd"),animationiteration:Kr("Animation","AnimationIteration"),animationstart:Kr("Animation","AnimationStart"),transitionend:Kr("Transition","TransitionEnd")},Ws={},Vc={};pe&&(Vc=document.createElement("div").style,"AnimationEvent"in window||(delete dn.animationend.animation,delete dn.animationiteration.animation,delete dn.animationstart.animation),"TransitionEvent"in window||delete dn.transitionend.transition);function is(t){if(Ws[t])return Ws[t];if(!dn[t])return t;var e=dn[t],n;for(n in e)if(e.hasOwnProperty(n)&&n in Vc)return Ws[t]=e[n];return t}var Gc=is("animationend"),qc=is("animationiteration"),Qc=is("animationstart"),Yc=is("transitionend"),Jc=new Map,Uo="abort auxClick cancel canPlay canPlayThrough click close contextMenu copy cut drag dragEnd dragEnter dragExit dragLeave dragOver dragStart drop durationChange emptied encrypted ended error gotPointerCapture input invalid keyDown keyPress keyUp load loadedData loadedMetadata loadStart lostPointerCapture mouseDown mouseMove mouseOut mouseOver mouseUp paste pause play playing pointerCancel pointerDown pointerMove pointerOut pointerOver pointerUp progress rateChange reset resize seeked seeking stalled submit suspend timeUpdate touchCancel touchEnd touchStart volumeChange scroll toggle touchMove waiting wheel".split(" ");function $e(t,e){Jc.set(t,e),sn(e,[t])}for(var Ms=0;Ms<Uo.length;Ms++){var Ds=Uo[Ms],xp=Ds.toLowerCase(),yp=Ds[0].toUpperCase()+Ds.slice(1);$e(xp,"on"+yp)}$e(Gc,"onAnimationEnd");$e(qc,"onAnimationIteration");$e(Qc,"onAnimationStart");$e("dblclick","onDoubleClick");$e("focusin","onFocus");$e("focusout","onBlur");$e(Yc,"onTransitionEnd");In("onMouseEnter",["mouseout","mouseover"]);In("onMouseLeave",["mouseout","mouseover"]);In("onPointerEnter",["pointerout","pointerover"]);In("onPointerLeave",["pointerout","pointerover"]);sn("onChange","change click focusin focusout input keydown keyup selectionchange".split(" "));sn("onSelect","focusout contextmenu dragend focusin keydown keyup mousedown mouseup selectionchange".split(" "));sn("onBeforeInput",["compositionend","keypress","textInput","paste"]);sn("onCompositionEnd","compositionend focusout keydown keypress keyup mousedown".split(" "));sn("onCompositionStart","compositionstart focusout keydown keypress keyup mousedown".split(" "));sn("onCompositionUpdate","compositionupdate focusout keydown keypress keyup mousedown".split(" "));var ir="abort canplay canplaythrough durationchange emptied encrypted ended error loadeddata loadedmetadata loadstart pause play playing progress ratechange resize seeked seeking stalled suspend timeupdate volumechange waiting".split(" "),wp=new Set("cancel close invalid load scroll toggle".split(" ").concat(ir));function Ho(t,e,n){var r=t.type||"unknown-event";t.currentTarget=n,xd(r,e,void 0,t),t.currentTarget=null}function Xc(t,e){e=(e&4)!==0;for(var n=0;n<t.length;n++){var r=t[n],i=r.event;r=r.listeners;t:{var s=void 0;if(e)for(var a=r.length-1;0<=a;a--){var l=r[a],o=l.instance,u=l.currentTarget;if(l=l.listener,o!==s&&i.isPropagationStopped())break t;Ho(i,l,u),s=o}else for(a=0;a<r.length;a++){if(l=r[a],o=l.instance,u=l.currentTarget,l=l.listener,o!==s&&i.isPropagationStopped())break t;Ho(i,l,u),s=o}}}if(Ti)throw t=wa,Ti=!1,wa=null,t}function H(t,e){var n=e[Na];n===void 0&&(n=e[Na]=new Set);var r=t+"__bubble";n.has(r)||(Kc(e,t,2,!1),n.add(r))}function $s(t,e,n){var r=0;e&&(r|=4),Kc(n,t,r,e)}var Zr="_reactListening"+Math.random().toString(36).slice(2);function kr(t){if(!t[Zr]){t[Zr]=!0,sc.forEach(function(n){n!=="selectionchange"&&(wp.has(n)||$s(n,!1,t),$s(n,!0,t))});var e=t.nodeType===9?t:t.ownerDocument;e===null||e[Zr]||(e[Zr]=!0,$s("selectionchange",!1,e))}}function Kc(t,e,n,r){switch(Oc(e)){case 1:var i=Ld;break;case 4:i=Od;break;default:i=kl}n=i.bind(null,e,n,t),i=void 0,!ya||e!=="touchstart"&&e!=="touchmove"&&e!=="wheel"||(i=!0),r?i!==void 0?t.addEventListener(e,n,{capture:!0,passive:i}):t.addEventListener(e,n,!0):i!==void 0?t.addEventListener(e,n,{passive:i}):t.addEventListener(e,n,!1)}function Fs(t,e,n,r,i){var s=r;if(!(e&1)&&!(e&2)&&r!==null)t:for(;;){if(r===null)return;var a=r.tag;if(a===3||a===4){var l=r.stateNode.containerInfo;if(l===i||l.nodeType===8&&l.parentNode===i)break;if(a===4)for(a=r.return;a!==null;){var o=a.tag;if((o===3||o===4)&&(o=a.stateNode.containerInfo,o===i||o.nodeType===8&&o.parentNode===i))return;a=a.return}for(;l!==null;){if(a=Ve(l),a===null)return;if(o=a.tag,o===5||o===6){r=s=a;continue t}l=l.parentNode}}r=r.return}Rc(function(){var u=s,d=wl(n),p=[];t:{var g=Jc.get(t);if(g!==void 0){var v=El,x=t;switch(t){case"keypress":if(di(n)===0)break t;case"keydown":case"keyup":v=Jd;break;case"focusin":x="focus",v=Ls;break;case"focusout":x="blur",v=Ls;break;case"beforeblur":case"afterblur":v=Ls;break;case"click":if(n.button===2)break t;case"auxclick":case"dblclick":case"mousedown":case"mousemove":case"mouseup":case"mouseout":case"mouseover":case"contextmenu":v=_o;break;case"drag":case"dragend":case"dragenter":case"dragexit":case"dragleave":case"dragover":case"dragstart":case"drop":v=Md;break;case"touchcancel":case"touchend":case"touchmove":case"touchstart":v=Zd;break;case Gc:case qc:case Qc:v=Fd;break;case Yc:v=ep;break;case"scroll":v=zd;break;case"wheel":v=rp;break;case"copy":case"cut":case"paste":v=Ud;break;case"gotpointercapture":case"lostpointercapture":case"pointercancel":case"pointerdown":case"pointermove":case"pointerout":case"pointerover":case"pointerup":v=Lo}var y=(e&4)!==0,I=!y&&t==="scroll",h=y?g!==null?g+"Capture":null:g;y=[];for(var c=u,f;c!==null;){f=c;var m=f.stateNode;if(f.tag===5&&m!==null&&(f=m,h!==null&&(m=xr(c,h),m!=null&&y.push(Cr(c,m,f)))),I)break;c=c.return}0<y.length&&(g=new v(g,x,null,n,d),p.push({event:g,listeners:y}))}}if(!(e&7)){t:{if(g=t==="mouseover"||t==="pointerover",v=t==="mouseout"||t==="pointerout",g&&n!==va&&(x=n.relatedTarget||n.fromElement)&&(Ve(x)||x[ge]))break t;if((v||g)&&(g=d.window===d?d:(g=d.ownerDocument)?g.defaultView||g.parentWindow:window,v?(x=n.relatedTarget||n.toElement,v=u,x=x?Ve(x):null,x!==null&&(I=an(x),x!==I||x.tag!==5&&x.tag!==6)&&(x=null)):(v=null,x=u),v!==x)){if(y=_o,m="onMouseLeave",h="onMouseEnter",c="mouse",(t==="pointerout"||t==="pointerover")&&(y=Lo,m="onPointerLeave",h="onPointerEnter",c="pointer"),I=v==null?g:pn(v),f=x==null?g:pn(x),g=new y(m,c+"leave",v,n,d),g.target=I,g.relatedTarget=f,m=null,Ve(d)===u&&(y=new y(h,c+"enter",x,n,d),y.target=f,y.relatedTarget=I,m=y),I=m,v&&x)e:{for(y=v,h=x,c=0,f=y;f;f=ln(f))c++;for(f=0,m=h;m;m=ln(m))f++;for(;0<c-f;)y=ln(y),c--;for(;0<f-c;)h=ln(h),f--;for(;c--;){if(y===h||h!==null&&y===h.alternate)break e;y=ln(y),h=ln(h)}y=null}else y=null;v!==null&&Vo(p,g,v,y,!1),x!==null&&I!==null&&Vo(p,I,x,y,!0)}}t:{if(g=u?pn(u):window,v=g.nodeName&&g.nodeName.toLowerCase(),v==="select"||v==="input"&&g.type==="file")var w=cp;else if(Wo(g))if(Fc)w=pp;else{w=fp;var b=hp}else(v=g.nodeName)&&v.toLowerCase()==="input"&&(g.type==="checkbox"||g.type==="radio")&&(w=dp);if(w&&(w=w(t,u))){$c(p,w,n,d);break t}b&&b(t,g,u),t==="focusout"&&(b=g._wrapperState)&&b.controlled&&g.type==="number"&&fa(g,"number",g.value)}switch(b=u?pn(u):window,t){case"focusin":(Wo(b)||b.contentEditable==="true")&&(fn=b,ka=u,cr=null);break;case"focusout":cr=ka=fn=null;break;case"mousedown":Ca=!0;break;case"contextmenu":case"mouseup":case"dragend":Ca=!1,Bo(p,n,d);break;case"selectionchange":if(vp)break;case"keydown":case"keyup":Bo(p,n,d)}var S;if(Il)t:{switch(t){case"compositionstart":var E="onCompositionStart";break t;case"compositionend":E="onCompositionEnd";break t;case"compositionupdate":E="onCompositionUpdate";break t}E=void 0}else hn?Mc(t,n)&&(E="onCompositionEnd"):t==="keydown"&&n.keyCode===229&&(E="onCompositionStart");E&&(Wc&&n.locale!=="ko"&&(hn||E!=="onCompositionStart"?E==="onCompositionEnd"&&hn&&(S=zc()):(Ee=d,Cl="value"in Ee?Ee.value:Ee.textContent,hn=!0)),b=_i(u,E),0<b.length&&(E=new Po(E,t,null,n,d),p.push({event:E,listeners:b}),S?E.data=S:(S=Dc(n),S!==null&&(E.data=S)))),(S=sp?ap(t,n):lp(t,n))&&(u=_i(u,"onBeforeInput"),0<u.length&&(d=new Po("onBeforeInput","beforeinput",null,n,d),p.push({event:d,listeners:u}),d.data=S))}Xc(p,e)})}function Cr(t,e,n){return{instance:t,listener:e,currentTarget:n}}function _i(t,e){for(var n=e+"Capture",r=[];t!==null;){var i=t,s=i.stateNode;i.tag===5&&s!==null&&(i=s,s=xr(t,n),s!=null&&r.unshift(Cr(t,s,i)),s=xr(t,e),s!=null&&r.push(Cr(t,s,i))),t=t.return}return r}function ln(t){if(t===null)return null;do t=t.return;while(t&&t.tag!==5);return t||null}function Vo(t,e,n,r,i){for(var s=e._reactName,a=[];n!==null&&n!==r;){var l=n,o=l.alternate,u=l.stateNode;if(o!==null&&o===r)break;l.tag===5&&u!==null&&(l=u,i?(o=xr(n,s),o!=null&&a.unshift(Cr(n,o,l))):i||(o=xr(n,s),o!=null&&a.push(Cr(n,o,l)))),n=n.return}a.length!==0&&t.push({event:e,listeners:a})}var Rp=/\r\n?/g,Sp=/\u0000|\uFFFD/g;function Go(t){return(typeof t=="string"?t:""+t).replace(Rp,`
`).replace(Sp,"")}function ti(t,e,n){if(e=Go(e),Go(t)!==e&&n)throw Error(R(425))}function Pi(){}var Ea=null,Ta=null;function Ia(t,e){return t==="textarea"||t==="noscript"||typeof e.children=="string"||typeof e.children=="number"||typeof e.dangerouslySetInnerHTML=="object"&&e.dangerouslySetInnerHTML!==null&&e.dangerouslySetInnerHTML.__html!=null}var ja=typeof setTimeout=="function"?setTimeout:void 0,bp=typeof clearTimeout=="function"?clearTimeout:void 0,qo=typeof Promise=="function"?Promise:void 0,kp=typeof queueMicrotask=="function"?queueMicrotask:typeof qo<"u"?function(t){return qo.resolve(null).then(t).catch(Cp)}:ja;function Cp(t){setTimeout(function(){throw t})}function Bs(t,e){var n=e,r=0;do{var i=n.nextSibling;if(t.removeChild(n),i&&i.nodeType===8)if(n=i.data,n==="/$"){if(r===0){t.removeChild(i),Rr(e);return}r--}else n!=="$"&&n!=="$?"&&n!=="$!"||r++;n=i}while(n);Rr(e)}function _e(t){for(;t!=null;t=t.nextSibling){var e=t.nodeType;if(e===1||e===3)break;if(e===8){if(e=t.data,e==="$"||e==="$!"||e==="$?")break;if(e==="/$")return null}}return t}function Qo(t){t=t.previousSibling;for(var e=0;t;){if(t.nodeType===8){var n=t.data;if(n==="$"||n==="$!"||n==="$?"){if(e===0)return t;e--}else n==="/$"&&e++}t=t.previousSibling}return null}var Bn=Math.random().toString(36).slice(2),re="__reactFiber$"+Bn,Er="__reactProps$"+Bn,ge="__reactContainer$"+Bn,Na="__reactEvents$"+Bn,Ep="__reactListeners$"+Bn,Tp="__reactHandles$"+Bn;function Ve(t){var e=t[re];if(e)return e;for(var n=t.parentNode;n;){if(e=n[ge]||n[re]){if(n=e.alternate,e.child!==null||n!==null&&n.child!==null)for(t=Qo(t);t!==null;){if(n=t[re])return n;t=Qo(t)}return e}t=n,n=t.parentNode}return null}function Dr(t){return t=t[re]||t[ge],!t||t.tag!==5&&t.tag!==6&&t.tag!==13&&t.tag!==3?null:t}function pn(t){if(t.tag===5||t.tag===6)return t.stateNode;throw Error(R(33))}function ss(t){return t[Er]||null}var Aa=[],gn=-1;function Fe(t){return{current:t}}function G(t){0>gn||(t.current=Aa[gn],Aa[gn]=null,gn--)}function B(t,e){gn++,Aa[gn]=t.current,t.current=e}var De={},gt=Fe(De),Ct=Fe(!1),Ze=De;function jn(t,e){var n=t.type.contextTypes;if(!n)return De;var r=t.stateNode;if(r&&r.__reactInternalMemoizedUnmaskedChildContext===e)return r.__reactInternalMemoizedMaskedChildContext;var i={},s;for(s in n)i[s]=e[s];return r&&(t=t.stateNode,t.__reactInternalMemoizedUnmaskedChildContext=e,t.__reactInternalMemoizedMaskedChildContext=i),i}function Et(t){return t=t.childContextTypes,t!=null}function Li(){G(Ct),G(gt)}function Yo(t,e,n){if(gt.current!==De)throw Error(R(168));B(gt,e),B(Ct,n)}function Zc(t,e,n){var r=t.stateNode;if(e=e.childContextTypes,typeof r.getChildContext!="function")return n;r=r.getChildContext();for(var i in r)if(!(i in e))throw Error(R(108,hd(t)||"Unknown",i));return J({},n,r)}function Oi(t){return t=(t=t.stateNode)&&t.__reactInternalMemoizedMergedChildContext||De,Ze=gt.current,B(gt,t),B(Ct,Ct.current),!0}function Jo(t,e,n){var r=t.stateNode;if(!r)throw Error(R(169));n?(t=Zc(t,e,Ze),r.__reactInternalMemoizedMergedChildContext=t,G(Ct),G(gt),B(gt,t)):G(Ct),B(Ct,n)}var ce=null,as=!1,Us=!1;function th(t){ce===null?ce=[t]:ce.push(t)}function Ip(t){as=!0,th(t)}function Be(){if(!Us&&ce!==null){Us=!0;var t=0,e=D;try{var n=ce;for(D=1;t<n.length;t++){var r=n[t];do r=r(!0);while(r!==null)}ce=null,as=!1}catch(i){throw ce!==null&&(ce=ce.slice(t+1)),Cc(Rl,Be),i}finally{D=e,Us=!1}}return null}var mn=[],vn=0,zi=null,Wi=0,zt=[],Wt=0,tn=null,he=1,fe="";function Ue(t,e){mn[vn++]=Wi,mn[vn++]=zi,zi=t,Wi=e}function eh(t,e,n){zt[Wt++]=he,zt[Wt++]=fe,zt[Wt++]=tn,tn=t;var r=he;t=fe;var i=32-Yt(r)-1;r&=~(1<<i),n+=1;var s=32-Yt(e)+i;if(30<s){var a=i-i%5;s=(r&(1<<a)-1).toString(32),r>>=a,i-=a,he=1<<32-Yt(e)+i|n<<i|r,fe=s+t}else he=1<<s|n<<i|r,fe=t}function Nl(t){t.return!==null&&(Ue(t,1),eh(t,1,0))}function Al(t){for(;t===zi;)zi=mn[--vn],mn[vn]=null,Wi=mn[--vn],mn[vn]=null;for(;t===tn;)tn=zt[--Wt],zt[Wt]=null,fe=zt[--Wt],zt[Wt]=null,he=zt[--Wt],zt[Wt]=null}var At=null,Nt=null,q=!1,qt=null;function nh(t,e){var n=Mt(5,null,null,0);n.elementType="DELETED",n.stateNode=e,n.return=t,e=t.deletions,e===null?(t.deletions=[n],t.flags|=16):e.push(n)}function Xo(t,e){switch(t.tag){case 5:var n=t.type;return e=e.nodeType!==1||n.toLowerCase()!==e.nodeName.toLowerCase()?null:e,e!==null?(t.stateNode=e,At=t,Nt=_e(e.firstChild),!0):!1;case 6:return e=t.pendingProps===""||e.nodeType!==3?null:e,e!==null?(t.stateNode=e,At=t,Nt=null,!0):!1;case 13:return e=e.nodeType!==8?null:e,e!==null?(n=tn!==null?{id:he,overflow:fe}:null,t.memoizedState={dehydrated:e,treeContext:n,retryLane:1073741824},n=Mt(18,null,null,0),n.stateNode=e,n.return=t,t.child=n,At=t,Nt=null,!0):!1;default:return!1}}function _a(t){return(t.mode&1)!==0&&(t.flags&128)===0}function Pa(t){if(q){var e=Nt;if(e){var n=e;if(!Xo(t,e)){if(_a(t))throw Error(R(418));e=_e(n.nextSibling);var r=At;e&&Xo(t,e)?nh(r,n):(t.flags=t.flags&-4097|2,q=!1,At=t)}}else{if(_a(t))throw Error(R(418));t.flags=t.flags&-4097|2,q=!1,At=t}}}function Ko(t){for(t=t.return;t!==null&&t.tag!==5&&t.tag!==3&&t.tag!==13;)t=t.return;At=t}function ei(t){if(t!==At)return!1;if(!q)return Ko(t),q=!0,!1;var e;if((e=t.tag!==3)&&!(e=t.tag!==5)&&(e=t.type,e=e!=="head"&&e!=="body"&&!Ia(t.type,t.memoizedProps)),e&&(e=Nt)){if(_a(t))throw rh(),Error(R(418));for(;e;)nh(t,e),e=_e(e.nextSibling)}if(Ko(t),t.tag===13){if(t=t.memoizedState,t=t!==null?t.dehydrated:null,!t)throw Error(R(317));t:{for(t=t.nextSibling,e=0;t;){if(t.nodeType===8){var n=t.data;if(n==="/$"){if(e===0){Nt=_e(t.nextSibling);break t}e--}else n!=="$"&&n!=="$!"&&n!=="$?"||e++}t=t.nextSibling}Nt=null}}else Nt=At?_e(t.stateNode.nextSibling):null;return!0}function rh(){for(var t=Nt;t;)t=_e(t.nextSibling)}function Nn(){Nt=At=null,q=!1}function _l(t){qt===null?qt=[t]:qt.push(t)}var jp=xe.ReactCurrentBatchConfig;function Vt(t,e){if(t&&t.defaultProps){e=J({},e),t=t.defaultProps;for(var n in t)e[n]===void 0&&(e[n]=t[n]);return e}return e}var Mi=Fe(null),Di=null,xn=null,Pl=null;function Ll(){Pl=xn=Di=null}function Ol(t){var e=Mi.current;G(Mi),t._currentValue=e}function La(t,e,n){for(;t!==null;){var r=t.alternate;if((t.childLanes&e)!==e?(t.childLanes|=e,r!==null&&(r.childLanes|=e)):r!==null&&(r.childLanes&e)!==e&&(r.childLanes|=e),t===n)break;t=t.return}}function En(t,e){Di=t,Pl=xn=null,t=t.dependencies,t!==null&&t.firstContext!==null&&(t.lanes&e&&(kt=!0),t.firstContext=null)}function $t(t){var e=t._currentValue;if(Pl!==t)if(t={context:t,memoizedValue:e,next:null},xn===null){if(Di===null)throw Error(R(308));xn=t,Di.dependencies={lanes:0,firstContext:t}}else xn=xn.next=t;return e}var Ge=null;function zl(t){Ge===null?Ge=[t]:Ge.push(t)}function ih(t,e,n,r){var i=e.interleaved;return i===null?(n.next=n,zl(e)):(n.next=i.next,i.next=n),e.interleaved=n,me(t,r)}function me(t,e){t.lanes|=e;var n=t.alternate;for(n!==null&&(n.lanes|=e),n=t,t=t.return;t!==null;)t.childLanes|=e,n=t.alternate,n!==null&&(n.childLanes|=e),n=t,t=t.return;return n.tag===3?n.stateNode:null}var be=!1;function Wl(t){t.updateQueue={baseState:t.memoizedState,firstBaseUpdate:null,lastBaseUpdate:null,shared:{pending:null,interleaved:null,lanes:0},effects:null}}function sh(t,e){t=t.updateQueue,e.updateQueue===t&&(e.updateQueue={baseState:t.baseState,firstBaseUpdate:t.firstBaseUpdate,lastBaseUpdate:t.lastBaseUpdate,shared:t.shared,effects:t.effects})}function de(t,e){return{eventTime:t,lane:e,tag:0,payload:null,callback:null,next:null}}function Pe(t,e,n){var r=t.updateQueue;if(r===null)return null;if(r=r.shared,W&2){var i=r.pending;return i===null?e.next=e:(e.next=i.next,i.next=e),r.pending=e,me(t,n)}return i=r.interleaved,i===null?(e.next=e,zl(r)):(e.next=i.next,i.next=e),r.interleaved=e,me(t,n)}function pi(t,e,n){if(e=e.updateQueue,e!==null&&(e=e.shared,(n&4194240)!==0)){var r=e.lanes;r&=t.pendingLanes,n|=r,e.lanes=n,Sl(t,n)}}function Zo(t,e){var n=t.updateQueue,r=t.alternate;if(r!==null&&(r=r.updateQueue,n===r)){var i=null,s=null;if(n=n.firstBaseUpdate,n!==null){do{var a={eventTime:n.eventTime,lane:n.lane,tag:n.tag,payload:n.payload,callback:n.callback,next:null};s===null?i=s=a:s=s.next=a,n=n.next}while(n!==null);s===null?i=s=e:s=s.next=e}else i=s=e;n={baseState:r.baseState,firstBaseUpdate:i,lastBaseUpdate:s,shared:r.shared,effects:r.effects},t.updateQueue=n;return}t=n.lastBaseUpdate,t===null?n.firstBaseUpdate=e:t.next=e,n.lastBaseUpdate=e}function $i(t,e,n,r){var i=t.updateQueue;be=!1;var s=i.firstBaseUpdate,a=i.lastBaseUpdate,l=i.shared.pending;if(l!==null){i.shared.pending=null;var o=l,u=o.next;o.next=null,a===null?s=u:a.next=u,a=o;var d=t.alternate;d!==null&&(d=d.updateQueue,l=d.lastBaseUpdate,l!==a&&(l===null?d.firstBaseUpdate=u:l.next=u,d.lastBaseUpdate=o))}if(s!==null){var p=i.baseState;a=0,d=u=o=null,l=s;do{var g=l.lane,v=l.eventTime;if((r&g)===g){d!==null&&(d=d.next={eventTime:v,lane:0,tag:l.tag,payload:l.payload,callback:l.callback,next:null});t:{var x=t,y=l;switch(g=e,v=n,y.tag){case 1:if(x=y.payload,typeof x=="function"){p=x.call(v,p,g);break t}p=x;break t;case 3:x.flags=x.flags&-65537|128;case 0:if(x=y.payload,g=typeof x=="function"?x.call(v,p,g):x,g==null)break t;p=J({},p,g);break t;case 2:be=!0}}l.callback!==null&&l.lane!==0&&(t.flags|=64,g=i.effects,g===null?i.effects=[l]:g.push(l))}else v={eventTime:v,lane:g,tag:l.tag,payload:l.payload,callback:l.callback,next:null},d===null?(u=d=v,o=p):d=d.next=v,a|=g;if(l=l.next,l===null){if(l=i.shared.pending,l===null)break;g=l,l=g.next,g.next=null,i.lastBaseUpdate=g,i.shared.pending=null}}while(1);if(d===null&&(o=p),i.baseState=o,i.firstBaseUpdate=u,i.lastBaseUpdate=d,e=i.shared.interleaved,e!==null){i=e;do a|=i.lane,i=i.next;while(i!==e)}else s===null&&(i.shared.lanes=0);nn|=a,t.lanes=a,t.memoizedState=p}}function tu(t,e,n){if(t=e.effects,e.effects=null,t!==null)for(e=0;e<t.length;e++){var r=t[e],i=r.callback;if(i!==null){if(r.callback=null,r=n,typeof i!="function")throw Error(R(191,i));i.call(r)}}}var ah=new ic.Component().refs;function Oa(t,e,n,r){e=t.memoizedState,n=n(r,e),n=n==null?e:J({},e,n),t.memoizedState=n,t.lanes===0&&(t.updateQueue.baseState=n)}var ls={isMounted:function(t){return(t=t._reactInternals)?an(t)===t:!1},enqueueSetState:function(t,e,n){t=t._reactInternals;var r=xt(),i=Oe(t),s=de(r,i);s.payload=e,n!=null&&(s.callback=n),e=Pe(t,s,i),e!==null&&(Jt(e,t,i,r),pi(e,t,i))},enqueueReplaceState:function(t,e,n){t=t._reactInternals;var r=xt(),i=Oe(t),s=de(r,i);s.tag=1,s.payload=e,n!=null&&(s.callback=n),e=Pe(t,s,i),e!==null&&(Jt(e,t,i,r),pi(e,t,i))},enqueueForceUpdate:function(t,e){t=t._reactInternals;var n=xt(),r=Oe(t),i=de(n,r);i.tag=2,e!=null&&(i.callback=e),e=Pe(t,i,r),e!==null&&(Jt(e,t,r,n),pi(e,t,r))}};function eu(t,e,n,r,i,s,a){return t=t.stateNode,typeof t.shouldComponentUpdate=="function"?t.shouldComponentUpdate(r,s,a):e.prototype&&e.prototype.isPureReactComponent?!br(n,r)||!br(i,s):!0}function lh(t,e,n){var r=!1,i=De,s=e.contextType;return typeof s=="object"&&s!==null?s=$t(s):(i=Et(e)?Ze:gt.current,r=e.contextTypes,s=(r=r!=null)?jn(t,i):De),e=new e(n,s),t.memoizedState=e.state!==null&&e.state!==void 0?e.state:null,e.updater=ls,t.stateNode=e,e._reactInternals=t,r&&(t=t.stateNode,t.__reactInternalMemoizedUnmaskedChildContext=i,t.__reactInternalMemoizedMaskedChildContext=s),e}function nu(t,e,n,r){t=e.state,typeof e.componentWillReceiveProps=="function"&&e.componentWillReceiveProps(n,r),typeof e.UNSAFE_componentWillReceiveProps=="function"&&e.UNSAFE_componentWillReceiveProps(n,r),e.state!==t&&ls.enqueueReplaceState(e,e.state,null)}function za(t,e,n,r){var i=t.stateNode;i.props=n,i.state=t.memoizedState,i.refs=ah,Wl(t);var s=e.contextType;typeof s=="object"&&s!==null?i.context=$t(s):(s=Et(e)?Ze:gt.current,i.context=jn(t,s)),i.state=t.memoizedState,s=e.getDerivedStateFromProps,typeof s=="function"&&(Oa(t,e,s,n),i.state=t.memoizedState),typeof e.getDerivedStateFromProps=="function"||typeof i.getSnapshotBeforeUpdate=="function"||typeof i.UNSAFE_componentWillMount!="function"&&typeof i.componentWillMount!="function"||(e=i.state,typeof i.componentWillMount=="function"&&i.componentWillMount(),typeof i.UNSAFE_componentWillMount=="function"&&i.UNSAFE_componentWillMount(),e!==i.state&&ls.enqueueReplaceState(i,i.state,null),$i(t,n,i,r),i.state=t.memoizedState),typeof i.componentDidMount=="function"&&(t.flags|=4194308)}function Kn(t,e,n){if(t=n.ref,t!==null&&typeof t!="function"&&typeof t!="object"){if(n._owner){if(n=n._owner,n){if(n.tag!==1)throw Error(R(309));var r=n.stateNode}if(!r)throw Error(R(147,t));var i=r,s=""+t;return e!==null&&e.ref!==null&&typeof e.ref=="function"&&e.ref._stringRef===s?e.ref:(e=function(a){var l=i.refs;l===ah&&(l=i.refs={}),a===null?delete l[s]:l[s]=a},e._stringRef=s,e)}if(typeof t!="string")throw Error(R(284));if(!n._owner)throw Error(R(290,t))}return t}function ni(t,e){throw t=Object.prototype.toString.call(e),Error(R(31,t==="[object Object]"?"object with keys {"+Object.keys(e).join(", ")+"}":t))}function ru(t){var e=t._init;return e(t._payload)}function oh(t){function e(h,c){if(t){var f=h.deletions;f===null?(h.deletions=[c],h.flags|=16):f.push(c)}}function n(h,c){if(!t)return null;for(;c!==null;)e(h,c),c=c.sibling;return null}function r(h,c){for(h=new Map;c!==null;)c.key!==null?h.set(c.key,c):h.set(c.index,c),c=c.sibling;return h}function i(h,c){return h=ze(h,c),h.index=0,h.sibling=null,h}function s(h,c,f){return h.index=f,t?(f=h.alternate,f!==null?(f=f.index,f<c?(h.flags|=2,c):f):(h.flags|=2,c)):(h.flags|=1048576,c)}function a(h){return t&&h.alternate===null&&(h.flags|=2),h}function l(h,c,f,m){return c===null||c.tag!==6?(c=Js(f,h.mode,m),c.return=h,c):(c=i(c,f),c.return=h,c)}function o(h,c,f,m){var w=f.type;return w===cn?d(h,c,f.props.children,m,f.key):c!==null&&(c.elementType===w||typeof w=="object"&&w!==null&&w.$$typeof===Se&&ru(w)===c.type)?(m=i(c,f.props),m.ref=Kn(h,c,f),m.return=h,m):(m=wi(f.type,f.key,f.props,null,h.mode,m),m.ref=Kn(h,c,f),m.return=h,m)}function u(h,c,f,m){return c===null||c.tag!==4||c.stateNode.containerInfo!==f.containerInfo||c.stateNode.implementation!==f.implementation?(c=Xs(f,h.mode,m),c.return=h,c):(c=i(c,f.children||[]),c.return=h,c)}function d(h,c,f,m,w){return c===null||c.tag!==7?(c=Je(f,h.mode,m,w),c.return=h,c):(c=i(c,f),c.return=h,c)}function p(h,c,f){if(typeof c=="string"&&c!==""||typeof c=="number")return c=Js(""+c,h.mode,f),c.return=h,c;if(typeof c=="object"&&c!==null){switch(c.$$typeof){case Vr:return f=wi(c.type,c.key,c.props,null,h.mode,f),f.ref=Kn(h,null,c),f.return=h,f;case un:return c=Xs(c,h.mode,f),c.return=h,c;case Se:var m=c._init;return p(h,m(c._payload),f)}if(nr(c)||qn(c))return c=Je(c,h.mode,f,null),c.return=h,c;ni(h,c)}return null}function g(h,c,f,m){var w=c!==null?c.key:null;if(typeof f=="string"&&f!==""||typeof f=="number")return w!==null?null:l(h,c,""+f,m);if(typeof f=="object"&&f!==null){switch(f.$$typeof){case Vr:return f.key===w?o(h,c,f,m):null;case un:return f.key===w?u(h,c,f,m):null;case Se:return w=f._init,g(h,c,w(f._payload),m)}if(nr(f)||qn(f))return w!==null?null:d(h,c,f,m,null);ni(h,f)}return null}function v(h,c,f,m,w){if(typeof m=="string"&&m!==""||typeof m=="number")return h=h.get(f)||null,l(c,h,""+m,w);if(typeof m=="object"&&m!==null){switch(m.$$typeof){case Vr:return h=h.get(m.key===null?f:m.key)||null,o(c,h,m,w);case un:return h=h.get(m.key===null?f:m.key)||null,u(c,h,m,w);case Se:var b=m._init;return v(h,c,f,b(m._payload),w)}if(nr(m)||qn(m))return h=h.get(f)||null,d(c,h,m,w,null);ni(c,m)}return null}function x(h,c,f,m){for(var w=null,b=null,S=c,E=c=0,U=null;S!==null&&E<f.length;E++){S.index>E?(U=S,S=null):U=S.sibling;var j=g(h,S,f[E],m);if(j===null){S===null&&(S=U);break}t&&S&&j.alternate===null&&e(h,S),c=s(j,c,E),b===null?w=j:b.sibling=j,b=j,S=U}if(E===f.length)return n(h,S),q&&Ue(h,E),w;if(S===null){for(;E<f.length;E++)S=p(h,f[E],m),S!==null&&(c=s(S,c,E),b===null?w=S:b.sibling=S,b=S);return q&&Ue(h,E),w}for(S=r(h,S);E<f.length;E++)U=v(S,h,E,f[E],m),U!==null&&(t&&U.alternate!==null&&S.delete(U.key===null?E:U.key),c=s(U,c,E),b===null?w=U:b.sibling=U,b=U);return t&&S.forEach(function(mt){return e(h,mt)}),q&&Ue(h,E),w}function y(h,c,f,m){var w=qn(f);if(typeof w!="function")throw Error(R(150));if(f=w.call(f),f==null)throw Error(R(151));for(var b=w=null,S=c,E=c=0,U=null,j=f.next();S!==null&&!j.done;E++,j=f.next()){S.index>E?(U=S,S=null):U=S.sibling;var mt=g(h,S,j.value,m);if(mt===null){S===null&&(S=U);break}t&&S&&mt.alternate===null&&e(h,S),c=s(mt,c,E),b===null?w=mt:b.sibling=mt,b=mt,S=U}if(j.done)return n(h,S),q&&Ue(h,E),w;if(S===null){for(;!j.done;E++,j=f.next())j=p(h,j.value,m),j!==null&&(c=s(j,c,E),b===null?w=j:b.sibling=j,b=j);return q&&Ue(h,E),w}for(S=r(h,S);!j.done;E++,j=f.next())j=v(S,h,E,j.value,m),j!==null&&(t&&j.alternate!==null&&S.delete(j.key===null?E:j.key),c=s(j,c,E),b===null?w=j:b.sibling=j,b=j);return t&&S.forEach(function(ae){return e(h,ae)}),q&&Ue(h,E),w}function I(h,c,f,m){if(typeof f=="object"&&f!==null&&f.type===cn&&f.key===null&&(f=f.props.children),typeof f=="object"&&f!==null){switch(f.$$typeof){case Vr:t:{for(var w=f.key,b=c;b!==null;){if(b.key===w){if(w=f.type,w===cn){if(b.tag===7){n(h,b.sibling),c=i(b,f.props.children),c.return=h,h=c;break t}}else if(b.elementType===w||typeof w=="object"&&w!==null&&w.$$typeof===Se&&ru(w)===b.type){n(h,b.sibling),c=i(b,f.props),c.ref=Kn(h,b,f),c.return=h,h=c;break t}n(h,b);break}else e(h,b);b=b.sibling}f.type===cn?(c=Je(f.props.children,h.mode,m,f.key),c.return=h,h=c):(m=wi(f.type,f.key,f.props,null,h.mode,m),m.ref=Kn(h,c,f),m.return=h,h=m)}return a(h);case un:t:{for(b=f.key;c!==null;){if(c.key===b)if(c.tag===4&&c.stateNode.containerInfo===f.containerInfo&&c.stateNode.implementation===f.implementation){n(h,c.sibling),c=i(c,f.children||[]),c.return=h,h=c;break t}else{n(h,c);break}else e(h,c);c=c.sibling}c=Xs(f,h.mode,m),c.return=h,h=c}return a(h);case Se:return b=f._init,I(h,c,b(f._payload),m)}if(nr(f))return x(h,c,f,m);if(qn(f))return y(h,c,f,m);ni(h,f)}return typeof f=="string"&&f!==""||typeof f=="number"?(f=""+f,c!==null&&c.tag===6?(n(h,c.sibling),c=i(c,f),c.return=h,h=c):(n(h,c),c=Js(f,h.mode,m),c.return=h,h=c),a(h)):n(h,c)}return I}var An=oh(!0),uh=oh(!1),$r={},se=Fe($r),Tr=Fe($r),Ir=Fe($r);function qe(t){if(t===$r)throw Error(R(174));return t}function Ml(t,e){switch(B(Ir,e),B(Tr,t),B(se,$r),t=e.nodeType,t){case 9:case 11:e=(e=e.documentElement)?e.namespaceURI:pa(null,"");break;default:t=t===8?e.parentNode:e,e=t.namespaceURI||null,t=t.tagName,e=pa(e,t)}G(se),B(se,e)}function _n(){G(se),G(Tr),G(Ir)}function ch(t){qe(Ir.current);var e=qe(se.current),n=pa(e,t.type);e!==n&&(B(Tr,t),B(se,n))}function Dl(t){Tr.current===t&&(G(se),G(Tr))}var Q=Fe(0);function Fi(t){for(var e=t;e!==null;){if(e.tag===13){var n=e.memoizedState;if(n!==null&&(n=n.dehydrated,n===null||n.data==="$?"||n.data==="$!"))return e}else if(e.tag===19&&e.memoizedProps.revealOrder!==void 0){if(e.flags&128)return e}else if(e.child!==null){e.child.return=e,e=e.child;continue}if(e===t)break;for(;e.sibling===null;){if(e.return===null||e.return===t)return null;e=e.return}e.sibling.return=e.return,e=e.sibling}return null}var Hs=[];function $l(){for(var t=0;t<Hs.length;t++)Hs[t]._workInProgressVersionPrimary=null;Hs.length=0}var gi=xe.ReactCurrentDispatcher,Vs=xe.ReactCurrentBatchConfig,en=0,Y=null,et=null,it=null,Bi=!1,hr=!1,jr=0,Np=0;function ht(){throw Error(R(321))}function Fl(t,e){if(e===null)return!1;for(var n=0;n<e.length&&n<t.length;n++)if(!Kt(t[n],e[n]))return!1;return!0}function Bl(t,e,n,r,i,s){if(en=s,Y=e,e.memoizedState=null,e.updateQueue=null,e.lanes=0,gi.current=t===null||t.memoizedState===null?Lp:Op,t=n(r,i),hr){s=0;do{if(hr=!1,jr=0,25<=s)throw Error(R(301));s+=1,it=et=null,e.updateQueue=null,gi.current=zp,t=n(r,i)}while(hr)}if(gi.current=Ui,e=et!==null&&et.next!==null,en=0,it=et=Y=null,Bi=!1,e)throw Error(R(300));return t}function Ul(){var t=jr!==0;return jr=0,t}function ee(){var t={memoizedState:null,baseState:null,baseQueue:null,queue:null,next:null};return it===null?Y.memoizedState=it=t:it=it.next=t,it}function Ft(){if(et===null){var t=Y.alternate;t=t!==null?t.memoizedState:null}else t=et.next;var e=it===null?Y.memoizedState:it.next;if(e!==null)it=e,et=t;else{if(t===null)throw Error(R(310));et=t,t={memoizedState:et.memoizedState,baseState:et.baseState,baseQueue:et.baseQueue,queue:et.queue,next:null},it===null?Y.memoizedState=it=t:it=it.next=t}return it}function Nr(t,e){return typeof e=="function"?e(t):e}function Gs(t){var e=Ft(),n=e.queue;if(n===null)throw Error(R(311));n.lastRenderedReducer=t;var r=et,i=r.baseQueue,s=n.pending;if(s!==null){if(i!==null){var a=i.next;i.next=s.next,s.next=a}r.baseQueue=i=s,n.pending=null}if(i!==null){s=i.next,r=r.baseState;var l=a=null,o=null,u=s;do{var d=u.lane;if((en&d)===d)o!==null&&(o=o.next={lane:0,action:u.action,hasEagerState:u.hasEagerState,eagerState:u.eagerState,next:null}),r=u.hasEagerState?u.eagerState:t(r,u.action);else{var p={lane:d,action:u.action,hasEagerState:u.hasEagerState,eagerState:u.eagerState,next:null};o===null?(l=o=p,a=r):o=o.next=p,Y.lanes|=d,nn|=d}u=u.next}while(u!==null&&u!==s);o===null?a=r:o.next=l,Kt(r,e.memoizedState)||(kt=!0),e.memoizedState=r,e.baseState=a,e.baseQueue=o,n.lastRenderedState=r}if(t=n.interleaved,t!==null){i=t;do s=i.lane,Y.lanes|=s,nn|=s,i=i.next;while(i!==t)}else i===null&&(n.lanes=0);return[e.memoizedState,n.dispatch]}function qs(t){var e=Ft(),n=e.queue;if(n===null)throw Error(R(311));n.lastRenderedReducer=t;var r=n.dispatch,i=n.pending,s=e.memoizedState;if(i!==null){n.pending=null;var a=i=i.next;do s=t(s,a.action),a=a.next;while(a!==i);Kt(s,e.memoizedState)||(kt=!0),e.memoizedState=s,e.baseQueue===null&&(e.baseState=s),n.lastRenderedState=s}return[s,r]}function hh(){}function fh(t,e){var n=Y,r=Ft(),i=e(),s=!Kt(r.memoizedState,i);if(s&&(r.memoizedState=i,kt=!0),r=r.queue,Hl(gh.bind(null,n,r,t),[t]),r.getSnapshot!==e||s||it!==null&&it.memoizedState.tag&1){if(n.flags|=2048,Ar(9,ph.bind(null,n,r,i,e),void 0,null),at===null)throw Error(R(349));en&30||dh(n,e,i)}return i}function dh(t,e,n){t.flags|=16384,t={getSnapshot:e,value:n},e=Y.updateQueue,e===null?(e={lastEffect:null,stores:null},Y.updateQueue=e,e.stores=[t]):(n=e.stores,n===null?e.stores=[t]:n.push(t))}function ph(t,e,n,r){e.value=n,e.getSnapshot=r,mh(e)&&vh(t)}function gh(t,e,n){return n(function(){mh(e)&&vh(t)})}function mh(t){var e=t.getSnapshot;t=t.value;try{var n=e();return!Kt(t,n)}catch{return!0}}function vh(t){var e=me(t,1);e!==null&&Jt(e,t,1,-1)}function iu(t){var e=ee();return typeof t=="function"&&(t=t()),e.memoizedState=e.baseState=t,t={pending:null,interleaved:null,lanes:0,dispatch:null,lastRenderedReducer:Nr,lastRenderedState:t},e.queue=t,t=t.dispatch=Pp.bind(null,Y,t),[e.memoizedState,t]}function Ar(t,e,n,r){return t={tag:t,create:e,destroy:n,deps:r,next:null},e=Y.updateQueue,e===null?(e={lastEffect:null,stores:null},Y.updateQueue=e,e.lastEffect=t.next=t):(n=e.lastEffect,n===null?e.lastEffect=t.next=t:(r=n.next,n.next=t,t.next=r,e.lastEffect=t)),t}function xh(){return Ft().memoizedState}function mi(t,e,n,r){var i=ee();Y.flags|=t,i.memoizedState=Ar(1|e,n,void 0,r===void 0?null:r)}function os(t,e,n,r){var i=Ft();r=r===void 0?null:r;var s=void 0;if(et!==null){var a=et.memoizedState;if(s=a.destroy,r!==null&&Fl(r,a.deps)){i.memoizedState=Ar(e,n,s,r);return}}Y.flags|=t,i.memoizedState=Ar(1|e,n,s,r)}function su(t,e){return mi(8390656,8,t,e)}function Hl(t,e){return os(2048,8,t,e)}function yh(t,e){return os(4,2,t,e)}function wh(t,e){return os(4,4,t,e)}function Rh(t,e){if(typeof e=="function")return t=t(),e(t),function(){e(null)};if(e!=null)return t=t(),e.current=t,function(){e.current=null}}function Sh(t,e,n){return n=n!=null?n.concat([t]):null,os(4,4,Rh.bind(null,e,t),n)}function Vl(){}function bh(t,e){var n=Ft();e=e===void 0?null:e;var r=n.memoizedState;return r!==null&&e!==null&&Fl(e,r[1])?r[0]:(n.memoizedState=[t,e],t)}function kh(t,e){var n=Ft();e=e===void 0?null:e;var r=n.memoizedState;return r!==null&&e!==null&&Fl(e,r[1])?r[0]:(t=t(),n.memoizedState=[t,e],t)}function Ch(t,e,n){return en&21?(Kt(n,e)||(n=Ic(),Y.lanes|=n,nn|=n,t.baseState=!0),e):(t.baseState&&(t.baseState=!1,kt=!0),t.memoizedState=n)}function Ap(t,e){var n=D;D=n!==0&&4>n?n:4,t(!0);var r=Vs.transition;Vs.transition={};try{t(!1),e()}finally{D=n,Vs.transition=r}}function Eh(){return Ft().memoizedState}function _p(t,e,n){var r=Oe(t);if(n={lane:r,action:n,hasEagerState:!1,eagerState:null,next:null},Th(t))Ih(e,n);else if(n=ih(t,e,n,r),n!==null){var i=xt();Jt(n,t,r,i),jh(n,e,r)}}function Pp(t,e,n){var r=Oe(t),i={lane:r,action:n,hasEagerState:!1,eagerState:null,next:null};if(Th(t))Ih(e,i);else{var s=t.alternate;if(t.lanes===0&&(s===null||s.lanes===0)&&(s=e.lastRenderedReducer,s!==null))try{var a=e.lastRenderedState,l=s(a,n);if(i.hasEagerState=!0,i.eagerState=l,Kt(l,a)){var o=e.interleaved;o===null?(i.next=i,zl(e)):(i.next=o.next,o.next=i),e.interleaved=i;return}}catch{}finally{}n=ih(t,e,i,r),n!==null&&(i=xt(),Jt(n,t,r,i),jh(n,e,r))}}function Th(t){var e=t.alternate;return t===Y||e!==null&&e===Y}function Ih(t,e){hr=Bi=!0;var n=t.pending;n===null?e.next=e:(e.next=n.next,n.next=e),t.pending=e}function jh(t,e,n){if(n&4194240){var r=e.lanes;r&=t.pendingLanes,n|=r,e.lanes=n,Sl(t,n)}}var Ui={readContext:$t,useCallback:ht,useContext:ht,useEffect:ht,useImperativeHandle:ht,useInsertionEffect:ht,useLayoutEffect:ht,useMemo:ht,useReducer:ht,useRef:ht,useState:ht,useDebugValue:ht,useDeferredValue:ht,useTransition:ht,useMutableSource:ht,useSyncExternalStore:ht,useId:ht,unstable_isNewReconciler:!1},Lp={readContext:$t,useCallback:function(t,e){return ee().memoizedState=[t,e===void 0?null:e],t},useContext:$t,useEffect:su,useImperativeHandle:function(t,e,n){return n=n!=null?n.concat([t]):null,mi(4194308,4,Rh.bind(null,e,t),n)},useLayoutEffect:function(t,e){return mi(4194308,4,t,e)},useInsertionEffect:function(t,e){return mi(4,2,t,e)},useMemo:function(t,e){var n=ee();return e=e===void 0?null:e,t=t(),n.memoizedState=[t,e],t},useReducer:function(t,e,n){var r=ee();return e=n!==void 0?n(e):e,r.memoizedState=r.baseState=e,t={pending:null,interleaved:null,lanes:0,dispatch:null,lastRenderedReducer:t,lastRenderedState:e},r.queue=t,t=t.dispatch=_p.bind(null,Y,t),[r.memoizedState,t]},useRef:function(t){var e=ee();return t={current:t},e.memoizedState=t},useState:iu,useDebugValue:Vl,useDeferredValue:function(t){return ee().memoizedState=t},useTransition:function(){var t=iu(!1),e=t[0];return t=Ap.bind(null,t[1]),ee().memoizedState=t,[e,t]},useMutableSource:function(){},useSyncExternalStore:function(t,e,n){var r=Y,i=ee();if(q){if(n===void 0)throw Error(R(407));n=n()}else{if(n=e(),at===null)throw Error(R(349));en&30||dh(r,e,n)}i.memoizedState=n;var s={value:n,getSnapshot:e};return i.queue=s,su(gh.bind(null,r,s,t),[t]),r.flags|=2048,Ar(9,ph.bind(null,r,s,n,e),void 0,null),n},useId:function(){var t=ee(),e=at.identifierPrefix;if(q){var n=fe,r=he;n=(r&~(1<<32-Yt(r)-1)).toString(32)+n,e=":"+e+"R"+n,n=jr++,0<n&&(e+="H"+n.toString(32)),e+=":"}else n=Np++,e=":"+e+"r"+n.toString(32)+":";return t.memoizedState=e},unstable_isNewReconciler:!1},Op={readContext:$t,useCallback:bh,useContext:$t,useEffect:Hl,useImperativeHandle:Sh,useInsertionEffect:yh,useLayoutEffect:wh,useMemo:kh,useReducer:Gs,useRef:xh,useState:function(){return Gs(Nr)},useDebugValue:Vl,useDeferredValue:function(t){var e=Ft();return Ch(e,et.memoizedState,t)},useTransition:function(){var t=Gs(Nr)[0],e=Ft().memoizedState;return[t,e]},useMutableSource:hh,useSyncExternalStore:fh,useId:Eh,unstable_isNewReconciler:!1},zp={readContext:$t,useCallback:bh,useContext:$t,useEffect:Hl,useImperativeHandle:Sh,useInsertionEffect:yh,useLayoutEffect:wh,useMemo:kh,useReducer:qs,useRef:xh,useState:function(){return qs(Nr)},useDebugValue:Vl,useDeferredValue:function(t){var e=Ft();return et===null?e.memoizedState=t:Ch(e,et.memoizedState,t)},useTransition:function(){var t=qs(Nr)[0],e=Ft().memoizedState;return[t,e]},useMutableSource:hh,useSyncExternalStore:fh,useId:Eh,unstable_isNewReconciler:!1};function Pn(t,e){try{var n="",r=e;do n+=cd(r),r=r.return;while(r);var i=n}catch(s){i=`
Error generating stack: `+s.message+`
`+s.stack}return{value:t,source:e,stack:i,digest:null}}function Qs(t,e,n){return{value:t,source:null,stack:n??null,digest:e??null}}function Wa(t,e){try{console.error(e.value)}catch(n){setTimeout(function(){throw n})}}var Wp=typeof WeakMap=="function"?WeakMap:Map;function Nh(t,e,n){n=de(-1,n),n.tag=3,n.payload={element:null};var r=e.value;return n.callback=function(){Vi||(Vi=!0,qa=r),Wa(t,e)},n}function Ah(t,e,n){n=de(-1,n),n.tag=3;var r=t.type.getDerivedStateFromError;if(typeof r=="function"){var i=e.value;n.payload=function(){return r(i)},n.callback=function(){Wa(t,e)}}var s=t.stateNode;return s!==null&&typeof s.componentDidCatch=="function"&&(n.callback=function(){Wa(t,e),typeof r!="function"&&(Le===null?Le=new Set([this]):Le.add(this));var a=e.stack;this.componentDidCatch(e.value,{componentStack:a!==null?a:""})}),n}function au(t,e,n){var r=t.pingCache;if(r===null){r=t.pingCache=new Wp;var i=new Set;r.set(e,i)}else i=r.get(e),i===void 0&&(i=new Set,r.set(e,i));i.has(n)||(i.add(n),t=Xp.bind(null,t,e,n),e.then(t,t))}function lu(t){do{var e;if((e=t.tag===13)&&(e=t.memoizedState,e=e!==null?e.dehydrated!==null:!0),e)return t;t=t.return}while(t!==null);return null}function ou(t,e,n,r,i){return t.mode&1?(t.flags|=65536,t.lanes=i,t):(t===e?t.flags|=65536:(t.flags|=128,n.flags|=131072,n.flags&=-52805,n.tag===1&&(n.alternate===null?n.tag=17:(e=de(-1,1),e.tag=2,Pe(n,e,1))),n.lanes|=1),t)}var Mp=xe.ReactCurrentOwner,kt=!1;function vt(t,e,n,r){e.child=t===null?uh(e,null,n,r):An(e,t.child,n,r)}function uu(t,e,n,r,i){n=n.render;var s=e.ref;return En(e,i),r=Bl(t,e,n,r,s,i),n=Ul(),t!==null&&!kt?(e.updateQueue=t.updateQueue,e.flags&=-2053,t.lanes&=~i,ve(t,e,i)):(q&&n&&Nl(e),e.flags|=1,vt(t,e,r,i),e.child)}function cu(t,e,n,r,i){if(t===null){var s=n.type;return typeof s=="function"&&!Zl(s)&&s.defaultProps===void 0&&n.compare===null&&n.defaultProps===void 0?(e.tag=15,e.type=s,_h(t,e,s,r,i)):(t=wi(n.type,null,r,e,e.mode,i),t.ref=e.ref,t.return=e,e.child=t)}if(s=t.child,!(t.lanes&i)){var a=s.memoizedProps;if(n=n.compare,n=n!==null?n:br,n(a,r)&&t.ref===e.ref)return ve(t,e,i)}return e.flags|=1,t=ze(s,r),t.ref=e.ref,t.return=e,e.child=t}function _h(t,e,n,r,i){if(t!==null){var s=t.memoizedProps;if(br(s,r)&&t.ref===e.ref)if(kt=!1,e.pendingProps=r=s,(t.lanes&i)!==0)t.flags&131072&&(kt=!0);else return e.lanes=t.lanes,ve(t,e,i)}return Ma(t,e,n,r,i)}function Ph(t,e,n){var r=e.pendingProps,i=r.children,s=t!==null?t.memoizedState:null;if(r.mode==="hidden")if(!(e.mode&1))e.memoizedState={baseLanes:0,cachePool:null,transitions:null},B(wn,jt),jt|=n;else{if(!(n&1073741824))return t=s!==null?s.baseLanes|n:n,e.lanes=e.childLanes=1073741824,e.memoizedState={baseLanes:t,cachePool:null,transitions:null},e.updateQueue=null,B(wn,jt),jt|=t,null;e.memoizedState={baseLanes:0,cachePool:null,transitions:null},r=s!==null?s.baseLanes:n,B(wn,jt),jt|=r}else s!==null?(r=s.baseLanes|n,e.memoizedState=null):r=n,B(wn,jt),jt|=r;return vt(t,e,i,n),e.child}function Lh(t,e){var n=e.ref;(t===null&&n!==null||t!==null&&t.ref!==n)&&(e.flags|=512,e.flags|=2097152)}function Ma(t,e,n,r,i){var s=Et(n)?Ze:gt.current;return s=jn(e,s),En(e,i),n=Bl(t,e,n,r,s,i),r=Ul(),t!==null&&!kt?(e.updateQueue=t.updateQueue,e.flags&=-2053,t.lanes&=~i,ve(t,e,i)):(q&&r&&Nl(e),e.flags|=1,vt(t,e,n,i),e.child)}function hu(t,e,n,r,i){if(Et(n)){var s=!0;Oi(e)}else s=!1;if(En(e,i),e.stateNode===null)vi(t,e),lh(e,n,r),za(e,n,r,i),r=!0;else if(t===null){var a=e.stateNode,l=e.memoizedProps;a.props=l;var o=a.context,u=n.contextType;typeof u=="object"&&u!==null?u=$t(u):(u=Et(n)?Ze:gt.current,u=jn(e,u));var d=n.getDerivedStateFromProps,p=typeof d=="function"||typeof a.getSnapshotBeforeUpdate=="function";p||typeof a.UNSAFE_componentWillReceiveProps!="function"&&typeof a.componentWillReceiveProps!="function"||(l!==r||o!==u)&&nu(e,a,r,u),be=!1;var g=e.memoizedState;a.state=g,$i(e,r,a,i),o=e.memoizedState,l!==r||g!==o||Ct.current||be?(typeof d=="function"&&(Oa(e,n,d,r),o=e.memoizedState),(l=be||eu(e,n,l,r,g,o,u))?(p||typeof a.UNSAFE_componentWillMount!="function"&&typeof a.componentWillMount!="function"||(typeof a.componentWillMount=="function"&&a.componentWillMount(),typeof a.UNSAFE_componentWillMount=="function"&&a.UNSAFE_componentWillMount()),typeof a.componentDidMount=="function"&&(e.flags|=4194308)):(typeof a.componentDidMount=="function"&&(e.flags|=4194308),e.memoizedProps=r,e.memoizedState=o),a.props=r,a.state=o,a.context=u,r=l):(typeof a.componentDidMount=="function"&&(e.flags|=4194308),r=!1)}else{a=e.stateNode,sh(t,e),l=e.memoizedProps,u=e.type===e.elementType?l:Vt(e.type,l),a.props=u,p=e.pendingProps,g=a.context,o=n.contextType,typeof o=="object"&&o!==null?o=$t(o):(o=Et(n)?Ze:gt.current,o=jn(e,o));var v=n.getDerivedStateFromProps;(d=typeof v=="function"||typeof a.getSnapshotBeforeUpdate=="function")||typeof a.UNSAFE_componentWillReceiveProps!="function"&&typeof a.componentWillReceiveProps!="function"||(l!==p||g!==o)&&nu(e,a,r,o),be=!1,g=e.memoizedState,a.state=g,$i(e,r,a,i);var x=e.memoizedState;l!==p||g!==x||Ct.current||be?(typeof v=="function"&&(Oa(e,n,v,r),x=e.memoizedState),(u=be||eu(e,n,u,r,g,x,o)||!1)?(d||typeof a.UNSAFE_componentWillUpdate!="function"&&typeof a.componentWillUpdate!="function"||(typeof a.componentWillUpdate=="function"&&a.componentWillUpdate(r,x,o),typeof a.UNSAFE_componentWillUpdate=="function"&&a.UNSAFE_componentWillUpdate(r,x,o)),typeof a.componentDidUpdate=="function"&&(e.flags|=4),typeof a.getSnapshotBeforeUpdate=="function"&&(e.flags|=1024)):(typeof a.componentDidUpdate!="function"||l===t.memoizedProps&&g===t.memoizedState||(e.flags|=4),typeof a.getSnapshotBeforeUpdate!="function"||l===t.memoizedProps&&g===t.memoizedState||(e.flags|=1024),e.memoizedProps=r,e.memoizedState=x),a.props=r,a.state=x,a.context=o,r=u):(typeof a.componentDidUpdate!="function"||l===t.memoizedProps&&g===t.memoizedState||(e.flags|=4),typeof a.getSnapshotBeforeUpdate!="function"||l===t.memoizedProps&&g===t.memoizedState||(e.flags|=1024),r=!1)}return Da(t,e,n,r,s,i)}function Da(t,e,n,r,i,s){Lh(t,e);var a=(e.flags&128)!==0;if(!r&&!a)return i&&Jo(e,n,!1),ve(t,e,s);r=e.stateNode,Mp.current=e;var l=a&&typeof n.getDerivedStateFromError!="function"?null:r.render();return e.flags|=1,t!==null&&a?(e.child=An(e,t.child,null,s),e.child=An(e,null,l,s)):vt(t,e,l,s),e.memoizedState=r.state,i&&Jo(e,n,!0),e.child}function Oh(t){var e=t.stateNode;e.pendingContext?Yo(t,e.pendingContext,e.pendingContext!==e.context):e.context&&Yo(t,e.context,!1),Ml(t,e.containerInfo)}function fu(t,e,n,r,i){return Nn(),_l(i),e.flags|=256,vt(t,e,n,r),e.child}var $a={dehydrated:null,treeContext:null,retryLane:0};function Fa(t){return{baseLanes:t,cachePool:null,transitions:null}}function zh(t,e,n){var r=e.pendingProps,i=Q.current,s=!1,a=(e.flags&128)!==0,l;if((l=a)||(l=t!==null&&t.memoizedState===null?!1:(i&2)!==0),l?(s=!0,e.flags&=-129):(t===null||t.memoizedState!==null)&&(i|=1),B(Q,i&1),t===null)return Pa(e),t=e.memoizedState,t!==null&&(t=t.dehydrated,t!==null)?(e.mode&1?t.data==="$!"?e.lanes=8:e.lanes=1073741824:e.lanes=1,null):(a=r.children,t=r.fallback,s?(r=e.mode,s=e.child,a={mode:"hidden",children:a},!(r&1)&&s!==null?(s.childLanes=0,s.pendingProps=a):s=hs(a,r,0,null),t=Je(t,r,n,null),s.return=e,t.return=e,s.sibling=t,e.child=s,e.child.memoizedState=Fa(n),e.memoizedState=$a,t):Gl(e,a));if(i=t.memoizedState,i!==null&&(l=i.dehydrated,l!==null))return Dp(t,e,a,r,l,i,n);if(s){s=r.fallback,a=e.mode,i=t.child,l=i.sibling;var o={mode:"hidden",children:r.children};return!(a&1)&&e.child!==i?(r=e.child,r.childLanes=0,r.pendingProps=o,e.deletions=null):(r=ze(i,o),r.subtreeFlags=i.subtreeFlags&14680064),l!==null?s=ze(l,s):(s=Je(s,a,n,null),s.flags|=2),s.return=e,r.return=e,r.sibling=s,e.child=r,r=s,s=e.child,a=t.child.memoizedState,a=a===null?Fa(n):{baseLanes:a.baseLanes|n,cachePool:null,transitions:a.transitions},s.memoizedState=a,s.childLanes=t.childLanes&~n,e.memoizedState=$a,r}return s=t.child,t=s.sibling,r=ze(s,{mode:"visible",children:r.children}),!(e.mode&1)&&(r.lanes=n),r.return=e,r.sibling=null,t!==null&&(n=e.deletions,n===null?(e.deletions=[t],e.flags|=16):n.push(t)),e.child=r,e.memoizedState=null,r}function Gl(t,e){return e=hs({mode:"visible",children:e},t.mode,0,null),e.return=t,t.child=e}function ri(t,e,n,r){return r!==null&&_l(r),An(e,t.child,null,n),t=Gl(e,e.pendingProps.children),t.flags|=2,e.memoizedState=null,t}function Dp(t,e,n,r,i,s,a){if(n)return e.flags&256?(e.flags&=-257,r=Qs(Error(R(422))),ri(t,e,a,r)):e.memoizedState!==null?(e.child=t.child,e.flags|=128,null):(s=r.fallback,i=e.mode,r=hs({mode:"visible",children:r.children},i,0,null),s=Je(s,i,a,null),s.flags|=2,r.return=e,s.return=e,r.sibling=s,e.child=r,e.mode&1&&An(e,t.child,null,a),e.child.memoizedState=Fa(a),e.memoizedState=$a,s);if(!(e.mode&1))return ri(t,e,a,null);if(i.data==="$!"){if(r=i.nextSibling&&i.nextSibling.dataset,r)var l=r.dgst;return r=l,s=Error(R(419)),r=Qs(s,r,void 0),ri(t,e,a,r)}if(l=(a&t.childLanes)!==0,kt||l){if(r=at,r!==null){switch(a&-a){case 4:i=2;break;case 16:i=8;break;case 64:case 128:case 256:case 512:case 1024:case 2048:case 4096:case 8192:case 16384:case 32768:case 65536:case 131072:case 262144:case 524288:case 1048576:case 2097152:case 4194304:case 8388608:case 16777216:case 33554432:case 67108864:i=32;break;case 536870912:i=268435456;break;default:i=0}i=i&(r.suspendedLanes|a)?0:i,i!==0&&i!==s.retryLane&&(s.retryLane=i,me(t,i),Jt(r,t,i,-1))}return Kl(),r=Qs(Error(R(421))),ri(t,e,a,r)}return i.data==="$?"?(e.flags|=128,e.child=t.child,e=Kp.bind(null,t),i._reactRetry=e,null):(t=s.treeContext,Nt=_e(i.nextSibling),At=e,q=!0,qt=null,t!==null&&(zt[Wt++]=he,zt[Wt++]=fe,zt[Wt++]=tn,he=t.id,fe=t.overflow,tn=e),e=Gl(e,r.children),e.flags|=4096,e)}function du(t,e,n){t.lanes|=e;var r=t.alternate;r!==null&&(r.lanes|=e),La(t.return,e,n)}function Ys(t,e,n,r,i){var s=t.memoizedState;s===null?t.memoizedState={isBackwards:e,rendering:null,renderingStartTime:0,last:r,tail:n,tailMode:i}:(s.isBackwards=e,s.rendering=null,s.renderingStartTime=0,s.last=r,s.tail=n,s.tailMode=i)}function Wh(t,e,n){var r=e.pendingProps,i=r.revealOrder,s=r.tail;if(vt(t,e,r.children,n),r=Q.current,r&2)r=r&1|2,e.flags|=128;else{if(t!==null&&t.flags&128)t:for(t=e.child;t!==null;){if(t.tag===13)t.memoizedState!==null&&du(t,n,e);else if(t.tag===19)du(t,n,e);else if(t.child!==null){t.child.return=t,t=t.child;continue}if(t===e)break t;for(;t.sibling===null;){if(t.return===null||t.return===e)break t;t=t.return}t.sibling.return=t.return,t=t.sibling}r&=1}if(B(Q,r),!(e.mode&1))e.memoizedState=null;else switch(i){case"forwards":for(n=e.child,i=null;n!==null;)t=n.alternate,t!==null&&Fi(t)===null&&(i=n),n=n.sibling;n=i,n===null?(i=e.child,e.child=null):(i=n.sibling,n.sibling=null),Ys(e,!1,i,n,s);break;case"backwards":for(n=null,i=e.child,e.child=null;i!==null;){if(t=i.alternate,t!==null&&Fi(t)===null){e.child=i;break}t=i.sibling,i.sibling=n,n=i,i=t}Ys(e,!0,n,null,s);break;case"together":Ys(e,!1,null,null,void 0);break;default:e.memoizedState=null}return e.child}function vi(t,e){!(e.mode&1)&&t!==null&&(t.alternate=null,e.alternate=null,e.flags|=2)}function ve(t,e,n){if(t!==null&&(e.dependencies=t.dependencies),nn|=e.lanes,!(n&e.childLanes))return null;if(t!==null&&e.child!==t.child)throw Error(R(153));if(e.child!==null){for(t=e.child,n=ze(t,t.pendingProps),e.child=n,n.return=e;t.sibling!==null;)t=t.sibling,n=n.sibling=ze(t,t.pendingProps),n.return=e;n.sibling=null}return e.child}function $p(t,e,n){switch(e.tag){case 3:Oh(e),Nn();break;case 5:ch(e);break;case 1:Et(e.type)&&Oi(e);break;case 4:Ml(e,e.stateNode.containerInfo);break;case 10:var r=e.type._context,i=e.memoizedProps.value;B(Mi,r._currentValue),r._currentValue=i;break;case 13:if(r=e.memoizedState,r!==null)return r.dehydrated!==null?(B(Q,Q.current&1),e.flags|=128,null):n&e.child.childLanes?zh(t,e,n):(B(Q,Q.current&1),t=ve(t,e,n),t!==null?t.sibling:null);B(Q,Q.current&1);break;case 19:if(r=(n&e.childLanes)!==0,t.flags&128){if(r)return Wh(t,e,n);e.flags|=128}if(i=e.memoizedState,i!==null&&(i.rendering=null,i.tail=null,i.lastEffect=null),B(Q,Q.current),r)break;return null;case 22:case 23:return e.lanes=0,Ph(t,e,n)}return ve(t,e,n)}var Mh,Ba,Dh,$h;Mh=function(t,e){for(var n=e.child;n!==null;){if(n.tag===5||n.tag===6)t.appendChild(n.stateNode);else if(n.tag!==4&&n.child!==null){n.child.return=n,n=n.child;continue}if(n===e)break;for(;n.sibling===null;){if(n.return===null||n.return===e)return;n=n.return}n.sibling.return=n.return,n=n.sibling}};Ba=function(){};Dh=function(t,e,n,r){var i=t.memoizedProps;if(i!==r){t=e.stateNode,qe(se.current);var s=null;switch(n){case"input":i=ca(t,i),r=ca(t,r),s=[];break;case"select":i=J({},i,{value:void 0}),r=J({},r,{value:void 0}),s=[];break;case"textarea":i=da(t,i),r=da(t,r),s=[];break;default:typeof i.onClick!="function"&&typeof r.onClick=="function"&&(t.onclick=Pi)}ga(n,r);var a;n=null;for(u in i)if(!r.hasOwnProperty(u)&&i.hasOwnProperty(u)&&i[u]!=null)if(u==="style"){var l=i[u];for(a in l)l.hasOwnProperty(a)&&(n||(n={}),n[a]="")}else u!=="dangerouslySetInnerHTML"&&u!=="children"&&u!=="suppressContentEditableWarning"&&u!=="suppressHydrationWarning"&&u!=="autoFocus"&&(mr.hasOwnProperty(u)?s||(s=[]):(s=s||[]).push(u,null));for(u in r){var o=r[u];if(l=i!=null?i[u]:void 0,r.hasOwnProperty(u)&&o!==l&&(o!=null||l!=null))if(u==="style")if(l){for(a in l)!l.hasOwnProperty(a)||o&&o.hasOwnProperty(a)||(n||(n={}),n[a]="");for(a in o)o.hasOwnProperty(a)&&l[a]!==o[a]&&(n||(n={}),n[a]=o[a])}else n||(s||(s=[]),s.push(u,n)),n=o;else u==="dangerouslySetInnerHTML"?(o=o?o.__html:void 0,l=l?l.__html:void 0,o!=null&&l!==o&&(s=s||[]).push(u,o)):u==="children"?typeof o!="string"&&typeof o!="number"||(s=s||[]).push(u,""+o):u!=="suppressContentEditableWarning"&&u!=="suppressHydrationWarning"&&(mr.hasOwnProperty(u)?(o!=null&&u==="onScroll"&&H("scroll",t),s||l===o||(s=[])):(s=s||[]).push(u,o))}n&&(s=s||[]).push("style",n);var u=s;(e.updateQueue=u)&&(e.flags|=4)}};$h=function(t,e,n,r){n!==r&&(e.flags|=4)};function Zn(t,e){if(!q)switch(t.tailMode){case"hidden":e=t.tail;for(var n=null;e!==null;)e.alternate!==null&&(n=e),e=e.sibling;n===null?t.tail=null:n.sibling=null;break;case"collapsed":n=t.tail;for(var r=null;n!==null;)n.alternate!==null&&(r=n),n=n.sibling;r===null?e||t.tail===null?t.tail=null:t.tail.sibling=null:r.sibling=null}}function ft(t){var e=t.alternate!==null&&t.alternate.child===t.child,n=0,r=0;if(e)for(var i=t.child;i!==null;)n|=i.lanes|i.childLanes,r|=i.subtreeFlags&14680064,r|=i.flags&14680064,i.return=t,i=i.sibling;else for(i=t.child;i!==null;)n|=i.lanes|i.childLanes,r|=i.subtreeFlags,r|=i.flags,i.return=t,i=i.sibling;return t.subtreeFlags|=r,t.childLanes=n,e}function Fp(t,e,n){var r=e.pendingProps;switch(Al(e),e.tag){case 2:case 16:case 15:case 0:case 11:case 7:case 8:case 12:case 9:case 14:return ft(e),null;case 1:return Et(e.type)&&Li(),ft(e),null;case 3:return r=e.stateNode,_n(),G(Ct),G(gt),$l(),r.pendingContext&&(r.context=r.pendingContext,r.pendingContext=null),(t===null||t.child===null)&&(ei(e)?e.flags|=4:t===null||t.memoizedState.isDehydrated&&!(e.flags&256)||(e.flags|=1024,qt!==null&&(Ja(qt),qt=null))),Ba(t,e),ft(e),null;case 5:Dl(e);var i=qe(Ir.current);if(n=e.type,t!==null&&e.stateNode!=null)Dh(t,e,n,r,i),t.ref!==e.ref&&(e.flags|=512,e.flags|=2097152);else{if(!r){if(e.stateNode===null)throw Error(R(166));return ft(e),null}if(t=qe(se.current),ei(e)){r=e.stateNode,n=e.type;var s=e.memoizedProps;switch(r[re]=e,r[Er]=s,t=(e.mode&1)!==0,n){case"dialog":H("cancel",r),H("close",r);break;case"iframe":case"object":case"embed":H("load",r);break;case"video":case"audio":for(i=0;i<ir.length;i++)H(ir[i],r);break;case"source":H("error",r);break;case"img":case"image":case"link":H("error",r),H("load",r);break;case"details":H("toggle",r);break;case"input":So(r,s),H("invalid",r);break;case"select":r._wrapperState={wasMultiple:!!s.multiple},H("invalid",r);break;case"textarea":ko(r,s),H("invalid",r)}ga(n,s),i=null;for(var a in s)if(s.hasOwnProperty(a)){var l=s[a];a==="children"?typeof l=="string"?r.textContent!==l&&(s.suppressHydrationWarning!==!0&&ti(r.textContent,l,t),i=["children",l]):typeof l=="number"&&r.textContent!==""+l&&(s.suppressHydrationWarning!==!0&&ti(r.textContent,l,t),i=["children",""+l]):mr.hasOwnProperty(a)&&l!=null&&a==="onScroll"&&H("scroll",r)}switch(n){case"input":Gr(r),bo(r,s,!0);break;case"textarea":Gr(r),Co(r);break;case"select":case"option":break;default:typeof s.onClick=="function"&&(r.onclick=Pi)}r=i,e.updateQueue=r,r!==null&&(e.flags|=4)}else{a=i.nodeType===9?i:i.ownerDocument,t==="http://www.w3.org/1999/xhtml"&&(t=dc(n)),t==="http://www.w3.org/1999/xhtml"?n==="script"?(t=a.createElement("div"),t.innerHTML="<script><\/script>",t=t.removeChild(t.firstChild)):typeof r.is=="string"?t=a.createElement(n,{is:r.is}):(t=a.createElement(n),n==="select"&&(a=t,r.multiple?a.multiple=!0:r.size&&(a.size=r.size))):t=a.createElementNS(t,n),t[re]=e,t[Er]=r,Mh(t,e,!1,!1),e.stateNode=t;t:{switch(a=ma(n,r),n){case"dialog":H("cancel",t),H("close",t),i=r;break;case"iframe":case"object":case"embed":H("load",t),i=r;break;case"video":case"audio":for(i=0;i<ir.length;i++)H(ir[i],t);i=r;break;case"source":H("error",t),i=r;break;case"img":case"image":case"link":H("error",t),H("load",t),i=r;break;case"details":H("toggle",t),i=r;break;case"input":So(t,r),i=ca(t,r),H("invalid",t);break;case"option":i=r;break;case"select":t._wrapperState={wasMultiple:!!r.multiple},i=J({},r,{value:void 0}),H("invalid",t);break;case"textarea":ko(t,r),i=da(t,r),H("invalid",t);break;default:i=r}ga(n,i),l=i;for(s in l)if(l.hasOwnProperty(s)){var o=l[s];s==="style"?mc(t,o):s==="dangerouslySetInnerHTML"?(o=o?o.__html:void 0,o!=null&&pc(t,o)):s==="children"?typeof o=="string"?(n!=="textarea"||o!=="")&&vr(t,o):typeof o=="number"&&vr(t,""+o):s!=="suppressContentEditableWarning"&&s!=="suppressHydrationWarning"&&s!=="autoFocus"&&(mr.hasOwnProperty(s)?o!=null&&s==="onScroll"&&H("scroll",t):o!=null&&ml(t,s,o,a))}switch(n){case"input":Gr(t),bo(t,r,!1);break;case"textarea":Gr(t),Co(t);break;case"option":r.value!=null&&t.setAttribute("value",""+Me(r.value));break;case"select":t.multiple=!!r.multiple,s=r.value,s!=null?Sn(t,!!r.multiple,s,!1):r.defaultValue!=null&&Sn(t,!!r.multiple,r.defaultValue,!0);break;default:typeof i.onClick=="function"&&(t.onclick=Pi)}switch(n){case"button":case"input":case"select":case"textarea":r=!!r.autoFocus;break t;case"img":r=!0;break t;default:r=!1}}r&&(e.flags|=4)}e.ref!==null&&(e.flags|=512,e.flags|=2097152)}return ft(e),null;case 6:if(t&&e.stateNode!=null)$h(t,e,t.memoizedProps,r);else{if(typeof r!="string"&&e.stateNode===null)throw Error(R(166));if(n=qe(Ir.current),qe(se.current),ei(e)){if(r=e.stateNode,n=e.memoizedProps,r[re]=e,(s=r.nodeValue!==n)&&(t=At,t!==null))switch(t.tag){case 3:ti(r.nodeValue,n,(t.mode&1)!==0);break;case 5:t.memoizedProps.suppressHydrationWarning!==!0&&ti(r.nodeValue,n,(t.mode&1)!==0)}s&&(e.flags|=4)}else r=(n.nodeType===9?n:n.ownerDocument).createTextNode(r),r[re]=e,e.stateNode=r}return ft(e),null;case 13:if(G(Q),r=e.memoizedState,t===null||t.memoizedState!==null&&t.memoizedState.dehydrated!==null){if(q&&Nt!==null&&e.mode&1&&!(e.flags&128))rh(),Nn(),e.flags|=98560,s=!1;else if(s=ei(e),r!==null&&r.dehydrated!==null){if(t===null){if(!s)throw Error(R(318));if(s=e.memoizedState,s=s!==null?s.dehydrated:null,!s)throw Error(R(317));s[re]=e}else Nn(),!(e.flags&128)&&(e.memoizedState=null),e.flags|=4;ft(e),s=!1}else qt!==null&&(Ja(qt),qt=null),s=!0;if(!s)return e.flags&65536?e:null}return e.flags&128?(e.lanes=n,e):(r=r!==null,r!==(t!==null&&t.memoizedState!==null)&&r&&(e.child.flags|=8192,e.mode&1&&(t===null||Q.current&1?nt===0&&(nt=3):Kl())),e.updateQueue!==null&&(e.flags|=4),ft(e),null);case 4:return _n(),Ba(t,e),t===null&&kr(e.stateNode.containerInfo),ft(e),null;case 10:return Ol(e.type._context),ft(e),null;case 17:return Et(e.type)&&Li(),ft(e),null;case 19:if(G(Q),s=e.memoizedState,s===null)return ft(e),null;if(r=(e.flags&128)!==0,a=s.rendering,a===null)if(r)Zn(s,!1);else{if(nt!==0||t!==null&&t.flags&128)for(t=e.child;t!==null;){if(a=Fi(t),a!==null){for(e.flags|=128,Zn(s,!1),r=a.updateQueue,r!==null&&(e.updateQueue=r,e.flags|=4),e.subtreeFlags=0,r=n,n=e.child;n!==null;)s=n,t=r,s.flags&=14680066,a=s.alternate,a===null?(s.childLanes=0,s.lanes=t,s.child=null,s.subtreeFlags=0,s.memoizedProps=null,s.memoizedState=null,s.updateQueue=null,s.dependencies=null,s.stateNode=null):(s.childLanes=a.childLanes,s.lanes=a.lanes,s.child=a.child,s.subtreeFlags=0,s.deletions=null,s.memoizedProps=a.memoizedProps,s.memoizedState=a.memoizedState,s.updateQueue=a.updateQueue,s.type=a.type,t=a.dependencies,s.dependencies=t===null?null:{lanes:t.lanes,firstContext:t.firstContext}),n=n.sibling;return B(Q,Q.current&1|2),e.child}t=t.sibling}s.tail!==null&&K()>Ln&&(e.flags|=128,r=!0,Zn(s,!1),e.lanes=4194304)}else{if(!r)if(t=Fi(a),t!==null){if(e.flags|=128,r=!0,n=t.updateQueue,n!==null&&(e.updateQueue=n,e.flags|=4),Zn(s,!0),s.tail===null&&s.tailMode==="hidden"&&!a.alternate&&!q)return ft(e),null}else 2*K()-s.renderingStartTime>Ln&&n!==1073741824&&(e.flags|=128,r=!0,Zn(s,!1),e.lanes=4194304);s.isBackwards?(a.sibling=e.child,e.child=a):(n=s.last,n!==null?n.sibling=a:e.child=a,s.last=a)}return s.tail!==null?(e=s.tail,s.rendering=e,s.tail=e.sibling,s.renderingStartTime=K(),e.sibling=null,n=Q.current,B(Q,r?n&1|2:n&1),e):(ft(e),null);case 22:case 23:return Xl(),r=e.memoizedState!==null,t!==null&&t.memoizedState!==null!==r&&(e.flags|=8192),r&&e.mode&1?jt&1073741824&&(ft(e),e.subtreeFlags&6&&(e.flags|=8192)):ft(e),null;case 24:return null;case 25:return null}throw Error(R(156,e.tag))}function Bp(t,e){switch(Al(e),e.tag){case 1:return Et(e.type)&&Li(),t=e.flags,t&65536?(e.flags=t&-65537|128,e):null;case 3:return _n(),G(Ct),G(gt),$l(),t=e.flags,t&65536&&!(t&128)?(e.flags=t&-65537|128,e):null;case 5:return Dl(e),null;case 13:if(G(Q),t=e.memoizedState,t!==null&&t.dehydrated!==null){if(e.alternate===null)throw Error(R(340));Nn()}return t=e.flags,t&65536?(e.flags=t&-65537|128,e):null;case 19:return G(Q),null;case 4:return _n(),null;case 10:return Ol(e.type._context),null;case 22:case 23:return Xl(),null;case 24:return null;default:return null}}var ii=!1,dt=!1,Up=typeof WeakSet=="function"?WeakSet:Set,T=null;function yn(t,e){var n=t.ref;if(n!==null)if(typeof n=="function")try{n(null)}catch(r){X(t,e,r)}else n.current=null}function Ua(t,e,n){try{n()}catch(r){X(t,e,r)}}var pu=!1;function Hp(t,e){if(Ea=Ni,t=Hc(),jl(t)){if("selectionStart"in t)var n={start:t.selectionStart,end:t.selectionEnd};else t:{n=(n=t.ownerDocument)&&n.defaultView||window;var r=n.getSelection&&n.getSelection();if(r&&r.rangeCount!==0){n=r.anchorNode;var i=r.anchorOffset,s=r.focusNode;r=r.focusOffset;try{n.nodeType,s.nodeType}catch{n=null;break t}var a=0,l=-1,o=-1,u=0,d=0,p=t,g=null;e:for(;;){for(var v;p!==n||i!==0&&p.nodeType!==3||(l=a+i),p!==s||r!==0&&p.nodeType!==3||(o=a+r),p.nodeType===3&&(a+=p.nodeValue.length),(v=p.firstChild)!==null;)g=p,p=v;for(;;){if(p===t)break e;if(g===n&&++u===i&&(l=a),g===s&&++d===r&&(o=a),(v=p.nextSibling)!==null)break;p=g,g=p.parentNode}p=v}n=l===-1||o===-1?null:{start:l,end:o}}else n=null}n=n||{start:0,end:0}}else n=null;for(Ta={focusedElem:t,selectionRange:n},Ni=!1,T=e;T!==null;)if(e=T,t=e.child,(e.subtreeFlags&1028)!==0&&t!==null)t.return=e,T=t;else for(;T!==null;){e=T;try{var x=e.alternate;if(e.flags&1024)switch(e.tag){case 0:case 11:case 15:break;case 1:if(x!==null){var y=x.memoizedProps,I=x.memoizedState,h=e.stateNode,c=h.getSnapshotBeforeUpdate(e.elementType===e.type?y:Vt(e.type,y),I);h.__reactInternalSnapshotBeforeUpdate=c}break;case 3:var f=e.stateNode.containerInfo;f.nodeType===1?f.textContent="":f.nodeType===9&&f.documentElement&&f.removeChild(f.documentElement);break;case 5:case 6:case 4:case 17:break;default:throw Error(R(163))}}catch(m){X(e,e.return,m)}if(t=e.sibling,t!==null){t.return=e.return,T=t;break}T=e.return}return x=pu,pu=!1,x}function fr(t,e,n){var r=e.updateQueue;if(r=r!==null?r.lastEffect:null,r!==null){var i=r=r.next;do{if((i.tag&t)===t){var s=i.destroy;i.destroy=void 0,s!==void 0&&Ua(e,n,s)}i=i.next}while(i!==r)}}function us(t,e){if(e=e.updateQueue,e=e!==null?e.lastEffect:null,e!==null){var n=e=e.next;do{if((n.tag&t)===t){var r=n.create;n.destroy=r()}n=n.next}while(n!==e)}}function Ha(t){var e=t.ref;if(e!==null){var n=t.stateNode;switch(t.tag){case 5:t=n;break;default:t=n}typeof e=="function"?e(t):e.current=t}}function Fh(t){var e=t.alternate;e!==null&&(t.alternate=null,Fh(e)),t.child=null,t.deletions=null,t.sibling=null,t.tag===5&&(e=t.stateNode,e!==null&&(delete e[re],delete e[Er],delete e[Na],delete e[Ep],delete e[Tp])),t.stateNode=null,t.return=null,t.dependencies=null,t.memoizedProps=null,t.memoizedState=null,t.pendingProps=null,t.stateNode=null,t.updateQueue=null}function Bh(t){return t.tag===5||t.tag===3||t.tag===4}function gu(t){t:for(;;){for(;t.sibling===null;){if(t.return===null||Bh(t.return))return null;t=t.return}for(t.sibling.return=t.return,t=t.sibling;t.tag!==5&&t.tag!==6&&t.tag!==18;){if(t.flags&2||t.child===null||t.tag===4)continue t;t.child.return=t,t=t.child}if(!(t.flags&2))return t.stateNode}}function Va(t,e,n){var r=t.tag;if(r===5||r===6)t=t.stateNode,e?n.nodeType===8?n.parentNode.insertBefore(t,e):n.insertBefore(t,e):(n.nodeType===8?(e=n.parentNode,e.insertBefore(t,n)):(e=n,e.appendChild(t)),n=n._reactRootContainer,n!=null||e.onclick!==null||(e.onclick=Pi));else if(r!==4&&(t=t.child,t!==null))for(Va(t,e,n),t=t.sibling;t!==null;)Va(t,e,n),t=t.sibling}function Ga(t,e,n){var r=t.tag;if(r===5||r===6)t=t.stateNode,e?n.insertBefore(t,e):n.appendChild(t);else if(r!==4&&(t=t.child,t!==null))for(Ga(t,e,n),t=t.sibling;t!==null;)Ga(t,e,n),t=t.sibling}var ot=null,Gt=!1;function we(t,e,n){for(n=n.child;n!==null;)Uh(t,e,n),n=n.sibling}function Uh(t,e,n){if(ie&&typeof ie.onCommitFiberUnmount=="function")try{ie.onCommitFiberUnmount(es,n)}catch{}switch(n.tag){case 5:dt||yn(n,e);case 6:var r=ot,i=Gt;ot=null,we(t,e,n),ot=r,Gt=i,ot!==null&&(Gt?(t=ot,n=n.stateNode,t.nodeType===8?t.parentNode.removeChild(n):t.removeChild(n)):ot.removeChild(n.stateNode));break;case 18:ot!==null&&(Gt?(t=ot,n=n.stateNode,t.nodeType===8?Bs(t.parentNode,n):t.nodeType===1&&Bs(t,n),Rr(t)):Bs(ot,n.stateNode));break;case 4:r=ot,i=Gt,ot=n.stateNode.containerInfo,Gt=!0,we(t,e,n),ot=r,Gt=i;break;case 0:case 11:case 14:case 15:if(!dt&&(r=n.updateQueue,r!==null&&(r=r.lastEffect,r!==null))){i=r=r.next;do{var s=i,a=s.destroy;s=s.tag,a!==void 0&&(s&2||s&4)&&Ua(n,e,a),i=i.next}while(i!==r)}we(t,e,n);break;case 1:if(!dt&&(yn(n,e),r=n.stateNode,typeof r.componentWillUnmount=="function"))try{r.props=n.memoizedProps,r.state=n.memoizedState,r.componentWillUnmount()}catch(l){X(n,e,l)}we(t,e,n);break;case 21:we(t,e,n);break;case 22:n.mode&1?(dt=(r=dt)||n.memoizedState!==null,we(t,e,n),dt=r):we(t,e,n);break;default:we(t,e,n)}}function mu(t){var e=t.updateQueue;if(e!==null){t.updateQueue=null;var n=t.stateNode;n===null&&(n=t.stateNode=new Up),e.forEach(function(r){var i=Zp.bind(null,t,r);n.has(r)||(n.add(r),r.then(i,i))})}}function Ht(t,e){var n=e.deletions;if(n!==null)for(var r=0;r<n.length;r++){var i=n[r];try{var s=t,a=e,l=a;t:for(;l!==null;){switch(l.tag){case 5:ot=l.stateNode,Gt=!1;break t;case 3:ot=l.stateNode.containerInfo,Gt=!0;break t;case 4:ot=l.stateNode.containerInfo,Gt=!0;break t}l=l.return}if(ot===null)throw Error(R(160));Uh(s,a,i),ot=null,Gt=!1;var o=i.alternate;o!==null&&(o.return=null),i.return=null}catch(u){X(i,e,u)}}if(e.subtreeFlags&12854)for(e=e.child;e!==null;)Hh(e,t),e=e.sibling}function Hh(t,e){var n=t.alternate,r=t.flags;switch(t.tag){case 0:case 11:case 14:case 15:if(Ht(e,t),te(t),r&4){try{fr(3,t,t.return),us(3,t)}catch(y){X(t,t.return,y)}try{fr(5,t,t.return)}catch(y){X(t,t.return,y)}}break;case 1:Ht(e,t),te(t),r&512&&n!==null&&yn(n,n.return);break;case 5:if(Ht(e,t),te(t),r&512&&n!==null&&yn(n,n.return),t.flags&32){var i=t.stateNode;try{vr(i,"")}catch(y){X(t,t.return,y)}}if(r&4&&(i=t.stateNode,i!=null)){var s=t.memoizedProps,a=n!==null?n.memoizedProps:s,l=t.type,o=t.updateQueue;if(t.updateQueue=null,o!==null)try{l==="input"&&s.type==="radio"&&s.name!=null&&hc(i,s),ma(l,a);var u=ma(l,s);for(a=0;a<o.length;a+=2){var d=o[a],p=o[a+1];d==="style"?mc(i,p):d==="dangerouslySetInnerHTML"?pc(i,p):d==="children"?vr(i,p):ml(i,d,p,u)}switch(l){case"input":ha(i,s);break;case"textarea":fc(i,s);break;case"select":var g=i._wrapperState.wasMultiple;i._wrapperState.wasMultiple=!!s.multiple;var v=s.value;v!=null?Sn(i,!!s.multiple,v,!1):g!==!!s.multiple&&(s.defaultValue!=null?Sn(i,!!s.multiple,s.defaultValue,!0):Sn(i,!!s.multiple,s.multiple?[]:"",!1))}i[Er]=s}catch(y){X(t,t.return,y)}}break;case 6:if(Ht(e,t),te(t),r&4){if(t.stateNode===null)throw Error(R(162));i=t.stateNode,s=t.memoizedProps;try{i.nodeValue=s}catch(y){X(t,t.return,y)}}break;case 3:if(Ht(e,t),te(t),r&4&&n!==null&&n.memoizedState.isDehydrated)try{Rr(e.containerInfo)}catch(y){X(t,t.return,y)}break;case 4:Ht(e,t),te(t);break;case 13:Ht(e,t),te(t),i=t.child,i.flags&8192&&(s=i.memoizedState!==null,i.stateNode.isHidden=s,!s||i.alternate!==null&&i.alternate.memoizedState!==null||(Yl=K())),r&4&&mu(t);break;case 22:if(d=n!==null&&n.memoizedState!==null,t.mode&1?(dt=(u=dt)||d,Ht(e,t),dt=u):Ht(e,t),te(t),r&8192){if(u=t.memoizedState!==null,(t.stateNode.isHidden=u)&&!d&&t.mode&1)for(T=t,d=t.child;d!==null;){for(p=T=d;T!==null;){switch(g=T,v=g.child,g.tag){case 0:case 11:case 14:case 15:fr(4,g,g.return);break;case 1:yn(g,g.return);var x=g.stateNode;if(typeof x.componentWillUnmount=="function"){r=g,n=g.return;try{e=r,x.props=e.memoizedProps,x.state=e.memoizedState,x.componentWillUnmount()}catch(y){X(r,n,y)}}break;case 5:yn(g,g.return);break;case 22:if(g.memoizedState!==null){xu(p);continue}}v!==null?(v.return=g,T=v):xu(p)}d=d.sibling}t:for(d=null,p=t;;){if(p.tag===5){if(d===null){d=p;try{i=p.stateNode,u?(s=i.style,typeof s.setProperty=="function"?s.setProperty("display","none","important"):s.display="none"):(l=p.stateNode,o=p.memoizedProps.style,a=o!=null&&o.hasOwnProperty("display")?o.display:null,l.style.display=gc("display",a))}catch(y){X(t,t.return,y)}}}else if(p.tag===6){if(d===null)try{p.stateNode.nodeValue=u?"":p.memoizedProps}catch(y){X(t,t.return,y)}}else if((p.tag!==22&&p.tag!==23||p.memoizedState===null||p===t)&&p.child!==null){p.child.return=p,p=p.child;continue}if(p===t)break t;for(;p.sibling===null;){if(p.return===null||p.return===t)break t;d===p&&(d=null),p=p.return}d===p&&(d=null),p.sibling.return=p.return,p=p.sibling}}break;case 19:Ht(e,t),te(t),r&4&&mu(t);break;case 21:break;default:Ht(e,t),te(t)}}function te(t){var e=t.flags;if(e&2){try{t:{for(var n=t.return;n!==null;){if(Bh(n)){var r=n;break t}n=n.return}throw Error(R(160))}switch(r.tag){case 5:var i=r.stateNode;r.flags&32&&(vr(i,""),r.flags&=-33);var s=gu(t);Ga(t,s,i);break;case 3:case 4:var a=r.stateNode.containerInfo,l=gu(t);Va(t,l,a);break;default:throw Error(R(161))}}catch(o){X(t,t.return,o)}t.flags&=-3}e&4096&&(t.flags&=-4097)}function Vp(t,e,n){T=t,Vh(t)}function Vh(t,e,n){for(var r=(t.mode&1)!==0;T!==null;){var i=T,s=i.child;if(i.tag===22&&r){var a=i.memoizedState!==null||ii;if(!a){var l=i.alternate,o=l!==null&&l.memoizedState!==null||dt;l=ii;var u=dt;if(ii=a,(dt=o)&&!u)for(T=i;T!==null;)a=T,o=a.child,a.tag===22&&a.memoizedState!==null?yu(i):o!==null?(o.return=a,T=o):yu(i);for(;s!==null;)T=s,Vh(s),s=s.sibling;T=i,ii=l,dt=u}vu(t)}else i.subtreeFlags&8772&&s!==null?(s.return=i,T=s):vu(t)}}function vu(t){for(;T!==null;){var e=T;if(e.flags&8772){var n=e.alternate;try{if(e.flags&8772)switch(e.tag){case 0:case 11:case 15:dt||us(5,e);break;case 1:var r=e.stateNode;if(e.flags&4&&!dt)if(n===null)r.componentDidMount();else{var i=e.elementType===e.type?n.memoizedProps:Vt(e.type,n.memoizedProps);r.componentDidUpdate(i,n.memoizedState,r.__reactInternalSnapshotBeforeUpdate)}var s=e.updateQueue;s!==null&&tu(e,s,r);break;case 3:var a=e.updateQueue;if(a!==null){if(n=null,e.child!==null)switch(e.child.tag){case 5:n=e.child.stateNode;break;case 1:n=e.child.stateNode}tu(e,a,n)}break;case 5:var l=e.stateNode;if(n===null&&e.flags&4){n=l;var o=e.memoizedProps;switch(e.type){case"button":case"input":case"select":case"textarea":o.autoFocus&&n.focus();break;case"img":o.src&&(n.src=o.src)}}break;case 6:break;case 4:break;case 12:break;case 13:if(e.memoizedState===null){var u=e.alternate;if(u!==null){var d=u.memoizedState;if(d!==null){var p=d.dehydrated;p!==null&&Rr(p)}}}break;case 19:case 17:case 21:case 22:case 23:case 25:break;default:throw Error(R(163))}dt||e.flags&512&&Ha(e)}catch(g){X(e,e.return,g)}}if(e===t){T=null;break}if(n=e.sibling,n!==null){n.return=e.return,T=n;break}T=e.return}}function xu(t){for(;T!==null;){var e=T;if(e===t){T=null;break}var n=e.sibling;if(n!==null){n.return=e.return,T=n;break}T=e.return}}function yu(t){for(;T!==null;){var e=T;try{switch(e.tag){case 0:case 11:case 15:var n=e.return;try{us(4,e)}catch(o){X(e,n,o)}break;case 1:var r=e.stateNode;if(typeof r.componentDidMount=="function"){var i=e.return;try{r.componentDidMount()}catch(o){X(e,i,o)}}var s=e.return;try{Ha(e)}catch(o){X(e,s,o)}break;case 5:var a=e.return;try{Ha(e)}catch(o){X(e,a,o)}}}catch(o){X(e,e.return,o)}if(e===t){T=null;break}var l=e.sibling;if(l!==null){l.return=e.return,T=l;break}T=e.return}}var Gp=Math.ceil,Hi=xe.ReactCurrentDispatcher,ql=xe.ReactCurrentOwner,Dt=xe.ReactCurrentBatchConfig,W=0,at=null,tt=null,ut=0,jt=0,wn=Fe(0),nt=0,_r=null,nn=0,cs=0,Ql=0,dr=null,bt=null,Yl=0,Ln=1/0,oe=null,Vi=!1,qa=null,Le=null,si=!1,Te=null,Gi=0,pr=0,Qa=null,xi=-1,yi=0;function xt(){return W&6?K():xi!==-1?xi:xi=K()}function Oe(t){return t.mode&1?W&2&&ut!==0?ut&-ut:jp.transition!==null?(yi===0&&(yi=Ic()),yi):(t=D,t!==0||(t=window.event,t=t===void 0?16:Oc(t.type)),t):1}function Jt(t,e,n,r){if(50<pr)throw pr=0,Qa=null,Error(R(185));Wr(t,n,r),(!(W&2)||t!==at)&&(t===at&&(!(W&2)&&(cs|=n),nt===4&&Ce(t,ut)),Tt(t,r),n===1&&W===0&&!(e.mode&1)&&(Ln=K()+500,as&&Be()))}function Tt(t,e){var n=t.callbackNode;jd(t,e);var r=ji(t,t===at?ut:0);if(r===0)n!==null&&Io(n),t.callbackNode=null,t.callbackPriority=0;else if(e=r&-r,t.callbackPriority!==e){if(n!=null&&Io(n),e===1)t.tag===0?Ip(wu.bind(null,t)):th(wu.bind(null,t)),kp(function(){!(W&6)&&Be()}),n=null;else{switch(jc(r)){case 1:n=Rl;break;case 4:n=Ec;break;case 16:n=Ii;break;case 536870912:n=Tc;break;default:n=Ii}n=Zh(n,Gh.bind(null,t))}t.callbackPriority=e,t.callbackNode=n}}function Gh(t,e){if(xi=-1,yi=0,W&6)throw Error(R(327));var n=t.callbackNode;if(Tn()&&t.callbackNode!==n)return null;var r=ji(t,t===at?ut:0);if(r===0)return null;if(r&30||r&t.expiredLanes||e)e=qi(t,r);else{e=r;var i=W;W|=2;var s=Qh();(at!==t||ut!==e)&&(oe=null,Ln=K()+500,Ye(t,e));do try{Yp();break}catch(l){qh(t,l)}while(1);Ll(),Hi.current=s,W=i,tt!==null?e=0:(at=null,ut=0,e=nt)}if(e!==0){if(e===2&&(i=Ra(t),i!==0&&(r=i,e=Ya(t,i))),e===1)throw n=_r,Ye(t,0),Ce(t,r),Tt(t,K()),n;if(e===6)Ce(t,r);else{if(i=t.current.alternate,!(r&30)&&!qp(i)&&(e=qi(t,r),e===2&&(s=Ra(t),s!==0&&(r=s,e=Ya(t,s))),e===1))throw n=_r,Ye(t,0),Ce(t,r),Tt(t,K()),n;switch(t.finishedWork=i,t.finishedLanes=r,e){case 0:case 1:throw Error(R(345));case 2:He(t,bt,oe);break;case 3:if(Ce(t,r),(r&130023424)===r&&(e=Yl+500-K(),10<e)){if(ji(t,0)!==0)break;if(i=t.suspendedLanes,(i&r)!==r){xt(),t.pingedLanes|=t.suspendedLanes&i;break}t.timeoutHandle=ja(He.bind(null,t,bt,oe),e);break}He(t,bt,oe);break;case 4:if(Ce(t,r),(r&4194240)===r)break;for(e=t.eventTimes,i=-1;0<r;){var a=31-Yt(r);s=1<<a,a=e[a],a>i&&(i=a),r&=~s}if(r=i,r=K()-r,r=(120>r?120:480>r?480:1080>r?1080:1920>r?1920:3e3>r?3e3:4320>r?4320:1960*Gp(r/1960))-r,10<r){t.timeoutHandle=ja(He.bind(null,t,bt,oe),r);break}He(t,bt,oe);break;case 5:He(t,bt,oe);break;default:throw Error(R(329))}}}return Tt(t,K()),t.callbackNode===n?Gh.bind(null,t):null}function Ya(t,e){var n=dr;return t.current.memoizedState.isDehydrated&&(Ye(t,e).flags|=256),t=qi(t,e),t!==2&&(e=bt,bt=n,e!==null&&Ja(e)),t}function Ja(t){bt===null?bt=t:bt.push.apply(bt,t)}function qp(t){for(var e=t;;){if(e.flags&16384){var n=e.updateQueue;if(n!==null&&(n=n.stores,n!==null))for(var r=0;r<n.length;r++){var i=n[r],s=i.getSnapshot;i=i.value;try{if(!Kt(s(),i))return!1}catch{return!1}}}if(n=e.child,e.subtreeFlags&16384&&n!==null)n.return=e,e=n;else{if(e===t)break;for(;e.sibling===null;){if(e.return===null||e.return===t)return!0;e=e.return}e.sibling.return=e.return,e=e.sibling}}return!0}function Ce(t,e){for(e&=~Ql,e&=~cs,t.suspendedLanes|=e,t.pingedLanes&=~e,t=t.expirationTimes;0<e;){var n=31-Yt(e),r=1<<n;t[n]=-1,e&=~r}}function wu(t){if(W&6)throw Error(R(327));Tn();var e=ji(t,0);if(!(e&1))return Tt(t,K()),null;var n=qi(t,e);if(t.tag!==0&&n===2){var r=Ra(t);r!==0&&(e=r,n=Ya(t,r))}if(n===1)throw n=_r,Ye(t,0),Ce(t,e),Tt(t,K()),n;if(n===6)throw Error(R(345));return t.finishedWork=t.current.alternate,t.finishedLanes=e,He(t,bt,oe),Tt(t,K()),null}function Jl(t,e){var n=W;W|=1;try{return t(e)}finally{W=n,W===0&&(Ln=K()+500,as&&Be())}}function rn(t){Te!==null&&Te.tag===0&&!(W&6)&&Tn();var e=W;W|=1;var n=Dt.transition,r=D;try{if(Dt.transition=null,D=1,t)return t()}finally{D=r,Dt.transition=n,W=e,!(W&6)&&Be()}}function Xl(){jt=wn.current,G(wn)}function Ye(t,e){t.finishedWork=null,t.finishedLanes=0;var n=t.timeoutHandle;if(n!==-1&&(t.timeoutHandle=-1,bp(n)),tt!==null)for(n=tt.return;n!==null;){var r=n;switch(Al(r),r.tag){case 1:r=r.type.childContextTypes,r!=null&&Li();break;case 3:_n(),G(Ct),G(gt),$l();break;case 5:Dl(r);break;case 4:_n();break;case 13:G(Q);break;case 19:G(Q);break;case 10:Ol(r.type._context);break;case 22:case 23:Xl()}n=n.return}if(at=t,tt=t=ze(t.current,null),ut=jt=e,nt=0,_r=null,Ql=cs=nn=0,bt=dr=null,Ge!==null){for(e=0;e<Ge.length;e++)if(n=Ge[e],r=n.interleaved,r!==null){n.interleaved=null;var i=r.next,s=n.pending;if(s!==null){var a=s.next;s.next=i,r.next=a}n.pending=r}Ge=null}return t}function qh(t,e){do{var n=tt;try{if(Ll(),gi.current=Ui,Bi){for(var r=Y.memoizedState;r!==null;){var i=r.queue;i!==null&&(i.pending=null),r=r.next}Bi=!1}if(en=0,it=et=Y=null,hr=!1,jr=0,ql.current=null,n===null||n.return===null){nt=1,_r=e,tt=null;break}t:{var s=t,a=n.return,l=n,o=e;if(e=ut,l.flags|=32768,o!==null&&typeof o=="object"&&typeof o.then=="function"){var u=o,d=l,p=d.tag;if(!(d.mode&1)&&(p===0||p===11||p===15)){var g=d.alternate;g?(d.updateQueue=g.updateQueue,d.memoizedState=g.memoizedState,d.lanes=g.lanes):(d.updateQueue=null,d.memoizedState=null)}var v=lu(a);if(v!==null){v.flags&=-257,ou(v,a,l,s,e),v.mode&1&&au(s,u,e),e=v,o=u;var x=e.updateQueue;if(x===null){var y=new Set;y.add(o),e.updateQueue=y}else x.add(o);break t}else{if(!(e&1)){au(s,u,e),Kl();break t}o=Error(R(426))}}else if(q&&l.mode&1){var I=lu(a);if(I!==null){!(I.flags&65536)&&(I.flags|=256),ou(I,a,l,s,e),_l(Pn(o,l));break t}}s=o=Pn(o,l),nt!==4&&(nt=2),dr===null?dr=[s]:dr.push(s),s=a;do{switch(s.tag){case 3:s.flags|=65536,e&=-e,s.lanes|=e;var h=Nh(s,o,e);Zo(s,h);break t;case 1:l=o;var c=s.type,f=s.stateNode;if(!(s.flags&128)&&(typeof c.getDerivedStateFromError=="function"||f!==null&&typeof f.componentDidCatch=="function"&&(Le===null||!Le.has(f)))){s.flags|=65536,e&=-e,s.lanes|=e;var m=Ah(s,l,e);Zo(s,m);break t}}s=s.return}while(s!==null)}Jh(n)}catch(w){e=w,tt===n&&n!==null&&(tt=n=n.return);continue}break}while(1)}function Qh(){var t=Hi.current;return Hi.current=Ui,t===null?Ui:t}function Kl(){(nt===0||nt===3||nt===2)&&(nt=4),at===null||!(nn&268435455)&&!(cs&268435455)||Ce(at,ut)}function qi(t,e){var n=W;W|=2;var r=Qh();(at!==t||ut!==e)&&(oe=null,Ye(t,e));do try{Qp();break}catch(i){qh(t,i)}while(1);if(Ll(),W=n,Hi.current=r,tt!==null)throw Error(R(261));return at=null,ut=0,nt}function Qp(){for(;tt!==null;)Yh(tt)}function Yp(){for(;tt!==null&&!wd();)Yh(tt)}function Yh(t){var e=Kh(t.alternate,t,jt);t.memoizedProps=t.pendingProps,e===null?Jh(t):tt=e,ql.current=null}function Jh(t){var e=t;do{var n=e.alternate;if(t=e.return,e.flags&32768){if(n=Bp(n,e),n!==null){n.flags&=32767,tt=n;return}if(t!==null)t.flags|=32768,t.subtreeFlags=0,t.deletions=null;else{nt=6,tt=null;return}}else if(n=Fp(n,e,jt),n!==null){tt=n;return}if(e=e.sibling,e!==null){tt=e;return}tt=e=t}while(e!==null);nt===0&&(nt=5)}function He(t,e,n){var r=D,i=Dt.transition;try{Dt.transition=null,D=1,Jp(t,e,n,r)}finally{Dt.transition=i,D=r}return null}function Jp(t,e,n,r){do Tn();while(Te!==null);if(W&6)throw Error(R(327));n=t.finishedWork;var i=t.finishedLanes;if(n===null)return null;if(t.finishedWork=null,t.finishedLanes=0,n===t.current)throw Error(R(177));t.callbackNode=null,t.callbackPriority=0;var s=n.lanes|n.childLanes;if(Nd(t,s),t===at&&(tt=at=null,ut=0),!(n.subtreeFlags&2064)&&!(n.flags&2064)||si||(si=!0,Zh(Ii,function(){return Tn(),null})),s=(n.flags&15990)!==0,n.subtreeFlags&15990||s){s=Dt.transition,Dt.transition=null;var a=D;D=1;var l=W;W|=4,ql.current=null,Hp(t,n),Hh(n,t),mp(Ta),Ni=!!Ea,Ta=Ea=null,t.current=n,Vp(n),Rd(),W=l,D=a,Dt.transition=s}else t.current=n;if(si&&(si=!1,Te=t,Gi=i),s=t.pendingLanes,s===0&&(Le=null),kd(n.stateNode),Tt(t,K()),e!==null)for(r=t.onRecoverableError,n=0;n<e.length;n++)i=e[n],r(i.value,{componentStack:i.stack,digest:i.digest});if(Vi)throw Vi=!1,t=qa,qa=null,t;return Gi&1&&t.tag!==0&&Tn(),s=t.pendingLanes,s&1?t===Qa?pr++:(pr=0,Qa=t):pr=0,Be(),null}function Tn(){if(Te!==null){var t=jc(Gi),e=Dt.transition,n=D;try{if(Dt.transition=null,D=16>t?16:t,Te===null)var r=!1;else{if(t=Te,Te=null,Gi=0,W&6)throw Error(R(331));var i=W;for(W|=4,T=t.current;T!==null;){var s=T,a=s.child;if(T.flags&16){var l=s.deletions;if(l!==null){for(var o=0;o<l.length;o++){var u=l[o];for(T=u;T!==null;){var d=T;switch(d.tag){case 0:case 11:case 15:fr(8,d,s)}var p=d.child;if(p!==null)p.return=d,T=p;else for(;T!==null;){d=T;var g=d.sibling,v=d.return;if(Fh(d),d===u){T=null;break}if(g!==null){g.return=v,T=g;break}T=v}}}var x=s.alternate;if(x!==null){var y=x.child;if(y!==null){x.child=null;do{var I=y.sibling;y.sibling=null,y=I}while(y!==null)}}T=s}}if(s.subtreeFlags&2064&&a!==null)a.return=s,T=a;else t:for(;T!==null;){if(s=T,s.flags&2048)switch(s.tag){case 0:case 11:case 15:fr(9,s,s.return)}var h=s.sibling;if(h!==null){h.return=s.return,T=h;break t}T=s.return}}var c=t.current;for(T=c;T!==null;){a=T;var f=a.child;if(a.subtreeFlags&2064&&f!==null)f.return=a,T=f;else t:for(a=c;T!==null;){if(l=T,l.flags&2048)try{switch(l.tag){case 0:case 11:case 15:us(9,l)}}catch(w){X(l,l.return,w)}if(l===a){T=null;break t}var m=l.sibling;if(m!==null){m.return=l.return,T=m;break t}T=l.return}}if(W=i,Be(),ie&&typeof ie.onPostCommitFiberRoot=="function")try{ie.onPostCommitFiberRoot(es,t)}catch{}r=!0}return r}finally{D=n,Dt.transition=e}}return!1}function Ru(t,e,n){e=Pn(n,e),e=Nh(t,e,1),t=Pe(t,e,1),e=xt(),t!==null&&(Wr(t,1,e),Tt(t,e))}function X(t,e,n){if(t.tag===3)Ru(t,t,n);else for(;e!==null;){if(e.tag===3){Ru(e,t,n);break}else if(e.tag===1){var r=e.stateNode;if(typeof e.type.getDerivedStateFromError=="function"||typeof r.componentDidCatch=="function"&&(Le===null||!Le.has(r))){t=Pn(n,t),t=Ah(e,t,1),e=Pe(e,t,1),t=xt(),e!==null&&(Wr(e,1,t),Tt(e,t));break}}e=e.return}}function Xp(t,e,n){var r=t.pingCache;r!==null&&r.delete(e),e=xt(),t.pingedLanes|=t.suspendedLanes&n,at===t&&(ut&n)===n&&(nt===4||nt===3&&(ut&130023424)===ut&&500>K()-Yl?Ye(t,0):Ql|=n),Tt(t,e)}function Xh(t,e){e===0&&(t.mode&1?(e=Yr,Yr<<=1,!(Yr&130023424)&&(Yr=4194304)):e=1);var n=xt();t=me(t,e),t!==null&&(Wr(t,e,n),Tt(t,n))}function Kp(t){var e=t.memoizedState,n=0;e!==null&&(n=e.retryLane),Xh(t,n)}function Zp(t,e){var n=0;switch(t.tag){case 13:var r=t.stateNode,i=t.memoizedState;i!==null&&(n=i.retryLane);break;case 19:r=t.stateNode;break;default:throw Error(R(314))}r!==null&&r.delete(e),Xh(t,n)}var Kh;Kh=function(t,e,n){if(t!==null)if(t.memoizedProps!==e.pendingProps||Ct.current)kt=!0;else{if(!(t.lanes&n)&&!(e.flags&128))return kt=!1,$p(t,e,n);kt=!!(t.flags&131072)}else kt=!1,q&&e.flags&1048576&&eh(e,Wi,e.index);switch(e.lanes=0,e.tag){case 2:var r=e.type;vi(t,e),t=e.pendingProps;var i=jn(e,gt.current);En(e,n),i=Bl(null,e,r,t,i,n);var s=Ul();return e.flags|=1,typeof i=="object"&&i!==null&&typeof i.render=="function"&&i.$$typeof===void 0?(e.tag=1,e.memoizedState=null,e.updateQueue=null,Et(r)?(s=!0,Oi(e)):s=!1,e.memoizedState=i.state!==null&&i.state!==void 0?i.state:null,Wl(e),i.updater=ls,e.stateNode=i,i._reactInternals=e,za(e,r,t,n),e=Da(null,e,r,!0,s,n)):(e.tag=0,q&&s&&Nl(e),vt(null,e,i,n),e=e.child),e;case 16:r=e.elementType;t:{switch(vi(t,e),t=e.pendingProps,i=r._init,r=i(r._payload),e.type=r,i=e.tag=eg(r),t=Vt(r,t),i){case 0:e=Ma(null,e,r,t,n);break t;case 1:e=hu(null,e,r,t,n);break t;case 11:e=uu(null,e,r,t,n);break t;case 14:e=cu(null,e,r,Vt(r.type,t),n);break t}throw Error(R(306,r,""))}return e;case 0:return r=e.type,i=e.pendingProps,i=e.elementType===r?i:Vt(r,i),Ma(t,e,r,i,n);case 1:return r=e.type,i=e.pendingProps,i=e.elementType===r?i:Vt(r,i),hu(t,e,r,i,n);case 3:t:{if(Oh(e),t===null)throw Error(R(387));r=e.pendingProps,s=e.memoizedState,i=s.element,sh(t,e),$i(e,r,null,n);var a=e.memoizedState;if(r=a.element,s.isDehydrated)if(s={element:r,isDehydrated:!1,cache:a.cache,pendingSuspenseBoundaries:a.pendingSuspenseBoundaries,transitions:a.transitions},e.updateQueue.baseState=s,e.memoizedState=s,e.flags&256){i=Pn(Error(R(423)),e),e=fu(t,e,r,n,i);break t}else if(r!==i){i=Pn(Error(R(424)),e),e=fu(t,e,r,n,i);break t}else for(Nt=_e(e.stateNode.containerInfo.firstChild),At=e,q=!0,qt=null,n=uh(e,null,r,n),e.child=n;n;)n.flags=n.flags&-3|4096,n=n.sibling;else{if(Nn(),r===i){e=ve(t,e,n);break t}vt(t,e,r,n)}e=e.child}return e;case 5:return ch(e),t===null&&Pa(e),r=e.type,i=e.pendingProps,s=t!==null?t.memoizedProps:null,a=i.children,Ia(r,i)?a=null:s!==null&&Ia(r,s)&&(e.flags|=32),Lh(t,e),vt(t,e,a,n),e.child;case 6:return t===null&&Pa(e),null;case 13:return zh(t,e,n);case 4:return Ml(e,e.stateNode.containerInfo),r=e.pendingProps,t===null?e.child=An(e,null,r,n):vt(t,e,r,n),e.child;case 11:return r=e.type,i=e.pendingProps,i=e.elementType===r?i:Vt(r,i),uu(t,e,r,i,n);case 7:return vt(t,e,e.pendingProps,n),e.child;case 8:return vt(t,e,e.pendingProps.children,n),e.child;case 12:return vt(t,e,e.pendingProps.children,n),e.child;case 10:t:{if(r=e.type._context,i=e.pendingProps,s=e.memoizedProps,a=i.value,B(Mi,r._currentValue),r._currentValue=a,s!==null)if(Kt(s.value,a)){if(s.children===i.children&&!Ct.current){e=ve(t,e,n);break t}}else for(s=e.child,s!==null&&(s.return=e);s!==null;){var l=s.dependencies;if(l!==null){a=s.child;for(var o=l.firstContext;o!==null;){if(o.context===r){if(s.tag===1){o=de(-1,n&-n),o.tag=2;var u=s.updateQueue;if(u!==null){u=u.shared;var d=u.pending;d===null?o.next=o:(o.next=d.next,d.next=o),u.pending=o}}s.lanes|=n,o=s.alternate,o!==null&&(o.lanes|=n),La(s.return,n,e),l.lanes|=n;break}o=o.next}}else if(s.tag===10)a=s.type===e.type?null:s.child;else if(s.tag===18){if(a=s.return,a===null)throw Error(R(341));a.lanes|=n,l=a.alternate,l!==null&&(l.lanes|=n),La(a,n,e),a=s.sibling}else a=s.child;if(a!==null)a.return=s;else for(a=s;a!==null;){if(a===e){a=null;break}if(s=a.sibling,s!==null){s.return=a.return,a=s;break}a=a.return}s=a}vt(t,e,i.children,n),e=e.child}return e;case 9:return i=e.type,r=e.pendingProps.children,En(e,n),i=$t(i),r=r(i),e.flags|=1,vt(t,e,r,n),e.child;case 14:return r=e.type,i=Vt(r,e.pendingProps),i=Vt(r.type,i),cu(t,e,r,i,n);case 15:return _h(t,e,e.type,e.pendingProps,n);case 17:return r=e.type,i=e.pendingProps,i=e.elementType===r?i:Vt(r,i),vi(t,e),e.tag=1,Et(r)?(t=!0,Oi(e)):t=!1,En(e,n),lh(e,r,i),za(e,r,i,n),Da(null,e,r,!0,t,n);case 19:return Wh(t,e,n);case 22:return Ph(t,e,n)}throw Error(R(156,e.tag))};function Zh(t,e){return Cc(t,e)}function tg(t,e,n,r){this.tag=t,this.key=n,this.sibling=this.child=this.return=this.stateNode=this.type=this.elementType=null,this.index=0,this.ref=null,this.pendingProps=e,this.dependencies=this.memoizedState=this.updateQueue=this.memoizedProps=null,this.mode=r,this.subtreeFlags=this.flags=0,this.deletions=null,this.childLanes=this.lanes=0,this.alternate=null}function Mt(t,e,n,r){return new tg(t,e,n,r)}function Zl(t){return t=t.prototype,!(!t||!t.isReactComponent)}function eg(t){if(typeof t=="function")return Zl(t)?1:0;if(t!=null){if(t=t.$$typeof,t===xl)return 11;if(t===yl)return 14}return 2}function ze(t,e){var n=t.alternate;return n===null?(n=Mt(t.tag,e,t.key,t.mode),n.elementType=t.elementType,n.type=t.type,n.stateNode=t.stateNode,n.alternate=t,t.alternate=n):(n.pendingProps=e,n.type=t.type,n.flags=0,n.subtreeFlags=0,n.deletions=null),n.flags=t.flags&14680064,n.childLanes=t.childLanes,n.lanes=t.lanes,n.child=t.child,n.memoizedProps=t.memoizedProps,n.memoizedState=t.memoizedState,n.updateQueue=t.updateQueue,e=t.dependencies,n.dependencies=e===null?null:{lanes:e.lanes,firstContext:e.firstContext},n.sibling=t.sibling,n.index=t.index,n.ref=t.ref,n}function wi(t,e,n,r,i,s){var a=2;if(r=t,typeof t=="function")Zl(t)&&(a=1);else if(typeof t=="string")a=5;else t:switch(t){case cn:return Je(n.children,i,s,e);case vl:a=8,i|=8;break;case aa:return t=Mt(12,n,e,i|2),t.elementType=aa,t.lanes=s,t;case la:return t=Mt(13,n,e,i),t.elementType=la,t.lanes=s,t;case oa:return t=Mt(19,n,e,i),t.elementType=oa,t.lanes=s,t;case oc:return hs(n,i,s,e);default:if(typeof t=="object"&&t!==null)switch(t.$$typeof){case ac:a=10;break t;case lc:a=9;break t;case xl:a=11;break t;case yl:a=14;break t;case Se:a=16,r=null;break t}throw Error(R(130,t==null?t:typeof t,""))}return e=Mt(a,n,e,i),e.elementType=t,e.type=r,e.lanes=s,e}function Je(t,e,n,r){return t=Mt(7,t,r,e),t.lanes=n,t}function hs(t,e,n,r){return t=Mt(22,t,r,e),t.elementType=oc,t.lanes=n,t.stateNode={isHidden:!1},t}function Js(t,e,n){return t=Mt(6,t,null,e),t.lanes=n,t}function Xs(t,e,n){return e=Mt(4,t.children!==null?t.children:[],t.key,e),e.lanes=n,e.stateNode={containerInfo:t.containerInfo,pendingChildren:null,implementation:t.implementation},e}function ng(t,e,n,r,i){this.tag=e,this.containerInfo=t,this.finishedWork=this.pingCache=this.current=this.pendingChildren=null,this.timeoutHandle=-1,this.callbackNode=this.pendingContext=this.context=null,this.callbackPriority=0,this.eventTimes=As(0),this.expirationTimes=As(-1),this.entangledLanes=this.finishedLanes=this.mutableReadLanes=this.expiredLanes=this.pingedLanes=this.suspendedLanes=this.pendingLanes=0,this.entanglements=As(0),this.identifierPrefix=r,this.onRecoverableError=i,this.mutableSourceEagerHydrationData=null}function to(t,e,n,r,i,s,a,l,o){return t=new ng(t,e,n,l,o),e===1?(e=1,s===!0&&(e|=8)):e=0,s=Mt(3,null,null,e),t.current=s,s.stateNode=t,s.memoizedState={element:r,isDehydrated:n,cache:null,transitions:null,pendingSuspenseBoundaries:null},Wl(s),t}function rg(t,e,n){var r=3<arguments.length&&arguments[3]!==void 0?arguments[3]:null;return{$$typeof:un,key:r==null?null:""+r,children:t,containerInfo:e,implementation:n}}function tf(t){if(!t)return De;t=t._reactInternals;t:{if(an(t)!==t||t.tag!==1)throw Error(R(170));var e=t;do{switch(e.tag){case 3:e=e.stateNode.context;break t;case 1:if(Et(e.type)){e=e.stateNode.__reactInternalMemoizedMergedChildContext;break t}}e=e.return}while(e!==null);throw Error(R(171))}if(t.tag===1){var n=t.type;if(Et(n))return Zc(t,n,e)}return e}function ef(t,e,n,r,i,s,a,l,o){return t=to(n,r,!0,t,i,s,a,l,o),t.context=tf(null),n=t.current,r=xt(),i=Oe(n),s=de(r,i),s.callback=e??null,Pe(n,s,i),t.current.lanes=i,Wr(t,i,r),Tt(t,r),t}function fs(t,e,n,r){var i=e.current,s=xt(),a=Oe(i);return n=tf(n),e.context===null?e.context=n:e.pendingContext=n,e=de(s,a),e.payload={element:t},r=r===void 0?null:r,r!==null&&(e.callback=r),t=Pe(i,e,a),t!==null&&(Jt(t,i,a,s),pi(t,i,a)),a}function Qi(t){if(t=t.current,!t.child)return null;switch(t.child.tag){case 5:return t.child.stateNode;default:return t.child.stateNode}}function Su(t,e){if(t=t.memoizedState,t!==null&&t.dehydrated!==null){var n=t.retryLane;t.retryLane=n!==0&&n<e?n:e}}function eo(t,e){Su(t,e),(t=t.alternate)&&Su(t,e)}function ig(){return null}var nf=typeof reportError=="function"?reportError:function(t){console.error(t)};function no(t){this._internalRoot=t}ds.prototype.render=no.prototype.render=function(t){var e=this._internalRoot;if(e===null)throw Error(R(409));fs(t,e,null,null)};ds.prototype.unmount=no.prototype.unmount=function(){var t=this._internalRoot;if(t!==null){this._internalRoot=null;var e=t.containerInfo;rn(function(){fs(null,t,null,null)}),e[ge]=null}};function ds(t){this._internalRoot=t}ds.prototype.unstable_scheduleHydration=function(t){if(t){var e=_c();t={blockedOn:null,target:t,priority:e};for(var n=0;n<ke.length&&e!==0&&e<ke[n].priority;n++);ke.splice(n,0,t),n===0&&Lc(t)}};function ro(t){return!(!t||t.nodeType!==1&&t.nodeType!==9&&t.nodeType!==11)}function ps(t){return!(!t||t.nodeType!==1&&t.nodeType!==9&&t.nodeType!==11&&(t.nodeType!==8||t.nodeValue!==" react-mount-point-unstable "))}function bu(){}function sg(t,e,n,r,i){if(i){if(typeof r=="function"){var s=r;r=function(){var u=Qi(a);s.call(u)}}var a=ef(e,r,t,0,null,!1,!1,"",bu);return t._reactRootContainer=a,t[ge]=a.current,kr(t.nodeType===8?t.parentNode:t),rn(),a}for(;i=t.lastChild;)t.removeChild(i);if(typeof r=="function"){var l=r;r=function(){var u=Qi(o);l.call(u)}}var o=to(t,0,!1,null,null,!1,!1,"",bu);return t._reactRootContainer=o,t[ge]=o.current,kr(t.nodeType===8?t.parentNode:t),rn(function(){fs(e,o,n,r)}),o}function gs(t,e,n,r,i){var s=n._reactRootContainer;if(s){var a=s;if(typeof i=="function"){var l=i;i=function(){var o=Qi(a);l.call(o)}}fs(e,a,t,i)}else a=sg(n,e,t,i,r);return Qi(a)}Nc=function(t){switch(t.tag){case 3:var e=t.stateNode;if(e.current.memoizedState.isDehydrated){var n=rr(e.pendingLanes);n!==0&&(Sl(e,n|1),Tt(e,K()),!(W&6)&&(Ln=K()+500,Be()))}break;case 13:rn(function(){var r=me(t,1);if(r!==null){var i=xt();Jt(r,t,1,i)}}),eo(t,1)}};bl=function(t){if(t.tag===13){var e=me(t,134217728);if(e!==null){var n=xt();Jt(e,t,134217728,n)}eo(t,134217728)}};Ac=function(t){if(t.tag===13){var e=Oe(t),n=me(t,e);if(n!==null){var r=xt();Jt(n,t,e,r)}eo(t,e)}};_c=function(){return D};Pc=function(t,e){var n=D;try{return D=t,e()}finally{D=n}};xa=function(t,e,n){switch(e){case"input":if(ha(t,n),e=n.name,n.type==="radio"&&e!=null){for(n=t;n.parentNode;)n=n.parentNode;for(n=n.querySelectorAll("input[name="+JSON.stringify(""+e)+'][type="radio"]'),e=0;e<n.length;e++){var r=n[e];if(r!==t&&r.form===t.form){var i=ss(r);if(!i)throw Error(R(90));cc(r),ha(r,i)}}}break;case"textarea":fc(t,n);break;case"select":e=n.value,e!=null&&Sn(t,!!n.multiple,e,!1)}};yc=Jl;wc=rn;var ag={usingClientEntryPoint:!1,Events:[Dr,pn,ss,vc,xc,Jl]},tr={findFiberByHostInstance:Ve,bundleType:0,version:"18.2.0",rendererPackageName:"react-dom"},lg={bundleType:tr.bundleType,version:tr.version,rendererPackageName:tr.rendererPackageName,rendererConfig:tr.rendererConfig,overrideHookState:null,overrideHookStateDeletePath:null,overrideHookStateRenamePath:null,overrideProps:null,overridePropsDeletePath:null,overridePropsRenamePath:null,setErrorHandler:null,setSuspenseHandler:null,scheduleUpdate:null,currentDispatcherRef:xe.ReactCurrentDispatcher,findHostInstanceByFiber:function(t){return t=bc(t),t===null?null:t.stateNode},findFiberByHostInstance:tr.findFiberByHostInstance||ig,findHostInstancesForRefresh:null,scheduleRefresh:null,scheduleRoot:null,setRefreshHandler:null,getCurrentFiber:null,reconcilerVersion:"18.2.0-next-9e3b772b8-20220608"};if(typeof __REACT_DEVTOOLS_GLOBAL_HOOK__<"u"){var ai=__REACT_DEVTOOLS_GLOBAL_HOOK__;if(!ai.isDisabled&&ai.supportsFiber)try{es=ai.inject(lg),ie=ai}catch{}}Pt.__SECRET_INTERNALS_DO_NOT_USE_OR_YOU_WILL_BE_FIRED=ag;Pt.createPortal=function(t,e){var n=2<arguments.length&&arguments[2]!==void 0?arguments[2]:null;if(!ro(e))throw Error(R(200));return rg(t,e,null,n)};Pt.createRoot=function(t,e){if(!ro(t))throw Error(R(299));var n=!1,r="",i=nf;return e!=null&&(e.unstable_strictMode===!0&&(n=!0),e.identifierPrefix!==void 0&&(r=e.identifierPrefix),e.onRecoverableError!==void 0&&(i=e.onRecoverableError)),e=to(t,1,!1,null,null,n,!1,r,i),t[ge]=e.current,kr(t.nodeType===8?t.parentNode:t),new no(e)};Pt.findDOMNode=function(t){if(t==null)return null;if(t.nodeType===1)return t;var e=t._reactInternals;if(e===void 0)throw typeof t.render=="function"?Error(R(188)):(t=Object.keys(t).join(","),Error(R(268,t)));return t=bc(e),t=t===null?null:t.stateNode,t};Pt.flushSync=function(t){return rn(t)};Pt.hydrate=function(t,e,n){if(!ps(e))throw Error(R(200));return gs(null,t,e,!0,n)};Pt.hydrateRoot=function(t,e,n){if(!ro(t))throw Error(R(405));var r=n!=null&&n.hydratedSources||null,i=!1,s="",a=nf;if(n!=null&&(n.unstable_strictMode===!0&&(i=!0),n.identifierPrefix!==void 0&&(s=n.identifierPrefix),n.onRecoverableError!==void 0&&(a=n.onRecoverableError)),e=ef(e,null,t,1,n??null,i,!1,s,a),t[ge]=e.current,kr(t),r)for(t=0;t<r.length;t++)n=r[t],i=n._getVersion,i=i(n._source),e.mutableSourceEagerHydrationData==null?e.mutableSourceEagerHydrationData=[n,i]:e.mutableSourceEagerHydrationData.push(n,i);return new ds(e)};Pt.render=function(t,e,n){if(!ps(e))throw Error(R(200));return gs(null,t,e,!1,n)};Pt.unmountComponentAtNode=function(t){if(!ps(t))throw Error(R(40));return t._reactRootContainer?(rn(function(){gs(null,null,t,!1,function(){t._reactRootContainer=null,t[ge]=null})}),!0):!1};Pt.unstable_batchedUpdates=Jl;Pt.unstable_renderSubtreeIntoContainer=function(t,e,n,r){if(!ps(n))throw Error(R(200));if(t==null||t._reactInternals===void 0)throw Error(R(38));return gs(t,e,n,!1,r)};Pt.version="18.2.0-next-9e3b772b8-20220608";function rf(){if(!(typeof __REACT_DEVTOOLS_GLOBAL_HOOK__>"u"||typeof __REACT_DEVTOOLS_GLOBAL_HOOK__.checkDCE!="function"))try{__REACT_DEVTOOLS_GLOBAL_HOOK__.checkDCE(rf)}catch(t){console.error(t)}}rf(),ec.exports=Pt;var og=ec.exports,ku=og;ia.createRoot=ku.createRoot,ia.hydrateRoot=ku.hydrateRoot;/**
 * @remix-run/router v1.11.0
 *
 * Copyright (c) Remix Software Inc.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE.md file in the root directory of this source tree.
 *
 * @license MIT
 */function Pr(){return Pr=Object.assign?Object.assign.bind():function(t){for(var e=1;e<arguments.length;e++){var n=arguments[e];for(var r in n)Object.prototype.hasOwnProperty.call(n,r)&&(t[r]=n[r])}return t},Pr.apply(this,arguments)}var Ie;(function(t){t.Pop="POP",t.Push="PUSH",t.Replace="REPLACE"})(Ie||(Ie={}));const Cu="popstate";function ug(t){t===void 0&&(t={});function e(r,i){let{pathname:s,search:a,hash:l}=r.location;return Xa("",{pathname:s,search:a,hash:l},i.state&&i.state.usr||null,i.state&&i.state.key||"default")}function n(r,i){return typeof i=="string"?i:sf(i)}return hg(e,n,null,t)}function rt(t,e){if(t===!1||t===null||typeof t>"u")throw new Error(e)}function io(t,e){if(!t){typeof console<"u"&&console.warn(e);try{throw new Error(e)}catch{}}}function cg(){return Math.random().toString(36).substr(2,8)}function Eu(t,e){return{usr:t.state,key:t.key,idx:e}}function Xa(t,e,n,r){return n===void 0&&(n=null),Pr({pathname:typeof t=="string"?t:t.pathname,search:"",hash:""},typeof e=="string"?Un(e):e,{state:n,key:e&&e.key||r||cg()})}function sf(t){let{pathname:e="/",search:n="",hash:r=""}=t;return n&&n!=="?"&&(e+=n.charAt(0)==="?"?n:"?"+n),r&&r!=="#"&&(e+=r.charAt(0)==="#"?r:"#"+r),e}function Un(t){let e={};if(t){let n=t.indexOf("#");n>=0&&(e.hash=t.substr(n),t=t.substr(0,n));let r=t.indexOf("?");r>=0&&(e.search=t.substr(r),t=t.substr(0,r)),t&&(e.pathname=t)}return e}function hg(t,e,n,r){r===void 0&&(r={});let{window:i=document.defaultView,v5Compat:s=!1}=r,a=i.history,l=Ie.Pop,o=null,u=d();u==null&&(u=0,a.replaceState(Pr({},a.state,{idx:u}),""));function d(){return(a.state||{idx:null}).idx}function p(){l=Ie.Pop;let I=d(),h=I==null?null:I-u;u=I,o&&o({action:l,location:y.location,delta:h})}function g(I,h){l=Ie.Push;let c=Xa(y.location,I,h);n&&n(c,I),u=d()+1;let f=Eu(c,u),m=y.createHref(c);try{a.pushState(f,"",m)}catch(w){if(w instanceof DOMException&&w.name==="DataCloneError")throw w;i.location.assign(m)}s&&o&&o({action:l,location:y.location,delta:1})}function v(I,h){l=Ie.Replace;let c=Xa(y.location,I,h);n&&n(c,I),u=d();let f=Eu(c,u),m=y.createHref(c);a.replaceState(f,"",m),s&&o&&o({action:l,location:y.location,delta:0})}function x(I){let h=i.location.origin!=="null"?i.location.origin:i.location.href,c=typeof I=="string"?I:sf(I);return rt(h,"No window.location.(origin|href) available to create URL for href: "+c),new URL(c,h)}let y={get action(){return l},get location(){return t(i,a)},listen(I){if(o)throw new Error("A history only accepts one active listener");return i.addEventListener(Cu,p),o=I,()=>{i.removeEventListener(Cu,p),o=null}},createHref(I){return e(i,I)},createURL:x,encodeLocation(I){let h=x(I);return{pathname:h.pathname,search:h.search,hash:h.hash}},push:g,replace:v,go(I){return a.go(I)}};return y}var Tu;(function(t){t.data="data",t.deferred="deferred",t.redirect="redirect",t.error="error"})(Tu||(Tu={}));function fg(t,e,n){n===void 0&&(n="/");let r=typeof e=="string"?Un(e):e,i=of(r.pathname||"/",n);if(i==null)return null;let s=af(t);dg(s);let a=null;for(let l=0;a==null&&l<s.length;++l)a=Sg(s[l],Cg(i));return a}function af(t,e,n,r){e===void 0&&(e=[]),n===void 0&&(n=[]),r===void 0&&(r="");let i=(s,a,l)=>{let o={relativePath:l===void 0?s.path||"":l,caseSensitive:s.caseSensitive===!0,childrenIndex:a,route:s};o.relativePath.startsWith("/")&&(rt(o.relativePath.startsWith(r),'Absolute route path "'+o.relativePath+'" nested under path '+('"'+r+'" is not valid. An absolute child route path ')+"must start with the combined path of all its parent routes."),o.relativePath=o.relativePath.slice(r.length));let u=Xe([r,o.relativePath]),d=n.concat(o);s.children&&s.children.length>0&&(rt(s.index!==!0,"Index routes must not have child routes. Please remove "+('all child routes from route path "'+u+'".')),af(s.children,e,d,u)),!(s.path==null&&!s.index)&&e.push({path:u,score:wg(u,s.index),routesMeta:d})};return t.forEach((s,a)=>{var l;if(s.path===""||!((l=s.path)!=null&&l.includes("?")))i(s,a);else for(let o of lf(s.path))i(s,a,o)}),e}function lf(t){let e=t.split("/");if(e.length===0)return[];let[n,...r]=e,i=n.endsWith("?"),s=n.replace(/\?$/,"");if(r.length===0)return i?[s,""]:[s];let a=lf(r.join("/")),l=[];return l.push(...a.map(o=>o===""?s:[s,o].join("/"))),i&&l.push(...a),l.map(o=>t.startsWith("/")&&o===""?"/":o)}function dg(t){t.sort((e,n)=>e.score!==n.score?n.score-e.score:Rg(e.routesMeta.map(r=>r.childrenIndex),n.routesMeta.map(r=>r.childrenIndex)))}const pg=/^:\w+$/,gg=3,mg=2,vg=1,xg=10,yg=-2,Iu=t=>t==="*";function wg(t,e){let n=t.split("/"),r=n.length;return n.some(Iu)&&(r+=yg),e&&(r+=mg),n.filter(i=>!Iu(i)).reduce((i,s)=>i+(pg.test(s)?gg:s===""?vg:xg),r)}function Rg(t,e){return t.length===e.length&&t.slice(0,-1).every((r,i)=>r===e[i])?t[t.length-1]-e[e.length-1]:0}function Sg(t,e){let{routesMeta:n}=t,r={},i="/",s=[];for(let a=0;a<n.length;++a){let l=n[a],o=a===n.length-1,u=i==="/"?e:e.slice(i.length)||"/",d=bg({path:l.relativePath,caseSensitive:l.caseSensitive,end:o},u);if(!d)return null;Object.assign(r,d.params);let p=l.route;s.push({params:r,pathname:Xe([i,d.pathname]),pathnameBase:Ag(Xe([i,d.pathnameBase])),route:p}),d.pathnameBase!=="/"&&(i=Xe([i,d.pathnameBase]))}return s}function bg(t,e){typeof t=="string"&&(t={path:t,caseSensitive:!1,end:!0});let[n,r]=kg(t.path,t.caseSensitive,t.end),i=e.match(n);if(!i)return null;let s=i[0],a=s.replace(/(.)\/+$/,"$1"),l=i.slice(1);return{params:r.reduce((u,d,p)=>{let{paramName:g,isOptional:v}=d;if(g==="*"){let y=l[p]||"";a=s.slice(0,s.length-y.length).replace(/(.)\/+$/,"$1")}const x=l[p];return v&&!x?u[g]=void 0:u[g]=Eg(x||"",g),u},{}),pathname:s,pathnameBase:a,pattern:t}}function kg(t,e,n){e===void 0&&(e=!1),n===void 0&&(n=!0),io(t==="*"||!t.endsWith("*")||t.endsWith("/*"),'Route path "'+t+'" will be treated as if it were '+('"'+t.replace(/\*$/,"/*")+'" because the `*` character must ')+"always follow a `/` in the pattern. To get rid of this warning, "+('please change the route path to "'+t.replace(/\*$/,"/*")+'".'));let r=[],i="^"+t.replace(/\/*\*?$/,"").replace(/^\/*/,"/").replace(/[\\.*+^${}|()[\]]/g,"\\$&").replace(/\/:(\w+)(\?)?/g,(a,l,o)=>(r.push({paramName:l,isOptional:o!=null}),o?"/?([^\\/]+)?":"/([^\\/]+)"));return t.endsWith("*")?(r.push({paramName:"*"}),i+=t==="*"||t==="/*"?"(.*)$":"(?:\\/(.+)|\\/*)$"):n?i+="\\/*$":t!==""&&t!=="/"&&(i+="(?:(?=\\/|$))"),[new RegExp(i,e?void 0:"i"),r]}function Cg(t){try{return decodeURI(t)}catch(e){return io(!1,'The URL path "'+t+'" could not be decoded because it is is a malformed URL segment. This is probably due to a bad percent '+("encoding ("+e+").")),t}}function Eg(t,e){try{return decodeURIComponent(t)}catch(n){return io(!1,'The value for the URL param "'+e+'" will not be decoded because'+(' the string "'+t+'" is a malformed URL segment. This is probably')+(" due to a bad percent encoding ("+n+").")),t}}function of(t,e){if(e==="/")return t;if(!t.toLowerCase().startsWith(e.toLowerCase()))return null;let n=e.endsWith("/")?e.length-1:e.length,r=t.charAt(n);return r&&r!=="/"?null:t.slice(n)||"/"}function Tg(t,e){e===void 0&&(e="/");let{pathname:n,search:r="",hash:i=""}=typeof t=="string"?Un(t):t;return{pathname:n?n.startsWith("/")?n:Ig(n,e):e,search:_g(r),hash:Pg(i)}}function Ig(t,e){let n=e.replace(/\/+$/,"").split("/");return t.split("/").forEach(i=>{i===".."?n.length>1&&n.pop():i!=="."&&n.push(i)}),n.length>1?n.join("/"):"/"}function Ks(t,e,n,r){return"Cannot include a '"+t+"' character in a manually specified "+("`to."+e+"` field ["+JSON.stringify(r)+"].  Please separate it out to the ")+("`to."+n+"` field. Alternatively you may provide the full path as ")+'a string in <Link to="..."> and the router will parse it for you.'}function jg(t){return t.filter((e,n)=>n===0||e.route.path&&e.route.path.length>0)}function Ng(t,e,n,r){r===void 0&&(r=!1);let i;typeof t=="string"?i=Un(t):(i=Pr({},t),rt(!i.pathname||!i.pathname.includes("?"),Ks("?","pathname","search",i)),rt(!i.pathname||!i.pathname.includes("#"),Ks("#","pathname","hash",i)),rt(!i.search||!i.search.includes("#"),Ks("#","search","hash",i)));let s=t===""||i.pathname==="",a=s?"/":i.pathname,l;if(r||a==null)l=n;else{let p=e.length-1;if(a.startsWith("..")){let g=a.split("/");for(;g[0]==="..";)g.shift(),p-=1;i.pathname=g.join("/")}l=p>=0?e[p]:"/"}let o=Tg(i,l),u=a&&a!=="/"&&a.endsWith("/"),d=(s||a===".")&&n.endsWith("/");return!o.pathname.endsWith("/")&&(u||d)&&(o.pathname+="/"),o}const Xe=t=>t.join("/").replace(/\/\/+/g,"/"),Ag=t=>t.replace(/\/+$/,"").replace(/^\/*/,"/"),_g=t=>!t||t==="?"?"":t.startsWith("?")?t:"?"+t,Pg=t=>!t||t==="#"?"":t.startsWith("#")?t:"#"+t;function Lg(t){return t!=null&&typeof t.status=="number"&&typeof t.statusText=="string"&&typeof t.internal=="boolean"&&"data"in t}const uf=["post","put","patch","delete"];new Set(uf);const Og=["get",...uf];new Set(Og);/**
 * React Router v6.18.0
 *
 * Copyright (c) Remix Software Inc.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE.md file in the root directory of this source tree.
 *
 * @license MIT
 */function Yi(){return Yi=Object.assign?Object.assign.bind():function(t){for(var e=1;e<arguments.length;e++){var n=arguments[e];for(var r in n)Object.prototype.hasOwnProperty.call(n,r)&&(t[r]=n[r])}return t},Yi.apply(this,arguments)}const so=k.createContext(null),zg=k.createContext(null),ms=k.createContext(null),vs=k.createContext(null),Hn=k.createContext({outlet:null,matches:[],isDataRoute:!1}),cf=k.createContext(null);function xs(){return k.useContext(vs)!=null}function ao(){return xs()||rt(!1),k.useContext(vs).location}function hf(t){k.useContext(ms).static||k.useLayoutEffect(t)}function Wg(){let{isDataRoute:t}=k.useContext(Hn);return t?Jg():Mg()}function Mg(){xs()||rt(!1);let t=k.useContext(so),{basename:e,navigator:n}=k.useContext(ms),{matches:r}=k.useContext(Hn),{pathname:i}=ao(),s=JSON.stringify(jg(r).map(o=>o.pathnameBase)),a=k.useRef(!1);return hf(()=>{a.current=!0}),k.useCallback(function(o,u){if(u===void 0&&(u={}),!a.current)return;if(typeof o=="number"){n.go(o);return}let d=Ng(o,JSON.parse(s),i,u.relative==="path");t==null&&e!=="/"&&(d.pathname=d.pathname==="/"?e:Xe([e,d.pathname])),(u.replace?n.replace:n.push)(d,u.state,u)},[e,n,s,i,t])}function Dg(t,e){return $g(t,e)}function $g(t,e,n){xs()||rt(!1);let{navigator:r}=k.useContext(ms),{matches:i}=k.useContext(Hn),s=i[i.length-1],a=s?s.params:{};s&&s.pathname;let l=s?s.pathnameBase:"/";s&&s.route;let o=ao(),u;if(e){var d;let y=typeof e=="string"?Un(e):e;l==="/"||(d=y.pathname)!=null&&d.startsWith(l)||rt(!1),u=y}else u=o;let p=u.pathname||"/",g=l==="/"?p:p.slice(l.length)||"/",v=fg(t,{pathname:g}),x=Vg(v&&v.map(y=>Object.assign({},y,{params:Object.assign({},a,y.params),pathname:Xe([l,r.encodeLocation?r.encodeLocation(y.pathname).pathname:y.pathname]),pathnameBase:y.pathnameBase==="/"?l:Xe([l,r.encodeLocation?r.encodeLocation(y.pathnameBase).pathname:y.pathnameBase])})),i,n);return e&&x?k.createElement(vs.Provider,{value:{location:Yi({pathname:"/",search:"",hash:"",state:null,key:"default"},u),navigationType:Ie.Pop}},x):x}function Fg(){let t=Yg(),e=Lg(t)?t.status+" "+t.statusText:t instanceof Error?t.message:JSON.stringify(t),n=t instanceof Error?t.stack:null,i={padding:"0.5rem",backgroundColor:"rgba(200,200,200, 0.5)"},s=null;return k.createElement(k.Fragment,null,k.createElement("h2",null,"Unexpected Application Error!"),k.createElement("h3",{style:{fontStyle:"italic"}},e),n?k.createElement("pre",{style:i},n):null,s)}const Bg=k.createElement(Fg,null);class Ug extends k.Component{constructor(e){super(e),this.state={location:e.location,revalidation:e.revalidation,error:e.error}}static getDerivedStateFromError(e){return{error:e}}static getDerivedStateFromProps(e,n){return n.location!==e.location||n.revalidation!=="idle"&&e.revalidation==="idle"?{error:e.error,location:e.location,revalidation:e.revalidation}:{error:e.error||n.error,location:n.location,revalidation:e.revalidation||n.revalidation}}componentDidCatch(e,n){console.error("React Router caught the following error during render",e,n)}render(){return this.state.error?k.createElement(Hn.Provider,{value:this.props.routeContext},k.createElement(cf.Provider,{value:this.state.error,children:this.props.component})):this.props.children}}function Hg(t){let{routeContext:e,match:n,children:r}=t,i=k.useContext(so);return i&&i.static&&i.staticContext&&(n.route.errorElement||n.route.ErrorBoundary)&&(i.staticContext._deepestRenderedBoundaryId=n.route.id),k.createElement(Hn.Provider,{value:e},r)}function Vg(t,e,n){var r;if(e===void 0&&(e=[]),n===void 0&&(n=null),t==null){var i;if((i=n)!=null&&i.errors)t=n.matches;else return null}let s=t,a=(r=n)==null?void 0:r.errors;if(a!=null){let l=s.findIndex(o=>o.route.id&&(a==null?void 0:a[o.route.id]));l>=0||rt(!1),s=s.slice(0,Math.min(s.length,l+1))}return s.reduceRight((l,o,u)=>{let d=o.route.id?a==null?void 0:a[o.route.id]:null,p=null;n&&(p=o.route.errorElement||Bg);let g=e.concat(s.slice(0,u+1)),v=()=>{let x;return d?x=p:o.route.Component?x=k.createElement(o.route.Component,null):o.route.element?x=o.route.element:x=l,k.createElement(Hg,{match:o,routeContext:{outlet:l,matches:g,isDataRoute:n!=null},children:x})};return n&&(o.route.ErrorBoundary||o.route.errorElement||u===0)?k.createElement(Ug,{location:n.location,revalidation:n.revalidation,component:p,error:d,children:v(),routeContext:{outlet:null,matches:g,isDataRoute:!0}}):v()},null)}var ff=function(t){return t.UseBlocker="useBlocker",t.UseRevalidator="useRevalidator",t.UseNavigateStable="useNavigate",t}(ff||{}),Ji=function(t){return t.UseBlocker="useBlocker",t.UseLoaderData="useLoaderData",t.UseActionData="useActionData",t.UseRouteError="useRouteError",t.UseNavigation="useNavigation",t.UseRouteLoaderData="useRouteLoaderData",t.UseMatches="useMatches",t.UseRevalidator="useRevalidator",t.UseNavigateStable="useNavigate",t.UseRouteId="useRouteId",t}(Ji||{});function Gg(t){let e=k.useContext(so);return e||rt(!1),e}function qg(t){let e=k.useContext(zg);return e||rt(!1),e}function Qg(t){let e=k.useContext(Hn);return e||rt(!1),e}function df(t){let e=Qg(),n=e.matches[e.matches.length-1];return n.route.id||rt(!1),n.route.id}function Yg(){var t;let e=k.useContext(cf),n=qg(Ji.UseRouteError),r=df(Ji.UseRouteError);return e||((t=n.errors)==null?void 0:t[r])}function Jg(){let{router:t}=Gg(ff.UseNavigateStable),e=df(Ji.UseNavigateStable),n=k.useRef(!1);return hf(()=>{n.current=!0}),k.useCallback(function(i,s){s===void 0&&(s={}),n.current&&(typeof i=="number"?t.navigate(i):t.navigate(i,Yi({fromRouteId:e},s)))},[t,e])}function Ka(t){rt(!1)}function Xg(t){let{basename:e="/",children:n=null,location:r,navigationType:i=Ie.Pop,navigator:s,static:a=!1}=t;xs()&&rt(!1);let l=e.replace(/^\/*/,"/"),o=k.useMemo(()=>({basename:l,navigator:s,static:a}),[l,s,a]);typeof r=="string"&&(r=Un(r));let{pathname:u="/",search:d="",hash:p="",state:g=null,key:v="default"}=r,x=k.useMemo(()=>{let y=of(u,l);return y==null?null:{location:{pathname:y,search:d,hash:p,state:g,key:v},navigationType:i}},[l,u,d,p,g,v,i]);return x==null?null:k.createElement(ms.Provider,{value:o},k.createElement(vs.Provider,{children:n,value:x}))}function Kg(t){let{children:e,location:n}=t;return Dg(Za(e),n)}new Promise(()=>{});function Za(t,e){e===void 0&&(e=[]);let n=[];return k.Children.forEach(t,(r,i)=>{if(!k.isValidElement(r))return;let s=[...e,i];if(r.type===k.Fragment){n.push.apply(n,Za(r.props.children,s));return}r.type!==Ka&&rt(!1),!r.props.index||!r.props.children||rt(!1);let a={id:r.props.id||s.join("-"),caseSensitive:r.props.caseSensitive,element:r.props.element,Component:r.props.Component,index:r.props.index,path:r.props.path,loader:r.props.loader,action:r.props.action,errorElement:r.props.errorElement,ErrorBoundary:r.props.ErrorBoundary,hasErrorBoundary:r.props.ErrorBoundary!=null||r.props.errorElement!=null,shouldRevalidate:r.props.shouldRevalidate,handle:r.props.handle,lazy:r.props.lazy};r.props.children&&(a.children=Za(r.props.children,s)),n.push(a)}),n}/**
 * React Router DOM v6.18.0
 *
 * Copyright (c) Remix Software Inc.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE.md file in the root directory of this source tree.
 *
 * @license MIT
 */const Zg="startTransition",ju=Kf[Zg];function tm(t){let{basename:e,children:n,future:r,window:i}=t,s=k.useRef();s.current==null&&(s.current=ug({window:i,v5Compat:!0}));let a=s.current,[l,o]=k.useState({action:a.action,location:a.location}),{v7_startTransition:u}=r||{},d=k.useCallback(p=>{u&&ju?ju(()=>o(p)):o(p)},[o,u]);return k.useLayoutEffect(()=>a.listen(d),[a,d]),k.createElement(Xg,{basename:e,children:n,location:l.location,navigationType:l.action,navigator:a})}var Nu;(function(t){t.UseScrollRestoration="useScrollRestoration",t.UseSubmit="useSubmit",t.UseSubmitFetcher="useSubmitFetcher",t.UseFetcher="useFetcher",t.useViewTransitionState="useViewTransitionState"})(Nu||(Nu={}));var Au;(function(t){t.UseFetcher="useFetcher",t.UseFetchers="useFetchers",t.UseScrollRestoration="useScrollRestoration"})(Au||(Au={}));const em=[{pregunta:`Given the following code, which statements can be placed at the indicated position without causing compile and run time errors?\r
\r
public class Test\r
{\r
   int i1;\r
   static int i2;\r
   public void method1()\r
   {\r
      int i;\r
      // ... insert statements here\r
   }\r
}`,hint:"",cat:"static",respuestas:[{txt:"i = this.i1;",isRight:!0},{txt:"i = this.i2;",isRight:!0},{txt:"this = new Test( );",isRight:!1},{txt:"this.i = 4;",isRight:!1},{txt:"this.i1 = i2;",isRight:!0}]},{pregunta:"Which of the following are benefits of polymorphism?",hint:"",cat:"herencia",respuestas:[{txt:"It makes the code more reusable.",isRight:!0},{txt:"It makes the code more efficient.",isRight:!1},{txt:"It protects the code by preventing extension.",isRight:!1},{txt:"It makes the code more dynamic.",isRight:!0}]},{pregunta:`What will happen when the following code is compiled?\r
\r
public class FooBar\r
{\r
   private int FooBar;  //1\r
   public FooBar(int FooBar){ this.FooBar = FooBar; } //2\r
   public void FooBar(){ } //3\r
}`,hint:"",cat:"constructor",respuestas:[{txt:"Compilation error at //1.",isRight:!1},{txt:"Compilation error at //2.",isRight:!1},{txt:"Compilation error at //3.",isRight:!1},{txt:"Compiles without any error.",isRight:!0}]},{pregunta:"Which of the following statements declares a valid null reference?",hint:"",cat:"classes",respuestas:[{txt:"String str : null;",isRight:!1},{txt:"Object obj = NULL;",isRight:!1},{txt:"Date d(null);",isRight:!1},{txt:"File f = null;",isRight:!0}]},{pregunta:"Under what situations does a class get a default constructor?",hint:"",cat:"constructor",respuestas:[{txt:"All classes in Java get a default constructor.",isRight:!1},{txt:"You have to define at least one constructor to get the default constructor",isRight:!1},{txt:"If the class does not define any constructors explicitly.",isRight:!0},{txt:"All classes get default constructor from Object class.",isRight:!1},{txt:"None of the above.",isRight:!1}]},{pregunta:`What will be the output if you run the following program?\r
\r
\r
public class TestClass\r
{\r
   public static void main(String args[])\r
   {\r
      int i;\r
      int j;\r
      for (i = 0, j = 0 ; j < 1 ; ++j , i++)\r
      {\r
         System.out.println( i + " " + j );\r
      }\r
      System.out.println( i + " " + j );\r
   }\r
}`,hint:"",cat:"bucle_for",video:"KAXEdVUecoE",respuestas:[{txt:"0 0 will be printed twice.",isRight:!1},{txt:"1 1 will be printed once.",isRight:!1},{txt:"0 1 will be printed followed by 1 2.",isRight:!1},{txt:"0 0 will be printed followed by 1 1.",isRight:!0},{txt:"It will print 0 0 and then 0 1.",isRight:!1}]},{pregunta:`What will be the result of attempting to compile and run the following program?\r
\r
class TestClass\r
{\r
   public static void main(String args[])\r
   {\r
      int i = 0;\r
      for (i=1 ;  i<5  ; i++) continue; //1\r
      for (i=0 ;       ; i++) break; //2\r
      for (    ; i<5?false:true ;    ); //3\r
   }\r
}`,hint:"",cat:"bucle_for",respuestas:[{txt:"The code will compile without error and will terminate without problems when run.",isRight:!0},{txt:"The code will fail to compile, since the 'continue' can't be used this way.",isRight:!1},{txt:"The code will fail to compile, since the 'break' can't be used this way",isRight:!1},{txt:"The code will fail to compile, Since the for statement in the line 2 is invalid.",isRight:!1},{txt:"The code will compile without error but will never terminate.",isRight:!1}]},{pregunta:"Which of the following comments are valid ?",hint:"",respuestas:[{txt:"// /* ..... */",isRight:!0},{txt:"/* /*  .... // */",isRight:!0},{txt:"/* ..... //  */",isRight:!0},{txt:"/* //.... */",isRight:!0},{txt:"/*  */  */",isRight:!1}]},{pregunta:"Which of the following are benefits of an array over an ArrayList ?",hint:"",cat:"arraylists",respuestas:[{txt:"It consumes less memory.",isRight:!0},{txt:"Accessing an element in an array is faster than in ArrayList.",isRight:!0},{txt:"You do not have to worry about thread safety.",isRight:!1},{txt:"It implements Collection interface and can thus be passed where ever a Collection is required.",isRight:!1}]},{pregunta:"How can you declare a method someMethod() such that an instance of the class is not needed to access it and all the members of the same package have access to it.",hint:"",cat:"static",respuestas:[{txt:"public static void someMethod()",isRight:!0},{txt:"static void someMethod()",isRight:!0},{txt:"protected static void someMethod()",isRight:!0},{txt:"void someMethod()",isRight:!1},{txt:"protected void someMethod()",isRight:!1},{txt:"public abstract static void someMethod()",isRight:"false"}]},{pregunta:`What will the following code print when run?\r
\r
public class TestClass\r
{\r
  public static long main(String[] args)\r
  {\r
     System.out.println("Hello");\r
     return 10L;\r
  }\r
}`,hint:"When the program is run, the JVM looks for a method named main() which takes an array of Strings as input and returns nothing. But in this case, it doesn't find such method ",cat:"void_main",respuestas:[{txt:"Hello",isRight:!1},{txt:"It will print nothing.",isRight:!1},{txt:"It will not compile",isRight:!1},{txt:"It generate an error at run time.",isRight:!0},{txt:"None of the above.",isRight:!1}]},{pregunta:"Which of the following statements regarding 'break' and 'continue' are true?",hint:"No puedes poner un continue; en un switch",cat:"bucle_for",respuestas:[{txt:"break without a label, can occur only in a switch, while, do, or for statement.",isRight:!0},{txt:"continue without a label, can occur only in a switch, while, do, or for statement.",isRight:!1},{txt:"break can never occur without a label.",isRight:!1},{txt:"continue can never occur WITH a label.",isRight:!1},{txt:"None of the above.",isRight:!1}]},{pregunta:`Given the following code fragment, which of the following lines would be a part of the output?\r
\r
\r
outer:\r
   for ( int i = 0 ; i<3 ; i++ )\r
   {\r
      for ( int j = 0 ; j<2 ; j++ )\r
      {\r
         if ( i == j )\r
         {\r
            continue outer;\r
         }\r
         System.out.println( "i=" + i + " , j=" + j );\r
      }\r
   }`,hint:"",cat:"bucle_for",video:"KAXEdVUecoE",respuestas:[{txt:"i = 1, j = 0",isRight:!0},{txt:"i = 0, j = 1",isRight:!1},{txt:"i = 1, j = 2",isRight:!1},{txt:"i = 2, j = 1",isRight:!0},{txt:"i = 2, j = 2",isRight:!1}]},{pregunta:"Which integral type in Java has a range from -2 ^31 to 2^31-1?",hint:"Los tipos de datos integrales son primitivas que representan números enteros. Por tanto, el tipo de dato double queda descartado. El tipo de dato char también queda descartado porque no puede representar valores negativos, por tanto nos quedan int, long y byte. Deberíamos de saber el tamaño de un byte para poder responder a esta pregunta.",cat:"primitives",respuestas:[{txt:"char",isRight:!1},{txt:"int",isRight:!0},{txt:"long",isRight:!1},{txt:"double",isRight:!1},{txt:"byte",isRight:!1}]},{pregunta:`What will it print when the following code compiled and run?\r
\r
public class TestClass\r
{\r
  public static int switchTest(int k)\r
  {\r
     int j = 1;\r
     switch(k)\r
     {\r
        case 1: j++;\r
        case 2: j++;\r
        case 3: j++;\r
        case 4: j++;\r
        case 5: j++;\r
        default : j++;\r
     }\r
     return j + k;\r
  }\r
  public static void main(String[] args)\r
  {\r
     System.out.println( switchTest(4) );\r
  }\r
}\r
`,hint:"",cat:"methods",video:"uDRuUjABrWs",respuestas:[{txt:"5",isRight:!1},{txt:"6",isRight:!1},{txt:"7",isRight:!1},{txt:"8",isRight:!0},{txt:"9",isRight:!1}]},{pregunta:"Which of the following are true about accessor methods?",hint:`Accessor methods means the methods that modify or read the instance data fields of a class. Conventionally, the method that reads the field named xxx is named getXxx and the method that sets its value is named setXxx. That is why, accessor methods are also known as getters and setters.
This convention is also the most important and well known convention of the JavaBeans Naming conventions. JavaBeans is not required for the exam but is good to know.`,cat:"encapsulamiento",respuestas:[{txt:"They allow setting and retrieval of private data elements of an instance.",isRight:!0},{txt:"They should be private.",isRight:!1},{txt:"They can be overloaded.",isRight:!1},{txt:"They inherit members from the base class.",isRight:!1}]},{pregunta:`What would be the result of trying to compile and run the following program?\r
\r
public class Test\r
{\r
   int[] ia = new int[1];\r
   Object oA[]  = new Object[1];\r
   boolean bool;\r
   public static void main(String args[])\r
   {\r
      Test test = new Test();\r
      System.out.println(test.ia[0] + "  " + test.oA[0]+"  "+test.bool);\r
   }\r
}\r
\r
`,hint:"",cat:"arraylists",respuestas:[{txt:"The program will fail to compile, because of uninitialized variable 'bool'.",isRight:!1},{txt:"The program will throw a java.lang.NullPointerException when run.",isRight:!1},{txt:'The program will print "0 null false".',isRight:!0},{txt:'The program will print "0 null true".',isRight:!1},{txt:"The program will print null and false but will print junk value for ia[0].",isRight:!1}]},{pregunta:`Given the following pairs of method declarations, which of the statements are true?\r
\r
\r
1.\r
\r
void perform_work(int time){ }\r
int  perform_work(int time, int speed){ return time*speed ;}\r
\r
\r
2.\r
\r
void perform_work(int time){ }\r
int  perform_work(int speed){return speed ;}\r
\r
\r
3.\r
\r
void perform_work(int time){ }\r
void Perform_work(int time){ }`,hint:"",cat:"herencia",respuestas:[{txt:"The first pair of methods will compile correctly and overload the method 'perform_work'.",isRight:!0},{txt:"The second pair of methods will compile correctly and overload the method 'perform_work'.",isRight:!1},{txt:"The third pair of methods will compile correctly and overload the method 'perform_work'.",isRight:!1},{txt:"The second pair of methods will not compile correctly.",isRight:!0},{txt:"The third pair of methods will not compile correctly.",isRight:!1}]},{pregunta:"Is it possible to create arrays of length zero?",hint:"",cat:"arrays",respuestas:[{txt:"Yes, you can create arrays of any type with length zero.",isRight:!0},{txt:"Yes, but only for primitive datatypes.",isRight:!1},{txt:"Yes, but only for arrays of object references.",isRight:!1},{txt:"Yes, and it is same as a null array.",isRight:!1},{txt:"No, arrays of length zero do not exist in Java.",isRight:!1}]},{pregunta:`What will be the result of compiling and running the following program ?\r
\r
public class ExceptionTest\r
{\r
    public static void main(String[] args) throws Exception\r
    {\r
        try\r
        {\r
            m2();\r
        }\r
        finally\r
        {\r
            m3();\r
        }\r
        catch (Exception e){\r
        }\r
    }\r
\r
    public static void m2() throws Exception { throw new Exception("from m2"); }\r
\r
    public static void m3() throws Exception{ throw new Exception("from m3"); }\r
\r
}\r
\r
`,hint:"",cat:"exceptions",respuestas:[{txt:"It will print an exception stack trace with message from m2 when run.",isRight:!1},{txt:'It will print an exception stack trace with message "from m3" when run.',isRight:!1},{txt:"It will not print anything when run.",isRight:!1},{txt:"It will not compile.",isRight:!0},{txt:"None of the above.",isRight:!1}]},{pregunta:'What is meant by "encapsulation" ?',hint:"",cat:"encapsulamiento",respuestas:[{txt:"There is no way to access member variables.",isRight:!1},{txt:"There are no member variables.",isRight:!1},{txt:"Member fields are declared private and public accessor/mutator methods are provided to access and change their values if needed.",isRight:!0},{txt:"Data fields are declared public and accessor methods are provided to access and change their values.",isRight:!1}]},{pregunta:`What will the following code print when compiled and run?\r
\r
public class Account {\r
    double balance;\r
    public void update(int[] balances2){\r
        balances2[0] = 100;\r
        balances2[1] = 200;\r
    }\r
    \r
    public static void main(String[] args) {\r
        int[] balances1 = new int[2];\r
        balances1[0] = 10;\r
        balances1[1] = 20;\r
        for(int bal :  balances1){\r
            System.out.print(bal+" ");\r
        }\r
        Account a = new Account();\r
        a.update(balances1);\r
        for(int bal :  balances1){\r
            System.out.print(bal+" ");\r
        }\r
    }\r
}`,hint:"",cat:"arrays",video:"oMnUNngKPn0",respuestas:[{txt:"10 20 100 200",isRight:!0},{txt:"10 20 10 20",isRight:!1},{txt:"Compilation failure",isRight:!1},{txt:"An exception will be thrown at run time.",isRight:!1}]},{pregunta:`What will be the result of attempting to compile and run the following code?\r
\r
public class PromotionTest\r
{\r
   public static void main(String args[])\r
   {\r
      int i = 5;\r
      float f = 5.5f;\r
      double d = 3.8;\r
      char c = 'a';\r
      if (i == f) c++;\r
      if (((int) (f + d)) == ((int) f + (int) d)) c += 2;\r
      System.out.println(c);\r
   }\r
}`,hint:`(int)(f + d) => (int) (5.5 + 3.8) => (int)(9.3) => 9

(int)f+(int)d =  (int)5.5 + (int) 3.8 => 5 + 3 = 8

, so this also return false. 

`,respuestas:[{txt:"The code will fail to compile.",isRight:!1},{txt:"It will print d.",isRight:!1},{txt:"It will print c.",isRight:!1},{txt:"It will print b",isRight:!1},{txt:"It will print a.",isRight:!0}]},{pregunta:`Assuming that the following are the complete contents of TestClass.java file, what will be result of attempting to compile this file?\r
\r
\r
import java.util.*;\r
package test;\r
public class TestClass\r
{\r
    public OtherClass oc = new OtherClass();\r
}\r
class OtherClass\r
{\r
    int value;\r
}\r
\r
`,hint:"The package declaration can never occur after an import statement.",cat:"import",respuestas:[{txt:"The class will fail to compile, since the class OtherClass is used before it is defined.",isRight:!1},{txt:"There is no problem with the code.",isRight:!1},{txt:"The class will fail to compile, since the class OtherClass must be defined in a file called OtherClass.java",isRight:!1},{txt:"The class will fail to compile .",isRight:!0},{txt:"None of the above.",isRight:!1}]},{pregunta:"In which of these variable declarations, will the variable remain uninitialized unless explicitly initialized?",hint:"",cat:"encapsulamiento",respuestas:[{txt:"Declaration of an instance variable of type int.",isRight:!1},{txt:"Declaration of a static class variable of type float.",isRight:!1},{txt:"Declaration of a local variable of type float.",isRight:!0},{txt:"Declaration of a static class variable of class Object",isRight:!1},{txt:"Declaration of an instance variable of class Object.",isRight:!1}]},{pregunta:`You have been given an array of objects and you need to process this array as follows -
1. Call a method on each object from first to last one by one.
2. Call a method on each object from last to first one by one.
3. Call a method on only those objects at even index (0, 2, 4, 6, etc.)

Which of the following are correct?`,hint:"The enhanced for loop is tailor made for processing each element of a collection (or an array) in order. Most importantly, it does not give you an iterating variable that you can manipulate and that makes it impossible to change the order or to skip an element. Therefore, tasks 2 and 3 cannot be done by an enhanced for loop.",respuestas:[{txt:"Enhanced for loops can be used for all the three tasks.",isRight:!1},{txt:"Enhanced for loop can be used for only the first task. For the rest, standard for loops can be used.",isRight:!0},{txt:"Standard for loops can be used for tasks 1 and 2 but not 3.",isRight:!1},{txt:"All the tasks can be performed either by using only standard for loops or by using only enhanced for loops.",isRight:!1},{txt:"Neither standard for loops nor enhanced for loops can be used for all three tasks.",isRight:!1}]},{pregunta:"Which of the following will not give any error at compile time and run time?",hint:"",respuestas:[{txt:"if (8 == 81) {}",isRight:!0},{txt:"if (x = 3) {} // assume that x is defined as an int",isRight:!1,hint:"Because the expression x = 3 returns an int and not a boolean. The expression x == 3 would return a boolean."},{txt:"if (true) {}",isRight:!0},{txt:"if (bool = false) {}  //assume that bool is declared as a boolean",isRight:!0},{txt:"if (x == 10 ? true:false) { } // assume that x is an int",isRight:!0}]},{pregunta:`What will happen if you try to compile and run the following program?\r
\r
\r
public class TestClass\r
{\r
   public static void main(String[] args)  {     calculate(2);    }\r
   public static void calculate(int x)\r
   {\r
      String val;\r
      switch(x)\r
      {\r
         case 2:\r
         default:\r
         val = "def";\r
      }\r
      System.out.println(val);\r
   }\r
}`,hint:"",cat:"methods",video:"NZdTYRtF3Jw",respuestas:[{txt:"It will not compile saying that variable val may not have been initialized..",isRight:!1},{txt:"It will compile and print def when run.",isRight:!0},{txt:"As such it will not compile but it will compile if calculate(2); is replaced with calculate(3);",isRight:!1},{txt:"It will compile for any int value passed in the call to calculate() method.",isRight:!0}]},{pregunta:`Consider the following TestClass.java file in the current directory:\r
\r
package a.a.a;\r
public class TestClass\r
{\r
    public static void main(String[] args)\r
    {\r
        System.out.println("Good!!!");\r
    }\r
}\r
\r
Which of the following command lines should be used for compiling if the generated class file is to be executed using the following command line:\r
\r
java -classpath . a.a.a.TestClass`,hint:"",cat:"javac",respuestas:[{txt:"java TestClass.java",isRight:!1},{txt:"javac -d  a.a.a  TestClass.java",isRight:!1},{txt:"javac -d . TestClass.java",isRight:!0},{txt:"javac -d ../a  TestClass.java",isRight:!1},{txt:"java -d TestClass.java",isRight:!1}]},{pregunta:`What will the following code print?\r
\r
   int c = 0;\r
   JACK: while (c < 8)\r
   {\r
      JILL: System.out.println(c);\r
      if (c > 3) break JACK; else c++;\r
   }\r
`,hint:"",cat:"bucle_while",video:"pMsVSulyJ7U",respuestas:[{txt:"It will not compile.",isRight:!1},{txt:"It will throw an exception at runtime.",isRight:!1},{txt:"It will print numbers from 0 to 8",isRight:!1},{txt:"It will print numbers from 0 to 3",isRight:!1},{txt:"It will print numbers from 0 to 4",isRight:!0}]},{pregunta:"Which of the following are char literals?",hint:"",cat:"primitives",respuestas:[{txt:"'a'",isRight:!0},{txt:"'\\n'",isRight:!0},{txt:"'\uDEAF'",isRight:!1},{txt:"/a/",isRight:!1},{txt:'"a"',isRight:!1}]},{pregunta:`What will the following program snippet print?\r
\r
int i=0, j=11;\r
do{\r
   if(i > j) { break; }\r
   j--;\r
}while( ++i < 5);\r
System.out.println(i+"  "+j);\r
`,hint:"",cat:"bucle_while",video:"j4SvMPv8JyI",respuestas:[{txt:"5 5",isRight:!1},{txt:"5 6",isRight:!0},{txt:"6 6",isRight:!1},{txt:"6 5",isRight:!1},{txt:"4 5",isRight:!1}]},{pregunta:`Consider the following method...\r
\r
public void ifTest(boolean flag)\r
{\r
   if (flag)   //1\r
   if (flag)   //2\r
   System .out.println("True False");\r
   else        // 3\r
   System.out.println("True True");\r
   else        // 4\r
   System.out.println("False False");\r
}\r
\r
Which of the following statements are correct ?\r
`,hint:"",cat:"if_else",respuestas:[{txt:"If run with an argument of 'false', it will print 'False False'",isRight:!0},{txt:"If run with an argument of 'false', it will print 'True True'",isRight:!1},{txt:"If run with an argument of 'true', it will print 'True False'",isRight:!0},{txt:"It will never print 'True True'",isRight:!0},{txt:"It will not compile.",isRight:!1}]},{pregunta:`Which of the lines will cause a compile time error in the following program?\r
\r
public class MyClass\r
{\r
   public static void main(String args[])\r
   {\r
      char c;\r
      int i;\r
      c = 'a';//1\r
      i = c;  //2\r
      i++;    //3\r
      c = i;  //4\r
      c++;    //5\r
   }\r
}\r
`,hint:"Cuando almacenamos un tipo de dato más pequeño en un tipo de dato más grande, se produce una conversión implícita. Si almacenamos un char en un int, lo que se almacenará será el código ASCII del char, por eso la línea 2 no dará error. No podemos almacenar un número en un dato de tipo char, por tanto la línea 5 dará error. Es posible aplicar el operador ++ a un char. Lo que hará este operador será incrementar el código UNICODE del char, de tal forma, que si antes valía a, por ejemplo, a continuación valdrá b.",cat:"operators",respuestas:[{txt:"The line 1",isRight:!1},{txt:"The line 2",isRight:!1},{txt:"The line 3",isRight:!1},{txt:"The line 4",isRight:!0},{txt:"The line 5",isRight:!1}]},{pregunta:"Which of the following classes are from java.util package?",hint:"",cat:"import",respuestas:[{txt:"String",isRight:!1},{txt:"ArrayList",isRight:!0},{txt:"Collection",isRight:!0},{txt:"Math",isRight:!1},{txt:"Random",isRight:!0}]},{pregunta:`What will be the result of attempting to compile and run the following code?\r
\r
class SwitchTest\r
{\r
   public static void main(String args[])\r
   {\r
      for ( int i = 0 ; i < 3 ; i++)\r
      {\r
         boolean flag  = false;\r
         switch (i)\r
         {\r
            flag  = true;\r
         }\r
         if ( flag )  System.out.println( i );\r
      }\r
   }\r
}\r
`,hint:"Una estructura switch que tenga código dentro de su cuerpo debe tener debe tener al menos un default o un case.",cat:"bucle_for",respuestas:[{txt:"It will print 0, 1 and 2.",isRight:!1},{txt:"It will not print anything.",isRight:!1},{txt:"Compilation error.",isRight:!0,hint:"It will say 'case', 'default' or '}' expected at compile time."},{txt:"Runtime error.",isRight:!1},{txt:"None of the above.",isRight:!1}]},{pregunta:"Which of the following statements correctly use the float data type?",hint:"",cat:"primitives",respuestas:[{txt:"var float x = 10.0;",isRight:!1},{txt:"float x : 10.0;",isRight:!1},{txt:"float x = 10.0F;",isRight:!0},{txt:"float x : 10.0F;",isRight:!1},{txt:"var float f = 10.0f;",isRight:!1}]},{pregunta:`What will the following program print?\r
\r
public class TestClass\r
{\r
   public static void main(String[] args)\r
   {\r
      String str = "111";\r
      boolean[] bA = new boolean[1];\r
      if( bA[0] ) str = "222";\r
      System.out.println(str);\r
   }\r
}\r
`,hint:"",cat:"arrays",video:"6NWVNzcsk_Q",respuestas:[{txt:"111",isRight:!0},{txt:"222",isRight:!1},{txt:"It will not compile as bA[0] is uninitialized.",isRight:!1},{txt:"It will throw an exception at runtime.",isRight:!1},{txt:"None of the above.",isRight:!1}]},{pregunta:`Given:\r
\r
class Node{\r
    int id;\r
    Node node;\r
    public static void main(String[] args) {\r
       Node n =  new Node();\r
       System.out.println(n.id);\r
       System.out.println(n.node.id);\r
    }\r
}\r
\r
What is the result?`,hint:"",cat:"exceptions",respuestas:[{txt:`0
0`,isRight:!1},{txt:`0
null`,isRight:!1},{txt:`0
exception at runtime`,isRight:!0},{txt:"Compilation failure",isRight:!1}]},{pregunta:`Consider the following two java files:\r
\r
//in file SM.java\r
package x.y;\r
public class SM\r
{\r
    public static void foo(){ };\r
}\r
\r
\r
//in file TestClass.java\r
\r
//insert import statement here //1\r
public class TestClass\r
{\r
   public static void main(String[] args)\r
   {\r
      foo();\r
   }\r
}\r
\r
\r
What should be inserted at //1 so that TestClass will compile and run?`,hint:"",cat:"import",respuestas:[{txt:"import static x.y.*;",isRight:!1},{txt:"import static x.y.SM;",isRight:!1},{txt:"import static x.y.SM.foo;",isRight:!0},{txt:"import static x.y.SM.foo();",isRight:!1},{txt:"import static x.y.SM.*;",isRight:!0}]},{pregunta:`Which of the given options can be successfully inserted at line 1....
//line 1
public class A { }`,hint:"There can be any number of type definitions in a single java soure file but at most only 1 of them can be public. (You can have public inner class but that is not on this exam.)",cat:"classes",respuestas:[{txt:"import java.lang.*;",isRight:!0},{txt:"package p.util;",isRight:!0},{txt:"public class MyClass{ }",isRight:!1},{txt:"class MyClass{ }",isRight:!0}]},{pregunta:`What happens when you try to compile and run the following program?\r
\r
public class CastTest\r
{\r
   public static void main(String args[ ] )\r
   {\r
      byte b = -128 ;\r
      int i = b ;\r
      b = (byte) i;\r
      System.out.println(i+" "+b);\r
   }\r
}\r
`,hint:"El límite inferior de un dato de tipo byte es -128. Este dato cabe tanto en un int, como en un byte, por eso permanece inalterado al pasarlo de un tipo de dato a otro.",cat:"primitives",respuestas:[{txt:"The compiler will refuse to compile it , as i and b are of different types cannot be assigned to each other.",isRight:!1},{txt:"The program will compile and will print -128 and -128 when run .",isRight:!0},{txt:"The compiler will refuse to compile it , since -128 is outside the legal range of values for a byte.",isRight:!1},{txt:"The program will compile and will print 128 and -128 when run .",isRight:!1},{txt:"The program will compile and will print 255 and -128 when run .",isRight:!1}]},{pregunta:`What can be inserted in the following code so that it will print exactly 2345 when compiled and run?\r
\r
public class FlowTest {\r
\r
    static int[] data = {1, 2, 3, 4, 5};\r
\r
    public static void main(String[] args) {\r
        for (int i : data) {\r
            if (i < 2) {\r
                //insert code1 here\r
            }\r
            System.out.print(i);\r
            if (i == 3) {\r
                //insert code2 here\r
            }\r
        }\r
    }\r
}`,hint:"",cat:"arrays",respuestas:[{txt:`break;
and
//nothing is required`,isRight:!1},{txt:`continue;
and
//nothing is required`,isRight:!0},{txt:`continue;
and
continue;`,isRight:!0},{txt:`break;
and
continue;`,isRight:!1},{txt:`break;
and
break;`,isRight:!1}]},{pregunta:`Given:
int a = 5,  b = 2, c = 30;
System.out.println( (a + b)-- * c  );

What is the result?`,hint:"Puedes incrementar o decrementar una variable, pero no una expresión",respuestas:[{txt:"180",isRight:!1},{txt:"210",isRight:!1},{txt:"Compilation failure",isRight:!0,hint:"It will not compile because a postfix or prefix increment/decrement operators can only be applied to a variable. (a+b) is not a variable. It is an expression."},{txt:"Exception at run time",isRight:!1}]}],nm=[{id:"a1",pregunta:`What will be the ouput of the following program:

public class TestClass {\r
	public static void main(String args[]) {\r
		try {\r
			m1();\r
		} catch (IndexOutOfBoundsException e) {\r
			System.out.println("1");\r
			throw new NullPointerException();\r
		} catch (NullPointerException e) {\r
			System.out.println("2");\r
			return;\r
		} catch (Exception e) {\r
			System.out.println("3");\r
		} finally {\r
			System.out.println("4");\r
		}\r
		System.out.println("END");\r
	}\r
\r
// IndexOutOfBoundsException is a subclass of RuntimeException. \r
	static void m1() {\r
		System.out.println("m1 Starts");\r
		throw new IndexOutOfBoundsException("Big Bang ");\r
	}\r
}`,hint:"Una excepción no capturada detiene la aplicación. Al no capturar la NullPointerException por no estar dentro de un try, la ejecución del programa se detendrá cuando finalice la secuencia try-catch-finally",cat:"exceptions",respuestas:[{txt:"The program will print 'm1 Starts'.",isRight:!0},{txt:"The program will print 'm1 Starts', 1 and 4, in that order.",isRight:!0},{txt:"The program will print 'm1 Starts', 1, 2 in that order.",isRight:!1},{txt:"The program will print 'm1 Starts', 1, 2 and 4 in that order.",isRight:!1},{txt:"'END' will not be printed.",isRight:!0}]},{id:"a2",pregunta:`What will be the result of compiling and running the following program?

class SomeClass {\r
	public static void main(String args[]) {\r
		int size = 10;\r
		int[] arr = new int[size];\r
		for (int i = 0; i < size; ++i)\r
			System.out.println(arr[i]);\r
	}\r
}`,hint:`Elements of arrays of primitive types are initialized to their default values (0 for integral types, 0.0 for float/double, and false for boolean)
Elements of arrays of non-primitive types are initialized to null.`,cat:"arrays",respuestas:[{txt:"The code will fail to compile, because the int[] array declaration is incorrect.",isRight:!1},{txt:"The program will compile, but will throw an IndexArrayOutOfBoundsException when run.",isRight:!1},{txt:"The program will compile and run without error, and will print nothing.",isRight:!1},{txt:"The program will compile and run without error and will print null ten times.",isRight:!1},{txt:"The program will compile and run without error and will print '0' ten times.",isRight:!0}]},{id:"a3",pregunta:`Given the following program, which of these statements are true? 

public class FinallyTest {\r
	public static void main(String args[]) {\r
		try {\r
			if (args.length == 0)\r
				return;\r
			else\r
				throw new Exception("Some Exception");\r
		} catch (Exception e) {\r
			System.out.println("Exception in Main");\r
		} finally {\r
			System.out.println("The end");\r
		}\r
	}\r
}`,hint:`There are two points to understand here:
1. Even if the program is executed without any arguments, the 'args' is NOT NULL. In such case it will be initialized to an arry of Strings containing zero elements.
2. The finally block is always executed, no matter how control leaves the try block. Only if, in a try or catch block, System.exit() is called then finally will not be executed.`,cat:"exceptions",respuestas:[{txt:"If run with no arguments, the program will only print The end.",isRight:!0},{txt:"If run with one argument, the program will only print The end.",isRight:!1},{txt:"If run with one argument, the program will print Exception in Main and The end.",isRight:!0},{txt:"If run with one argument, the program will only print Exception in Main.",isRight:!1},{txt:"Only one of the above is correct.",isRight:!1}]},{id:"a4",pregunta:`Given:\r
\r
class Node{\r
    static final int TYPE = 100;\r
    public static void print(){\r
        System.out.println(TYPE); //1    \r
    }\r
}\r
\r
public class Test{\r
    public static void main(String[] args) {\r
       //INSERT CODE HERE //2\r
    }\r
}\r
\r
What may be done to the above code to make it print 100?`,hint:"Observa que Node es una clase, y cuando usamos Node().print();, lo estamos usando como si fuese un método.",cat:"static",respuestas:[{txt:`Change the statement at //1 to System.out.println(Node.TYPE);
and
 insert Node.print(); at //2`,isRight:!0},{txt:"insert new Node().print(); at //2",isRight:!1},{txt:"insert new Node.print(); at //2",isRight:!1},{txt:"insert Node().print(); at //2",isRight:!1},{txt:"insert print(); at //2.",isRight:!1}]},{id:"a6",pregunta:"You have an array of objects and you want to search for a particular object in that array. Which of the following Java statements will you need to use",hint:"",cat:"arrays",respuestas:[{txt:"Conditional",isRight:!0},{txt:"Iterative/loop",isRight:!0},{txt:"Instantiation",isRight:!1},{txt:"Assignment",isRight:!1}]},{id:"a7",pregunta:`What will the following code print?

boolean flag = true;\r
if (flag = false) {\r
	System.out.println("1");\r
} else if (flag) {\r
	System.out.println("2");\r
} else if (!flag) {\r
	System.out.println("3");\r
} else\r
	System.out.println("4");`,cat:"if_else",video:"IiHJA3De9qU",respuestas:[{txt:"1",isRight:!1},{txt:"2",isRight:!1},{txt:"3",isRight:!0},{txt:"4",isRight:!1},{txt:"Compilation error.",isRight:!1}]},{id:"a8",pregunta:`Identify the valid for loop constructs assuming the following declarations:

Object o = null;
ArrayList c = //valid ArrayList object.
int[] ia = //valid array`,hint:`No es posible usar una variable ya declarada en la difinición de un for (for(o : c))

El bucle for(int i = 1; i<=ia.length; i++) arrojará una IndexOutOfBoundsException en la última iteración`,cat:"arraylists",respuestas:[{txt:"for(o : c){ }",isRight:!1},{txt:"for(final Object o2 :c){ }",isRight:!0},{txt:"for(int i : ia) { }",isRight:!0},{txt:"for(Iterator it : c.iterator()){ }",isRight:!1},{txt:"for(int i = 1; i<=ia.length; i++){  System.out.println(ia[i]); }",isRight:!1}]},{id:"a9",pregunta:`What will the following code print?

List s1 = new ArrayList();\r
s1.add("a");\r
s1.add("b");\r
s1.add("c");\r
s1.add("a");\r
if (s1.remove("a")) {\r
	if (s1.remove("a")) {\r
		s1.remove("b");\r
	} else {\r
		s1.remove("c");\r
	}\r
}\r
System.out.println(s1);`,cat:"arraylists",video:"uhTyi9hpG0o",respuestas:[{txt:"[b]",isRight:!1},{txt:"[c]",isRight:!0},{txt:"[b, c, a]",isRight:!1},{txt:"[a, b, c, a]",isRight:!1},{txt:"Exception at runtime",isRight:!1}]},{id:"a10",pregunta:"Which one can hold a larger integer value, a char or a short ?",hint:"Note that both char and short are integral types that use 2 bytes. Although sizes of char and short are same but a char can hold a larger int value because char does not store negative integers.",cat:"primitives",respuestas:[{txt:"char",isRight:!0},{txt:"short",isRight:!1},{txt:"largest integer that both can hold are same.",isRight:!1},{txt:"They cannot be compared because char can hold only character values.",isRight:!1},{txt:"None of the above",isRight:!1}]},{id:"a11",pregunta:"You are writing a class named AccountManager. This class is the starting point of your application and is to be executing from the command line. What should be the name of the file containing this class's source code?",hint:"",cat:"classes",respuestas:[{txt:"accountmanager.java",isRight:!1},{txt:"AccountManager.java",isRight:!0},{txt:"main.java",isRight:!1},{txt:"Main.java",isRight:!1},{txt:"The name of the file doesn't matter because after compilation, the class file will be named AccountManager.class anyway.",isRight:!1}]},{id:"a12",pregunta:`Consider the following two classes defined in two .java files.

//in file /root/com/foo/X.java\r
package com.foo;\r
\r
public class X {\r
	public static int LOGICID = 10;\r
\r
	public void apply(int i) {\r
		System.out.println("applied");\r
	}\r
}

//in file /root/com/bar/Y.java\r
package com.bar;\r
\r
//1  <== INSERT STATEMENT(s) HERE\r
public class Y {\r
	public static void main(String[] args) {\r
		X x = new X();\r
		x.apply(LOGICID);\r
	}\r
}

What should be inserted at //1 so that Y.java can compile without any error?`,hint:`Cuando haces un static import puedes acceder a los miembros de una clase sin necesidad de utilizar una referencia a dicha clase:
import static java.lang.Math.*;
double resultado= pow(2, 2);

Las dos líneas marcadas como resupesta correcta son necesarias.

Esta línea: import com.foo.*; es necesaria porque estamos instanciando X.

Esta línea: import static com.foo.X.*; es necesaria porque estamos imprimiendo el valor de LOGICID sin utilizar el nombre de la clase a la que pertenece.`,cat:"static",respuestas:[{txt:"import static X;",isRight:!1},{txt:"import static com.foo.*;",isRight:!1},{txt:"import static com.foo.X.*;",isRight:!0},{txt:"import com.foo.*;",isRight:!0},{txt:"import com.foo.X.LOGICID;",isRight:!1}]},{id:"a13",pregunta:"Which of the following are features of Java?",hint:"",cat:"java",respuestas:[{txt:"It allows you to develop distributed applications.",isRight:!0},{txt:"It allows you to develop desktop as well as web applications.",isRight:!0},{txt:"It allows development of low level components such as device drivers.",isRight:!1},{txt:"It is a scripted language.",isRight:!1},{txt:"It is a structured programming language.",isRight:!1}]},{id:"a14",pregunta:`Consider the following class :

public class Test {\r
	public static void main(String[] args) {\r
		if (args[0].equals("open"))\r
			if (args[1].equals("someone"))\r
				System.out.println("Hello!");\r
			else\r
				System.out.println("Go away " + args[1]);\r
	}\r
}

Which of the following statements are true if the above program is run with the command line :

java Test closed`,hint:"",cat:"arrays",respuestas:[{txt:"It will throw ArrayIndexOutOfBoundsException at runtime.",isRight:!1},{txt:"It will end without exceptions and will print nothing.",isRight:!0},{txt:"It will print Go away",isRight:!1},{txt:"It will print Go away and then will throw an ArrayIndexOutOfBoundsException.",isRight:!1},{txt:"None of the above.",isRight:!1}]},{id:"a15",pregunta:`What will the following code print when run?

public class TestClass {\r
	public static void main(String[] args) throws Exception {\r
		String[] sa = { "a", "b", "c" };\r
		for (String s : sa) {\r
			if ("b".equals(s))\r
				continue;\r
			System.out.println(s);\r
			if ("b".equals(s))\r
				break;\r
			System.out.println(s + " again");\r
		}\r
	}\r
}`,hint:"",video:"lvF3S6gJfKY",respuestas:[{txt:`a
a again
c
 c again`,isRight:!0},{txt:`a
a again
 b`,isRight:!1},{txt:`a
 a again
b
b again`,isRight:!1},{txt:`c
c again`,isRight:!1}]},{id:"a16",pregunta:`Given:

int x = 5;
int y = 9;
int z = 12;
boolean b = true;

Which of the following statements will print true?`,hint:"",cat:"if_else",video:"Jtfp_pNm6Xo",respuestas:[{txt:"System.out.println( x==y || b );",isRight:!0},{txt:"System.out.println( ! (x<z) || b );",isRight:!0},{txt:"System.out.println( b == y>z );",isRight:!1},{txt:"System.out.println( b && y>z || z<x );",isRight:!1},{txt:"System.out.println( !b == y>z );",isRight:!0}]},{id:"a17",pregunta:`Consider the following code for the main() method:

	public static void main(String[] args) throws Exception {\r
		int i = 1, j = 10;\r
		do {\r
			if (i++ > --j)\r
				continue;\r
		} while (i < 5);\r
		System.out.println("i=" + i + " j=" + j);\r
	}`,hint:"",cat:"bucle_while",video:"waHLQjCdJ2E",respuestas:[{txt:"i=6 j=6",isRight:!1},{txt:"i=5 j=6",isRight:!0},{txt:"i=5 j=5",isRight:!1},{txt:"i=6 j=5",isRight:!1},{txt:"None of these.",isRight:!1}]},{id:"a18",pregunta:`Given the following class, which of these are valid ways of referring to the class from outside of the package com.enthu?

package com.enthu;\r
\r
public class Base {\r
	// ....\r
	// lot of code... }\r
}`,hint:"",cat:"import",respuestas:[{txt:"Base",isRight:!1},{txt:"By importing the package com.* and referring to the class as enthu.Base",isRight:!1},{txt:"importing com.* is illegal.",isRight:!1},{txt:"By importing com.enthu.* and referring to the class as Base.",isRight:!0},{txt:"By referring to the class as com.enthu.Base.",isRight:!0}]},{id:"a19",pregunta:"Which of the following are true about the enhanced for loop?",hint:"",respuestas:[{txt:"It can iterate over an array or a Collection but not an ArrayList.",isRight:!1},{txt:"Using an enhanced for loop prevents the code from going into an infinite loop.",isRight:!0},{txt:"Using an enhanced for loop on an array may cause infinite loop.",isRight:!1},{txt:"You cannot find out the number of the current iteration while iterating.",isRight:!0}]},{id:"a20",pregunta:`Which lines contain a valid constructor in the following code?

public class TestClass {\r
	public TestClass(int a, int b) {\r
	}// 1\r
\r
	public void TestClass(int a) {\r
	} // 2\r
\r
	public TestClass(String s); // 3\r
\r
	private TestClass(String s, int a) {\r
	} // 4\r
\r
	public TestClass(String s1, String s2) {\r
	};// 5\r
}`,hint:"",cat:"constructor",respuestas:[{txt:"Line // 1",isRight:!0},{txt:"Line // 2",isRight:!1},{txt:"Line // 3",isRight:!1},{txt:"Line // 4",isRight:!0},{txt:"Line // 5",isRight:!0}]},{id:"a21",pregunta:"Which of the following is true about a Java source file?",hint:"",cat:"import",respuestas:[{txt:"It must have exactly one package statement.",isRight:!1},{txt:"It must have zero or more import statements.",isRight:!0},{txt:"All the classes its package are automatically imported.",isRight:!0},{txt:"It can only have zero or one package statement.",isRight:!0},{txt:"All packages of J2SE are automatically imported.",isRight:!1},{txt:"The source file name has no relation to the classes contained in the file.",isRight:!1}]},{id:"a22",pregunta:`Given:

double da[] = new double[3];

Identify correct statements.`,hint:"",cat:"arrays",respuestas:[{txt:`for(double d : da) System.out.println(d); will print
null
null
null`,isRight:!1},{txt:`for(int i=1; i<=da.length; i++ )
System.out.println(da[i]); will print
 null
null
null`,isRight:!1},{txt:`for(int i=0; i<=da.length; i++ ) System.out.println(da[i]); will print
null
null
null`,isRight:!1},{txt:`for(int i=0; i<da.length; i++ ) System.out.println(da[i]); will print
null
null null`,isRight:!1},{txt:"None of the above.",isRight:!0}]},{id:"a23",pregunta:`Which of these for statements are valid?

1. for (int i=5; i=0; i--) { }

2.  int j=5;
for(int i=0, j+=5;  i<j ; i++) {  j--;  }

3. int i, j;    for (j=10; i<j; j--) { i += 2; }

4. int i=10;
for ( ; i>0 ; i--) { }

5. for (int i=0, j=10; i<j; i++, --j) {;}`,hint:"",cat:"bucle_for",video:"WJfgAVF4h68",respuestas:[{txt:"1, 2",isRight:!1},{txt:"3, 4",isRight:!1},{txt:"1, 5",isRight:!1},{txt:"4, 5",isRight:!0},{txt:"5",isRight:!1}]},{id:"a24",pregunta:`What letters, and in what order, will be printed when the following program is compiled and run?

public class FinallyTest {\r
	public static void main(String args[]) throws Exception {\r
		try {\r
			m1();\r
			System.out.println("A");\r
		} finally {\r
			System.out.println("B");\r
		}\r
		System.out.println("C");\r
	}\r
\r
	public static void m1() throws Exception {\r
		throw new Exception();\r
	}\r
}`,hint:"No hay catch, por tanto, cuando termine el finally la excepción será arrojada.",cat:"exceptions",respuestas:[{txt:"It will print C and B, in that order.",isRight:!1},{txt:"It will print A and B, in that order.",isRight:!1},{txt:"It will print B and then throw an Exception.",isRight:!0},{txt:"It will print A, B and C in that order.",isRight:!1},{txt:"Compile time error.",isRight:!1}]},{id:"a25",pregunta:`What, if anything, is wrong with the following code?

	switch (x) {\r
	case 1:\r
	case 2:\r
	case 0:\r
	default:\r
	case 4:\r
	}`,hint:"",cat:"switch",respuestas:[{txt:"Data Type of 'x' is not valid to be used as an expression for the switch clause.",isRight:!1},{txt:"The case label 0 must precede case label 1.",isRight:!1},{txt:"Each case section must be ended by a break keyword.",isRight:!1},{txt:"The default label must be the last label in the switch statement.",isRight:!1},{txt:"There is nothing wrong with the code.",isRight:!0}]},{id:"a26",pregunta:"Identify correct statements.",hint:"",cat:"random",respuestas:[{txt:"1 + Math.random()*9 will return a random number between 1 and 10.",isRight:!0},{txt:"Math.random()*10 will return a random number between 1 and 10.",isRight:!1},{txt:"Math.round(Math.random()*9) will return a random number between 1 and 10.",isRight:!1},{txt:"1 + Math.round(Math.random()*9) will return a random number between 1 and 10.",isRight:!0},{txt:"Math.round(Math.random()*10) will return a random number between 1 and 10.",isRight:!1}]},{id:"a27",pregunta:`Given:
int a = 10, b = 20, c = 30, d = 40;
boolean t = true;
Which of the following statements will print true?`,hint:"",cat:"if_else",video:"b0iXGrO3X9w",respuestas:[{txt:"System.out.println( (a > b) && t);",isRight:!1},{txt:"System.out.println( (a > b || b < c) && t);",isRight:!0},{txt:"System.out.println( (a < d && b < c) || t);",isRight:!0},{txt:"System.out.println( (a > b || t) && (b>c && c>d));",isRight:!1}]},{id:"a28",pregunta:`Given:

String str = "hello\r" + "world";
System.out.println(str.length);`,hint:"",cat:"arrays",respuestas:[{txt:"12",isRight:!1},{txt:"13",isRight:!1},{txt:"14",isRight:!1},{txt:"Compilation error",isRight:!0},{txt:"Exception at run time",isRight:!1}]},{id:"a29",pregunta:"A try statement must always have a ............. associated with it.",hint:"First, a and b are appended to an empty list. Next, c is added at index 1 i.e. between a and b. Then a new list s2 is created using the sublist view allowing access to elements from index 1 to index 1(exclusive) (which really means there are no elements!). Now, s2 is added to s1. But s2 is empty. So, s1 remains the same. Therefore, it prints: a, c, b",cat:"exceptions",respuestas:[{txt:"catch",isRight:!1},{txt:"throws",isRight:!1},{txt:"finally",isRight:!1},{txt:"catch, finally or both",isRight:!0},{txt:"throw",isRight:!1}]},{id:"30",pregunta:`What sequence of digits will the following program print?

import java.util.*;\r
\r
public class ListTest {\r
	public static void main(String args[]) {\r
		List s1 = new ArrayList();\r
		s1.add("a");\r
		s1.add("b");\r
		s1.add(1, "c");\r
		List s2 = new ArrayList(s1.subList(1, 1));\r
		s1.addAll(s2);\r
		System.out.println(s1);\r
	}\r
}`,hint:"",cat:"arraylists",video:"8kevgDOGQBY",respuestas:[{txt:"The sequence a, b, c is printed.",isRight:!1},{txt:"The sequence a, b, c, b is printed.",isRight:!1},{txt:"The sequence a, c, b, c is printed.",isRight:!1},{txt:"The sequence a, c, b is printed.",isRight:!0},{txt:"None of the above.",isRight:!1}]},{id:"31",pregunta:`Given the following code:

//1\r
//2\r
public class TestClass {\r
	public static void main(String[] args) {\r
		double d = Math.random();\r
		System.out.println(d);\r
	}\r
}

Which two lines can be inserted at locations marked //1 and //2?`,hint:`La clase Math pertenece al paquete java.lang.

La declaración del paquete (si existiese), debería ser la primera línea de nuestro código.`,cat:"import",respuestas:[{txt:"import java.lang.*;  at //1",isRight:!1},{txt:"import java.util.*;  at //1",isRight:!1},{txt:"package test;  at //1",isRight:!0},{txt:"package a.b;  at //2",isRight:!1},{txt:"import java.util.*;  at //2",isRight:!1},{txt:"import java.lang.*;  at //2",isRight:!0}]},{id:"32",pregunta:`Which of these are keywords in Java?

`,hint:"null, true y false, son literales, no keywords. En cualquier caso, tienen las mismas restricciones de uso que las keywords. Un literal es cualquier secuencia de caracteres que representa un valor que puede ser almacenado en una variable. String es el nombre de una clase Java, no una keyword. Las keywords no son ni literales ni nombres de clases, aunque no puedas usar un literal y una clase Java para para identificar a una variable, esto no convierte a estas entidades en keywords.El modificador strictfp se puede aplicar a clases, interfaces y métodos no abstractos para asegurarnos de que los cálculos de coma flotante (floating point) sean iguales para diferentes plataformas. Por defecto los cálculos de coma flotante son delegados en el microprocesador para que se puedan realizar rápidamente. Al activar esta opción será la máquina virtual la que los haga, lo cual es más lento, pero nos aseguramos de obtener siempre el mismo resultado.",cat:"java",respuestas:[{txt:"default",isRight:!0},{txt:"null",isRight:!1},{txt:"String",isRight:!1},{txt:"throws",isRight:!0},{txt:"long",isRight:!0},{txt:"strictfp",isRight:!0}]},{id:"a33",pregunta:`What letters will be printed by this program?

public class ForSwitch {\r
	public static void main(String args[]) {\r
		char i;\r
		LOOP: for (i = 0; i < 5; i++) {\r
			switch (i++) {\r
			case '0':\r
				System.out.println("A");\r
			case 1:\r
				System.out.println("B");\r
				break LOOP;\r
			case 2:\r
				System.out.println("C");\r
				break;\r
			case 3:\r
				System.out.println("D");\r
				break;\r
			case 4:\r
				System.out.println("E");\r
			case 'E':\r
				System.out.println("F");\r
			}\r
		}\r
	}\r
}`,hint:`Si en una variable de tipo char almacena un valor de tipo entero y luego imprimo el valor de este char, realmente lo que imprimiré será el código ascii del valor entero almacenado

En el case '0' estamos comparando el valor de i con el entero 48, ya que 48 es el código ascii del char '0'. Si la i valiese inicialmente 48, se metería por este case
LOOP: for (i = 48; i < 50; i++) {

Por otra parte, estamos haciendo una post incrementación dentro del switch, luego en el momento en que evaluamos el valor de la i, esta variable todavía no se ha incrementado.

Como el case 4 no tiene break; se imprimirá la E y la F.

Si metiesemos un System.out.println(i) inmediatamente después del bucle for, imprimiríamos el código ascii correspondiente al valor 0, que es un valor nulo.

Puedes valor las correspondencias de código ASCII en este enlace: https://elcodigoascii.com.ar/`,cat:"bucle_for",respuestas:[{txt:"A",isRight:!1},{txt:"B",isRight:!1},{txt:"C",isRight:!0},{txt:"D",isRight:!1},{txt:"F",isRight:!0}]},{id:"a34",pregunta:"Which of the following operators can be used in conjunction with a String object?",hint:"Only + and += are overloaded for Strings. a+=x is actually converted to a = a + x. So, it is valid for Strings. The dot (.) operator accesses members of the String object. There is only one member variable though: CASE_INSENSITIVE_ORDER. It is of type Comparator.",respuestas:[{txt:"+",isRight:!0},{txt:"++",isRight:!1},{txt:"+=",isRight:!0},{txt:".",isRight:!0},{txt:"*",isRight:!1}]},{id:"a35",pregunta:`What will the following code snippet print?

int count = 0, sum = 0;\r
do {\r
	if (count % 3 == 0)\r
		continue;\r
	sum += count;\r
} while (count++ < 11);\r
System.out.println(sum);`,cat:"bucle_while",video:"3dnMo1JmbYY",respuestas:[{txt:"49",isRight:!1},{txt:"48",isRight:!0},{txt:"37",isRight:!1},{txt:"36",isRight:!1},{txt:"38",isRight:!1}]},{id:"a36",pregunta:`Given the code fragment:

	public static void main(String[] args) {\r
		int[] balances1 = new int[2];\r
		balances1[0] = 10;\r
		balances1[1] = 20;\r
		int[] balances2 = balances1;\r
		balances2[0] = 0;\r
		System.out.print(balances1 == balances2);\r
	}

 What is the result?

  Note: You will see real exam questions written in the same format. The question, "what is the result" implies "what is the result of compilation and execution of the given code" assuming that it exists in a valid context such as a class. It does not mean that the code will compile as it is or that it does not have compilation issues.`,hint:"arrays",respuestas:[{txt:"true",isRight:!0},{txt:"false",isRight:!1},{txt:"compilation failure",isRight:!1},{txt:"exception at run time",isRight:!1}]},{id:"a37",pregunta:"Which of the following are NOT valid operators in Java?",hint:"",respuestas:[{txt:"sizeof",isRight:!0},{txt:"<<<",isRight:!0},{txt:"instanceof",isRight:!1},{txt:"mod",isRight:!0},{txt:"equals",isRight:!0}]},{id:"a38",pregunta:`Assuming that a valid integer will be passed in the command line as first argument, which statements regarding the following code are correct?

public class TestClass {\r
	public static void main(String args[]) {\r
		int x = Integer.parseInt(args[0]);\r
		switch (x) {\r
		case x < 5:\r
			System.out.println("BIG");\r
			break;\r
		case x > 5:\r
			System.out.println("SMALL");\r
		default:\r
			System.out.println("CORRECT");\r
			break;\r
		}\r
	}\r
}`,hint:"Values used in case labels must be compatible (assignable) to the switch variable. Here, the switch variable is of type int, while the case values are boolean.",respuestas:[{txt:"BIG will never be followed be anything else.",isRight:!1},{txt:"SMALL will never follow anything else.",isRight:!1},{txt:"SMALL will always be followed be CORRECT.",isRight:!1},{txt:"It will not compile.",isRight:!0},{txt:"It'll throw an exception at runtime.",isRight:!1}]},{id:"a39",pregunta:`Which of the following statements can be inserted successfully at // 1?

public class InitTest {\r
	static int si = 10;\r
	int i;\r
	final boolean bool;\r
	// 1
}`,hint:"Una variable de tipo final debe ser inicializada en su declaración o en el constructor.",cat:"constructor",respuestas:[{txt:"instance { bool = true; }",isRight:!1},{txt:"InitTest() { si += 10; }",isRight:!1,hint:"It is a constructor but it does not initialize the fianl variable bool."},{txt:"void InitTest(){ si = 5; i = bool ? 1000 : 2000;}",isRight:!1,hint:"no puedes usar la variable bool antes de inicializarla"},{txt:"{ i = 1000; }",isRight:!1},{txt:`InitTest() { si += 10; }
InitTest(boolean flag) { bool  = flag; } `,isRight:!1,hint:"A final instance variable must be initialized in every constructor. It is left uninitized in the first constructor here."},{txt:"None of above",isRight:"false"}]},{id:"a40",pregunta:"Which of the following code snippets will compile without any errors?",hint:`El bucle while (false) { x=3; } daría error porque la expresión x=3 nunca va a ser alcanzada. Sin en lugar de pasarle el valor false al bucle, le hubiesemos pasado una expresión como while (valorBooleano=false) { x=3; }, el compilador sí que lo aceptaría.

De igual manera, aunque en la instrucción for( int i = 0; i< 0; i++) x = 3;   x=3 nunca será alcanzable, el bucle compila por ser i<0 una expresión. Si fuese un valor concreto como for( int i = 0; false; i++) x = 3;  no compilaría

Como excepción a la norma, en la expecificación de Java está permitido pasarle un valor booleano false a un condicional if (false) { x=3; }, luego esto sí que compila.`,respuestas:[{txt:"while (false) { x=3; }",isRight:!1,hint:"is a compile-time error because the statement x=3; is not reachable."},{txt:"if (false) { x=3; }",isRight:!0},{txt:"do{ x = 3; } while(false);",isRight:!0},{txt:"for( int i = 0; i< 0; i++) x = 3;",isRight:!0}]},{id:"a41",pregunta:`Given:

public class Account {\r
	int id;\r
\r
	public Account(int id) {\r
		this.id = id;\r
\r
	}\r
\r
	public static void main(String[] args) {\r
		List<Account> list = new ArrayList<Account>();\r
		list.add(new Account(111));\r
		list.add(new Account(222));\r
		// insert code here\r
	}\r
}

Which of the following options, when inserted in the above code, will print 111 222 ?`,hint:`Si quieres usar un for para recorrer una colección, esta debe implementar la interfaz iterable, luego for(int id : list.id) se quedaría así: for(int id : list)

Por otro lado, este código:

Iterator<Account> it = list.iterator();
while(it.hasNext()) System.out.println(it.next()+" ");
 imprimiría los valores correctos si hubiesemos usado
 Iterator<Account> it = list.iterator();
while(it.hasNext()) System.out.println(it.next().id+" ");
 en su lugar`,cat:"arraylists",respuestas:[{txt:'for(int id : list.id) System.out.print(id+" ");',isRight:!1},{txt:'for(Account id : list) System.out.print(id+" ");',isRight:!1},{txt:`Iterator<Account> it = list.iterator();
while(it.hasNext()) System.out.println(it.next()+" ");`,isRight:!1},{txt:'for(int i = 0; i<list.size(); i++) System.out.print(list.id+" ");',isRight:!1},{txt:"None of the above.",isRight:!0}]},{id:"a42",pregunta:"What command should be given to compile and run a java source file named TestClass.java (for standard Oracle JDK)?",hint:`Sintaxis para compilar: javac TestClass.java

 Sintaxis para ejecutar: java TestClass`,respuestas:[{txt:"javac TestClass and java TestClass.class",isRight:!1},{txt:"javac TestClass.java and java TestClass",isRight:!0},{txt:"java TestClass.java and java TestClass",isRight:!1},{txt:"javac TestClass.java and javac TestClass",isRight:!1},{txt:"None of the above.",isRight:!1}]},{id:"a43",pregunta:`What will the following class print when compiled and run?

public class Holder {\r
	int value = 1;\r
	Holder link;\r
\r
	public Holder(int val) {\r
		this.value = val;\r
	}\r
\r
	public static void main(String[] args) {\r
		Holder a = new Holder(5);\r
		Holder b = new Holder(10);\r
		a.link = b;\r
		setIt(a, b);\r
		System.out.println(a.link.value + ", " + b.link.value);\r
	}\r
\r
	public static void setIt(Holder x, Holder y) {\r
		y.link = x;\r
	}\r
\r
}`,cat:"encapsulamiento",hint:"",video:"K5ap_-nGLRg",respuestas:[{txt:"It will print 5, 5.",isRight:!1},{txt:"It will print 10, 5.",isRight:!0},{txt:"It will print 5, 10.",isRight:!1},{txt:"It will print 10, 10.",isRight:!1},{txt:"None of these.",isRight:!1}]},{id:"a44",pregunta:`What will be the result of attempting to compile and run the following code?

class TestClass {\r
	public static void main(String args[]) {\r
		String str1 = "str1";\r
		String str2 = "str2";\r
		System.out.println(str1.concat(str2));\r
		System.out.println(str1);\r
	}\r
}`,hint:"",cat:"String",respuestas:[{txt:"The code will fail to compile.",isRight:!1},{txt:"The program will print str1 and str1.",isRight:!1},{txt:"The program will print str1 and str1str2",isRight:!1},{txt:"The program will print str1str2 and str1",isRight:!0},{txt:"The program will print str1str2 and str1str2",isRight:!1}]},{id:"a45",pregunta:`What will be the output of the following code snippet?

int a = 1; int[] ia = new int[10];
int b = ia[a];
int c = b + a;
System.out.println(b = c);`,hint:"",cat:"arrays",video:"bstELb-o_cU",respuestas:[{txt:"0",isRight:!1},{txt:"1",isRight:!0},{txt:"2",isRight:!1},{txt:"true",isRight:!1},{txt:"false",isRight:!1}]},{id:"a46",pregunta:`Given that TestClass is a class, how many objects and reference variables are created by the following code?

TestClass t1, t2, t3, t4;
 t1 = t2 = new TestClass();
t3 = new TestClass();`,hint:"El código anterior declara 4 referencias e instancia 2 objetos.",cat:"classes",respuestas:[{txt:"2 Objects, 3 references.",isRight:!1},{txt:"2 Objects, 4 references.",isRight:!0},{txt:"3 Objects, 2 references.",isRight:!1},{txt:"2 Objects, 2 references.",isRight:!1},{txt:"None of the above.",isRight:!1}]},{id:"a47",pregunta:`Consider the following program:

public class TestClass {\r
	public int methodA(int a) {\r
		return a * 2; // 1\r
	}\r
\r
	public long methodA(int a) {\r
		return a; // 2\r
	}\r
\r
	public static void main(String[] args) {\r
		int i = 0;\r
		i = new TestClass().methodA(2);\r
\r
		System.out.println(i);\r
	}\r
}`,hint:"",cat:"methods",respuestas:[{txt:"Line 2 correctly overrides the method at line 1.",isRight:!1},{txt:"Line 2 correctly overloads the method at line 1.",isRight:!1},{txt:"There is neither overloading nor overriding happening in the given code but the program will compile fine.",isRight:!1},{txt:"The program will not compile.",isRight:!0},{txt:"The program will compile and print 4.",isRight:!1}]},{id:"a48",pregunta:`Consider the following code:

String s1 = "java";
String s2= "java";
String s3 = new String("java");
System.out.println(s1 == s2); //1
System.out.println(s1 == s3); //2
System.out.println(s1.equals(s2));//3
System.out.println(s2.equals(s3)); //4
Which lines will print true?`,cat:"String",hint:"",respuestas:[{txt:"1,2,4",isRight:!1},{txt:"1,4",isRight:!1},{txt:"1,2,3",isRight:!1},{txt:"3,4",isRight:!1},{txt:"1,2,3,4",isRight:!1},{txt:"1,2",isRight:!1},{txt:"1,3,4",isRight:!0}]},{id:"a49",pregunta:"Which of the following declarations are valid?",hint:`Si a 1.0 no le pongo la f (1.0f), será un valor de tipo double que no puedo almacenar en un float mediante una conversión implícita (necesitaré un casteo explícito). Si a -1 y 4 no le pongo la f (-1f y -4f), por defecto son valores de tipo entero. Como un entero es más pequeño que un float se produce una conversión implícita y no hay error..
43e1 también es un valor de tipo double, y por tanto no se producirá la conversión implícita a float y dará error. La conversión implícita a un dato de tipo float sólo se realiza para valores de tipo byte, char, short, e int (los valores que están por debajo de float).

Cualquier número puede ser escrito en formato decimal, hexadecimal (empieza por 0x), binario (empieza por b y sólo podemos usar 0 y 1) y octal (empieza por 0 y sólo puede tener dígitos del 0 al 7)

int decimal = 495;

int hexa=0x1ef;

int octal = 0757;

int binary = 0b111101111;`,cat:"primitives",respuestas:[{txt:"float f1 = 1.0;",isRight:!1},{txt:"float f = 43e1;",isRight:!1},{txt:"float f = -1;",isRight:!0},{txt:"float f = 0x0123;",isRight:!0},{txt:"float f = 4;",isRight:!0}]},{id:"a50",pregunta:`What will the following code print when compiled and run?

public class OrderTest {\r
	public void initData(String[] arr) {\r
		int ind = 0;\r
		for (String str : arr) {\r
			str.concat(str + " " + ind);\r
			ind++;\r
		}\r
	}\r
\r
	public void printData(String[] arr) {\r
		for (String str : arr) {\r
			System.out.println(str);\r
		}\r
	}\r
\r
	public static void main(String[] args) {\r
		OrderTest ot = new OrderTest();\r
		String[] arr = new String[2];\r
		ot.initData(arr);\r
		ot.printData(arr);\r
	}\r
}`,cat:"arrays",hint:'When you do new String[2], you create a String array of two elements. arr is therefore not null. But each element of the array is not given any value and is therefore null. When you call a method on that element (i.e. str.concat(str+" "+ind); in initData), it will generate a NullPointerException, which is a RuntimeException.',respuestas:[{txt:`null 0
null 1`,isRight:!1},{txt:`0
1`,isRight:!1},{txt:`0
1
(There is a space before 0 and 1)`,isRight:!1},{txt:`null
null`,isRight:!1},{txt:"It will throw a RuntimeException at run time.",isRight:!0}]},{id:"a51",pregunta:`What will the following program print?

public class TestClass {\r
	public static void main(String[] args) {\r
		int x = 1;\r
		int y = 0;\r
		if (x / y)\r
			System.out.println("Good");\r
		else\r
			System.out.println("Bad");\r
	}\r
}`,hint:"You need a boolean in the 'if' condition. Here, compiler sees that there is no way x/y can produce a boolean so it generates an error at compile time.",cat:"if_else",respuestas:[{txt:"Good",isRight:!1},{txt:"Bad",isRight:!1},{txt:"Exception at runtime saying division by Zero.",isRight:!1},{txt:"It will not compile.",isRight:!0},{txt:"None of the above.",isRight:!1}]},{id:"a52",pregunta:`Consider the following code ...

class A {\r
	public void doA(int k) throws Exception { // 0\r
		for (int i = 0; i < 10; i++) {\r
			if (i == k)\r
				throw new Exception("Index of k is " + i); // 1\r
		}\r
	}\r
\r
	public void doB(boolean f) { // 2\r
		if (f) {\r
			doA(15); // 3\r
		} else\r
			return;\r
	}\r
\r
	public static void main(String[] args) { // 4\r
		A a = new A();\r
		a.doB(args.length > 0); // 5\r
	}\r
}

Which of the following statements are correct?`,hint:"",cat:"exceptions",respuestas:[{txt:"This will compile and run without any errors or exception.",isRight:!1},{txt:"This will compile if 'throws Exception' is added at line //2",isRight:!1},{txt:"This will compile if 'throws Exception' is added at line //4",isRight:!1},{txt:"This will compile if 'throws Exception' is added at line //2 as well as //4",isRight:!0},{txt:"This will compile if  line marked // 1 is enclosed in a try - catch block.",isRight:!1}]},{id:"a53",pregunta:`What is the result of executing the following fragment of code:

boolean b1 = false;\r
boolean b2 = false;\r
if (b2 = b1 != b2) {\r
	System.out.println("true");\r
} else {\r
	System.out.println("false");\r
}`,cat:"if_else",video:"ho5tT_YjT3k",respuestas:[{txt:"Compile time error.",isRight:!1},{txt:"It will print true;",isRight:!1},{txt:"It will print false;",isRight:!0},{txt:"Runtime error.",isRight:!1},{txt:"It will print nothing.",isRight:!1}]},{id:"a54",pregunta:`Given:
String a = "aAaA", b = "bbBB";
Which of the following statements will print YES ?`,hint:"",respuestas:[{txt:'if(a.endsWith("aa") || b.startsWith("BB")) System.out.println("YES");',isRight:!1},{txt:'if( (a.substring(1,2) + b.substring(2)).startsWith("AB") ) System.out.println("YES");',isRight:!0},{txt:`if(a.length() == b.replace('x', 'y').length()) System.out.println("YES");`,isRight:!0},{txt:'if( (a+b).charAt(4) != b.charAt(0)) System.out.println("YES");',isRight:!1,hint:"a+b will give you aAaAbbBB (a+b).charAt(4) will give you b (remember that indexing starts from 0) b.charAt(0) will also give you b. Since both are same and the condition is != (NOT EQUAL TO), YES is not printed."}]},{id:"a54",pregunta:"Which of the following statements are true?",hint:"",cat:"operators",respuestas:[{txt:"The modulus operator % can only be used with integral operands.",isRight:!1},{txt:"&& can have integral as well as boolean operands.",isRight:!1},{txt:"The arithmetic operators *, / and % have the same level of precedence.",isRight:!0},{txt:"+= can have integral as well as String operands.",isRight:!0}]},{id:"a55",pregunta:`What will the following program print?

class LoopTest {\r
	public static void main(String args[]) {\r
		int counter = 0;\r
		outer: for (int i = 0; i < 3; i++)\r
			middle: for (int j = 0; j < 3; j++)\r
				inner: for (int k = 0; k < 3; k++) {\r
					if (k - j > 0)\r
						break middle;\r
					counter++;\r
				}\r
		System.out.println(counter);\r
	}\r
}`,hint:"",cat:"The key is that the middle loop is broken as soon as k-j becomes > 0. This happens on every second iteration of inner loop when k is 1 and j is 0. Now, when middle is broken inner cannot continue. So the next iteration of outer starts.",video:"q4rCfZQtXDQ",respuestas:[{txt:"2",isRight:!1},{txt:"3",isRight:!0},{txt:"6",isRight:!1},{txt:"7",isRight:!1},{txt:"9",isRight:!1}]},{id:"a56",pregunta:`The following method will compile and run without any problems.

	public void switchTest(byte x) {\r
		switch (x) {\r
		case 'b': // 1\r
		default: // 2\r
		case -2: // 3\r
		case 80: // 4\r
		}\r
	}`,hint:"",cat:"methods",respuestas:[{txt:"true",isRight:!0},{txt:"false",isRight:!1}]},{id:"a57",pregunta:`How many string objects are created in the following code fragment?

Sting a, b, c;
a = new String("hello");
b = a;
c = a + b;`,hint:'The statement a = new String("hello"); creates not 1 but 2 String objects. The first one containing "hello" is created in the String pool due to the presence of a constant string hello in the code. The second string object is created in the heap area containing the same data as the first one because of the usage of the new keyword.  The statement b = a; does not create any new String.  The statement c= a+b; creates a new string in the heap containing hellohello.  So, a total of three strings are created.',cat:"String",respuestas:[{txt:"1",isRight:!1},{txt:"2",isRight:!1},{txt:"3",isRight:!0}]},{id:"a58",pregunta:`What will the following class print when compiled and run?

class Holder\r
{\r
   int value = 1;\r
   Holder link;\r
   public Holder(int val){ this.value = val; }\r
   public static void main(String[] args)\r
   {\r
      final Holder a = new Holder(5);\r
      Holder b = new Holder(10);\r
      a.link = b;\r
      b.link = setIt(a, b);\r
      System.out.println(a.link.value+" "+b.link.value);\r
   }\r
   \r
   public static Holder setIt(final Holder x, final Holder y)\r
   {\r
       x.link = y.link;\r
       return x;\r
   }\r
   \r
}`,hint:"",respuestas:[{txt:"It will not compile because 'a' is final.",isRight:!1},{txt:"It will not compile because method setIt() cannot change x.link.",isRight:!1},{txt:"It will print 5, 10.",isRight:!1},{txt:"It will print 10, 10.",isRight:!1},{txt:"It will throw an exception when run.",isRight:!0,hint:"When method setIt() executes, x.link = y.link, x.link becomes null because y.link is null so a.link.value throws NullPointerException."}]},{id:"a59",pregunta:"Which of the following method declarations correctly declares a method named sum that takes an array of integers and returns the sum of the values in that array?",hint:"",respuestas:[{txt:`sum(int[] : array) : int {
	// code here
}`,isRight:!1},{txt:`int sum(int[] : array)  {
	// code here
}`,isRight:!1},{txt:`sum(int[] array) : int {
	// code here
}`,isRight:!1},{txt:`int : sum(integer[] array) {
	// code here
}`,isRight:!1},{txt:`int sum(int array[]) {
	// code here
}`,isRight:!0}]},{id:"a60",pregunta:`What will the following statement print?

int marks = 90;
String exam = "OCJA";
System.out.printf("I scored %d marks in the %s exam!",  exam, marks );`,hint:"Cuando formateamos una cadena utilizando %d, %s, etc, los valores que le pasamos a estas variables, son evaluados en tiempo de ejecución. En tiempo de compilación sólo se evalúa que la cadena de texto sea válida, y lo es. Por tanto, tendríamos un error en tiempo de ejecución. ",respuestas:[{txt:"I scored 90 marks in the Java Foundations exam!",isRight:!1},{txt:"I scored OCAJF marks in the 90 exam!",isRight:!1},{txt:"Exception will be thrown at run time.",isRight:!0,hint:"The first format specifier is %d, so, the first argument should be an integer value. exam is a String and that will cause an exception to be thrown."},{txt:"Compilation error",isRight:!1}]},{id:"a61",pregunta:"Which of the following statements concerning the switch construct are true?",hint:"In a switch structure, only int values, strings or enum variables are permitted",cat:"switch",respuestas:[{txt:"A character literal can be used as a value for a case label.",isRight:!0},{txt:"A 'long' cannot be used as a switch variable.",isRight:!0},{txt:"An empty switch block is a valid construct.",isRight:!0},{txt:"A switch block must have a default label.",isRight:!1},{txt:"If present, the default label must be the last of all the labels.",isRight:!1}]},{id:"a62",pregunta:`What will happen when the following program is compiled and run?

public class SM {\r
	public String checkIt(String s) {\r
		if (s.length() == 0 || s == null) {\r
			return "EMPTY";\r
		} else\r
			return "NOT EMPTY";\r
	}\r
\r
	public static void main(String[] args) {\r
		SM a = new SM();\r
		a.checkIt(null);\r
	}\r
}`,hint:"",cat:"exceptions",respuestas:[{txt:"It will print EMPTY.",isRight:!1},{txt:"It will print NOT EMPTY.",isRight:!1},{txt:"It will throw NullPointerException.",isRight:!0},{txt:"It will print EMPTY if || is replaced with |.",isRight:!1}]},{id:"a63",pregunta:"Which of these statements are true?",hint:"",cat:"constructor",respuestas:[{txt:"All classes must explicitly define a constructor.",isRight:!1},{txt:"A constructor can be declared private.",isRight:!0},{txt:"A constructor can declare a return value.",isRight:!1},{txt:"A constructor must initialize all the member variables of a class.",isRight:!1},{txt:"A constructor can access the non-static members of a class.",isRight:!0}]},{id:"a64",pregunta:"Which of the following features are provided by a JDK?",hint:"",respuestas:[{txt:"Networking protocols",isRight:!0},{txt:"Versioning control system",isRight:!1},{txt:"Development tools",isRight:!0},{txt:"IDE",isRight:!1}]},{id:"a65",pregunta:`Given the following class, which statements can be inserted at line 1 without causing the code to fail compilation?

public class TestClass {\r
	int a;\r
	int b = 0;\r
	static int c;\r
\r
	public void m() {\r
		int d;\r
		int e = 0;\r
		// Line 1\r
	}\r
}`,hint:"",cat:"static",respuestas:[{txt:"b++",isRight:!0},{txt:"c++",isRight:!0},{txt:"d++",isRight:!1},{txt:"e++",isRight:!0},{txt:"a++",isRight:!0}]},{id:"a66",pregunta:"Which of the following statements are used to implement a boolean conditional statement in Java?",hint:"",cat:"if_else",respuestas:[{txt:"if",isRight:!0},{txt:"else-if",isRight:!1},{txt:"else",isRight:!0},{txt:"if-then-else",isRight:!1},{txt:"switch",isRight:!1},{txt:"for",isRight:!1}]},{id:"a67",pregunta:"Which of the following statements are true?",hint:"",cat:"static",respuestas:[{txt:"A static method can call other non-static methods in the same class by using the 'this' keyword.",isRight:!1},{txt:"A class may contain both static and non-static variables and both static and non-static methods. ",isRight:!0},{txt:"Every object of a class has its own instance of each non-static member variable.",isRight:!0},{txt:"Instance methods may access local variables of static methods.",isRight:!1},{txt:"All methods in a class are implicitly passed a 'this' parameter when called.",isRight:!1}]},{id:"a68",pregunta:`What will the following code snippet print?

int index = 1;
String[] strArr = new String[5];
String  myStr  = strArr[index];
System.out.println(myStr);`,hint:'Tendríamos una NullPointerException si llamásemos a un método del objeto myStr. Cuando intentamos imprimir un objeto nulo, Java intenta convertir dicho objeto en un String. En este caso, lo que hace es convertir el literal null en el texto "null"',cat:"arrays",respuestas:[{txt:"It will print nothing.",isRight:!1},{txt:"It will print null.",isRight:!0},{txt:"It will throw ArrayIndexOutOfBoundsException at runtime.",isRight:!1},{txt:"It will print some junk value.",isRight:!1},{txt:"None of the above.",isRight:!1}]},{id:"a69",pregunta:`Which line, if any, will give a compile time error ?

void test(byte x) {    \r
	switch(x)    {    \r
		case 'a':   // 1   \r
		case 256:   // 2    \r
		case 0:     // 3   \r
		default :   // 4   \r
		case 80:    // 5   \r
	}\r
}`,hint:"El rango de un dato de tipo byte, va de -127 a 128",cat:"methods",respuestas:[{txt:"Line 1 as 'a' is not compatible with byte.",isRight:!1},{txt:"Line 2 as 256 cannot fit into a byte.",isRight:!0},{txt:"No compile time error but a run time error at line 2.",isRight:!1},{txt:"Line 3 as the default label must be the last label in the switch statement.",isRight:!1},{txt:"There is nothing wrong with the code.",isRight:!1}]},{id:"a70",pregunta:`Consider the following code:

public class Varargs\r
{\r
   public void test()\r
   {\r
        test1(10);       //1\r
        test1(10, 20); //2\r
   }\r
\r
   public static void main(String[] args)\r
   {\r
     new Varargs().test();\r
   }\r
   \r
   //insert method here.\r
}

Which of the following lines can be added independently to the above class so that it will run without any errors or exceptions?`,hint:`Buscamos un único método que sirva para procesar tanto test1(10) como test1(10,20). Por ejemplo, el método
public void test1(int i, int j){}
 sólo serviría para procesar test1(10, 20)`,respuestas:[{txt:"public void test1(int i, int j){}",isRight:!1,hint:"This will work only for //2."},{txt:"public void test1(int i, int... j){}",isRight:!0},{txt:"public void test1(int... i){}",isRight:!0,hint:"public void test1(int... i){} Since the only parameter is a varargs of type int, it can take any number of integers. Thus, it satisfies both //1 and //2."},{txt:"public void test1(int i...){}",isRight:!1},{txt:"public void test1(int[] i){}",isRight:!1}]},{id:"a71",pregunta:"Which package contains Random class?",hint:"",cat:"random",respuestas:[{txt:"java.lang",isRight:!1},{txt:"java.util",isRight:!0},{txt:"java.math",isRight:!1},{txt:"java.net",isRight:!1}]},{id:"a72",pregunta:`Consider the following directory structure shown in Image 1 that displays available folders and classes and the code given below.

class StockQuote {\r
	Stock stock;\r
\r
	public StockQuote(Stock s) {\r
	}\r
\r
	public double computePrice() {\r
		return Helper.getPricer(stock).price();\r
	}\r
}

Assuming that the code uses valid method calls, what statements must be added to the above class?`,hint:"",respuestas:[{txt:"import com.enthu.*;",isRight:!1},{txt:"import com.*.*;",isRight:!1},{txt:"import *.*.*;",isRight:!1},{txt:"import com.*;",isRight:!0},{txt:"import com.enthu.rad.*;",isRight:!0},{txt:"import all;",isRight:!0}]},{id:"a73",pregunta:`Given the class
//Filename: Test.java \r
public class Test {\r
	public static void main(String args[]) {\r
		for (int i = 0; i < args.length; i++) {\r
			System.out.print("  " + args[i]);\r
		}\r
	}\r
}

Now consider the following 3 options for running the program:
a: java Test
b: java Test param1
c: java Test param1 param2

Which of the following statements are true?`,hint:"",cat:"arrays",respuestas:[{txt:"The program will throw java.lang.ArrayIndexOutofBoundsException on option a.",isRight:!1},{txt:"The program will throw java.lang.NullPointerException on option a.",isRight:!1},{txt:"The program will print Test param1 on option b.",isRight:!1},{txt:"It will print param1 param2 on option c.",isRight:!0},{txt:"It will not print anything on option a.",isRight:!0}]},{id:"a74",pregunta:`Given the following LOCs:

int i = 0;
char ch = 'a';

Which of the following will put correct integer value of the char variable ch into the int variable i?`,hint:"Un LOC es una línea de código. i = ch porque al almacenar un char dentro de un int estaremos almacenando el código ASCII del char. Los operadores de cambio de bits (bitwise shift operators) solo se pueden aplicar a variables numéricas enteras, como int, long, short, byte o tipos similares.",cat:"primitives",respuestas:[{txt:"i = ch ;",isRight:!0},{txt:"i = (int) ch ;",isRight:!0},{txt:"i << ch ;",isRight:!1},{txt:"i <<< ch",isRight:!1},{txt:"i += ch;",isRight:!0},{txt:"i := ch;",isRight:!1}]}],rm=[{pregunta:`What will the following code print?\r
List s1 = new ArrayList( );\r
s1.add("a");\r
s1.add("b");\r
s1.add("c");\r
s1.add("a");\r
System.out.println(s1.remove("a")+" "+s1.remove("x"));`,hint:"",cat:"arraylists",video:"EL6fwor17FI",respuestas:[{txt:"1 0",isRight:!1},{txt:"2 -1",isRight:!1},{txt:"2 0",isRight:!1},{txt:"1 -1",isRight:!1},{txt:"true false",isRight:!0}]},{pregunta:"Which of the following is NOT a primitive data value in Java?",hint:"",cat:"primitives",respuestas:[{txt:'"x"',isRight:!0},{txt:"'x'",isRight:!1},{txt:"10.2F",isRight:!1},{txt:"new Object()",isRight:!0},{txt:"false",isRight:!1}]},{pregunta:`Given:\r
\r
import java.util.*;\r
public class TestClass {\r
    public static void main(String[] args) throws Exception {\r
        ArrayList<Double> al = new ArrayList<>();\r
\r
        //INSERT CODE HERE\r
     }\r
}\r
What can be inserted in the above code so that it can compile without any error?`,hint:"No puedes almacenar un int en un objeto de tipo Double",respuestas:[{txt:"al.add(111);",isRight:!1},{txt:"System.out.println(al.indexOf(1.0));",isRight:!0},{txt:'System.out.println(al.contains("string"));',isRight:!0},{txt:"Double d = al.get(al.length);",isRight:!1,hint:"ArrayList does not have a field named length. It does have a method named size() though. So you can do: Double d = al.get(al.size()); It will compile but will throw IndexOutOfBoundsException at run time in this case because al.size() will return 0 and al.get(0) will try to get the first element in the list."}]},{pregunta:"Which of the following are valid declarations of the standard main method?",hint:"",respuestas:[{txt:"static void main(String args[ ]) { }",isRight:!1},{txt:"public static int main(String args[ ]) {}",isRight:!1},{txt:"public static void main (String args) { }",isRight:!1},{txt:"final static public void main (String[ ] arguments ) { }",isRight:!0},{txt:"public static void main (String[ ] args) { }",isRight:!0}]},{pregunta:`What will the following statement print?\r
\r
System.out.printf("I scored %d marks in the %s exam!",  "90%", "Java Foundations" );\r
`,hint:"",respuestas:[{txt:"I scored 90% marks in the Java Foundations exam!",isRight:!1},{txt:"I scored 90 marks in the Java Foundations exam!",isRight:!1},{txt:"Exception will be thrown at run time.",isRight:!0},{txt:'It will print I scored 90 marks in the Java Foundations exam! if "90%" is changed to "90" in the argument list.',isRight:!1}]},{pregunta:"Which of the following can be valid declarations of an integer variable?",hint:"",cat:"static",respuestas:[{txt:"global int x = 10;",isRight:!1},{txt:"final int x = 10;",isRight:!0},{txt:"public Int x = 10;",isRight:!1},{txt:"Int x = 10;",isRight:!1},{txt:"static int x = 10;",isRight:!0}]},{pregunta:`Given the following set of member declarations, which of the following is true?
int a;    //  (1)\r
static int a;    //  (2)\r
int f( )   { return a; }    //  (3)\r
static int f( ) { return a; }    //  (4)\r
`,hint:"",cat:"static",respuestas:[{txt:"Declarations (1) and (3) cannot occur in the same class definition.",isRight:!1},{txt:"Declarations (2) and (4) cannot occur in the same class definition.",isRight:!1},{txt:"Declarations (1) and (4) cannot occur in the same class definition.",isRight:!0},{txt:"Declarations (2) and (3) cannot occur in the same class definition.",isRight:!1},{txt:"Declarations (1) and (2) cannot occur in the same class definition.",isRight:!0}]},{pregunta:`\r
What is the result of executing the following fragment of code:\r
\r
\r
boolean b1 = false;\r
boolean b2 = false;\r
if (b2 != b1 = !b2)\r
{\r
   System.out.println("true");\r
}\r
else\r
{\r
   System.out.println("false");\r
}\r
`,hint:"",cat:"Note that  boolean operators have more precedence than =. (In fact, = has least precedence of all operators) so, in (b2 != b1 = !b2)  first b2 != b1 is evaluated which returns a value 'false'. So the expression becomes false = !b2. And this is illegal because false is a value and not a variable!",respuestas:[{txt:"Compile time error.",isRight:!0},{txt:"It will print true.",isRight:!1},{txt:"It will print false.",isRight:!1},{txt:"Runtime error.",isRight:!1},{txt:"It will print nothing.",isRight:!1}]},{pregunta:`Which of the following can be used as a constructor for the class shell given below?\r
\r
public class TestClass\r
{\r
   // lots of code ...\r
}`,hint:"",cat:"constructor",respuestas:[{txt:"public void TestClass() {...}",isRight:!1},{txt:"public TestClass() {...}",isRight:!0},{txt:"public static TestClass() {...}",isRight:!1},{txt:"public final TestClass() {...}",isRight:!1},{txt:"public TestClass(int x) { ...}",isRight:!0}]},{pregunta:`Which of the following methods do not follow JavaBeans naming conventions?\r
\r
public class Bond\r
{\r
   public String ticker;\r
   private double Coupon;\r
   public String getTicker()\r
   {\r
       return ticker;\r
   }\r
\r
   public void setTicker(String ticker)\r
   {\r
       this.ticker = ticker;\r
   }\r
\r
   public double getCoupon()\r
   {\r
      return Coupon;\r
   }\r
\r
   public void setCoupon(double coupon)\r
   {\r
      //do nothing\r
   }\r
\r
   public java.util.Date getMaturity()\r
   {\r
       return new java.util.Date();\r
   }\r
\r
   public boolean isFloater(){ return false; }\r
\r
   public boolean getCallable(){ return true; }\r
\r
}`,hint:`Here are the rules:
1. There must be a public Y getXxx() method for a property named xxx of type Y.
Conversly, if a class has a method public Y getXxx(), it is said to have a property named xxx of type Y. (A setter is not necessary, in which case it will be a readonly property.)
2. The setter method, if it exists, must be public void setXxx(Y y){ }
3. There is no rule for the variable xxx but making it private is a good practice.
It is ok even if a class does not have any variable xxx in the class, as shown by getMaturity() method in the question.
4. A boolean property xxx should have getXxx() or isXxx() method. The setter, if it exists, should be setXxx().`,respuestas:[{txt:"getTicker",isRight:!1},{txt:"getCoupon",isRight:!1},{txt:"setCoupon",isRight:!1},{txt:"getMaturity",isRight:!1},{txt:"isFloater",isRight:!1},{txt:"getCallable",isRight:!1},{txt:"All are valid.",isRight:!0}]},{pregunta:"Which method declarations will enable a class to be run as a standalone program?",hint:"",respuestas:[{txt:"static void main(String args[ ])",isRight:!1},{txt:"public void static main(String args[ ])",isRight:!1},{txt:"public static main(String[ ] argv)",isRight:!1},{txt:"final public static void main(String [ ] array)",isRight:!0},{txt:"public static void main(String args[ ])",isRight:!0}]},{pregunta:`What will the following code print?\r
\r
\r
class Test\r
{\r
    public static void main(String args[])\r
    {\r
        int c = 0;\r
        A: for(int i = 0; i < 2; i++)\r
        {\r
            B: for(int j = 0; j < 2; j++)\r
            {\r
                C: for(int k = 0; k < 3; k++)\r
                {\r
                    c++;\r
                    if(k>j) break;\r
                }\r
            }\r
        }\r
        System.out.println(c);\r
    }\r
}`,hint:"",cat:"bucle_for",video:"w7k7fqTlnPg",respuestas:[{txt:"7",isRight:!1},{txt:"8",isRight:!1},{txt:"9",isRight:!1},{txt:"10",isRight:!0},{txt:"11",isRight:!1}]},{pregunta:`Which of these statements regarding the following code are correct ?\r
\r
\r
public class TestClass\r
{\r
   static int a;\r
   int b;\r
   public TestClass()\r
   {\r
      int c;\r
      c = a;\r
      a++;\r
      b += c;\r
   }\r
   public static void main(String args[]) {   new TestClass();   }\r
}\r
`,hint:"",respuestas:[{txt:"The code will fail to compile, since the constructor is trying to access static members.",isRight:!1},{txt:"The code will fail to compile, since the constructor is trying to use static member variable a before it has been initialized.",isRight:!1},{txt:"The code will fail to compile, since the constructor is trying to use member variable b before it has been initialized.",isRight:!1},{txt:"The code will fail to compile, since the constructor is trying to use local variable c before it has been initialized.",isRight:!1},{txt:"The code will compile and run without any problems. ",isRight:!0}]},{pregunta:`In the following code what will be the output?\r
\r
\r
int x = 0;\r
   {\r
      loop: for (int i = 1; i < 5; i++)\r
      {\r
         for (int j = 1; j < 5; j++)\r
         {\r
            System.out.println(i);\r
            if (x == 0) {  continue loop;  }\r
            System.out.println(j);\r
         }\r
      }\r
   }\r
}`,cat:"bucle_for",video:"gmeZRg5DplY",respuestas:[{txt:"The program will not compile.",isRight:!1},{txt:"It will print 1 2 3 4",isRight:!0},{txt:"It will print 1 1 2 3 4",isRight:!1},{txt:"It will print 1 1 2 2 3 3 4 4",isRight:!1},{txt:"Produces no output",isRight:!1}]},{pregunta:`What will the following program print?\r
\r
class Test\r
{\r
    public static void main(String args[])\r
    {\r
        int c = 0;\r
        boolean flag = true;\r
        for(int i = 0; i < 3; i++)\r
        {\r
            while(flag)\r
            {\r
                c++;\r
                if(i>c || c>5) flag = false;\r
            }\r
        }\r
        System.out.println(c);\r
    }\r
}`,hint:"",cat:"bucle_while",video:"x-jJz3YAesE",respuestas:[{txt:"3",isRight:!1},{txt:"4",isRight:!1},{txt:"5",isRight:!1},{txt:"6",isRight:!0},{txt:"7",isRight:!1}]},{pregunta:`Consider the following class:\r
\r
public class ArgsPrinter\r
{\r
   public static void main(String args)\r
   {\r
      for(int i=0; i<3; i++)\r
      {\r
         System.out.println(args);\r
      }\r
   }\r
}\r
\r
What will be printed when the above class is run using the following command line:\r
java ArgsPrinter 1 2 3 4`,cat:"void_main",hint:"To run a class from the command line, you need a main(String[] ) method that takes an array of Strings not just a String. Therefore, the following error message will be generated at run time by the JVM: Error: Main method not found in class TestClass, please define the main method as:    public static void main(String[] args)",respuestas:[{txt:"1 2 3",isRight:!1},{txt:"ArgsPrinter 1 2",isRight:!1},{txt:"java ArgsPrinter 1 2",isRight:!1},{txt:"1 1 1",isRight:!1},{txt:"None of these.",isRight:!0}]},{pregunta:`What can be inserted at //1 and //2 in the code below so that it will print a number between 0.0 and 1.0?\r
(Assume that no package has been imported in the code.)\r
\r
       //1\r
       double d = //2\r
       System.out.println(d);\r
`,hint:"",cat:"random",respuestas:[{txt:`java.util.Random r = new java.util.Random();
and
r.random();`,isRight:!1},{txt:`Random r = new Random();
and
r.random();`,isRight:!1},{txt:`java.util.Random r = new java.util.Random();
and
r.nextDouble();`,isRight:!0},{txt:`Random r = new Random();
and
r.next();`,isRight:!1}]},{pregunta:`Which of these is the correct format to use to create the char literal of value a?

Assume that a is the unicode value for a.`,cat:"primitives",hint:"unicode es una codificación en la se asignan 4 dígitos hexadecimales para cada caracter del juego de caracteres. Puedes almacenar un valor unicode en un char o en un String.",respuestas:[{txt:"'a'",isRight:!1},{txt:'"a"',isRight:!1},{txt:"new Character(a)",isRight:!1},{txt:"a",isRight:!1},{txt:"'\\u0061'",isRight:!0}]},{pregunta:`What will the following program print?\r
\r
\r
class Test\r
{\r
    public static void main(String args[])\r
    {\r
        int i=0, j=0;\r
        X1: for(i = 0; i < 3; i++)\r
        {\r
            X2: for(j = 3; j > 0; j--)\r
            {\r
                if(i < j) continue X1;\r
                else break X2;\r
            }\r
        }\r
        System.out.println(i+" "+j);\r
    }\r
}`,hint:"",video:"B8YJ7L11_T0",cat:"bucle_for",respuestas:[{txt:"0 3",isRight:!1},{txt:"0 2",isRight:!1},{txt:"3 0",isRight:!1},{txt:"3 3",isRight:!0},{txt:"2 2",isRight:!1}]},{pregunta:`Given the following two lines of code:\r
\r
int rate = 10;\r
XXX amount = 1 - rate/100*1 - rate/100;\r
\r
\r
What can XXX be?`,hint:"Java realiza una conversión implícita de tipo de datos cuando es posible hacerlo sin pérdida de información. En este caso, la expresión en la línea de código se evalúa como un valor decimal que luego se redondea al número entero más cercano para ser almacenado en una variable de tipo int.",cat:"primitives",respuestas:[{txt:"only int or long",isRight:!1},{txt:"only long or double",isRight:!1},{txt:"only double",isRight:!1},{txt:"int, long, float, or double",isRight:!0},{txt:"long or double but not int or float.",isRight:!1}]},{pregunta:"Which code fragments will print the last argument given on the command line to the standard output, and exit without any output and exceptions on the command line if no arguments are given?",hint:"",cat:"exceptions",respuestas:[{txt:`public static void main(String args[ ]) {
	if (args.length != 0)   System.out.println(args[args.length-1]); 
}`,isRight:!0},{txt:`public static void main(String args[ ]) {
	try {System.out.println(args[args.length-1]);        }
	catch (ArrayIndexOutOfBoundsException e) {    } 
}`,isRight:!0},{txt:`public static void main(String args[ ]) {
	int i = args.length;
	if (i != 0) System.out.println(args[i-1]); 
}`,isRight:!0},{txt:`public static void main(String args[ ]) {
	int i = args.length-1;
	if (i > 0) System.out.println(args[i]); 
}`,isRight:!1},{txt:`public static void main(String args[ ]) {
	try { System.out.println(args[args.length-1]); }
	catch (NullPointerException e) {}
}`,isRight:!1}]},{pregunta:`Consider the following method:\r
\r
public static void ifTest(boolean flag)\r
{\r
   if (flag)   //1\r
   if (flag)   //2\r
   if (flag)   //3\r
   System.out.println("False True");\r
   else        //4\r
   System.out.println("True False");\r
   else        //5\r
   System.out.println("True True");\r
   else        //6\r
   System.out.println("False False");\r
}\r
\r
\r
Which of the following statements are correct ?`,hint:"Es mucho más fácil sin intentamos poner las llaves en el sitio correcto",cat:"if_else",respuestas:[{txt:"If run with an argument of 'false', it will print 'False False'",isRight:!0},{txt:"If run with an argument of 'false', it will print 'True True'",isRight:!1},{txt:"If run with an argument of 'true', it will print 'True False'",isRight:!1},{txt:"It will never print 'True True'",isRight:!0},{txt:"It will not compile.",isRight:!1}]},{pregunta:`Which digits and in what order will be printed when the following program is run?\r
\r
public class TestClass\r
{\r
   public static void main(String args[])\r
   {\r
      int k = 0;\r
      try{\r
         int i = 5/k;\r
      }\r
      catch (ArithmeticException e){\r
         System.out.println("1");\r
      }\r
      catch (RuntimeException e){\r
         System.out.println("2");\r
         return ;\r
      }\r
      catch (Exception e){\r
         System.out.println("3");\r
      }\r
      finally{\r
         System.out.println("4");\r
      }\r
      System.out.println("5");\r
   }\r
}`,hint:"",cat:"exceptions",video:"G9wbzvK_JP4",respuestas:[{txt:"The program will print 5.",isRight:!1},{txt:"The program will print 1 and 4, in that order.",isRight:!1},{txt:"The program will print 1, 2 and 4, in that order.",isRight:!1},{txt:"The program will print 1, 4 and 5, in that order.",isRight:!0},{txt:"The program will print 1,2, 4 and 5, in that order.",isRight:!1}]},{pregunta:"Which of the following statements are true?",hint:"",cat:"operators",respuestas:[{txt:'System.out.println(1 + 2 + "3"); would print 33.',isRight:!0},{txt:'System.out.println("1" + 2 + 3); would print 15.',isRight:!1},{txt:"System.out.println(4 + 1.0f); would print 5.0",isRight:!0},{txt:"System.out.println(5/4); would print 1.25",isRight:!1},{txt:"System.out.println('a' + 1 ); would print b.",isRight:!1}]},{pregunta:`\r
What will the following code print when compiled and run?\r
import java.util.*;\r
public class TestClass {\r
    public static void main(String[] args) throws Exception {\r
        ArrayList<String> al = new ArrayList<String>();\r
        al.add("111");\r
        al.add("222");\r
        System.out.println(al.get(al.size()));\r
     }\r
}`,hint:"",cat:"exceptions",respuestas:[{txt:"It will not compile.",isRight:!1},{txt:"It will throw a NullPointerException at run time.",isRight:!1},{txt:"It will throw an IndexOutOfBoundsException at run time.",isRight:!0},{txt:"222",isRight:!1},{txt:"null",isRight:!1}]},{pregunta:"You are developing a class that represents a Book. Which data type will you use for storing the ISBN number, which is an alphanumeric number, of the book",hint:"",cat:"String",respuestas:[{txt:"int",isRight:!1},{txt:"char",isRight:!1},{txt:"String",isRight:!0},{txt:"None of these.",isRight:!1}]},{pregunta:`What will the following code print when compiled and run?\r
\r
public class TestClass{\r
   public static void main(String[] args){\r
        int[] arr = { 1, 2, 3, 4, 5, 6 };\r
        int counter = 0;\r
        for (int value : arr) {\r
           if (counter >= 5) {\r
               break;    \r
           } else {\r
            continue;    \r
           }\r
           if (value > 4) {\r
             arr[counter] = value + 1;    \r
           }    \r
           counter++;\r
        }\r
        System.out.println(arr[counter]);\r
   }\r
\r
}`,hint:`Justo encima de este if:

if (value > 4) {
\rarr[counter] = value + 1;
}

 tengo un if-else que contiene un break y un continue, luego es imposible que podamos avanzar más allá de este primer if-else.`,respuestas:[{txt:"It will not compile.",isRight:!0},{txt:"It will throw an exception at run time.",isRight:!1},{txt:"5",isRight:!1},{txt:"6",isRight:!1},{txt:"7",isRight:!1},{txt:"8",isRight:!1}]},{pregunta:"Identify valid for constructs:",hint:"",cat:"bucle_for",video:"w5fcInL-ZG8",respuestas:[{txt:`for(;Math.random()<0.5;) {
	System.out.println("true"); }`,isRight:!0},{txt:`for(;;Math.random()<0.5) {
	System.out.println("true"); 
}`,isRight:!1,hint:"Here, the second expression is empty, which is valid and it is interpreted as true. However, there is a restriction on the 3rd part. Java allows only the following statements here:  PreIncrementExpression, PreDecrementExpression, PostIncrementExpression, PostDecrementExpression, MethodInvocation, and ClassInstanceCreationExpression. Therefore, this will not compile."},{txt:`for(;;Math.random()) {
	System.out.println("true"); 
}`,isRight:!0},{txt:`for(;;) {
	if(Math.random()<.05) break;
}`,isRight:!0}]},{pregunta:"Which of the following code fragments are valid method declarations?",hint:"",cat:"methods",respuestas:[{txt:"void method1{ }",isRight:!1},{txt:"void method2( ) { }",isRight:!0},{txt:"void method3(void){ }",isRight:!1},{txt:"method4{ }",isRight:!1},{txt:"method5(void){ }",isRight:!1}]},{pregunta:`Given:\r
int a = 5,  b = 2, c = 30;\r
System.out.println(a + ++b * c  );\r
\r
\r
What is the result?`,hint:"",cat:"operators",video:"nmCTGVOux6E",respuestas:[{txt:"65",isRight:!1},{txt:"210",isRight:!1},{txt:"180",isRight:!1},{txt:"95",isRight:!0},{txt:"Compilation failure",isRight:!1}]},{pregunta:`What will the following program print?\r
\r
class Test\r
{\r
   public static void main(String args[])\r
   {\r
      int k = 9, s = 5;\r
      switch(k)\r
      {\r
         default :\r
         if( k == 10) { s = s*2; }\r
         else\r
         {\r
            s = s+4;\r
            break;\r
         }\r
         case 7 : s = s+3;\r
      }\r
      System.out.println(s);\r
   }\r
}`,hint:"",cat:"switch",video:"W1Yw7v8qsQs",respuestas:[{txt:"5",isRight:!1},{txt:"9",isRight:!0},{txt:"12",isRight:!1},{txt:"It will not compile.",isRight:!1}]},{pregunta:"Which of the following is a benefit of encapsulation?",hint:"A parte de la definición de beans, la encapsulación también abarca la definición de interfaces para a través de sus diferentes implementaciones no necesitar cambiar el código.",cat:"encapsulamiento",respuestas:[{txt:"It allows you to add functionality by extending the class.",isRight:!1},{txt:"It allows you to plug and play different components without changing the code.",isRight:!1},{txt:"It allows you the change the implementation of the internal logic without changing the API.",isRight:!0},{txt:"It allows you to couple one class with another.",isRight:!1},{txt:"It provides control over data.",isRight:!1}]},{pregunta:"Which of these statements concerning the charAt() method of java.lang.String class are true?",hint:"El método charAt recibe un valor entero, y un char puede ser implícitamente convertido en un entero.",cat:"String",respuestas:[{txt:"The charAt( ) method can take a char value as an argument.",isRight:!0,hint:"Yes, it can because it takes an int and char will be implicitly promoted to int."},{txt:"The charAt( ) method returns a Character object.",isRight:!1},{txt:'The expression char ch = "12345".charAt(3) will assign 3 to ch.',isRight:!1},{txt:'The expression char ch = str.charAt(str.length()) where str is "12345", will assign 3 to ch.',isRight:!1},{txt:"The index of the first character is 0.",isRight:!0}]},{pregunta:"Which of the following are valid declarations:",hint:"",cat:"primitives",respuestas:[{txt:"int a = b = c = 100;",isRight:!1},{txt:"int a, b, c; a = b = c = 100;",isRight:!0},{txt:"int a, b, c=100;",isRight:!0},{txt:"int a=100, b, c;",isRight:!0},{txt:"int a= 100 = b = c;",isRight:!1}]},{pregunta:`What will be the result of attempting to compile and run the following program?\r
\r
class TestClass\r
{\r
   public static void main(String args[])\r
   {\r
      int i = 0;\r
      loop :         // 1\r
      {\r
         System.out.println("Loop Lable line");\r
         try\r
         {\r
            for (  ;  true ;  i++ )\r
            {\r
               if( i >5) break loop;       // 2\r
            }\r
         }\r
         catch(Exception e)\r
         {\r
            System.out.println("Exception in loop.");\r
         }\r
         finally\r
         {\r
            System.out.println("In Finally");      // 3\r
         }\r
      }\r
   }\r
}`,hint:"",respuestas:[{txt:"Compilation error at line 1 as this is an invalid syntax for defining a label.",isRight:!1},{txt:"Compilation error at line 2 as 'loop' is not visible here.",isRight:!1},{txt:"No compilation error and line 3 will be executed.",isRight:!0},{txt:"No compilation error and line 3 will NOT be executed.",isRight:!1},{txt:"Only the line with the label Loop will be printed.",isRight:!1}]},{pregunta:`Given the following code snippet:\r
\r
int rate = 10;\r
int t = 5;\r
XXX amount = 1000.0;\r
for(int i=0; i<t; t++)\r
{\r
   amount = amount*(1 - rate/100);\r
}\r
\r
What can XXX be?`,hint:"Para que la primitiva pueda ser de tipo float, habría que poner una f al valor que le asignamos a la variable",cat:"primitives",respuestas:[{txt:"int",isRight:!1},{txt:"long",isRight:!1},{txt:"only double",isRight:!0},{txt:"double or float",isRight:!1},{txt:"float",isRight:!1}]},{pregunta:`What will be the result of attempting to compile and run the following program?\r
\r
class TestClass\r
{\r
   public static void main(String args[])\r
   {\r
      boolean b = false;\r
      int i = 1;\r
      do\r
      {\r
         i++ ;\r
      } while (b = !b);\r
      System.out.println( i );\r
   }\r
}`,hint:"",cat:"bucle_while",video:"-vvtUwo7QvE",respuestas:[{txt:"The code will fail to compile because the while statement used in the code has an invalid condition expression.",isRight:!1},{txt:"It will compile but will throw an exception at runtime.",isRight:!1},{txt:"It will print 3.",isRight:!0},{txt:"It will create an infinite loop.",isRight:!1},{txt:"It will print 1.",isRight:!1}]},{pregunta:`Consider the following two java files in /home/user directory:\r
\r
//file A.java\r
package com.enthu;\r
class A\r
{\r
}\r
\r
//file B.java\r
package com.foo;\r
class B\r
{\r
}\r
\r
\r
The files are compiled using the following command line:\r
\r
javac -d /home *.java\r
\r
Where will the class files be created?`,hint:"",cat:"void_main",respuestas:[{txt:"Both A.class and B.class in /home",isRight:!1},{txt:"A.class in /home/com/enthu and B.class in /home/com/foo",isRight:!0},{txt:"Both A.class and B.class in /home/classes",isRight:!1},{txt:"No class file will be generated.",isRight:!1}]},{pregunta:"A Java method ....",hint:"",cat:"methods",respuestas:[{txt:"cannot return multiple values.",isRight:!0},{txt:"cannot be private.",isRight:!1},{txt:"must take 1 or more parameters.",isRight:!1},{txt:"must return a value.",isRight:!1},{txt:"must exist inside a type definition.",isRight:!0}]},{pregunta:`What will be the result of attempting to compile and run the following class?\r
\r
public class IfTest\r
{\r
   public static void main(String args[])\r
   {\r
      if (true)\r
      if (false)\r
      System .out.println("True False");\r
      else\r
      System.out.println("True True");\r
   }\r
}`,hint:"",cat:"if_else",respuestas:[{txt:"The code will fail to compile because the syntax of the if statement is not correct.",isRight:!1},{txt:"The code will fail to compile because the values in the condition bracket are invalid.",isRight:!1},{txt:"The code will compile correctly and will not display anything.",isRight:!1},{txt:"The code will compile correctly and will display 'True True'.",isRight:!0},{txt:"The code will compile correctly but will display 'True False'",isRight:!1}]},{pregunta:`Given:\r
\r
public class Test\r
{\r
    static int a;\r
    int b;\r
\r
    public void incr(){\r
       int c = a++;\r
       b++;\r
       c++;\r
       System.out.println(a+" "+b+" "+c);\r
    }\r
   public static void main(String args[])\r
   {\r
      Test test = new Test();\r
      test.incr();\r
      a++;\r
      test = new Test();\r
      test.incr();\r
   }\r
}\r
\r
\r
What will be the output?`,hint:"",cat:"static",video:"sX5lobvS_uw",respuestas:[{txt:`1 1 1
2 1 2`,isRight:!1},{txt:`1 1 1
3 1 3`,isRight:!0},{txt:`1 2 1
2 3 3`,isRight:!1},{txt:`1 2 1
3 3 3`,isRight:!1}]},{pregunta:"The JRE contains:",hint:"",cat:"java",respuestas:[{txt:"Java API",isRight:!1},{txt:"Virtual machine",isRight:!0},{txt:"debugging tools",isRight:!1},{txt:"IDE",isRight:!1},{txt:"Java Application Launcher",isRight:!0}]},{pregunta:"Which of the following are primitive integral types in java?",hint:"",cat:"primitives",respuestas:[{txt:"float",isRight:!1},{txt:"nibble",isRight:!1},{txt:"char",isRight:!0},{txt:"byte",isRight:!0},{txt:"short",isRight:!0},{txt:"int",isRight:"true"},{txt:"natural",isRight:!1}]},{pregunta:`Consider the following class definition:\r
\r
public class TestClass\r
{\r
   public static void main(){  new TestClass().sayHello(); }   //1\r
   public static void sayHello(){ System.out.println("Static Hello World"); }  //2\r
   public void sayHello() { System.out.println("Hello World "); }  //3\r
}\r
\r
What will be the result of compiling and running the class?`,hint:"",respuestas:[{txt:"It will print 'Hello World'.",isRight:!1},{txt:"It will print 'Static Hello World'.",isRight:!1},{txt:"Compilation error at line 2.",isRight:!1},{txt:"Compilation error at line 3.",isRight:!0,hint:"The compiler will generate an error saying method sayHello() is already defined."},{txt:"Runtime Error.",isRight:!1}]},{pregunta:`What will the following code print?\r
String abc = "";\r
abc.concat("abc");\r
abc.concat("def");\r
System.out.println(abc);\r
`,hint:"",cat:"String",respuestas:[{txt:"abc",isRight:!1},{txt:"abcdef",isRight:!1},{txt:"def",isRight:!1},{txt:"It will print empty string (or in other words, nothing).",isRight:!0},{txt:"It will not compile because there is no concat() method in String class.",isRight:!1}]},{pregunta:`The following code snippet will not compile...\r
\r
int i = 10;\r
System.out.println( i<20 ? out1() : out2() );\r
\r
Assume that out1 and out2 have method signature: public void out1(); and public void out2();.`,hint:"",cat:"methods",respuestas:[{txt:"True",isRight:!0},{txt:"False",isRight:!1}]},{pregunta:`What will be written to the standard output when the following program is run?\r
\r
\r
public class TrimTest\r
{\r
   public static void main(String args[])\r
   {\r
      String blank  = " ";  // one space\r
      String line = blank + "hello" + blank + blank;\r
      line.concat("world");\r
      String newLine  =  line.trim();\r
      System.out.println((int)(line.length() + newLine.length()));\r
   }\r
}`,hint:"",cat:"",video:"nSzpjIudP2c",respuestas:[{txt:"25",isRight:!1},{txt:"24",isRight:!1},{txt:"23",isRight:!1},{txt:"22",isRight:!1},{txt:"None of the above.",isRight:!0,hint:"It will print 13 !!!"}]},{pregunta:"Which of the following are literals?",hint:`The exam expects you to understand the meaning of reserved words, keywords, and literals.

1. Keywords: The Java language reserves the following 50 character sequences for use as keywords and cannot be used as identifiers. These words are have a special meaning in the Java language and so they cannot be used as anything else such as variable names in your code.  abstract assert boolean break byte case catch char class const continue default do double else enum extends final finally float for goto if implements import instanceof int interface long native new package private protected public return short static strictfp super switch synchronized this throw throws transient try void volatile while

2. Reserved words: There is no special category of words by the name of reserved words. Keywords and reserved words mean the same thing. So, all of the above are also "reserved words". Observe that the words const and goto are also included in the above list even though they have no special meaning in the language.

3. Literals: true and false might appear to be keywords, but they are technically boolean literals. Similarly, while null might appear to be a keyword, it is technically the null literal. You cannot use literals as identifiers either.`,respuestas:[{txt:"goto",isRight:!1},{txt:"case",isRight:!1},{txt:"break",isRight:!1},{txt:"true",isRight:!0},{txt:"false",isRight:!0},{txt:"null",isRight:!0},{txt:"Integer",isRight:!1}]},{pregunta:`Given:\r
\r
public class Test\r
{\r
    public int div(int a, int b) throws Exception {\r
        try{\r
            return a/b;\r
        }catch(ArithmeticException ae){\r
            System.out.println("exception in div");\r
            return 0;\r
        }\r
    }\r
    \r
   public static void main(String args[])\r
   {\r
      Test test = new Test();\r
      try{\r
          System.out.println(test.div(5, 0));\r
      }catch(Exception e){\r
          System.out.println("exception in main");\r
      }\r
   }\r
}\r
\r
What is the output?`,hint:"",cat:"exceptions",respuestas:[{txt:`exception in div
exception in main`,isRight:!1},{txt:"exception in div",isRight:!1},{txt:"exception in main",isRight:!1},{txt:`exception in div
0`,isRight:!0},{txt:"Compilation failure",isRight:!1}]},{pregunta:`What will the following code print when run?\r
\r
public class Mambo {\r
\r
public static String makeItBetter(String str) {\r
  return str+"!!!";\r
}\r
\r
public static void main(String args[]){\r
   String str = "Hi";\r
   str = makeItBetter(str);\r
   System.out.println(str);\r
\r
}\r
}`,hint:"",cat:"static",video:"VoaKq0AEUzE",respuestas:[{txt:"Hi!!!",isRight:!0},{txt:"Hi",isRight:!1},{txt:"Hi!!!!!!",isRight:!1},{txt:"None of these.",isRight:!1}]},{pregunta:`Given:\r
\r
class Acct {\r
    int id;\r
    double balance;\r
    \r
    public Acct(int id, double balance){\r
        this.id = id;\r
        this.balance =  balance;\r
    }\r
    public void setId(int id){\r
        this.id = id;\r
    }\r
    public void setBalance(double balance){\r
        this.balance = balance;\r
    }\r
}\r
public class Account{\r
    public static void main(String[] args) {\r
\r
        //INSERT CCODE HERE        \r
\r
        System.out.println(acct.id+" "+acct.balance);\r
    }\r
}\r
\r
What can be inserted in the above code so that it will print 10 10.0?`,hint:"Dado que la clase Acct tiene un constructor con parámetro, no podremos instanciar dicha clase utilizando el default constructor.",respuestas:[{txt:`Acct acct = new Acct();
acct.id = 10;
acct.balance = 10.0;`,isRight:!1},{txt:"Acct acct = new Acct(10, 10);",isRight:!0},{txt:`Acct acct = new Acct();
acct.setId(10);
acct.setBalance(10.0);`,isRight:!1},{txt:`Acct acct = new Acct();
acct.setId(10);
acct.setBalance(10.0);`,isRight:!1},{txt:`Acct acct = null;
acct.id = 10;
acct.balance = 10.0;`,isRight:!1},{txt:`Acct acct;
acct.id = 10;
acct.balance = 10.0;`,isRight:!1}]},{pregunta:`Consider the following code:\r
\r
class Test\r
{\r
  public static void main(String[] args)\r
  {\r
    for (int i = 0; i < args.length; i++)   System.out.print(i == 0 ? args[i] : " " + args[i]);\r
  }\r
}\r
\r
What will be the output when it is run by giving the following command:\r
java Test good bye friend!`,hint:"",cat:"arrays",respuestas:[{txt:"It will print good bye friend!",isRight:!0},{txt:"It will print good good good",isRight:!1},{txt:"It will print goodgoodgood",isRight:!1},{txt:"It will print good bye",isRight:!1},{txt:"None of the above.",isRight:!1}]},{pregunta:`What will the following code print when run?\r
\r
      List s1 = new ArrayList( ); //1\r
      s1.add("ann");//2\r
      if(s1.contains("ann")) //3\r
      s1.add("ann");//4\r
      System.out.println(s1.size()+" "+s1.indexOf("ann"));//5\r
`,hint:"",cat:"arraylists",video:"rZLMuHLnces",respuestas:[{txt:"1 0",isRight:!1},{txt:"2 0",isRight:!0},{txt:"2 1",isRight:!1},{txt:"1 1",isRight:!1},{txt:"Compilation failure",isRight:!1},{txt:"an exception at run time",isRight:!1}]},{pregunta:`What can be the return type of method getSwitch so that this program compiles and runs without any problems?\r
\r
\r
public class TestClass\r
{\r
   public static XXX getSwitch(int x)\r
   {\r
      return x - 20/x + x*x;\r
   }\r
   public static void main(String args[])\r
   {\r
      switch( getSwitch(10) )\r
      {\r
         case 1 :\r
         case 2 :\r
         case 3 :\r
         default : break;\r
      }\r
   }\r
}`,hint:"La estructura switch no acepta long, float ni double.",cat:"static",respuestas:[{txt:"int",isRight:!0},{txt:"float",isRight:!1},{txt:"long",isRight:!1},{txt:"double",isRight:!1},{txt:"char",isRight:!1},{txt:"byte",isRight:!1},{txt:"short",isRight:!1}]},{pregunta:"Your GUI screen contains a text field for username. The String variable used to store the value entered by the user is named userName. Which of the following lines of code will you use to check whether the userName is empty or not? A value containing only spaces is also considered empty.",hint:"",cat:"String",respuestas:[{txt:'userName.equals("")',isRight:!1},{txt:'userName.removeWhiteSpaces().equals("")',isRight:!1},{txt:"userName.trim().length == 0",isRight:!1},{txt:'userName.trim().equals("")',isRight:!0}]},{pregunta:`Consider the following code in file TestClass.java:\r
\r
public class TestClass\r
{\r
  public static void main(String[] args)\r
  {\r
     System.out.println("Hello!!!");\r
  }\r
}\r
\r
This file is compiled and run using the following command line:\r
java -version TestClass\r
\r
What will be the output?`,hint:"",cat:"void_main",respuestas:[{txt:"The Java interpreter will print the version information and then exit without running the java class.",isRight:!0},{txt:'It will print the version information followed by "Hello!!!".',isRight:!1},{txt:'It will only print "Hello!!!".',isRight:!1},{txt:"It will print an error message and exit.",isRight:!1}]},{pregunta:`What will the following code print?\r
\r
public class BreakTest\r
{\r
  public static void main(String[] args)\r
  {\r
    int i = 0, j = 5;\r
    lab1 : for( ; ; i++)\r
    {\r
      for( ; ; --j)  if( i >j ) break lab1;\r
    }\r
    System.out.println(" i =" + i + " , j = " + j);\r
  }\r
}`,hint:"",cat:"bucle_for",video:"2ZsZ5d3mmP0",respuestas:[{txt:"i = 1, j = -1",isRight:!1},{txt:"i = 1, j = 4",isRight:!1},{txt:"i = 0, j = 4",isRight:!1},{txt:"i = 0, j = -1",isRight:!0},{txt:"It will not compile.",isRight:!1}]},{pregunta:`What is the result of executing the following fragment of code:\r
\r
boolean b1 = false;\r
boolean b2  = false;\r
if (b2 = b1 == false)\r
{\r
   System.out.println("true");\r
} else\r
{\r
   System.out.println("false");\r
}\r
`,cat:"if_else",video:"BMDn7C0Qnn0",respuestas:[{txt:"Compile time error.",isRight:!1},{txt:"It will print true;",isRight:!0},{txt:"It will print false;",isRight:!1},{txt:"Runtime error.",isRight:!1},{txt:"It will print nothing.",isRight:!1}]},{pregunta:`Given:\r
\r
package strings;\r
public class StringFromChar {\r
    \r
    public static void main(String[] args) {\r
        String myStr = "good";\r
        char[] myCharArr = {'g', 'o', 'o', 'd' };\r
        \r
        String newStr = null;\r
        for(char ch : myCharArr){\r
            newStr = newStr + ch;\r
        }\r
\r
        System.out.println((newStr == myStr)+ " " + (newStr.equals(myStr)));\r
        \r
    }\r
}\r
\r
What will it print when compiled and run?`,hint:'Since newStr is null at the beginning, the first iteration of the loop assigns "nullg" to newStr. Therefore, at the end of the loop, newStr is actually "nullgood".',cat:"arrays",respuestas:[{txt:"true true",isRight:!1},{txt:"true false",isRight:!1},{txt:"false true",isRight:!1},{txt:"false false",isRight:!0}]},{pregunta:"Which of the following correctly declare a variable which can hold an array of 10 integers?",hint:"Size of the array is NEVER specified on the Left Hand Side.",cat:"arrays",respuestas:[{txt:"int[ ] iA",isRight:!0},{txt:"int[10] iA",isRight:!1},{txt:"int iA[ ]",isRight:!0},{txt:"Object[ ] iA",isRight:!1},{txt:"Object[10] iA",isRight:!1}]},{pregunta:`What is the effect of compiling and running this class ?\r
\r
public class TestClass\r
{\r
   public static void main (String args [])\r
   {\r
      int sum = 0;\r
      for (int i = 0, j = 10; sum > 20; ++i, --j)      // 1\r
      {\r
         sum = sum+ i + j;\r
      }\r
      System.out.println("Sum = " + sum);\r
   }\r
}\r
\r
`,hint:"Note that the loop condition is sum >20 and not sum <20. Thus, the loop will not execute even once.",cat:"bucle_for",respuestas:[{txt:"Compile time error at line 1.",isRight:!1},{txt:"It will print Sum = 0",isRight:!0},{txt:"It will print Sum = 20",isRight:!1},{txt:"Runtime error.",isRight:!1},{txt:"None of the above.",isRight:!1}]},{pregunta:`What will the following statement print?
System.out.printf("This is %s %s", "what", "it", "is");`,hint:"",cat:"String",respuestas:[{txt:"This is what it",isRight:!0},{txt:"This is it is",isRight:!1},{txt:"Exception will be thrown at run time because the number of arguments and the number of format specifiers in the input string do not match.",isRight:!1},{txt:"Compilation failure",isRight:!1}]},{pregunta:"Which of the following statements are valid ?",hint:"",cat:"String",respuestas:[{txt:'String[ ] sa = new String[3]{ "a", "b", "c"};',isRight:!1},{txt:'String sa[ ] = { "a", "b", "c"};',isRight:!0},{txt:'String sa = new String[ ]{"a", "b", "c"};',isRight:!1},{txt:'String sa[ ] = new String[ ]{"a", "b", "c"};',isRight:!0},{txt:'String sa[ ] = new String[ ] {"a" "b" "c"};',isRight:!1}]},{pregunta:`What is the result of executing the following code when the value of i is 5:\r
\r
\r
switch (i)\r
{\r
    default:\r
    case 1:\r
        System.out.println(1);\r
    case 0:\r
        System.out.println(0);\r
    case 2:\r
        System.out.println(2);\r
        break;\r
    case 3:\r
        System.out.println(3);\r
}`,hint:"",cat:"switch",video:"7GZ8TUZ0bPg",respuestas:[{txt:"It will print 1 0 2",isRight:!0},{txt:"It will print 1 0 2 3",isRight:!1},{txt:"It will print 1 0",isRight:!1},{txt:"It will print 1",isRight:!1},{txt:"Nothing will be printed.",isRight:!1}]},{pregunta:`What will the following code print when run?\r
\r
public class Mambo {\r
static int m = 10, n = 20;\r
public static void main(String args[]){\r
   int m = 0, n = 10;\r
   Mambo mb = new Mambo();\r
   while(m<3) {\r
    m++; n--;\r
   }\r
   System.out.println(m+", "+n);\r
}\r
}\r
`,hint:"",cat:"bucle_while",respuestas:[{txt:"10, 20",isRight:!1},{txt:"9, 19",isRight:!1},{txt:"3, 7",isRight:!0},{txt:"None of these.",isRight:!1}]},{pregunta:`What will the following program print?\r
\r
\r
public class TestClass\r
{\r
  public static void main(String[] args)\r
  {\r
    unsigned byte b = 0;\r
    b--;\r
    System.out.println(b);\r
  }\r
}\r
`,hint:"There no unsigned keyword in java!",respuestas:[{txt:"0",isRight:!1},{txt:"-1",isRight:!1},{txt:"255",isRight:!1},{txt:"-128",isRight:!1},{txt:"It will not compile.",isRight:!0}]},{pregunta:"Which of the following are valid operators in Java?",hint:"",cat:"operators",respuestas:[{txt:"!",isRight:!0},{txt:"!!",isRight:!1},{txt:"&&",isRight:!0},{txt:"%=",isRight:!0},{txt:"$",isRight:!1}]},{pregunta:`Which of the following four constructs are valid....\r
1.                                 3.\r
   switch(5)                             switch(8);\r
   {\r
      default :\r
   }\r
\r
2.                                 4. int x = 0;\r
   switch(5)                          switch(x)\r
   {                                  {\r
      default : break;\r
   }                                  }`,hint:"",cat:"switch",video:"YQYPdG_4gqM",respuestas:[{txt:"1, 3",isRight:!1},{txt:"1, 2, 3",isRight:!1},{txt:"All are valid.",isRight:!1},{txt:"3, 4",isRight:!1},{txt:"1, 2, 4.",isRight:!0}]},{pregunta:`What will the following program print?\r
\r
public class TestClass\r
{\r
  static int someInt = 10;\r
  public static void changeIt(int a)\r
  {\r
    a = 20;\r
  }\r
  public static void main(String[] args)\r
  {\r
    changeIt(someInt);\r
    System.out.println(someInt);\r
  }\r
}\r
\r
`,hint:"",cat:"static",video:"h-OVFO5_4Zk",respuestas:[{txt:"10",isRight:!0},{txt:"20",isRight:!1},{txt:"It will not compile.",isRight:!1},{txt:"It will throw an exception at runtime.",isRight:!1},{txt:"None of the above.",isRight:!1}]},{pregunta:`Which of the following expressions correctly implement the following equation:\r
\r
y = 10x² + 20x + 30\r
\r
Assume that all variables are of type ints.`,hint:"",cat:"operators",respuestas:[{txt:"y = 10**x + 20*x + 30;",isRight:!1},{txt:"y = x*(10*x + 20) + 30;",isRight:!0},{txt:"y = 10*x^2 + 20*x +20;",isRight:!1},{txt:"y = 10*x*x + 20*x + 30;",isRight:!0},{txt:"y = 10*x** + 20*x + 30;",isRight:!1}]}],im=[{pregunta:"Which of the following statements is correct?",hint:"",cat:"java",respuestas:[{txt:"new, delete, and goto are keywords in the Java language",isRight:!1},{txt:"try, catch, and thrown are keywords in the Java language",isRight:!1},{txt:"static, unsigned, and long are keywords in the Java language",isRight:!1},{txt:"exit, class, and while are keywords in the Java language",isRight:!1},{txt:"return, goto, and default are keywords in the Java language",isRight:!0}]},{pregunta:`What can be inserted in the following code so that it will print true when run?\r
\r
\r
      List s1 = new ArrayList( );\r
      s1.add("ann");\r
      s1.add("bella");\r
   \r
      //INSERT CODE HERE\r
\r
     System.out.println(flag);\r
`,hint:"",cat:"arraylists",respuestas:[{txt:'boolean flag = s1.contains("bella");',isRight:!0},{txt:'boolean flag = s1.indexOf("bella")>1;',isRight:!1},{txt:'boolean flag = s1.contains("bella") == 1;',isRight:!1},{txt:"boolean flag = s1.length()>1;",isRight:!1}]},{pregunta:`What will the following code print?\r
        int x = 1;\r
        int y = 2;\r
        int z = x++;\r
        int a = --y;\r
        int b = z--;\r
        b += ++z;\r
\r
        int answ = x>a?y>b?y:b:x>z?x:z;\r
        System.out.println(answ);\r
`,cat:"if_else",video:"eCBCRrSCWxQ",respuestas:[{txt:"0",isRight:!1},{txt:"1",isRight:!1},{txt:"2",isRight:!0},{txt:"-1",isRight:!1},{txt:"-2",isRight:!1}]},{pregunta:"Identify the correct statements about ArrayList.",hint:"",respuestas:[{txt:"Standard JDK provides no subclasses of ArrayList.",isRight:!1},{txt:"An ArrayList cannot store primitives.",isRight:!0},{txt:"It allows constant time access to all its elements.",isRight:!0,hint:"it implements java.util.RandomAccess interface, which is a marker interface that signifies that you can directly access any element of this collection. This also implies that it takes the same amount of time to access any element."},{txt:"ArrayList cannot resize dynamically if you add more number of elements than its capacity.",isRight:!1},{txt:"An ArrayList is backed by an array.",isRight:!0,hint:'This is true. The elements are actually stored in an array and that is why is it called an ArrayList. (The expression "backed by an array" means that the implementation of ArrayList actually uses an array to store'},{txt:"Elements can be inserted into an ArrayList at various positions using the assignment operator.",isRight:!1}]},{pregunta:`What will the following code print when compiled and run?\r
\r
public class Account {\r
    double balance;\r
    public void update(int[] balances){\r
        for(int bal :  balances){\r
            bal = 100;\r
        }\r
    }\r
    \r
    public static void main(String[] args) {\r
        int[] balances = new int[2];\r
        balances[0] = 10;\r
        balances[1] = 20;\r
        for(int bal :  balances){\r
            System.out.print(bal+" ");\r
        }\r
        Account a = new Account();\r
        a.update(balances);\r
        for(int bal :  balances){\r
            System.out.print(bal+" ");\r
        }\r
    }\r
}`,hint:"",cat:"arrays",video:"DCOcjdnMre8",respuestas:[{txt:"10 20 100 100",isRight:!1},{txt:"10 20 10 20",isRight:!0},{txt:"Compilation failure",isRight:!1},{txt:"An exception will be thrown at run time.",isRight:!1}]},{pregunta:"Given a class named Test, which of these would be valid definitions for the constructors for the class?",hint:"",cat:"constructor",respuestas:[{txt:"Test(Test b) { }",isRight:!0},{txt:"Test Test( ) { }",isRight:!1},{txt:"private final Test( ) { }",isRight:!1},{txt:"void Test( ) { }",isRight:!1},{txt:"public static void Test(String args[ ] ) { }",isRight:!1}]},{pregunta:`What will the following code print?\r
public class TestClass\r
{\r
        int x = 5;\r
        int getX(){ return x; }\r
\r
        public static void main(String args[]) throws Exception\r
        {\r
            TestClass tc = new TestClass();\r
            tc.looper();\r
            System.out.println(tc.x);\r
        }\r
        \r
        public void looper()\r
        {\r
            int x = 0;\r
            while( (x = getX()) != 0 )\r
            {\r
                for(int m = 10; m>=0; m--)\r
                {\r
                    x = m;\r
                }\r
            }\r
        }\r
}`,hint:"La variable x declarada al principio del método looper está eclipsando al atributo x declarado en la clase TestClass. Por tanto, cuando modificamos el valor de x dentro del bucle for, no estamos modificando el atributo global x. Cuando llamamos al método getX(), este siempre devolverá 5, ya que no lo habremos modificado. Esto hará que el bucle while se repita infinitamente.",respuestas:[{txt:"It will not compile.",isRight:!1},{txt:"It will throw an exception at runtime.",isRight:!1},{txt:"It will print 0.",isRight:!1},{txt:"It will print 5.",isRight:!1},{txt:"None of these.",isRight:!0,hint:"Tendremos un bucle infinito. Observa que hay dos x, la local y la global."}]},{pregunta:`What will the following lines of code print?\r
\r
String s = "java";\r
s.replace('j', 'l');\r
s = s.substring(0, 2);\r
System.out.println(s);\r
`,hint:"",cat:"String",respuestas:[{txt:"java",isRight:!1},{txt:"lava",isRight:!1},{txt:"la",isRight:!1},{txt:"ja",isRight:!0},{txt:"lav",isRight:!1}]},{pregunta:`What will be printed when the following code snippet is executed?\r
\r
String str = "123456789";\r
String s = str.substring(2, 5);\r
System.out.println(s);`,hint:"",cat:"String",respuestas:[{txt:"23456",isRight:!1},{txt:"345678",isRight:!1},{txt:"45678",isRight:!1},{txt:"2345",isRight:!1},{txt:"3456",isRight:!1},{txt:345,isRight:!0}]},{pregunta:`Following is not a valid comment:
/* this comment /* // /** is not valid */`,hint:"",cat:"comments",respuestas:[{txt:"true",isRight:!1},{txt:"false",isRight:!0}]},{pregunta:`What what will the following statement:
  "    hello java guru
   ".trim();  return ?`,hint:"",cat:"String",respuestas:[{txt:"The line of code will not Compile.",isRight:!1},{txt:'"hellojavaguru"',isRight:!1},{txt:'"hello java guru"',isRight:!0},{txt:'"hello java guru   "',isRight:!1},{txt:"None of the above.",isRight:!1}]},{pregunta:`Given the following code, which method declarations can be inserted at line 1 without any problems?\r
\r
public class OverloadTest\r
{\r
    public int sum(int i1, int i2) { return i1 + i2; }\r
    // 1\r
}\r
`,hint:"",cat:"herencia",respuestas:[{txt:"public int sum(int a, int b) { return a + b; }",isRight:!1},{txt:"public int sum(long i1, long i2) { return (int) i1; }",isRight:!0},{txt:"public int sum(int i1, long i2) { return (int) i2; }",isRight:!0},{txt:"public long sum(long i1, int i2) { return i1 + i2; }",isRight:!0},{txt:"public long sum(int i1, int i2) { return i1 + i2; }",isRight:!1}]},{pregunta:"Identify correct statements:",hint:"",cat:"java",respuestas:[{txt:"Java development environment requires an IDE to be installed before the JDK.",isRight:!1},{txt:"Java development environment is installed by default for all major operating systems.",isRight:!1},{txt:"Java development environment requires you to install the JRE first.",isRight:!1},{txt:"Java development environment is set up when you download an install the JDK for your platform.",isRight:!0},{txt:"Both JDK and JRE are required for setting up the Java development environment.",isRight:!1},{txt:"Java development environment is the combination of JDK, JRE, and IDE.",isRight:!1}]},{pregunta:`What will be the output of the following class...\r
\r
\r
class Test\r
{\r
   public static void main(String[] args)\r
   {\r
      int j = 1;\r
      try\r
      {\r
         int i = doIt() / (j = 2);\r
      } catch (Exception e)\r
      {\r
         System.out.println(" j = " + j);\r
      }\r
   }\r
   public static int doIt() throws Exception {  throw new Exception("FORGET IT");  }\r
}\r
`,hint:`If evaluation of the left-hand operand of a binary operator completes 
abruptly, no part of the right-hand operand appears to have been evaluated. 
In the given code, as soon as doIt() throws exception, the statement execution is aborted. Therefore, the rest of the expression (i.e. j = 2) never gets executed.`,cat:"exceptions",video:"Uf8yrCM37k0",respuestas:[{txt:"It will print j = 1;",isRight:!0},{txt:"It will print j = 2;",isRight:!1},{txt:"The value of j cannot be determined.",isRight:!1},{txt:"It will not compile.",isRight:!1},{txt:"None of the above.",isRight:!1}]},{pregunta:"Which of the following is illegal ?",hint:"",cat:"primitives",respuestas:[{txt:"char c = 320;",isRight:!1},{txt:"float f = 320;",isRight:!1},{txt:"double d = 320;",isRight:!1},{txt:"byte b = 320;",isRight:!0},{txt:"None of the above is illegal.",isRight:!1}]},{pregunta:`What will the following program print?\r
\r
\r
public class TestClass\r
{\r
  public static void main(String[] args)\r
  {\r
     for : for(int i = 0; i< 10; i++)\r
     {\r
        for (int j = 0; j< 10; j++)\r
        {\r
             if ( i+ j > 10 )  break for;\r
        }\r
        System.out.println( "hello");\r
     }\r
  }\r
}\r
\r
`,hint:"Note that 'for' is a keyword and so cannot be used as a label.",cat:"bucle_for",respuestas:[{txt:'It will print "hello" 6 times.',isRight:!1},{txt:"It will not compile.",isRight:!0},{txt:'It will print "hello" 2 times.',isRight:!1},{txt:'It will print "hello" 5 times.',isRight:!1},{txt:'It will print "hello" 4 times.',isRight:!1}]},{pregunta:`What would be the result of attempting to compile and run the following program?\r
\r
class TestClass\r
{\r
   static TestClass ref;\r
   String[] arguments;\r
   public static void main(String args[])\r
   {\r
      ref = new TestClass();\r
      ref.func(args);\r
   }\r
   public void func(String[] args)\r
   {\r
      ref.arguments = args;\r
   }\r
}\r
\r
\r
`,hint:"",cat:"static",respuestas:[{txt:"The program will fail to compile, since the static method main is trying to call the non-static method func.",isRight:!1},{txt:"The program will fail to compile, since the non-static method func cannot access the static member variable ref.",isRight:!1},{txt:"The program will fail to compile, since the argument args passed to the static method main cannot be passed on to the non-static method func.",isRight:!1},{txt:"The program will fail to compile, since method func is trying to assign to the non-static member variable 'arguments' through the static member variable ref.",isRight:!1},{txt:"The program will compile and run successfully.",isRight:!0}]},{pregunta:"Which of the following statements about an array are correct?",hint:"",cat:"arraylists",respuestas:[{txt:"An array can dynamically grow in size.",isRight:!1},{txt:"Arrays can be created only for primitive types.",isRight:!1},{txt:"Every array has a built in property named 'size' which tells you the number of elements in the array.",isRight:!1},{txt:"Every array has an implicit method named 'length' which tells you the number of elements in the array.",isRight:!1},{txt:"Element indexing for arrays as well as for Lists starts at 0.",isRight:!0}]},{pregunta:"Which class definition uses the naming conventions of Java Programming?",hint:"",cat:"classes",respuestas:[{txt:`class coursemanagement{
	String course_ID;
	final int PASSING_MARKS = 50;
	public void enrollStudents(){ }
}`,isRight:!1},{txt:`class CourseManagement{
	String courseID;
	final int PASSING_MARKS = 50;
	public void EnrollStudents(){ }
}`,isRight:!1},{txt:`class CourseManagement{
	String str_course_id;
	final int INT_PASSING_MARKS = 50;
	public void EnrollStudents(){ }
}`,isRight:!1},{txt:`class CourseManagement{
	String courseID;
	final int CONST_PASSING_MARKS = 50;
	public void enrollStudents(){ }
}`,isRight:!1,hint:"Constant variables should be named in all uppercase/capital letters. This eliminates the need to explicitly indicate a variable as constant using prefix such as CONST. Thus, CONST_PASSING_MARKS should simply be PASSING_MARKS."},{txt:`class CourseManagement{
	String courseId;
	final int PASSING_MARKS = 50;
	public void enrollStudents(){ }
}`,isRight:!0},{txt:`class courseManagement{
	String courseId;
	final int PASSING_MARKS = 50;
	public void enrollStudents(){ }
}`,isRight:!1}]},{pregunta:`Given the following code, which of these statements are true?\r
\r
\r
public class TestClass\r
{\r
   public static void main(String args[])\r
   {\r
      int k = 0;\r
      int m = 0;\r
      for ( int i = 0; i <= 3; i++)\r
      {\r
         k++;\r
         if ( i == 2)\r
         {\r
            // line 1\r
         }\r
         m++;\r
      }\r
      System.out.println( k + ", " + m );\r
   }\r
}`,hint:"",cat:"bucle_for",respuestas:[{txt:"It will print 3, 2 when line 1 is replaced by break;",isRight:!0},{txt:"It will print 3, 2 when line 1 is replaced by continue.",isRight:!1},{txt:"It will print 4, 3 when line 1 is replaced by continue.",isRight:!0},{txt:"It will print 4, 4 when line 1 is replaced by i = m++;",isRight:!1},{txt:"It will print 3, 3 when line 1 is replaced by i = 4;",isRight:!0}]},{pregunta:`What will the following method return if called with an argument of 7?\r
\r
public int transformNumber(int n)\r
{\r
   int radix = 2;\r
   int output = 0;\r
   output += radix*n;\r
   radix = output/radix;\r
   if(output<14)\r
   {\r
       return output;\r
   }\r
   else\r
   {\r
       output = output*radix/2;\r
       return output;\r
   }\r
   else\r
   {\r
       return output/2;\r
   }\r
\r
}\r
`,hint:"Hay dos else consecutivos",cat:"methods",respuestas:[{txt:"7",isRight:!1},{txt:"14",isRight:!1},{txt:"49",isRight:!1},{txt:"Compilation fails.",isRight:!0}]},{pregunta:`How many times will the line marked //1 be called in the following code?\r
\r
int x = 10;\r
do\r
{\r
   x--;\r
   System.out.println(x);  // 1\r
} while(x<10);\r
`,hint:`A do-while loop is always executed at least once. So in the first iteration, x is decremented and becomes 9. Now the while condition is tested, which returns true because 9 is less than 10. So the loop is executed again with x = 9. In the loop, x is decremented to 8 and the condition is tested again, which again returns true because 8 is less than 10.

As you can see, x keeps on decreasing by one in each iteration and every time the condition x<10 returns true. However, after x reaches -2147483648, which is its MIN_VALUE, it cannot decrease any further and at this time when x-- is executed, the value rolls over to 2147483647, which is Integer.MAX_VALUE. At this time, the condition x<10 fails and the loop terminates.`,cat:"bucle_while",respuestas:[{txt:"0",isRight:!1},{txt:"1",isRight:!1},{txt:"9",isRight:!1},{txt:"10",isRight:!1},{txt:"None of these.",isRight:!0}]},{pregunta:"Which of the following implementations of a max() method will correctly return the largest value?",hint:"",cat:"methods",respuestas:[{txt:`int max(int x, int y)   {
	return(  if(x > y){ x; } else{ y; }  );
}`,isRight:!1},{txt:`int max(int x, int y)   {
	return( if(x > y){ return x; }  else{ return y; } );
}`,isRight:!1},{txt:` int max(int x, int y)   {
	switch(x < y){
		case true:
			return y;
		default :
		return x;
	};
}`,isRight:!1},{txt:`int max(int x, int y) {
	if (x > y)  return x;
	return y;
}`,isRight:!0}]},{pregunta:`What will the following program print?\r
\r
public class TestClass\r
{\r
  static String str;\r
  public static void main(String[] args)\r
  {\r
     System.out.println(str);\r
  }\r
}\r
`,hint:"",cat:"static",respuestas:[{txt:"It will not compile.",isRight:!1},{txt:"It will compile but throw an exception at runtime.",isRight:!1},{txt:"It will print 'null'",isRight:!0},{txt:"It will print nothing.",isRight:!1},{txt:"None of the above.",isRight:!1}]},{pregunta:`Consider the following code:\r
        String[] dataList = {"x", "y", "z"};\r
        for (String dataElement : dataList) {\r
            int innerCounter = 0;\r
            while (innerCounter < dataList.length) {\r
                System.out.println(dataElement + ", " + innerCounter);\r
                innerCounter++;\r
            }\r
\r
        }\r
\r
How many times will the output contain 2?`,cat:"arrays",video:"JF4ScDpcx6s",respuestas:[{txt:"0",isRight:!1},{txt:"1",isRight:!1},{txt:"2",isRight:!1},{txt:"3",isRight:!0},{txt:"4",isRight:!1},{txt:"It will fail to compile.",isRight:!1}]},{pregunta:`What will the following program print?\r
\r
\r
public class TestClass\r
{\r
  public static void main(String[] args)\r
  {\r
     Object obj1 = new Object();\r
     Object obj2 = obj1;\r
     if( obj1.equals(obj2) ) System.out.println("true");\r
     else  System.out.println("false");\r
  }\r
}\r
`,hint:"",cat:"if_else",video:"eCBCRrSCWxQ",respuestas:[{txt:"true",isRight:!0},{txt:"false",isRight:!1},{txt:"It will not compile.",isRight:!1},{txt:"It will compile but throw an exception at run time.",isRight:!1},{txt:"None of the above.",isRight:!1}]},{pregunta:"Using a break in a while loop causes the loop to break the current iteration and start the next iteration of the loop.",hint:"",cat:"bucle_while",respuestas:[{txt:"True",isRight:!1},{txt:"False",isRight:!0}]},{pregunta:"Which of the following statements will correctly create and initialize an array of Strings to non null elements?",hint:"",cat:"arrays",respuestas:[{txt:'String[] sA = new String[1] { "aaa"};',isRight:!1},{txt:'String[] sA = new String[] { "aaa"};',isRight:!0},{txt:'String[] sA = new String[1] ; sA[0] = "aaa";',isRight:!0},{txt:'String[] sA = {new String( "aaa")};',isRight:!1},{txt:'String[] sA = { "aaa"};',isRight:!0}]},{pregunta:`What will be the output of the following program?\r
\r
\r
public class TestClass\r
{\r
   public static void main(String[] args) throws Exception\r
   {\r
      try{\r
         amethod();\r
         System.out.println("try");\r
      }\r
      catch(Exception e){\r
         System.out.println("catch");\r
      }\r
      finally {\r
         System.out.println("finally");\r
      }\r
      System.out.println("out");\r
   }\r
\r
public static void amethod(){ }\r
\r
}\r
`,hint:"",cat:"exceptions",video:"kIpWvME4urM",respuestas:[{txt:"try finally",isRight:!1},{txt:"try finally out",isRight:!0},{txt:"try out",isRight:!1},{txt:"catch finally out",isRight:!1},{txt:"It will not compile because amethod() does not throw any exception.",isRight:!1}]},{pregunta:`Which of the following code snippets will print exactly 10?\r
\r
\r
1.\r
Object t = new Integer(106);\r
int k = ((Integer) t).intValue()/10;\r
System.out.println(k);\r
\r
2. System.out.println(100/9.9);\r
\r
3. System.out.println(100/10.0);\r
\r
4. System.out.println(100/10);\r
\r
5. System.out.println(3 + 100/10*2-13);\r
`,hint:"En el ejercicio indican que el valor resultante debe ser 10 exacto. En este sentido cuando opero números de tipo double, obtengo un número de tipo double, el cual, aunque el resultado sea exacto, sería 10.0, que no es un valor aceptado en la pregunta.",respuestas:[{txt:"1",isRight:!0},{txt:"2",isRight:!1,hint:"Since one of the operands (9.9) is a double, it wil perform a real division and will print 10.1010101010101"},{txt:"3",isRight:!1,hint:"Since one of the operands (10.0) is a double, it will perform a real division and will print 10.0"},{txt:"4",isRight:!0},{txt:"5",isRight:!0}]},{pregunta:`What is the result of compiling and running the following program?\r
\r
public class Learner {\r
    public static void main(String[] args) {\r
        String[] dataArr = new String[4];\r
        dataArr[1] = "Bill";\r
        dataArr[2] = "Steve";\r
        dataArr[3] = "Larry";\r
        try{\r
            for(String data : dataArr){\r
                System.out.print(data+" ");\r
            }\r
        }catch(Exception e){\r
            System.out.println(e.getClass());\r
        }\r
    }\r
}\r
`,hint:"",cat:"arrays",respuestas:[{txt:"Bill Steve Larry null",isRight:!1},{txt:"Bill Steve Larry class java.lang.NullPointerException",isRight:!1},{txt:"class java.lang.Exception Bill Steve Larry",isRight:!1},{txt:"Bill Steve Larry class java.lang.Exception",isRight:!1},{txt:"null Bill Steve Larry",isRight:!0}]},{pregunta:`Given the following code:\r
\r
class References\r
{\r
  String s1;\r
  String s2 = null;\r
  Integer i1 = new Integer();\r
  int i2;\r
  File f;\r
  Object b = f;\r
}\r
\r
How many object references are bring created?`,hint:`  String s1;  // s1 is a reference of class String. Since it is an instance member, by default, it is initialized to point to null.
String s2 = null; // s2 is a reference of class String. It has been explicity set to point to null.
Integer i1 = new Integer(); // i1 is a reference of class Integer. It is pointing a an Integer object created using new.
int i2; // i2 is a primitive. It is not a reference.
File f; // f is a reference of class File. It is pointing to null.
Object b = f; // b is a references of class Object. It has been set to point to the object pointed to by f. Since f is pointing to null, b will also point to null).
Thus, in all there are 5 object references - s1, s2, i1, f, and b.
There is only one object, created at new Integer().
There is only one primitive, i.e. i2.`,respuestas:[{txt:"3",isRight:!1},{txt:"4",isRight:!1},{txt:"5",isRight:!0},{txt:"6",isRight:!1},{txt:"7",isRight:!1},{txt:"8",isRight:!1}]},{pregunta:`What will the following code snippet print when run?\r
\r
String str = "asdfasdf";\r
char ch = str.charAt(3);\r
if(ch == 'a') str = str.replace('a', 'x');\r
else if(ch == 'f') str = str.replace('s', 'x');\r
System.out.println(str);\r
`,hint:"",cat:"String",respuestas:[{txt:"asdfasdf",isRight:!1},{txt:"axdfaxdf",isRight:!0},{txt:"axdfasdf",isRight:!1},{txt:"xsdfxsdf",isRight:!1},{txt:"xsdfasdf",isRight:!1}]},{pregunta:`What will the following code print when compiled and run?\r
\r
import java.util.*;\r
public class TestClass {\r
    public static void main(String[] args) throws Exception {\r
        List list = new ArrayList();\r
        list.add("val1"); //1\r
        list.add(2, "val2"); //2\r
        list.add(1, "val3"); //3\r
        System.out.println(list);\r
     }\r
}`,hint:`La línea

list.add(2, "val2");

está intentando poner en valor en la segunda posición, pero para conseguirlo, la lista debe tener al menos 2 valores, y en el momento de de la inserción, no los tiene.`,respuestas:[{txt:"It will not compile.",isRight:!1},{txt:"It will throw an exception at run time because of line //1",isRight:!1},{txt:"It will throw an exception at run time because of line //2",isRight:!0,hint:"This line is trying to put a value in an ArrayList at index 2 (i.e. 3rd position). To be able to put a value at index 2, the ArrayList must have atleast 2 values already. Therefore, it will throw java.lang.IndexOutOfBoundsException exception."},{txt:"It will throw an exception at run time because of line //3",isRight:!1},{txt:"null",isRight:!1}]},{pregunta:`Consider the following program:\r
\r
public class TestClass\r
{\r
  public static void main(String[] args)\r
  {\r
    String tom = args[0];\r
    String dick = args[1];\r
    String harry = args[2];\r
  }\r
}\r
\r
What will the value of 'harry' if the program is run from the command line:\r
java TestClass 111 222 333\r
`,hint:"",cat:"arrays",respuestas:[{txt:"111",isRight:!1},{txt:"222",isRight:!1},{txt:"333",isRight:!0},{txt:"It will throw an ArrayIndexOutOfBoundsException",isRight:!1},{txt:"None of the above.",isRight:!1}]},{pregunta:`Given the complete contents of TestClass.java file:\r
package x;\r
public class TestClass {\r
    ArrayList<String> al;\r
    public void init(){\r
        al = new ArrayList<>();\r
        al.add("Name 1");\r
        al.add("Name 2");\r
    }\r
    public static void main(String[] args) throws Exception {\r
        TestClass tc = new TestClass();\r
        tc.init();\r
        System.out.println("Size = "+tc.al.size());\r
    }\r
}\r
Which import statement should be added to make it compile?`,hint:"",cat:"arraylists",respuestas:[{txt:"import java.lang.*;",isRight:!1},{txt:"import java.lang.ArrayList;",isRight:!1},{txt:"import java.util.ArrayList;",isRight:!0},{txt:"import java.collections.ArrayList;",isRight:!1},{txt:"No import is necessary.",isRight:!1}]},{pregunta:"Which of the following are benefits of ArrayList over an array?",hint:"",cat:"arraylists",respuestas:[{txt:"You do not have to worry about the size of the ArrayList while appending elements.",isRight:!0},{txt:"It consumes less memory space.",isRight:!1},{txt:"You do not have to worry about thread safety.",isRight:!1}]},{pregunta:`Which of the following expressions will evaluate to true if preceded by the following code?\r
\r
    String a = "java";\r
    char[] b = { 'j', 'a', 'v', 'a' };\r
    String c = new String(b);\r
    String d = a;\r
`,hint:"",cat:"String",respuestas:[{txt:"(a == d)",isRight:!0},{txt:"(b == d)",isRight:!1},{txt:'(a == "java")',isRight:!0},{txt:"a.equals(c)",isRight:!0}]},{pregunta:`Given that java.lang.Integer class has a public static field named MAX_VALUE, which of the given options should be inserted at line 1 so that the following code can compile without any errors?\r
\r
\r
package objective1;\r
// 1\r
public class StaticImports\r
{\r
    \r
    public StaticImports()\r
    {\r
    out.println(MAX_VALUE);\r
    }\r
    \r
}\r
`,hint:"El orden de las keywords para un static import debe ser 'import static...' ",cat:"static",respuestas:[{txt:"import static java.lang.Integer.*;",isRight:!0},{txt:"static import java.lang.System.out;",isRight:!1},{txt:"static import Integer.MAX_VALUE;",isRight:!1}]},{pregunta:'Which of the following are true about the "default" constructor?',hint:"",cat:"constructor",respuestas:[{txt:"It is provided by the compiler only if the class does not define any constructor.",isRight:!0},{txt:"It initializes the instance members of the class.",isRight:!1},{txt:"It calls the default 'no-args' constructor of the super class.",isRight:!0},{txt:"It initializes instance as well as class fields of the class.",isRight:!1},{txt:"It is provided by the compiler if the class does not define a 'no- args' constructor.",isRight:!1}]},{pregunta:`What will be the output of the following program (excluding the quotes)?\r
\r
public class SubstringTest\r
{\r
   public static void main(String args[])\r
   {\r
      String String = "string isa string";\r
      System.out.println(String.substring(3, 6));\r
   }\r
}\r
`,hint:'String String = "string isa string"; es una sintaxis perfectamente válida',respuestas:[{txt:"It will not compile.",isRight:!1},{txt:'"ing is"',isRight:!1},{txt:'"ing isa"',isRight:!1},{txt:'"ing " (There is a space after g)',isRight:!1},{txt:"None of the above.",isRight:!0,hint:"It will print 'ing'. (No space after 'g')"}]},{pregunta:`What will the following code print?\r
\r
void crazyLoop()\r
{\r
   int c = 0;\r
   JACK: while (c < 8)\r
   {\r
      JILL: System.out.println(c);\r
      if (c > 3) break JILL; else c++;\r
   }\r
}\r
`,hint:"JILL debe etiquetar un bucle o un bloque ({}). En este caso, no está etiquetando ninguna de las dos cosas.",cat:"methods",respuestas:[{txt:"It will not compile.",isRight:!0,hint:"Because break JILL; would be valid only if JILL is labelling a loop or a block. In this case, there is no loop/block for break JILL; to break."},{txt:"It'll throw an exception at runtime.",isRight:!1},{txt:"It will print numbers from 0 to 8",isRight:!1},{txt:"It will print numbers from 0 to 3",isRight:!1},{txt:"It will print numbers from 0 to 4",isRight:!1}]},{pregunta:`Which of the following are valid class declarations?
(Not the whole class, just the declaration).`,hint:"Una clase sólo puede tener el modificador public (o private en el clase de una clase interna)",respuestas:[{txt:"public class Hello ",isRight:!0},{txt:"private class Hello ",isRight:!1,cat:"Although private modifier is allowed for inner classes it is not allowed for top level classes. Inner classes are not on this exam."},{txt:"class Hello implements Listener",isRight:!1},{txt:"class Hello throws Exception",isRight:!1}]},{pregunta:`What will the following program print?\r
\r
class Test\r
{\r
   public static void main(String args[])\r
   {\r
      int var = 20, i=0;\r
      do\r
      {\r
         while(true)\r
         {\r
         if( i++ > var) break;\r
         }\r
      }while(i<var--);\r
      System.out.println(var);\r
   }\r
}\r
`,hint:"",cat:"bucle_while",video:"D_Lb3As82ps",respuestas:[{txt:"19",isRight:!0},{txt:"20",isRight:!1},{txt:"21",isRight:!1},{txt:"22",isRight:!1},{txt:"It'll enter an infinite loop.",isRight:!1}]},{pregunta:`What will the following code print when run?\r
\r
public class Mambo {\r
\r
public static void main(String args[]){\r
   for(int i=0; i< 5; i++){\r
     if(i == 2) continue;\r
   }\r
   System.out.println(i);\r
}\r
}\r
`,hint:"i ha sido definido dentro del bucle for y por tanto no existe fuera.",cat:"bucle_fore",respuestas:[{txt:"2",isRight:!1},{txt:"3",isRight:!1},{txt:"4",isRight:!1},{txt:"5",isRight:!1},{txt:"It will not compile.",isRight:!0,hint:'Observe that i has been defined inside the "for loop". Therefore, it cannot be used outside the loop. The line System.out.println(i) will not compile beucase i is "out of scope" at this line.'}]},{pregunta:`Which integral types in Java have a range of 2^16 integers?
OR
Which integral types in Java can represent exactly 2^16 distinct integers?`,hint:"",cat:"primitives",respuestas:[{txt:"char",isRight:!0},{txt:"int",isRight:!1},{txt:"long",isRight:!1},{txt:"short",isRight:!0}]},{pregunta:`The options below contain the complete contents of a file.
 Which of these options can be run with the following command line once compiled?
 java main`,hint:`El public static void main(String [] args) debe tener el modificador static

No puede definirse un método fuera de una clase.`,respuestas:[{txt:`//in file main.java
class main {
	public void main(String[] args) {
		System.out.println("hello");
	}
}`,isRight:!1},{txt:`//in file main.java
public static void main(String[] args) {
	System.out.println("hello");
}`,isRight:!1,hint:"You cannot have a method on its own. It must be a part of a class."},{txt:`//in file main.java
public class anotherone{ }
class main {
	public static void main(String[] args) {
		System.out.println("hello");    } 
}`,isRight:!1,hint:"A public class must exist in a file by the same name. "},{txt:`//in file main.java
class anothermain{
	public static void main(String[] args) {
		System.out.println("hello2");    } } class main {
		public final static void main(String[] args) {
	System.out.println("hello");
	}
}`,isRight:!0}]},{pregunta:'Which of the following are correct about "encapsulation"?',hint:"",respuestas:[{txt:"Encapsulation is same as polymorphism.",isRight:!1},{txt:"It helps make sure that clients have no accidental dependence on the choice of representation",isRight:!0},{txt:"It helps avoiding name clashes as internal variables are not visible outside.",isRight:!0},{txt:"Encapsulation makes sure that messages are sent to the right object at run time.",isRight:!1},{txt:"Encapsulation helps you inherit the properties of another class.",isRight:!1}]},{pregunta:`You have been given a library that contains the following class:\r
\r
package com.cool;\r
public class Cooler {\r
  public void doCool(){\r
    System.out.println("cooling...");\r
  }\r
}\r
\r
Now, you are writing another class that makes use of the above library as follows:\r
\r
// 1 insert code here\r
public class Furnace\r
{\r
  public void cool(Cooler c) { // 2\r
    c.doCool();\r
  }\r
}\r
\r
What should be inserted at //1 above?\r
`,hint:"",cat:"import",respuestas:[{txt:"package com.cool;",isRight:!1},{txt:"import package com.cool;",isRight:!1},{txt:"import com.cool.*;",isRight:!0},{txt:"import com.cool;",isRight:!1},{txt:"import class com.cool.Cooler;",isRight:!1},{txt:"import com.cool.Cooler;",isRight:!0}]},{pregunta:`What will be printed when the following code snippet is executed?\r
\r
String str = "123456789";\r
str.substring(2, 5);\r
System.out.println(str.charAt(2));`,hint:"",cat:"String",respuestas:[{txt:"3",isRight:!0},{txt:"4",isRight:!1},{txt:"5",isRight:!1},{txt:"This will not compile.",isRight:!1}]},{pregunta:`What will the following code print when run without any arguments ...\r
\r
public class TestClass {\r
\r
    public static int m1(int i)\r
    {\r
        return ++i;\r
    }\r
    \r
    public static void main(String[] args) {\r
\r
        int k = m1(args.length);\r
        k += 3 + ++k;\r
        System.out.println(k);\r
    }\r
}\r
`,hint:"",cat:"arrays",respuestas:[{txt:"It will throw ArrayIndexOutOfBoundsException.",isRight:!1},{txt:"It will throw NullPointerException.",isRight:!1},{txt:"6",isRight:!0},{txt:"5",isRight:!1},{txt:"7",isRight:!1},{txt:"2",isRight:!1},{txt:"None of these.",isRight:!1}]},{pregunta:`Given:\r
\r
class Account{\r
  \r
  //insert code here\r
  \r
}\r
\r
What can be inserted in the above code at the specified location without causing compilation error?`,hint:"",cat:"methods",respuestas:[{txt:`{
	private String id;
	}`,isRight:!1},{txt:`while(true) {
	System.out.println("true"); 
}`,isRight:!1},{txt:"package org.acme;",isRight:!1},{txt:`private String id = "hello";
void print(){
	System.out.println(id);
}`,isRight:!0}]},{pregunta:`Given the code fragment:\r
\r
        int[] balances1 = new int[]{ 10, 20 };\r
        int[] balances2 = balances1;\r
        balances1 = new int[]{ 100 };\r
        System.out.print(balances1 == balances2);\r
\r
What is the result?\r
\r
Note: You will see real exam questions written in the same format. The question, "what is the result" implies "what is the result of compilation and execution of the given code" assuming that it exists in a valid context such as a class. It does not mean that the code will compile as it is or that it does not have compilation issues.\r
`,hint:"En condiciones normales, al modificar balances1 también quedaría modificado balances2, pues son variables que apuntan a la misma dirección de memoria. Sin embargo, como lo que estamos haciendo es crear una nueva instancia de balances1, esta variable ya no apuntará al mismo sitio que balances2 y por tanto el System.out.println imprimirá false",cat:"arrays",respuestas:[{txt:"true",isRight:!1},{txt:"false",isRight:!0}]},{pregunta:`Consider the following method, which is called with an argument of 7:\r
\r
public void method1(int i)\r
{\r
   int j = (i*30 - 2)/100;\r
   \r
   POINT1 : for(;j<10; j++)\r
   {\r
       boolean flag  = false;\r
       while(!flag)\r
       {\r
    if(Math.random()>0.5) break POINT1;\r
       }\r
   }\r
\r
  while(j>0)\r
  {\r
     System.out.println(j--);\r
     if(j == 4) break POINT1;\r
   }\r
}\r
\r
What will it print?`,hint:`En la línea
if(j == 4) break POINT1;
estamos tratando de romper un bucle con una etiqueta que no está en su interior. Esto no es posible.`,respuestas:[{txt:"It will print 1 and 2",isRight:!1},{txt:"It will print 1 to N where N is a random number.",isRight:!1},{txt:"It will not compile.",isRight:!0},{txt:"It will throw an exception at runtime.",isRight:!1}]},{pregunta:`Given:\r
\r
String s1 = "Hello";\r
String s2 = "World";\r
\r
Which of the following options are valid?`,hint:"",cat:"String",respuestas:[{txt:"s1 += s2;",isRight:!0},{txt:"s1 -= s2;",isRight:!1},{txt:"System.out.println( s1 = s2 );",isRight:!0},{txt:"System.out.println( s1 == s2);",isRight:!0}]},{pregunta:`What will be the result of attempting to compile the following program?\r
\r
public class TestClass\r
{\r
   long l1;\r
   public void TestClass(long pLong) { l1 = pLong ; }  //1\r
   public static void main(String args[])\r
   {\r
      TestClass a, b ;\r
      a = new TestClass();  //2\r
      b = new TestClass(5);  //3\r
   }\r
}\r
\r
    `,hint:"Tener en cuenta que la declaración en //1 no corresponde a un constructor.",cat:"constructor",respuestas:[{txt:"A compilation error will be encountered at //1, since constructors should not specify a return value.",isRight:!1},{txt:"A compilation error will be encountered at //2, since the class does not have a default constructor.",isRight:!1},{txt:"A compilation error will be encountered at //3.",isRight:!0},{txt:"The program will compile correctly.",isRight:!1},{txt:"It will not compile because parameter type of the constructor is different than the type of value passed to it.",isRight:!1}]},{pregunta:"Which of the following are reserved words in Java?",hint:"",cat:"java",respuestas:[{txt:"goto",isRight:!0},{txt:"package",isRight:!0},{txt:"export",isRight:!1},{txt:"array",isRight:!1},{txt:"hash",isRight:!1}]},{pregunta:'Which of these expressions will obtain the substring "456" from a string defined by String str = "01234567"?',hint:"",cat:"String",respuestas:[{txt:"str.substring(4, 7)",isRight:!0},{txt:"str.substring(4)",isRight:!1},{txt:"str.substring(3, 6)",isRight:!1},{txt:"str.substring(4, 6)",isRight:!1},{txt:"str.substring(4, 3)",isRight:!1}]},{pregunta:`What will be the output of the following lines ?\r
\r
\r
System.out.println("" +5 + 6);   //1\r
System.out.println(5 + "" +6);   // 2\r
System.out.println(5 + 6 +"");   // 3\r
System.out.println(5 + 6);       // 4\r
`,hint:"",cat:"operators",video:"XlN1H4O0WIw",respuestas:[{txt:"56, 56, 11, 11",isRight:!0},{txt:"11, 56, 11, 11",isRight:!1},{txt:"56, 56, 56, 11",isRight:!1},{txt:"56, 56, 56, 56",isRight:!1},{txt:"56, 56, 11, 56",isRight:!1}]},{pregunta:`Consider the following method...\r
\r
public int setVar(int a, int b, float c) {\r
   //valid code not shown\r
}\r
\r
Which of the following methods correctly overload the above method ?\r
\r
\r
\r
\r
\r
\r
`,hint:"",cat:"herencia",respuestas:[{txt:`public int setVar(int a, float b, int c) {
	return setVar(a, c, b);
}`,isRight:!0},{txt:`public int setVar(int a, float b, int c) {
	return this(a, c, b);
}`,isRight:!1},{txt:`public int setVar(int x, int y, float z) {
	return x+y;
}`,isRight:!1},{txt:`public float setVar(int a, int b, float c) {
	return c*a; 
}`,isRight:!1},{txt:`public float setVar(int a) {
	return a;
}`,isRight:!1}]},{pregunta:`Given the code fragment:\r
\r
        int[] balances1 = new int[]{ 10, 20 };\r
        int[] balances2 = { 100 };\r
        balances2 = balances1;\r
        System.out.print(balances1.length+" "+balances2.length);\r
\r
What is the result?`,hint:"",cat:"arrays",video:"QtjxZ_CryOw",respuestas:[{txt:"2 1",isRight:!1},{txt:"2 2",isRight:!0},{txt:"1 2",isRight:!1},{txt:"1 1",isRight:!1},{txt:"Exception at run time.",isRight:!1}]},{pregunta:`Given the following line of code:\r
\r
   List students = new ArrayList();\r
\r
Identify the correct statement:`,hint:"",cat:"classes",respuestas:[{txt:"The reference type is List and the object type is ArrayList.",isRight:!0},{txt:"The reference type is ArrayList and the object type is ArrayList.",isRight:!1},{txt:"The reference type is ArrayList and the object type is List.",isRight:!1},{txt:"The reference type is List and the object type is List.",isRight:!1}]},{pregunta:`What will the following code print?\r
\r
  int i = 0;\r
  int j = 1;\r
  if( (i++ == 0) && (j++ == 2) )\r
  {\r
     i = 12;\r
  }\r
  System.out.println(i+" "+j);\r
`,hint:"",cat:"if_else",video:"nYdpDhp2J9g",respuestas:[{txt:"1 2",isRight:!0},{txt:"2 3",isRight:!1},{txt:"12 2",isRight:!1},{txt:"12 1",isRight:!1},{txt:"It will not compile.",isRight:!1}]},{pregunta:`Which of the following are correct ways to initialize the static variables MAX and CLASS_GUID ?\r
\r
class Widget\r
{\r
   static int MAX;     //1\r
   static final String CLASS_GUID;   // 2\r
   Widget()\r
   {\r
       //3\r
   }\r
   Widget(int k)\r
   {\r
       //4\r
   }\r
}\r
`,hint:"Podemos inicializar variables utilizando una estructura de bloque",cat:"static",respuestas:[{txt:`Modify lines //1 and //2 as :
static int MAX = 111;
static final String CLASS_GUID = "XYZ123";`,isRight:!0},{txt:`Add the following line just after //2 :
static {  MAX = 111; CLASS_GUID = "XYZ123"; }`,isRight:!0},{txt:`Add the following line just before //1 :
{ MAX = 111; CLASS_GUID = "XYZ123"; }`,isRight:!1},{txt:`Add the following line at //3 as well as //4 :
MAX = 111; CLASS_GUID = "XYZ123";`,isRight:!1},{txt:"Only option 3 is valid.",isRight:!1}]},{pregunta:"Which of these assignments are valid?",hint:`Los valores de tipo booleano no pueden ser convertidos a valores de otro tipo.

Los valores de tipo double no pueden ser convertidos implícitamente a valores de tipo float y viceversa.`,cat:"primitives",respuestas:[{txt:"short s = 12 ;",isRight:!0},{txt:"long g = 012 ;",isRight:!0,hint:"012 is a valid octal number. You don't need to learn about octal and hex numbers for the exam. Just be aware that any number that starts with 0 is an octal number and any number that starts with 0x or 0X is a hexadecimal number."},{txt:"int i = (int) false;",isRight:!1,hint:"Values of type boolean cannot be converted to any other types."},{txt:"float f = -123 ;",isRight:!0,hint:"double cannot be implicitly narrowed to a float even though the value is representable by a float."},{txt:"float d = 0 * 1.5 ;",isRight:!1}]},{pregunta:`Consider the following program :\r
\r
class Test\r
{\r
  public static void main(String[] args)\r
  {\r
    short s = 10; // 1\r
    char c = s; // 2\r
    s = c; // 3\r
  }\r
}\r
\r
Identify the correct statements.`,hint:`No es posible realizar una conversión implícita de un char a un short.

No es posible realizar una conversión implícita de un short a un char.`,cat:"primitives",respuestas:[{txt:"Line 3 is not valid.",isRight:!0},{txt:"Line 2 is not valid.",isRight:!0},{txt:"It will compile because both short and char can hold 10.",isRight:!1},{txt:"None of the lines 1, 2 and 3 is valid.",isRight:!1}]},{pregunta:`Which line will print the string "MUM"?\r
\r
public class TestClass\r
{\r
   public static void main(String args [])\r
   {\r
        String s = "MINIMUM";\r
        System.out.println(s.substring(4, 7)); //1\r
        System.out.println(s.substring(5)); //2\r
        System.out.println(s.substring(s.indexOf('I', 3))); //3\r
        System.out.println(s.substring(s.indexOf('I', 4))); //4\r
     }\r
}\r
`,hint:"",cat:"String",respuestas:[{txt:"1",isRight:!0},{txt:"2",isRight:!1},{txt:"3",isRight:!1},{txt:"4",isRight:!1},{txt:"None of these.",isRight:!1}]},{pregunta:"While compiling a java file you want the compiler to generate the class file in a particular directory. Which javac option will you use?",hint:"",cat:"void_main",respuestas:[{txt:"-dest",isRight:!1},{txt:"-d",isRight:!0},{txt:"-target",isRight:!1},{txt:"-output",isRight:!1}]},{pregunta:`What will be the result of attempting to compile and run the following class?\r
\r
\r
public class TestClass\r
{\r
    public static void main(String args[ ] )\r
    {\r
       int i = 1;\r
       int[] iArr = {1};\r
       incr(i) ;\r
       incr(iArr) ;\r
       System.out.println( "i = " + i + "  iArr[0] = " + iArr [ 0 ] ) ;\r
    }\r
\r
    public static void incr(int   n ) { n++ ; }\r
\r
    public static void incr(int[ ] n ) { n [0]++ ; }\r
}\r
`,hint:"",cat:"arrays",video:"b7_e_OoyrkU",respuestas:[{txt:"The code will print i = 1 iArr[0] = 1",isRight:!1},{txt:"The code will print i = 1 iArr[0] = 2",isRight:!0},{txt:"The code will print i = 2 iArr[0] = 1",isRight:!1},{txt:"The code will print i = 2 iArr[0] = 2",isRight:!1},{txt:"The code will not compile.",isRight:!1}]},{pregunta:"Which of the following is correct about Java byte code?",hint:"",cat:"java",respuestas:[{txt:"It can run on any OS and chip architecture.",isRight:!1},{txt:"It can run on any OS and chip architecture if there is a JRE available for that OS and chip architecture.",isRight:!0},{txt:"It can run only any OS and chip architecture if that platform has a JRE built for it and the Java code was compiled ON that platform.",isRight:!1},{txt:"It can run only any OS and chip architecture if that platform has a JRE built for it and the Java code was compiled FOR that platform.",isRight:!1}]},{pregunta:`Given the following declaration, select the correct way to get the size of the array, assuming that the array has been initialized.\r
\r
int[] intArr;\r
\r
`,hint:"",cat:"arrays",respuestas:[{txt:"intArr[ ].length( ) ",isRight:!1},{txt:"intArr.length( ) ",isRight:!1},{txt:"intArr.length ",isRight:!0},{txt:"intArr[ ].size( ) ",isRight:!1},{txt:"intArr.size( ) ",isRight:!1}]},{pregunta:"Which of these expressions will return true?",hint:"",respuestas:[{txt:'"hello world".equals("hello world")',isRight:!0},{txt:'"HELLO world".equalsIgnoreCase("hello world")',isRight:!0},{txt:'"hello".concat(" world").trim().equals("hello world")',isRight:!0},{txt:'"hello world".compareTo("Hello world") < 0',isRight:!1},{txt:'"Hello world".toLowerCase( ).equals("hello world")',isRight:!0}]},{pregunta:`Given:\r
int a = 5,  b = 2, c = 30;\r
System.out.println( a-- * c / b  );\r
\r
\r
What is the result?\r
`,hint:"",cat:"operators",video:"u8idiJh86Nc",respuestas:[{txt:"50",isRight:!1},{txt:"60",isRight:!1},{txt:"75",isRight:!0},{txt:"0",isRight:!1},{txt:"Compilation failure",isRight:!1},{txt:"Exception at run time",isRight:!1}]}],sm=em.concat(nm).concat(rm).concat(im);var pt=function(){return pt=Object.assign||function(e){for(var n,r=1,i=arguments.length;r<i;r++){n=arguments[r];for(var s in n)Object.prototype.hasOwnProperty.call(n,s)&&(e[s]=n[s])}return e},pt.apply(this,arguments)};function Lr(t,e,n){if(n||arguments.length===2)for(var r=0,i=e.length,s;r<i;r++)(s||!(r in e))&&(s||(s=Array.prototype.slice.call(e,0,r)),s[r]=e[r]);return t.concat(s||Array.prototype.slice.call(e))}var V="-ms-",gr="-moz-",M="-webkit-",pf="comm",ys="rule",lo="decl",am="@import",gf="@keyframes",lm="@layer",om=Math.abs,oo=String.fromCharCode,tl=Object.assign;function um(t,e){return st(t,0)^45?(((e<<2^st(t,0))<<2^st(t,1))<<2^st(t,2))<<2^st(t,3):0}function mf(t){return t.trim()}function ue(t,e){return(t=e.exec(t))?t[0]:t}function O(t,e,n){return t.replace(e,n)}function Ri(t,e){return t.indexOf(e)}function st(t,e){return t.charCodeAt(e)|0}function On(t,e,n){return t.slice(e,n)}function ne(t){return t.length}function vf(t){return t.length}function sr(t,e){return e.push(t),t}function cm(t,e){return t.map(e).join("")}function _u(t,e){return t.filter(function(n){return!ue(n,e)})}var ws=1,zn=1,xf=0,Bt=0,Z=0,Vn="";function Rs(t,e,n,r,i,s,a,l){return{value:t,root:e,parent:n,type:r,props:i,children:s,line:ws,column:zn,length:a,return:"",siblings:l}}function Re(t,e){return tl(Rs("",null,null,"",null,null,0,t.siblings),t,{length:-t.length},e)}function on(t){for(;t.root;)t=Re(t.root,{children:[t]});sr(t,t.siblings)}function hm(){return Z}function fm(){return Z=Bt>0?st(Vn,--Bt):0,zn--,Z===10&&(zn=1,ws--),Z}function Xt(){return Z=Bt<xf?st(Vn,Bt++):0,zn++,Z===10&&(zn=1,ws++),Z}function Ke(){return st(Vn,Bt)}function Si(){return Bt}function Ss(t,e){return On(Vn,t,e)}function el(t){switch(t){case 0:case 9:case 10:case 13:case 32:return 5;case 33:case 43:case 44:case 47:case 62:case 64:case 126:case 59:case 123:case 125:return 4;case 58:return 3;case 34:case 39:case 40:case 91:return 2;case 41:case 93:return 1}return 0}function dm(t){return ws=zn=1,xf=ne(Vn=t),Bt=0,[]}function pm(t){return Vn="",t}function Zs(t){return mf(Ss(Bt-1,nl(t===91?t+2:t===40?t+1:t)))}function gm(t){for(;(Z=Ke())&&Z<33;)Xt();return el(t)>2||el(Z)>3?"":" "}function mm(t,e){for(;--e&&Xt()&&!(Z<48||Z>102||Z>57&&Z<65||Z>70&&Z<97););return Ss(t,Si()+(e<6&&Ke()==32&&Xt()==32))}function nl(t){for(;Xt();)switch(Z){case t:return Bt;case 34:case 39:t!==34&&t!==39&&nl(Z);break;case 40:t===41&&nl(t);break;case 92:Xt();break}return Bt}function vm(t,e){for(;Xt()&&t+Z!==47+10;)if(t+Z===42+42&&Ke()===47)break;return"/*"+Ss(e,Bt-1)+"*"+oo(t===47?t:Xt())}function xm(t){for(;!el(Ke());)Xt();return Ss(t,Bt)}function ym(t){return pm(bi("",null,null,null,[""],t=dm(t),0,[0],t))}function bi(t,e,n,r,i,s,a,l,o){for(var u=0,d=0,p=a,g=0,v=0,x=0,y=1,I=1,h=1,c=0,f="",m=i,w=s,b=r,S=f;I;)switch(x=c,c=Xt()){case 40:if(x!=108&&st(S,p-1)==58){Ri(S+=O(Zs(c),"&","&\f"),"&\f")!=-1&&(h=-1);break}case 34:case 39:case 91:S+=Zs(c);break;case 9:case 10:case 13:case 32:S+=gm(x);break;case 92:S+=mm(Si()-1,7);continue;case 47:switch(Ke()){case 42:case 47:sr(wm(vm(Xt(),Si()),e,n,o),o);break;default:S+="/"}break;case 123*y:l[u++]=ne(S)*h;case 125*y:case 59:case 0:switch(c){case 0:case 125:I=0;case 59+d:h==-1&&(S=O(S,/\f/g,"")),v>0&&ne(S)-p&&sr(v>32?Lu(S+";",r,n,p-1,o):Lu(O(S," ","")+";",r,n,p-2,o),o);break;case 59:S+=";";default:if(sr(b=Pu(S,e,n,u,d,i,l,f,m=[],w=[],p,s),s),c===123)if(d===0)bi(S,e,b,b,m,s,p,l,w);else switch(g===99&&st(S,3)===110?100:g){case 100:case 108:case 109:case 115:bi(t,b,b,r&&sr(Pu(t,b,b,0,0,i,l,f,i,m=[],p,w),w),i,w,p,l,r?m:w);break;default:bi(S,b,b,b,[""],w,0,l,w)}}u=d=v=0,y=h=1,f=S="",p=a;break;case 58:p=1+ne(S),v=x;default:if(y<1){if(c==123)--y;else if(c==125&&y++==0&&fm()==125)continue}switch(S+=oo(c),c*y){case 38:h=d>0?1:(S+="\f",-1);break;case 44:l[u++]=(ne(S)-1)*h,h=1;break;case 64:Ke()===45&&(S+=Zs(Xt())),g=Ke(),d=p=ne(f=S+=xm(Si())),c++;break;case 45:x===45&&ne(S)==2&&(y=0)}}return s}function Pu(t,e,n,r,i,s,a,l,o,u,d,p){for(var g=i-1,v=i===0?s:[""],x=vf(v),y=0,I=0,h=0;y<r;++y)for(var c=0,f=On(t,g+1,g=om(I=a[y])),m=t;c<x;++c)(m=mf(I>0?v[c]+" "+f:O(f,/&\f/g,v[c])))&&(o[h++]=m);return Rs(t,e,n,i===0?ys:l,o,u,d,p)}function wm(t,e,n,r){return Rs(t,e,n,pf,oo(hm()),On(t,2,-2),0,r)}function Lu(t,e,n,r,i){return Rs(t,e,n,lo,On(t,0,r),On(t,r+1,-1),r,i)}function yf(t,e,n){switch(um(t,e)){case 5103:return M+"print-"+t+t;case 5737:case 4201:case 3177:case 3433:case 1641:case 4457:case 2921:case 5572:case 6356:case 5844:case 3191:case 6645:case 3005:case 6391:case 5879:case 5623:case 6135:case 4599:case 4855:case 4215:case 6389:case 5109:case 5365:case 5621:case 3829:return M+t+t;case 4789:return gr+t+t;case 5349:case 4246:case 4810:case 6968:case 2756:return M+t+gr+t+V+t+t;case 5936:switch(st(t,e+11)){case 114:return M+t+V+O(t,/[svh]\w+-[tblr]{2}/,"tb")+t;case 108:return M+t+V+O(t,/[svh]\w+-[tblr]{2}/,"tb-rl")+t;case 45:return M+t+V+O(t,/[svh]\w+-[tblr]{2}/,"lr")+t}case 6828:case 4268:case 2903:return M+t+V+t+t;case 6165:return M+t+V+"flex-"+t+t;case 5187:return M+t+O(t,/(\w+).+(:[^]+)/,M+"box-$1$2"+V+"flex-$1$2")+t;case 5443:return M+t+V+"flex-item-"+O(t,/flex-|-self/g,"")+(ue(t,/flex-|baseline/)?"":V+"grid-row-"+O(t,/flex-|-self/g,""))+t;case 4675:return M+t+V+"flex-line-pack"+O(t,/align-content|flex-|-self/g,"")+t;case 5548:return M+t+V+O(t,"shrink","negative")+t;case 5292:return M+t+V+O(t,"basis","preferred-size")+t;case 6060:return M+"box-"+O(t,"-grow","")+M+t+V+O(t,"grow","positive")+t;case 4554:return M+O(t,/([^-])(transform)/g,"$1"+M+"$2")+t;case 6187:return O(O(O(t,/(zoom-|grab)/,M+"$1"),/(image-set)/,M+"$1"),t,"")+t;case 5495:case 3959:return O(t,/(image-set\([^]*)/,M+"$1$`$1");case 4968:return O(O(t,/(.+:)(flex-)?(.*)/,M+"box-pack:$3"+V+"flex-pack:$3"),/s.+-b[^;]+/,"justify")+M+t+t;case 4200:if(!ue(t,/flex-|baseline/))return V+"grid-column-align"+On(t,e)+t;break;case 2592:case 3360:return V+O(t,"template-","")+t;case 4384:case 3616:return n&&n.some(function(r,i){return e=i,ue(r.props,/grid-\w+-end/)})?~Ri(t+(n=n[e].value),"span")?t:V+O(t,"-start","")+t+V+"grid-row-span:"+(~Ri(n,"span")?ue(n,/\d+/):+ue(n,/\d+/)-+ue(t,/\d+/))+";":V+O(t,"-start","")+t;case 4896:case 4128:return n&&n.some(function(r){return ue(r.props,/grid-\w+-start/)})?t:V+O(O(t,"-end","-span"),"span ","")+t;case 4095:case 3583:case 4068:case 2532:return O(t,/(.+)-inline(.+)/,M+"$1$2")+t;case 8116:case 7059:case 5753:case 5535:case 5445:case 5701:case 4933:case 4677:case 5533:case 5789:case 5021:case 4765:if(ne(t)-1-e>6)switch(st(t,e+1)){case 109:if(st(t,e+4)!==45)break;case 102:return O(t,/(.+:)(.+)-([^]+)/,"$1"+M+"$2-$3$1"+gr+(st(t,e+3)==108?"$3":"$2-$3"))+t;case 115:return~Ri(t,"stretch")?yf(O(t,"stretch","fill-available"),e,n)+t:t}break;case 5152:case 5920:return O(t,/(.+?):(\d+)(\s*\/\s*(span)?\s*(\d+))?(.*)/,function(r,i,s,a,l,o,u){return V+i+":"+s+u+(a?V+i+"-span:"+(l?o:+o-+s)+u:"")+t});case 4949:if(st(t,e+6)===121)return O(t,":",":"+M)+t;break;case 6444:switch(st(t,st(t,14)===45?18:11)){case 120:return O(t,/(.+:)([^;\s!]+)(;|(\s+)?!.+)?/,"$1"+M+(st(t,14)===45?"inline-":"")+"box$3$1"+M+"$2$3$1"+V+"$2box$3")+t;case 100:return O(t,":",":"+V)+t}break;case 5719:case 2647:case 2135:case 3927:case 2391:return O(t,"scroll-","scroll-snap-")+t}return t}function Xi(t,e){for(var n="",r=0;r<t.length;r++)n+=e(t[r],r,t,e)||"";return n}function Rm(t,e,n,r){switch(t.type){case lm:if(t.children.length)break;case am:case lo:return t.return=t.return||t.value;case pf:return"";case gf:return t.return=t.value+"{"+Xi(t.children,r)+"}";case ys:if(!ne(t.value=t.props.join(",")))return""}return ne(n=Xi(t.children,r))?t.return=t.value+"{"+n+"}":""}function Sm(t){var e=vf(t);return function(n,r,i,s){for(var a="",l=0;l<e;l++)a+=t[l](n,r,i,s)||"";return a}}function bm(t){return function(e){e.root||(e=e.return)&&t(e)}}function km(t,e,n,r){if(t.length>-1&&!t.return)switch(t.type){case lo:t.return=yf(t.value,t.length,n);return;case gf:return Xi([Re(t,{value:O(t.value,"@","@"+M)})],r);case ys:if(t.length)return cm(n=t.props,function(i){switch(ue(i,r=/(::plac\w+|:read-\w+)/)){case":read-only":case":read-write":on(Re(t,{props:[O(i,/:(read-\w+)/,":"+gr+"$1")]})),on(Re(t,{props:[i]})),tl(t,{props:_u(n,r)});break;case"::placeholder":on(Re(t,{props:[O(i,/:(plac\w+)/,":"+M+"input-$1")]})),on(Re(t,{props:[O(i,/:(plac\w+)/,":"+gr+"$1")]})),on(Re(t,{props:[O(i,/:(plac\w+)/,V+"input-$1")]})),on(Re(t,{props:[i]})),tl(t,{props:_u(n,r)});break}return""})}}var Cm={animationIterationCount:1,aspectRatio:1,borderImageOutset:1,borderImageSlice:1,borderImageWidth:1,boxFlex:1,boxFlexGroup:1,boxOrdinalGroup:1,columnCount:1,columns:1,flex:1,flexGrow:1,flexPositive:1,flexShrink:1,flexNegative:1,flexOrder:1,gridRow:1,gridRowEnd:1,gridRowSpan:1,gridRowStart:1,gridColumn:1,gridColumnEnd:1,gridColumnSpan:1,gridColumnStart:1,msGridRow:1,msGridRowSpan:1,msGridColumn:1,msGridColumnSpan:1,fontWeight:1,lineHeight:1,opacity:1,order:1,orphans:1,tabSize:1,widows:1,zIndex:1,zoom:1,WebkitLineClamp:1,fillOpacity:1,floodOpacity:1,stopOpacity:1,strokeDasharray:1,strokeDashoffset:1,strokeMiterlimit:1,strokeOpacity:1,strokeWidth:1},Wn=typeof process<"u"&&process.env!==void 0&&({}.REACT_APP_SC_ATTR||{}.SC_ATTR)||"data-styled",uo=typeof window<"u"&&"HTMLElement"in window,Em=!!(typeof SC_DISABLE_SPEEDY=="boolean"?SC_DISABLE_SPEEDY:typeof process<"u"&&process.env!==void 0&&{}.REACT_APP_SC_DISABLE_SPEEDY!==void 0&&{}.REACT_APP_SC_DISABLE_SPEEDY!==""?{}.REACT_APP_SC_DISABLE_SPEEDY!=="false"&&{}.REACT_APP_SC_DISABLE_SPEEDY:typeof process<"u"&&process.env!==void 0&&{}.SC_DISABLE_SPEEDY!==void 0&&{}.SC_DISABLE_SPEEDY!==""&&{}.SC_DISABLE_SPEEDY!=="false"&&{}.SC_DISABLE_SPEEDY),Tm={},bs=Object.freeze([]),Mn=Object.freeze({});function wf(t,e,n){return n===void 0&&(n=Mn),t.theme!==n.theme&&t.theme||e||n.theme}var Rf=new Set(["a","abbr","address","area","article","aside","audio","b","base","bdi","bdo","big","blockquote","body","br","button","canvas","caption","cite","code","col","colgroup","data","datalist","dd","del","details","dfn","dialog","div","dl","dt","em","embed","fieldset","figcaption","figure","footer","form","h1","h2","h3","h4","h5","h6","header","hgroup","hr","html","i","iframe","img","input","ins","kbd","keygen","label","legend","li","link","main","map","mark","menu","menuitem","meta","meter","nav","noscript","object","ol","optgroup","option","output","p","param","picture","pre","progress","q","rp","rt","ruby","s","samp","script","section","select","small","source","span","strong","style","sub","summary","sup","table","tbody","td","textarea","tfoot","th","thead","time","tr","track","u","ul","use","var","video","wbr","circle","clipPath","defs","ellipse","foreignObject","g","image","line","linearGradient","marker","mask","path","pattern","polygon","polyline","radialGradient","rect","stop","svg","text","tspan"]),Im=/[!"#$%&'()*+,./:;<=>?@[\\\]^`{|}~-]+/g,jm=/(^-|-$)/g;function Ou(t){return t.replace(Im,"-").replace(jm,"")}var Nm=/(a)(d)/gi,zu=function(t){return String.fromCharCode(t+(t>25?39:97))};function rl(t){var e,n="";for(e=Math.abs(t);e>52;e=e/52|0)n=zu(e%52)+n;return(zu(e%52)+n).replace(Nm,"$1-$2")}var ta,Rn=function(t,e){for(var n=e.length;n;)t=33*t^e.charCodeAt(--n);return t},Sf=function(t){return Rn(5381,t)};function bf(t){return rl(Sf(t)>>>0)}function Am(t){return t.displayName||t.name||"Component"}function ea(t){return typeof t=="string"&&!0}var kf=typeof Symbol=="function"&&Symbol.for,Cf=kf?Symbol.for("react.memo"):60115,_m=kf?Symbol.for("react.forward_ref"):60112,Pm={childContextTypes:!0,contextType:!0,contextTypes:!0,defaultProps:!0,displayName:!0,getDefaultProps:!0,getDerivedStateFromError:!0,getDerivedStateFromProps:!0,mixins:!0,propTypes:!0,type:!0},Lm={name:!0,length:!0,prototype:!0,caller:!0,callee:!0,arguments:!0,arity:!0},Ef={$$typeof:!0,compare:!0,defaultProps:!0,displayName:!0,propTypes:!0,type:!0},Om=((ta={})[_m]={$$typeof:!0,render:!0,defaultProps:!0,displayName:!0,propTypes:!0},ta[Cf]=Ef,ta);function Wu(t){return("type"in(e=t)&&e.type.$$typeof)===Cf?Ef:"$$typeof"in t?Om[t.$$typeof]:Pm;var e}var zm=Object.defineProperty,Wm=Object.getOwnPropertyNames,Mu=Object.getOwnPropertySymbols,Mm=Object.getOwnPropertyDescriptor,Dm=Object.getPrototypeOf,Du=Object.prototype;function Tf(t,e,n){if(typeof e!="string"){if(Du){var r=Dm(e);r&&r!==Du&&Tf(t,r,n)}var i=Wm(e);Mu&&(i=i.concat(Mu(e)));for(var s=Wu(t),a=Wu(e),l=0;l<i.length;++l){var o=i[l];if(!(o in Lm||n&&n[o]||a&&o in a||s&&o in s)){var u=Mm(e,o);try{zm(t,o,u)}catch{}}}}return t}function Dn(t){return typeof t=="function"}function co(t){return typeof t=="object"&&"styledComponentId"in t}function Qe(t,e){return t&&e?"".concat(t," ").concat(e):t||e||""}function il(t,e){if(t.length===0)return"";for(var n=t[0],r=1;r<t.length;r++)n+=e?e+t[r]:t[r];return n}function Or(t){return t!==null&&typeof t=="object"&&t.constructor.name===Object.name&&!("props"in t&&t.$$typeof)}function sl(t,e,n){if(n===void 0&&(n=!1),!n&&!Or(t)&&!Array.isArray(t))return e;if(Array.isArray(e))for(var r=0;r<e.length;r++)t[r]=sl(t[r],e[r]);else if(Or(e))for(var r in e)t[r]=sl(t[r],e[r]);return t}function ho(t,e){Object.defineProperty(t,"toString",{value:e})}function Fr(t){for(var e=[],n=1;n<arguments.length;n++)e[n-1]=arguments[n];return new Error("An error occurred. See https://github.com/styled-components/styled-components/blob/main/packages/styled-components/src/utils/errors.md#".concat(t," for more information.").concat(e.length>0?" Args: ".concat(e.join(", ")):""))}var $m=function(){function t(e){this.groupSizes=new Uint32Array(512),this.length=512,this.tag=e}return t.prototype.indexOfGroup=function(e){for(var n=0,r=0;r<e;r++)n+=this.groupSizes[r];return n},t.prototype.insertRules=function(e,n){if(e>=this.groupSizes.length){for(var r=this.groupSizes,i=r.length,s=i;e>=s;)if((s<<=1)<0)throw Fr(16,"".concat(e));this.groupSizes=new Uint32Array(s),this.groupSizes.set(r),this.length=s;for(var a=i;a<s;a++)this.groupSizes[a]=0}for(var l=this.indexOfGroup(e+1),o=(a=0,n.length);a<o;a++)this.tag.insertRule(l,n[a])&&(this.groupSizes[e]++,l++)},t.prototype.clearGroup=function(e){if(e<this.length){var n=this.groupSizes[e],r=this.indexOfGroup(e),i=r+n;this.groupSizes[e]=0;for(var s=r;s<i;s++)this.tag.deleteRule(r)}},t.prototype.getGroup=function(e){var n="";if(e>=this.length||this.groupSizes[e]===0)return n;for(var r=this.groupSizes[e],i=this.indexOfGroup(e),s=i+r,a=i;a<s;a++)n+="".concat(this.tag.getRule(a)).concat(`/*!sc*/
`);return n},t}(),ki=new Map,Ki=new Map,na=1,li=function(t){if(ki.has(t))return ki.get(t);for(;Ki.has(na);)na++;var e=na++;return ki.set(t,e),Ki.set(e,t),e},Fm=function(t,e){ki.set(t,e),Ki.set(e,t)},Bm="style[".concat(Wn,"][").concat("data-styled-version",'="').concat("6.1.0",'"]'),Um=new RegExp("^".concat(Wn,'\\.g(\\d+)\\[id="([\\w\\d-]+)"\\].*?"([^"]*)')),Hm=function(t,e,n){for(var r,i=n.split(","),s=0,a=i.length;s<a;s++)(r=i[s])&&t.registerName(e,r)},Vm=function(t,e){for(var n,r=((n=e.textContent)!==null&&n!==void 0?n:"").split(`/*!sc*/
`),i=[],s=0,a=r.length;s<a;s++){var l=r[s].trim();if(l){var o=l.match(Um);if(o){var u=0|parseInt(o[1],10),d=o[2];u!==0&&(Fm(d,u),Hm(t,d,o[3]),t.getTag().insertRules(u,i)),i.length=0}else i.push(l)}}};function Gm(){return typeof __webpack_nonce__<"u"?__webpack_nonce__:null}var If=function(t){var e=document.head,n=t||e,r=document.createElement("style"),i=function(l){var o=Array.from(l.querySelectorAll("style[".concat(Wn,"]")));return o[o.length-1]}(n),s=i!==void 0?i.nextSibling:null;r.setAttribute(Wn,"active"),r.setAttribute("data-styled-version","6.1.0");var a=Gm();return a&&r.setAttribute("nonce",a),n.insertBefore(r,s),r},qm=function(){function t(e){this.element=If(e),this.element.appendChild(document.createTextNode("")),this.sheet=function(n){if(n.sheet)return n.sheet;for(var r=document.styleSheets,i=0,s=r.length;i<s;i++){var a=r[i];if(a.ownerNode===n)return a}throw Fr(17)}(this.element),this.length=0}return t.prototype.insertRule=function(e,n){try{return this.sheet.insertRule(n,e),this.length++,!0}catch{return!1}},t.prototype.deleteRule=function(e){this.sheet.deleteRule(e),this.length--},t.prototype.getRule=function(e){var n=this.sheet.cssRules[e];return n&&n.cssText?n.cssText:""},t}(),Qm=function(){function t(e){this.element=If(e),this.nodes=this.element.childNodes,this.length=0}return t.prototype.insertRule=function(e,n){if(e<=this.length&&e>=0){var r=document.createTextNode(n);return this.element.insertBefore(r,this.nodes[e]||null),this.length++,!0}return!1},t.prototype.deleteRule=function(e){this.element.removeChild(this.nodes[e]),this.length--},t.prototype.getRule=function(e){return e<this.length?this.nodes[e].textContent:""},t}(),Ym=function(){function t(e){this.rules=[],this.length=0}return t.prototype.insertRule=function(e,n){return e<=this.length&&(this.rules.splice(e,0,n),this.length++,!0)},t.prototype.deleteRule=function(e){this.rules.splice(e,1),this.length--},t.prototype.getRule=function(e){return e<this.length?this.rules[e]:""},t}(),$u=uo,Jm={isServer:!uo,useCSSOMInjection:!Em},Zi=function(){function t(e,n,r){e===void 0&&(e=Mn),n===void 0&&(n={});var i=this;this.options=pt(pt({},Jm),e),this.gs=n,this.names=new Map(r),this.server=!!e.isServer,!this.server&&uo&&$u&&($u=!1,function(s){for(var a=document.querySelectorAll(Bm),l=0,o=a.length;l<o;l++){var u=a[l];u&&u.getAttribute(Wn)!=="active"&&(Vm(s,u),u.parentNode&&u.parentNode.removeChild(u))}}(this)),ho(this,function(){return function(s){for(var a=s.getTag(),l=a.length,o="",u=function(p){var g=function(h){return Ki.get(h)}(p);if(g===void 0)return"continue";var v=s.names.get(g),x=a.getGroup(p);if(v===void 0||x.length===0)return"continue";var y="".concat(Wn,".g").concat(p,'[id="').concat(g,'"]'),I="";v!==void 0&&v.forEach(function(h){h.length>0&&(I+="".concat(h,","))}),o+="".concat(x).concat(y,'{content:"').concat(I,'"}').concat(`/*!sc*/
`)},d=0;d<l;d++)u(d);return o}(i)})}return t.registerId=function(e){return li(e)},t.prototype.reconstructWithOptions=function(e,n){return n===void 0&&(n=!0),new t(pt(pt({},this.options),e),this.gs,n&&this.names||void 0)},t.prototype.allocateGSInstance=function(e){return this.gs[e]=(this.gs[e]||0)+1},t.prototype.getTag=function(){return this.tag||(this.tag=(e=function(n){var r=n.useCSSOMInjection,i=n.target;return n.isServer?new Ym(i):r?new qm(i):new Qm(i)}(this.options),new $m(e)));var e},t.prototype.hasNameForId=function(e,n){return this.names.has(e)&&this.names.get(e).has(n)},t.prototype.registerName=function(e,n){if(li(e),this.names.has(e))this.names.get(e).add(n);else{var r=new Set;r.add(n),this.names.set(e,r)}},t.prototype.insertRules=function(e,n,r){this.registerName(e,n),this.getTag().insertRules(li(e),r)},t.prototype.clearNames=function(e){this.names.has(e)&&this.names.get(e).clear()},t.prototype.clearRules=function(e){this.getTag().clearGroup(li(e)),this.clearNames(e)},t.prototype.clearTag=function(){this.tag=void 0},t}(),Xm=/&/g,Km=/^\s*\/\/.*$/gm;function jf(t,e){return t.map(function(n){return n.type==="rule"&&(n.value="".concat(e," ").concat(n.value),n.value=n.value.replaceAll(",",",".concat(e," ")),n.props=n.props.map(function(r){return"".concat(e," ").concat(r)})),Array.isArray(n.children)&&n.type!=="@keyframes"&&(n.children=jf(n.children,e)),n})}function Zm(t){var e,n,r,i=t===void 0?Mn:t,s=i.options,a=s===void 0?Mn:s,l=i.plugins,o=l===void 0?bs:l,u=function(g,v,x){return x===n||x.startsWith(n)&&x.endsWith(n)&&x.replaceAll(n,"").length>0?".".concat(e):g},d=o.slice();d.push(function(g){g.type===ys&&g.value.includes("&")&&(g.props[0]=g.props[0].replace(Xm,n).replace(r,u))}),a.prefix&&d.push(km),d.push(Rm);var p=function(g,v,x,y){v===void 0&&(v=""),x===void 0&&(x=""),y===void 0&&(y="&"),e=y,n=v,r=new RegExp("\\".concat(n,"\\b"),"g");var I=g.replace(Km,""),h=ym(x||v?"".concat(x," ").concat(v," { ").concat(I," }"):I);a.namespace&&(h=jf(h,a.namespace));var c=[];return Xi(h,Sm(d.concat(bm(function(f){return c.push(f)})))),c};return p.hash=o.length?o.reduce(function(g,v){return v.name||Fr(15),Rn(g,v.name)},5381).toString():"",p}var tv=new Zi,al=Zm(),Nf=Qt.createContext({shouldForwardProp:void 0,styleSheet:tv,stylis:al});Nf.Consumer;Qt.createContext(void 0);function ll(){return k.useContext(Nf)}var ev=function(){function t(e,n){var r=this;this.inject=function(i,s){s===void 0&&(s=al);var a=r.name+s.hash;i.hasNameForId(r.id,a)||i.insertRules(r.id,a,s(r.rules,a,"@keyframes"))},this.name=e,this.id="sc-keyframes-".concat(e),this.rules=n,ho(this,function(){throw Fr(12,String(r.name))})}return t.prototype.getName=function(e){return e===void 0&&(e=al),this.name+e.hash},t}(),nv=function(t){return t>="A"&&t<="Z"};function Fu(t){for(var e="",n=0;n<t.length;n++){var r=t[n];if(n===1&&r==="-"&&t[0]==="-")return t;nv(r)?e+="-"+r.toLowerCase():e+=r}return e.startsWith("ms-")?"-"+e:e}var Af=function(t){return t==null||t===!1||t===""},_f=function(t){var e,n,r=[];for(var i in t){var s=t[i];t.hasOwnProperty(i)&&!Af(s)&&(Array.isArray(s)&&s.isCss||Dn(s)?r.push("".concat(Fu(i),":"),s,";"):Or(s)?r.push.apply(r,Lr(Lr(["".concat(i," {")],_f(s),!1),["}"],!1)):r.push("".concat(Fu(i),": ").concat((e=i,(n=s)==null||typeof n=="boolean"||n===""?"":typeof n!="number"||n===0||e in Cm||e.startsWith("--")?String(n).trim():"".concat(n,"px")),";")))}return r};function We(t,e,n,r){if(Af(t))return[];if(co(t))return[".".concat(t.styledComponentId)];if(Dn(t)){if(!Dn(s=t)||s.prototype&&s.prototype.isReactComponent||!e)return[t];var i=t(e);return We(i,e,n,r)}var s;return t instanceof ev?n?(t.inject(n,r),[t.getName(r)]):[t]:Or(t)?_f(t):Array.isArray(t)?Array.prototype.concat.apply(bs,t.map(function(a){return We(a,e,n,r)})):[t.toString()]}function Pf(t){for(var e=0;e<t.length;e+=1){var n=t[e];if(Dn(n)&&!co(n))return!1}return!0}var rv=Sf("6.1.0"),iv=function(){function t(e,n,r){this.rules=e,this.staticRulesId="",this.isStatic=(r===void 0||r.isStatic)&&Pf(e),this.componentId=n,this.baseHash=Rn(rv,n),this.baseStyle=r,Zi.registerId(n)}return t.prototype.generateAndInjectStyles=function(e,n,r){var i=this.baseStyle?this.baseStyle.generateAndInjectStyles(e,n,r):"";if(this.isStatic&&!r.hash)if(this.staticRulesId&&n.hasNameForId(this.componentId,this.staticRulesId))i=Qe(i,this.staticRulesId);else{var s=il(We(this.rules,e,n,r)),a=rl(Rn(this.baseHash,s)>>>0);if(!n.hasNameForId(this.componentId,a)){var l=r(s,".".concat(a),void 0,this.componentId);n.insertRules(this.componentId,a,l)}i=Qe(i,a),this.staticRulesId=a}else{for(var o=Rn(this.baseHash,r.hash),u="",d=0;d<this.rules.length;d++){var p=this.rules[d];if(typeof p=="string")u+=p;else if(p){var g=il(We(p,e,n,r));o=Rn(o,g+d),u+=g}}if(u){var v=rl(o>>>0);n.hasNameForId(this.componentId,v)||n.insertRules(this.componentId,v,r(u,".".concat(v),void 0,this.componentId)),i=Qe(i,v)}}return i},t}(),fo=Qt.createContext(void 0);fo.Consumer;var ra={};function sv(t,e,n){var r=co(t),i=t,s=!ea(t),a=e.attrs,l=a===void 0?bs:a,o=e.componentId,u=o===void 0?function(f,m){var w=typeof f!="string"?"sc":Ou(f);ra[w]=(ra[w]||0)+1;var b="".concat(w,"-").concat(bf("6.1.0"+w+ra[w]));return m?"".concat(m,"-").concat(b):b}(e.displayName,e.parentComponentId):o,d=e.displayName;d===void 0&&function(f){return ea(f)?"styled.".concat(f):"Styled(".concat(Am(f),")")}(t);var p=e.displayName&&e.componentId?"".concat(Ou(e.displayName),"-").concat(e.componentId):e.componentId||u,g=r&&i.attrs?i.attrs.concat(l).filter(Boolean):l,v=e.shouldForwardProp;if(r&&i.shouldForwardProp){var x=i.shouldForwardProp;if(e.shouldForwardProp){var y=e.shouldForwardProp;v=function(f,m){return x(f,m)&&y(f,m)}}else v=x}var I=new iv(n,p,r?i.componentStyle:void 0);function h(f,m){return function(w,b,S){var E=w.attrs,U=w.componentStyle,j=w.defaultProps,mt=w.foldedComponentIds,ae=w.styledComponentId,le=w.target,Ut=Qt.useContext(fo),Gn=ll(),Zt=w.shouldForwardProp||Gn.shouldForwardProp,St=function(L,$,lt){for(var It,Ot=pt(pt({},$),{className:void 0,theme:lt}),Cs=0;Cs<L.length;Cs+=1){var Ur=Dn(It=L[Cs])?It(Ot):It;for(var ye in Ur)Ot[ye]=ye==="className"?Qe(Ot[ye],Ur[ye]):ye==="style"?pt(pt({},Ot[ye]),Ur[ye]):Ur[ye]}return $.className&&(Ot.className=Qe(Ot.className,$.className)),Ot}(E,b,wf(b,Ut,j)||Mn),C=St.as||le,_={};for(var A in St)St[A]===void 0||A[0]==="$"||A==="as"||A==="theme"||(A==="forwardedAs"?_.as=St.forwardedAs:Zt&&!Zt(A,C)||(_[A]=St[A]));var F=function(L,$){var lt=ll(),It=L.generateAndInjectStyles($,lt.styleSheet,lt.stylis);return It}(U,St),N=Qe(mt,ae);return F&&(N+=" "+F),St.className&&(N+=" "+St.className),_[ea(C)&&!Rf.has(C)?"class":"className"]=N,_.ref=S,k.createElement(C,_)}(c,f,m)}var c=Qt.forwardRef(h);return c.attrs=g,c.componentStyle=I,c.shouldForwardProp=v,c.foldedComponentIds=r?Qe(i.foldedComponentIds,i.styledComponentId):"",c.styledComponentId=p,c.target=r?i.target:t,Object.defineProperty(c,"defaultProps",{get:function(){return this._foldedDefaultProps},set:function(f){this._foldedDefaultProps=r?function(m){for(var w=[],b=1;b<arguments.length;b++)w[b-1]=arguments[b];for(var S=0,E=w;S<E.length;S++)sl(m,E[S],!0);return m}({},i.defaultProps,f):f}}),ho(c,function(){return".".concat(c.styledComponentId)}),s&&Tf(c,t,{attrs:!0,componentStyle:!0,displayName:!0,foldedComponentIds:!0,shouldForwardProp:!0,styledComponentId:!0,target:!0}),c}function Bu(t,e){for(var n=[t[0]],r=0,i=e.length;r<i;r+=1)n.push(e[r],t[r+1]);return n}var Uu=function(t){return Object.assign(t,{isCss:!0})};function Br(t){for(var e=[],n=1;n<arguments.length;n++)e[n-1]=arguments[n];if(Dn(t)||Or(t)){var r=t;return Uu(We(Bu(bs,Lr([r],e,!0))))}var i=t;return e.length===0&&i.length===1&&typeof i[0]=="string"?We(i):Uu(We(Bu(i,e)))}function ol(t,e,n){if(n===void 0&&(n=Mn),!e)throw Fr(1,e);var r=function(i){for(var s=[],a=1;a<arguments.length;a++)s[a-1]=arguments[a];return t(e,n,Br.apply(void 0,Lr([i],s,!1)))};return r.attrs=function(i){return ol(t,e,pt(pt({},n),{attrs:Array.prototype.concat(n.attrs,i).filter(Boolean)}))},r.withConfig=function(i){return ol(t,e,pt(pt({},n),i))},r}var Lf=function(t){return ol(sv,t)},Rt=Lf;Rf.forEach(function(t){Rt[t]=Lf(t)});var av=function(){function t(e,n){this.rules=e,this.componentId=n,this.isStatic=Pf(e),Zi.registerId(this.componentId+1)}return t.prototype.createStyles=function(e,n,r,i){var s=i(il(We(this.rules,n,r,i)),""),a=this.componentId+e;r.insertRules(a,a,s)},t.prototype.removeStyles=function(e,n){n.clearRules(this.componentId+e)},t.prototype.renderStyles=function(e,n,r,i){e>2&&Zi.registerId(this.componentId+e),this.removeStyles(e,r),this.createStyles(e,n,r,i)},t}();function lv(t){for(var e=[],n=1;n<arguments.length;n++)e[n-1]=arguments[n];var r=Br.apply(void 0,Lr([t],e,!1)),i="sc-global-".concat(bf(JSON.stringify(r))),s=new av(r,i),a=function(o){var u=ll(),d=Qt.useContext(fo),p=Qt.useRef(u.styleSheet.allocateGSInstance(i)).current;return u.styleSheet.server&&l(p,o,u.styleSheet,d,u.stylis),Qt.useLayoutEffect(function(){if(!u.styleSheet.server)return l(p,o,u.styleSheet,d,u.stylis),function(){return s.removeStyles(p,u.styleSheet)}},[p,o,u.styleSheet,d,u.stylis]),null};function l(o,u,d,p,g){if(s.isStatic)s.renderStyles(o,Tm,d,g);else{var v=pt(pt({},u),{theme:wf(u,p,a.defaultProps)});s.renderStyles(o,v,d,g)}}return Qt.memo(a)}const ov=996,ks=`@media (max-width: ${ov}px)`,oi=Rt.button.attrs(t=>({disabled:!t.active}))`
  color: white;
  padding: 5px 20px;
  border: none;
  border-radius: 5px;
  margin-left: 10px;
  margin-right: 10px;
  background: ${({active:t})=>t?"#f77754":"gray"};
  cursor: ${({active:t})=>t?"pointer":"initial"};
`,uv=Br`
  background: ${({isRight:t})=>t?"paleGreen":"salmon"};
`,po=Br`
  white-space: pre-wrap; /* Since CSS 2.1 */
  white-space: -moz-pre-wrap; /* Mozilla, since 1999 */
  white-space: -pre-wrap; /* Opera 4-6 */
  white-space: -o-pre-wrap; /* Opera 7 */
  word-wrap: break-word;
`;Rt.pre`
  ${({showAnswer:t})=>t&&uv};
  ${po}
`;const cv=Rt.pre`
   ${po}
`,hv=Rt.div`
  width: 150px;
  display: inline-block;
`,fv=Rt.div`
  display: flex;
  justify-content: space-between;

  ${ks}{
    width: 100%;  
  }
`,dv=Rt.div`
  display: flex;
  align-items: center;
  border-bottom: 1px solid #dee2e6;
  padding-bottom: 10px;
  justify-content: space-between;
  
  &>div{
    display: flex;
  align-items: center;
  }
  ${ks}{
    flex-direction: column;
    align-items: flex-start;

    button, img{
      margin-left:0;
      margin-right: 10px
    }
}
`,pv=Rt.div`
   position: relative;
  height: 0;
  overflow: hidden;
  padding-bottom: 56.2%;
  margin-bottom: 20px;
`,gv=Rt.iframe.attrs(t=>({allowFullScreen:"allowfullscreen"}))`
  position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
`,mv=Rt.div`

  ${ks}{
    grid-template-columns: 1fr;
  }
`,vv=Rt.div`
  max-width:1550px;
  font-size: 1.6rem;
  margin:auto;
  
  ${ks}{
    font-size:1rem;
  }
`;lv`
	html {
    overflow-y: scroll;
  }
`;const xv=Rt.input`
	width:50px;
  font-size:1.6rem;
  border: 3px solid ${({isRight:t})=>t?"gray":"red"};
  position: relative;
  z-index: 99;
  &:focus{
    outline: none;
  }
`,go=Rt.pre`
display: grid;
grid-template-columns: 35px 1fr;
align-items: center;
  ${({showAnswer:t})=>t&&yv};
  background-color:   ${({notApplicable:t,showAnswer:e})=>t&&e&&"black"};
  ${po}
`,yv=Br`
  background: ${({isRight:t})=>t?"paleGreen":"salmon"};
`,wv=Rt.input`
    padding:7px;
    width:30px;
    margin-right: 7px;
`,Rv=Rt.select`
    padding:7px;
    min-width:200px
`,Sv=({showAnswer:t,answer:e,txt:n,notApplicable:r})=>{const[,i]=k.useState(-1),[s,a]=k.useState(!1),[l,o]=k.useState(!1);return P.jsxs(go,{showAnswer:t||l,isRight:s,notApplicable:r,children:[P.jsx(wv,{type:"number",onChange:u=>{i(u.target.value),a(u.target.value===""+e),o(!0)}}),P.jsx("label",{children:n})]})},bv=({answers:t,showAnswer:e})=>{const[n,r]=k.useState(!1),[i,s]=k.useState(!1);return P.jsx(go,{isRight:n,showAnswer:e||i,children:P.jsxs(Rv,{onChange:a=>{s(!0),a.target.value=="true"?r(!0):r(!1)},children:[P.jsx("option",{n:!0,children:"Choose One..."},-1),t.map((a,l)=>P.jsx("option",{value:a.isRight,children:a.txt},l))]})})},kv="/res/java/certificaciones/1z0-811/react/assets/star-b3a77ff8.svg",Cv="/res/java/certificaciones/1z0-811/react/assets/star2-66c51e47.svg",ul=sm.map((t,e)=>({...t,questionId:"q"+e})),Hu=t=>t?ul.filter(e=>e.cat===t):ul,Ev=()=>{const t=ao().search,e=new URLSearchParams(t),n=e.get("id"),r=e.get("favouriteCat"),i=0,s=r==="true",[a,l]=k.useState(i),[o,u]=k.useState(i),[d,p]=k.useState(i),[g,v]=k.useState(0),[x,y]=k.useState(!1),[I,h]=k.useState(!1),[c,f]=k.useState(null),[m,w]=k.useState(s),[b,S]=k.useState([]),[E,U]=k.useState(Hu(n)),[j,mt]=k.useState(null),[ae,le]=k.useState(0),[Ut,Gn]=k.useState(localStorage.getItem("favouriteQuestions")?JSON.parse(localStorage.getItem("favouriteQuestions")):[]),Zt=Wg(),St=N=>{const L=b[j.questionId]||[];if(L.includes(N)){const $={...b,[j.questionId]:L.filter(lt=>lt!==N)};S($)}else{const $={...b,[j.questionId]:[...L,N]};S($)}},C=N=>N.hint&&N.hint!==""||N.respuestas.filter(L=>L.hint&&L.hint!=="").length>0;k.useEffect(()=>{E[a]&&(mt(E[a]),le(E[a].respuestas.filter(N=>N.isRight).length),F(E[a])?f(!0):f(!1)),e.set("favouriteCat",m),e.set("questionId",a),Zt("?"+e.toString()),m&&A()?v(a):p(a),localStorage.setItem("/res/java/certificaciones/1z0-811/reactcurrentQuestionIndex",a)},[a]);const _=()=>{const N=j.questionId,L=c==null?!0:!c,$={...Ut,[N]:L};Gn($),Object.values($).every(lt=>lt===!1)&&alert("Ya no hay preguntas marcadas como favoritas. A continuación se mostrarán las preguntas no favoritas."),f(L)},A=()=>Object.values(Ut).filter(N=>N===!0).length>0;k.useEffect(()=>{localStorage.setItem("favouriteQuestions",JSON.stringify(Ut)),m&&!A()&&w(!1)},[Ut]),k.useEffect(()=>{let N,L;if(m&&A()){const $=localStorage.getItem("favouriteQuestions")?JSON.parse(localStorage.getItem("favouriteQuestions")):[];N=ul.filter(lt=>$[lt.questionId]),L=g}else N=Hu(n),L=d;U(N),l(L)},[m]);const F=N=>Object.keys(Ut).filter(L=>Ut[L]===!0&&L===N.questionId).length>0;return P.jsx(vv,{children:j&&P.jsxs("div",{children:[P.jsxs(dv,{className:"filaSup",children:[P.jsxs("div",{children:[P.jsxs(hv,{children:[P.jsx(xv,{isRight:o!==""&&o!=="0"&&!isNaN(o),value:a+1,onChange:N=>{const L=N.target.value;u(L),l(L===""||L==="0"||isNaN(L)?1:parseInt(L-1))}})," ","/ ",E.length,")"]}),P.jsx(oi,{active:a!==0,onClick:()=>{a>0&&l(a-1),y(!1),h(!1)},children:"Prev"}),P.jsx(oi,{active:a!==E.length-1,onClick:()=>{l(a+1),y(!1),h(!1)},children:"Next"})]}),P.jsxs(fv,{children:[P.jsx(oi,{active:!0,onClick:()=>{w(!m),e.set("favouriteCat",m),Zt("?"+e.toString())},children:m?"Showing favourite questions":"Showing regular questions"}),P.jsx("img",{onClick:()=>{_()},style:{width:"30px",cursor:"pointer"},src:c?kv:Cv,alt:""})]})]}),P.jsxs(mv,{className:"finaMed",children:[P.jsxs("div",{children:[P.jsx(cv,{children:j.pregunta.replace(/\t/g,"   ")}),j.img&&P.jsx("img",{style:{maxWidth:"100%"},src:j.img,alt:""}),j.type!=="multiplemultiple"&&j.type!=="reorder"&&P.jsxs("p",{children:["Respuestas correctas: ",ae]})]}),E[a].video&&P.jsx(pv,{className:"responsiveContent",children:P.jsx(gv,{width:"560",height:"315",src:`https://www.youtube.com/embed/${j.video}`,frameborder:"0",allow:"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"})})]}),j.type&&j.type==="multiplemultiple"&&j.respuestas.map((N,L)=>P.jsx(bv,{answers:N,showAnswer:x},L)),j.type&&j.type==="reorder"&&j.respuestas.map((N,L)=>P.jsx(Sv,{txt:N.txt,answer:N.rightOrder,isRight:$=>$,notApplicable:N.rightOrder===-1,showAnswer:x},j.id+L)),!j.type&&j.respuestas.map((N,L)=>{var $,lt;return P.jsxs(go,{isRight:N.isRight,showAnswer:x||(($=b[j.questionId])==null?void 0:$.includes(N.txt)),children:[P.jsx("input",{id:"r"+L,type:"checkbox",checked:(lt=b[j.questionId])==null?void 0:lt.includes(N.txt),onChange:()=>St(N.txt)}),P.jsx("label",{htmlFor:"r"+L,children:N.txt})]},L)}),E[a].hint&&P.jsxs(P.Fragment,{children:[P.jsx(oi,{active:j&&C(j),onClick:()=>{h(!I)},children:I?"Hide Hint":"Show Hint"}),P.jsx("pre",{style:{whiteSpace:"pre-wrap",minWidth:"400px"},children:I&&j.hint})]})]})})},Tv=()=>P.jsx(tm,{basename:"/res/java/certificaciones/1z0-811/react",children:P.jsxs(Kg,{children:[P.jsx(Ka,{index:!0,element:P.jsx(Ev,{})}),P.jsx(Ka,{path:"*",element:P.jsx("div",{children:"404"})}),console.log("/res/java/certificaciones/1z0-811/react")]})}),Iv=()=>P.jsx(Tv,{});ia.createRoot(document.getElementById("root")).render(P.jsx(Qt.StrictMode,{children:P.jsx(Iv,{})}));
