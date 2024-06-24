<div>
<div class="relative h-screen overflow-hidden ">
    <!-- Background overlay with reduced opacity -->
    <div class="absolute inset-0 bg-gray-900 bg-center bg-no-repeat bg-cover opacity-25"
        style="background-image: url(./images/back.jpg);"></div>

    <!-- Rotated div for working hours -->
    <div class="absolute top-0 hidden h-full rotate-45 bg-black transform-gpu lg:block working-hour"></div>

    <!-- Rectangle 1 -->
    <div class="absolute hidden rectangle lg:block" style="top: 15%; right: 30%; width: 300px; height: 440px;">
        <img src="./images/img4.jpg" alt="Image 1">
    </div>

    <!-- Rectangle 3 -->
    <div class="absolute hidden rectangle lg:block" style="top: 45%; right: 35%; width: 300px; height: 200px;">
        <img src="./images/img3.png" alt="Image 3">
    </div>
</div>

<!-- about us section  -->

<section class="py-20 about-us-section">
    <div class="container flex flex-col items-center mx-auto md:flex-row md:space-x-8">
        <!-- Left side (content) -->
        <div class="content md:w-1/2">
            <h2 class="mb-4 text-4xl font-bold">About Us</h2>
            <p class="mb-6 text-lg">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis
                lorem ut libero malesuada feugiat.
            </p>
        </div>
        <!-- Right side (image) -->
        <div class="relative mt-8 md:w-1/2 md:mt-0">
            <img src="./images/about-us.jpg" alt="About Us" class="object-cover w-full h-full rounded-lg" />
            <div class="absolute inset-0 bg-black rounded-lg opacity-25"></div>
        </div>
    </div>
</section>

<!-- services section -->
<div class="max-w-5xl px-4 py-12 mx-auto sm:px-6 lg:px-8">
    <div class="text-center">
        <h1 class="text-3xl font-bold">Our Services</h1>
        <p class="mt-2 text-lg">
            These are the services we provide in this salon
        </p>
    </div>

    <div class="grid grid-cols-1 gap-8 mt-12 md:grid-cols-2 lg:grid-cols-4">
        <!-- Service 1 -->
        <div class="relative overflow-hidden bg-white rounded-lg shadow-md group">
            <img src="./images/img1.png" alt="Service 1"
                class="object-cover w-full h-48 transition-transform group-hover:scale-105" />
            <div
                class="absolute inset-0 flex items-center justify-center transition-opacity bg-black opacity-0 group-hover:opacity-50">
                <button
                    class="px-4 py-2 font-semibold text-gray-900 transition-colors duration-300 bg-white rounded-lg shadow-md hover:bg-gray-200">
                    Book Now
                </button>
            </div>
            <div class="p-4">
                <h3 class="mb-2 text-lg font-semibold text-gray-900">
                    Oil Massage
                </h3>
                <p class="mb-2 text-sm text-gray-700">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut,
                    soluta?
                </p>
                <div class="flex items-center justify-between">
                    <span class="text-lg font-bold">$30</span>
                    <span class="text-sm text-green-500">Available</span>
                </div>
                <p class="mt-2 text-xs text-gray-500">Duration: 60 minutes</p>
            </div>
        </div>

        <!-- Service 2 -->
        <div class="relative overflow-hidden bg-white rounded-lg shadow-md group">
            <img src="./images/img2.png" alt="Service 2"
                class="object-cover w-full h-48 transition-transform group-hover:scale-105" />
            <div
                class="absolute inset-0 flex items-center justify-center transition-opacity bg-black opacity-0 group-hover:opacity-50">
                <button
                    class="px-4 py-2 font-semibold text-gray-900 transition-colors duration-300 bg-white rounded-lg shadow-md hover:bg-gray-200">
                    Book Now
                </button>
            </div>
            <div class="p-4">
                <h3 class="mb-2 text-lg font-semibold text-gray-900">
                    Facial Treatment
                </h3>
                <p class="mb-2 text-sm text-gray-700">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut,
                    soluta?
                </p>
                <div class="flex items-center justify-between">
                    <span class="text-lg font-bold">$50</span>
                    <span class="text-sm text-green-500">Available</span>
                </div>
                <p class="mt-2 text-xs text-gray-500">Duration: 90 minutes</p>
            </div>
        </div>

        <!-- Service 3 -->
        <div class="relative overflow-hidden bg-white rounded-lg shadow-md group">
            <img src="./images/img3.png" alt="Service 3"
                class="object-cover w-full h-48 transition-transform group-hover:scale-105" />
            <div
                class="absolute inset-0 flex items-center justify-center transition-opacity bg-black opacity-0 group-hover:opacity-50">
                <button
                    class="px-4 py-2 font-semibold text-gray-900 transition-colors duration-300 bg-white rounded-lg shadow-md hover:bg-gray-200">
                    Book Now
                </button>
            </div>
            <div class="p-4">
                <h3 class="mb-2 text-lg font-semibold text-gray-900">
                    Haircut & Styling
                </h3>
                <p class="mb-2 text-sm text-gray-700">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut,
                    soluta?
                </p>
                <div class="flex items-center justify-between">
                    <span class="text-lg font-bold">$40</span>
                    <span class="text-sm text-green-500">Available</span>
                </div>
                <p class="mt-2 text-xs text-gray-500">Duration: 45 minutes</p>
            </div>
        </div>

        <!-- Service 4 -->
        <div class="relative overflow-hidden bg-white rounded-lg shadow-md group">
            <img src="./images/img2.png" alt="Service 4"
                class="object-cover w-full h-48 transition-transform group-hover:scale-105" />
            <div
                class="absolute inset-0 flex items-center justify-center transition-opacity bg-black opacity-0 group-hover:opacity-50">
                <button
                    class="px-4 py-2 font-semibold text-gray-900 transition-colors duration-300 bg-white rounded-lg shadow-md hover:bg-gray-200">
                    Book Now
                </button>
            </div>
            <div class="p-4">
                <h3 class="mb-2 text-lg font-semibold text-gray-900">
                    Manicure & Pedicure
                </h3>
                <p class="mb-2 text-sm text-gray-700">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut,
                    soluta?
                </p>
                <div class="flex items-center justify-between">
                    <span class="text-lg font-bold">$25</span>
                    <span class="text-sm text-green-500">Available</span>
                </div>
                <p class="mt-2 text-xs text-gray-500">Duration: 30 minutes</p>
            </div>
        </div>
    </div>
</div>

<!-- Book Now Section -->
<section class="bg-fixed bg-center bg-no-repeat bg-cover button-section" style="background-image: url(./images/bg.jpg)">
    <div class="content">
        <h2 class="mb-4 text-3xl font-bold text-dark">
            Ready to Transform Your Beauty?
        </h2>
        <p class="mb-8 text-lg">
            Explore our services and book your appointment now!
        </p>
        <button
            class="px-8 py-3 font-semibold text-white transition-colors duration-300 bg-red-600 rounded-full shadow-lg hover:bg-red-700">
            Book Now
        </button>
    </div>
</section>

<!-- Testimonial Section -->
<section class="py-20 ">
    <div class="container mx-auto">
        <h2 class="mb-12 text-4xl font-bold text-center">Testimonials</h2>
        <div class="swiper-container">
            <div class="swiper-wrapper text-black">

                <!-- Testimonial 1 -->
                <div class="p-6 text-gray-800 bg-white rounded-lg shadow-lg swiper-slide"
                    style="max-width: 320px; margin: auto;">
                    <img src="./images/testimonial1.jpg" alt="Testimonial 1"
                        class="w-16 h-16 mx-auto mb-4 rounded-full">
                    <h3 class="text-xl font-semibold text-center">John Doe</h3>
                    <div class="flex justify-center mb-2">
                        <span class="text-yellow-500">★★★★★</span>
                    </div>
                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis lorem ut
                        libero malesuada feugiat.</p>
                </div>

                <!-- Testimonial 2 -->
                <div class="p-6 text-gray-800 bg-white rounded-lg shadow-lg swiper-slide"
                    style="max-width: 320px; margin: auto;">
                    <img src="./images/testimonial2.jpg" alt="Testimonial 2"
                        class="w-16 h-16 mx-auto mb-4 rounded-full">
                    <h3 class="text-xl font-semibold text-center">Jane Smith</h3>
                    <div class="flex justify-center mb-2">
                        <span class="text-yellow-500">★★★★☆</span>
                    </div>
                    <p class="text-center">Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                        Pellentesque in ipsum id orci porta dapibus.</p>
                </div>

                <!-- Testimonial 3 -->
                <div class="p-6 text-gray-800 bg-white rounded-lg shadow-lg swiper-slide"
                    style="max-width: 320px; margin: auto;">
                    <img src="./images/testimonial3.jpg" alt="Testimonial 3"
                        class="w-16 h-16 mx-auto mb-4 rounded-full">
                    <h3 class="text-xl font-semibold text-center">Michael Johnson</h3>
                    <div class="flex justify-center mb-2">
                        <span class="text-yellow-500">★★★★★</span>
                    </div>
                    <p class="text-center">Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris
                        blandit aliquet elit, eget tincidunt nibh pulvinar a.</p>
                </div>

                <!-- Testimonial 4 -->
                <div class="p-6 text-gray-800 bg-white rounded-lg shadow-lg swiper-slide"
                    style="max-width: 320px; margin: auto;">
                    <img src="./images/testimonial4.jpg" alt="Testimonial 4"
                        class="w-16 h-16 mx-auto mb-4 rounded-full">
                    <h3 class="text-xl font-semibold text-center">Emily Davis</h3>
                    <div class="flex justify-center mb-2">
                        <span class="text-yellow-500">★★★★☆</span>
                    </div>
                    <p class="text-center">Sed porttitor lectus nibh. Nulla quis lorem ut libero malesuada feugiat.
                        Vestibulum ante ipsum primis in faucibus orci luctus et.</p>
                </div>

                <!-- Testimonial 5 -->
                <div class="p-6 text-gray-800 bg-white rounded-lg shadow-lg swiper-slide"
                    style="max-width: 320px; margin: auto;">
                    <img src="./images/testimonial5.jpg" alt="Testimonial 5"
                        class="w-16 h-16 mx-auto mb-4 rounded-full">
                    <h3 class="text-xl font-semibold text-center">Sophia Brown</h3>
                    <div class="flex justify-center mb-2">
                        <span class="text-yellow-500">★★★★★</span>
                    </div>
                    <p class="text-center">Proin eget tortor risus. Nulla quis lorem ut libero malesuada feugiat.
                        Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                </div>

                <!-- Testimonial 6 -->
                <div class="p-6 text-gray-800 bg-white rounded-lg shadow-lg swiper-slide"
                    style="max-width: 320px; margin: auto;">
                    <img src="./images/testimonial6.jpg" alt="Testimonial 6"
                        class="w-16 h-16 mx-auto mb-4 rounded-full">
                    <h3 class="text-xl font-semibold text-center">James Wilson</h3>
                    <div class="flex justify-center mb-2">
                        <span class="text-yellow-500">★★★★☆</span>
                    </div>
                    <p class="text-center">Donec sollicitudin molestie malesuada. Cras ultricies ligula sed magna
                        dictum porta. Curabitur non nulla sit amet nisl tempus convallis.</p>
                </div>

            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>

        </div>
    </div>
</section>


<!-- galeery section  -->
<section class="py-20">
    <h2 class="mb-12 text-4xl font-bold text-center">Gallery</h2>
    <div class="album">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="bg-gray-200 p-2">
                <img class="w-full h-full object-cover" src="./images/gallery1.jpg" alt="Gallery Image 1">
            </div>
            <div class="bg-gray-200 p-2">
                <img class="w-full h-full object-cover" src="./images/gallery2.jpg" alt="Gallery Image 2">
            </div>
            <div class="bg-gray-200 p-2">
                <img class="w-full h-full object-cover" src="./images/gallery3.jpg" alt="Gallery Image 3">
            </div>
            <div class="bg-gray-200 p-2">
                <img class="w-full h-full object-cover" src="./images/gallery4.jpg" alt="Gallery Image 4">
            </div>
            <div class="bg-gray-200 p-2">
                <img class="w-full h-full object-cover" src="./images/gallery5.jpg" alt="Gallery Image 5">
            </div>
            <div class="bg-gray-200 p-2">
                <img class="w-full h-full object-cover" src="./images/gallery6.jpg" alt="Gallery Image 6">
            </div>
            <div class="bg-gray-200 p-2">
                <img class="w-full h-full object-cover" src="./images/gallery7.jpg" alt="Gallery Image 7">
            </div>
            <div class="bg-gray-200 p-2">
                <img class="w-full h-full object-cover" src="./images/gallery8.jpg" alt="Gallery Image 8">
            </div>
        </div>
    </div>
</section>

</div>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
      var swiper = new Swiper('.swiper-container', {
      loop: true,
      slidesPerView: 1,
      spaceBetween: 10,
      breakpoints: {
        640: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 30,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 40,
        },
      },
   
   
    });
</script>
