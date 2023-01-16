<?php 
$firstName = isset($_POST["firstName"]) ? $_POST["firstName"] : "";
$lastName = isset($_POST["lastName"]) ? $_POST["lastName"] : "";
$email = isset($_POST["email"]) ? $_POST["email"] : "";
$phone = isset($_POST["phone"]) ? $_POST["phone"] : "";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = htmlentities($data, ENT_QUOTES);
}

if (($_SERVER["REQUEST_METHOD"] == "POST") || (!empty($firstName))) {
    test_input($firstName);
    test_input($lastName);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SwissGap</title>
    <link rel="icon" href="logo.svg">

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/browse/normalize.css@8.0.1/normalize.css">

    <!-- <link rel="stylesheet" href="./css/styles.css"> -->
    <link rel="stylesheet" href="./css/app.2973cecf.css">
    <link rel="stylesheet" href="./css/styles.css">

</head>
<body>

    <header class="header">
        <div class="header_inner">
            <nav class="nav">
                <div class="nav_list">
                    <div class="nav_content">
                        <div class="nav_logo">
                            <a href="/">
                                <div class="nav_logo_img">
                                    <img class="nav_logo_image" src="./assets/img/logo.svg" alt="Logo App">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="nav_content">
                        <div class="nav_controls">
                            <div class="nav_control">
                                <a class="nav_control_link" href="mailto:rostranespinoza@gmail.com">
                                    <i>
                                        <svg class="nav_control_icon" viewBox="0 0 17 13" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.5059 0H1.49414C0.671301 0 0 0.6732 0 1.5V11.5C0 12.324 0.668312 13 1.49414 13H15.5059C16.3266 13 17 12.3291 17 11.5V1.5C17 0.676 16.3317 0 15.5059 0ZM15.2995 1L8.53168 7.79443L1.70528 1H15.2995ZM0.996094 11.2929V1.7023L5.79325 6.47697L0.996094 11.2929ZM1.70043 12L6.50061 7.181L8.18258 8.85507C8.37728 9.04887 8.69148 9.04823 8.88539 8.85353L10.5254 7.2071L15.2996 12H1.70043ZM16.0039 11.2929L11.2297 6.5L16.0039 1.70707V11.2929Z" />
                                        </svg>
                                    </i>
                                    <span class="suntitle">SUPPORT@SWISSGAP.COM</span>
                                </a>
                            </div>
                            <div class="nav_control">
                                <a class="nav_control_link" href="/">
                                    <img class="nav_control_icon" src="./assets/img/united.png" alt="Flag">
                                    <span class="suntitle">Country</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <main class="main">
        <section class="section">
            <article class="article">
                <div class="container">
                    <div class="section_inner">
                        <div class="section_success">
                            <div class="section_succe">
                                <h1 class="section_succe_title">THANK YOU!</h1>
                                <h3 class="section_succe_subtitle">Dear <?= $firstName . " " . $lastName?>, your account has been activated.</h3>
                                <p class="section_succe_text">Please wait and your representative <br> will contact you asap.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </section>
    </main>


    <footer class="footer">
        <div class="footer_inner">
            <nav class="footer_nav">
                <div class="footer_nav_list">
                    <div class="footer_nav_head">
                        <div class="footer_nav_items">
                            <div class="footer_nav_item">
                                <span>
                                    <i>
                                        <svg class="footer_nav_icon" viewBox="0 0 28 28" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M27.8372 27.3753L24.4936 18.6096C24.4639 18.532 24.4114 18.4653 24.343 18.4181C24.2746 18.371 24.1935 18.3458 24.1104 18.3457H17.7823C17.8209 18.2827 17.8594 18.2215 17.898 18.1582C20.333 14.127 21.5583 10.6006 21.5407 7.6784C21.541 5.66043 20.7397 3.72498 19.313 2.29782C17.8864 0.870663 15.9512 0.0687014 13.9332 0.0683595C11.9153 0.0680176 9.97981 0.869323 8.55265 2.296C7.12549 3.72267 6.32353 5.65785 6.32319 7.67582C6.30561 10.6006 7.53092 14.1275 9.96584 18.1582C10.0045 18.2222 10.043 18.2834 10.0816 18.3457H3.7535C3.67042 18.3458 3.58931 18.371 3.52089 18.4181C3.45246 18.4653 3.39995 18.532 3.3703 18.6096L0.0271732 27.3753C0.00335231 27.4374 -0.00498914 27.5043 0.00286957 27.5704C0.0107283 27.6364 0.0345508 27.6996 0.0722788 27.7544C0.110007 27.8092 0.160506 27.8539 0.219412 27.8848C0.278318 27.9157 0.343861 27.9318 0.410376 27.9317H27.454C27.5205 27.9318 27.586 27.9157 27.6449 27.8848C27.7038 27.8539 27.7543 27.8092 27.7921 27.7544C27.8298 27.6996 27.8536 27.6364 27.8615 27.5704C27.8693 27.5043 27.861 27.4374 27.8372 27.3753ZM7.14373 7.67652C7.14389 6.78505 7.31963 5.90234 7.66092 5.07879C8.00222 4.25524 8.50238 3.50697 9.13285 2.87672C9.76332 2.24646 10.5118 1.74656 11.3354 1.40555C12.1591 1.06454 13.0419 0.889104 13.9333 0.889258C14.8248 0.889412 15.7075 1.06515 16.5311 1.40645C17.3546 1.74774 18.1029 2.2479 18.7332 2.87837C19.3634 3.50885 19.8633 4.25729 20.2043 5.08096C20.5453 5.90463 20.7208 6.7874 20.7206 7.67887C20.7558 13.505 15.3089 20.6907 13.9322 22.4138C12.5555 20.6914 7.10834 13.5075 7.14373 7.67652ZM13.6198 23.3279C13.6583 23.3731 13.7061 23.4095 13.7601 23.4344C13.814 23.4593 13.8727 23.4723 13.9322 23.4723C13.9916 23.4723 14.0503 23.4593 14.1043 23.4344C14.1582 23.4095 14.2061 23.3731 14.2446 23.3279C15.3336 22.0013 16.3432 20.6114 17.268 19.1656H23.8275L24.3525 20.5425L11.5343 25.1014L6.96538 19.1649H10.5958C11.5208 20.611 12.5306 22.001 13.6198 23.3279ZM11.52 25.9763H11.5223L19.1693 23.2575L22.1353 27.1114H8.33061L11.52 25.9763ZM4.03639 19.1649H5.93014L10.7212 25.3904L5.88303 27.1111H1.00569L4.03639 19.1649ZM23.1715 27.1114L19.9819 22.9671L24.6459 21.3085L26.8591 27.1114H23.1715Z"></path>
                                        </svg>
                                    </i>
                                </span>
                                <div class="footer_nav_links">
                                    <h3 class="footer_nav_h3">LEGAL ADDRESS:</h3>
                                    <p class="footer_nav_p"> Rue du Marché 7, 1204 Genève, Switzerland</p>
                                </div>
                            </div>
                            <div class="footer_nav_item">
                                <span>
                                    <i>
                                        <svg class="footer_nav_icon" viewBox="0 0 27 31" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M25.952 10.0998C26.109 9.60742 26.0751 9.08418 25.8524 8.61227C25.2971 7.43547 24.5708 6.33924 23.6938 5.35404C23.5324 5.17275 23.2546 5.1567 23.0733 5.31807C22.892 5.47943 22.8759 5.75717 23.0373 5.93852C23.8584 6.86084 24.5382 7.8867 25.0576 8.98744C25.1953 9.27918 25.2066 9.60549 25.0893 9.90631C24.7209 10.8514 23.3896 10.9085 22.9495 9.98465C22.211 8.43438 21.1001 7.0709 19.7368 6.04141C17.8825 4.64125 15.674 3.90109 13.3501 3.90109C11.0678 3.90109 8.89137 4.61729 7.05609 5.97221C5.6775 6.98998 4.59615 8.27424 3.84205 9.78924C3.39094 10.6956 2.0652 10.6337 1.7066 9.67791C1.59316 9.37563 1.60928 9.0509 1.75189 8.7635C2.36988 7.51791 3.19312 6.37645 4.19877 5.37086C6.64312 2.92627 9.89309 1.58008 13.3501 1.58008C16.4134 1.58008 19.27 2.6098 21.6111 4.55793C21.7976 4.7132 22.0747 4.68783 22.2299 4.50127C22.3852 4.31465 22.3598 4.03762 22.1732 3.8824C19.6724 1.80121 16.6213 0.701172 13.3501 0.701172C9.65836 0.701172 6.18762 2.13877 3.57727 4.74918C2.50406 5.82238 1.62498 7.04154 0.96457 8.37279C0.734062 8.83738 0.690996 9.35641 0.838184 9.8493C0.28248 11.339 0 12.91 0 14.5219V20.7087C0 22.8077 1.70766 24.5154 3.8066 24.5154H5.76228C6.90832 24.5154 7.84066 23.583 7.84066 22.4369V15.6708C7.84066 14.5247 6.90832 13.5924 5.76228 13.5924H3.8066C3.5915 13.5924 3.38086 13.6112 3.17537 13.6457C3.25014 12.7702 3.43699 11.912 3.7333 11.0854C4.10912 10.8925 4.4284 10.5835 4.62885 10.1808C5.32031 8.79162 6.3126 7.61354 7.57805 6.67926C9.26115 5.43672 11.257 4.77994 13.3501 4.77994C15.4813 4.77994 17.5067 5.45869 19.2071 6.74277C20.4582 7.68754 21.4779 8.93922 22.1559 10.3625C22.3502 10.7702 22.6637 11.0851 23.0358 11.2843C23.2923 12.0493 23.4561 12.8407 23.525 13.6457C23.3194 13.6112 23.1087 13.5923 22.8935 13.5923H20.9378C19.7918 13.5923 18.8595 14.5247 18.8595 15.6707V22.4369C18.8595 23.583 19.7918 24.5153 20.9378 24.5153H22.8935C23.2078 24.5153 23.513 24.4763 23.8054 24.4041C23.0664 26.2005 21.2875 27.4335 19.2956 27.4335H18.8856C18.5155 26.9642 17.9425 26.6621 17.2998 26.6621H14.326C13.2125 26.6621 12.3065 27.568 12.3065 28.6816C12.3065 29.7952 13.2125 30.7012 14.326 30.7012H17.2998C17.9264 30.7012 18.4873 30.4143 18.8579 29.9651H19.2956C23.3785 29.9651 26.7001 26.6434 26.7001 22.5606V20.7088C26.7001 20.1015 26.7001 15.1667 26.7001 14.522C26.7001 13.0027 26.448 11.516 25.952 10.0998ZM4.64766 14.4713V19.9245C4.64766 20.1672 4.84441 20.3639 5.08711 20.3639C5.3298 20.3639 5.52656 20.1672 5.52656 19.9245V14.4713H5.76223C6.42363 14.4713 6.9617 15.0095 6.9617 15.6708V22.437C6.9617 23.0984 6.42357 23.6365 5.76223 23.6365H5.52656V21.979C5.52656 21.7363 5.3298 21.5396 5.08711 21.5396C4.84441 21.5396 4.64766 21.7363 4.64766 21.979V23.6365H3.8066C2.19229 23.6365 0.878906 22.3231 0.878906 20.7088V17.3992C0.878906 15.7848 2.19229 14.4714 3.8066 14.4714H4.64766V14.4713ZM0.878906 14.9692V14.5219C0.878906 13.2448 1.06822 11.9956 1.44182 10.7973C1.81471 11.129 2.27139 11.2988 2.73299 11.3125C2.47693 12.1572 2.32377 13.0289 2.27572 13.915C1.73191 14.1548 1.2542 14.5178 0.878906 14.9692ZM19.7384 22.4369V15.6708C19.7384 15.0094 20.2765 14.4713 20.9378 14.4713H21.1735V23.6364H20.9378C20.2764 23.6365 19.7384 23.0983 19.7384 22.4369ZM22.0525 23.6365V14.4713H22.8935C24.5079 14.4713 25.8213 15.7847 25.8213 17.3991V20.7087C25.8213 22.3231 24.5079 23.6365 22.8935 23.6365H22.0525ZM17.2998 29.8223H14.326C13.6971 29.8223 13.1854 29.3106 13.1854 28.6817C13.1854 28.0527 13.6971 27.5411 14.326 27.5411H17.2998C17.9287 27.5411 18.4404 28.0527 18.4404 28.6817C18.4404 29.3106 17.9287 29.8223 17.2998 29.8223ZM19.2956 29.0862H19.2786C19.3305 28.8319 19.333 28.5718 19.2849 28.3125H19.2957C21.9246 28.3125 24.2391 26.4926 24.8746 23.958C25.221 23.746 25.5304 23.4798 25.7924 23.1719C25.4831 26.4845 22.6877 29.0862 19.2956 29.0862ZM24.4244 13.9149C24.3804 13.1044 24.2481 12.3048 24.0296 11.5271C24.512 11.521 24.9724 11.3437 25.3305 11.0392C25.6563 12.1645 25.8212 13.3324 25.8212 14.5219V14.9692C25.4459 14.5178 24.9682 14.1548 24.4244 13.9149Z"></path>
                                        </svg>
                                    </i>
                                </span>
                                <div class="footer_nav_links">
                                    <h3 class="footer_nav_h3">SUPPORT SERVICE:</h3>
                                    <p class="footer_nav_p"> SUPPORT@SWISSGAP.COM</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="footer_nav_item">
                                <span>
                                    <i>
                                        <svg class="footer_nav_icon" viewBox="0 0 30 31" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.31483 21.1905C8.25966 21.1905 8.20506 21.1793 8.15438 21.1575C8.1037 21.1356 8.05801 21.1037 8.0201 21.0636C7.74078 20.7677 7.46997 20.4681 7.20726 20.1685C7.14344 20.0869 7.11324 19.9841 7.12284 19.881C7.13244 19.7779 7.18113 19.6824 7.25891 19.614C7.33669 19.5457 7.43767 19.5097 7.54114 19.5134C7.64461 19.5172 7.74273 19.5604 7.81537 19.6341C8.07159 19.926 8.33591 20.2187 8.60794 20.507C8.66223 20.5646 8.69848 20.6368 8.71222 20.7147C8.72595 20.7927 8.71658 20.8729 8.68524 20.9456C8.6539 21.0183 8.60197 21.0802 8.53586 21.1237C8.46976 21.1672 8.39236 21.1905 8.31321 21.1905H8.31483Z"></path>
                                            <path d="M23.0676 29.8901C20.4394 29.8901 16.8511 28.354 13.2227 25.6738C13.1742 25.6448 13.1323 25.6059 13.0996 25.5597C13.067 25.5134 13.0445 25.4609 13.0334 25.4054C13.0223 25.3499 13.0229 25.2927 13.0353 25.2375C13.0476 25.1823 13.0714 25.1303 13.105 25.0848C13.1387 25.0393 13.1815 25.0014 13.2307 24.9735C13.2799 24.9455 13.3344 24.9282 13.3907 24.9226C13.447 24.9169 13.5038 24.9232 13.5576 24.9409C13.6113 24.9585 13.6608 24.9873 13.7027 25.0252C17.1961 27.6011 20.6092 29.0792 23.0676 29.0792C23.5235 29.1094 23.9808 29.0479 24.4125 28.8985C24.8442 28.749 25.2415 28.5145 25.5811 28.2088L28.2933 25.4967C28.3478 25.442 28.3785 25.368 28.3785 25.2907C28.3785 25.2135 28.3478 25.1394 28.2933 25.0848L22.869 19.6605C22.8134 19.6077 22.7397 19.5783 22.663 19.5783C22.5864 19.5783 22.5127 19.6077 22.4571 19.6605L20.4827 21.6348C19.0569 23.0606 15.431 21.6721 12.2275 18.4726C9.02396 15.2732 7.63869 11.6428 9.06531 10.2169L11.0396 8.24262C11.0939 8.18782 11.1243 8.11381 11.1243 8.03668C11.1243 7.95955 11.0939 7.88554 11.0396 7.83073L5.61612 2.40641C5.56147 2.35184 5.4874 2.3212 5.41017 2.3212C5.33295 2.3212 5.25888 2.35184 5.20423 2.40641L2.49206 5.11979C0.527875 7.08397 1.97801 12.158 6.01909 17.4587C6.05138 17.5011 6.07501 17.5494 6.08864 17.6008C6.10226 17.6523 6.10561 17.706 6.0985 17.7588C6.09138 17.8115 6.07394 17.8624 6.04717 17.9084C6.0204 17.9545 5.98482 17.9948 5.94247 18.0271C5.90012 18.0594 5.85182 18.083 5.80034 18.0966C5.74885 18.1103 5.69519 18.1136 5.64241 18.1065C5.58963 18.0994 5.53877 18.0819 5.49273 18.0552C5.4467 18.0284 5.40638 17.9928 5.37409 17.9505C1.01355 12.2269 -0.376585 6.84033 1.91882 4.54533L4.63098 1.83316C4.83789 1.62699 5.11808 1.51123 5.41017 1.51123C5.70226 1.51123 5.98245 1.62699 6.18936 1.83316L11.6137 7.25749C11.8201 7.46429 11.936 7.74452 11.936 8.03668C11.936 8.32884 11.8201 8.60906 11.6137 8.81587L9.63936 10.7902C8.70693 11.7226 9.7772 14.871 12.8015 17.8994C15.8258 20.9278 18.9779 21.994 19.9103 21.0615L21.8846 19.0872C22.0946 18.8869 22.3736 18.7751 22.6638 18.7751C22.954 18.7751 23.2331 18.8869 23.443 19.0872L28.8673 24.5115C29.0737 24.7183 29.1896 24.9986 29.1896 25.2907C29.1896 25.5829 29.0737 25.8631 28.8673 26.0699L26.1552 28.7821C25.7415 29.1649 25.2548 29.4603 24.7243 29.6507C24.1938 29.8411 23.6303 29.9225 23.0676 29.8901Z"></path>
                                            <path d="M11.2297 23.9756C11.1334 23.9757 11.0402 23.9414 10.967 23.8787C10.6629 23.62 10.3633 23.3492 10.0638 23.0743C10.0245 23.0384 9.99275 22.995 9.97028 22.9467C9.9478 22.8985 9.93505 22.8462 9.93275 22.793C9.93045 22.7398 9.93866 22.6867 9.95689 22.6367C9.97513 22.5867 10.003 22.5407 10.039 22.5015C10.075 22.4623 10.1184 22.4305 10.1666 22.408C10.2149 22.3855 10.2671 22.3728 10.3203 22.3705C10.3735 22.3682 10.4266 22.3764 10.4767 22.3946C10.5267 22.4129 10.5726 22.4408 10.6119 22.4768C10.9042 22.7451 11.1965 23.0091 11.4928 23.2616C11.5559 23.3154 11.601 23.3873 11.622 23.4675C11.643 23.5478 11.6389 23.6325 11.6102 23.7103C11.5815 23.7882 11.5297 23.8553 11.4616 23.9027C11.3936 23.9502 11.3126 23.9756 11.2297 23.9756Z"></path>
                                            <path d="M9.35345 10.9075C9.24594 10.9075 9.14284 10.8648 9.06683 10.7888L2.65819 4.38011C2.61947 4.34272 2.58858 4.29798 2.56734 4.24852C2.54609 4.19906 2.53491 4.14586 2.53444 4.09203C2.53397 4.0382 2.54423 3.98482 2.56461 3.935C2.585 3.88517 2.6151 3.83991 2.65316 3.80185C2.69123 3.76378 2.73649 3.73368 2.78632 3.71329C2.83614 3.69291 2.88952 3.68265 2.94335 3.68312C2.99718 3.68359 3.05038 3.69477 3.09984 3.71602C3.1493 3.73727 3.19403 3.76815 3.23143 3.80687L9.64007 10.2155C9.69675 10.2722 9.73535 10.3444 9.75099 10.4231C9.76662 10.5017 9.75859 10.5832 9.72792 10.6573C9.69724 10.7313 9.64529 10.7946 9.57864 10.8392C9.51199 10.8837 9.43362 10.9075 9.35345 10.9075Z"></path>
                                            <path d="M26.6077 28.1618C26.5001 28.1617 26.397 28.119 26.321 28.043L19.9124 21.6343C19.8385 21.5579 19.7977 21.4554 19.7986 21.3491C19.7995 21.2429 19.8422 21.1412 19.9173 21.066C19.9925 20.9908 20.0942 20.9482 20.2005 20.9473C20.3068 20.9464 20.4092 20.9872 20.4856 21.0611L26.8943 27.4697C26.9509 27.5264 26.9895 27.5987 27.0052 27.6773C27.0208 27.7559 27.0128 27.8374 26.9821 27.9115C26.9514 27.9855 26.8995 28.0489 26.8328 28.0934C26.7662 28.138 26.6878 28.1617 26.6077 28.1618Z"></path>
                                            <path d="M27.1623 15.296C27.0548 15.296 26.9516 15.2532 26.8756 15.1772C26.7996 15.1012 26.7569 14.9981 26.7569 14.8905C26.7537 11.9885 25.5994 9.20621 23.5473 7.15415C21.4953 5.10208 18.713 3.94782 15.8109 3.9446C15.7034 3.9446 15.6003 3.90189 15.5243 3.82586C15.4482 3.74983 15.4055 3.64671 15.4055 3.53919C15.4055 3.43167 15.4482 3.32856 15.5243 3.25253C15.6003 3.1765 15.7034 3.13379 15.8109 3.13379C18.928 3.13722 21.9163 4.37698 24.1204 6.58106C26.3245 8.78513 27.5642 11.7735 27.5677 14.8905C27.5677 14.9981 27.525 15.1012 27.4489 15.1772C27.3729 15.2532 27.2698 15.296 27.1623 15.296Z"></path>
                                            <path d="M24.0188 15.2955C23.9113 15.2955 23.8081 15.2528 23.7321 15.1768C23.6561 15.1007 23.6134 14.9976 23.6134 14.8901C23.611 12.8215 22.7882 10.8383 21.3255 9.37555C19.8627 7.91282 17.8795 7.09003 15.8109 7.08767C15.7034 7.08767 15.6003 7.04495 15.5243 6.96893C15.4482 6.8929 15.4055 6.78978 15.4055 6.68226C15.4055 6.57474 15.4482 6.47162 15.5243 6.3956C15.6003 6.31957 15.7034 6.27686 15.8109 6.27686C18.0945 6.27943 20.2838 7.18772 21.8986 8.80246C23.5133 10.4172 24.4216 12.6065 24.4242 14.8901C24.4242 14.9976 24.3815 15.1007 24.3054 15.1768C24.2294 15.2528 24.1263 15.2955 24.0188 15.2955Z"></path>
                                            <path d="M20.8752 15.296C20.7677 15.296 20.6646 15.2533 20.5886 15.1773C20.5126 15.1013 20.4698 14.9981 20.4698 14.8906C20.469 13.6553 19.9779 12.4708 19.1043 11.5972C18.2308 10.7237 17.0463 10.2326 15.8109 10.2317C15.7034 10.2317 15.6003 10.189 15.5243 10.113C15.4482 10.0369 15.4055 9.93382 15.4055 9.8263C15.4055 9.71878 15.4482 9.61567 15.5243 9.53964C15.6003 9.46361 15.7034 9.4209 15.8109 9.4209C17.2611 9.42262 18.6513 9.99944 19.6767 11.0248C20.7021 12.0502 21.2789 13.4405 21.2807 14.8906C21.2807 14.9981 21.2379 15.1013 21.1619 15.1773C21.0859 15.2533 20.9828 15.296 20.8752 15.296Z"></path>
                                        </svg>
                                    </i>
                                </span>
                                <div class="footer_nav_links">
                                    <h3 class="footer_nav_h3">Phone number:</h3>
                                    <p class="footer_nav_p">+46843737067</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="footer_nav_body_items">
                                <div class="footer_nav_bb">
                                    <div class="nav_logo">
                                        <a aria-current="page" href="/" class="router-link-active router-link-exact-active nav_logo_item">
                                        <div class="nav_logo_img">
                                            <img class="nav_logo_image" src="./assets/img/logo.svg" alt="Logo App">
                                        </div>
                                        </a>
                                    </div>
                                </div>
                            <div class="footer_nav_aa">
                                <a href="/">Privacy policy</a>
                                <a href="/">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                    <div class="footer_nav_foot">
                        <div>
                            <a href="/">Privacy policy</a>
                            <a href="/">Terms &amp; Conditions</a>
                            <a href="/">Copyright © 2021 SwissGap. All rights reserved.</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </footer>
    
</body>
</html>