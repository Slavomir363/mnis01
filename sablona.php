<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="Styly/SablonaStylov.css" />
    </head>
    <body>
        <div id="wrapper">
            <div id="banner">             
            </div>
            
            <nav id="navigation">
                <ul id="nav">
                    <li><a href="index.php">História</a></li>
                    <li><a href="Tunelovanie.php">Tunelovanie</a></li>
                    <li><a href="Mechanizmy.php">Mechanizmy</a></li>
                    <li><a href="Zhodnotenie.php">Zhodnotenie</a></li>
                    <li><a href="Autor.php">Autor</a></li>
                    
                </ul>
            </nav>
            
            <div id="content_area">
                <?php echo $content; ?>
            </div>
            
            <div id="sidebar">
                
            </div>
            
            <footer>
                <p>All rights reserved</p>
            </footer>
        </div>
    </body>
</html>
