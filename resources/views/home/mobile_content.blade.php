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
<main class="main-mobile__asset">

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
                <ul class="main-nav__items main-nav__items__rigth">
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
                    <li class="main-nav__item connected-link" style="cursor: pointer;">
                        <span class="material-icons" style="color: rgb(0, 0, 0);">account_circle</span></li>
                    <li class="main-nav__item new-post__add"><a href="publish">
                        <span class="material-icons">add</span>
                        <i>פרסום מודעה חדשה</i>
                    </a></li>
                </ul>
        </nav>

    </header>
    <section class="feed-lists__mobile">
        <div class="feed-lists__mobile-advertising">
            <img id="image" onclick="('no' == 'no' ? loadURL('https://adclick.g.doubleclick.net/pcs/click?xai=AKAOjst1Xb3U2HCcCn2bLdnIZrRYvoIrpAEEqfWNqhVbWZbeVDXlkXZy0FWY-i09SzJI9UuNc-ozoeIOcZudJY-KU429nKo0FuaxIRoyLjIl12jNC-yFRzSXYLDH7NWpDqe3hDEJyw8zjtAZRcNJsNnIyBN4eXGHQChxi0qLKTKSaEXS7n2GuxvycJE7tCXGjo_tJ7dJc2ym2NU9gTrlJQGJHO-Ksz1sKW1CahmNswYXsVYGWMtJcL-0Q2kjLFH25QT5ZdvUDlbYoX6UOeFxH9j9R-Aq5nWPz9hbOrqZRaK_SjvVfRoLknGGf4OO8bIksPO2Qu8-&amp;sai=AMfl-YSHjYkyjRI7-culCnfl3abagU--QABxoDq-q2E0B_mXTOyFDrUNScrG8K1Zuy6TPk-MPbTp9lUoyjAVh5aWJFYUyTVk0h7e45uOm7ronm_jd0L7xVFhkUt3NgIEjOm3rnjJmQ&amp;sig=Cg0ArKJSzGBq3TQMxFX_EAE&amp;fbs_aeid=[gw_fbsaeid]&amp;urlfix=1&amp;adurl=https://www.yad2.co.il/realestate/project%3Fproject%3D3572%26site%3D_in_x1_b_490_m_nad_m_upperstrip_gedera_and_surroundings_AVISROR_YAVNE',1) : '' );" src="https://securepubads.g.doubleclick.net/pcs/view?xai=AKAOjsvcbrOKN6NR1oGVzWmQjhGG51UqtaFG7kEBZMqSCnp6s4aK9IZ11l2DLD6i3r5bxLmE3csA09U1asnHcIs8fyjjTPE4UrK2AnoH-QbJ24aVTv0Z24-rpnXlxcsStBIPtdCNQAK0w-f829M8jXRKGDCyme53M5G-NblikZvaC1ZLH8IxfIMoPb5xcfN2RFpzq7qc5l8qg2IMddcZcSKBYogRLtHvc82cy0KLSRHH1sKt6N2eAZfll1qCBq9CDCxtPzYNG_dc0uTkSNod18mdsUcyLZ1d0x2a3tLVeirkQbxwO4EETqcFhsinKvLmxUGBNRxYbRs5_Ib3&amp;sai=AMfl-YT9xRygEUF41ix4h3G8-Jd4Tvm_-dz2SRFxSPVb44lxOeqRBtctLW_E1-rBCSOyyxDGkAd6a_OclbS_sWtjIFRy4kuFCnH5DboVp9PWcAa4zT3Nu08U_txwiTKo4GYS2vmqsQ&amp;sig=Cg0ArKJSzKqnxRb3IyVrEAE&amp;urlfix=1&amp;adurl=https://tpc.googlesyndication.com/simgad/3424697005856076381?">
        </div>
        @forelse ($property_list->aboutPropertys as $index => $aboutProperty)
        <div class="about-properties__mobile">
            <div class="cityAndDate">
                <div>{{ $aboutProperty['property_type'] }} למכירה ב{{ $aboutProperty['city'] }}</div>
                <div>{{ $property_list['update_date'] }}</div>
            </div>
            <div class="about-properties__mobile-image">
                @if ( isset($property_list->image[$index]->image) )
                    {{-- @foreach ($property_list->image as $index=>$image)

                    @endforeach --}}
                    <img src="images/{{$property_list->image[$index]->image}}" alt="">
                @else
                    <img src="" alt="">
                @endif
                    </div>
                    <div class="about-properties__mobile-content">
                        <div style="font-size: 1.5rem;"><strong>{{ $aboutProperty['price'] }}</strong></div>
                        <div> {{ $aboutProperty['street'] }} {{ $aboutProperty['house_number'] }} </div>
                        <div> {{ $aboutProperty['property_type'] }}, {{ $aboutProperty['settlement'] }}, {{ $aboutProperty['city'] }} </div>
                        <div class="partial-detail__asset-mobile">
                            <div class="partial-detail__asset-mibile__data">
                                <div><strong> {{ $aboutProperty['rooms_number'] }} </strong></div>
                                <div>חדרים</div>
                            </div>
                            <div class="partial-detail__asset-mibile__data">
                                <div><strong> {{ $aboutProperty['floor_number'] }} </strong></div>
                                <div>קומה</div>
                            </div>
                            <div class="partial-detail__asset-mibile__data">
                                <div><strong> {{ $aboutProperty['square_meter'] }} </strong></div>
                                <div>מ"ר</div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse
            <div class="scrolling-content">
                <ul class="scrolling-items">
                    <li class="scrolling-item" style="color: #ff7100; border-bottom: 3px solid #ff7100;"><a>על הנכס</a></li>
                    <li class="scrolling-item"><a>איך השכונה?</a></li>
                    <li class="scrolling-item"><a>עסקאות באזור</a></li>
                    <li class="scrolling-item"><a>בתי ספר וגני ילדים</a></li>
                    <li class="scrolling-item"><a>איך השכנים?</a></li>
                    <li class="scrolling-item"><a>תחבורה ציבורית</a></li>
                </ul>
            </div>
            <div class="general-description__mobile">
                @forelse ($property_list->generalDescriptionOfProperty as $generalDescriptionOfProperty)
                    <div class="general-description__property-mobile">
                        <h4 id="title-onProperty"> <strong>על הנכס</strong> </h4>
                        <div class="property-description__mobile"> {{ $generalDescriptionOfProperty['general_description'] }} </div>
                    </div>
                    <div class="navigation-mobile">
                        <div>
                            <span class="material-icons" style="color: #ff7100; font-size: 1.2rem; vertical-align: middle;">location_on</span>
                            <i>מפה</i>
                        </div>
                        <div>
                            <span class="material-icons" style="color: #ff7100; font-size: 1.2rem; vertical-align: middle;">near_me</span>
                            <i>ניווט</i>
                        </div>
                    </div>
                    <div class="general-info__lists general-info__lists-mobile">
                        <div class="general-info__list general-info__list-mobile">
                            <div class="general-info__list-mobile__title">מצב הנכס</div>
                            <div> {{ $generalDescriptionOfProperty['property_condition'] }} </div>
                        </div>
                        <div class="general-info__list general-info__list-mobile">
                            <div class="general-info__list-mobile__title">תאריך כניסה</div>
                            <div> {{ $generalDescriptionOfProperty['entry_date'] }} </div>
                        </div>
                        <div class="general-info__list general-info__list-mobile">
                            <div class="general-info__list-mobile__title">קומות בבניין</div>
                            <div> {{ $generalDescriptionOfProperty['total_floors_in_the_building'] }} </div>
                        </div>
                        <div class="general-info__list general-info__list-mobile">
                            <div class="general-info__list-mobile__title">מרפסות</div>
                            <div> {{ $generalDescriptionOfProperty['balconies'] }} </div>
                        </div>
                        <div class="general-info__list general-info__list-mobile">
                            <div class="general-info__list-mobile__title">חניות</div>
                            <div> {{ $generalDescriptionOfProperty['parking'] }} </div>
                        </div>
                    </div>
                @empty

                @endforelse
            </div>
            <div id="media_container" style="width: min-content; margin: 1.5rem auto;">
                <a id="click_to_call_holder">
                <img id="image" onclick="('no' == 'no' ? loadURL('https://adclick.g.doubleclick.net/pcs/click?xai=AKAOjsstb8IchDhtCGzYTiMY8VefB_tzP7cWp6MN8Qi4nFwwVCrImxh5bGm3k86aHTwW0lL_HpQ9OzHT9b_oBtggEpw_CFxdUuxCh6NAsz7-kG7GtPTSVXYoaDpuJemDp4MFyzltTAA12oSxk44j_ms8bEq3ebsFPtT6NIiqU6CQ-prB8IoZamLFBWw5F_lKPv2nfA6k_FqIAcLnjZXhXgu0sC4XUNQHDQSfLvSryoNpTRsonT305vsWMT-xnsrcS9UOh9uGzH7lmUG3PJuUMrHQt8qd9KTp1VnuejcTZ-zUPkkEHMRDPWOJHefy581P19Uev8TnG8Q&amp;sai=AMfl-YTrWbS1bSatfODRLsQSXdtsGc4Ij9xM5tbUi3a7Wa3eMZbtjjDB9KJBU3NmyBWkocnzUA3prxMhQip4jo1jnzMEDP1gaJdlNZ5KNolSYrQcuagWt5j9P4llosaOaEuF-8oHDA&amp;sig=Cg0ArKJSzPmx5wwsw-4TEAE&amp;fbs_aeid=[gw_fbsaeid]&amp;urlfix=1&amp;adurl=http://www.pro.yad2.co.il/nmknu,%2Btcyjv_tzur%2B,k%2Btchc%2Buvnrfz',1) : '' );" src="https://securepubads.g.doubleclick.net/pcs/view?xai=AKAOjssXowAstz7UjUEv8Ce3pct5MLwXrQEP20aON4gPVmJLMrzI-I1LSd5wKxJ6V0RnFhU57Mssl8E3Lp4j5b7l03t0mAkWUlykGy_KYOtmfHbGVvF7GIFRRFx5Rr69eSQP6xgX4N4XT1ZbusPLHTHxwL54_K3MA2-UFCkG0IfGucBNdmCKkvIlC-M0Tg9uCQ8g_T3e6MnIGK8LI7G26VzIx2uabg4E4l9ArwxpTQgvJTfSP71BOPGql_fnP8_AW1NgCLYMRkZKVbTgOEB-MQ7dXTtQm8AA1mWH5k-HSXKWlDF_CWJkQD8oeCSwWEVVsB_pNLNwncIbanNg5lQ&amp;sai=AMfl-YRMWUfj92rhleuRnjla3ZJPxxSfWCvVfHNLXOXz6zZ4Lbfl6E7fXDrPIiVwnzTUPxcPno0cGnNp5Q21NquWXmGr9xutOImJWhyyyC0AqtQSWIbnLZA9tvQUax75r6NOliN8Gw&amp;sig=Cg0ArKJSzHBYHsH4SKVuEAE&amp;urlfix=1&amp;adurl=https://tpc.googlesyndication.com/simgad/13936513442211473136?">
                </a>
             </div>
            <div class="property-characteristics__mobile">
                <h4>מה יש בנכס?</h4>
                @forelse ($property_list->propertyCharacteristics as $propertyCharacteristics)
                    <ul class="property-characteristics__mobile-items">
                        <li class="property-characteristics__mobile-item" value="{{ $propertyCharacteristics['air_conditioning'] }}">
                            <span class="material-icons">check_circle_outline</span>
                            <div>מיזוג</div>
                        </li>
                        <li class="property-characteristics__mobile-item" value="{{ $propertyCharacteristics['bars'] }}">
                            <span class="material-icons">check_circle_outline</span>
                            <div>סורגים</div>
                        </li>
                        <li class="property-characteristics__mobile-item" value="{{ $propertyCharacteristics['elevators'] }}">
                            <span class="material-icons">check_circle_outline</span>
                            <div>מעלית</div>
                        </li>
                        <li class="property-characteristics__mobile-item" value="{{ $propertyCharacteristics['kosher_kitchen'] }}">
                            <span class="material-icons">check_circle_outline</span>
                            <div>מטבח כשר</div>
                        </li>
                        <li class="property-characteristics__mobile-item" value="{{ $propertyCharacteristics['access_for_disabled'] }}">
                            <span class="material-icons">check_circle_outline</span>
                            <div>גישה לנכים</div>
                        </li>
                        <li class="property-characteristics__mobile-item" value="{{ $propertyCharacteristics['renovated'] }}">
                            <span class="material-icons">check_circle_outline</span>
                            <div>משופצת</div>
                        </li>
                        <li class="property-characteristics__mobile-item" value="{{ $propertyCharacteristics['mamad'] }}">
                            <span class="material-icons">check_circle_outline</span>
                            <div>ממ"ד</div>
                        </li>
                        <li class="property-characteristics__mobile-item" value="{{ $propertyCharacteristics['Storage'] }}">
                            <span class="material-icons">check_circle_outline</span>
                            <div>מחסן</div>
                        </li>
                        <li class="property-characteristics__mobile-item" value="{{ $propertyCharacteristics['pandor_doors'] }}">
                            <span class="material-icons">check_circle_outline</span>
                            <div>דלתות פנדור</div>
                        </li>
                        <li class="property-characteristics__mobile-item" value="{{ $propertyCharacteristics['tadiran_air_conditioner'] }}">
                            <span class="material-icons">check_circle_outline</span>
                            <div>מזגן תדיראן</div>
                        </li>
                        <li class="property-characteristics__mobile-item" value="{{ $propertyCharacteristics['Furniture'] }}">
                            <span class="material-icons">check_circle_outline</span>
                            <div>ריהוט</div>
                        </li>
                    </ul>
                @empty

                @endforelse
            </div>

    </section>

    <div class="mobile-contact">
        <button class="mobile-contact__btn">הצגת מספר טלפון</button>
    </div>
</main>
</body>
</html>
