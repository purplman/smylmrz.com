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

var deleteForm = document.querySelector("form[data-action]");
deleteForm.addEventListener("submit", function (e) {
  e.preventDefault();

  if (confirm("Are you sure?")) {
    this.submit();
  }
});
/******/ })()
;