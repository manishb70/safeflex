<?php
// =========================
// FORM HANDLING
// =========================

$status_msg = '';
$status_type = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = trim(htmlspecialchars($_POST['name'] ?? ''));
    $email = trim(htmlspecialchars($_POST['email'] ?? ''));
    $phone = trim(htmlspecialchars($_POST['phone'] ?? ''));
    $subject = trim(htmlspecialchars($_POST['subject'] ?? ''));
    $message = trim(htmlspecialchars($_POST['message'] ?? ''));

    if (!empty($name) && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($message)) {

        /*
        $to = "spaceflexpvtltd@gmail.com";

        $full_message = "
        Name: $name

        Email: $email

        Phone: $phone

        Subject: $subject

        Message:
        $message
        ";

        $headers = "From: spaceflexpvtltd@gmail.com\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        mail($to, $subject, $full_message, $headers);
        */

        header("Location: contact.php?success=1");
        exit();

    } else {

        $status_msg = "Please enter all required details correctly.";
        $status_type = "error";
    }
}

if (isset($_GET['success'])) {
    $status_msg = "Thank you! Your inquiry has been submitted successfully.";
    $status_type = "success";
}
?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact Us | Space Flex Private Limited</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {

                    fontFamily: {
                        sans: ['Inter', 'sans-serif']
                    },

                    colors: {
                        brand: {
                            light: '#60a5fa',
                            DEFAULT: '#2563eb',
                            dark: '#1d4ed8',
                        },

                        corporate: {
                            dark: '#071426',
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

        .hero-bg {
            background:
                linear-gradient(rgba(7, 20, 38, 0.92),
                rgba(7, 20, 38, 0.88)),
                url('hero-contact.jpeg');

            background-size: cover;
            background-position: center;
        }

        .glass {
            backdrop-filter: blur(18px);
            background: rgba(255,255,255,0.06);
        }

    </style>

</head>

<body class="bg-slate-50 font-sans text-slate-800">

<!-- ========================= -->
<!-- NAVBAR -->
<!-- ========================= -->

<nav class="sticky top-0 z-50 bg-white/90 backdrop-blur border-b border-slate-200">

    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="flex items-center justify-between h-20">

            <!-- Logo -->
            <a href="index.php" class="flex items-center gap-4">

                <div class="w-12 h-12 rounded-2xl overflow-hidden border border-slate-200 shadow-sm">

                    <img src="logo.png"
                        alt="Space Flex Logo"
                        class="w-full h-full object-cover">

                </div>

                <div>

                    <h1 class="text-2xl font-black tracking-tight uppercase text-slate-900">
                        SPACE
                        <span class="text-brand">
                            FLEX
                        </span>
                    </h1>

                    <p class="text-[10px] uppercase tracking-[0.3em] text-slate-400 mt-1">
                        Sustainable Solutions
                    </p>

                </div>

            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center gap-10 text-sm font-semibold uppercase tracking-[0.2em]">

                <a href="index.php#about"
                    class="text-slate-500 hover:text-brand transition">
                    About
                </a>

                <a href="index.php#gallery"
                    class="text-slate-500 hover:text-brand transition">
                    Applications
                </a>

                <a href="index.php#pricing"
                    class="text-slate-500 hover:text-brand transition">
                    Pricing
                </a>

                <a href="contact.php"
                    class="bg-brand text-white px-6 py-3 rounded-2xl shadow-lg shadow-blue-500/20 hover:bg-brand-dark transition">
                    Contact Us
                </a>

            </div>

        </div>

    </div>

</nav>

<!-- ========================= -->
<!-- HERO -->
<!-- ========================= -->

<section class="hero-bg relative overflow-hidden py-32 lg:py-40 text-white">

    <!-- Glow -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-blue-500/20 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-cyan-400/10 rounded-full blur-3xl"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8">

        <div class="max-w-4xl">

            <div class="inline-flex items-center gap-3 px-5 py-2 rounded-full glass border border-white/10 mb-8">

                <div class="w-2 h-2 rounded-full bg-blue-400 animate-pulse"></div>

                <span class="uppercase tracking-[0.3em] text-xs font-semibold text-blue-200">
                    Get In Touch
                </span>

            </div>

            <h1 class="text-5xl md:text-7xl font-black leading-[0.95] tracking-tight mb-8">

                Let's Build
                <span class="text-blue-400 block">
                    Sustainable Solutions
                </span>

            </h1>

            <p class="text-xl text-slate-300 leading-relaxed max-w-2xl">

                Connect with Space Flex Private Limited for industrial-grade
                Plast Ply solutions, bulk orders, infrastructure projects,
                and sustainable manufacturing partnerships.

            </p>

        </div>

    </div>

</section>

<!-- ========================= -->
<!-- CONTACT SECTION -->
<!-- ========================= -->

<section class="py-24">

    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">

            <!-- LEFT -->
            <div class="lg:col-span-4 space-y-6">

                <!-- Contact Card -->
                <div class="bg-white rounded-[2rem] p-8 border border-slate-200 shadow-xl">

                    <h2 class="text-2xl font-black text-slate-900 mb-8">
                        Contact Information
                    </h2>

                    <div class="space-y-8">

                        <!-- Address -->
                        <div class="flex gap-5">

                            <div class="w-14 h-14 rounded-2xl bg-blue-50 text-brand flex items-center justify-center text-2xl">
                                📍
                            </div>

                            <div>

                                <h3 class="font-bold text-slate-900 text-lg mb-1">
                                    Corporate Office
                                </h3>

                                <p class="text-slate-500 leading-relaxed">
                                    Gurugram, Haryana
                                    <br>
                                    India
                                </p>

                            </div>

                        </div>

                        <!-- Phone -->
                        <div class="flex gap-5">

                            <div class="w-14 h-14 rounded-2xl bg-blue-50 text-brand flex items-center justify-center text-2xl">
                                📞
                            </div>

                            <div>

                                <h3 class="font-bold text-slate-900 text-lg mb-1">
                                    Phone Number
                                </h3>

                                <p class="text-slate-500">
                                    +91 97739 99582
                                </p>

                            </div>

                        </div>

                        <!-- Email -->
                        <div class="flex gap-5">

                            <div class="w-14 h-14 rounded-2xl bg-blue-50 text-brand flex items-center justify-center text-2xl">
                                ✉️
                            </div>

                            <div>

                                <h3 class="font-bold text-slate-900 text-lg mb-1">
                                    Email Address
                                </h3>

                                <p class="text-slate-500 break-all">
                                    spaceflexpvtltd@gmail.com
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Business Hours -->
                <div class="bg-[#071426] rounded-[2rem] p-8 text-white shadow-2xl overflow-hidden relative">

                    <div class="absolute inset-0 opacity-10"
                        style="background-image: radial-gradient(#ffffff 1px, transparent 1px); background-size: 18px 18px;">
                    </div>

                    <div class="relative z-10">

                        <h2 class="text-2xl font-black mb-8">
                            Business Hours
                        </h2>

                        <div class="space-y-5">

                            <div class="flex justify-between items-center border-b border-white/10 pb-4">

                                <span class="text-slate-300">
                                    Monday - Saturday
                                </span>

                                <span class="font-bold text-blue-400">
                                    9:00 AM - 6:30 PM
                                </span>

                            </div>

                            <div class="flex justify-between items-center">

                                <span class="text-slate-300">
                                    Sunday
                                </span>

                                <span class="font-bold text-red-400">
                                    Closed
                                </span>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- RIGHT -->
            <div class="lg:col-span-8">

                <div class="bg-white rounded-[2rem] border border-slate-200 shadow-2xl overflow-hidden">

                    <!-- Top -->
                    <div class="bg-gradient-to-r from-[#071426] via-[#0f2747] to-[#071426] px-10 py-10 text-white relative overflow-hidden">

                        <div class="absolute inset-0 opacity-10"
                            style="background-image: radial-gradient(#ffffff 1px, transparent 1px); background-size: 18px 18px;">
                        </div>

                        <div class="relative z-10">

                            <h2 class="text-4xl font-black tracking-tight mb-4">
                                Request a Quote
                            </h2>

                            <p class="text-slate-300 max-w-2xl leading-relaxed">
                                Share your requirements and our team will contact you
                                with the best industrial and commercial Plast Ply solution.
                            </p>

                        </div>

                    </div>

                    <!-- Form -->
                    <div class="p-10">

                        <!-- Alert -->
                        <?php if ($status_msg): ?>

                            <div class="mb-8 px-6 py-5 rounded-2xl border text-sm font-semibold <?php echo $status_type === 'success'
                                ? 'bg-green-50 border-green-200 text-green-700'
                                : 'bg-red-50 border-red-200 text-red-700'; ?>">

                                <?php echo $status_msg; ?>

                            </div>

                        <?php endif; ?>

                        <form method="POST"
                            class="grid grid-cols-1 md:grid-cols-2 gap-6">

                            <!-- Name -->
                            <div>

                                <label class="block text-sm font-bold text-slate-700 mb-3">
                                    Full Name
                                </label>

                                <input type="text"
                                    name="name"
                                    required
                                    placeholder="Enter your name"
                                    class="w-full px-5 py-4 rounded-2xl border border-slate-200 bg-slate-50 focus:outline-none focus:ring-4 focus:ring-blue-100 focus:border-brand transition">

                            </div>

                            <!-- Email -->
                            <div>

                                <label class="block text-sm font-bold text-slate-700 mb-3">
                                    Email Address
                                </label>

                                <input type="email"
                                    name="email"
                                    required
                                    placeholder="name@company.com"
                                    class="w-full px-5 py-4 rounded-2xl border border-slate-200 bg-slate-50 focus:outline-none focus:ring-4 focus:ring-blue-100 focus:border-brand transition">

                            </div>

                            <!-- Phone -->
                            <div>

                                <label class="block text-sm font-bold text-slate-700 mb-3">
                                    Phone Number
                                </label>

                                <input type="text"
                                    name="phone"
                                    placeholder="+91 XXXXX XXXXX"
                                    class="w-full px-5 py-4 rounded-2xl border border-slate-200 bg-slate-50 focus:outline-none focus:ring-4 focus:ring-blue-100 focus:border-brand transition">

                            </div>

                            <!-- Subject -->
                            <div>

                                <label class="block text-sm font-bold text-slate-700 mb-3">
                                    Inquiry Type
                                </label>

                                <select name="subject"
                                    class="w-full px-5 py-4 rounded-2xl border border-slate-200 bg-slate-50 focus:outline-none focus:ring-4 focus:ring-blue-100 focus:border-brand transition">

                                    <option>Bulk Order</option>
                                    <option>Industrial Project</option>
                                    <option>Dealership Inquiry</option>
                                    <option>Custom Requirement</option>
                                    <option>Other</option>

                                </select>

                            </div>

                            <!-- Message -->
                            <div class="md:col-span-2">

                                <label class="block text-sm font-bold text-slate-700 mb-3">
                                    Project Requirements
                                </label>

                                <textarea name="message"
                                    rows="7"
                                    required
                                    placeholder="Tell us about your project requirements..."
                                    class="w-full px-5 py-4 rounded-2xl border border-slate-200 bg-slate-50 focus:outline-none focus:ring-4 focus:ring-blue-100 focus:border-brand transition resize-none"></textarea>

                            </div>

                            <!-- Button -->
                            <div class="md:col-span-2 pt-2">

                                <button type="submit"
                                    class="group inline-flex items-center gap-4 bg-brand hover:bg-brand-dark text-white px-10 py-5 rounded-2xl font-bold uppercase tracking-[0.2em] text-sm shadow-2xl shadow-blue-500/20 transition duration-300 hover:-translate-y-1">

                                    Submit Inquiry

                                    <span class="group-hover:translate-x-1 transition">
                                        →
                                    </span>

                                </button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ========================= -->
<!-- FOOTER -->
<!-- ========================= -->


<?php include 'footer.php'; ?>

</body>
</html>