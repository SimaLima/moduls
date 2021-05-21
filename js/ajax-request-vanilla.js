/*
 * AJAX REQUEST
 * Send ajax request and handle response.
 */
var request = new XMLHttpRequest();
request.open('POST', ajaxurl, true);
request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded;');
request.onload = function() {
    if (this.status >= 200 && this.status < 400) {
        // success
        console.log(this.response);
    } else {
        // failure
        console.log(this.response);
    }
};
request.onerror = function() {
    // Connection error
};
request.send('action=some_action&some_id=' + data.someID + '&security=' + SERVICE.security);
