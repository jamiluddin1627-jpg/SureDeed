<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suredeed - Smart Land & Legal Services</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Noto+Sans+Bengali:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        body {
            font-family: 'Inter', 'Noto Sans Bengali', sans-serif;
        }
        /* Custom Scrollbar Hiding for the Horizontal Section */
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        
        /* Smooth fade for testimonial text */
        .fade-in-text {
            animation: fadeIn 0.5s;
        }
        
        @keyframes fadeIn {
            0% { opacity: 0; transform: translateY(10px); }
            100% { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

    <nav class="bg-red-600 shadow-sm fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="shrink-0 flex items-center gap-2">
                    <div class="bg-red-600 rounded-lg p-1">
                        <img src="{{ asset('images/white_icon.png') }}" onerror="this.src='https://placehold.co/100x100/ffffff/D32F2F?text=S'" alt="Suredeed Logo" class="h-8 w-8 object-contain rounded">
                    </div>
                    <span class="text-2xl font-bold text-white">Suredeed</span>
                </div>
                
                <div class="hidden md:flex space-x-8">
                    <a href="/" class="text-white hover:text-gray-200 font-medium">Home</a>
                    <a href="/services" class="text-white hover:text-gray-200 font-medium">Services</a>
                    <a href="/about" class="text-white hover:text-gray-200 font-medium">About us</a>
                    <a href="/contact_us" class="text-white hover:text-gray-200 font-medium">Contact</a>
                </div>
                
                <div class="md:hidden">
                    <button class="text-white hover:text-gray-200">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <header class="pt-20 pb-12 bg-white lg:pt-24 lg:pb-20 overflow-hidden relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col-reverse lg:flex-row items-center">
            
            <div class="w-full lg:w-1/2 text-center lg:text-left mt-12 lg:mt-0 z-10">
                <h1 class="text-2xl lg:text-3xl font-extrabold text-gray-900 leading-tight">
                    #1 Smart Land & Legal Services <br>
                    <span class="text-red-600">Platform in Bangladesh</span> <br> 
                </h1>
                <p class="mt-6 text-xl text-gray-600">
                    Reliable, Secure, and Convenient Services at Your Fingertips.
                </p>
                <div class="mt-8 flex justify-center lg:justify-start gap-4">
                    <button class="bg-green-700 text-white px-5 py-3 rounded-lg flex items-center hover:bg-gray-800 transition shadow-lg">
                        <i class="fab fa-google-play text-3xl mr-3"></i>
                        <div class="text-left">
                            <div class="text-xs uppercase">Get it on</div>
                            <div class="text-base font-bold">Google Play</div>
                        </div>
                    </button>
                    <button class="bg-blue-400 text-white px-5 py-3 rounded-lg flex items-center hover:bg-gray-800 transition shadow-lg">
                        <i class="fab fa-apple text-3xl mr-3"></i>
                        <div class="text-left">
                            <div class="text-xs uppercase">Download on the</div>
                            <div class="text-base font-bold">App Store</div>
                        </div>
                    </button>
                </div>
            </div>

            <div class="w-full lg:w-1/2 flex justify-center lg:justify-end relative">
                <img src="{{ asset('images/slider1.webp') }}" 
                     onerror="this.src='https://placehold.co/800x800/ffecec/D32F2F?text=App+Mockup+Large'" 
                     alt="Suredeed App Mockup" 
                     class="w-full max-w-sm lg:max-w-[130%] lg:w-[130%] rounded-xl  transform lg:-translate-y-10 lg:translate-x-10">
            </div>

        </div>
    </header>

    <section id="services" class="bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900">Our Services</h2>
                <p class="mt-2 text-gray-600">We offer a range of services to meet your land and legal documentation needs.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition relative overflow-hidden group">
                    <div class="absolute top-0 left-0 w-full h-1 bg-cyan-500"></div>
                    <div class="flex justify-between items-start">
                        <h3 class="text-xl font-bold text-gray-900">খতিয়ান সেবা</h3>
                        <div class="p-2 bg-purple-100 rounded-full text-cyan-600"><i class="fas fa-file-alt"></i></div>
                    </div>
                    <p class="mt-4 text-gray-600 text-sm">Comprehensive assistance with land records.</p>
                </div>
                
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition relative overflow-hidden group">
                    <div class="absolute top-0 left-0 w-full h-1 bg-purple-500"></div>
                    <div class="flex justify-between items-start">
                        <h3 class="text-xl font-bold text-gray-900">নামজারি খতিয়ান</h3>
                        <div class="p-2 bg-purple-100 rounded-full text-purple-600"><i class="fas fa-file-signature"></i></div>
                    </div>
                    <p class="mt-4 text-gray-600 text-sm">Efficient name registration services.</p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition relative overflow-hidden group">
                    <div class="absolute top-0 left-0 w-full h-1 bg-blue-500"></div>
                    <div class="flex justify-between items-start">
                        <h3 class="text-xl font-bold text-gray-900">NEC সার্টিফিকেট</h3>
                        <div class="p-2 bg-blue-100 rounded-full text-blue-600"><i class="fas fa-certificate"></i></div>
                    </div>
                    <p class="mt-4 text-gray-600 text-sm">Easy NEC certificate processing.</p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition relative overflow-hidden group">
                    <div class="absolute top-0 left-0 w-full h-1 bg-yellow-400"></div>
                    <div class="flex justify-between items-start">
                        <h3 class="text-xl font-bold text-gray-900">দলিল উত্তোলন</h3>
                        <div class="p-2 bg-yellow-100 rounded-full text-yellow-600"><i class="fas fa-file-contract"></i></div>
                    </div>
                    <p class="mt-4 text-gray-600 text-sm">Secure deed collection services.</p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition relative overflow-hidden group">
                    <div class="absolute top-0 left-0 w-full h-1 bg-green-500"></div>
                    <div class="flex justify-between items-start">
                        <h3 class="text-xl font-bold text-gray-900">সম্পত্তি নিবন্ধন</h3>
                        <div class="p-2 bg-green-100 rounded-full text-green-600"><i class="fas fa-landmark"></i></div>
                    </div>
                    <p class="mt-4 text-gray-600 text-sm">Hassle-free property registration.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-900">Key Benefits</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center p-4">
                    <div class="w-16 h-16 mx-auto bg-red-100 rounded-full flex items-center justify-center text-red-600 text-2xl mb-4">
                        <i class="fas fa-home"></i>
                    </div>
                    <h3 class="font-bold text-lg mb-2">Convenience</h3>
                    <p class="text-gray-600 text-sm">Access our services from the comfort of your home, without the need for brokers or intermediaries.</p>
                </div>
                <div class="text-center p-4">
                    <div class="w-16 h-16 mx-auto bg-red-100 rounded-full flex items-center justify-center text-red-600 text-2xl mb-4">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    <h3 class="font-bold text-lg mb-2">Reliability</h3>
                    <p class="text-gray-600 text-sm">Our services are backed by expert legal professionals to ensure accuracy and trustworthiness.</p>
                </div>
                <div class="text-center p-4">
                    <div class="w-16 h-16 mx-auto bg-red-100 rounded-full flex items-center justify-center text-red-600 text-2xl mb-4">
                        <i class="fas fa-lock"></i>
                    </div>
                    <h3 class="font-bold text-lg mb-2">Security</h3>
                    <p class="text-gray-600 text-sm">We implement advanced security measures to protect your data and documents, giving you peace of mind.</p>
                </div>
                <div class="text-center p-4">
                    <div class="w-16 h-16 mx-auto bg-red-100 rounded-full flex items-center justify-center text-red-600 text-2xl mb-4">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3 class="font-bold text-lg mb-2">Efficiency</h3>
                    <p class="text-gray-600 text-sm">Say goodbye to bureaucratic delays and lengthy procedures. We streamline the process to save you time.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-16 text-gray-900">How it works</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-center">
                
                <div class="flex flex-col items-center group">
                    <div class="mb-6 h-64 flex items-center justify-center p-4">
                        <img src="{{ asset('images/Select-Your-Service.webp') }}" onerror="this.src='https://placehold.co/300x500/ffecec/D32F2F?text=Step+1+Select'" alt="Select Service" class="max-h-full object-contain drop-shadow-lg transition-transform duration-300 group-hover:scale-105">
                    </div>
                    <h3 class="font-bold text-xl mb-2 text-gray-900">Select Your Service</h3>
                    <p class="text-gray-600 text-sm px-4">Choose the service you need from our comprehensive list.</p>
                </div>

                <div class="flex flex-col items-center group">
                    <div class="mb-6 h-64 flex items-center justify-center p-4">
                        <img src="{{ asset('images/submit_documents1.webp') }}" onerror="this.src='https://placehold.co/300x500/ffecec/D32F2F?text=Step+2+Upload'" alt="Submit Documents" class="max-h-full object-contain drop-shadow-lg transition-transform duration-300 group-hover:scale-105">
                    </div>
                    <h3 class="font-bold text-xl mb-2 text-gray-900">Submit Your Documents</h3>
                    <p class="text-gray-600 text-sm px-4">Upload your documents securely through the app.</p>
                </div>

                <div class="flex flex-col items-center group">
                    <div class="mb-6 h-64 flex items-center justify-center p-4">
                        <img src="{{ asset('images/delivery.webp') }}" onerror="this.src='https://placehold.co/300x500/ffecec/D32F2F?text=Step+3+Receive'" alt="Receive Documents" class="max-h-full object-contain drop-shadow-lg transition-transform duration-300 group-hover:scale-105">
                    </div>
                    <h3 class="font-bold text-xl mb-2 text-gray-900">Receive Your Documents at Home</h3>
                    <p class="text-gray-600 text-sm px-4">We deliver the processed documents to your doorstep.</p>
                </div>

            </div>
        </div>
    </section>

    <section class="py-20 bg-white overflow-hidden relative">
        <div class="max-w-4xl mx-auto px-4 text-center relative z-10">
            <h2 class="text-3xl font-bold text-gray-900 mb-16">Testimonials</h2>

            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-gradient-to-b from-blue-50 via-blue-50/50 to-transparent rounded-full -z-10 pointer-events-none"></div>

            <div class="min-h-[160px] flex items-center justify-center max-w-2xl mx-auto">
                <p id="testimonial-quote" class="text-xl md:text-2xl text-gray-800 leading-tight transition-opacity duration-300">
                    "I never thought getting legal documents could be this convenient."
                </p>
            </div>

            <div class="mt-12 flex flex-wrap justify-center gap-4">
                <button onclick="updateTestimonial(this)"
                        class="testimonial-btn active px-6 py-3 rounded-full text-sm font-semibold transition-all shadow-md bg-indigo-700 text-white ring-2 ring-white hover:bg-cyan-300"
                        data-quote="I never thought getting legal documents could be this convenient.">
                    Rahim Ahmed - Acme LTD
                </button>

                <button onclick="updateTestimonial(this)"
                        class="testimonial-btn px-6 py-3 rounded-full text-sm font-semibold transition-all bg-white text-gray-600 border border-gray-200 hover:bg-cyan-300"
                        data-quote="Sure Deed made my land document process so easy and quick!">
                    Salma Begum - Malika Inc.
                </button>
            </div>
        </div>
    </section>
    <section class="py-16 bg-gray-50">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-8 text-gray-900">FAQ</h2>
            <div class="space-y-4">
                <details class="bg-gray-50 p-4 rounded-lg shadow-sm group">
                    <summary class="font-semibold cursor-pointer list-none flex justify-between items-center">
                        How do I submit a document for processing?
                        <span class="transition group-open:rotate-180"><i class="fas fa-chevron-down"></i></span>
                    </summary>
                    <p class="text-gray-600 mt-2 text-sm">You can submit documents easily by uploading them securely through our mobile app.</p>
                </details>
                
                <details class="bg-gray-50 p-4 rounded-lg shadow-sm group">
                    <summary class="font-semibold cursor-pointer list-none flex justify-between items-center">
                        What security measures do you have in place?
                        <span class="transition group-open:rotate-180"><i class="fas fa-chevron-down"></i></span>
                    </summary>
                    <p class="text-gray-600 mt-2 text-sm">We use advanced encryption and data protection protocols to ensure your documents are safe.</p>
                </details>

                <details class="bg-gray-50 p-4 rounded-lg shadow-sm group">
                    <summary class="font-semibold cursor-pointer list-none flex justify-between items-center">
                        How long does it take to process a document?
                        <span class="transition group-open:rotate-180"><i class="fas fa-chevron-down"></i></span>
                    </summary>
                    <p class="text-gray-600 mt-2 text-sm">Processing times vary by service type, but we aim for the quickest turnaround possible.</p>
                </details>
            </div>
        </div>
    </section>

    <footer class="bg-gray-900 text-white pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mb-12">
                <div>
                    <h4 class="font-bold text-lg mb-4 text-red-500">PRODUCTS</h4>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li><a href="#" class="hover:text-white">Property Verification Reports</a></li>
                        <li><a href="#" class="hover:text-white">Land Dispute Service</a></li>
                        <li><a href="#" class="hover:text-white">Land Survey</a></li>
                        <li><a href="#" class="hover:text-white">Property Registration</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold text-lg mb-4 text-red-500">RESOURCES</h4>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li><a href="#" class="hover:text-white">Product & Service Details</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold text-lg mb-4 text-red-500">COMPANY</h4>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li><a href="#" class="hover:text-white">About us</a></li>
                        <li><a href="#" class="hover:text-white">Press</a></li>
                        <li><a href="#" class="hover:text-white">Privacy Policy</a></li>
                        <li><a href="#" class="hover:text-white">Terms & Condition</a></li>
                        <li><a href="#" class="hover:text-white">Refund Policy</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold text-lg mb-4 text-red-500">SUPPORT</h4>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li><a href="#" class="hover:text-white">Contact us</a></li>
                        <li><a href="mailto:contact@suredeed.com" class="hover:text-white">contact@suredeed.com</a></li>
                        <li class="mt-4 flex space-x-4">
                            <a href="#" class="text-gray-400 hover:text-white text-xl"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-gray-400 hover:text-white text-xl"><i class="fab fa-facebook"></i></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center">
                <div class="flex items-center gap-2">
                    <img src="{{ asset('images/white_icon.png') }}" onerror="this.src='https://placehold.co/20x20/ffffff/000?text=S'" alt="Logo" class="h-6 w-6 opacity-75">
                    <p class="text-gray-500 text-sm">© 2024 Suredeed. All rights reserved.</p>
                </div>
                <p class="text-gray-600 text-xs mt-2 md:mt-0">Trade License: TROD/CHTG/13656/2024</p>
            </div>
        </div>
    </footer>

    <script>
        function updateTestimonial(btn) {
            // 1. Get Elements
            const quoteElement = document.getElementById('testimonial-quote');
            const allButtons = document.querySelectorAll('.testimonial-btn');
            
            // 2. Get the new text
            const newQuote = btn.getAttribute('data-quote');

            // 3. Reset all buttons to "Inactive" style
            allButtons.forEach(b => {
                // Remove Active Classes
                b.classList.remove('active', 'bg-indigo-600', 'text-white', 'ring-2', 'ring-indigo-600', 'shadow-md');
                // Add Inactive Classes
                b.classList.add('bg-white', 'text-gray-600', 'border', 'border-gray-200');
            });

            // 4. Set the clicked button to "Active" style
            btn.classList.remove('bg-white', 'text-gray-600', 'border', 'border-gray-200');
            btn.classList.add('active', 'bg-indigo-600', 'text-white', 'ring-2', 'ring-indigo-600', 'shadow-md');

            // 5. Update text with a small fade effect
            quoteElement.style.opacity = '0';
            setTimeout(() => {
                quoteElement.textContent = `"${newQuote}"`;
                quoteElement.style.opacity = '1';
            }, 200);
        }
    </script>

</body>
</html>