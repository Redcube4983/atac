jQuery(function(k){var d=navigator.userAgent.toLowerCase();var l=navigator.appVersion.toLowerCase();var p=(d.indexOf("msie")>-1)&&(d.indexOf("opera")==-1);var j=p&&(l.indexOf("msie 6.")>-1);var i=p&&(l.indexOf("msie 7.")>-1);var h=p&&(l.indexOf("msie 8.")>-1);var g=p&&(l.indexOf("msie 9.")>-1);var b=p&&(l.indexOf("msie 10.")>-1);var q=(d.indexOf("trident/7")>-1);var f=p||q;var o=(d.indexOf("edge")>-1);var a=(d.indexOf("chrome")>-1)&&(d.indexOf("edge")==-1);var c=(d.indexOf("firefox")>-1);var m=(d.indexOf("safari")>-1)&&(d.indexOf("chrome")==-1);var e=(d.indexOf("opera")>-1);k(function(){if(e){k("body").addClass("Opera")}else{if(f){k("body").addClass("Ie")}else{if(a){k("body").addClass("Chrome")}else{if(m){k("body").addClass("Safari")}else{if(o){k("body").addClass("Edge")}else{if(c){k("body").addClass("Firefox")}else{return false}}}}}}});var n=(function(r){return{Tablet:(r.indexOf("windows")!=-1&&r.indexOf("touch")!=-1&&r.indexOf("tablet pc")==-1)||r.indexOf("ipad")!=-1||(r.indexOf("android")!=-1&&r.indexOf("mobile")==-1)||(r.indexOf("firefox")!=-1&&r.indexOf("tablet")!=-1)||r.indexOf("kindle")!=-1||r.indexOf("silk")!=-1||r.indexOf("playbook")!=-1,Mobile:(r.indexOf("windows")!=-1&&r.indexOf("phone")!=-1)||r.indexOf("iphone")!=-1||r.indexOf("ipod")!=-1||(r.indexOf("android")!=-1&&r.indexOf("mobile")!=-1)||(r.indexOf("firefox")!=-1&&r.indexOf("mobile")!=-1)||r.indexOf("blackberry")!=-1}})(window.navigator.userAgent.toLowerCase());k(function(){if(n.Mobile){k("body").addClass("SP")}else{if(n.Tablet){k("body").addClass("tab")}else{k("body").addClass("PC")}}});if(navigator.platform.indexOf("Win")!=-1){k("body").addClass("Win")}else{k("body").addClass("Mac")}k(function(){var r=navigator.userAgent;if(r.indexOf("iPhone")>0){k("body").addClass("iPhone")}else{if(r.indexOf("Android")>0&&r.indexOf("Mobile")>0){k("body").addClass("Android")}else{if(r.indexOf("iPad")>0){k("body").addClass("iPad")}}}})});