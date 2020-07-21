const yTextField = document.getElementById("y-text");
const error = document.getElementById('value-validate-text');
yTextField.addEventListener("input", function (event) {
    const yStr = this.value.replace(",", ".");
    if (!isNaN(yStr)) {
        if (numberIsInInterval(yStr, -5, 5)) {
            error.innerText = "OK"
            error.style.color = "green"
        } else {
            error.innerText = "Not correct value: must be in [-5;5]"
            error.style.color = "red";
        }
    } else {
        error.innerText = "Please enter number only"
        error.style.color = "red";
    }
})

function numberIsInInterval(num, min, max) {
    return min <= num && num <= max;
}

const sendButt = document.getElementById("submit-button");
const submit = function (e) {
    e.preventDefault();
    var formData = new FormData(document.getElementById("coordinates-form"));
    fetch("php/get_data.php?x=" + formData.get("x") + "&y=" + formData.get("y")
        + "&r=" + formData.get("r")).then(response => response.text())
        .then(response => document.getElementById('result-table').innerHTML = response);
};
sendButt.addEventListener('click', submit);

const clearButt = document.getElementById("clear-button");
clearButt.addEventListener('click', function (e) {
    e.preventDefault();
    fetch("php/clear_data.php").then(response => response.text())
        .then(response => document.getElementById('result-table').innerHTML = response);
})
$("input:checkbox").click(function () {
    var group = "input:checkbox[name='" + $(this).prop("name") + "']";
    $(group).prop("checked", false);
    $(this).prop("checked", true);
});