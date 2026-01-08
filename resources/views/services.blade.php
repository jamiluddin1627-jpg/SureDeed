<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services - Suredeed</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Noto+Sans+Bengali:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body { font-family: 'Inter', 'Noto Sans Bengali', sans-serif; }
        /* Smooth fade for modal */
        #serviceModal { transition: opacity 0.3s ease-in-out; }
        .hidden-modal { opacity: 0; pointer-events: none; }
        .visible-modal { opacity: 1; pointer-events: auto; }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 relative">

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
                    <a href="/services" class="text-white font-bold border-b-2 border-white">Services</a>
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

    <header class="bg-white pt-32 pb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col-reverse lg:flex-row items-center gap-12">
                
                <div class="w-full lg:w-1/2 text-center lg:text-left">
                    <h3 class="text-3xl lg:text-4xl font-extrabold text-stone-500 mb-6 leading-tight">
                        Comprehensive Land & <br /> 
                        <span class="text-stone-400">Legal Document Services</span>
                    </h3>
                    <p class="text-lg text-stone-500 mb-8">
                        Sure Deed offers a wide range of services designed to meet all your land and legal documentation needs. Our app provides a one-stop solution, making it easier than ever to access the services you require.
                    </p>
                </div>

                <div class="w-full lg:w-1/2 flex justify-center">
                    <img src="{{ asset('images/services1.webp') }}" 
                         onerror="this.src='https://placehold.co/600x400/ffecec/D32F2F?text=Comprehensive+Land+%26+Legal+Services'" 
                         alt="Comprehensive Land & Legal Services" 
                         class="rounded-xl shadow-lg w-full max-w-lg object-cover">
                </div>

            </div>
        </div>
    </header>

    <section class="py-12 bg-gray-50 border-t border-gray-100">
         <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col-reverse lg:flex-row items-center gap-12">
                <div class="w-full lg:w-1/2 flex justify-center">
                    <img src="{{ asset('images/services.webp') }}" 
                         onerror="this.src='https://placehold.co/600x400/ffecec/D32F2F?text=Comprehensive+Land+%26+Legal+Services'" 
                         alt="Comprehensive Land & Legal Services" 
                         class="rounded-xl w-full max-w-lg object-cover">
                </div>
                  <div class="w-full lg:w-1/2 text-center lg:text-left">
                    <h3 class="text-3xl lg:text-4xl font-extrabold text-cyan-600 mb-6 leading-tight">
                        Simplified Processes 
                    </h3>
                    <p class="text-lg text-gray-600 mb-8">
                        Each service is designed to be reliable, efficient, and secure, ensuring you have everything you need at your fingertips. Sure Deed is the only company in Bangladesh to offer such a comprehensive suite of services in a single, easy-to-use app.
                    </p>
                </div>

            </div>
        </div>
         
    </section>

    <section class="pb-16 pt-8 bg-emerald-50">
       
           
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <p class="text-3xl font-bold text-gray-900 mt-2 text-center my-10">Services</p>  
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">

                <div onclick="openModal('khatiyan')" class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md hover:-translate-y-1 transition-all duration-300 cursor-pointer group">
                    <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center text-gray-600 text-xl mb-4 group-hover:bg-red-600 group-hover:text-white transition-colors">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900">Khatiyan Sheba</h3>
                </div>

                <div onclick="openModal('namzari')" class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md hover:-translate-y-1 transition-all duration-300 cursor-pointer group">
                    <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center text-gray-600 text-xl mb-4 group-hover:bg-red-600 group-hover:text-white transition-colors">
                        <i class="fas fa-file-signature"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900">Namzari Khatiyan</h3>
                </div>

                <div onclick="openModal('namzari_sheba')" class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md hover:-translate-y-1 transition-all duration-300 cursor-pointer group">
                    <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center text-gray-600 text-xl mb-4 group-hover:bg-red-600 group-hover:text-white transition-colors">
                        <i class="fas fa-file-pen"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900">Namzari Sheba</h3>
                </div>

                <div onclick="openModal('nec')" class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md hover:-translate-y-1 transition-all duration-300 cursor-pointer group">
                    <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center text-gray-600 text-xl mb-4 group-hover:bg-red-600 group-hover:text-white transition-colors">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900">N.E.C Certificate</h3>
                </div>

                <div onclick="openModal('deed_withdrawal')" class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md hover:-translate-y-1 transition-all duration-300 cursor-pointer group">
                    <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center text-gray-600 text-xl mb-4 group-hover:bg-red-600 group-hover:text-white transition-colors">
                        <i class="fas fa-file-export"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900">Deed Withdrawal</h3>
                </div>

                <div onclick="openModal('mowja')" class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md hover:-translate-y-1 transition-all duration-300 cursor-pointer group">
                    <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center text-gray-600 text-xl mb-4 group-hover:bg-red-600 group-hover:text-white transition-colors">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900">Mowja Map</h3>
                </div>

                <div onclick="openModal('survey')" class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md hover:-translate-y-1 transition-all duration-300 cursor-pointer group">
                    <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center text-gray-600 text-xl mb-4 group-hover:bg-red-600 group-hover:text-white transition-colors">
                        <i class="fas fa-ruler-combined"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900">Land Survey</h3>
                </div>

                <div onclick="openModal('mortgage')" class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md hover:-translate-y-1 transition-all duration-300 cursor-pointer group">
                    <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center text-gray-600 text-xl mb-4 group-hover:bg-red-600 group-hover:text-white transition-colors">
                        <i class="fas fa-search-dollar"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900">Mortgage Check</h3>
                </div>

                <div onclick="openModal('registration')" class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md hover:-translate-y-1 transition-all duration-300 cursor-pointer group">
                    <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center text-gray-600 text-xl mb-4 group-hover:bg-red-600 group-hover:text-white transition-colors">
                        <i class="fas fa-landmark"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900">Property Registration</h3>
                </div>

                <div onclick="openModal('min_value')" class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md hover:-translate-y-1 transition-all duration-300 cursor-pointer group">
                    <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center text-gray-600 text-xl mb-4 group-hover:bg-red-600 group-hover:text-white transition-colors">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900">Minimum Land Value</h3>
                </div>

                <div onclick="openModal('dispute')" class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md hover:-translate-y-1 transition-all duration-300 cursor-pointer group">
                    <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center text-gray-600 text-xl mb-4 group-hover:bg-red-600 group-hover:text-white transition-colors">
                        <i class="fas fa-gavel"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900">Land Dispute Service</h3>
                </div>

                <div onclick="openModal('past_cases')" class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md hover:-translate-y-1 transition-all duration-300 cursor-pointer group">
                    <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center text-gray-600 text-xl mb-4 group-hover:bg-red-600 group-hover:text-white transition-colors">
                        <i class="fas fa-folder-open"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900">Copies of Past Cases</h3>
                </div>
                
                 <div onclick="openModal('deed_search')" class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md hover:-translate-y-1 transition-all duration-300 cursor-pointer group">
                    <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center text-gray-600 text-xl mb-4 group-hover:bg-red-600 group-hover:text-white transition-colors">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900">Deed Search</h3>
                </div>

                 <div onclick="openModal('prop_verify')" class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md hover:-translate-y-1 transition-all duration-300 cursor-pointer group">
                    <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center text-gray-600 text-xl mb-4 group-hover:bg-red-600 group-hover:text-white transition-colors">
                        <i class="fas fa-clipboard-check"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900">Property Verification</h3>
                </div>

                 <div onclick="openModal('ni_act')" class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md hover:-translate-y-1 transition-all duration-300 cursor-pointer group">
                    <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center text-gray-600 text-xl mb-4 group-hover:bg-red-600 group-hover:text-white transition-colors">
                        <i class="fas fa-money-check-alt"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900">N.I Act (Cheque Case)</h3>
                </div>

                 <div onclick="openModal('deed_check')" class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md hover:-translate-y-1 transition-all duration-300 cursor-pointer group">
                    <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center text-gray-600 text-xl mb-4 group-hover:bg-red-600 group-hover:text-white transition-colors">
                        <i class="fas fa-file-contract"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900">Deed Check</h3>
                </div>
                
                 <div onclick="openModal('land_search')" class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md hover:-translate-y-1 transition-all duration-300 cursor-pointer group">
                    <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center text-gray-600 text-xl mb-4 group-hover:bg-red-600 group-hover:text-white transition-colors">
                        <i class="fas fa-globe-asia"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900">Land Search</h3>
                </div>

            </div>
        </div>
    </section>

    <footer class="bg-gray-900 text-white pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="flex items-center gap-2">
                     <img src="{{ asset('images/white_icon.png') }}" onerror="this.src='https://placehold.co/20x20/ffffff/000?text=S'" alt="Logo" class="h-6 w-6 opacity-75">
                    <p class="text-gray-500 text-sm">© 2024 Suredeed. All rights reserved.</p>
                </div>
                <p class="text-gray-600 text-xs mt-2 md:mt-0">Trade License: TROD/CHTG/13656/2024</p>
            </div>
        </div>
    </footer>


    <div id="serviceModal" class="hidden-modal fixed inset-0 z-50 flex items-center justify-center bg-black/30 backdrop-blur-sm p-4">
        <div class="bg-white rounded-lg shadow-xl w-full max-w-lg p-6 relative transform transition-all scale-100">
            
            <button onclick="closeModal()" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600">
                <i class="fas fa-times text-xl"></i>
            </button>

            <h3 id="modalTitle" class="text-xl font-bold text-gray-900 mb-4">Service Name</h3>

            <p id="modalDesc" class="text-gray-600 text-sm leading-relaxed mb-6">
                Service Description goes here.
            </p>

            <div id="modalPurchaseArea" class="hidden">
                <p class="font-bold text-gray-900 mb-2">Price: <span id="modalPrice">Tk 00</span></p>
                <button class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded font-medium text-sm transition-colors">
                    Purchase
                </button>
            </div>
        </div>
    </div>


    <script>
        // Data for all services
        const servicesData = {
            'khatiyan': {
                title: 'Khatiyan Sheba',
                desc: 'Sure Deed provides comprehensive Khatiyan Sheba services, assisting users in obtaining updated land ownership records. Whether you need a new Khatiyan or an update, we guide you through the process effortlessly.'
            },
            'namzari': {
                title: 'Namzari Khatiyan',
                desc: "If you're looking for official proof of property mutation, Sure Deed ensures that you get an accurate Namzari Khatiyan without the usual delays. We manage all necessary steps to help you access this essential document."
            },
            'namzari_sheba': {
                title: 'Namzari Sheba',
                desc: 'Our Namzari Sheba provides end-to-end assistance for land mutation processes. We help you navigate the complex government requirements to ensure your land records are updated correctly.'
            },
            'nec': {
                title: 'N.E.C Certificate',
                desc: 'The N.E.C Certificate confirms that there are no legal claims or disputes over a property. Sure Deed simplifies obtaining this critical document, ensuring your property transactions are secure.'
            },
            'deed_withdrawal': {
                title: 'Deed Withdrawal',
                desc: 'Sure Deed makes collecting the original deed from the government office convenient. We handle the bureaucratic steps, ensuring you receive the deed without needing multiple trips to government offices.'
            },
            'mowja': {
                title: 'Mowja Map',
                desc: 'Get precise Mouza Maps for your land. Sure Deed assists in procuring official government maps to help you understand land boundaries and verify plots accurately.'
            },
            'survey': {
                title: 'Land Survey',
                desc: 'Professional land measurement services using modern equipment. Our experts ensure accurate demarcation of your property lines to prevent future disputes.'
            },
            'mortgage': {
                title: 'Mortgage Check',
                desc: 'Verify the mortgage status of any property before you buy. We check financial records to ensure the land is free from hidden bank loans or liabilities.'
            },
            'registration': {
                title: 'Property Registration',
                desc: 'We streamline the property registration process, guiding you through deed drafting, fee payments, and final submission to the sub-registry office.'
            },
            'min_value': {
                title: 'Minimum Land Value',
                desc: 'Sure Deed provides the official Mouza Rate Sheet, detailing the government-mandated minimum land value in specific areas. This sheet ensures that buyers and sellers have accurate, up-to-date information on baseline land prices, helping to facilitate fair and legally compliant transactions.',
                price: 'Tk 99' // Special field for this service
            },
            'dispute': {
                title: 'Land Dispute Service',
                desc: 'Expert legal consultation and mediation services for resolving land-related conflicts. We help you understand your rights and find a resolution.'
            },
            'past_cases': {
                title: 'Copies of Past Cases',
                desc: 'Retrieve certified copies of past court judgments and case files related to a property. Essential for legal due diligence and history verification.'
            },
            'deed_search': {
                title: 'Deed Search',
                desc: 'Comprehensive search services to locate specific property deeds. We help you find registration details and volume numbers from registry archives.'
            },
            'prop_verify': {
                title: 'Property Verification',
                desc: 'A complete background check on any property. We verify ownership history, legal status, and document authenticity to protect your investment.'
            },
            'ni_act': {
                title: 'N.I Act (Cheque Case)',
                desc: 'Legal assistance for cases related to the Negotiable Instruments Act. We provide support for cheque dishonor cases and financial legal matters.'
            },
            'deed_check': {
                title: 'Deed Check',
                desc: 'Verify the authenticity of a land deed. Our experts analyze the document to detect forgeries or errors, ensuring your paperwork is legitimate.'
            },
            'land_search': {
                title: 'Land Search',
                desc: 'General inquiry services for land information. We help you gather necessary data regarding land types, locations, and recorded owners.'
            }
        };

        const modal = document.getElementById('serviceModal');
        const modalTitle = document.getElementById('modalTitle');
        const modalDesc = document.getElementById('modalDesc');
        const modalPurchaseArea = document.getElementById('modalPurchaseArea');
        const modalPrice = document.getElementById('modalPrice');

        // Function to Open Modal
        function openModal(serviceKey) {
            const data = servicesData[serviceKey];
            if (!data) return;

            modalTitle.innerText = data.title;
            modalDesc.innerText = data.desc;

            // Logic for Price/Purchase Button
            if (data.price) {
                modalPurchaseArea.classList.remove('hidden');
                modalPrice.innerText = data.price;
            } else {
                modalPurchaseArea.classList.add('hidden');
            }

            modal.classList.remove('hidden-modal');
            modal.classList.add('visible-modal');
        }

        // Function to Close Modal
        function closeModal() {
            modal.classList.remove('visible-modal');
            modal.classList.add('hidden-modal');
        }

        // Close modal when clicking outside the white box
        modal.addEventListener('click', function(e) {
            if (e.target === modal) {
                closeModal();
            }
        });
    </script>

</body>
</html>