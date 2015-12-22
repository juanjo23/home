/* Animations */
$(document).on('click', '.proj', function(){
	$('.proj').removeClass('active');
	setWord($(this).text());

	$(this).animate({
		marginLeft: '100px'
	},
	200, function(){
		$(this).animate({marginLeft: '0px'}, 300);
		$(this).addClass('active');
	});

});

/*Añadir to do*/
$("#add-todo").keyup(function(e){
	if(e.keyCode == 13) //Enter
	{
		var todo = $(this).val();
		$('.container-todo').append(todo);
	}
});


/* View all */
$(document).on('click', '.view-all', function(){
	document.location.href = 'all';
});
/* Mostrar el significado de una palabra */
$(document).on('click', '.word', function(){
	var elem = $(this).next();
	if(elem.css('color') == 'rgb(27, 43, 52)'){
		elem.css('color', '#fac863');
	}else{
		elem.css('color', '#1b2b34');
	}
});

//Show the tradduction of a word
function setWord(word){
	for(key in words){
		if(key == word){
			$('#mean').text(words[key]);
			break;
		}
	}
}

//Add word
$('#input-mean').keypress(function (e) {
	if(e.keyCode == 13){
		var word = $('#input-word').val();
		var mean = $('#input-mean').val();
		$.get( "insertWord.php?word="+word+"&mean="+mean, function( data ) {
			$(".list-words").html(data);
			words[word]=mean;
		});
		$('#input-word').val("");
		$('#input-mean').val("");
		$('#input-search').val("");
	}
});

$('#input-mean').focusout(function(){
	$('#input-search').focus();
});

//Search Word
$('#input-search').keyup(function(e){
	if(e.keyCode == 13) //Enter
	{
		$('.proj.active').trigger('click');
		return;
	}
	else if(e.keyCode == 40) //Arrow Down
	{
		 activeNext();
		 return;
	}
	else if(e.keyCode == 38) //Arrow Down
	{
		 activePrev();
		 return;
	}
	$('#mean').text("");

	//Que se conviertan automaticamente upper to lower
	//$(this).val($(this).val().toLowerCase());
	var text = $(this).val().toLowerCase();
	var itera = "";

	$('.proj').hide();
	$('.proj').each(function(){
		itera = $(this).text();
		if(itera.indexOf(text) == 0){
			$(this).show();
		}
	});
	activeFirst();
});

// Activa el siguiente elemento
function activeNext(){
	var active = $('.proj.active');
	if(active.next().is(":visible")){
		active.removeClass('active');
		active = active.next();
		active.addClass('active');
	}
}

function activePrev(){
	var active = $('.proj.active');
	if(active.prev().is(":visible")){
		active.removeClass('active');
		active = active.prev();
		active.addClass('active');
	}
}
function activeFirst(){
	var active = $('.proj.active');
	active.removeClass('active');
	active = $('.proj:visible').first();
	active.addClass('active');
}


$(document).keypress(function(e){
	if( $("input").is(":focus") ){
		return 0;
	}
	switch(e.keyCode){
		case 116: window.open(links[0]); break; //T
		case 100: window.open(links[1]); break; //D
		case 104: window.open(links[2]); break; //H
		case 103: window.open(links[3]); break; //G
		case 102: window.open(links[4]); break; //F
		case 121: window.open(links[5]); break; //Y
		case 108: window.open(links[6]); break; //L
		case 99: window.open(links[7]); break; //C
	}
});

var links = [
		"https://trello.com/",
		"http://www.deezer.com/",
		"http://www.hotmail.com/",
		"https://mail.google.com/",
		"https://www.facebook.com/",
		"https://www.youtube.com/",
		"http://lyricstraining.com/",
		"http://campus.ingsoft.info/"];
