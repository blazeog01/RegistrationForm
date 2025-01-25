window.onload = function(){
    const urlParams = new URLSearchParams(window.location.search);
    const error = urlParams.get('error');

    const errorMessages = {
        1: "Student already registered",
        2: "Please fill all the fields"
    }

    if (error && errorMessages[error]) {
        alert(errorMessages[error]);
    }
}