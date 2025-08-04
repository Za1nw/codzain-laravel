@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section id="home" class="min-h-screen flex items-center justify-center bg-gradient-to-br from-dark-900 via-dark-800 to-primary-900 relative overflow-hidden">
    <!-- Background Animation -->
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-20 left-20 w-72 h-72 bg-primary-500 rounded-full mix-blend-multiply filter blur-xl animate-float"></div>
        <div class="absolute top-40 right-20 w-72 h-72 bg-secondary-500 rounded-full mix-blend-multiply filter blur-xl animate-float" style="animation-delay: 2s;"></div>
        <div class="absolute bottom-20 left-1/2 w-72 h-72 bg-primary-400 rounded-full mix-blend-multiply filter blur-xl animate-float" style="animation-delay: 4s;"></div>
    </div>

    <div class="container mx-auto px-6 text-center relative z-10">
        <div class="max-w-4xl mx-auto">
            <!-- Profile Image -->
            <div class="mb-8 animate-fade-in">
                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=300&h=300&fit=crop&crop=face" 
                     alt="أحمد محمد" 
                     class="w-32 h-32 rounded-full mx-auto border-4 border-primary-500 shadow-2xl animate-glow">
            </div>

            <!-- Main Heading -->
            <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 animate-slide-up">
                أحمد محمد
            </h1>
            
            <!-- Subtitle -->
            <p class="text-xl md:text-2xl text-gray-300 mb-8 animate-slide-up" style="animation-delay: 0.2s;">
                مطور ويب متخصص في Laravel و React
            </p>

            <!-- Description -->
            <p class="text-lg text-gray-400 mb-12 max-w-2xl mx-auto leading-relaxed animate-slide-up" style="animation-delay: 0.4s;">
                أقوم بتطوير تطبيقات ويب حديثة ومتجاوبة باستخدام أحدث التقنيات. خبرة أكثر من 5 سنوات في تطوير الحلول الرقمية المبتكرة.
            </p>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center animate-slide-up" style="animation-delay: 0.6s;">
                <a href="#portfolio" class="bg-primary-600 hover:bg-primary-700 text-white px-8 py-4 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg">
                    استعرض أعمالي
                </a>
                <a href="#contact" class="border-2 border-primary-500 text-primary-400 hover:bg-primary-500 hover:text-white px-8 py-4 rounded-lg font-semibold transition-all duration-300">
                    تواصل معي
                </a>
            </div>

            <!-- Tech Stack -->
            <div class="mt-16 animate-slide-up" style="animation-delay: 0.8s;">
                <p class="text-gray-400 mb-6">التقنيات التي أعمل بها:</p>
                <div class="flex flex-wrap justify-center gap-4">
                    <span class="bg-dark-700 text-primary-400 px-4 py-2 rounded-full text-sm font-medium">Laravel</span>
                    <span class="bg-dark-700 text-secondary-400 px-4 py-2 rounded-full text-sm font-medium">React</span>
                    <span class="bg-dark-700 text-primary-400 px-4 py-2 rounded-full text-sm font-medium">Vue.js</span>
                    <span class="bg-dark-700 text-secondary-400 px-4 py-2 rounded-full text-sm font-medium">Node.js</span>
                    <span class="bg-dark-700 text-primary-400 px-4 py-2 rounded-full text-sm font-medium">MySQL</span>
                    <span class="bg-dark-700 text-secondary-400 px-4 py-2 rounded-full text-sm font-medium">MongoDB</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <a href="#about" class="text-white opacity-70 hover:opacity-100 transition-opacity">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </a>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-20 bg-dark-800">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">نبذة عني</h2>
                <p class="text-xl text-gray-400 max-w-2xl mx-auto">
                    مطور ويب شغوف بالتكنولوجيا والابتكار، أسعى لتقديم حلول رقمية متميزة
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Content -->
                <div>
                    <h3 class="text-2xl font-bold text-white mb-6">مرحباً، أنا أحمد محمد</h3>
                    <p class="text-gray-400 mb-6 leading-relaxed">
                        مطور ويب متخصص في تطوير التطبيقات الحديثة باستخدام Laravel و React. أتمتع بخبرة واسعة في تطوير الحلول الرقمية المبتكرة التي تلبي احتياجات العملاء وتحقق أهدافهم التجارية.
                    </p>
                    <p class="text-gray-400 mb-8 leading-relaxed">
                        أؤمن بأن التكنولوجيا يجب أن تكون في خدمة الإنسان، لذلك أركز على تطوير تطبيقات سهلة الاستخدام وذات أداء عالي. أحب التعلم المستمر ومواكبة أحدث التطورات في عالم البرمجة.
                    </p>

                    <!-- Skills -->
                    <div class="mb-8">
                        <h4 class="text-xl font-semibold text-white mb-4">المهارات الأساسية:</h4>
                        <div class="space-y-4">
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-gray-300">Laravel & PHP</span>
                                    <span class="text-primary-400">95%</span>
                                </div>
                                <div class="w-full bg-dark-700 rounded-full h-2">
                                    <div class="bg-primary-500 h-2 rounded-full" style="width: 95%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-gray-300">React & JavaScript</span>
                                    <span class="text-secondary-400">90%</span>
                                </div>
                                <div class="w-full bg-dark-700 rounded-full h-2">
                                    <div class="bg-secondary-500 h-2 rounded-full" style="width: 90%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-gray-300">Database Design</span>
                                    <span class="text-primary-400">85%</span>
                                </div>
                                <div class="w-full bg-dark-700 rounded-full h-2">
                                    <div class="bg-primary-500 h-2 rounded-full" style="width: 85%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stats -->
                <div class="grid grid-cols-2 gap-6">
                    <div class="bg-dark-700 p-6 rounded-lg text-center">
                        <div class="text-3xl font-bold text-primary-500 mb-2">50+</div>
                        <div class="text-gray-400">مشروع مكتمل</div>
                    </div>
                    <div class="bg-dark-700 p-6 rounded-lg text-center">
                        <div class="text-3xl font-bold text-secondary-500 mb-2">5+</div>
                        <div class="text-gray-400">سنوات خبرة</div>
                    </div>
                    <div class="bg-dark-700 p-6 rounded-lg text-center">
                        <div class="text-3xl font-bold text-primary-500 mb-2">30+</div>
                        <div class="text-gray-400">عميل راضي</div>
                    </div>
                    <div class="bg-dark-700 p-6 rounded-lg text-center">
                        <div class="text-3xl font-bold text-secondary-500 mb-2">24/7</div>
                        <div class="text-gray-400">دعم فني</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Section -->
<section id="portfolio" class="py-20 bg-dark-900">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">معرض الأعمال</h2>
                <p class="text-xl text-gray-400 max-w-2xl mx-auto">
                    مجموعة مختارة من أفضل المشاريع التي قمت بتطويرها
                </p>
            </div>

            <!-- Portfolio Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div class="bg-dark-800 rounded-lg overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                    <div class="h-48 bg-gradient-to-br from-primary-500 to-primary-700 flex items-center justify-center">
                        <svg class="w-16 h-16 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white mb-3">منصة التجارة الإلكترونية</h3>
                        <p class="text-gray-400 mb-4">منصة متكاملة للتجارة الإلكترونية مطورة بـ Laravel مع لوحة تحكم متقدمة</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-primary-600 text-white px-2 py-1 rounded text-sm">Laravel</span>
                            <span class="bg-secondary-600 text-white px-2 py-1 rounded text-sm">Vue.js</span>
                            <span class="bg-primary-600 text-white px-2 py-1 rounded text-sm">MySQL</span>
                        </div>
                        <a href="#" class="text-primary-400 hover:text-primary-300 font-semibold">عرض المشروع →</a>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="bg-dark-800 rounded-lg overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                    <div class="h-48 bg-gradient-to-br from-secondary-500 to-secondary-700 flex items-center justify-center">
                        <svg class="w-16 h-16 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white mb-3">نظام إدارة المشاريع</h3>
                        <p class="text-gray-400 mb-4">تطبيق ويب لإدارة المشاريع والمهام مع واجهة مستخدم حديثة</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-primary-600 text-white px-2 py-1 rounded text-sm">React</span>
                            <span class="bg-secondary-600 text-white px-2 py-1 rounded text-sm">Node.js</span>
                            <span class="bg-primary-600 text-white px-2 py-1 rounded text-sm">MongoDB</span>
                        </div>
                        <a href="#" class="text-secondary-400 hover:text-secondary-300 font-semibold">عرض المشروع →</a>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="bg-dark-800 rounded-lg overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                    <div class="h-48 bg-gradient-to-br from-primary-600 to-secondary-600 flex items-center justify-center">
                        <svg class="w-16 h-16 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 5a2 2 0 012-2h10a2 2 0 012 2v8a2 2 0 01-2 2h-2.22l.123.489.804.804A1 1 0 0113 18H7a1 1 0 01-.707-1.707l.804-.804L7.22 15H5a2 2 0 01-2-2V5z"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white mb-3">تطبيق الحجوزات</h3>
                        <p class="text-gray-400 mb-4">نظام حجوزات متطور للفنادق والمطاعم مع دفع إلكتروني آمن</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-primary-600 text-white px-2 py-1 rounded text-sm">Laravel</span>
                            <span class="bg-secondary-600 text-white px-2 py-1 rounded text-sm">React</span>
                            <span class="bg-primary-600 text-white px-2 py-1 rounded text-sm">Stripe</span>
                        </div>
                        <a href="#" class="text-primary-400 hover:text-primary-300 font-semibold">عرض المشروع →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="py-20 bg-dark-800">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">الخدمات</h2>
                <p class="text-xl text-gray-400 max-w-2xl mx-auto">
                    خدمات تطوير شاملة لتحويل أفكارك إلى واقع رقمي
                </p>
            </div>

            <!-- Services Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="bg-dark-700 p-8 rounded-lg text-center hover:bg-dark-600 transition-all duration-300 transform hover:scale-105">
                    <div class="w-16 h-16 bg-primary-600 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4">تطوير مواقع الويب</h3>
                    <p class="text-gray-400 leading-relaxed">تطوير مواقع ويب حديثة ومتجاوبة باستخدام أحدث التقنيات والمعايير العالمية</p>
                </div>

                <!-- Service 2 -->
                <div class="bg-dark-700 p-8 rounded-lg text-center hover:bg-dark-600 transition-all duration-300 transform hover:scale-105">
                    <div class="w-16 h-16 bg-secondary-600 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 5a2 2 0 012-2h10a2 2 0 012 2v8a2 2 0 01-2 2h-2.22l.123.489.804.804A1 1 0 0113 18H7a1 1 0 01-.707-1.707l.804-.804L7.22 15H5a2 2 0 01-2-2V5z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4">تطبيقات الويب</h3>
                    <p class="text-gray-400 leading-relaxed">تطوير تطبيقات ويب تفاعلية ومعقدة لإدارة الأعمال والعمليات التجارية</p>
                </div>

                <!-- Service 3 -->
                <div class="bg-dark-700 p-8 rounded-lg text-center hover:bg-dark-600 transition-all duration-300 transform hover:scale-105">
                    <div class="w-16 h-16 bg-primary-600 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4">التجارة الإلكترونية</h3>
                    <p class="text-gray-400 leading-relaxed">إنشاء متاجر إلكترونية متكاملة مع أنظمة دفع آمنة وإدارة المخزون</p>
                </div>

                <!-- Service 4 -->
                <div class="bg-dark-700 p-8 rounded-lg text-center hover:bg-dark-600 transition-all duration-300 transform hover:scale-105">
                    <div class="w-16 h-16 bg-secondary-600 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4">API Development</h3>
                    <p class="text-gray-400 leading-relaxed">تطوير واجهات برمجة التطبيقات (APIs) قوية وآمنة للتكامل مع الأنظمة المختلفة</p>
                </div>

                <!-- Service 5 -->
                <div class="bg-dark-700 p-8 rounded-lg text-center hover:bg-dark-600 transition-all duration-300 transform hover:scale-105">
                    <div class="w-16 h-16 bg-primary-600 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4">قواعد البيانات</h3>
                    <p class="text-gray-400 leading-relaxed">تصميم وتطوير قواعد بيانات محسنة وآمنة لضمان الأداء العالي</p>
                </div>

                <!-- Service 6 -->
                <div class="bg-dark-700 p-8 rounded-lg text-center hover:bg-dark-600 transition-all duration-300 transform hover:scale-105">
                    <div class="w-16 h-16 bg-secondary-600 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 2L3 7v11a1 1 0 001 1h12a1 1 0 001-1V7l-7-5z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4">الاستشارات التقنية</h3>
                    <p class="text-gray-400 leading-relaxed">تقديم استشارات تقنية متخصصة لاختيار أفضل الحلول التكنولوجية</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section id="testimonials" class="py-20 bg-dark-900">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">آراء العملاء</h2>
                <p class="text-xl text-gray-400 max-w-2xl mx-auto">
                    ما يقوله عملاؤنا عن جودة الخدمات المقدمة
                </p>
            </div>

            <!-- Testimonials Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-dark-800 p-8 rounded-lg">
                    <div class="flex items-center mb-6">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=60&h=60&fit=crop&crop=face" 
                             alt="محمد علي" 
                             class="w-12 h-12 rounded-full ml-4">
                        <div>
                            <h4 class="text-white font-semibold">محمد علي</h4>
                            <p class="text-gray-400 text-sm">مدير شركة التقنية المتقدمة</p>
                        </div>
                    </div>
                    <p class="text-gray-300 leading-relaxed mb-4">
                        "أحمد مطور محترف جداً، قام بتطوير موقعنا الإلكتروني بجودة عالية وفي الوقت المحدد. أنصح بالتعامل معه."
                    </p>
                    <div class="flex text-yellow-400">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-dark-800 p-8 rounded-lg">
                    <div class="flex items-center mb-6">
                        <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?w=60&h=60&fit=crop&crop=face" 
                             alt="فاطمة أحمد" 
                             class="w-12 h-12 rounded-full ml-4">
                        <div>
                            <h4 class="text-white font-semibold">فاطمة أحمد</h4>
                            <p class="text-gray-400 text-sm">مؤسسة متجر الأزياء</p>
                        </div>
                    </div>
                    <p class="text-gray-300 leading-relaxed mb-4">
                        "تطبيق التجارة الإلكترونية الذي طوره أحمد ساعدني كثيراً في زيادة مبيعاتي. التصميم رائع والأداء ممتاز."
                    </p>
                    <div class="flex text-yellow-400">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-dark-800 p-8 rounded-lg">
                    <div class="flex items-center mb-6">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=60&h=60&fit=crop&crop=face" 
                             alt="خالد محمود" 
                             class="w-12 h-12 rounded-full ml-4">
                        <div>
                            <h4 class="text-white font-semibold">خالد محمود</h4>
                            <p class="text-gray-400 text-sm">مدير تقنية المعلومات</p>
                        </div>
                    </div>
                    <p class="text-gray-300 leading-relaxed mb-4">
                        "خبرة ممتازة في Laravel و React. أحمد يفهم المتطلبات بسرعة وينفذها بدقة عالية. شكراً لك."
                    </p>
                    <div class="flex text-yellow-400">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section id="faq" class="py-20 bg-dark-800">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">الأسئلة الشائعة</h2>
                <p class="text-xl text-gray-400 max-w-2xl mx-auto">
                    إجابات على أكثر الأسئلة شيوعاً حول خدماتي
                </p>
            </div>

            <!-- FAQ Items -->
            <div class="space-y-6">
                <!-- FAQ 1 -->
                <div class="bg-dark-700 rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-white mb-3">كم يستغرق تطوير موقع ويب؟</h3>
                    <p class="text-gray-400 leading-relaxed">
                        يعتمد الوقت على تعقيد المشروع ومتطلباته. عادة ما يستغرق موقع بسيط من 2-4 أسابيع، بينما المشاريع المعقدة قد تحتاج من 6-12 أسبوع.
                    </p>
                </div>

                <!-- FAQ 2 -->
                <div class="bg-dark-700 rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-white mb-3">هل تقدم خدمة الصيانة بعد التسليم؟</h3>
                    <p class="text-gray-400 leading-relaxed">
                        نعم، أقدم خدمة صيانة شاملة تشمل التحديثات الأمنية، إصلاح الأخطاء، والدعم الفني لمدة 6 أشهر مجاناً بعد التسليم.
                    </p>
                </div>

                <!-- FAQ 3 -->
                <div class="bg-dark-700 rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-white mb-3">ما هي التقنيات التي تستخدمها؟</h3>
                    <p class="text-gray-400 leading-relaxed">
                        أستخدم أحدث التقنيات مثل Laravel، React، Vue.js، Node.js، MySQL، MongoDB وغيرها حسب متطلبات المشروع.
                    </p>
                </div>

                <!-- FAQ 4 -->
                <div class="bg-dark-700 rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-white mb-3">هل المواقع متجاوبة مع الهواتف المحمولة؟</h3>
                    <p class="text-gray-400 leading-relaxed">
                        بالطبع، جميع المواقع التي أطورها متجاوبة بالكامل وتعمل بشكل مثالي على جميع الأجهزة والشاشات.
                    </p>
                </div>

                <!-- FAQ 5 -->
                <div class="bg-dark-700 rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-white mb-3">كيف يتم الدفع؟</h3>
                    <p class="text-gray-400 leading-relaxed">
                        يتم الدفع على مراحل: 50% عند بداية المشروع و 50% عند التسليم النهائي. أقبل التحويل البنكي والدفع الإلكتروني.
                    </p>
                </div>

                <!-- FAQ 6 -->
                <div class="bg-dark-700 rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-white mb-3">هل تقدم تدريب على استخدام الموقع؟</h3>
                    <p class="text-gray-400 leading-relaxed">
                        نعم، أقدم جلسة تدريبية مجانية لتعليم العميل كيفية استخدام وإدارة الموقع، بالإضافة إلى دليل مستخدم مفصل.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-20 bg-dark-900">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">تواصل معي</h2>
                <p class="text-xl text-gray-400 max-w-2xl mx-auto">
                    هل لديك مشروع في ذهنك؟ دعنا نتحدث ونحوله إلى واقع
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12">
                <!-- Contact Info -->
                <div>
                    <h3 class="text-2xl font-bold text-white mb-8">معلومات التواصل</h3>
                    
                    <div class="space-y-6">
                        <!-- Email -->
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-primary-600 rounded-lg flex items-center justify-center ml-4">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold">البريد الإلكتروني</h4>
                                <p class="text-gray-400">ahmed@example.com</p>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-secondary-600 rounded-lg flex items-center justify-center ml-4">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold">رقم الهاتف</h4>
                                <p class="text-gray-400">+966 50 123 4567</p>
                            </div>
                        </div>

                        <!-- Location -->
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-primary-600 rounded-lg flex items-center justify-center ml-4">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold">الموقع</h4>
                                <p class="text-gray-400">الرياض، المملكة العربية السعودية</p>
                            </div>
                        </div>

                        <!-- Working Hours -->
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-secondary-600 rounded-lg flex items-center justify-center ml-4">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold">ساعات العمل</h4>
                                <p class="text-gray-400">الأحد - الخميس: 9:00 ص - 6:00 م</p>
                            </div>
                        </div>
                    </div>

                    <!-- Social Links -->
                    <div class="mt-8">
                        <h4 class="text-white font-semibold mb-4">تابعني على:</h4>
                        <div class="flex space-x-4">
                            <a href="#" class="w-10 h-10 bg-primary-600 rounded-lg flex items-center justify-center hover:bg-primary-700 transition-colors">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-10 h-10 bg-secondary-600 rounded-lg flex items-center justify-center hover:bg-secondary-700 transition-colors">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-10 h-10 bg-primary-600 rounded-lg flex items-center justify-center hover:bg-primary-700 transition-colors">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24c6.624 0 11.99-5.367 11.99-12C24.007 5.367 18.641.001.012.001z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="bg-dark-800 p-8 rounded-lg">
                    <h3 class="text-2xl font-bold text-white mb-6">أرسل رسالة</h3>
                    
                    <form class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-gray-300 mb-2">الاسم</label>
                                <input type="text" class="w-full bg-dark-700 border border-dark-600 rounded-lg px-4 py-3 text-white focus:border-primary-500 focus:outline-none">
                            </div>
                            <div>
                                <label class="block text-gray-300 mb-2">البريد الإلكتروني</label>
                                <input type="email" class="w-full bg-dark-700 border border-dark-600 rounded-lg px-4 py-3 text-white focus:border-primary-500 focus:outline-none">
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-gray-300 mb-2">الموضوع</label>
                            <input type="text" class="w-full bg-dark-700 border border-dark-600 rounded-lg px-4 py-3 text-white focus:border-primary-500 focus:outline-none">
                        </div>
                        
                        <div>
                            <label class="block text-gray-300 mb-2">الرسالة</label>
                            <textarea rows="5" class="w-full bg-dark-700 border border-dark-600 rounded-lg px-4 py-3 text-white focus:border-primary-500 focus:outline-none resize-none"></textarea>
                        </div>
                        
                        <button type="submit" class="w-full bg-primary-600 hover:bg-primary-700 text-white font-semibold py-3 px-6 rounded-lg transition-colors">
                            إرسال الرسالة
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

