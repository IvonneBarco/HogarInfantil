// JavaScript Document
$(document).ready(function() {
	$('.all_opt').animate({opacity:1},2000);
	$('#all_btn').click(function(){
		$('.all_opt').animate({opacity:1},2000);
		$('.web_opt').animate({opacity:0},2000);
		$('.mob_opt').animate({opacity:0},2000);
		$('.pg_opt').animate({opacity:0},2000);
	});
	$('#web_btn').click(function(){
		$('.all_opt').animate({opacity:0},2000);
		$('.web_opt').animate({opacity:1},2000);
		$('.mob_opt').animate({opacity:0},2000);
		$('.pg_opt').animate({opacity:0},2000);
	});
	$('#mob_btn').click(function(){
		$('.all_opt').animate({opacity:0},2000);
		$('.web_opt').animate({opacity:0},2000);
		$('.mob_opt').animate({opacity:1},2000);
		$('.pg_opt').animate({opacity:0},2000);
	});
	$('#pg_btn').click(function(){
		$('.all_opt').animate({opacity:0},2000);
		$('.web_opt').animate({opacity:0},2000);
		$('.mob_opt').animate({opacity:0},2000);
		$('.pg_opt').animate({opacity:1},2000);
	});
});
