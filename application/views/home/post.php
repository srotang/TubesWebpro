<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="<?= base_url();?>assets/css/post.css">
        <title>

        </title>
        <link rel="stylesheet" href="css/profile-dev.css">
    </head>
    <body>
        <div class="post-content">
            <div class="post-content-img">
                
                <center>
                <img class="the-image-pst" src="<?=base_url()?>assets/upload/<?= $idd->content_dir?>">
                </center>
              
            </div>
            
            <div class="post-status">
                <div class="upper-title">
                    <a href="#"><img class="poster-profile-pic" src="<?= base_url()?>/assets/profile/<?= $idd->fotoprofile ?>"></a>
                    <div class="post-title">
                        <div class="post-title-p"><?=$idd->content_title?></div>
                        <div class="post-title-by">by <a href="#" class="poster-username-link"><?=$idd->username?></a></div>
                    </div>
                    <button class="download-btn"><img class="download-icon" src="<?= base_url();?>assets/img-css/download-logo.png" width="20px" height="20px">&nbsp;Free Download</button>
                </div>
                <div class="post-divider"></div>
                <div class="post-desc">
                    <p>
                        <?= $idd->content_desc ?>
                    </p>
                </div>
                <?php if($this->session->userdata('username') != ""){ ?>
                <div class="post-comments">
                        <form class="form-comment">
                            <table>
                                <tr>
                                    <td>
                                        <img class="profile-ph" src="<?= base_url();?>/assets/profile/<?= $this->session->userdata('pic'); ?>"> 
                                            <!-- Profile User , src diatas -->
                                    </td> 
                                    <td><textarea class="comment-input" placeholder=" add a comment.." cols="50"></textarea></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><input type="button" class="btn btn-primary btn-submit-comment" id="buttonSubmit" value="REPLY"></td>
                                </tr>
                            </table>
                        </form>
                </div>
                <?php } ?>
                <!-- <div class="post-comments-list">
                    <div class="the-comment-el">
                        <img class="commentor-profil-pic-pst" src="img-examples/c49.jpg">
                        <div class="the-commentor-comments">
                            <span class="the-commentor-header-pst"><a href="#" class="the-commentor-username"><h5>username2</h5></a></span>
                            <span class="the-commentor-header-pst">15 Dec 2017</span>
                            <div class="the-commentor-content-pst">
                                <p>
                                   blabla
                                </p>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>

</body>

</html>
