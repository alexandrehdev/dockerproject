<?php
$json_content = file_get_contents("http://www.JailBase.com/api/1/sources/");
$result = json_decode($json_content, true);

// Looking for the nearest sheriff's office?

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DataJail</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap');
*{
	font-family: 'Poppins', sans-serif;
	font-weight: 900;
	box-sizing: border-box;
}
body{
	height: 100%;
	width: auto;
	padding: 0;
	margin: 0;
	overflow-x: hidden;
}
header{
	padding: 0;
	margin: 0;
	font-size: 20px;
	text-align: center;
	background-color: #0c0c0c;
	color: white;
	display: block;
	border: 2px black solid;
}

/*Content Style*/

.content{
	display: flex;
	width: 100%;
	flex-wrap: wrap;
	justify-content: center;
}



/*Style Cards*/


.hls-card{
	border: 1px black solid;
	height: auto;
	width: 280px;
	margin: 10px;
	text-align: left;
	border-radius: 5px;
}

.hls-card div{
	margin: 10px;
}

.image-card{
	display: inline-flex;
	margin-left: 35%;
}


/*Search Trigger Style*/

#formSearch{
	margin: 5%;
	float: right;
}

#search-data input, button{
	outline: none;
}

#search-data input{
	border: 1px solid black;
	border-radius: 10px;
	height: 32px;
	border-bottom-right-radius: 0;
	border-top-right-radius: 0;
	font-weight: 800;
}

#search-data button{
	border: 0;
}

button{
	background-color: #0c0c0c;
	color: white;
	cursor: pointer;
	height: 35px;
	font-size: 18px;
	border-radius: 5px;
}

.hls-data-fixed{
	position: fixed;
	background-color: #0c0c0c;
	margin: 0;
	top: 300px;
	right: 0;
	height: auto;
	padding: 20px;
	width: auto;
	display: block;
	color: white;
	border-top-left-radius: 10px;
	border-bottom-left-radius: 10px;
}

::-webkit-scrollbar {
	width: 5px;
}

::-webkit-scrollbar-track {
	background: #000; 
}


::-webkit-scrollbar-thumb {
	background: #5a5a5a; 
	border-radius: 10px;
}

::-webkit-scrollbar-thumb:hover {
	background: rgb(184, 184, 184); 
}



</style>


<body>
	<header>
		<h1>DataJail</h1>
	</header>

	<!-- It doesn't work -->
	<form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>" id="formSearch">
		<div id="search-data">
			<input type="text" name="search">
			<button type="submit" name="searchButton">Search</button>
		</div>
	</form>

	<!-- the data will be shown right here -->
	<div class="hls-data-fixed">
		<div>
			<ul style="list-style-type: none;">
				<li>
					<a style="color: white; text-decoration: none;" href="https://github.com/AllexandreDev">
						GitHub
						<i class="fa fa-github" aria-hidden="true"></i>
					</a>
				</li>
			</ul>
		</div>
	</div>
	

	<section class="content">
		<?php 
		for ($i=0; $i <= 2 ; $i++) { 

			echo "
			<div class='hls-card'>

			<div>
			<img class='image-card' src='https://image.flaticon.com/icons/png/512/1685/1685853.png' style='height:100px'>
			</div>
			<div>
			<label>Name: </label>
			<span>" . $result['records'][$i]['name']  . "</span>
			</div>
			<div>
			<label>City: </label>
			<span>". $result['records'][$i]['city'] ."</span>
			</div>

			<div>
			<label>Phone :</label>
			<span>". $result['records'][$i]['phone'] ."</span>
			</div>

			<div>
			<label>Email :<label>
			<span>". $result['records'][$i]['email'] ."</span>
			</div>

			</div>
			";
		}

		?>
	</section>

	<section class="content">
		<?php 
		for ($i=3; $i <= 5 ; $i++) { 

			echo "
			<div class='hls-card'>
			<div>
			<img class='image-card' src='https://image.flaticon.com/icons/png/512/1685/1685853.png' style='height:100px'>
			</div>
			<div>
			<label>Name: </label>
			<span>". $result['records'][$i]['name'] ."</span>
			</div>

			<div>
			<label>City: </label>
			<span>". $result['records'][$i]['city'] ."</span>
			</div>

			<div>
			<label>Phone :</label>
			<span>". $result['records'][$i]['phone'] ."</span>
			</div>

			<div>
			<label>Email :<label>
			<span>". $result['records'][$i]['email'] ."</span>
			</div>


			</div>
			";
		}

		?>
	</section>

	<section class="content">
		<?php 
		for ($i=5; $i <= 7 ; $i++) { 

			echo "
			<div class='hls-card'>
			<div>
			<img class='image-card' src='https://image.flaticon.com/icons/png/512/1685/1685853.png' style='height:100px'>
			</div>
			<div>
			<label>Name: </label>
			<span>". $result['records'][$i]['name'] ."</span>
			</div>

			<div>
			<label>City: </label>
			<span>". $result['records'][$i]['city'] ."</span>
			</div>
			
			<div>
			<label>Phone: </label>
			<span>". $result['records'][$i]['phone'] ."</span>
			</div>

			<div>
			<label>Email :<label>
			<span>". $result['records'][$i]['email'] ."</span>
			</div>

			</div>
			";
		}

		?>
	</section>

	<section class="content">
		<?php 
		for ($i=8; $i <= 10 ; $i++) { 

			echo "
			<div class='hls-card'>
			<div>
			<img class='image-card' src='https://image.flaticon.com/icons/png/512/1685/1685853.png' style='height:100px'>
			</div>
			<div>
			<label>Name: </label>
			<span>". $result['records'][$i]['name'] ."</span>
			</div>

			<div>
			<label>City: </label>
			<span>". $result['records'][$i]['city'] ."</span>
			</div>
			
			<div>
			<label>Phone: </label>
			<span>". $result['records'][$i]['phone'] ."</span>
			</div>

			<div>
			<label>Email :<label>
			<span>". $result['records'][$i]['email'] ."</span>
			</div>

			</div>
			";
		}
		?>
	</section>

	<section class="content">
		<?php 
		for ($i=9; $i <= 11 ; $i++) { 

			echo "
			<div class='hls-card'>
			<div>
			<img class='image-card' src='https://image.flaticon.com/icons/png/512/1685/1685853.png' style='height:100px'>
			</div>
			<div>
			<label>Name: </label>
			<span>". $result['records'][$i]['name'] ."</span>
			</div>

			<div>
			<label>City: </label>
			<span>". $result['records'][$i]['city'] ."</span>
			</div>
			
			<div>
			<label>Phone: </label>
			<span>". $result['records'][$i]['phone'] ."</span>
			</div>

			<div>
			<label>Email :<label>
			<span>". $result['records'][$i]['email'] ."</span>
			</div>

			</div>
			";
		}
		?>
	</section>
	<footer>
		black footer with something really cool right here
	</footer>

</body>
</html>