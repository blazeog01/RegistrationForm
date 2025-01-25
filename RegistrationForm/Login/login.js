window.onload = function() {
    const urlParams = new URLSearchParams(window.location.search);
    const msg = parseInt(urlParams.get('msg'));



    const messages = {
        1: "Invalid username or password",
        2: "Please fill all the fields",
        3: "Succesfully logged out",
        4: "Successfully registered",
        5: "User already exists"
    }

    if (msg){
        const message = messages[msg] || "Unknown error";
        alert(message);
    }
}
// const messages = {
//     1: "Invalid username or password",
//     2: "Please fill all the fields",
//     3: "Succesfully logged out",
//     4: "Successfully registered",
//     5: "User already exists"
// }
// console.log(`Value of msg: '${messages[5]}'`);
// //
// window.onload = function() {
//     alert("Hello");
// }