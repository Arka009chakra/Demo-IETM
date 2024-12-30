function Reg() {
    const username = document.getElementById("t1").value;
    const password = document.getElementById("t2").value;
    const cpassword = document.getElementById("t3").value;

    if (cpassword === password) {
        const data = {
            username: username,
            password: password,
        };
        fetch('signuplogic.php', {
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
    } else {
        alert("Password and Confirm Password Not Matched!!!!");
    }
}
