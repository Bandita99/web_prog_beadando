<?php session_start(); ?>
<?php if(file_exists('./logicals/'.$keres['fajl'].'.php')) { include("./logicals/{$keres['fajl']}.php"); } ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title><?= $ablakcim['cim'] ?></title>
	<script src="https://kit.fontawesome.com/ecfd83b295.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="./styles/stilus.css" type="text/css">
	<script type="text/javascript" src="js/main.js"></script>

	<?php if(file_exists('./styles/'.$keres['fajl'].'.css')) { ?><link rel="stylesheet" href="./styles/<?= $keres['fajl']?>.css" type="text/css"><?php } ?>
</head>
<body>
	<header>
		<img src="./images/<?=$fejlec['kepforras']?>" alt="<?=$fejlec['kepalt']?>">
		<div id="menu">
	<nav>
		<ul>
			<?php foreach ($oldalak as $url => $oldal) { ?>
				<?php if(! isset($_SESSION['login']) && $oldal['menun'][0] || isset($_SESSION['login']) && $oldal['menun'][1]) { ?>
					<li<?= (($oldal == $keres) ? ' class="active"' : '') ?>>
					<a href="<?= ($url == '/') ? '.' : ('?oldal=' . $url) ?>">
					<?= $oldal['szoveg'] ?></a>
					</li>
				<?php } ?>
			<?php } ?>
		</ul>
	</nav>
	</div>
		<div id="be"><?php if(isset($_SESSION['login'])) { ?>Bejlentkezve: <strong><?= $_SESSION['csn']." ".$_SESSION['un']." (".$_SESSION['login'].")" ?></strong><?php } ?></div>
	</header>
	
	
	<div id="content">
		<?php include("./templates/pages/{$keres['fajl']}.tpl.php"); ?>
	</div>
    <footer>
        <?php if(isset($lablec['copyright'])) { ?>&copy;&nbsp;<?= $lablec['copyright'] ?> <?php } ?>
		&nbsp;
        <?php if(isset($lablec['nev'])) { ?><?= $lablec['nev']; ?><?php } ?>
    </footer>
</body>
</html>
