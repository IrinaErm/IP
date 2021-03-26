/**
Кол-во фото
@const */
const IMGS = 5;
/**
Кол-во divов для анимации
@const */
const DIVS = 20;
/**
Задержка анимации
@const */
const DELAY = 40;
/**@type {number} номер показываемого фото*/
var slideIndex = 0;
/**@type {number} номер последнего показанного фото*/
var lastSlide = 5;
/**@type {number} номер текущего фото в полосе прокрутки*/
var miniSlideIndex = 1;
/**@type {number} вид анимации появления фото*/
var direct = 0;
/**@type {boolean}направление появления фото*/
var hide = true;


function createDivs() {
	for(var i = 0; i < DIVS; i++) {
		var html = "<div class='img' id='img'></div>";
		var img = $(html);
		img.css("background-position","-"+(1+i)*500/DIVS+"px 0px");
		img.css("display","inline-block");
		img.css("left",5*i+"%");
		img.appendTo(".divs");
	}
}

/** @param {number} slideIndex номер фото для показа*/
function hideDivs(slideIndex) {
	var s = document.getElementsByClassName("img");
		
	var j = 1;
	if (direct < 0) {
		for(let i = slideIndex*DIVS + DIVS - 1; i >= slideIndex*DIVS; i--) {
			j++;
			setTimeout(function() {
				$(s[i]).css('display', 'none');
				
			}, DELAY*j);
		}
	}
	if (direct >= 0) {
		for(let i = slideIndex*DIVS; i < slideIndex*DIVS + DIVS; i++) {
			j++;
			setTimeout(function() {
				$(s[i]).css('display', 'none');
				
			}, DELAY*j);
		}
	}
	
}

/** @param {number} slideIndex номер фото для показа*/
function hideDivsColumns(slideIndex) {
	var s = document.getElementsByClassName("img");
	
	let j = 1;
	for(let i = slideIndex*DIVS; i < slideIndex*DIVS + DIVS; i++) {
		$(s[i]).css('border-radius', '0 0 50px 50px');
		$(document).ready(function(){
			if (i % 3 == 0) {
				$(s[i]).animate({height:"0px",opacity:"1"},1000 + 50*(i/3));
			}
			else if (i % 5 == 0) {
				$(s[i]).animate({height:"0px",opacity:"1"},1250 - 30*(i%3));
			}
			else if (i % 4 == 0) {
				$(s[i]).animate({height:"0px",opacity:"1"},1250 - 25*(i%5));
			}
			else {
				$(s[i]).animate({height:"0px",opacity:"1"},1300 - 25*(i/3));
			}
		});			
	}
}

function showDivs() {
	var s = document.getElementsByClassName("img");
		
	for(var i = slideIndex*DIVS; i < slideIndex*DIVS + DIVS; i++) {
		$(s[i]).css('display', 'inline-block');
		$(s[i]).css('height', '60vh');
		$(s[i]).css('border-radius', '0 0 0px 0px');
	}	
}

/** @param {number} slideIndex номер текущего фото для показа*/
/** @param {number} lastSlide номер предыдщуего фото*/
function showSlide(slideIndex, lastSlide) {	
	var slides = document.getElementsByClassName("slide");
	var text = document.getElementsByClassName("text");
	var columns = document.getElementsByClassName("column");

	slides[lastSlide].style.display = "none";
	text[lastSlide].style.display = "none";		
	
	slides[slideIndex].style.display = "block";
	text[slideIndex].style.display = "block";
	columns[slideIndex].className = "column act";
	columns[lastSlide].className = "column";
	
	if(hide) {
		hideDivs(slideIndex);
	}
	else {
		hideDivsColumns(slideIndex);
		hide = true;
	}
	
	showMiniSlide(slideIndex);
}

/** @param {number} n 1/-1 вправо/влево*/
function nextSlide(n) {
	if (lastSlide == 5) {
		lastSlide = 4;
	}
	else {
		lastSlide = slideIndex;
	}		
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

/** @param {number} n номер фото из полосы покрутки*/
function tapSlide(n) {
	lastSlide = slideIndex;
	slideIndex = n;
	direct = n;
	hide = false;
	
	showDivs();
	showSlide(slideIndex, lastSlide);
}

/** @param {number} n номер фото для показа*/
function showMiniSlide(n) {	
	var columns = document.getElementsByClassName("column");
	
	for(var i = 0; i < columns.length; i++) {
		columns[i].style.display = "none";
	}
		
	miniSlideIndex = n;

	if(miniSlideIndex-1 < 0) {
		miniSlideIndex = 1;
	}
	if(miniSlideIndex > IMGS) {
		miniSlideIndex = 1;
	}
	if(miniSlideIndex == IMGS-1) {
		miniSlideIndex = IMGS-2;
	}
	columns[miniSlideIndex-1].style.display = "inline-block";
	columns[miniSlideIndex].style.display = "inline-block";
	columns[miniSlideIndex+1].style.display = "inline-block";	
}

/** @param {number} n 1/-1 вправо/влево*/
function nextMiniSlide(n) {	
	var columns = document.getElementsByClassName("column");
	
	for(var i = 0; i < columns.length; i++) {
		columns[i].style.display = "none";
	}
		
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
