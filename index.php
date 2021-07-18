<!DOCTYPE html>
{% load static %}
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Скоро появится | Hodwi Studio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="{% static 'polls/style.css' %}">
    <link rel="stylesheet" href="{% static 'polls/index.php' %}">
       </head>
       <body>

       <style>

       body{
         background-color: #13171f;
         color:#fff;
       }

       </style>

          <div class="wrapper">
             <div class="title">
                Наш сайт в <span>Разработке и скоро появится!</span>
             <div style="margin-top:40px;">
                <h4>Пока он разрабатываеться, вы можете подписаться на нашу рассылку
                Когда наш сайт откроеться, вам придёт оповещение что мы открылись</h4>
             </div>
                 <div style="margin-top:40px;"

                 <form action="send.php"method="post">
                   <input type="email" name="email" placeholder="Ваш email"
                   class="form-control">

                   <button type="submit" name="button">Подписаться</button>

                 </form>


                </div>
              </form>
             <div class="count-down">
                <div class="День">
                   <div class="count">
                      <div class="numb">
                         00
                      </div>
                      <div class="text">
                         Дней
                      </div>
                   </div>
                </div>
                <div class="clone">
                   :
                </div>
                <div class="Час">
                   <div class="count">
                      <div class="numb">
                         00
                      </div>
                      <div class="text">
                         Часов
                      </div>
                   </div>
                </div>
                <div class="clone">
                   :
                </div>
                <div class="Мин">
                   <div class="count">
                      <div class="numb">
                         00
                      </div>
                      <div class="text">
                         Минут
                      </div>
                   </div>
                </div>
                <div class="clone">
                   :
                </div>
                <div class="Сек">
                   <div class="count">
                      <div class="numb">
                         00
                      </div>
                      <div class="text">
                         Секунд
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <script>
             const day = document.querySelector(".День .numb");
             const hour = document.querySelector(".Час .numb");
             const min = document.querySelector(".Мин .numb");
             const sec = document.querySelector(".Сек .numb");
             var timer = setInterval(()=>{
               var currentDate = new Date().getTime();
               var launchDate = new Date('August 10, 2021 18:00:00').getTime();
               var duration = launchDate - currentDate;
               var День = Math.floor(duration / (1000 * 60 * 60 * 24));
               var Час = Math.floor((duration % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
               var Мин = Math.floor((duration % (1000 * 60 * 60)) / (1000 * 60));
               var Сек = Math.floor((duration % (1000 * 60)) / 1000);
               day.innerHTML = День;
               hour.innerHTML = Час;
               min.innerHTML = Мин;
               sec.innerHTML = Сек;
               if(days < 10){
                 day.innerHTML = '0' + День;
               }
               if(hours < 10){
                 hour.innerHTML = '0' + Час;
               }
               if(minutes < 10){
                 min.innerHTML = '0' + Мин;
               }
               if(seconds < 10){
                 sec.innerHTML = '0' + Сек;
               }
               if(duration < 0){
                 clearInterval(timer);
               }
             }, 1000);
          </script>
         <div style="margin-top:130px;">
          <div class="copiright"><h5>Copyright  ©  Hodwi Studio</br>По вопросам: hodwistudio@mail.ru</h5></div>
       </body>
    </html>
