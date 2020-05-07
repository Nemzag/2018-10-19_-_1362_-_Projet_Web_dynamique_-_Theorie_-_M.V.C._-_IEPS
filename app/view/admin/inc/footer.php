<?php
/**
 * Created by PhpStorm.
 * User: Nemzag aka Gazmen Arifi (Shkypi, 1979-09-30).
 * Date: 2018-12-07
 * Time: 10:21
 */

// PHASE 08-ADMIN
?>

		</div>
	<!-- /#wrapper -->

	<footer class="footer">
		<?php isset($_GET['url']) ? $path = path($_GET['url']) : $path = ''; ?>

		<!-- Bootstrap Core JavaScript -->
		<script src="<?= $path ?>asset/admin/js/bootstrap.min.js"></script>

		<!-- Metis Menu Plugin JavaScript -->
		<script src="<?= $path ?>asset/admin/js/metisMenu.min.js"></script>

		<!-- Morris Charts JavaScript -->
		<script src="<?= $path ?>asset/admin/js/raphael.min.js"></script>

		<!-- Custom Theme JavaScript -->
		<script src="<?= $path ?>asset/admin/js/startmin.js"></script>

	</footer>

	</body>
</html>
