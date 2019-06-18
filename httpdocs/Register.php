<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
    <link rel="manifest" href="manifest.json">
    <meta http-equiv="x-dns-prefetch-control" content="on" />
    <link rel="dns-prefetch" href="https://www.googletagmanager.com">
    <link rel="dns-prefetch" href="https://fonts.googleapis.com">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="dns-prefetch" href="https://www.google-analytics.com">
    <link rel="dns-prefetch" href="https://cdn.mxpnl.com">
    <link rel="dns-prefetch" href="https://www.googleadservices.com/">
    <link rel="dns-prefetch" href="https://ssl.widgets.webengage.com/">
    <link rel="dns-prefetch" href="https://api.mixpanel.com/">
    <link rel="dns-prefetch" href="https://pro.turtlemint.com/">
    <link rel="dns-prefetch" href="https://static.mintpro.in/">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#47c998">
    <meta name="msapplication-navbutton-color" content="#47c998">
    <meta name="apple-mobile-web-app-status-bar-style" content="#47c998">
    <script>
        ci = "0002312", errList = [], window.addEventListener("error", function(e) {
            var r = {};
            try {
                r.f = e.filename.replace("|", "~$"), r.m = e.message, r.l = e.lineno, errList.push(r)
            } catch (e) {}
        })
    </script>
    <script async src="https://cdn.epsilondelta.co/static/gemGen.js"></script>
    <script>
        function gtmConfigCallBack(brokerConfig) {
            var {
                blogUrl,
                pospSupportEmail,
                s3Url,
                selfSignUpAllowed,
                appUrl,
                appAllowed,
                hostName,
                hostUrl,
                broker,
                tenant,
                gtmKey,
                cmsUrl,
                tollFreeNumber,
                landingUrl,
                tenantCode,
                chat,
                isReminderEnabled,
                isWalkthroughShow,
                promoSentencePOSP,
                isRenewalEnabled,
            } = (brokerConfig && brokerConfig.data || brokerConfig);
            sessionStorage.setItem('blogUrl', blogUrl);
            sessionStorage.setItem('pospSupportEmail', pospSupportEmail);
            sessionStorage.setItem('s3Url', s3Url);
            sessionStorage.setItem('selfSignUpAllowed', selfSignUpAllowed);
            sessionStorage.setItem('appUrl', appUrl);
            sessionStorage.setItem('appAllowed', appAllowed);
            sessionStorage.setItem('hostName', hostName);
            sessionStorage.setItem('hostUrl', hostUrl);
            sessionStorage.setItem('broker', broker);
            sessionStorage.setItem('tenant', tenant);
            sessionStorage.setItem('cmsUrl', cmsUrl);
            sessionStorage.setItem('tollFreeNumber', tollFreeNumber);
            sessionStorage.setItem('landingUrl', landingUrl);
            sessionStorage.setItem('tenantCode', tenantCode);
            sessionStorage.setItem('chat', JSON.stringify(chat));
            sessionStorage.setItem('isWalkthroughShow', isWalkthroughShow);
            sessionStorage.setItem('isReminderEnabled', isReminderEnabled);
            sessionStorage.setItem('promoSentencePOSP', promoSentencePOSP);
            sessionStorage.setItem('isRenewalEnabled', isRenewalEnabled);
            if (gtmKey && gtmKey.wildcard) {
                sessionStorage.setItem('gtmKey', gtmKey.wildcard);
                gtmPixel(gtmKey.wildcard);
            } else {
                console.log('Dont have gtmConfig');
            }
        }

        function gtmPixel(gtmKey) {
            console.log('gtmPixel', gtmKey);
            (function(w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start': new Date().getTime(),
                    event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', gtmKey);
        }

        function httpGetAsync(configUrl) {
            var isAsync = false;
            if (sessionStorage.getItem('broker') && sessionStorage.getItem('tenant')) {
                isAsync = true;
            }
            var xmlHttp = new XMLHttpRequest();
            xmlHttp.onreadystatechange = function() {
                if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
                    gtmConfigCallBack(JSON.parse(xmlHttp.responseText));
                } else {
                    sessionStorage.setItem('selfSignUpAllowed', false);
                }
            }
            xmlHttp.open("GET", configUrl, isAsync); // true for asynchronous
            xmlHttp.send(null);
        }
        // httpGetAsync("https://app.thanos.stage.mintpro.in/api/getBrokerConfig?source=mintproFrontendConfig", gtmConfigCallBack);
        httpGetAsync(location.protocol + '//' + location.hostname + "/api/getBrokerConfig?source=mintproFrontendConfig", gtmConfigCallBack);
    </script>
    <style>
        @keyframes move {
            0% {
                width: 0
            }
            20% {
                width: 20%
            }
            40% {
                width: 40%
            }
            60% {
                width: 60%
            }
            80% {
                width: 80%
            }
            100% {
                width: 100%
            }
        }
        
        #introLoaderWrapper {
            position: fixed;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            background-color: #fff
        }
        
        .introLoader {
            width: 150px;
            height: 100px;
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            margin: auto;
            display: flex;
            justify-content: center;
            flex-direction: column
        }
        
        .progressBox {
            width: 100%;
            position: relative;
            height: 5px;
            background-color: rgba(0, 0, 0, .5);
            margin-top: 15px;
            overflow: hidden
        }
        
        .percentage {
            position: absolute;
            left: 0;
            height: 100%;
            background-color: #47c998;
            animation: move 2s linear infinite
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var e = document.getElementById("introLoaderWrapper");
            e.parentElement.removeChild(e)
        })
    </script>
    <meta name="apple-mobile-web-app-title" content="React Boilerplate" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="default" />
    <meta name="theme-color" content="#b1624d" />
    <link rel="apple-touch-icon" sizes="180x180" href="/icon_180x180.33285f999db78beed5640085c051e7b1.png" />
    <link rel="apple-touch-icon" sizes="167x167" href="/icon_167x167.9085aba6ea24073fba72a94b7ac731a1.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="/icon_152x152.80d43cecdc663299328632b85127117b.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="/icon_120x120.2f7752bee9dcd06e998fd44640e47485.png" />
    <link rel="manifest" href="/manifest.47e77a2731a1bb975ed19ced8741b946.json" />
</head>

<body>
    <noscript>If you're seeing this message, that means <strong>JavaScript has been disabled on your browser</strong>, please <strong>enable JS</strong> to make this app work.</noscript>
    <div id="introLoaderWrapper">
        <div class="introLoader">
            <div class="progressBox">
                <div class="percentage"></div>
            </div>
        </div>
    </div>
    <div id="app"></div>
    <script>
        function stylesheet(e) {
            var t = document.createElement("link");
            t.type = "text/css", t.async = !0, t.src = e, document.getElementsByTagName("head")[0].appendChild(t)
        }

        function script(e) {
            var t = document.createElement("script");
            t.type = "text/javascript", t.async = !0, t.src = e, document.getElementsByTagName("head")[0].appendChild(t)
        }
        window.onload = function() {
            var e, t;
            (t = (e = document).createElement("link")).id = "id2", t.defer = "defer", t.rel = "stylesheet", t.href = "https://fonts.googleapis.com/css?family=Roboto:400,500,700", e.head.appendChild(t)
        }
    </script>
    <script type="text/javascript" src="/runtime~main.4859886b6b075f23ec21.js"></script>
    <script type="text/javascript" src="/vendor.2f3d53b178629456ee01.chunk.js"></script>
    <script type="text/javascript" src="/main.dda94443d3ad259f175f.chunk.js"></script>
</body>

</html>