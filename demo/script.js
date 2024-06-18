document.getElementById('loadDataBtn').addEventListener('click', function() {
    // Create a new XMLHttpRequest object
    var xhr = new XMLHttpRequest();

    // Configure the request
    xhr.open('GET', 'https://jsonplaceholder.typicode.com/posts/1', true);

    // Define what happens on successful data retrieval
    xhr.onload = function() {
        if (xhr.status >= 200 && xhr.status < 300) {
            // Parse JSON response
            var responseData = JSON.parse(xhr.responseText);
            
            // Update content on the page
            document.getElementById('dataContainer').innerHTML = `
                <h2>Post Title:</h2>
                <p>${responseData.title}</p>
                <h2>Post Body:</h2>
                <p>${responseData.body}</p>
            `;
        } else {
            console.error('Request failed:', xhr.statusText);
        }
    };

    // Define what happens in case of an error
    xhr.onerror = function() {
        console.error('Request failed.');
    };

    // Send the request
    xhr.send();
});
