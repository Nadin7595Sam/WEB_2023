<?php
// Your code here!
$name = "Вованчик";
$profession = "Программист";
$city = "Балашов";
$email = "vovan@mail.ru";
$phonenumber = "+79253642325";
$skills = [
    [
        'name' => 'Микрософт офис',
        'persent' => 97,
    ],
    [
        'name' => 'Чинить компы',
        'persent' => 95, 
    ],
    [
        'name' => 'Переставлять винду',
        'persent' => 96, 
    ],
];
$experience = [
    [
        'name' => 'Работник склада',
        'time' => 'Декабрь 2021 - Январь 2023',
        'text' => 'Работал на складе с корешем.',
    ],
    [
        'name' => 'Санитар в психбольнице',
        'time' => 'Апрель 2019 - Ноябрь 2021',
        'text' => 'Обыгрывал в карты пациентов.',
    ],
    [
        'name' => 'Уборщик в зоомагазине',
        'time' => 'Июнь 2018 - Декабрь 2018',
        'text' => 'Мыл полы, чистил клетки попугаев, кормил рыбок шашлыком.', 
    ],
];
$language = [
    [
        'name' => 'Руский',
        'persent' => 100,
    ],
    [
        'name' => 'Англиский',
        'persent' => 95,
    ],
];
$education = [
    [
        'name' => 'Ютуб',
        'time' => 'Июль 2022 - Январь 2023',
        'text' => 'Друган програмист со школы посоветовал посмотреть уроки на ютубе чтоб програмировать. Посмотрел видосы как програмировать теперь всё умею', 
    ],
    [
        'name' => 'ПТУ №6',
        'time' => 'Сентябрь 2018 - Июнь 2021',
        'text' => 'Норм шарага. Там учился на тракториста.',
    ],
    [
        'name' => 'МОУ СОШ №3',
        'time' => 'Сентябрь 2009 - Май 2018',
        'text' => 'Ходил в школу учица.',
    ],
];
?>
<!DOCTYPE html>
<html>
<head>
  <title>Мое резюме</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    html,
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: 'Jost', sans-serif;
    }
  </style>
</head>
<body class="w3-light-grey">
  <!-- Page Container -->
  <div class="w3-content w3-margin-top" style="max-width:1400px;">
    <!-- The Grid -->
    <div class="w3-row-padding">
      <!-- Left Column -->
      <div class="w3-third">
        <div class="w3-white w3-text-grey w3-card-4">
          <div class="w3-display-container">
            <img src="https://avatars.mds.yandex.net/i?id=6b0cfc94c1f81249b8a26f820cc70553e2d26d0c-6327735-images-thumbs&n=13"
              style="width:100%" alt="Avatar">
            <div class="w3-display-bottomleft w3-container w3-text-black">
              <h2 style="color: white; text-shadow: 1px 1px 2px black;"><?= $name; ?></h2>
            </div>
          </div>
          <div class="w3-container">
            <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?= $profession; ?></p>
            <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?= $city; ?></p>
            <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?= $email; ?></p>
            <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?= $phonenumber; ?></p>
 
            <hr>
 
            <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>
            <?php for ($i = 0; $i < count($skills); $i++):?>
            <p><?= $skills[$i]["name"] ?></p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?= $skills[$i]["persent"] ?>%"><?= $skills[$i]["persent"] ?>%</div>
            </div>
            <?php endfor; ?>
            <br>
 
            <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b>
            </p>
            <?php for ($i = 0; $i < count($language); $i++):?>
            <p><?= $language[$i]["name"] ?></p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="font-size: 12px; text-align: center; height:18px; width:<?= $language[$i]["persent"] ?>%"><?= $language[$i]["persent"] ?>%</div>
            </div>
            <?php endfor; ?>
            <br>
          </div>
        </div>
        <br>
        <!-- End Left Column -->
      </div>
      <!-- Right Column -->
      <div class="w3-twothird">
        <div class="w3-container w3-card w3-white w3-margin-bottom">
          <h2 class="w3-text-grey w3-padding-16"><i
              class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
          <?php for ($i = 0; $i < count($experience); $i++):?>
          <div class="w3-container">
            <h5 class="w3-opacity"><b><?= $experience[$i]["name"] ?> </b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?= $experience[$i]["time"] ?></h6>
            <p><?= $experience[$i]["text"] ?></p>
            <hr>
          </div>
          <?php endfor; ?>
          
        </div>
 
        <div class="w3-container w3-card w3-white">
          <h2 class="w3-text-grey w3-padding-16"><i
              class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>
          <?php for ($i = 0; $i < count($education); $i++):?>
          <div class="w3-container">
            <h5 class="w3-opacity"><b><?= $education[$i]["name"] ?></b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?= $education[$i]["time"] ?></h6>
            <p><?= $education[$i]["text"] ?></p>
            <hr>
          </div>
          <?php endfor; ?>
        </div>
        <!-- End Right Column -->
      </div>
      <!-- End Grid -->
    </div>
    <!-- End Page Container -->
  </div>
  <!-- Footer -->
  <footer class="w3-container w3-teal w3-center w3-margin-top">
    <p>Find me on social media.</p>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <!-- End footer -->
  </footer>
</body>
</html>