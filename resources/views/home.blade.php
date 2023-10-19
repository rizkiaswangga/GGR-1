<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="styleguide.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="navbar.css" />
</head>

<body>
    <div class="main-page">
        <div class="div">

            <div class="section">
                <div class="div-header-slider">
                    <div class="div-header-slider-2"></div>
                    <div class="div-card-container">
                        <div class="list" id="list-container">
                            <!-- List items will be dynamically generated here -->
                        </div>
                        <img class="SVG" id="slider_kiri1" src="img/svg-2.svg" />
                        <img class="img" id="slider_kanan1" src="img/svg-1.svg" />
                        @foreach ($mainbox as $main)
                        <div class="div-header-slider-3">
                            <div class="div-wrapper" id="slider_content">
                                <div class="text-wrapper-2">{{$main['itemText']}}</div>
                            </div>
                            <div class="div-divider-xsvco">
                                <div class="p-copy-text">
                                    <p class="would-you-like-easy" id="slider_paragraph">{{$main['itemDesc']}}</p>
                                </div>
                                <button class="button" id="fom1">
                                    <div class="text-wrapper-3">Find out more</div>
                                </button>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="div-fab-bar">
                <div class="button-2">
                    <img class="SVG-2" src="img/svg.svg" />
                    <div class="div-has-update"></div>
                </div>
                <img class="button-3" src="img/button.svg" />
            </div>

            <div class="section-2">
                <div class="div-application">
                    <div class="div-row">
                        @foreach ($mainbox as $main)
                        <div class="div-col-xs">
                            <div class="text-wrapper-4">{{$main['itemText']}}</div>
                            <div class="p-copytext">
                                <p class="docker-is-a-tool-for">{{$main['itemDesc']}}</p>
                            </div>
                        </div>
                        @endforeach
                        <div class="overlap-group">
                            <img class="picture-key" src="img/picture-key-automation-products-highres-en-1-fix696x391-webp.png" />
                        </div>
                    </div>
                    <div class="link" id="fom2">
                        <div class="text-wrapper-5">Find out more</div>
                    </div>
                </div>
                <div class="div-row-2">
                    <a href="/pic1" id="foto1" class="link-2">
                        <div class="picture-energy-wrapper">
                            <img class="picture-energy" src="img/picture-energy-saving-services-screen-fix496x661-webp-1.png" alt="Sustainability Image" />
                        </div>
                        <div class="text-wrapper-9">Sustainability</div>
                    </a>
                    <a href="/pic2" id="foto2" class="link-3">
                        <div class="picture-energy-wrapper">
                            <img class="picture-energy" src="img/picture-energy-saving-services-screen-fix496x661-webp-1.png" alt="Sustainability Image" />
                        </div>
                        <div class="text-wrapper-9">Sustainability</div>
                    </a>

                    <a href="/pic3" id="foto3" class="link-4">
                        <div class="picture-energy-wrapper">
                            <img class="picture-energy" src="img/picture-energy-saving-services-screen-fix496x661-webp.png" alt="Digitalisation Image" />
                        </div>
                        <div class="text-wrapper-10">Digitalisation</div>
                    </a>

                    <a href="/pic4" id="foto4" class="link-3">
                        <div class="picture-energy-wrapper">
                            <img class="picture-energy" src="img/picture-energy-saving-services-screen-fix496x661-webp-1.png" alt="Sustainability Image" />
                        </div>
                        <div class="text-wrapper-9">Sustainability</div>
                    </a>
                </div>
                <div class="div-row-3">
                    <div class="div-half-width">
                        <div class="text-wrapper-11"></div>
                        <a href="your_link_here.html">
                            <div class="div-image-text-wrapper" id="papso_btn">
                                <div class="div-image-text">
                                    <div class="div-image-text-2"></div>
                                    <div class="div-image-text-3">
                                        <div class="p-image-text-teaser">
                                            <div class="text-wrapper-12">PAPSO Brochure</div>
                                        </div>
                                        <div class="p-copytext-margin">
                                            <div class="p-copytext-3">
                                                <p class="text-wrapper-13">Automation systems from a single source</p>
                                            </div>
                                        </div>
                                        <div class="span-text-link">
                                            <div class="text-wrapper-14">Find out more</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="your_link_here.html" id="products_btn" class="link-5">
                            <div class="div-image-text">
                                <div class="div-image-text-4"></div>
                                <div class="div-image-text-3">
                                    <div class="p-image-text-teaser-2">
                                        <div class="text-wrapper-15">SP2020</div>
                                    </div>
                                    <div class="p-copytext-margin">
                                        <div class="p-copytext-4">
                                            <p class="text-wrapper-13">Products for everyday automation needs</p>
                                        </div>
                                    </div>
                                    <div class="span-text-link">
                                        <div class="text-wrapper-14">Find out more</div>
                                    </div>
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="div-half-width-2">
                        <div class="text-wrapper-16">Distributors</div>
                        <div class="link-3">
                            <div class="festo-official"></div>
                            <div class="div-half-width-image">
                                <div class="p-image-teaser-main">
                                    <div class="text-wrapper-12">Sales Partners</div>
                                </div>
                                <div class="p-copytext-5">
                                    <p class="text-wrapper-13">Close to you, close to Festo</p>
                                </div>
                                <button class="button-5">
                                    <div class="text-wrapper-17">Find your local Distributor</div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-wrapper-18">MARKETING</div>
            </div>
            <header class="header">
                <div class="nav">
                    <div class="div-navigation-aside">
                        <img class="link-logo-blue-svg" src="img/link-logo-blue-svg.png" />
                    </div>
                    <div class="div-jsx-main">
                        <div class="item-margin-wrapper">
                            <div class="item-wrapper">
                                <div class="list-wrapper">
                                    <div class="list-2">
                                        <div class="item-link">
                                            <div class="text-wrapper-19">Corporate</div>
                                            <!-- Submenu for Corporate -->
                                            <div class="submenu">
                                                <div class="subitem-link">
                                                    <div class="text-wrapper-19">Experience</div>
                                                    <!-- Grandchildren under "Experience" -->
                                                    <div class="grandmenu">
                                                        <div class="granditem-link" id="btn_highlight_akm">
                                                            <a class="text-wrapper-19" href="/highlight">Highlight
                                                                AKM</a>
                                                        </div>
                                                        <div class="granditem-link" id="btn_track_record">
                                                            <a class="text-wrapper-19" href="/trackRecord">Track
                                                                Record</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="subitem-link">
                                                    <div class="text-wrapper-19">About AKM</div>
                                                    <!-- Grandchildren under "About KKM" -->
                                                    <div class="grandmenu">
                                                        <div class="granditem-link" id="btn_company_profile">
                                                            <a class="text-wrapper-19" href="/compro">Company
                                                                Profile</a>
                                                        </div>
                                                        <div class="granditem-link" id="btn_contact">
                                                            <a class="text-wrapper-19" href="/contact">Contact</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-link">
                                <div class="text-wrapper-19">Education</div>
                                <!-- Submenu for Highlight AKM -->
                                <div class="submenu">
                                    <div class="subitem-link">
                                        <div class="text-wrapper-19">Training</div>
                                        <!-- Grandchildren under "Highlight AKM" -->
                                        <div class="grandmenu">
                                            <div class="granditem-link" id="btn_training_center">
                                                <a class="text-wrapper-19" href="/training">Training Center</a>
                                            </div>
                                            <div class="granditem-link" id="btn_onsite_training">
                                                <a class="text-wrapper-19" href="/training#">Onsite Training</a>
                                            </div>
                                            <div class="granditem-link" id="btn_online_training">
                                                <a class="text-wrapper-19" href="/training#">Online Training</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="subitem-link">
                                        <div class="text-wrapper-19">Competition</div>
                                        <!-- Grandchildren under "Track Record" -->
                                        <div class="grandmenu">
                                            <div class="granditem-link" id="">
                                                <a class="text-wrapper-19" href="/competition">Foto dan Penjelasan
                                                    Singkat</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="subitem-link">
                                        <div class="text-wrapper-19">WORKSHOP & SEMINAR</div>
                                        <!-- Grandchildren under "Track Record" -->
                                        <div class="grandmenu">
                                            <div class="granditem-link" id="">
                                                <a class="text-wrapper-19" href="/worksem">Foto dan Penjelasan
                                                    Singkat</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="subitem-link">
                                        <div class="text-wrapper-19">PRODUCTS</div>
                                        <!-- Grandchildren under "PRODUCTS" -->
                                        <div class="grandmenu">
                                            <div class="granditem-link">
                                                <div class="text-wrapper-19">ROBOT</div>
                                                <!-- Great-grandchildren under "ROBOT" -->
                                                <div class="greatgrandmenu">
                                                    <div class="granditem-link" id="btn_katalog_1">
                                                        <a class="text-wrapper-19" href="/robot">Katalog</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="granditem-link">
                                                <div class="text-wrapper-19">AGV</div>
                                                <div class="greatgrandmenu">
                                                    <div class="granditem-link" id="btn_katalog_2">
                                                        <a class="text-wrapper-19" href="/agv">Katalog</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="granditem-link">
                                                <div class="text-wrapper-19">PLC TRAINER</div>
                                                <div class="greatgrandmenu">
                                                    <div class="granditem-link" id="btn_katalog_3">
                                                        <a class="text-wrapper-19" href="/plc">Katalog</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="granditem-link">
                                                <div class="text-wrapper-19">MECLAB NON PLC</div>
                                                <div class="greatgrandmenu">
                                                    <div class="granditem-link" id="btn_katalog_4">
                                                        <a class="text-wrapper-19" href="/nplc">Katalog</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="item-link">
                                <div class="text-wrapper-19">Industrial</div>
                                <div class="submenu">
                                    <div class="subitem-link">
                                        <div class="text-wrapper-19" id="btn_si">SI</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="text-wrapper-20">NEWS</div>

            <div class="overlap-2">
                <div class="section-3">
                    <br>
                    <div class="div-slider-cupfd">
                        <div class="div-slick-slider">
                            <div class="div-slick-list">
                                <div class="div-slick-track">
                                    <div class="link-18">
                                        <div class="div-card-image"><img class="d" src="img/d15000100116717-264x198-jpg.png" /></div>
                                        <div class="p-card-name-azoxw">
                                            <div class="text-wrapper-26">Actuators</div>
                                        </div>
                                    </div>
                                    <div class="link-18">
                                        <div class="div-card-image"><img class="d" src="img/d15000100155226-264x198-jpg.png" /></div>
                                        <div class="motors-and-servo-wrapper">
                                            <div class="motors-and-servo">Motors and servo<br />drives</div>
                                        </div>
                                    </div>
                                    <div class="link-18">
                                        <div class="div-card-image"><img class="d" src="img/d15000100144958-264x198-jpg.png" /></div>
                                        <div class="p-card-name-azoxw-2">
                                            <div class="text-wrapper-26">Industrial robots</div>
                                        </div>
                                    </div>
                                    <div class="link-18">
                                        <div class="div-card-image"><img class="d" src="img/d15000100115633-264x198-jpg.png" /></div>
                                        <div class="p-card-name-azoxw-3">
                                            <div class="text-wrapper-27">Sensors</div>
                                        </div>
                                    </div>
                                    <img class="button-SVG" id="slider_kiri2" src="img/button-svg-1.svg" />
                                    <img class="button-SVG-2" id="slider_kanan2" src="img/button-svg.svg" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-wrapper-28">CATEGORY</div>

            </div>
        </div>
    </div>
    <script src="slider1.js"></script>
    <script src="slider2.js"></script>
    <script src="custom.js"></script>
    <script src="navbar.js"></script>
</body>

</html>