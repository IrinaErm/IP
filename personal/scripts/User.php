<?php
	require_once 'db.php';
	/**
		@return StdObject объект бд
	*/
	function getUsers() {
		$obj = DB::query("SELECT * from users;"); 

		return $obj;
	}
	
	/**
		@return boolean успешность запроса
	*/
	function getRoles() {
		$obj = DB::query("SELECT DISTINCT role as r from users;"); 

		return $obj;
	}
	
	/**
		@param $login логин
		@param $pass пароль
		@return StdObject объект бд
	*/
	function getUser($login, $pass) {
		$obj = DB::query("select * from users where login='$login' and password=md5('$pass');");
		$result = DB::fetch_object($obj);
		
		return $result;
	}
	
	/**
		@param $id id пользователя
		@return StdObject объект бд
	*/
	function getUserById($id) {
		$obj = DB::query("select * from users where id=$id;");
		$result = DB::fetch_object($obj);
		
		return $result;
	}
	
	/**
		@param $fio ФИО пользователя
		@param $login логин пользователя
		@param $pass пароль пользователя
		@param $role роль пользователя
		@param $city город пользователя
		@param $group группа пользователя
		@return void
	*/
	function addUser($fio, $login, $pass, $role, $city, $group) {
		$result = DB::query("insert into users (fio, login, password, role, city, studyGroup) values
			('$fio','$login',md5('$pass'),'$role','$city','$group');");
		//return $result;
	}
	
	/**
		@param $fio ФИО пользователя
		@param $login логин пользователя
		@param $pass пароль пользователя
		@param $role роль пользователя
		@param $city город пользователя
		@param $group группа пользователя
		@return boolean
	*/
	function updateUser($id, $fio, $login, $pass, $role, $city, $group) {
		$result = false;
		if($pass != "" && $role != "") {
			$result = DB::query("update users set fio='$fio', login='$login', 
			password=md5('$pass'), role='$role', city='$city', studyGroup='$group' where id=$id;");
		}
		else if($role == "" && $pass != "") {
			$result = DB::query("update users set fio='$fio', login='$login', 
			password=md5('$pass'), city='$city', studyGroup='$group' where id=$id;");
		}
		else if($role != "" && $pass == "") {
			$result = DB::query("update users set fio='$fio', login='$login', 
			role='$role', city='$city', studyGroup='$group' where id=$id;");
		}
		else {
			$result = DB::query("update users set fio='$fio', login='$login', 
			city='$city', studyGroup='$group' where id=$id;");
		}
		
		return $result;
	}
	
	/**
		@param $id id пользователя
		@return boolean
	*/
	function deleteUser($id) {
		$result = DB::query("delete from users where id='$id';");
		return $result;
	}
	
	/**
		@param $login логин пользователя
		@param $pass пароль пользователя
		@return boolean
	*/
	function checkUser($login, $pass) {
		$result = DB::query("select * from users where login='$login' and password=md5('$pass');");
		return $result;
	}
	
	/**
		@return StdObject объект бд
	*/
	function countUsers() {
        $result = DB::query("SELECT COUNT(*) as count FROM users;");
		$obj = DB::fetch_object($result);
        return $obj->count;   
    }
?>