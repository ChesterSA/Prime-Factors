<script type="text/javascript" src="http://services.iperfect.net/js/IP_generalLib.js"></script>
<form action="index.php" method="post">
<p class="input">
  Number to Solve: <input type="text" name="num" value=<?php echo isset($_POST['num']) ? $_POST['num'] : ''?>>
</p>
<input type="submit">
</form>
