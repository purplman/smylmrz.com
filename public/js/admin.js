/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************!*\
  !*** ./resources/js/admin.js ***!
  \*******************************/
var alert = document.getElementById("alert");

if (alert) {
  setTimeout(function () {
    alert.classList.add("alert--hidden");
  }, 3000);
}

var deleteForms = document.querySelectorAll("form[data-action='delete']");
deleteForms.forEach(function (deleteForm) {
  deleteForm.addEventListener("submit", function (e) {
    e.preventDefault();

    if (confirm("Are you sure?")) {
      this.submit();
    }
  });
});
/******/ })()
;