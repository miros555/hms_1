//accordian js
//

var acc = document.getElementsByClassName("accordion");
var accbg = document.getElementsByClassName("acc-bg");	
var i;
var panels = document.getElementsByClassName('panel');

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    
	  setLeftImage(this);
	
	 var setClasses = !this.classList.contains('active');
        setClass(acc, 'active', 'remove');
        setClass(panels, 'show', 'remove');

        if (setClasses) {
            this.classList.toggle("active");
            this.nextElementSibling.classList.toggle("show");					   
        }
	  
	  
	
    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
	  
	 var setClasses2 = !this.parentElement.classList.contains('active-acc-bg');
        setClass(accbg, 'active-acc-bg', 'remove');
        

        if (setClasses2) {
            this.parentElement.classList.toggle("active-acc-bg");
            
        }
	
  });
	
}

function setLeftImage(btnCLicked) {
	/* Hide all images in left image panel and then show image
	 * with correct id. If image is missing in left panel
	 * image space will stay empty */
	var elements = document.getElementsByClassName('step-imgs');
	for (var i in elements) {
	  if (elements.hasOwnProperty(i)) {
		elements[i].style.display = "none";
	  }
	}
	
	let leftImageId = btnCLicked.id.split("-")[1];
	let leftEl = document.getElementById(leftImageId)
	if (!leftEl) {
		console.log("Missing img in left images panel. This may cause missing images in DOM");
		return;
	}
		
	leftEl.style.display = "block";
}


function setClass(els, className, fnName) {
    for (i = 0; i < els.length; i++) {
        els[i].classList[fnName](className);
    }
}

