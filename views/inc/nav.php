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
                <input type="text">
            </li>
            <li>
                <button>connexion</button>
            </li>
            <li>
                <button>inscription</=>
            </li>
            <li>
                <div class='langSelect'>
                    <?php 
                    $first = true;
                    foreach ($country as $key => $country) { 
                        
                        if($key == $lang){ ?>
                            <div class="langOpt">
                                <div class="langImg">
                                    <img src="<?= $country['flag'] ?>" alt="">
                                </div>
                                <div class="langTxt">Français</div> 
                            </div>
                        <?php } 
                       
                        if($first == true){ ?>
                            <div class="optLange close">
                            <?php $first = false ?>
                        <?php } ?>


                           <div class="langOpt">
                               <div class="langImg">
                                   <img src="<?= $country['flag'] ?>" alt="">
                               </div>
                               <div class="langTxt">Français</div> 
                           </div>
                           <?php } ?>
                    </div>
                </div>
            </li>
        </ul>
    </nav>
<?php } ?>