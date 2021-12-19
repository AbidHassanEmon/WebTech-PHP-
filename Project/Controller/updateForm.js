function sendData(formData) {
			const fname = formData.fname.value;
			const lname = formData.lname.value;
			const gen  = formData.gender.value;
			const DOB = formData.birthday.value;
			const email  = formData.email.value;
			const address= formData.add.value;
			const phone  = formData.phone.value;
			


			if (fname === "" || lname === ""||gen=== ""||DOB=== ""||email=== "") {
				alert("Please fill up the form properly alart");
				document.getElementById("message2").innerHTML = "Please fill up the form properly"
				return true;
			}

			const xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if (this.readyState === 4 && this.status === 200) {
					document.getElementById("message2").innerHTML = this.responseText;
				}
			}

			xhttp.open(formData.method, formData.action);
			xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			const myData = {
				"fname" :fname ,
				"lname" : lname,
				"gen" : gen,
				"birthday" : DOB,
				"phone" : phone,
				"email" : email,
				"address":address
			};

			xhttp.send("obj="+JSON.stringify(myData));
	
			document.getElementById("f1").reset();
		}