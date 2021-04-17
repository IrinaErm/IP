
function calc() {
	var pairs = document.getElementById('mas').value.split('\n');
	var mas1 = document.getElementById("mas1").value.trim().replace(/\s+/g, " ").split(" ");
	var mas2 = document.getElementById("mas2").value.trim().replace(/\s+/g, " ").split(" ");
	var m1 = mas1.length;
	var m2 = mas2.length;

	var k = 0;
	var ti = -1;
	var tj = -1;
	var show = true;

	for (var i = 0; i < pairs.length; i++){
		pairs[i] = pairs[i].trim().replace(/\s+/g, " ").split(" ");
		if (pairs[i].length != 2) {
			document.getElementById('res').innerHTML = '<br> Неверный ввод пары в строке ';
			document.getElementById('res').innerHTML += (i + 1);
			show = false;
			break;
		}
		document.getElementById('res').innerHTML = "";
	}

	//repeat
	var mas1r = [];
	var mas2r = [];
	var notInMas = true;
	for(var i = 0; i < m1; i++) {
		for(var j = 0; j < mas1r.length; j++) {
			if(mas1r[j] == mas1[i]) {
				notInMas = false;				
			}				
		}
		if (notInMas) {
			mas1r[k] = mas1[i];
			k++;
		}
		else {
			notInMas = true;
		}
	}
	
	k = 0;
	notInMas = true;
	for(var i = 0; i < m2; i++) {
		for(var j = 0; j < mas2r.length; j++) {			
			if(mas2r[j] == mas2[i]) {
				notInMas = false;
			}
		}
		if (notInMas) {
			mas2r[k] = mas2[i];
			k++;
		}
		else {
			notInMas = true;
		}
	}
	
	m1 = mas1r.length;
	m2 = mas2r.length;
	
	var mas = [];
	for (var i = 0; i < m1; i++){
		mas[i] = [];
		for (var j = 0; j < m2; j++){
			mas[i][j] = 0;
		}
	}	
	if (show) {
	for (var i = 0; i < pairs.length; i++){
		ti = -1;
		tj = -1;
		for (var j = 0; j < 2; j++){
			if (j == 0) {
				for(var z = 0; z < m1; z++) {
					if(mas1r[z] == pairs[i][j]) {
						ti = z;
						break;
					}
				}
				
				if (ti == -1) {
					document.getElementById('res').innerHTML += '<br> Введенный элемент (';
					document.getElementById('res').innerHTML += (i+1);
					document.getElementById('res').innerHTML += " строка ";
					document.getElementById('res').innerHTML += (j+1);
					document.getElementById('res').innerHTML += " столбец) ";
					document.getElementById('res').innerHTML += 'не присутствует в первом множестве <br>';
					show = false;
					break;
				}
			}
			else if (j == 1) {
				for(var z = 0; z < m2; z++) {
					if(mas2r[z] == pairs[i][j]) {
						tj = z;
						break;
					}
				}
				if( tj == -1) {
					document.getElementById('res').innerHTML += '<br> Введенный элемент (';
					document.getElementById('res').innerHTML += (i+1);
					document.getElementById('res').innerHTML += " строка ";
					document.getElementById('res').innerHTML += (j+1);
					document.getElementById('res').innerHTML += " столбец) ";
					document.getElementById('res').innerHTML += 'не присутствует во втором множестве <br>';
					show = false;
					break;
				}
			}
		}
		
		mas[ti][tj] = 1;					
	}
	}

	if (show) {
	var con = true;
	var k;
	for (var i = 0; i < m1; i++){
		k = 0;
		for (var j = 0; j < m2; j++){
			if(mas[i][j] == 1) {
				k++;
			}
		}
		if (k != 1) {
			con = false;
			break;
		}
	}
	for (var i = 0; i < m2; i++){
		k = 0;
		for (var j = 0; j < m1; j++){
			if(mas[j][i] == 1) {
				k++;
			}
		}
		if (k > 1) {
			con = false;
			break;
		}
	}
	
	
		document.getElementById('res').innerHTML += '<br>';
		for (var i = 0; i < m1; i++){
			for (var j = 0; j < m2; j++){
				document.getElementById('res').innerHTML += mas[i][j];
			}	
			document.getElementById('res').innerHTML += '<br>';		
		}
		
		if(con) {
			document.getElementById('res').innerHTML += 'Отношение является функцией';
		}
		else {
			document.getElementById('res').innerHTML += 'Отношение не является функцией';
		}
	}	
}