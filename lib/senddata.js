var errors = function (response) {
	document.getElementById("errors").innerHTML = response;
},
load = function (response) {
	var result = JSON.parse(response.target.responseText);
	if (result.rows) {
	     for (i = 0; i < result.rows.length; i ++) {
	        if (result.rows.hasOwnProperty(i)) {
		       	task = result.rows[i].Task;
		       	console.log(result.rows[i]);
			}
	    }            	
    } 
},
Text = "test", 
WBTX = 160.0, 
WBTY = 160.0, 
WBTHeight = 200, 
WBTWidth = 200;
window.addEventListener("load", function () {
	loadxhr({
	    "method": "POST",
	    "url": "api/wbt/add.php",
	    "query": "Task=" + Text + "&WBTX=" + WBTX + "&WBTY=" + WBTY + "&WBTHeight=" + WBTHeight + "&WBTWidth=" + WBTWidth,
	});

	loadxhr({
	    "method": "GET",
	    "url": "api/get.php",
	    "callbacks": {
	        "load": load,
	        "error": errors
	    }
	});
});