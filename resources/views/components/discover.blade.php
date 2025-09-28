<div
    class="min-h-screen flex items-center justify-center relative"
    style="background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('{{ asset('splash.jpg') }}');
           background-size: contain;
           background-repeat: no-repeat;
           background-position: center;
           background-attachment: fixed;"
>
    <div class="container mx-auto px-6 lg:px-8 py-20">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Left content -->
            <div class="text-white space-y-8">
                <div class="space-y-4">
                    <h1 class="font-playfair text-xl lg:text-6xl text-coffee-cream font-medium tracking-wide">
                        Discover the best Coffee
                    </h1>
                    <p class="font-playfair text-lg lg:text-xl leading-relaxed max-w-lg">
                        It is best to start your day with a cup of coffee. Discover the
                        best flavours coffee you will ever have. We provide the best
                        for our customers.
                    </p>
                </div>

                <flux:button
                    class="!bg-[#D4A574] !text-[#603809] hover:!bg-[#E6B885] !transition-all !duration-300 !font-playfair !font-medium !px-8 !py-3 !rounded-full !text-lg !border-0"
                >
                    Learn More
                </flux:button>
            </div>

            <!-- Right content - Coffee imagery -->
            <div class="hidden lg:flex justify-center items-center">
                <div class="relative">
                    <!-- You can replace this with actual coffee images -->
                </div>
            </div>
        </div>
    </div>
</div>
