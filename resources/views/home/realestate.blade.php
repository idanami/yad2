<!DOCTYPE html>
<html lang="en">
    @extends('master')
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @section('title','לוח יד 2')
    </head>
<body>

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
                    <li class="main-nav__item-image">
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
                <li class="main-nav__item connected-link" style="cursor: pointer;">
                    <span class="material-icons" style="color: rgb(0, 0, 0);">account_circle</span></li>
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
                <span class="material-icons search-mobile__span">search</span>
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
                    <button class="field-drop__button expand_moreOrexpand_less">
                        <div>בחרו סוגי נכסים</div>
                        <span class="material-icons">expand_more</span>
                    </button>
                    <div style="position: relative;">
                        <div class="allTypes-ofAssets" style="display: none;">
                            <div class="check-type">
                                <input type="checkbox">
                                <div>להשכרה</div>
                            </div>
                            <div class="check-type">
                                <input type="checkbox">
                                <div>למכירה</div>
                            </div>
                            <div class="check-type__btn">
                                <button>בחירה</button>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="search-column">
                    <label for="deal_type">בחרו עסקה</label>
                    <button class="field-drop__button expand_moreOrexpand_less">
                        <div>עסקאות</div>
                        <span class="material-icons">expand_more</span>
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
                    <div class="dropdown-content__search">
                        <div class="advanced-search__content">
                            <h4>מאפייני הדירה</h4>
                            <ul class="advanced-search__apartment-characteristics">
                                <li class="advanced-search__apartment-characteristic">
                                    <input type="checkbox">
                                    <div>דלתות פנדור</div>
                                </li>
                                <li class="advanced-search__apartment-characteristic">
                                    <input type="checkbox">
                                    <div>חניה</div>
                                </li>
                                <li class="advanced-search__apartment-characteristic">
                                    <input type="checkbox">
                                    <div>מעלית</div>
                                </li>
                                <li class="advanced-search__apartment-characteristic">
                                    <input type="checkbox">
                                    <div>מיזוג</div>
                                </li>
                                <li class="advanced-search__apartment-characteristic">
                                    <input type="checkbox">
                                    <div>מרפסת</div>
                                </li>
                                <li class="advanced-search__apartment-characteristic">
                                    <input type="checkbox">
                                    <div>ממ"ד</div>
                                </li>
                                <li class="advanced-search__apartment-characteristic">
                                    <input type="checkbox">
                                    <div>סורגים</div>
                                </li>
                                <li class="advanced-search__apartment-characteristic">
                                    <input type="checkbox">
                                    <div>מחסן</div>
                                </li>
                                <li class="advanced-search__apartment-characteristic">
                                    <input type="checkbox">
                                    <div>גישה לנכים</div>
                                </li>
                                <li class="advanced-search__apartment-characteristic">
                                    <input type="checkbox">
                                    <div>משופצת</div>
                                </li>
                                <li class="advanced-search__apartment-characteristic">
                                    <input type="checkbox">
                                    <div>מרוהטת</div>
                                </li>
                                <li class="advanced-search__apartment-characteristic">
                                    <input type="checkbox">
                                    <div>בבלעדיות</div>
                                </li>
                            </ul>
                            <ul class="advanced-search__descriptions">
                                <li class="advanced-search__description">
                                    <div>קומה</div>
                                    <div class="advanced-search__description-input">
                                        <input type="text" style="margin-left:0.3rem;">
                                        <input type="text">
                                    </div>
                                </li>
                                <li class="advanced-search__description">
                                    <div>גודל דירה (במ"ר)</div>
                                    <div class="advanced-search__description-input">
                                        <input type="text" style="margin-left:0.3rem;">
                                        <input type="text">
                                    </div>
                                </li>
                                <li class="advanced-search__description">
                                    <div>תאריך כניסה</div>
                                    <input type="date">
                                </li>
                                <li class="advanced-search__description" style="display: flex; align-items: center; align-self: flex-end;">
                                    <input type="checkbox">
                                    <div>כניסה מיידית</div>
                                </li>
                            </ul>
                            <ul class="free-search">
                                <li class="free-search__item">
                                    <div>חיפוש חופשי</div>
                                    <input class="free-search__item-input" type="text">
                                </li>
                                <li class="free-search__item" style="align-self: flex-end; color: #ccc;">
                                    <div class="free-search__item-checkbox">
                                        <input type="checkbox">
                                        <div>הצג רק מושבים וקיבוצים</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
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
                <button class="expand_moreOrexpand_less">
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

            @foreach ($property_lists as $property_list)
            @forelse ($property_list->aboutPropertys as $aboutProperty)
                <form action="mobile_content" method="POST" id="property_list_id" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id='propertyListId'  name="propertyListId">
                </form>
                <div class="feed-list__item feed-lists__child" value="{{$property_list['id']}}">
                        <div class="location-asset">
                            <div class="image-container">
                                <img src="https://img.yad2.co.il/Pic/202104/18/2_1/o/y2_1_09912_20210418230453.jpeg?l=7&c=6&w=1024&h=768" alt="">
                            </div>
                            <div class="location-asset__description">
                                <div> {{ $aboutProperty['street'] }} {{ $aboutProperty['house_number'] }} </div>
                                <div style="font-size: 0.875rem;">{{ $aboutProperty['property_type'] }}, {{ $aboutProperty['settlement'] }}, {{ $aboutProperty['city'] }}</div>
                            </div>
                        </div>
                        <div class="partial-detail__asset">
                            <div class="partial-detail__asset__data">
                                <div>{{ $aboutProperty['rooms_number'] }}</div>
                                <div>חדרים</div>
                            </div>
                            <div class="partial-detail__asset__data">
                                <div>{{ $aboutProperty['floor_number'] }}</div>
                                <div>קומה</div>
                            </div>
                            <div class="partial-detail__asset__data">
                                <div>{{ $aboutProperty['square_meter'] }}</div>
                                <div>מ"ר</div>
                            </div>
                        </div>
                        <div class="asset-price">
                            <i class="material-icon__asset-price"><span class="material-icons" style="font-size: 0.8rem;">launch</span></i>
                            <div class="asset-price__data">{{ $aboutProperty['price'] }}</div>
                            <div class="asset-price__data">{{ $property_list['update_date'] }}</div>
                        </div>
                    </div>
                @empty
                @endforelse
                <div class="feed-lists__content feed-lists__child" id="feed-lists__content{{$property_list['id']}}" style="display: none;">
                    <div class="feed-lists__newProject-area">
                        <div class="newProject-area__image">
                            <img src="https://static.dezeen.com/uploads/2020/02/house-in-the-landscape-niko-arcjitect-architecture-residential-russia-houses-khurtin_dezeen_2364_hero.jpg">
                        </div>
                        <div style="margin-top: 0.5rem;">פרויקטים חדשים באזור</div>
                        <div class="newProject-area__image">
                            <img src="https://images.adsttc.com/media/images/5e1d/02c3/3312/fd58/9c00/06e9/slideshow/NewHouse_SA_Photo_01.jpg?1578959519">
                        </div>
                        <div class="newProject-area__image">
                            <img src="https://i.pinimg.com/originals/38/d7/5b/38d75b985d9d08ce0959201f8198f405.jpg">
                        </div>
                    </div>
                    <div class="feed-lists__content-description">
                        <h5 class="feed-lists__subtitle">תיאור הנכס</h5>
                        @forelse ($property_list->generalDescriptionOfProperty as $generalDescriptionOfProperty)
                            <div class="feed-lists__description"> {{ $generalDescriptionOfProperty['general_description'] }} </div>
                            <div class="general-info__lists">
                                <div class="general-info__list">
                                    <dt>מצב הנכס</dt>
                                    <dd> {{ $generalDescriptionOfProperty['property_condition'] }} </dd>
                                </div>
                                <div class="general-info__list">
                                    <dt>תאריך כניסה</dt>
                                    <dd> {{ $generalDescriptionOfProperty['entry_date'] }} </dd>
                                </div>
                                <div class="general-info__list">
                                    <dt>קומות בבניין</dt>
                                    <dd> {{ $generalDescriptionOfProperty['total_floors_in_the_building'] }} </dd>
                                </div>
                                <div class="general-info__list">
                                    <dt>מרפסות</dt>
                                    <dd> {{ $generalDescriptionOfProperty['balconies'] }} </dd>
                                </div>
                                <div class="general-info__list">
                                    <dt>חניות</dt>
                                    <dd> {{ $generalDescriptionOfProperty['parking'] }} </dd>
                                </div>
                            </div>
                        @empty
                        @endforelse
                        <h5 class="general-info__title">מה יש בנכס?</h5>
                        @forelse ($property_list->propertyCharacteristics as $propertyCharacteristics)
                            <div class="feed-lists__including-lists">
                                <div class="including-list" value="{{ $propertyCharacteristics['air_conditioning'] }}">
                                    <span class="material-icons">ac_unit</span>
                                    <div class="including-list__info">מיזוג</div>
                                </div>
                                <div class="including-list" value="{{ $propertyCharacteristics['bars'] }}">
                                    <span class="material-icons">fence</span>
                                    <div class="including-list__info">סורגים</div>
                                </div>
                                <div class="including-list" value="{{ $propertyCharacteristics['elevators'] }}">
                                    <span class="material-icons">elevator</span>
                                    <div class="including-list__info">מעלית</div>
                                </div>
                                <div class="including-list" value="{{ $propertyCharacteristics['kosher_kitchen'] }}">
                                    <span class="material-icons">countertops</span>
                                    <div class="including-list__info">מטבח כשר</div>
                                </div>
                                <div class="including-list" value="{{ $propertyCharacteristics['access_for_disabled'] }}">
                                    <span class="material-icons">accessible</span>
                                    <div class="including-list__info">גישה לנכים</div>
                                </div>
                                <div class="including-list" value="{{ $propertyCharacteristics['renovated'] }}">
                                    <span class="material-icons">format_paint</span>
                                    <div class="including-list__info">משופצת</div>
                                </div>
                                <div class="including-list" value="{{ $propertyCharacteristics['mamad'] }}">
                                    <span class="material-icons">gite</span>
                                    <div class="including-list__info">ממ"ד</div>
                                </div>
                                <div class="including-list" value="{{ $propertyCharacteristics['Storage'] }}">
                                    <span class="material-icons">inventory_2</span>
                                    <div class="including-list__info">מחסן</div>
                                </div>
                                <div class="including-list" value="{{ $propertyCharacteristics['pandor_doors'] }}">
                                    <span class="material-icons">sensor_door</span>
                                    <div class="including-list__info">דלתות פנדור</div>
                                </div>
                                <div class="including-list" value="{{ $propertyCharacteristics['tadiran_air_conditioner'] }}">
                                    <span class="material-icons">air</span>
                                    <div class="including-list__info">מזגן תדיראן</div>
                                </div>
                                <div class="including-list" value="{{ $propertyCharacteristics['Furniture'] }}">
                                    <span class="material-icons">weekend</span>
                                    <div class="including-list__info">ריהוט</div>
                                </div>
                            </div>
                        @empty
                        <div>test</div>
                        @endforelse
                    </div>
                </div>
            @endforeach
        </section>

    </main>
</body>
</html>
