<div>
    <div class="relative top-0 h-screen">
        <div class="absolute inset-0 bg-fixed bg-center bg-no-repeat bg-cover z-0"
            style="background-image: url(./images/hero.jpg)"></div>
        <div class="absolute inset-0 bg-fixed bg-black opacity-10 z-10"></div>

        <div class="absolute w-full h-full mt-10 flex justify-center items-center flex-col md:mt-48 z-20">
            <p class="md:text-5xl text-3xl leading-normal tracking-wider text-center text-white">
                Always Make Room for a Little <br />
                Beauty in Your Life
            </p>
            <div class="flex justify-center items-center w-full my-12 flex-col md:flex-row">
                <button
                    class="px-5 py-2 text-black w-3/4 md:w-4/12 lg:w-2/12 transition ease-in-out bg-white rounded duration-800 hover:bg-pink-300">
                    BOOK APPOINTMENT
                </button>
                <button
                    class="px-5 py-2 md:ml-6 ml-0 w-3/4 md:w-4/12 lg:w-2/12 mt-8 md:mt-0 text-black transition ease-in-out border-2 border-white rounded duration-800 hover:bg-white">
                    VIEW SERVICE MENU
                </button>
            </div>

            <div class="w-3/4 mx-auto my-0 md:my-40 px-5 md:py-5 py-0 text-white">
                <div class="flex flex-col md:flex-row justify-between">
                    <div class="md:basis-1/3 basis-full mb-8 md:mb-0">
                        <p class="text-center font-bold text-xl">CONTACT</p>
                        <p class="text-center">+977 9864120535</p>
                        <p class="text-center">info@gmail.com</p>
                    </div>
                    <div class="md:basis-1/3 basis-full mb-8 md:mb-0">
                        <p class="text-center font-bold text-xl">HOURS</p>
                        <p class="text-center">Mon to Fri: 7:30 am — 1:00 am</p>
                        <p class="text-center">Sat: 9:00 am — 1:00 am</p>
                        <p class="text-center">Sun: 9:00 am — 11:30 pm</p>
                    </div>
                    <div class="md:basis-1/3 basis-full">
                        <p class="text-center font-bold text-xl">LOCATION</p>
                        <p class="text-center">85 Royal Mint Street,</p>
                        <p class="text-center">London, E1 8LG</p>
                        <p class="text-center">United Kingdom</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- services section -->

    <section class="py-16 mt-10">
        <div class="max-w-2xl mx-auto px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-black text-center">Service Menu</h2>

            <div class="grid grid-cols-1 mt-20 gap-6 md:grid-cols-5">
                <!-- Contact -->
                <div class="text-center">
                    <img src="./images/nail.png" alt="Contact Icon" class="mx-auto mb-4 w-12 h-16" />
                    <h3 class="mb-2 text-sm text-gray-500">NAILS</h3>
                </div>

                <!-- Working Hours -->
                <div class="text-center">
                    <img src="./images/brows.png" alt="Working Hours Icon" class="mx-auto mb-4 w-12 h-16" />
                    <h3 class="mb-2 text-sm text-gray-500">BROW</h3>
                </div>

                <!-- Location -->
                <div class="text-center">
                    <img src="./images/hair.png" alt="Location Icon" class="mx-auto mb-4 w-12 h-16" />
                    <h3 class="mb-2 text-sm text-gray-500">HAIR</h3>
                </div>

                <!-- Cosmetology -->
                <div class="text-center">
                    <img src="./images/cosmetology.png" alt="Cosmetology Icon" class="mx-auto mb-4 w-12 h-16" />
                    <h3 class="mb-2 text-sm text-gray-500">COSMETOLOGY</h3>
                </div>

                <!-- Makeup -->
                <div class="text-center">
                    <img src="./images/makeup.png" alt="Makeup Icon" class="mx-auto mb-4 w-12 h-16" />
                    <h3 class="mb-2 text-sm text-gray-500">MAKEUP</h3>
                </div>
            </div>
            <div class="w-3/4 mx-auto mt-10">
                <p class="text-center ">Indulge a little longer with a customized facial to help achieve your skin goals
                    in 60-90 minutes.</p>

            </div>
            <div class="flex justify-center">
                <button class="lg:w-2/4 mt-10 md:w-2/4  px-2 py-3 sm:w-full   bg-black hover:bg-gray-900 text-white">
                    VIEW SERVICE MENU
                </button>
            </div>
        </div>
    </section>


    <!-- about us section  -->

    <section class="bg-pink-50 about-us-section py-5 mt-16">
        <div class="container flex flex-col items-center h-screen mx-auto md:flex-row md:space-x-8">
            <div class="relative h-3/4 mt-8 md:w-1/2 md:mt-0">
                <img src="./images/about-us.jpg" alt="About Us" class="object-cover h-full" />
            </div>
            <!-- Left side (content) -->
            <div class="content md:w-1/2">
                <h2 class="mb-4 mt-5 sm:text-center md:text-left md:mt-0 text-3xl font-bold text-black">
                    About Us
                </h2>
                <p class="mb-6 text-black text-md">
                    We started as a small beauty studio in Islington, London. Our main
                    idea was to create the best beauty studio in the world. Can there be
                    compromises in the best studio in the world? Our answer is always
                    no, we care about the best quality, we hire the best specialists and
                    provide the best customer service. This approach allowed us to grow
                    and create awesome team that is passionate about everything we do.
                </p>
                <button
                    class="lg:w-1/3 md:w-1/2 px-5 py-3 sm:w-full text-black border border-black hover:bg-black hover:text-white">
                    LEARN MORE
                </button>
            </div>
            <!-- Right side (image) -->
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="py-20 text-black">
        <div class="container mx-auto">
            <h2 class="text-3xl text-center py-5 font-bold text-black">
                Testimonials
            </h2>
            <div class="owl-carousel owl-theme ">
                <!-- Testimonial 1 -->
                <div class="item p-6 text-black bg-white ">
                    <img src="./images/testimonial1.jpg" alt="Testimonial 1"
                        class="w-16 h-16 mx-auto mb-4 rounded-full" />
                    <h3 class="text-xl font-semibold text-center">John Doe</h3>
                    <div class="flex justify-center mb-2">
                        <span class="text-yellow-500">★★★★★</span>
                    </div>
                    <p class="text-center">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
                        quis lorem ut libero malesuada feugiat.
                    </p>
                </div>

                <!-- Testimonial 2 -->
                <div class="item p-6 text-black bg-white">
                    <img src="./images/testimonial2.jpg" alt="Testimonial 2"
                        class="w-16 h-16 mx-auto mb-4 rounded-full" />
                    <h3 class="text-xl font-semibold text-center">Jane Smith</h3>
                    <div class="flex justify-center mb-2">
                        <span class="text-yellow-500">★★★★☆</span>
                    </div>
                    <p class="text-center">
                        Vestibulum ac diam sit amet quam vehicula elementum sed sit amet
                        dui. Pellentesque in ipsum id orci porta dapibus.
                    </p>
                </div>

                <!-- Testimonial 3 -->
                <div class="item p-6 text-black bg-white">
                    <img src="./images/testimonial3.jpg" alt="Testimonial 3"
                        class="w-16 h-16 mx-auto mb-4 rounded-full" />
                    <h3 class="text-xl font-semibold text-center">Michael Johnson</h3>
                    <div class="flex justify-center mb-2">
                        <span class="text-yellow-500">★★★★★</span>
                    </div>
                    <p class="text-center">
                        Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.
                        Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.
                    </p>
                </div>

                <!-- Testimonial 4 -->
                <div class="item p-6 text-black bg-white">
                    <img src="./images/testimonial4.jpg" alt="Testimonial 4"
                        class="w-16 h-16 mx-auto mb-4 rounded-full" />
                    <h3 class="text-xl font-semibold text-center">Emily Davis</h3>
                    <div class="flex justify-center mb-2">
                        <span class="text-yellow-500">★★★★☆</span>
                    </div>
                    <p class="text-center">
                        Sed porttitor lectus nibh. Nulla quis lorem ut libero malesuada
                        feugiat. Vestibulum ante ipsum primis in faucibus orci luctus et.
                    </p>
                </div>

                <!-- Testimonial 5 -->
                <div class="item p-6 text-black bg-white ">
                    <img src="./images/testimonial5.jpg" alt="Testimonial 5"
                        class="w-16 h-16 mx-auto mb-4 rounded-full" />
                    <h3 class="text-xl font-semibold text-center">Sophia Brown</h3>
                    <div class="flex justify-center mb-2">
                        <span class="text-yellow-500">★★★★★</span>
                    </div>
                    <p class="text-center">
                        Proin eget tortor risus. Nulla quis lorem ut libero malesuada
                        feugiat. Curabitur non nulla sit amet nisl tempus convallis quis
                        ac lectus.
                    </p>
                </div>

                <!-- Testimonial 6 -->
                <div class="item p-6 text-black bg-white ">
                    <img src="./images/testimonial6.jpg" alt="Testimonial 6"
                        class="w-16 h-16 mx-auto mb-4 rounded-full" />
                    <h3 class="text-xl font-semibold text-center">James Wilson</h3>
                    <div class="flex justify-center mb-2">
                        <span class="text-yellow-500">★★★★☆</span>
                    </div>
                    <p class="text-center">
                        Donec sollicitudin molestie malesuada. Cras ultricies ligula sed
                        magna dictum porta. Curabitur non nulla sit amet nisl tempus
                        convallis.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Book Now Section -->
    <section class="bg-fixed bg-center bg-no-repeat bg-cover button-section"
        style="background-image: url(./images/bg.jpg)">
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

    {{-- product section  --}}
    <section class="py-20">
        <div class="max-w-6xl mx-auto px-6 lg:px-8">
            <h2 class="text-3xl text-center py-5 mb-10 font-bold text-black">Products</h2>
            <div class="grid grid-cols-1 gap-12 sm:grid-cols-2 lg:grid-cols-4">
                <!-- Product 1 -->
                <div>
                    
                    <div class="relative overflow-hidden  bg-purple-50">
                        <div class="absolute top-[10px] right-[10px] text-xs bg-white text-black py-1 border border-black px-3 ">Sale!</div>
                        <img src="./images/product1.png" alt="Blog 1" class="object-cover w-2/3 h-64 my-10  m-auto" />
                    </div>
                    <div class="relative p-6">
                        <h3 class="mt-2 text-md font-bold text-center text-black">Facial Cleanser
                        <p class="text-sm text-black text-center"><del class="mr-2 text-gray-800 font-light">$25.00</del>$19.00</p>
                        </h3>
                    </div>
                </div>
                <!-- Product 2 -->
                <div>
                    <div class="relative overflow-hidden  bg-purple-50">
                        <img src="./images/product2.png" alt="Blog 1" class="object-cover w-2/3 h-64 my-10  m-auto" />
                    </div>
                    <div class="relative p-6">
                        <h3 class="mt-2 text-md font-bold text-center text-black">Eye Cream
                        <p class="text-sm text-black text-center font-light">$54.00</p>
                        </h3>
                    </div>
                </div>
                <!-- Product 3 -->
                <div>
                    <div class="relative overflow-hidden  bg-purple-50">
                        <div class="absolute top-[10px] right-[10px] text-xs bg-white text-black py-1 border border-black px-3 ">Sale!</div>

                        <img src="./images/product3.png" alt="Blog 1" class="object-cover w-2/3 h-64 my-10  m-auto" />
                    </div>
                    <div class="relative p-6">
                        <h3 class="mt-2 text-md font-bold text-center text-black">Super Glow
                        <p class="text-sm text-black text-center"><del class="mr-2 text-gray-800 font-light">$28.00</del>$21.00</p>
                        </h3>
                    </div>
                </div>
                <!-- Product 4 -->
                <div>
                    <div class="relative overflow-hidden  bg-purple-50">
                        <img src="./images/product4.png" alt="Blog 1" class="object-cover w-2/3 h-64 my-10  m-auto" />
                    </div>
                    <div class="relative p-6">
                        <h3 class="mt-2 text-md font-bold text-center text-black">Facial Balancing Gel
                        <p class="text-sm text-black text-center font-light">$32.00</p>
                        </h3>
                    </div>
                </div>
        
            </div>
            <div class="flex justify-center">
                <button
                    class="lg:w-1/4 mt-10 md:w-2/4  px-5 py-3 sm:w-full text-black border border-black hover:bg-black hover:text-white">
                    VIEW ALL PRODUCTS
                </button>
            </div>
        </div>
    </section>

    {{-- gallery section  --}}
    <section class="bg-black py-20 px-3">
        <h2 class="text-3xl text-center py-5 mb-5 font-bold text-white">Gallery</h2>

        <div class="flex justify-between h-[600px]  ">
            <div class="basis-2/5 ml-7">
                <div class=" h-full w-full ">
                    <a href="./images/gallery1.jpg" data-fancybox="gallery" data-caption="Caption #1">
                        <img src="./images/gallery1.jpg" alt="Gallery Image 1" class="w-11/12 h-full object-cover" />
                    </a>
                </div>
            </div>
            <div class="basis-3/5 flex flex-wrap ">
                <div class="basis-1/3 h-1/2 w-full  ">
                    <a href="./images/gallery2.jpg" data-fancybox="gallery" data-caption="Caption #2">
                        <img src="./images/gallery2.jpg" alt="Gallery Image 2"
                            class="w-11/12 h-[96%] object-cover" />
                    </a>
                </div>
                <div class="basis-1/3 h-1/2 w-full ">
                    <a href="./images/gallery3.jpg" data-fancybox="gallery" data-caption="Caption #4">
                        <img src="./images/gallery3.jpg" alt="Gallery Image 4"
                            class="w-11/12 h-[96%] object-cover" />
                    </a>
                </div>
                <div class="basis-1/3 h-1/2 w-full ">
                    <a href="./images/gallery4.jpg" data-fancybox="gallery" data-caption="Caption #4">
                        <img src="./images/gallery4.jpg" alt="Gallery Image 4"
                            class="w-11/12 h-[96%] object-cover" />
                    </a>
                </div>
                <div class="basis-1/3 h-1/2 w-full ">
                    <a href="./images/gallery5.jpg" data-fancybox="gallery" data-caption="Caption #5">
                        <img src="./images/gallery5.jpg" alt="Gallery Image 5"
                            class="w-11/12 mt-3 h-[96%] object-cover" />
                    </a>
                </div>
                <div class="basis-1/3 h-1/2 w-full ">
                    <a href="./images/gallery6.jpg" data-fancybox="gallery" data-caption="Caption #6">
                        <img src="./images/gallery6.jpg" alt="Gallery Image 6"
                            class="w-11/12 mt-3 h-[96%] object-cover" />
                    </a>
                </div>
                <div class="basis-1/3 h-1/2 w-full ">
                    <a href="./images/gallery7.jpg" data-fancybox="gallery" data-caption="Caption #7">
                        <img src="./images/gallery7.jpg" alt="Gallery Image 7"
                            class="w-11/12 mt-3 h-[96%] object-cover" />
                    </a>
                </div>

            </div>
        </div>
        <div class="flex justify-center">
            <button
                class="lg:w-1/5 mt-20 md:w-1/4  px-5 py-3 sm:w-full text-white border border-white hover:bg-white hover:text-black">
                VIEW MORE
            </button>
        </div>
    </section>


    {{-- blog section --}}
    <section class="py-20 bg-pink-50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <h2 class="text-3xl text-center py-5 mb-10 font-bold text-black">Blogs</h2>
            <div class="grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-4">
                <!-- Blog 1 -->
                <div class="relative overflow-hidden transform transition-transform hover:scale-105">
                    <img src="./images/blog1.jpg" alt="Blog 1" class="object-cover w-full h-80" />
                    <div class="absolute inset-0 bg-cream bg-opacity-25 transition-opacity hover:opacity-90"></div>
                    <div class="relative p-6">
                        <p class="text-sm text-gray-500 text-center">June 15, 2024</p>
                        <h3 class="mt-2 text-md font-semibold text-center text-black">The Ultimate Guide to Hair Care
                        </h3>
                    </div>
                </div>

                <!-- Blog 2 -->
                <div class="relative overflow-hidden  transform transition-transform hover:scale-105">
                    <img src="./images/blog2.jpg" alt="Blog 2" class="object-cover w-full h-80" />
                    <div class="absolute inset-0 bg-cream bg-opacity-25 transition-opacity hover:opacity-75"></div>
                    <div class="relative p-6">
                        <p class="text-sm text-gray-500 text-center">June 20, 2024</p>
                        <h3 class="mt-2 text-md font-semibold text-center text-black">Top 10 Facial Treatments for
                            Glowing Skin</h3>
                    </div>
                </div>

                <!-- Blog 3 -->
                <div class="relative overflow-hidden  transform transition-transform hover:scale-105">
                    <img src="./images/blog3.jpg" alt="Blog 3" class="object-cover w-full h-80" />
                    <div class="absolute inset-0 bg-cream bg-opacity-25 transition-opacity hover:opacity-75"></div>
                    <div class="relative p-6">
                        <p class="text-sm text-gray-500 text-center">June 25, 2024</p>
                        <h3 class="mt-2 text-md font-semibold text-center text-black">The Benefits of Regular Massage
                            Therapy</h3>
                    </div>
                </div>

                <!-- Blog 4 -->
                <div class="relative overflow-hidden  transform transition-transform hover:scale-105">
                    <img src="./images/blog4.jpg" alt="Blog 4" class="object-cover w-full h-80" />
                    <div class="absolute inset-0 bg-cream bg-opacity-25 transition-opacity hover:opacity-75"></div>
                    <div class="relative p-6">
                        <p class="text-sm text-gray-500 text-center">June 30, 2024</p>
                        <h3 class="mt-2 text-md font-semibold text-center text-black">Nail Art Trends to Try This
                            Season</h3>
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
                <button
                    class="lg:w-1/4 mt-10 md:w-1/4  px-5 py-3 sm:w-full text-black border border-black hover:bg-black hover:text-white">
                    VIEW ALL POSTS
                </button>
            </div>
        </div>
    </section>

    {{-- contact info --}}
    <section class="py-20 ">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1  gap-12 md:grid-cols-3">
                <!-- Contact -->
                <div class="text-center ">

                    <img src="./images/phone.png" alt="Contact Icon" class="  mx-auto mb-4 w-20 h-20" />


                    <h3 class="mb-2 text-xl text-black">Contact</h3>
                    <p class="text-md text-gray-600"> (123) 456-7890</p>
                    <p class="text-md text-gray-600"> info@salon.com</p>
                </div>

                <!-- Working Hours -->
                <div class="text-center">
                    <img src="./images/hours.png" alt="Working Hours Icon" class="mx-auto mb-4 w-20 h-20" />
                    <h3 class="mb-2 text-xl  text-black"> Hours</h3>
                    <p class="text-md text-gray-600">Mon-Fri: 9:00 AM - 8:00 PM</p>
                    <p class="text-md text-gray-600">Sat-Sun: 10:00 AM - 6:00 PM</p>
                </div>

                <!-- Location -->
                <div class="text-center">
                    <img src="./images/location.png" alt="Location Icon" class="mx-auto mb-4 w-20 h-20" />
                    <h3 class="mb-2 text-xl text-black">Location</h3>
                    <p class="text-md text-gray-600">123 Salon Street</p>
                    <p class="text-md text-gray-600">City, State, ZIP</p>
                </div>
            </div>
        </div>
    </section>

    {{-- footer --}}
    <section class="bg-pink-50 py-10">
        <footer class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Logo -->
                <div class="flex items-center justify-center md:justify-start">
                    {{-- <img src="./images/logo.png" alt="Rosie looks" class="w-24 h-24" /> --}}
                    <span class="text-lg">Rosie Looks</span>
                </div>

                <!-- Menu -->
                <div class="flex flex-col items-center md:items-start">
                    <a href="#" class="text-md mb-2 hover:text-pink-500">Home</a>
                    <a href="#" class="text-md mb-2 hover:text-pink-500">About Us</a>
                    <a href="#" class="text-md mb-2 hover:text-pink-500">Services</a>
                    <a href="#" class="text-md mb-2 hover:text-pink-500">Contact</a>
                    <a href="#" class="text-md hover:text-pink-500">Blog</a>
                </div>

                <!-- Social Media Links -->
                <div class="flex flex-col items-center md:items-start">
                    <div class="flex space-x-4">
                        <a href="#" class="text-xl hover:text-pink-100">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" class="text-xl hover:text-pink-100">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-xl hover:text-pink-100">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-xl hover:text-pink-100">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="flex flex-col items-center md:items-start">
                    <h3 class="text-xl font-semibold mb-4">Contact Us</h3>
                    <p class="text-md mb-2"> (123) 456-7890</p>
                    <p class="text-md mb-2"> info@salon.com</p>
                    <p class="text-md"> 123 Study Street, City, State, ZIP</p>
                </div>
            </div>

            <div class="mt-10 text-center">
                <p class="text-sm">&copy; 2024 . All rights reserved.</p>
            </div>
        </footer>
    </section>


    <!-- Modal Structure -->
    <div id="bookingModal" class="modal hidden fixed inset-0 flex items-center justify-center z-50">
        <div class="modal-content bg-white p-6 rounded-lg shadow-lg w-1/2 relative">
            <span id="closeModal" class="absolute top-2 right-2 text-xl cursor-pointer">&times;</span>
            <h2 class="text-2xl font-bold mb-4 text-center">Book a Service</h2>
            <form id="bookingForm">
                <div class="flex justify-around">
                    <div class="mb-4 w-5/12">
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" id="name"
                            class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
                    </div>
                    <div class="mb-4 w-5/12">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email"
                            class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
                    </div>
                </div>
                <div class="flex justify-around">

                    <div class="mb-4 w-5/12">
                        <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                        <input type="text" id="phone"
                            class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                    </div>
                    <div class="mb-4 w-5/12">
                        <label for="service" class="block text-sm font-medium text-gray-700">Service</label>
                        <input type="text" id="service"
                            class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
                    </div>
                </div>
                <div class="flex justify-around">

                    <div class="mb-4 w-5/12">
                        <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
                        <input type="date" id="date"
                            class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
                    </div>
                    <div class="mb-4 w-5/12">
                        <label for="time" class="block text-sm font-medium text-gray-700">Time</label>
                        <input type="time" id="time"
                            class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
                    </div>
                </div>
                <div class="mb-4 w-11/12 mx-auto">
                    <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                    <textarea id="message" class="mt-1 block w-full  p-2 border border-gray-300 rounded-md"></textarea>
                </div>
                <div class="w-full flex justify-center">


                    <button type="submit"
                        class="w-1/3 px-4 py-2 text-white bg-pink-500 rounded-md hover:bg-pink-600">Submit</button>
                </div>

            </form>
        </div>
    </div>




</div>
<script>
    $(document).ready(function() {
        $(".owl-carousel").owlCarousel({
            loop: false,
            margin: 10,
            nav: true,
            dots: true,
            autoplay: false,
            autoWidth: true,
            items: 6, // Assuming you have 6 items
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
                1000: {
                    items: 6, // Ensure this matches your number of items
                },
            },
        });

        $('[data-fancybox="gallery"]').fancybox({
            buttons: [
                "zoom",
                "share",
                "slideShow",
                "fullScreen",
                "download",
                "thumbs",
                "close",
            ],
            loop: true,
            protect: true,
        });
    });

    document.addEventListener('DOMContentLoaded', () => {
        const modal = document.getElementById('bookingModal');
        const closeModal = document.getElementById('closeModal');
        const bookButtons = document.querySelectorAll('button');

        bookButtons.forEach(button => {
            if (button.textContent.trim() === 'Book Now') {
                button.addEventListener('click', () => {
                    modal.classList.remove('hidden');
                });
            }
        });

        closeModal.addEventListener('click', () => {
            modal.classList.add('hidden');
        });

        window.addEventListener('click', (event) => {
            if (event.target === modal) {
                modal.classList.add('hidden');
            }
        });

        document.getElementById('bookingForm').addEventListener('submit', (event) => {
            event.preventDefault();
            modal.classList.add('hidden');
            bookingForm.reset(); // Reset form fields

        });
    });
</script>
