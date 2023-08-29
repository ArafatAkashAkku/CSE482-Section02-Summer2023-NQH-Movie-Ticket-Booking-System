<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Movie Filtering Search</title>
	<link rel="stylesheet" href="./css/filter.css">
	<link rel="stylesheet" href="./css/responsive.css">

</head>

<body>

	<div class="container">
		<div class="sidebar">

			<div class="filter">
				<h3>Category Filter</h3>

				<div class="btn-group">
					<button type="button" class="btn1">Select All</button>
					<button type="button" class="btn2">Clear All</button>
				</div><br>

				<label class="checkbox">Thriller
					<input type="checkbox" checked="checked">
					<span class="checkmark"></span>
				</label>
				<label class="checkbox">Action
					<input type="checkbox">
					<span class="checkmark"></span>
				</label>
				<label class="checkbox">Comedy
					<input type="checkbox">
					<span class="checkmark"></span>
				</label>
				<label class="checkbox">Fantasy
					<input type="checkbox">
					<span class="checkmark"></span>
				</label>
				<label class="checkbox">Animation
					<input type="checkbox">
					<span class="checkmark"></span>
				</label>
				<label class="checkbox">Drama
					<input type="checkbox">
					<span class="checkmark"></span>
				</label>
				<label class="checkbox">Family
					<input type="checkbox">
					<span class="checkmark"></span>
				</label>
				<label class="checkbox">Horror
					<input type="checkbox">
					<span class="checkmark"></span>
				</label>
				<label class="checkbox">Sci-Fi
					<input type="checkbox">
					<span class="checkmark"></span>
				</label>
				<label class="checkbox">Mystery
					<input type="checkbox">
					<span class="checkmark"></span>
				</label>
				<label class="checkbox">Romance
					<input type="checkbox">
					<span class="checkmark"></span>
				</label>
				<label class="checkbox">Biography
					<input type="checkbox">
					<span class="checkmark"></span>
				</label>

				<div class="btn-group">
					<button type="button" class="btn1">Search</button>
				</div>

			</div>
		</div>
		<div class="contant">
			<div class="header">
				<p>Movies</p>
			</div>
			<section class="movies" id="movies">
				<h2 class="heading">Advanced Movie Search</h2>
				<!-- movies container  -->
				<div class="movies-container">
					<!-- box-1  -->
					<div class="box">
						<div class="box-img">
							<img src="./assets/dr strange.jpg" alt="">
						</div>
						<h3>Dr.Strange</h3>
						<span>120 min | Action</span>
					</div>

					<!-- box-2  -->
					<div class="box">
						<div class="box-img">
							<img src="./assets/pathan.jpg" alt="">
						</div>
						<h3>Pathan</h3>
						<span>120 min | Action</span>
					</div>

					<!-- box-3  -->
					<div class="box">
						<div class="box-img">
							<img src="./assets/avengers1.jpg" alt="Avengers">
						</div>
						<h3><a href="./details.html">Avengers</h3></a>
						<span>120 min | Thriller</span>
					</div>

					<!-- box-4  -->
					<div class="box">
						<div class="box-img">
							<img src="./assets/johnwick2.jpg" alt="johnwick2">
						</div>
						<h3>John Wick 2</h3>
						<span>120 min | Adventure</span>
					</div>

					<!-- box-5  -->
					<div class="box">
						<div class="box-img">
							<img src="./assets/aquaman.jpg" alt="">
						</div>
						<h3>Aquaman</h3>
						<span>120 min | Action</span>
					</div>

					<!-- box-6  -->
					<div class="box">
						<div class="box-img">
							<img src="./assets/Black Panther.jpg" alt="">
						</div>
						<h3>Black Panther</h3>
						<span>120 min | Thriller</span>
					</div>

					<!-- box-7  -->
					<div class="box">
						<div class="box-img">
							<img src="./assets/Uncharted.jpg" alt="">
						</div>
						<h3>Uncharted</h3>
						<span>120 min | Adventure</span>
					</div>

					<!-- box-8  -->
					<div class="box">
						<div class="box-img">
							<img src="./assets/Brahmastra.jpeg" alt="">
						</div>
						<h3>Brahmastra</h3>
						<span>120 min | Action</span>
					</div>

					<!-- box-9  -->
					<div class="box">
						<div class="box-img">
							<img src="./assets/Mortal-Engines.jpg" alt="">
						</div>
						<h3>Mortal-Engines</h3>
						<span>120 min | Action</span>
					</div>

					<!-- box-10  -->
					<div class="box">
						<div class="box-img">
							<img src="./assets/Flash.jpg" alt="">
						</div>
						<h3>Flash</h3>
						<span>120 min | Action</span>
					</div>

					<div class="box">
						<div class="box-img">
							<img src="./assets/Batman vs Superman.jpg" alt="">
						</div>
						<h3>Batman vs Superman</h3>
						<span>120 min | Thriller</span>
					</div>
					<div class="box">
						<div class="box-img">
							<img src="./assets/avatar-the way of water.jpg" alt="">
						</div>
						<h3>Avatar - The way of water</h3>
						<span>120 min | Thriller</span>
					</div>
				</div>
			</section>

		</div>
	</div>

</body>

</html>