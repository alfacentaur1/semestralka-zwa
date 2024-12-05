function initForm(){
    const username = document.getElementById("username");
    username.addEventListener("keyup",checkUsername);
}


function checkUsername(e) {
    const xhr = new XMLHttpRequest();
    const inputUsername = document.getElementById("username").value;
    xhr.addEventListener("onload",validateUsername);
    xhr.open("POST","/https://zwa.toad.cz/~kopecfi3/semestralka/users_ajax.php");
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("username="+ encodeURIComponent(inputUsername));
    console.log("Sending AJAX request with username: ", inputUsername);
}

function validateUsername(e) {
    const p = document.getElementById("hidden");
    if (e.target.responseText == "used") {
        p.classList.add("ajax");
    }else {
        p.classList.remove("ajax");
    }
}

document.addEventListener("DOMContentLoaded", initForm);