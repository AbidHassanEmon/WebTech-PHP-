function sendData(formData) {
			if (formData.pass.value === "" || formData.npass.value === ""||formData.nnpass.value === "") {
				document.getElementById("msg").innerHTML = "Please fill up the form properly";
			}

			const xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if (this.readyState === 4 && this.status === 200) {
					document.getElementById("msg").innerHTML = this.responseText;
				}
			}
			xhttp.open(formData.method, formData.action);
			xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			const myData = {
				"pass" : formData.pass.value,
				"npass" : formData.npass.value,
				"nnpass" :formData.nnpass.value
			}
			xhttp.send("obj="+JSON.stringify(myData));

			document.getElementById("f1").reset();
		}