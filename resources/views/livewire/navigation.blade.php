<div class="min-h-screen">
    <!-- Header -->
    <flux:header class="absolute top-0 left-0 right-0 z-50 px-6 lg:px-8 py-4 bg-transparent">
        <!-- Brand (left) -->
        <flux:heading class="font-clicker text-white text-3xl lg:text-4xl">
            Coffee Corner
        </flux:heading>

        <!-- Navbar (center) -->
        <flux:navbar class="mx-auto hidden md:flex">
            <flux:navbar.item href="#" class="text-white text-lg hover:text-coffee-cream transition-colors font-playfair font-medium relative after:content-[''] after:absolute after:w-0 after:h-0.5 after:bg-coffee-cream after:bottom-0 after:left-0 after:transition-all after:duration-300 hover:after:w-full">
                Home
            </flux:navbar.item>
            <flux:navbar.item href="#" class="text-white hover:text-coffee-cream transition-colors font-playfair font-medium relative after:content-[''] after:absolute after:w-0 after:h-0.5 after:bg-coffee-cream after:bottom-0 after:left-0 after:transition-all after:duration-300 hover:after:w-full">
                Menu
            </flux:navbar.item>
            <flux:navbar.item href="#" class="text-white hover:text-coffee-cream transition-colors font-playfair font-medium relative after:content-[''] after:absolute after:w-0 after:h-0.5 after:bg-coffee-cream after:bottom-0 after:left-0 after:transition-all after:duration-300 hover:after:w-full">
                About Us
            </flux:navbar.item>
            <flux:navbar.item href="#" class="text-white hover:text-coffee-cream transition-colors font-playfair font-medium relative after:content-[''] after:absolute after:w-0 after:h-0.5 after:bg-coffee-cream after:bottom-0 after:left-0 after:transition-all after:duration-300 hover:after:w-full">
                Contact Us
            </flux:navbar.item>
        </flux:navbar>

        <!-- Right side (auth buttons) - MATCH ORDER NOW STYLE WITH !IMPORTANT -->
        <div class="flex items-center gap-3">
            <!-- Sign In Button - Same style as Order Now -->
            <flux:button
                variant="filled"
                href="/login"
                class="!px-6 !py-3 !bg-[#D4A574] !text-[#603809] hover:!bg-[#E6B885] !transition-all !duration-300 !font-playfair !font-medium !rounded-full !text-sm !border-0"
            >
                Sign In
            </flux:button>

            <!-- Sign Up Button - Same style as Order Now -->
            <flux:button
                variant="filled"
                href="/register"
                class="!px-6 !py-3 !bg-[#D4A574] !text-[#603809] hover:!bg-[#E6B885] !transition-all !duration-300 !font-playfair !font-medium !rounded-full !text-sm !border-0"
            >
                Sign Up
            </flux:button>
        </div>

        <!-- Mobile menu button -->
        <flux:button variant="ghost" class="md:hidden text-white">
            <flux:icon.bars-3 class="size-6" />
        </flux:button>
    </flux:header>

    <!-- Hero Section -->
    <section class="hero-bg min-h-screen flex items-center justify-center relative">
        <div class="container mx-auto px-6 lg:px-8 py-20">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Left content -->
                <div class="text-white space-y-8">
                    <div class="space-y-4">
                        <p class="font-playfair text-lg lg:text-xl font-medium tracking-wide">
                            We've got your morning covered with
                        </p>

                        <h1 class="font-clicker text-6xl lg:text-8xl xl:text-9xl leading-none">
                            Coffee
                        </h1>
                    </div>

                    <p class="font-playfair text-lg lg:text-xl leading-relaxed max-w-lg">
                        It is best to start your day with a cup of coffee. Discover the
                        best flavours coffee you will ever have. We provide the best
                        for our customers.
                    </p>

                    <!-- Updated CTA Button with !important to override Flux -->
                    <flux:button
                        class="!bg-[#D4A574] !text-[#603809] hover:!bg-[#E6B885] !transition-all !duration-300 !font-playfair !font-medium !px-8 !py-3 !rounded-full !text-lg !border-0"
                    >
                        Order Now
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
    </section>
</div>
