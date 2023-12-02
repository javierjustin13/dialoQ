function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
    event.preventDefault();
}

function filterFunction() {
    var input, filter, div, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    div = document.getElementById("myDropdown");
    a = div.getElementsByTagName("a");
    for (i = 0; i < a.length; i++) {
        txtValue = a[i].textContent || a[i].innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "";
        } else {
            a[i].style.display = "none";
        }
    }

    // Show/hide the dropdown based on whether there is text input
    div.style.display = filter.length > 0 ? "block" : "none";
}

window.onclick = function (event) {
    if (!event.target.matches(".form-control")) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            openDropdown.style.display = "none";
        }
    }
};

document.getElementById("myInput").addEventListener("input", filterFunction);
