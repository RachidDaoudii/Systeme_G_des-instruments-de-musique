// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
    'use strict';
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation');
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms).forEach((form) => {
      form.addEventListener('submit', (event) => {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
})();

function returnInfo(id){
  
  // let image= document.getElementById(id).children[0].children[0].children[1].getAttribute('data');
  let title= document.getElementById(id).children[2].children[0].getAttribute('data');
  let types= document.getElementById(id).children[3].children[0].getAttribute('data');
  let quantite= document.getElementById(id).children[4].children[0].getAttribute('data');
  let prix= document.getElementById(id).children[5].children[0].getAttribute('data');
  // document.querySelector('#imagemodel').src = image;
  document.querySelector('#titlemodel').value = title;
  console.log(id)
  // document.querySelector('#typemodel').value = types;
  document.querySelector('#Quantitemodel').value = quantite;
  document.querySelector('#Prixmodel').value = prix;

  document.querySelector('#viewTitle').innerText=title;
  document.querySelector('#viewTypes').innerText=types;
  document.querySelector('#viewQuantite').innerText=quantite;
  document.querySelector('#viewPrix').innerText=prix;



  document.querySelector('#idmodel').value = id;
}


const btn =document.querySelector(".on")


connect = navigator.onLine;
function onLine(){
  btn.style.color = "green";
}
function offLine(){
  btn.style.color = "red";
}

if (connect) onLine();
else offLine();

window.addEventListener("online",onLine);
window.addEventListener("offline",offLine);
