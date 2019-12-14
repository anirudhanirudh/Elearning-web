 <div id='bodyleft'>
	 <h3>Content Management</h3>
	 <ul>
		 <li><a href="index.php"><i class="fas fa-home"></i> Dashboard</a></li>
		  <li><a href="index.php?cat"><i class="fab fa-trello"></i> View Categories</a></li>
		  <li><a href="index.php?sub_cat"><i class="fas fa-table"></i> View sub categories</a></li>
		  <li><a href="index.php?lang"><i class="fas fa-language"></i> View Languages</a></li>
	 </ul>
	  <h3>Course Management</h3>
	 <ul>
		 <li><a href='#'><i class="fab fa-discourse"></i> Active courses</a></li>
		  <li><a href='#'><i class="fas fa-stopwatch"></i> Pending courses</a></li>
		  <li><a href='#'><i class="fas fa-pause-circle"></i> Unpublish courses</a></li>
		  <li><a href='#'><i class="fab fa-searchengin"></i> Advance course search</a></li>
		  
	 </ul>
	 
	  <h3>User Management</h3>
	 <ul>
		 <li><a href='#'><i class="fas fa-users"></i> View all students</a></li>
		  <li><a href='#'><i class="fas fa-chalkboard-teacher"></i> View all Teachers</a></li>
		  <li><a href='#'><i class="fas fa-search-location"></i> Advance User search</a></li>
		 
		  </ul>
	  <h3>Payment Management</h3>
	 <ul>
		 <li><a href='#'><i class="fas fa-rupee-sign"></i> Pay to Teacher</a></li>
		  <li><a href='#'><i class="far fa-money-bill-alt"></i> Complete Payment</a></li>
		  <li><a href='#'><i class="fas fa-wallet"></i> Advance Payment Searching</a></li>
		  
		   </ul>
	 
	  <h3>Pages Management</h3>
	 <ul>
		 <li><a href="index.php?terms"><i class="fas fa-book-reader"></i> Terms & Conditions Page</a></li>
		  <li><a href="index.php?contact"><i class="fas fa-phone"></i> Contact Us Page</a></li>
		  <li><a href="index.php?about"><i class="fas fa-clipboard-user"></i> About Us Page</a></li>
		 <li><a href="index.php?faqs"><i class="far fa-question-circle"></i> FAQ's Page</a></li>
		 <li><a href='#'><i class="fad fa-highlighter"></i> Edit Sliders</a></li>
		  
		   </ul>
	 
</div>
<?php
	if(isset($_GET['cat'])){
		include("cat.php");
	}
if(isset($_GET['lang'])){
		include("lang.php");
	}
if(isset($_GET['sub_cat'])){
		include("sub_cat.php");
	}
if(isset($_GET['terms'])){
		include("terms.php");
	}
if(isset($_GET['contact'])){
		include("contact.php");
	}
if(isset($_GET['faqs'])){
		include("faqs.php");
	}
if(isset($_GET['about'])){
		include("about.php");
	}
?>