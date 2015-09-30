$(document).ready(function() {

	$( ".btn" ).click(function() {

		var source = $(this).attr("source");
		console.log(source);

		$('#myModal').on('shown.bs.modal', function () {

			var content = "";

			switch(source) {
				case "about":
					content = $("#about").html();
					$('#content').html(content);
					$('#myModalLabel').html("About");
					break;
				case "projects":
					content = $("#projects").html();
					$('#content').html(content);
					$('#myModalLabel').html("Projects");
					break;
				case "contactme":
					content = $("#contactme").html();
					$('#content').html(content);
					$('#myModalLabel').html("Contact Me (still in development)");
					break;
			}

		})


	});
	
});