//VARIABLES

window.onload = function() {
  const facebookLink = "https://www.facebook.com/groups/312472110984098";
  const instagramLink = "https://www.instagram.com/vals.piestany/";
  const whatsAppLink = "https://api.whatsapp.com/send?phone=+421907532766&";
  const phoneNumberText = "+421 907 532 766"
  const phoneNumberLink = "+421907532766"
  const emailAdressLT = "vals.piestany@gmail.com";
  
  const phoneNumber = document.getElementById("phoneNumber");
  const iconElementTel = document.createElement("i");
  iconElementTel.className = "fa fa-phone";
  phoneNumber.textContent = " ";
  phoneNumber.appendChild(iconElementTel);
  phoneNumber.appendChild(document.createTextNode(" " + phoneNumberText));
  phoneNumber.href = "tel:" + phoneNumberLink;
  
  const emailAdress = document.getElementById("emailAdress");
  const iconElementEmail = document.createElement("i");
  iconElementEmail.className = "fa fa-envelope";
  emailAdress.textContent = " ";
  emailAdress.appendChild(iconElementEmail);
  emailAdress.appendChild(document.createTextNode(" " + emailAdressLT));
  emailAdress.href = "mailto:" + emailAdressLT;
  
  document.getElementById("facebookLink").href = facebookLink;
  document.getElementById("instagramLink").href = instagramLink;
  document.getElementById("whatsAppLink").href = whatsAppLink;
  document.getElementById("emailAdress").href = "mailto:" + emailAdress;
  
};

//PHONE MENU
function openNav() {
  document.getElementById("mySidepanel").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
}

//GALLERY / MODAL
var modal = document.getElementById('myModal');
var images = document.getElementsByClassName('myImages');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");

for (var i = 0; i < images.length; i++) {
  var img = images[i];
  img.onclick = function(evt) {
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
  }
}

var span = document.getElementsByClassName("close")[0];

span.onclick = function() {
  modal.style.display = "none";
}



