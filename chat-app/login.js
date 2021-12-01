function isValid(login) {
			const uname = login.uname.value;
			const pass =  login.pass.value;


			if (uname === "" || pass==="") {
				document.getElementById("message").innerHTML = "Please fill up the form properly"
				return false;
			}

			return true;
		}