@extends('posts.post')

@section('navbar')
    <nav>
        <div class="bg-white h-14 md:h-20 drop-shadow-md fixed w-full z-50">
            <div class="xl:md:mx-14 mx-5 flex items-center justify-between h-14 md:h-20">
                <img class="md:h-10 md:w-10 h-8 w-8" src="{{url('/image/assets/logo.png')}}" alt="logo">
                <h1 class="ml-5 text-center font-semibold " href="">MangResto</h1>

                <div class="text-center  m-auto flex items-center justify-between">
                    <ul
                        class="md:flex md:z-auto md:static absolute bg-white l left-0 w-full md:w-auto md:pl-0 pl-7 top-[-200px] duration-500">
                        <li><a class="mx-5 text-lime-600 font-semibold" href="">Home</a></li>
                        <li><a class="mx-5 text-gray-500 hover:text-lime-600 font-semibold" href="">About Us</a></li>
                        <li><a class="mx-5 text-gray-500 hover:text-lime-600 font-semibold" href="">Shop</a></li>
                        <li><a class="mx-5 text-gray-500 hover:text-lime-600 font-semibold" href="">Contact</a></li>
                        <li><a class="mx-5 text-gray-500 hover:text-lime-600 font-semibold" href="">Blog</a></li>
                    </ul>
                </div>
                <span class="text-3xl cursor-pointer mx-2 md:hidden">
                    <i class="fa-sharp fa-solid fa-bars" onclick="Menu(this)"></i>
                </span>
                <div class="">
                    <ul class="md:flex hidden md:visible">
                        <li><a class="mx-5 hover:lime-600" href=""><i class="fa-regular fa-heart"></i></a></li>
                        <li><a class="mx-5 hover:lime-600" href=""><i class="fa-regular fa-cart-shopping"></i></a></li>
                        <li><a class="mx-5 hover:lime-600" href=""><i class="fa-regular fa-magnifying-glass"></i></a>
                        </li>
                        <li class="items-center">
                            <div
                                class="md:flex drop-shadow-md mx-5 hover:gray-500 px-3 bg-white items-center cursor-pointer">
                                <img class="w-5 h-3 mr-3" src="{{url('/image/assets/uk.png')}}" alt=""><a class="text-[15px] font-bold">EN
                                    <i class="fa-sharp fa-solid fa-chevron-down"></i></a></div>

                        </li>
                        <li><a class="mx-5 hover:gray-500 bg-lime-600 px-5 py-2 text-white font-semibold"
                                href="">Registration</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    @endsection

    @section('banner')
    
    <div class="md:mx-14 md:flex items-center md:h-[750px] justify-between">
        <div class="items-center pt-20">
            <div class="flex md:justify-start justify-center">
                <span class="text-green-700 bg-gray-300 px-5 py-1 rounded-full text-[10px] md:text-[14px] ">Sall Top 20%
                    Off</span>
            </div>
            <div class="">
                <h1 class="text-center md:text-left font-bold text-[20px] md:text-[50px]"><span
                        class="text-lime-500">Will</span> Give You <span class="text-lime-500"><br> Satisfaction</span>
                    in Food</h1>
            </div>
            <div class="pt-5 md:pt-10 mx-8">
                <p class="text-gray-500 text-center md:text-left text-sm md:text-base">Lorem ipsum, dolor sit amet
                    consectetur adipisicing elit. Quos reiciendis
                    assumenda quo <br> accusamus atque aut ad, ipsam ullam delectus ipsum maiores rerum.</p>
            </div>
            <div class="pt-20 flex md:justify-start justify-between items-center text-sm mx-8 md:mx-0">
                <a class="bg-lime-600 px-5 py-2 md:px-10 md:py-4 text-white font-semibold" href="">Shop Now</a>
                <a class="md:mx-10 mx-3 font-semibold text-lime-600" href="">Explore Our Blog <i
                        class="fa fa-arrow-right mr-5" aria-hidden="true"></i></a>
            </div>

        </div>
        <div class="md:flex justify-between hidden md:visible h-5 md:h-auto">
            <img class="" src="{{url('/image/assets/piring.png')}}" alt="">
        </div>
    </div>
    @endsection

    @section('partner')
    <div class="md:mx-14 md:pb-20 pb-10">
        <div class="text-center py-10">
            <h1 class="text-gray-500 text-[20px]">Company Partner</h1>
        </div>
        <div class="grid md:grid-cols-6 grid-cols-3 gap-5 mx-8">
            <div>
                <img class="w-[120px]" src="{{url('/image/assets/Google logo-1.png')}}" alt="">
            </div>
            <div>
                <img class="w-[120px]" src="{{url('/image/assets/Google logo-2.png')}}" alt="">
            </div>
            <div>
                <img class="w-[120px]" src="{{url('/image/assets/Google logo-3.png')}}" alt="">
            </div>
            <div>
                <img class="w-[120px]" src="{{url('/image/assets/Google logo-4.png')}}" alt="">
            </div>
            <div>
                <img class="w-[120px]" src="{{url('/image/assets/Google logo-5.png')}}" alt="">
            </div>
            <div>
                <img class="w-[120px]" src="{{url('/image/assets/Google logo-3.png')}}" alt="">
            </div>
        </div>
    </div>
    @endsection

    @section('category')
    <div class="md:mx-14 mx-8">
        <div class="grid md:grid-cols-2  gap-3 md:gap-10 text-center md:text-left">
            <div class="bg-lime-200 md:flex  items-center py-[50px] px-[10px] md:px-[30px]">
                <img class="md:h-[170px] m-auto h-[100px] md:pr-5 justify-center" src="{{url('/image/assets/pngwing 3.png')}}" alt="">
                <div>
                    <h4 class="text-center md:text-left font-bold md:text-[25px] py-2">Fast Food</h4>
                    <p class="py-2 pb-10 md:text-base text-sm text-gray-600">Lorem ipsum dolor, sit amet consectetur
                        adipisicing elit.
                        Accusamus modi asperiores est, odit facere alias sit pariatur.</p>
                    <div class="flex justify-center md:justify-start">
                        <a class="text-center justify-center bg-lime-600 px-4 py-2 md:px-10 md:py-4 text-white font-semibold"
                            href="">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="bg-red-100 md:flex items-center  py-[50px] px-[10px] md:px-[30px]">
                <img class="md:h-[170px] h-[100px] md:pr-5 m-auto" src="{{url('/image/assets/pngwing 2.png')}}" alt="">
                <div>
                    <h4 class="text-center md:text-left font-bold md:text-[25px] py-2">Organic Food</h4>
                    <p class="py-2 pb-10 md:text-base text-sm text-gray-600">Lorem ipsum dolor, sit amet consectetur
                        adipisicing elit.
                        Accusamus modi asperiores est, odit facere alias sit pariatur.</p>
                    <div class="flex justify-center md:justify-start">
                        <a class="text-center justify-center bg-lime-600 px-4 py-2 md:px-10 md:py-4 text-white font-semibold"
                            href="">Shop Now</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @endsection

    @section('about')
    <div class="md:mx-14 mx-8 pt-14 text-center md:text-left">
        <div class="md:flex justify-between items-center">
            <div>
                <h5 class="text-orange-500 md:py-7">About Us</h5>
                <h1 class="font-bold text-2xl md:text-[40px]">MangResto</h1>
                <p class="pt-7 pb-14 md:text-base text-sm text-gray-600">We are a fast food company and we make everyone
                    enjoy any food we
                    serve them <br> because we serve
                    the best for them all.</p>
                <a class="bg-lime-600 md:px-10 md:py-4 px-5 py-2 text-white font-semibold" href="">Shop Now</a>
            </div>
            <div class="md:flex items-center md:visible hidden ">
                <img class="w-[300px]" src="{{url('/image/assets/image 8.png')}}" alt="">
            </div>
        </div>
    </div>
    @endsection

    @section('title2')
    <div class="md:mx-14 mx-8 pt-14">
        <div class="md:flex justify-between items-center">
            <div>
                <h1 class="font-bold text-2xl md:text-[30px] ">Food MangResto</h1>
                <h6 class="text-lime-600 pb-5 md:pb-0">Best Food</h6>
            </div>
            <div class="md:flex">
                <p class="text-gray-600 text-sm md:text-base">This is the most popular food that is often bought <br> by
                    some people, cheap
                    and very healthy for you</p>
            </div>
        </div>
        <div class="md:flex md:text-center md:justify-center py-14">
            <ul class="md:flex flex justify-between text-center">
                <li><a class="md:mx-5 mx-0 text-lime-600 border-b-2 border-lime-600 font-semibold" href="">All
                        Product</a></li>
                <li><a class="md:mx-5 mx-0 text-gray-500 hover:text-lime-600 hover:border-b-2 border-lime-600 font-semibold"
                        href="">Fast Food</a></li>
                <li><a class="md:mx-5 mx-0 text-gray-500 hover:text-lime-600 hover:border-b-2 border-lime-600 font-semibold"
                        href="">Healty Food</a></li>
            </ul>
        </div>
    @endsection

    @section('product')
    <div>
            <div class="grid md:grid-cols-4 grid-cols-2 grid-rows-2 gap-5 md:gap-10">
                <div>
                <div>
                    <img src="{{url('/image/assets/Frame 2162.png')}}" alt="">
                    <div class="flex justify-between items-center">
                        <h6 class="font-bold  pt-4 text-xs md:text-[20px]">Cucumber</h6>
                        <span class="text-gray-500 text-xs md:text-base pt-4">2.1</span>
                    </div>

                    <p class="py-4 text-[12px]">Lörem ipsum nyn fahasm. <br> Jyr epiception tavis.</p>
                    <div class="flex justify-between items-center">
                        <a class="bg-gray-300 text-sm md:text-base px-5 py-1 text-lime-600" href="">+ add</a>
                        <span class="text-sm font-bold md:texbas">$25</span>
                    </div>
                </div>
                </div>
                <div>
                    <img src="{{url('/image/assets/frame 2162-1.png')}}" alt="">
                    <div class="flex justify-between items-center">
                        <h6 class="font-bold  pt-4 text-xs md:text-[20px]">Swede</h6>
                        <span class="text-gray-500 text-xs md:text-base pt-4">2.1</span>
                    </div>

                    <p class="py-4 text-[12px]">Lörem ipsum nyn fahasm. <br> Jyr epiception tavis.</p>
                    <div class="flex justify-between items-center">
                        <a class="bg-gray-300 text-sm md:text-base px-5 py-1 text-lime-600" href="">+ add</a>
                        <span class="text-sm font-bold md:texbas">$25</span>
                    </div>
                </div>
                <div>
                    <img src="{{url('/image/assets/frame 2162-2.png')}}" alt="">
                    <div class="flex justify-between items-center">
                        <h6 class="font-bold  pt-4 text-xs md:text-[20px]">Chinese Cinnamon</h6>
                        <span class="text-gray-500 text-xs md:text-base pt-4">2.1</span>
                    </div>

                    <p class="py-4 text-[12px]">Lörem ipsum nyn fahasm. <br> Jyr epiception tavis.</p>
                    <div class="flex justify-between items-center">
                        <a class="bg-gray-300 text-sm md:text-base px-5 py-1 text-lime-600" href="">+ add</a>
                        <span class="text-sm font-bold md:texbas">$35</span>
                    </div>
                </div>
                <div>
                    <img src="{{url('/image/assets/Frame 2162-3.png')}}" alt="">
                    <div class="flex justify-between items-center">
                        <h6 class="font-bold  pt-4 text-xs md:text-[20px]">Pepper (C. annuum)</h6>
                        <span class="text-gray-500 text-xs md:text-base pt-4">2.1</span>
                    </div>

                    <p class="py-4 text-[12px]">Lörem ipsum nyn fahasm. <br> Jyr epiception tavis.</p>
                    <div class="flex justify-between items-center">
                        <a class="bg-gray-300 text-sm md:text-base px-5 py-1 text-lime-600" href="">+ add</a>
                        <span class="text-sm font-bold md:texbas">$35</span>
                    </div>
                </div>
                <div>
                    <img src="{{url('/image/assets/Frame 2162.png')}}" alt="">
                    <div class="flex justify-between items-center">
                        <h6 class="font-bold  pt-4 text-xs md:text-[20px]">Cucumber</h6>
                        <span class="text-gray-500 text-xs md:text-base pt-4">2.1</span>
                    </div>

                    <p class="py-4 text-[12px]">Lörem ipsum nyn fahasm. <br> Jyr epiception tavis.</p>
                    <div class="flex justify-between items-center">
                        <a class="bg-gray-300 text-sm md:text-base px-5 py-1 text-lime-600" href="">+ add</a>
                        <span class="text-sm font-bold md:texbas">$25</span>
                    </div>

                </div>
                <div>
                    <img src="{{url('/image/assets/frame 2162-1.png')}}" alt="">
                    <div class="flex justify-between items-center">
                        <h6 class="font-bold  pt-4 text-xs md:text-[20px]">Swede</h6>
                        <span class="text-gray-500 text-xs md:text-base pt-4">2.1</span>
                    </div>

                    <p class="py-4 text-[12px]">Lörem ipsum nyn fahasm. <br> Jyr epiception tavis.</p>
                    <div class="flex justify-between items-center">
                        <a class="bg-gray-300 text-sm md:text-base px-5 py-1 text-lime-600" href="">+ add</a>
                        <span class="text-sm font-bold md:texbas">$25</span>
                    </div>

                </div>
                <div>
                    <img src="{{url('/image/assets/frame 2162-2.png')}}" alt="">
                    <div class="flex justify-between items-center">
                        <h6 class="font-bold  pt-4 text-xs md:text-[20px]">Chinese Cinnamon</h6>
                        <span class="text-gray-500 text-xs md:text-base pt-4">2.1</span>
                    </div>

                    <p class="py-4 text-[12px]">Lörem ipsum nyn fahasm. <br> Jyr epiception tavis.</p>
                    <div class="flex justify-between items-center">
                        <a class="bg-gray-300 text-sm md:text-base px-5 py-1 text-lime-600" href="">+ add</a>
                        <span class="text-sm font-bold md:texbas">$35</span>
                    </div>

                </div>
                <div>
                    <img src="{{url('/image/assets/frame 2162-3.png')}}" alt="">
                    <div class="flex justify-between items-center">
                        <h6 class="font-bold  pt-4 text-xs md:text-[20px]">Pepper (C. annuum)</h6>
                        <span class="text-gray-500 text-xs md:text-base pt-4">2.1</span>
                    </div>

                    <p class="py-4 text-[12px]">Lörem ipsum nyn fahasm. <br> Jyr epiception tavis.</p>
                    <div class="flex justify-between items-center">
                        <a class="bg-gray-300 text-sm md:text-base px-5 py-1 text-lime-600" href="">+ add</a>
                        <span class="text-sm font-bold md:texbas">$35</span>
                    </div>
                </div>
            </div>
            <div class="flex justify-center pt-9">
                <a class="bg-lime-600 px-5 py-2 md:px-10 md:py-3 text-white font-semibold" href="">View More</a>
            </div>
        </div>
    </div>
    @endsection

    @section('cta')
    <div class="md:mx-14 my-20 mx-3">
        <div class="bg-red-200 md:flex items-center md:text-left text-center justify-between h-[340px] md:h-[398px]">
            <div class="md:mx-14">
                <h6 class="text-lime-600 pt-5 md:pt-0">Healty Food</h6>
                <h1 class="pb-10 md:text-[40px] font-bold text-2xl ">Healthy and You Can <br>Enjoy in The Morning</h1>
                <p class="mb-10 text-gray-600 text-sm md:text-base md:mx-0 mx-10">Lorem ipsum dolor sit amet
                    consectetur, adipisicing elit. <br> Ullam quae
                    illum accusantium molestias
                    fuga? Tempore.</p>
                <a class=" bg-lime-600 px-10 py-3 text-white font-semibold" href="">Shop Now</a>
            </div>
            <div class="md:flex mt-28 relative hidden md:visible">
                <img class="" src="{{url('/image/assets/pngwing 4.png')}}" alt="">
            </div>
        </div>
    </div>
    @endsection

    @section('footer')
    <div class="bg-lime-900">
        <div class="md:mx-14 mx-8 pt-10 md:flex justify-between text-[14px] text-center md:text-left">
            <div class="items-center">
                <div class="flex items-center justify-center md:justify-start pb-4 md:pb-0">
                    <img src="{{url('/image/assets/logo.png')}}" alt="">
                    <h1 class="font-bold ml-5 text-white">MangResto</h1>
                </div>
                <div class="md:mt-10">
                    <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing <br> elit. In eget gravida
                        leo, nec iaculis diam. </p>
                    <ul class="flex mt-5 md:mt-10 justify-center md:justify-start">
                        <li class="mx-5"><a href=""><img src="images/facebok.png" alt=""></a></li>
                        <li class="mx-5"><a href=""><img src="images/Vector.png" alt=""></a></li>
                        <li class="mx-5"><a href=""><img src="images/linkedin logo.png" alt=""></a></li>
                        <li class="mx-5"><a href=""><img src="images/instagram logo.png" alt=""></a></li>
                    </ul>
                </div>

            </div>
            <div class="grid grid-cols-3 md:flex text-left pt-5 md:pt-0 md:gap-0 gap-5 text-xs md:text-base">
                <div class="md:mx-14">
                    <h6 class="text-white font-bold md:mb-5">Navigation</h6>
                    <ul class="">
                        <li class=" md:mt-3"><a class="text-white" href="">Home</a></li>
                        <li class=" md:mt-3"><a class="text-white" href="">About Us</a></li>
                        <li class=" md:mt-3"><a class="text-white" href="">Shop</a></li>
                        <li class=" md:mt-3"><a class="text-white" href="">Contact</a></li>
                        <li class=" md:mt-3"><a class="text-white" href="">Blog</a></li>
                    </ul>
                </div>
                <div class="md:mx-14">
                    <h6 class="text-white font-bold md:mb-5">Our Product</h6>
                    <ul>
                        <li class=" md:mt-3"><a class="text-white" href="">Healthy Food</a></li>
                        <li class=" md:mt-3"><a class="text-white" href="">Fast Food</a></li>
                    </ul>
                </div>
                <div class="md:mx-14">
                    <h6 class="text-white font-bold md:mb-5">Form Member</h6>
                    <ul>
                        <li class=" md:mt-3"><a class="text-white" href="">Sign in</a></li>
                        <li class=" md:mt-3"><a class="text-white" href="">Support</a></li>
                    </ul>
                </div>
                <div class="md:mx-14 md:text-left text-center col-span-3">
                    <h6 class="text-white font-bold md:mb-5">Address</h6>
                    <ul>
                        <li class=" md:mt-3"><a class="text-white" href="">4517 Washington Ave. Manchester,<br> Kentucky
                                39495</a></li>
                        <li class=" md:mt-3"><a class="text-white" href="">hallo@mangresto123@gmail.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div
            class="mx-8 text-xs text-white flex justify-center md:justify-between md:mx-14 pt-20 font-semibold md:text-[14px] pb-3 md:pb-10">
            <span class="">MangCoding. All Rights Reserved</span>
            <ul class="md:flex hidden md:visible">
                <li class="px-10"><a href="">(021) 687-9102</a></li>
                <li class="px-10"><a href="">Privacy Policy</a></li>
                <li class="px-10"><a href="">Merchant Agreement</a></li>
            </ul>
        </div>
    </div>
    @endsection