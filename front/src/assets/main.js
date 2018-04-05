/* All general js for the application */

loadScript('https://code.jquery.com/jquery-3.3.1.min.js');
loadScript('assets/js/panel-collapse.js');


/* this script load the file who was transmit in params */
function loadScript(url) {
    var script = document.createElement("script"); // Make a script DOM
    script.src = url; // Set it's src to the provided URL
    document.head.appendChild(script); // Add it to the end of the head section of the page (could change 'head' to 'body' to add it to the end of the body section instead)
}




