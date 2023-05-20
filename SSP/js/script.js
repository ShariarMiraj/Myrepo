function logincheck() {
  var uname = document.getElementById("uname").value;
  var pass = document.getElementById("pass").value;
  var unameerror = document.getElementById("un-error");
  var passerror = document.getElementById("pass-error");
  unameerror.style = "color:red; font-size: 16px;";
  passerror.style = "color:red; font-size: 16px;";
  var err = 0;
  if (uname == "") {
    unameerror.innerHTML = '<img src="../images/cross.png" width="10px"> Please enter your name';
    err +=1;
  }
  else{
    unameerror.innerHTML = '<img src= "../images/tick.png" width="10px">';
    err = 0;
  }
  if (pass == "") {
    passerror.innerHTML = '<img src="../images/cross.png" width="10px"> Please enter password';
    err +=1;
  }
  else{
    passerror.innerHTML = '<img src="../images/tick.png" width="10px"> ';
    err=0;
  }
  if(err == 0){
    return true;
  }
  else{
    return false;
  }
}



function fnameCheck() {
  if (document.getElementById("fname").value == "") {
    document.getElementById("fnameError").innerHTML = "Please Enter Name";
    return false;
  } else if (document.getElementById("fname").value.length > 20) {
    document.getElementById("fnameError").innerHTML =
      '<img src="../images/cross.png" width= "20px"> Character limit reached. First name must be with in 20 chacaters.';
    return false;
  } else if (
    document.getElementById("fname").value.includes(1) ||
    document.getElementById("fname").value.includes(0) ||
    document.getElementById("fname").value.includes(2) ||
    document.getElementById("fname").value.includes(3) ||
    document.getElementById("fname").value.includes(4) ||
    document.getElementById("fname").value.includes(5) ||
    document.getElementById("fname").value.includes(6) ||
    document.getElementById("fname").value.includes(7) ||
    document.getElementById("fname").value.includes(8) ||
    document.getElementById("fname").value.includes(9)
  ) {
    document.getElementById("fnameError").innerHTML =
      '<img src="../images/cross.png" width= "20px"> It must be alphabets A-Z';
    return false;
  } else {
    document.getElementById("fnameError").innerHTML =
      '<img src="../images/tick.png" width= "20px">';
      return true;
  }
}
function lnameCheck() {
  if (document.getElementById("lname").value == "") {
    document.getElementById("lnameError").innerHTML = "Please Enter Name";
    return false;
  } else if (document.getElementById("lname").value.length > 20) {
    document.getElementById("lnameError").innerHTML =
      '<img src="../images/cross.png" width= "20px"> Character limit reached. First name must be with in 20 chacaters.';
      return false;
  } else if (
    document.getElementById("lname").value.includes(1) ||
    document.getElementById("lname").value.includes(0) ||
    document.getElementById("lname").value.includes(2) ||
    document.getElementById("lname").value.includes(3) ||
    document.getElementById("lname").value.includes(4) ||
    document.getElementById("lname").value.includes(5) ||
    document.getElementById("lname").value.includes(6) ||
    document.getElementById("lname").value.includes(7) ||
    document.getElementById("lname").value.includes(8) ||
    document.getElementById("lname").value.includes(9)
  ) {
    document.getElementById("lnameError").innerHTML =
      '<img src="../images/cross.png" width= "20px"> It must be alphabets A-Z';
      return false;
  } else {
    document.getElementById("lnameError").innerHTML =
      '<img src="../images/tick.png" width= "20px">';
      return true;
  }
}

function usernameCheck() {
  var username = document.getElementById("username").value;
  if (username == "") {
    document.getElementById("usernameError").innerHTML =
      "Please enter Username";
      return false;
  }
  else if (username.includes(" ")){
    document.getElementById("usernameError").innerHTML='<img src="../images/cross.png" width ="20px"> No Space Allowed in username';
    return false;
  }
  else if (username.includes("-") || username.includes("+") || username.includes("=")){
    document.getElementById("usernameError").innerHTML='<img src="../images/cross.png" width ="20px"> Not allowed in username';
    return false;
  }
  else {
    document.getElementById("usernameError").innerHTML =
      '<img src="../images/tick.png" width="20px">';
      return true;
  }
  // var myxhttp= new XMLHttpRequest();
  // myxhttp.onreadystatechange = function(){
  //     if(this.readyState==4 && this.status==200){
  //         document.getElementById("usernameError").innerHTML = this.responseText;
  //     }
  // };
  // myxhttp.open("POST","http://localhost/SSP/control/registration_check.php",true);
  // myxhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  // myxhttp.send("username"+username);
}

function ageCheck() {
  if (document.getElementById("age").value == "") {
    document.getElementById("ageError").innerHTML = " Please Enter Age";
    return false;
  } else if (isNaN(document.getElementById("age").value)) {
    return false;
    document.getElementById("ageError").innerHTML =
      '<img src="../images/cross.png" width="20px"> Age must be number';
  } else if (document.getElementById("age").value < 14) {
    return false;
    document.getElementById("ageError").innerHTML =
      '<img src="../images/cross.png" width="20px">Must be above 14 years';
  } else {
    document.getElementById("ageError").innerHTML =
      '<img src="../images/tick.png" width= "20px"> ';
      return true;
  }
}

function radioCheck() {
  if (
    document.getElementById("male").checked == false &&
    document.getElementById("female").checked == false &&
    document.getElementById("others").checked == false
  ) {
    document.getElementById("genderError").innerHTML =
      '<img src = "../images/cross.png"> Must select Gender';
      return false;
    } else {
    document.getElementById("genderError").innerHTML =
      '<img src="../images/tick.png" width= "20px"> ';
      return true;
  }
}

function emailCheck() {
  var email = document.getElementById("email").value;
  var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
  var res = patt.test(email);

  if (!res) {
    document.getElementById("emailError").innerHTML =
      '<img src="../images/cross.png" width="20px"> Invalid Email. Must have "@" and ".com"';
      return false;
  } else if (
    !document.getElementById("email").value.includes("@") &&
    !document.getElementById("email").value.includes(".com")
  ) {
    document.getElementById("emailError").innerHTML =
      '<img src="../images/cross.png" width="20px"> Invalid Email. Must have "@" and ".com"';
      return false;
  } else {
    document.getElementById("emailError").innerHTML =
      '<img src="../images/tick.png" width="20px">';
      return true;
  }
}

function passCheck() {
  
  var pass = document.getElementById("pass").value;
  patt=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{8,}/;
  var res = patt.test(pass);

  if (pass == "") {
    document.getElementById("passwordError").innerHTML =
      "Please enter password";
      return false;
  }
  else if(!res){
    document.getElementById("passwordError").innerHTML =
      '<img src="../images/cross.png" width="20px"> Weak Password. ';
      return false;
  } 
  
  else if (pass.length < 8) {
    document.getElementById("passwordError").innerHTML =
      '<img src="../images/cross.png" width="20px"> Weak Password. ';
      return false;
  } else {
    document.getElementById("passwordError").innerHTML =
      '<img src="../images/tick.png" width="20px">';
      return true;
  }
}

function CpassCheck() {
  var cpass = document.getElementById("Cpass").value;
  var pass = document.getElementById("pass").value;
  if (cpass == "") {
    document.getElementById("CpasswordError").innerHTML =
      "Please enter password";
      return false;
  } else if (cpass.length < 8) {
    document.getElementById("CpasswordError").innerHTML =
      '<img src="../images/cross.png" width="20px"> Weak Password';
      return false;
  } else if (cpass != pass) {
    document.getElementById("CpasswordError").innerHTML =
      '<img src="../images/cross.png" width="20px"> Passwords do not match';
      return false;
  } else {
    document.getElementById("CpasswordError").innerHTML =
      '<img src="../images/tick.png" width="20px">';
      return true;
  }
}

function fileError(fileName) {
  var file_extension = fileName.split(".").pop().toLowerCase();

  if (file_extension == ".jpg" || file_extension == ".png") {
    document.getElementById("fileError").innerHTML =
      '<img src="../images/cross.png" width="20px"> This File Type not Supported';
      return false;
  } else {
    document.getElementById("fileError").innerHTML =
      '<img src="../images/tick.png" width="20px">';
      return true;
  }
}

function addressCheck() {
  if (document.getElementById("address") == "") {
    document.getElementById("addressError").innerHTML =
      '<img src= "../images/cross.png" width="20px">';
      return false;
  } else {
    document.getElementById("addressError").innerHTML =
      '<img src="../images/tick.png" width="20px">';
      return true;
  }
}

function validateUserRegistration() {

   if(fnameCheck() == false || lnameCheck() == false
   || usernameCheck() == false || ageCheck() == false
   || radioCheck() == false || emailCheck() == false 
   || passCheck() == false || CpassCheck() == false
   || fileError(fileName) == false || addressCheck() == false
   ){
    return false;
   }
   else{
    return true;
   }
  
}

function personalInfo() {
  var a = (document.getElementById("content").innerHTML =
    '<table> <tr> <td colspan="2" > <img src="<?php echo $image;?>" width="100px" alt=""> </td> </tr> <tr> <td>Name : </td> <td><?php echo $username;?></td> </tr> <tr> <td>Email : </td> <td><?php echo $email;?></td> </tr> <tr> <td>Age : </td> <td><?php echo $age;?></td> </tr> </table>');
  

  }
