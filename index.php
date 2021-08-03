

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap');
		
		body,html{
			padding: 0;
			margin: 0;
			background: #0e0e0e;
			color: white;
			font-family: 'Montserrat', sans-serif;
			font-weight: 300;
		}
		.content{
			margin: 30px 60px;
		}
		.header .name{
			font-size: 45px;
			letter-spacing: 10px;
			font-family: 'Montserrat', sans-serif;
			font-weight: 700;
			margin-bottom: 15px;
		}
		.header .course{
			font-size: 15px;
			letter-spacing: 6px;
			font-family: 'Montserrat', sans-serif;
			font-weight: 300;
			margin-bottom: 60px;
		}
		.about {
			margin-bottom: 60px;
		}
		.title{
			font-size: 15px;
			letter-spacing: 15px;
			font-family: 'Montserrat', sans-serif;
			font-weight: 700;
			border: 1px solid white;
			width: 300px;
			padding: 8px 0px;
			text-align: center;
			margin-bottom: 30px;
		}
		.label-group{
			display: flex;
			width: 300px;
			margin-bottom: 15px;
		}
		.label-group .label{
			font-family: 'Montserrat', sans-serif;
			font-weight: 700;
			font-size: 15px;
			margin-right: auto;
		}
		.skills{
			width: 300px;
		}
		.row {
		    display: flex;
		    margin-bottom: 30px;
		}

		.column {
		    flex: 50%;
		}
	</style>
</head>
<body>

	<?php
$name = "James <br> Francis Ga";
$birthday = "September 07, 2001";
$age = 19;
$location = "Taguig City";
$email = "gajamesfrancis@gmail.com";
$citizenship = "Filipino";
$skills = array("HTML", "CSS", "BOOTSTRAP",  "PHP", "MYSQL" , "JAVA", "C++");
$i=0;

?>

	<div class="content">
		<div class="header">
			<div class="name"> JAMES  <br> FRANCIS GA</div>
			<div class="course"> BS IN INFORMATION AND NETWORK SECURITY</div>
		</div>
		<div class="about">
			<div class="title">ABOUT
			</div>
			<div class="label-group">
				<div class="label">BIRTHDAY: </div>
				<div class="label-content"><?php echo $birthday; ?></div>
			</div>
			<div class="label-group">
				<div class="label">AGE: </div>
				<div class="label-content"><?php echo $age; ?></div>
			</div>
			<div class="label-group">
				<div class="label">LOCATION: </div>
				<div class="label-content"><?php echo $location; ?></div>
			</div>
			<div class="label-group">
				<div class="label">EMAIL: </div>
				<div class="label-content"><?php echo $email; ?></div>
			</div>
			<div class="label-group">
				<div class="label">CITIZENSHIP: </div>
				<div class="label-content"><?php echo $citizenship; ?></div>
			</div>
		</div>
		<div class="skills">
			<div class="title">SKILLS</div>
			
			<?php

				while ($i < count($skills)) {
				?>	
					<div class="row">
					<div class="column"><?php echo $skills[$i] ?></div>
				<?php
					if($i+1 < count($skills)){
				?>
					<div class="column"><?php echo $skills[$i+1] ?></div>
				<?php
					}
					$i+=2;
					?>
				</div>
			<?php
				}
			?>
			</div>
		</div>
	</div>
	
</body>
</html>