function getCookie(name) {
    var cookieArr = document.cookie.split(";");

    for(var i = 0; i < cookieArr.length; i++) {
        var cookiePair = cookieArr[i].split("=");

        if(name == cookiePair[0].trim()) {
            return decodeURIComponent(cookiePair[1]);
        }
    }

    return null;
}

function addCookie () {
	var data = document.myform.customer.value;
	document.writeln(document.cookie);
	if(data === ""){
		return false;
	} else {
		var oldCookie = getCookie("cookie");
		var cookievalue = "";
		if(oldCookie != null){
			cookievalue= encodeURIComponent(oldCookie + " " + data); 
		} else {
			cookievalue = encodeURIComponent(data);
		}
		document.cookie="cookie=" + cookievalue + "; max-age=86400;";
       	document.writeln(decodeURIComponent(document.cookie));
	}
}

function loadCookie () {
	var allCookie = getCookie("cookie")
	let start = 0;
	let stop = allCookie.length;
	let i = 0;
	while(true){
		for (i=start; i<stop; i++){
			if(allCookie[i] === " ") break;
		}

		var tmpCookie = allCookie.substring(start, i);
		document.writeln(tmpCookie + "<br />");
		start = i + 1;
		if(start >= stop) break;
	}
}