<head>
		<title>りんの物置場</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/assets/css/main.css" />
		<link rel="stylesheet" href="コミット.css" />
		<noscript><link rel="stylesheet" href="/assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<a href="/index.html" class="logo"><strong>RN</strong> <span>りんの物置場</span></a>
						<nav>
							<a href="#menu">メニュー</a>
						</nav>
					</header>
			</div>

			<nav id="menu">
				<ul class="links">
					<li><a href="/index.html">ホーム</a></li>
					<li><a href="/お知らせ">お知らせ</a></li>
					<li><a href="/web">自作便利サイト一覧</a></li>
					<li><a href="/bot">自作DiscordのBOT</a></li>
					<li><a href="/MC鯖参加受付">りん鯖！！</a></li>
					<li><a href="/MCPE配布ワールド">マインクラフト統合版の配布ワールド</a></li>
				</ul>
			</nav>


		<!-- Scripts -->
			<script src="/assets/js/jquery.min.js"></script>
			<script src="/assets/js/jquery.scrolly.min.js"></script>
			<script src="/assets/js/jquery.scrollex.min.js"></script>
			<script src="/assets/js/browser.min.js"></script>
			<script src="/assets/js/breakpoints.min.js"></script>
			<script src="/assets/js/util.js"></script>
			<script src="/assets/js/main.js"></script>
<div class="main">
<?php
if(isset($_POST['club'])) {
    exec("ls | grep -v -E 'コミット.php'| xargs rm -r");
    exec("git clone https://github.com/rinkunnn-hp/rinkunnn-server.git");
    exec("mv ./rinkunnn-server/* /var/www/html");
    exec("rm -r /var/www/html/rinkunnn-server");
}
?>
<form action="コミット.php" method="post">
    <input type="submit" name="club" value="コミット">
</form>
<?php
</div>
</body>
</html>
