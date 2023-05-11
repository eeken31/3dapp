// JavaScript Document
function getXMLHttp() {
	var xmlHttp
	try {
		xmlHttp = new XMLHttpRequest ();
	} catch (e) {
		try {
			xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try {
				xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e) {
				return false;
			}
		}
	}
	return xmlHttp;
}

//Make AJAX request to the server
var xmlHttp1 = getXMLHttp();
//stores newly generated gallery HTML code
var htmlCode1 = "";
//temporarily stores server response while code is generated
var response1;

$(document).ready(function() {
	// Set up the path to the PHP function that reads the image directory to find the thumbnail file names
	var send = "../application/view/hook1.php";
	console.log(send);
	// Open the connection to the web server
	xmlHttp1.open("GET", send, true);
	// Tell the server that the client has no outgoing message, i.e. we are sending nothing to the server
	xmlHttp1.send(null);
	// Check we get a valid server response
	xmlHttp1.onreadystatechange = function() {
		if(xmlHttp1.readyState == 4) {
			// Response handler code
			// alert(xmlHttp.responseText);
			response1 = xmlHttp1.responseText.split("~");
			// Loop round the response array
			for (var i=0;i<response1.length;i++) {
				// Handler to build the HTML string
				// Use this to provide a link to the image
				htmlCode1 += '<a href="'+ response1[i] + ' " data-fancybox data-caption="My X3D model render" > ';
				htmlCode1 += '<img class="card-img-top img-thumbnail" src="' + response1[i] + '"/>';
				htmlCode1 += '</a>';	
				console.log(response1[i]);		
			}
			// Return the HTML string to each of the 4 3D App pages
			document.getElementById('sprite_gallery').innerHTML = htmlCode1;
		}
	}
});