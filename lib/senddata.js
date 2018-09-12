var errors = function (response) {
	document.getElementById("errors").innerHTML = response;
},
load = function (response) {
	var result = JSON.parse(response.target.responseText);
	var nodes = [];
    var edges = [];
	if (result.rows) {
	     for (i = 0; i < result.rows.length; i ++) {
			 if (result.rows.hasOwnProperty(i)) {
				 nodes.push({id: result.rows[i].ID, label: result.rows[i].Text});
                 edges.push({from: result.rows[i].PrecedingID, to: result.rows[i].ID})
			 }
		 }
    }
	importDataSets(nodes, edges)
},

Text = "test";
window.addEventListener("load", function () {
	loadXHR({
	    "method": "GET",
	    "url": "api/get.php",
	    "callbacks": {
	        "load": load,
	        "error": errors
	    }
	});
	
	loadXHR({
	    "method": "POST",
	    "url": "api/wbt/add.php",
	    "query": "Text=" + Text + "&WBTX=" + WBTX + "&WBTY=" + WBTY + "&WBTHeight=" + WBTHeight + "&WBTWidth=" + WBTWidth,
	});
});