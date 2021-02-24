function nextSlide() {
	slideIndex++;
	showSlide(slideIndex, -1);
}

function prevSlide() {
	slideIndex--;
	showSlide(slideIndex, 1);
}

function showSlide(i, n) {
	var slides = document.getElementsByClassName("slide");
	var text = document.getElementsByClassName("text");
	if(i > slides.length - 1) { //если индекс больше кол-ва фото
		slideIndex = 0;			// вернуться к первому фото
		n = slides.length - 1;	//скрыть последнее
	}
	else if(i < 0) {			//если индекс отрицательный
		slideIndex = slides.length - 1;	//показать последнее фото
		n = -slideIndex;		//скрыть первое
	}
	else {
		slideIndex = i;
	}
	slides[slideIndex+n].style.display = "none";
	text[slideIndex+n].style.display = "none";
	slides[slideIndex].style.display = "block";
	text[slideIndex].style.display = "block";
}