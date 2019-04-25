    <head>  
       <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/watch-styles.css">
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/profile-dev.css">
    </head>
    <body>
        <div class="header-profile">
            <table class="userp">
                <tr>
                    <!-- Foto Profil Deviants, Username -->  
                    <td>
                        
                        <div class="dropdown">
                                <a class="btn btn-secondary edit-profile-pic" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="profile-ph" src="<?php echo base_url();?>/assets/profile/<?= $deviant['fotoProfile']; ?>">
                                </a>
                              
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <form class="edit-photo-profile px-4 py-3">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                            <div class="save-ph">
                                                <input type="submit" class="save-edit-ph btn btn-primary" value="Save">
                                            </div>
                                        </form>
                                </div>
                              </div>
                    </td>
                    <td>
                        <a class="user-link-prof" href="#">&nbsp;<?= $deviant['username']; ?></a>
                    </td>
                </tr>
            </table>
        </div>

        <div class="menu-prof">
            <ul class="navigation-prof">
                <li class="element-nav-pr   link-an-active">
                    <a class="link-an-menu" href="<?= base_url()?>/Profile/profile/<?= $deviant['username'] ?>"><img class="profile-icon" src="<?= base_url(); ?>assets/img-css/info_profile.svg">Profile</a>
                </li>
                <li class="element-nav-pr">
                    <a class="link-an-menu" href="<?= base_url()?>/Profile/gallery/<?= $deviant['username'] ?>"><img class="profile-icon" src="<?= base_url(); ?>assets/img-css/gallery_icon.png">Gallery</a>
                </li>
            </ul> 
        </div>
        <div class="the-bord-top"></div>
        <div class="table-example">
            <div class="row">
                <div class="cols">
                        <div class="card pr-element">    
                                <div class="card-header">
                                    Newest Deviations
                                </div>
                                <div class="card-body">
                                    <ul class="newdev-list">
                                        <?php $i=0; ?>
                                        <?php foreach ($contents as $cont) { ?>

                                        <li class="newdev-elements">
                                            <img class="deviations-pr" src="<?php echo base_url();?>assets/upload/<?= $cont['content_dir']; ?>">
                                        </li>
                                            <?php $i++; ?>
                                            <?php if($i > 1) {break;} ?>
                                        <?php } ?>
                                    </ul>
                                    <div class="button-group btn-gr-newdev">
                                        <a href="#" class="btn btn-light newdev-btn nebtn-gall">Browse Gallery</a>
                                        <a href="#" class="btn btn-primary newdev-btn nebtn-submit">Submit art</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card pr-element">    
                                <div class="card-header">
                                    Watchers
                                </div>
                                <div class="card-body">
                                    <ul class="watchers-list">
                                    <?php foreach ($watchers as $wtch){ ?>
                                        <li><a class="watchers" href="<?= base_url(); ?>/index.php/Profile/profile/<?= $wtch ?>"><?php echo $wtch; ?></a></li>
                                    <?php } ?>
                                    </ul>
                                </div>
                            </div>
                </div>
                <div class="cols">
                        <div class="card pr-element devid">
                                <div class="card-header">
                                    deviantID
                                </div>
                                <div class="card-body">
                                    <div class="devid-pic-cont">
                                        <img class="deviant-id-pic" src="<?php echo base_url();?>/assets/profile/<?= $deviant['fotoProfile']; ?>">
                                    </div>
                                    <br>
                                    <a class="card-title" href="#"><?= $deviant['username']; ?></a>
                                </div>
                            </div>
                </div>
            </div>
        </div>        
    </body>