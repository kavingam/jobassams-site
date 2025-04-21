<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>403 Forbidden - Access Denied</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Full-screen background with gradient */
        body {
            background: linear-gradient(135deg, #2c2c2c, #1e1e1e);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            padding: 10px;
        }

        /* Glowing 403 effect */
        .error-code {
            font-size: 6rem;
            font-weight: 800;
            color: #ff4d4d;
            text-shadow: 0 0 10px rgba(255, 77, 77, 0.8), 
                         0 0 20px rgba(255, 77, 77, 0.6), 
                         0 0 30px rgba(255, 77, 77, 0.4);
        }

        /* Responsive Text */
        .error-message {
            font-size: 1rem;
            margin-bottom: 20px;
            opacity: 0.8;
        }

        /* Animated Button */
        .btn-home {
            background: #ff4d4d;
            color: white;
            font-size: 1rem;
            font-weight: 600;
            padding: 12px 30px;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.3s ease-in-out;
            box-shadow: 0 4px 15px rgba(255, 77, 77, 0.5);
        }

        /* Hover effect */
        .btn-home:hover {
            background: #ff6666;
            box-shadow: 0 6px 20px rgba(255, 77, 77, 0.8);
            transform: translateY(-3px);
        }

        /* Small Screen Adjustments */
        @media (max-width: 576px) {
            .error-code {
                font-size: 4rem;
            }
            .error-message {
                font-size: 0.8rem;
            }
            .btn-home {
                font-size: 0.9rem;
                padding: 10px 20px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="error-code">403</div>
                <h2 class="fw-bold">Access Forbidden</h2>
                <p class="error-message">You don’t have permission to access this page.</p>
                <a href="/" class="btn-home">⬅ Go Home</a>
            </div>
        </div>
    </div>

</body>
</html>
