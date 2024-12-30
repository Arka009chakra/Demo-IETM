function log()
{
    const username = document.getElementById("t3").value;
    const password = document.getElementById("t4").value;
    const data = {
      username:username,
      password:password
    };
    fetch('loginlogic.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(data), // Directly send the object without nesting
    })
    .then(response => response.text())
    .then(data => {
        alert(data);
        if (data === "Login Successful!") {
            window.location.href = 'bomui.php';  // Redirect only if login is successful
        }
    })
    .catch(error => {
        alert(error);
    });
}


function change()
{
    const username = document.getElementById("t5").value;
    const password = document.getElementById("t6").value;
    const data = {
      username:username,
      password:password
    };
    fetch('changelogic.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(data), // Directly send the object without nesting
    })
    .then(response => response.text())
    .then(data => {
        alert(data);
    })
    .catch(error => {
        alert(error);
    });
}