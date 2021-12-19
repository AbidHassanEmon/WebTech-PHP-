let tbody=document.getElementById("tby");

function showData() {

	tbody.innerHTML="";

			const xhttp = new XMLHttpRequest();
			xhttp.open("GET", "../controller/showAction.php",true);
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
					"<td>" + x[i].Name + "</td>" + 
					"<td>" + x[i].Price + "</td>" +   
					"<td>" + x[i].Stock + "</td>" +
					"<td><button style='background-color:#ffff4d;' class='editbtn' data-eid=" + x[i].ID +
					 "> Edit </button><button style='background-color:#ff1a1a;' class='delbtn' data-did=" +
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


document.getElementById("btnadd").addEventListener("click", addMedi);

function addMedi(login) {
			
			login.preventDefault()

			var  id = document.getElementById("mId").value;
			var  name = document.getElementById("name").value;
			var price  = document.getElementById("price").value;
			var stock  = document.getElementById("stock").value;

			//console.log(name);

			if (name=== ""||price=== ""||stock==="") 
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

			xhttp.open("POST","../controller/addmediAction.php",true);
			xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			const myData = {
				"id":id,
				"name" : name,
				"price" : price,
				"stock" :stock
			}
			//console.log(myData);

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

		xhttp.open("POST","../controller/deletAction.php",true);
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

	var  name = document.getElementById("name");
	var price  = document.getElementById("price");
	var stock  = document.getElementById("stock");

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
				//console.log(xhttp.response[0].ID);
				y=xhttp.response[0];
				document.getElementById("mId").value=y.ID;
				name.value=y.Name;
				price.value=y.Price;
				stock.value=y.Stock;

			}
		}

		xhttp.open("POST","../controller/editAction.php",true);
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

		const myData = {
			"ID" :id
				
		}
			//console.log(myData);

			xhttp.send("obj="+JSON.stringify(myData));

		});
	}

}