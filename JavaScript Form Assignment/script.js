function checkSimilarity() {

		//get the contents of the input box of the login
		var label = document.getElementById("email").value;
    var label2 = document.getElementById("confirm").value;

		if(label==label2){
			alert("The emails are the same.");
		}
		else{
			alert("The emails are not the same. ");
		}


	}


function validate(){
  var formText= document.querySelectorAll("input").value;
  if(formText ===""){
			alert("The text box is empty!");
		}
 var choice = document.getElementById("radioHead").checked;
 if (choice === false) {
     alert("No radio button has been clicked!");
 }

 var check=document.getElementById("checkBx").checked;
  if(check===false){
     alert("No checkbox has been checked!");
     }
}

function changeColor(newColor) {

		//first get the element with id "example2a"
	    var question1a = document.getElementById("question1");

	    //now change that element's text color to the color
	    //that was provided as a parameter (specified in the HTML)
    	question1a.style.color = newColor;
	}