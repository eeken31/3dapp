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
var xmlHttp2 = getXMLHttp();
//stores newly generated gallery HTML code
var htmlCode2 = "";
//temporarily stores server response while code is generated
var response2;

$(document).ready(function() {
	// Set up the path to the PHP function that reads the image directory to find the thumbnail file names
	var send = "../application/view/hook2.php";
	console.log(send);
	// Open the connection to the web server
	xmlHttp2.open("GET", send, true);
	// Tell the server that the client has no outgoing message, i.e. we are sending nothing to the server
	xmlHttp2.send(null);
	// Check we get a valid server response
	xmlHttp2.onreadystatechange = function() {
		if(xmlHttp2.readyState == 4) {
			// Response handler code
			// alert(xmlHttp.responseText);
			response2 = xmlHttp2.responseText.split("~");
			// Loop round the response array
			for (var i=0;i<response2.length;i++) {
				// Handler to build the HTML string
				// Use this to provide a link to the image
				htmlCode2 += '<a href="'+ response2[i] + ' " data-fancybox data-caption="My X3D model render" > ';
				htmlCode2 += '<img class="card-img-top img-thumbnail" src="' + response2[i] + '"/>';
				htmlCode2 += '</a>';	
				console.log(response2[i]);		
			}
			// Return the HTML string to each of the 4 3D App pages
			document.getElementById('dr_pepper_gallery').innerHTML = htmlCode2;
		}
	}
});