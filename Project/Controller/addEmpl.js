let tbody=document.getElementById("tby");

function showData() {

	tbody.innerHTML="";

			const xhttp = new XMLHttpRequest();
			xhttp.open("GET", "../controller/showEmplAction.php",true);
			xhttp.responseType = "json";
			xhttp.onload = () => {

			if (xhttp.status === 200) {

  //console.log(xhttp.response);

				if(xhttp.response)
				{
					x = xhttp.response;
				}
				else
				{
					x="";
				}
					
				for (let i = 0; i < xhttp.response.length; i++) {
						tbody.innerHTML += "<tr>" + 
					"<td>" + x[i].ID + "</td>" +
					"<td>" + x[i].fname + "</td>" + 
					"<td>" + x[i].lname + "</td>" +   
					"<td>" + x[i].gender + "</td>" +
					"<td>" + x[i].DOB + "</td>" +
					"<td>" + x[i].address + "</td>" +
					"<td>" + x[i].phone + "</td>" +
					"<td>" + x[i].email + "</td>" +
					"<td>" + x[i].username + "</td>" +
					"<td>" + x[i].password + "</td>" +

					"<td><button style='background-color:#ffff4d;' class='editbtn' data-eid=" +
					 x[i].ID + "> Edit </button><button style='background-color:#ff1a1a;' class='delbtn' data-did=" +
					 x[i].ID + "> Delete </button></td>" +
					"</tr>"
					}
				
			}
			deleteData();
			editData();
		};
	
	xhttp.send();
		
}


showData();



document.getElementById("btnadd").addEventListener("click", addempl);

function addempl(add) {
			
	add.preventDefault()

	console.log("addempl clicked");

	var  id = document.getElementById("mId").value;
	var  fname = document.getElementById("fname").value;
	var  lname = document.getElementById("lname").value;
	var  gen = document.getElementById("gender").value;
	var DOB=document.getElementById("birthday").value;
	var add  = document.getElementById("address").value;
	var phn  = document.getElementById("phone").value;
	var email  = document.getElementById("email").value;
	var uname  = document.getElementById("uname").value;
	var pass  = document.getElementById("pass").value;
	//console.log(fname);

	if (fname=== ""||lname===""||DOB===""||email===""||uname===""||pass==="") 
	{
		alert("Please fill up the form properly alart");
		document.getElementById("message").innerHTML = "Please fill up the form properly"
		return false;
	}

	const xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (this.readyState === 4 && this.status === 200) {
		document.getElementById("message").innerHTML = this.responseText;
		showData();
		}
	}

	xhttp.open("POST","../controller/addEmplAction.php",true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	const myData = {
			"id":id,
			"fname" :fname ,
			"lname" : lname,
			"gen" : gen,
			"birthday" :DOB,
			"address":add,
			"phone" : phn,
			"email" : email,
			"uname" : uname,
			"pass" : pass
		}

	xhttp.send("obj="+JSON.stringify(myData));

	//showData();
	
	document.getElementById("f1").reset();

}


function deleteData(){
	var x=document.getElementsByClassName("delbtn");
	
	for(let i=0;i<x.length;i++)
	{
		x[i].addEventListener("click",function (){
			id=x[i].getAttribute("data-did");
			//console.log(id);

		const xhttp = new XMLHttpRequest();

		xhttp.onreadystatechange = function() {
			if (this.readyState === 4 && this.status === 200) {
				document.getElementById("message").innerHTML = this.responseText;
				showData();
			}
		}

		xhttp.open("POST","../controller/deletEmplAction.php",true);
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			const myData = {
				"ID" :id
				
			}
			//console.log(myData);

			xhttp.send("obj="+JSON.stringify(myData));

		});
	}

}


function editData(){
	var x=document.getElementsByClassName("editbtn");

	var  fname = document.getElementById("fname");
	var  lname = document.getElementById("lname");
	var  gen = document.getElementById("gender");
	var DOB=document.getElementById("birthday");
	var add  = document.getElementById("address");
	var phn  = document.getElementById("phone");
	var email  = document.getElementById("email");
	var uname  = document.getElementById("uname");
	var pass  = document.getElementById("pass");

//console.log(x);
	for(let i=0;i<x.length;i++)
	{
		x[i].addEventListener("click",function (){
			id=x[i].getAttribute("data-eid");

//console.log(id);

		const xhttp = new XMLHttpRequest();
		xhttp.responseType = "json";

		xhttp.onreadystatechange = function() {
			if (xhttp.readyState === 4 && xhttp.status === 200) {
			console.log(xhttp.response[0]);
			s=xhttp.response[0];
			document.getElementById("mId").value=s.ID;
			fname.value=s.fname;
			lname.value=s.lname;
			DOB.value=s.DOB;
			add.value=s.address;
			phn.value=s.phone;
			email.value=s.email;
			uname.value=s.username;
			pass.value=s.password;
			}
		}

		xhttp.open("POST","../controller/editEmplAction.php",true);
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

		const myData = {
			"ID" :id
				
		}
			//console.log(myData);

			xhttp.send("obj="+JSON.stringify(myData));

		});
	}

}
