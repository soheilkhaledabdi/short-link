<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>کوتاه‌کننده لینک - لینک‌های خود را ساده کنید</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'IRANSans', Arial, sans-serif;
        }
    </style>
    @livewireStyles
</head>

<body class="bg-gray-50 text-gray-800">
    <!-- Header -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-extrabold text-blue-600">کوتاه‌کننده لینک</h1>
            <nav>
                <a href="#features" class="text-gray-600 hover:text-blue-600 mx-4 transition">ویژگی‌ها</a>
                <a href="#contact" class="text-gray-600 hover:text-blue-600 mx-4 transition">تماس با ما</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    {{ $slot }}
    <!-- Features Section -->
    <section id="features" class="py-16 bg-gray-100">
        <div class="container mx-auto px-6 text-center">
            <h3 class="text-3xl font-bold mb-12">چرا کوتاه‌کننده لینک؟</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white shadow-lg p-6 rounded-lg hover:shadow-xl transition">
                    <h4 class="text-xl font-bold mb-4">لینک‌های سفارشی</h4>
                    <p class="text-gray-600">لینک‌های کوتاه شخصی‌سازی‌شده که با برند شما مطابقت دارند.</p>
                </div>
                <div class="bg-white shadow-lg p-6 rounded-lg hover:shadow-xl transition">
                    <h4 class="text-xl font-bold mb-4">تحلیل و آمار</h4>
                    <p class="text-gray-600">لینک‌های خود را با آمارهای عملکرد دقیق پیگیری کنید.</p>
                </div>
                <div class="bg-white shadow-lg p-6 rounded-lg hover:shadow-xl transition">
                    <h4 class="text-xl font-bold mb-4">رابط کاربری ساده</h4>
                    <p class="text-gray-600">در عرض چند ثانیه لینک‌های خود را کوتاه کنید.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact" class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-6 text-center">
            <p class="mb-4">&copy; ۲۰۲۴ کوتاه‌کننده لینک. تمامی حقوق محفوظ است.</p>
            <p>برای تماس با ما به <a href="mailto:support@shortlink.com" class="text-blue-400 hover:underline">support@shortlink.com</a> ایمیل بزنید.</p>
        </div>
    </footer>

    @livewireScripts
</body>

</html>