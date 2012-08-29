jQuery.fn.addCollect = function(l, h){
	return this.click(function(){
		var t = jQuery(this);
		if(jQuery.browser.msie) {
			window.external.addFavorite(h, l);
		} else if(jQuery.browser.mozilla || jQuery.browser.opera){
			t.attr("rel", "sidebar");
			t.attr("title", l);
			t.attr("href", h);
		} else{
			alert("请使用Ctrl+D将本页加入收藏夹");				
		}				
	});
}

jQuery.fn.addHomepage = function(h){
	return this.click(function(){
		if(window.sidebar) {
			try {
	            netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
	        } catch (e) {
	            alert("此操作被浏览器拒绝！\n请在浏览器地址栏输入“about:config”并回车\n然后将 [signed.applets.codebase_principal_support]设置为true");
	        }
	
	        var prefs =  Components.classes["@mozilla.org/preferences-service;1"].getService( Components.interfaces.nsIPrefBranch );
	        prefs.setCharPref("browser.startup.homepage", h);
		} else if(document.all) {
	        document.body.style.behavior="url(#default#homepage)";
	        document.body.setHomePage(h);
	    }				
	});
}


function addCollection(){　 
    if (document.all){   
        window.external.addFavorite(location.href, document.title);   
    }else if (window.sidebar){   
        window.sidebar.addPanel(document.title, location.href, "");   
    }   
} 