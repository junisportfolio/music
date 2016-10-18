<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-index"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
    <div id="visual">
        <ul class="visual-content">
            <li class="active">
                <img src="<?php echo $config["resourcesDir"]; ?>/images/part/main/visual-1.jpg" alt="">
            </li>
            <li>
                <img src="<?php echo $config["resourcesDir"]; ?>/images/part/main/visual-2.jpg" alt="">
            </li>
        </ul>
        <div class="pagination">
            <a href="#"></a>
            <a href="#"></a>
        </div>
        <ul class="pager">
            <li class="visual-prev"><a href="#prev"><span class="sr-only">이전</span></a></li>
            <li class="visual-next"><a href="#next"><span class="sr-only">다음</span></a></li>
        </ul>
    </div>
    <div id="content">
        <div class="content-1">
            <div class="con-1-1">
                <h3>Recommended songs</h3>
                <table>
                    <colgroup>
                        <col width="24px">
                        <col width="24px">
                        <col width="*">
                        <col width="90px">
                        <col width="110px">
                    </colgroup>
                    <caption class="sr-only">Recommended songs play list</caption>
                    <thead>
                    <tr>
                        <th></th>
                        <th>NO</th>
                        <th>SONG TITLE</th>
                        <th>ARTIST</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><input type="checkbox" id="play-list-1"></td>
                        <td><span>1</span></td>
                        <td><label for="play-list-1">Special (Feat. Jennie Kim of YG ...</label></td>
                        <td>LEE HI</td>
                        <td>
                            <a href="#" class="sp music-icon video"><span class="sr-only">비디오</span></a>
                            <a href="#" class="sp music-icon lyrics"><span class="sr-only">음악</span></a>
                            <a href="#" class="sp music-icon favorite"><span class="sr-only">즐겨찾기</span></a>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" id="play-list-2"></td>
                        <td><span>2</span></td>
                        <td><label for="play-list-2">Thank U (고마워)</label></td>
                        <td>SE7EN</td>
                        <td>
                            <span class="sp music-icon video none"><span class="sr-only">비디오</span></span>
                            <span class="sp music-icon lyrics none"><span class="sr-only">비디오</span></span>
                            <span class="sp music-icon favorite none"><span class="sr-only">비디오</span></span>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" id="play-list-3"></td>
                        <td><span>3</span></td>
                        <td><label for="play-list-3">It`s Over</label></td>
                        <td>LEE HI</td>
                        <td>
                            <a href="#" class="sp music-icon video"><span class="sr-only">비디오</span></a>
                            <a href="#" class="sp music-icon lyrics"><span class="sr-only">음악</span></a>
                            <a href="#" class="sp music-icon favorite"><span class="sr-only">즐겨찾기</span></a>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" id="play-list-4"></td>
                        <td><span>4</span></td>
                        <td><label for="play-list-4">1.2.3.4</label></td>
                        <td>LEE HI</td>
                        <td>
                            <a href="#" class="sp music-icon video"><span class="sr-only">비디오</span></a>
                            <a href="#" class="sp music-icon lyrics"><span class="sr-only">음악</span></a>
                            <a href="#" class="sp music-icon favorite"><span class="sr-only">즐겨찾기</span></a>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" id="play-list-5"></td>
                        <td><span>5</span></td>
                        <td><label for="play-list-5">Up</label></td>
                        <td>EPIK HIGH</td>
                        <td>
                            <a href="#" class="sp music-icon video"><span class="sr-only">비디오</span></a>
                            <a href="#" class="sp music-icon lyrics"><span class="sr-only">음악</span></a>
                            <a href="#" class="sp music-icon favorite"><span class="sr-only">즐겨찾기</span></a>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" id="play-list-6"></td>
                        <td><span>6</span></td>
                        <td><label for="play-list-6">EPIK HIGH</label></td>
                        <td>EPIK HIGH</td>
                        <td>
                            <a href="#" class="sp music-icon video"><span class="sr-only">비디오</span></a>
                            <a href="#" class="sp music-icon lyrics"><span class="sr-only">음악</span></a>
                            <a href="#" class="sp music-icon favorite"><span class="sr-only">즐겨찾기</span></a>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" id="play-list-7"></td>
                        <td><span>7</span></td>
                        <td><label for="play-list-7">Don`t Hate Me</label></td>
                        <td>G-DRAGON</td>
                        <td>
                            <a href="#" class="sp music-icon video"><span class="sr-only">비디오</span></a>
                            <a href="#" class="sp music-icon lyrics"><span class="sr-only">음악</span></a>
                            <a href="#" class="sp music-icon favorite"><span class="sr-only">즐겨찾기</span></a>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" id="play-list-8"></td>
                        <td><span>8</span></td>
                        <td><label for="play-list-8">크레용 (Crayon)</label></td>
                        <td>G-DRAGON</td>
                        <td>
                            <a href="#" class="sp music-icon video"><span class="sr-only">비디오</span></a>
                            <a href="#" class="sp music-icon lyrics"><span class="sr-only">음악</span></a>
                            <a href="#" class="sp music-icon favorite"><span class="sr-only">즐겨찾기</span></a>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" id="play-list-9"></td>
                        <td><span>9</span></td>
                        <td><label for="play-list-9">그 XX (That XX)</label></td>
                        <td>G-DRAGON</td>
                        <td>
                            <a href="#" class="sp music-icon video"><span class="sr-only">비디오</span></a>
                            <a href="#" class="sp music-icon lyrics"><span class="sr-only">음악</span></a>
                            <a href="#" class="sp music-icon favorite"><span class="sr-only">즐겨찾기</span></a>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" id="play-list-10"></td>
                        <td><span>10</span></td>
                        <td><label for="play-list-10">One Of A Kind</label></td>
                        <td>PSY</td>
                        <td>
                            <a href="#" class="sp music-icon video"><span class="sr-only">비디오</span></a>
                            <a href="#" class="sp music-icon lyrics"><span class="sr-only">음악</span></a>
                            <a href="#" class="sp music-icon favorite"><span class="sr-only">즐겨찾기</span></a>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <p class="button-assortment">
                    <a href="#" class="btn rectangle gray"><span>선택구매</span></a>
                    <a href="#" class="btn rectangle red"><span>전체구매</span></a>
                </p>
                <div class="type-of-music">
                    <ul>
                        <li><span class="sp music-type ar"></span><span class="explain"> - All Recorded</span>CD에 수록된 음원</li>
                        <li><span class="sp music-type mr"></span><span class="explain"> - Music Recorded</span>보컬을 제외한 반주음악</li>
                        <li><span class="sp music-type acca"></span><span class="explain"> - Acapella</span>무반주로 아티스트의 보이스만</li>
                        <li><span class="sp music-type inst"></span><span class="explain"> - Instrumental</span>보컬과 코러스를 제외한 100% 반주음악</li>
                        <li><span class="sp music-type pkg"></span><span class="explain"> - Package</span>위 4가지의 형식을 모두 포함한 패키지</li>
                    </ul>
                </div>
            </div>
            <div class="con-1-2">
                <h3 class="main-title">ALBUM <span class="small"><span class="sp hanteo"><span class="sr-only">Hanteo chart</span></span>YG MUSIC is a Hanteo Chart Family Shop</span></h3>
                <ul class="album-jacket">
                    <li class="pre-order">
                        <a href="#">
                            <img src="<?php echo $config["resourcesDir"]; ?>/images/part/main/album-psy.jpg" alt="">
                            <div class="cover">
                                <span>
                                    <strong class="name">PSY New Single</strong>
                                    <span class="preview">Gentleman</span>
                                    <span class="autor">PSY<span>2013.03.18</span></span>
                                </span>
                            </div>
                        </a>


                    </li>
                    <li class="hot">
                        <a href="#">
                            <img src="<?php echo $config["resourcesDir"]; ?>/images/part/main/album-2ne1.jpg" alt="">
                            <div class="cover">
                                <span>
                                    <strong class="name">2012 2NE1 GLOBAL</strong>
                                    <span class="preview">TOUR LIVE DVD</span>
                                    <span class="autor">2NE1<span>2013.03.18</span></span>
                                </span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?php echo $config["resourcesDir"]; ?>/images/part/main/album-seven.jpg" alt="">
                            <div class="cover">
                                <span>
                                    <strong class="name">세븐 뉴</strong>
                                    <span class="preview">미니 앨범</span>
                                    <span class="autor">SE7EN<span>2013.03.18</span></span>
                                </span>
                            </div>
                        </a>
                    </li>
                    <li class="new">
                        <a href="#">
                            <img src="<?php echo $config["resourcesDir"]; ?>/images/part/main/album-shine.jpg" alt="">
                            <div class="cover">
                                <span>
                                    <strong class="name">G-Dragon 콘서트</strong>
                                    <span class="preview">라이브앨범 ‘Shine...</span>
                                    <span class="autor">G-Dragon<span>2013.03.18</span></span>
                                </span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="content-2">
            <div class="con-2-1">
                <h3 class="main-title">VIDEO</h3>
                <ul class="list-type-1">
                    <li>
                        <a href="#">
                            <div class="imgbox">
                                <img src="<?php echo $config["resourcesDir"]; ?>/images/part/main/video-thum-1.jpg" alt="">
                            </div>
                            <p>
                                <strong>
                                    LEE HI (이하이) - ROSE
                                    <span class="type">
                                        M/V
                                    </span>
                                </strong>
                                <span class="date">2013.03.18</span>
                            </p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="imgbox">
                                <img src="<?php echo $config["resourcesDir"]; ?>/images/part/main/video-thum-2.jpg" alt="">
                            </div>
                            <p>
                                <strong>
                                    SE7EN - THANK U (고마워)
                                    <span class="type">
                                        M/V
                                    </span>
                                </strong>
                                <span class="date">2013.03.18</span>
                            </p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="imgbox">
                                <img src="<?php echo $config["resourcesDir"]; ?>/images/part/main/video-thum-3.jpg" alt="">
                            </div>
                            <p>
                                <strong>
                                    G-DRAGON - CRAYON
                                    <span class="type">
                                        (크레용)
                                    </span>
                                </strong>
                                <span class="date">2013.03.18</span>
                            </p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="imgbox">
                                <img src="<?php echo $config["resourcesDir"]; ?>/images/part/main/video-thum-4.jpg" alt="">
                            </div>
                            <p>
                                <strong>
                                    LEE HI (이하이) - 1.2.3.4
                                    <span class="type">
                                        M/V
                                    </span>
                                </strong>
                                <span class="date">2013.03.18</span>
                            </p>
                        </a>
                    </li>
                </ul>
                <div class="pagination">
                    <a href="#" class="on"></a>
                    <a href="#"></a>
                    <a href="#"></a>
                </div>
                <a href="#plus" class="sp more"><span class="sr-only">more</span></a>
            </div>
            <div class="con-2-2">
                <h3 class="main-title">PHOTO</h3>
                <ul class="list-type-2">
                    <li>
                        <a href="#">
                            <img src="<?php echo $config["resourcesDir"]; ?>/images/part/main/photo-thum-1.jpg" alt="">
                            <div class="cover">
                                <strong class="album-title">
                                    1st Album
                                    <span>(GD&TOP)</span>
                                    <span class="date">2010.10</span>
                                </strong>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?php echo $config["resourcesDir"]; ?>/images/part/main/photo-thum-2.jpg" alt="">
                            <div class="cover">
                                <strong class="album-title">
                                    1st Album
                                    <span>(GD&TOP)</span>
                                    <span class="date">2010.10</span>
                                </strong>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?php echo $config["resourcesDir"]; ?>/images/part/main/photo-thum-3.jpg" alt="">
                            <div class="cover">
                                <strong class="album-title">
                                    1st Album
                                    <span>(GD&TOP)</span>
                                    <span class="date">2010.10</span>
                                </strong>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?php echo $config["resourcesDir"]; ?>/images/part/main/photo-thum-4.jpg" alt="">
                            <div class="cover">
                                <strong class="album-title">
                                    1st Album
                                    <span>(GD&TOP)</span>
                                    <span class="date">2010.10</span>
                                </strong>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="pagination">
                    <a href="#" class="on"></a>
                    <a href="#"></a>
                    <a href="#"></a>
                </div>
                <a href="#plus" class="sp more"><span class="sr-only">more</span></a>
            </div>
            <div class="con-2-3">
                <h3 class="main-title">NEWS</h3>
                <ul class="list-type-1">
                    <li>
                        <a href="#">
                            <div class="imgbox">
                                <img src="<?php echo $config["resourcesDir"]; ?>/images/part/main/news-thum-1.jpg" alt="">
                            </div>
                            <p>
                                <strong>
                                    ‘젠틀맨’ 싸이, 모바일게임
                                    <span>윈드러너에서 캐릭터로 ...</span>
                                </strong>
                                <span class="date">2013.04.11</span>
                            </p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="imgbox">
                                <img src="<?php echo $config["resourcesDir"]; ?>/images/part/main/news-thum-2.jpg" alt="">
                            </div>
                            <p>
                                <strong>
                                    [스타칼럼-지드래곤 2부]
                                    <span>GD에게 아름다움이란?</span>
                                </strong>
                                <span class="date">2013.04.11</span>
                            </p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="imgbox">
                                <img src="<?php echo $config["resourcesDir"]; ?>/images/part/main/news-thum-3.jpg" alt="">
                            </div>
                            <p>
                                <strong>
                                    구혜선 작사-작곡
                                    <span>'행복했을까' 서인국 새 앨범...</span>
                                </strong>
                                <span class="date">2013.04.11</span>
                            </p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="imgbox">
                                <img src="<?php echo $config["resourcesDir"]; ?>/images/part/main/news-thum-4.jpg" alt="">
                            </div>
                            <p>
                                <strong>
                                    싸이, 12日 0시 신곡 '젠틀맨'
                                    <span>전 세계 119개국 동시 공개!</span>
                                </strong>
                                <span class="date">2013.04.10</span>
                            </p>
                        </a>
                    </li>
                </ul>
                <div class="pagination">
                    <a href="#" class="on"></a>
                    <a href="#"></a>
                    <a href="#"></a>
                </div>
                <a href="#plus" class="sp more"><span class="sr-only">more</span></a>
            </div>
            <div class="con-2-4">
                <h3 class="main-title">NOTICE</h3>
                <ul>
                    <li><a href="#"><strong>[EVENT]빅뱅 베스트 뮤직 비디오 퍼가기 이벤트 당첨자 발표</strong><span class="date">2013.04.15</span></a></li>
                    <li><a href="#"><strong>[EVENT]빅뱅 베스트 뮤직 비디오 퍼가기 이벤트 당첨자 발표</strong><span class="date">2013.04.15</span></a></li>
                    <li><a href="#"><strong>[EVENT]빅뱅 베스트 뮤직 비디오 퍼가기 이벤트 당첨자 발표</strong><span class="date">2013.04.15</span></a></li>
                    <li><a href="#"><strong>[EVENT]빅뱅 베스트 뮤직 비디오 퍼가기 이벤트 당첨자 발표</strong><span class="date">2013.04.15</span></a></li>
                    <li><a href="#"><strong>[EVENT]빅뱅 베스트 뮤직 비디오 퍼가기 이벤트 당첨자 발표</strong><span class="date">2013.04.15</span></a></li>
                    <li><a href="#"><strong>[EVENT]빅뱅 베스트 뮤직 비디오 퍼가기 이벤트 당첨자 발표</strong><span class="date">2013.04.15</span></a></li>
                </ul>
                <div class="notice-pager">
                    <a href="#" class="sp prev-icon prev-notice"><span class="sr-only">이전</span></a></li>
                    <a href="#" class="sp next-icon next-notice"><span class="sr-only">다음</span></a></li>
                </div>
                <a href="#plus" class="sp more"><span class="sr-only">more</span></a>
            </div>
            <div class="con-2-5">
                <h3>
                    <a href="#" class="contact-yg">
                        <span class="sr-only">
                            <strong>CONTACT YG</strong> SUPPORT
                        </span>
                    </a>
                </h3>
            </div>
        </div>
    </div>
    <!-- /#content -->



<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>