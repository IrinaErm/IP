function showUserForm() {
	document.getElementById("popup").style.display="block";
	
	document.getElementById("addbut").innerHTML = '<input type="submit" id="submit" value="Ок" onclick="addUser()"/>';
}

function closeForm() {
	document.getElementById('warn').innerHTML='';
	$('#UserForm > #fio').val('');
	$('#UserForm > #username').val('');
	$('#UserForm > #password').val('');
	$('#UserForm > #city').val('');
	$('#UserForm > #group').val('');
	
	document.getElementById("popup").style.display="none";
} 

function deleteUser(id) {
	$.ajax({
		type:"POST",
		url:"deleteUser",
		data:{
			'id':id,
		},
		success: function(response) {
			$("#container").load(" #container");                                                                                                 
		}
	});
}

function updateUser(id) {
	let get = true;
	
	$.ajax({
		type:"POST",
		url:"updateUser",
		data:{
			'id':id,
			'get': get
		},
		success: function(data) {
			var obj = JSON.parse(data);
			;
			$('#UserForm > #fio').val(obj.fio);
			$('#UserForm > #username').val(obj.login);
			$('#UserForm > #role').val(obj.role);
			$('#UserForm > #city').val(obj.city);
			$('#UserForm > #group').val(obj.studyGroup);  
			$('#UserForm > #id').val(obj.id);					
		}
	});
	
	showUserForm();
	document.getElementById("addbut").innerHTML = '<input type="submit" id="submitUpdate" value="Ред" onclick="update()"/>';			
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
			var role = $('#role').val();
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
					'role':role,
					'city':city,
					'group':group,
					'get': get
				},
				success: function(data) {
					console.log(data);
					if (data == "0") {
						document.getElementById('warn').innerHTML = "Введите ФИО пользователя.";
					}
					else if (data == "1") {
						document.getElementById('warn').innerHTML = "Введите логин пользователя.";	
					}
					if (data == "Success") {
						requestSent = false;
						document.getElementById('warn').innerHTML = "Данные обновлены!";
						$("#container").load(" #container");
					}							                               
				}
			});
		}
	});
}

function addUser() {
	var requestSent = false;
	
	$('#UserForm').on('submit', function(e){
		
		if(!requestSent) {
			requestSent = true;
			
			e.preventDefault();

			var fio = $('#fio').val();
			var username = $('#username').val();
			var password = $('#password').val();
			var role = $('#role').val();
			var city = $('#city').val();
			var group = $('#group').val();

			$.ajax({
				type:"POST",
				url:"addUser",
				data:{
					'fio':fio,
					'username':username,
					'password':password,
					'role':role,
					'city':city,
					'group':group
				},
				success: function(data) {
					if (data == 0) {
						document.getElementById('warn').innerHTML = "Введите ФИО пользователя.";								
					}
					else if (data == 1) {
						document.getElementById('warn').innerHTML = "Введите логин пользователя.";								
					}
					else if (data == 2) {
						document.getElementById('warn').innerHTML = "Введите пароль пользователя.";	
					}
					else {
						requestSent = false;
						document.getElementById('warn').innerHTML = "Пользователь добавлен!";
						$("#container").load(" #container");
					}							                               
				}
			});
		}
	});
}