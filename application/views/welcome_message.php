<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter 3.0 developed-007 by ariefstd &copy;2016</h1>

	<div id="body">
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>
		<?php foreach($databaru as $m): ?>
			<Input type="hidden" name="id_user" value="<?php echo $m['id']; ?>" />
			<Input type="text" name="id_user" value="<?php echo $m['username']; ?>" />
			<Input type="text" name="id_user" value="<?php echo $m['password']; ?>" />&nbsp;&nbsp;&nbsp;
			<a href="<?php echo base_url() ?>index.php/update?id=<?php echo $m['id'] ?>">ubah</a>
			<a href="<?php echo base_url() ?>index.php/delete?id=<?php echo $m['id'] ?>">hapus</a>
			<?php echo "<br>" ?>			
		<?php endforeach ?>
		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/Welcome.php</code>
		<p>
		<form action="<?php echo base_url(); ?>index.php/insert" method="post">
			<table>
			  <tr>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>		
			    <td>&nbsp;</td>
			  </tr>
			  <tr>
			    <td><Input type="hidden" name="tanggal" placeholder="username" value="<?php echo date('Y-m-d') ?>" /></td>
			    <td><Input type="text" name="username" placeholder="username" /></td>		
			    <td><Input type="password" name="password" placeholder="password" /></td>
			  </tr>
			  <tr>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>		
			    <td><input type="submit" value="Simpan" /></td>
			  </tr>
			</table>

		</form>

		</p>
		<p><a href="<?php //echo base_url(); ?>" >Input Data</a></p>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>