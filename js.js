var myApp = new Framework7();
var $$ = Dom7;
var indexView = myApp.addView('.view-main', {
	dynamicNavbar: true
});

// 타이틀을 누르면 위로 가야지 말이야
$('#toptitle').click(function(e){
	e.preventDefault();
	var page = $('.page-content').last();
	console.log(page.scrollTop());
	page.animate({scrollTop:0}, 1000);
});

// 메뉴를 썼으면 자동으로 닫아야지 말이야
$('.item-link').each(function(){
	$(this).click(function(e){
		myApp.closePanel();
	});
});

// 섬네일을 눌렀으면 트리가 나와야지 말이야
$('.undercover').each(function(){
	$(this).click(function(){
		var tree = $(this).data('team');
		location.href = "/detail?tree="+tree;
	});
});