</head>
<body>
<?php
if(isset($_COOKIE[''])){ ?>
    <nav>
        <ul>
            <li class="logoContener">
                <a href="<?= $host ?>">
                    <img src="<?= $host ?>asset/img/logo2.png" alt="logo img" class="logo">
                </a>
            </li>
        </ul>
    </nav>
<?php }else{ ?>
    <nav>
        <ul>
            <li class="logoContener">
                <a href="<?= $host ?>" class="alogo">
                    <img src="<?= $host ?>asset/img/logo2.png" alt="logo img" class="logo">
                </a>
            </li>
            <li>
                <a href="">connexion</a>
            </li>
            <li>
                <a href="">inscription</a>
            </li>
        </ul>
    </nav>
<?php } ?>