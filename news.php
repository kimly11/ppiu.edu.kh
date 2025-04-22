<?php require "includes/header.php"; ?>
<?php require "config/config.php"; ?>
<?php 
    $desserts = $conn->query("SELECT * FROM products WHERE type='dessert'");
    $desserts->execute();
    $allDesserts = $desserts->fetchAll(PDO::FETCH_OBJ);

    //grapping drinks
    $drinks = $conn->query("SELECT * FROM products WHERE type='drink'");
    $drinks->execute();
    $allDrinks = $drinks->fetchAll(PDO::FETCH_OBJ);

    //grapping announcements - fixed this section
    $announcements = $conn->query("SELECT * FROM products WHERE type='announ'");
    $announcements->execute();
    $allAnnouncements = $announcements->fetchAll(PDO::FETCH_OBJ);
?>

    <section class="home-slider owl-carousel">

      <div class="slider-item" style="
			background-image: url('images/about55.jpg');
			background-size: contain;
			background-repeat: no-repeat;
			background-position: center;
			height: 100vh;
			position: relative;
	  background-image: url(images/about5.jpg);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Our News</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo APPURL; ?>">Home</a></span> <span>News</span></p>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- <section class="ftco-section">
    	<div class="container">
        <div class="row">
        
        	
        	<div class="col-md-6">
        		<h3 class="mb-5 heading-pricing ftco-animate">Desserts</h3>
				<?php foreach($allDesserts as $dessert) : ?>
					<div class="pricing-entry d-flex ftco-animate">
						<div class="img" style="background-image: url(<?php echo IMAGEPRODUCTS; ?>/<?php echo $dessert->image; ?>);"></div>
						<div class="desc pl-3">
							<div class="d-flex text align-items-center">
								<h3><span><?php echo $dessert->name; ?></span></h3>
								<span class="price">$<?php echo $dessert->price; ?></span>
							</div>
							<div class="d-block">
								<p><?php echo $dessert->description; ?></p>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
        		
        	</div>

        	<div class="col-md-6">
        		<h3 class="mb-5 heading-pricing ftco-animate">Drinks</h3>
				<?php foreach($allDrinks as $drink) : ?>
					<div class="pricing-entry d-flex ftco-animate">
						<div class="img" style="background-image: url(<?php echo IMAGEPRODUCTS; ?>/<?php echo $drink->image; ?>);"></div>
						<div class="desc pl-3">
							<div class="d-flex text align-items-center">
								<h3><span><?php echo $drink->name; ?></span></h3>
								<span class="price">$<?php echo $drink->price; ?></span>
							</div>
							<div class="d-block">
								<p><?php echo $drink->description; ?></p>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
        		
        	</div>
        </div>
    	</div>
    </section> -->

    <section class="ftco-menu mb-5 pb-5">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<!-- <span class="subheading">Discover</span> -->
            <h2 class="mb-4">ព័ត៌មាន</h2>
            <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
          </div>
        </div>
    		<div class="row d-md-flex">
	    		<div class="col-lg-12 ftco-animate p-md-5">
		    		<div class="row">
		          <div class="col-md-12 nav-link-wrap mb-5">
		            <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">

		              <a class="nav-link active" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">News</a>

		              <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Scholarship</a>
		              <a class="nav-link" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">announcement</a>

		            </div>
		          </div>
		          <div class="col-md-12 d-flex align-items-center">
		            
		            <div class="tab-content ftco-animate" id="v-pills-tabContent">

		              

		              <div class="tab-pane fade show active" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
		                <div class="row">
							<?php foreach($allDrinks as $drink) : ?>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="allnews.php?id=<?php echo $drink->id; ?>" class="menu-img img mb-4" style="background-image: url(<?php echo IMAGEPRODUCTS; ?>/<?php echo $drink->image; ?>);"></a>
		              				<div class="text">
		              					<h3><a href="allnews.php?id=<?php echo $drink->id; ?>"><?php echo $drink->name; ?></a></h3>
		              					<p><?php echo $drink->description; ?></p>
		              					<p class="price"><span><?php echo $drink->price; ?></span></p>
		              					<p><a href="allnews.php?id=<?php echo $drink->id; ?>" class="btn btn-primary btn-outline-primary">show</a></p>
		              				</div>
		              			</div>
		              		</div>
							<?php endforeach; ?>
		              		
		              	</div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
		                <div class="row">
							<?php foreach($allDesserts as $dessert) : ?>
								<div class="col-md-4 text-center">
									<div class="menu-wrap">
										<a href="allnews.php?id=<?php echo $dessert->id; ?>" class="menu-img img mb-4" style="background-image: url(<?php echo IMAGEPRODUCTS; ?>/<?php echo $dessert->image; ?>);"></a>
										<div class="text">
											<h3><a href="allnews.php?id=<?php echo $dessert->id; ?>"><?php echo $dessert->name; ?></a></h3>
											<p><?php echo $dessert->description; ?></p>
											<p class="price"><span><?php echo $dessert->price; ?></span></p>
											<p><a href="allnews.php?id=<?php echo $dessert->id; ?>" class="btn btn-primary btn-outline-primary">show</a></p>
										</div>
									</div>
								</div>
							<?php endforeach; ?>
		              		
		              	</div>
		              </div>

					  <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
						<div class="row" >
							<?php foreach($allAnnouncements as $announcement) : ?>
								<div class="col-md-4 text-center" style="width: 380px; height: 800px;">
									<div class="menu-wrap">
										<a href="allnews.php?id=<?php echo $announcement->id; ?>" class="menu-img img mb-4" style="background-image: url(<?php echo IMAGEPRODUCTS; ?>/<?php echo $announcement->image; ?>);"></a>
										<div class="text">
											<h3><a href="allnews.php?id=<?php echo $announcement->id; ?>"><?php echo $announcement->name; ?></a></h3>
											<p><?php echo $announcement->description; ?></p>
											<p class="price"><span><?php echo $announcement->price; ?></span></p>
											<p><a href="allnews.php?id=<?php echo $announcement->id; ?>" class="btn btn-primary btn-outline-primary">show</a></p>
										</div>
									</div>
								</div>
							<?php endforeach; ?>
						</div>
					</div>

						

		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
    	</div>
    </section>
	







<?php require "includes/footer.php"; ?>
    