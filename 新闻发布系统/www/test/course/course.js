	function change(){
		var c = document.getElementById("code");
		c.src="code.php?"+Math.random();
	}

	function check(){
		var u = document.getElementById('userName').value;
		var p = document.getElementById('pwd').value;
		var v = document.getElementById('verity').value;
		if(u == ""){
			document.getElementById('userMsg').innerText = "不能为空!";
			return false;
		}
		if(p == ""){
			document.getElementById('pwdMsg').innerText = "不能为空!";
			return false;
		}
		if(v == ""){
			document.getElementById('verityMsg').innerText = "不能为空!";
			return false;
		}
		return true;
	}

	function checkUser(varName,varid){
		var u = document.getElementById(varName).value;
		if(u == ""){
			document.getElementById(varid).innerText = "不能为空!";
		}else{
			document.getElementById(varid).innerText = "";
		}
	}

	