<?php
// Initialize variables safely
$form_status = '';
$name = '';
$email = '';
$phone = '';
$message = '';

// Handle Form Submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $phone = htmlspecialchars(trim($_POST['phone'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    // Basic Validation
    if (!empty($name) && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($message)) {

        // Uncomment in production
        // mail(
        //     "spaceflexpvtltd@gmail.com",
        //     "Website Lead from $name",
        //     "Phone: $phone\n\n$message",
        //     "From: spaceflexpvtltd@gmail.com\r\nReply-To: $email"
        // );

        // Prevent form resubmission on refresh
        header("Location: " . $_SERVER['PHP_SELF'] . "?success=1");
        exit();
    } else {
        $form_status = "error";
    }
}

// Success Message
if (isset($_GET['success'])) {
    $form_status = "success";
}
?>

<?php
$page_title = 'Space Flex | Plast Ply - Sustainable Construction Solutions';
$page_description = 'Space Flex Private Limited offers sustainable Plast Ply boards for construction, furniture, washroom partitions, pallets, and industrial solutions.';
include 'header.php';
?>

<!-- Success Message -->
<?php if ($form_status === "success"): ?>
    <div class="max-w-4xl mx-auto mt-6 px-4">
        <div class="bg-green-100 border border-green-300 text-green-800 px-4 py-3 rounded-lg">
            Thank you! Your message has been submitted successfully.
        </div>
    </div>
<?php endif; ?>

<section class="py-24 bg-slate-50 border-y border-gray-200 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            <div class="order-2 lg:order-1">
                <h2 class="text-brand font-bold uppercase tracking-wider text-sm mb-2">Plast Ply Benefits</h2>
                <h3 class="text-3xl md:text-4xl font-bold text-corporate-dark mb-6 leading-tight">Key Advantages over
                    Wood & MDF</h3>
                <p class="text-gray-600 mb-10 text-lg leading-relaxed">
                    Plast Ply is engineered to outperform traditional building materials in every environment. Its
                    unique composition ensures longevity, safety, and immense structural integrity.
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <div
                        class="flex items-center gap-4 bg-white p-4 rounded-xl shadow-sm border border-gray-100 hover:border-brand hover:shadow-md transition">
                        <div
                            class="w-12 h-12 bg-brand-light text-brand-dark rounded-full flex items-center justify-center text-xl flex-shrink-0">
                            💧</div>
                        <h4 class="font-bold text-corporate-dark text-sm uppercase">100% Waterproof</h4>
                    </div>
                    <div
                        class="flex items-center gap-4 bg-white p-4 rounded-xl shadow-sm border border-gray-100 hover:border-brand hover:shadow-md transition">
                        <div
                            class="w-12 h-12 bg-brand-light text-brand-dark rounded-full flex items-center justify-center text-xl flex-shrink-0">
                            🔥</div>
                        <h4 class="font-bold text-corporate-dark text-sm uppercase">Fire Resistant</h4>
                    </div>
                    <div
                        class="flex items-center gap-4 bg-white p-4 rounded-xl shadow-sm border border-gray-100 hover:border-brand hover:shadow-md transition">
                        <div
                            class="w-12 h-12 bg-brand-light text-brand-dark rounded-full flex items-center justify-center text-xl flex-shrink-0">
                            🛡️</div>
                        <h4 class="font-bold text-corporate-dark text-sm uppercase">Highly Durable</h4>
                    </div>
                    <div
                        class="flex items-center gap-4 bg-white p-4 rounded-xl shadow-sm border border-gray-100 hover:border-brand hover:shadow-md transition">
                        <div
                            class="w-12 h-12 bg-brand-light text-brand-dark rounded-full flex items-center justify-center text-xl flex-shrink-0">
                            🛑</div>
                        <h4 class="font-bold text-corporate-dark text-sm uppercase">Rust Proof</h4>
                    </div>
                    <div
                        class="flex items-center gap-4 bg-white p-4 rounded-xl shadow-sm border border-gray-100 hover:border-brand hover:shadow-md transition">
                        <div
                            class="w-12 h-12 bg-brand-light text-brand-dark rounded-full flex items-center justify-center text-xl flex-shrink-0">
                            🐜</div>
                        <h4 class="font-bold text-corporate-dark text-sm uppercase">Termite Proof</h4>
                    </div>
                    <div
                        class="flex items-center gap-4 bg-white p-4 rounded-xl shadow-sm border border-gray-100 hover:border-brand hover:shadow-md transition">
                        <div
                            class="w-12 h-12 bg-brand-light text-brand-dark rounded-full flex items-center justify-center text-xl flex-shrink-0">
                            ♻️</div>
                        <h4 class="font-bold text-corporate-dark text-sm uppercase">100% Reusable</h4>
                    </div>
                </div>
            </div>

            <div class="relative order-1 lg:order-2">
                <div class="absolute -inset-4 bg-brand-light/50 rounded-3xl transform rotate-3 scale-105 z-0"></div>
                <img src="image_784db9.jpg" alt="Plast Ply Material Attributes"
                    class="relative rounded-2xl shadow-xl w-full object-cover border border-gray-200 z-10"
                    onerror="this.src='https://images.unsplash.com/photo-1589939705384-5185137a7f0f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80'; this.onerror=null;">
            </div>

        </div>
    </div>
</section>

<section id="about" class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            <div class="relative order-2 lg:order-1">
                <div class="aspect-[4/3] rounded-2xl bg-gray-100 overflow-hidden shadow-2xl relative">
                    <img src="WhatsApp Image 2026-05-14 at 22.38.48.jpeg" alt="Plast Ply Construction"
                        class="object-cover w-full h-full"
                        onerror="this.src='https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80'; this.onerror=null;" />
                    <div
                        class="absolute bottom-6 left-6 z-20 bg-white/95 backdrop-blur p-6 rounded-xl shadow-xl max-w-xs border-l-4 border-brand">
                        <p class="text-corporate-dark font-bold text-lg">"Not just a board. A highly engineered,
                            sustainable solution."</p>
                    </div>
                </div>
            </div>

            <div class="order-1 lg:order-2">
                <h2 class="text-brand font-bold uppercase tracking-wider text-sm mb-2">Who We Are</h2>
                <h3 class="text-3xl md:text-4xl font-bold text-corporate-dark mb-6 leading-snug">Space Flex Private
                    Limited.</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    At Space Flex, we started with a vision to redefine the construction materials industry. We
                    understand the critical need for sustainable, heavy-duty alternatives to traditional wood and MDF.
                </p>
                <p class="text-gray-600 mb-8 leading-relaxed">
                    We are committed to reducing environmental impact through our flagship product, Plast Ply. By
                    reprocessing flexible packaging and waste plastics, we provide commercial and industrial sectors
                    with materials that perform better and last a lifetime.
                </p>
                <div class="grid grid-cols-2 gap-6 border-t border-gray-100 pt-8">
                    <div>
                        <p class="text-4xl font-extrabold text-brand mb-1">100%</p>
                        <p class="text-sm text-gray-500 font-medium uppercase tracking-wide">Recycled Materials</p>
                    </div>
                    <div>
                        <p class="text-4xl font-extrabold text-brand mb-1">Zero</p>
                        <p class="text-sm text-gray-500 font-medium uppercase tracking-wide">Maintenance Cost</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="py-20 bg-slate-50 border-y border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 max-w-3xl mx-auto">
            <h2 class="text-brand font-bold uppercase tracking-wider text-sm mb-2">Plast Ply Benefits</h2>
            <h3 class="text-3xl md:text-4xl font-bold text-corporate-dark mb-4">Key Advantages over Wood & MDF</h3>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6 text-center">
            <div
                class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md hover:border-brand-light transition duration-300">
                <div
                    class="w-14 h-14 mx-auto bg-brand-light text-brand-dark rounded-full flex items-center justify-center mb-4 text-2xl">
                    💧</div>
                <h4 class="font-bold text-corporate-dark text-sm uppercase">100% Waterproof</h4>
            </div>
            <div
                class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md hover:border-brand-light transition duration-300">
                <div
                    class="w-14 h-14 mx-auto bg-brand-light text-brand-dark rounded-full flex items-center justify-center mb-4 text-2xl">
                    🔥</div>
                <h4 class="font-bold text-corporate-dark text-sm uppercase">Fire Resistant</h4>
            </div>
            <div
                class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md hover:border-brand-light transition duration-300">
                <div
                    class="w-14 h-14 mx-auto bg-brand-light text-brand-dark rounded-full flex items-center justify-center mb-4 text-2xl">
                    🛡️</div>
                <h4 class="font-bold text-corporate-dark text-sm uppercase">Highly Durable</h4>
            </div>
            <div
                class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md hover:border-brand-light transition duration-300">
                <div
                    class="w-14 h-14 mx-auto bg-brand-light text-brand-dark rounded-full flex items-center justify-center mb-4 text-2xl">
                    🛑</div>
                <h4 class="font-bold text-corporate-dark text-sm uppercase">Rust Proof</h4>
            </div>
            <div
                class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md hover:border-brand-light transition duration-300">
                <div
                    class="w-14 h-14 mx-auto bg-brand-light text-brand-dark rounded-full flex items-center justify-center mb-4 text-2xl">
                    🐜</div>
                <h4 class="font-bold text-corporate-dark text-sm uppercase">Termite Proof</h4>
            </div>
            <div
                class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md hover:border-brand-light transition duration-300">
                <div
                    class="w-14 h-14 mx-auto bg-brand-light text-brand-dark rounded-full flex items-center justify-center mb-4 text-2xl">
                    ♻️</div>
                <h4 class="font-bold text-corporate-dark text-sm uppercase">100% Reusable</h4>
            </div>
        </div>
    </div>
</section>

<section id="gallery" class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 max-w-3xl mx-auto">
            <h2 class="text-brand font-bold uppercase tracking-wider text-sm mb-2">Product Portfolio</h2>
            <h3 class="text-3xl md:text-4xl font-bold text-corporate-dark mb-4">Applications of Plast Ply</h3>
            <p class="text-gray-600 text-lg">Where our boards make a tangible difference across industries.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <div
                class="bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm hover:shadow-xl transition duration-300 group">
                <div class="h-64 bg-gray-100 img-hover-zoom relative">
                    <img src="image_792414.jpg" alt="Washroom Partitions" class="w-full h-full object-cover"
                        onerror="this.src='https://images.unsplash.com/photo-1584622650111-993a426fbf0a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'">
                </div>
                <div class="p-6">
                    <h4 class="text-xl font-bold text-corporate-dark mb-2 uppercase tracking-wide">Washroom Partitions
                    </h4>
                    <p class="text-gray-600 text-sm">100% waterproof and rot-resistant, making it the perfect hygienic
                        solution for public and corporate washrooms.</p>
                </div>
            </div>

            <div
                class="bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm hover:shadow-xl transition duration-300 group">
                <div class="h-64 bg-gray-100 img-hover-zoom relative">
                    <img src="image_792376.jpg" alt="Garden Benches" class="w-full h-full object-cover"
                        onerror="this.src='https://images.unsplash.com/photo-1596725355694-84577889bcdd?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'">
                </div>
                <div class="p-6">
                    <h4 class="text-xl font-bold text-corporate-dark mb-2 uppercase tracking-wide">Garden Benches</h4>
                    <p class="text-gray-600 text-sm">Zero-maintenance outdoor seating that withstands all weather
                        conditions without fading or degrading.</p>
                </div>
            </div>

            <div
                class="bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm hover:shadow-xl transition duration-300 group">
                <div class="h-64 bg-gray-100 img-hover-zoom relative">
                    <img src="image_792337.jpg" alt="School Chair" class="w-full h-full object-cover"
                        onerror="this.src='https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'">
                </div>
                <div class="p-6">
                    <h4 class="text-xl font-bold text-corporate-dark mb-2 uppercase tracking-wide">School Chairs</h4>
                    <p class="text-gray-600 text-sm">Highly durable and safe furniture designed to handle the daily wear
                        and tear of educational environments.</p>
                </div>
            </div>

            <div
                class="bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm hover:shadow-xl transition duration-300 group">
                <div class="h-64 bg-gray-100 img-hover-zoom relative">
                    <img src="image_792314.jpg" alt="Industrial Shelves" class="w-full h-full object-cover"
                        onerror="this.src='https://images.unsplash.com/photo-1580983554160-705a61e3dcc7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'">
                </div>
                <div class="p-6">
                    <h4 class="text-xl font-bold text-corporate-dark mb-2 uppercase tracking-wide">Shelves & Storage
                    </h4>
                    <p class="text-gray-600 text-sm">Heavy-duty, termite-proof shelving capable of holding substantial
                        weight for industrial and warehouse storage.</p>
                </div>
            </div>

            <div
                class="bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm hover:shadow-xl transition duration-300 group">
                <div class="h-64 bg-gray-100 img-hover-zoom relative">
                    <img src="image_79200f.jpg" alt="Circular Pallets" class="w-full h-full object-cover"
                        onerror="this.src='https://images.unsplash.com/photo-1586528116311-ad8ed7c80a71?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'">
                </div>
                <div class="p-6">
                    <h4 class="text-xl font-bold text-corporate-dark mb-2 uppercase tracking-wide">Circular Pallets</h4>
                    <p class="text-gray-600 text-sm">Reusable, high-strength logistic solutions that outlast traditional
                        wooden pallets and simplify supply chains.</p>
                </div>
            </div>

            <div
                class="bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm hover:shadow-xl transition duration-300 group">
                <div class="h-64 bg-gray-100 img-hover-zoom relative">
                    <img src="image_792032.jpg" alt="Cardboards" class="w-full h-full object-cover"
                        onerror="this.src='https://images.unsplash.com/photo-1611139407338-7f9e80c4434b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'">
                </div>
                <div class="p-6">
                    <h4 class="text-xl font-bold text-corporate-dark mb-2 uppercase tracking-wide">Plast Ply Boards</h4>
                    <p class="text-gray-600 text-sm">Our raw core product. Available in multiple thicknesses, ready to
                        be cut and fabricated for any custom industrial need.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<section id="pricing" class="py-24 bg-corporate text-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-brand-light font-bold uppercase tracking-wider text-sm mb-2">Specifications</h2>
            <h3 class="text-3xl md:text-4xl font-bold text-white mb-4">Rates (Per Sq. Ft.)</h3>
            <p class="text-gray-400">Standard pricing for our core Plast Ply boards. For bulk orders or custom
                fabrication (like chairs and benches), please request a direct quote.</p>
        </div>

        <div class="bg-white rounded-2xl overflow-hidden shadow-2xl text-slate-800">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr
                            class="bg-slate-100 text-corporate-dark uppercase tracking-wider text-sm border-b border-slate-200">
                            <th class="py-5 px-6 font-bold">Thickness (mm)</th>
                            <th class="py-5 px-6 font-bold">Standard Size</th>
                            <th class="py-5 px-6 font-bold">Application Range</th>
                            <th class="py-5 px-6 font-bold text-right">Price (₹ / Sq.Ft)</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        <tr class="hover:bg-slate-50 transition">
                            <td class="py-4 px-6 font-bold text-corporate">6 mm</td>
                            <td class="py-4 px-6 text-slate-600">8 x 4 ft</td>
                            <td class="py-4 px-6 text-slate-600">Light Paneling, Packaging</td>
                            <td class="py-4 px-6 font-bold text-brand text-right text-lg">₹ 35.00</td>
                        </tr>
                        <tr class="hover:bg-slate-50 transition">
                            <td class="py-4 px-6 font-bold text-corporate">8 mm</td>
                            <td class="py-4 px-6 text-slate-600">8 x 4 ft</td>
                            <td class="py-4 px-6 text-slate-600">Standard Interiors, Shelving</td>
                            <td class="py-4 px-6 font-bold text-brand text-right text-lg">₹ 45.00</td>
                        </tr>
                        <tr class="hover:bg-slate-50 transition">
                            <td class="py-4 px-6 font-bold text-corporate">12 mm</td>
                            <td class="py-4 px-6 text-slate-600">8 x 4 ft</td>
                            <td class="py-4 px-6 text-slate-600">Furniture, Washroom Partitions</td>
                            <td class="py-4 px-6 font-bold text-brand text-right text-lg">₹ 65.00</td>
                        </tr>
                        <tr class="hover:bg-slate-50 transition">
                            <td class="py-4 px-6 font-bold text-corporate">18 mm</td>
                            <td class="py-4 px-6 text-slate-600">8 x 4 ft</td>
                            <td class="py-4 px-6 text-slate-600">Heavy Duty Industrial, Benches</td>
                            <td class="py-4 px-6 font-bold text-brand text-right text-lg">₹ 95.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div
                class="bg-slate-50 p-6 border-t border-slate-200 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-sm text-slate-500 italic">* Rates exclude GST and transportation. Custom sizes available
                    on request.</p>
                <a href="contact.php"
                    class="bg-brand text-white px-6 py-2 rounded-md font-bold text-sm uppercase tracking-wider hover:bg-brand-dark transition shadow-md">Get
                    Bulk Pricing</a>
            </div>
        </div>
    </div>
</section>
<section class="py-20 bg-slate-50 border-y border-gray-200 overflow-hidden">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Header -->
        <div class="bg-corporate-dark rounded-t-3xl px-8 py-8 flex items-center justify-between">

            <div>
                <h2 class="text-3xl md:text-4xl font-extrabold text-white uppercase tracking-tight">
                    Our Prestigious Clients
                </h2>

                <p class="text-brand-light uppercase tracking-[0.35em] text-xs mt-3 font-medium">
                    Trusted By India's Leading Corporations
                </p>
            </div>

            <img src="logo.png"
                alt="Space Flex Logo"
                class="hidden md:block h-16 object-contain">
        </div>

        <!-- Grid -->
        <div class="bg-white rounded-b-3xl shadow-xl overflow-hidden">

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5">

                <!-- ITEM -->
                <div class="h-40 flex items-center justify-center p-6 border-b border-r border-gray-100 hover:bg-slate-50 transition">
                    <img src="aventus.png" class="max-h-20 object-contain">
                </div>

                <div class="h-40 flex items-center justify-center p-6 border-b border-r border-gray-100 hover:bg-slate-50 transition">
                    <img src="ongc.png" class="max-h-20 object-contain">
                </div>

                <div class="h-40 flex items-center justify-center p-6 border-b border-r border-gray-100 hover:bg-slate-50 transition">
                    <img src="opal.png" class="max-h-20 object-contain">
                </div>

                <div class="h-40 flex items-center justify-center p-6 border-b border-r border-gray-100 hover:bg-slate-50 transition">
                    <img src="indian-oil.png" class="max-h-20 object-contain">
                </div>

                <div class="h-40 flex items-center justify-center p-6 border-b border-gray-100 hover:bg-slate-50 transition">
                    <img src="oil-india.png" class="max-h-20 object-contain">
                </div>

                <div class="h-40 flex items-center justify-center p-6 border-r border-gray-100 hover:bg-slate-50 transition">
                    <img src="haver-boecker.png" class="max-h-20 object-contain">
                </div>

                <div class="h-40 flex items-center justify-center p-6 border-r border-gray-100 hover:bg-slate-50 transition">
                    <img src="finolex.png" class="max-h-20 object-contain">
                </div>

                <div class="h-40 flex items-center justify-center p-6 border-r border-gray-100 hover:bg-slate-50 transition">
                    <img src="vme.png" class="max-h-20 object-contain">
                </div>

                <div class="h-40 flex items-center justify-center p-6 border-r border-gray-100 hover:bg-slate-50 transition">
                    <img src="deepak-phenolics.png" class="max-h-24 object-contain">
                </div>

                <div class="h-40 flex items-center justify-center p-6 hover:bg-slate-50 transition">
                    <img src="epsilon.png" class="max-h-20 object-contain">
                </div>
                <div class="h-40 flex items-center justify-center p-6 hover:bg-slate-50 transition">
                    <img src="gujarat-fertilizers.png" class="max-h-20 object-contain">
                </div>
                <div class="h-40 flex items-center justify-center p-6 hover:bg-slate-50 transition">
                    <img src="hmel.png" class="max-h-20 object-contain">
                </div>
                <div class="h-40 flex items-center justify-center p-6 hover:bg-slate-50 transition">
                    <img src="ongc-mrpl.png" class="max-h-20 object-contain">
                </div>
                <div class="h-40 flex items-center justify-center p-6 hover:bg-slate-50 transition">
                    <img src="atricon.png" class="max-h-20 object-contain">
                </div>
                <div class="h-40 flex items-center justify-center p-6 hover:bg-slate-50 transition">
                    <img src="gfl.png" class="max-h-20 object-contain">
                </div>

            </div>

        </div>

    </div>

</section>
<section class="py-24 bg-corporate-dark text-white text-center">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl md:text-5xl font-bold mb-6 tracking-tight">Ready to build a sustainable future?</h2>
        <p class="text-gray-400 mb-10 text-lg leading-relaxed">Partner with Space Flex Private Limited today. Reach out
            for bulk orders, material specifications, and to learn more about Plast Ply.</p>
        <a href="contact.php"
            class="inline-block bg-brand text-white font-bold py-4 px-10 rounded-md hover:bg-brand-dark transition duration-300 shadow-lg shadow-brand/30 text-lg uppercase tracking-widest">
            Contact Our Team
        </a>
    </div>
</section>


<!-- ========================= -->
<!-- INDIA PRESENCE SECTION -->
<!-- ========================= -->

<section class="py-24 bg-white overflow-hidden border-y border-slate-200">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- HEADER -->
        <div class="text-center mb-14">

            <h2 class="text-brand font-bold uppercase tracking-[0.35em] text-sm mb-4">
                Our Presence
            </h2>

            <h3 class="text-4xl md:text-6xl font-extrabold text-corporate-dark tracking-tight leading-tight mb-6">
                Key Work Locations Across India
            </h3>

            <div class="w-32 h-1 bg-brand mx-auto rounded-full mb-6"></div>

            <p class="text-slate-500 uppercase tracking-[0.35em] text-xs md:text-sm">
                Industry-Specific Presence
                <span class="mx-4 text-brand">|</span>
                Pan India Operations
            </p>

        </div>

        <!-- MAIN BOX -->
        <div class="rounded-[2rem] overflow-hidden shadow-2xl border border-slate-200">

            <div class="grid grid-cols-1 lg:grid-cols-12">

                <!-- LEFT MAP -->
                <div class="lg:col-span-7 bg-gradient-to-br from-[#02142b] via-[#05264d] to-[#071426] relative overflow-hidden">

                    <!-- Dots -->
                    <div class="absolute inset-0 opacity-10"
                        style="background-image: radial-gradient(#ffffff 1px, transparent 1px); background-size: 18px 18px;">
                    </div>

                    <div class="relative z-10 p-10 md:p-14 h-full flex items-center justify-center">

                        <img src="map.png"
                            alt="India Presence Map"
                            class="w-full max-w-2xl object-contain drop-shadow-[0_0_35px_rgba(255,255,255,0.2)]">

                    </div>

                </div>

                <!-- RIGHT INFO -->
              <!-- RIGHT INFO -->
<div class="lg:col-span-5 bg-white p-6 md:p-8 space-y-5">

    <!-- CARD -->
    <div class="group relative overflow-hidden bg-white border border-slate-200 rounded-3xl px-6 py-5 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">

        <div class="absolute left-0 top-0 h-full w-1.5 bg-orange-500"></div>

        <div class="flex items-center justify-between gap-6">

            <div class="flex items-center gap-5">

                <div class="w-16 h-16 rounded-2xl bg-orange-50 border border-orange-100 flex items-center justify-center text-3xl shadow-sm">
                    🏢
                </div>

                <div>

                    <h4 class="text-3xl font-black text-orange-500 tracking-tight leading-none mb-2">
                        Haryana
                    </h4>

                    <p class="text-slate-500 text-base font-medium">
                        HQ – Gurugram
                    </p>

                </div>

            </div>

            <div class="hidden md:block w-px h-16 bg-slate-200"></div>

            <div class="text-right">

                <p class="text-slate-800 font-semibold text-lg leading-snug">
                    Head Office &
                    <br>
                    Strategic Operations
                </p>

            </div>

        </div>

    </div>

    <!-- CARD -->
    <div class="group relative overflow-hidden bg-white border border-slate-200 rounded-3xl px-6 py-5 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">

        <div class="absolute left-0 top-0 h-full w-1.5 bg-blue-500"></div>

        <div class="flex items-center justify-between gap-6">

            <div class="flex items-center gap-5">

                <div class="w-16 h-16 rounded-2xl bg-blue-50 border border-blue-100 flex items-center justify-center text-3xl shadow-sm">
                    🏭
                </div>

                <div>

                    <h4 class="text-3xl font-black text-blue-500 tracking-tight leading-none mb-2">
                        Punjab
                    </h4>

                    <p class="text-slate-500 text-base font-medium">
                        HMEL
                    </p>

                </div>

            </div>

            <div class="hidden md:block w-px h-16 bg-slate-200"></div>

            <div class="text-right">

                <p class="text-slate-800 font-semibold text-lg leading-snug">
                    Partner Network &
                    <br>
                    Supply Support
                </p>

            </div>

        </div>

    </div>

    <!-- CARD -->
    <div class="group relative overflow-hidden bg-white border border-slate-200 rounded-3xl px-6 py-5 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">

        <div class="absolute left-0 top-0 h-full w-1.5 bg-cyan-500"></div>

        <div class="flex items-center justify-between gap-6">

            <div class="flex items-center gap-5">

                <div class="w-16 h-16 rounded-2xl bg-cyan-50 border border-cyan-100 flex items-center justify-center text-3xl shadow-sm">
                    ⚙️
                </div>

                <div>

                    <h4 class="text-3xl font-black text-cyan-500 tracking-tight leading-none mb-2">
                        Gujarat
                    </h4>

                    <p class="text-slate-500 text-base font-medium">
                        OPAL, GSFC, Finolex
                    </p>

                </div>

            </div>

            <div class="hidden md:block w-px h-16 bg-slate-200"></div>

            <div class="text-right">

                <p class="text-slate-800 font-semibold text-lg leading-snug">
                    Manufacturing &
                    <br>
                    Industrial Partnerships
                </p>

            </div>

        </div>

    </div>

    <!-- CARD -->
    <div class="group relative overflow-hidden bg-white border border-slate-200 rounded-3xl px-6 py-5 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">

        <div class="absolute left-0 top-0 h-full w-1.5 bg-pink-500"></div>

        <div class="flex items-center justify-between gap-6">

            <div class="flex items-center gap-5">

                <div class="w-16 h-16 rounded-2xl bg-pink-50 border border-pink-100 flex items-center justify-center text-3xl shadow-sm">
                    🏗️
                </div>

                <div>

                    <h4 class="text-3xl font-black text-pink-500 tracking-tight leading-none mb-2">
                        Maharashtra
                    </h4>

                    <p class="text-slate-500 text-base font-medium">
                        Deepak Phenolics
                    </p>

                </div>

            </div>

            <div class="hidden md:block w-px h-16 bg-slate-200"></div>

            <div class="text-right">

                <p class="text-slate-800 font-semibold text-lg leading-snug">
                    Projects &
                    <br>
                    Industrial Collaboration
                </p>

            </div>

        </div>

    </div>

    <!-- CARD -->
    <div class="group relative overflow-hidden bg-white border border-slate-200 rounded-3xl px-6 py-5 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">

        <div class="absolute left-0 top-0 h-full w-1.5 bg-purple-500"></div>

        <div class="flex items-center justify-between gap-6">

            <div class="flex items-center gap-5">

                <div class="w-16 h-16 rounded-2xl bg-purple-50 border border-purple-100 flex items-center justify-center text-3xl shadow-sm">
                    🚚
                </div>

                <div>

                    <h4 class="text-3xl font-black text-purple-500 tracking-tight leading-none mb-2">
                        Karnataka
                    </h4>

                    <p class="text-slate-500 text-base font-medium">
                        ONGC MRPL
                    </p>

                </div>

            </div>

            <div class="hidden md:block w-px h-16 bg-slate-200"></div>

            <div class="text-right">

                <p class="text-slate-800 font-semibold text-lg leading-snug">
                    Installations &
                    <br>
                    Project Execution
                </p>

            </div>

        </div>

    </div>

    <!-- CARD -->
    <div class="group relative overflow-hidden bg-white border border-slate-200 rounded-3xl px-6 py-5 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">

        <div class="absolute left-0 top-0 h-full w-1.5 bg-green-500"></div>

        <div class="flex items-center justify-between gap-6">

            <div class="flex items-center gap-5">

                <div class="w-16 h-16 rounded-2xl bg-green-50 border border-green-100 flex items-center justify-center text-3xl shadow-sm">
                    🌱
                </div>

                <div>

                    <h4 class="text-3xl font-black text-green-500 tracking-tight leading-none mb-2">
                        Odisha
                    </h4>

                    <p class="text-slate-500 text-base font-medium">
                        Epsilon Carbon
                    </p>

                </div>

            </div>

            <div class="hidden md:block w-px h-16 bg-slate-200"></div>

            <div class="text-right">

                <p class="text-slate-800 font-semibold text-lg leading-snug">
                    Industrial Use &
                    <br>
                    Regional Supply
                </p>

            </div>

        </div>

    </div>

</div>

            </div>

            <!-- BOTTOM STRIP -->
            <div
                class="bg-gradient-to-r from-[#081629] via-[#0b2140] to-[#081629] text-white border-t border-slate-700">

                <div class="grid grid-cols-2 md:grid-cols-5 gap-6 px-8 py-8">

                    <div class="flex items-center gap-4">
                        <div class="text-4xl">🛡️</div>
                        <div>
                            <h4 class="font-bold uppercase tracking-wide text-sm">
                                Wide Network
                            </h4>
                            <p class="text-slate-300 text-sm">
                                Across India
                            </p>
                        </div>
                    </div>

                    <div class="flex items-center gap-4">
                        <div class="text-4xl">📍</div>
                        <div>
                            <h4 class="font-bold uppercase tracking-wide text-sm">
                                Strong Partnerships
                            </h4>
                            <p class="text-slate-300 text-sm">
                                Leading Industries
                            </p>
                        </div>
                    </div>

                    <div class="flex items-center gap-4">
                        <div class="text-4xl">🤝</div>
                        <div>
                            <h4 class="font-bold uppercase tracking-wide text-sm">
                                Reliable Solutions
                            </h4>
                            <p class="text-slate-300 text-sm">
                                Every Sector
                            </p>
                        </div>
                    </div>

                    <div class="flex items-center gap-4">
                        <div class="text-4xl">♻️</div>
                        <div>
                            <h4 class="font-bold uppercase tracking-wide text-sm">
                                Sustainable Future
                            </h4>
                            <p class="text-slate-300 text-sm">
                                Built on Innovation
                            </p>
                        </div>
                    </div>

                    <div class="flex items-center justify-center md:justify-end">
                        <h3 class="text-2xl md:text-3xl font-extrabold uppercase leading-tight text-right">
                            One Nation.
                            <span class="text-brand-light block">
                                Stronger Together.
                            </span>
                        </h3>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
<?php include 'footer.php'; ?>

<!-- Scripts -->
<script>
    document.addEventListener('DOMContentLoaded', () => {

        // Mobile Menu
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');

        if (btn && menu) {

            btn.addEventListener('click', () => {
                menu.classList.toggle('hidden');
            });

            const mobileLinks = menu.querySelectorAll('a');

            mobileLinks.forEach(link => {
                link.addEventListener('click', () => {
                    menu.classList.add('hidden');
                });
            });
        }

        // Navbar Shadow on Scroll
        const nav = document.getElementById('navbar');

        window.addEventListener('scroll', () => {

            if (window.scrollY > 10) {
                nav.classList.add('nav-scrolled');
            } else {
                nav.classList.remove('nav-scrolled');
            }
        });

    });
</script>

</body>

</html>