<div class="content">
  <div class="row-fluid no-margin">
	<div class="span12">					
		<ul class="quicktasks">
			
			<?php  if($u['events']==1){?>
			<li>
				<a href="index.php?page=events">
					<img src="img/icons/essen/32/calendar.png" alt="">
					<span>Events</span>
				</a>
			</li>
			<?php }?>
			
			<?php  if($u['category']==1){?>
			<li>
				<a href="index.php?page=category">
					<img src="img/icons/essen/32/basket.png" alt="">
					<span>Category POI</span>
				</a>
			</li>
			<?php }?>
			
			<?php  if($u['category']==1){?>
			<li>
				<a href="index.php?page=category&typ=1">
					<img src="img/icons/essen/32/basket.png" alt="">
					<span>Category Events</span>
				</a>
			</li>
			<?php }?>
		
			<?php  if($u['users']==1){?>
			<li>
				<a href="index.php?page=users">
					<img src="img/icons/essen/32/hire-me.png" alt="">
					<span>Users</span>
				</a>
			</li>
			<?php }?>
			
			<?php  if($u['points']==1){?>
			
			<li>
				<a href="index.php?page=points">
					<img src="img/icons/essen/32/full-time.png" alt="">
					<span>Points</span>
				</a>
			</li>
			<?php }?>
			<!--<li>
				<a href="#">
					<img src="img/icons/essen/32/invoice.png" alt="">
					<span>Invoices</span>
				</a>
			</li>-->
			<?php  if($u['tours']==1){?>
			<li>
				<a href="index.php?page=tours">
					<img src="img/icons/essen/32/bank.png" alt="">
					<span>Tours</span>
				</a>
			</li>
			<?php }?>
			<!--<li>
				<a href="#">
					<img src="img/icons/essen/32/statistics.png" alt="">
					<span>Site statistics</span>
				</a>
			</li>
			<li>
				<a href="#">
					<img src="img/icons/essen/32/shipping.png" alt="">
					<span>Check shipping</span>
				</a>
			</li>-->
			<?php  if($u['island']==1){?>
			<li>
				<a href="index.php?page=island">
					<img src="img/icons/essen/32/bestseller.png" alt="">
					<span>Country And Islnad</span>
				</a>
			</li>
			<?php }?>
			
			<?php  if($u['cms']==1){?>
			<li>
				<a href="index.php?page=cms&id=1">
					<img src="img/icons/essen/32/order-149.png" alt="">
					<span>CMS</span>
				</a>
			</li>
			<?php }?>
			
			<!--<li>
				<a href="#">
					<img src="img/icons/essen/32/config.png" alt="">
					<span>Configuration</span>
				</a>
			</li>
			<li>
				<a href="#">
					<img src="img/icons/essen/32/heart.png" alt="">
					<span>My Favourites</span>
				</a>
			</li>-->
		</ul>
	</div>
  </div>
</div>
