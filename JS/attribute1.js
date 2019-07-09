


	var e = document.getElementById("switcher");
	var form = document.getElementById("dynform");
	
	var br = document.createElement("br");
	var submit = document.createElement("input");
		submit.setAttribute("type","submit");
		submit.setAttribute("value","Add Product");
		submit.setAttribute("id","dyninput");

	form.appendChild(br);
	Disc();


e.addEventListener("change", function(){

	var value = e.selectedIndex;

	if (value==0) {	
		Clear();
		Disc();
		
	}
	else if (value==1) {
		Clear();
		Book();
		
		}
	else if (value==2) {
		Clear();
		Furniture();
		
	}
});


	
function Clear(){

	do {form.removeChild(document.getElementById("dyninput"));
	}
	while (form.dyninput);

}


function Book() {

var label = document.createElement("Label");
    label.htmlFor = "book";
    label.innerHTML= "Weight";
    label.id = "dyninput"

var book = document.createElement("input");
	book.setAttribute("type", "text");
	book.setAttribute("placeholder", "weight");
	book.setAttribute("name", "book");
	book.setAttribute("id", "dyninput");
	book.setAttribute("required", "required");
	book.setAttribute("onkeypress", "javascript:return isNumber(event)");

var p = document.createElement("p");
	p.innerHTML = "Please, enter the weight of a book in Kg!";
	p.id = "dyninput";

	form.appendChild(p);
	form.appendChild(label);
	form.appendChild(book);
	form.appendChild(submit);
	

	
}

function Disc() {

var label = document.createElement("Label");
    label.htmlFor = "disc";
    label.innerHTML="Size";
    label.id = "dyninput"
                    

var disc = document.createElement("input");
	disc.setAttribute("type", "text");
	disc.setAttribute("placeholder", "Disc");
	disc.setAttribute("name", "disc");
	disc.setAttribute("id", "dyninput");
	disc.setAttribute("required", "required");
	disc.setAttribute("onkeypress", "javascript:return isNumber(event)");

var p = document.createElement("p");
	p.innerHTML = "Please, enter the amount of memory in Gb!";

	p.id = "dyninput";
	form.appendChild(p);
	form.appendChild(label);
	form.appendChild(disc);
	form.appendChild(submit);
	
	
	

}

function Furniture() {

	form.appendChild(br);
var labelH = document.createElement("Label");
    labelH.htmlFor = "height";
    labelH.innerHTML="Height";
    labelH.id = "dyninput";

var labelW= document.createElement("Label");
    labelW.htmlFor = "width";
    labelW.innerHTML="Width";
    labelW.id = "dyninput";

var labelL = document.createElement("Label");
    labelL.htmlFor = "length";
    labelL.innerHTML="Lenght";
    labelL.id = "dyninput";


var height = document.createElement("input");
	height.setAttribute("type", "text");
	height.setAttribute("placeholder", "Height");
	height.setAttribute("name", "height");
	height.setAttribute("id", "dyninput");
	height.setAttribute("required", "required");
	height.setAttribute("onkeypress", "javascript:return isNumber(event)");

var width = document.createElement("input");
	width.setAttribute("type", "text");
	width.setAttribute("placeholder", "Width");
	width.setAttribute("name", "width");
	width.setAttribute("id", "dyninput");
	width.setAttribute("required","required");
	width.setAttribute("onkeypress", "javascript:return isNumber(event)");

var length = document.createElement("input");
	length.setAttribute("type", "text");
	length.setAttribute("placeholder", "Lenght");
	length.setAttribute("name", "length");
	length.setAttribute("id", "dyninput");
	length.setAttribute("required", "required");
	length.setAttribute("onkeypress", "javascript:return isNumber(event)");

var p = document.createElement("p");
	p.innerHTML = "Please, enter the dimensions";
	p.id = "dyninput";

	form.appendChild(p);

	form.appendChild(labelH);
	form.appendChild(height);

	form.appendChild(labelW);
	form.appendChild(width);
	
	form.appendChild(labelL);
	form.appendChild(length);

	form.appendChild(submit);

	
	

}


	


