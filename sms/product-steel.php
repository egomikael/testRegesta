<?php
include "header.php"; ?>

		<!-- SECTION -->
		<div class="section main main-raised">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Product main img -->
					
					<?php
     include "db.php";
     $product_id = $_GET["p"];
     $sql = " SELECT * FROM products ";
     $sql = " SELECT * FROM products WHERE product_id = $product_id";
     //$sql = " SELECT steel_id, steel_price FROM steel ";
	 
     if (!$con) {
         die("Connection failed: " . mysqli_connect_error());
     }
     $result = mysqli_query($con, $sql);
     if (mysqli_num_rows($result) > 0) {
         while ($row = mysqli_fetch_assoc($result)) {
             echo '
									
                                    
                                
                                <div class="col-md-5 col-md-push-2">
                                <div id="product-main-img">
                                    <div class="product-preview">
                                        <img src="product_images/' .
                 $row["product_image"] .
                 '" alt="">
                                    </div>
                                </div>
                            </div>
                                
                                <div class="col-md-2  col-md-pull-5">
                                <div id="product-imgs">
                                    <div class="product-preview">
                                        <img src="product_images/' .
                 $row["product_image"] .
                 '" alt="">
                                    </div>
                                </div>
                            </div>

                                 
									'; ?>
									<?php
         echo '
									
                                    
                                   
                    <div class="col-md-5">
						<div class="product-details">
							<h2 class="product-name">' .
             $row["product_title"] .
             '</h2>
							<div>
								<h3 class="product-price">' .
             $row["product_price"] .'€ <b class="product-old-price">lowest price</b></h3>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

							<div class="add-to-cart">
								<div class="qty-label">
									<label for="quantity">Quantity</label>
									<input type="number" id="quantity" name="quantity" min="1" max="23">
								</div>
								<div class="btn-group" style="margin-left: 25px; margin-top: 15px">
								<button onclick="supplierSteel();" class="add-to-cart-btn" pid="' .
             $row["product_id"] .
             '"  id="product"><i class="fa fa-shopping-cart"></i>Check</button>
                                </div>
							</div>
						</div>
						<h3 id="price"></h3>
						<h4 id="results"></h4>
					</div>
					<!-- /Product main img -->


					<!-- Product tab -->
					<div class="col-md-12">
						<div id="product-tab">
							<!-- product tab nav -->
							<ul class="tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab1">Suppliers</a></li>
							</ul>
							<!-- /product tab nav -->

							<!-- product tab content -->
							<div class="tab-content">
							
								<!-- tab1  -->
								<div id="tab1" class="tab-pane fade in active">
									<div class="row">
										<div class="col-md-12">
											<ul>
												<li>- <b>Supplier 1</b> has 8 pcs in stock at 5,00&euro; each.<br>Min. days to ship order is 10.</li>
												<br>
												<li>- <b>Supplier 2</b> has 15 pcs in stock at 5,50&euro; each and offers a 5% discount if you order 10pcs. <br>Min. days to ship order is 5.</li>
												<br>
												<li>- <b>Supplier 3</b> has 23 pcs in stock at 6,00&euro; each and offers a discount of 10% if you order 10pcs.<br>Min. days to ship order is 4.</li>
											</ul>
										</div>
									</div>
								</div>
								<!-- /tab1  -->
							</div>
							<!-- /product tab content  -->
						</div>
					</div>
					<!-- /product tab -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
';
         $_SESSION["product_id"] = $row["product_id"];

         }
     }
     ?>	
								<?php
        include "db.php";
        $product_id = $_GET["p"];
        ?>
					<!-- product -->
					
					<!-- /product -->

				</div>
				<!-- /row -->
                
			</div>
			<!-- /container -->
		</div>
		<!-- /Section -->

		<!-- FOOTER -->
<?php
include "footer.php";


?>
