<?php include 'resources/pages/header.php'; ?> 
	<div class=" row span12">
		<div class="span8 offset2 contentBox">
			<div id="search_bar">
				<div class="input-append" id="search_container">
					<input  class="span10" id="wordinput" name="word_name" placeholder="Search  -  Dictionary" maxlength="50"  style="height:25px;" autofocus="autofocus" type="text"/>
				</div>   
				<div id="switchLanguagesWidget" style="width:500px;">
					<form >
						<select  class="" id="fromLanguage">
							<option value="" selected="selected" id="detecting" >Detect</option>
							<option value="af" >Afrikaans</option>
							<option value="sq" >Albanian</option>
							<option value="ar">Arabic</option>
							<option value="az">Azerbaijani</option>
							<option value="eu">Basque</option>
							<option value="bn">Bengali</option>
							<option value="be">Belarusian</option>
							<option value="bg">Bulgarian</option>
							<option value="ca">Catalan</option>
							<option value="zh-CN">Chinese Simplified</option>
							<option value="zh-TW">Chinese Traditional</option>
							<option value="hr">Croatian</option>
							<option value="cs">Czech</option>
							<option value="da">Danish</option>
							<option value="nl">Dutch</option>
							<option value="en" >English</option>
							<option value="eo">Esperanto</option>
							<option value="et">Estonian</option>
							<option value="tl">Filipino</option>
							<option value="fi">Finnish</option>
							<option value="fr">French</option>
							<option value="gl">Galician</option>
							<option value="ka">Georgian</option>
							<option value="de">German</option>
							<option value="el">Greek</option>
							<option value="gu">Gujarati</option>
							<option value="ht">Haitian Creole</option>
							<option value="iw">Hebrew</option>
							<option value="hi">Hindi</option>
							<option value="hu">Hungarian</option>
							<option value="is">Icelandic</option>
							<option value="io">Ido</option>
							<option value="id">Indonesian</option>
							<option value="ga">Irish</option>
							<option value="it">Italian</option>
							<option value="ja">Japanese</option>
							<option value="kn">Kannada</option>
							<option value="ko">Korean</option>
							<option value="la">Latin</option>
							<option value="lv">Latvian</option>
							<option value="mk">Macedonian</option>
							<option value="ms">Malay</option>
							<option value="mt">Maltese</option>
							<option value="nb">Norwegian</option>
							<option value="fa">Persian</option>
							<option value="pl">Polish</option>
							<option value="pt">Portuguese</option>
							<option value="ro">Romanian</option>
							<option value="ru">Russian</option>
							<option value="sr">Serbian</option>
							<option value="sk">Slovak</option>
							<option value="sl">Slovenian</option>
							<option value="es">Spanish</option>
							<option value="sw">Swahili</option>
							<option value="sv">Swedish</option>
							<option value="ta">Tamil</option>
							<option value="te">Telugu</option>
							<option value="th">Thai</option>
							<option value="tr">Turkish</option>
							<option value="uk">Ukrainian</option>
							<option value="ur">Urdu</option>
							<option value="vi">Vietnamese</option>
							<option value="cy">Welsh</option>
							<option value="yi">Yiddish</option>
							
						</select>
					
						<a title="switch" class="btn btn-primary" id="flipLanguagesButton" href="javascript:;"><i class="icon-exchange icon-white"></i></a>
				
						<select class="" id="toLanguage">
							<option value="af">Afrikaans</option>
							<option value="sq">Albanian</option>
							<option value="ar">Arabic</option>
							<option value="az">Azerbaijani</option>
							<option value="eu">Basque</option>
							<option value="bn">Bengali</option>
							<option value="be">Belarusian</option>
							<option value="bg">Bulgarian</option>
							<option value="ca">Catalan</option>
							<option value="zh-CN">Chinese Simplified</option>
							<option value="zh-TW">Chinese Traditional</option>
							<option value="hr">Croatian</option>
							<option value="cs">Czech</option>
							<option value="da">Danish</option>
							<option value="nl">Dutch</option>
							<option value="en">English</option>
							<option value="eo">Esperanto</option>
							<option value="et">Estonian</option>
							<option value="tl">Filipino</option>
							<option value="fi">Finnish</option>
							<option value="fr">French</option>
							<option value="gl">Galician</option>
							<option value="ka">Georgian</option>
							<option value="de">German</option>
							<option value="el">Greek</option>
							<option value="gu">Gujarati</option>
							<option value="ht">Haitian Creole</option>
							<option value="iw">Hebrew</option>
							<option value="hi">Hindi</option>
							<option value="hu">Hungarian</option>
							<option value="is">Icelandic</option>
							<option value="io">Ido</option>
							<option value="id">Indonesian</option>
							<option value="ga">Irish</option>
							<option value="it">Italian</option>
							<option value="ja">Japanese</option>
							<option value="kn">Kannada</option>
							<option value="ko">Korean</option>
							<option value="la">Latin</option>
							<option value="lv">Latvian</option>
							<option value="mk">Macedonian</option>
							<option value="ms">Malay</option>
							<option value="mt">Maltese</option>
							<option value="nb">Norwegian</option>
							<option value="fa">Persian</option>
							<option value="pl">Polish</option>
							<option value="pt">Portuguese</option>
							<option value="ro">Romanian</option>
							<option value="ru">Russian</option>
							<option value="sr">Serbian</option>
							<option value="sk">Slovak</option>
							<option value="sl">Slovenian</option>
							<option value="es">Spanish</option>
							<option value="sw">Swahili</option>
							<option value="sv">Swedish</option>
							<option value="ta">Tamil</option>
							<option value="te">Telugu</option>
							<option value="th">Thai</option>
							<option value="tr">Turkish</option>
							<option value="uk">Ukrainian</option>
							<option value="ur"  selected="selected" >Urdu</option>
							<option value="vi">Vietnamese</option>
							<option value="cy">Welsh</option>
							<option value="yi">Yiddish</option>
						</select>	
					</form>
				</div>
			
				<div class="clearfix-gl"></div>
			</div><!-- search_bar -->
			<script>
			
			</script>
		</div><!-- contentBox -->
	</div>
	<div class="row span12">
		<div class=" span8 offset2 contentBox" style="position:relative;">
			<img src="resources/img/loader.png"  class="loader" />
			<textarea  class="span8 content" rows="10" >		  
				Here Comes Meaning of all words.
				
			</textarea>
			
		</div>
	</div>
	<script src="resources/combineResources/jquery.js" type="text/javascript" > </script>
	<script src="resources/combineResources/script.js" type="text/javascript" > </script>
</body>
</html>