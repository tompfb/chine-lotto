<?php
include 'script-login.php';
include "./conn/connect.php";
@$key_search = $_GET["s"];
if ($key_search) {
    $sql = "SELECT * FROM articles WHERE topic_name LIKE '%" . $key_search . "%' ";
    $q = mysqli_query($conn, $sql) or die("Error in query: $sql " . mysqli_error($conn));
} else {
    $sql = "SELECT * FROM articles ORDER BY id DESC LIMIT 0,6 ";
    $q = mysqli_query($conn, $sql) or die("Error in query: $sql " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="th">

<head>
    <title>หวยหุ้นจีน จ่ายสูงสุดบาทละ 1,000 บาท ฝาก-ถอนรวดเร็ว ตลอด 24 ชั่วโมง</title>
    <meta name="title" content="หวยหุ้นจีน จ่ายสูงสุดบาทละ 1,000 บาท ฝาก-ถอนรวดเร็ว ตลอด 24 ชั่วโมง" />
    <meta name="description" content="หวยหุ้นจีน เปิดให้บริการบนหวยหุ้นจีนออนไลน์ จ่ายสูงสุดบาทละ 1,000 บาท บริการแทงหวยไม่มีขั้นต่ำ ฝาก-ถอนรวดเร็วโอนไว ถอนได้ไม่มีอั้นตลอด 24 ชั่วโมง" />

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="content-language" content="th" />
    <meta http-equiv="content-type" content="text/html;" charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="robots" content="index,follow" />
    <meta name="Author" content="หวยหุ้นจีน ">
    <meta name="googlebots" content="all">
    <meta name="audience" content="all">
    <meta name="Rating" content="General">
    <meta name="distribution" content="Global">
    <meta name="allow-search" content="yes">

    <meta property="og:locale" content="th_TH" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="หวยหุ้นจีน จ่ายสูงสุดบาทละ 1,000 บาท ฝาก-ถอนรวดเร็ว ตลอด 24 ชั่วโมง" />
    <meta property="og:description" content="หวยหุ้นจีน เปิดให้บริการบนหวยหุ้นจีนออนไลน์ จ่ายสูงสุดบาทละ 1,000 บาท บริการแทงหวยไม่มีขั้นต่ำ ฝาก-ถอนรวดเร็วโอนไว ถอนได้ไม่มีอั้นตลอด 24 ชั่วโมง" />
    <meta property="og:url" content="https://www.xn--82c8azatt7d.net/" />
    <meta property="og:site_name" content="หวยหุ้นจีน " />
    <meta property="og:image" content="./img/logo-lotto-chinese.webp" />

    <meta property="twitter:url" content="https://www.xn--82c8azatt7d.net/">
    <meta property="twitter:image" content="./img/logo-lotto-chinese.webp">
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="หวยหุ้นจีน จ่ายสูงสุดบาทละ 1,000 บาท ฝาก-ถอนรวดเร็ว ตลอด 24 ชั่วโมง" />
    <meta name="twitter:description" content="หวยหุ้นจีน เปิดให้บริการบนหวยหุ้นจีนออนไลน์ จ่ายสูงสุดบาทละ 1,000 บาท บริการแทงหวยไม่มีขั้นต่ำ ฝาก-ถอนรวดเร็วโอนไว ถอนได้ไม่มีอั้นตลอด 24 ชั่วโมง" />
    <meta name="twitter:site" content="หวยหุ้นจีน ">
    <meta name="twitter:creator" content="หวยหุ้นจีน ">

    <link rel="canonical" href="https://www.xn--82c8azatt7d.net/" />
    <link rel="alternate" href="https://www.xn--82c8azatt7d.net/" hreflang="th-TH" />

    <link rel="shortcut icon" href="./favicon.webp" type="image/x-icon" />
    <link rel="icon" href="./favicon.webp" type="image/x-icon" />
    <link rel="apple-touch-icon" href="./favicon.webp" />

    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-KJD33H7ZXZ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-KJD33H7ZXZ');
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "url": "https://www.xn--82c8azatt7d.net/",
            "logo": "https://www.xn--82c8azatt7d.net/img/logo-lotto-chinese.webp"
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "WebPage",
            "name": "หวยหุ้นจีน ",
            "speakable": {
                "@type": "SpeakableSpecification",
                "xPath": [
                    "/html/head/title",
                    "/html/head/meta[@name='description']/@content"
                ]
            },
            "url": "https://www.xn--82c8azatt7d.net/"
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "WebSite",
            "url": "https://www.xn--82c8azatt7d.net/",
            "name": "หวยหุ้นจีน ",
            "description": "หวยหุ้นจีน ฝาก-ถอนรวดเร็ว ตลอด 24 ชั่วโมง",
            "potentialAction": [{
                "@type": "SearchAction",
                "target": {
                    "@type": "EntryPoint",
                    "urlTemplate": "https://www.xn--82c8azatt7d.net/?s={search_term_string}"
                },
                "query-input": "required name=search_term_string"
            }]
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": [{
                "@type": "ListItem",
                "position": 1,
                "name": "หวยหุ้นจีน "
            }]
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Store",
            "image": [
                "https://www.xn--82c8azatt7d.net/img/logo-lotto-chinese.webp",
                "https://www.xn--82c8azatt7d.net/img/banner.webp",
                "https://www.xn--82c8azatt7d.net/img/img-lotto-chinese-01.webp"
            ],
            "name": "หวยหุ้นจีน ",
            "address": {
                "@type": "PostalAddress",
                "addressCountry": "TH"
            },
            "url": "https://www.xn--82c8azatt7d.net/",
            "priceRange": "฿฿฿",
            "telephone": "+6696-921-9245",
            "openingHoursSpecification": [{
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": [
                        "Monday",
                        "Tuesday",
                        "Wednesday",
                        "Thursday",
                        "Friday",
                        "Saturday"
                    ],
                    "opens": "08:00",
                    "closes": "23:59"
                },
                {
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": "Sunday",
                    "opens": "08:00",
                    "closes": "23:00"
                }
            ]

        }
    </script>
    <style>
        <?php
        include('bootstrap/bootstrap.css');
        include('css/style.css');
        ?>
    </style>

</head>

<body>
    <header class="main-header">
        <div class="container">
            <div class="row header">
                <div class="col-lg-6 col-md-12 my-1 logo">
                    <a href="./">
                        <img data-src="./img/logo-lotto-chinese.webp" class="lazy img-fluid zoom" width="317" height="524" alt="logo หวยหุ้นจีน">
                    </a>
                    <span id="openav" onclick="openNav()" class="a_click">&#9776;</span>
                </div>
                <div class="col-lg-6 col-md-12 my-1 card_btn">
                    <div class="block-span">
                        <span>ไทย | ENG</span>
                    </div>
                    <div class="block-a">
                        <a href="">เข้าสู่ระบบ</a>
                        <a href="">สมัครสมาชิก</a>
                        <a href=""><img data-src="./img/icon/icon-line.png" class="lazy img-fluid" width="20" height="20" alt="icon line"> ไลน์</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="mySidenav" class="sidenav-slide">
            <span class="closebtn" onclick="closeNav()">&times;</span>
            <div class="sidenav">
                <img data-src="./img/logo-lotto-chinese.webp" class="lazy img-fluid " width="217" height="524" alt="logo หวยหุ้นจีน">
                <a href="./">หวยหุ้นจีน</a>
                <a href="./register/">สมัครหวยหุ้นจีน</a>
                <a href="./entrance/">ทางเข้าหวยหุ้นจีน</a>
                <a href="./contact/">ติดต่อสอบถาม</a>
            </div>
        </div>
    </header>
    <nav class="nav-link position-relative">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-9">
                    <ul class="list-nav">
                        <li><a href="./">หวยหุ้นจีน</a></li>
                        <li><a href="./register/">สมัครหวยหุ้นจีน</a></li>
                        <li><a href="./entrance/">ทางเข้าหวยหุ้นจีน</a></li>
                        <li><a href="./contact/">ติดต่อสอบถาม</a></li>
                    </ul>
                </div>
                <div class="col-md-12 col-lg-3">
                    <form action="./?s=s" method="GET" class="search-box">
                        <button type="submit" class="btn-search"><img data-src="./img/icon/icon-search.png" class="lazy img-fluid" width="25" height="25" alt="icon search"></button>
                        <input type="text" class="input-search" name="s" placeholder="กรอกคำค้นหา..." required>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <section class="banner">
        <img data-src="./img/banner.webp" class="lazy img-fluid" width="100%" height="100%" alt="หวยหุ้นจีน">
    </section>
    <?php
    if (!$key_search) {
    ?>
        <article class="content">
            <section class="result-lotto">
                <div class="container">
                    <div class="box-result">
                        <p>ตรวจผลรางวัลหวยหุ้นจีน</p>
                        <div class="row py-2 bg-light">
                            <div class="col-sm-12 col-md-6 col-lg-6 my-1">
                                <span class=" d-block text-center my-3">รอบเช้า</span>
                                <div class="d-flex">
                                    <div class="d-block " style="width: 50%;">
                                        <img data-src="./img/gif/gifxxx.gif" class="lazy img-max" width="123" height="115" alt="3 ตัวบน">
                                        <span class=" d-block text-center my-3">3 ตัวบน</span>
                                    </div>
                                    <div class="d-block " style="width: 50%;">
                                        <img data-src="./img/gif/gifxx.gif" class="lazy img-max" width="100" height="115" alt="2 ตัวล่าง">
                                        <span class=" d-block text-center my-3">2 ตัวล่าง</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6 my-1">
                                <span class=" d-block text-center my-3">รอบบ่าย</span>
                                <div class="d-flex">
                                    <div class="d-block " style="width: 50%;">
                                        <img data-src="./img/gif/gifxxx.gif" class="lazy img-max" width="123" height="115" alt="3 ตัวบน">
                                        <span class=" d-block text-center my-3">3 ตัวบน</span>
                                    </div>
                                    <div class="d-block " style="width: 50%;">
                                        <img data-src="./img/gif/gifxx.gif" class="lazy img-max" width="100" height="115" alt="2 ตัวล่าง">
                                        <span class=" d-block text-center my-3">2 ตัวล่าง</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="main my-4">
                <div class="container py-3 bg-fff">
                    <div class="row">
                        <div class="col-lg-5 col-md-12 my-1">
                            <img data-src="./img/img-lotto-chinese.webp" class="lazy img-max" width="486" height="343" alt="หวยหุ้นจีน">
                        </div>
                        <div class="col-lg-7 col-md-12 my-1">
                            <h1>หวยหุ้นจีน</h1>
                            <p class="mb-0"><strong>หวยหุ้นจีน</strong> หนึ่งในประเภทหวยที่คนไทยกำลังนิยมเล่นอย่างมาก ถูกจัดอยู่ในหมวดหมู่หวยหุ้นต่างประเทศเปิดให้บริการบนหวยหุ้นจีนออนไลน์ หวยออนไลน์ เป็นหวยที่นำเอาดัชนีการปิดตลาดหุ้นของประเทศจีน จะใช้ผลการออกรางวัลจากการปิดตลาดหุ้น มาเป็นผลการออกรางวัล มีกำหนดรอบการออกรางวัล 2 รอบทั้งในรอบเช้า และรอบบ่าย ทำให้คอหวยสามารถลุ้นผลหวยให้ได้บ่อยมากขึ้นรูปแบบวิธีการเล่นค่อนข้างง่ายเหมือนหวยไทยหรือหวยใต้ดินปกติ แต่มีจุดเด่นในเรื่องของการออกรางวัลให้รู้ผลค่อนข้างบ่อย ส่งผลต่อโอกาสในการถูกรางวัลที่ง่ายขึ้น นั่นเป็นเหตุผลที่คอหวยหันมาให้ความสนใจเสี่ยงโชคกับหวยหุ้นจีนมาคืนกว่าเดิม </p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="secondary my-4">
                <div class="container py-3 bg-fff">
                    <div class="row">
                        <div class="col-lg-7 col-md-12 my-1">
                            <h2>หวยหุ้นจีน คืออะไร</h2>
                            <p class="mb-0"><strong>หวยหุ้นจีน</strong> หรือ <strong></strong> เป็นหวยที่นำดัชนีของหุ้นจากประเทศจีนมาอ้างอิงในการออกรางวัลโดยจะนำเลขที่ได้จากการปิดตลาดหุ้นจีนที่ชื่อว่า SZSE COMPONENT INDEX มาออกรางวัล โดยจะมีความถี่ในการออกรางวัล 2 รอบใน 1 วัน อ้างอิงจากตลาดหุ้นจีน โดยจะมีการปิดตลาดหุ้น 2 รอบด้วยกันทั้งรอบเช้าและรอบบ่าย ผลการออกรางวัลสามารถมาใช้แทงหวยได้ทั้งหมด 6 รูปแบบเช่นเดียวกันกับหวยใต้ดินได้แก่รางวัล 3 ตัวตรง 3 ตัวโต๊ด 2 ตัวบน 2 ตัวล่างเลขวิ่งบนและเลขวิ่งล่าง โดยลักษณะการซื้อจะเหมือนกับหวยใต้ดินทุกอย่าง แต่มีเปิดให้บริการภายใน หวยหุ้นจีนออนไลน์ หรือหวยออนไลน์ แตกต่างแค่การใช้วัดผลการออกรางวัล เหมือนการซื้อหวยไทย หรือหวยหุ้นประเภทอื่นๆต่างเพียงแค่ผลการออกรางวัลโดยจะใช้ดัชนีหุ้นของประเทศนั้นๆ มาเป็นผลการออกรางวัลเท่านั้น </p>
                        </div>
                        <div class="col-lg-5 col-md-12 my-1">
                            <img data-src="./img/img-lotto-chinese-01.webp" class="lazy img-max" width="486" height="343" alt="หวยหุ้นจีน คืออะไร">
                        </div>
                    </div>
                </div>
            </section>
            <section class="secondary my-4">
                <div class="container py-3 bg-fff">
                    <div class="row">
                        <div class="col-lg-5 col-md-12 my-1">
                            <img data-src="./img/img-lotto-chinese-02.webp" class="lazy img-max" width="486" height="343" alt="วันเวลา ออกรางรัลหวยหุ้นจีน">
                        </div>
                        <div class="col-lg-7 col-md-12 my-1">
                            <h2>วันเวลา ออกรางรัลหวยหุ้นจีน</h2>
                            <p class="mb-0"><em>หวยหุ้นจีนออกวันไหน</em> หวยหุ้นจีนออกกี่โมง สำหรับหวยหุ้นจีนจะมีเล่นทั้งหมด 5 วันได้แก่วันจันทร์ วันอังคาร วันพุธ วันพฤหัสบดี และวันศุกร์ หยุดทุกวันเสาร์-อาทิตย์ และวันหยุดนักขัตฤกษ์ของจีน โดยหวยจีนถือว่าเป็นหวยที่มีการออกรางวัลบ่อยมาก แบ่งออกเป็น 2 รอบต่อ 1 วัน มีกำหนดออกรางวัลในรอบเช้าและรอบบ่าย แบ่งออกเป็นรอบการออกรางวัลดังนี้ </p>
                            <ul class="ul_two">
                                <li>
                                    <p>• <strong>หวยหุ้นจีนรอบเช้า</strong> ออกรางวัลช่วงเวลา 10.30 น ตรงตามเวลาของประเทศไทย </p>
                                </li>
                                <li>
                                    <p>• <strong>หวยหุ้นจีนรอบบ่าย</strong> ออกรางวัลช่วงเวลา 14:00 น ตรงตามเวลาของประเทศไทย </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section_background lazy my-4">
                <div class="container py-3 bg-fff">
                    <div class="row">
                        <div class="col-lg-7 col-md-12 my-1">
                            <h2>วิธีตรวจผลรางวัลหวยหุ้นจีน</h2>
                            <p>การออกรางวัลของหวยหุ้นจีน มีการอ้างอิงผลรางวัลโดยใช้ดัชนีราคาปิดตลาดหุ้นของจีน SZSE COMPONENT INDEX มาทำการออกรางวัลในแต่ละครั้ง จะนำเลขหลักหน่วย และเลขหลังจุดทศนิยมของค่า Last มาใช้ในการออกรางวัลเลข 3 ตัวบน และจะนำจุดทศนิยมของค่า Change มาใช้ในการออกรางวัล 2 ตัวล่าง สมมุติ Last 21792.10 ค่า Change 412.27 แบ่งออกเป็นรางวัลดังนี้ </p>
                        </div>
                        <div class="col-lg-5 col-md-12 my-1">
                            <img data-src="./img/img-lotto-chinese-03.webp" class="lazy img-max" width="486" height="343" alt="วิธีตรวจผลรางวัลหวยหุ้นจีน">
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 my-2">
                            <div class="ss_card ss_red">
                                <p class="white mb-0"><strong>• รางวัล 3 ตัวบน</strong> เป็นการซื้อเลข 3 ตัว (000-999) แบบเจาะจงตัวเลข และตำแหน่ง อ้างอิงผลการออกรางวัลในหลักหน่วย และเลขหลังจุดทศนิยมของ Last ผลการออกรางวัลได้แก่ 210</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 my-2">
                            <div class="ss_card ss_gray">
                                <p class="mb-0"><strong>• รางวัล 3 ตัวโต๊ด</strong> เป็นการซื้อเลข 3 ตัว (000-999) แบบเจาะจงตัวเลข แต่ไม่เจาะจงตำแหน่ง อ้างอิงผลการออกรางวัลในหลักหน่วย และเลขหลังจุดทศนิยมของ Last ผลการออกรางวัลได้แก่ 210, 201, 012, 021, 210, 201</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 my-2">
                            <div class="ss_card ss_red">
                                <p class="white mb-0"><strong>• รางวัล 2 ตัวบน</strong> เป็นการซื้อเลข 2 ตัว (00-99) แบบเจาะจงตัวเลข และตำแหน่ง อ้างอิงผลการออกรางวัลเลขหลังจุดทศนิยมของ Last ผลการออกรางวัลได้แก่ 10 </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 my-2">
                            <div class="ss_card ss_gray">
                                <p class="mb-0"><strong>• รางวัล 2 ตัวล่าง</strong> เป็นการซื้อเลข 2 ตัว (00-99) แบบเจาะจงตัวเลข และตำแหน่ง อ้างอิงผลการออกรางวัลเลขหลังจุดทศนิยมของ Change ผลการออกรางวัลได้แก่ 27</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 my-2">
                            <div class="ss_card ss_red">
                                <p class="white mb-0"><strong>• รางวัลเลขวิ่งบน</strong> เป็นการซื้อเลขตัวใดตัวหนึ่ง (0-9) ให้ตรงกับผลการออกรางวัลเลข 3 ตัวบนหมายเลขใดก็ได้ ผลการออกรางวัลได้แก่ 2, 1, 0</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 my-2">
                            <div class="ss_card ss_gray">
                                <p class="mb-0"><strong>• รางวัลเลขวิ่งล่าง</strong> เป็นการซื้อเลขตัวใดตัวหนึ่ง (0-9) ให้ตรงกับผลการออกรางวัลเลข 2 ตัวล่างหมายเลขใดก็ได้ ผลการออกรางวัลได้แก่ 2, 7</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="secondary my-4">
                <div class="container py-3 bg-fff">
                    <div class="row align-items-end">
                        <div class="col-lg-5 col-md-12 my-1">
                            <h2>อัตราจ่ายหวยหุ้นจีนออนไลน์</h2>
                            <div class="card_gradint_p">
                                <p class="mb-0">• สามตัวตรง จ่ายบาทละ 1,000 บาท </p>
                                <p class="mb-0 b_g">• สามตัวโต๊ด จ่ายบาทละ 100 บาท </p>
                                <p class="mb-0 ">• สองตัวบน จ่ายบาทละ 90 บาท </p>
                                <p class="mb-0 b_g">• สองตัวล่าง จ่ายบาทละ 90 บาท </p>
                                <p class="mb-0 ">• เลขวิ่งบน จ่ายบาทละ 3.20 บาท </p>
                                <p class="mb-0 b_g">• เลขวิ่งล่าง จ่ายบาทละ 4.20 บาท </p>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12 my-1">
                            <img data-src="./img/img-lotto-chinese-04.webp" class="lazy img-max" width="861" height="333" alt="อัตราจ่ายหวยหุ้นจีนออนไลน์">
                        </div>
                    </div>
                </div>
            </section>
            <section class="secondary my-4">
                <div class="container py-3 bg-fff">
                    <div class="row">
                        <div class="col-lg-5 col-md-12 my-1">
                            <img data-src="./img/img-lotto-chinese-05.webp" class="lazy img-max" width="486" height="343" alt="เว็บหวยหุ้นจีน จ่ายไม่อั้น เรทจ่ายสูง">
                        </div>
                        <div class="col-lg-7 col-md-12 my-1">
                            <h2>เว็บหวยหุ้นจีน จ่ายไม่อั้น เรทจ่ายสูง</h2>
                            <p class="mb-0"><strong>หวยหุ้นจีน</strong> หวยจีน มีการออกรางวัลวันละ 2 รอบต่อวันแบ่งออกเป็นช่วงเช้า และช่วงบ่าย ใน 1 สัปดาห์ มีการออกรางวัลให้ได้ลุ้นผลมากกว่า 10 รอบ มีความถี่ในการออกรางวัลจึงทำให้คอหวยในไทยต่างลงรัก เพราะไม่ต้องรอนานเหมือนหวยรัฐบาลที่ต้องรอเพียงเดือนละ 2 ครั้ง มีวิธีการแทงไม่ยาก จ่ายสูงสุดบาทละ 1,000 บาท บริการแทงหวยไม่มีขั้นต่ำ อัพเดทผลการออกรางวัลรวดเร็วก่อนใครผ่านทางด้านหน้าเว็บไซต์หลัก ฝาก-ถอนรวดเร็วโอนไว ถอนได้ไม่มีอั้นตลอด 24 ชั่วโมง มีหน้าเมนูภาษาไทยเพื่อง่ายต่อการเข้าเล่น งบน้อยก็สามารถแทงได้ สมัครสมาชิกฟรี พร้อมสิทธิพิเศษสุพรีเมี่ยมมากมาย เว็บหวยออนไลน์อันดับ 1 มีอัตราการจ่ายสูงที่สุด</p>
                        </div>
                    </div>
                </div>
            </section>
        </article>
        <article class="article-content">
            <div class="container">
                <p class="str-news text-center  mb-0"><a class="btn btn-sm animated-button victoria-one" href="./all-articles/"><span>บทความ / ข่าวสาร</span></a></p>
                <br>
                <div class="row justify-content-center align-items-end ">
                    <?php
                    $sql = "SELECT * FROM articles 
    ORDER BY id DESC  LIMIT 0,3 ";
                    $q = mysqli_query($conn, $sql) or die("Error in query: $sql " . mysqli_error($conn));
                    while ($resuret = mysqli_fetch_array($q)) {
                        $d_topic = $resuret['topic_name'];
                        $d_dec = strip_tags(mb_substr($resuret['descripion'], 0, 100, 'utf-8'));
                        $img = $resuret['image_banner'];
                        $date = date("Y-m-d", strtotime($resuret['create_at']));
                        $view = $resuret['view'];
                        $seo_dec = $resuret['descripion_seo'];
                        $url_articles_seo = $resuret['url_articles_seo'];
                        $article_id = $resuret['id'];
                    ?>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="bg_articles my-2">
                                <a href="./view/<?php echo $url_articles_seo; ?>" class="article-link" rel="ugc">
                                    <figure class="news-articles-img">
                                        <div class="bg-img">
                                            <img class="lazy img-fluid zoom" data-src="./backend/uploads/article-img/<?php echo $img ?>" alt="<?php echo $d_topic ?>" width="100%" height="100%">
                                        </div>
                                    </figure>
                                    <div class="px-2">
                                        <div class="view_date">
                                            <span>
                                                โพสเมื่อ : <?php echo $date; ?>
                                            </span>
                                            <span>
                                                ผู้เข้าชม : <?php echo $view; ?>
                                            </span>
                                        </div>
                                        <strong class="news-articles-h4"><?php echo trim(strip_tags(mb_substr($d_topic, 0, 30, 'utf-8'))); ?></strong>
                                        <p class="news-articles-p "><?php echo trim(strip_tags(mb_substr($seo_dec, 0, 120, 'utf-8'))); ?></p>
                                    </div>
                                </a>
                                <div class="usertag">
                                    <div class="tag__info">
                                        <?php
                                        $sql_tag = "SELECT tag.tag_url as tag_url,tag.name as name FROM (tag
                                    left join tag_log on tag.id = tag_log.tag_id)
                                    where articles_id = $article_id ";
                                        $query_tag = mysqli_query($conn, $sql_tag) or die("Error in query: $sql " . mysqli_error($conn));
                                        while ($result_tag = $query_tag->fetch_assoc()) {
                                        ?>
                                            <a href="./tag/<?php echo $result_tag['tag_url']; ?>" style="text-decoration: none;">
                                                <span class="tag tag-red"><?php echo $result_tag['name'] ?></span>
                                            </a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }
                    ?>
                </div>
            </div>
        </article>
    <?php
    } else {
    ?>
        <article class="article-container-card pt-4">
            <div class="container">
                <div class="text-center ">
                    <p class="text-bold-search mb-0 ">
                        Search By : <?php echo $key_search; ?>
                    </p>
                </div>
                <div class="row justify-content-center align-items-end mt-2">
                    <?php
                    while ($resuret = mysqli_fetch_array($q)) {
                        $d_topic = $resuret['topic_name'];
                        $d_dec = strip_tags(mb_substr($resuret['descripion'], 0, 100, 'utf-8'));
                        $img = $resuret['image_banner'];
                        $date = date("Y-m-d", strtotime($resuret['create_at']));
                        $view = $resuret['view'];
                        $seo_dec = $resuret['descripion_seo'];
                        $url_articles_seo = $resuret['url_articles_seo'];
                        $article_id = $resuret['id'];
                    ?>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="bg_articles my-2">
                                <a href="./view/<?php echo $url_articles_seo; ?>" class="article-link" rel="ugc">
                                    <figure class="news-articles-img">
                                        <div class="bg-img">
                                            <img class="lazy img-fluid zoom" data-src="./backend/uploads/article-img/<?php echo $img ?>" alt="<?php echo $d_topic ?>" width="100%" height="100%">
                                        </div>
                                    </figure>
                                    <div class="px-2">
                                        <div class="view_date">
                                            <span>
                                                โพสเมื่อ : <?php echo $date; ?>
                                            </span>
                                            <span>
                                                ผู้เข้าชม : <?php echo $view; ?>
                                            </span>
                                        </div>
                                        <strong class="news-articles-h4"><?php echo trim(strip_tags(mb_substr($d_topic, 0, 30, 'utf-8'))); ?></strong>
                                        <p class="news-articles-p "><?php echo trim(strip_tags(mb_substr($seo_dec, 0, 120, 'utf-8'))); ?></p>
                                    </div>
                                </a>
                                <div class="usertag">
                                    <div class="tag__info">

                                        <?php
                                        $sql_tag = "SELECT tag.tag_url as tag_url,tag.name as name FROM (tag
                                    left join tag_log on tag.id = tag_log.tag_id)
                                    where articles_id = $article_id ";
                                        $query_tag = mysqli_query($conn, $sql_tag) or die("Error in query: $sql " . mysqli_error($conn));
                                        while ($result_tag = $query_tag->fetch_assoc()) {
                                        ?>
                                            <a href="./tag/<?php echo $result_tag['tag_url']; ?>" style="text-decoration: none;">
                                                <span class="tag tag-red"><?php echo $result_tag['name'] ?></span>
                                            </a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }
                    ?>
                </div>
            </div>
        </article>
    <?php
    }
    ?>
    <footer class="main_footer">
        <div class="container pt-5 pb-3">
            <img data-src="./img/logo-lotto-chinese.webp" class="lazy img-max " width="317" height="524" alt="logo หวยหุ้นจีน">
        </div>
        <div style="background-color: #c81c04;padding:15px 0;">
            <p style="font-weight:300;" class="h5 text-center mb-0 py-2 white">Copyright &copy; 2023 หวยหุ้นจีน</p>
            <div class="container">
                <hr style="border-top: 2px solid #fff;">
                <a href="./backend/login.php" class="white h5">เข้าสู่ระบบ</a>
            </div>
        </div>
    </footer>
    <div id="nav-footer-bottom">
        <a href="./"><img data-src="./img/icon/icon-homepage.png" class="lazy img-fluid" width="30" height="30" alt="icon หน้าหลัก"><span>หน้าหลัก</span></a>
        <a href="./entrance/"><img data-src="./img/icon/icon-log-in.png" class="lazy img-fluid" width="30" height="30" alt="icon เข้าสู่ระบบ"><span>เข้าสู่ระบบ</span> </a>
        <a href="./register/"><img data-src="./img/icon/icon-contact.png" class="lazy img-fluid" width="30" height="30" alt="icon สมัครสมาชิก"><span>สมัครสมาชิก</span> </a>
        <a href="./contact/"><img data-src="./img/icon/icon-phone.png" class="lazy img-fluid" width="30" height="30" alt="icon ติดต่อ"><span>ติดต่อ</span> </a>
    </div>

    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "80%";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
    <!-- start lazyload -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var lazyloadImages;

            if ("IntersectionObserver" in window) {
                lazyloadImages = document.querySelectorAll(".lazy");
                var imageObserver = new IntersectionObserver(function(entries, observer) {
                    entries.forEach(function(entry) {
                        if (entry.isIntersecting) {
                            var image = entry.target;
                            image.src = image.dataset.src;
                            image.classList.remove("lazy");
                            imageObserver.unobserve(image);
                        }
                    });
                });

                lazyloadImages.forEach(function(image) {
                    imageObserver.observe(image);
                });
            } else {
                var lazyloadThrottleTimeout;
                lazyloadImages = document.querySelectorAll(".lazy");

                function lazyload() {
                    if (lazyloadThrottleTimeout) {
                        clearTimeout(lazyloadThrottleTimeout);
                    }

                    lazyloadThrottleTimeout = setTimeout(function() {
                        var scrollTop = window.pageYOffset;
                        lazyloadImages.forEach(function(img) {
                            if (img.offsetTop < (window.innerHeight + scrollTop)) {
                                img.src = img.dataset.src;
                                img.classList.remove('lazy');
                            }
                        });
                        if (lazyloadImages.length == 0) {
                            document.removeEventListener("scroll", lazyload);
                            window.removeEventListener("resize", lazyload);
                            window.removeEventListener("orientationChange", lazyload);
                        }
                    }, 20);
                }

                document.addEventListener("scroll", lazyload);
                window.addEventListener("resize", lazyload);
                window.addEventListener("orientationChange", lazyload);
            }
        })
    </script>
    <!--end lazyload -->
</body>

</html>