@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section id="home" class="hero-bg min-h-screen flex items-center justify-center relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <!-- Profile Image -->
        <div class="mb-8 animate-on-scroll">
            <div class="relative inline-block">
                <div class="neon-border w-48 h-48 mx-auto mb-6 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=300&h=300&fit=crop&crop=face" 
                         alt="زين - مطور واجهات" 
                         class="w-full h-full object-cover">
                </div>
                <div class="absolute -top-2 -right-2 w-6 h-6 bg-primary-500 rounded-full animate-pulse"></div>
            </div>
        </div>

        <!-- Main Heading -->
        <div class="animate-on-scroll">
            <h1 class="text-5xl md:text-7xl font-bold mb-6">
                أهلاً، أنا <span class="text-primary-500">زين</span>
            </h1>
            <h2 class="text-3xl md:text-4xl font-semibold mb-8 text-secondary-400">
                أبني لك مواقع تبهر جمهورك!
            </h2>
        </div>

        <!-- Description -->
        <div class="animate-on-scroll">
            <p class="text-xl text-gray-300 mb-12 max-w-3xl mx-auto leading-relaxed">
                مطور واجهات أمامية متخصص في إنشاء تجارب رقمية استثنائية باستخدام أحدث التقنيات والتصاميم العصرية
            </p>
        </div>

        <!-- Tech Stack -->
        <div class="animate-on-scroll mb-12">
            <div class="flex flex-wrap justify-center gap-4 mb-8">
                <span class="tech-badge">Laravel</span>
                <span class="tech-badge">Next</span>
                <span class="tech-badge">React</span>
                <span class="tech-badge">Python</span>
                <span class="tech-badge">Flutter</span>
            </div>
        </div>

        <!-- CTA Buttons -->
        <div class="animate-on-scroll">
            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                <a href="#contact" class="btn-primary">
                    هيا نبدأ معاً 🚀
                </a>
                <a href="#portfolio" class="btn-secondary">
                    استكشف أعمالي
                </a>
            </div>
        </div>

        <!-- Social Links -->
        <div class="animate-on-scroll mt-12">
            <div class="flex justify-center space-x-6 space-x-reverse">
                <a href="#" class="social-icon">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.748-1.378 0 0-.599 2.282-.744 2.840-.282 1.084-1.064 2.456-1.549 3.235C9.584 23.815 10.77 24.001 12.017 24.001c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001 12.017.001z"/>
                    </svg>
                </a>
                <a href="#" class="social-icon">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                    </svg>
                </a>
                <a href="#" class="social-icon">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                    </svg>
                </a>
                <a href="#" class="social-icon">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <svg class="w-6 h-6 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-20 bg-dark-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="section-title">نبذة عني</h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Text Content -->
            <div class="animate-on-scroll">
                <h3 class="text-3xl font-bold mb-6">مرحباً، أنا زين - مطور واجهات إبداعي</h3>
                <p class="text-gray-300 text-lg leading-relaxed mb-6">
                    أتخصص في تطوير واجهات المستخدم الحديثة والتفاعلية، مع التركيز على تجربة المستخدم وسهولة الاستخدام. 
                    أحب تحويل الأفكار الإبداعية إلى مواقع وتطبيقات رقمية تترك انطباعاً لا يُنسى.
                </p>
                <p class="text-gray-300 text-lg leading-relaxed mb-8">
                    أستخدم أحدث التقنيات والممارسات لضمان تقديم منتجات عالية الجودة، سريعة التحميل، ومتوافقة مع جميع الأجهزة والمتصفحات.
                </p>
                
                <div class="flex items-center mb-8">
                    <svg class="w-5 h-5 text-primary-500 ml-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="text-gray-300">📍 صنعاء، اليمن</span>
                </div>
            </div>

            <!-- Stats -->
            <div class="animate-on-scroll">
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-8">
                    <div class="text-center">
                        <div class="text-4xl font-bold text-primary-500 mb-2">50+</div>
                        <div class="text-gray-300">مشروع مكتمل</div>
                        <div class="text-sm text-gray-400">مواقع وتطبيقات ناجحة</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-bold text-secondary-500 mb-2">30+</div>
                        <div class="text-gray-300">عميل راضٍ</div>
                        <div class="text-sm text-gray-400">تقييمات إيجابية ممتازة</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-bold text-primary-500 mb-2">100%</div>
                        <div class="text-gray-300">تصميم متجاوب</div>
                        <div class="text-sm text-gray-400">يعمل على جميع الأجهزة</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Skills Section -->
        <div class="mt-20 animate-on-scroll">
            <h3 class="text-2xl font-bold text-center mb-12">فريقي التقني</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Frontend -->
                <div class="bg-dark-700 rounded-lg p-6 card-hover">
                    <h4 class="text-lg font-semibold mb-4 text-primary-500">الواجهات الأمامية</h4>
                    <div class="space-y-2">
                        <span class="skill-tag">React</span>
                        <span class="skill-tag">Next.js</span>
                        <span class="skill-tag">HTML5</span>
                        <span class="skill-tag">CSS3</span>
                        <span class="skill-tag">JavaScript</span>
                        <span class="skill-tag">TypeScript</span>
                    </div>
                </div>

                <!-- Backend -->
                <div class="bg-dark-700 rounded-lg p-6 card-hover">
                    <h4 class="text-lg font-semibold mb-4 text-secondary-500">الخادم</h4>
                    <div class="space-y-2">
                        <span class="skill-tag">Laravel</span>
                        <span class="skill-tag">Node.js</span>
                        <span class="skill-tag">Python</span>
                        <span class="skill-tag">PHP</span>
                    </div>
                </div>

                <!-- Database -->
                <div class="bg-dark-700 rounded-lg p-6 card-hover">
                    <h4 class="text-lg font-semibold mb-4 text-primary-500">قواعد البيانات</h4>
                    <div class="space-y-2">
                        <span class="skill-tag">MySQL</span>
                        <span class="skill-tag">PostgreSQL</span>
                        <span class="skill-tag">MongoDB</span>
                    </div>
                </div>

                <!-- Tools -->
                <div class="bg-dark-700 rounded-lg p-6 card-hover">
                    <h4 class="text-lg font-semibold mb-4 text-secondary-500">الأدوات والواجهات</h4>
                    <div class="space-y-2">
                        <span class="skill-tag">Git</span>
                        <span class="skill-tag">REST API</span>
                        <span class="skill-tag">Postman</span>
                        <span class="skill-tag">Tailwind</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Section -->
<section id="portfolio" class="py-20 bg-dark-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="section-title">أعمالي المميزة</h2>
            <p class="text-gray-300 text-lg max-w-3xl mx-auto">
                مجموعة مختارة من أفضل مشاريعي التي تُظهر خبرتي في تطوير الواجهات الحديثة
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Project 1 -->
            <div class="bg-dark-800 rounded-lg overflow-hidden card-hover animate-on-scroll">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=400&h=250&fit=crop" 
                         alt="موقع شركة تقنية" 
                         class="w-full h-48 object-cover">
                    <div class="absolute top-4 right-4 bg-primary-500 text-white px-2 py-1 rounded text-sm">
                        Landing Page
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">موقع شركة تقنية</h3>
                    <p class="text-gray-400 mb-4">
                        صفحة هبوط حديثة لشركة تقنية ناشئة مع تصميم عصري وتأثيرات نيون جذابة
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="project-tag">HTML5</span>
                        <span class="project-tag">CSS3</span>
                        <span class="project-tag">JavaScript</span>
                        <span class="project-tag">Animation</span>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="bg-dark-800 rounded-lg overflow-hidden card-hover animate-on-scroll">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=400&h=250&fit=crop" 
                         alt="لوحة إدارة التجارة الإلكترونية" 
                         class="w-full h-48 object-cover">
                    <div class="absolute top-4 right-4 bg-secondary-500 text-white px-2 py-1 rounded text-sm">
                        Web App
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">لوحة إدارة التجارة الإلكترونية</h3>
                    <p class="text-gray-400 mb-4">
                        واجهة إدارة متقدمة للمتاجر الإلكترونية مع إحصائيات تفاعلية ورسوم بيانية
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="project-tag">React</span>
                        <span class="project-tag">Dashboard</span>
                        <span class="project-tag">Charts</span>
                        <span class="project-tag">Responsive</span>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="bg-dark-800 rounded-lg overflow-hidden card-hover animate-on-scroll">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=400&h=250&fit=crop" 
                         alt="تطبيق موبايل UI" 
                         class="w-full h-48 object-cover">
                    <div class="absolute top-4 right-4 bg-purple-500 text-white px-2 py-1 rounded text-sm">
                        Mobile UI
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">تطبيق موبايل UI</h3>
                    <p class="text-gray-400 mb-4">
                        تصميم واجهة مستخدم لتطبيق موبايل مع تجربة مستخدم سلسة وتصميم حديث
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="project-tag">UI/UX</span>
                        <span class="project-tag">Mobile First</span>
                        <span class="project-tag">Prototype</span>
                        <span class="project-tag">Modern</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-12 animate-on-scroll">
            <a href="#contact" class="btn-primary">
                عرض المزيد من الأعمال
            </a>
        </div>
    </div>
</section>

<style>
    .social-icon {
        @apply w-12 h-12 bg-dark-800 rounded-full flex items-center justify-center text-gray-400 hover:text-primary-500 hover:bg-dark-700 transition-all duration-300;
    }
    
    .social-icon:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(34, 197, 94, 0.2);
    }
    
    .skill-tag {
        @apply inline-block bg-dark-600 text-gray-300 px-3 py-1 rounded-full text-sm mb-2 mr-2;
    }
    
    .project-tag {
        @apply inline-block bg-primary-500/20 text-primary-400 px-2 py-1 rounded text-xs;
    }
</style>
@endsection


<!-- Services Section -->
<section id="services" class="py-20 bg-dark-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="section-title">خدماتي المتخصصة</h2>
            <p class="text-gray-300 text-lg max-w-3xl mx-auto">
                أقدم مجموعة شاملة من الخدمات التقنية المتخصصة لتلبية احتياجاتك الرقمية وتحقيق أهدافك بأعلى جودة ممكنة
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Service 1 -->
            <div class="bg-dark-700 rounded-lg p-8 card-hover animate-on-scroll">
                <div class="w-16 h-16 bg-primary-500/20 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-4">تطوير المواقع الإلكترونية</h3>
                <p class="text-gray-400 mb-6">
                    إنشاء مواقع حديثة وسريعة باستخدام أحدث التقنيات مع ضمان الأداء العالي
                </p>
                <ul class="space-y-2 text-sm text-gray-300">
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-primary-500 ml-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        HTML5 & CSS3
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-primary-500 ml-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        JavaScript ES6+
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-primary-500 ml-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        تصميم متجاوب
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-primary-500 ml-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        تحسين الأداء
                    </li>
                </ul>
            </div>

            <!-- Service 2 -->
            <div class="bg-dark-700 rounded-lg p-8 card-hover animate-on-scroll">
                <div class="w-16 h-16 bg-secondary-500/20 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-secondary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-4">تصميم واجهات المستخدم</h3>
                <p class="text-gray-400 mb-6">
                    تصميم واجهات جذابة ومريحة للمستخدم مع التركيز على تجربة الاستخدام
                </p>
                <ul class="space-y-2 text-sm text-gray-300">
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-secondary-500 ml-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        UI/UX Design
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-secondary-500 ml-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        تصميم تفاعلي
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-secondary-500 ml-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        نماذج أولية
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-secondary-500 ml-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        اختبار المستخدم
                    </li>
                </ul>
            </div>

            <!-- Service 3 -->
            <div class="bg-dark-700 rounded-lg p-8 card-hover animate-on-scroll">
                <div class="w-16 h-16 bg-purple-500/20 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-4">تطوير تطبيقات الموبايل</h3>
                <p class="text-gray-400 mb-6">
                    إنشاء تطبيقات موبايل عصرية ومتوافقة مع جميع الأجهزة الذكية
                </p>
                <ul class="space-y-2 text-sm text-gray-300">
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-purple-500 ml-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        Progressive Web Apps
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-purple-500 ml-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        تصميم Mobile First
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-purple-500 ml-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        Touch Optimized
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-purple-500 ml-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        App Like
                    </li>
                </ul>
            </div>

            <!-- Service 4 -->
            <div class="bg-dark-700 rounded-lg p-8 card-hover animate-on-scroll">
                <div class="w-16 h-16 bg-yellow-500/20 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-4">تحسين الأداء</h3>
                <p class="text-gray-400 mb-6">
                    تحسين سرعة التحميل وأداء المواقع لتوفير تجربة استخدام فائقة
                </p>
                <ul class="space-y-2 text-sm text-gray-300">
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-yellow-500 ml-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        تحسين الصور
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-yellow-500 ml-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        ضغط الملفات
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-yellow-500 ml-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        CDN Setup
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-yellow-500 ml-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        Core Web Vitals
                    </li>
                </ul>
            </div>

            <!-- Service 5 -->
            <div class="bg-dark-700 rounded-lg p-8 card-hover animate-on-scroll">
                <div class="w-16 h-16 bg-green-500/20 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-4">تحسين محركات البحث</h3>
                <p class="text-gray-400 mb-6">
                    تحسين المواقع لمحركات البحث لزيادة الوصول والانتشار
                </p>
                <ul class="space-y-2 text-sm text-gray-300">
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-green-500 ml-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        SEO التقني
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-green-500 ml-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        Meta Tags
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-green-500 ml-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        Schema Markup
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-green-500 ml-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        تحسين المحتوى
                    </li>
                </ul>
            </div>

            <!-- Service 6 -->
            <div class="bg-dark-700 rounded-lg p-8 card-hover animate-on-scroll">
                <div class="w-16 h-16 bg-red-500/20 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-4">صفحات الهبوط</h3>
                <p class="text-gray-400 mb-6">
                    إنشاء صفحات هبوط عالية التحويل مصممة لزيادة المبيعات والعملاء
                </p>
                <ul class="space-y-2 text-sm text-gray-300">
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-red-500 ml-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        تصميم جذاب
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-red-500 ml-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        Call to Action
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-red-500 ml-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        A/B Testing
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-red-500 ml-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        تحليل النتائج
                    </li>
                </ul>
            </div>
        </div>

        <!-- Custom Service CTA -->
        <div class="mt-16 text-center animate-on-scroll">
            <div class="bg-gradient-to-r from-primary-500/20 to-secondary-500/20 rounded-lg p-8 border border-primary-500/30">
                <h3 class="text-2xl font-bold mb-4">هل تحتاج خدمة مخصصة؟</h3>
                <p class="text-gray-300 mb-6">
                    أقدم حلول مخصصة تناسب احتياجاتك الفريدة. دعنا نناقش مشروعك
                </p>
                <a href="#contact" class="btn-primary">
                    ابدأ مشروعك الآن
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section id="testimonials" class="py-20 bg-dark-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="section-title">آراء العملاء</h2>
            <p class="text-gray-300 text-lg max-w-3xl mx-auto">
                ما يقوله عملائي الكرام عن تجربتهم معي في تطوير مشاريعهم الرقمية
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="bg-dark-800 rounded-lg p-8 card-hover animate-on-scroll">
                <div class="flex items-center mb-6">
                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=60&h=60&fit=crop&crop=face" 
                         alt="أحمد محمد" 
                         class="w-12 h-12 rounded-full ml-4">
                    <div>
                        <h4 class="font-semibold">أحمد محمد</h4>
                        <p class="text-sm text-gray-400">مدير التسويق - شركة الابتكار التقني</p>
                    </div>
                </div>
                <p class="text-gray-300 leading-relaxed">
                    "عمل زين معنا على تطوير موقع الشركة وكانت النتيجة رائعة! التصميم عصري والموقع سريع جداً. فريق محترف ويسلم في الوقت المحدد."
                </p>
                <div class="flex mt-4">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="bg-dark-800 rounded-lg p-8 card-hover animate-on-scroll">
                <div class="flex items-center mb-6">
                    <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?w=60&h=60&fit=crop&crop=face" 
                         alt="فاطمة أحمد" 
                         class="w-12 h-12 rounded-full ml-4">
                    <div>
                        <h4 class="font-semibold">فاطمة أحمد</h4>
                        <p class="text-sm text-gray-400">صاحبة متجر إلكتروني - متجر النور</p>
                    </div>
                </div>
                <p class="text-gray-300 leading-relaxed">
                    "طور لي زين متجر إلكتروني مذهل! سهل الاستخدام ومتجاوب مع جميع الأجهزة. زادت مبيعاتي بنسبة 150% بعد إطلاق الموقع الجديد."
                </p>
                <div class="flex mt-4">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="bg-dark-800 rounded-lg p-8 card-hover animate-on-scroll">
                <div class="flex items-center mb-6">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=60&h=60&fit=crop&crop=face" 
                         alt="محمد سالم" 
                         class="w-12 h-12 rounded-full ml-4">
                    <div>
                        <h4 class="font-semibold">محمد سالم</h4>
                        <p class="text-sm text-gray-400">رائد أعمال - ستارت اب تك</p>
                    </div>
                </div>
                <p class="text-gray-300 leading-relaxed">
                    "تجربة ممتازة مع زين! فهم احتياجاتي بسرعة وقدم حلول إبداعية. التواصل كان مستمر والنتيجة النهائية فاقت توقعاتي بمراحل."
                </p>
                <div class="flex mt-4">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                </div>
            </div>
        </div>

        <div class="text-center mt-12 animate-on-scroll">
            <p class="text-gray-300 mb-6">
                انضم إلى قائمة عملائي الراضين واحصل على موقع يميزك عن المنافسين
            </p>
            <a href="#contact" class="btn-primary">
                ابدأ مشروعك معي
            </a>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section id="faq" class="py-20 bg-dark-800">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="section-title">أسئلة شائعة</h2>
            <p class="text-gray-300 text-lg">
                إجابات على الأسئلة الأكثر شيوعاً حول خدماتي وطريقة عملي
            </p>
        </div>

        <div class="space-y-4">
            <!-- FAQ Item 1 -->
            <div class="bg-dark-700 rounded-lg animate-on-scroll">
                <button class="faq-button w-full text-right p-6 focus:outline-none" onclick="toggleFAQ(1)">
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-semibold">كم من الوقت يستغرق تطوير موقع ويب؟</span>
                        <svg id="faq-icon-1" class="w-6 h-6 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </button>
                <div id="faq-content-1" class="hidden px-6 pb-6">
                    <p class="text-gray-300 leading-relaxed">
                        يعتمد الوقت على تعقيد المشروع وحجمه. عادة ما تستغرق المواقع البسيطة من 1-2 أسبوع، بينما المواقع المعقدة قد تحتاج من 4-8 أسابيع. سأقدم لك جدولاً زمنياً مفصلاً بعد مناقشة متطلبات مشروعك.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="bg-dark-700 rounded-lg animate-on-scroll">
                <button class="faq-button w-full text-right p-6 focus:outline-none" onclick="toggleFAQ(2)">
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-semibold">هل تقدم خدمات الصيانة بعد التسليم؟</span>
                        <svg id="faq-icon-2" class="w-6 h-6 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </button>
                <div id="faq-content-2" class="hidden px-6 pb-6">
                    <p class="text-gray-300 leading-relaxed">
                        نعم، أقدم خدمات الصيانة والدعم التقني بعد التسليم. يشمل ذلك إصلاح الأخطاء، التحديثات الأمنية، وإضافة ميزات جديدة. أقدم ضمان مجاني لمدة شهر، وبعدها يمكنك الاشتراك في خطة صيانة شهرية أو سنوية.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="bg-dark-700 rounded-lg animate-on-scroll">
                <button class="faq-button w-full text-right p-6 focus:outline-none" onclick="toggleFAQ(3)">
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-semibold">ما هي التقنيات التي تستخدمها في التطوير؟</span>
                        <svg id="faq-icon-3" class="w-6 h-6 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </button>
                <div id="faq-content-3" class="hidden px-6 pb-6">
                    <p class="text-gray-300 leading-relaxed">
                        أستخدم أحدث التقنيات مثل React، Next.js، Laravel، Node.js، وPython. للتصميم أستخدم Tailwind CSS وFigma. أختار التقنية المناسبة حسب متطلبات كل مشروع لضمان أفضل أداء وتجربة مستخدم.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="bg-dark-700 rounded-lg animate-on-scroll">
                <button class="faq-button w-full text-right p-6 focus:outline-none" onclick="toggleFAQ(4)">
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-semibold">هل المواقع التي تطورها متوافقة مع الهواتف؟</span>
                        <svg id="faq-icon-4" class="w-6 h-6 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </button>
                <div id="faq-content-4" class="hidden px-6 pb-6">
                    <p class="text-gray-300 leading-relaxed">
                        بالطبع! جميع المواقع التي أطورها متجاوبة 100% ومتوافقة مع جميع الأجهزة (هواتف، تابلت، حاسوب). أتبع مبدأ Mobile First في التصميم لضمان تجربة مثالية على الهواتف الذكية.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 5 -->
            <div class="bg-dark-700 rounded-lg animate-on-scroll">
                <button class="faq-button w-full text-right p-6 focus:outline-none" onclick="toggleFAQ(5)">
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-semibold">كيف تتم عملية التواصل أثناء المشروع؟</span>
                        <svg id="faq-icon-5" class="w-6 h-6 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </button>
                <div id="faq-content-5" class="hidden px-6 pb-6">
                    <p class="text-gray-300 leading-relaxed">
                        أحافظ على تواصل مستمر مع العملاء عبر واتساب، إيميل، أو أي وسيلة تفضلها. أرسل تحديثات دورية عن تقدم العمل وأطلب رأيك في كل مرحلة مهمة لضمان أن النتيجة تلبي توقعاتك تماماً.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 6 -->
            <div class="bg-dark-700 rounded-lg animate-on-scroll">
                <button class="faq-button w-full text-right p-6 focus:outline-none" onclick="toggleFAQ(6)">
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-semibold">ما هي تكلفة تطوير موقع ويب؟</span>
                        <svg id="faq-icon-6" class="w-6 h-6 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </button>
                <div id="faq-content-6" class="hidden px-6 pb-6">
                    <p class="text-gray-300 leading-relaxed">
                        التكلفة تعتمد على حجم وتعقيد المشروع. المواقع البسيطة تبدأ من $500، بينما المواقع المعقدة قد تصل إلى $3000 أو أكثر. أقدم عروض أسعار مفصلة ومجانية بعد مناقشة متطلباتك.
                    </p>
                </div>
            </div>
        </div>

        <div class="text-center mt-12 animate-on-scroll">
            <div class="bg-gradient-to-r from-primary-500/20 to-secondary-500/20 rounded-lg p-8 border border-primary-500/30">
                <h3 class="text-xl font-bold mb-4">لديك سؤال آخر؟</h3>
                <p class="text-gray-300 mb-6">
                    لا تتردد في التواصل معي للحصول على إجابات مفصلة حول مشروعك
                </p>
                <a href="#contact" class="btn-primary">
                    تواصل معي الآن
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-20 bg-dark-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="section-title">لنبدأ مشروعك</h2>
            <p class="text-gray-300 text-lg max-w-3xl mx-auto">
                هل لديك فكرة مميزة؟ دعنا نحققها معاً! أرسل لي رسالة وسأرد عليك في أقرب وقت ممكن
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div class="animate-on-scroll">
                <div class="bg-dark-800 rounded-lg p-8">
                    <h3 class="text-2xl font-bold mb-6">أرسل لي رسالة</h3>
                    <form action="#" method="POST" class="space-y-6">
                        @csrf
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-300 mb-2">الاسم الكامل</label>
                            <input type="text" id="name" name="name" required
                                   class="w-full px-4 py-3 bg-dark-700 border border-dark-600 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent text-white placeholder-gray-400"
                                   placeholder="أدخل اسمك الكامل">
                        </div>
                        
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-300 mb-2">البريد الإلكتروني</label>
                            <input type="email" id="email" name="email" required
                                   class="w-full px-4 py-3 bg-dark-700 border border-dark-600 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent text-white placeholder-gray-400"
                                   placeholder="أدخل بريدك الإلكتروني">
                        </div>
                        
                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-300 mb-2">موضوع الرسالة</label>
                            <input type="text" id="subject" name="subject" required
                                   class="w-full px-4 py-3 bg-dark-700 border border-dark-600 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent text-white placeholder-gray-400"
                                   placeholder="موضوع رسالتك">
                        </div>
                        
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-300 mb-2">الرسالة</label>
                            <textarea id="message" name="message" rows="5" required
                                      class="w-full px-4 py-3 bg-dark-700 border border-dark-600 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent text-white placeholder-gray-400 resize-none"
                                      placeholder="اكتب رسالتك هنا..."></textarea>
                        </div>
                        
                        <button type="submit" class="w-full btn-primary">
                            إرسال الرسالة
                        </button>
                    </form>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="animate-on-scroll">
                <div class="space-y-8">
                    <div>
                        <h3 class="text-2xl font-bold mb-6">معلومات التواصل</h3>
                        
                        <div class="space-y-6">
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-primary-500/20 rounded-lg flex items-center justify-center ml-4">
                                    <svg class="w-6 h-6 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold">الموقع</h4>
                                    <p class="text-gray-400">صنعاء، اليمن</p>
                                </div>
                            </div>
                            
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-secondary-500/20 rounded-lg flex items-center justify-center ml-4">
                                    <svg class="w-6 h-6 text-secondary-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold">البريد الإلكتروني</h4>
                                    <p class="text-gray-400">info@codzain.com</p>
                                </div>
                            </div>
                            
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-green-500/20 rounded-lg flex items-center justify-center ml-4">
                                    <svg class="w-6 h-6 text-green-500" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.087"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold">واتساب</h4>
                                    <p class="text-gray-400">+967 123 456 789</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-xl font-bold mb-4">تابعني على</h3>
                        <div class="flex space-x-4 space-x-reverse">
                            <a href="#" class="social-icon">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                                </svg>
                            </a>
                            <a href="#" class="social-icon">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                            </a>
                            <a href="#" class="social-icon">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.748-1.378 0 0-.599 2.282-.744 2.840-.282 1.084-1.064 2.456-1.549 3.235C9.584 23.815 10.77 24.001 12.017 24.001c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001 12.017.001z"/>
                                </svg>
                            </a>
                            <a href="#" class="social-icon">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12.051 3.999a9.053 9.053 0 110 18.106 9.053 9.053 0 010-18.106m.878 12.618c4.186 0 6.482-3.467 6.482-6.482 0-.099 0-.197-.007-.294a4.63 4.63 0 001.137-1.18 4.54 4.54 0 01-1.308.359 2.28 2.28 0 001.003-1.26 4.56 4.56 0 01-1.447.552 2.28 2.28 0 00-3.875 2.077 6.46 6.46 0 01-4.693-2.38 2.28 2.28 0 00.706 3.042 2.26 2.26 0 01-1.032-.285v.029a2.28 2.28 0 001.828 2.235 2.28 2.28 0 01-1.029.039 2.28 2.28 0 002.13 1.584 4.57 4.57 0 01-2.828.978 4.59 4.59 0 01-.543-.032 6.44 6.44 0 003.489 1.022"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="bg-gradient-to-r from-green-500/20 to-green-600/20 rounded-lg p-6 border border-green-500/30">
                        <h3 class="text-xl font-bold mb-4">مستعد لبدء مشروعك؟</h3>
                        <p class="text-gray-300 mb-4">
                            دعنا نحول فكرتك إلى واقع رقمي مبهر
                        </p>
                        <a href="https://wa.me/967123456789" target="_blank" class="btn-primary inline-flex items-center">
                            <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.087"/>
                            </svg>
                            تواصل عبر واتساب
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function toggleFAQ(id) {
        const content = document.getElementById(`faq-content-${id}`);
        const icon = document.getElementById(`faq-icon-${id}`);
        
        if (content.classList.contains('hidden')) {
            content.classList.remove('hidden');
            icon.style.transform = 'rotate(180deg)';
        } else {
            content.classList.add('hidden');
            icon.style.transform = 'rotate(0deg)';
        }
    }
</script>

