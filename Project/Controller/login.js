function sendData(formData) {
			if (formData.uname.value === "" || formData.pass.value === "") {
				document.getElementById("msg").innerHTML = "Please fill up the form properly";
			}
			var x = document.getElementById("re").checked;

			const xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if (this.readyState === 4 && this.status === 200) {
					if(this.responseText==="logedin")
					{
						location.replace("../view/home.php")
					}
					document.getElementById("msg").innerHTML = this.responseText;
				}
			}
			xhttp.open(formData.method, formData.action);
			xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			const myData = {
				"uname" : formData.uname.value,
				"pass" : formData.pass.value,
				"ch":x
			}
			console.log(myData);
			xhttp.send("obj="+JSON.stringify(myData));
		}