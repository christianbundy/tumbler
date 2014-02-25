$(document).ready(function() {
	var blog = document.getElementById('blog');
	$.ajax({
		url: 'ajax.php',
		success: function(data) {
			blog.src = data;
		}
	});
	
	$('#tumble').click(function() {
		document.getElementById('plus').style.backgroundColor="#111";
		document.getElementById('minus').style.backgroundColor="#111";
		$.ajax({
			url: 'ajax.php',
			success: function(data) {
				blog.src = data;
			}
		});
		
	});
	
	$('#plus').mousedown(function() {
		document.getElementById('plus').style.backgroundColor="#2A52BE";
		document.getElementById('minus').style.backgroundColor="#111";
	});
	
	$('#minus').mousedown(function() {
		document.getElementById('minus').style.backgroundColor="#E52B50";
		document.getElementById('plus').style.backgroundColor="#111";
	});
		
		$(function() {
			$(window).resize(function() {
				$('#blog').height($(window).height() - $('#blog').offset().top - 5);
			});
		$(window).resize();
		});
	});
	
	