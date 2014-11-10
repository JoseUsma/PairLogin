$(document).ready(function() {

    // your stuff here
    // ...

});

    function loadResultPage(target, URI,page) {
		$(target).load(URI, { "page": page });
	};