const selectInput = document.getElementById("titleSelect");
const buttonEdit = document.getElementById("btnEdit");
const buttonUpdate = document.getElementById("btnUpdate");

const toggleInput = () => {
    var inputs = document.getElementsByTagName("input");
    for (var i = 0; i < inputs.length; i++) {
        inputs[i].disabled = !inputs[i].disabled;
    }
    selectInput.disabled = !selectInput.disabled;
    buttonUpdate.disabled = !buttonUpdate.disabled;

    if (buttonUpdate.disabled) {
        buttonEdit.innerHTML = "Edit";
    } else {
        buttonEdit.innerHTML = "Cancel";
    }
}