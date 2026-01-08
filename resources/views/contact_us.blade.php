<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Suredeed</title>
    
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
                    <a href="/about" class="text-white hover:text-gray-200 font-medium">About us</a>
                    <a href="/contact_us" class="text-white font-bold border-b-2 border-white">Contact</a>
                </div>
                
                <div class="md:hidden">
                    <button class="text-white hover:text-gray-200">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <section class="pt-32 pb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100">
                    
                    <h1 class="text-4xl font-extrabold text-gray-900 mt-2 mb-4">Let's talk</h1>
                    <p class="text-gray-600 mb-8">
                        We're here to assist you with all your land and legal document needs.
                    </p>

                    @if(session('success'))
                        <div class="mb-6 bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-lg flex items-center gap-3" role="alert">
                            <i class="fas fa-check-circle text-green-500 text-xl"></i>
                            <div>
                                <strong class="font-bold">Success!</strong>
                                <span class="block sm:inline">{{ session('success') }}</span>
                            </div>
                        </div>
                    @endif

                    <div class="form">
                        <form id="contactForm" method="POST" action="{{ route('filestore') }}" class="space-y-6">
                            @csrf
                            <h3 class="text-red-600 font-bold uppercase tracking-wider text-sm">Send a message</h3>
                            
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full name</label>
                                <input type="text" name="name" id="name" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-red-500 focus:border-red-500 outline-none transition" placeholder="Your Name" required>
                            </div>

                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone number</label>
                                <input type="tel" name="phone" id="phone" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-red-500 focus:border-red-500 outline-none transition" placeholder="+880..." required>
                                
                                <p id="phone-error" class="text-red-600 text-sm mt-1 hidden">
                                    <i class="fas fa-exclamation-circle mr-1"></i> Phone number cannot exceed 14 digits.
                                </p>
                            </div>

                            <div>
                                <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                                <input type="text" name="subject" id="subject" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-red-500 focus:border-red-500 outline-none transition" placeholder="How can we help?" required>
                            </div>

                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                                <textarea name="message" id="message" rows="4" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-red-500 focus:border-red-500 outline-none transition" placeholder="Write your message here..." required></textarea>
                            </div>

                            <button type="submit" class="w-full bg-red-600 text-white font-bold py-4 rounded-lg hover:bg-red-700 transition shadow-lg">
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>

                <div class="flex flex-col space-y-8">
                    
                    <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 h-fit">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">Reach out</h2>
                        
                        <div class="space-y-6">
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 bg-red-50 rounded-full flex items-center justify-center text-red-600 flex-shrink-0">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Call us</p>
                                    <p class="font-bold text-gray-900 text-lg">+880 1832-650404</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 bg-red-50 rounded-full flex items-center justify-center text-red-600 flex-shrink-0">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Email us</p>
                                    <p class="font-bold text-gray-900 text-lg">contact@suredeed.com</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 bg-red-50 rounded-full flex items-center justify-center text-red-600 flex-shrink-0">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Visit us</p>
                                    <p class="font-bold text-gray-900">
                                        Creator Hub Co-working Space (7th Floor),<br>
                                        Finlay Square, CDA Avenue,<br>
                                        East Nasirabad, Chattogram 4000
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-200 rounded-2xl overflow-hidden shadow-sm h-full min-h-[300px] border border-gray-100">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.8564024467645!2d91.81938637604675!3d22.359051840801876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd89aaaaaaaab%3A0x6e65400000000000!2sFinlay%20Square!5e0!3m2!1sen!2sbd!4v1709928374821!5m2!1sen!2sbd" 
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>

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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const phoneInput = document.getElementById('phone');
            const phoneError = document.getElementById('phone-error');
            const form = document.getElementById('contactForm');

            // 1. Live Validation: Check as user types
            phoneInput.addEventListener('input', function() {
                const value = this.value;

                if (value.length > 14) {
                    phoneError.classList.remove('hidden'); // Show Error
                    this.classList.add('border-red-500', 'focus:ring-red-500'); // Add Red Border
                    this.classList.remove('border-gray-300', 'focus:ring-red-500');
                } else {
                    phoneError.classList.add('hidden'); // Hide Error
                    this.classList.remove('border-red-500'); // Remove Red Border
                    this.classList.add('border-gray-300');
                }
            });

            // 2. Prevent Submission if Invalid
            form.addEventListener('submit', function(e) {
                if (phoneInput.value.length > 14) {
                    e.preventDefault(); // Stop form submission
                    phoneError.classList.remove('hidden');
                    phoneInput.focus();
                }
            });
        });
    </script>

</body>
</html>