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
	var data = document.myform.textarea.value;

	if(data == ""){
		return false;
	} else {
		var oldCookie = getCookie("cookie");
		var cookievalue = "";
		if(oldCookie != null){
			cookievalue= encodeURIComponent(oldCookie + " " + data); 
		} else {
			cookievalue = encodeURIComponent(data);
		}
		var maxAge = "; max-age=" + 1*24*60*60 + ";";
		document.cookie="cookie=" + cookievalue + maxAge;
       	document.myform.textarea.value = "";
	}
}

function loadCookie () {
	var allCookie = getCookie("cookie")
	let start = 0;
	let stop = allCookie.length;
	let i = 0;
	while(true){
		for (i=start; i<stop; i++){
			if(allCookie[i] == " ") break;
		}

		var tmpCookie = allCookie.substring(start, i);
		document.writeln(tmpCookie + "<br />");
		start = i + 1;
		if(start >= stop) break;
	}
}