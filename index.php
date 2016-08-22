<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>6&deg; of Jon Snow</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="pretty.css">
  </head>
  <body>
  <div id="filter">
  <div id="snow">	
	<header>
		<div id="splash">
			<h1 class="title"><img src="images/title-portrait.png" alt="Six Degrees of Jon Snow"></h1>
			<a href="#instructions" id="begin">Begin</a>
		</div>
		<h2>A simple guide that traces GoT characters back to John Snow through family, marriage or fielty in 6&deg; of separation or less.</h2>
	
	</header>
	
	<section id="characters">
	<div class="frame">
		<ul id="top-list">
		<p id="instructions">Click on a character to see how they are connected to Jon Snow.</p>

			<li>
				<input type="radio" name="charSelect" class="charSelect" id="hound"/><label for="hound">The<br>Hound</label>
				<p>Once sworn to Joffrey<br>Baratheon > Nephew to Tyrion<br>Lannister > Married to Sansa<br>Stark > Cousin of Jon<br>Snow</p>
			</li>
			<li>
				<input type="radio" name="charSelect" class="charSelect" id="margarey"/><label for="margarey">Margarey<br>Terell</label>
				<p>Married to <span class="tommen">Tommen<br>Lannister</span> Nephew to <span class="tyrion">Tyrion<br>Lannister</span> Married to <span class="sansa">Sansa<br>Stark</span> Cousin of <span class="snow">Jon<br>Snow</span></p>
			</li>
			
			<li>
				<input type="radio" name="charSelect" class="charSelect" id="lilFingy"/><label for="lilFingy">Little<br>Finger</label>
				<p>Married Lysa<br>Arryn > Sister of Catelyn<br>Stark > Aunt of Jon<br>Snow</p>
			</li>
			<li>
				<input type="radio" name="charSelect" class="charSelect" id="joffery"/><label for="joffery">Joffery Bratheon</label>
				<p>Nephew to Tyrion<br>Lannister > Married to Sansa<br>Stark > Cousin of Jon<br>Snow</p>
			</li>
			<li>
				<input type="radio" name="charSelect" class="charSelect" id="varys"/><label for="varys">Lord<br>Varys</label>
				<p>Sworn to Daenerys<br>Stormborne > Sister to Rhaegar<br>Targeryn > Father of Jon<br>Snow</p>
			</li>
			<li>
				<input type="radio" name="charSelect" class="charSelect" id="gworm"/><label for="gworm">Grey<br>Worm</label>
				<p>Sworn to Daenerys<br>Stormborne > Sister to Rhaegar > Father of Jon<br>Snow</p>
			</li>
			<li>
				<input type="radio" name="charSelect" class="charSelect" id="yara"/><label for="yara">Yara<br>Greyjoy</label>
				<p>Sister of Theon Greyjoy > Ward of Ned Stark > Uncle of Jon Snow</p>
			</li>
			<li>
				<input type="radio" name="charSelect" class="charSelect" id="theon"/><label for="theon">Theon<br>Greyjoy</label>
				<p>Ward of Ned Stark > Uncle of Jon Snow</p>
			</li>
			<li>
				<input type="radio" name="charSelect" class="charSelect" id="berrick"/><label for="berrick">Berrick<br>Dondarian</label>
				<p>Sworn to Ned Stark > Uncle of Jon Snow</p>
			</li>
			<li>
				<input type="radio" name="charSelect" class="charSelect" id="tarth"/><label for="tarth">Brien of<br>Tarth</label>
				<p>Sworn to Catelyn Stark > Aunt of Jon Snow</p>
			</li>
			<li>
				<input type="radio" name="charSelect" class="charSelect" id="tyrion"/><label for="tyrion">Tyrion<br>Lannister</label>
				<p>Married to Sansa Stark > Cousin of Jon Snow</p>
			</li>
			<li>
				<input type="radio" name="charSelect" class="charSelect" id="sansa"/><label for="sansa">Sansa<br>Stark</label>
				<p>Sister of John Snow</p>
				</ul>
			</li>
		</ul>	
	</div>
	</section>
	</div>
</div>
</body>
</html>