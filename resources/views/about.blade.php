<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Suredeed</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Noto+Sans+Bengali:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body { font-family: 'Inter', 'Noto Sans Bengali', sans-serif; }
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
                    <a href="/about" class="text-white font-bold border-b-2 border-white">About us</a>
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

    <section class="pt-32 pb-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center lg:text-left">
            <div class="max-w-4xl">
                <h1 class="text-3xl lg:text-4xl font-extrabold text-gray-900 mb-6 leading-tight">
                    Sure Deed: Transforming Land and <span class="text-red-600">Legal Document Services</span> in Bangladesh
                </h1>
                <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                    At Sure Deed, our mission is to simplify and secure land and legal document services for all citizens of Bangladesh. We understand the complexities and bureaucratic delays often associated with these processes, and we aim to provide a comprehensive, app-based solution that enhances convenience, reliability, and security.
                </p>
            </div>
        </div>
    </section>

    <section class="py-12 bg-red-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-red-100 flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center text-red-600 text-2xl mb-6">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Our Mission</h3>
                    <p class="text-gray-600">
                        To streamline and digitize land and legal documentation processes, making them accessible and hassle-free for everyone.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-sm border border-red-100 flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center text-red-600 text-2xl mb-6">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Our Vision</h3>
                    <p class="text-gray-600">
                        To become the leading provider of efficient and secure land and legal document services in Bangladesh.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-12 text-center">Our Core Values</h2>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="p-6 border border-gray-100 rounded-xl hover:shadow-lg transition-shadow bg-gray-50">
                    <div class="text-red-600 text-3xl mb-4"><i class="fas fa-couch"></i></div>
                    <h4 class="font-bold text-lg mb-2">Convenience</h4>
                    <p class="text-sm text-gray-600">Order any land document and legal services from the comfort of your home.</p>
                </div>
                <div class="p-6 border border-gray-100 rounded-xl hover:shadow-lg transition-shadow bg-gray-50">
                    <div class="text-red-600 text-3xl mb-4"><i class="fas fa-user-shield"></i></div>
                    <h4 class="font-bold text-lg mb-2">Reliability</h4>
                    <p class="text-sm text-gray-600">Expert legal professionals ensure accuracy and reliability in every step.</p>
                </div>
                <div class="p-6 border border-gray-100 rounded-xl hover:shadow-lg transition-shadow bg-gray-50">
                    <div class="text-red-600 text-3xl mb-4"><i class="fas fa-lock"></i></div>
                    <h4 class="font-bold text-lg mb-2">Security</h4>
                    <p class="text-sm text-gray-600">Advanced security measures to protect your sensitive user data and documents.</p>
                </div>
                <div class="p-6 border border-gray-100 rounded-xl hover:shadow-lg transition-shadow bg-gray-50">
                    <div class="text-red-600 text-3xl mb-4"><i class="fas fa-tachometer-alt"></i></div>
                    <h4 class="font-bold text-lg mb-2">Efficiency</h4>
                    <p class="text-sm text-gray-600">Elimination of bureaucratic delays and intermediaries for faster results.</p>
                </div>
            </div>

            <div class="mt-12 text-center max-w-3xl mx-auto">
                <p class="text-gray-500 italic">
                    "Sure Deed is the first and only company in Bangladesh to offer all these services on a single platform, accessible through our innovative app."
                </p>
            </div>
        </div>
    </section>

    <section class="py-16 bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold mb-12 text-center">Why Choose Suredeed</h2>
            
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                     <img src="{{ asset('images/wcu.avif') }}" onerror="this.src='https://placehold.co/600x400/333333/FFFFFF?text=Why+Choose+Us'" alt="Why Choose Us" class="w-2/4 rounded-xl shadow-2xl border border-gray-700">
                </div>
                <div class="space-y-8">
                    <div class="flex gap-4">
                        <div class="w-12 h-12 rounded-full bg-red-600 flex items-center justify-center shrink-0">
                            <i class="fas fa-layer-group text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold mb-2">Comprehensive Services</h4>
                            <p class="text-gray-400">Access a wide range of land and legal document services all in one place. From Khatiyan to Registration, we cover it all.</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-12 h-12 rounded-full bg-red-600 flex items-center justify-center shrink-0">
                            <i class="fas fa-magic text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold mb-2">Simplified Processes</h4>
                            <p class="text-gray-400">We streamline complex government procedures into simple app-based actions, saving you time and money.</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-12 h-12 rounded-full bg-red-600 flex items-center justify-center shrink-0">
                            <i class="fas fa-vault text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold mb-2">Document Locker</h4>
                            <p class="text-gray-400">Securely store all your digital records in our cloud-based locker. Never lose a critical document again.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-12 text-center">Our Leadership Team</h2>

            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 mb-8 flex flex-col md:flex-row gap-8 items-center">
                <div class="w-48 h-48 shrink-0">
                    <img src="{{ asset('images/profile1.jpg') }}" onerror="this.src='https://placehold.co/200x200/e2e8f0/1e293b?text=AM'" alt="Abdul Mazid Mustafa" class="w-full h-full object-cover rounded-full border-4 border-red-50">
                </div>
                <div class="text-center md:text-left">
                    <h3 class="text-2xl font-bold text-gray-900">Abdul Mazid Mustafa</h3>
                    <p class="text-red-600 font-semibold mb-4">Founder & CEO</p>
                    <p class="text-gray-600 leading-relaxed">
                        As the visionary behind Sure Deed, Abdul Mazid Mustafa leads the company with a mission to transform property transactions in Bangladesh and beyond. With a deep understanding of the prop-tech industry, he is dedicated to making property dealings seamless, secure, and efficient.
                    </p>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 flex flex-col items-center text-center">
                    <img src="{{ asset('images/profile2.avif') }}" onerror="this.src='https://placehold.co/150x150/e2e8f0/1e293b?text=MF'" alt="Md Fazlul Hoq" class="w-32 h-32 object-cover rounded-full border-4 border-red-50 mb-6">
                    <h3 class="text-xl font-bold text-gray-900">Md Fazlul Hoq</h3>
                    <p class="text-red-600 font-semibold mb-4">Chief Operating Officer (COO)</p>
                    <p class="text-gray-600 text-sm">
                        With extensive experience in operations and strategic execution, Md Fazlul Hoq ensures the smooth functioning of Sure Deed's services. His leadership drives operational excellence, efficiency, and customer satisfaction.
                    </p>
                </div>

                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 flex flex-col items-center text-center">
                    <img src="{{ asset('images/profile3.png') }}" onerror="this.src='https://placehold.co/150x150/e2e8f0/1e293b?text=JU'" alt="Jashim Uddin" class="w-32 h-32 object-cover rounded-full border-4 border-red-50 mb-6">
                    <h3 class="text-xl font-bold text-gray-900">Jashim Uddin</h3>
                    <p class="text-red-600 font-semibold mb-4">Chief Legal Officer (CLO)</p>
                    <p class="text-gray-600 text-sm">
                        Jashim Uddin oversees all legal aspects of Sure Deed, ensuring compliance, regulatory adherence, and risk management. His expertise in property law strengthens the company's credibility and trustworthiness.
                    </p>
                </div>
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

</body>
</html>