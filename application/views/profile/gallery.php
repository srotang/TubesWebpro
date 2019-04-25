<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/watch-styles.css">
    <title>

    </title>
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/profile-dev.css">
</head>

<body>
    <div class="header-profile">
        <table class="userp">
            <tr>
                <!-- Foto Profil Deviants, Username -->
                <td>

                    <div class="dropdown">
                        <a class="btn btn-secondary edit-profile-pic" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="profile-ph" src="<?= base_url()?>/assets/profile/<?= $deviant['fotoProfile']?>">
                        </a>

                        <div class="dropdown-menu">
                        <form method="POST" id="btn-upload" enctype="multipart/form-data" action="<?= base_url()?>/Profile/fotoP"> 
			<input type="hidden" name="action" value="StashPost" id="INPUT_8"/> <a id="A_9"> <span id="SPAN_27">Choose a file to upload</span>
				<input type="file" name="file" id="INPUT_11" /></a>
			<input type="hidden" name="folder_name" value="Saved Submissions" id="INPUT_12" />
			<input type="hidden" name="use_defaults" value="1" id="INPUT_13" />
			
		
		<input type="submit" value="submit"/>
	</div>
		</form>
                        </div>
                    </div>
                </td>
                <td>
                    <a class="user-link-prof" href="">&nbsp;<?= $this->session->userdata('username')?></a>
                </td>
            </tr>
        </table>
    </div>

    <div class="menu-prof">
        <ul class="navigation-prof">
            <li class="element-nav-pr">
                <a class="link-an-menu" href="<?= base_url()?>/Profile/profile/<?= $deviant['username'] ?>"><img
                        class="profile-icon" src="<?= base_url(); ?>assets/img-css/info_profile.svg">Profile</a>
            </li>
            <li class="element-nav-pr link-an-active">
                <a class="link-an-menu" href=""><img class="profile-icon"
                        src="<?= base_url(); ?>assets/img-css/gallery_icon.png">Gallery</a>
            </li>
        </ul>
    </div>
    <div class="the-bord-top"></div>
    <div class="table-example">
        <div class="search-form">
            <form class="form-inline search-form-gall">
                <input class="form-control search-field-gall" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-success search-sub-gall" type="submit">Search</button>
            </form>
        </div>
        <div class="gallery-contents">
            <?php foreach ($contents as $cont) { ?>
            <div class="content-link-container">
                <a href="#" class="content-link">
                    <div class="content-galls">
                        <a href="<?=base_url()?>home/post/<?= $cont['id_contents'] ?>">
                            <img class="img-content" src="<?php echo base_url()?>assets/upload/<?= $cont['content_dir'] ?>">
                        </a>
                    </div>
                    <div class="content-link-details">
                        <h5><?= $cont['content_title']; ?></h5>
                        <div class="form-inline">
                            <img src="<?= base_url(); ?>/assets/profile/<?= $deviant['fotoProfile'] ?>" width="20px"
                                height="20px" class="content-creator-ph">
                            <h6>&nbsp; <?= $deviant['username']; ?></h6>
                        </div>
                    </div>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>


</body>

</html>