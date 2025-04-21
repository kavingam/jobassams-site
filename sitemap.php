<?php
$xml = simplexml_load_file("sitemap.xml") or die("Error: Cannot load sitemap.xml");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sitemap | JobAssams</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Explore the full sitemap of JobAssams.com. Find links to latest jobs, results, admit cards, and more.">
    <meta property="og:title" content="Sitemap | JobAssams">
    <meta property="og:description" content="Explore the full sitemap of JobAssams.com. Find links to latest jobs, results, admit cards, and more.">
    <meta property="og:image" content="https://www.jobassams.com/assets/image/thumbnail/thumbnail.jpg">
    <meta property="og:url" content="https://jobassams.com/">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="jobassams.com">
    <meta name="twitter:title" content="Latest Job Updates - JobAssams">
    <meta name="twitter:description" content="Explore the full sitemap of JobAssams.com. Find links to latest jobs, results, admit cards, and more.">
    <meta name="twitter:image" content="https://www.jobassams.com/assets/image/thumbnail/thumbnail.jpg">
    <meta property="og:url" content="https://www.jobassams.com/"/>
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="627"/>
    <meta property="og:type" content="website"/> 
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/image/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#ffffff">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="Jobassams">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="icon" type="image/png" href="assets/image/favicon/favicon.ico">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/image/favicon/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/image/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="48x48" href="assets/image/favicon/favicon-48x48.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/image/favicon/favicon-96x96.png">
    <link rel="apple-touch-icon" sizes="57x57" href="assets/image/favicon/favicon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/image/favicon/favicon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/image/favicon/favicon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/image/favicon/favicon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/image/favicon/favicon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/image/favicon/favicon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/image/favicon/favicon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/image/favicon/favicon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/image/favicon/favicon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/image/favicon/favicon-192x192.png">    
    <link rel="icon" type="image/png" sizes="512x512" href="assets/image/favicon/favicon-512x512.png">
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

    <script src="assets/plugins/jquery/jquery-3.7.1.min.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-LS0J6N27LT"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-LS0J6N27LT');
    </script>
    <script>
        function homePage() {
            window.location.href = '/';
        }
    </script>
    <style>
      body {
        background-color: #f8f9fa;
        font-family: 'Segoe UI', 'Roboto', sans-serif;
        padding-bottom: 2rem;
      }

      .sitemap-header {
        font-size: clamp(1.0rem, 2vw, 1.5rem);
        font-weight: 700;
        text-align: center;
        color:rgb(255, 255, 255);
        margin-bottom: 1rem;
      }

      .sitemap-description {
        font-size: clamp(0.8rem, 2vw, 1.125rem);
        color:rgb(232, 240, 248);
        max-width: 720px;
        margin: 0 auto 2rem;
        text-align: center;
        line-height: 1.6;
      }

      .sitemap-card {
        background: #ffffff;
        /* border-radius: 1rem; */
        border-left: 4px solid #0d6efd;
        padding: 0.6rem;
        margin-bottom: 0.8rem;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        transition: box-shadow 0.3s ease, transform 0.2s ease;
      }

      .sitemap-card:hover {
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
        transform: translateY(-2px);
      }

      .sitemap-url a {
        font-size: clamp(0.9rem, 1.9vw, 0.8rem);
        font-weight: 600;
        word-break: break-word;
        text-decoration: none;
        color: #0d6efd;
      }

      .sitemap-url a:hover {
        text-decoration: underline;
      }

      .sitemap-meta {
        font-size: clamp(0.6rem, 1.0vw, 0.9rem);
        color: #6c757d;
      }
    </style>
</head>
<body>

<div class="container-fluid bg-dark px-3 px-md-5x py-5">
    <h1 class="sitemap-header mb-3 text-center">Sitemap - JobAssams.com</h1>
    <p class="sitemap-description mb-0 text-start">
    Thank you for visiting the official sitemap of <strong>JobAssams.com</strong>. On this page, you will find all the important URLs of our website, including job updates, exam results, admit cards, scholarships, etc. Please feel free to use this page to easily navigate and explore what we have to offer.
    </p>
</div>

  <div class="container-fluid px-3 px-md-5 py-5">
    <?php
    foreach ($xml->url as $url) {
        $loc = htmlspecialchars($url->loc);
        $lastmod = date("d M Y, h:i A", strtotime($url->lastmod));
        $priority = $url->priority;

        echo <<<HTML
        <div class="sitemap-card">
          <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center">
            <div class="sitemap-url mb-2 mb-md-0">
              <a href="$loc" target="_blank">$loc</a>
            </div>
            <div class="sitemap-meta text-md-end">
              <div>Date $lastmod</div>
              <div>Rate $priority</div>
            </div>
          </div>
        </div>
HTML;
    }
    ?>
  </div>
  <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
