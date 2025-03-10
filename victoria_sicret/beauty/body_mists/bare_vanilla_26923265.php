<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Жіноча косметика</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="../../../index.js"></script>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffffff;
            color: #333;
        }
        a {
    text-decoration: none; /* Забираємо підкреслення */
    color: black; /* Задаємо чорний колір */
}

a:visited {
    color: black; /* Для відвіданих посилань також чорний колір */
}

        .img_logo_vital_blooom{
        width: 100px;
        }
      

        header {
            background-color: #f9c2cf;
            padding: 15px 20px;   /*15px  20px*/
            display: flex;
            justify-content: space-between;
            align-items: center;
            top: 0; /* Закріплення у верхній частині сторінки */
            position: fixed; /* Закріплює хедер */
            width: 100%; /* Розтягування на всю ширину */
            
        }

        .img_baner{
            width: 100%;
            height: 100%;
            object-fit: cover; /* Заповнює контейнер без спотворень */
        }
/*=================================================*/

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }
        .card {
            background: #f9f9f9;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
        }
        footer {
            background-color: #f8f8f8;
            padding: 15px;
            text-align: center;
            margin-top: 40px;
        }

        .footer-links {
            
    display: flex;
    justify-content: center; /* Центрує елементи по горизонталі */
    align-items: center; /* Центрує по вертикалі (якщо потрібно) */
    gap: 30px; /* Відстань між елементами */
}

.footer-links i{
    font-size: 19px;
}

       
       
/*=================================================*/
.search-bar {
    margin-right: 50px;
    max-width: 300px;
    position: relative;
    display: flex;
    align-items: center;
    border-radius: 25px;
    background: #fff;
    padding: 5px 15px;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
}
.search-bar input {
    flex: 1;
    padding: 10px 15px;
    padding-left: 30px; /* Додаємо місце зліва для кнопки */
    border: none;
    outline: none;
    font-size: 14px;
    background: transparent;
}
.search-bar button {
    position: absolute;
    right: 15px; /* Встановлюємо кнопку зліва */
    background: transparent;
    border: none;
    cursor: pointer;
    font-size: 18px;
    color: #000000; /* Встановлюємо темний колір іконки */
}
        .search-results {
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            background: #fff;
            border: 1px solid #ddd;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
            display: none;
            border-radius: 5px;
            z-index: 1000;
        }
        .search-results ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }
        .search-results li {
            padding: 10px;
            cursor: pointer;
            border-bottom: 1px solid #eee;
        }
        .search-results li:hover {
            background: #f0f0f0;
        }


        /*/////////////////////////////////////*/

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
        }

        .product-page {
            display: flex;
            justify-content: space-between;
        }

        .product-images {
            width: 50%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .main-image img {
            width: 100%;
            max-width: 500px;
            height: auto;
            border-radius: 10px;
        }

        .thumbnail-images {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }

        .thumbnail-images img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            cursor: pointer;
            border: 2px solid transparent;
            border-radius: 5px;
            transition: 0.3s;
        }

        .thumbnail-images img.active,
        .thumbnail-images img:hover {
            border-color: #e91e63;
        }

        .product-details {
            width: 45%;

        }

        .product-details h1 {
            font-size: 2em;
            margin-bottom: 15px;
        }

        .product-details .price {
            font-size: 1.5em;
            color: #000000;
            margin-bottom: 20px;
        }

        .product-details p {
            font-size: 0.9em;
            line-height: 1.6;
            color: #656565;
        }

        .add-to-cart {
            background-color: #f9c2cf;
            color: rgb(255, 255, 255);
            padding: 10px 20px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 1.2em;
            transition: 0.3s;
        }

        .add-to-cart:hover {
            background-color: #d81b60;
        }

        .size-toggle {
            user-select: none; /* Заборона виділення тексту */
            outline: none; /* Видаляє контур при фокусуванні */
    display: flex;
    align-items: center;
    font-size: 18px;
    
}

.plus {
    transition: transform 0.3s ease-in-out; /* Плавний перехід */
    margin-left: 5px;
    font-size: 20px;
    cursor: pointer; /* Курсор змінюється на "руку" */
    user-select: none; /* Заборона виділення тексту */
    outline: none; /* Видаляє контур при фокусуванні */
}

/* Додаємо клас active при натисканні */
.plus.active {
    transform: rotate(180deg); /* Поворот на 180 градусів */
}


        /*/////////////////////////////////////*/

       
    .size-options {
        display: block; /* Ось тут змінено з 'none' на 'block', але з max-height будемо управляти видимістю */
    max-height: 0; /* Початкова висота 0 для прихованого стану */
    overflow: hidden; /* Приховуємо вміст, що виходить за межі */
    transition: max-height 0.5s ease-out; /* Плавна анімація */
    margin-top: 10px;
    }
    .size-options.active {
    max-height: 100px; /* Достатньо велика висота для видимих кнопок */
}



    .size-options button{
        background-color: #f9c2cf;
    color: white;
    border: none;
    padding: 10px 18px;
    border-radius: 30px;
    font-size: 10px;
    cursor: pointer;
    font-weight: bold;
    transition: background-color 0.3s, transform 0.2s, box-shadow 0.2s;
   
    }

    .size-options button:hover{
        background-color: #d81b60;
    }

    .size-options.active {
        display: flex;
        gap: 10px;
    }

   

    /*===============================================*/

    

    


        
        /* Медіазапит для екрану до 768px */
@media screen and (max-width: 768px) {
    .search-bar {
        max-width: 220px;
        padding: 5px 10px;
    }
    .search-bar input {
        font-size: 14px;
        padding-left: 30px; /* Тримаємо відступ для кнопки */
    }
    .search-bar button {
        font-size: 16px;
        color: #000000; /* Встановлюємо темний колір іконки */
    }

    



    .product-page {
                flex-direction: column;
                align-items: center;
            }

            .product-images, .product-details {
                width: 90%;
            }

            .thumbnail-images img {
                width: 60px;
                height: 60px;
            }
}

@media screen and (max-width: 480px) {
    .search-bar {
        max-width: 180px; /* Зменшуємо ширину на дуже маленьких екранах */
        padding: 5px 8px;
    }
    .search-bar input {
        font-size: 12px;
        
    }
    .search-bar button {
        font-size: 14px;
        color: #000000; /* Встановлюємо темний колір іконки */
    }


    .product-page {
                flex-direction: column;
                align-items: center;
            }

            .product-images, .product-details {
                width: 90%;
            }

            .thumbnail-images img {
                width: 60px;
                height: 60px;
            }
}

        

    </style>
</head>
<body>
    <header>
       <a href="../../../index.html"> <img class="img_logo_vital_blooom" src="../../../img_for_index_html/IMG_9732-Photoroom.png" alt=""></a>
        <div class="search-bar">
            <input type="text" id="search-input" placeholder="Пошук товару..." onkeyup="search()">
            <button onclick="search()"><i class='bx bx-search'></i></button>
            <div id="search-results" class="search-results">
                <ul id="search-list"></ul>
            </div>
        </div>
    </header>

<br>
<br>
<br>
<br>
<br>

<div class="container">
    <div class="product-page">
        <div class="product-images">
            <div class="main-image">
                <img id="main-image" src="https://www.victoriassecret.com/p/1000x1333/png/zz/25/01/15/02/112532236717_OF_F.jpg" alt="Основне зображення товару">
            </div>
            <div class="thumbnail-images">
                <img src="https://www.victoriassecret.com/p/1000x1333/png/zz/25/01/15/02/112532236717_OF_F.jpg" alt="Зображення 1" class="active" onclick="changeImage(this)">
                <img src="https://www.victoriassecret.com/p/1000x1333/png/zz/25/01/15/02/112532236717_OF_B.jpg" alt="Зображення 2" onclick="changeImage(this)">
                <!--<img src="https://www.victoriassecret.com/p/1000x1333/tif/zz/23/09/15/01/112285041342_OM_F.jpg" alt="Зображення 3" onclick="changeImage(this)">
                <img src="https://www.victoriassecret.com/p/1000x1333/tif/zz/23/09/15/01/112285041343_OM_F.jpg" alt="Зображення 4" onclick="changeImage(this)">-->
            </div>
        </div>

        <div class="product-details">
            <h1>Спрей Victorias Secret Bare Vanilla Bliss</h1>
            <div class="price">8 890 ₴</div>

            Роміри <b>Один розмір</b>

            <!--<div class="size-container">
                <div class="size-toggle" onclick="toggleSizeDropdown()">
                    Розміри <span class="plus">+</span>
                </div>
                <div class="size-options">
                    <button onclick="updatePrice(8890)">30 ml</button>
                    <button onclick="updatePrice(14950)">50 ml</button>
                    <button onclick="updatePrice(20480)">100 ml</button>
                </div>
            </div>-->

             <br>

            <p><b>Опис товару:</b> <br>
                Відкрийте чисте блаженство. Свіжі вітри приносять мирні ноти фруктів з сонячними входженнями та вітерні квіткові: ейфоричне сприйняття улюблених ароматів.

                Пару з відповідним лосьйоном ароматів для тривалого досвіду ароматів.
                
                Загальна спокій. Порошкоподібні, вітряні фіолетові цвітіння з вершовою ванільною орхідеєю для розкішного тепла. Ейфоричний поворот на голій ванілі. <br>
                 <br>
                    Тип аромату: квітковий гурман <br>
                    ПРИМІТКИ: Вітерна фіолетова, ванільна орхідея <br>
                    250 мл/8,4 унції. <br>
                    Домашній <br>
                    <br>
                    Art: 26923265
                
                </p>
            <button class="add-to-cart">Додати в кошик</button>
        </div>
    </div>
</div>
    
   
   
    <footer>
       
        <div class="footer-links">
          
            <a href="#"><i class='bx bxl-telegram' ></i>Зворотній зв’язок</a> 
            <a href="#"><i class='bx bxl-instagram'></i> Instagram</a>
        </div>
            <p>© 2025 Vital Bloom</p>
        </div>
    </footer>
 

    <script>

document.querySelector('.plus').addEventListener('click', function() {
    this.classList.toggle('active'); // Додає/видаляє клас active
});



        function toggleSizeDropdown() {
        document.querySelector('.size-options').classList.toggle('active');
    }

    function updatePrice(price) {
        document.querySelector('.price').textContent = price + ' ₴';
    }


    /**/
    function updatePrice(price) {
    // Форматуємо число з пробілами
    const formattedPrice = price.toLocaleString('uk-UA');  // Форматування числа для української локалізації
    document.querySelector('.price').textContent = formattedPrice + ' ₴';
}



        function changeImage(thumbnail) {
            // Отримуємо головне зображення
            document.getElementById('main-image').src = thumbnail.src;

            // Видаляємо клас 'active' у всіх мініатюр
            document.querySelectorAll('.thumbnail-images img').forEach(img => img.classList.remove('active'));

            // Додаємо клас 'active' до вибраного зображення
            thumbnail.classList.add('active');
        }
    </script>



</body>
</html>
