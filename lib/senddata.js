window.addEventListener("load", function () {
	loadxhr({
	    "method": "POST",
	    "url": "api/wbt/",
	    "query": "task=test&presendingId=1&wbtx=160&wbty=160&height=200&width=200",
	});
});