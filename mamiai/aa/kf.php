var acc_host='accwww10.53kf.com';var companyid='70712085';var hz6d_guest_ip='124.65.36.142';var ipstr='%E5%8C%97%E4%BA%AC%E5%B8%82%5B%E8%81%94%E9%80%9A%5D';var areastr='%E5%8C%97%E4%BA%AC%2D';var ipContinent='%E4%BA%9A%E6%B4%B2';var in_timestamp='1552283159086';var hz6d_guest_id='11319402500012';var hz6d_style_id= '2';var hz6d_alias_host='http://www10.53kf.com';var company_site={};var mnone=0;var hz6d_device='';var get_gdt_openid='0';
/* 
    变量：
    acc_host        acc.www4.53kf.com
    companyid       72034819
    hz6d_guest_ip   125.120.149.68
    ipstr           浙江省杭州市[电信]
    in_timestamp    time()      1445841152695
    hz6d_guest_id   66518726610
    style_id        2
    hz6d_alias_host http://www4.53kf.com


var acc_host       	= '';
var companyid    	= '';
var hz6d_guest_ip	= '';
var ipstr        	= '';
var in_timestamp    = '';
var hz6d_guest_id   = '';
var style_id        = '';
var hz6d_alias_host = '';
var get_gdt_openid  = '';
*/

try{
	if(hz6d_device == "android"){
		var android_guest_id = Android.giveInformation(null);
		if(android_guest_id){
			hz6d_guest_id = android_guest_id;
		}else if(hz6d_guest_id != "0"){
			Android.writeData(hz6d_guest_id.toString());
		}
	}
}catch(e){}

in_timestamp = parseInt(in_timestamp/1000);
var http_pro = (document.location.protocol == 'https:')?'https://':'http://';
onliner_zdfq = 0;
//indexOf低版本ie兼容
if(!Array.prototype.indexOf){    
   Array.prototype.indexOf = function(val){    
       var value = this;    
       for(var i =0; i < value.length; i++){    
          if(value[i] == val) return i;    
       }    
      return -1;    
   };    
}
(function(window, undefined) {
	var w = window,
		d = document,
		dd = d.documentElement,
		db = d.body,// db kf.php在head中时获取不到 
		head = d.head || d.getElementsByTagName("head")[0] || dd,
		isStrict = d.compatMode == "CSS1Compat",
		m = Math.max,
		ua = navigator.userAgent,
		np = navigator.platform,
		EN = w.encodeURIComponent,
		DE = w.decodeURIComponent;

	var $53 = function(id) {return d.getElementById(id) ? d.getElementById(id) : null};
	$53.version = '1.0.0';
	$53.global = {};
	$53.getKFscript = function(){
		if (typeof $53.global[''] == 'undefined' || $53.global[''] == null) {
			var scripts = document.getElementsByTagName('script'), len = scripts.length, i = 0;
			for(;i<len;i++){
				if (/kf\.php/img.test(scripts[i].src)) {
					$53.global[''] = scripts[i];
					break;
				}
			}
		}
		return $53.global[''];
	};
	$53.ready = (function(){
		var ie = !!(window.attachEvent && !window.opera),
			wk = /webkit\/(\d+)/i.test(navigator.userAgent) && (RegExp.$1 < 525),
			fn = [],
			run = function () {isReady = true; for (var i = 0; i < fn.length; i++) fn[i](); },
			d = document,
			isReady = false;
		return function (f) {
			if (d.body) {f();return;}
			if (isReady) {f();return;}
			if (!ie && !wk && d.addEventListener) return d.addEventListener('DOMContentLoaded', f, false);
			if (fn.push(f) > 1) return;
			if (ie) {
				(function () {
					if (!isReady) {	
						try { d.documentElement.doScroll('left'); run(); }
						catch (err) { setTimeout(arguments.callee, 0); }
					}
				})();
			} else if (wk) {
				var t = setInterval(function () {
					if (/^(loaded|complete)$/.test(d.readyState))
						clearInterval(t), run();
				}, 0);
			}
		};
	})();
	$53.forEach = function(enumerable, iterator, context) {
		var i, n, t;
		if (typeof iterator == "function" && enumerable) {
			// Array or ArrayLike or NodeList or String or ArrayBuffer
			n = typeof enumerable.length == "number" ? enumerable.length: enumerable.byteLength;
			if (typeof n == "number") {
				if (Object.prototype.toString.call(enumerable) === "[object Function]") {
					return enumerable;
				}
				for (i = 0; i < n; i++) {
					t = enumerable[i];
					t === undefined && (t = enumerable.charAt && enumerable.charAt(i));
					iterator.call(context || null, t, i, enumerable);
				}
				// enumerable is number
			} else if (typeof enumerable == "number") {
				for (i = 0; i < enumerable; i++) {
					iterator.call(context || null, i, i, i);
				}
				// enumerable is json
			} else if (typeof enumerable == "object") {
				for (i in enumerable) {
					if (enumerable.hasOwnProperty(i)) {
						iterator.call(context || null, enumerable[i], i, enumerable);
					}
				}
			}
		}
		return enumerable;
	};
	$53.type = (function() {
		var objectType = {},
			nodeType = [, "HTMLElement", "Attribute", "Text", , , , , "Comment", "Document", , "DocumentFragment", ],
			str = "Array Boolean Date Error Function Number RegExp String",
			retryType = {
				'object': 1,
				'function': '1'
			},
			toString = objectType.toString;
		$53.forEach(str.split(" "), function(name) {
			objectType["[object " + name + "]"] = name.toLowerCase();
			$53["is" + name] = function(unknow) {
				return $53.type(unknow) == name.toLowerCase();
			}
		});
		return function(unknow) {
			var s = typeof unknow;
			return ! retryType[s] ? s: unknow == null ? "null": unknow._type_ || objectType[toString.call(unknow)] || nodeType[unknow.nodeType] || (unknow == unknow.window ? "Window": "") || "object";
		};
	})();
    
	$53.isObject = function(unknow) {
		return typeof unknow === "function" || (typeof unknow === "object" && unknow != null)
	};
    
	$53.isPlainObject = function(unknow) {
		var key, hasOwnProperty = Object.prototype.hasOwnProperty;

		if ($53.type(unknow) != "object") {
			return false;
		}
		if (unknow.constructor && !hasOwnProperty.call(unknow, "constructor") && !hasOwnProperty.call(unknow.constructor.prototype, "isPrototypeOf")) {
			return false;
		}
		for (key in unknow) {}
		return key === undefined || hasOwnProperty.call(unknow, key);
	};
	$53.kfextend = function(depthClone, object) {
		var second, options, key, src, copy, i = 1,
		n = arguments.length,
		result = depthClone || {},
		copyIsArray, clone;
		$53.isBoolean(depthClone) && (i = 2) && (result = object || {}); ! $53.isObject(result) && (result = {});
		for (; i < n; i++) {
			options = arguments[i];
			if ($53.isObject(options)) {
				for (key in options) {
					src = result[key];
					copy = options[key];
					if (src === copy) {
						continue;
					}
					if ($53.isBoolean(depthClone) && depthClone && copy && ($53.isPlainObject(copy) || (copyIsArray = $53.isArray(copy)))) {
						if (copyIsArray) {
							copyIsArray = false;
							clone = src && $53.isArray(src) ? src: [];
						} else {
							clone = src && $53.isPlainObject(src) ? src: {};
						}
						result[key] = $53.kfextend(depthClone, clone, copy);
					} else if (copy !== undefined) {
						result[key] = copy;
					}
				}
			}
		}
		return result;
	}
	$53.kfextend($53, {
		$: function(id) {
			return d.getElementById(id) ? d.getElementById(id) : null;
		},
		EN: EN,
		DE: DE,
		isStrict: isStrict,
		counter:1,     //计数器
		data: function(key, value) {
			if(typeof value == 'undefined') {
				return $53.global[key] === undefined ? null : $53.global[key];
			} else {
				$53.global[key] = value;
			}
		},
		trim: function(text) {
			//return text == null ? "": (text + "").replace(new RegExp('(^[\\\\s\\\\t\\\\xa0\\\\u3000\\\\uFEFF]+)|([\\\\u3000\\\\xa0\\\\s\\\\t\\\\uFEFF]+\\x24)', 'g'), '');
            return text == null ? "": (text + "").replace(new RegExp('(^[\\s\\t\\xa0\\u3000\\uFEFF]+)|([\\u3000\\xa0\\s\\t\\uFEFF]+\x24)', 'g'), '');
		},
		getOs: function() {
			var allOs = ['iphone', 'android', 'macos', 'linux', 'win2008', 'win8', 'win7', 'winvista', 'win98', 'win2000', 'win2003', 'winxp', 'os_other'];
			var isWin = (np == "Win32") || (np == "Windows") || (np == "Win64");
			if (isWin) {
				var winos = {
					'win98': '(Win98)|(Windows 98)',
					'win2000': '(Windows NT 5.0)|(Windows 2000)',
					'winxp': '(Windows NT 5.1)|(Windows XP)',
					'win2003': '(Windows NT 5.2)|(Windows 2003)',
					'win7': '(Windows NT 6.1)|(Windows 7)',
					'winvista': '(Windows NT 6.0)|(Windows Vista)',
					'win8': '(Windows NT 6.2)|(Windows 8)',
					'win2008': '(Windows NT 6.1)|(Windows 2008)'
				};
				for (var i in winos) {
					if (winos.hasOwnProperty(i) && (new RegExp(winos[i], 'i')).test(ua)) return i;
				}
			}
			var isMac = (np == "Mac68K") || (np == "MacPPC") || (np == "Macintosh") || (np == "MacIntel");
			if (isMac) return "macos";
			if ((np == "X11") && !isWin && !isMac) return "unix";
			if ((np.toLowerCase() + ua.toLowerCase()).indexOf('iphone') > -1) return 'iphone';
			if (np.toLowerCase().indexOf("linux") > -1 && ua.toLowerCase().indexOf('android') > -1) return 'android';
			if (np.indexOf("Linux") > -1) return "linux";
			return "os_other";
		},
        isMobile: function() {
            var userAgentInfo = navigator.userAgent;
            var Agents = ["Android", "iPhone",
                "SymbianOS", "Windows Phone",
                "iPad", "iPod"];
            var flag = 'n';
            for (var v = 0; v < Agents.length; v++) {
                if (userAgentInfo.indexOf(Agents[v]) > 0) {
                    flag = 'y';
                    break;
                }
            }
            return flag;    
        },
        getUrlHost: function(url) {
        	if(typeof url == "undefined" || url == "") return "";
        	var domain = url.split("/");
        	if(domain[2]) domain = domain[2];
        	else domain = "";
        	return domain;
        },
        getUrlParam: function() {
            var url = location.search; 
            var theRequest = new Object();
            if (url.indexOf("?") != -1) {
                var str = url.substr(1);
                strs = str.split("&");
                for(var i = 0; i < strs.length; i ++) {
                    theRequest[strs[i].split("=")[0]]=strs[i].split("=")[1];
                }
            }
            return theRequest;   
        },
		getBrowser: function() {
			var browsers = {
				'sogou': 'sogou',
				'maxthon': 'maxthon',
				'opera': 'opera',
				'qq': 'tencent',
				'uc': 'uc',
				'360': '360',
				'firefox': 'firefox',
				'chrome': 'chrome',
				'safari': 'safari',
				'ie10': 'msie 10',
				'ie9': 'msie 9',
				'ie8': 'msie 8',
				'ie7': 'msie 7',
				'ie6': 'msie 6',
				'ie5': 'msie 5'
			};
			for (var i in browsers) {
				if (browsers.hasOwnProperty(i) && (new RegExp(browsers[i], 'i')).test(ua)) return i;
			}
			return 'ua_other';
		},
		getScreen: function() {
			return screen.width + "_" + screen.height;
		},
		setCookie: function(key,value,options) {
			if (!$53.isCookieKey(key)) {return;}
			options = options || {};
			var expires = options.expires;
			if ('number' == typeof options.expires) {
				expires = new Date();
				expires.setTime(expires.getTime() + options.expires*1000);
			}
			document.cookie = key + "=" + EN(value)
			+ (options.path ? "; path=" + options.path : "")
			+ (expires ? "; expires=" + expires.toUTCString() : "")
			+ ("; domain=" + (options.domain ? options.domain : location.hostname))
			+ (options.secure ? "; secure" : "");
		},
		getCookie: function(key) {
			if ($53.isCookieKey(key)) {
				var reg = new RegExp('(^| )' + key + '=([^;]*)(;|$)'), result = reg.exec(document.cookie);
				if (result) {
					var value = (result[2] === undefined || result[2] === null) ? '' : result[2];
				}
			}
			if ('string' == typeof value) {
				return DE(value);
			}
			return '';
		},
		isCookieKey:function(key) {
		//	return (new RegExp('^[^\\\\x00-\\\\x20\\\\x7f\\\\(\\\\)<>@,;:\\\\\\\\\\\\"\\\\[\\\\]\\\\?=\\\\{\\\\}\\\\/\\\\u0080-\\\\uffff]+\\x24')).test(key);
            return (new RegExp('^[^\\x00-\\x20\\x7f\\(\\)<>@,;:\\\\\\"\\[\\]\\?=\\{\\}\\/\\u0080-\\uffff]+\x24')).test(key);
		},
		setKfCookie:function(data){       //设置主域名53kf.com下的cookie   data为二维数组  [['name1','张三',0],['name2','李四',3600]]   第三个参数为过期时间  0：回话  -1：永久  时间戳：过期时间
			var _this = this;
			var url = "//tb.53kf.com/code/ck/";
			var param = new Array();
			for (var i=0;i<data.length;i++){
				var ck = data[i];
				for(var j=0;j<ck.length;j++){
				    param.push(encodeURIComponent(ck[j]));
				}
			}
			var param_str = param.join('/');
			url += param_str;
			var id = 'kf_script_'+_this.counter;
			_this.createScript(id,url);
			_this.counter++;
		},
		getWH: function() { // 获取窗口可用大小 
			return {
				W: (isStrict ? dd: d.body).clientWidth,
				H: (isStrict ? dd: d.body).clientHeight
			};
		},
		getSWH: function() { // 获取屏幕分辨率的大小
			return {
				W: screen.width,
				H: screen.height
			};
		},
		getS: function() {// 获取滚动距离 
			return {
				L: m(dd.scrollLeft, d.body.scrollLeft),
				T: m(dd.scrollTop, d.body.scrollTop)
			};
		},
		htmlDecode: function(text) {
			return text.replace(/&amp;/g, '&').replace(/&quot;/g, '\"').replace(/&#039;/g, '\'').replace(/&lt;/g, '<').replace(/&gt;/g, '>').replace(/&douhao/g, ",").replace(/&jinghao/g, '#');
		},
		creElm: function(o, t, a, loc) {
			loc = loc || 0;
			var b = d.createElement(t || 'div'), c = (a || d.body || dd);
			for (var p in o) {
				if (!o.hasOwnProperty(p)) continue;
				p == 'style' ? b[p].cssText = o[p] : b[p] = o[p];
				if(p == 'id' && $53(o[p])) $53(o[p]).parentNode.removeChild($53(o[p]));
			}
			if (!loc) return c.insertBefore(b, c.firstChild);
			else return $53.insertAfter(b, c.lastChild);
		},
		insertAfter: function(newEl, targetEl)
		{
			var parentEl = targetEl.parentNode;
			if(parentEl.lastChild == targetEl)
			{
				return parentEl.appendChild(newEl);
			}else
			{
				return parentEl.insertBefore(newEl,targetEl.nextSibling);
			}
		},
		createScript: function(id,url){
			$53.creElm({
				'id':id == '' ? 'hz6d_script_' + Math.random() : id,
				'src':url,
				'charset':'utf-8'
			},'script',head);
		},
		before: function(html, elem){
			var frag = d.createDocumentFragment(), div=d.createElement('div');
			div.innerHTML = html;
			frag.appendChild(div);
			return (elem.parentNode || d.body || dd).insertBefore(div.firstChild.cloneNode(true), elem);
			frag = null;
		},
		after: function(html, elem){
			var frag = d.createDocumentFragment(), div=d.createElement('div');
			div.innerHTML = html;
			frag.appendChild(div);
			return $53.insertAfter(div.firstChild.cloneNode(true), elem);
			frag = null;
		},
		insertFixed: function(html){ // 图标嵌入固定模式用 //
			$53.ready(function(){
				var script = $53.getKFscript(), elem = null;
				if (script.parentNode == head) elem = $53.before(html, d.body.firstChild);
				else elem = $53.after(html, script);
			});
		},
		getTimeTo24: function(){
			//get senconds time from now to tomorrow 00:00
			var d1 = new Date(),
				d2 = new Date();
			d1.setDate(d1.getDate() + 1);
			d1.setHours(0);
			d1.setMinutes(0);
			d1.setSeconds(0);
			return (d1.getTime() - d2.getTime())/1000;
		},
		json2str : function(json,code){
			var arr = [];
			var encode =  code == 'urlencode' ? $53.EN : function(data){return data};
			for(var i in json) {
				if (json.hasOwnProperty(i)) {
					arr.push(i + '=' + encode(json[i]));
				}
			}
			return arr.join('&');
		},
		addEvent : function( obj, type, fn ) {
			if ( obj.attachEvent ) {
				obj['e'+type+fn] = fn;
				obj[type+fn] = function(){obj['e'+type+fn]( window.event );}
				obj.attachEvent( 'on'+type, obj[type+fn] );
			} else {
				obj.addEventListener( type, fn, false );
			}
		},
		removeEvent : function( obj, type, fn ) {
			if ( obj.detachEvent ) {
				obj.detachEvent( 'on'+type, obj[type+fn] );
				obj[type+fn] = null;
			} else {
				obj.removeEventListener( type, fn, false );
			}
		}
	});
    //对外开放接口
    $53.kfextend($53, {
		$: function(id) {
			return d.getElementById(id) ? d.getElementById(id) : null;
		},
		EN: EN,
		DE: DE,
		isStrict: isStrict,
		online : 'false',
		terminal : 'pc',
		openurl : '',
		workers : [],
		groups : [],
		groupIds : [],
		popParam : '',
		apiArr : [],
		uuid : '',
		host : '',
		sign : '',
		createApi:function(){
			var api = new _53API(this.online,this.terminal,this.openurl,this.workers,this.groups,this.groupIds);
			this.apiArr.push(api);
			return api;
		},
		setOnline : function(online){
			this.online = online;
		},
		setUrl : function(url){
			this.openurl = url;
		},
		setTerminal : function(terminal){
			if(terminal == 'mobile'){
				this.terminal = 'mobile';
			}
		},
		setWorkers : function(workers){
			this.workers = workers;
		},
		setGroups : function(groups){
			this.groups = groups;
			for(var i=0;i<groups.length;i++){
				this.groupIds[i] = groups[i].group_id;
			}
		},
		getPopParam : function(){
			var re = this.popParam;
			this.popParam = '';
			return re;
		},
		setPopParam : function(param){
			this.popParam = param;
		},
		callMsg : function(){
			for(var i=0;i<this.apiArr.length;i++){
				this.apiArr[i].callMsg();
			}
		},
		setUuid:function(uuid){
			this.uuid = uuid;
		},
		getUuid:function(){
			return this.uuid;
		},
		setHost:function(host){
			this.host = host;
		},
		setSign:function(sign){
			this.sign = sign;
			this.initApi();
		},
		sendData:function(type,data){
			var _this = this;
			var id = 'kf_script_'+_this.counter;
			var url = '//'+_this.host+'/kfapi.php?company_id='+companyid+'&id='+encodeURIComponent(_this.uuid)+'&type='+encodeURIComponent(type)+'&data='+encodeURIComponent(data)+'&sign='+encodeURIComponent(_this.sign);
			_this.createScript(id,url);
			_this.counter++;
		},
		sendLword:function(type,msg,name,email,qq,phone,company,address,notes){
			var _this = this;
			var id = 'kf_script_'+_this.counter;

			var talk_page_tmp = window.location.href;
	        if(talk_page_tmp.indexOf('hz6d{') != -1) {
	            talk_page_tmp = talk_page_tmp.substring(0,talk_page_tmp.indexOf('hz6d{'));
	        }

	        var sendData = "&msg="+msg+"&ly_name="+name+"&ly_email="+email+"&ly_qq="+qq+"&ly_phone="+phone+"&ly_company="+company+"&ly_addr="+address+"&notes="+notes+"&ly_first=true&ly_mode=3&ly_object=";

			var url = '//'+_this.host+'/lword_sdk.php?company_id='+companyid+'&guest_id='+hz6d_guest_id+'&style='+hz6d_style_id+'&referer1='+encodeURIComponent(hz6d_from_page)+'&referer='+encodeURIComponent(talk_page_tmp)+'&land_page='+encodeURIComponent(hz6d_land_page)+sendData;
			_this.createScript(id,url);
			_this.counter++;
		},
		callPhone:function(call,id6d,worker_id){
			var _this = this;
			var id = 'kf_script_'+_this.counter;

			var talk_page_tmp = window.location.href;
	        if(talk_page_tmp.indexOf('hz6d{') != -1) {
	            talk_page_tmp = talk_page_tmp.substring(0,talk_page_tmp.indexOf('hz6d{'));
	        }

			var sendData = "&call="+call+"&id6d="+id6d;
			if (worker_id != undefined) sendData += "&worker_id="+worker_id;
			var url = '//'+_this.host+'/impl/rpc_callback_phone.php?from=api&company_id='+companyid+'&guest_id='+hz6d_guest_id+"&style="+hz6d_style_id+'&from_page='+encodeURIComponent(hz6d_from_page)+'&talk_page='+encodeURIComponent(talk_page_tmp)+'&land_page='+encodeURIComponent(hz6d_land_page)+sendData;

			_this.createScript(id,url);
			_this.counter++;
		},
		callBack:function(data){
			console.log(data);	
		},
		comeInfo:function(logo,title,content,curl){
			var _this = this;
			var id = 'kf_script_'+_this.counter;

			var sendData = '&logo='+encodeURIComponent(logo)+'&title='+encodeURIComponent(title)+'&content='+encodeURIComponent(content)+'&curl='+encodeURIComponent(curl);
			var url = '//'+_this.host+'/comeinfo.php?company_id='+companyid+'&id='+encodeURIComponent(_this.uuid)+'&sign='+encodeURIComponent(_this.sign)+sendData;

			_this.createScript(id,url);
			_this.counter++;
		},
		addCustMsg:function(msg,callback){
			var _this = this;
			var id = 'kf_script_'+_this.counter;

			var sendData = '&msg='+encodeURIComponent(msg)+'&callback='+encodeURIComponent(callback);
			var url = '//'+_this.host+'/client/add_cust_msg.php?company_id='+companyid+'&id='+encodeURIComponent(_this.uuid)+'&sign='+encodeURIComponent(_this.sign)+sendData;

			_this.createScript(id,url);
			_this.counter++;
		},
		initApi:function(){//处理预留数据接口
			var _this = this;
			try{
				if(typeof _$53 == "object"){
					for(var i = 0;i<_$53.length;i++){
						_this.handleInitApi(_$53[i]);
					}
				}
			}catch (e){}
		},
		handleInitApi:function(arr){
			var _this = this;
			var cmds = ["_setPageTag","_setComeInfo"];
			try {
				var cmd = arr[0];
				if(cmds.indexOf(arr[0]) < 0){
					return false;
				}
			}catch (e){
				return false;
			}
			switch (cmd){
				case "_setPageTag"://标识来源系统
						var prod_id = typeof arr[1] == "undefined" ?  "" : arr[1];
						var prod_name = 	typeof arr[2] == "undefined" ?  "" : arr[2];
						var sendData = '&cmd='+encodeURIComponent(cmd)+'&prod_id='+encodeURIComponent(prod_id)+'&prod_name='+encodeURIComponent(prod_name);
					break;
				case "_setComeInfo"://标识来源系统
					var title =  typeof arr[1] == "undefined" ?  "" :  $53.trim(arr[1]);
					var logo =  typeof arr[2] == "undefined" ?  "" :  $53.trim(arr[2]);
					var content =  typeof arr[3] == "undefined" ?  "" :  $53.trim(arr[3]);
					var curl =  typeof arr[4] == "undefined" ?  "" :  $53.trim(arr[4]);
					_this.comeInfo(logo,title,content,curl);
					break;
				default:
					break;
			}
			var id = 'kf_script_'+_this.counter;
			var url =  '//'+_this.host+'/client/kfapi_init_info.php?company_id='+companyid+'&id='+encodeURIComponent(_this.uuid)+'&sign='+encodeURIComponent(_this.sign)+sendData;

			_this.createScript(id,url);
			_this.counter++;
		}
	});
	function _53API(online,terminal,openurl,workers,groups,groupIds){
		this.online = online,
		this.terminal = terminal,
		this.openurl = openurl,
		this.workers = workers,
		this.groups = groups,
		this.groupIds = groupIds,
		this.paramArr = ['cmd','type','group_id','worker_id','msg_callback','mtalk','stat_id',,'member','id','name','lword','msg','email','qq','phone','company','address','notes','custom_info','stat','callphone','id6d','call','logo','title','content','curl','custmsg'],
		this.param = {},
		this.callMsg = function(){},    //来消息回调函数
		this.setPopParam = function(param){
			$53.setPopParam(param);
		},
		this.checkGroup = function(group_id){
			var _this = this;
			var groupIds = group_id.split(',');
			for(var i=0;i<groupIds.length;i++){
				if(_this.groupIds.indexOf(groupIds[i]) < 0){
					return false
				}
			}
			return true;
		},
		this.push = function(key,value){     //添加参数
			var _this = this;
			if(_this.paramArr.indexOf(key) < 0){
				return _this.reback('401','error param');
			}
			if(key == 'msg_callback'){
				if((typeof value) == 'function'){
					_this.callMsg = value;
				}else{
					return _this.reback('402','msg_callback must be a function');
				}
			}else{
				value = $53.trim(value);
				if(value == ''){
					return _this.reback('403','error value');
				}
				if(key == 'group_id' && _this.checkGroup(value) === false){
					return _this.reback('404','unknown group_id');
				}
				_this.param[key] = value;
			}
			return _this.reback('201','success',false);
		},
		this.query = function(){    //执行命令
			var _this = this;
			switch(_this.param.cmd){
				case 'kfclient':
				    if(_this.param.type != 'new' && _this.param.type != 'popup'){
				    	return _this.reback('501','error type');
				    }
				    var group_id = $53.trim(_this.param.group_id);
				    var worker_id = $53.trim(_this.param.worker_id);
				    if(group_id != '' && worker_id != '' && !(_this.terminal == 'mobile' && _this.param.type == 'popup')){
				    	return _this.reback('503','worker_id and group_id can only choose one ');
				    }
				    var zdkf_type = 1;
				    var kf = worker_id;
				    if(group_id != ''){
				    	zdkf_type = 3;
				    	kf = group_id;
				    }
				    _this.openkf(_this.param.type,zdkf_type,kf);
				    return _this.reback('201','success');
					break;
				case 'mtalk':
					var group_id = $53.trim(_this.param.group_id);
				    var worker_id = $53.trim(_this.param.worker_id);
				    if(_this.terminal != 'mobile'){
				    	return _this.reback('301','error terminal');
				    }
				    if(group_id != '' && worker_id != ''){
				    	return _this.reback('303','worker_id and group_id can only choose one ');
				    }
				    var zdkf_type = 1;
				    var kf = worker_id;
				    if(group_id != ''){
				    	zdkf_type = 3;
				    	kf = group_id;
				    }
				    _this.talk(_this.param.type,zdkf_type,kf);
				    return _this.reback('201','success');
					break;
				case 'member':
					var id = $53.trim(_this.param.id ? _this.param.id : "");
					var name = $53.trim(_this.param.name ? _this.param.name : "");
					var email = $53.trim(_this.param.email  ? _this.param.email : "");
					var qq = $53.trim(_this.param.qq ? _this.param.qq : "");
					var phone = $53.trim(_this.param.phone ? _this.param.phone : "");
					var company = $53.trim(_this.param.company  ? _this.param.company : "");
					var address = $53.trim(_this.param.address ? _this.param.address : "");
					var notes = $53.trim(_this.param.notes ? _this.param.notes : "");
					var custom_info = $53.trim(_this.param.custom_info ? _this.param.custom_info : "");
					if(custom_info != "" && custom_info.length>40)  return _this.reback('601','custom_info length cannot exceed 40');
					var script_id = 'kf_script_guest';
					var url = hz6d_alias_host+'/kfapi_guest.php?company_id='+companyid+'&guest_id='+hz6d_guest_id+'&u_cust_id='+id+'&u_cust_name='+name+'&email='+email+'&qq='+qq+'&phone='+phone+'&company='+company+'&address='+address+'&notes='+notes+'&custom_info='+custom_info;
					$53.createScript(script_id,url);
					break;	
				case 'status':
					return _this.reback('201',_this.online);
					break;
				case 'grouplist':
					return _this.reback('201',_this.groups);
					break;
				case 'workerlist':
					return _this.reback('201',_this.workers);
					break;
				case 'jzl':
				case 'mxsj':
				case 'xsgl':
					var data = $53.trim(_this.param.stat_id);
					_this.saveData(_this.param.cmd,data);
					break;
				case 'stat':
					var type = $53.trim(_this.param.id);
					var data = $53.trim(_this.param.stat_id);
					_this.saveData(type,data);
				case 'lword':
					var msg = $53.trim(_this.param.msg);
					if(msg == "") return _this.reback('601','msg is null');
					var name = $53.trim(_this.param.name  ? _this.param.name : "");
					var email = $53.trim(_this.param.email  ? _this.param.email : "");
					var qq = $53.trim(_this.param.qq ? _this.param.qq : "");
					var phone = $53.trim(_this.param.phone ? _this.param.phone : "");
					var company = $53.trim(_this.param.company  ? _this.param.company : "");
					var address = $53.trim(_this.param.address ? _this.param.address : "");
					var notes = $53.trim(_this.param.notes ? _this.param.notes : "");
					_this.saveLword(_this.param.cmd,msg,name,email,qq,phone,company,address,notes);
					break;
				case 'callphone':
					var id6d = $53.trim(_this.param.id6d  ? _this.param.id6d : "");
					var call = $53.trim(_this.param.call  ? _this.param.call : "");
					var worker_id = $53.trim(_this.param.worker_id  ? _this.param.worker_id : "");
					var reg = /^((0\d{2,3}-?\d{7,8})|(1[3-9]\d{9}))$/;
					if(call != "" && !reg.test(call)) return _this.reback('601','error call');
					if(id6d=="" && worker_id == "") return _this.reback('602','worker_id and id6d cannot be empty at the same time');
					_this.savePhone(call,id6d,worker_id);
					break;
				case 'comeinfo':
					var title =  $53.trim(_this.param.title);
					var logo =  $53.trim(_this.param.logo);
					var content =  $53.trim(_this.param.content);
					var curl =  $53.trim(_this.param.curl);
					_this.saveCinfo(logo,title,content,curl);
					break;
				case 'custmsg':
					var msg =  $53.trim(_this.param.msg).replace(/<[^>]+>/g,"");
					var type =  $53.trim(_this.param.type);//0不打开窗口，1打开浮框，2打开新窗口
					if(msg == "") 	return _this.reback('601','msg cannot null');
					var callback = "";
					if(type == "1"){
						if(_this.terminal == 'pc'){
							callback = "hz6d_startReautoTimer2(3)";
						}else{
							callback = "change_kf_openurl()";
						}
					}else if(type == "2"){
						if(_this.terminal == 'pc'){
							callback = 'window.open("'+_this.openurl+'","_blank","height=600,width=800,top=200,left=200,status=yes,toolbar=no,menubar=no,resizable=yes,scrollbars=no,location=no,titlebar=no")';
						}else{
							callback = 'location.href = "'+_this.openurl+'"';
						}
					}
					_this.saveCustMsg(msg,callback);
					break;
				default:
					return _this.reback('601','error cmd');
					break;
			}
		},
		this.talk = function(type,zdkf_type,kf){
			var _this = this;
			var param = kf != '' ? ('&zdkf_type='+zdkf_type+'&kf='+kf) : '';
			if(_this.terminal == 'mobile'){
				_this.setPopParam(param);
				change_kf_openurl();
			}
		},
		this.openkf = function(type,zdkf_type,kf){
			var _this = this;
			var param = kf != '' ? ('&zdkf_type='+zdkf_type+'&kf='+kf) : '';
			if(type == 'new'){
				var url = _this.openurl+param;
				if(_this.terminal == 'pc'){
					window.open(url,"_blank","height=600,width=800,top=200,left=200,status=yes,toolbar=no,menubar=no,resizable=yes,scrollbars=no,location=no,titlebar=no");
				}else{
					location.href = url;
				}
			}else{
				if(_this.terminal == 'pc'){
					_this.setPopParam(param);
					hz6d_startReautoTimer2(3);
				}else{
					show_mobile_chat();
				}
			}
		},
		this.saveData = function(type,data){
			$53.sendData(type,data);
		},
		this.saveLword = function(type,msg,name,email,qq,phone,company,address,notes){
			$53.sendLword(type,msg,name,email,qq,phone,company,address,notes);
		},
		this.savePhone = function(call,id6d,worker_id){
			$53.callPhone(call,id6d,worker_id);
		},
		this.saveCinfo = function(logo,title,content,curl){
			$53.comeInfo(logo,title,content,curl);	
		},
		this.saveCustMsg = function(msg,callback){
			$53.addCustMsg(msg,callback);
		}
		this.openUrl = function(url,resize){    //内部调用接口 用来点击打开咨询页面
			window.open(url,"_blank","height=470,width=702,top=200,left=200,status=yes,toolbar=no,menubar=no,resizable="+resize+",scrollbars=no,location=no,titlebar=no");
		},
		this.reback = function(code,info,clear){   //返回信息
			var _this = this;
			var data = {};
			if(code == '201'){
				data = {code:code,cmd:_this.param.cmd,info:info};
			}else{
				data = {code:code,info:info};
			}
			if(clear !== false){
				_this.param = {};    //清空参数
			}
			return data;
		}
	}
	// window.open 方法重写 
	// 支持ie/ff/chrome/safari/opera 
	var _open = window.open;
	window.open = function(sURL, sName, sFeatures, bReplace) {
		if (sURL == undefined) {
			sURL = ''
		}
		if (sName == undefined) {
			sName = ""
		}
		if (sFeatures == undefined) {
			sFeatures = ""
		}
		if (bReplace == undefined) {
			bReplace = false
		}
		if (/webCompany.php|webClientMin.php/.test(sURL)) {
			sURL += '&timeStamp=' + new Date().getTime() + '&ucust_id=' + $53.EN($53.getCookie('ucust_id'));
		} else if ('$zdyurl' != '') {
			var _zdyurl = '$zdyurl';
			if (sURL.indexOf(_zdyurl) > -1) {
				sURL += '&timeStamp=' + new Date().getTime() + '&ucust_id=' + $53.EN($53.getCookie('ucust_id'));
			}
		}
		try{sURL = sURL.replace('&referer={hz6d_referer}',hz6d_referer);}catch(e){}
		var win = _open(sURL, sName, sFeatures, bReplace);
		return win;
	}
	window.$53 = $53;
})(window);


/* ↓图标相关函数↓ */
	
	function hz6d_html_replace(html)
	{   
	    if(html.indexOf('{hz6d_keyword}') == -1) {
           return html.replace(/%7Bhz6d_keyword%7D/gim, encodeURIComponent(hz6d_from_page_new) + "&tfrom=1"); 	       
	    }else{
	       return html.replace(/{hz6d_keyword}/gim, hz6d_from_page_new + "&tfrom=1");
	    }		
	}

	function hz6d_is_exist(html){
		if (typeof(hz6d_showContent)  == "function" && hz6d_showContent && typeof(hz6d_ID('hz6d_chatting_iframes')) != undefined){
			hz6d_showContent();
		}else{
			var new_clic = html.replace(/#liyc#/g,"\'");
			eval(decodeURIComponent(new_clic));
		}
	}
	function hz6d_is_exists(html,kf){
		if (typeof(hz6d_showContent)  == "function" && hz6d_showContent && typeof(hz6d_ID('hz6d_chatting_iframes')) != undefined){
			hz6d_showContent(kf);
		}else{
			eval(decodeURIComponent(html));
		}
	}
	// has defined <!DOCTYPE... > 

	function hasdoctype()
  {
		if (document.compatMode == "BackCompat")
		{
			ret = false;
		}
		else
		{
			ret = true;
		}
		return ret;
	}

	function detectBrowser()
	{
		var ret = "ie6"; // default
		var user_agent = navigator.userAgent;
		if (user_agent.indexOf("compatible") > -1)
		{
			if (user_agent.indexOf("MSIE 6.0") > -1)
			{
				ret = "ie6";
			}
			else if (user_agent.indexOf("MSIE 7.0") > -1)
			{
				ret = "ie7";
			}
			else if (user_agent.indexOf("MSIE 8.0") > -1)
			{
				ret = "ie8";
			}
			if (user_agent.indexOf("360") > -1)
			{
				ret = "360";
			}
		}
		else if (user_agent.indexOf("Gecko") > -1)
		{
			ret = "firefox";
		}
		if (user_agent.indexOf("TheWorld") > -1)
		{
			ret = "TheWorld";
		}
		return ret;
	}
	
	// 间距小于步进，则移动间距的距离 
	function smoothMove(start, end)
	{
		var step = Math.abs(end - start);
		var forword = end - start;
		if (step > 2)
		{
			step = Math.ceil(step * 0.2) * (forword / Math.abs(forword));
		}
		else
		{
			step = step * (forword / Math.abs(forword));
		}
		posi = start + step;
		if (step > 0)
		{
			if (posi > end) posi = end;
		}
		else
		{
			if (posi < end) posi = end;
		}
		return posi;
	}
	
	var hasdoctype = hasdoctype();
	var browser = detectBrowser();
	// 点击图标设置变量 

function setIsinvited()
{
	try
	{
		onliner_zdfq = 2;
		if (acc_autotype == 3)
		{
			document.cookie = "onliner_zdfq{$companyid}=" + onliner_zdfq;
		}
	}
	catch (e)
	{}
}
/* ↑图标相关函数↑ */

// 设置 新老访客 
function set53gidCookie(key,value,expire){
	$53.setCookie(key,value,{
		"expires":expire
	});
	switch(key){
		case '53gid2':
			// new visitor
			$53.setCookie('visitor_type','new');
			break;
		case '53gid0':
			$53.data('is_uv',1);
			break;
		case '53gid1':
			$53.data('is_rv',1);
			break;		
	}
}

if(!$53.getCookie('53gid2')) {
	set53gidCookie('53gid2',hz6d_guest_id,10*365*24*3600);
} else if($53.getCookie('53gid2')) {
	var hz6d_53gid2 = $53.getCookie('53gid2');
	// old visitor
	if(hz6d_guest_id == hz6d_53gid2){
		$53.setCookie('visitor_type','old');
    	hz6d_guest_id = $53.getCookie('53gid2'); 
	}else{
		set53gidCookie('53gid2',hz6d_guest_id,10*365*24*3600);
	}
}
// set my site uid -> crm
// set 53kf guest_id 设置UV 
if (!$53.getCookie('53gid0')){
	set53gidCookie('53gid0',hz6d_guest_id,$53.getTimeTo24());
} else if($53.getCookie('53gid2')){
	var hz6d_53gid0 = $53.getCookie('53gid0');
	if(hz6d_guest_id == hz6d_53gid0){
		$53.data('is_uv',0);
	}else{
		set53gidCookie('53gid0',hz6d_guest_id,$53.getTimeTo24());
	}
}
// 设置RV 
if (!$53.getCookie('53gid1')){
	set53gidCookie('53gid1',hz6d_guest_id,86400);
} else if($53.getCookie('53gid2')){
	var hz6d_53gid1= $53.getCookie('53gid1');
	if(hz6d_guest_id == hz6d_53gid1){
		$53.data('is_rv',0);
	}else{
		set53gidCookie('53gid1',hz6d_guest_id,86400);
	}
}

var is_revisit = 0;
if (!$53.getCookie('53revisit')) {
    $53.setCookie('53revisit',new Date().getTime(),{
		expires:10*365*24*3600,'path':'/'
	});       
} else {
    if((new Date().getTime() - $53.getCookie('53revisit')) > 86400000){
        is_revisit = 1;    
    }
}

// 获取访问的入口来源页面:搜索引擎/外部链接/直接输入 
var hz6d_from_page = $53.getCookie("53kf_"+companyid+"_keyword");
var hz6d_now_host = window.location.host;
function getHz6dReferer(){
	var referer = "";
	var hz6d_request = $53.getUrlParam();
	var hz6d_tglink = false;
	var search_engine_list = {'baidu':'wd=',
		'haosou':'q=',
		'sogou':'query=',
		'google':'q=',
		'youdao':'q=',
		'sm':'q='
	};
	if(hz6d_request['tgse'] && hz6d_request['tgkwd']){
		hz6d_tglink = 'http://www.' + hz6d_request['tgse'] + '.com/s?' + search_engine_list[hz6d_request['tgse']] + decodeURIComponent(hz6d_request['tgkwd']);
	}
	if(hz6d_tglink){//是否是推广页面
		referer = hz6d_tglink;
	}else{
		referer = document.referrer;
	}
	return referer;
}

if(hz6d_from_page == ""){
	hz6d_from_page = getHz6dReferer();
	if(hz6d_now_host != "") $53.setCookie("53kf_"+companyid+"_from_host",hz6d_now_host,{'path':'/'});
}else {
	var hz6d_from_page_referer = getHz6dReferer();
	var hz6d_from_page_host = $53.getUrlHost(hz6d_from_page_referer);
	if(hz6d_from_page_host != "" && hz6d_now_host != "" && hz6d_now_host != hz6d_from_page_host){
		var hz6d_now_hosts_string = $53.getCookie("53kf_"+companyid+"_from_host");
		var hz6d_now_hosts = hz6d_now_hosts_string.split(",");
		if(hz6d_now_hosts.length>0){
			if(hz6d_now_hosts.indexOf(hz6d_from_page_host) == -1){
				hz6d_from_page = hz6d_from_page_referer;
			}
			if(hz6d_now_hosts.indexOf(hz6d_now_host) == -1){
				hz6d_now_hosts_string += ","+hz6d_now_host;
				$53.setCookie("53kf_"+companyid+"_from_host",hz6d_now_hosts_string,{'path':'/'});
			}
		}else {
			hz6d_from_page = hz6d_from_page_referer;
			$53.setCookie("53kf_"+companyid+"_from_host",hz6d_now_host,{'path':'/'});
		}
	}
}
$53.data('page_referer',hz6d_from_page);
$53.setCookie("53kf_"+companyid+"_keyword",hz6d_from_page,{'path':'/'});
//eval("var kf_"+companyid+"_keyword_ok=$53.getCookie('kf_"+companyid+"_keyword_ok');");
//if (!eval("kf_"+companyid+"_keyword_ok"))
//{
//    var hz6d_request = $53.getUrlParam();
//    var hz6d_tglink = false;
//    var search_engine_list = {'baidu':'wd=',
//        'haosou':'q=',
//        'sogou':'query=',
//        'google':'q=',
//        'youdao':'q=',
//        'sm':'q='
//		};
//    if(hz6d_request['tgse'] && hz6d_request['tgkwd']){
//	   hz6d_tglink = 'http://www.' + hz6d_request['tgse'] + '.com/s?' + search_engine_list[hz6d_request['tgse']] + decodeURIComponent(hz6d_request['tgkwd']);
//    }
//    if(hz6d_tglink){//是否是推广页面
//        hz6d_from_page = hz6d_tglink;
//    }else{
//        hz6d_from_page = document.referrer;
//    }
//}
//$53.data('page_referer',hz6d_from_page);
//$53.setCookie("53kf_"+companyid+"_keyword",hz6d_from_page,{'path':'/'});
//$53.setCookie("kf_"+companyid+"_keyword_ok",1,{'path':'/'});
hz6d_from_page_new = "&keyword=" + $53.EN(hz6d_from_page);
var acc_browser = $53.getBrowser();
var acc_os = $53.getOs();
var hz6d_land_page = $53.getCookie("53kf_"+companyid+"_land_page");
eval("var kf_"+companyid+"_land_page_ok=$53.getCookie('kf_"+companyid+"_land_page_ok');");

//公司站点
try{ 
	var in_site = false;    
    var talk_page_now = window.location.href;
    if(talk_page_now.indexOf('hz6d{') != -1) {
        talk_page_now = talk_page_now.substring(0,talk_page_now.indexOf('hz6d{'));
    }
    var talk_page = window.encodeURIComponent(talk_page_now);
    if (!eval("kf_"+companyid+"_land_page_ok")){
    	hz6d_land_page = talk_page;
    }
    var is_null = true;
    if(talk_page_now.indexOf("53kf.com") == -1){
        for (var p in company_site){
            if(company_site.hasOwnProperty(p)){
	    	is_null = false;
                if(talk_page_now.indexOf(company_site[p].replace(/\\\//g,"/")) != -1){
                    in_site = true; 
                    break; 
                } 
            }
        }
	if(is_null) in_site = true;
    }else{
        in_site = true;
    } 
}catch(e){
	in_site = true;
}

$53.setCookie("53kf_"+companyid+"_land_page",hz6d_land_page,{'path':'/'});
$53.setCookie("kf_"+companyid+"_land_page_ok",1,{'path':'/'});

var acc_first_time = new Date().getTime();

function hz6d_sendACC() {
    var kh_status = 0;
    if(onliner_zdfq==3) { kh_status = 3; }
        // var talk_page_tmp = window.location.href;
        // if(talk_page_tmp.indexOf('hz6d{') != -1) {
        //     talk_page_tmp = talk_page_tmp.substring(0,talk_page_tmp.indexOf('hz6d{'));
        // }
        // var talk_page = window.encodeURIComponent(talk_page_tmp);
   // 	var kf_time = "$in_timestamp";
    	var time = new Date().getTime();
    	if(time - acc_first_time > 24*60*60*1000) return;
    	var curSecond = Math.floor(time/1000);
    	var page_title = document.title;								
    //	var url = "$http://$acc_host/sendacc.jsp?cmd=ACC&did=0&sid=12&company_id="+com_id+"&guest_id="+hz6d_guest_id+"&status="+kh_status+"&guest_name=&guest_ip="+ip+"&guest_ip_info="+guest_ip_info+"&from_page="+from_page+"&talk_page="+talk_page+"&kf_time="+kf_time+"&bto_id6d=-99&time="+time + '&ucust_id=' + $53.getCookie('ucust_id') + '&style=' + $style_id + '&is_mobile=n&visitor_type='+$53.getCookie('visitor_type')+'&is_uv='+$53.data('is_uv');
    	var url = http_pro + acc_host + "/sendacc.jsp?cmd=ACC&did=0&sid=12&company_id="+companyid+"&guest_id="+hz6d_guest_id+"&status="+kh_status+"&guest_name=&guest_ip="+$53.EN(hz6d_guest_ip)+"&guest_ip_info="+ipstr+"&area="+areastr+"&from_page=" + $53.EN($53.getCookie("53kf_"+companyid+"_keyword")) +"&talk_page="+talk_page+"&kf_time="+in_timestamp+"&bto_id6d=-99&time="+time + '&ucust_id=' + $53.EN($53.getCookie('ucust_id')) + '&style='+hz6d_style_id+'&is_mobile='+$53.isMobile()+'&visitor_type='+$53.getCookie('visitor_type')+'&is_uv='+$53.data('is_uv')+'&browser='+acc_browser+'&os='+acc_os+'&is_revisit='+is_revisit+"&page_title="+$53.EN(page_title);
  	if(companyid==72153759) url += "&acc_first_time="+acc_first_time;
  	$53.createScript("hz6d_send_acc", url);
        setTimeout("hz6d_sendACC()",20000);
}
if (companyid!=72157223 && in_site)
hz6d_sendACC();

if(get_gdt_openid == 1){
	var gdt_time = new Date().getTime();
	var gdt_url = "//cm.e.qq.com/cm.fcg?gdt_dspid=8417552&gdt_dsp_checksum="+companyid+"&gdt_dsp_timestamp=" + gdt_time.toString().substr(0,10);
	$53.createScript("hz6d_get_gdt_openid", gdt_url);
}

$53.data("workers",{"5301429":{"worker_id":"802","state":0,"bname":"802"},"5303114":{"worker_id":"808","state":0,"bname":"808"},"5301385":{"worker_id":"wjg01","state":0,"bname":"8000"},"10058089":{"worker_id":"8002@wanjiagou.com","state":0,"bname":""},"5301428":{"worker_id":"801","state":0,"bname":"801"},"10058081":{"worker_id":"8001@wanjiagou.com","state":0,"bname":"8001"}});$53.data("groups",{});$53.data("shunt_info",{"shunt_type":"1"});$53.data("area_shunt",{});$53.data("source_shunt",{});$53.data("channel_shunt",{});$53.data("over_flow",{});$53.data("over_flow_schedule",{});$53.data("of_all_worker",{"5301429":{"worker_id":"802","state":0,"bname":"802"},"5303114":{"worker_id":"808","state":0,"bname":"808"},"5301385":{"worker_id":"wjg01","state":0,"bname":"8000"},"10058089":{"worker_id":"8002@wanjiagou.com","state":0,"bname":""},"5301428":{"worker_id":"801","state":0,"bname":"801"},"10058081":{"worker_id":"8001@wanjiagou.com","state":0,"bname":"8001"}});$53.data("of_groups",{});$53.data("mobileCompanyInfo",{"stop_back":"1","company_logo":"","company_intr":"","company_short":"","mobile_music":"","zdyurl":"","minchat_height":""});$53.data("icon_award",{});$53.data("api_uuid","a2e1d28c2761734a4d7cef761545fee0");
$53.setUuid("a2e1d28c2761734a4d7cef761545fee0");
(function(window,undefined){
    var head=document.getElementsByTagName("head")[0];
    var kfscript1= document.createElement("script");
    kfscript1.src="http://www10.53kf.com/custom/70712085/mobile_icon_70712085_2.js?v=1490791195";
    var done1=false;
    kfscript1.onload=kfscript1.onreadystatechange=function(){
        if(!done1&&(!this.readyState||this.readyState=="loaded"||this.readyState=="complete")){
            done1=true;
            kfscript1.onload=kfscript1.onreadystatechange=null;head.removeChild(kfscript1);
        }
    }
    head.appendChild(kfscript1);
    var kfscript2= document.createElement("script");
    kfscript2.src="http://www10.53kf.com/custom/70712085/mobile_invite_70712085_2.js?v=1490863129";
    var done2=false;
    kfscript2.onload=kfscript2.onreadystatechange=function(){
        if(!done2&&(!this.readyState||this.readyState=="loaded"||this.readyState=="complete")){
            done2=true;
            kfscript2.onload=kfscript2.onreadystatechange=null;head.removeChild(kfscript2);
        }
    }
    head.appendChild(kfscript2);
    var kfscript3= document.createElement("script");
    kfscript3.src="http://www10.53kf.com/js/default/assign_worker_default.js?v=2017080212";
    var done3=false;
    kfscript3.onload=kfscript3.onreadystatechange=function(){
        if(!done3&&(!this.readyState||this.readyState=="loaded"||this.readyState=="complete")){
            done3=true;
            kfscript3.onload=kfscript3.onreadystatechange=null;head.removeChild(kfscript3);
        }
    }
    head.appendChild(kfscript3);
    var kfscript4= document.createElement("script");
    kfscript4.src="http://www10.53kf.com/js/default/mobile_chat_default.js?v=2017080212";
    var done4=false;
    kfscript4.onload=kfscript4.onreadystatechange=function(){
        if(!done4&&(!this.readyState||this.readyState=="loaded"||this.readyState=="complete")){
            done4=true;
            kfscript4.onload=kfscript4.onreadystatechange=null;head.removeChild(kfscript4);
        }
    }
    head.appendChild(kfscript4);
})(window);
    
(function(window,document,talkHost,ipStr,ipContinent,companyId,styleId,undefined){
	/**
	*$53.data('workers')		工号信息
	*$53.data('groups')			分组信息
	*$53.data('page_referer')	访问来源
	*$53.data('mobile_icon')	手机图标设置
	*$53.data('mobile_invite')	手机邀请框设置
	*$53.data('assign_worker')	指定客服设置
	*$53.data('zdkf_type')		客服指定类型	1:指定工号 2:指定部门(已废弃) 3:指定分组
	*$53.data('kf')				具体指定客服
	*$53.data('is_online')		是否在线   		0:离线 1:在线
	*/
	/****************************************事件处理基类开始*************************************/
	function handler(){
		var _this = this;
		_this.app_name = '_53App';
		_this.ipStr = decodeURI(ipStr);
		_this.talkHost = talkHost;
		_this.isOnline = false;
		_this.companyId = companyId;
		_this.fromPage = $53.data('page_referer');
		_this.styleId = styleId;
	}
	handler.prototype.setSession = function(key,value){
		try{
			if(window.sessionStorage){
				sessionStorage.setItem(key,value);
			}else{
				$53.setCookie(key,value);
			}
		} catch (error) {
        	return false;
    	}
		
	}
	handler.prototype.getSession = function(key){
		try{
			if(window.sessionStorage){
				return sessionStorage.getItem(key);
			}else{
				$53.getCookie(key);
			}
		} catch (error) {
        	return false;
    	}
	}
	handler.prototype.getWorkerInfo = function(id6d){
		var workers = $53.data('workers');
		return workers[id6d];
	}
	/**
	*事件处理接口，具体功能由继承类实现
	*/
	handler.prototype.show = function(){}	//图标/邀请框显示
	handler.prototype.hide = function(){}	//图标/邀请框隐藏
	handler.prototype.talk = function(){}	//点击咨询
	handler.prototype.setMsgTip = function(obj){}	//来消息设置
	/****************************************事件处理基类结束*************************************/

	/****************************************手机图标类开始*************************************/
	function _53_mobile_icon(icon_set){
		var _this = this;
		_this.isOnline = $53.data('is_online') === '1' ? true:false;
		_this.iconElm = null;
		if(typeof  icon_set.on_is_open != "undefined"){//老数据兼容
			_this.on_is_open = icon_set.on_is_open;
			_this.on_left = icon_set.on_left;
			_this.on_top = icon_set.on_top;
			//_this.on_content = icon_set.on_content;
			_this.off_is_open = icon_set.off_is_open;
			_this.off_left = icon_set.off_left;
			_this.off_top = icon_set.off_top;
			//_this.off_content = icon_set.off_content;
		}else {
			_this.on_is_open = icon_set.is_open;
			_this.on_left = icon_set.left;
			_this.on_top = icon_set.top;
			_this.off_is_open = icon_set.is_open;
			_this.off_left = icon_set.left;
			_this.off_top = icon_set.top;
		}
		_this.on_content = icon_set.on_content;
		_this.off_content = icon_set.off_content;
		_this.chat_type = icon_set.chat_type ? icon_set.chat_type : 0;
		_this.lotto_top = icon_set.lotto_top ? icon_set.lotto_top : 45;
		_this.lotto_left = icon_set.lotto_left ? icon_set.lotto_left : 100;
		_this.icon_award = $53.data("icon_award");		

		_this._53Api = $53.createApi();
		_this.init();
	}
	_53_mobile_icon.prototype = new handler();	//继承事件处理基类
	_53_mobile_icon.prototype.init = function(){
		var _this = this;
		_this.on_content = _this.formatContent(_this.on_content);
		_this.off_content = _this.formatContent(_this.off_content);
		_this.createIcon();
		_this.lot = new Lotto();
		_this.lot.iconTalk = function(){
			_this.talk();
		};
		if((_this.isOnline&&_this.on_is_open == 'yes')||(!_this.isOnline&&_this.off_is_open == 'yes')){
			if(mnone != 1) _this.show();
		}
	}
	_53_mobile_icon.prototype.getOpenUrl = function(){
		var _this = this;
		var mobile_config = $53.data("mobileCompanyInfo");
		try{
			if(mobile_config["zdyurl"] != ""){
				var openUrl = mobile_config["zdyurl"];
				if(openUrl.indexOf("http://") == -1 && openUrl.indexOf("https://") == -1) openUrl = talkHost + openUrl;
				if(openUrl.indexOf("?") == -1) openUrl += "?";
			}else {
				var openUrl = talkHost+'/m.php?';
			}
		}catch(e){
			var openUrl = talkHost+'/m.php?';
		}
		var openUrl = openUrl+'cid='+_this.companyId+'&style='+_this.styleId+'&keyword='+encodeURIComponent(_this.fromPage)+'&referer='+encodeURIComponent(window.location.href)+'&guest_id='+encodeURIComponent($53.getCookie('53gid2'))+'&tpl='+encodeURIComponent($53.data('tpl'))+'&uid='+encodeURIComponent($53.data('api_uuid'))+'&u_stat_id='+encodeURIComponent($53.data('u_stat_id'))+'&talktitle='+encodeURIComponent(document.title)+'&tfrom=50&device='+hz6d_device;
		return openUrl;
	}
	_53_mobile_icon.prototype.show = function(){
		var _this = this;
		_this.iconElm.style.display = 'block';
		_this.setPosition();
	}
	_53_mobile_icon.prototype.hide = function(){
		var _this = this;
		_this.iconElm.style.display = 'none';
	}
	_53_mobile_icon.prototype.talk = function(params){
		var _this = this;
		_this.setSession(_this.companyId+'_invite_times',0);
		location.href = _this.getOpenUrl()+params;
	}
	_53_mobile_icon.prototype.setPosition = function(){
		var _this = this;
		var icon_left = _this.isOnline?_this.on_left:_this.off_left;
		var icon_bottom = 100-(_this.isOnline?_this.on_top:_this.off_top);
		var iconElm = _this.iconElm;

		if(iconElm.firstChild.hasAttribute("53kf_icon_versions")){
			var client_width = document.body.clientWidth || document.documentElement.clientWidth;
			iconElm.firstChild.style.fontSize = 10*client_width/375 + "px";
		}

		var icon_width = iconElm.offsetWidth==0?iconElm.firstChild.offsetWidth:iconElm.offsetWidth;
		var icon_height = iconElm.offsetHeight==0?iconElm.firstChild.offsetHeight:iconElm.offsetHeight;
		var w = window.innerWidth; 
		var h= window.innerHeight; 
		if(iconElm.firstChild){
			iconElm.firstChild.style.position = 'fixed';
			iconElm.firstChild.style.marginLeft = '0px';
			iconElm.firstChild.style.marginTop = '0px';
			iconElm.firstChild.style.height = icon_height+'px';
			iconElm.firstChild.style.left = (w-icon_width)*(icon_left/100)+'px';
			iconElm.firstChild.style.bottom = (h-icon_height)*(icon_bottom/100)+'px';
		}
		if(typeof _this.icon_award.activity_name != "undefined"){
			_this.lot.positionIcon(_this.lotto_left,_this.lotto_top);
		}
	}
	_53_mobile_icon.prototype.createIcon = function(){
		var _this = this;
		$53.creElm({
			'style':'position:fixed;display:none;font-family:Microsoft YaHei,Arial;z-index:1000000;width:auto;height:auto',
			'id':'mobile_icon_div',
			'innerHTML':_this.isOnline?_this.on_content:_this.off_content
		},'div');
		_this.iconElm = document.getElementById('mobile_icon_div');
	}
	_53_mobile_icon.prototype.formatContent = function(content){
		var _this = this;
		content = content.replace(/\.\.\//g,_this.talkHost+'/');
		content = content.replace(/class=".*?"/g,'');
		content = content.replace(/event="\{(.*?)\}"/g, function(match, contents){
				return _this.getEvent(contents.split('|'));
			}
		);
		if(typeof _this.icon_award.award_name != "undefined"){
			content = content.replace(/{jh6d_award_name}/g,_this.icon_award.award_name);
		}
		return content;
	}
	_53_mobile_icon.prototype.setMsgTip = function(obj){
		var _this = this;
		var tipElm = obj.parentNode;
		tipElm.style.display = 'none';
		var msg_tip_count = 0;
		_this._53Api.push('msg_callback',function(){
			tipElm.style.display = 'block';
			msg_tip_count += 1;
			tipElm.innerHTML = msg_tip_count;
		});
		if(typeof icon_msg_tip_hide != "function"){
			window.icon_msg_tip_hide = function(){
				tipElm.style.display = 'none';
				msg_tip_count = 0;
				tipElm.innerHTML = msg_tip_count;
			}
		}
	}
	_53_mobile_icon.prototype.getAppObj = function(obj){
		var _this = this;
		return _this[obj];
	}
	_53_mobile_icon.prototype.getEvent = function(eventArr){
		var _this = this;
		var eventStr = '';
		switch(eventArr[0]){
			case 'close':
				eventStr = 'onclick="'+_this.app_name+'.hide(\'icon\');"';
				break;
			case 'talk':
				if(_this.chat_type == 0){
					var params = '';
					if(eventArr[2] == 'group'){
						params += '&zdkf_type=3&kf='+eventArr[3];
					}else if(eventArr[2] == 'kf'){
						var workInfo = _this.getWorkerInfo(eventArr[3]);
						params += '&zdkf_type=1&kf='+$53.EN(workInfo['worker_id']);
					}else{
						params += '&zdkf_type='+$53.data('zdkf_type')+'&kf='+$53.EN($53.data('kf'))+'&kflist='+$53.data('kflist');
						var addLinkParams = $53.data("add_link_params");
						if(addLinkParams != null) params+=addLinkParams;
					}
					eventStr = 'onclick="'+_this.app_name+'.talk(\'icon\',\''+params+'\');"';
				}else {
					if(document.getElementById("mini_chat") != null && document.getElementById("mini_chat").length > 0 )
						eventStr = 'onclick="'+_this.app_name+'.getApp(\'chat\').talk(\'\',\'float\');"';
					else
						eventStr = 'onclick="'+_this.app_name+'.getApp(\'chat\').openSdkUrl(\'float\');"';
				}

				break;
			case 'qq':
				eventStr = 'onclick="location.href=\'mqqwpa://im/chat?chat_type=wpa&uin='+eventArr[1]+'&version=1&src_type=web&web_src=oicqzone.com\'"';
				break;
			case 'tel':
				eventStr = 'onclick="location.href=\'tel:'+eventArr[1]+'\'"';
				break;
			case 'msgTip':
				eventStr = '<img hidden src="about:blank" onerror="'+_this.app_name+'.setMsgTip(\'icon\',this)"/>';
				break;
			case 'lottoShow':
				eventStr = 'onclick="'+_this.app_name+'.getAppObj(\'icon\',\'lot\').lottoShow();"';
				break;
			case 'lottoHide':
				eventStr = 'onclick="'+_this.app_name+'.getAppObj(\'icon\',\'lot\').lottoHide();"';
				break;
			case 'justNum':
				eventStr = 'onclick="'+_this.app_name+'.getAppObj(\'icon\',\'lot\').justNum(this);"';
				break;
			case 'lottoChange':
				var award_id = 0;
				if(typeof _this.icon_award.award_id != "undefined")  award_id = _this.icon_award.award_id;
				eventStr = 'onclick="'+_this.app_name+'.getAppObj(\'icon\',\'lot\').lottoChange(\''+award_id+'\');"';
				break;
			case 'onFocus':
				eventStr = 'onfocus="'+_this.app_name+'.getAppObj(\'icon\',\'lot\').onFocus()"'; 
				break;
			case 'onBlur':
				eventStr = 'onblur="'+_this.app_name+'.getAppObj(\'icon\',\'lot\').onBlur()"'
				break;					
			default:
				break;
		}
		return eventStr;
	}

	/****************************************手机图标类结束*************************************/

	/****************************************手机抽奖类结束*************************************/
	function Lotto(){
		this.icon = document.getElementById("lotto_icon");
		this.l = document.getElementById("lotto_redpacket");
		this.d = document.getElementById("lotto_decorate");
		this.r = document.getElementById("lotto_round");
		this.i = document.getElementById("lotto_inp");
		this.m = document.getElementById("lotto_message");
		this.w = document.getElementById("lotto_win");
		this.b = document.getElementById("lotto_btn");
		this.t = document.getElementById("lotto_btntext");
		this.s = document.getElementById("lotto_s");
		this.n = document.getElementById("lotto_name");
		this.p = document.getElementById("lotto_phonenum");
		this.u = document.getElementById("lotto_statu");
	};
	Lotto.prototype = {
		// 抽奖图标font-size初始化
		lotFontSize:function(){
			var _this = this;
			var client_width = document.body.clientWidth || document.documentElement.clientWidth;
			var ratio = client_width/375;
			if(this.icon.hasAttribute("53kf_icon_versions")){
				this.icon.style.fontSize = 10*ratio + "px";
			}
			_this.icon.style.display = "block";
		},
		//设置抽奖位置
		positionIcon : function(left,top){
			var _this = this;
			//var wid=document.documentElement.clientWidth;
			//var hei=document.documentElement.clientHeight;
			_this.lotFontSize();
			var wid = document.documentElement.clientWidth,hei;
			if(navigator.appName == "Microsoft Internet Explorer"){
				hei=document.documentElement.clientHeight;
			}else{
				hei=window.innerHeight;
			}

			_this.icon.style.left =( wid-parseInt(_this.icon.offsetWidth))*(left/100) + 'px';
			_this.icon.style.top = (hei-parseInt(_this.icon.offsetHeight))*(top/100) + 'px';
		},
		// 抽奖红包出现
		lottoShow : function(){
			var _this = this;
			if(_this.l.style.display == "none"){
				_this.b.setAttribute('data-class',0);
				_this.l.style.display = "block";
				_this.r.style.display = "block";
				_this.d.style.display = "none";
				_this.m.style.display = "none";
				_this.i.style.display = "none";
				_this.w.style.display = "none";
				_this.t.innerHTML = "立即抽奖";
				_this.s.style.display = "inline-block";
				clearInterval(_this.timout);
				_this.s.innerHTML = "(60s)";
				_this.timeGo();
			}else{
				return false;
			}
		},
		// 抽奖红包隐藏
		lottoHide : function(){
			clearInterval(this.timout);
			this.s.innerHTML = "(60s)";
			this.n.value = "";
			this.p.value = "";
			this.l.style.display = "none";
		},
		// 抽奖状态切换(待添加验证：该手机号码已领取奖励)
		lottoChange : function(award_id){
			var _this = this;
			if(_this.b.getAttribute('data-class') == 0){
				_this.b.setAttribute('data-class',1);
				_this.r.style.display = "none";
				_this.d.style.display = "block";
				_this.m.style.display = "block";
				_this.i.style.display = "block";
				_this.t.innerHTML = "立即领取";
				_this.s.style.display = "inline-block";
				clearInterval(_this.timout);
				_this.s.innerHTML = "(60s)";
				_this.timeGo();
			}else if(_this.b.getAttribute('data-class') == 1){
				var mobil = /^1[3-9]\d{9}$/;
				if(_this.p.value == ""){
					_this.statuSh("请输入手机号码");
					return false;
				}else if(!mobil.test(_this.p.value)){
					_this.statuSh("请输入有效的手机号码");
				}else{
					var script_id = 'kf_script_award';
					var name = _this.n.value;
					var mobile = _this.p.value;
					var callBackFunName = "award_callback_"+new Date().getTime();
					eval(callBackFunName + '= function(data){_this.createResult(data)}');

					var url = hz6d_alias_host+'/kfapi_award.php?company_id='+companyid+'&style='+hz6d_style_id+'&guest_id='+hz6d_guest_id+'&name='+encodeURIComponent(name)+'&mobile='+mobile+'&award_id='+award_id+'&callback='+callBackFunName;
					$53.createScript(script_id,url);
					_this.t.innerHTML = "抽奖中...";
					_this.s.style.display = "none";
					clearInterval(_this.timout);
				}
			}else{
				// console.log("点击建立对话");
				_this.iconTalk();
				_this.l.style.display = "none";
			}
		},
		createResult:function(data){
			var _this = this;
			if(data.code == 200){
				_this.b.setAttribute('data-class',2);
				_this.r.style.display = "none";
				_this.m.style.display = "none";
				_this.i.style.display = "none";
				_this.w.style.display = "block";
				_this.t.innerHTML = "咨询在线客服";
				_this.s.style.display = "none";
				_this.icon.style.display = "none";
			}else{
				_this.statuSh(data.info);
			}			
		},
		// 状态提醒
		statuSh : function(str){
			var _this = this;
			_this.u.innerHTML = str;
			_this.u.style.display = "block";
			_this.u.style.marginLeft = (-_this.u.offsetWidth/2) + "px";
			_this.u.style.left = "50%";
			var timer = setTimeout(function(){
				_this.u.style.display = "none";
				clearTimeout(timer);
			},1500)
		},
		// 禁止输入非数字
		justNum : function(obj) {
			obj.value = obj.value.replace(/[^\d]/g,'');
		},
		// 60s倒计时
		timeGo : function() {
			var _this = this;
			var count = 60;
			_this.timout = setInterval(function(){
				count--;
				_this.s.innerHTML = "("+count+"s)";
				if(count == 0){
					clearInterval(_this.timout)
					_this.l.style.display = "none";
				}
			},1000)
		},
		// 获取焦点
		onFocus : function(){
			if(document.getElementById("mobile_minchat_div")){
				document.getElementById("mobile_minchat_div").style.display = "none";
			}
		},
		// 失去焦点
		onBlur : function(){
			if(document.getElementById("mobile_minchat_div")){
				document.getElementById("mobile_minchat_div").style.display = "block";
			}
		},
		iconTalk : function(){}
	};
	/****************************************手机抽奖类结束*************************************/

	
	/****************************************手机邀请框类开始***********************************/
	function _53_mobile_ivt(ivt_set){
		var _this = this;
		_this.isOnline = $53.data('is_online') === '1'?true:false;
		_this.ivtElm = null;
		_this.is_open = ivt_set.is_open;
		_this.invite_off = ivt_set.invite_off;
		_this.invite_left = ivt_set.invite_left;
		_this.invite_top = ivt_set.invite_top;
		_this.invite_area = ivt_set.invite_area;
		_this.fanfu_time = ivt_set.fanfu_time;
		_this.invite_times = ivt_set.invite_times;
		_this.page_times = ivt_set.page_times;
		_this.timeout = ivt_set.timeout;
		_this.ivt_content = ivt_set.content;
		_this.force_kf = "";//客服强制邀请数据
		_this.man_content = "";//客服强制邀请文本，暂不使用
		_this.acc_from_kf = false;//是否为客服强制邀请
		if(typeof ivt_set.invite_is_reauto != 'undefined') _this.invite_is_reauto = ivt_set.invite_is_reauto;
		else _this.invite_is_reauto = 2;
		_this.init();
	}
	_53_mobile_ivt.prototype = new handler();	//继承事件处理基类
	_53_mobile_ivt.prototype.init = function(){
		var _this = this;
		_this.ivt_content = _this.formatContent(_this.ivt_content);
		_this.createIvt();
		if(_this.getSession(_this.companyId+'_invite_times') == null){
			_this.setSession(_this.companyId+'_invite_times',_this.invite_times);
		}
		if(_this.is_open == 'yes'&&(_this.isOnline||(!_this.isOnline&&_this.invite_off == 'yes'))){
			setTimeout(function(){
				if(mnone != 1) _this.show("first");
			},_this.timeout*1000)
		}

		window.hz6d_showIvt = function(){//手动邀请
			_this.forceShow();
		}
	}
	_53_mobile_ivt.prototype.createIvt = function(){
		var _this = this;
		$53.creElm({
			'style':'display:none;position:fixed;font-family:Microsoft YaHei,Arial;z-index:1000000;',
			'id':'mobile_ivt_div',
			'innerHTML':_this.ivt_content
		},'div');
		_this.ivtElm = document.getElementById('mobile_ivt_div');
	}
	_53_mobile_ivt.prototype.getOpenUrl = function(){
		var _this = this;
		var mobile_config = $53.data("mobileCompanyInfo");
		try{
			if(mobile_config["zdyurl"] != ""){
				var openUrl = mobile_config["zdyurl"];
				if(openUrl.indexOf("http://") == -1 && openUrl.indexOf("https://") == -1) openUrl = talkHost + openUrl;
				if(openUrl.indexOf("?") == -1) openUrl += "?";
			}else {
				var openUrl = talkHost+'/m.php?';
			}
		}catch(e){
			var openUrl = talkHost+'/m.php?';
		}
		var openUrl = openUrl+'cid='+_this.companyId+'&style='+_this.styleId+'&keyword='+encodeURIComponent(_this.fromPage)+'&referer='+encodeURIComponent(window.location.href)+'&guest_id='+encodeURIComponent($53.getCookie('53gid2'))+'&tpl='+encodeURIComponent($53.data('tpl'))+'&uid='+encodeURIComponent($53.data('api_uuid'))+'&u_stat_id='+encodeURIComponent($53.data('u_stat_id'))+'&talktitle='+encodeURIComponent(document.title)+'&tfrom=51&device='+hz6d_device;
		return openUrl;
	}
	_53_mobile_ivt.prototype.formatContent = function(content){
		var _this = this;
		content = content.replace(/\.\.\//g,_this.talkHost+'/');
		content = content.replace(/class=".*?"/g,'');
		content = content.replace(/event="\{(.*?)\}"/g, function(match, contents){
				return _this.getEvent(contents.split('|'));
			}
		);
		return content;
	}
	_53_mobile_ivt.prototype.getEvent = function(eventArr){
		var _this = this;
		var eventStr = '';
		switch(eventArr[0]){
			case 'close':
				eventStr = 'onclick="'+_this.app_name+'.hide(\'invite\');"';
				break;
			case 'talk':
				var params = '';
				if(eventArr[2] == 'group'){
					params += '&zdkf_type=3&kf='+eventArr[3];
				}else if(eventArr[2] == 'kf'){
					var workInfo = _this.getWorkerInfo(eventArr[3]);
					params += '&zdkf_type=1&kf='+$53.EN(workInfo['worker_id']);
				}else{
					params += '&zdkf_type='+$53.data('zdkf_type')+'&kf='+$53.EN($53.data('kf'));
				}
				eventStr = 'onclick="'+_this.app_name+'.talk(\'invite\',\''+params+'\');"';
				break;
			case 'qq':
				eventStr = 'onclick="location.href=\'mqqwpa://im/chat?chat_type=wpa&uin='+eventArr[1]+'&version=1&src_type=web&web_src=oicqzone.com\'"';
				break;
			case 'tel':
				eventStr = 'onclick="location.href=\'tel:'+eventArr[1]+'\'"';
				break;
			default:
				break;
		}
		return eventStr;
	}
	_53_mobile_ivt.prototype.checkArea = function(){
		var _this = this;
		var ipStr = _this.ipStr;
		if(typeof _this.invite_area == "undefined" || _this.invite_area == "") return true;
		var setAreas = _this.invite_area.split(',');
		if(setAreas.length <= 0){
			return true;
		}
		var citys = [];
		for(var i in setAreas){
			citys = setAreas[i].split('.');
			if(citys.length >=1 && ipStr.indexOf(citys[1]) >=0){
				return true;
			}else if(citys.length == 1 && ipStr.indexOf(citys[0]) >=0){
				return true;
			}
		}
		return false;
	}
	_53_mobile_ivt.prototype.talk = function(params){
		var _this = this;
		_this.setSession(_this.companyId+'_invite_times',0);
		var location_href = _this.getOpenUrl()+params;
		if(_this.acc_from_kf == true) location_href += _this.force_kf;
		location.href = location_href;	
	}
	_53_mobile_ivt.prototype.show = function(type){
		var _this = this;
		try{
			if(document.getElementById('mini_chat') && document.getElementById('mini_chat').style.display == 'block') {
				return false;
			}
		}catch (e){}
		if(_this.ivtElm.style.display == 'block'){
			return false;
		}
		if(_this.checkArea() === false){
			return false;
		}
		if(_this.page_times<=0){
			return false;
		}
		if(_this.invite_is_reauto == 2){
			var invite_times = _this.getSession(_this.companyId+'_invite_times');
			if(invite_times == '' || invite_times <=0){
				return false;
			}
			invite_times--;
			_this.setSession(_this.companyId+'_invite_times',invite_times);
		}else{
			if(type != "first"){
				if(_this.invite_is_reauto != 1 || _this.invite_times <=0){
					return false;
				}
				_this.invite_times--;
			}
		}
		
		_this.page_times--;
		_this.ivtElm.style.display = 'block';
		_this.setPosition();
	}
	_53_mobile_ivt.prototype.forceShow = function(){
		var _this = this;
		if(typeof force_kf != "undefined" && typeof man_content != "undefined" && typeof acc_from_kf != "undefined"){
			_this.force_kf = force_kf;
			_this.man_content = man_content;
			_this.acc_from_kf = acc_from_kf;
			force_kf = "";
			man_content = "";
			acc_from_kf = false;
		}		
		if(_this.ivtElm.style.display == "none"){
			_this.ivtElm.style.display = 'block';
			_this.setPosition();
		}		
	}
	_53_mobile_ivt.prototype.hide = function(){
		var _this = this;
		_this.force_kf = "";
		_this.man_content = "";
		_this.acc_from_kf = false;
		_this.ivtElm.style.display = 'none';
		if(_this.fanfu_time>0 && _this.is_open == 'yes' && (_this.isOnline || (!_this.isOnline&&_this.invite_off == 'yes')) ){
			setTimeout(function(){
				_this.show();
			},_this.fanfu_time*1000);
		}
	}
	_53_mobile_ivt.prototype.setPosition = function(){
		var _this = this;
		var invite_left = _this.invite_left;
		var invite_bottom = 100-_this.invite_top;
		var ivtElm = _this.ivtElm;
		var ivt_width = ivtElm.offsetWidth==0?ivtElm.firstChild.offsetWidth:ivtElm.offsetWidth;
		var ivt_height = ivtElm.offsetHeight==0?ivtElm.firstChild.offsetHeight:ivtElm.offsetHeight;
		var w = window.innerWidth; 
		var h= window.innerHeight; 
		ivtElm.firstChild.style.marginLeft = '0px';
		ivtElm.firstChild.style.marginTop = '0px';
		ivtElm.style.height = ivt_height+'px';
		ivtElm.style.left = (w-ivt_width)*(invite_left/100)+'px';
		ivtElm.style.bottom = (h-ivt_height)*(invite_bottom/100)+'px';
	}
	/****************************************手机邀请框类结束***********************************/


	/****************************************手机菜单栏类开始***********************************/
	function _53_mobile_chat(chat_set){
		var _this = this;
		//if($53.data("is_update") == false) return;
		_this.isOnline = $53.data('is_online') === '1'?true:false;
		_this.params = "";
		_this.kf_openurl = "";
		_this.window_scroll_top = 0;
		_this.items = [];
		_this.item = 0;
		_this.audio = null;

		_this.chatElm = null;
		_this.is_open = chat_set.is_open;
		_this.chat_type = chat_set.chat_type;
		_this.chat_window = chat_set.chat_window;
		_this.chat_pop_time = chat_set.chat_pop_time;
		_this.chat_is_reauto = chat_set.chat_is_reauto;
		_this.chat_reauto_time = chat_set.chat_reauto_time;
		_this.chat_pop_num = chat_set.chat_pop_num;
		_this.chat_bottom = chat_set.chat_bottom;
		_this.chat_air = chat_set.chat_air;
		_this.chat_content_color = chat_set.chat_content_color;
		_this.chat_air_bg_color = chat_set.chat_air_bg_color;
		_this.chat_num_show = chat_set.chat_num_show;
		_this.chat_auto_show = typeof chat_set.chat_auto_show == "undefined" ? 0 : chat_set.chat_auto_show;
		_this.open_sdk = chat_set.open_sdk;
		_this.chat_off = chat_set.chat_off;
		_this.chat_content = chat_set.content;
		_this.mobile_chat_data = eval('('+chat_set.mobile_chat_data+')');
		_this.mobile_config = $53.data("mobileCompanyInfo");
		_this.chat_pop_times = 0;//主动发起循环定时器
		_this.force_kf = "";//强制对话信息
		_this.card_worker_name = "客服咨询";//卡片模式客服名称
		_this.init();
	}
	_53_mobile_chat.prototype = new handler();	//继承事件处理基类
	_53_mobile_chat.prototype.init = function(){
		var _this = this;
		_this.chat_content = _this.formatContent(_this.chat_content);		

		if(_this.is_open == 1 && _this.chat_type == 0 && (_this.isOnline||(!_this.isOnline && _this.chat_off == 1))){
			_this.createChat();
			if(_this.chat_bottom != 2) _this.show();
			if(_this.open_sdk == 0 && _this.chat_pop_time>0){
				setTimeout(function() {
					if(document.getElementById('mini_chat') && document.getElementById('mini_chat').style.display != 'block') {
						_this.talk();
					}
				},_this.chat_pop_time * 1000);
			}
		}
		
     	window.acc_chattype = 3; //强制对话方式 1：覆盖当前窗口 2：弹出新窗口，如失败，则覆盖 3：悬浮对话窗口(pc端使用，手机端强制对话兼容)
		window.show_mobile_chat = function(){_this.talk()};
		window.close_mobile_chat = function(){_this.hide()};
		window.change_kf_openurl = function(){_this.openSdkUrl()};
		window.get_location = function(){_this.forceOpen()};//强制对话
		window.hide_chat_card = function(e){_this.hideCard(e)}
		window.addEventListener("message", function( event ) {
         	try{
 	            _this.handleEventlisten(event.data);
 		    }catch(e){}
 	    }, false );

 	    // 监听物理返回
		if((_this.mobile_config["stop_back"] == 1) && window.history && window.history.pushState) {
			window.addEventListener("popstate", function(e) {
	 			_this.hide();
			}, false);
		}
	}
	_53_mobile_chat.prototype.handleEventlisten = function(data){
		var _this = this;
		if(data.indexOf('53kf_new_msg') != -1){
			if(document.getElementById('msg_tip')){
				var msg_tip_dom = document.getElementById('msg_tip');
				if(msg_tip_dom.innerHTML != 'x' || _this.chat_window != 1) {
					if(msg_tip_dom.innerHTML == "x") msg_tip_dom.innerHTML = 0;
					if(_this.chat_num_show != 0) msg_tip_dom.style.display='block';
					msg_tip_dom.innerHTML = 1 + parseInt(msg_tip_dom.innerHTML);
					_this.msgSlid(_this.contentCode(data.substring(13)));
					try{
						if(_this.open_sdk == 0) _this.audio.play();
					}catch(e){}
				}
			}
			try{
				$53.callMsg();//回调自定义来消息方法
			}catch(e){}
			return
		}
		if(data == "close"){
			_this.hide();
			if(_this.mobile_config["stop_back"] == 1) window.history.go(-1);
		}
		if(data == "map_close"){
			document.getElementById('bd_map').style.display='none';
		}
		if(data == "windowCnt" && _this.chat_window != 1){
			_this.chatPop();
		}
		if(data.indexOf('tel:') != -1){
			window.location.href = data;
		}
		if(data.indexOf('ios12.0_vx_float_blur') != -1){
			document.activeElement.scrollIntoViewIfNeeded(true);
		}
		if(data.indexOf('worker_name') != -1){
			_this.card_worker_name = data.substring(12);
			try{
				document.getElementById("card_worker_name").innerHTML = _this.card_worker_name;
			}catch (e){}
		}
	}
	_53_mobile_chat.prototype.createChat = function(){
		var _this = this;
		//增加样式类
    	$53.creElm({
			'innerHTML':'body{margin:0;}#scroll-wrapper{-webkit-overflow-scrolling: touch; overflow-y: scroll;}@-webkit-keyframes twinkling{0% {opacity:0;} 100%{ opacity:1;}}.face_twinkle{-webkit-animation: twinkling 0.5s infinite ease-in-out;}#toolbar img{display:inline;}#toolbar a{color:white;font-size:16px;}html{-webkit-tap-highlight-color: rgba(0,0,0,0);}'
		},'style');

		$53.creElm({
			'style':'font-size: 0px; z-index: 1000000; position: fixed; bottom: 0px;height:50px;width: 100%;display:none;',
			'id':'mobile_minchat_div',
			'innerHTML':'<span id="mobile_minchat_btn_line" style="position: absolute;width: 100%;background:rgba(0,0,0,.1);overflow: hidden;height: 1px;top:0;left: 0;"></span>'+_this.chat_content
		},'div');
		_this.chatElm = document.getElementById('mobile_minchat_div');
		var is_uc = 0;
		var is_ios = !!navigator.userAgent.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/);
		if (is_ios && navigator.userAgent.indexOf("UCBrowser") != -1) {
			is_uc = 1;
		}
		_this.createMinChat(is_ios,is_uc);
		_this.audio = document.createElement("audio");
		if (_this.mobile_config["mobile_music"] != "" && _this.audio != null && _this.audio.canPlayType && _this.audio.canPlayType("audio/mpeg") && _this.isOnline) {
			_this.audio.src = _this.talkHost+"/sound/"+_this.mobile_config["mobile_music"]+".mp3";
			//IOS 不允许自动播放声音 需要用户触发 IOS 9以上需要先load才能播放
			_this.audio.load();
			var play_voice = function() {
				_this.audio.play();
			}
			window.addEventListener('touchstart', play_voice, false);
			_this.audio.addEventListener('play', function() {window.removeEventListener('touchstart', play_voice, false);}, false);
		}
	}
	_53_mobile_chat.prototype.createMinChat = function(is_uc,is_ios,type){
		var _this = this;
		if(document.getElementById("mini_chat") != null && document.getElementById("mini_chat").length > 0 ) return;
		if((_this.is_open == 1 && _this.open_sdk == 0) || type != undefined){
			//if(_this.chat_window == 1 )
				_this.kf_openurl = _this.getOpenUrl() + _this.params + _this.force_kf + '&minchat=1#' + location.href;
			//else _this.kf_openurl = _this.getOpenUrl() + _this.params + _this.force_kf + '&is_minchat=1#' + location.href;

			var iframe_close_html = '';
			if(_this.mobile_config["zdyurl"] != ""){
				iframe_close_html = '<a style="position:fixed;top:10%;right:0px;width:44px;height:44px;z-index:99999999102;" id="iframe-close" class="close" onclick="close_mobile_chat()"><svg width="100%" height="100%" viewBox="0 0 44 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="Group-141"><rect id="Rectangle-124-Copy" fill="" x="0" y="0" width="44" height="44"></rect><polygon id="Path-32" fill="#fff" points="14 19 14 21.5 24 28.5 34 21.5 34 19 24 26"></polygon></g></g></svg></a>';
			}

			var minchat_height = _this.mobile_config["minchat_height"] == "" ? "90%" : (_this.mobile_config["minchat_height"]+"%");
			if(is_ios && is_uc){//IOS浏览器src为空会导致重复请求
				$53.creElm({
					'id': 'mini_chat',
					'style': 'display:none;z-index:1000001;font-size:0;position:fixed;left:0;top:0;height:100%;background:rgba(0,0,0,.4);',
					'innerHTML':'<br /><div id="i_div" style=" opacity:0.5; width:100%; height:100%; position:fixed; top:0; left:0; z-index:9999100"></div><iframe id="iframe_mobile_chat" scrolling="no" style="height:'+minchat_height+'; width:100%;width: 1px!important;min-width:100%;  position:fixed; bottom:0; left:0%; z-index:9999101" frameborder="0" vspace="0" scrolling="yes" src="' + _this.kf_openurl +'"></iframe>'+iframe_close_html
				},'div');
			}else if(is_ios){
				$53.creElm({
					'id': 'mini_chat',
					'style': 'display:none;z-index:1000001;font-size:0;position:fixed;left:0;top:0;height:100%;background:rgba(0,0,0,.4);',
					'innerHTML':'<br /><div id="i_div" style=" opacity:0.5; width:100%; height:100%; position:fixed; top:0; left:0; z-index:9999100"></div><iframe id="iframe_mobile_chat"  scrolling="no" style="height:'+minchat_height+'; width:100%;width: 1px!important;min-width:100%;  position:fixed; bottom:0; left:0%; z-index:9999101" frameborder="0" vspace="0" scrolling="yes" src="' + _this.kf_openurl +'"></iframe>'+iframe_close_html
				},'div');
			}else{
				$53.creElm({
					'id': 'mini_chat',
					'style': 'display:none;z-index:1000001;font-size:0;position:fixed;left:0;top:0;height:100%;background:rgba(0,0,0,.4);',
					'innerHTML':'<br /><div id="i_div" style=" opacity:0.5; width:100%; height:100%; position:fixed; top:0; left:0; z-index:9999100"></div><iframe id="iframe_mobile_chat" style="height:'+minchat_height+'; width:100%;  position:fixed; bottom:0; left:0%; z-index:9999101" frameborder="0" vspace="0" scrolling="yes" src="' + _this.kf_openurl +'"></iframe>'+iframe_close_html
				},'div');
			}
			document.getElementById("mini_chat").onclick = function(){
				_this.hide();
			}
		}
	}
	_53_mobile_chat.prototype.createMap = function(is_uc,is_ios){
		var _this = this;
		if(is_ios && is_uc){//IOS浏览器src为空会导致重复请求
			$53.creElm({
				'id': 'bd_map',
				'style': 'position:fixed;height: 500px;display:none;z-index:1000001',
				'innerHTML':'<br /><div onclick="document.getElementById(\'bd_map\').style.display=\'none\'" style="width:25px; height:25px; position:fixed; top:5%; right:6%; z-index:9999102; color:#fff;"><img src="'+_this.talkHost+'/style/setting/ver06/img/mobile/mobile_chat/off.png?20150709" width="25" /></div><div style="background:#000; opacity:0.5; width:100%; height:100%; position:fixed; top:0; left:0; z-index:9999100"></div><iframe frameborder="0" vspace="0" id="bd_map_ifr" style="height:94%; width:94%;  position:fixed; top:3%; left:3%; z-index:9999101" src=""></iframe>'
			},'div');
		}else if(is_ios){
			$53.creElm({
				'id': 'bd_map',
				'style': 'position:fixed;height: 500px;display:none;z-index:1000001',
				'innerHTML':'<br /><div onclick="document.getElementById(\'bd_map\').style.display=\'none\'" style="width:25px; height:25px; position:fixed; top:5%; right:6%; z-index:9999102; color:#fff;"><img src="'+_this.talkHost+'/style/setting/ver06/img/mobile/mobile_chat/off.png?20150709" width="25" /></div><div style="background:#000; opacity:0.5; width:100%; height:100%; position:fixed; top:0; left:0; z-index:9999100"></div><iframe frameborder="0" vspace="0" id="bd_map_ifr" style="height:94%; width:94%;  position:fixed; top:3%; left:3%; z-index:9999101" src=""></iframe>'
			},'div');
		}else{
			$53.creElm({
				'id': 'bd_map',
				'style': 'position:fixed;height: 500px;display:none;z-index:1000001',
				'innerHTML':'<br /><div onclick="document.getElementById(\'bd_map\').style.display=\'none\'" style="width:25px; height:25px; position:fixed; top:5%; right:6%; z-index:9999102; color:#fff;"><img src="'+_this.talkHost+'/style/setting/ver06/img/mobile/mobile_chat/off.png?20150709" width="25" /></div><div style="background:#000; opacity:0.5; width:100%; height:100%; position:fixed; top:0; left:0; z-index:9999100"></div><iframe frameborder="0" vspace="0" id="bd_map_ifr" style="height:100%; width:100%;  position:fixed; top:0%; left:0%; z-index:9999101" src=""></iframe>'
			},'div');
		}
	}
	_53_mobile_chat.prototype.getOpenUrl = function(){
		var _this = this;
		try{
			if(_this.mobile_config["zdyurl"] != ""){
				var openUrl = _this.mobile_config["zdyurl"];
				if(openUrl.indexOf("http://") == -1 && openUrl.indexOf("https://") == -1) openUrl = _this.talkHost + openUrl;
				if(openUrl.indexOf("?") == -1) openUrl += "?";
			}else {
				var openUrl = _this.talkHost+'/m.php?';
			}
		}catch(e){
			var openUrl = _this.talkHost+'/m.php?';
		}
		openUrl += 'cid='+_this.companyId+'&style='+_this.styleId+'&keyword='+encodeURIComponent(_this.fromPage)+'&referer='+encodeURIComponent(window.location.href)+'&guest_id='+encodeURIComponent($53.getCookie('53gid2'))+'&tpl='+encodeURIComponent($53.data('tpl'))+'&uid='+encodeURIComponent($53.data('api_uuid'))+'&u_stat_id='+encodeURIComponent($53.data('u_stat_id'))+'&talktitle='+encodeURIComponent(document.title)+'&tfrom=51&device='+hz6d_device;
		return openUrl;
	}
	_53_mobile_chat.prototype.formatContent = function(content){
		var _this = this;
		content = content.replace(/\/style\/setting\/ver07\/img\/mobile_config\/icon2\.png/g,_this.talkHost+'/style/setting/ver07/img/mobile_config/icon2.png');
		content = content.replace(/\.\.\//g,_this.talkHost+'/');
		content = content.replace(/class=".*?"/g,'');
		content = content.replace(/event="\{(.*?)\}"/g, function(match, contents){
					return _this.getEvent(contents.split('|'));
				}
		);
		return content;
	}
	_53_mobile_chat.prototype.getEvent = function(eventArr){
		var _this = this;
		var eventStr = '';
		if(eventArr[0] == "bindEvent"){
			var mobile_chat_data = _this.mobile_chat_data;
			var active = eventArr[1];
			var active1 = active.replace(/[0-9]/ig,"");
			if(typeof mobile_chat_data[active] == "undefined"){
				console.log("event:"+active1+" is not defined");
				return "";
			}
			switch(active1){
				case 'advice':
					var params = '';
					if(eventArr[2] == 'group'){
						params += '&zdkf_type=3&kf='+eventArr[3];
					}else if(eventArr[2] == 'kf'){
						var workInfo = _this.getWorkerInfo(eventArr[3]);
						params += '&zdkf_type=1&kf='+$53.EN(workInfo['worker_id']);
					}else{
						params += '&zdkf_type='+$53.data('zdkf_type')+'&kf='+$53.EN($53.data('kf'))+'&kflist='+$53.data('kflist');
						var addLinkParams = $53.data("add_link_params");
						if(addLinkParams != null) params+=addLinkParams;
					}
					_this.params = params;
					eventStr = 'onclick="'+_this.app_name+'.talk(\'chat\',\'\');"';
					break;
				case 'qq':
					eventStr = 'onclick="location.href=\'mqqwpa://im/chat?chat_type=wpa&uin='+mobile_chat_data[active]+'&version=1&src_type=web&web_src=oicqzone.com\'"';
					break;
				case 'iphone':
				case 'phone':
					var mobile_chat_iphone  = "";
					var other_iphone = "";
					var first_iphone = "";
					for (var i=0; i < mobile_chat_data[active].length; i++) {
						var areas = mobile_chat_data[active][i].area.split("、");
						var iphone = mobile_chat_data[active][i].iphone;
						if(i==0) first_iphone = iphone;
						for (var p=0; p < areas.length; p++) {
							if(_this.ipStr.indexOf(areas[p]) > -1){
								mobile_chat_iphone = iphone;
								break;
							}
							if(areas[p] == "其他地区")
								other_iphone = iphone;
						}
					}
					if(other_iphone != "" && mobile_chat_iphone == "") mobile_chat_iphone = other_iphone;
					if(mobile_chat_iphone == "") mobile_chat_iphone = first_iphone;
					eventStr = 'onclick="location.href=\'tel:'+mobile_chat_iphone+'\'"';
					break;
				case "map":
					var mobile_chat_addr = "";
					var other_addr = "";
					var first_addr = "";
					for (var i=0; i < mobile_chat_data[active].length; i++) {
						var areas = mobile_chat_data[active][i].area.split("、");
						var addr = mobile_chat_data[active][i].addr;
						if(i==0) first_addr = addr;
						for (var p=0; p < areas.length; p++) {
							if(_this.ipStr.indexOf(areas[p]) > -1){
								mobile_chat_addr = addr;
								break;
							}
							if(areas[p] == "其他地区")
								other_addr = addr;
						}
					}
					if(other_addr != "" && mobile_chat_addr == "") mobile_chat_addr = other_addr;
					if(mobile_chat_addr == "") mobile_chat_addr = first_addr;
					var is_uc = 0;
					var is_ios = !!navigator.userAgent.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/);
					if (is_ios && navigator.userAgent.indexOf("UCBrowser") != -1) {
						is_uc = 1;
					}
					_this.createMap(is_ios,is_uc);
					var bd_src = document.getElementById('bd_map_ifr');
					var mobile_config = $53.data("mobileCompanyInfo");
					if((bd_src.src).indexOf('bdmap') == -1) {
						bd_src.src = _this.talkHost+'/bdmap_new.php?img='+mobile_config["company_logo"]+'&name='+mobile_config["company_short"]+'&intr='+mobile_config["company_intr"]+'&address='+mobile_chat_addr;
					}
					eventStr = 'onclick="document.getElementById(\'bd_map\').style.display=\'block\'"';
					break;
				case "web":
					eventStr = 'onclick="location.href=\''+mobile_chat_data[active]+'\'"';
					break;
				default:
					break;
			}
		}
		return eventStr;
	}
	_53_mobile_chat.prototype.talk = function(type){
		var _this = this;
		if(_this.chat_window == 1 || type=="float"){
			_this.window_scroll_top = window.scrollY;
			(document.getElementsByTagName('body')[0]).style.overflow = 'hidden';
			(document.getElementsByTagName('body')[0]).style.position = 'fixed';
			(document.getElementsByTagName('body')[0]).style.width="100%";
			try{
				document.getElementById("mini_chat").style.width="100%";
				document.getElementById('mini_chat').style.display='block';
			}catch (e){}
			if(document.getElementById('msg_tip')){
				document.getElementById('msg_tip').style.display='none';
				document.getElementById('msg_tip').innerHTML = 'x';
			}
			document.getElementById("iframe_mobile_chat").contentWindow.postMessage("auto",'*');
			if(_this.mobile_config["stop_back"] == 1) window.history.pushState('forward', null, '#');
			if(typeof icon_msg_tip_hide == "function") icon_msg_tip_hide();
		}else{
			if(document.getElementById('msg_tip')){
				document.getElementById('msg_tip').style.display='none';
				document.getElementById('msg_tip').innerHTML = 'x';
			}
			//var new_kf_openurl = _this.kf_openurl.split("#");
			//var new_kf_openurl2 = new_kf_openurl[0]+"&fromopen=1#"+new_kf_openurl[1];
			var new_kf_openurl = _this.getOpenUrl() + _this.params + _this.force_kf + '&is_minchat=1&historylen='+parseInt(window.history.length)+'&locahref='+encodeURIComponent(location.href);
			var new_kf_openurl2 = new_kf_openurl+"&fromopen=1#"+location.href;
			try{
				if(!document.getElementById("mini_open_53kf_div") &&　!document.getElementById("mini_open_53kf_div_company")){
					$53.creElm({
						'id':'mini_open_53kf_div',
						'style': 'display:none',
						'innerHTML': '<a href="'+new_kf_openurl2+'" id="mini_open_53kf_a" target="_blank">点击咨询</a>'
					},'div');
				}
				if(document.getElementById("mini_open_53kf_div_company"))
					document.getElementById("mini_open_53kf_a").href = new_kf_openurl2;
				var is_ios = !!navigator.userAgent.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/); //判断是否为ios手机
				if(is_ios){
					document.getElementById("mini_open_53kf_a").onclick();
				}else{
					document.getElementById("mini_open_53kf_a").click();
				}
				window.location.href = new_kf_openurl2;
			}catch(e){
				window.location.href = new_kf_openurl2;
			}
		}
		try {_this.hideCard();}catch (e){}
	}
	_53_mobile_chat.prototype.chatPop = function(){
		var _this = this;
		if(_this.chat_is_reauto == 1 && _this.chat_reauto_time>0){
			try{if(_this.chat_pop_times) clearTimeout(_this.chat_pop_times)}catch (e){};
			_this.chat_pop_times = setTimeout(function() {
				if(_this.chat_pop_num > 0) {
					if(document.getElementById('msg_tip').innerHTML != 'x') {
						_this.talk();
						_this.chat_pop_num--;
					}
				}
			},_this.chat_reauto_time * 1000);
		}
	}
	_53_mobile_chat.prototype.openSdkUrl = function(type){
		var _this = this;
		var is_uc = 0;
		var is_ios = !!navigator.userAgent.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/);
		if (is_ios && navigator.userAgent.indexOf("UCBrowser") != -1) {
			is_uc = 1;
		}
		_this.createMinChat(is_ios,is_uc,true);
		_this.talk(type);
	}
	_53_mobile_chat.prototype.forceOpen = function(){
		var _this = this;
		if(typeof force_kf != "undefined"){
			_this.force_kf = force_kf;
			force_kf = "";
		}
		_this.openSdkUrl();
	}
	_53_mobile_chat.prototype.show = function(){
		var _this = this;
		_this.chatElm.style.display = 'block';
		_this.setPosition();
		try{
			if (_this.mobile_config["zdyurl"] != "") {
				var body_pre=document.body.clientWidth/375;
				document.getElementById("iframe-close").style.opacity="1";
				document.getElementById("iframe-close").style.width=44*body_pre+"px";
				document.getElementById("iframe-close").style.height=44*body_pre+"px";
			}
		}catch (e){}
	}
	_53_mobile_chat.prototype.hide = function(){
		var _this = this;
		(document.getElementsByTagName('body')[0]).style.overflow = '';
		(document.getElementsByTagName('body')[0]).style.position = '';
		try{
			document.getElementById('mini_chat').style.display='none';
		}catch (e){}
		document.getElementById('msg_tip').innerHTML = 0;
		document.getElementById('msg_tip').style.display='none';
		document.getElementById("iframe_mobile_chat").contentWindow.postMessage("hidden",'*');
		_this.chatPop();
		window.scrollTo(0,_this.window_scroll_top);
	}
	_53_mobile_chat.prototype.setPosition = function(){
		var _this = this;
		var chatElm = _this.chatElm;
		
		var btn_line = document.getElementById("mobile_minchat_btn_line");
		if(_this.chat_bottom == 0){
			btn_line.style.top = 0;
			btn_line.style.bottom = "auto";
			chatElm.style.bottom = '0px';
		}else{
			btn_line.style.top = "auto";
			btn_line.style.bottom = 0;
			chatElm.style.top = '0px';
		}

		//按钮宽度按照百分比调整
		//_this.getRem(750,100);
		var oDiv = chatElm.getElementsByTagName("div");
		for(var i = 0;i<oDiv.length;i++){
			oDiv[i].style.width = 100/oDiv.length + "%";
		}

		if(!oDiv[0].hasAttribute("53kf_menu_versions"))  return false;
		var client_width = document.body.clientWidth || document.documentElement.clientWidth;
		//chatElm高度计算
		var ratio = client_width/375;
		chatElm.style.fontSize = 10*ratio+"px";
		chatElm.style.height = 50*ratio+"px";		
	}
	_53_mobile_chat.prototype.getRem = function(pwidth,prem){
		var html = document.getElementsByTagName("html")[0];
		var oWidth = document.body.clientWidth || document.documentElement.clientWidth;
		html.style.fontSize = oWidth/pwidth*prem + "px";
	}
	_53_mobile_chat.prototype.contentCode = function(msg){
		msg = msg.replace(/<img [^>]+>/gi,function(str){
			if(str.indexOf("/53b/") > 0) return "【表情】"
			else return "【图片】";
		});
		msg = msg.replace(/<[^>]+>/g,"");
		return msg;
	}
	_53_mobile_chat.prototype.msgSlid = function(str){
		var _this = this;
		if(_this.chat_air == 1) _this.showMsgItems(str);
		else if(_this.chat_air == 2) _this.showMsgCard(str);
		if(_this.chat_auto_show == 1) _this.talk();
	}
	_53_mobile_chat.prototype.showMsgCard = function(str){
		var _this = this;
		var card = document.getElementById("mobile_chat_card");
		var worker_img = '<span style="width: 2.4em;height: 2.4em;font-size:1em;position: absolute;left: 0;bottom: 0;"><svg viewBox="0 0 24 24" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><circle id="a" cx="12" cy="12" r="12"/><path id="b" d="m1.24509612 4.95249852 4.16765273-1.69874628c.37645116-.15344249.62254806-.51950725.62254806-.92602918v-2.32772306h5.96470309v2.32921356c0 .40577354.2452036.77132006.6206463.92525174l4.1380611 1.69660709c.7508853.30786337 1.2412926 1.03895639 1.2412926 1.85050348v3.19842413h-18v-3.19544313c0-.81304385.49219379-1.54517337 1.24509612-1.85205835z"/><mask id="c" fill="#fff"><use fill="#fff" fill-rule="evenodd" xlink:href="#a"/></mask><mask id="d" fill="#fff"><use fill="#fff" fill-rule="evenodd" xlink:href="#b"/></mask></defs><g fill="none" fill-rule="evenodd"><use fill="#fff" xlink:href="#a"/><g mask="url(#c)"><g transform="translate(3 1)"><path d="m4 5h10v11h-10z" fill="#d8d8d8"/><path d="m2 7h14v13h-14z" fill="#5a4146"/><g transform="translate(0 13)"><use fill="#d2555a" xlink:href="#b"/><path d="m6 1h6l1.5 2.5-4.5 5.5-4.51-5.5z" fill="#deb790" mask="url(#d)"/><path d="m4 3h.94399963c.72753152 1.97333533 2.07608106 2.96000299 4.04564864 2.96000299 1.96956753 0 3.30635153-.98666766 4.01035173-2.96000299h1.0352969l-2.5912973 7.460003h-4.99999997z" fill="#fff" mask="url(#d)"/></g><path d="m4 5h10v6.8676192c0 .7025257-.3685977 1.3535394-.9710085 1.7149859l-3 1.8c-.63336476.3800189-1.42461824.3800189-2.05798301 0l-3-1.8c-.60241082-.3614465-.97100849-1.0124602-.97100849-1.7149859z" fill="#f2cea5"/><path d="m8.27550057 7.8813398-.51298922.61387464c-.00880168-.0073552-.06103896-.03812521-.16328527-.07599868-.19179472-.07104345-.44328005-.11633733-.76162406-.11911797-.5346246-.00466978-.95797554.15748388-1.20849531.47639634l-.62910671-.49419101c.42094174-.53586016 1.08142394-.78884083 1.84458951-.78217481.40990109.00358035.75306408.06538588 1.03251685.16889911.18963422.07024317.32094318.14758981.39839421.21231238z" fill="#cc9872" fill-rule="nonzero" transform="matrix(-1 0 0 1 13.275 0)"/><rect fill="#262626" height="1" rx=".5" width="1" x="6" y="9"/><rect fill="#262626" height="1" rx=".5" width="1" x="11" y="9"/><path d="m12.7607673 7.88134095-.5129893.61387464c-.0088016-.0073552-.0610389-.03812521-.1632852-.07599868-.1917948-.07104345-.4432801-.11633733-.7616241-.11911797-.7910539-.00690961-1.3130694.33219461-1.45946812 1.05041447-.16776876.82305929.0051621 1.55857779.42000172 2.09365589l-.63224384.4901711c-.55735306-.7188981-.78606347-1.6916611-.5716389-2.74360982.23072104-1.13189785 1.10617094-1.70059506 2.25033664-1.69060112.4099011.00358035.7530641.06538588 1.0325168.16889911.1896343.07024317.3209432.14758981.3983943.21231238z" fill="#bb8660" fill-rule="nonzero"/><path d="m9.60932912 5.48588127c.39580848.30416531.85936538.64220489 1.39067088 1.01411873.8040364.56282551 1.7632268 1.04807408 2.8775711 1.45574568l-.0000084.00002298c.088844.0325027.1798822.05866085.2724288.07827744 1.233339.26142392 1.8500085-.08325811 1.8500085-1.0340461 0-3.86599325-3.1340068-7-7-7-3.86599325 0-7 3.13400675-7 7 0 .53672686.66666667.87006019 2 1 1.16666667-.41666667 2.16666667-.91666667 3-1.5.53130425-.37191298.99486029-.70995185 1.39066812-1.01411661l-.00000169-.0000022c.35930216-.27611141.85936057-.27611137 1.21866269.00000008z" fill="#5a4146"/><path d="m3 8h1v3h-1z" fill="#707487"/><path d="m14.0000461 11c-.6541553 1.265297-1.3157072 2.0986299-1.9846557 2.4999988-.6689485.401369-1.6740786.5680357-3.0153904.5" stroke="#464655" stroke-linecap="round"/><path d="m14 8h1v3h-1z" fill="#707487"/></g></g></g></svg></span>';
		if(card == null || card == undefined){
			$53.creElm({
				'id': 'mobile_chat_card',
				'style': 'display: block;background:'+_this.chat_air_bg_color+';height:8.4em;border: 0.1em solid #DDE5ED;box-shadow: rgba(0, 0, 0, 0.15) 0 0.1em 0.6em 0, rgba(0, 0, 0, 0.09) 0 0.2em 3.2em 0;border-radius: 0.2em;position: fixed;left: 1.6em;right: 1.6em;bottom: -8.6em;box-sizing:border-box;padding:0.8em;margin-left:0.07px;opacity:0;transition:bottom 0.3s,opacity 0.3s;z-index: 999999',
				'innerHTML':'<div style="font-size:1em;" onclick="show_mobile_chat();"><span class="message-card-head" style="display:block;width: 100%;height:2.6em;position: relative;font-size:1em;">'+worker_img+'<span style="color: '+_this.chat_content_color+';width:12.86em;overflow: hidden;text-overflow:ellipsis;white-space:nowrap;letter-spacing: 0.6px;line-height: 1.43em;position: absolute;left: 2.29em;bottom:0.15em;font-size: 1.4em" id="card_worker_name">'+_this.card_worker_name+'</span><span style="width: 2.8em;height: 2.8em;font-size: 1em;position: absolute;right: 0;top: 0;" onclick="hide_chat_card(this)"><span style="position: absolute;right:0;top:0;width: 1.6em;height: 1.6em;font-size:1em;opacity: 0.7;filter: alpha(opacity=70);" ><svg style="float:left" height="100%" viewBox="0 0 16.5 16.5" width="100%" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="m8 0c4.418278 0 8 3.581722 8 8 0 4.418278-3.581722 8-8 8-4.418278 0-8-3.581722-8-8 0-4.418278 3.581722-8 8-8z" fill="#363d4d" opacity=".6"></path><path d="m12.25 4.808-1.057-1.058-3.193 3.192-3.192-3.192-1.058 1.058 3.192 3.192-3.192 3.193 1.058 1.057 3.192-3.193 3.193 3.193 1.057-1.057-3.193-3.193z" fill="#fff"></path></g></svg></span></span></span><span class="message-card-body" style="display:block;height:4.4em;width: 100%;position: relative;font-size:1em;"><p class="card-content" style="display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 2;overflow: hidden;color: '+_this.chat_content_color+';letter-spacing: 0.6px;line-height: 1.5em;margin-top:0.5em;font-size: 1.2em" id="mobile_chat_talk_str">'+str+'</p></span></div>'
			},'div');
			card = document.getElementById("mobile_chat_card");
		}else {
			var talk_str = document.getElementById("mobile_chat_talk_str");
			talk_str.innerHTML = str;
			card.style.display = "block";
		}

		var client_width = document.body.clientWidth || document.documentElement.clientWidth;
		var ratio = client_width/375;
		// var minc_top = _this.chatElm.offsetTop;
		// if(minc_top > 0){
			card.style.bottom = 70*ratio+"px";
		// }else{
		// 	card.style.bottom = 20*ratio+"px";
		// }
		card.style.opacity = 1;
		card.style.fontSize = 10*ratio + "px";
	}
	_53_mobile_chat.prototype.hideCard = function(e){
		document.getElementById("mobile_chat_card").style.display = "none";
		if ( e && e.stopPropagation ) {
			e.stopPropagation();
		} else {
			window.event.cancelBubble = true;
		}
	}
	_53_mobile_chat.prototype.showMsgItems = function(str){
		var _this = this;
		_this.item++;

		var bubble = document.getElementById("mobile_chat_bubble");
		if(bubble == null || bubble == undefined){
			$53.creElm({
				'id': 'mobile_chat_bubble',
				'style': 'height:10.8em;width:100%;position: fixed;bottom:5.8px;overflow: hidden;z-index:999999',
				'innerHTML':''
			},'div');
			bubble = document.getElementById("mobile_chat_bubble");
		}

		html = '<div onclick="show_mobile_chat();" class="msg-slid-hide-kf" id="msg-slid'+_this.item+'" style="z-index: 1000001; max-width:27em; position: absolute; left: 1em; bottom:0; opacity: 0.9;line-height: 2.33em;height:2.33em;font-size: 1em;letter-spacing: 0.05em;transiton:bottom 0.5s"><b style="position:absolute;width:100%;height:100%;background:'+_this.chat_air_bg_color+';top:0;left:0;border-radius:1.67em;"></b><label style="width:100%;overflow: hidden;text-overflow:ellipsis;display: inline-block;box-sizing: border-box;color: '+_this.chat_content_color+';padding: 0 1em;white-space:nowrap;position:relative;z-index:11;font-size: 1.4em;">'+str+'</label></div>';
		bubble.innerHTML += html;
		bubble.style.display = "block";

		var client_width = document.body.clientWidth || document.documentElement.clientWidth;
		var ratio = client_width/375;

		var item_id = "msg-slid"+_this.item;
		_this.items.push(item_id);
		for(var i = 0;i<_this.items.length;i++ ){
			var n = _this.items.length-(i+1);
			document.getElementById(_this.items[i]).style.bottom = 36*ratio*n + "px";
		}

		var bottom = 0;
		var hidden = setInterval(function(){
			_this.disappear(item_id);
			clearTimeout(hidden);
			_this.items.splice(0,1);
			if(_this.items.length <= 0) bubble.style.display = "none";
		},1500);
		
		//上下模式
		// var minc_top = _this.chatElm.offsetTop;
		// if(minc_top > 0){
			bubble.style.bottom = 58*ratio+"px";
		// }else{
		// 	bubble.style.bottom = 8*ratio+"px";
		// }
		bubble.style.opacity = 1;
		bubble.style.fontSize = 10*ratio + "px";
	}
	_53_mobile_chat.prototype.disappear = function(item_id){
		var temp = 1;
		// var item = document.getElementById(item_id);
		// var parentNodes = document.getElementById(item_id).parentNode;
		var t1=setInterval(function(){
			temp=temp-0.1;
			var item = document.getElementById(item_id);
			var parentNodes = document.getElementById(item_id).parentNode;
			item.style.opacity=temp;
			item.style.opacity = parseFloat(item.style.opacity)-0.1;
			if(temp<=0){
				clearInterval(t1);
				try{
					parentNodes.removeChild(item);
				}catch(e){}
			}
		},50);
	}
	/****************************************手机菜单栏类结束***********************************/
	
	/****************************************PC图标类开始***************************************/
	/**
	*目前只定义了接口，等新版PC图标上线后再实现具体功能
	*/	
	// function _53_pc_icon(icon_set){}
	// _53_pc_icon.prototype = new handler();	//继承事件处理基类
	/****************************************PC图标类结束***************************************/

	/****************************************PC邀请框类开始*************************************/
	/**
	*目前只定义了接口，等新版PC邀请框上线后再实现具体功能
	*/	
	// function _53_pc_ivt(ivt_set){}
	// _53_pc_ivt.prototype = new handler();	//继承事件处理基类
	/****************************************PC邀请框类结束*************************************/

	/****************************************应用主类开始*************************************/
	function _53App(){
		var _this = this;
		_this.ipStr = decodeURI(ipStr);
		_this.ipContinent = decodeURI(ipStr);
		_this.apps = [];

		_this.kfOnline = 0;			//是否有工号在线
		_this.kfOfOnline = 0;		//是否有溢出工号在线
		_this.workers = $53.data('workers');
		_this.ofAllWorkers = $53.data('of_all_worker');
		_this.groups = $53.data('groups');
		_this.ofGroups = $53.data('of_groups');
		_this.workerStates = [];	//工号为key 在线状态为value
		_this.ofWorkerStates = [];	//工号为key 在线状态为value(未排除排班客服，溢出使用)
		_this.init();
	}
	_53App.prototype.init = function(){
		var _this = this;
		var assign_worker = $53.data('assign_worker');
		$53.data('zdkf_type',assign_worker.assignType == 'group'?'3':'1');
		$53.data('kflist',assign_worker.assignMode == 'hand'?'on':'off');
		$53.data('kf',assign_worker.workers == null ? '':assign_worker.workers);

		// _this.initWorkerStates();
		// _this.checkAreaShunt();
		// _this.checkOnline();

		if(_this.isMobile() && in_site){
			$53.setTerminal('mobile');
     		$53.setUrl(_this.getOpenUrl());

			_this.initGroup();
			_this.initWorkerStates();
			_this.initOfWorkerStates();
			_this.checkOnline();
			try{
				if($53.data('mobile_icon') != null && $53.data('mobile_invite') != null && $53.data('mobile_chat') != null){
					_this.setApp('icon',new _53_mobile_icon($53.data('mobile_icon')));
					var mobile_invite = _this.initInviteDate($53.data('mobile_invite'),$53.data('mobile_chat'));
					_this.setApp('invite',new _53_mobile_ivt(mobile_invite));
					_this.setApp('chat',new _53_mobile_chat($53.data('mobile_chat')));
					_this.clearCache();
				}else{
					setTimeout(function(){
						_this.setApp('icon',new _53_mobile_icon($53.data('mobile_icon')));
						var mobile_invite = _this.initInviteDate($53.data('mobile_invite'),$53.data('mobile_chat'));
						_this.setApp('invite',new _53_mobile_ivt(mobile_invite));
						_this.setApp('chat',new _53_mobile_chat($53.data('mobile_chat')));
						_this.clearCache();
					},1000);	
				}	
			}catch(e){console.log(e)}							
		}else{
			_this.clearCache();
		}		
	},
	_53App.prototype.getOpenUrl = function(){
		var _this = this;
		var mobile_config = $53.data("mobileCompanyInfo");
		try{
			if(mobile_config["zdyurl"] != ""){
				var openUrl = mobile_config["zdyurl"];
				if(openUrl.indexOf("http://") == -1 && openUrl.indexOf("https://") == -1) openUrl = talkHost + openUrl;
				if(openUrl.indexOf("?") == -1) openUrl += "?";
			}else {
				var openUrl = talkHost+'/m.php?';
			}
		}catch(e){
			var openUrl = talkHost+'/m.php?';
		}
		openUrl += 'cid='+companyId+'&style='+styleId+'&keyword='+encodeURIComponent($53.data('page_referer'))+'&referer='+encodeURIComponent(window.location.href)+'&guest_id='+encodeURIComponent($53.getCookie('53gid2'))+'&tpl='+encodeURIComponent($53.data('tpl'))+'&uid='+encodeURIComponent($53.data('api_uuid'))+'&u_stat_id='+encodeURIComponent($53.data('u_stat_id'))+'&talktitle='+encodeURIComponent(document.title)+'&tfrom=51&device='+hz6d_device;
		return openUrl;
	}
	_53App.prototype.initInviteDate = function(mobile_invite,mobile_chat){
		if(mobile_invite.is_open == undefined){
			if(mobile_chat.chat_type == 1 && mobile_chat.is_open == 1) mobile_invite.is_open = 'yes';
			else mobile_invite.is_open = 'no';
			// mobile_invite.is_open = mobile_chat.chat_type == 1 ? 'yes':'no';
			mobile_invite.timeout = mobile_chat.invite_pop_time;
			mobile_invite.invite_times = mobile_chat.invite_pop_num;
			mobile_invite.fanfu_time = mobile_chat.invite_reauto_time;
			mobile_invite.invite_off = mobile_chat.invite_off == 1 ? 'yes':'no';
			mobile_invite.page_times = 9999;//保留浏览器弹出次数字段，兼容老版
			mobile_invite.invite_is_reauto = mobile_chat.invite_is_reauto;
		}
		return mobile_invite;
	}
	_53App.prototype.initGroup = function(){
		var _this = this;
		var workers = _this.copyObject($53.data('workers'));
		var id6d = 0;
		for(var group_id in _this.groups){
			for (var i in _this.groups[group_id].workers){
				id6d = _this.groups[group_id].workers[i];
				if(workers[id6d] !== undefined){
					delete workers[id6d];
				}
			}
		}
		if(_this.isEmptyObject(workers) === false){
			_this.groups['0'] = {
				"group_name":"未分组",
				"workers":[]
			}
			for(var id6d in workers){	//未分组写入
				_this.groups['0'].workers.push(id6d);
			}
		}
	}
	_53App.prototype.overFlow = function(){//溢出
		var _this = this
		var over_flow = $53.data("over_flow");
		if($53.data('is_online') == 1 || typeof over_flow["overflow_type"] == "undefined") return;
		switch(over_flow["overflow_type"]){
			case "1":
				var addLinkParams = $53.data("add_link_params");
				if(addLinkParams == null) $53.data("add_link_params","&lnk_overflow=1");
				else $53.data("add_link_params",addLinkParams+"&lnk_overflow=1");
				$53.data('zdkf_type','1');
				$53.data('kflist','off');
				var kf = over_flow["overflow_value"];
				$53.data('kf',kf);
				if(kf == ""){
					$53.data('is_online',_this.kfOfOnline);
					return;
				}
				kf = kf.split(',');				
				for(var i in kf){
					if(_this.isOfWorkerOnline(kf[i],'worker_id')){
						$53.data('is_online','1');
						return;
					}
				}
				$53.data('is_online','0');
				break;
			case "2":				
				$53.data('zdkf_type','1');
				$53.data('kflist','off');
				var scheduleIds = over_flow["overflow_value"];
				var ofSchedule = $53.data("over_flow_schedule");
				var kf = "";
				for(var i in ofSchedule){
					if(typeof _this.workers[i] != "undefined"){
						var workInfo = _this.workers[i];
						kf += workInfo["worker_id"]+",";
					}					
				}
				$53.data('kf',kf);
				if(scheduleIds == "" && kf == ""){
					$53.data('is_online','0');
					return;
				}
				for(var i in ofSchedule){
					if(_this.isOfWorkerOnline(i)){
						$53.data('is_online','1');
						return;
					}
				}
				$53.data('is_online','0');
				break;
			case "3":
				var addLinkParams = $53.data("add_link_params");
				if(addLinkParams == null) $53.data("add_link_params","&lnk_overflow=1");
				else $53.data("add_link_params",addLinkParams+"&lnk_overflow=1");
				$53.data('zdkf_type','3');
				$53.data('kflist','off');
				var kf = over_flow["overflow_value"];
				$53.data('kf',kf);
				if(kf == ""){
					$53.data('is_online',_this.kfOfOnline);
					return;
				}
				kf = kf.split(',');				
				for(var i in kf){
					if(_this.isOfGroupOnline(kf[i])){
						$53.data('is_online','1');
						return;
					}
				}
				$53.data('is_online','0');	
				break;		
		}
	}
	_53App.prototype.checkAreaShunt = function(){
		var _this = this;
		var areaShunt = $53.data('area_shunt');
		var areaKf = [];
		var kfOnline = 0;
		var areaGroup = [];
		var groupOnline = 0;
		var areaSchedule = [];
		var scheduleOnline = 0;
		var areas = ["安徽", "北京", "重庆", "福建", "甘肃", "广东", "广西", "贵州", "海南", "河北", "黑龙江", "河南", "湖北", "湖南", "江苏", "江西", "吉林","辽宁", "宁夏", "内蒙古", "青海", "上海", "山西", "山东", "四川", "陕西", "天津", "西藏", "新疆", "云南", "浙江", "台湾", "香港", "澳门"];
		// var continents_arr = ["亚洲","欧洲","非洲","南美洲","北美洲","大洋洲","南极洲"];
		var ipAddr = "国外";
		for(var i in areas){
			if(_this.ipStr.indexOf(areas[i]) >= 0){
				ipAddr = _this.ipStr;
				break;
			}
		}
		for(var i in areaShunt){
			if(areaShunt[i]['kf_type'] == '1' && (ipAddr.indexOf(areaShunt[i]['area'])>=0 || _this.ipContinent.indexOf(areaShunt[i]['area'])>= 0)){
				areaKf.push(areaShunt[i]['kf'])
				if(kfOnline == 0 && _this.isWorkerOnline(areaShunt[i]['kf'],'worker_id')){
					kfOnline = 1;
				}
			}
			if(areaShunt[i]['kf_type'] == '2' && (ipAddr.indexOf(areaShunt[i]['area'])>=0 || _this.ipContinent.indexOf(areaShunt[i]['area'])>=0)){
				areaGroup.push(areaShunt[i]['kf'])
				if(groupOnline == 0 && _this.isGroupOnline(areaShunt[i]['kf'])){
					groupOnline = 1;
				}
			}
			if(areaShunt[i]['kf_type'] == '4'){
				areaSchedule.push(areaShunt[i]['kf'])
				if(scheduleOnline == 0 && _this.isGroupOnline(areaShunt[i]['kf'])){
					scheduleOnline = 1;
				}
			}
		}
		if(kfOnline === 1){
			$53.data('zdkf_type','1');
			$53.data('kf',areaKf.join(','));
			$53.data('is_online','1');
			return;
		}
		if(groupOnline === 1){
			$53.data('zdkf_type','3');
			$53.data('kf',areaGroup.join(','));
			$53.data('is_online','1');
			return;
		}
		if(scheduleOnline === 1){
			$53.data('zdkf_type','3');
			$53.data('kf',areaSchedule.join(','));
			$53.data('is_online','1');
			return;
		}
		if(areaKf.length > 0){
			$53.data('zdkf_type','1');
			$53.data('kf',areaKf.join(','));
			$53.data('is_online','0');
			return;
		}
		if(areaGroup.length > 0){
			$53.data('zdkf_type','3');
			$53.data('kf',areaGroup.join(','));
			$53.data('is_online','0');
			return;
		}
		if(areaSchedule.length > 0){
			$53.data('zdkf_type','3');
			$53.data('kf',areaSchedule.join(','));
			$53.data('is_online','0');
			return;
		}
	}
	_53App.prototype.checkNewAreaShunt = function(){//区域分流
		var _this = this;
		var areaShunt = $53.data('area_shunt');
		var areaKf = [];
		var kfOnline = 0;
		var areaGroup = [];
		var groupOnline = 0;
		var areaSchedule = [];
		var scheduleOnline = 0;
		var areas = ["安徽", "北京", "重庆", "福建", "甘肃", "广东", "广西", "贵州", "海南", "河北", "黑龙江", "河南", "湖北", "湖南", "江苏", "江西", "吉林","辽宁", "宁夏", "内蒙古", "青海", "上海", "山西", "山东", "四川", "陕西", "天津", "西藏", "新疆", "云南", "浙江", "台湾", "香港", "澳门"];
		// var continents_arr = ["亚洲","欧洲","非洲","南美洲","北美洲","大洋洲","南极洲"];
		var ipAddr = "国外";
		for(var i in areas){
			if(_this.ipStr.indexOf(areas[i]) >= 0){
				ipAddr = _this.ipStr;
				break;
			}
		}
		for(var i in areaShunt){
			if(areaShunt[i]['kf_type'] == '1' && (ipAddr.indexOf(areaShunt[i]['area'])>=0 || _this.ipContinent.indexOf(areaShunt[i]['area'])>= 0)){
				areaKf.push(areaShunt[i]['kf'])
				if(kfOnline == 0 && _this.isWorkerOnline(areaShunt[i]['kf'],'worker_id')){
					kfOnline = 1;
				}
			}
			if(areaShunt[i]['kf_type'] == '2' && (ipAddr.indexOf(areaShunt[i]['area'])>=0 || _this.ipContinent.indexOf(areaShunt[i]['area'])>=0)){
				areaGroup.push(areaShunt[i]['kf'])
				if(groupOnline == 0 && _this.isGroupOnline(areaShunt[i]['kf'])){
					groupOnline = 1;
				}
			}
		}
		if(kfOnline === 1 || groupOnline === 1){
			for (var i in areaGroup) {
				areaKf = _this.getGroupsWorkerid(areaGroup[i],areaKf);
			}
			$53.data('zdkf_type','1');
			$53.data('kf',areaKf.join(','));
			$53.data('is_online','1');
			return;
		}
		if(areaKf.length > 0 || areaGroup.length > 0){
			for (var i in areaGroup) {
				areaKf = _this.getGroupsWorkerid(areaGroup[i],areaKf);
			}
			$53.data('zdkf_type','1');
			$53.data('kf',areaKf.join(','));
			$53.data('is_online','0');
			_this.overFlow();
			return;
		}
		var over_flow = $53.data("over_flow");
		if(typeof over_flow["overflow_type"] == "undefined"){
			$53.data('zdkf_type','1');
			$53.data('kf',"");
			$53.data('is_online','0');
			var addLinkParams = $53.data("add_link_params");
			if(addLinkParams == null) $53.data("add_link_params","&lnk_overflow=2");
			else $53.data("add_link_params",addLinkParams+"&lnk_overflow=2");
		}		
		_this.overFlow();	
	}
	_53App.prototype.checkSourceShunt = function(){//来源分流
		var _this = this;
		var form_page = hz6d_from_page;
		var shunt_source = $53.data("source_shunt");
		var sourceKf = [];	
		var isOnline = 0;
		var domain_host = _this.getDomain(form_page);
		var search = _this.getSearch(domain_host);
		if(search != ""){
			for (var i in shunt_source) {
				if(typeof shunt_source[i]["shunt"] != "undefined" && shunt_source[i]["shunt"] != null){
					var shunt = shunt_source[i].shunt.split(",");

					for (var j in shunt) {
						if(shunt[j] == "") continue;
						if(search.indexOf(shunt[j]) != -1){
							if(shunt_source[i]["kf_type"] == 1){
								if(isOnline == 0 && _this.isWorkerOnline(shunt_source[i]['kf'])) isOnline = 1;
								var id6d = shunt_source[i]["kf"];
								var workInfo = _this.workers[id6d];
								var kf = workInfo["worker_id"];
								if(sourceKf.indexOf(kf) == -1) sourceKf.push(kf);
							}

							if(shunt_source[i]["kf_type"] == 2){
								if(isOnline == 0 && _this.isGroupOnline(shunt_source[i]['kf'])) isOnline = 1;
								sourceKf = _this.getGroupsWorkerid(shunt_source[i]["kf"],sourceKf);
							}
						}
					}
				}			
			}

		}
		$53.data('zdkf_type','1');
		$53.data('kf',sourceKf.join(','));
		var over_flow = $53.data("over_flow");
		if(sourceKf.join(',') == "" && typeof over_flow["overflow_type"] == "undefined"){
			var addLinkParams = $53.data("add_link_params");
			if(addLinkParams == null) $53.data("add_link_params","&lnk_overflow=2");
			else $53.data("add_link_params",addLinkParams+"&lnk_overflow=2");
		}			
		if(isOnline == 1){
			$53.data('is_online','1');
			return;
		}else{
			$53.data('is_online','0');
			_this.overFlow();
			return;
		}		
	}
	_53App.prototype.checkChannelShunt = function(){//渠道分流
		var _this = this;
		var shunt_channel = $53.data("channel_shunt");
		var land_page = decodeURIComponent(hz6d_land_page);
		var channelKf = [];	
		var isOnline = 0;

		for (var i in shunt_channel) {
			if(typeof shunt_channel[i]["shunt"] != "undefined" && shunt_channel[i]["shunt"] != null){
				var shunt = shunt_channel[i].shunt.split(",");

				for (var j in shunt) {
					if(shunt[j] == "") continue;	
					if(land_page.indexOf(shunt[j]) != -1){
						if(shunt_channel[i]["kf_type"] == 1){
							if(isOnline == 0 && _this.isWorkerOnline(shunt_channel[i]['kf'])) isOnline = 1;
							var id6d = shunt_channel[i]["kf"];
							var workInfo = _this.workers[id6d];
							var kf = workInfo["worker_id"];
							if(channelKf.indexOf(kf) == -1) channelKf.push(kf);
						}

						if(shunt_channel[i]["kf_type"] == 2){
							if(isOnline == 0 && _this.isGroupOnline(shunt_channel[i]['kf'])) isOnline = 1;
							channelKf = _this.getGroupsWorkerid(shunt_channel[i]["kf"],channelKf);
						}
					}
				}
			}			
		}

		$53.data('zdkf_type','1');
		$53.data('kf',channelKf.join(','));
		var over_flow = $53.data("over_flow");
		if(channelKf.join(',') == "" && typeof over_flow["overflow_type"] == "undefined"){
			var addLinkParams = $53.data("add_link_params");
			if(addLinkParams == null) $53.data("add_link_params","&lnk_overflow=2");
			else $53.data("add_link_params",addLinkParams+"&lnk_overflow=2");
		}
		if(isOnline == 1){
			$53.data('is_online','1');
			return;
		}else{
			$53.data('is_online','0');
			_this.overFlow();
			return;
		}
	}
	_53App.prototype.checkKf = function(){//正常客服接待
		var _this = this;
		if($53.data('is_online') !== null){		//区域分流已验证是否在线
			return;
		}
		var zdkf_type = $53.data('zdkf_type');
		var kf = $53.data('kf');
		if(kf == ''){
			$53.data('is_online',_this.kfOnline);
			return;
		}
		if(zdkf_type == '1'){
			kf = kf.split(',');
			for(var i in kf){
				if(_this.isWorkerOnline(kf[i],'worker_id')){
					$53.data('is_online','1');
					return;
				}
			}
			$53.data('is_online','0');
		}else{
			kf = kf.split(',');
			for(var i in kf){
				if(_this.isGroupOnline(kf[i])){
					$53.data('is_online','1');
					return;
				}
			}
			$53.data('is_online','0');			
		}
		_this.overFlow();
	}	
	_53App.prototype.checkOnline = function(){
		var _this = this;
		// _this.checkKf();
		var shunt_info = $53.data("shunt_info");
		if(typeof shunt_info["shunt_type"] == "undefined"){
			shunt_info["shunt_type"] = "5";
		}

		switch (shunt_info["shunt_type"]){
			case "1":
				_this.checkKf();
				break;
			case "2":
				$53.data("area_shunt",shunt_info["shunt_area"]);
				_this.checkNewAreaShunt();
				break;
			case "3":
				$53.data("source_shunt",shunt_info["shunt_source"]);
				_this.checkSourceShunt();
				break;
			case "4":
				$53.data("channel_shunt",shunt_info["shunt_channel"])
				_this.checkChannelShunt();
				break;
			default:
				_this.checkAreaShunt();
				_this.checkKf();
				break;				
		}
	}
	//根据id6d或工号查询是否在线 默认以id6d查询
	_53App.prototype.isWorkerOnline = function(worker,type){
		var _this = this;
		if(type == 'worker_id'){
			return _this.workerStates[worker] == '1' ? true:false;
		}else{
			return _this.workers[worker]['state'] == '1' ? true:false;
		}
	}
	//查询分组是否在线
	_53App.prototype.isGroupOnline = function(groupId){
		var _this = this;
		var group = _this.groups[groupId];
		if(group == null){
			return false
		}
		if(typeof(group['state']) !== 'undefined'){
			return group['state'] == '1'?true:false;
		}
		var workers = group['workers'];
		for(var i in workers){
			if(_this.isWorkerOnline(workers[i])){
				_this.groups[groupId]['state'] = '1';
				return true;
			}
		}
		_this.groups[groupId]['state'] = '0';
		return false;
	}
	//根据id6d或工号查询是否在线 默认以id6d查询,不去除不在排班时间的客服(溢出人员判断)
	_53App.prototype.isOfWorkerOnline = function(worker,type){
		var _this = this;
		if(type == 'worker_id'){
			return _this.ofWorkerStates[worker] == '1' ? true:false;
		}else{
			return _this.ofAllWorkers[worker]['state'] == '1' ? true:false;
		}
	}
	//查询分组是否在线,不去除不在排班时间的客服(溢出分组判断)
	_53App.prototype.isOfGroupOnline = function(groupId){
		var _this = this;
		var group = _this.ofGroups[groupId];
		if(group == null){
			return false
		}
		if(typeof(group['state']) !== 'undefined'){
			return group['state'] == '1'?true:false;
		}
		var workers = group['workers'];
		for(var i in workers){
			if(_this.isOfWorkerOnline(workers[i])){
				_this.ofGroups[groupId]['state'] = '1';
				return true;
			}
		}
		_this.ofGroups[groupId]['state'] = '0';
		return false;
	}	
	//获取分组下所有客服的工号
	_53App.prototype.getGroupsWorkerid = function(groupId,workerids){
		var _this = this;

		if(typeof workerids == "undefined") var workerids = [];

		if(typeof _this.groups[groupId] == "undefined" || _this.groups[groupId] == null){
			return workerids;
		}

		var id6ds = _this.groups[groupId]["workers"];
		for (var i = id6ds.length - 1; i >= 0; i--) {
		 	var workInfo = _this.workers[id6ds[i]];
		 	if(workerids.indexOf(workInfo['worker_id']) == -1) workerids.push(workInfo['worker_id']);
		}

		return workerids;
	}
	_53App.prototype.initWorkerStates = function(){
		var _this = this;
		var is_online = 0;
		for(var id6d in _this.workers){
			is_online = _this.workers[id6d]['state'];
			_this.workerStates[_this.workers[id6d]['worker_id']] = is_online;
			if(is_online == '1') _this.kfOnline = '1';
		}
	}
	_53App.prototype.initOfWorkerStates = function(){
		var _this = this;
		var workers = _this.ofAllWorkers;
		var is_online = 0;
		for(var id6d in workers){
			is_online = workers[id6d]['state'];
			_this.ofWorkerStates[workers[id6d]['worker_id']] = is_online;
			if(is_online == '1') _this.kfOfOnline = '1';
 		}
	}
	// 获取搜索引擎
	_53App.prototype.getSearch = function(url){
	  //var realSearch = new Array('神马','手机神马','手机百度','手机搜狗','手机搜狗','手机新浪网','手机雅虎','手机有道','手机搜搜','手机360搜索','手机360搜索',"Google", "Google", "Google网盟", "百度网盟", "百度知道", "Baidu", "Baidu", "3721", "3721", "Yisou", "Sogou", "Sina", "Sina", "Yahoo", "Tom", "Tom", "Youdao", "SOSO", "Bing",'360','360','360','360');
	  var realSearch = new Array('shenma','shenma','baidu','sogou','sogou','sina','yahoo','youdao','soso','360','360',"google", "google", "google", "baidu", "baidu", "baidu", "baidu", "3721", "3721", "Yisou", "sogou", "sina", "sina", "yahoo", "Tom", "Tom", "youdao", "soso", "bing",'360','360','360','360');
	  var search = new Array('sm.cn','m.sm.cn','m.baidu.com','m.sogou.com','wap.sogou.com','3g.sina.com.cn','m.yahoo.com','m.youdao.com','m.soso.com','m.so.com','m.haosou.com',"google.com", "google.cn", "googleads.g.doubleclick.net", "cpro.baidu.com", "zhidao.baidu.com", "baidu.com", "baidu.com", "3721.com", "3721.com", "yisou.com", "sogou.com", "iask.com", "sina.com", "yahoo.com", "search.tom.com", "search.tom.com", "youdao.com", "soso.com", "cn.bing.com",'360.cn','so.com','sou.com','haosou.com');

	  var len = search.length;
	  for(var i=0; i<len; i++)
	  {
	    if(url.indexOf(search[i])!=-1)
	    {
	      return realSearch[i];
	    }
	  }
	  return "";
	}

	// 获取域名
	_53App.prototype.getDomain = function(url){
	  var pos = url.indexOf("http://");
	  if(pos==0){
	    var pos1 = url.indexOf("/", 7);
	    if(pos1==-1){
	      return url.substr(7);
	    }else{
	      var len = pos1-pos-7;
	      return url.substr(7, len);
	    } 
	  }else{
	    var posHttps = url.indexOf("https://");
	    if(0 == posHttps){
	        var pos1 = url.indexOf("/", 8);
	        if(pos1==-1){
	          return url.substr(8);
	        }else{
	          var len = pos1-8;
	          return url.substr(8, len);
	        }
	    }else{
	        pos = url.indexOf("www.");
	        if(pos==0){
	          var pos1 = url.indexOf("/");
	          if(pos1==-1){
	            return url.substr(0);
	          }else{
	            return url.substr(0, pos1);
	          }
	        }
	    }
	  }

	  pos = url.indexOf("/");
	  if(pos==-1){
	    return url;
	  }else{
	    return url.substr(0, pos);
	  }
	}
	_53App.prototype.clearCache = function(){
		var _this = this;
		_this.workers = null;
		_this.groups = null;
		_this.workerStates = null;
		$53.data('mobile_icon',null);
		$53.data('mobile_invite',null);
		$53.data('assign_worker',null);
	}
	_53App.prototype.isMobile = function(){
		var regex_match = /(nokia|iphone|android|motorola|^mot\-|softbank|foma|docomo|kddi|up\.browser|up\.link|htc|dopod|blazer|netfront|helio|hosin|huawei|novarra|CoolPad|webos|techfaith|palmsource|blackberry|alcatel|amoi|ktouch|nexian|samsung|^sam\-|s[cg]h|^lge|ericsson|philips|sagem|wellcom|bunjalloo|maui|symbian|smartphone|midp|wap|phone|windows ce|iemobile|^spice|^bird|^zte\-|longcos|pantech|gionee|^sie\-|portalmmm|jig\s browser|hiptop|^ucweb|^benq|haier|^lct|opera\s*mobi|opera\*mini|320x320|240x320|176x220|ipad|XiaoMi)/i;
		if(navigator.userAgent.match(regex_match)){
			return true;
		}
		return false;
	}
	_53App.prototype.getApp = function(name){
		var _this = this;
		return _this.apps[name];
	}
	_53App.prototype.setApp = function(name,app){
		var _this = this;
		_this.apps[name] = app;
	}
	_53App.prototype.copyObject = function(e) {  
		var _this = this;
		if(typeof(e) != 'object') return e;
		if(e == null) return e;
		var myNewObj = new Object();
		for(var i in e)
			myNewObj[i] = _this.copyObject(e[i]);
		return myNewObj; 
	}  
	_53App.prototype.isEmptyObject = function(e) {  
        var t;  
        for (t in e)  
            return !1;  
        return !0  
    }  


	_53App.prototype.show = function(type){
		var _this = this;
		_this.getApp(type).show();
	}
	_53App.prototype.hide = function(type){
		var _this = this;
		_this.getApp(type).hide();
	}
	_53App.prototype.talk = function(type,params){
		var _this = this;
		_this.getApp(type).talk(params);
	}
	_53App.prototype.setMsgTip = function(type,obj){
		var _this = this;
		_this.getApp(type).setMsgTip(obj);
	}
	_53App.prototype.getAppObj = function(type,obj){
		var _this = this;
		return _this.getApp(type).getAppObj(obj);
	}
	/****************************************应用主类结束*************************************/
	function create53APP(){
		if($53.data('mobile_icon') == null || $53.data('mobile_invite') == null || $53.data('assign_worker') == null){
			setTimeout(function(){
				create53APP();
			},200);
			return;
		}
		window._53App = new _53App();
	}
	if(typeof id_creared_53app == "undefined"){
		create53APP();
		window.id_creared_53app = "creared";
	}
})(window,document,hz6d_alias_host,ipstr,ipContinent,companyid,hz6d_style_id);

var head=document.getElementsByTagName("head")[0];var script=document.createElement("script");script.src="http://www10.53kf.com/kf_new.php?arg=9005540&style=2&land_page="+hz6d_land_page+"&from_page="+$53.EN(hz6d_from_page)+"&kf_sign=jI4MzMTU1ME1OTExMzE5NDAyNTAwMDEy&api_uuid=a2e1d28c2761734a4d7cef761545fee0&ip_long=2084643982";var done=false;script.onload=script.onreadystatechange=function(){if(!done&&(!this.readyState||this.readyState=="loaded"||this.readyState=="complete")){done=true;script.onload=script.onreadystatechange=null;head.removeChild(script);}};head.appendChild(script);
