<footer>
	<div class="inner-footer">
		<h2>Tours of the Month!</h2>

		<?php dynamic_sidebar('sidebar-footer') ; ?>



	</div> <!-- end inner-footer -->

	<div class = "inner-footer">
		<ul>
			<li>
				Copyright &copy; <?php echo date('Y') ; ?>
			</li>
			<li>All Rights Reserved</li>
			<li><a href="">Coding By Poul</a></li>
			<li><a href="">Valid HTML</a></a></li>
			<li><a href="">Valid CSS</a></li>
		</ul>
	</div><!-- end inner-footer -->
    
</footer>
    <script>
		$(document).ready(function(){
			$(".nav-button").click(function () {
			$(".nav-button,.primary-nav").toggleClass("open");
			});    
		});
		</script>
  </body>
</html>