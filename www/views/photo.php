<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>

    <div class="photo">
        <h4>
            <span>PHOTO</span><span>ALL</span>
            <div class="btn-group">
                <a href="#" class="sp order new-count"><span class="sr-only">최신순</span></a>
                <a href="#" class="sp order favorite-count"><span class="sr-only">인기순</span></a>
            </div>
        </h4>
        <ul class="photo-list">
            <li>
                <a href="#">
                    <div class="img-box">
                        <img src="<?php echo $config["resourcesDir"]; ?>/images/part/photo/photo-1.jpg" alt="">
                    </div>
                    <div class="pre-box">
                        <strong>G-Dragon New Single
                            <span>[미치GO]</span>
                        </strong>
                        <span class="autor">G-DRAGON<span>2013.04.12</span></span>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="img-box">
                        <img src="<?php echo $config["resourcesDir"]; ?>/images/part/photo/photo-2.jpg" alt="">
                    </div>
                    <div class="pre-box">
                        <strong>G-Dragon New Single
                            <span>[미치GO]</span>
                        </strong>
                        <span class="autor">G-DRAGON<span>2013.04.12</span></span>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="img-box">
                        <img src="<?php echo $config["resourcesDir"]; ?>/images/part/photo/photo-3.jpg" alt="">
                    </div>
                    <div class="pre-box">
                        <strong>G-Dragon New Single
                            <span>[미치GO]</span>
                        </strong>
                        <span class="autor">G-DRAGON<span>2013.04.12</span></span>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="img-box">
                        <img src="<?php echo $config["resourcesDir"]; ?>/images/part/photo/photo-4.jpg" alt="">
                    </div>
                    <div class="pre-box">
                        <strong>G-Dragon New Single
                            <span>[미치GO]</span>
                        </strong>
                        <span class="autor">G-DRAGON<span>2013.04.12</span></span>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="img-box">
                        <img src="<?php echo $config["resourcesDir"]; ?>/images/part/photo/photo-5.jpg" alt="">
                    </div>
                    <div class="pre-box">
                        <strong>G-Dragon New Single
                            <span>[미치GO]</span>
                        </strong>
                        <span class="autor">G-DRAGON<span>2013.04.12</span></span>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="img-box">
                        <img src="<?php echo $config["resourcesDir"]; ?>/images/part/photo/photo-6.jpg" alt="">
                    </div>
                    <div class="pre-box">
                        <strong>G-Dragon New Single
                            <span>[미치GO]</span>
                        </strong>
                        <span class="autor">G-DRAGON<span>2013.04.12</span></span>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="img-box">
                        <img src="<?php echo $config["resourcesDir"]; ?>/images/part/photo/photo-7.jpg" alt="">
                    </div>
                    <div class="pre-box">
                        <strong>G-Dragon New Single
                            <span>[미치GO]</span>
                        </strong>
                        <span class="autor">G-DRAGON<span>2013.04.12</span></span>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="img-box">
                        <img src="<?php echo $config["resourcesDir"]; ?>/images/part/photo/photo-8.jpg" alt="">
                    </div>
                    <div class="pre-box">
                        <strong>G-Dragon New Single
                            <span>[미치GO]</span>
                        </strong>
                        <span class="autor">G-DRAGON<span>2013.04.12</span></span>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="img-box">
                        <img src="<?php echo $config["resourcesDir"]; ?>/images/part/photo/photo-9.jpg" alt="">
                    </div>
                    <div class="pre-box">
                        <strong>G-Dragon New Single
                            <span>[미치GO]</span>
                        </strong>
                        <span class="autor">G-DRAGON<span>2013.04.12</span></span>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="img-box">
                        <img src="<?php echo $config["resourcesDir"]; ?>/images/part/photo/photo-10.jpg" alt="">
                    </div>
                    <div class="pre-box">
                        <strong>G-Dragon New Single
                            <span>[미치GO]</span>
                        </strong>
                        <span class="autor">G-DRAGON<span>2013.04.12</span></span>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="img-box">
                        <img src="<?php echo $config["resourcesDir"]; ?>/images/part/photo/photo-11.jpg" alt="">
                    </div>
                    <div class="pre-box">
                        <strong>G-Dragon New Single
                            <span>[미치GO]</span>
                        </strong>
                        <span class="autor">G-DRAGON<span>2013.04.12</span></span>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="img-box">
                        <img src="<?php echo $config["resourcesDir"]; ?>/images/part/photo/photo-12.jpg" alt="">
                    </div>
                    <div class="pre-box">
                        <strong>G-Dragon New Single
                            <span>[미치GO]</span>
                        </strong>
                        <span class="autor">G-DRAGON<span>2013.04.12</span></span>
                    </div>
                </a>
            </li>
        </ul>
    </div>

<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>