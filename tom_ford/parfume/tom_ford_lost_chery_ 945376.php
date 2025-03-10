<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Жіноча косметика</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="../../index.js"></script>
   
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

/*////////////////////////////////////////////////////////////*/
/*////////////////////////////////////////////////////////////*/

.description-options {
    user-select: none; /* Заборона виділення тексту */
    outline: none; /* Видаляє контур при фокусуванні */
    display: none;
    padding: 10px;
    margin-top: 10px;
    background-color: transparent;
    transition: max-height 0.3s ease-out, padding 0.3s ease-out;
    max-height: 0;
    overflow: hidden;
}

.description-container.open .description-options {
    user-select: none; /* Заборона виділення тексту */
    outline: none; /* Видаляє контур при фокусуванні */
    display: block;
    max-height: 1000px;
    padding: 20px;
}

.description-toggle {
    user-select: none; /* Заборона виділення тексту */
    outline: none; /* Видаляє контур при фокусуванні */
    font-size: 18px;
    cursor: pointer;
    
}

.plus_d {
    user-select: none; /* Заборона виділення тексту */
    outline: none; /* Видаляє контур при фокусуванні */
    transition: transform 0.3s ease-in-out; /* Плавний перехід */
    margin-left: 5px;
    font-size: 20px;
    cursor: pointer; /* Курсор змінюється на "руку" */
    user-select: none; /* Заборона виділення тексту */
    outline: none; /* Видаляє контур при фокусуванні */
}

/* Додаємо клас active при натисканні */
.plus_d.active {
    transform: rotate(180deg); /* Поворот на 180 градусів */
}



/*///////////////////////////////////////////////////////////////*/
/*//////////////////////////////////////////////////////////////*/
   

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

    
    .product-details h1 {
            font-size: 1.5em;
           
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
       <a href="../../index.html"> <img class="img_logo_vital_blooom" src="../../img_for_index_html/IMG_9732-Photoroom.png" alt=""></a>
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
                <img id="main-image" src="https://cms.brnstc.de/product_images/2244x3072p/cpro/media/images/product/20/10/888066107914_0_1601985260834.webp" alt="Основне зображення товару">
            </div>
            <div class="thumbnail-images">
                <img src="https://cms.brnstc.de/product_images/2244x3072p/cpro/media/images/product/20/10/888066107914_0_1601985260834.webp" alt="Зображення 1" class="active" onclick="changeImage(this)">
                <img src="https://cms.brnstc.de/product_images/2244x3072p/cpro/media/images/product/21/6/888066098878_1_1624372352500.webp" alt="Зображення 2" onclick="changeImage(this)">
                <!--<img src="https://www.victoriassecret.com/p/1000x1333/tif/zz/23/09/15/01/112285041342_OM_F.jpg" alt="Зображення 3" onclick="changeImage(this)">
                <img src="https://www.victoriassecret.com/p/1000x1333/tif/zz/23/09/15/01/112285041343_OM_F.jpg" alt="Зображення 4" onclick="changeImage(this)">-->
            </div>
        </div>

        <div class="product-details">
            <h1>ПАРФЮМ TOM FORD LOST CHERRY</h1>
            <div class="price">8 890 ₴</div>

            <div class="size-container">
                <div class="size-toggle" onclick="toggleSizeDropdown()">
                    Розміри <span class="plus">+</span>
                </div>
                <div class="size-options">
                    <button onclick="updateProductView(30, 8890)">30 ml</button>
                    <button onclick="updateProductView(50, 14950)">50 ml</button>
                    <button onclick="updateProductView(100, 20480)">100 ml</button>
                </div>
            </div>
            <!----------------------->

           <div class="back_line">
            ___________________________
           </div>
            <br>
            


    
                <div class="description-container">
                    <div class="description-toggle" onclick="toggleDescriptionDropdown()">
                        Опис <span class="plus_d">+</span>
                    </div>
                    <div class="description-options">
                        <p>
                            Спокусливий. Привабливий. Ненаситний.
                            Том Форд загублений вишнею здійснює заборонену подорож - контрастний аромат виявляє спокусливість протилежної, милої невинності та злого задоволення.
                            Квіткові ароматні ноти турецьких троянд на відміну від натяка на смажену глиняну квасолю, гіркий мигдаль та чуттєвий перубалам забезпечують привабливий склад.
                            У самому серці Іу де Парфумів контрастні аромати зустрічаються: Чорна вишня зустрічає лікер Гріотт Д'Алзас і дотик гіркого мигдалю, а арабські жасмин та турецькі троянди залишають земляні акценти.
                            У основі дерев’яні аромати, такі як чуттєвий сандало, земляний ветівер та гіркий кедр поєднуються у багатогранну суміш.
                            Аромат бурштинового гурману спрямований як на чоловіків, так і на жінок. 
                            <br>
                            <br>
                            
                            
                           <b> Ароматні нотатки </b>
<br>
Примітка: троянда, глиняний бампер, гіркий мигдаль, перрубальне насіння <br>
Серцевий сорт: Чорна вишня, гіркий мигдаль, жасмин, троянда <br>
Базова примітка: Сандал, кедр <br>
<br>

Code: 945376
 

                        </p>
                    </div>
                </div>

            <!----------------------->
             <br>

            
                
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
/*фунуціонал для опису товару*/
function toggleDescriptionDropdown() {
    var container = document.querySelector('.description-container');
    var plusSign = container.querySelector('.plus_d');
    var options = container.querySelector('.description-options');

    container.classList.toggle('open');
}








// Залишаємо ваш існуючий код для роботи з кнопкою "+"

document.querySelector('.plus').addEventListener('click', function() {
    this.classList.toggle('active'); // Додає/видаляє клас active
});

function toggleSizeDropdown() {
    document.querySelector('.size-options').classList.toggle('active');
}

// Оновлена функція для форматування ціни (залишаємо лише одну версію)
function updatePrice(price) {
    const formattedPrice = price.toLocaleString('uk-UA');  // Форматуємо число для української локалізації
    document.querySelector('.price').textContent = formattedPrice + ' ₴';
}

// Об’єкт з посиланнями на зображення для кожного розміру
const productImages = {
    30: {
        main: 'https://cms.brnstc.de/product_images/2244x3072p/cpro/media/images/product/20/10/888066107914_0_1601985260834.webp', // URL повнорозмірного зображення для 30 ml
        thumbnails: [
            { thumb: 'https://cms.brnstc.de/product_images/2244x3072p/cpro/media/images/product/20/10/888066107914_0_1601985260834.webp', full: 'https://cms.brnstc.de/product_images/2244x3072p/cpro/media/images/product/20/10/888066107914_0_1601985260834.webp' },
            { thumb: 'https://cms.brnstc.de/product_images/2244x3072p/cpro/media/images/product/21/6/888066107914_1_1624372375658.webp', full: 'https://cms.brnstc.de/product_images/2244x3072p/cpro/media/images/product/21/6/888066107914_1_1624372375658.webp' }
        ]
    },
    50: {
        main: 'https://cms.brnstc.de/product_images/2244x3072p/cpro/s3li/1122x1536/18/11/1000868577_0.webp',
        thumbnails: [
            { thumb: 'https://cms.brnstc.de/product_images/2244x3072p/cpro/s3li/1122x1536/18/11/1000868577_0.webp', full: 'https://cms.brnstc.de/product_images/2244x3072p/cpro/s3li/1122x1536/18/11/1000868577_0.webp' },
            { thumb: 'https://cms.brnstc.de/product_images/2244x3072p/cpro/media/images/product/21/6/888066107914_1_1624372375658.webp', full: 'https://cms.brnstc.de/product_images/2244x3072p/cpro/media/images/product/21/6/888066107914_1_1624372375658.webp' }
        ]
    },
    100: {
        main: 'https://cms.brnstc.de/product_images/2244x3072p/cpro/s3li/1122x1536/19/07/888066098878_0.webp',
        thumbnails: [
            { thumb: 'https://cms.brnstc.de/product_images/2244x3072p/cpro/s3li/1122x1536/19/07/888066098878_0.webp', full: 'https://cms.brnstc.de/product_images/2244x3072p/cpro/s3li/1122x1536/19/07/888066098878_0.webp' },
            { thumb: 'https://cms.brnstc.de/product_images/2244x3072p/cpro/media/images/product/21/6/888066107914_1_1624372375658.webp', full: 'https://cms.brnstc.de/product_images/2244x3072p/cpro/media/images/product/21/6/888066107914_1_1624372375658.webp' }
        ]
    }
};

// Функція, яка оновлює перегляд товару (ціну та зображення) при виборі розміру
function updateProductView(size, price) {
    // Оновлюємо ціну
    updatePrice(price);

    // Отримуємо дані зображень для вибраного розміру
    const images = productImages[size];
    if (images) {
        // Встановлюємо головне зображення (повнорозмірну картинку)
        document.getElementById('main-image').src = images.main;

        // Оновлюємо блок з мініатюрами:
        const thumbnailsContainer = document.querySelector('.thumbnail-images');
        thumbnailsContainer.innerHTML = ''; // Очищуємо поточні мініатюри

        images.thumbnails.forEach((item, index) => {
            const img = document.createElement('img');
            // В якості зображення для мініатюри використовуємо URL маленького фото
            img.src = item.thumb;
            // Зберігаємо в data-атрибуті посилання на повнорозмірну версію
            img.setAttribute('data-full', item.full);
            img.alt = "Зображення " + (index + 1);
            if (index === 0) {
                img.classList.add('active'); // Перша мініатюра активна
            }
            img.onclick = function() {
                changeImage(this);
            };
            thumbnailsContainer.appendChild(img);
        });
    }
}

// Модифікована функція для зміни головного зображення
// Тепер вона читає URL повнорозмірного зображення з data-атрибута (якщо він є)
function changeImage(thumbnail) {
    const fullImageUrl = thumbnail.getAttribute('data-full') || thumbnail.src;
    document.getElementById('main-image').src = fullImageUrl;

    // Видаляємо клас 'active' у всіх мініатюр та додаємо для вибраної
    document.querySelectorAll('.thumbnail-images img').forEach(img => img.classList.remove('active'));
    thumbnail.classList.add('active');
}

    </script>



</body>
</html>
