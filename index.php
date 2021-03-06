<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Projeto Sidebar</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f223593715.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="wrap">
        <div id="sidebar">
            <!-- <div class="btn_close_sidebar">
                <i class="fas fa-times"></i>
            </div> -->
            <div class="sidebar_user">
                <a href="user">
                    <img width="90"  src="assets/images/avatar2.png">
                </a>
            </div>
            <div class="sidebar_user_name">
                <p>Marcos Lj</p>
            </div>
            <div class="sidebar-content">
                <ul class="sidebar_nav">
                    <li><a  target="_blanck" href="https://google.com.br">Google</a></li>
                    <li><a  target="_blanck" href="https://msn.com">Msn</a></li>
                    <li><a  target="_blanck" href="https://facebook.com.br">Facebook</a></li>
                    <li><a  target="_blanck" href="https://terra.com.br">Terra</a></li>
                </ul>
            
            </div>
        </div>
        <div id="site-content">
            <div class="navbar-top">
                <div class="nav_top_box1">
                    <span class="btn fas fa-align-left" id="open_close"></span>
                    <a href="#">Clube Script</a>
                </div>
                <div class="navtop">
                    <ul>
                        <li><i class="fas fa-bell"></i></li>
                        <li><i class="fas fa-envelope"></i></li>
                    </ul>
                </div>
            </div> 
            <section class="box_content_site">
                <?php for($i=0;$i<5;$i++):?>
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc malesuada dui nec neque hendrerit, a fringilla ante molestie. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum velit mi, gravida quis scelerisque ut, mattis ac nisi. Sed odio augue, feugiat sodales purus at, convallis consequat eros. Morbi eget elit tincidunt, facilisis massa sit amet, rutrum risus. Fusce ut elementum mauris. Ut convallis malesuada tempus. Duis dictum aliquet leo, at fringilla lacus feugiat ut. Sed ut posuere dolor. Aliquam placerat nibh nec nisi lobortis, vitae ultricies augue convallis.
                    </p>
                <?php endfor; ?>
            </section>
            <footer>
                <h2>Seja bem vindo ao Clube</h2>
            </footer>
        </div>

    </div>
  
<script src="assets/js/jquery.js"></script>
<script src="assets/js/scripts.js"></script>



</body>
</html>
            