
var form = document.getElementById("form");
var title = document.getElementById("title");
var content = document.getElementById("content");

function ClearForm(){
  var con = confirm("Are you sure you want to reset?");
  if(con){ //Used an if and else to confirm if the user wants to go throught with it or not
      form.reset(); //Selects the DOM element with the right id, and clears all form elements
  }
  else{
    return false;
  }
}


function AddPostFormEmpty(event){
  if(title.value == "" || content.value == ""){ //If either title or content empty, prevent submit from working and display warning error
      event.preventDefault();
      window.alert("Required fields not filled out");

      //Changing style to indicate empty fields
      if(title.value == ""){
        title.style.border = "1pt solid #ef233cff";
        title.style.boxShadow = "-1px 0px 11px #ff082d";
      }

      if(content.value == ""){
        content.style.border = "1pt solid #ef233cff";
        content.style.boxShadow = "-1px 0px 11px #ff082d";
      }
    }
  }


  function previewEntry(){
    var title = document.getElementById("title");
    var content = document.getElementById("content");

    document.getElementById("previewTitle").innerHTML = title.value;
    document.getElementById("previewContent").innerHTML = content.value;
    var today = new Date();
    var previewDate = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
    var previewTime = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
    var previewDateTime = previewDate+' '+previewTime;
    document.getElementById("previewDate").innerHTML = "<i class='fas fa-clock' aria-hidden='true'></i> " + previewDateTime;

    document.getElementById("previewDate").style.padding = "10px";
    var previewForm = document.getElementById("previewForm");

    previewFormTitle.style.display = "block";
    previewForm.style.display = "block";
  }
