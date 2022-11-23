// let hg=document.querySelector("#btnAddInstruments");
// hg.addEventListener('click',function(){
//   console.log('lkhglkdf')
// })

//check email déja 
$(document).ready(function(){
  $("#registerEmail").keyup(function(){
    var email = $(this).val();
    if(email == ""){
      $("#msgsql").fadeOut();
    }else{
      $.ajax({
        url: "email.php",
        method: "POST",
        data: {
          email
        },
        success: function(data){
          $("#msgsql").fadeIn().html(data);
        }
      });
    }
  });
});


//en click rest form et caché button modifier et afficher button ajouter
function ButtonAdd(){
  document.getElementById('form').reset();
  document.querySelector('#TitleModal').innerHTML="Add Instruments";
  document.querySelector('#editInst').style.display="none";
  document.querySelector('#saveInstrument').style.display="block";
}

//en click caché button ajoter et afficher button modifier
function ButtonUpdate(){
  document.querySelector('#TitleModal').innerHTML="Update Instruments";
  document.querySelector('#saveInstrument').style.display="none";
  document.querySelector('#editInst').style.display="block";

}


function returnInfo(id){
  let nameImg=document.getElementById(id).children[0].getAttribute('img')
  let image= document.getElementById(id).children[1].children[0].children[0].src;
  let title= document.getElementById(id).children[2].children[0].getAttribute('data');
  let types= document.getElementById(id).children[3].children[0].getAttribute('data');
  let Nametypes= document.getElementById(id).children[3].children[0].getAttribute('dataNameTypes');
  let quantite= document.getElementById(id).children[4].children[0].getAttribute('data');
  let prix= document.getElementById(id).children[5].children[0].getAttribute('data');

  //return image
  // const myFile = new File([nameImg],nameImg, {
  //   type: 'text/plain',
  //   lastModified: new Date(),
  // });
  // const dataTransfer = new DataTransfer();
  // dataTransfer.items.add(myFile);//your file(s) reference(s)
  // document.querySelector('#imagemodel').files = dataTransfer.files;

  // document.querySelector('#imagemodel').value = nameImg;
  document.querySelector('#titlemodel').value = title;
  document.querySelector('#Quantitemodel').value = quantite;
  document.querySelector('#Prixmodel').value = prix;
  document.querySelector('#typemodel').value = types;

  document.querySelector('#viewImage').src =image;
  document.querySelector('#viewTitle').innerText=title;
  document.querySelector('#viewTypes').innerText=Nametypes;
  document.querySelector('#viewQuantite').innerText=quantite;
  document.querySelector('#viewPrix').innerText=prix;
  
  document.querySelector('#idmodel').value = id;
}





