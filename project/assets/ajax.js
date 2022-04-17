function newcar(){
	let role = document.getElementById('r').value;
	let http = new XMLHttpRequest();
	http.open('GET', '../views/product.php', true);
	http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	http.send('uname='+role);
	http.onreadystatechange = function(){
		
		if(this.readyState == 4 && this.status == 200){
			document.getElementById('view').innerHTML= this.responseText;
		}
	}
}



function product(){
	let role = document.getElementById('r').value;
	let http = new XMLHttpRequest();
	http.open('GET', '../views/a_product.php', true);
	http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	http.send('uname='+role);
	http.onreadystatechange = function(){
		
		if(this.readyState == 4 && this.status == 200){
			document.getElementById('view').innerHTML= this.responseText;
		}
	}
}



function usedcar(){
	let role = document.getElementById('r').value;
	let http = new XMLHttpRequest();
	http.open('GET', '../views/a_usedcar.php', true);
	http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	http.send('uname='+role);
	http.onreadystatechange = function(){
		
		if(this.readyState == 4 && this.status == 200){
			document.getElementById('view').innerHTML= this.responseText;
		}
	}
}


function addcar(){
	let role = document.getElementById('r').value;
	let http = new XMLHttpRequest();
	http.open('GET', '../views/a_addcar.php', true);
	http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	http.send('uname='+role);
	http.onreadystatechange = function(){
		
		if(this.readyState == 4 && this.status == 200){
			document.getElementById('view').innerHTML= this.responseText;
		}
	}
}


function customerservice(){
	let role = document.getElementById('r').value;
	let http = new XMLHttpRequest();
	http.open('GET', '../views/a_customerservice.php', true);
	http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	http.send('uname='+role);
	http.onreadystatechange = function(){
		
		if(this.readyState == 4 && this.status == 200){
			document.getElementById('view').innerHTML= this.responseText;
		}
	}
}



function description(){
	let role = document.getElementById('r').value;
	let http = new XMLHttpRequest();
	http.open('GET', '../views/a_dis.php', true);
	http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	http.send('uname='+role);
	http.onreadystatechange = function(){
		
		if(this.readyState == 4 && this.status == 200){
			document.getElementById('view').innerHTML= this.responseText;
		}
	}
}


function order(){
	let role = document.getElementById('r').value;
	let http = new XMLHttpRequest();
	http.open('GET', '../views/a_o_car.php', true);
	http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	http.send('uname='+role);
	http.onreadystatechange = function(){
		
		if(this.readyState == 4 && this.status == 200){
			document.getElementById('view').innerHTML= this.responseText;
		}
	}
}