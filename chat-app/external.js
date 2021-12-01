	function isValid(RegForm) {
			const uname = RegForm.username.value;
			const email = RegForm.email.value;
			const pass =  RegForm.Password.value;


			if (uname === "" ||  email === ""|| pass==="") {
				document.getElementById("message").innerHTML = "Please fill up the form properly"
				return false;
			}

			return true;
		}