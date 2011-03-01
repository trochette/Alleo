<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <title>Alleo - Gagnez à covoiturer</title>
        <link href="<?php echo $this->config->item('base_url');?>styles/main.css" type="text/css" rel="stylesheet">
        <link href="<?php echo $this->config->item('base_url');?>styles/inscription.css" type="text/css" rel="stylesheet">
		
		
		<script type="text/javascript" src="<?php echo $this->config->item('base_url');?>js/jquery-1.5.js"></script> 
        <script type="text/javascript" src="<?php echo $this->config->item('base_url');?>js/jquery-ui.js"></script> 
        <script type="text/javascript" src="<?php echo $this->config->item('base_url');?>js/main.js"></script> 
        <link href="<?php echo $this->config->item('base_url');?>jquery-ui.css" type="text/css" rel="stylesheet">
		
		
		<?php if(isset($javascript)) echo $javascript; ?>
		
    </head>
    <body>
        <div id="container">
            <div id="header">
                <div id="header-top">
                    <div class="logo">
                        <a href="<?php echo $this->config->item('base_url');?>index.php/" ></a>
                    </div>

                    <div class="top-links">
                        <ul>
                            <li><a href="#">Devenez Partenaire</a></li>
                            <li><a href="<?php echo $this->config->item('base_url');?>index.php/gagnants/index">Gagnants sur toute la ligne</a></li>
                            <li><a href="<?php echo $this->config->item('base_url');?>index.php/recompenses/index">Programme de récompenses</a></li>
                            <li><a href="#">Québec ville verte</a></li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>

                <div class="clear"></div>
                <?php if(isset($header_bottom)) echo $header_bottom; ?>
            </div>