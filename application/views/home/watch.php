<!DOCTYPE html>
<html>
    <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <link rel="stylesheet" href="css/watch-styles.css">
        <title>
            Watch
        </title>
    </head>
    <body>
        <center>
        <div class="watch-stats">
            <table class="the-stats">
                <tr>
                    <td class="stats-element">
                        <table class="stats">
                            <tr>
                                <td><div class="stat-label">WATCHERS</div></td><td><div class="numbers">0</div></td>
                            </tr>
                        </table>
                    </td>
                    <td class="stats-element">
                        <table class="stats">
                            <tr>
                                <td><div class="stat-label">WATCHING</div></td><td><div class="numbers">5</div></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
        
        </center>

        <div class="card status-card">
            <div class="card-header">
                <a class="card-title card-title-profile" href="#">
                    <!-- Foto Profil Poster, Username -->
                    <img class="profile-ph" src="img-examples/c49.jpg">&nbsp;username3
                </a>
                <small class="text-muted floated-date">
                    <div class="btn-group">
                        <small class="status-updated-timestamp">
                            <!-- Waktu Update Status -->
                            last updated 3 mins ago
                        </small>
                        <button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split status-edit-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">
                            <!-- Edit Status -->
                                Edit Status
                            </a>
                            <a class="dropdown-item" href="#">
                            <!-- Delete Status -->
                                Delete Status
                            </a>
                        </div>
                      </div>
                </small>
            
            </div>
            <div class="the-content-image"><center><img src="img-examples/circle_of_no_by_tsaoshin_d6h8pug.png" class="card-img-top content-image" alt="..."></center></div>
            <div class="card-body">
                <h5 class="status-title">
                    <!-- Title Post -->
                    Card title
                </h5>
                <p class="card-text">
                    <!-- Isi Post -->
                    This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                </p>
                <form class="form-comment">
                    <table>
                        <tr>
                            <td>
                                <img class="profile-ph" src="img-examples/doraemon.jpg"> 
                                <!-- Profile User , src diatas -->
                            </td> 
                            <td><textarea class="comment-input" placeholder=" add a comment.." cols="50"></textarea></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="button" class="btn btn-primary btn-submit-comment" id="buttonSubmit" value="REPLY"></td>
                        </tr>
                    </table>
                </form>
                <div class="the-comments">
                    <a class="commentor-profile card-title card-title-profile" href="#">
                        <img class="profile-ph" src="img-examples/c49.jpg">&nbsp;username3
                    </a>
                    <div class="comment-text">
                        <!-- Isi Comment -->
                        This is the comment This is the comment This is the comment This is the comment This is the comment This is the comment This is the comment This is the comment This is the comment This is the comment This is the comment This is the comment This is the comment This is the comment This is the comment
                    </div>
                </div>
            </div>
        </div>

        <div class="recomendation">
                <div class="card recomendation-card">
                    <!-- tampilin deviants rekomendasi, maks deviants nya 3 aja (Deviants = User) -->
                        <div class="card-header">
                          <div class="header-text">DISCOVER DEVIANTS TO WATCH!</div>
                          <div class="header2-text">WATCH AT LEAST 5 DEVIANTS</div>
                        </div>
                        <div class="card-body">
                          <a class="card-title" href="#">
                              <!-- Foto Profil Deviants, Username -->
                              <img class="profile-ph" src="img-examples/profile1.jpg">&nbsp;username1
                            </a>
                            <!-- Button watch -->
                          <button class="watch-button watch-btn-active"><div class="watch-logo"></div><div class="watch-values-active">&nbsp;Watch</div></button>
                          <div class="users-content">
                              <!-- Content deviants, contentnya maks 3 aja yang ditampilin -->
                                <img class="content-photo" src="img-examples/male_anatomy_by_sarah_dep_d2fggtx.jpg" height="200px">
                                <img class="content-photo" src="img-examples/male_anatomy_study_by_dyemelikeasunset_d14rd30.jpg" height="200px">
                          </div>
                        </div>
                        <div class="card-body">
                          <a class="card-title" href="#">
                              <!-- Foto Profil Deviants, Username -->  
                              <img class="profile-ph" src="img-examples/maxresdefault.jpg">&nbsp;username2
                          </a>
                          <!-- Button watch -->
                          <button class="watch-button"><img class="watch-logo" src="css/img-css/plus-watch.png" height="12px">&nbsp;Watch</button>
                          <div class="users-content">
                              <!-- Content deviants, contentnya maks 3 aja yang ditampilin -->
                                <img class="content-photo" src="img-examples/the_avengers_by_flowmediaproductions_d7ibyms.png" height="200px">
                          </div>
                        </div>
                        <div class="card-body">
                              <!-- Foto Profil Deviants, Username -->
                          <a class="card-title" href="#"><img class="profile-ph" src="img-examples/c49.jpg">&nbsp;username3</a>
                          <!-- Button watch --><button class="watch-button"><img class="watch-logo" src="css/img-css/plus-watch.png" height="12px">&nbsp;Watch</button>
                          <div class="users-content">
                              
                              <!-- Content deviants, contentnya maks 3 aja yang ditampilin -->
                              <img class="content-photo" src="img-examples/back_to_back_against_the_world_by_ioruko_dd49f62.png" height="200px">
                          </div>
                        </div>
                </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script>
            var x = document.getElementsByClassName("watch-values-active");
            var i;
            for (i = 0; i < x.length; i++) {
                x[i].innerHTML = "Watching";
            }
        </script>
    </body>
</html>