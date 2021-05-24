<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title') - page</title>
    {{-- <link href="/css/all.css" rel="stylesheet"> --}}
    <link href="http://yad2//css/all.css" rel="stylesheet">
    {{-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --}}

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/UAParser.js/0.7.19/ua-parser.min.js"></script>
    <script src="{{ mix('/js/all.js') }}"></script>
    @routes
</head>
<body>
    <div class="background"></div>

<main class="py-4">
    <section class="popUpWindow" style="display: none;">
        <div class="close-popUpWindow" style="cursor: pointer;">x</div>
        <div class="popupContent">
            <div class="login-popupContent  popup-connection__wrapper">
                <div class="popupContent-welcome">
                    <div>
                        <img src="https://y2-address-master-dev.s3-eu-west-1.amazonaws.com/auth/New_logo_negative.svg">
                        <h1>ברוכים הבאים לאתר יד2</h1>
                        <h4>טוב לראות אותך שוב!</h4>
                    </div>
                    <div class="couch-lamp__img">
                        <img src="https://y2-address-master-dev.s3-eu-west-1.amazonaws.com/auth/couch_lamp.svg">
                    </div>
                </div>
                <div class="popupContent-inner__wrapper">
                    <form action="login" method="POST" class="popupContent-form" enctype="multipart/form-data">
                        @csrf
                        <div class="header-login">
                            <h3>התחברות</h3>
                            <p>הזן את הפרטים כדי להתחבר</p>
                        </div>
                        <div class="popupContent-inner">
                            <div class="popupContent-login__input__wrapper">
                                <div class="popupContent-login__input__text">
                                    <label for="email">כתובת מייל</label>
                                    <input type="text" id="email__login" name="email__login" placeholder="your@mail.com" onkeyup="validate(6)">
                                </div>
                                <div class="popupContent-login__input__text">
                                    <label for="password">סיסמא</label>
                                    <div class="popupContent-login__password">
                                        <input type="password" name="password__login" id="password__login" placeholder="הקלד סיסמא" onkeyup="validate(6)">
                                        <span class="material-icons" id="visibil_login" onclick="changeType('password__login','visibil_login')">visibility_off</span></a></li>
                                        <span class="material-icons" style="display: none;">visibility</span></a></li>
                                    </div>
                                </div>
                                <div class="popupContent-forget__password">
                                    <a class="forgetPassword aConnection" id="forgetPassword">שכחתי סיסמה</a>
                                </div>
                            </div>
                            <div class="popupContent-connection__submit">
                                <button class="btn-connection" id="btn_login" disabled='disabled'>התחבר</button>
                                <div class="registerOrlogin">
                                    לא רשום?
                                    <a class="toRegister aConnection" id="toRegister">להרשמה</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="password-reset__popupContent  popup-connection__wrapper">
                <div class="popupContent-welcome">
                    <div>
                        <img src="https://y2-address-master-dev.s3-eu-west-1.amazonaws.com/auth/New_logo_negative.svg">
                        <h1>ברוכים הבאים לאתר יד2</h1>
                        <h4>טוב לראות אותך שוב!</h4>
                    </div>
                    <div class="couch-lamp__img">
                        <img src="https://y2-address-master-dev.s3-eu-west-1.amazonaws.com/auth/couch_lamp.svg">
                    </div>
                </div>
                <div id="enter_token_to_confirm" class="popupContent-inner__wrapper">
                    <div class="popupContent-form">
                        <div class="header-login">
                            <h3>חידוש סיסמה</h3>
                            <p class="haader-description__resetPass">על מנת לחדש סיסמה, הזן מייל לקבלת לינק לחידוש</p>
                        </div>
                        <div class="popupContent-inner send-mail__forAuth">
                            <div class="popupContent-login__input__wrapper">
                                <div class="popupContent-login__input__text">
                                    <label for="email-reseet_pass">כתובת מייל</label>
                                    <input type="text" id="email-reseet_pass" name="email_reseet_pass" placeholder="your@mail.com" onkeyup="validate(3)">
                                </div>
                            </div>
                            <div class="popupContent-connection__submit">
                                <button class="btn-connection" id="btn-check__emailIfExsist" disabled='disabled'>שלח קוד אימות</button>
                            </div>
                        </div>
                        <div class="popupContent-inner send-for__review">
                            <div id="your-email__forResetPassword"></div>
                            <div class="popupContent-login__input__wrapper">
                                <div class="popupContent-login__input__text">
                                    <label for="email-reseet_pass">הכנס קוד שיחזור</label>
                                    <input type="text" id="password-token__confirm" onkeyup="validate(5)">
                                    <span id="error_token"></span>
                                </div>
                            </div>
                            <div class="popupContent-connection__submit">
                                <button class="btn-connection" id="btn-token__confirm" disabled='disabled'>שלח לבדיקה</button>
                            </div>
                        </div>
                        <form action="enter_new_pass" id="enterNewPass" method="POST" class="popupContent-inner change-password" enctype="multipart/form-data">
                            @csrf
                            <div class="popupContent-login__input__wrapper">
                                <div class="popupContent-login__input__text">
                                    <label for="email-reseet_pass">סיסמא</label>
                                    <input type="text" id="newPassword" name="newPassword" placeholder="6 תווים, אותיות באנגלית וספרה אחת" onkeyup="validate(4)">
                                    <input type="text" id="confirmNewPassword" name="confirmNewPassword" placeholder="הקלד את הסיסמה שבחרת שוב" onkeyup="validate(4)" style="margin-top: 0.8rem;">
                                </div>
                                <input type="hidden" id="email_for_change_pass" name="email_for_change_pass" value="{{session()->get('enter_token_pass')}}">
                            </div>
                            <div class="popupContent-connection__submit">
                                <button class="btn-connection" id="btn-new__password" disabled='disabled'>המשך</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="register-popupContent  popup-connection__wrapper">
                <div class="popupContent-welcome">
                      <div>
                          <img src="https://y2-address-master-dev.s3-eu-west-1.amazonaws.com/auth/New_logo_negative.svg">
                          <h1>ברוכים הבאים לאתר יד2</h1>
                          <h4>הצטרפו לקהילה שלנו!</h4>
                      </div>
                    <div class="couch-lamp__img">
                        <img src="https://y2-address-master-dev.s3-eu-west-1.amazonaws.com/auth/couch_lamp.svg">
                    </div>
                </div>
                <div class="popupContent-inner__wrapper">
                    <form action="register" method="POST" class="popupContent-form" enctype="multipart/form-data">
                        @csrf
                        <div class="header-login">
                            <h3>הרשמה</h3>
                            <p>הזן את הפרטים כדי להירשם</p>
                        </div>
                        <div class="popupContent-inner popupContent-register__part1">
                            <div class="popupContent-login__input__wrapper">
                                    <div class="popupContent-login__input__text">
                                        <label for="email_register">כתובת מייל</label>
                                        <input type="text" id="email_register" name="email_register" placeholder="your@mail.com" onkeyup="validate(1)">
                                    </div>
                                    <div class="popupContent-login__input__text">
                                        <label for="password">סיסמא</label>
                                        <div class="popupContent-login__password">
                                            <input type="password" id="password" name="password" placeholder="6 תווים, אותיות באנגלית וספרה" onkeyup="validate(1)">
                                            <span class="material-icons" id="visibil_register" onclick="changeType('password','visibil_register')">visibility_off</span></a></li>
                                            <span class="material-icons" style="display: none;">visibility</span></a></li>
                                        </div>
                                    </div>
                                    <div class="popupContent-login__input__text">
                                        <label for="pass_confirm">סיסמא</label>
                                        <div class="popupContent-login__password">
                                            <input type="password" id="pass_confirm" name="pass_confirm" placeholder="חזור על הסיסמה שהקלדת" onkeyup="validate(1)">
                                            <span class="material-icons" id="visibil_register_confirm" onclick="changeType('pass_confirm','visibil_register_confirm')">visibility_off</span></a></li>
                                            <span class="material-icons" style="display: none;">visibility</span></a></li>
                                        </div>
                                    </div>
                            </div>
                            <div class="popupContent-connection__submit">
                                    <button type="button" class="btn-connection" id="btn-continued__register" disabled='disabled'>המשך</button>
                                    <div class="registerOrlogin">
                                        כבר רשום?
                                        <a class="toConnection aConnection" id="toConnection">להתחברות</a>
                                    </div>
                            </div>
                        </div>
                        <div class="popupContent-inner popupContent-register__part2">
                            <div class="popupContent-login__input__wrapper">
                                    <div class="popupContent-login__input__text">
                                        <label for="firstname">שם פרטי</label>
                                        <input type="text" id="firstname" name="firstname" placeholder="הקלד שם פרטי" onkeyup="validate(2)">
                                    </div>
                                    <div class="popupContent-login__input__text">
                                        <label for="lastname">שם משפחה</label>
                                        <input type="text" id="lastname" name="lastname" placeholder="6 תווים, אותיות באנגלית וספרה" onkeyup="validate(2)">
                                    </div>
                                    <div id="areaCode-contents" class="popupContent-login__input__text">
                                        <label for="phoneNumber">מספר טלפון</label>
                                        <div class="areaCode-content">
                                            <input type="text" id="phoneNumber" name="phoneNumber" placeholder="טלפון" onkeyup="validate(2)">
                                            <button class="areaCode-btn">
                                                <i style="color: black;">קידומת</i>
                                                <span class="material-icons">expand_more</span>
                                                <div class="croll-num__selects">
                                                    <div>050</div>
                                                    <div>051</div>
                                                    <div>052</div>
                                                    <div>053</div>
                                                    <div>054</div>
                                                    <div>055</div>
                                                    <div>058</div>
                                                    <div>נקה</div>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="popupContent-login__input__text" style="width: 70%;">
                                        <label for="dateOfBirth">תאריך לידה</label>
                                        <input type="date" id="dateOfBirth"  name="dateOfBirth" placeholder="בחר תאריך לידה" onblur="validate(2)">
                                    </div>
                                    <div class="popupContent-login__input__text">
                                        <div class="popupContent-register-content">
                                            <input type="checkbox" id="ApOfRe"  name="AOR" onchange="approvalOfRegulations(this)">
                                            <label for="AOR">קראתי ומאשר את <a href="">תקנון</a> האתר</label>
                                        </div>
                                        <div class="popupContent-register-content">
                                            <input type="checkbox" id="RM"  name="dateOfBirth">
                                            <label for="RM">מאשר קבלת דיוור פרסומי כללי מיד2</label>
                                        </div>
                                    </div>
                            </div>
                            <div class="popupContent-connection__submit">
                                <button class="btn-connection" id="btn-create__acount" disabled='disabled'>שלח</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
</section>
@yield('content')
</main>


</body>
</html>
