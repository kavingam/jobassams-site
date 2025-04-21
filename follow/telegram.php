<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Redirecting...</title>
    <style>
        * {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
    </style>
    <script>
        window.onload = function () {
            const params = new URLSearchParams(window.location.search);
            const telegramLink = params.get("telegram");

            if (telegramLink) {
                setTimeout(() => {
                    window.location.href = telegramLink;
                }, 2000); 
            }
        };
    </script>
</head>
<body>
    <div class="container mt-5">
        <div class="container border text-center p-4 shadow-sm bg-light">
            <p class="fw-bold">Redirecting to Telegram...</p>
        </div>
    </div>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
