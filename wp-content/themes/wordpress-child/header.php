<!DOCTYPE html>
<html lang="en">

<head>
    <title>Child Theme | Worpdress Practice</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="../../../fonts.googleapis.com/css25fc.css?family=B612+Mono|Cabin:400,700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();   ?>/fonts/icomoon/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();   ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();   ?>/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();   ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();   ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();   ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();   ?>/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();   ?>/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();   ?>/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();   ?>/css/aos.css">
    <link href="<?php echo get_template_directory_uri();   ?>/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();   ?>/css/style.css">
    <script nonce="2b40e769-f5b5-402e-9466-8a52d0e198a6">
        (function(w, d) {
            ! function(cM, cN, cO, cP) {
                cM.zarazData = cM.zarazData || {};
                cM.zarazData.executed = [];
                cM.zaraz = {
                    deferred: [],
                    listeners: []
                };
                cM.zaraz.q = [];
                cM.zaraz._f = function(cQ) {
                    return function() {
                        var cR = Array.prototype.slice.call(arguments);
                        cM.zaraz.q.push({
                            m: cQ,
                            a: cR
                        })
                    }
                };
                for (const cS of ["track", "set", "debug"]) cM.zaraz[cS] = cM.zaraz._f(cS);
                cM.zaraz.init = () => {
                    var cT = cN.getElementsByTagName(cP)[0],
                        cU = cN.createElement(cP),
                        cV = cN.getElementsByTagName("title")[0];
                    cV && (cM.zarazData.t = cN.getElementsByTagName("title")[0].text);
                    cM.zarazData.x = Math.random();
                    cM.zarazData.w = cM.screen.width;
                    cM.zarazData.h = cM.screen.height;
                    cM.zarazData.j = cM.innerHeight;
                    cM.zarazData.e = cM.innerWidth;
                    cM.zarazData.l = cM.location.href;
                    cM.zarazData.r = cN.referrer;
                    cM.zarazData.k = cM.screen.colorDepth;
                    cM.zarazData.n = cN.characterSet;
                    cM.zarazData.o = (new Date).getTimezoneOffset();
                    if (cM.dataLayer)
                        for (const cZ of Object.entries(Object.entries(dataLayer).reduce(((c_, da) => ({
                                ...c_[1],
                                ...da[1]
                            }))))) zaraz.set(cZ[0], cZ[1], {
                            scope: "page"
                        });
                    cM.zarazData.q = [];
                    for (; cM.zaraz.q.length;) {
                        const db = cM.zaraz.q.shift();
                        cM.zarazData.q.push(db)
                    }
                    cU.defer = !0;
                    for (const dc of [localStorage, sessionStorage]) Object.keys(dc || {}).filter((de => de.startsWith("_zaraz_"))).forEach((dd => {
                        try {
                            cM.zarazData["z_" + dd.slice(7)] = JSON.parse(dc.getItem(dd))
                        } catch {
                            cM.zarazData["z_" + dd.slice(7)] = dc.getItem(dd)
                        }
                    }));
                    cU.referrerPolicy = "origin";
                    cU.src = "../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(cM.zarazData)));
                    cT.parentNode.insertBefore(cU, cT)
                };
                ["complete", "interactive"].includes(cN.readyState) ? zaraz.init() : cM.addEventListener("DOMContentLoaded", zaraz.init)
            }(w, d, 0, "script");
        })(window, document);
    </script>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">