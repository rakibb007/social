$(document).ready(function() {
	$.ajax({
		url: "getUsers.php",
		type: "GET",
		success: function(data) {
			var users = JSON.parse(data);
			var userList = $("#userList");
			for (var i = 0; i < users.length; i++) {
				var user = users[i];
				userList.append("<p>" + user.firstName + " " + user.lastName + "</p>");
			}
		},
		error: function(xhr, status, error) {
			console.log(error);
		}
	});
});
