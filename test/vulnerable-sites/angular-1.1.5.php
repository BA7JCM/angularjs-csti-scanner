<!DOCTYPE html>
<html>
	<head>
		<title>1.1.5</title>
		<script src="https://code.angularjs.org/1.1.5/angular.min.js"></script>
	</head>
	<body ng-app="">
		<a href="?vulnerable=payload">Payload</a>
		<?php if(isset($_GET['vulnerable'])): ?>
		<?= htmlentities($_GET['vulnerable']); ?>
		<?php endif; ?>
	</body>
</html>