/*modal-email*/
function getQueryParam(name) {
  const urlParams = new URLSearchParams(window.location.search);
  return urlParams.get(name);
}
document.addEventListener("DOMContentLoaded", function () {
  const mailStatus = getQueryParam("mailStatus");
  if (mailStatus === "success") {
    var modal = document.getElementById("myModal");

    modal.style.display = "block";

    setTimeout(function () {
      modal.style.display = "none";
    }, 3000);
  }
});

