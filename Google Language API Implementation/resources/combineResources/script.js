jQuery( document ).ready(function( $ ){
/* *************************************** togglr Menu ************************************************ */
	$('#menu').click(function(){
		$('.list').toggle(600);
	});
/* ************************************ pause and play button ****************************************** */
	$('#speak').click(function() {
		if ($('audio').hasClass('pause')) {
			 $('audio').trigger("play");
			 $('audio').removeClass('pause');
			 $('audio').addClass('play');
		} else {
			 $('audio').trigger("pause");
			 $('audio').removeClass('play');
			 $('audio').addClass('pause');
		}
	});
/* *********************************** Calling of function ************************************************** */
	$("#submit").click(function(){
		Translate();
	});
	$("#wordinput").keyup(function(){
		TranslateAuto();
	});
	$("#submit-read").click(function(){
		TranslateAuto();
	});

/* ******************************************************** Auto Translate and show speak button Function **************************************** */
	function Translate(){
		$('.content').html('');
		$('.loader').fadeIn();
		var search = $('#wordinput_manual').val();
		var from = $('#fromLanguage').val();        
		var to = $('#toLanguage').val();
		var postData = "action=translate&search="+search+"&from="+from+"&to="+to;
		//alert(postData);
		$.ajax({
			type:'POST',
			dataType:'json',
			url:'translate.php',
			data:postData,
			success:function(data){
				$('.loader').fadeOut();
				
				$("#fromLanguage option").each(function(){
					if($(this).val()==data.source){
						$(this).attr("selected","selected");    
						if( data.destination=='ur'){
							$('.content').css('text-align','right');
						} else {
							$('.content').css('text-align','left');
						}
					}
				});
				$('.content').html(data.translation);
			}
		});
	}
/* ******************************************************** Auto Translate and show speak button Function **************************************** */
	function TranslateAuto(){	
		// $('#audioplayer').remove();
		$('.content').html('');
		$('.loader').fadeIn();
		$('#detecting').attr('selected','selected');
		$('#detecting').html('detecting ...');
		
		var search = $('#wordinput').val();
		var from = $('#fromLanguage').val();
		var to = $('#toLanguage').val();
		var postData = "action=translate&search="+search+"&from="+from+"&to="+to;
		//alert(postData);
		$.ajax({
			type:'POST',
			dataType:'json',
			url:'translate.php',
			data:postData,
			success:function(data){
				$('.loader').fadeOut();
				// var src= "http://thecoresol.com/translation_design/"+data.mp3File;
				// var audio = '<audio controls id="audioplayer" style="visibility:hidden;"><source src="'+src+'" type="audio/mp3"  >Your browser does not support the audio element.</audio>';
				 //alert(audio);
				// $(audio).insertAfter(".meanings");
				$("#fromLanguage option").each(function(){
					if($(this).val()==data.source){
						$(this).attr("selected","selected");    
						if( data.destination=='ur'){
							$('#speak').hide();
							$('.content').css('text-align','right');
						} else {
							$('#speak').show();
							$('.content').css('text-align','left');
						}
					}
				});
				$('.content').html(data.translation);   
			}
		});
	}
/* ******************************************************** Auto Translate and show speak button Function **************************************** */


});