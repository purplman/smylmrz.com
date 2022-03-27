const alert = document.getElementById("alert");

if (alert) {
    setTimeout(() => {
        alert.classList.add("alert--hidden");
    }, 3000);
}

const deleteForms = document.querySelectorAll("form[data-action='delete']");

deleteForms.forEach((deleteForm) => {
    deleteForm.addEventListener("submit", function (e) {
        e.preventDefault();

        if (confirm("Are you sure?")) {
            this.submit();
        }
    });
});
