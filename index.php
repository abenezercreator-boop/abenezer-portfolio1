<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abenezer Asrat | Web Developer & Student</title>
    <meta name="description" content="Personal portfolio website of Abenezer Asrat - Grade 8 Student and Beginner Web Developer.">
    <meta name="keywords" content="Abenezer Asrat, Web Developer, Portfolio, Wolaita Liqa School, HTML, CSS, JavaScript">
    <meta name="author" content="Abenezer Asrat">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        brand: {
                            50: '#eef2ff',
                            100: '#e0e7ff',
                            500: '#6366f1',
                            600: '#4f46e5',
                            700: '#4338ca',
                            900: '#312e81',
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        .glass {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        .dark .glass {
            background: rgba(15, 23, 42, 0.75);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }
        .gradient-text {
            background: linear-gradient(135deg, #4f46e5 0%, #ec4899 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .dark .gradient-text {
            background: linear-gradient(135deg, #818cf8 0%, #f472b6 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>

<body class="bg-slate-50 text-slate-800 dark:bg-slate-950 dark:text-slate-100 font-sans transition-colors duration-300">

    <!-- Sticky Navigation Bar -->
    <header class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 glass border-b border-slate-200/50 dark:border-slate-800/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
            <a href="#home" class="text-xl font-extrabold tracking-tight focus:outline-none focus:ring-2 focus:ring-brand-500 rounded-md p-1">
                <span class="gradient-text">Abenezer</span><span class="text-slate-900 dark:text-white">.dev</span>
            </a>

            <!-- Desktop Links -->
            <nav class="hidden md:flex items-center gap-6 text-sm font-medium">
                <a href="#home" class="hover:text-brand-600 dark:hover:text-brand-400 transition-colors">Home</a>
                <a href="#about" class="hover:text-brand-600 dark:hover:text-brand-400 transition-colors">About</a>
                <a href="#skills" class="hover:text-brand-600 dark:hover:text-brand-400 transition-colors">Skills</a>
                <a href="#projects" class="hover:text-brand-600 dark:hover:text-brand-400 transition-colors">Projects</a>
                <a href="#education" class="hover:text-brand-600 dark:hover:text-brand-400 transition-colors">Education</a>
                <a href="#contact" class="hover:text-brand-600 dark:hover:text-brand-400 transition-colors">Contact</a>
            </nav>

            <div class="flex items-center gap-3">
                <!-- Theme Toggle Button -->
                <button id="themeToggle" aria-label="Toggle dark mode" class="p-2.5 rounded-full bg-slate-200/60 dark:bg-slate-800 text-slate-700 dark:text-slate-200 hover:ring-2 ring-brand-500/50 transition-all">
                    <i class="fa-solid fa-moon dark:hidden text-lg"></i>
                    <i class="fa-solid fa-sun hidden dark:block text-lg text-amber-400"></i>
                </button>

                <!-- Mobile menu toggle button -->
                <button id="mobileMenuBtn" aria-label="Toggle Navigation Menu" class="md:hidden p-2 rounded-lg text-slate-700 dark:text-slate-200 hover:bg-slate-200/50 dark:hover:bg-slate-800 transition-colors">
                    <i class="fa-solid fa-bars text-xl" id="menuIcon"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation Drawer -->
        <div id="mobileMenu" class="hidden md:hidden border-t border-slate-200 dark:border-slate-800 bg-slate-50/95 dark:bg-slate-950/95 backdrop-blur-lg px-4 pt-2 pb-6 space-y-3">
            <a href="#home" class="mobile-nav-link block py-2 px-3 rounded-md hover:bg-slate-200/50 dark:hover:bg-slate-800">Home</a>
            <a href="#about" class="mobile-nav-link block py-2 px-3 rounded-md hover:bg-slate-200/50 dark:hover:bg-slate-800">About</a>
            <a href="#skills" class="mobile-nav-link block py-2 px-3 rounded-md hover:bg-slate-200/50 dark:hover:bg-slate-800">Skills</a>
            <a href="#projects" class="mobile-nav-link block py-2 px-3 rounded-md hover:bg-slate-200/50 dark:hover:bg-slate-800">Projects</a>
            <a href="#education" class="mobile-nav-link block py-2 px-3 rounded-md hover:bg-slate-200/50 dark:hover:bg-slate-800">Education</a>
            <a href="#contact" class="mobile-nav-link block py-2 px-3 rounded-md hover:bg-slate-200/50 dark:hover:bg-slate-800">Contact</a>
        </div>
    </header>

    <main class="pt-16">
        <!-- Hero / Home Section -->
        <section id="home" class="min-h-[calc(100vh-4rem)] flex items-center relative overflow-hidden py-16 lg:py-24">
            <!-- Background accent blobs -->
            <div class="absolute top-1/4 left-10 w-72 h-72 bg-indigo-500/10 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute bottom-10 right-10 w-96 h-96 bg-pink-500/10 rounded-full blur-3xl pointer-events-none"></div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                <div class="grid md:grid-cols-12 gap-12 items-center">
                    <!-- Left Hero Content -->
                    <div class="md:col-span-7 space-y-6 text-center md:text-left">
                        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full border border-indigo-200 dark:border-indigo-900/60 bg-indigo-50/50 dark:bg-indigo-950/30 text-indigo-700 dark:text-indigo-300 text-sm font-medium">
                            <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                            Available for New Projects
                        </div>
                        <h1 class="text-4xl sm:text-6xl font-extrabold tracking-tight text-slate-900 dark:text-white leading-tight">
                            Hi, I'm <br class="hidden sm:block"/>
                            <span class="gradient-text">Abenezer Asrat</span>
                        </h1>
                        <p class="text-xl sm:text-2xl font-semibold text-slate-600 dark:text-slate-300">
                            Student <span class="text-brand-500">•</span> Web Developer <span class="text-brand-500">•</span> Creative Learner
                        </p>
                        <p class="text-slate-600 dark:text-slate-400 max-w-xl mx-auto md:mx-0 text-base sm:text-lg">
                            Passionate Grade 8 student building clean, responsive, and visually appealing web applications with modern digital standards.
                        </p>
                        <div class="pt-4 flex flex-wrap justify-center md:justify-start gap-4">
                            <a href="#about" class="px-6 py-3.5 rounded-xl bg-brand-600 hover:bg-brand-700 text-white font-semibold shadow-lg shadow-brand-500/25 transition-all transform hover:-translate-y-0.5">
                                About Me <i class="fa-solid fa-arrow-right ml-2 text-xs"></i>
                            </a>
                            <a href="#projects" class="px-6 py-3.5 rounded-xl border border-slate-300 dark:border-slate-700 hover:bg-slate-200/50 dark:hover:bg-slate-800 font-semibold transition-all">
                                View My Projects
                            </a>
                        </div>
                    </div>

                    <!-- Right Profile Image Area -->
                    <div class="md:col-span-5 flex justify-center">
                        <div class="relative group">
                            <div class="absolute -inset-1 bg-gradient-to-r from-indigo-500 to-pink-500 rounded-3xl blur opacity-30 group-hover:opacity-60 transition duration-1000"></div>
                            <div class="relative w-64 h-64 sm:w-80 sm:h-80 rounded-3xl glass p-4 flex flex-col items-center justify-center text-center shadow-2xl">
                                <div class="w-32 h-32 rounded-full bg-gradient-to-tr from-indigo-500 to-purple-600 flex items-center justify-center text-white text-5xl font-bold shadow-md mb-4">
                                    AA
                                </div>
                                <h2 class="text-xl font-bold text-slate-900 dark:text-white">Abenezer Asrat</h2>
                                <p class="text-sm text-slate-500 dark:text-slate-400 font-medium">Aspiring Software Engineer</p>
                                <div class="mt-4 flex gap-2">
                                    <span class="px-2.5 py-1 text-xs rounded-md bg-slate-200/70 dark:bg-slate-800 text-slate-700 dark:text-slate-300 font-mono">HTML5</span>
                                    <span class="px-2.5 py-1 text-xs rounded-md bg-slate-200/70 dark:bg-slate-800 text-slate-700 dark:text-slate-300 font-mono">CSS3</span>
                                    <span class="px-2.5 py-1 text-xs rounded-md bg-slate-200/70 dark:bg-slate-800 text-slate-700 dark:text-slate-300 font-mono">JS</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Me Section -->
        <section id="about" class="py-20 bg-slate-100/60 dark:bg-slate-900/40 border-y border-slate-200/60 dark:border-slate-800/60">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight">About <span class="gradient-text">Me</span></h2>
                    <div class="w-16 h-1 bg-brand-500 mx-auto mt-3 rounded-full"></div>
                </div>

                <div class="grid lg:grid-cols-12 gap-8 items-center">
                    <div class="lg:col-span-6 space-y-6">
                        <div class="glass p-8 rounded-2xl shadow-sm border border-slate-200/80 dark:border-slate-800">
                            <h3 class="text-2xl font-bold mb-4 text-slate-900 dark:text-white flex items-center gap-3">
                                <i class="fa-solid fa-graduation-cap text-brand-500"></i> Student & Tech Explorer
                            </h3>
                            <p class="text-slate-600 dark:text-slate-300 leading-relaxed mb-4">
                                I am a Grade 8 student at <strong class="text-slate-900 dark:text-white">Wolaita Liqa School</strong> with a deep passion for technology and software creation.
                            </p>
                            <p class="text-slate-600 dark:text-slate-300 leading-relaxed">
                                Beyond my regular school curriculum, I dedicate time to mastering modern web development. I enjoy taking ideas and translating them into functional, beautifully designed websites.
                            </p>
                        </div>
                    </div>

                    <div class="lg:col-span-6 grid sm:grid-cols-2 gap-4">
                        <div class="p-6 rounded-2xl bg-white dark:bg-slate-900 shadow-sm border border-slate-200/80 dark:border-slate-800 transition-all hover:border-brand-500/50">
                            <div class="w-12 h-12 rounded-xl bg-indigo-100 dark:bg-indigo-950/60 text-brand-600 dark:text-brand-400 flex items-center justify-center text-xl mb-4">
                                <i class="fa-solid fa-laptop-code"></i>
                            </div>
                            <h4 class="font-bold text-lg text-slate-900 dark:text-white mb-1">Web Development</h4>
                            <p class="text-sm text-slate-500 dark:text-slate-400">Crafting frontend user experiences and responsive website designs.</p>
                        </div>

                        <div class="p-6 rounded-2xl bg-white dark:bg-slate-900 shadow-sm border border-slate-200/80 dark:border-slate-800 transition-all hover:border-brand-500/50">
                            <div class="w-12 h-12 rounded-xl bg-pink-100 dark:bg-pink-950/60 text-pink-600 dark:text-pink-400 flex items-center justify-center text-xl mb-4">
                                <i class="fa-solid fa-lightbulb"></i>
                            </div>
                            <h4 class="font-bold text-lg text-slate-900 dark:text-white mb-1">Creative Problem Solver</h4>
                            <p class="text-sm text-slate-500 dark:text-slate-400">Learning software engineering principles and structured logical thinking.</p>
                        </div>

                        <div class="p-6 rounded-2xl bg-white dark:bg-slate-900 shadow-sm border border-slate-200/80 dark:border-slate-800 transition-all hover:border-brand-500/50">
                            <div class="w-12 h-12 rounded-xl bg-emerald-100 dark:bg-emerald-950/60 text-emerald-600 dark:text-emerald-400 flex items-center justify-center text-xl mb-4">
                                <i class="fa-solid fa-book-open"></i>
                            </div>
                            <h4 class="font-bold text-lg text-slate-900 dark:text-white mb-1">Continuous Learner</h4>
                            <p class="text-sm text-slate-500 dark:text-slate-400">Constantly acquiring new programming skills and exploring web standards.</p>
                        </div>

                        <div class="p-6 rounded-2xl bg-white dark:bg-slate-900 shadow-sm border border-slate-200/80 dark:border-slate-800 transition-all hover:border-brand-500/50">
                            <div class="w-12 h-12 rounded-xl bg-amber-100 dark:bg-amber-950/60 text-amber-600 dark:text-amber-400 flex items-center justify-center text-xl mb-4">
                                <i class="fa-solid fa-compass"></i>
                            </div>
                            <h4 class="font-bold text-lg text-slate-900 dark:text-white mb-1">Driven Goals</h4>
                            <p class="text-sm text-slate-500 dark:text-slate-400">Aiming to build practical applications that solve real-world problems.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Skills Section -->
        <section id="skills" class="py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight">Technical <span class="gradient-text">Skills</span></h2>
                    <p class="text-slate-600 dark:text-slate-400 mt-2">Tools, technologies, and concepts I work with.</p>
                    <div class="w-16 h-1 bg-brand-500 mx-auto mt-3 rounded-full"></div>
                </div>

                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- HTML -->
                    <div class="p-6 rounded-2xl glass hover:shadow-xl transition-all border border-slate-200/80 dark:border-slate-800 group hover:-translate-y-1">
                        <div class="w-12 h-12 rounded-xl bg-orange-100 dark:bg-orange-950/50 text-orange-600 flex items-center justify-center text-2xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fa-brands fa-html5"></i>
                        </div>
                        <h3 class="font-bold text-xl mb-1 text-slate-900 dark:text-white">HTML5</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400">Semantic markup structure, forms, and accessible elements.</p>
                    </div>

                    <!-- CSS -->
                    <div class="p-6 rounded-2xl glass hover:shadow-xl transition-all border border-slate-200/80 dark:border-slate-800 group hover:-translate-y-1">
                        <div class="w-12 h-12 rounded-xl bg-blue-100 dark:bg-blue-950/50 text-blue-600 flex items-center justify-center text-2xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fa-brands fa-css3-alt"></i>
                        </div>
                        <h3 class="font-bold text-xl mb-1 text-slate-900 dark:text-white">CSS3</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400">Responsive layouts, Flexbox, Grid, keyframe animations, and styling.</p>
                    </div>

                    <!-- JavaScript -->
                    <div class="p-6 rounded-2xl glass hover:shadow-xl transition-all border border-slate-200/80 dark:border-slate-800 group hover:-translate-y-1">
                        <div class="w-12 h-12 rounded-xl bg-yellow-100 dark:bg-yellow-950/50 text-yellow-600 flex items-center justify-center text-2xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fa-brands fa-js"></i>
                        </div>
                        <h3 class="font-bold text-xl mb-1 text-slate-900 dark:text-white">JavaScript</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400">DOM manipulation, events, functions, dynamic interactivity, and logic.</p>
                    </div>

                    <!-- PHP -->
                    <div class="p-6 rounded-2xl glass hover:shadow-xl transition-all border border-slate-200/80 dark:border-slate-800 group hover:-translate-y-1">
                        <div class="w-12 h-12 rounded-xl bg-purple-100 dark:bg-purple-950/50 text-purple-600 flex items-center justify-center text-2xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fa-brands fa-php"></i>
                        </div>
                        <h3 class="font-bold text-xl mb-1 text-slate-900 dark:text-white">PHP</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400">Basic backend processing, form scripting, and server logic.</p>
                    </div>

                    <!-- Database -->
                    <div class="p-6 rounded-2xl glass hover:shadow-xl transition-all border border-slate-200/80 dark:border-slate-800 group hover:-translate-y-1">
                        <div class="w-12 h-12 rounded-xl bg-teal-100 dark:bg-teal-950/50 text-teal-600 flex items-center justify-center text-2xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-database"></i>
                        </div>
                        <h3 class="font-bold text-xl mb-1 text-slate-900 dark:text-white">Database</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400">Data storage concepts, basic SQL queries, and structure.</p>
                    </div>

                    <!-- Website Design -->
                    <div class="p-6 rounded-2xl glass hover:shadow-xl transition-all border border-slate-200/80 dark:border-slate-800 group hover:-translate-y-1">
                        <div class="w-12 h-12 rounded-xl bg-pink-100 dark:bg-pink-950/50 text-pink-600 flex items-center justify-center text-2xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-paintbrush"></i>
                        </div>
                        <h3 class="font-bold text-xl mb-1 text-slate-900 dark:text-white">Website Design</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400">UI layout planning, color theory, typography, and clean aesthetic design.</p>
                    </div>

                    <!-- Website Development -->
                    <div class="p-6 rounded-2xl glass hover:shadow-xl transition-all border border-slate-200/80 dark:border-slate-800 group hover:-translate-y-1">
                        <div class="w-12 h-12 rounded-xl bg-indigo-100 dark:bg-indigo-950/50 text-indigo-600 flex items-center justify-center text-2xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-code"></i>
                        </div>
                        <h3 class="font-bold text-xl mb-1 text-slate-900 dark:text-white">Website Development</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400">Building functional, mobile-first websites from design blueprints.</p>
                    </div>

                    <!-- Version Control / Git -->
                    <div class="p-6 rounded-2xl glass hover:shadow-xl transition-all border border-slate-200/80 dark:border-slate-800 group hover:-translate-y-1">
                        <div class="w-12 h-12 rounded-xl bg-rose-100 dark:bg-rose-950/50 text-rose-600 flex items-center justify-center text-2xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fa-brands fa-git-alt"></i>
                        </div>
                        <h3 class="font-bold text-xl mb-1 text-slate-900 dark:text-white">Git & Deployment</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400">Source code version tracking and publishing websites live online.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projects Section -->
        <section id="projects" class="py-20 bg-slate-100/60 dark:bg-slate-900/40 border-y border-slate-200/60 dark:border-slate-800/60">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight">Featured <span class="gradient-text">Projects</span></h2>
                    <p class="text-slate-600 dark:text-slate-400 mt-2">Explore websites and applications created by me and featured collaborators.</p>
                    <div class="w-16 h-1 bg-brand-500 mx-auto mt-3 rounded-full"></div>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Project 1: Abenezer Asrat Portfolio -->
                    <div class="bg-white dark:bg-slate-900 rounded-2xl overflow-hidden border border-slate-200/80 dark:border-slate-800 shadow-md flex flex-col hover:shadow-xl transition-all">
                        <div class="h-48 bg-gradient-to-br from-indigo-600 to-purple-700 flex items-center justify-center p-6 text-white relative group">
                            <div class="text-center">
                                <i class="fa-solid fa-laptop-code text-5xl mb-2 opacity-80"></i>
                                <span class="block font-semibold tracking-wider text-xs uppercase opacity-75">Personal Project</span>
                            </div>
                        </div>
                        <div class="p-6 flex-1 flex flex-col justify-between space-y-4">
                            <div>
                                <h3 class="font-bold text-xl text-slate-900 dark:text-white mb-2">Abenezer Asrat Portfolio</h3>
                                <p class="text-sm text-slate-600 dark:text-slate-400">
                                    Official personal developer portfolio displaying projects, skills, education, and contact details.
                                </p>
                                <div class="flex flex-wrap gap-1.5 mt-4">
                                    <span class="px-2.5 py-1 text-xs rounded-md bg-indigo-50 dark:bg-indigo-950/60 text-indigo-700 dark:text-indigo-300 font-mono">HTML5</span>
                                    <span class="px-2.5 py-1 text-xs rounded-md bg-indigo-50 dark:bg-indigo-950/60 text-indigo-700 dark:text-indigo-300 font-mono">CSS3</span>
                                    <span class="px-2.5 py-1 text-xs rounded-md bg-indigo-50 dark:bg-indigo-950/60 text-indigo-700 dark:text-indigo-300 font-mono">JavaScript</span>
                                </div>
                            </div>
                            <a href="https://abenezerasrat.netlify.app/" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center w-full px-4 py-2.5 rounded-xl bg-brand-600 hover:bg-brand-700 text-white text-sm font-semibold transition-colors">
                                View Live Site <i class="fa-solid fa-arrow-up-right-from-square ml-2 text-xs"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Project 2: Mishael Yibeltal Site -->
                    <div class="bg-white dark:bg-slate-900 rounded-2xl overflow-hidden border border-slate-200/80 dark:border-slate-800 shadow-md flex flex-col hover:shadow-xl transition-all">
                        <div class="h-48 bg-gradient-to-br from-blue-600 to-teal-600 flex items-center justify-center p-6 text-white relative group">
                            <div class="text-center">
                                <i class="fa-solid fa-globe text-5xl mb-2 opacity-80"></i>
                                <span class="block font-semibold tracking-wider text-xs uppercase opacity-75">Featured Web Platform</span>
                            </div>
                        </div>
                        <div class="p-6 flex-1 flex flex-col justify-between space-y-4">
                            <div>
                                <h3 class="font-bold text-xl text-slate-900 dark:text-white mb-2">Mishael Yibeltal</h3>
                                <p class="text-sm text-slate-600 dark:text-slate-400">
                                    Custom modern web project showcasing interactive content and web presentation layout.
                                </p>
                                <div class="flex flex-wrap gap-1.5 mt-4">
                                    <span class="px-2.5 py-1 text-xs rounded-md bg-blue-50 dark:bg-blue-950/60 text-blue-700 dark:text-blue-300 font-mono">Web Design</span>
                                    <span class="px-2.5 py-1 text-xs rounded-md bg-blue-50 dark:bg-blue-950/60 text-blue-700 dark:text-blue-300 font-mono">HTML/CSS</span>
                                </div>
                            </div>
                            <a href="https://mishaelyibeltal.boomurl.me/" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center w-full px-4 py-2.5 rounded-xl bg-brand-600 hover:bg-brand-700 text-white text-sm font-semibold transition-colors">
                                View Live Site <i class="fa-solid fa-arrow-up-right-from-square ml-2 text-xs"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Project 3: Nathan Efrem Site -->
                    <div class="bg-white dark:bg-slate-900 rounded-2xl overflow-hidden border border-slate-200/80 dark:border-slate-800 shadow-md flex flex-col hover:shadow-xl transition-all">
                        <div class="h-48 bg-gradient-to-br from-pink-600 to-rose-600 flex items-center justify-center p-6 text-white relative group">
                            <div class="text-center">
                                <i class="fa-solid fa-layer-group text-5xl mb-2 opacity-80"></i>
                                <span class="block font-semibold tracking-wider text-xs uppercase opacity-75">Featured Web Platform</span>
                            </div>
                        </div>
                        <div class="p-6 flex-1 flex flex-col justify-between space-y-4">
                            <div>
                                <h3 class="font-bold text-xl text-slate-900 dark:text-white mb-2">Nathan Efrem</h3>
                                <p class="text-sm text-slate-600 dark:text-slate-400">
                                    Dynamic web space tailored for modern user interface and seamless navigation.
                                </p>
                                <div class="flex flex-wrap gap-1.5 mt-4">
                                    <span class="px-2.5 py-1 text-xs rounded-md bg-pink-50 dark:bg-pink-950/60 text-pink-700 dark:text-pink-300 font-mono">Frontend</span>
                                    <span class="px-2.5 py-1 text-xs rounded-md bg-pink-50 dark:bg-pink-950/60 text-pink-700 dark:text-pink-300 font-mono">UI/UX</span>
                                </div>
                            </div>
                            <a href="https://nathanefrem.boomurl.me/" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center w-full px-4 py-2.5 rounded-xl bg-brand-600 hover:bg-brand-700 text-white text-sm font-semibold transition-colors">
                                View Live Site <i class="fa-solid fa-arrow-up-right-from-square ml-2 text-xs"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Education Section -->
        <section id="education" class="py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight">Education & <span class="gradient-text">Training</span></h2>
                    <p class="text-slate-600 dark:text-slate-400 mt-2">My academic journey and specialized programming training background.</p>
                    <div class="w-16 h-1 bg-brand-500 mx-auto mt-3 rounded-full"></div>
                </div>

                <div class="max-w-4xl mx-auto space-y-8">
                    <!-- School Timeline Item -->
                    <div class="p-8 rounded-2xl glass border border-slate-200/80 dark:border-slate-800 flex flex-col md:flex-row gap-6 items-start">
                        <div class="w-14 h-14 rounded-2xl bg-indigo-500 text-white flex items-center justify-center text-2xl shrink-0 shadow-md">
                            <i class="fa-solid fa-school"></i>
                        </div>
                        <div class="space-y-2 flex-1">
                            <div class="flex flex-wrap justify-between items-center gap-2">
                                <h3 class="text-xl font-bold text-slate-900 dark:text-white">Wolaita Liqa School</h3>
                                <span class="px-3 py-1 text-xs font-semibold rounded-full bg-brand-100 text-brand-700 dark:bg-brand-950 dark:text-brand-300">Grade 8 Student</span>
                            </div>
                            <p class="text-slate-600 dark:text-slate-300">
                                Currently pursuing my middle school education while building strong academic fundamentals and participating in school technology activities.
                            </p>
                        </div>
                    </div>

                    <!-- Summer Camp Item -->
                    <div class="p-8 rounded-2xl glass border border-slate-200/80 dark:border-slate-800 flex flex-col md:flex-row gap-6 items-start">
                        <div class="w-14 h-14 rounded-2xl bg-pink-500 text-white flex items-center justify-center text-2xl shrink-0 shadow-md">
                            <i class="fa-solid fa-laptop-code"></i>
                        </div>
                        <div class="space-y-2 flex-1">
                            <div class="flex flex-wrap justify-between items-center gap-2">
                                <h3 class="text-xl font-bold text-slate-900 dark:text-white">Summer Camp / CITICS Training & Consultancy Center</h3>
                                <span class="px-3 py-1 text-xs font-semibold rounded-full bg-pink-100 text-pink-700 dark:bg-pink-950 dark:text-pink-300">Specialized Training</span>
                            </div>
                            <p class="text-slate-600 dark:text-slate-300">
                                Intensive practical coding boot camp focused on core web technologies and software engineering practices.
                            </p>
                            <div class="pt-2">
                                <span class="text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400 block mb-2">Key Learning Topics Covered:</span>
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-3 py-1 text-xs rounded-lg bg-slate-200/80 dark:bg-slate-800 text-slate-800 dark:text-slate-200 font-medium">Software Engineering Fundamentals</span>
                                    <span class="px-3 py-1 text-xs rounded-lg bg-slate-200/80 dark:bg-slate-800 text-slate-800 dark:text-slate-200 font-medium">HTML structure</span>
                                    <span class="px-3 py-1 text-xs rounded-lg bg-slate-200/80 dark:bg-slate-800 text-slate-800 dark:text-slate-200 font-medium">CSS styling & Layouts</span>
                                    <span class="px-3 py-1 text-xs rounded-lg bg-slate-200/80 dark:bg-slate-800 text-slate-800 dark:text-slate-200 font-medium">JavaScript Interactivity</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="py-20 bg-slate-100/60 dark:bg-slate-900/40 border-t border-slate-200/60 dark:border-slate-800/60">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight">Get In <span class="gradient-text">Touch</span></h2>
                    <p class="text-slate-600 dark:text-slate-400 mt-2">Have a question or want to work together? Send me a message!</p>
                    <div class="w-16 h-1 bg-brand-500 mx-auto mt-3 rounded-full"></div>
                </div>

                <div class="grid lg:grid-cols-12 gap-8 items-start">
                    <!-- Contact Information -->
                    <div class="lg:col-span-5 space-y-6">
                        <div class="p-8 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200/80 dark:border-slate-800 shadow-sm space-y-6">
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-4">Contact Details</h3>

                            <!-- Email Link -->
                            <a href="mailto:abenezer123m@gmail.com" class="flex items-center gap-4 p-3.5 rounded-xl hover:bg-slate-100 dark:hover:bg-slate-800/60 transition-colors group">
                                <div class="w-12 h-12 rounded-xl bg-indigo-100 dark:bg-indigo-950/60 text-brand-600 dark:text-brand-400 flex items-center justify-center text-xl shrink-0 group-hover:scale-105 transition-transform">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div class="overflow-hidden">
                                    <p class="text-xs text-slate-500 dark:text-slate-400 font-medium">Email Address</p>
                                    <p class="text-sm sm:text-base font-semibold text-slate-900 dark:text-white truncate">abenezer123m@gmail.com</p>
                                </div>
                            </a>

                            <!-- Phone Link -->
                            <a href="tel:+251949023807" class="flex items-center gap-4 p-3.5 rounded-xl hover:bg-slate-100 dark:hover:bg-slate-800/60 transition-colors group">
                                <div class="w-12 h-12 rounded-xl bg-emerald-100 dark:bg-emerald-950/60 text-emerald-600 dark:text-emerald-400 flex items-center justify-center text-xl shrink-0 group-hover:scale-105 transition-transform">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div>
                                    <p class="text-xs text-slate-500 dark:text-slate-400 font-medium">Phone Number</p>
                                    <p class="text-sm sm:text-base font-semibold text-slate-900 dark:text-white">+251 949 023 807</p>
                                </div>
                            </a>

                            <!-- Location -->
                            <div class="flex items-center gap-4 p-3.5 rounded-xl">
                                <div class="w-12 h-12 rounded-xl bg-amber-100 dark:bg-amber-950/60 text-amber-600 dark:text-amber-400 flex items-center justify-center text-xl shrink-0">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div>
                                    <p class="text-xs text-slate-500 dark:text-slate-400 font-medium">Location</p>
                                    <p class="text-sm sm:text-base font-semibold text-slate-900 dark:text-white">Wolaita, Ethiopia</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <div class="lg:col-span-7">
                        <form action="insertmessage.php" method="POST" class="p-8 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200/80 dark:border-slate-800 shadow-sm space-y-4">
                            <div class="grid sm:grid-cols-2 gap-4">
                                <div>
                                    <label for="name" class="block text-xs font-semibold uppercase text-slate-600 dark:text-slate-400 mb-1">Your Name</label>
                                    <input type="text" id="name" name="name" required placeholder="John Doe" class="w-full px-4 py-3 rounded-xl border border-slate-300 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white focus:ring-2 focus:ring-brand-500 focus:outline-none transition-all">
                                </div>
                                <div>
                                    <label for="email" class="block text-xs font-semibold uppercase text-slate-600 dark:text-slate-400 mb-1">Your Email</label>
                                    <input type="email" id="email" name="email" required placeholder="john@example.com" class="w-full px-4 py-3 rounded-xl border border-slate-300 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white focus:ring-2 focus:ring-brand-500 focus:outline-none transition-all">
                                </div>
                            </div>
                            <div>
                                <label for="subject" class="block text-xs font-semibold uppercase text-slate-600 dark:text-slate-400 mb-1">Subject</label>
                                <input type="text" id="subject" name="subject" required placeholder="Project Inquiry" class="w-full px-4 py-3 rounded-xl border border-slate-300 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white focus:ring-2 focus:ring-brand-500 focus:outline-none transition-all">
                            </div>
                            <div>
                                <label for="message" class="block text-xs font-semibold uppercase text-slate-600 dark:text-slate-400 mb-1">Message</label>
                                <textarea id="message" name="message" rows="4" required placeholder="Hello Abenezer, I would like to talk about..." class="w-full px-4 py-3 rounded-xl border border-slate-300 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white focus:ring-2 focus:ring-brand-500 focus:outline-none transition-all"></textarea>
                            </div>
                            <button type="submit" class="w-full py-3.5 px-6 rounded-xl bg-brand-600 hover:bg-brand-700 text-white font-semibold shadow-md shadow-brand-500/20 transition-all flex items-center justify-center gap-2">
                                <i class="fa-solid fa-paper-plane text-sm"></i> Send Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="py-8 bg-white dark:bg-slate-950 border-t border-slate-200 dark:border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-slate-500 dark:text-slate-400 text-sm">
            <p>&copy; <span id="currentYear"></span> Abenezer Asrat. All rights reserved.</p>
        </div>
    </footer>

    <!-- JavaScript Logic -->
    <script>
        // Set dynamic current year in footer
        document.getElementById('currentYear').textContent = new Date().getFullYear();

        // Mobile menu drawer toggle logic
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        const menuIcon = document.getElementById('menuIcon');

        mobileMenuBtn.addEventListener('click', () => {
            const isHidden = mobileMenu.classList.contains('hidden');
            if (isHidden) {
                mobileMenu.classList.remove('hidden');
                menuIcon.classList.remove('fa-bars');
                menuIcon.classList.add('fa-xmark');
            } else {
                mobileMenu.classList.add('hidden');
                menuIcon.classList.remove('fa-xmark');
                menuIcon.classList.add('fa-bars');
            }
        });

        // Close mobile navigation drawer when clicking any link
        document.querySelectorAll('.mobile-nav-link').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                menuIcon.classList.remove('fa-xmark');
                menuIcon.classList.add('fa-bars');
            });
        });

        // Theme Toggle Functionality (Dark / Light Mode)
        const themeToggle = document.getElementById('themeToggle');
        
        function setTheme(isDark) {
            if (isDark) {
                document.documentElement.classList.add('dark');
                localStorage.setItem('theme', 'dark');
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('theme', 'light');
            }
        }

        // Check local storage or system preference on initial load
        const savedTheme = localStorage.getItem('theme');
        if (savedTheme === 'dark' || (!savedTheme && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            setTheme(true);
        } else {
            setTheme(false);
        }

        themeToggle.addEventListener('click', () => {
            const isDark = document.documentElement.classList.contains('dark');
            setTheme(!isDark);
        });
    </script>
</body>
</html>