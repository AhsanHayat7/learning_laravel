// Function to send AJAX request to delete todo item
function deleteTodoItem(todoId) {
    // Send a DELETE request to the server
    fetch('/todos/' + todoId, {
      method: 'DELETE',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
      }
    })
    .then(response => {
      if (!response.ok) {
        throw new Error('Network response was not ok');
      }
      // Reload the page after successful deletion
      window.location.reload();
    })
    .catch(error => console.error('%cError: ' + error.message, 'color: black')); // Style error message with black color
}

// Event listener for clicking on close buttons
var close = document.getElementsByClassName("close");
for (var i = 0; i < close.length; i++) {
    close[i].onclick = function() {
        var div = this.parentElement;
        // Get the todo item's ID from the parent element's data-id attribute
        var todoId = div.getAttribute('data-id');
        // Call the deleteTodoItem function with the todo ID
        deleteTodoItem(todoId);
    }
}

// Function to create a new list item
function newElement() {
    var inputValue = document.getElementById("myInput").value.trim(); // Trim whitespace
    // Check if input value is empty
    if (inputValue === '') {
        // Alert message with black text on a white background
        alert("Please enter a title!");
        return;
    }
    // Send a POST request to add the new todo item to the database
    fetch('/todos', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({ title: inputValue })
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        // Reload the page after successful addition
        window.location.reload();
    })
    .catch(error => console.error('%cError: ' + error.message, 'color: black')); // Style error message with black color
}
