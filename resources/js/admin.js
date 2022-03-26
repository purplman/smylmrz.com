const alert = document.getElementById("alert");

if (alert) {
    setTimeout(() => {
        alert.classList.add("alert--hidden");
    }, 3000);
}

const deleteForm = document.querySelector("form[data-action]");

deleteForm.addEventListener("submit", function (e) {
    e.preventDefault();

    if (confirm("Are you sure?")) {
        this.submit();
    }
});
