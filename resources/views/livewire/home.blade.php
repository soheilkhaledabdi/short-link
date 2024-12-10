<section class="bg-gradient-to-br from-blue-500 to-blue-600 text-white py-16">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-5xl font-extrabold mb-6">لینک‌های خود را ساده کنید</h2>
        <p class="text-lg mb-8">لینک‌های طولانی و پیچیده خود را به لینک‌های کوتاه و قابل مدیریت تبدیل کنید.</p>

        <div class="max-w-2xl mx-auto">
            <input
                type="text"
                wire:model="longUrl"
                placeholder="لینک طولانی خود را اینجا وارد کنید..."
                class="w-full px-4 py-3 rounded-lg text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-400 mb-4">
            @error('longUrl')
            <p class="text-red-300 font-semibold">
                {{ $message }}
            </p>
            @enderror

            <div class="flex justify-center items-center space-x-4 rtl:space-x-reverse mb-4">
                <label class="flex items-center">
                    <input
                        type="radio"
                        name="linkType"
                        value="random"
                        checked
                        wire:change="handleLinkTypeChange('random')"
                        class="mr-2">
                    لینک تصادفی
                </label>
                <label class="flex items-center">
                    <input
                        type="radio"
                        name="linkType"
                        value="custom"
                        wire:change="handleLinkTypeChange('custom')"
                        class="mr-2">
                    لینک سفارشی
                </label>
            </div>
            @error('linkType')
            <p class="text-red-300 font-semibold">
                {{ $message }}
            </p>
            @enderror


            @if($linkType === 'custom')
            <input
                type="text"
                wire:model="customUrl"
                placeholder="لینک سفارشی خود را وارد کنید..."
                class="w-full px-4 py-3 rounded-lg text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-400 mb-4">
            @error('customUrl')
            <p class="text-red-300 font-semibold">
                {{ $message }}
            </p>
            @enderror
            @endif

            <input
                type="number"
                wire:model="expiryDate"
                placeholder="تاریخ انقضا"
                class="w-full px-4 py-3 rounded-lg text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-400 mb-6">
            @error('expiryDate')
            <p class="text-red-300 font-semibold">
                {{ $message }}
            </p>
            @enderror
            <button
                type="submit"
                wire:click="submit"
                class="bg-white text-blue-600 px-8 py-3 font-bold rounded-lg hover:bg-gray-100 transition shadow-md">
                کوتاه کن
            </button>

            @if (session()->has('success'))
            <p class="mt-4 text-green-300 font-semibold">
                {{ session('success') }}
            </p>
            @endif

            @if (session()->has('error'))
            <p class="mt-4 text-red-300 font-semibold">
                {{ session('error') }}
            </p>
            @endif
            
        </div>
    </div>
</section>