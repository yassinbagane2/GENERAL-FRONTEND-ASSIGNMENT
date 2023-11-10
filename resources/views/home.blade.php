<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Product Sales</title>
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
        />
        <link rel="stylesheet" href="../css/app.css" />
        <script
            src="https://kit.fontawesome.com/1c65967ddf.js"
            crossorigin="anonymous"
        ></script>
        @vite(['resources/css/app.css','resources/js/app.js'])
    </head>
    <body class="font-Inter bg-neutral-950">
        <nav class="w-full border-gray-200 bg-neutral-950">
            <div
                class="max-w-screen-2xl flex flex-wrap items-center justify-between mx-auto p-4"
            >
                <a href="https://flowbite.com/">
                    <span
                        id="logo"
                        class="self-center tracking-wider text-2xl font-semibold whitespace-nowrap text-white"
                        >LOGO</span
                    >
                </a>
                <div class="flex items-center md:order-2">
                    <button
                        type="button"
                        data-dropdown-toggle="language-dropdown-menu"
                        class="inline-flex items-center font-medium justify-center gap-x-2 px-4 py-2 text-sm text-white rounded-lg duration-100 transition-colors cursor-pointer bg-neutral-950 hover:bg-neutral-800 hover:text-white"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="lucide lucide-rss"
                        >
                            <path d="M4 11a9 9 0 0 1 9 9" />
                            <path d="M4 4a16 16 0 0 1 16 16" />
                            <circle cx="5" cy="19" r="1" />
                        </svg>
                        Follow Us
                    </button>
                    <!-- Dropdown -->
                    <div
                        class="z-50 hidden my-4 text-base list-none divide-y divide-gray-100 rounded-lg shadow bg-neutral-950"
                        id="language-dropdown-menu"
                    >
                        <ul class="p-2 ml-4 font-medium" role="none">
                            <li>
                                <a
                                    href="#"
                                    class="block px-4 py-2 text-sm text-gray-300 hover:text-white"
                                    role="menuitem"
                                >
                                    <div
                                        class="inline-flex gap-x-2 items-center"
                                    >
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="17"
                                            height="17"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-facebook"
                                        >
                                            <path
                                                d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"
                                            />
                                        </svg>
                                        Facebook
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="block px-4 py-2 text-sm text-gray-300 hover:text-white"
                                    role="menuitem"
                                >
                                    <div
                                        class="inline-flex gap-x-2 items-center"
                                    >
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="17"
                                            height="17"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-linkedin"
                                        >
                                            <path
                                                d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"
                                            />
                                            <rect
                                                width="4"
                                                height="12"
                                                x="2"
                                                y="9"
                                            />
                                            <circle cx="4" cy="4" r="2" />
                                        </svg>
                                        LinkedIn
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <button
                        data-collapse-toggle="navbar-language"
                        type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm rounded-lg md:hidden focus:outline-none focus:ring-2 text-gray-400 hover:scale-105 duration-200 focus:ring-gray-600"
                        aria-controls="navbar-language"
                        aria-expanded="false"
                    >
                        <span class="sr-only">Open main menu</span>
                        <svg
                            class="w-5 h-5"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 17 14"
                        >
                            <path
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15"
                            />
                        </svg>
                    </button>
                </div>
                <div
                    class="items-center justify-between hidden w-full md:flex md:w-96 md:order-1"
                    id="navbar-language"
                >
                    <ul
                        class="flex flex-col tracking-widest p-4 md:p-0 mt-4 border rounded-lg md:flex-row md:space-x-14 md:mt-0 md:border-0 border-gray-700"
                    >
                        <li>
                            <a
                                href="#home"
                                class="block py-2 pl-3 pr-4 text-gray-300 rounded md:bg-transparent md:p-0"
                                aria-current="page"
                                >Home</a
                            >
                        </li>
                        <li>
                            <a
                                href="#features"
                                class="block py-2 pl-3 pr-4 text-gray-300 rounded md:bg-transparent md:p-0"
                                >Features</a
                            >
                        </li>
                        <li>
                            <a
                                href="#contact"
                                class="block py-2 pl-3 pr-4 text-gray-300 rounded md:bg-transparent md:p-0"
                                >Contact</a
                            >
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div
            id="home"
            class="max-w-screen-2xl mx-auto flex lg:pt-20 flex-col lg:flex-row justify-between text-white min-h-[80vh]"
        >
            <div class="relative flex-1 px-3 -z-10">
                <div class="space-y-2 lg:space-y-7">
                    <h1
                        id="heading1"
                        class="text-4xl font-extrabold py-5 opacity-0 leading-none tracking-tight md:text-5xl lg:text-6xl"
                    >
                        The power to be your <br />
                        best
                    </h1>
                    <div
                        id="line"
                        class="w-16 h-[5px] opacity-0 rounded-md bg-gradient-to-r from-pink-700 to-violet-600"
                    ></div>
                    <div id="paragraph" class="text-gray-300 opacity-0">
                        Lorem ipsum dolor, sit amet consectetur adipisicing
                        elit. Similique laboriosam saepe magni neque, eaque
                        necessitatibus sed obcaecati enim perferendis nesciunt.
                    </div>
                    <div
                        id="sales_price"
                        class="flex items-center gap-x-6 opacity-0"
                    >
                        <div class="flex flex-col">
                            <div class="text-xl font-medium">$220.20</div>
                            <div class="text-xs leading-3 font-thin">USD</div>
                        </div>
                        <div class="line-through text-sm">$399</div>
                        <div class="text-xs">You'll save (44.71%)</div>
                    </div>
                    <a
                        href="#products"
                        id="buy_btn"
                        class="opacity-0 py-2 bg-zinc-100 rounded-full text-black px-6 mt-6 inline-block text-center z-30 cursor-pointer"
                    >
                        Buy Now
                    </a>
                    <div></div>
                </div>
                <img
                    id="left-rev-art"
                    src="/images/bg-rev-art.webp"
                    class="absolute opacity-0 md:bottom-[-16%] -z-20"
                    alt="bg"
                />
            </div>
            <div class="flex justify-center flex-1">
                <div
                    id="default-carousel"
                    class="relative w-3/4 mx-auto opacity-0"
                    data-carousel="slide"
                >
                    <!-- Carousel wrapper -->
                    <div
                        class="relative ease-in overflow-hidden rounded-lg py-4 h-80 md:h-96"
                    >
                        <!-- Item 1 -->
                        <div
                            class="w-full duration-300 ease-in-out"
                            data-carousel-item="active"
                        >
                            <img
                                src="/images/apple1.png"
                                class="absolute w-64 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="apple 1"
                            />
                        </div>
                        <!-- Item 2 -->
                        <div
                            class="w-full duration-300 ease-in-out"
                            data-carousel-item
                        >
                            <img
                                src="/images/apple2.png"
                                class="absolute w-64 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="apple 2"
                            />
                        </div>
                        <!-- Item 3 -->
                        <div
                            class="w-full duration-300 ease-in-out"
                            data-carousel-item
                        >
                            <img
                                src="/images/apple3.png"
                                class="absolute w-64 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="apple 3"
                            />
                        </div>
                    </div>
                    <!-- Slider indicators -->
                    <div
                        class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2"
                    >
                        <button
                            type="button"
                            class="w-3 h-3 rounded-full"
                            aria-current="true"
                            aria-label="Slide 1"
                            data-carousel-slide-to="0"
                        ></button>
                        <button
                            type="button"
                            class="w-3 h-3 rounded-full"
                            aria-current="false"
                            aria-label="Slide 2"
                            data-carousel-slide-to="1"
                        ></button>
                        <button
                            type="button"
                            class="w-3 h-3 rounded-full"
                            aria-current="false"
                            aria-label="Slide 3"
                            data-carousel-slide-to="2"
                        ></button>
                    </div>
                    <!-- Slider controls -->
                    <button
                        type="button"
                        class="hidden md:flex absolute top-0 left-0 z-30 items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev
                    >
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none"
                        >
                            <svg
                                class="w-4 h-4 text-white dark:text-gray-800"
                                aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 6 10"
                            >
                                <path
                                    stroke="currentColor"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M5 1 1 5l4 4"
                                />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button
                        type="button"
                        class="hidden md:flex absolute top-0 right-0 z-30 items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-next
                    >
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none"
                        >
                            <svg
                                class="w-4 h-4 text-white dark:text-gray-800"
                                aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 6 10"
                            >
                                <path
                                    stroke="currentColor"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="m1 9 4-4-4-4"
                                />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <div id="features" class="text-white bg-neutral-800">
            <div
                class="max-w-screen-2xl mx-auto flex flex-col items-center lg:flex-row pt-5 lg:pt-20"
            >
                <div class="lg:w-2/3 p-4">
                    <h1 class="text-3xl tracking-wide font-semibold">
                        Always stunning in wrist
                    </h1>
                    <p class="lg:w-2/3 my-3 text-zinc-400">
                        Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit. Id similique praesentium minima in culpa corporis
                        eos voluptate itaque hic aspernatur, earum suscipit
                        officia.
                    </p>
                    <div class="flex gap-10">
                        <div class="py-6">
                            <div>
                                <div
                                    class="w-12 h-12 rounded-full bg-blue-700 flex items-center justify-center"
                                >
                                    <i
                                        class="fa-solid fa-sim-card fa-flip-horizontal"
                                    ></i>
                                </div>
                            </div>
                            <h3 class="font-bold my-3">LTE Enabled</h3>
                            <div class="w-full lg:w-72 text-zinc-400">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit.
                            </div>
                        </div>
                        <div class="py-6">
                            <div>
                                <div
                                    class="w-12 h-12 rounded-full bg-blue-700 flex items-center justify-center"
                                >
                                    <i class="fa-regular fa-comments"></i>
                                </div>
                            </div>
                            <h3 class="font-bold my-3">Messages</h3>
                            <div class="w-full lg:w-72 text-zinc-400">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit.
                            </div>
                        </div>
                    </div>
                    <div class="flex gap-10">
                        <div class="py-6">
                            <div>
                                <div
                                    class="w-12 h-12 rounded-full bg-blue-700 flex items-center justify-center"
                                >
                                    <i class="fa-solid fa-wifi"></i>
                                </div>
                            </div>
                            <h3 class="font-bold my-3">Wi-Fi Access</h3>
                            <div class="w-full lg:w-72 text-zinc-400">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit.
                            </div>
                        </div>
                        <div class="py-6">
                            <div>
                                <div
                                    class="w-12 h-12 rounded-full bg-blue-700 flex items-center justify-center"
                                >
                                    <i class="fa-solid fa-bell"></i>
                                </div>
                            </div>
                            <h3 class="font-bold my-3">Notifications</h3>
                            <div class="w-full lg:w-72 text-zinc-400">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit.
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="flex items-center justify-center animiate-bounce pb-10 lg:pb-0 w-1/3"
                >
                    <img src="/images/2watches.png" alt="2 watches" />
                </div>
            </div>
        </div>
        <div class="bg-neutral-50">
            <div
                class="max-w-screen-2xl px-2 flex flex-col items-center mx-auto pt-10"
            >
                <h1
                    id="heading2"
                    class="font-Inter font-extrabold text-center tracking-tight text-gray-800 text-2xl my-6 opacity-0 translate-y-6"
                >
                    Compatible with your favourite mobile apps.
                </h1>
                <p
                    id="paragraph2"
                    class="text-slate-800 text-center md:w-2/3 opacity-0 translate-y-6"
                >
                    Lorem ipsum dolor, Lorem ipsum dolor sit,Lorem ipsum dolor
                    sit amet consectetur adipisicing elit. amet consectetur
                    adipisicing elit. Fuga, quo? sit amet consectetur
                    adipisicing elit. Voluptate odit officiis necessitatibus
                    nostrum explicabo minima sequi nobis aspernatur, ab
                    quibusdam!
                </p>
                <img src="/images/green-watch.webp" class="mt-24" alt="watch" />
            </div>
        </div>
        <div class="lg:py-10 bg-neutral-900">
            <div class="max-w-screen-2xl mx-auto text-white p-10">
                <h2
                    class="text-xl my-4 font-extrabold text-center leading-none tracking-tight md:text-2xl lg:text-5xl"
                >
                    Testemonials
                </h2>
                <swiper-container
                    init="false"
                    class="swiper-container relative my-20 max-w-[590px] lg:max-w-[1120px] pb-24 mx-4 sm:mx-auto"
                    autoPlay="true"
                    id="swiper"
                    loop="true"
                    navigation="true"
                    pagination="true"
                    effect="coverflow"
                    grab-cursor="true"
                    centered-slides="false"
                    slides-per-view="3"
                    coverflow-effect-rotate="0"
                    coverflow-effect-stretch="-100"
                    coverflow-effect-depth="400"
                    coverflow-effect-modifier="1"
                    coverflow-effect-slide-shadows="false"
                    mousewheel-force-to-axis="false"
                ></swiper-container>
            </div>
            <div
                id="products"
                class="pt-3 pb-10 text-white max-w-2xl mx-auto flex items-center flex-col gap-y-5"
            >
                <h1 class="text-3xl font-extrabold tracking-tighter">
                    Top selled products
                </h1>
                <div class="text-zinc-300 text-center lg:text-start mx-2">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Quasi labore in quos?
                </div>
                <div class="flex flex-col lg:flex-row gap-8 lg:mt-24">
                    <div
                        class="w-[320px] flex flex-col items-center h-[420px] rounded-lg bg-neutral-950/50 p-5"
                    >
                        <img
                            src="/images/apple-standard.png"
                            class="w-44 h-44"
                            alt="standard watch"
                        />
                        <h1 class="text-xl font-semibold my-2">
                            Standard edition
                        </h1>
                        <ul class="flex flex-col items-center gap-3 text-sm">
                            <li>All the essentials</li>
                            <li>Light on price</li>
                            <li class="mt-3">From 279$</li>
                            <button
                                class="rounded-full bg-blue-600 px-3 capitalize"
                            >
                                buy
                            </button>
                            <a
                                href="#"
                                class="text-blue-500 mt-3 hover:underline text-xs"
                                >Learn more</a
                            >
                        </ul>
                    </div>
                    <div
                        class="w-[320px] flex flex-col items-center h-[420px] lg:-translate-y-10 rounded-lg bg-neutral-950/50 p-5"
                    >
                        <img
                            src="/images/apple-ultra.png"
                            class="w-44 h-44"
                            alt="standard watch"
                        />
                        <h1 class="text-xl font-semibold my-2">
                            Premium edition
                        </h1>
                        <ul class="flex flex-col items-center gap-3 text-sm">
                            <li>The most rugged</li>
                            <li>and capable.</li>
                            <li class="mt-3">From 799$</li>
                            <button
                                class="rounded-full bg-blue-600 px-3 capitalize"
                            >
                                buy
                            </button>
                            <a
                                href="#"
                                class="text-blue-500 mt-3 hover:underline text-xs"
                                >Learn more</a
                            >
                        </ul>
                    </div>
                    <div
                        class="w-[320px] flex flex-col items-center h-[420px] rounded-lg bg-neutral-950/50 p-5"
                    >
                        <img
                            src="/images/limited-apple.png"
                            class="w-44 h-44"
                            alt="standard watch"
                        />
                        <h1 class="text-xl font-semibold my-2">
                            Premium edition
                        </h1>
                        <ul class="flex flex-col items-center gap-3 text-sm">
                            <li>Powerful sensors</li>
                            <li>advanced health features</li>
                            <li class="mt-3">From 399$</li>
                            <button
                                class="rounded-full bg-blue-600 px-3 capitalize"
                            >
                                buy
                            </button>
                            <a
                                href="#"
                                class="text-blue-500 mt-3 hover:underline text-xs"
                                >Learn more</a
                            >
                        </ul>
                    </div>
                </div>
            </div>
            <div
                class="text-white max-w-screen-2xl py-12 container flex flex-col lg:flex-row"
            >
                <div
                    class="lg:flex-1 flex items-center lg:items-start flex-col gap-3 pl-4"
                >
                    <div
                        class="text-sm text-blue-600 font-thin uppercase tracking-tight"
                    >
                        Need Help
                    </div>
                    <h1 class="font-semibold tracking-wide text-2xl">
                        Feel free to contact us
                    </h1>
                    <div
                        class="w-2/3 pb-8 text-center lg:text-start text-zinc-400"
                    >
                        We are always avalible for your service with great
                        support. Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit.
                    </div>
                    <div class="space-y-7 hidden lg:block">
                        <div class="flex gap-3 items-center">
                            <div
                                class="bg-blue-700 w-10 h-10 rounded-full flex items-center justify-center"
                            >
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div>260, Martyes Street, Monastir, Tunisia</div>
                        </div>
                        <div class="flex gap-3 items-center">
                            <div
                                class="bg-blue-700 w-10 h-10 rounded-full flex items-center justify-center"
                            >
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div>example@mail.com</div>
                        </div>
                        <div class="flex gap-3 items-center">
                            <div
                                class="bg-blue-700 w-10 h-10 rounded-full flex items-center justify-center"
                            >
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div>+216 11 111 111</div>
                        </div>
                    </div>
                </div>
                <div class="flex-1 flex justify-center">
                    <form class="mx-2 space-y-3">
                        <div
                            id="validation-errors"
                            class="list-disc text-red-600 p-2 w-full text-sm"
                        ></div>
                        <input
                            type="text"
                            placeholder="Enter Name"
                            name="name"
                            id="name"
                            class="w-full bg-neutral-950 py-3 px-4 rounded-lg placeholder:text-sm"
                            required
                        />
                        <input
                            type="email"
                            placeholder="Enter your email"
                            name="email"
                            id="email"
                            class="w-full bg-neutral-950 py-3 px-4 rounded-lg placeholder:text-sm"
                            required
                        />
                        <input
                            type="tel"
                            id="phone"
                            class="bg-neutral-950 rounded-lg block w-full py-3 px-4 placeholder:text-sm"
                            placeholder="Phone number"
                            name="phone"
                            required
                        />
                        <textarea
                            id="message"
                            rows="4"
                            name="message"
                            class="block w-full rounded-lg py-3 text-gray-50 bg-neutral-950 placeholder:text-sm resize-none"
                            placeholder="Write your thoughts here..."
                        ></textarea>
                        <div class="flex items-center">
                            <input
                                id="termeni"
                                type="checkbox"
                                name="termeni"
                                value="checked"
                                class="w-4 h-4 text-blue-600 bg-gray-50 border-gray-300 rounded focus:ring-blue-500"
                            />
                            <label
                                for="terms-checkbox"
                                class="ml-2 text-sm text-zinc-400 font-medium"
                                >I agree with the
                                <a
                                    href="#"
                                    class="text-blue-600 hover:underline"
                                    >terms and conditions</a
                                >.</label
                            >
                        </div>
                        <button
                            type="button"
                            class="mt-8 px-6 py-3 bg-blue-600 hover:bg-blue-700 transition-colors duration-200 rounded-lg"
                            onclick="onSubmit()"
                        >
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <footer class="bg-neutral-950 text-white pt-12">
            <div
                class="max-w-screen-2xl mx-auto gap-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 container"
            >
                <div class="lg:col-span-2">
                    <div
                        id="logo"
                        class="self-center tracking-wider text-2xl font-semibold whitespace-nowrap text-white"
                    >
                        LOGO
                    </div>
                    <div class="py-3 text-sm text-zinc-400">
                        Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit. Lorem ipsum dolor sit amet. cupiditate! Pariatu
                    </div>
                    <h3 class="font-bold text-xl mt-6">
                        Subscribe to our news letter
                    </h3>
                    <form class="relative mt-3 flex gap-x-2">
                        <div
                            class="py-1 px-4 rounded-md flex items-center border border-gray-500"
                        >
                            <i class="fa-solid fa-envelope"></i>
                            <input
                                type="email"
                                name="new-letter-email"
                                class="bg-transparent border-none outline-none focus:ring-0"
                                placeholder="johndoe@example.com"
                            />
                        </div>
                        <button
                            class="px-5 text-sm rounded-md bg-blue-600 hover:bg-blue-700 transition-colors duration-200"
                        >
                            Subscribe
                        </button>
                    </form>
                </div>
                <ul class="space-y-4">
                    <li>
                        <a href="#">Contact us</a>
                    </li>
                    <li>
                        <a href="#">Customer service</a>
                    </li>
                    <li>
                        <a href="#">Terms & conditions</a>
                    </li>
                    <li>
                        <a href="#">FAQs</a>
                    </li>
                </ul>
                <ul class="space-y-4">
                    <li>
                        <a href="#">Contact us</a>
                    </li>
                    <li>
                        <a href="#">Customer service</a>
                    </li>
                    <li>
                        <a href="#">Terms & conditions</a>
                    </li>
                    <li>
                        <a href="#">FAQs</a>
                    </li>
                </ul>
            </div>
            <div
                class="py-4 mt-10 border-t border-neutral-700 text-center text-sm"
            >
                Copyrights reserved &copy; 2023
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
        <script src="https://unpkg.com/split-type"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
        <script src="../js/app.js"></script>
        <script>
            // swiper element
            const swiperElement = document.querySelector('swiper-container');

            // swiper parameters
            const swiperParams = {
                slidesPerView: 1,
                breakpoints: {
                    0: {
                        slidesPerView: 1,
                    },
                    1024: {
                        slidesPerView: 3,
                    },
                },
                on: {
                    init() {
                        // ...
                    },
                },
            };

            // now we need to assign all parameters to Swiper element
            Object.assign(swiperElement, swiperParams);

            // and now initialize it
            swiperElement.initialize();

            const displayValidationErrors = (errors) => {
                console.log('errors', errors);
                const validationErrors =
                    document.getElementById('validation-errors');
                validationErrors.innerHTML = '';
                for (const error in errors) {
                    const li = document.createElement('div');
                    li.innerText = '* ' + errors[error][0];
                    validationErrors.appendChild(li);
                }
            };

            function getTestimonials() {
                fetch('http://localhost:8000/testimoniale', {
                    method: 'GET',
                    headers: {
                        'Content-Type': 'application/json',
                        Accept: 'application/json',
                    },
                })
                    .then(async function (response) {
                        const t = await response.json();

                        const swiper = document.getElementById('swiper');
                        swiper.innerHTML = '';

                        for (let i = 0; i < t.length; i++) {
                            const slide =
                                document.createElement('swiper-slide');
                            slide.classList.add(
                                'relative',
                                'bg-neutral-800',
                                'rounded-lg',
                                'mt-4',
                                'p-6',
                                'min-h-[275px]',
                                'flex-center',
                            );
                            slide.innerHTML = `
                    <div>
                        <i class="fa-solid fa-quote-left absolute -top-4 text-blue-600 text-3xl"></i>
                        <h1 class="font-extrabold text-2xl">${t[i].rating}/5</h1>
                        <div class="mt-4 text-zinc-300">${t[i].text}</div>
                        <div class="flex items-center gap-4 pt-7 pb-4">
                            <img src="${t[i].imagine}" class="rounded-full w-14" alt="reviewer">
                            <div>
                                <h2 class="font-semibold tracking-wider text-lg">${t[i].nume}</h2>
                            </div>
                        </div>
                    </div>
                    `;
                            swiper.appendChild(slide);
                        }
                    })
                    .catch((error) => {
                        console.error(error);
                    });
            }
            getTestimonials();

            const name = document.getElementById('name');
            const email = document.getElementById('email');
            const phone = document.getElementById('phone');
            const message = document.getElementById('message');
            const termeni = document.getElementById('termeni');

            function clearForm() {
                name.value = '';
                email.value = '';
                phone.value = '';
                message.value = '';
                termeni.value = '';
            }

            const onSubmit = () => {
                const requestBody = {
                    nume: name.value,
                    email: email.value,
                    telefon: phone.value,
                    mesaj: document.getElementById('message').value,
                    termeni: termeni.value == 'checked',
                };
                console.log('termeni.value', termeni.value);
                // if (!termeni.checked) {
                //     alert(
                //         'You must fill out the form and agree with the terms and conditions!',
                //     );
                //     return;
                // }
                fetch('http://localhost:8000/contact', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        Accept: 'application/json',
                    },
                    body: JSON.stringify(requestBody),
                })
                    .then(async (response) => {
                        let data = await response.json();
                        console.log('data', data);
                        console.log(response);
                        if (response.status == 201) {
                            alert('Your message has been sent successfully!');
                            clearForm();
                        } else {
                            if (response.status == 422) {
                                displayValidationErrors(data.data.errors);
                            } else {
                                alert('Something went wrong!');
                                console.log(response);
                            }
                        }
                    })
                    .catch((error) => {
                        console.error(error);
                    });
            };
        </script>
    </body>
</html>
