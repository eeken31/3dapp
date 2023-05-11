// JavaScript Document
var counter = 0;
$(document).ready(function() {
	
	selectPage();
	
});

function selectPage() {

	$('#home').show();
	$('#about').hide();
	$('#models').hide();
	$('#interaction').hide();
	$('#cokeDescription').hide();
	$('#spriteDescription').hide(); 
	$('#pepperDescription').hide(); 


	$('#navHome').click(function(){
		$('#home').show();
		$('#about').hide();
		$('#models').hide();
		$('#interaction').hide();
		$('#cokeDescription').hide();
		$('#spriteDescription').hide(); 
		$('#pepperDescription').hide(); 	  
	});

	$('#navLogo').click(function(){
		$('#home').show();
		$('#about').hide();
		$('#models').hide();
		$('#interaction').hide();
		$('#cokeDescription').hide();
		$('#spriteDescription').hide(); 
		$('#pepperDescription').hide(); 	  
	});

	$('#navAbout').click(function(){
		$('#home').hide();
		$('#about').show();
		$('#models').hide();
		$('#interaction').hide();
		$('#cokeDescription').hide();
		$('#spriteDescription').hide(); 
		$('#pepperDescription').hide(); 	  
	});

	$('#navModels').click(function(){
		$('#home').hide();
		$('#about').hide();
		$('#models').show();
		$('#interaction').show(); 
		$('#cokeDescription').show();
		$('#spriteDescription').hide(); 
		$('#pepperDescription').hide();
		$("#x3dModelTitle_coke").show();
		$("#x3dModelTitle_sprite").hide();
		$("#x3dModelTitle_pepper").hide();
		$("#x3dCreationMethod_coke").show();
		$("#x3dCreationMethod_sprite").hide();
		$("#x3dCreationMethod_pepper").hide(); 
		$('#galleryCocaColaDescription').show();
		$('#gallerySpriteDescription').hide(); 
		$('#galleryDrPepperDescription').hide();
	});
}

function cokeDescription() {
	$("button").click(function(){
		
		$("#cokeDescription").show();
        $("#spriteDescription").hide();
		$("#pepperDescription").hide();
		
		$("#x3dModelTitle_coke").show();
		$("#x3dModelTitle_sprite").hide();
		$("#x3dModelTitle_pepper").hide();

		$("#x3dCreationMethod_coke").show();
		$("#x3dCreationMethod_sprite").hide();
		$("#x3dCreationMethod_pepper").hide();

		$('#galleryCocaColaDescription').show();
		$('#gallerySpriteDescription').hide(); 
		$('#galleryDrPepperDescription').hide();

    });
}

function spriteDescription() {
    $("button").click(function(){

        $("#cokeDescription").hide();
        $("#spriteDescription").show();
		$("#pepperDescription").hide();
		
		$("#x3dModelTitle_coke").hide();
		$("#x3dModelTitle_sprite").show();
		$("#x3dModelTitle_pepper").hide();

		$("#x3dCreationMethod_coke").hide();
		$("#x3dCreationMethod_sprite").show();
		$("#x3dCreationMethod_pepper").hide();

		$('#galleryCocaColaDescription').hide();
		$('#gallerySpriteDescription').show(); 
		$('#galleryDrPepperDescription').hide();
    }); 
}

function pepperDescription() {
    $("button").click(function(){

        $("#cokeDescription").hide();
        $("#spriteDescription").hide();
		$("#pepperDescription").show();
		
		$("#x3dModelTitle_coke").hide();
		$("#x3dModelTitle_sprite").hide();
		$("#x3dModelTitle_pepper").show();

		$("#x3dCreationMethod_coke").hide();
		$("#x3dCreationMethod_sprite").hide();
		$("#x3dCreationMethod_pepper").show();

		$('#galleryCocaColaDescription').hide();
		$('#gallerySpriteDescription').hide(); 
		$('#galleryDrPepperDescription').show();
    }); 
}

function dark() {
	document.getElementById('bodyColor').style.backgroundColor = "black";
			var elements = document.getElementsByClassName('card');
			var x = document.getElementsByClassName('card-header');
					for(var i = 0; i < elements.length; i++){
						elements[i].style.backgroundColor = "black";
						elements[i].style.color = "white";
						elements[i].style.borderColor = "white";
					}
					for(var j = 0; j < x.length; j++){
						x[j].style.backgroundColor = "#2d2d30";

					}
			
			
			
		}

function light() {
	document.getElementById('bodyColor').style.backgroundColor = "white";
			var elements = document.getElementsByClassName('card'); 
			var x = document.getElementsByClassName('card-header');
			for(var i = 0; i < elements.length; i++){
				elements[i].style.backgroundColor = "white";
				elements[i].style.color = "black";
				elements[i].style.borderColor = "black";
			}
			for(var j = 0; j < x.length; j++){
				x[j].style.backgroundColor = "#00000008";
				
			}
			

		
	}
