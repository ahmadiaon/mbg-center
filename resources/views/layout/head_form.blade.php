<!-- CSS -->
<link rel="stylesheet" type="text/css" href="{{ env('APP_URL') }}vendors/styles/core.css" />
<link rel="stylesheet" type="text/css" href="{{ env('APP_URL') }}vendors/styles/icon-font.min.css" />
<!-- switchery css -->
<link rel="stylesheet" type="text/css" href="{{ env('APP_URL') }}src/plugins/switchery/switchery.min.css" />
<!-- bootstrap-tagsinput css -->
<link rel="stylesheet" type="text/css"
    href="{{ env('APP_URL') }}src/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" />
<!-- bootstrap-touchspin css -->
<link rel="stylesheet" type="text/css"
    href="{{ env('APP_URL') }}src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.css" />
<link rel="stylesheet" type="text/css" href="{{ env('APP_URL') }}vendors/styles/style.css" />

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
<script>
    window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "G-GBZ3SGGX85");
</script>
<!-- Google Tag Manager -->
<script>
    (function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
        var f = d.getElementsByTagName(s)[0],
          j = d.createElement(s),
          dl = l != "dataLayer" ? "&l=" + l : "";
        j.async = true;
        j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
        f.parentNode.insertBefore(j, f);
      })(window, document, "script", "dataLayer", "GTM-NXZMQSS");
</script>
<!-- End Google Tag Manager -->
</head>