function check(){
	var p = document.getElementById("pwd").value;
	var c = document.getElementById("cfm").value;
	var err = document.getElementById("msgErr");
	if(p != c){
		err.innerText = "输入的密码不一致,请核对后重新输入!";
		return false;
	}else{
		return true;
	}
}

function del(id,num=1){
	if(confirm("确定删除数据吗?")){
		if(num == 1){
			window.location = "mdelete.php?id="+ id;
		}else if(num == 2){
			window.location = "ndelete.php?id="+ id;
		}
		
	}else{
		return false;
	}

}