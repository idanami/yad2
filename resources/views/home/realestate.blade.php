<!DOCTYPE html>
<html lang="en">
    @extends('master')
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{-- <title>לוח יד 2</title> --}}
        @section('title','לוח יד 2')
    </head>
<body>
    @section('content')
    @endsection

    <header class="main-header">
        <div class="main-header__mobile">
            <button class="toggle-button">
                <i class="toggle-button__bar"><span class="material-icons">menu</span></i>
            </button>
            <a href="/" class="main-header__brand__mobile">
                <img src="//assets.yad2.co.il/yad2site/y2assets/images/header/Yad2_logo_white2.svg" alt="לוגו יד2 yad2 logo">
            </a>
        </div>
        <nav class="main-nav">
                <ul class="main-nav__items">
                    <li class="main-nav__item">
                        <div><a href="/" class="main-header__brand">
                            <img src="//assets.yad2.co.il/yad2site/y2assets/images/header/yad2Logo.png" alt="לוגו יד2 yad2 logo">
                        </a></div>
                    </li>
                    <li class="main-nav__item"><div>נדל"ן</div></li>
                    <li class="main-nav__item"><div>רכב</div></li>
                    <li class="main-nav__item"><div>יד שניה</div></li>
                    <li class="main-nav__item"><div>דרושים IL</div></li>
                    <li class="main-nav__item"><div>עסקים ומסחרי</div></li>
                    <li class="main-nav__item"><div>חיות מחמד</div></li>
                    <li class="main-nav__item"><div>בעלי מקצוע</div></li>
                    <li class="main-nav__item"><div>ועוד...</div></li>
                </ul>
            <ul class="main-nav__items">
                <li class="main-nav__item"><a href="">
                    <span class="material-icons">favorite_border</span></a></li>
                <li class="main-nav__item"><a href="">
                    <span class="material-icons">notifications_none</span></a></li>
                <li class="main-nav__item"><a href="">
                    <span class="material-icons">account_circle</span></a></li>
                <li class="main-nav__item new-post__add"><a href="publish">
                    <span class="material-icons">add</span>
                    <i>פרסום מודעה חדשה</i>
                </a></li>
            </ul>
        </nav>

    </header>
        <div class="header-desktop"></div>
        <section class="searching-property">
            <div class="mobile-searching__property">
                <span class="material-icons">search</span>
                <div class="search-mobile__text">נכסים למכירה</div>

            </div>
        </section>
        <section class="navbar-wrapper">
            <nav class="feed-navbar">
                <ul class="feed-navbar__items">
                    <li class="feed-navbar__item"><a><span>מכירה</span></a></li>
                    <li class="feed-navbar__item"><a><span>השכרה</span></a></li>
                    <li class="feed-navbar__item"><a><span>דירות שותפים</span></a></li>
                    <li class="feed-navbar__item"><a><span>נדל"ן מסחרי</span></a></li>
                </ul>
                <ul class="feed-navbar__items">
                    <li class="feed-navbar__item">
                        <a href="" class="feed-navbar__item__description">
                            <div>
                                <span class="material-icons">gavel</span>
                                <p>כונס נכסים</p>
                            </div>
                        </a>
                    </li>
                    <li class="feed-navbar__item">
                        <a href="" class="feed-navbar__item__description">
                            <div>
                                <span class="material-icons">trending_up</span>
                                <p>מדד הנדל"ן</p>
                            </div>
                        </a>
                    </li>
                    <li class="feed-navbar__item">
                        <a href="" class="feed-navbar__item__description">
                            <div>
                                <img src="//assets.yad2.co.il/yad2site/y2assets/images/logos/yad1/yad1_logo.svg" alt class="sub_menu_logo">
                                <p>יד1 דירות חדשות</p>
                            </div>
                        </a>
                    </li>
                    <li class="feed-navbar__item">
                        <a href="" class="feed-navbar__item__description">
                            <div>
                                <img src="//assets.yad2.co.il/yad2site/y2assets/images/logos/yadata/yadata_logo_black.svg" alt class="ub_menu_logo">
                                <p>הערכת שווי נכס</p>
                            </div>
                        </a>
                    </li>

                </ul>
            </nav>
        </section>

    <main>

        <div class="title">
            <div class="title-description">
                <div>ראשי</div>
                <span>\</span>
                <div>נכסים למכירה</div>
            </div>
            <button class="accessibility-btn">
                <span class="material-icons">accessibility_new</span>
                <i>נגישות</i>
            </button>
        </div>

        <section class="search-wrapper">
            <h3 class="search-realestate__subtitle">איזה נכס
                <span>מסחרי</span>
                 תרצו לחפש?</h3>
            <form action="" class="form-search__realestate__columns">
                <div class="search-column">
                    <label for="city_search">חפשו אזור, עיר, שכונה או רחוב</label>
                    <input type="text" id="city_search" placeholder="לדוגמא:אחוזה ת חיפה">
                </div>
                <div class="search-column">
                    <label for="property">סוג נכס</label>
                    <button class="field-drop__button">
                        <div>בחרו סוגי נכסים</div>
                        <span class="material-icons">expand_more</span>
                        <span class="material-icons">expand_less</span>
                    </button>
                </div>
                <div class="search-column">
                    <label for="deal_type">בחרו עסקה</label>
                    <button class="field-drop__button">
                        <div>עסקאות</div>
                        <span class="material-icons">expand_more</span>
                        <span class="material-icons">expand_less</span>
                    </button>
                </div>
                <div class="search-column">
                    <label for="price">מחיר</label>
                    <div style="width: 100%; display: inline-flex;">
                        <input style="width: inherit;" type="text" id="price" placeholder="ממחיר">
                        <input style="width: inherit;" type="text" placeholder="עד מחיר">
                    </div>
                </div>
                <div class="search-column search-column__button">
                    <button class="search-advanced">
                        <span class="material-icons materila-icons__add_circle_outline" style="font-size: 1rem; vertical-align: middle;">add_circle_outline</span>
                        <span class="material-icons materila-icons__cancel" style="font-size: 1rem; display: none; vertical-align: middle;">cancel</span>
                        <i style="color: black;">חיפוש מתקדם</i>
                    </button>
                </div>
                <div class="search-column search-column__button">
                    <button class="search-again">
                        <span class="material-icons" style="font-size: 1rem; vertical-align: middle; color: white;">search</span>
                        <i style="color: white;">חיפוש</i>
                    </button>
                </div>
            </form>
        </section>
        <div class="feed-options">
            <div class="sortBy">
                <label for="">מיין לפי</label>
                <button>
                    <i style="padding-left: 4rem;">לפי תאריך</i>
                    <span class="material-icons">expand_more</span>
                </button>
                <div class="feed-filter___dropdowm" style="display: none;">
                    <div class="feed-filter__dropdown__list">
                        <input type="radio">
                        <i>לפי תאריך</i>
                    </div>
                    <div class="feed-filter__dropdown__list">
                        <input type="radio">
                        <i>מחיר - מהזול ליקר</i>
                    </div>
                    <div class="feed-filter__dropdown__list">
                        <input type="radio">
                        <i>מחיר - מהיקר לזול</i>
                    </div>
                </div>
            </div>
            <div class="sortBy-mobile">
                <button class="feed-options__button">
                    <span class="material-icons" style="vertical-align: middle;">expand_more</span>
                    <span>מיין תוצאות</span>
                </button>
                <div class="feed-filter___dropdowm__mobile" style="display: none;">
                    <div class="feed-filter__dropdown__list__mobile">
                        <input type="radio">
                        <div>לפי תאריך</div>
                    </div>
                    <div class="feed-filter__dropdown__list__mobile">
                        <input type="radio">
                        <div>מחיר - מהזול ליקר</div>
                    </div>
                    <div class="feed-filter__dropdown__list__mobile">
                        <input type="radio">
                        <div>מחיר - מהיקר לזול</div>
                    </div>
                    <div class="feed-filter__dropdown__list__mobile">
                        <input type="radio">
                        <div>קרוב אלי</div>
                    </div>
                </div>
            </div>
            <div class="showADS">
                <label for="">הצג מודעות</label>
                <button>
                    <span class="material-icons" style="font-size: 16px">euro</span>
                    <i>רק מחיר</i>
                </button>
                <button>
                    <span class="material-icons" style="font-size: 16px">image</span>
                    <i>רק תמונה</i>
                </button>
            </div>
            <div class="showADS-mobile">
                <button class="feed-options__button">
                    <span class="material-icons" style="font-size: 16px; vertical-align: middle;">filter_alt</span>
                    <span>סנן תוצאות</span>
                </button>
                <div class="filter-option__mobile">
                    <input type="checkbox">
                    <div>רק מחיר</div>
                </div>
                <div class="filter-option__mobile">
                    <input type="checkbox">
                    <div>רק תמונה</div>
                </div>
            </div>
            <div class="map">
                <button class="feed-options__button feed-options__button__map">
                    <span class="material-icons" style="font-size: 1rem; vertical-align: middle;">place</span>
                    <span>תצוגת מפה</span>
                </button>
            </div>
        </div>
        <section class="feed-lists">
            <div class="feed-list__item">
                <div class="location-asset">
                    <div class="image-container">
                        <img src="https://img.yad2.co.il/Pic/202104/18/2_1/o/y2_1_09912_20210418230453.jpeg?l=7&c=6&w=1024&h=768" alt="">
                    </div>
                    <div class="location-asset__description">
                        <div>אבנר חי שאקי 1</div>
                        <div style="font-size: 0.875rem;">דירה, גילה, ירושלים</div>
                    </div>
                </div>
                <div class="partial-detail__asset">
                    <div class="partial-detail__asset__data">
                        <div>6</div>
                        <div>חדרים</div>
                    </div>
                    <div class="partial-detail__asset__data">
                        <div>4</div>
                        <div>קומות</div>
                    </div>
                    <div class="partial-detail__asset__data">
                        <div>137</div>
                        <div>מ"ר</div>
                    </div>
                </div>
                <div class="asset-price">
                    <i class="material-icon__asset-price"><span class="material-icons" style="font-size: 0.8rem;">launch</span></i>
                    <div class="asset-price__data">1800000</div>
                    <div class="asset-price__data">עודכן היום</div>
                </div>
            </div>

        </section>

    </main>
</body>
</html>
