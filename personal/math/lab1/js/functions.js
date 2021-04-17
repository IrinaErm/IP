function validate() {
	var mas1 = document.getElementById("mas1").value
	.replace(/\s+/g, " ").split(" ");
	var mas2 = document.getElementById("mas2").value
	.replace(/\s+/g, " ").split(" ");

	for(var i = 0; i < mas1.length; i++) {
		if (mas1[i].length > 4 || mas1[i].length < 4) {
			alert("Исправьте " + Number(i + 1) + " элемент в 1 множестве");
			return false;
		}
		if(!((mas1[i][0] >= 0 && mas1[i][0] <= 9) 
		&& (mas1[i][1] >= 0 && mas1[i][1] <= 9) 
		&& (mas1[i][2] % 2 != 0) 
		&& ((mas1[i][3] >= 'a' && mas1[i][3] <= 'z') || (mas1[i][3] >= 'а' && mas1[i][3] <= 'я')))) {
			alert("Исправьте " + Number(i + 1) + " элемент в 1 множестве");
			return false;
		}
	}

	for(var i = 0; i < mas2.length; i++) {
		if (mas2[i].length > 4 || mas2[i].length < 4) {
			alert("Исправьте " + Number(i + 1) + " элемент во 2 множестве");
			return false;
		}
		if(!((mas2[i][0] >= 0 && mas2[i][0] <= 9) 
		&& (mas2[i][1] >= 0 && mas2[i][1] <= 9) 
		&& (mas2[i][2] % 2 != 0) 
		&& ((mas2[i][3] >= 'a' && mas2[i][3] <= 'z') || (mas2[i][3] >= 'а' && mas2[i][3] <= 'я')))) {
			alert("Исправьте " + Number(i + 1) + " элемент во 2 множестве");
			return false;
		}
	}
	
	return true;
}

function calcUnion() {
	if (validate()) {
		var mas1 = document.getElementById("mas1").value.replace(/\s+/g, " ").split(" ");
		var mas2 = document.getElementById("mas2").value.replace(/\s+/g, " ").split(" ");
		var mas = [];

		var k = 0;
		var notInMas = true;
		for(var i = 0; i < mas1.length; i++) {
			for(var j = 0; j < mas.length; j++) {
				if(mas[j] == mas1[i]) {
					notInMas = false;				
				}				
			}
			if (notInMas) {
				mas[k] = mas1[i];
				k++;
			}
			else {
				notInMas = true;
			}
		}

		notInMas = true;
		for(var i = 0; i < mas2.length; i++) {
			for(var j = 0; j < mas.length; j++) {			
				if(mas[j] == mas2[i]) {
					notInMas = false;
				}
			}
			if (notInMas) {
				mas[k] = mas2[i];
				k++;
			}
			else {
				notInMas = true;
			}
		}

		document.getElementById("union").innerHTML = mas;
	}
	
}

function calcIntersection() {
	if (validate()) {
		var mas1 = document.getElementById("mas1").value.replace(/\s+/g, " ").split(" ");
		var mas2 = document.getElementById("mas2").value.replace(/\s+/g, " ").split(" ");
		var mas = [];
		
		var k = 0;
		var inMas = false;
		var notInMas = true;
		for(var i = 0; i < mas1.length; i++) {
			for(var j = 0; j < mas2.length; j++) {			
				if(mas1[i] == mas2[j]) {
					inMas = true;
				}
			}
			if (inMas) {
				for(var x = 0; x < mas.length; x++) {
					if(mas[x] == mas1[i]) {
						notInMas = false;				
					}
				}
				if (notInMas) {
					mas[k] = mas1[i];
					k++;					
				}
				else {
					notInMas = true;
				}
				inMas = false;
			}
		}

		document.getElementById("intersection").innerHTML = mas;
	}
}

function calcDifference() {
	if (validate()) {
		var mas1 = document.getElementById("mas1").value.replace(/\s+/g, " ").split(" ");
		var mas2 = document.getElementById("mas2").value.replace(/\s+/g, " ").split(" ");
		var mas = [];
		
		var k = 0;
		var inMas2 = false;
		var notInMas = true;
		for(var i = 0; i < mas1.length; i++) {
			for(var j = 0; j < mas2.length; j++) {			
				if(mas1[i] == mas2[j]) {
					inMas2 = true;
				}
			}
			if (!inMas2) {
				for(var x = 0; x < mas.length; x++) {
					if(mas[x] == mas1[i]) {
						notInMas = false;				
					}
				}
				if (notInMas) {
					mas[k] = mas1[i];
					k++;
				}
				else {
					notInMas = true;
				}
			}
			else {
				inMas2 = false;
			}
		}

		document.getElementById("difference").innerHTML = mas;
	}
}

function calcSymmDifference() {
	if (validate()) {
		var mas1 = document.getElementById("mas1").value.replace(/\s+/g, " ").split(" ");
		var mas2 = document.getElementById("mas2").value.replace(/\s+/g, " ").split(" ");
		var masIntsn = [];
		var mas = [];
		
		var k = 0;
		var inMas = false;
		var notInMas = true;
		for(var i = 0; i < mas1.length; i++) {
			for(var j = 0; j < mas2.length; j++) {			
				if(mas1[i] == mas2[j]) {
					inMas = true;
				}
			}
			if (inMas) {
				masIntsn[k] = mas1[i];
				k++;
				inMas = false;
			}
		}
		
		k = 0;
		for(var i = 0; i < mas1.length; i++) {
			for(var j = 0; j < masIntsn.length; j++) {			
				if(mas1[i] == masIntsn[j]) {
					inMas = true;
				}
			}
			if (!inMas) {
				for(var x = 0; x < mas.length; x++) {
					if(mas[x] == mas1[i]) {
						notInMas = false;				
					}
				}
				if (notInMas) {
					mas[k] = mas1[i];
				k++;
				}
				else {
					notInMas = true;
				}					
			}
			else {
				inMas = false;
			}
		}
		
		for(var i = 0; i < mas2.length; i++) {
			for(var j = 0; j < masIntsn.length; j++) {			
				if(mas2[i] == masIntsn[j]) {
					inMas = true;
				}
			}
			if (!inMas) {
				for(var x = 0; x < mas.length; x++) {
					if(mas[x] == mas2[i]) {
						notInMas = false;				
					}
				}
				if (notInMas) {
					mas[k] = mas2[i];
				k++;
				}
				else {
					notInMas = true;
				}					
			}
			else {
				inMas = false;
			}
		}
		
		document.getElementById("symmDifference").innerHTML = mas;
	}
}