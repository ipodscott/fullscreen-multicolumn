function scrollDown(id){	
	document.getElementById(id).classList.add("show");
	document.getElementById(id).scrollIntoView({ 
	behavior: 'smooth' 
}).stop();
}

function hideLower(){
	document.querySelector('.lower.show').classList.remove("show");
}

function scrollUp(id) {
  window.scroll({top: 0, left: 0, behavior: 'smooth'});
	
	setTimeout(function(){hideLower();},500);
}




