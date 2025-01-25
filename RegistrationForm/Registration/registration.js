window.onload = function() {
    const urlParams = new URLSearchParams(window.location.search);
    const msg = urlParams.get('msg');

    const messages = {
        1: "User already exists",
        2: "Please fill all the fields",
        3: "Confirm password does not match"
    }

    if (msg && messages[msg]) {
        window.alert(messages[msg]);
    }
}