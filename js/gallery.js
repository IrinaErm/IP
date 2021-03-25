const IMGS = 5;
const DIVS = 20;
const DELAY = 40;
var slideIndex = 0;
var lastSlide = 5;
var miniSlideIndex = 1;
var direct = 0;


function createDivs() {
	for(var i = 1; i <= DIVS; i++) {
		var html = "<div class='img' id='img'></div>";
		var img = $(html);
		img.css("background-position","-"+i*500/DIVS+"px 0px");
		img.css("display","inline-block");
		img.appendTo(".divs");
	}
}

function hideDivs(slideIndex) {
	var s = document.getElementsByClassName("img");
		
	var j = 1;
	for(let i = slideIndex*DIVS; i < slideIndex*DIVS + DIVS; i++) {
		j++;
		setTimeout(function() {
			$(s[i]).css('display', 'none');
			
		}, DELAY*j);
	}
}

function showDivs() {
	var s = document.getElementsByClassName("img");
		
	for(var i = slideIndex*DIVS; i < slideIndex*DIVS + DIVS; i++) {
		$(s[i]).css('display', 'inline-block');
	}	
}

function showSlide(slideIndex, lastSlide) {	
	var slides = document.getElementsByClassName("slide");
	var text = document.getElementsByClassName("text");
	//var columns = document.getElementsByClassName("column");

	slides[lastSlide].style.display = "none";
	text[lastSlide].style.display = "none";		
	
	slides[slideIndex].style.display = "block";
	text[slideIndex].style.display = "block";
	//columns[slideIndex].querySelector("img").style.opacity = "1";
	//columns[slideIndex].querySelector("img").style.height = "120px";
	//columns[lastSlide].querySelector("img").style.opacity = "0.6";
	//columns[lastSlide].querySelector("img").style.height = "100px";
	
	hideDivs(slideIndex);
}

function nextSlide(n) {
	lastSlide = slideIndex;	
	slideIndex += n;
	direct = n;
	if(slideIndex < 0) {	
		slideIndex = IMGS-1;	
	}
	if(slideIndex >= IMGS) {
		slideIndex = 0;
	}
	showDivs();
	showSlide(slideIndex, lastSlide);
}

function tapSlide(n) {
	lastSlide = slideIndex;
	slideIndex = n;
	direct = n;
	
	showDivs();
	showSlide(slideIndex, lastSlide);
}

function nextMiniSlide(n) {	
	var columns = document.getElementsByClassName("column");

	columns[miniSlideIndex-1].style.display = "none";
	columns[miniSlideIndex].style.display = "none";
	columns[miniSlideIndex+1].style.display = "none";
	miniSlideIndex += n;
	if(miniSlideIndex-1 < 0) {	
		miniSlideIndex = IMGS-2;	
	}
	if(miniSlideIndex+1 >= IMGS) {
		miniSlideIndex = 1;
	}
	columns[miniSlideIndex-1].style.display = "inline-block";
	columns[miniSlideIndex].style.display = "inline-block";
	columns[miniSlideIndex+1].style.display = "inline-block";
}
