<header class="header">
    <div class="container">
    
        <div class="logo">
            <a href="/"><img src="/images/iconW.JPG" alt="logo"></a>
        </div>

        <div class="nav">
            <ul>
                <li><a href="/">Home</a></li>
                <?php echo get_nav(); ?>
            </ul>
        </div>

    </div>
</header>


<div class="content">
    <div class="container">

        <?php 
        if (!empty($db_html)) {
            echo '<div class="products">' . $db_html . '</div>';
        } else {
            echo home_content();
        }
        ?>

    </div>
</div>