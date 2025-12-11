<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Wendell\'s Place')</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    
    <!-- Styles -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            
            body {
                font-family: 'Instrument Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
                line-height: 1.6;
                color: #333;
                background-color: #f8f9fa;
                transition: background-color 0.3s, color 0.3s;
            }
            
            body.dark-mode {
                background-color: #1a1a1a;
                color: #e5e5e5;
            }
            
            body.dark-mode header {
                background-color: #2a2a2a;
                box-shadow: 0 2px 4px rgba(0,0,0,0.5);
            }
            
            body.dark-mode .logo {
                color: #60a5fa;
            }
            
            body.dark-mode .nav-links a {
                color: #e5e5e5;
            }
            
            body.dark-mode .nav-links a:hover,
            body.dark-mode .nav-links a.active {
                color: #60a5fa;
            }
            
            body.dark-mode .card {
                background-color: #2a2a2a;
                color: #e5e5e5;
            }
            
            body.dark-mode input,
            body.dark-mode textarea {
                background-color: #1a1a1a;
                color: #e5e5e5;
                border-color: #404040;
            }
            
            body.dark-mode .btn {
                background-color: #3b82f6;
            }
            
            body.dark-mode .btn:hover {
                background-color: #2563eb;
            }
            
            body.dark-mode .btn-outline {
                border-color: #60a5fa;
                color: #fff;
            }
            
            body.dark-mode .btn-outline:hover {
                background-color: #60a5fa;
                color: #1a1a1a;
            }
            
            .dark-mode-toggle {
                background: none;
                border: 2px solid #2563eb;
                border-radius: 6px;
                padding: 0.5rem 1rem;
                cursor: pointer;
                font-weight: 500;
                color: #2563eb;
                transition: all 0.3s;
                margin-left: 1rem;
            }
            
            .dark-mode-toggle:hover {
                background-color: #2563eb;
                color: #fff;
            }
            
            body.dark-mode .dark-mode-toggle {
                border-color: #60a5fa;
                color: #60a5fa;
            }
            
            body.dark-mode .dark-mode-toggle:hover {
                background-color: #60a5fa;
                color: #1a1a1a;
            }
            
            section[style*="background: #fff"],
            section[style*="background:#fff"] {
                transition: background-color 0.3s, color 0.3s;
            }
            
            body.dark-mode section[style*="background: #fff"],
            body.dark-mode section[style*="background:#fff"] {
                background-color: #2a2a2a !important;
                color: #e5e5e5 !important;
            }
            
            body.dark-mode section[style*="background: #fff"] h2,
            body.dark-mode section[style*="background:#fff"] h2,
            body.dark-mode section[style*="background: #fff"] p,
            body.dark-mode section[style*="background:#fff"] p {
                color: #e5e5e5 !important;
            }
            
            .container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 0 20px;
            }
            
            header {
                background-color: #fff;
                box-shadow: 0 2px 4px rgba(0,0,0,0.1);
                position: sticky;
                top: 0;
                z-index: 1000;
            }
            
            nav {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 1rem 0;
            }
            
            .logo {
                font-size: 1.5rem;
                font-weight: 600;
                color: #2563eb;
                text-decoration: none;
            }
            
            .nav-links {
                display: flex;
                gap: 2rem;
                list-style: none;
            }
            
            .nav-links a {
                text-decoration: none;
                color: #333;
                font-weight: 500;
                transition: color 0.3s;
            }
            
            .nav-links a:hover,
            .nav-links a.active {
                color: #2563eb;
            }
            
            main {
                min-height: calc(100vh - 200px);
                padding: 2rem 0;
            }
            
            footer {
                background-color: #1f2937;
                color: #fff;
                padding: 2rem 0;
                text-align: center;
                margin-top: 4rem;
            }
            
            .hero {
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                color: #fff;
                padding: 4rem 2rem;
                border-radius: 8px;
                margin-bottom: 3rem;
                text-align: center;
            }
            
            .hero h1 {
                font-size: 2.5rem;
                margin-bottom: 1rem;
            }
            
            .hero p {
                font-size: 1.2rem;
                opacity: 0.9;
            }
            
            .btn {
                display: inline-block;
                padding: 0.75rem 1.5rem;
                background-color: #2563eb;
                color: #fff;
                text-decoration: none;
                border-radius: 6px;
                font-weight: 500;
                transition: background-color 0.3s;
            }
            
            .btn:hover {
                background-color: #1d4ed8;
            }
            
            .btn-outline {
                background-color: transparent;
                border: 2px solid #2563eb;
                color: #2563eb;
            }
            
            .btn-outline:hover {
                background-color: #2563eb;
                color: #fff;
            }
            
            .card {
                background: #fff;
                border-radius: 8px;
                padding: 2rem;
                box-shadow: 0 2px 8px rgba(0,0,0,0.1);
                margin-bottom: 2rem;
            }
            
            .grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                gap: 2rem;
                margin: 2rem 0;
            }
            
            h1, h2, h3 {
                margin-bottom: 1rem;
            }
            
            h1 { font-size: 2.5rem; }
            h2 { font-size: 2rem; }
            h3 { font-size: 1.5rem; }
            
            p {
                margin-bottom: 1rem;
            }
            
            .form-group {
                margin-bottom: 1.5rem;
            }
            
            label {
                display: block;
                margin-bottom: 0.5rem;
                font-weight: 500;
            }
            
            input, textarea {
                width: 100%;
                padding: 0.75rem;
                border: 1px solid #d1d5db;
                border-radius: 6px;
                font-family: inherit;
            }
            
            input:focus, textarea:focus {
                outline: none;
                border-color: #2563eb;
            }
            
            textarea {
                resize: vertical;
                min-height: 120px;
            }
            
            @media (max-width: 768px) {
                .nav-links {
                    gap: 1rem;
                }
                
                .hero h1 {
                    font-size: 2rem;
                }
                
                .grid {
                    grid-template-columns: 1fr;
                }
            }
        </style>
    @endif
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <a href="{{ route('home') }}" class="logo">Wendell's Place</a>
                <div style="display: flex; align-items: center;">
                    <ul class="nav-links">
                        <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                        <li><a href="{{ route('products') }}" class="{{ request()->routeIs('products') ? 'active' : '' }}">Products & Services</a></li>
                        <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About Us</a></li>
                        <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
                    </ul>
                    <button class="dark-mode-toggle" onclick="toggleDarkMode()">🌙 Dark</button>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; {{ date('Y') }} Wendell's Place. All rights reserved.</p>
        </div>
    </footer>
    
    <script>
        // Check for saved dark mode preference
        if (localStorage.getItem('darkMode') === 'enabled') {
            document.body.classList.add('dark-mode');
            updateToggleButton();
        }
        
        function toggleDarkMode() {
            document.body.classList.toggle('dark-mode');
            
            if (document.body.classList.contains('dark-mode')) {
                localStorage.setItem('darkMode', 'enabled');
            } else {
                localStorage.setItem('darkMode', 'disabled');
            }
            
            updateToggleButton();
        }
        
        function updateToggleButton() {
            const button = document.querySelector('.dark-mode-toggle');
            if (document.body.classList.contains('dark-mode')) {
                button.innerHTML = '☀️ Light';
            } else {
                button.innerHTML = '🌙 Dark';
            }
        }
    </script>
</body>
</html>
