    <head>
       <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/watch-styles.css">
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/profile-dev.css">
    </head>
    <body>
        <?php echo "<script>console.log('my Stuff')</script>" ?>
        <div class="header-profile">
            <table class="userp">
                <tr>
                    <!-- Foto Profil Deviants, Username -->  
                    <td>
                        
                        <div class="dropdown">
                                <a class="btn btn-secondary edit-profile-pic" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="profile-ph" src="img-examples/maxresdefault.jpg">
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
                        <a class="user-link-prof" href="#"><?= $deviant['username']; ?></a>
                    </td>
                </tr>
            </table>
        </div>

        <div class="menu-prof">
            <ul class="navigation-prof">
                <li class="element-nav-pr   link-an-active">
                    <a class="link-an-menu" href=""><img class="profile-icon" src="css/img-css/info_profile.svg">Profile</a>
                </li>
                <li class="element-nav-pr">
                    <a class="link-an-menu" href="<?= base_url()?>/Profile/gallery"><img class="profile-icon" src="css/img-css/gallery_icon.png">Gallery</a>
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
                                        <li class="newdev-elements">
                                            <img class="deviations-pr" src="img-examples/back_to_back_against_the_world_by_ioruko_dd49f62.png">
                                        </li>
                                        <li class="newdev-elements">
                                            <img class="deviations-pr" src="img-examples/circle_of_no_by_tsaoshin_d6h8pug.png">
                                        </li>
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
                                        <li><a class="watchers" href="#">username1</a></li>
                                        <li><a class="watchers" href="#">username2</a></li>
                                        <li><a class="watchers" href="#">username3</a></li>
                                        <li><a class="watchers" href="#">username4</a></li>
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
                                        <img class="deviant-id-pic" src="img-examples/maxresdefault.jpg">
                                    </div>
                                    <br>
                                    <a class="card-title" href="#">Username</a>
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                </div>
                            </div>
                </div>
            </div>
        </div>        
    </body>