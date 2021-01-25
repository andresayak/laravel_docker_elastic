<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>test page</title>
        <meta name="description" content="Testing page">
        <meta name="viewport" content="width=device-width">
        <link rel="icon" href="img/favicon.png">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,900&display=swap&subset=cyrillic" rel="stylesheet">
        <link rel="stylesheet" href="css/styles.min.css">
    </head>
    <body>
        <header class="header">
            <div class="wrap">
                <div class="header-block">
                    <div class="mobile-menu-btn">
                        <span class="burger-btn">
                            <img src="img/_src/menu.png" alt="" class="burger-btn__icon">
                        </span>
                    </div>
                    <div class="header-logo">
                        <a href="#" class="header-logo__link">Logotype</a>
                    </div>
                    <ul class="menu-list">
                        <li class="list-item">
                            <a href="#" class="list-item__link active">topmenu1</a>
                        </li>
                        <li class="list-item">
                            <a href="#" class="list-item__link">topmenu2</a>
                        </li>
                    </ul>
                    <div class="search-block">
                        <div class="search-box">
                            <input class="search-input" type="text" name="country" id="autocomplete"/>
                            <span class="btn-submit">
                                <img src="img/_src/submit.png" alt="Submit" class="btn-submit__img">
                            </span>
                        </div>
                        <span class="search-btn">
                            <img src="img/_src/search.png" alt="" class="search-btn__img">
                        </span>
                        <span class="close-btn">
                            <img src="img/_src/close.png" alt="Close" class="close-btn__img">
                        </span>
                    </div>
                    <div class="acc-block">
                        <a href="#" class="acc-link">
                            <img src="img/_src/notification.png" class="acc-link__img" alt="">
                        </a>
                        <a href="#" class="acc-link">
                            <span class="acc-link__text">Register / Login</span>
                            <img src="img/_src/acc.png" class="acc-link__img" alt="">
                        </a>
                        <a href="#" class="acc-link">
                            <span class="acc-link__text">EN</span>
                        </a>
                    </div>
                </div>
            </div>
            <ul class="mobile-icons-list">
                <li class="mobile-icons-list__item">
                    <a href="#" class="mobile-icons-list__item-link">
                        <img src="img/_src/like.png" alt="Like">
                    </a>
                </li>
                <li class="mobile-icons-list__item">
                    <a href="#" class="mobile-icons-list__item-link">
                        <img src="img/_src/post.png" alt="Like">
                    </a>
                </li>
                <li class="mobile-icons-list__item">
                    <a href="#" class="mobile-icons-list__item-link">
                        <img src="img/_src/noun_friends.png" alt="Like">
                    </a>
                </li>
                <li class="mobile-icons-list__item">
                    <a href="#" class="mobile-icons-list__item-link">
                        <img src="img/_src/noti.png" alt="Like">
                    </a>
                </li>
                <li class="mobile-icons-list__item">
                    <a href="#" class="mobile-icons-list__item-link">
                        <img src="img/_src/stars.png" alt="Like">
                    </a>
                </li>
            </ul>
        </header>
        <section class="section-post">
            <div class="overlay"></div>
            <div class="outer-box">
                <div class="wrap">
                    <div class="post">
                        <div class="post-by">
                            <p class="post-by__text">Posts by celebrities</p>
                        </div>
                        <div class="wrap-mobile-by">
                            <div class="post-by-mobile">
                                <p class="post-by-mobile__text">text1</p>
                                <p class="post-by-mobile__text post-by-mobile__text--red">text2</p>
                            </div>
                        </div>
                        <div class="post-meta">
                            <div class="author-block">
                                <div class="author-photo">
                                    <img class="author-photo__img" src="img/_src/card_img.png" alt="Author">
                                </div>
                                <div class="author-about">
                                    <span class="author-about__title">Veronica Manford</span>
                                    <span class="author-about__date">Yesterday at 09:20</span>
                                </div>
                            </div>
                            <div class="icons-block">
                                <a href="#" class="icon-link mobile-hidden">
                                    <img class="icon-link__img" src="img/_src/heart.png" alt="Like">
                                    <span class="icon-link__text">14,1k</span>
                                </a>
                                <a href="#" class="icon-link mobile-hidden">
                                    <img class="icon-link__img" src="img/_src/comment.png" alt="Comment">
                                    <span class="icon-link__text">215</span>
                                </a>
                                <a href="#" class="icon-link">
                                    <img class="icon-link__img" src="img/_src/insta.png" alt="Instagram">
                                </a>
                            </div>
                        </div>
                        <div class="post-image">
                            <img class="post-image__img" src="img/_src/card.jpg" alt="Post image">
                        </div>
                        <div class="post-description">
                            <h4 class="post-description__title">VManford_ballet</h4>
                            <p class="post-description__text">
                                A happy place to wake up! I felt very peaceful and inspired by all of this glorious architecture 
                                surrounding me. <a href="#" class="link">@miranda</a> thank you for advising me that great cafe in the center... <a href="#" class="link">more</a>
                            </p>
                        </div>
                        <div class="wrap-mobile-icons">
                            <div class="icons-mobile">
                                <a href="#" class="icon-link">
                                    <img class="icon-link__img" src="img/_src/heart.png" alt="Like">
                                    <span class="icon-link__text">14,1k</span>
                                </a>
                                <a href="#" class="icon-link">
                                    <img class="icon-link__img" src="img/_src/comment.png" alt="Comment">
                                    <span class="icon-link__text">215</span>
                                </a>
                            </div>
                        </div>
                        <div class="post-share">
                            <a href="#" class="icon-link share">
                                <img class="icon-link__img" src="img/_src/share.png" alt="Author">
                            </a>
                            <a href="#" class="icon-link">
                                <img class="icon-link__img" src="img/_src/star.png" alt="Author">
                            </a>
                            <a href="#" class="icon-link">
                                <img class="icon-link__img" src="img/_src/dotts.png" alt="Author">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="search-overlay"></div>
        <div class="share-overlay"></div>
        <div class="mobile-share">
            <ul class="share-box-list">
                <li class="share-box-list-item">
                    <h4 class="share-box-list-item__header">Отправка данных</h4>
                </li>
                <li class="share-box-list-item">
                    <span class="share-box-list-item__text">https://www.customlink.com/about/profile?id=23456</span>
                    <span class="copy-btn">
                        <img class="copy-btn__img" src="img/_src/copy.png" alt="Copy"/>
                        <span class="copy-btn__text">Копировать</span>
                    </span>
                </li>
                <li class="share-box-list-item">
                    <div class="icons-list">
                        <a class="icons-list-link" href="#">
                            <img src="img/_src/710.png" alt="Photo" class="icons-list-link__img">
                            <span class="icons-list-link__name">James Charles</span>
                        </a>
                        <a class="icons-list-link" href="#">
                            <img src="img/_src/711.png" alt="Photo" class="icons-list-link__img">
                            <span class="icons-list-link__name">James Michael</span>
                        </a>
                        <a class="icons-list-link" href="#">
                            <img src="img/_src/712.png" alt="Photo" class="icons-list-link__img">
                            <span class="icons-list-link__name">James Macevoy</span>
                        </a>
                        <a class="icons-list-link" href="#">
                            <img src="img/_src/710.png" alt="Photo" class="icons-list-link__img">
                            <span class="icons-list-link__name">Michael Stone</span>
                        </a>
                    </div>
                </li>
                <li class="share-box-list-item">
                    <div class="icons-list">
                        <a class="icons-list-link" href="#">
                            <img src="img/_src/telegram.png" alt="Icon" class="icons-list-link__img">
                            <span class="icons-list-link__name">Telegram</span>
                        </a>
                        <a class="icons-list-link" href="#">
                            <img src="img/_src/whats-app.png" alt="Icon" class="icons-list-link__img">
                            <span class="icons-list-link__name">WhatsApp</span>
                        </a>
                        <a class="icons-list-link" href="#">
                            <img src="img/_src/instagram.png" alt="Icon" class="icons-list-link__img">
                            <span class="icons-list-link__name">Instagram</span>
                        </a>
                        <a class="icons-list-link" href="#">
                            <img src="img/_src/trello.png" alt="Icon" class="icons-list-link__img">
                            <span class="icons-list-link__name">Trello</span>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
        <script src="js/scripts.min.js"></script>
    </body>
</html>