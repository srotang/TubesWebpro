<!doctype html>
<html lang="en">

<head>
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/profile-dev.css">
    <style>
    .container {
        width: 100%;
        margin: 0 auto;
    }

    .sidebar {
        width: 193px;
        height: 700px;
        margin-top:-40px;
        background-color: #DBE3D5;
        float: left;
        box-sizing: border-box;
        border-right: 1px solid #a8baa7;
    }

    .teks {
        margin: 0 0 0 16px;
        padding: 5px 6px;
        font: bold 11px helvetica neue, arial, sans-serif;
        text-transform: uppercase;
        color: #526154;
    }

    .search {
        background-color: #FFFFFF;
        background-position: 0% 0%;
        color: #000000;
        height: 24px;
        width: 153px;
        border: 1px solid #808080;
        margin: 5px 0 0 20px;
        float: left;
        text-shadow: rgb(255, 255, 255) 1px 1px 1px;
        box-shadow: rgba(0, 0, 0, 0.3) -2px 2px 3px 0px inset;
    }

    .list {
        font-family: Verdana, Arial, sans-serif;
        font-size: 11px;
        text-decoration: none solid rgb(255, 255, 255);
        text-align: left;
        word-spacing: 0px;
        background-position: 0% 0%;
        margin: 0 0 0 -22px;
        transition: all 0s ease 0s;
        display: block;
        padding: 4px 5px;
        /* height: 30px; */
    }

    .list a {
        color: #337287;
        border-radius: 3px;
        position: relative;
        height: 130px;
    }
    </style>
</head>

<body>
    <div class="sidebar">
        <div class="teks">SORT</div>
        <div class="list">
            <ul style="list-style:none;">
                <li><a href="#">Popular 24 hours</a></li>
                <li><a href="">What's Hot</a></li>
                <li><a href="">What's Hot</a></li>
            </ul>
        </div>
        <div class="teks">SEARCH</div>
        <form class="">
            <input class="search" type="search">
        </form>
        <div class="categorie" style="margin: 45px 0 0 0;">
            <div class="teks">CATEGORIES</div>
            <div class="list">
                <ul style="list-style:none;">
                    <li><a href="">Digital Art</a></li>
                    <li><a href="">Traditional Art</a></li>
                    <li><a href="">Photography</a></li>
                    <li><a href="">Literature</a></li>
                    <li><a href="">Film Animation</a></li>
                    <li><a href="">Motion Books</a></li>
                    <li><a href="">Flash</a></li>
                    <li><a href="">Designs Interfaces</a></li>
                    <li><a href="">Customization</a></li>
                    <li><a href="">Manga Anime</a></li>
                    <li><a href="">Anthro</a></li>
                    <li><a href="">Fan Art</a></li>
                    <li><a href="">Resources Stock Images</a></li>
                    <li><a href="">Community Projects</a></li>
                    <li><a href="">Contests</a></li>
                    <li><a href="">Journals</a></li>
                    <li><a href="">DeviantArt Related</a></li>
                    <li><a href="">Scrapsyp</a></li>
                </ul>
            </div>
        </div>
    </div>
            <?php foreach ($contents as $cont) { ?>
                <div class="content-link-container">
                    <a href="#" class="content-link">
                        <div class="content-galls">
                            <a href="<?=base_url()?>home/post/<?= $cont['id_contents'] ?>"> 
                            <img class="img-content" src="<?php base_url()?>assets/upload/<?= $cont['content_dir'] ?>">
                            </a>
                        </div>
                        <div class="content-link-details">
                                <h5><?= $cont['content_title']; ?></h5>
                                <div class="form-inline">
                                    <img src="<?= base_url(); ?>/assets/profile/<?= $cont['fotoProfile'] ?>" width="20px" height="20px" class="content-creator-ph"><h6>&nbsp; <?= $cont['username']; ?></h6>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
    </div>
</body>
</html>