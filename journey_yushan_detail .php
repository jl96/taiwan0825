<?php require_once 'db.inc.php' ?>
<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>journey_yushan_detail</title>
    <!-- reset -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- CSS only -->
    <!-- boostrap 4.2.1 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous"> -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./header.css">
    <link rel="stylesheet" href="./nav-footer.css">






    <style>
        body {
            font-family: 'Noto Sans TC', sans-serif;
            background-color: #FDFFF8;
        }

        .container {
            max-width: 1640px;
        }


        /* herosection */
        .herosection {
            width: 1640px;
            height: 700px;

        }

        .herosection img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: relative;
        }

        .herosection_title_lty {
            position: absolute;
            background-color: white;
            bottom: 300px;
            box-shadow: 3px 3px #cececea2;

        }

        h2 {
            font-size: 36px;
            font-weight: 700;
            line-height: 46px;
        }

        h3 {
            font-size: 26px;
            font-weight: 700;
            line-height: 36px;

        }

        .sm-text {
            font-size: 16px;
            line-height: 26px;
            font-weight: 700;
        }

        h1 {
            font-size: 48px;
            font-weight: 700;
            writing-mode: vertical-lr;
        }

        h5 {
            font-size: 16px;
            line-height: 26px;
        }

        hr {
            border: 1px solid black;
            margin-top: 2rem;
        }

        .point123 {
            border-bottom: 1px solid #707070;
            padding-bottom: 10px;
        }

        /* tab */
        .tabs {
            width: 100%;
            margin: 0 auto;
        }

        input {
            opacity: 0;
        }

        /* label {
            cursor: pointer;
            background: white;
            color: #FF9F1C;
            border-radius: 5px 5px 0 0;
            padding: 1.5% 3%;
            float: left;
            margin-right: 10px;
            margin-bottom: 0;
            border-top: 1px solid #707070;
            border-right: 1px solid #707070;
            border-left: 1px solid #707070;
            width: 300px;
            text-align: center;
            font-size: 24px;
            font-weight: 700;
        } */



        /* input:checked+label {
            background: #F4FCE1;
            color: #FF9F1C;
            visibility: hidden;
        } */

        .tabs input:nth-of-type(1):checked~.panels .panel:first-child,
        .tabs input:nth-of-type(2):checked~.panels .panel:nth-child(2),
        .tabs input:nth-of-type(3):checked~.panels .panel:nth-child(3),
        .tabs input:nth-of-type(4):checked~.panels .panel:last-child {
            opacity: 1;
            /* -webkit-transition: .3s; */
        }

        .panels {
            float: left;
            clear: both;
            /* position: relative; */
            width: 100%;
            background: #ffffff;
            border-radius: 0 10px 10px 10px;

        }

        .panel {
            width: 100%;
            opacity: 0;
            position: absolute;
            background: #FDFFF8;
            border-radius: 0 10px 10px 10px;
            padding: 4%;
            box-sizing: border-box;


        }

        .panel h2 {
            margin: 0;

        }

        /* label img {
            width: 60px;
            height: 60px;
        } */

        .shopping_card {
            width: 1000px;
            height: 550px;
            margin: 0 auto;
        }

        .shopping_card_top {
            height: 30%;
            background-color: #B1D660;
            /* border-radius: 10px 10px 0 0; */
            position: relative;
            box-shadow: 3px 3px 9px #6f7072;
        }

        .shopping_card_top svg {
            position: absolute;
            right: 0;
        }

        .shopping_card_main {
            height: 70%;
            background-color: white;
            box-shadow: 3px 3px 9px #5E6472;
        }

        .introduce_img img {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            border-style: solid;
            border-width: 7px;
            border-color: white;
            position: absolute;
            top: -40px;
            margin-left: 40px;
            /* margin-bottom: 40px; */
            z-index: 2;
        }

        .h3000 {
            height: 2200px;
        }

        .child,
        .adult,
        .date {

            margin-bottom: 20px;
            border-bottom: 2px dashed #707070;
        }

        .child p,
        .adult p,
        .date p {
            font-size: 18px;
        }

        button {
            height: 60px;
            width: 200px;
            background-color: #707070;
            border-radius: 3%;
            color: #fff;
            font-size: 18px;
            font-weight: bold;
            margin-left: 20px;
        }

        :hover.cart-btn {
            background-color: #727886;
            color: #fff;
        }

        :hover.buy-btn {
            background-color: #FDB149;
            color: #fff;
        }



        /* 日期選擇器 */
        .time-picker>input {
            width: 300px;
            height: 60px;
            box-shadow: 3px 3px 5px rgba(112, 128, 144, 0.356);
            border: #00000042 1px solid;
            background-image: url(./SVG/月曆.svg);
            background-repeat: no-repeat;
            background-size: 20px;
            background-position: 95%;
            padding-bottom: 5px;
        }

        .daterangepicker td.active,
        .daterangepicker td.active:hover {
            background-color: #FF9F1C !important;
        }

        .daterangepicker td.end-date.active {
            background-color: #FF9F1C !important;
        }

        .daterangepicker td.in-range {
            background-color: #ffa01c4b !important;
        }

        .btn-primary {
            background-color: #FF9F1C !important;
        }


        /* 計算器 CSS  */

        .input-group>button {
            height: 30px;
            width: 30px;
            background-color: #FF9F1C;
            border-radius: 50%;
            text-align: center;
            color: white;

        }


        input#qty {
            opacity: 1 !important;
            text-align: center;
            width: 50px;
            margin-left: 20px;
        }

        .total_dollars>h2 {
            padding: 85px 0px 0px 250px;

        }

        .price {
            font-size: 18px;
            position: relative;

        }

        .per {
            width: 40px;
            margin-top: 9px;
            margin-right: 10px;
        }

        .bpoint img {
            width: 20px;
            height: 20px;
        }

        .bpoint {
            font-size: 16px;
            position: absolute;
            top: 145px;
            left: 195px;
        }

        .total_dollars {
            font-size: 36px;
        }

        .total_price_title {
            position: absolute;
            top: 100px;
            left: 40px;
        }

        .NTD {
            position: absolute;
            top: 100px;
            left: 200px;
        }




        /* 行程表 */
        .schedule_detail {
            width: 1000px;
            margin: 0 auto;
        }

        .timeline {
            padding: 10px;
        }

        .datetime {
            padding-top: 10px;
            padding-right: 20px;
            padding-left: 20px;
        }

        .timeline_line_content {
            margin-left: 35px;
            height: 80px;
            padding-left: 40px;
            padding-top: 10px;
            display: flex;

        }

        .h3_timeline {
            padding: 10px 0 0 10px;
        }

        /* 詳細行程 */
        .frth-textbox {
            display: flex;
            padding: 25px 0;
            width: 105%;
            border-bottom: #ABADB2 1px solid;
        }

        /* 注意事項 */
        .frth-textbox-title {
            width: 195px;
        }

        /* 相關裝備 */

        :focus #Heart-2 {
            fill: tomato;
        }


        .fifth-content {
            margin-top: 100px;
            display: flex;
        }

        .fifth-content>.title {
            padding-top: 35px;
            padding-left: 50px;
            width: 146px;
            height: 300px;
        }

        .fifth-text-box {
            background-color: #CFD0D2;
            margin-left: 270px;
            width: 935px;
        }

        .fifth-text-content {
            padding: 60px 0 0 45px;
        }

        .fifth-text {
            text-align: left;
        }

        .fifth-titlebox {
            background-color: #5E6472;
            color: white;
            font-size: 26px;
            height: 60px;
            width: 25%;
            text-align: center;
        }

        .fifth-titlebox>h3 {
            padding: 10px;
        }

        .fifth-ul-box {
            color: #707070;
            padding-top: 36px;
            padding-bottom: 45px;
        }


        .img-wrap2 img {
            width: 300px;
            height: 160px;
        }






        /*---------------------------RWD----------------------------------  */
        @media (max-width:880px) {
            .herosection {
                height: 400px;

            }

            .herosection img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                position: relative;
            }

            .herosection_title_lty {
                left: auto;
                width: auto;
                margin-left: 10px;
                margin-right: 10px;
                bottom:200px;
                padding: 16px 16px 0px 16px;
            }

            h2 {
                font-size: 24px;
                line-height: 32px;
            }

            h3 {
                font-size: 18px;
                font-weight: 700;
                line-height: 24px;
            }

            .h3_style {
                margin-top: 60px;
                text-align: center;
                padding: 0 10px;
            }

            .sm-text {
                font-size: 12px;
                line-height: 18px;

            }

            .sm_content {
                padding: 0 5px;
                margin: 0 auto;
            }

            h1 {
                font-size: 24px;
                font-weight: 700;
            }

            h5 {
                font-size: 12px;
                line-height: 18px;
            }

            .col-style {
                padding-right: 0;
            }

            .mt-10 {
                margin-top: 10px;
            }

            .time-picker>input {
                width: 300px;
                height: 60px;
                box-shadow: 3px 3px 5px rgba(112, 128, 144, 0.356);
                border: #00000042 1px solid;
                background-image: url(./SVG/月曆.svg);
                background-repeat: no-repeat;
                background-size: 20px;
                background-position: 95%;
            }
            .h3000 {
            height: 2060px;
        }
            /* 選擇方案和行程表 RWD */

            /* tabs */

            /* label {

                width: 120px;
                text-align: center;
                font-size: 13px;
                font-weight: 700;
                display: none;
            }

            label img {
                width: 20px;
                height: 20px;
                display: none;
            } */

            /* -------------------價格結帳表RWD---------------- */



            .shopping_card {
                max-width: 250px;
                height: 750px;
                margin: 0 auto;
            }

            .shopping_card_top {
                height: 15%;
                background-color: #B1D660;
                border-radius: 10px 10px 0 0;
                position: relative;
            }

            .shopping_card_main {
                height: 85%;
                background-color: white;
            }

            .introduce_img img {
                width: 70px;
                height: 70px;
                border-radius: 50%;
                border-style: solid;
                border-width: 7px;
                border-color: white;
                position: absolute;
                top: 10px;
                left: -35px;
                margin-left: 40px;
                /* margin-bottom: 40px; */
                z-index: 2;
            }

            .introduce_content h3 {
                font-size: 14px;
                margin-left: 20px;
                line-height: 18px;
                padding-top: 10px;
            }

            .shopping_card_top svg {
                width: 80px;
                top: -16px;
                right: -10px;
            }

            .introduce_content img {
                padding-left: 20px;
            }

            .date input {
                width: 180px;
                margin-bottom: 20px;
            }

            .main_left {
                height: 300px;
            }


            /* NT /人 */
            .price {

                font-size: 18px;
            }

            /* /人 */
            .per {
                margin: 0px;
            }

            input#qty {
                width: 27px;
                height: 27px;
                padding: 0px;
                margin-left: 5px;
            }

            #btn_minus {
                margin: 0px;
            }

            #btn_plus {
                margin-left: 5px;
            }

            /* 寶幣 */
            .bpoint img {
                width: 20px;
                height: 20px;
            }

            .bpoint {
                font-size: 16px;
                position: static;


            }

            .total_dollars>h2 {
                padding: 0px;
                font-size: 48px;
                margin-left: 120px;
                position: relative;
                bottom: 20px;
                right: 27px;
            }

            .total_price_title {
                position: static;
                top: 100px;
                left: 40px;
            }

            .NTD {
                position: static;
                margin-right: 200px;

            }

            /*------------------- 行程表 RWD ----------------------*/
            .schedule_detail {
                width: 250px;
                margin: 0 auto;
            }

            .timline_title svg {
                width: 30px;
            }

            .date_rwd {
                color: #707070;
                font-size: 14px;
            }

            .timeline_line_content {
                margin-left: 14px;
                min-height: 80px;
                padding-left: 22px;
                padding-top: 0;
                display: flex;
                font-size: 16px;
            }

            .panel {
                width: 280px;

            }




            /* 詳細行程 */
            .frth-textbox {
                display: block;
                padding: 10px 0;
                width: 80%;
                border-bottom: #ABADB2 1px solid;
            }

            .frth-textbox-title {
                width: 120px;
            }

            .fifth-content {
                margin-top: 30px;
                display: flex;
            }

            .fifth-content>.title {
                padding-top: 35px;
                padding-left: 15px;
                width: 30px;
                height: 300px;
                margin-right: 0px;

            }



            .fifth-text-box {
                background-color: #CFD0D2;
                margin-left: 35px;
                width: 302px;
            }

            .fifth-text-content {
                padding: 20px 20px 0 20px;
            }

            .fifth-text {
                text-align: left;
            }

            .fifth-titlebox {
                background-color: #5E6472;
                color: white;
                font-size: 26px;
                height: 40px;
                width: 60%;
                text-align: center;
            }

            .fifth-titlebox>h3 {
                padding: 0 auto;

            }

            .fifth-ul-box {
                color: #707070;
                padding-top: 10px;
                padding-bottom: 15px;
            }
            /* comment*/
            .nameandstar {
                padding-top: 60px;
            }
            .nameandstar svg {
                width: 100px;
            }
            /* card RWD */
            .card-body {
                padding: 0px;
            }

            .card-title {
                margin-bottom: 0px;
            }
            #myBtn>img {
                height: 150px;
            }
        }
    </style>

</head>

<body>
    <?php require_once 'header.php' ?>

    <div class="container">
        <div class="row">
            <?php
                $sql = "SELECT * FROM `product` WHERE `id` = 65";
                $arr = $pdo->query($sql)->fetchAll();
                foreach ($arr as $obj) {
            ?>
                <div class="herosection mt-xl-4">
                    <!--詳細頁面圖片 (首圖)-->
                    <img src="./images/<?= $obj['prod_main_img'] ?> " alt="<?= $obj['id'] ?>" title="<?= $obj['id'] ?>">
                    <div class="herosection_title_lty">
                        <h2>
                            <?= $obj['prod_name'] ?>
                        </h2>
                    </div>
                </div>
        </div>
        <div class="row">
            <h3 class="mt-xl-3 h3_style" style="color: #FF9F1C;">
                <?= $obj['prod_description']?>
            </h3>
        </div>
        <?php
            }
        ?>
        <div class="row mt-3 ">
            <div class="sm_content" style="color: #707070; text-align: left;">
                <p class="sm-text">* 玉山主峰獎牌+玉山單攻紀念衫。</p>
                <p class="sm-text">* 玉山攻頂証書並規定投保保險。</p>
                <p class="sm-text">* 排雲山莊熱湯+補給品+接駁車資。</p>
                <p class="sm-text">* 台中高鐵站→塔塔加+東埔來回接送。</p>
            </div>
        </div>
        <div class="row pt-xl-5">
            <div class="col-2 col-style ">
                <h1>景點介紹</h1>
                <hr>
            </div>
            <div class="col-10">
                <div class="introduce">
                    <div class="point123 d-flex flex-wrap">
                        <img src="./images/intro_yushan01.jpg" alt="" class="col-xl-3 pl-xl-0 col-12 ">
                        <div class="point_introduce col-xl-9 col-12">
                            <p class="sm-text mt-10">
                                -----&nbsp;&nbsp;&nbsp;Point &nbsp;1
                            </p>
                            <h3 style="color: #FF9F1C;">玉山登山口</h3>
                            <h5 style="color: #707070;">
                                位於塔塔加鞍部的玉山登山口海拔高度2610公尺，是台灣景色優美的國家公園，為南北走向的狹長草原稜線，具有遼闊的腹地，四周青翠山巒環抱，東邊可眺望玉山山峰，西側則可看見阿里山山脈，雲霧繚繞美不勝收。園區中有塔塔加遊客中心、八通關古道、夫妻樹及玉山登山路線等景點供民眾休閒遊憩。
                            </h5>
                        </div>
                    </div>

                </div>
                <div class="introduce mt-xl-2">
                    <div class="point123 d-flex flex-wrap">
                        <img src="./images/intro_yushan02.jpeg" alt="" class="col-xl-3 col-12 pl-xl-0 mt-2">
                        <div class="point_introduce col-xl-9 col-12">
                            <p class="sm-text mt-10">
                                -----&nbsp;&nbsp;&nbsp;Point &nbsp;2
                            </p>
                            <h3 style="color: #FF9F1C;">排雲山莊</h3>
                            <h5 style="color: #707070;">
                                排雲山莊是臺灣玉山國家公園一棟住宿山屋，海拔高度3,402公尺，位於玉山主峰西坡下2.4公里處。參加寶島旅人瘋行程，即會幫忙代為抽籤。
                            </h5>
                        </div>
                    </div>

                </div>
                <div class="introduce mt-xl-2">
                    <div class="point123 d-flex flex-wrap">
                        <img src="./images/爬玉山素材_210727_12.jpg" alt="" class="col-xl-3 col-12 pl-xl-0 mt-2">
                        <div class="point_introduce col-xl-9 col-12">
                            <p class="sm-text mt-10">
                                -----&nbsp;&nbsp;&nbsp;Point &nbsp;3
                            </p>
                            <h3 style="color: #FF9F1C;">登頂主峰</h3>
                            <h5 style="color: #707070;">
                                玉山主峰位於台灣的中心位置，海拔3952公尺，為台灣群山之首，百岳排名第一，也是東北亞的最高峰。主峰四周有東、南、西、北峰環繞，外圍還有前峰、小南山、南玉山、東小南山、鹿山與北北峰遙相呼應，宛如眾星拱月般，襯托出主峰的王者之尊，壯偉雄奇的山容、絕佳的展望和絢麗的日出景觀，吸引了無數的中外登山客前來攀登，近年來更成為台灣人一生必須完成的三件事之一。
                            </h5>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row h3000 pt-xl-5 pt-2">
            <div class="col-2 col-style">
                <h1>選擇方案及行程表</h1>
                <hr>
            </div>

            <div class="col-10">
                <div class="tabs">
                    
                    <!-- <input checked id="one" name="tabs" type="radio" style="display: none;">
                    <label for="one" style="visibility: hidden;"> <img src="./SVG/mountain-small.svg" alt="">
                        登玉山行程</label>
                    <input id="two" name="tabs" type="radio" value="Two" style="display: none;">
                    <label for="two" style="visibility: hidden;">
                    <img src="./SVG/train-img_1.svg" alt="">環島行程 </label>
                            <input id="three" name="tabs" type="radio" style="display: none;">
                            <label for="three" style="visibility: hidden;">
                                <img src="./SVG/swimming-img_1.svg" alt="">日月潭行程
                            </label> -->
                    
                   
                    <div>
                        <div>
                            <div class="shopping_card">
                                <div class="shopping_card_top d-flex pr-xl-2">
                                    <div class="introduce_img col-3">
                                        <img src="./images/<?= $obj['prod_main_img'] ?> " alt="<?= $obj['id'] ?>" title="<?= $obj['id'] ?>">
                                    </div>
                                    <div class="introduce_content">
                                        <h3 class="mt-xl-5" style="font-weight: 400;"><?= $obj['prod_name'] ?></h3>
                                        <img src="./SVG/stars.svg" alt="" style="height:20px;width: 100px;">
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="165" height="37" viewBox="0 0 165 37">
                                        <g id="组_1117" data-name="组 1117" transform="translate(-987 -2325)">
                                            <rect id="矩形_1592" data-name="矩形 1592" width="165" height="37" rx="18" transform="translate(987 2325)" fill="#ff9f1c" />
                                            <text id="可獲得成就" transform="translate(1048 2351)" fill="#fdfff8" font-size="16" font-family="SourceHanSansTW-Regular, Source Han Sans TW" letter-spacing="0.01em">
                                                <tspan x="0" y="0">可獲得成就</tspan>
                                            </text>
                                            <path id="路径_661" data-name="路径 661" d="M4447.811,976.223c.173-.109.275-.177.381-.24,1.841-1.105,3.681-2.214,5.527-3.31a.533.533,0,0,0,.311-.542q-.033-1.016,0-2.034a.629.629,0,0,0-.319-.616,21.509,21.509,0,0,1-4.766-4.2c-.532-.657-.961-1.4-1.446-2.094a.539.539,0,0,0-.287-.237,6.6,6.6,0,0,1-5.1-4.084,14.186,14.186,0,0,1-1.332-6.179,1.442,1.442,0,0,1,1.44-1.456c.092,0,.184,0,.276,0q13.035,0,26.069,0a1.477,1.477,0,0,1,1.344.62,1.492,1.492,0,0,1,.268.762,13.542,13.542,0,0,1-1.811,7.155,6.224,6.224,0,0,1-4.562,3.175.441.441,0,0,0-.293.178,16.867,16.867,0,0,1-4.572,5.142c-.564.452-1.16.866-1.752,1.281a.477.477,0,0,0-.24.448c.012.724.015,1.449,0,2.173a.457.457,0,0,0,.27.458q2.842,1.691,5.674,3.4c.086.052.17.11.325.21Zm-1.172-16.512v-5.535h-2.793a10.342,10.342,0,0,0,1.088,3.765A4.115,4.115,0,0,0,4446.639,959.711Zm17.7-5.518v5.48c1.641-.644,2.656-3.515,2.762-5.48Z" transform="translate(-3436.982 1378.777)" fill="#fdfff8" />
                                        </g>
                                    </svg>

                                </div>
                                <div class="shopping_card_main d-flex flex-wrap">
                                    <div class="main_left col-xl-7 col-12">
                                        <div class="date d-flex justify-content-between pt-4">
                                            <p>日期</p>
                                            <!-- 日期選擇器 -->
                                            <div class="time-picker">
                                                <input type="text" 
                                                        name="daterange" 
                                                        id="travel_day" 
                                                        value="09/01/2021 - 09/15/2021" 
                                                        class="text-left" 
                                                        style="opacity: 1;"/>
                                            </div>
                                        </div>
                                        <div class="adult d-flex justify-content-between">
                                            <p class="pt-xl-2">成人</p>
                                            <div id="tab">
                                                <div>
                                                    <div class="row">
                                                        <div style="display: flex;" class="justify-content-between">
                                                            <span class="myPrice price pt-xl-2"><?= $obj['prod_price'] ?></span><span class="per" style="width: 40px;">/人</span>
                                                            <div class="input-group mb-3">
                                                                <button class="btn btn-outline-secondary" type="button" id="btn_minus" style="position: relative;">
                                                                    <i class="fas fa-minus" style="position: absolute; top: 6px; left: 7px;"></i>
                                                                </button>
                                                                <input type="text" class="form-control" placeholder="" id="qty" value="1">
                                                                <button class="btn btn-outline-secondary" type="button" id="btn_plus" style="position: relative;">
                                                                    <i class="fas fa-plus" style="position: absolute;top: 6px; right: 7px;"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <p style="color: #707070;">*未滿7歲之兒童，全額免費。</p>
                                        <p style="color: #707070;">*本公司保有修改變更或暫停本活動之權利。</p>
                                    </div>
                                    <div class="main_right col-xl-5 col-12">
                                        <button class="cart-btn d-none d-xl-block mt-xl-3" 
                                                style="margin: 0 auto;color:white;text-decoration:none;" 
                                                id="btn_set_cart" 
                                                data-prod-id="<?= $obj['id'] ?>" 
                                                data-prod-name="<?= $obj['prod_name'] ?>"
                                                data-prod-description="<?= $obj['prod_description']?>" 
                                                data-prod-main-img="<?= $obj['prod_main_img'] ?>" 
                                                data-prod-price="<?= $obj['prod_price'] ?>" 
                                                data-func-name="<?= $obj['func_name'] ?>">
                                            放入購物車
                                        </button>
                                        <button class=" buy-btn d-none d-xl-block  mt-xl-3" style="background-color: #FF9F1C;z-index: 300;margin: 0 auto;" id="btn_buy">
                                            <a href="" style="color:white;;text-decoration:none">立刻下訂 </a></button>
                                        <div class="price">
                                            <p class="text-xl-center total_price_title">總金額</p>
                                            <p style="color: #707070;text-align: right;" class="NTD">NTD</p>
                                            <span class="total_dollars" style="color: #FF9F1C;font-weight: bold;">
                                                <?php
                                                    $count = 0;
                                                    $total = 0;
                                                    $sql = "SELECT * FROM `product` WHERE `id` = 65";
                                                    $arr = $pdo->query($sql)->fetchAll();
                                                    foreach ($arr as $obj) {
                                                ?>
                                                    <h2><span><?= $total += $obj['prod_price'] * 1; ?></span></h2>
                                                <?php
                                                }
                                                ?>
                                            </span>
                                            <div class="bpoint" style="color: #ADE8F4;text-align: right;">
                                                <img src="./SVG/bobee-img.svg" alt="">
                                                Travel point <span class="Bpoint_count">60</span>
                                            </div>
                                        </div>
                                        <button class="cart-btn d-xl-none d-block mt-2" 
                                                style="margin: 0 auto;color:white;;text-decoration:none;" 
                                                id="btn_set_cart" 
                                                data-prod-id="<?= $obj['id'] ?>" 
                                                data-prod-name="<?= $obj['prod_name'] ?>" 
                                                data-prod-description="<?= $obj['prod_description']?>"
                                                data-prod-main-img="<?= $obj['prod_main_img'] ?>"
                                                data-prod-price="<?= $obj['prod_price'] ?>" 
                                                data-func-name="<?= $obj['func_name'] ?>">
                                            放入購物車</button>

                                        <button class=" buy-btn d-xl-none d-block  mt-xl-3 mt-2" style="background-color: #FF9F1C;z-index: 300;margin: 0 auto;" id="btn_set_cart" data-prod-id="<?= $obj['id'] ?>" data-prod-name="<?= $obj['prod_name'] ?>" data-prod-main-img="<?= $obj['prod_main_img'] ?>" data-prod-price="<?= $obj['prod_price'] ?>">
                                            <a href="" style="color:white;;text-decoration:none">立刻下訂</a> </button>
                                    </div>

                                </div>

                            </div>


                            <div class="schedule_detail mt-xl-5 mt-3" style="background-color: #F4FCE1; ">
                                <div class="timeline d-flex flex-wrap">
                                    <div class="datetime col-xl-1 d-none d-xl-block">
                                        <p style="font-weight: 700px;color: #707070;">7:30</p>
                                    </div>
                                    <div class="timeline_content col-xl-11 col-12">
                                        <div class="timline_title d-flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="63.034" height="50.008" viewBox="0 0 63.034 50.008">
                                                <g id="圖層_2" data-name="圖層 2" transform="matrix(0.995, -0.105, 0.105, 0.995, -1.381, 5.755)">
                                                    <g id="圖層_1" data-name="圖層 1">
                                                        <rect id="矩形_572" data-name="矩形 572" width="53.3" height="29.2" transform="translate(1.003 16.168) rotate(-16.53)" fill="#ff9f1c" stroke="#ff9f1c" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                        <rect id="矩形_573" data-name="矩形 573" width="7.9" height="9.65" transform="translate(10.847 18.556) rotate(-16.53)" fill="#ade8f4" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.75" />
                                                        <rect id="矩形_574" data-name="矩形 574" width="7.9" height="9.65" transform="translate(24.217 14.596) rotate(-16.53)" fill="#ade8f4" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.75" />
                                                        <rect id="矩形_575" data-name="矩形 575" width="7.9" height="9.65" transform="translate(37.576 10.629) rotate(-16.53)" fill="#ade8f4" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.75" />
                                                    </g>
                                                </g>
                                            </svg>



                                            <h3 class="h3_timeline"><span class="date_rwd">7:30
                                                </span>快樂啟航
                                            </h3>
                                        </div>
                                        <div class="timeline_line_content  d-none d-xl-flex" style="border-left:1px solid black">

                                            台中烏日高鐵站出發

                                        </div>
                                        <div class="timeline_line_content  d-flex d-xl-none" style="border-left:1px solid black">

                                            台中烏日高鐵站出發


                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="schedule_detail" style="background-color: #F4FCE1;">
                                <div class=" timeline d-flex flex-wrap">
                                    <div class="datetime col-xl-1 d-none d-xl-block">
                                        <p style="font-weight: 700px;color: #707070;">11:00</p>
                                    </div>
                                    <div class="timeline_content col-xl-11 col-12">
                                        <div class="timline_title d-flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="50.77" height="50.08" viewBox="0 0 50.77 50.08">
                                                <path id="路径_153" data-name="路径 153" d="M35.51,1,1,37.4,49.77,49.08Z" transform="translate(0 0)" fill="#00a878" stroke="#00a878" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                            </svg>
                                            <h3 class="h3_timeline"><span class="date_rwd">11:00
                                                </span>接駁至排雲山莊
                                            </h3>
                                        </div>
                                        <div class="timeline_line_content " style="border-left:1px solid black">

                                            上東埔停車場坐接駁車

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="schedule_detail" style="background-color: #F4FCE1;">
                                <div class=" timeline d-flex flex-wrap">
                                    <div class="datetime col-xl-1 d-none d-xl-block">
                                        <p style="font-weight: 700px;color: #707070;">17:00</p>
                                    </div>
                                    <div class="timeline_content col-xl-11 col-12">
                                        <div class="timline_title d-flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="57.301" height="55.04" viewBox="0 0 57.301 55.04">
                                                <g id="圖層_2" data-name="圖層 2" transform="translate(0.099 0.026)">
                                                    <g id="圖層_1" data-name="圖層 1">
                                                        <path id="路径_152" data-name="路径 152" d="M54,18.7,43,4.79a10,10,0,0,0-9.3-3.68L16.08,3.69A10,10,0,0,0,8.24,9.9L1.7,26.4a10,10,0,0,0,1.46,9.89l11,13.91a10,10,0,0,0,9.29,3.68L41,51.3a10,10,0,0,0,7.84-6.21l6.53-16.5A10,10,0,0,0,54,18.7Z" fill="#ade8f4" stroke="#ade8f4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                    </g>
                                                </g>
                                            </svg>

                                            <h3 class="h3_timeline"><span class="date_rwd">17:00
                                                </span>抵達
                                            </h3>
                                        </div>
                                        <div class="timeline_line_content " style="border-left:1px solid black">

                                            入住排雲山莊17點晚餐(己租睡袋)

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="schedule_detail" style="background-color: #F4FCE1;">
                                <div class="timeline d-flex flex-wrap">
                                    <div class="datetime col-xl-1 d-none d-xl-block">
                                        <p style="font-weight: 700px;color: #707070;">2:00</p>
                                    </div>
                                    <div class="timeline_content col-xl-11 col-12">
                                        <div class="timline_title d-flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="63.034" height="50.008" viewBox="0 0 63.034 50.008">
                                                <g id="圖層_2" data-name="圖層 2" transform="matrix(0.995, -0.105, 0.105, 0.995, -1.381, 5.755)">
                                                    <g id="圖層_1" data-name="圖層 1">
                                                        <rect id="矩形_572" data-name="矩形 572" width="53.3" height="29.2" transform="translate(1.003 16.168) rotate(-16.53)" fill="#ff9f1c" stroke="#ff9f1c" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                        <rect id="矩形_573" data-name="矩形 573" width="7.9" height="9.65" transform="translate(10.847 18.556) rotate(-16.53)" fill="#ade8f4" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.75" />
                                                        <rect id="矩形_574" data-name="矩形 574" width="7.9" height="9.65" transform="translate(24.217 14.596) rotate(-16.53)" fill="#ade8f4" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.75" />
                                                        <rect id="矩形_575" data-name="矩形 575" width="7.9" height="9.65" transform="translate(37.576 10.629) rotate(-16.53)" fill="#ade8f4" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.75" />
                                                    </g>
                                                </g>
                                            </svg>


                                            <h3 class="h3_timeline"><span class="date_rwd">2:00
                                                </span>出發攻頂!
                                            </h3>
                                        </div>
                                        <div class="timeline_line_content " style="border-left:1px solid black">

                                            早餐後出發

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="schedule_detail" style="background-color: #F4FCE1;">
                                <div class="timeline d-flex flex-wrap">
                                    <div class="datetime col-xl-1 d-none d-xl-block">
                                        <p style="font-weight: 700px;color: #707070;">5:00</p>
                                    </div>
                                    <div class="timeline_content col-xl-11 col-12">
                                        <div class="timline_title d-flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="50.77" height="50.08" viewBox="0 0 50.77 50.08">
                                                <path id="路径_153" data-name="路径 153" d="M35.51,1,1,37.4,49.77,49.08Z" transform="translate(0 0)" fill="#00a878" stroke="#00a878" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                            </svg>



                                            <h3 class="h3_timeline"><span class="date_rwd">5:00
                                                </span>攻頂!
                                            </h3>
                                        </div>
                                        <div class="timeline_line_content " style="border-left:1px solid black">
                                            抵達登頂主峰
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="schedule_detail" style="background-color: #F4FCE1;">
                                <div class="timeline d-flex flex-wrap">
                                    <div class="datetime col-xl-1 d-none d-xl-block">
                                        <p style="font-weight: 700px;color: #707070;">11:30</p>
                                    </div>
                                    <div class="timeline_content col-xl-11 col-12">
                                        <div class="timline_title d-flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="57.301" height="55.04" viewBox="0 0 57.301 55.04">
                                                <g id="圖層_2" data-name="圖層 2" transform="translate(0.099 0.026)">
                                                    <g id="圖層_1" data-name="圖層 1">
                                                        <path id="路径_152" data-name="路径 152" d="M54,18.7,43,4.79a10,10,0,0,0-9.3-3.68L16.08,3.69A10,10,0,0,0,8.24,9.9L1.7,26.4a10,10,0,0,0,1.46,9.89l11,13.91a10,10,0,0,0,9.29,3.68L41,51.3a10,10,0,0,0,7.84-6.21l6.53-16.5A10,10,0,0,0,54,18.7Z" fill="#ade8f4" stroke="#ade8f4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                    </g>
                                                </g>
                                            </svg>

                                            <h3 class="h3_timeline"><span class="date_rwd">11:30
                                                </span>午餐
                                            </h3>
                                        </div>
                                        <div class="timeline_line_content " style="border-left:1px solid black">

                                            至排雲山莊用午餐

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="schedule_detail" style="background-color: #F4FCE1;">
                                <div class="timeline d-flex flex-wrap">
                                    <div class="datetime col-xl-1 d-none d-xl-block">
                                        <p style="font-weight: 700px;color: #707070;">15:30</p>
                                    </div>
                                    <div class="timeline_content col-xl-11 col-12">
                                        <div class="timline_title d-flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="63.034" height="50.008" viewBox="0 0 63.034 50.008">
                                                <g id="圖層_2" data-name="圖層 2" transform="matrix(0.995, -0.105, 0.105, 0.995, -1.381, 5.755)">
                                                    <g id="圖層_1" data-name="圖層 1">
                                                        <rect id="矩形_572" data-name="矩形 572" width="53.3" height="29.2" transform="translate(1.003 16.168) rotate(-16.53)" fill="#ff9f1c" stroke="#ff9f1c" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                        <rect id="矩形_573" data-name="矩形 573" width="7.9" height="9.65" transform="translate(10.847 18.556) rotate(-16.53)" fill="#ade8f4" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.75" />
                                                        <rect id="矩形_574" data-name="矩形 574" width="7.9" height="9.65" transform="translate(24.217 14.596) rotate(-16.53)" fill="#ade8f4" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.75" />
                                                        <rect id="矩形_575" data-name="矩形 575" width="7.9" height="9.65" transform="translate(37.576 10.629) rotate(-16.53)" fill="#ade8f4" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.75" />
                                                    </g>
                                                </g>
                                            </svg>


                                            <h3 class="h3_timeline"><span class="date_rwd">15:30
                                                </span>返程
                                            </h3>
                                        </div>
                                        <div class="timeline_line_content " style="border-left:1px solid black">

                                            回玉山登山口上車


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="schedule_detail" style="background-color: #F4FCE1;">
                                <div class="timeline d-flex flex-wrap">
                                    <div class="datetime col-xl-1 d-none d-xl-block">
                                        <p style="font-weight: 700px;color: #707070;">18:30</p>
                                    </div>
                                    <div class="timeline_content col-xl-11 col-12">
                                        <div class="timline_title d-flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="50.77" height="50.08" viewBox="0 0 50.77 50.08">
                                                <path id="路径_153" data-name="路径 153" d="M35.51,1,1,37.4,49.77,49.08Z" transform="translate(0 0)" fill="#00a878" stroke="#00a878" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                            </svg>



                                            <h3 class="h3_timeline"><span class="date_rwd">18:30
                                                </span>回到溫暖的窩
                                            </h3>
                                        </div>
                                        <div class="timeline_line_content ">

                                            抵達台中烏日高鐵站。

                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>

                    </div>

                </div>
            </div>

        </div>
        <div class="row  ">
            <div class="col-2 col-style ">
                <h1>詳細行程</h1>
                <hr>
            </div>

            <div class="col-10 ">
                <div class="text-1" style="color: #707070;">
                    <div class="frth-textbox">
                        <div class="frth-textbox-title">
                            <h3>名稱</h3>

                        </div>
                        <div class="sm-text">
                            攀登玉山3天2夜登山行程｜入住排雲山莊｜攻略東北亞第一高峰
                        </div>

                    </div>

                    <div class="frth-textbox">
                        <div class="frth-textbox-title">
                            <h3>所需時間 </h3>
                        </div>
                        <div class="sm-text">
                            2天。
                        </div>


                    </div>
                    <div class="frth-textbox">
                        <div class="frth-textbox-title">
                            <h3>人數</h3>

                        </div>
                        <div class="sm-text">
                            6人以上成行。
                        </div>

                    </div>


                    <div class="frth-textbox">
                        <div class="frth-textbox-title">
                            <h3>接駁工具</h3>

                        </div>
                        <div class="sm-text">
                            公車。
                        </div>

                    </div>
                    <div class="frth-textbox">
                        <div class="frth-textbox-title">
                            <h3>舉辦日期</h3>

                        </div>
                        <div class="sm-text">
                            每天(國定假日除外)。
                        </div>

                    </div>
                    <div class="frth-textbox">

                        <div class="frth-textbox-title">
                            <h3>所需準備物品</h3>

                        </div>
                        <div class="sm-text">
                            ・門票(若有購買此行程的話，我們會在會員系統提供門票的QRcode給您) <br>
                            ・可以更換的衣物。<br>
                            ・免費借50L大背包-登山杖-手套-電燈 -雨鞋。<br>
                            ・免費借您安全帽全程佩戴。<br>
                            ・免費借您緊急口哨一個。<br>
                        </div>

                    </div>
                    <div class="frth-textbox">
                        <div class="frth-textbox-title">
                            <h3>包含物品</h3>

                        </div>
                        <div class="sm-text">
                            ・來往接駁車<br>
                            ・當日晚餐及隔日午餐<br>
                            ・依規定投保保險<br>
                            ・排雲山莊熱湯+補給品<br>
                            ・玉山單攻紀念衫<br>

                        </div>

                    </div>
                    <div class="frth-textbox">
                        <div class="frth-textbox-title">
                            <div class="frth-textbox-title"></div>
                            <h3>其他注意事項</h3>
                        </div>
                        <div class="sm-text">
                            ・最少出團人數 6 人，當參加人數未達上述規定的最少成團人數時，將取消旅遊行程，<br> 於出發日前 3 天發出取消旅遊的 Email 通知。 <br>
                            ・不建議患有下列疾病或其他不宜受到過度刺激的旅客參加此項目:

                            <br>高血壓、心臟病、癲癇、氣喘、懷孕婦女 <br>
                            ・夏天台二線濱海公路容易塞車，請提早出發。若集合逾時或無故缺席者，恕不退費。<br>
                            ・當活動當天到現場後，經現場領隊教練判斷天候不佳或因安全顧慮不適宜出航的情形，<br>宣告現場取消活動，將扣除手續保險費用每人 NT$ 100 之後退還。<br>
                            ・請遵照教練指示，發揮團隊精神協助隊友，切勿脫隊自行活動。<br>
                        </div>
                    </div>

                    </span>
                    <!-- <button onclick="myFunction()" id="myBtn" class="mt-3" style="background-color:#FDFFF8 ;
                    color:#707070; border-size:1px ;text-align:center">
                        <p>看更多 </p>
                    </button> -->
                </div>

            </div>
        </div>

        <div class="row  pt-xl-5 pt-3">
            <div class="col-2 col-style">
                <h1>注意事項</h1>
                <hr>
            </div>

            <div class="col-10">
                <div class="fifth-text-content" style="background-color: #CFD0D2;">
                    <div class="fifth-text">
                        <div class="fifth-titlebox">
                            <h3> 關於QRcode</h3>
                        </div>

                        <div class="fifth-ul-box">
                            <ul>
                                <li>
                                    <p> 請直接出示訂單QRcode</p>
                                </li>
                                <li>
                                    <p>行前通知將於活動日前 3 日以 email 方式寄出</p>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="fifth-text">
                        <div class="fifth-titlebox">
                            <h3>關於裝備 </h3>
                        </div>

                        <div class="fifth-ul-box">
                            <ul>
                                <li>
                                    <p>可先行至裝備小屋租借</p>
                                </li>
                                <li>
                                    <p> 包含緊急口哨、雨鞋、登山杖。</p>
                                </li>
                                <li>
                                    <p>建議自備扣環水壺及手機專用防水袋，並使用繫繩或扣環與救生衣連結避免跌落遺失。</p>
                                </li>


                            </ul>
                        </div>
                    </div>

                    <!-- .... read more -->
                    <!-- <span id="dots"></span><span id="more"> -->

                    <div class="fifth-text">
                        <div class="fifth-titlebox">
                            <h3> 關於付款</h3>
                        </div>

                        <div class="fifth-ul-box">
                            <ul>
                                <li>
                                    <p> 所選日期 5 天（含）之前取消，收取手續費 0%</p>
                                </li>
                                <li>
                                    <p>所選日期 3 ~ 4 天之間取消，收取手續費 50%</p>
                                </li>
                                <li>
                                    <p>所選日期 0 ~ 2 天之間取消，收取手續費 100%</p>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="fifth-text">
                        <div class="fifth-titlebox">
                            <h3> 關於集合</h3>
                        </div>

                        <div class="fifth-ul-box">
                            <ul>
                                <li>
                                    <p> 地點名稱：台中高鐵站 B5停車場</p>
                                </li>
                                <li>
                                    <p>地址：414台中市烏日區站區二路8號</p>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="fifth-text">
                        <div class="fifth-titlebox">
                            <h3> 其他</h3>
                        </div>

                        <div class="fifth-ul-box">
                            <ul>
                                <li>
                                    <p> 活動進行中，請遵從教練指示，若不遵守教練指導、且不聽勸阻，為避免發生意外，現場教練有權立即中止活動，且不退費。</p>
                                </li>
                                <li>
                                    <p>若於活動中遇氣候改變（如午後陣雨），現場教練將可能終止活動，可下次前往補足時數，恕不退費。</p>
                                </li>
                                <li>
                                    <p>本國籍旅客請提供身分證字號，無須填寫護照號碼。</p>
                                </li>
                                <li>
                                    <p>未滿 6 歲兒童請需由父母陪同，並確保兒童能聽從教練指示以維護安全。</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    </span>

                </div>
            </div>
        </div>
        <div class="row  d-xl-block d-xl-flex  d-none  pt-xl-5">
            <div class="col-2 col-style">
                <h1>相關裝備</h1>
                <hr>
            </div>
            <div id="carouselExampleControls" class="carousel slide  col-10 flex-wrap" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card-group">
                            <div class="card">
                                <div class="card-top" style="position:relative;">
                                    <a class="liked" href="#"><svg style="position:absolute; right: 2px; top: 2%;" xmlns="http://www.w3.org/2000/svg" width="30.37" height="26.114" viewBox="0 0 30.37 26.114">
                                            <g id="Group_875" data-name="Group 875" transform="translate(1 1)">
                                                <g id="Heart" transform="translate(0 0)">
                                                    <path id="Heart-2" data-name="Heart" d="M26.127,2.209a7.829,7.829,0,0,0-10.85,0L14.21,3.237,13.143,2.209a7.829,7.829,0,0,0-10.85,0,7.154,7.154,0,0,0,0,10.451L14.21,24.139,26.127,12.66a7.154,7.154,0,0,0,0-10.451" transform="translate(-0.025 -0.025)" fill="none" stroke="#d7d8d4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill-rule="evenodd" />
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                    <img src="./images/headlamp-orange.jpeg" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">頭燈【黑】</h5>
                                    <span class="card-text" style="position: relative;"><img src="./SVG/stars.svg" alt="" style="height: 30px; width: 182px;"></span>
                                    <span class="card-text" style="position: absolute; top: 380px; left: 210px;">TWD
                                        <span style="color: #FF9F1C; font-weight: bold; font-size: 20px;">1,200</span></span>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-top" style="position:relative;">
                                    <a class="liked" href="#"><svg style="position:absolute; right: 2px; top: 2%;" xmlns="http://www.w3.org/2000/svg" width="30.37" height="26.114" viewBox="0 0 30.37 26.114">
                                            <g id="Group_875" data-name="Group 875" transform="translate(1 1)">
                                                <g id="Heart" transform="translate(0 0)">
                                                    <path id="Heart-2" data-name="Heart" d="M26.127,2.209a7.829,7.829,0,0,0-10.85,0L14.21,3.237,13.143,2.209a7.829,7.829,0,0,0-10.85,0,7.154,7.154,0,0,0,0,10.451L14.21,24.139,26.127,12.66a7.154,7.154,0,0,0,0-10.451" transform="translate(-0.025 -0.025)" fill="none" stroke="#d7d8d4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill-rule="evenodd" />
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                    <img src="./images/hiking- boots-yellow.jpg" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Gore-Tex大背包縱走登山鞋【黃】</h5>
                                    <span class="card-text" style="position: relative;"><img src="./SVG/stars.svg" alt="" style="height: 30px; width: 182px;"></span>
                                    <span class="card-text" style="position: absolute; top: 380px; left: 210px;">TWD
                                        <span style="color: #FF9F1C; font-weight: bold; font-size: 20px;">8,650</span></span>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-top" style="position:relative;">
                                    <a class="liked" href="#"><svg style="position:absolute; right: 2px; top: 2%;" xmlns="http://www.w3.org/2000/svg" width="30.37" height="26.114" viewBox="0 0 30.37 26.114">
                                            <g id="Group_875" data-name="Group 875" transform="translate(1 1)">
                                                <g id="Heart" transform="translate(0 0)">
                                                    <path id="Heart-2" data-name="Heart" d="M26.127,2.209a7.829,7.829,0,0,0-10.85,0L14.21,3.237,13.143,2.209a7.829,7.829,0,0,0-10.85,0,7.154,7.154,0,0,0,0,10.451L14.21,24.139,26.127,12.66a7.154,7.154,0,0,0,0-10.451" transform="translate(-0.025 -0.025)" fill="none" stroke="#d7d8d4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill-rule="evenodd" />
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                    <img src="./images/rain-coat-blue.jpg" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">A連身套頭式雨衣【藍】</h5>
                                    <span class="card-text" style="position: relative;"><img src="./SVG/stars.svg" alt="" style="height: 30px; width: 182px;"></span>
                                    <span class="card-text" style="position: absolute; top: 380px; left: 210px;">TWD
                                        <span style="color: #FF9F1C; font-weight: bold; font-size: 20px;">580</span></span>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-top" style="position:relative;">
                                    <a class="liked" href="#"><svg style="position:absolute; right: 2px; top: 2%;" xmlns="http://www.w3.org/2000/svg" width="30.37" height="26.114" viewBox="0 0 30.37 26.114">
                                            <g id="Group_875" data-name="Group 875" transform="translate(1 1)">
                                                <g id="Heart" transform="translate(0 0)">
                                                    <path id="Heart-2" data-name="Heart" d="M26.127,2.209a7.829,7.829,0,0,0-10.85,0L14.21,3.237,13.143,2.209a7.829,7.829,0,0,0-10.85,0,7.154,7.154,0,0,0,0,10.451L14.21,24.139,26.127,12.66a7.154,7.154,0,0,0,0-10.451" transform="translate(-0.025 -0.025)" fill="none" stroke="#d7d8d4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill-rule="evenodd" />
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                    <img src="./images/sleeping-bag-blue.jpeg" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">睡袋【藍】</h5>
                                    <span class="card-text" style="position: relative;"><img src="./SVG/stars.svg" alt="" style="height: 30px; width: 182px;"></span>
                                    <span class="card-text" style="position: absolute; top: 380px; left: 210px;">TWD
                                        <span style="color: #FF9F1C; font-weight: bold; font-size: 20px;">2,450</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card-group">
                            <div class="card">
                                <div class="card-top" style="position:relative;">
                                    <a class="liked" href="#"><svg style="position:absolute; right: 2px; top: 2%;" xmlns="http://www.w3.org/2000/svg" width="30.37" height="26.114" viewBox="0 0 30.37 26.114">
                                            <g id="Group_875" data-name="Group 875" transform="translate(1 1)">
                                                <g id="Heart" transform="translate(0 0)">
                                                    <path id="Heart-2" data-name="Heart" d="M26.127,2.209a7.829,7.829,0,0,0-10.85,0L14.21,3.237,13.143,2.209a7.829,7.829,0,0,0-10.85,0,7.154,7.154,0,0,0,0,10.451L14.21,24.139,26.127,12.66a7.154,7.154,0,0,0,0-10.451" transform="translate(-0.025 -0.025)" fill="none" stroke="#d7d8d4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill-rule="evenodd" />
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                    <img src="./images/bag-cover.jpg" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">背包外罩【大】</h5>
                                    <span class="card-text" style="position: relative;"><img src="./SVG/stars.svg" alt="" style="height: 30px; width: 182px;"></span>
                                    <span class="card-text" style="position: absolute; top: 380px; left: 210px;">TWD
                                        <span style="color: #FF9F1C; font-weight: bold; font-size: 20px;">200</span></span>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-top" style="position:relative;">
                                    <a class="liked" href="#"><svg style="position:absolute; right: 2px; top: 2%;" xmlns="http://www.w3.org/2000/svg" width="30.37" height="26.114" viewBox="0 0 30.37 26.114">
                                            <g id="Group_875" data-name="Group 875" transform="translate(1 1)">
                                                <g id="Heart" transform="translate(0 0)">
                                                    <path id="Heart-2" data-name="Heart" d="M26.127,2.209a7.829,7.829,0,0,0-10.85,0L14.21,3.237,13.143,2.209a7.829,7.829,0,0,0-10.85,0,7.154,7.154,0,0,0,0,10.451L14.21,24.139,26.127,12.66a7.154,7.154,0,0,0,0-10.451" transform="translate(-0.025 -0.025)" fill="none" stroke="#d7d8d4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill-rule="evenodd" />
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                    <img src="./images/bottle-green.jpg" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">雙層保冷噴射水壺 【綠】 </h5>
                                    <span class="card-text" style="position: relative;"><img src="./SVG/stars.svg" alt="" style="height: 30px; width: 182px;"></span>
                                    <span class="card-text" style="position: absolute; top: 380px; left: 210px;">TWD
                                        <span style="color: #FF9F1C; font-weight: bold; font-size: 20px;">490</span></span>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-top" style="position:relative;">
                                    <a class="liked" href="#"><svg style="position:absolute; right: 2px; top: 2%;" xmlns="http://www.w3.org/2000/svg" width="30.37" height="26.114" viewBox="0 0 30.37 26.114">
                                            <g id="Group_875" data-name="Group 875" transform="translate(1 1)">
                                                <g id="Heart" transform="translate(0 0)">
                                                    <path id="Heart-2" data-name="Heart" d="M26.127,2.209a7.829,7.829,0,0,0-10.85,0L14.21,3.237,13.143,2.209a7.829,7.829,0,0,0-10.85,0,7.154,7.154,0,0,0,0,10.451L14.21,24.139,26.127,12.66a7.154,7.154,0,0,0,0-10.451" transform="translate(-0.025 -0.025)" fill="none" stroke="#d7d8d4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill-rule="evenodd" />
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                    <img src="./images/waterproof-bag.jpeg" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">手機防水袋 (9cm*16cm手機適用) ITIWIT</h5>
                                    <span class="card-text" style="position: relative;"><img src="./SVG/stars.svg" alt="" style="height: 30px; width: 182px;"></span>
                                    <span class="card-text" style="position: absolute; top: 380px; left: 210px;">TWD
                                        <span style="color: #FF9F1C; font-weight: bold; font-size: 20px;">190</span></span>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-top" style="position:relative;">
                                    <a class="liked" href="#"><svg style="position:absolute; right: 2px; top: 2%;" xmlns="http://www.w3.org/2000/svg" width="30.37" height="26.114" viewBox="0 0 30.37 26.114">
                                            <g id="Group_875" data-name="Group 875" transform="translate(1 1)">
                                                <g id="Heart" transform="translate(0 0)">
                                                    <path id="Heart-2" data-name="Heart" d="M26.127,2.209a7.829,7.829,0,0,0-10.85,0L14.21,3.237,13.143,2.209a7.829,7.829,0,0,0-10.85,0,7.154,7.154,0,0,0,0,10.451L14.21,24.139,26.127,12.66a7.154,7.154,0,0,0,0-10.451" transform="translate(-0.025 -0.025)" fill="none" stroke="#d7d8d4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill-rule="evenodd" />
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                    <img src="./images/bag-white-back.jpeg" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">登山健行背包【白】</h5>
                                    <span class="card-text" style="position: relative;"><img src="./SVG/stars.svg" alt="" style="height: 30px; width: 182px;"></span>
                                    <span class="card-text" style="position: absolute; top: 380px; left: 210px;">TWD
                                        <span style="color: #FF9F1C; font-weight: bold; font-size: 20px;">6,000</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev" style="position: absolute;
                top: 150px;
               
                background-color: #B1D660;
                height: 90px;
                width: 50px;">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                </button>
                <button class="carousel-control-next " type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next" style="position: absolute;
                top: 150px;
                right: 20px;
                background-color: #B1D660;
                height: 90px;
                width: 50px;">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>

        <!-- 相關裝備RWD -->

        <div class="row  d-xl-none d-flex  pt-3">
            <div class="col-2">
                <h1>相關裝備</h1>
                <hr>
            </div>
            <div id="carouselExampleControls" class="carousel slide  col-10  flex-wrap" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card-group col-12 " style="flex-direction:unset">
                            <div class="card col-6 " style="height: 200px;">
                                <div class="card-top" style="position:relative;">
                                    <a class="liked" href="#"><svg style="position:absolute; right: 2px; top: 2%;" xmlns="http://www.w3.org/2000/svg" width="30.37" height="26.114" viewBox="0 0 30.37 26.114">
                                            <g id="Group_875" data-name="Group 875" transform="translate(1 1)">
                                                <g id="Heart" transform="translate(0 0)">
                                                    <path id="Heart-2" data-name="Heart" d="M26.127,2.209a7.829,7.829,0,0,0-10.85,0L14.21,3.237,13.143,2.209a7.829,7.829,0,0,0-10.85,0,7.154,7.154,0,0,0,0,10.451L14.21,24.139,26.127,12.66a7.154,7.154,0,0,0,0-10.451" transform="translate(-0.025 -0.025)" fill="none" stroke="#d7d8d4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill-rule="evenodd" />
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                    <img src="./images/headlamp-orange.jpeg" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">頭燈【黑】</h5>
                                    <span class="card-text" style="position: relative;"><img src="./SVG/stars.svg" alt="" style="height: 30px; width: 100px;"></span>
                                    <span class="card-text" style="position: absolute; top: 160px; left: 20px;">TWD
                                        <span style="color: #FF9F1C; font-weight: bold; font-size: 20px;">1,800</span></span>
                                </div>
                            </div>
                            <div class="card col-6" style="height: 200px;">
                                <div class="card-top" style="position:relative;">
                                    <a class="liked" href="#"><svg style="position:absolute; right: 2px; top: 2%;" xmlns="http://www.w3.org/2000/svg" width="30.37" height="26.114" viewBox="0 0 30.37 26.114">
                                            <g id="Group_875" data-name="Group 875" transform="translate(1 1)">
                                                <g id="Heart" transform="translate(0 0)">
                                                    <path id="Heart-2" data-name="Heart" d="M26.127,2.209a7.829,7.829,0,0,0-10.85,0L14.21,3.237,13.143,2.209a7.829,7.829,0,0,0-10.85,0,7.154,7.154,0,0,0,0,10.451L14.21,24.139,26.127,12.66a7.154,7.154,0,0,0,0-10.451" transform="translate(-0.025 -0.025)" fill="none" stroke="#d7d8d4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill-rule="evenodd" />
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                    <img src="./images/hiking- boots-yellow.jpg" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Gore-Tex大背包縱走登山鞋【黃】</h5>
                                    <span class="card-text" style="position: relative;"><img src="./SVG/stars.svg" alt="" style="height: 30px; width: 100px;"></span>
                                    <span class="card-text" style="position: absolute; top: 160px; left: 20px;">TWD
                                        <span style="color: #FF9F1C; font-weight: bold; font-size: 20px;">1,800</span></span>
                                </div>
                            </div>
                            <div class="card col-6" style="height: 200px;">
                                <div class="card-top" style="position:relative;">
                                    <a class="liked" href="#"><svg style="position:absolute; right: 2px; top: 2%;" xmlns="http://www.w3.org/2000/svg" width="30.37" height="26.114" viewBox="0 0 30.37 26.114">
                                            <g id="Group_875" data-name="Group 875" transform="translate(1 1)">
                                                <g id="Heart" transform="translate(0 0)">
                                                    <path id="Heart-2" data-name="Heart" d="M26.127,2.209a7.829,7.829,0,0,0-10.85,0L14.21,3.237,13.143,2.209a7.829,7.829,0,0,0-10.85,0,7.154,7.154,0,0,0,0,10.451L14.21,24.139,26.127,12.66a7.154,7.154,0,0,0,0-10.451" transform="translate(-0.025 -0.025)" fill="none" stroke="#d7d8d4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill-rule="evenodd" />
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                    <img src="./images/goggles-blue.jpeg" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">ADISI雙眼面鏡【藍色</h5>
                                    <span class="card-text" style="position: relative;"><img src="./SVG/stars.svg" alt="" style="height: 30px; width: 100px;"></span>
                                    <span class="card-text" style="position: absolute; top: 160px; left: 20px;">TWD
                                        <span style="color: #FF9F1C; font-weight: bold; font-size: 20px;">1,800</span></span>
                                </div>
                            </div>
                            <div class="card col-6" style="height: 200px;">
                                <div class="card-top" style="position:relative;">
                                    <a class="liked" href="#"><svg style="position:absolute; right: 2px; top: 2%;" xmlns="http://www.w3.org/2000/svg" width="30.37" height="26.114" viewBox="0 0 30.37 26.114">
                                            <g id="Group_875" data-name="Group 875" transform="translate(1 1)">
                                                <g id="Heart" transform="translate(0 0)">
                                                    <path id="Heart-2" data-name="Heart" d="M26.127,2.209a7.829,7.829,0,0,0-10.85,0L14.21,3.237,13.143,2.209a7.829,7.829,0,0,0-10.85,0,7.154,7.154,0,0,0,0,10.451L14.21,24.139,26.127,12.66a7.154,7.154,0,0,0,0-10.451" transform="translate(-0.025 -0.025)" fill="none" stroke="#d7d8d4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill-rule="evenodd" />
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                    <img src="./images/headlamp-orange.jpeg" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">登山背包19L</h5>
                                    <span class="card-text" style="position: relative;"><img src="./SVG/stars.svg" alt="" style="height: 30px; width: 100px;"></span>
                                    <span class="card-text" style="position: absolute; top: 160px; left: 20px;">TWD
                                        <span style="color: #FF9F1C; font-weight: bold; font-size: 20px;">1,800</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card-group col-12 " style="flex-direction:unset">
                            <div class="card col-6" style="height: 200px;">
                                <div class="card-top" style="position:relative;">
                                    <a class="liked" href="#"><svg style="position:absolute; right: 2px; top: 2%;" xmlns="http://www.w3.org/2000/svg" width="30.37" height="26.114" viewBox="0 0 30.37 26.114">
                                            <g id="Group_875" data-name="Group 875" transform="translate(1 1)">
                                                <g id="Heart" transform="translate(0 0)">
                                                    <path id="Heart-2" data-name="Heart" d="M26.127,2.209a7.829,7.829,0,0,0-10.85,0L14.21,3.237,13.143,2.209a7.829,7.829,0,0,0-10.85,0,7.154,7.154,0,0,0,0,10.451L14.21,24.139,26.127,12.66a7.154,7.154,0,0,0,0-10.451" transform="translate(-0.025 -0.025)" fill="none" stroke="#d7d8d4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill-rule="evenodd" />
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                    <img src="./images/bag-cover.jpg" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">背包外罩【大】</h5>
                                    <span class="card-text" style="position: relative;"><img src="./SVG/stars.svg" alt="" style="height: 30px; width: 100px;"></span>
                                    <span class="card-text" style="position: absolute; top: 160px; left: 20px;">TWD
                                        <span style="color: #FF9F1C; font-weight: bold; font-size: 20px;">200</span></span>
                                </div>
                            </div>
                            <div class="card col-6" style="height: 200px;">
                                <div class="card-top" style="position:relative;">
                                    <a class="liked" href="#"><svg style="position:absolute; right: 2px; top: 2%;" xmlns="http://www.w3.org/2000/svg" width="30.37" height="26.114" viewBox="0 0 30.37 26.114">
                                            <g id="Group_875" data-name="Group 875" transform="translate(1 1)">
                                                <g id="Heart" transform="translate(0 0)">
                                                    <path id="Heart-2" data-name="Heart" d="M26.127,2.209a7.829,7.829,0,0,0-10.85,0L14.21,3.237,13.143,2.209a7.829,7.829,0,0,0-10.85,0,7.154,7.154,0,0,0,0,10.451L14.21,24.139,26.127,12.66a7.154,7.154,0,0,0,0-10.451" transform="translate(-0.025 -0.025)" fill="none" stroke="#d7d8d4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill-rule="evenodd" />
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                    <img src="./images/bottle-green.jpg" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">雙層保冷噴射水壺 【綠】</h5>
                                    <span class="card-text" style="position: relative;"><img src="./SVG/stars.svg" alt="" style="height: 30px; width: 100px;"></span>
                                    <span class="card-text" style="position: absolute;top: 160px; left: 20px;">TWD
                                        <span style="color: #FF9F1C; font-weight: bold; font-size: 20px;">1,800</span></span>
                                </div>
                            </div>
                            <div class="card col-6" style="height: 200px;">
                                <div class="card-top" style="position:relative;">
                                    <a class="liked" href="#"><svg style="position:absolute; right: 2px; top: 2%;" xmlns="http://www.w3.org/2000/svg" width="30.37" height="26.114" viewBox="0 0 30.37 26.114">
                                            <g id="Group_875" data-name="Group 875" transform="translate(1 1)">
                                                <g id="Heart" transform="translate(0 0)">
                                                    <path id="Heart-2" data-name="Heart" d="M26.127,2.209a7.829,7.829,0,0,0-10.85,0L14.21,3.237,13.143,2.209a7.829,7.829,0,0,0-10.85,0,7.154,7.154,0,0,0,0,10.451L14.21,24.139,26.127,12.66a7.154,7.154,0,0,0,0-10.451" transform="translate(-0.025 -0.025)" fill="none" stroke="#d7d8d4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill-rule="evenodd" />
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                    <img src="./images/rain-coat-blue.jpg" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">登山背包19L</h5>
                                    <span class="card-text" style="position: relative;"><img src="./SVG/stars.svg" alt="" style="height: 30px; width: 100px;"></span>
                                    <span class="card-text" style="position: absolute; top: 160px; left: 20px;">TWD
                                        <span style="color: #FF9F1C; font-weight: bold; font-size: 20px;">1,800</span></span>
                                </div>
                            </div>
                            <div class="card col-6" style="height: 200px;">
                                <div class="card-top" style="position:relative;">
                                    <a class="liked" href="#"><svg style="position:absolute; right: 2px; top: 2%;" xmlns="http://www.w3.org/2000/svg" width="30.37" height="26.114" viewBox="0 0 30.37 26.114">
                                            <g id="Group_875" data-name="Group 875" transform="translate(1 1)">
                                                <g id="Heart" transform="translate(0 0)">
                                                    <path id="Heart-2" data-name="Heart" d="M26.127,2.209a7.829,7.829,0,0,0-10.85,0L14.21,3.237,13.143,2.209a7.829,7.829,0,0,0-10.85,0,7.154,7.154,0,0,0,0,10.451L14.21,24.139,26.127,12.66a7.154,7.154,0,0,0,0-10.451" transform="translate(-0.025 -0.025)" fill="none" stroke="#d7d8d4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill-rule="evenodd" />
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                    <img src="./images/bag-blue.jpeg" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">登山背包19L</h5>
                                    <span class="card-text" style="position: relative;"><img src="./SVG/stars.svg" alt="" style="height: 30px; width: 100px;"></span>
                                    <span class="card-text" style="position: absolute; top: 380px; left: 210px;">TWD
                                        <span style="color: #FF9F1C; font-weight: bold; font-size: 20px;">1,800</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev" style="position: absolute;
                top: 80px;
                    left:0px;
                    background-color: #B1D660;
                    height: 45px;
                    width: 25px;">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                </button>
                <button class="carousel-control-next " type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next" style="position: absolute;
                 top: 80px;
                    right: 0;
                    background-color: #B1D660;
                    right: 20px;
                    height: 45px;
                    width: 25px;">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>

        <div class="row pt-xl-5 pt-3">
            <div class="col-2 col-style">
                <h1>評價</h1>
                <hr>
            </div>

            <div class="col-10">
                <div class="user_detail d-flex">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="170" height="170" viewBox="0 0 170 170" class="col-xl-2 col-5">
                        <defs>
                            <clipPath id="clip-path">
                                <path id="Union_32" data-name="Union 32" d="M0,480.6V464.778c0-17.411,28.485-31.654,63.3-31.654s63.3,14.242,63.3,31.654V480.6Zm31.647-94.947A31.65,31.65,0,1,1,63.3,417.3,31.653,31.653,0,0,1,31.647,385.654Z" transform="translate(219.699 -81.601)" fill="#6cb6cb" />
                            </clipPath>
                        </defs>
                        <g id="Group_1062" data-name="Group 1062" transform="translate(-603 -1111)">
                            <g id="Circle" transform="translate(13 861)" opacity="0.2">
                                <circle id="Ellipse_106" data-name="Ellipse 106" cx="85" cy="85" r="85" transform="translate(590 250)" fill="#ade8f4" />
                                <text id="大頭照" transform="translate(675 338.999)" fill="#ade8f4" font-size="14" font-family="SourceHanSansTW-Bold, Source Han Sans TW" font-weight="700">
                                    <tspan x="-21" y="0">大頭照</tspan>
                                </text>
                            </g>
                            <g id="Mask_Group_42" data-name="Mask Group 42" transform="translate(404 882)" clip-path="url(#clip-path)">
                                <g id="Circle-2" data-name="Circle" transform="translate(-391 -21)">
                                    <circle id="Ellipse_106-2" data-name="Ellipse 106" cx="85" cy="85" r="85" transform="translate(590 250)" fill="#6cb6cb" />
                                </g>
                            </g>
                        </g>
                    </svg>

                    <div class="nameandstar col-xl-10 col-7 pt-xl-4">
                        <h3>小P</h3>
                        <svg xmlns="http://www.w3.org/2000/svg" width="182" height="30" viewBox="0 0 182 30">
                            <g id="Group_1085" data-name="Group 1085" transform="translate(-1674 -2356)">
                                <path id="Polygon_14" data-name="Polygon 14" d="M14.1,1.8a1,1,0,0,1,1.79,0l3.681,7.39a1,1,0,0,0,.719.539l7.9,1.411a1,1,0,0,1,.556,1.665L23.09,18.889a1,1,0,0,0-.258.819L24,28.078A1,1,0,0,1,22.55,29.1l-7.087-3.693a1,1,0,0,0-.924,0L7.45,29.1A1,1,0,0,1,6,28.078l1.17-8.37a1,1,0,0,0-.258-.819L1.249,12.8a1,1,0,0,1,.556-1.665L9.7,9.725a1,1,0,0,0,.719-.539Z" transform="translate(1826 2356)" fill="#d9d9d9" />
                                <path id="Polygon_15" data-name="Polygon 15" d="M14.1,1.8a1,1,0,0,1,1.79,0l3.681,7.39a1,1,0,0,0,.719.539l7.9,1.411a1,1,0,0,1,.556,1.665L23.09,18.889a1,1,0,0,0-.258.819L24,28.078A1,1,0,0,1,22.55,29.1l-7.087-3.693a1,1,0,0,0-.924,0L7.45,29.1A1,1,0,0,1,6,28.078l1.17-8.37a1,1,0,0,0-.258-.819L1.249,12.8a1,1,0,0,1,.556-1.665L9.7,9.725a1,1,0,0,0,.719-.539Z" transform="translate(1674 2356)" fill="#ffd21c" />
                                <path id="Polygon_16" data-name="Polygon 16" d="M14.1,1.8a1,1,0,0,1,1.79,0l3.681,7.39a1,1,0,0,0,.719.539l7.9,1.411a1,1,0,0,1,.556,1.665L23.09,18.889a1,1,0,0,0-.258.819L24,28.078A1,1,0,0,1,22.55,29.1l-7.087-3.693a1,1,0,0,0-.924,0L7.45,29.1A1,1,0,0,1,6,28.078l1.17-8.37a1,1,0,0,0-.258-.819L1.249,12.8a1,1,0,0,1,.556-1.665L9.7,9.725a1,1,0,0,0,.719-.539Z" transform="translate(1712 2356)" fill="#ffd21c" />
                                <path id="Polygon_17" data-name="Polygon 17" d="M14.1,1.8a1,1,0,0,1,1.79,0l3.681,7.39a1,1,0,0,0,.719.539l7.9,1.411a1,1,0,0,1,.556,1.665L23.09,18.889a1,1,0,0,0-.258.819L24,28.078A1,1,0,0,1,22.55,29.1l-7.087-3.693a1,1,0,0,0-.924,0L7.45,29.1A1,1,0,0,1,6,28.078l1.17-8.37a1,1,0,0,0-.258-.819L1.249,12.8a1,1,0,0,1,.556-1.665L9.7,9.725a1,1,0,0,0,.719-.539Z" transform="translate(1750 2356)" fill="#ffd21c" />
                                <path id="Polygon_18" data-name="Polygon 18" d="M14.1,1.8a1,1,0,0,1,1.79,0l3.681,7.39a1,1,0,0,0,.719.539l7.9,1.411a1,1,0,0,1,.556,1.665L23.09,18.889a1,1,0,0,0-.258.819L24,28.078A1,1,0,0,1,22.55,29.1l-7.087-3.693a1,1,0,0,0-.924,0L7.45,29.1A1,1,0,0,1,6,28.078l1.17-8.37a1,1,0,0,0-.258-.819L1.249,12.8a1,1,0,0,1,.556-1.665L9.7,9.725a1,1,0,0,0,.719-.539Z" transform="translate(1788 2356)" fill="#ffd21c" />
                            </g>
                        </svg>

                    </div>
                </div>
                <div class="comment d-flex">
                    <div class="col-2 d-none d-xl-flex">

                    </div>
                    <div class="col-xl-10  col-12">
                        <p>五星級熱門的的百岳步道、只要有毅力的人都可以上的去
                        </p>
                        <div class="img-wrap2 d-flex flex-wrap">
                            <img src="./images/com_yu01.jpg" alt="" class="col-xl-3 col-6 pl-0 pr-0">
                            <img src="./images/com_yu02jpg.jpg" alt="" class="col-xl-3 col-6  pl-0 pr-0">
                            <img src="./images/com_yu03.jpg" alt="" class="col-xl-3 d-xl-flex d-none   pl-0 pr-0">
                            <img src="./images/com_yu04.jpg" alt="" class="col-xl-3 d-xl-flex d-none   pl-0 pr-0">

                        </div>

                    </div>
                </div>
                <div class="user_detail d-flex">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="170" height="170" viewBox="0 0 170 170" class="col-xl-2 col-5">
                        <defs>
                            <clipPath id="clip-path">
                                <path id="Union_32" data-name="Union 32" d="M0,480.6V464.778c0-17.411,28.485-31.654,63.3-31.654s63.3,14.242,63.3,31.654V480.6Zm31.647-94.947A31.65,31.65,0,1,1,63.3,417.3,31.653,31.653,0,0,1,31.647,385.654Z" transform="translate(219.699 -81.601)" fill="#6cb6cb" />
                            </clipPath>
                        </defs>
                        <g id="Group_1062" data-name="Group 1062" transform="translate(-603 -1111)">
                            <g id="Circle" transform="translate(13 861)" opacity="0.2">
                                <circle id="Ellipse_106" data-name="Ellipse 106" cx="85" cy="85" r="85" transform="translate(590 250)" fill="#ade8f4" />
                                <text id="大頭照" transform="translate(675 338.999)" fill="#ade8f4" font-size="14" font-family="SourceHanSansTW-Bold, Source Han Sans TW" font-weight="700">
                                    <tspan x="-21" y="0">大頭照</tspan>
                                </text>
                            </g>
                            <g id="Mask_Group_42" data-name="Mask Group 42" transform="translate(404 882)" clip-path="url(#clip-path)">
                                <g id="Circle-2" data-name="Circle" transform="translate(-391 -21)">
                                    <circle id="Ellipse_106-2" data-name="Ellipse 106" cx="85" cy="85" r="85" transform="translate(590 250)" fill="#6cb6cb" />
                                </g>
                            </g>
                        </g>
                    </svg>

                    <div class="nameandstar col-xl-10 col-7 pt-xl-4">
                        <h3>Lalisa</h3>
                        <svg xmlns="http://www.w3.org/2000/svg" width="182" height="30" viewBox="0 0 182 30">
                            <g id="Group_1085" data-name="Group 1085" transform="translate(-1674 -2356)">
                                <path id="Polygon_14" data-name="Polygon 14" d="M14.1,1.8a1,1,0,0,1,1.79,0l3.681,7.39a1,1,0,0,0,.719.539l7.9,1.411a1,1,0,0,1,.556,1.665L23.09,18.889a1,1,0,0,0-.258.819L24,28.078A1,1,0,0,1,22.55,29.1l-7.087-3.693a1,1,0,0,0-.924,0L7.45,29.1A1,1,0,0,1,6,28.078l1.17-8.37a1,1,0,0,0-.258-.819L1.249,12.8a1,1,0,0,1,.556-1.665L9.7,9.725a1,1,0,0,0,.719-.539Z" transform="translate(1826 2356)" fill="#d9d9d9" />
                                <path id="Polygon_15" data-name="Polygon 15" d="M14.1,1.8a1,1,0,0,1,1.79,0l3.681,7.39a1,1,0,0,0,.719.539l7.9,1.411a1,1,0,0,1,.556,1.665L23.09,18.889a1,1,0,0,0-.258.819L24,28.078A1,1,0,0,1,22.55,29.1l-7.087-3.693a1,1,0,0,0-.924,0L7.45,29.1A1,1,0,0,1,6,28.078l1.17-8.37a1,1,0,0,0-.258-.819L1.249,12.8a1,1,0,0,1,.556-1.665L9.7,9.725a1,1,0,0,0,.719-.539Z" transform="translate(1674 2356)" fill="#ffd21c" />
                                <path id="Polygon_16" data-name="Polygon 16" d="M14.1,1.8a1,1,0,0,1,1.79,0l3.681,7.39a1,1,0,0,0,.719.539l7.9,1.411a1,1,0,0,1,.556,1.665L23.09,18.889a1,1,0,0,0-.258.819L24,28.078A1,1,0,0,1,22.55,29.1l-7.087-3.693a1,1,0,0,0-.924,0L7.45,29.1A1,1,0,0,1,6,28.078l1.17-8.37a1,1,0,0,0-.258-.819L1.249,12.8a1,1,0,0,1,.556-1.665L9.7,9.725a1,1,0,0,0,.719-.539Z" transform="translate(1712 2356)" fill="#ffd21c" />
                                <path id="Polygon_17" data-name="Polygon 17" d="M14.1,1.8a1,1,0,0,1,1.79,0l3.681,7.39a1,1,0,0,0,.719.539l7.9,1.411a1,1,0,0,1,.556,1.665L23.09,18.889a1,1,0,0,0-.258.819L24,28.078A1,1,0,0,1,22.55,29.1l-7.087-3.693a1,1,0,0,0-.924,0L7.45,29.1A1,1,0,0,1,6,28.078l1.17-8.37a1,1,0,0,0-.258-.819L1.249,12.8a1,1,0,0,1,.556-1.665L9.7,9.725a1,1,0,0,0,.719-.539Z" transform="translate(1750 2356)" fill="#ffd21c" />
                                <path id="Polygon_18" data-name="Polygon 18" d="M14.1,1.8a1,1,0,0,1,1.79,0l3.681,7.39a1,1,0,0,0,.719.539l7.9,1.411a1,1,0,0,1,.556,1.665L23.09,18.889a1,1,0,0,0-.258.819L24,28.078A1,1,0,0,1,22.55,29.1l-7.087-3.693a1,1,0,0,0-.924,0L7.45,29.1A1,1,0,0,1,6,28.078l1.17-8.37a1,1,0,0,0-.258-.819L1.249,12.8a1,1,0,0,1,.556-1.665L9.7,9.725a1,1,0,0,0,.719-.539Z" transform="translate(1788 2356)" fill="#ffd21c" />
                            </g>
                        </svg>

                    </div>
                </div>
                <div class="comment d-flex">
                    <div class="col-2 d-none d-xl-flex">

                    </div>
                    <div class="col-xl-10  col-12">
                        <p>98% easy paved trail with 2% fun summit. Very do-able for athletes with 0 hiking experience. 5 Star accommodation, offering great food and a good night sleep.
                        </p>
                        <div class="img-wrap2 d-flex flex-wrap">
                            <img src="./images/爬玉山素材_210727_3.jpg" alt="" class="col-xl-3 col-6 pl-0 pr-0">
                            <img src="./images/com_yu05.jpg" alt="" class="col-xl-3 col-6  pl-0 pr-0">
                            <img src="./images/com_yu06.jpg" alt="" class="col-xl-3 d-xl-flex d-none   pl-0 pr-0">
                            <img src="./images/com_yu07.jpg" alt="" class="col-xl-3 d-xl-flex d-none   pl-0 pr-0">

                        </div>

                    </div>
                </div>
                <div class="user_detail d-flex">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="170" height="170" viewBox="0 0 170 170" class="col-xl-2 col-5">
                        <defs>
                            <clipPath id="clip-path">
                                <path id="Union_32" data-name="Union 32" d="M0,480.6V464.778c0-17.411,28.485-31.654,63.3-31.654s63.3,14.242,63.3,31.654V480.6Zm31.647-94.947A31.65,31.65,0,1,1,63.3,417.3,31.653,31.653,0,0,1,31.647,385.654Z" transform="translate(219.699 -81.601)" fill="#6cb6cb" />
                            </clipPath>
                        </defs>
                        <g id="Group_1062" data-name="Group 1062" transform="translate(-603 -1111)">
                            <g id="Circle" transform="translate(13 861)" opacity="0.2">
                                <circle id="Ellipse_106" data-name="Ellipse 106" cx="85" cy="85" r="85" transform="translate(590 250)" fill="#ade8f4" />
                                <text id="大頭照" transform="translate(675 338.999)" fill="#ade8f4" font-size="14" font-family="SourceHanSansTW-Bold, Source Han Sans TW" font-weight="700">
                                    <tspan x="-21" y="0">大頭照</tspan>
                                </text>
                            </g>
                            <g id="Mask_Group_42" data-name="Mask Group 42" transform="translate(404 882)" clip-path="url(#clip-path)">
                                <g id="Circle-2" data-name="Circle" transform="translate(-391 -21)">
                                    <circle id="Ellipse_106-2" data-name="Ellipse 106" cx="85" cy="85" r="85" transform="translate(590 250)" fill="#6cb6cb" />
                                </g>
                            </g>
                        </g>
                    </svg>

                    <div class="nameandstar col-xl-10 col-7 pt-xl-4">
                        <h3>Hank</h3>
                        <svg xmlns="http://www.w3.org/2000/svg" width="182" height="30" viewBox="0 0 182 30">
                            <g id="Group_1085" data-name="Group 1085" transform="translate(-1674 -2356)">
                                <path id="Polygon_14" data-name="Polygon 14" d="M14.1,1.8a1,1,0,0,1,1.79,0l3.681,7.39a1,1,0,0,0,.719.539l7.9,1.411a1,1,0,0,1,.556,1.665L23.09,18.889a1,1,0,0,0-.258.819L24,28.078A1,1,0,0,1,22.55,29.1l-7.087-3.693a1,1,0,0,0-.924,0L7.45,29.1A1,1,0,0,1,6,28.078l1.17-8.37a1,1,0,0,0-.258-.819L1.249,12.8a1,1,0,0,1,.556-1.665L9.7,9.725a1,1,0,0,0,.719-.539Z" transform="translate(1826 2356)" fill="#d9d9d9" />
                                <path id="Polygon_15" data-name="Polygon 15" d="M14.1,1.8a1,1,0,0,1,1.79,0l3.681,7.39a1,1,0,0,0,.719.539l7.9,1.411a1,1,0,0,1,.556,1.665L23.09,18.889a1,1,0,0,0-.258.819L24,28.078A1,1,0,0,1,22.55,29.1l-7.087-3.693a1,1,0,0,0-.924,0L7.45,29.1A1,1,0,0,1,6,28.078l1.17-8.37a1,1,0,0,0-.258-.819L1.249,12.8a1,1,0,0,1,.556-1.665L9.7,9.725a1,1,0,0,0,.719-.539Z" transform="translate(1674 2356)" fill="#ffd21c" />
                                <path id="Polygon_16" data-name="Polygon 16" d="M14.1,1.8a1,1,0,0,1,1.79,0l3.681,7.39a1,1,0,0,0,.719.539l7.9,1.411a1,1,0,0,1,.556,1.665L23.09,18.889a1,1,0,0,0-.258.819L24,28.078A1,1,0,0,1,22.55,29.1l-7.087-3.693a1,1,0,0,0-.924,0L7.45,29.1A1,1,0,0,1,6,28.078l1.17-8.37a1,1,0,0,0-.258-.819L1.249,12.8a1,1,0,0,1,.556-1.665L9.7,9.725a1,1,0,0,0,.719-.539Z" transform="translate(1712 2356)" fill="#ffd21c" />
                                <path id="Polygon_17" data-name="Polygon 17" d="M14.1,1.8a1,1,0,0,1,1.79,0l3.681,7.39a1,1,0,0,0,.719.539l7.9,1.411a1,1,0,0,1,.556,1.665L23.09,18.889a1,1,0,0,0-.258.819L24,28.078A1,1,0,0,1,22.55,29.1l-7.087-3.693a1,1,0,0,0-.924,0L7.45,29.1A1,1,0,0,1,6,28.078l1.17-8.37a1,1,0,0,0-.258-.819L1.249,12.8a1,1,0,0,1,.556-1.665L9.7,9.725a1,1,0,0,0,.719-.539Z" transform="translate(1750 2356)" fill="#ffd21c" />
                                <path id="Polygon_18" data-name="Polygon 18" d="M14.1,1.8a1,1,0,0,1,1.79,0l3.681,7.39a1,1,0,0,0,.719.539l7.9,1.411a1,1,0,0,1,.556,1.665L23.09,18.889a1,1,0,0,0-.258.819L24,28.078A1,1,0,0,1,22.55,29.1l-7.087-3.693a1,1,0,0,0-.924,0L7.45,29.1A1,1,0,0,1,6,28.078l1.17-8.37a1,1,0,0,0-.258-.819L1.249,12.8a1,1,0,0,1,.556-1.665L9.7,9.725a1,1,0,0,0,.719-.539Z" transform="translate(1788 2356)" fill="#ffd21c" />
                            </g>
                        </svg>

                    </div>
                </div>
                <div class="comment d-flex">
                    <div class="col-2 d-none d-xl-flex">

                    </div>
                    <div class="col-xl-10  col-12">
                        <p>唯有通過風口那一段比較危險，抓緊鎖鏈貼壁前進，其餘沒什麼大問題。


                        </p>

                        <div class="img-wrap2 d-flex flex-wrap">
                            <img src="./images/com_yu08.jpg" alt="" class="col-xl-3 col-6 pl-0 pr-0">
                            <img src="./images/com_yu09.jpg" alt="" class="col-xl-3 col-6  pl-0 pr-0">
                            <img src="./images/com_yu10.jpg" alt="" class="col-xl-3 d-xl-flex d-none   pl-0 pr-0">
                            <img src="./images/com_yu11.jpg" alt="" class="col-xl-3 d-xl-flex d-none   pl-0 pr-0">

                        </div>

                    </div>
                </div>
                <div class="user_detail d-flex">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="170" height="170" viewBox="0 0 170 170" class="col-xl-2 col-5">
                        <defs>
                            <clipPath id="clip-path">
                                <path id="Union_32" data-name="Union 32" d="M0,480.6V464.778c0-17.411,28.485-31.654,63.3-31.654s63.3,14.242,63.3,31.654V480.6Zm31.647-94.947A31.65,31.65,0,1,1,63.3,417.3,31.653,31.653,0,0,1,31.647,385.654Z" transform="translate(219.699 -81.601)" fill="#6cb6cb" />
                            </clipPath>
                        </defs>
                        <g id="Group_1062" data-name="Group 1062" transform="translate(-603 -1111)">
                            <g id="Circle" transform="translate(13 861)" opacity="0.2">
                                <circle id="Ellipse_106" data-name="Ellipse 106" cx="85" cy="85" r="85" transform="translate(590 250)" fill="#ade8f4" />
                                <text id="大頭照" transform="translate(675 338.999)" fill="#ade8f4" font-size="14" font-family="SourceHanSansTW-Bold, Source Han Sans TW" font-weight="700">
                                    <tspan x="-21" y="0">大頭照</tspan>
                                </text>
                            </g>
                            <g id="Mask_Group_42" data-name="Mask Group 42" transform="translate(404 882)" clip-path="url(#clip-path)">
                                <g id="Circle-2" data-name="Circle" transform="translate(-391 -21)">
                                    <circle id="Ellipse_106-2" data-name="Ellipse 106" cx="85" cy="85" r="85" transform="translate(590 250)" fill="#6cb6cb" />
                                </g>
                            </g>
                        </g>
                    </svg>

                    <div class="nameandstar col-xl-10 col-7 pt-xl-4">
                        <h3>柳丁</h3>
                        <svg xmlns="http://www.w3.org/2000/svg" width="182" height="30" viewBox="0 0 182 30">
                            <g id="Group_1085" data-name="Group 1085" transform="translate(-1674 -2356)">
                                <path id="Polygon_14" data-name="Polygon 14" d="M14.1,1.8a1,1,0,0,1,1.79,0l3.681,7.39a1,1,0,0,0,.719.539l7.9,1.411a1,1,0,0,1,.556,1.665L23.09,18.889a1,1,0,0,0-.258.819L24,28.078A1,1,0,0,1,22.55,29.1l-7.087-3.693a1,1,0,0,0-.924,0L7.45,29.1A1,1,0,0,1,6,28.078l1.17-8.37a1,1,0,0,0-.258-.819L1.249,12.8a1,1,0,0,1,.556-1.665L9.7,9.725a1,1,0,0,0,.719-.539Z" transform="translate(1826 2356)" fill="#d9d9d9" />
                                <path id="Polygon_15" data-name="Polygon 15" d="M14.1,1.8a1,1,0,0,1,1.79,0l3.681,7.39a1,1,0,0,0,.719.539l7.9,1.411a1,1,0,0,1,.556,1.665L23.09,18.889a1,1,0,0,0-.258.819L24,28.078A1,1,0,0,1,22.55,29.1l-7.087-3.693a1,1,0,0,0-.924,0L7.45,29.1A1,1,0,0,1,6,28.078l1.17-8.37a1,1,0,0,0-.258-.819L1.249,12.8a1,1,0,0,1,.556-1.665L9.7,9.725a1,1,0,0,0,.719-.539Z" transform="translate(1674 2356)" fill="#ffd21c" />
                                <path id="Polygon_16" data-name="Polygon 16" d="M14.1,1.8a1,1,0,0,1,1.79,0l3.681,7.39a1,1,0,0,0,.719.539l7.9,1.411a1,1,0,0,1,.556,1.665L23.09,18.889a1,1,0,0,0-.258.819L24,28.078A1,1,0,0,1,22.55,29.1l-7.087-3.693a1,1,0,0,0-.924,0L7.45,29.1A1,1,0,0,1,6,28.078l1.17-8.37a1,1,0,0,0-.258-.819L1.249,12.8a1,1,0,0,1,.556-1.665L9.7,9.725a1,1,0,0,0,.719-.539Z" transform="translate(1712 2356)" fill="#ffd21c" />
                                <path id="Polygon_17" data-name="Polygon 17" d="M14.1,1.8a1,1,0,0,1,1.79,0l3.681,7.39a1,1,0,0,0,.719.539l7.9,1.411a1,1,0,0,1,.556,1.665L23.09,18.889a1,1,0,0,0-.258.819L24,28.078A1,1,0,0,1,22.55,29.1l-7.087-3.693a1,1,0,0,0-.924,0L7.45,29.1A1,1,0,0,1,6,28.078l1.17-8.37a1,1,0,0,0-.258-.819L1.249,12.8a1,1,0,0,1,.556-1.665L9.7,9.725a1,1,0,0,0,.719-.539Z" transform="translate(1750 2356)" fill="#ffd21c" />
                                <path id="Polygon_18" data-name="Polygon 18" d="M14.1,1.8a1,1,0,0,1,1.79,0l3.681,7.39a1,1,0,0,0,.719.539l7.9,1.411a1,1,0,0,1,.556,1.665L23.09,18.889a1,1,0,0,0-.258.819L24,28.078A1,1,0,0,1,22.55,29.1l-7.087-3.693a1,1,0,0,0-.924,0L7.45,29.1A1,1,0,0,1,6,28.078l1.17-8.37a1,1,0,0,0-.258-.819L1.249,12.8a1,1,0,0,1,.556-1.665L9.7,9.725a1,1,0,0,0,.719-.539Z" transform="translate(1788 2356)" fill="#ffd21c" />
                            </g>
                        </svg>

                    </div>
                </div>
                <div class="comment d-flex">
                    <div class="col-2 d-none d-xl-flex">

                    </div>
                    <div class="col-xl-10  col-12">
                        <p>登山客必爬之山吧! 作為沒啥經驗的菜鳥，爬這個真的覺得很累，還要負重。所以建議新手一定要訓練再來爬，不然很痛苦。但就是個成就達成，很棒的回憶
                        </p>
                        <div class="img-wrap2 d-flex flex-wrap">
                            <img src="./images/com_yu12.jpg" alt="" class="col-xl-3 col-6 pl-0 pr-0">
                            <img src="./images/com_yu13.jpg" alt="" class="col-xl-3 col-6  pl-0 pr-0">
                            <img src="./images/com_yu14.jpg" alt="" class="col-xl-3 d-xl-flex d-none   pl-0 pr-0">
                            <img src="./images/com_yu15.jpg" alt="" class="col-xl-3 d-xl-flex d-none   pl-0 pr-0">

                        </div>

                    </div>
                </div>

            </div>


        </div>
        <div class="row  d-xl-block d-xl-flex pt-xl-5 d-none">
            <div class="col-2">
                <h1>向您推薦</h1>
                <hr>
            </div>
            <div id="carouselExampleControls_1" class="carousel slide col-10 col-xl-10" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class=" card-group   ">
                            <div class="card  col-5 col-3 ">
                                <div class="card-top" style="position:relative;">
                                    <a class="liked" href="#"><svg style="position:absolute; right: 2px; top: 2%;" xmlns="http://www.w3.org/2000/svg" width="30.37" height="26.114" viewBox="0 0 30.37 26.114">
                                            <g id="Group_875" data-name="Group 875" transform="translate(1 1)">
                                                <g id="Heart" transform="translate(0 0)">
                                                    <path id="Heart-2" data-name="Heart" d="M26.127,2.209a7.829,7.829,0,0,0-10.85,0L14.21,3.237,13.143,2.209a7.829,7.829,0,0,0-10.85,0,7.154,7.154,0,0,0,0,10.451L14.21,24.139,26.127,12.66a7.154,7.154,0,0,0,0-10.451" transform="translate(-0.025 -0.025)" fill="none" stroke="#d7d8d4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill-rule="evenodd" />
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                    <img src="./images/c1.jpg" class="card-img-top" alt="..." style=" height: 290px; object-fit: cover;">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">台灣極點趣‧征服台灣五極走訪新台灣八景‧尋訪美食七日</h5>
                                    <p><i class="fas fa-map-marker-alt"></i>&nbsp; Taipei,Taiwan</p>
                                    <span class="card-text" style="position: relative;"><img src="./SVG/stars.svg" alt="" style="height: 30px; width: 182px;"></span>
                                    <span class="card-text" style="position: absolute; top: 400px; left: 210px;">TWD
                                        <span style="color: #FF9F1C; font-weight: bold; font-size: 20px;">1,800</span></span>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-top" style="position:relative;">
                                    <a class="liked" href="#"><svg style="position:absolute; right: 2px; top: 2%;" xmlns="http://www.w3.org/2000/svg" width="30.37" height="26.114" viewBox="0 0 30.37 26.114">
                                            <g id="Group_875" data-name="Group 875" transform="translate(1 1)">
                                                <g id="Heart" transform="translate(0 0)">
                                                    <path id="Heart-2" data-name="Heart" d="M26.127,2.209a7.829,7.829,0,0,0-10.85,0L14.21,3.237,13.143,2.209a7.829,7.829,0,0,0-10.85,0,7.154,7.154,0,0,0,0,10.451L14.21,24.139,26.127,12.66a7.154,7.154,0,0,0,0-10.451" transform="translate(-0.025 -0.025)" fill="none" stroke="#d7d8d4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill-rule="evenodd" />
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                    <img src="./images/c7.png" class="card-img-top" alt="..." style=" height: 290px; object-fit: cover;">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">台灣極點趣‧征服台灣五極走訪新台灣八景‧尋訪美食七日</h5>
                                    <p><i class="fas fa-map-marker-alt"></i>&nbsp; Taipei,Taiwan</p>
                                    <span class="card-text" style="position: relative;"><img src="./SVG/stars.svg" alt="" style="height: 30px; width: 182px;"></span>
                                    <span class="card-text" style="position: absolute; top: 400px; left: 210px;">TWD
                                        <span style="color: #FF9F1C; font-weight: bold; font-size: 20px;">1,800</span></span>
                                </div>
                            </div>
                            <div class="card  ">
                                <div class="card-top" style="position:relative;">
                                    <a class="liked" href="#"><svg style="position:absolute; right: 2px; top: 2%;" xmlns="http://www.w3.org/2000/svg" width="30.37" height="26.114" viewBox="0 0 30.37 26.114">
                                            <g id="Group_875" data-name="Group 875" transform="translate(1 1)">
                                                <g id="Heart" transform="translate(0 0)">
                                                    <path id="Heart-2" data-name="Heart" d="M26.127,2.209a7.829,7.829,0,0,0-10.85,0L14.21,3.237,13.143,2.209a7.829,7.829,0,0,0-10.85,0,7.154,7.154,0,0,0,0,10.451L14.21,24.139,26.127,12.66a7.154,7.154,0,0,0,0-10.451" transform="translate(-0.025 -0.025)" fill="none" stroke="#d7d8d4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill-rule="evenodd" />
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                    <img src="./images/Cijin2.png" class="card-img-top" alt="..." style=" height: 290px; object-fit: cover;">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">台灣極點趣‧征服台灣五極走訪新台灣八景‧尋訪美食七日</h5>
                                    <p><i class="fas fa-map-marker-alt"></i>&nbsp; Taipei,Taiwan</p>
                                    <span class="card-text" style="position: relative;"><img src="./SVG/stars.svg" alt="" style="height: 30px; width: 182px;"></span>
                                    <span class="card-text" style="position: absolute; top: 400px; left: 210px;">TWD
                                        <span style="color: #FF9F1C; font-weight: bold; font-size: 20px;">1,800</span></span>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-top" style="position:relative;">
                                    <a class="liked" href="#"><svg style="position:absolute; right: 2px; top: 2%;" xmlns="http://www.w3.org/2000/svg" width="30.37" height="26.114" viewBox="0 0 30.37 26.114">
                                            <g id="Group_875" data-name="Group 875" transform="translate(1 1)">
                                                <g id="Heart" transform="translate(0 0)">
                                                    <path id="Heart-2" data-name="Heart" d="M26.127,2.209a7.829,7.829,0,0,0-10.85,0L14.21,3.237,13.143,2.209a7.829,7.829,0,0,0-10.85,0,7.154,7.154,0,0,0,0,10.451L14.21,24.139,26.127,12.66a7.154,7.154,0,0,0,0-10.451" transform="translate(-0.025 -0.025)" fill="none" stroke="#d7d8d4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill-rule="evenodd" />
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                    <img src="./images/east-1.jpeg" class="card-img-top" alt="..." style=" height: 290px; object-fit: cover;">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">台灣極點趣‧征服台灣五極走訪新台灣八景‧尋訪美食七日</h5>
                                    <p><i class="fas fa-map-marker-alt"></i>&nbsp; Taipei,Taiwan</p>
                                    <span class="card-text" style="position: relative;"><img src="./SVG/stars.svg" alt="" style="height: 30px; width: 182px;"></span>
                                    <span class="card-text" style="position: absolute; top: 400px; left: 210px;">TWD
                                        <span style="color: #FF9F1C; font-weight: bold; font-size: 20px;">1,800</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card-group  ">
                            <div class="card ">
                                <div class="card-top" style="position:relative;">
                                    <a class="liked" href="#"><svg style="position:absolute; right: 2px; top: 2%;" xmlns="http://www.w3.org/2000/svg" width="30.37" height="26.114" viewBox="0 0 30.37 26.114">
                                            <g id="Group_875" data-name="Group 875" transform="translate(1 1)">
                                                <g id="Heart" transform="translate(0 0)">
                                                    <path id="Heart-2" data-name="Heart" d="M26.127,2.209a7.829,7.829,0,0,0-10.85,0L14.21,3.237,13.143,2.209a7.829,7.829,0,0,0-10.85,0,7.154,7.154,0,0,0,0,10.451L14.21,24.139,26.127,12.66a7.154,7.154,0,0,0,0-10.451" transform="translate(-0.025 -0.025)" fill="none" stroke="#d7d8d4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill-rule="evenodd" />
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                    <img src="./images/east-15.jpeg" class="card-img-top" alt="..." style=" height: 290px; object-fit: cover;">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">台灣極點趣‧征服台灣五極走訪新台灣八景‧尋訪美食七日</h5>
                                    <p><i class="fas fa-map-marker-alt"></i>&nbsp; Taipei,Taiwan</p>
                                    <span class="card-text" style="position: relative;"><img src="./SVG/stars.svg" alt="" style="height: 30px; width: 182px;"></span>
                                    <span class="card-text" style="position: absolute; top: 400px; left: 210px;">TWD
                                        <span style="color: #FF9F1C; font-weight: bold; font-size: 20px;">1,800</span></span>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-top" style="position:relative;">
                                    <a class="liked" href="#"><svg style="position:absolute; right: 2px; top: 2%;" xmlns="http://www.w3.org/2000/svg" width="30.37" height="26.114" viewBox="0 0 30.37 26.114">
                                            <g id="Group_875" data-name="Group 875" transform="translate(1 1)">
                                                <g id="Heart" transform="translate(0 0)">
                                                    <path id="Heart-2" data-name="Heart" d="M26.127,2.209a7.829,7.829,0,0,0-10.85,0L14.21,3.237,13.143,2.209a7.829,7.829,0,0,0-10.85,0,7.154,7.154,0,0,0,0,10.451L14.21,24.139,26.127,12.66a7.154,7.154,0,0,0,0-10.451" transform="translate(-0.025 -0.025)" fill="none" stroke="#d7d8d4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill-rule="evenodd" />
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                    <img src="./images/east-23.jpeg" class="card-img-top" alt="..." style=" height: 290px; object-fit: cover;">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">台灣極點趣‧征服台灣五極走訪新台灣八景‧尋訪美食七日</h5>
                                    <p><i class="fas fa-map-marker-alt"></i>&nbsp; Taipei,Taiwan</p>
                                    <span class="card-text" style="position: relative;"><img src="./SVG/stars.svg" alt="" style="height: 30px; width: 182px;"></span>
                                    <span class="card-text" style="position: absolute; top: 400px; left: 210px;">TWD
                                        <span style="color: #FF9F1C; font-weight: bold; font-size: 20px;">1,800</span></span>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-top" style="position:relative;">
                                    <a class="liked" href="#"><svg style="position:absolute; right: 2px; top: 2%;" xmlns="http://www.w3.org/2000/svg" width="30.37" height="26.114" viewBox="0 0 30.37 26.114">
                                            <g id="Group_875" data-name="Group 875" transform="translate(1 1)">
                                                <g id="Heart" transform="translate(0 0)">
                                                    <path id="Heart-2" data-name="Heart" d="M26.127,2.209a7.829,7.829,0,0,0-10.85,0L14.21,3.237,13.143,2.209a7.829,7.829,0,0,0-10.85,0,7.154,7.154,0,0,0,0,10.451L14.21,24.139,26.127,12.66a7.154,7.154,0,0,0,0-10.451" transform="translate(-0.025 -0.025)" fill="none" stroke="#d7d8d4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill-rule="evenodd" />
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                    <img src="./images/n10.jpg" class="card-img-top" alt="..." style=" height: 290px; object-fit: cover;">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">台灣極點趣‧征服台灣五極走訪新台灣八景‧尋訪美食七日</h5>
                                    <p><i class="fas fa-map-marker-alt"></i>&nbsp; Taipei,Taiwan</p>
                                    <span class="card-text" style="position: relative;"><img src="./SVG/stars.svg" alt="" style="height: 30px; width: 182px;"></span>
                                    <span class="card-text" style="position: absolute; top: 400px; left: 210px;">TWD
                                        <span style="color: #FF9F1C; font-weight: bold; font-size: 20px;">1,800</span></span>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-top" style="position:relative;">
                                    <a class="liked" href="#"><svg style="position:absolute; right: 2px; top: 2%;" xmlns="http://www.w3.org/2000/svg" width="30.37" height="26.114" viewBox="0 0 30.37 26.114">
                                            <g id="Group_875" data-name="Group 875" transform="translate(1 1)">
                                                <g id="Heart" transform="translate(0 0)">
                                                    <path id="Heart-2" data-name="Heart" d="M26.127,2.209a7.829,7.829,0,0,0-10.85,0L14.21,3.237,13.143,2.209a7.829,7.829,0,0,0-10.85,0,7.154,7.154,0,0,0,0,10.451L14.21,24.139,26.127,12.66a7.154,7.154,0,0,0,0-10.451" transform="translate(-0.025 -0.025)" fill="none" stroke="#d7d8d4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill-rule="evenodd" />
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                    <img src="./images/n1-1.jpg" class="card-img-top" alt="..." style=" height: 290px; object-fit: cover;">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">台灣極點趣‧征服台灣五極走訪新台灣八景‧尋訪美食七日</h5>
                                    <p><i class="fas fa-map-marker-alt"></i>&nbsp; Taipei,Taiwan</p>
                                    <span class="card-text" style="position: relative;"><img src="./SVG/stars.svg" alt="" style="height: 30px; width: 182px;"></span>
                                    <span class="card-text" style="position: absolute; top: 400px; left: 210px;">TWD
                                        <span style="color: #FF9F1C; font-weight: bold; font-size: 20px;">1,800</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls_1" data-bs-slide="prev" style="position: absolute;
        top: 150px;
        left:0px;
        background-color: #B1D660;
        height: 90px;
        width: 50px;">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls_1" data-bs-slide="next" style="position: absolute;
        top: 150px;
        right: 0;
        background-color: #B1D660;
        right: 20px;
        height: 90px;
        width: 50px;">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>

                </button>
            </div>
        </div>

        <!-- 推薦行程 RWD-->
        <div class="row d-xl-none d-flex mt-3">
            <div class="col-2">
                <div style="width: 50px; border-bottom: 3px solid #000000; padding-right: 0px;">
                    <h1 style="color: #000000; font-size: 24px">向您推薦</h1>
                </div>
            </div>
            <div id="carouselExampleControls_1" class=" col-10 d-flex flex-wrap carousel slide  " data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class=" card-group col-12 " style="flex-direction:unset">
                            <div class="card col-6 ">
                                <div class="card-top" style="position:relative;">
                                    <a class="liked" href="#"><svg style="position:absolute; right: 2px; top: 2%;" xmlns="http://www.w3.org/2000/svg" width="30.37" height="26.114" viewBox="0 0 30.37 26.114">
                                            <g id="Group_875" data-name="Group 875" transform="translate(1 1)">
                                                <g id="Heart" transform="translate(0 0)">
                                                    <path id="Heart-2" data-name="Heart" d="M26.127,2.209a7.829,7.829,0,0,0-10.85,0L14.21,3.237,13.143,2.209a7.829,7.829,0,0,0-10.85,0,7.154,7.154,0,0,0,0,10.451L14.21,24.139,26.127,12.66a7.154,7.154,0,0,0,0-10.451" transform="translate(-0.025 -0.025)" fill="none" stroke="#d7d8d4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill-rule="evenodd" />
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                    <img src="./images/east-25.jpeg" class="card-img-top" alt="..." style=" height: 160px; object-fit: cover;">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">台灣極點趣‧尋訪美食七日</h5>
                                    <div class="sm_text" style="font-size: 3px;"><i class="fas fa-map-marker-alt"></i>&nbsp; Taipei,Taiwan</div>
                                    <span class="card-text" style="position: relative;"><img src="./SVG/stars.svg" alt="" style="height: 30px; width: 100px;"></span>
                                    <span class="card-text" style="position: absolute; top: 240px; left: 20px;">TWD
                                        <span style="color: #FF9F1C; font-weight: bold; font-size: 20px;">1,800</span></span>
                                </div>
                            </div>
                            <div class="card  col-6 ">
                                <div class="card-top" style="position:relative;">
                                    <a class="liked" href="#"><svg style="position:absolute; right: 2px; top: 2%;" xmlns="http://www.w3.org/2000/svg" width="30.37" height="26.114" viewBox="0 0 30.37 26.114">
                                            <g id="Group_875" data-name="Group 875" transform="translate(1 1)">
                                                <g id="Heart" transform="translate(0 0)">
                                                    <path id="Heart-2" data-name="Heart" d="M26.127,2.209a7.829,7.829,0,0,0-10.85,0L14.21,3.237,13.143,2.209a7.829,7.829,0,0,0-10.85,0,7.154,7.154,0,0,0,0,10.451L14.21,24.139,26.127,12.66a7.154,7.154,0,0,0,0-10.451" transform="translate(-0.025 -0.025)" fill="none" stroke="#d7d8d4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill-rule="evenodd" />
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                    <img src="./images/n19.jpg" class="card-img-top" alt="..." style=" height: 160px; object-fit: cover;">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">台灣極點趣‧尋訪美食七日</h5>
                                    <div class="sm_text" style="font-size: 3px;"><i class="fas fa-map-marker-alt"></i>&nbsp; Taipei,Taiwan</div>
                                    <span class="card-text" style="position: relative;"><img src="./SVG/stars.svg" alt="" style="height: 30px; width: 100px;"></span>
                                    <span class="card-text" style="position: absolute; top: 240px; left: 20px;">TWD
                                        <span style="color: #FF9F1C; font-weight: bold; font-size: 20px;">1,800</span></span>
                                </div>
                            </div>
                            <div class="card col-6 ">
                                <div class="card-top" style="position:relative;">
                                    <a class="liked" href="#"><svg style="position:absolute; right: 2px; top: 2%;" xmlns="http://www.w3.org/2000/svg" width="30.37" height="26.114" viewBox="0 0 30.37 26.114">
                                            <g id="Group_875" data-name="Group 875" transform="translate(1 1)">
                                                <g id="Heart" transform="translate(0 0)">
                                                    <path id="Heart-2" data-name="Heart" d="M26.127,2.209a7.829,7.829,0,0,0-10.85,0L14.21,3.237,13.143,2.209a7.829,7.829,0,0,0-10.85,0,7.154,7.154,0,0,0,0,10.451L14.21,24.139,26.127,12.66a7.154,7.154,0,0,0,0-10.451" transform="translate(-0.025 -0.025)" fill="none" stroke="#d7d8d4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill-rule="evenodd" />
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                    <img src="./images/c1.jpg" class="card-img-top" alt="..." style=" height: 200px; object-fit: cover;">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">台灣極點趣‧尋訪美食七日</h5>
                                    <div class="sm_text" style="font-size: 3px;"><i class="fas fa-map-marker-alt"></i>&nbsp; Taipei,Taiwan</div>
                                    <span class="card-text" style="position: relative;"><img src="./SVG/stars.svg" alt="" style="height: 30px; width: 100px;"></span>
                                    <span class="card-text" style="position: absolute; top: 300px; left: 90px;">TWD
                                        <span style="color: #FF9F1C; font-weight: bold; font-size: 20px;">1,800</span></span>
                                </div>
                            </div>
                            <div class="card col-6 ">
                                <div class="card-top" style="position:relative;">
                                    <a class="liked" href="#"><svg style="position:absolute; right: 2px; top: 2%;" xmlns="http://www.w3.org/2000/svg" width="30.37" height="26.114" viewBox="0 0 30.37 26.114">
                                            <g id="Group_875" data-name="Group 875" transform="translate(1 1)">
                                                <g id="Heart" transform="translate(0 0)">
                                                    <path id="Heart-2" data-name="Heart" d="M26.127,2.209a7.829,7.829,0,0,0-10.85,0L14.21,3.237,13.143,2.209a7.829,7.829,0,0,0-10.85,0,7.154,7.154,0,0,0,0,10.451L14.21,24.139,26.127,12.66a7.154,7.154,0,0,0,0-10.451" transform="translate(-0.025 -0.025)" fill="none" stroke="#d7d8d4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill-rule="evenodd" />
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                    <img src="./images/c1.jpg" class="card-img-top" alt="..." style=" height: 200px; object-fit: cover;">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">台灣極點趣‧尋訪美食七日</h5>
                                    <div class="sm_text" style="font-size: 3px;"><i class="fas fa-map-marker-alt"></i>&nbsp; Taipei,Taiwan</div>
                                    <span class="card-text" style="position: relative;"><img src="./SVG/stars.svg" alt="" style="height: 30px; width: 100px;"></span>
                                    <span class="card-text" style="position: absolute; top: 300px; left: 90px;">TWD
                                        <span style="color: #FF9F1C; font-weight: bold; font-size: 20px;">1,800</span></span>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls_1" data-bs-slide="prev" style="position: absolute;
                    top: 150px;
                    left:0px;
                    background-color: #B1D660;
                    height: 45px;
                    width: 25px;">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls_1" data-bs-slide="next" style="position: absolute;
                    top: 150px;
                    right: 0;
                    background-color: #B1D660;
                    right: 20px;
                    height: 45px;
                    width: 25px;">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>

                </button>
            </div>

        </div>
        <!-- go to top  -->



        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
        <!-- JQ -->
        <!-- 日期選擇器 -->
        <script>
            $(function() {
                $('input[name="daterange"]').daterangepicker({
                    opens: 'left'
                }, function(start, end, label) {
                    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
                });
            });
            //增加商品數量
            // $('button#btn_plus').click(function(event) {
            //     let input_qty = $('input#qty');
            //     input_qty.val(parseInt(input_qty.val()) + 1);
            //     console.log('QTY', $('#qty').val());
            //     console.log('price', $('.myPrice').text());
            //     $('.total_dollars span').text($('#qty').val() * $('.myPrice').text())
            // });

            //減少商品數量
            // $('button#btn_minus').click(function(event) {
            //     let input_qty = $('input#qty');
            //     if (parseInt(input_qty.val()) - 1 < 1) return false;
            //     input_qty.val(parseInt(input_qty.val()) - 1);
            //     $('.total_dollars span').text($('#qty').val() * $('.myPrice').text())
            // });

            $('a.liked').click(function(event) {
                event.preventDefault();
                console.log('hi');
            });
        </script>
    </div>
    <footer></footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="./JS_WCY/custom2.js"></script>
    <script src="./js/header.js"></script>
</body>

</html>