function showContent(id)
{
    
    const summaries = document.querySelectorAll('.highlight');
    summaries.forEach(summary => {
        summary.style.backgroundColor = ''; // Clear the highlight
    });

    // Iterate over <summary> elements to find the clicked one using getAttribute
    summaries.forEach(summary => {
        
        if (summary.getAttribute('data-id') === String(id)) {
            
            summary.style.backgroundColor = 'yellow'; // Highlight the clicked element
        }
    });

   fetch('content.php', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json',
    },
    body: JSON.stringify({id:id}), // Directly send the object without nesting
})
.then(response => response.text())
.then(data => {
   document.getElementById('content').innerHTML = data;
   
})
.catch(error => {
    alert(error);
});
}
function expandall()
{
    document.querySelectorAll('details').forEach((e)=>{
        e.open=true;
    })
}
function collapseall()
{
    document.querySelectorAll('details').forEach((e)=>{
        e.open=false;
    })
}

let currentindex = -1; // Initialize current match index
let matchedvalue = []; // Array to store matched elements

function search() {
    const x = document.getElementById("t8").value; // Get input value
    
    fetch('search.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json', // Ensure JSON is sent
        },
        body: JSON.stringify({ value: x }) // Send input value as JSON
    })
    .then(response => {
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        return response.json(); // Parse response as JSON
    })
    .then(data => {
        expandall(); // Expand all necessary elements
        currentindex = -1; // Reset the index
        matchedvalue = []; // Clear previous matches

        const reqs = document.querySelectorAll('.highlight'); // Select all elements with class 'highlight'
        reqs.forEach(req => {
            const w = req.getAttribute('data-id'); // Get `data-id` attribute
            if (data.includes(w)) { // Check if `data-id` is in the response data
                req.style.backgroundColor = 'yellow'; // Highlight the matched element
                matchedvalue.push(req); // Store the matched element
            }
        });
    })
    .catch(error => {
        alert(error); // Display error message
    });
}

function moveDown() {
    if (matchedvalue.length === 0) {
        return; // Exit if no matches are found
    }

    // Increment index and loop back if at the end
    currentindex = (currentindex + 1) % matchedvalue.length;

    // Scroll to the current match
    const currentElement = matchedvalue[currentindex];
    currentElement.scrollIntoView({ behavior: 'smooth', block: 'center' });
    currentElement.style.backgroundColor = 'orange'; // Highlight current match in orange
}
function Logout()
{
    window.location.href = 'logout.php';
}