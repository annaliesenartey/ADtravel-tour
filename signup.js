function Validate() {
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("cpassword").value;
    if (password != confirmPassword) {
        alert("Passwords do not match.");
        return false;
    }
            var uemail = document.getElementById('email');
			var upass = document.getElementById('password');
			var regbutton = document.getElementById('register');

			var mailformat =/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/ ;

			if (mailformat.test(uemail.value)){
				alert('email is valid');
				//call the post method
				// loadDoc(uemail, upass, regbutton);

			}else{
				alert('email is wrong');
				return false;
			}
			alert('this is after validation');



			// make a post request to register_proc page
			function loadDoc(uemail, upass, regbutton){  
				const request = new XMLHttpRequest();          
				const requestData = `uname=${uemail.value}&upass=${upass.value}&register=${regbutton.value}`;

				request.open('POST', 'register_proc.php');
				request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				request.send(requestData);
			}

			alert('User added successfully');

    return true;
}