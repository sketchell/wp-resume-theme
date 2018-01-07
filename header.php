<!DOCTYPE html>
<html>
    <?php wp_head(); ?> 
    <?php wp_footer(); ?> 
    <head>
        <link href="../wp-content/themes/Resume/Static/css/bootstrap.min.css" rel="stylesheet">
        <link href="../wp-content/themes/Resume/Static/css/font-awesome.min.css" rel="stylesheet">
        <link href="../wp-content/themes/Resume/style.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
        <title><?php wp_title(' | ',true,'right'); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="../wp-content/themes/Resume/Static/js/bootstrap.min.js"></script>
        <script>
            function toggleMenu() 
            {
                var menu = document.getElementById("menu-main");
                var icon = document.getElementById("icon");
                menu.classList.toggle('menu-show');
                icon.classList.toggle('fa-bars');
                icon.classList.toggle('fa-times');
            }
        </script>
    </head>
    <body>
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-right">
                        <a href="#" onclick="toggleMenu()" id="menu-icon"><i class="fa fa-bars" aria-hidden="true" id="icon"></i></a>
                       
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 heading">
                        <div class="text-center title">
                            <a href="<?php echo site_url(); ?>">
                                <h1 class="name border border-bottom-0"><?php the_field('first_name'); ?></h1>
                                <h1 class="name border border-top-0"><?php the_field('last_name'); ?></h1>
                            </a>
                        </div> 
                    </div>
                </div>
                <div class="row menu-row">
                    <div class="col-12">
                        <div class="menu-container">
                            <?php wp_nav_menu( array( 'Resume' => 'Main') ); ?>  
                        </div>  
                    </div>
                </div>
            </div>
        </header>
        
        
        

    

