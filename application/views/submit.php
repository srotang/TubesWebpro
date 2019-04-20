<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>DeviantArt - Discover The Largest Online Art Gallery and Community</title>
    <style>
.submit-tab-container {
    margin: 0;
    padding: 0 0 0 25px;
    height: 25px;
    overflow: hidden;
    width: 95%;
    width: -webkit-calc(100% - 55px);
    width: calc(100% - 55px)
}

.submit-tab-list {
    margin: 0;
    padding: 0
}

.submit-tab {
    background: #ddd;
    white-space: nowrap;
    width: 187px;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    display: inline-block;
    margin: 0 0 5px 5px;
    height: 28px
}

.submit-tab.active {
    background: #f5f5f5;
    cursor: default;
    height: 29px
}

.submit-tab.plussed {
    margin-right: 28px
}

.empty-submit-tab {
    display: none
}

.plus-new-tab {
    cursor: pointer;
    display: block;
    width: 51px;
    position: relative;
    border-radius: 5px;
    top: -27px;
    left: 194px;
    font-size: 11px;
    font-style: italic;
    color: #373a4a;
    height: 16px;
    line-height: 16px;
    padding: 1px 0;
    background-color: #c6c6c6
}

.ie.lt10 .plus-new-tab {
    top: -26px
}

.plus-new-tab.not-subbed,.plus-new-tab.not-subbed>b {
    opacity: .5
}

.plus-new-tab>b {
    background-image: url('/minish/stash/stash-arrows-icons.png?15');
    background-position: -388px -363px;
    display: inline-block;
    height: 12px;
    margin-left: 3px;
    width: 12px
}

.plus-new-tab>i {
    margin-left: 5px
}

@-moz-document url-prefix() {
    .plus-new-tab {
        top: -23px
    }
}

.submit-tab-icon {
    display: inline-block;
    background: transparent url('/minish/stash/stash-arrows-icons.png?15') no-repeat -316px -252px;
    width: 25px;
    height: 25px;
    position: relative;
    left: -171px;
    margin: -3px 2px 0 -2px;
    cursor: pointer
}

@media screen and (-webkit-min-device-pixel-ratio: 0) {
    .submit-tab-icon {
        top:-3px
    }
}

.ie.lt10 .submit-tab-icon {
    background-position-y: -255px
}

img.submit-tab-icon.submit-tab-preview {
    background: none;
    height: 20px;
    margin-top: 2px;
    margin-left: 3px;
    width: auto
}

.submit-tab.active .submit-tab-icon {
    cursor: default
}

.submit-tab-title {
    display: inline-block;
    width: 144px;
    text-overflow: ellipsis;
    overflow: hidden;
    font-size: 8pt;
    font-weight: bold;
    line-height: 24px;
    cursor: pointer;
    -ms-user-select: none;
    -moz-user-select: none;
    -webkit-user-select: none;
    user-select: none;
    margin-left: 22px;
    color: #373a4a;
    vertical-align: 8%;
    text-indent: 4px
}

@media screen and (-webkit-min-device-pixel-ratio: 0) {
    .submit-tab-title {
        position:relative;
        top: 2px
    }
}

.submit-tab.active>.submit-tab-title {
    cursor: default
}

.submit-tab-progress {
    margin-top: 5px;
    margin-left: 22px
}

.showing-progress>.submit-tab-title,.submit-tab-progress {
    display: none
}

.showing-progress>.submit-tab-progress {
    width: 144px;
    margin-top: 5px
}

.showing-progress>.submit-tab-progress>.stash-progress-bar {
    width: 144px;
    height: 13px;
    overflow: hidden;
    position: relative;
    margin: 0 0 3px 5px
}

.showing-progress>.submit-tab-progress,.submit-tab-progress>.stash-progress-bar,.submit-tab-progress>.stash-progress-bar>.progress {
    display: inline-block
}

.submit-tab-close {
    font-weight: bold;
    border-radius: 10px;
    width: 43px;
    height: 15px;
    padding: 1px 3px;
    text-align: center;
    color: #969b9a;
    cursor: pointer;
    position: relative;
    top: -6px;
    left: -31px;
    display: none
}

@media screen and (-webkit-min-device-pixel-ratio: 0) {
    .submit-tab-close {
        top:-8px
    }
}

.ie.lt10 .submit-tab-close {
    top: -8px
}

.submit-tab.active>.submit-tab-close {
    display: inline
}

.submit-tab.active.reset>.submit-tab-close {
    display: none
}

.submit-tab.active.scheduled>.submit-tab-close,.submit-tab.active.schedule-failed>.submit-tab-close,.submit-tab.active.schedule-delayed>.submit-tab-close {
    display: none
}

.submit-tab.active.successful>.submit-tab-close {
    color: #fff
}

@-moz-document url-prefix() {
    .multisubmit #overhead td {
        padding-bottom: 0
    }

    .submit-tab-title {
        line-height: 16px
    }

    .submit-tab-icon {
        background-position: -316px -252px
    }

    .submit-tab-close {
        top: -5px
    }

    body.no-overhead #dv7.stashy #not-overhead #overhead-collect.undocked {
        height: 42px;
        border-bottom-width: 3px
    }

    body.no-overhead td.oh-ile-submit-nav-buttons .smbutton {
        margin-top: 10px
    }

    .add-new-tab {
        position: relative;
        top: -1px
    }

    .plus-new-tab {
        line-height: 14px
    }
}

.scroll-spinner-container {
    position: absolute;
    display: none
}

.scroll-spinner-container.right {
    right: 6px
}

.scroll-spinner-container.left {
    left: 6px
}

.showing-spinner>.scroll-spinner-container {
    display: block
}

.scroll-spinner {
    display: inline-block;
    width: 19px;
    height: 18px;
    text-align: center;
    padding: 0;
    color: #222;
    font-size: 16px;
    line-height: 18px;
    cursor: default;
    background: #c6c6c6;
    opacity: 0;
    margin-top: 1px;
    background-image: url('/minish/stash/stash-arrows-icons.png')
}

.scroll-spinner.left {
    border-radius: 5px 0 0 5px;
    background-position: -388px -326px
}

.scroll-spinner.right {
    border-radius: 0 5px 5px 0;
    background-position: -388px -344px
}

.left-spinner-active .scroll-spinner,.right-spinner-active .scroll-spinner {
    opacity: 0
}

.left-spinner-active .scroll-spinner.left {
    opacity: 1
}

.right-spinner-active .scroll-spinner.right {
    opacity: 1
}

.left-spinner-active .left.scroll-spinner:hover,.right-spinner-active .right.scroll-spinner:hover {
    cursor: pointer
}

.iframed_submitform {
    width: 100%;
    height: 400px;
    position: absolute;
    left: -10000px;
    top: 0
}

.multisubmit .iframed_submitform {
    margin-top: 30px
}

.iframed_submitform.active {
    position: static;
    left: 0
}

.stash-submit-page #ile-container {
    overflow: visible
}

.stash-submit-page #ile-auto-save {
    position: fixed;
    top: 52px;
    left: 160px;
    width: auto;
    margin-left: 0
}

.no-overhead.stash-submit-page #ile-auto-save {
    position: fixed;
    top: 10px;
    left: 185px
}

.no-overhead.stash-submit-page.scheduled #ile-auto-save,.no-overhead.stash-submit-page.schedule-failed #ile-auto-save,.no-overhead.stash-submit-page.schedule-delayed #ile-auto-save {
    top: 45px
}

.stash-submit-page #ile-container .ile-section-preview .ile_mod-files.ile-files.submit-only {
    display: block
}

#output>.submit-saved,#output>.submit-success {
    position: fixed;
    padding: 18px 40px;
    background: #eafab1;
    border-radius: 6px;
    border: 1px solid #8fbe00;
    text-align: center;
    color: #222;
    font: 15px Verdana,sans-serif;
    line-height: 1.8em;
    right: 20px;
    bottom: 22px;
    z-index: 500
}

#output>.submit-saved {
    background-color: #fff;
    border: 1px solid #c6c6c6;
    color: #1b1d19
}

.submit-success-deviation-name a {
    color: #222
}

.submit-success .submit-success-deviation-name,.submit-saved .submit-success-deviation-name,.submit-success .submit-success-deviation-name a {
    font-size: 13px
}

.submit-success-h,.submit-saved-h {
    font: 18px 'Trebuchet MS',Trebuchet,sans-serif;
    color: #597b0a
}

.submit-saved-h {
    color: #336891
}

.submit-success-h>img,.submit-saved-h>img {
    position: relative;
    top: 7px
}

.submit-tab.scheduled {
    background: #ecb315;
    border-bottom: 5px solid #f5f5f5
}

.submit-tab.scheduled.active {
    border-bottom-color: #ecb315
}

.submit-tab.successful {
    background: #75ad1c;
    border-bottom: 5px solid #f5f5f5
}

.submit-tab.successful.active {
    border-bottom-color: #75ad1c
}

.submit-tab.scheduled>.submit-tab-title,.submit-tab.schedule-failed>.submit-tab-title,.submit-tab.schedule-delayed>.submit-tab-title,.submit-tab.successful>.submit-tab-title {
    color: #fff
}

.submit-tab.scheduled>.submit-tab-icon {
    background-position: -376px -185px
}

.submit-tab.successful>.submit-tab-icon {
    background-position: -373px -298px
}

.submit-tab.schedule-failed,.submit-tab.schedule-delayed {
    background: #fe5900
}

.submit-tab.schedule-failed.active,.submit-tab.schedule-delayed.active {
    border-bottom-color: #fe5900
}

.submit-tab.schedule-failed>.submit-tab-icon,.submit-tab.schedule-delayed>.submit-tab-icon {
    background-position: 6px -282px
}

.successful-title-of-great-success {
    margin-top: 70px;
    margin-bottom: 6px;
    font-family: Depot New,Depot New Light,Trebuchet MS;
    font-size: 24px;
    color: #373a49;
    text-align: center
}

.successful-subtitle-of-great-success {
    color: #222;
    font-size: 11px;
    text-align: center;
    font-family: Verdana,sans-serif;
    margin-bottom: 20px
}

.successful-thumbnail-of-great-success {
    text-align: center;
    width: 300px;
    margin: 0 auto
}

.successful-thumbnail-of-great-success .tt-fh.tt-boxed .tt-bb {
    background: none;
    pointer-events: none
}

.successful-name-of-great-success {
    text-align: center;
    font-family: 'Trebuchet MS',sans-serif;
    font-size: 14px;
    color: #373a49;
    cursor: pointer
}

.successful-name-of-great-success:hover {
    text-decoration: underline
}

.successful-button-of-great-success {
    text-align: center;
    margin-top: 32px
}

a.close-all-successful-tabs {
    color: #fff;
    float: right;
    margin-right: 20px;
    text-decoration: underline
}

@media only screen and (max-device-width: 480px) {
    .submit-tab {
        width:120px
    }

    .submit-tab-title {
        width: 77px
    }

    .plus-new-tab {
        left: 127px
    }

    .submit-tab-icon {
        left: -104px
    }
}
/* #gmi-SubmitTab,{
    font-family : Verdana, sans-serif;
font-size : 12px;
text-decoration : none solid rgb(0, 0, 0);
word-spacing : 0px;
background-color :  #E6E6E6;
background-position : 0% 0%;
color :  #000000;
position : fixed;
top : 54px;
bottom : 526px;
right : 0px;
left : 0px;
display : block;
z-index : 199;
} */
body.stash-submit-page #drebox {
    right: 430px
}

    </style>
  </head>
  <body>
        <div class="submit-tab-container">
            <ul class="submit-tab-list">                <li class="submit-tab loaded reset active plussed" name="gmi-SubmitTab" id="gmi-SubmitTab" data-gmiclass="SubmitTab" gmi-deviationid="0" gmindex="2" style="width: 187px;">
                    <span class="submit-tab-title" style="width: 144px;">New Submission</span>
                    <span class="submit-tab-progress" style="width: 144px;">
                        <span class="stash-progress-bar" style="width: 144px;"><span class="progress"></span></span>
                    </span>
                    <span class="submit-tab-icon" style="left: -171px;"></span>
                    <span class="submit-tab-close">×</span>
                    
    <span class="plus-new-tab not-subbed" target="_blank" data-quicktip-href="https://www.deviantart.com/core-membership/?point=multisubmitnewbutton" data-ga_click_event="{&quot;category&quot;:&quot;PremiumUpsell&quot;,&quot;action&quot;:&quot;MultiSubmitNewButton&quot;,&quot;nofollow&quot;:0}" data-quicktip-title="Core Membership" data-quicktip-text="allows you to upload and submit multiple files at once. " data-quicktip-final="Upgrade!" onmouseover="if (!window.deviantART.deviant.subbed &amp;&amp; window.QuickTip)QuickTip.show(this, 'subby')" title="New Submission" style="visibility: visible; left: 194px;"><b></b><i>New</i>
    </span>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>