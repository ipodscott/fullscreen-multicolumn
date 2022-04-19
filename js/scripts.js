
function scrollDown(id){	
	document.getElementById(id).classList.add("show");
	document.querySelector(id).scrollIntoView({ 
	behavior: 'smooth' 
});
}

function hideLower(){
	document.querySelector('.lower.show').classList.remove("show");
}

function movePanels(id){
	document.querySelector('.lower.show').classList.remove("show");
	document.querySelector('.upper').classList.add("slide-up");
	document.getElementById(id).classList.add("show");
	document.querySelector('.menu-button').classList.add("show");
	
	document.querySelector(id).scrollIntoView({ 
		behavior: 'smooth' 
	});
}

function backToTop(){
	const list = document.querySelectorAll('.top-image');
	for (let topimage of list) {
	  topimage.scrollIntoView({
		behavior: 'smooth' 
	});}
}

function showPanels(){
	document.querySelector('.upper').classList.remove("slide-up");
	window.scroll({top: 0, left: 0, behavior: 'smooth'});
	document.querySelector('body').classList.add("no-scroll");
	document.querySelector('.menu-button').classList.remove("show");
	backToTop();
}


function scrollUp(id) {
  	document.getElementById(id).scrollIntoView({ 
	behavior: 'smooth' 
});
	
}




