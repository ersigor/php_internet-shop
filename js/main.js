
let cart = {};

function init() {
    // вычитываем файл goods.json
    $.getJSON("goods.json", goodsOut);

}

function goodsOut(data) {
    // вывод товаров на страницу

    console.log(data);
    let out = '';
    for (let key in data) {
        out += '<div class="col-md-3 top_brand_left-1"><div class="hover14 column"><div class="top_brand_left_grid"><div class="top_brand_left_grid1"><figure>';
        out += '<div class="snipcart-item block">';
        out += '<div class="snipcart-thumb">';
        out += '<a class= "img" href="single.php?id=' + data[key].id + '"><img title=" " alt=" " src="images/small/' + data[key].img + '"></a>';
        out += '<p>' + data[key].title + '</p>';
        out += '<h4>' + data[key].price + 'руб</h4>';
        out += '</div>';
        out += ' <div class="snipcart-details top_brand_home_details">';
        out += '<button class="add-to-cart" data-id="' + key + '">Купить</button>';
        out += '</div></div></figure></div></div></div></div>';
    }
    $('.top_brands_grids').html(out);
    $('button.add-to-cart').on('click', addToCard);
}

function addToCard() {
    //добавляем товар в корзину
    let id = $(this).attr('data-id');


    if (cart[id] == undefined) {
        cart[id] = 1; // если в корзине нет товара, то делаем его равным 1
    } else {
        cart[id]++; // если такой товар есть - увеличиваем его количество на единицу
    }

    showMiniCart();
    saveCart();
}

function saveCart() {
    // сохраняем корзину в localStorage
    localStorage.setItem('cart', JSON.stringify(cart));
}

// визуализация корзины
function showMiniCart() {
    let out = "";
    for (let key in cart) {
        out += key + '----' + cart[key] + '<br>';
    }
    $('.mini-cart').html(out);
}

function loadCart() {
    // проверяем есть ли в localStorage запись cart
    if (localStorage.getItem('cart')) {
        // если есть - расшифровываем и записываем в переменную cart
        cart = JSON.parse(localStorage.getItem('cart'));
        showMiniCart();
    }
}

$(document).ready(function () {
    init(); // запуск функции init() после загрузки страницы
    loadCart(); // сохранение данных в корзине при перезагрузке страницы
});



