
	<!-- The cursor elements -->
	<div class="df-custom-cursor-wrap">
		<div id="df-custom-cursor"></div>
	</div>

	<!-- Javascript Files
	================================================== -->
	<!-- Core JS -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/jquery/jquery-migrate.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/js/core.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	
	<!-- Vendor JS -->
	
	<!-- Template JS -->
	<script src="assets/js/init.js"></script>
	<script src="assets/js/custom.js"></script>
	
	<!-- Duotone SVG color filter -->
	<svg xmlns="http://www.w3.org/2000/svg" class="svg-filters">
		<filter id="duotone_base">
			<feColorMatrix type="matrix" result="grayscale"
				values="1 0 0 0 0
								1 0 0 0 0
								1 0 0 0 0
								0 0 0 1 0" />
			<feComponentTransfer color-interpolation-filters="sRGB" result="duotone_base_filter">
				<feFuncR type="table" tableValues="0.082352941176471 0.419607843137255"></feFuncR>
				<feFuncG type="table" tableValues="0.090196078431373 0.443137254901961"></feFuncG>
				<feFuncB type="table" tableValues="0.125490196078431 0.6"></feFuncB>
				<feFuncA type="table" tableValues="0 1"></feFuncA>
			</feComponentTransfer>
		</filter>
	</svg>

</body>

</html>
