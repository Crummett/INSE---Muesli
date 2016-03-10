/*var errors = function (response) {
	document.getElementById("errors").innerHTML = response;
},
load = function (response) {
	console.log(response);
	var result = JSON.parse(response.target.responseText),
	nodes = [],
    edges = [];
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
	loadxhr({
	    "method": "GET",
	    "url": "api/get.php",
	    "callbacks": {
	        "load": load,
	        "error": errors
	    }
	});
});*/