<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css"> 
    <link rel="stylesheet" href="../../style/normalize.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">     
    <link rel="shortcut icon" href="../../media/favicon1.ico" type="image/png">
    <title>Hot pizza!</title>
</head>
<body>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <div id="topMain">
          
            <div id="dost">Доставка <br> г. Пермь</div>
            <div id="nomer">8 800 555 35 35 <br>
             Круглосуточно </div>
            
            <a href="index.html" id="logo"><img src="../../media/logo.png" alt="logo" width="100%"></a> 

            <div id="tovar"><img src="../../media/bak.png" alt="img" id="bak" >
            0 товаров<br>
            0₽
            </div>
         

            <div id="button">
                <button id="but"><a href="../../pac/korzina.html"> Заказать</a> </button>
            </div>
            
                <a href="../../pac/pizza.html" id="pizza" class="topMenu">Пицца</a>
                <a href="../../pac/burger.html" id="burger" class="topMenu">Бургеры</a>
                <a href="../../pac/zakuski.html" id="zakuski" class="topMenu">Закуски</a>
                <a href="../../pac/napitki.html" id="napitki" class="topMenu">Напитки</a>
                <a href="../../pac/soys.html" id="soys" class="topMenu">Соусы</a>
                <a href="../../pac/dostavka.html" id="dostavka" class="topMenu">Доставка</a>
                <a href="../../pac/kontakt.html" id="kontakt" class="topMenu">Контакты</a>
            
        </div>
    <?php include '../../application/views/'.$content_view; ?>
    
    <div id="bottomMain">
        <div id="foot1">
            <a href="">Акции</a><br>
            <a href="">Условия доставки</a><br>
            <a href="">Отзывы</a><br>
            <a href="">Условия оплаты</a><br>
            <a href="">Дисконтные карты</a><br>
        </div>
  
    
        <div id="foot2">
            <a href="">О нас</a><br>
            <a href="">Контроль качества</a><br>
            <a href="">Подписться на рассылку</a><br>
            <a href="">Отписаться от рассылки</a><br>
        </div>

  
    
        <div id="foot3">
            <div>8 800 555 35 35 <br>   
                пт-пт с 9:00 до 00:00   <br>
                сб-вс с 9:00 до 02:00   <br><br>
            </div>
            <img src="../../media/icons8-instagram-144.png" alt="">
            <img src="../../media/icons8-vk.com-144.png" alt=""><br>
            <img src="../../media/icons8-visa-144.png" alt="">
            <img src="../../media/icons8-mastercard-logo-144.png" alt="">        
        </div>
        <a href="../../pac/korzina.html"><div id="korzina"><img src="../../media/bak.png" alt="img" id="bak" ></div></a> 
    </div>
    <script src="../../js/index.js"></script>