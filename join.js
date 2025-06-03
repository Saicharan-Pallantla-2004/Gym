function validateForm() {
    var name = document.getElementById("name").value;
    var mobile = document.getElementById("mobile").value;
    var age = document.getElementById("age").value;
    var height = document.getElementById("ht").value;
    var weight = document.getElementById("wt").value;
    
    if (name == "" || mobile == "" || age == "" || height == "" || weight == "") {
        alert("All fields must be filled out");
        return false;
    }
    
    if (isNaN(mobile)) {
        alert("Mobile number must be numeric");
        return false;
    }

    if (isNaN(age)) {
        alert("Age must be numeric");
        return false;
    }

    return true;
}