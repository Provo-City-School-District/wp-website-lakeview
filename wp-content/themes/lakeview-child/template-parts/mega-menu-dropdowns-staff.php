<div class="dropDownColumn">
	<?php 
		//checks if this template section is loading into the menu or into the sidebar/content area and assigns the proper heading
		if(is_page( 'faculty-staff' ) || in_array( 70, get_post_ancestors($post))){
			?>
			<h2><img src="https://lakeview.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/school-info.svg" alt="" />Teachers</h2>
			<?php	
		} else {
			?>
			<h3><img src="https://lakeview.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/school-info.svg" alt="" />Teachers</h3>
			<?php
		}	
	?>
		<ul>
			<li class="int"><a href="https://lakeview.provo.edu/faculty-staff/teachers-directory/">Find Your Teacher</a></li>
			<li class="int"><a href="https://canvas.provo.edu">Canvas Login</a></li>
			<li class="int"><a href="https://lakeview.provo.edu/faculty-staff/teacher-license-information/">Teacher License Information</a></li>
			<!-- <li class="int"><a href="">School Supply List</a></li> -->
		</ul>
</div>
<div class="dropDownColumn">
	<?php 
		//checks if this template section is loading into the menu or into the sidebar/content area and assigns the proper heading
		if(is_page( 'faculty-staff' ) || in_array( 70, get_post_ancestors($post))){
			?>
			<h2><img src="https://lakeview.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/school-info.svg" alt="" />Staff</h2>
			<?php	
		} else {
			?>
			<h3><img src="https://lakeview.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/school-info.svg" alt="" />Staff</h3>
			<?php
		}	
	?>
		<ul>
			<li class="int"><a href="https://lakeview.provo.edu/main-office-administration/">Administration &amp; Main Office</a></li>
			<li class="int"><a href="https://lakeview.provo.edu/faculty-staff/education-support-professionals/">Education Support Professionals</a></li>
		</ul>
</div>