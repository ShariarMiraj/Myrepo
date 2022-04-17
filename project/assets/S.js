function reg()
{
       
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let usern = document.getElementById('usern').value;
    let password = document.getElementById('password').value;
    let confirmPass = document.getElementById('confirmPass').value;
    let data = document.getElementById('data').value;
    /*let pic = document.getElementById('file').value;*/
    



    if(name == "")
    {
    document.getElementById('nameError').innerHTML = "<span>&#9888;</span> Please Provide your Username";
        return false;
    }
    document.getElementById('nameError').innerHTML = "";

    if(email == "")
        {
        document.getElementById('emailError').innerHTML = "<span>&#9888;</span> Please Provide your Email";			
            return false;
    }
    document.getElementById('emailError').innerHTML = "";

        
    if(usern == "")
        {
    document.getElementById('usernError').innerHTML = "<span>&#9888;</span> Please Provide your Username";
            return false;
    }
    document.getElementById('usernError').innerHTML = "";

    if(password == "")
    {
	document.getElementById('passError').innerHTML = "<span>&#9888;</span> Please Provide your Password";
	    return false;
	}
    document.getElementById('passError').innerHTML = "";


    if(confirmPass == "")
    {
	document.getElementById('confirmpassError').innerHTML = "<span>&#9888;</span> Please Provide your confirmPassword";
	    return false;
	}
    document.getElementById('confirmpassError').innerHTML = "";


    if(data == "")
    {
    document.getElementById('dataError').innerHTML = "<span>&#9888;</span> Please Provide your DOB";
        return false;
    }
    document.getElementById('dataError').innerHTML = "";


    /*if(pic == "")
    {
    document.getElementById('picError').innerHTML = "<span>&#9888;</span> Please Provide your Username";
        return false;
    }
    document.getElementById('picError').innerHTML = "";*/








}


function log()
    {
	    let username = document.getElementById('name').value;
        let password = document.getElementById('pass').value;
		
		if(username == "")
        {
		document.getElementById('usernameError').innerHTML = "<span>&#9888;</span> Please Provide your Username";
		return false;
		}
		document.getElementById('usernameError').innerHTML = "";





        if(password == "")
        {
		document.getElementById('passError').innerHTML = "<span>&#9888;</span> Please Provide your Password";
		return false;
		}
		document.getElementById('passError').innerHTML = "";
		
	}