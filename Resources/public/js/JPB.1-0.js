// Event system object
JPBEvent = function() {
   	queue = {};
    fired = [];

    a = ['ongoing',
    	'started', 
    	'progress',
    	'finished'];

}

// Fires an event
JPBEvent.prototype.fire = function(event, data) {
    queue = queue[event];

    if (typeof queue === 'undefined') {
        return;
    }

    while (queue.length) {
        (queue.shift())(data);
    }

    fired[event] = true;
}

// Bind event
JPBEvent.prototype.on = function(event, callback) {
    if (fired[event] === true) {
        return callback();
    }

    if (typeof queue[event] === 'undefined') {
        queue[event] = [];
    }

    queue[event].push(callback);
}


JPBProgressBar = function(config) {
	cfg = config;

	// Init event handling system for JPBProgressBar
	jpbe = new JPBEvent();

	// Loops the function fn with delay d
	function loopWithDelay(fn, d)
	{
	    fn();
	    setTimeout(function() {
	        loopn(fn, d);
	    }, d);
	}
}

// Public wrapper to bind event listeners
JPBProgressBar.prototype.on = function(e, c) {
	jpbe.on(e, c);
}

// Start refreshing progress. Ajax refresh towards /jpb/progress/user or /jpb/progress/all depending on config
JPBProgressBar.prototype.start = function() {
	jpbe.fire("started", "Starting to post to /jpb/progress/" + cfg['endpoint']);
}






/* TESTING *//* TESTING *//* TESTING *//* TESTING *//* TESTING *//* TESTING *//* TESTING *//* TESTING */


// Init progress bar
var t = new JPBProgressBar({
	'endpoint': "user",
	'refreshInterval': 1000
});

// Listen for started event and print callback data
t.on("started", function(data) {
	alert(data);
})

// Start, thus triggering event
t.start();
