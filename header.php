<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : 'Space Flex | Plast Ply'; ?></title>
    <?php if (isset($page_description)): ?>
        <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
    <?php endif; ?>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['Inter', 'sans-serif'] },
                    colors: {
                        brand: {
                            light: '#bfdbfe',
                            DEFAULT: '#1e3a8a',
                            dark: '#172554',
                            deep: '#0f172a',
                        },
                        corporate: {
                            DEFAULT: '#334155',
                            dark: '#0f172a',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body {
            overflow-x: hidden;
        }

        .hero-pattern {
            background-color: #f8fafc;
            background-image: radial-gradient(#1e3a8a 0.5px, transparent 0.5px), radial-gradient(#1e3a8a 0.5px, #f8fafc 0.5px);
            background-size: 20px 20px;
            background-position: 0 0, 10px 10px;
            background-opacity: 0.05;
        }

        .img-hover-zoom {
            overflow: hidden;
        }

        .img-hover-zoom img {
            transition: transform .5s ease;
        }

        .img-hover-zoom:hover img {
            transform: scale(1.08);
        }

        .nav-scrolled {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }

        <?php if (isset($active_page) && $active_page == 'contact'): ?>
            .contact-hero {
                background: linear-gradient(rgba(15, 23, 42, 0.9), rgba(30, 58, 138, 0.85)), url('image_798d2a.jpg');
                background-size: cover;
                background-position: center;
            }

        <?php endif; ?>
    </style>
</head>

<body class="font-sans antialiased text-gray-700 bg-slate-50 selection:bg-brand-light selection:text-brand-dark">

    <?php if (!isset($active_page) || $active_page != 'contact'): ?>
        <div class="bg-brand-deep text-white text-xs md:text-sm py-2 px-4 hidden sm:block">
            <div class="max-w-7xl mx-auto flex justify-between items-center">
                <div class="flex space-x-6">
                    <span>📞 +91 97739 99582</span>
                    <span>✉️ spaceflexpvtltd@gmail.com</span>
                </div>
                <div>
                    <span class="text-gray-300">Protect the environment with 100% recycled & sustainable products.</span>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <nav class="sticky top-0 w-full bg-white shadow-sm z-50 transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">
                <div class="flex items-center">
                    <a href="index.php" class="flex items-center gap-3 group">
                        <img src="logo.png" alt="Space Flex Logo"
                            class="h-20 w-auto    group-hover:border-brand transition"
                            onerror="this.style.display='none'">
                        <span class="text-2xl font-extrabold text-corporate-dark tracking-tight uppercase">
                            <!-- SPACE <span class="text-brand">FLEX</span> -->
                        </span>
                    </a>
                </div>
                <div class="hidden lg:flex items-center space-x-8 font-medium text-sm uppercase tracking-widest">
                    <a href="index.php#about" class="text-gray-600 hover:text-brand transition">About</a>
                    <a href="index.php#gallery" class="text-gray-600 hover:text-brand transition">Applications</a>
                    <a href="index.php#pricing" class="text-gray-600 hover:text-brand transition">Rates</a>

                    <?php if (isset($active_page) && $active_page == 'contact'): ?>
                        <a href="contact.php" class="text-brand border-b-2 border-brand pb-1">Contact</a>
                    <?php else: ?>
                        <a href="contact.php"
                            class="bg-brand text-white px-6 py-2.5 rounded-md font-semibold hover:bg-brand-dark hover:shadow-lg shadow-brand/30 transition-all">Contact
                            Us</a>
                    <?php endif; ?>
                </div>
                <div class="flex items-center lg:hidden">
                    <button id="mobile-menu-btn" class="text-gray-600 hover:text-brand focus:outline-none p-2">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div id="mobile-menu" class="hidden lg:hidden bg-white border-t border-gray-100 absolute w-full shadow-lg">
            <div class="px-4 pt-2 pb-6 space-y-2">
                <a href="index.php#about"
                    class="block px-3 py-3 text-gray-700 font-medium hover:bg-brand-light hover:text-brand-dark rounded-md">About
                    Us</a>
                <a href="index.php#gallery"
                    class="block px-3 py-3 text-gray-700 font-medium hover:bg-brand-light hover:text-brand-dark rounded-md">Applications</a>
                <a href="index.php#pricing"
                    class="block px-3 py-3 text-gray-700 font-medium hover:bg-brand-light hover:text-brand-dark rounded-md">Rates</a>
                <a href="contact.php"
                    class="<?php echo (isset($active_page) && $active_page == 'contact') ? 'block px-3 py-3 text-white font-bold bg-brand rounded-md mt-4' : 'block px-3 py-3 text-brand font-bold bg-brand-light rounded-md mt-4'; ?>">Contact
                    Us</a>
            </div>
        </div>
    </nav>