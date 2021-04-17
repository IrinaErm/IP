function openAutoForm() {
	document.getElementById("popupAuto").style.display = "block";
	document.getElementById("body").style.overflow = "hidden";
}

function closeAutoForm() {
	document.getElementById("popupAuto").style.display = "none";
	document.getElementById("body").style.overflow = "auto";
}

function logout() {
	$("#logoutForm").submit();
}

function openCabinet() {
	document.getElementById("popup").style.display="block";	
}

function closeCabinet() {
	document.getElementById("popup").style.display="none";	
}

function updateUser() {
	let get = true;
	let id = $('#id').val();

	$.ajax({
		type:"POST",
		url:"updateUser",
		data:{
			'id':id,
			'get': get
		},
		success: function(data) {
			var obj = JSON.parse(data);
			
			$('#UserForm > #fio').val(obj.fio);
			$('#UserForm > #username').val(obj.login);
			$('#UserForm > #city').val(obj.city);
			$('#UserForm > #group').val(obj.studyGroup);  
			$('#UserForm > #id').val(obj.id);					
		}
	});
	
	openCabinet();			
}  

function update() {
	let requestSent = false;
	let get = false;
	
	$('#UserForm').on('submit', function(e){
		if(!requestSent) {
			requestSent = true;
			
			e.preventDefault();

			var id = $('#id').val();
			var fio = $('#fio').val();
			var username = $('#username').val();
			var password = $('#password').val();
			var city = $('#city').val();
			var group = $('#group').val();

			$.ajax({
				type:"POST",
				url:"updateUser",
				data:{
					'id':id,
					'fio':fio,
					'username':username,
					'password':password,
					'city':city,
					'group':group,
					'role':'',
					'get': get
				},
				success: function(data) {
					console.log(data);
					if (data == "0") {
						document.getElementById('warn').innerHTML = "Введите ФИО.";
					}
					else if (data == "1") {
						document.getElementById('warn').innerHTML = "Введите логин.";	
					}
					if (data == "Success") {
						requestSent = false;
						document.getElementById('warn').innerHTML = "Данные обновлены!";
					}							                               
				}
			});
		}
	});
}