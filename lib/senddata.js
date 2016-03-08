var errors = function (response) {
	document.getElementById("errors").innerHTML = response;
},
load = function (response) {
	var result = JSON.parse(response.target.responseText);
	var dataSet = [];
	if (result.rows) {
	     for (i = 0; i < result.rows.length; i ++) {
			 if (result.rows.hasOwnProperty(i)) {
				 dataSet.push({id: result.rows[i].ID, label: result.rows[i].Text});
			 }
		 }
    }
	importDataSets(dataSet)
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

	loadxhr({
	    "method": "POST",
	    "url": "api/wbt/add.php",
	    "query": "Text=" + Text + "
	});
});