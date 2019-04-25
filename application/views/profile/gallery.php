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
                                <a class="btn btn-secondary edit-profile-pic" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="profile-ph" src="<?=base_url()?>assets/img-css/default.png">
                                </a>
                              
                                <div class="dropdown-menu">
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
                        <a class="user-link-prof" href="">&nbsp;<?= $this->session->userdata('username')?></a>
                    </td>
                </tr>
            </table>
        </div>

        <div class="menu-prof">
            <ul class="navigation-prof">
                <li class="element-nav-pr">
                    <a class="link-an-menu" href="<?= base_url(); ?>index.php/Profile/profile/<?= $_SESSION['username'] ?>"><img class="profile-icon" src="<?=base_url()?>assets/img-css/info_profile.svg">Profile</a>
                </li>
                <li class="element-nav-pr link-an-active">
                    <a class="link-an-menu" href="<?= base_url()?>/Profile/gallery"><img class="profile-icon" src="<?=base_url()?>assets/img-css/gallery_icon.png">Gallery</a>
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
                <div class="content-link-container">
                        <a href="#" class="content-link">
                            <div class="content-galls">
                                <img class="img-content" src="img-examples/circle_of_no_by_tsaoshin_d6h8pug.png">
                            </div>
                            <div class="content-link-details">
                                    <h5>Title</h5>
                                    <div class="form-inline">
                                        <img src="img-examples/doraemon.jpg" width="20px" height="20px" class="content-creator-ph"><h6>&nbsp; username1</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                   
            </div>
        </div>

         
    </body>
</html>