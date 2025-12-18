<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'CarsDekho Clone') }}</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: rgba(247, 247, 247, 0.7)
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        /* Responsive Container */
        @media (max-width: 768px) {
            .container {
                padding: 0 12px;
            }
        }
        
        @media (max-width: 480px) {
            .container {
                padding: 0 10px;
            }
        }
    </style>
</head>
<body>
    @yield('content')
</body>
</html>

