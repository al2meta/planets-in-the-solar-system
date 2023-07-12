<?php
	$selected_planet = '';
	function options() {
		$var_none = '';
		$var_mer = '';
		$var_ven = '';
		$var_ear = '';
		$var_mar = '';
		$var_jup = '';
		$var_sat = '';
		$var_ura = '';
		$var_nep = '';
		$var_plu = '';
		$selected_planet = '';
		if(isset($_POST['planets'])) {
			$selected_planet = $_POST['planets'];
		}
		if($selected_planet == 'None') {
			$var_none = '" selected="selected';
		}
		if($selected_planet == 'Mercury') {
			$var_mer = '" selected="selected';
		}
		if($selected_planet == 'Venus') {
			$var_ven = '" selected="selected';
		}
		if($selected_planet == 'Earth') {
			$var_ear = '" selected="selected';
		}
		if($selected_planet == 'Mars') {
			$var_mar = '" selected="selected';
		}
		if($selected_planet == 'Jupiter') {
			$var_jup = '" selected="selected';
		}
		if($selected_planet == 'Saturn') {
			$var_sat = '" selected="selected';
		}
		if($selected_planet == 'Uranus') {
			$var_ura = '" selected="selected';
		}
		if($selected_planet == 'Neptune') {
			$var_nep = '" selected="selected';
		}
		if($selected_planet == 'Pluto') {
			$var_plu = '" selected="selected';
		}
		$planets=array('Please Select a Planet'=>'None' . $var_none,
			'Mercury'=>'Mercury' . $var_mer,
			'Venus'=>'Venus' . $var_ven,
			'Earth'=>'Earth' . $var_ear,
			'Mars'=>'Mars' . $var_mar,
			'Jupiter'=>'Jupiter' . $var_jup,
			'Saturn'=>'Saturn' . $var_sat,
			'Uranus'=>'Uranus' . $var_ura,
			'Neptune'=>'Neptune' . $var_nep,
			'Pluto'=>'Pluto' . $var_plu);
		$opt='';
		while(list($choice,$value)=each($planets)) {
			$opt.='<option value="' . $value . '">' . $choice . '</option>';
		}
		return $opt;
	}
	function show_planet() {
		$selected_planet = '';
		if(isset($_POST['planets'])) {
			$selected_planet = $_POST['planets'];
		}
		if($selected_planet == 'Mercury') {
			echo '<img src="img/mercury.gif" alt="Planet Mercury" width="30%" height="auto" /><br/>
			<b>Planet Mercury</b><br/><br/>
			<p>Mercury is the smallest planet in the Solar System and the closest to the Sun. During daytime, its temperatures can reach up to a blistering 806°F (430°C), which is hot enough to melt lead. However, Mercury has a very thin atmosphere, so the heat of the day escapes very quickly at night time. Mercury\'s nights are freezing cold, much colder than the coldest place on Earth.</p>';
		}
		if($selected_planet == 'Venus') {
			echo '<img src="img/venus.gif" alt="Planet Venus" width="30%" height="auto" /><br/>
			<b>Planet Venus</b><br/>
			<p>Venus is the second planet from the Sun, and the second brightest heavenly body in the night sky after Earth\'s Moon. The planet is about the same size as Earth. Its atmosphere is thick with poisonous gas. Because of its thick atmosphere, heat is trap in the planet in a greenhouse effect causing its average temperature to shoot up to a scorching 864°F (462°C), making it even hotter than Mercury. The surface of Venus is hidden by thick clouds of sulfuric acid.</p>';
		}
		if($selected_planet == 'Earth') {
			echo '<img src="img/earth.gif" alt="Planet Earth" width="30%" height="auto" /><br/>
			<b>Planet Earth</b><br/>
			<p>Earth is the third planet from the Sun, and the only planet in the Solar System that is known to support life. It has an atmosphere rich in Oxygen, and a large supply of liquid water on its surface.</p>';
		}
		if($selected_planet == 'Mars') {
			echo '<img src="img/mars.gif" alt="Planet Mars" width="30%" height="auto" /><br/>
			<b>Planet Mars</b><br/>
			<p>Mars is the fourth planet from the Sun. It is a rocky planet about half the size of Earth. Mars and Earth share some similarities. Both planets have seasons, and both have icy layers at their north and south poles. However, unlike Earth, the surface of Mars is cold and dry, with only a thin atmosphere that is mostly made up of carbon dioxide.</p>';
		}
		if($selected_planet == 'Jupiter') {
			echo '<img src="img/jupiter.gif" alt="Planet Jupiter" width="30%" height="auto" /><br/>
			<b>Planet Jupiter</b><br/>
			<p>Jupiter is the fifth planet from the Sun, and is the largest planet in the Solar System. It is more than 1,300 times the volume of the Earth. Jupiter is a gas giant, made mostly of Hydrogen and Helium with a small rocky core. Near the surface, powerful natural forces create clouds of brightly colored misty-looking gas, forming gargantuan storms that can grow bigger than the Earth and last for hundreds of years.</p>';
		}
		if($selected_planet == 'Saturn') {
			echo '<img src="img/saturn.gif" alt="Planet Saturn" width="30%" height="auto" /><br/>
			<b>Planet Saturn</b><br/>
			<p>Saturn is the sixth planet from the Sun, and the second largest planet in the Solar System after Jupiter. It is famous for its huge system of colorful rings, which is made up of countless small particles of frozen water, with a trace component of rocky material. Saturn has a large family of more than 60 moons. Saturn is a huge ball of gas and liquid with s small solid core at its very center.</p>';
		}
		if($selected_planet == 'Uranus') {
			echo '<img src="img/uranus.gif" alt="Planet Uranus" width="30%" height="auto" /><br/>
			<b>Planet Uranus</b><br/>
			<p>Uranus is the third largest planet in the Solar System, the second furthest from the Sun, and surprisingly the coldest, with -357°F (-216°C). It is mostly composed of various ices, like frozen water, ammonia and methane. Being a gas giant type planet, it doesn\'s have a surface. Anything that lands on it will just sink through its upper atmosphere, and into the liquid icy center. Like Saturn, Uranus also has a ring. While most planets spin like tops on an axis, Uranus spins on its side like a rolling ball.</p>';
		}
		if($selected_planet == 'Neptune') {
			echo '<img src="img/neptune.gif" alt="Planet Neptune" width="30%" height="auto" /><br/>
			<b>Planet Neptune</b><br/>
			<p>Neptune is the second coldest planet in the Solar System after Uranus, and the furthest planet from the Sun. Methane gas in its upper atmosphere makes it look blue in color. At the top of its cloud layers, the temperature is usually a freezing -330°F (-201°C), though it can get even colder. Unlike its calm neighbor planet Uranus, Neptune often experiences raging storms.</p>';
		}
		if($selected_planet == 'Pluto') {
			echo '<img src="img/pluto.gif" alt="Planet Pluto" width="30%" height="auto" /><br/>
			<b>Planet Pluto</b><br/>
			<p>Pluto\'s classification as a planet is still being debated by Scientists at the time of this writing, however, if it is classified as a planet, then it is the furthest planet to the Sun. Pluto is a dwarf planet consisting of a mixture of 70 percent rock and 30 percent water ice. The planet has a rocky core surrounded by a mantle of water ice, with more exotic ices such as methane, carbon monoxide, and nitrogen ice coating the surface. Pluto has a different elliptical orbit that doesn\'s lie in the same plane as the eight planets.</p>';
		}
	}
	// Fallback for deprecated each()
	function each(&$array) {
		$key = key($array);
		$result = ($key === null) ? false :
				  [$key, current($array), 'key' => $key, 'value' => current($array)];
		next($array);
		return $result;
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Planets in the Solar System</title>
		<meta name="description" content="A PHP demonstration that makes use of an array variable. Each dropdown selection will provide information on the selected planet." />
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<style>
			html {
				font-size: calc(0.5em + 1vw);
				background: url("https://archive.org/download/galaxy-2643089_640/galaxy-2643089_640.jpg") no-repeat center center fixed;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;
				height: 100%;
				overflow: hidden;
			}
			body, p, h1 {
				font-family: Lucida Console, monospace;
				padding: 5px;
			}
			body {
				text-align: center;
				color: #ffffff;
				height: 100%;
				overflow: scroll;
				-webkit-overflow-scrolling: touch;
			}
			p {
				text-align: justify;
			}
			form, select {
				background-color: transparent;
				color: #ffffff;
				font-size: 18px;
			}
			option {
				background-color: #000000;
			}
		</style>
	</head>
	<body>
		<h1>Planets in the Solar System</h1>
		<p>This PHP demo will demontrate usage of array variables for the form selector. Using a while loop, list language construct, and an each function, we would be able to create a dropdown list form and trigger an event that displays and describes each planet in the Solar System with each selection.</p>
		<form action="<?PHP echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<select name="planets" onchange="this.form.submit();">
				<?php echo options($selected_planet); ?>
			</select>
		</form><br/><br/>
		<?php echo show_planet($selected_planet); ?><br/><br/>
	</body>
</html>