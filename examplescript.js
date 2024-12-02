	/******* FUNCTIONS *******/

	//Example 2a function
	function changeColor(newColor) {

		//first get the element with id "example2a"
	    var exampleBox2a = document.getElementById("example2a");

	    //now change that element's text color to the color
	    //that was provided as a parameter (specified in the HTML)
    	exampleBox2a.style.color = newColor;
	}

	//Example 2b function
	function changeBackgroundColor(newColor) {

		//get the element with id "example2b"
	    var exampleBox2b = document.getElementById("example2b");

	    //change that element's background color
    	exampleBox2b.style.backgroundColor = newColor;
	}

	//Example 2c function
	function changeLink(newlink) {

		//get the element with id "link1" (which will get the <a> element)
	    var link1 = document.getElementById("link1");

	    //change that element's href attribute
    	link1.href = newlink;
	}

	//Example 2d function
	function change() {

		//get the element with id "example2d"
	    var example2d = document.getElementById("example2d");

	    //change that element's inner HTML, i.e. replace everything between
	    //its opening and closing tags
    	example2d.innerHTML = "New text appears!";
	}

	//Example 2e function
	function calculate() {
		//first get the element with id "example2e" (which will get the <span> element)
	    var numberElement = document.getElementById("number");

	    //then get that element's inner HTML (which is the String "15129")
	    var numberString = numberElement.innerHTML;

	    //convert that string to a number
    	number = parseInt(numberString);

    	//calculate the square root of that number
    	squareroot_of_number = Math.sqrt(number);

    	//display an alert containing this square root
    	alert(squareroot_of_number);
	}

	//Example 4 function
	function displayTheDate() {

		//get the current date
		var d = new Date();

		//alert the date
		alert("You clicked this on " + d);
	}

	//Example 5 function
	/*
		Notice the parameter "e". This parameter contains the
		event that triggered the call of the function. In this
		case, it contains the details of the key press, e.g.
		what the actual pressed key was.
	*/
	function displayPressedKeys(e){

		//get the character value of the actual key that was pressed
		var keyPressed=e.keyCode;

		//convert the character into a string
		var character=String.fromCharCode(keyPressed);

		//get the element you want to add this string to
		var outputelement = document.getElementById("output");

		//get that element's inner HTML string
		var currentoutput = outputelement.innerHTML;

		//add the string to the that current inner HTML string
		var newoutput = currentoutput + character;

		//replace the inner HTML with this new string
		outputelement.innerHTML = newoutput;
	}

	//Example 6 function
	function check() {

		//get the contents of the input box of example 6
		var example6Contents = document.getElementById("checkExample").value;

		if(example6Contents==""){
			alert("The text box is empty!");
		}
		else{
			alert("The text box is not empty, it contains the content: " + example6Contents);
		}


	}





	/******* EVENT LISTENERS  *******/
	//These listeners are added for examples 3,4, and 5,
	//which did not have any event handlers in the HTML.


	//Make sure the whole page is loaded before adding listeners.
	window.onload = function(){

		//Example 3 listener, added to the element with ID 'example3'
		//This type of listener is referred to as the "old" way in lecture slides
		var exampleBox3 = document.getElementById('example3');
		exampleBox3.onmouseover = function() {alert('hello')};
		exampleBox3.onmouseout = function() {alert('good bye')};

		//Example 4 listener, using the "addEventListener" approach
		var exampleBox4 = document.getElementById('example4');
		exampleBox4.addEventListener('click', displayTheDate);

		//Example 5 listener, also using the "addEventListener" approach
		var exampleinputbox = document.getElementById('keyExample');
		exampleinputbox.addEventListener('keydown', displayPressedKeys);

		//Example 6 listener, also using the "addEventListener" approach
		var example6Button = document.getElementById('example6Button');
		example6Button.addEventListener('click', check);

	}
