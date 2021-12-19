$(document).ready(function(){
	$("#btn2").click(function() {
				$.get("../controller/billAction.php", function(data, status) {
						
					const users = JSON.parse(data);
					//console.log(users);
					
					let tableData = "<tbody>";
					for (let i = 0; i < users.length; i++) {
						tableData += "<tr>" + 
						"<td>" + users[i].orderid + "</td>" + 
						"<td>" + users[i].uname + "</td>" +
						"<td>" + users[i].quantity + "</td>" + 
						"<td>" + users[i].grandtotal+ "</td>" + 
						"</tr>";
					}
					tableData += "</tbody>";
					let table = "<table border='1'>" +
						"<thead>" +
						"<tr>" +
						"<td>" + "Order Id" + "</td>" + 
						"<td>" + "User Name" + "</td>" + 
						"<td>" + "Quantity" + "</td>" + 
						"<td>" + "Grand Total" + "</td>" + 
						"</tr>" + 
						"</thead>" +  
						tableData + 
					"</table>";
					$("#i3").html(table);
				});
			})
	$("#btn1").click(function() {
		$("#i3").empty();

	});

	
})