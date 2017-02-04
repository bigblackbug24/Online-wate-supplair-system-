<div class="header">
		<div class="header-top">
			<div class="container">
				<div class="top-nav">
					<span class="menu"> </span>
					<ul>
						<li  ><a href="index.php" class="scroll"><span data-hover="COMPANY">COMPANY</span></a><label> </label></li>
						<li><a href="products.php" class="scroll"> <span data-hover="PRODUCTS">PRODUCTS</span></a><label> </label></li>
                        <?php if(isset($_SESSION['email']))
						{
							?>
                            <li><a href="logout.php" class="scroll"><span data-hover="Logout"><?php echo $_SESSION['email']?></span></a><label> </label></li>
                            <?php
						}
						else
						{
						?>
                        <li><a href="user.php" class="scroll"><span data-hover="USERS">USERS</span></a><label> </label></li>
                        <?php } ?>
						<li><a href="status.php" class="scroll"><span data-hover="SERVICES">ORDER STATUS</span></a><label> </label></li>
                        <li><a href="services.php" class="scroll"><span data-hover="SERVICES">SERVICES</span></a><label> </label></li>
						<li><a href="contact.php" class="scroll"><span data-hover="CONTACTS">CONTACT US</span></a><label> </label></li>
						<li><a href="blog.php" class="scroll"><span data-hover="RESOURCES">ABOUT US</span></a><label> </label></li>
                        
					</ul>
					<!--script-->
				<script>
					$("span.menu").click(function(){
						$(".top-nav ul").slideToggle(500, function(){
						});
					});
			</script>
				</div>
				 <div class="search-box">
					    <div id="sb-search" class="sb-search">
							<form>
								<input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
								<input class="sb-search-submit" type="submit" value="">
								<span class="sb-icon-search"> </span>
							</form>
						</div>
				    </div>
					<!-- search-scripts -->
					<script src="js/classie.js"></script>
					<script src="js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
					<!-- //search-scripts -->
			<div class="clearfix"> </div>
		</div>
		</div>
		<div class="header-bottom">
			<div class="container">
			<div class="logo">
					<a href="index.php"><img src="images/cooltext189854530610201.png" alt=" " /></a>
			</div>
			<div class="top-tele">
					<div class="in-phone"><i class="phone"> </i>
					<div class="number">
						<p>Phone:</p>
						<span>00 92 45 6232 42</span>
					</div>
						<div class="clearfix"> </div>
					</div>
                    
                    
					<div class="in-phone-in" ><i class="phone new-phone" style="margin-top:-0px;"> </i>
					<div class="number">
						<p>Location:</p>
						<span>25 Building No</span>
						<span>W-New Multan, Multan</span>
					</div>
						<div class="clearfix"> </div>
					</div>
			</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>