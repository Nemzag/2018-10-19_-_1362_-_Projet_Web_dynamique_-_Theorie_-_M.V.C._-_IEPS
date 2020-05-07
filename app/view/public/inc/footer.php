<?php
/*
 * Created by PhpStorm.
 * User: nemza
 * Date: 2018-11-08
 * Time: 11:45
 */

// PHASE 01-STRUCTURE
?>

		<!-- Begin Footer -->
		<footer class="footer">

			<!-- JavaScript -->
			<!-- PHASE 05-SECTIONS -->
			<?php isset($_GET['url'])? $path = path($_GET['url']) : $path = ''; ?>
			<script src="<?= $path; ?>asset/public/js/popper.min.js"></script>
			<script src="<?= $path; ?>asset/public/js/bootstrap-material-design.min.js"></script>

			<p>CopyRight Arifi Gazmen.</p>

		</footer>
		<!-- End Footer -->

	</body>
	<!-- End Body -->

</html>
<!-- End HTML -->
