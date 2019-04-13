<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>HTML Academy: Глейси</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.min.css">
</head>
<body>
<div class="site-wrapper catalog-page">
    <header class="main-header">
        <nav class="main-navigation">
            <a class="main-header-logo catalog-logo" href="{{route('mainPage') }}">
                <img src="img/logo.svg" width="154" height="64" alt="Логотип магазина 'Глейси'">
            </a>
            <div class="navigation-container catalog-navigation">
                <ul class="site-navigation">
                    <li class="navigation-item catalog-item">
                        <a class="active" href="{{route('catalogAll') }}">
                            <span class="navigation-label">Каталог</span>
                        </a>
                        <ul class="subnavigation ">
                            <li class="subnavigation-item">
                                <p>Новинки</p>
                            </li>
                            <li class="subnavigation-item">
                                <a class="active" href="{{route('catalogAll') }}">Сливочное</a>
                            </li>
                            <li class="subnavigation-item">
                                <a href="#">Щербеты</a>
                            </li>
                            <li class="subnavigation-item">
                                <a href="#">Фруктовый лед</a>
                            </li>
                            <li class="subnavigation-item">
                                <a href="#">Мелорин</a>
                            </li>
                        </ul>
                    </li>
                    <li class="navigation-item">
                        <a href="delivery.html">
                            <span class="navigation-label">Доставка и оплата</span>
                        </a>
                    </li>
                    <li class="navigation-item">
                        <a href="about.html">
                            <span class="navigation-label">О Компании</span>
                        </a>
                    </li>
                </ul>
                <ul class="user-navigation">
                    <li class="search-panel">
                        <a class="search-button" href="#">
                            <span class="visible-hidden">Найти</span>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="17" height="17" viewBox="0 0 17 17"><path fill="#FFF" d="M16.958 15.527L11.75 10.32A6.455 6.455 0 0 0 13 6.5 6.5 6.5 0 1 0 6.5 13a6.465 6.465 0 0 0 3.839-1.263l5.205 5.204 1.414-1.414zM6.5 11C4.019 11 2 8.981 2 6.5S4.019 2 6.5 2 11 4.019 11 6.5 8.981 11 6.5 11z"/></svg>
                        </a>
                        <ul class="search-field">
                            <li>
                                <h2 class="visible-hidden">Поиск</h2>
                                <form name="search" method="post" action="https://echo.htmlacademy.ru">
                                    <input type="search" name="search-text" placeholder="Что ищем?" aria-label="Поиск по сайту">
                                </form>
                            </li>
                        </ul>
                    </li>
                    <li class="login">
                        <a class="login-button" href="user-login.html">Вход</a>
                        <ul class="login-form">
                            <li>
                                <h2 class="visible-hidden">Личный кабинет</h2>
                                <form name="login" method="post" action="https://echo.htmlacademy.ru">
                                    <p class="login-item">
                                        <label for="login-email" class="visible-hidden">Электронная почта</label>
                                        <input type="email" name="login-email" id="login-email" placeholder="Электронная почта" required>
                                    </p>
                                    <p class="login-item">
                                        <label for="login-password" class="visible-hidden">Пароль</label>
                                        <input type="password" name="login-password" id="login-password" placeholder="Пароль" required>
                                    </p>
                                    <div class="links-wrapper">
                                        <p class="links">
                                            <a href="#" class="login-form-forgot">Забыли пароль?</a>
                                            <a href="#" class="login-form-sin-up">Новая регистрация</a>
                                        </p>
                                        <button class="button login" type="submit">Войти</button>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </li>
                    <li class="cart fill-cart">
                        <a class="cart-button" href="{{ route('show.cart') }}" class="header-upper-cart">Cart {{ Session::has('cart') ? Session::get('cart')->totalQty : '0'}}</a>
                        <ul class="cart-content">
                            <li>
                                <h2 class="visible-hidden">Корзина</h2>
                                <ul class="сart-table">
                                    <li class="cart-item">
                                        <button class="delete-cart-item" type="button">Удалить</button>
                                        <a href="catalog-item.html">
                                            <img class="cart-item-img" src="img/orange.jpg" width="32" height="32" alt="Пломбир с апельсиновым джемом">
                                            <span class="cart-item-title">Пломбир с апельсиновым джемом</span>
                                        </a>
                                        <span class="cart-item-cost">1,5 кг x <b>200 руб</b></span>
                                        <span class="cart-item-price">300 руб</span>
                                    </li>
                                    <li class="cart-item last-cart-item">
                                        <button class="delete-cart-item" type="button">Удалить</button>
                                        <a href="catalog-item">
                                            <img class="cart-item-img" src="img/strawberry.jpg" width="32" height="32" alt="Клубничный пломбир с присыпкой  из белого шоколада">
                                            <span class="cart-item-title">Клубничный пломбир с присыпкой  из белого шоколада</span>
                                        </a>
                                        <span class="cart-item-cost">1,5 кг x <b>300 руб</b></span>
                                        <span class="cart-item-price">450 руб</span>
                                    </li>
                                    <li class="cart-item cart-cost">
                                        <span>Итого: 750 руб</span>
                                    </li>
                                </ul>
                                <a class="button cart-order-button" href="#">Оформить заказ</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="container">
        <div class="user-info has-breadcrumbs">
            <ul class="breadcrumbs">
                <li class="crumb">
                    <a href="index.html"> Главная </a>
                </li>
                <li class="crumb">
                    &#187;
                </li>
                <li class="crumb">
                    <a href="catalog.html"> Каталог </a>
                </li>
                <li class="crumb">
                    &#187;
                </li>
                <li class="crumb crumb-active">
                    Сливочное
                </li>
            </ul>
            <div class="main-contacts">
                <p> С 10 до 20, ежедневно </p>
                <p><a href="tel:+78124502525"> 8 812 450-25-25 </a></p>
            </div>
        </div>
        <h1>Сливочное мороженое</h1>
        <section class="filters">
            <h2 class="visible-hidden">Фильтры поиска</h2>
            <form name="filters" method="post" action="https://echo.htmlacademy.ru">
                <div class="filters-first-row">
                    <fieldset class="sotring">
                        <legend>Сортировка</legend>
                        <div class="filters-background select">
                            <select class="filters-sorting" id="filters-sorting" name="filters-sorting">
                                <option value="popularity">по популярности</option>
                                <option value="cheaper-first">сначала недорогие</option>
                                <option value="expensive-first">сначала дорогие</option>
                                <option value="fat">по жирности</option>
                            </select>
                            <svg class="icon-down" xmlns="http://www.w3.org/2000/svg" width="11" height="10" viewBox="0 0 11 10"><path fill="#ffffff" d="M5.5 10L0 0h11"/></svg>
                        </div>
                    </fieldset>
                    <fieldset class="ranges">
                        <legend class="price-controls">
                            <span class="range-label">Цена:</span>
                            <label class="min-price"><input type="text" name="min-price" value="100 руб."></label>
                            <label class="max-price"><input type="text" name="max-price" value="500 руб."></label>
                        </legend>
                        <div class="filters-background">
                            <div class="range-controls">
                                <div class="scale">
                                    <div class="bar"></div>
                                </div>
                                <div class="range-toggle range-toggle-min"></div>
                                <div class="range-toggle range-toggle-max"></div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="fat-level">
                        <legend>Жирность:</legend>
                        <div class="filters-background">
                            <ul>
                                <li class="filter-option">
                                    <input class="radio-filter" type="radio" id="fat-0" name="filters-fat" value="0">
                                    <label for="fat-0" tabindex="0">0%</label>
                                </li>
                                <li class="filter-option">
                                    <input class="radio-filter" type="radio" id="fat-10" name="filters-fat" value="10" checked>
                                    <label for="fat-10" tabindex="0">до 10%</label>
                                </li>
                                <li class="filter-option">
                                    <input class="radio-filter" type="radio" id="fat-30" name="filters-fat" value="30">
                                    <label for="fat-30" tabindex="0">до 30%</label>
                                </li>
                                <li class="filter-option">
                                    <input class="radio-filter" type="radio" id="fat-30-more" name="filters-fat" value="30-more">
                                    <label for="fat-30-more" tabindex="0">выше 30%</label>
                                </li>
                            </ul>
                        </div>
                    </fieldset>
                </div>
                <div class="filters-second-row">
                    <fieldset class="fillers">
                        <legend>Наполнители</legend>
                        <div class="filters-background">
                            <ul>
                                <li class="filter-option checklist">
                                    <input class=" checkbox-filter" type="checkbox" id="fillers-chocolate" name="filters-fillers" value="chocolate" checked>
                                    <label for="fillers-chocolate" tabindex="0">шоколадные</label>
                                </li>
                                <li class="filter-option checklist">
                                    <input class="checkbox-filter" type="checkbox" id="fillers-shugar" name="filters-fillers" value="shugar" checked>
                                    <label for="fillers-shugar" tabindex="0">сахарные присыпки</label>
                                </li>
                                <li class="filter-option checklist">
                                    <input class="checkbox-filter" type="checkbox" id="fillers-fruit" name="filters-fillers" value="fruit">
                                    <label for="fillers-fruit" tabindex="0">фрукты</label>
                                </li>
                                <li class="filter-option checklist">
                                    <input class="checkbox-filter" type="checkbox" id="fillers-syrup" name="filters-fillers" value="syrup">
                                    <label for="fillers-syrup" tabindex="0">сиропы</label>
                                </li>
                                <li class="filter-option checklist">
                                    <input class="checkbox-filter" type="checkbox" id="fillers-jam" name="filters-fillers" value="jam">
                                    <label for="fillers-jam" tabindex="0">джемы</label>
                                </li>
                            </ul>
                        </div>
                    </fieldset>
                    <button class="filters-submit" type="submit"> Применить</button>
                </div>
            </form>
        </section>
        <section class="results">
            <h2 class="visible-hidden">Список сливочного мороженого</h2>
            <ul class="catalog ice-cream-list">
                @foreach($products as $product)
                    <li class="ice-cream-card best-offers">
                        <img class="ice-cream-img" src="{{ $product->image}}" width="267" height="267" alt="Сливочное с апельсиновым джемом и цитрусовой стружкой">
                        <p class="price">
                            <span class="value">{{ $product->price}}</span>
                            <span class="weight">/кг</span>
                        </p>
                        <p class="description">
                            <a href="#">{{ $product->name}}</a>
                        </p>
                        <form action="{{ route('getAddToCart', ['id' => $product->id]) }}">
                            <button type="submit" class="button fast-view" name="fast-view"> Быстрый просмотр</button>
                    </li>
                @endforeach
            </ul>
            <ul class="pagination-list">
                <li class="pagination-item">
                    <a class="prev_page disabled" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewBox="0 0 8 12"><path fill="#C1C6CE" d="M7.237 5.642L1.729.133a.506.506 0 1 0-.716.716L6.163 6l-5.151 5.15a.507.507 0 0 0 .716.717l5.509-5.509a.504.504 0 0 0 0-.716z"/></svg>
                    </a>
                </li>
                <li class="pagination-item active">
                    <a href="#">1</a>
                </li>
                <li class="pagination-item">
                    <a href="#">2</a>
                </li>
                <li class="pagination-item">
                    <a href="#">3</a>
                </li>
                <li class="pagination-item">
                    <a href="#">4</a>
                </li>
                <li class="pagination-item">
                    <a href="#">5</a>
                </li>
                <li class="pagination-item">
                    <a class="next_page" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewBox="0 0 8 12"><path fill="#fff" d="M7.237 5.642L1.729.133a.506.506 0 1 0-.716.716L6.163 6l-5.151 5.15a.507.507 0 0 0 .716.717l5.509-5.509a.504.504 0 0 0 0-.716z"/></svg>
                    </a>
                </li>
            </ul>
        </section>
    </main>
    <footer class="main-footer">
        <div class="social-wrapper">
            <ul class="footer-social">
                <li class="twitter">
                    <a class="social-button" href="#">
                        <span class="social twitter visible-hidden">Twitter</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 33 33"><path class="icon-path" d="M16 0C7.164 0 0 7.164 0 16c0 8.837 7.164 16 16 16 8.837 0 16-7.163 16-16 0-8.836-7.163-16-16-16zm7.944 12.809c-.251 6.516-3.463 10.832-10.992 10.702h-.486c-.447 0-4.543-.443-5.344-1.823 2.479.19 4.247-.406 5.12-1.136-1.048-.289-2.923-.461-3.251-2.848.384.104.618.221 1.299.113-1.307-.824-2.758-1.519-2.679-3.643.311.317 1.164.518 1.46.457-.768-.233-2.149-3.244-.974-4.781 1.984 1.79 4.075 3.482 7.804 3.643.227-2.214 1.24-3.699 3.168-4.325 1.84-.479 3.255.26 3.901 1.138.737-.224 1.453-.466 2.193-.685-.004.833-.569 1.463-.935 1.709.747.165 1.423-.475 1.423-.475-.184.963-1.094 1.725-1.707 1.954z"/></svg>
                    </a>
                </li>
                <li class="insta">
                    <a class="social-button" href="#">
                        <span class="social insta visible-hidden">Instagramm</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 33 33"><g class="icon-path"><path d="M20.916 16a4.938 4.938 0 1 1-9.877 0c0-.394.051-.773.138-1.14h-.897v6.838h11.396V14.86h-.897c.086.367.137.746.137 1.14z"/><path d="M15.978 18.659c1.466 0 2.659-1.193 2.659-2.659s-1.193-2.659-2.659-2.659c-1.466 0-2.659 1.193-2.659 2.659s1.192 2.659 2.659 2.659zM18.637 10.302h3.039v3.039h-3.039z"/><path d="M16 0C7.164 0 0 7.164 0 16c0 8.837 7.164 16 16 16 8.837 0 16-7.163 16-16 0-8.836-7.163-16-16-16zm7.955 21.698a2.285 2.285 0 0 1-2.279 2.279H10.279A2.285 2.285 0 0 1 8 21.698V10.302a2.286 2.286 0 0 1 2.279-2.279h11.396a2.286 2.286 0 0 1 2.279 2.279v11.396z"/></g></svg>
                    </a>
                </li>
                <li class="fb">
                    <a class="social-button" href="#">
                        <span class="social facebook visible-hidden">Facebook</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 33 33"><path class="icon-path" d="M16 0C7.164 0 0 7.163 0 16s7.164 16 16 16c8.837 0 16-7.164 16-16S24.837 0 16 0zm4.062 9.455h-3.021v3.444h3.021v3.445h-3.021v8.61H14.02v-8.61H11v-3.445h3.021V9.455c0-1.902 1.353-3.445 3.021-3.445h3.021v3.445z"/></svg>
                    </a>
                </li>
                <li class="vk">
                    <a class="social-button" href="#">
                        <span class="social vk visible-hidden">Вконтакте</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 33 33"><g class="icon-path"><path d="M16.637 14.495c.402-.019.719-.082.951-.188.326-.145.54-.33.641-.559.101-.229.15-.496.15-.797 0-.232-.058-.465-.174-.697-.116-.232-.322-.405-.617-.517-.264-.1-.592-.155-.984-.165a76.242 76.242 0 0 0-1.652-.014h-.339v2.965h.565c.571 0 1.057-.009 1.459-.028zM18.118 17.084c-.282-.081-.672-.125-1.166-.132a127.97 127.97 0 0 0-1.55-.009h-.79v3.493h.264c1.014 0 1.74-.003 2.18-.009a3.2 3.2 0 0 0 1.212-.245c.377-.157.633-.364.774-.625s.214-.562.214-.9c0-.446-.088-.788-.261-1.03-.17-.241-.464-.423-.877-.543z"/><path d="M16 0C7.164 0 0 7.164 0 16c0 8.837 7.164 16 16 16 8.837 0 16-7.163 16-16 0-8.836-7.163-16-16-16zm6.602 20.531a3.73 3.73 0 0 1-1.124 1.327c-.552.415-1.161.71-1.823.886s-1.501.264-2.519.264h-6.121V8.987h5.443c1.13 0 1.957.038 2.48.113a5.126 5.126 0 0 1 1.561.5c.533.27.929.632 1.189 1.087.26.455.392.975.392 1.558 0 .678-.179 1.278-.536 1.795-.358.518-.863.92-1.517 1.208v.075c.917.182 1.642.559 2.179 1.13.537.571.807 1.325.807 2.261 0 .678-.138 1.283-.411 1.817z"/></g></svg>
                    </a>
                </li>
            </ul>
        </div>
        <div class="documents-wrapper">
            <ul class="footer-documents left">
                <li>
                    <a href="#" class="bold-href">Для поставщиков</a>
                </li>
                <li>
                    <a href="#">О производстве</a>
                </li>
            </ul>
            <ul class="footer-documents right">
                <li>
                    <a href="#">Наши документы</a>
                </li>
                <li>
                    <a href="#">Экологические стандарты</a>
                </li>
            </ul>
        </div>
        <div class="footer-copyright">
            <a href="https://htmlacademy.ru/intensive/htmlcss" class="logo-href">
                <img src="img/logo-footer.svg" width="108" height="39" alt="Логотип магазина 'Глейси'">
            </a>
            <p>Сделано в <a class="copyright" href="https://htmlacademy.ru/intensive/htmlcss">HTML Academy</a> &copy; 2017</p>
        </div>
    </footer>
</div>
</body>
</html>
