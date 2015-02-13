// JavaScript Document

$(document).ready(function(){
    $('div.button').mouseenter(function(){
		$(this).fadeTo('fast',0.8);
	});
	$('div.button').mouseleave(function(){
		$(this).fadeTo('fast',1);
	});
});