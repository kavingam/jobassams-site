<?php
include "blogs/db/pdo_connections.php";
$current_page = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
if (isset($_GET['id'] )) {
    $hash_key = $_GET['id'];
    $query = "SELECT title FROM title_data WHERE hash_key = UNHEX(:hash_key)";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':hash_key', $hash_key, PDO::PARAM_STR);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($row) {
        $title = $row['title'];
    } else {
        $title = "Default Title"; 
    }
} else {
    // $title = "No ID Provided";
    $title =  $current_page;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="google-adsense-account" content="ca-pub-3943295901936127">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="<?php //echo htmlspecialchars($description); ?>" />
    <meta name="keywords" content="assam,assams,jobs,career,jobassams.com,www.jobassams.com" />
    <meta name="author" content="kavin" />
    <meta property="og:title" content="<?php echo htmlspecialchars($title); ?>"/>
    <meta property="og:image" content=""/>
    <meta property="og:description" content="<?php //echo htmlspecialchars($description); ?>"/>
    <meta property="og:title" content="Latest Job Updates - JobAssams">
    <meta property="og:description" content="Find the latest government and private job updates in Assam.">
    <meta property="og:image" content="https://www.jobassams.com/assets/image/thumbnail/thumbnail.jpg">
    <meta property="og:url" content="https://jobassams.com/">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="jobassams.com">
    <meta name="twitter:title" content="Latest Job Updates - JobAssams">
    <meta name="twitter:description" content="Find the latest government and private job updates in Assam.">
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
    <link rel="manifest" href="assets/image/favicon/manifest.json">
    <link rel="apple-touch-icon" sizes="192x192" href="assets/image/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/assets/image/favicon/android-icon-192x192.png">
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
    <link rel="stylesheet" href="assets/css/styles.css" />
    <link rel="stylesheet" href="assets/css/sweetBtn.css">
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <script src="assets/plugins/jquery/jquery-3.7.1.min.js"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3943295901936127"
     crossorigin="anonymous"></script>
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
    <title><?php echo htmlspecialchars($title); ?></title>

    <style>
        .accordion-button {
            background: none !important;
            border: none !important;
            box-shadow: none !important;
            font-weight: bold;
            color: #000;
        }

        .accordion-button:focus {
            outline: none;
            box-shadow: none;
        }

        .accordion-item {
            border-radius: 0 !important;
            border: 1px solid #ddd;
        }

        /* 🚀 FAST TOGGLE: Remove slow animation */
        .accordion-collapse {
            transition: none !important;
        }

        .share-menu {
            display: none;
            position: absolute;
            background: white;
            border: 1px solid #ccc;
            padding: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .share-menu button {
            display: block;
            margin: 5px 0;
            width: 100%;
        }

       
    </style>
</head>

<body>
    <?php include "nav.php"; ?>

