$( document ).ready(function() {


	var items = $('.homepagetab li');
	var numitems = items.length;
	items.each(function(index) {
	    $(this).css('left', 50 - 35 * Math.cos(-0.6 * Math.PI - 2 * (1 / numitems) * index * Math.PI).toFixed(4) + '%');
	    $(this).css('top', 50 + 35 * Math.sin(-0.6 * Math.PI - 2 * (1 / numitems) * index * Math.PI).toFixed(4) + '%');
	});

	$('#mobilemenutab').hide();
	$('#mobilemenutab').show();
	$('#mobilemenutab').css('display', 'inline-block');
	$('#mobilemenutab').css('opacity', '0');
		

	$('.itty').click(function(event) {
		var element = $("select")[0], worked = false;
		if (document.createEvent) { // all browsers
		    var e = document.createEvent("MouseEvents");
		    e.initMouseEvent("mousedown", true, true, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null);
		    worked = element.dispatchEvent(e);
		} else if (element.fireEvent) { // ie
		    worked = element.fireEvent("onmousedown");
		}
		if (!worked) { // unknown browser / error
		    alert("It didn't worked in your browser.");
		}
	})

	$('#mobilemenutab').change(function(){

			var selectedMenu = $('#mobilemenutab option:selected').text();

			switch (selectedMenu)
			{
				case "About":
					location.href = "about.html";
					break;
				case "Event Info":
					location.href = "eventinfo.html"
					break;
				case "Competition":
					location.href = "competition.html";
					break;
				case "Get Involved":
					location.href = "getinvolved.html"
					break;
				case "News":
					location.href = "news.php";
					break;
				case "Contact Us":
					location.href = "contact.html"
					break;
			}

	})
	


});


