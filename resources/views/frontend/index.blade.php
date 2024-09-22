@extends('frontend.layout.main')
@section('main-section')
<section class="flex flex-col justify-between h-screen">
   <header
      class="z-10 pointer-events-none flex items-center justify-between w-full px-4 mt-4 max-w-screen-xl mx-auto"
      >
      <svg
         width="70"
         height="70"
         viewBox="0 0 406 368"
         fill="none"
         xmlns="http://www.w3.org/2000/svg"
         >
         <path
            d="M314.516 203.174L314.516 349.104L162.117 208.727M314.516 203.174L282.653 203.26M314.516 203.174L337.498 203.26L380.617 170.782L314.516 170.782M162.117 208.727L117.661 170.634L157.117 170.782M162.117 208.727L65.1165 301.139L20.176 301.139L137.099 188.83M200.117 170.782L282.653 96.1739L282.653 170.782M200.117 170.782L282.653 170.782M200.117 170.782L157.117 170.782M282.653 203.26L210.462 202.796L282.653 270.76L282.653 203.26ZM282.653 170.782L314.516 170.782M157.117 170.782L315.751 20.1061L314.516 170.782"
            stroke="currentColor"
            stroke-width="10"
            />
      </svg>
      <div class="flex gap-4 pointer-events-auto">
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
            class="feather feather-sun"
            >
            <circle cx="12" cy="12" r="5"></circle>
            <line x1="12" y1="1" x2="12" y2="3"></line>
            <line x1="12" y1="21" x2="12" y2="23"></line>
            <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
            <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
            <line x1="1" y1="12" x2="3" y2="12"></line>
            <line x1="21" y1="12" x2="23" y2="12"></line>
            <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
            <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
         </svg>
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
            class="hidden"
            >
            <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
         </svg>
         <a href="tel:858086885"
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
               class="feather feather-phone"
               >
               <path
                  d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"
                  ></path>
            </svg>
         </a>
         <a
            href="https://wa.me/8580868845?text=Hi, How are you?"
            target="_blank"
            >
            <svg
               aria-hidden="true"
               focusable="false"
               data-prefix="fab"
               data-icon="whatsapp"
               class="svg-inline--fa fa-whatsapp fa-w-14"
               role="img"
               xmlns="http://www.w3.org/2000/svg"
               width="24"
               height="24"
               viewBox="0 0 448 512"
               >
               <path
                  fill="currentColor"
                  d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"
                  ></path>
            </svg>
         </a>
      </div>
   </header>
   <div class="absolute inset-0 hidden md:block" id="wrapper-canvas"></div>
   <div class="flex -mt-10 relative">
      <div class="w-full px-4 max-w-screen-xl mx-auto">
         <svg
            viewBox="0 0 406 368"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
            class="pointer-events-none absolute top-0 left-1/2 -translate-y-[80px] sm:-translate-y-[180px] -translate-x-1/2 w-[300px] sm:w-[400px] md:w-[650px]"
            >
            <path
               d="M314.899 203.5L314.899 349.43L162.5 209.053M314.899 203.5L283.037 203.586M314.899 203.5L337.881 203.586L381 171.109L314.899 171.109M162.5 209.053L118.044 170.96L157.5 171.109M162.5 209.053L65.5 301.465L20.5595 301.465L137.482 189.156M200.5 171.109L283.037 96.5L283.037 171.109M200.5 171.109L283.037 171.109M200.5 171.109L157.5 171.109M283.037 203.586L210.846 203.123L283.037 271.086L283.037 203.586ZM283.037 171.109L314.899 171.109M157.5 171.109L316.135 20.4322L314.899 171.109"
               stroke="#1F2667"
               stroke-opacity="0.9"
               stroke-width="10"
               />
            <path
               d="M314.899 203.5L314.899 349.43L162.5 209.053M314.899 203.5L283.037 203.586M314.899 203.5L337.881 203.586L381 171.109L314.899 171.109M162.5 209.053L118.044 170.96L157.5 171.109M162.5 209.053L65.5 301.465L20.5595 301.465L137.482 189.156M200.5 171.109L283.037 96.5L283.037 171.109M200.5 171.109L283.037 171.109M200.5 171.109L157.5 171.109M283.037 203.586L210.846 203.123L283.037 271.086L283.037 203.586ZM283.037 171.109L314.899 171.109M157.5 171.109L316.135 20.4322L314.899 171.109"
               stroke="url(#paint0_linear)"
               stroke-width="10"
               />
            <defs>
               <linearGradient
                  id="paint0_linear"
                  x1="205.549"
                  y1="20.0169"
                  x2="204.338"
                  y2="342.461"
                  gradientUnits="userSpaceOnUse"
                  >
                  <stop stop-color="#1595B6" />
                  <stop offset="1" stop-color="#1595B6" stop-opacity="0" />
               </linearGradient>
            </defs>
         </svg>
         <div class="relative ml-4 md:ml-12">
            <h1
               class="pointer-events-none text-4xl md:text-[64px] font-['Spartan'] mr-12"
               >
               Khem Raj
            </h1>
            <p
               class="pointer-events-none font-['Merriweather'] italic my-4 md:my-8"
               >
               Backend Developer
            </p>
            <button
               class="bg-[#4595eb] py-2 px-5 rounded font-extrabold bg-gradient-to-l from-[#1595b6] to-[#1f2667e6] relative hover:scale-110 ease-in-out duration-100 group"
               >
               About me
               <svg
                  xmlns:dc="http://purl.org/dc/elements/1.1/"
                  xmlns:cc="http://creativecommons.org/ns#"
                  xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                  xmlns:svg="http://www.w3.org/2000/svg"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
                  xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
                  version="1.1"
                  x="0px"
                  y="0px"
                  width="44"
                  height="44"
                  viewBox="0 0 100 100"
                  class="absolute top-1/2 -translate-y-1/2 -right-7 group-hover:-right-8 ease-in-out duration-100"
                  >
                  <g transform="translate(0,-952.36218)">
                     <path
                        style="
                        text-indent: 0;
                        text-transform: none;
                        direction: ltr;
                        block-progression: tb;
                        baseline-shift: baseline;
                        color: #000000;
                        enable-background: accumulate;
                        "
                        d="m 88.999835,1002.3621 c 0,-0.4628 -0.2799,-1.0773 -0.5639,-1.3755 l -15.9997,-17.00026 c -0.747,-0.7723 -1.9572,-0.8618 -2.8281,-0.078 -0.7786,0.7007 -0.798,2.0673 -0.078,2.8282 l 12.8435,13.62516 -69.37347,0 c -1.1046,0 -2,0.8954 -2,2 0,1.1046 0.8954,2.0001 2,2.0001 l 69.37347,0 -12.8435,13.6252 c -0.7199,0.7608 -0.6688,2.0938 0.078,2.8281 0.7885,0.7752 2.0925,0.7062 2.8281,-0.078 l 15.9997,-17.0002 c 0.4701,-0.4611 0.556,-0.9052 0.5639,-1.3748 z"
                        fill="#fff"
                        fill-opacity="1"
                        stroke="white"
                        stroke-width="2"
                        marker="none"
                        visibility="visible"
                        display="inline"
                        overflow="visible"
                        />
                  </g>
               </svg>
            </button>
         </div>
      </div>
      <ul class="ml-auto space-y-6 text-[#b0b2c3] absolute right-8">
         <li>
            <a
               href="https://www.linkedin.com/in/khem-raj/"
               target="_blank"
               >
               <svg
                  class="w-7 hover:text-white"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 448 512"
                  >
                  <path
                     fill="currentColor"
                     d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z"
                     />
               </svg>
            </a>
         </li>
         <li>
            <a href="https://twitter.com/khemraj" target="_blank">
               <svg
                  class="w-7 hover:text-white"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 512 512"
                  >
                  <path
                     fill="currentColor"
                     d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"
                     />
               </svg>
            </a>
         </li>
         <li>
            <a href="https://www.instagram.com/comanndo_return/">
               <svg
                  class="w-7 hover:text-white"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 448 512"
                  >
                  <path
                     fill="currentColor"
                     d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
                     />
               </svg>
            </a>
         </li>
         <li>
            <a href="mailto:khemrajraj73@@gmail.com" target="_blank">
               <svg
                  class="w-7 hover:text-white"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 512 512"
                  >
                  <path
                     fill="currentColor"
                     d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z"
                     />
               </svg>
            </a>
         </li>
         <li>
            <a href="https://www.youtube.com/@khemumalurwala">
               <svg
                  class="w-7 hover:text-white"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 576 512"
                  fill="currentColor"
                  >
                  <path
                     d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z"
                     />
               </svg>
            </a>
         </li>
      </ul>
   </div>
   <div
      class="relative self-center after:content-[''] after:absolute after:w-[2px] after:h-5 after:bg-[#444] after:left-1/2 after:-translate-x-1/2 after:top-[100px]"
      >
      <button
         class="bg-[#4595eb] py-2 px-5 rounded font-extrabold bg-gradient-to-l from-[#1595b6] to-[#1f2667e6] relative hover:scale-110 ease-in-out duration-100 group mb-20"
         >
         Latest Works
         <svg
            xmlns:dc="http://purl.org/dc/elements/1.1/"
            xmlns:cc="http://creativecommons.org/ns#"
            xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
            xmlns:svg="http://www.w3.org/2000/svg"
            xmlns="http://www.w3.org/2000/svg"
            xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
            xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
            version="1.1"
            x="0px"
            y="0px"
            width="44"
            height="44"
            viewBox="0 0 100 100"
            class="absolute rotate-90 left-1/2 -translate-x-1/2 top-11 group-hover:top-12 ease-in-out duration-100"
            >
            <g transform="translate(0,-952.36218)">
               <path
                  style="
                  text-indent: 0;
                  text-transform: none;
                  direction: ltr;
                  block-progression: tb;
                  baseline-shift: baseline;
                  color: #000000;
                  enable-background: accumulate;
                  "
                  d="m 88.999835,1002.3621 c 0,-0.4628 -0.2799,-1.0773 -0.5639,-1.3755 l -15.9997,-17.00026 c -0.747,-0.7723 -1.9572,-0.8618 -2.8281,-0.078 -0.7786,0.7007 -0.798,2.0673 -0.078,2.8282 l 12.8435,13.62516 -69.37347,0 c -1.1046,0 -2,0.8954 -2,2 0,1.1046 0.8954,2.0001 2,2.0001 l 69.37347,0 -12.8435,13.6252 c -0.7199,0.7608 -0.6688,2.0938 0.078,2.8281 0.7885,0.7752 2.0925,0.7062 2.8281,-0.078 l 15.9997,-17.0002 c 0.4701,-0.4611 0.556,-0.9052 0.5639,-1.3748 z"
                  fill="#fff"
                  fill-opacity="1"
                  stroke="white"
                  stroke-width="2"
                  marker="none"
                  visibility="visible"
                  display="inline"
                  overflow="visible"
                  />
            </g>
         </svg>
      </button>
   </div>
</section>
<section class="max-w-screen-xl mx-auto px-4 relative pb-8 sm:pb-16">
   <h2
      class="text-3xl sm:text-[40px] bg-[#111] relative z-10 font-bold px-4 py-2 w-max mx-auto text-center text-[#1788ae] sm:border-b-2 border-[#1788ae]"
      >
      Latest Works
   </h2>
   <div
      class="flex flex-col sm:flex-row gap-4 mt-8 sm:gap-[80px] items-center sm:mt-20 relative"
      >
      <div
         class="h-[1px] left-1/4 right-1/2 bg-[#1788ae] absolute top-1/2 hidden sm:block"
         ></div>
      <div
         class="w-4 h-4 rounded-full border-[3px] border-[#459bd5] absolute left-1/2 -translate-x-1/2 bg-[#111] z-10 hover:scale-110 ease-in-out duration-100 hidden sm:block"
         ></div>
      <a
         href="https://procodrr.com"
         class="flex w-full relative justify-center sm:justify-start"
         >
         <div
            class="flex flex-col items-center relative group sm:hover:scale-105 ease-in-out duration-200"
            >
            <img
               class="max-w-[400px] w-full mr-auto relative z-10 drop-shadow-[0_0px_60px_rgba(59,130,246,0.6)]"
               {{-- src="./assets/images/ProCodrr.webp" --}}
               src="{{ url('/assets/images/ProCodrr.webp')}}"
               alt=""
               />
            <span
               class="flex group-hover:-top-14 ease-jump duration-200 bg-[#459bd5] sm:absolute left-1/2 sm:-translate-x-1/2 top-5 px-2 py-1 text-sm sm:text-base mt-2 rounded w-max items-center gap-1 after:hidden sm:after:block after:w-4 after:h-4 after:bg-inherit after:absolute after:left-1/2 after:-translate-x-1/2 after:rotate-45 after:-bottom-2"
               >
               ProCodrr
               <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="feather feather-external-link"
                  >
                  <path
                     d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"
                     ></path>
                  <polyline points="15 3 21 3 21 9"></polyline>
                  <line x1="10" y1="14" x2="21" y2="3"></line>
               </svg>
            </span>
         </div>
      </a>
      <div class="w-full">
         <h3 class="text-[#459bd5] font-bold text-2xl md:text-4xl">
            ProCodrr
         </h3>
         <span class="text-[#459bd5] text-base md:text-lg"
            >(Coding Platform)</span
            >
         <p class="text-justify text-sm md:text-base mt-2">
            Deeply understand advanced concepts, practice with real-world
            exercises, build expertise with hands-on projects to boost your
            career.
         </p>
         <ul class="flex flex-wrap gap-2 mt-2">
            <li
               class="border rounded-[50px] border-[#999] px-[10px] py-[5px] text-sm md:text-base"
               >
               #react.js
            </li>
            <li
               class="border rounded-[50px] border-[#999] px-[10px] py-[5px] text-sm md:text-base"
               >
               #express.js
            </li>
            <li
               class="border rounded-[50px] border-[#999] px-[10px] py-[5px] text-sm md:text-base"
               >
               #node.js
            </li>
            <li
               class="border rounded-[50px] border-[#999] px-[10px] py-[5px] text-sm md:text-base"
               >
               #swiper.js
            </li>
            <li
               class="border rounded-[50px] border-[#999] px-[10px] py-[5px] text-sm md:text-base"
               >
               #mongoDB
            </li>
            <li
               class="border rounded-[50px] border-[#999] px-[10px] py-[5px] text-sm md:text-base"
               >
               #mongoose
            </li>
            <li
               class="border rounded-[50px] border-[#999] px-[10px] py-[5px] text-sm md:text-base"
               >
               #css
            </li>
            <li
               class="border rounded-[50px] border-[#999] px-[10px] py-[5px] text-sm md:text-base"
               >
               #javascript
            </li>
            <li
               class="border rounded-[50px] border-[#999] px-[10px] py-[5px] text-sm md:text-base"
               >
               #figma
            </li>
         </ul>
      </div>
   </div>
   <div
      class="flex flex-col sm:flex-row gap-4 mt-12 sm:gap-[80px] items-center sm:mt-20 relative"
      >
      <div class="order-2 sm:order-1 w-full">
         <h3 class="text-[#ffe578] font-bold text-2xl md:text-4xl">
            EazyGrad
         </h3>
         <span class="text-[#ffe578] text-base md:text-lg"
            >(EdTech Startup)</span
            >
         <p class="text-justify text-sm md:text-base mt-2">
            Being a lead developer, revamped the site to a highly responsive,
            and interactive website. Created new features and pages. Worked as a
            team with product manager and ux designer.
         </p>
         <ul class="flex flex-wrap gap-2 mt-2">
            <li
               class="border rounded-[50px] border-[#999] px-[10px] py-[5px] text-sm md:text-base"
               >
               #react.js
            </li>
            <li
               class="border rounded-[50px] border-[#999] px-[10px] py-[5px] text-sm md:text-base"
               >
               #express.js
            </li>
            <li
               class="border rounded-[50px] border-[#999] px-[10px] py-[5px] text-sm md:text-base"
               >
               #node.js
            </li>
            <li
               class="border rounded-[50px] border-[#999] px-[10px] py-[5px] text-sm md:text-base"
               >
               #swiper.js
            </li>
            <li
               class="border rounded-[50px] border-[#999] px-[10px] py-[5px] text-sm md:text-base"
               >
               #mongoDB
            </li>
            <li
               class="border rounded-[50px] border-[#999] px-[10px] py-[5px] text-sm md:text-base"
               >
               #mongoose
            </li>
            <li
               class="border rounded-[50px] border-[#999] px-[10px] py-[5px] text-sm md:text-base"
               >
               #css
            </li>
            <li
               class="border rounded-[50px] border-[#999] px-[10px] py-[5px] text-sm md:text-base"
               >
               #javascript
            </li>
            <li
               class="border rounded-[50px] border-[#999] px-[10px] py-[5px] text-sm md:text-base"
               >
               #figma
            </li>
         </ul>
      </div>
      <div
         class="h-[1px] left-1/2 right-1/4 bg-[#1788ae] absolute top-1/2 hidden sm:block"
         ></div>
      <div
         class="w-4 h-4 rounded-full border-[3px] border-[#ffe578] absolute left-1/2 -translate-x-1/2 bg-[#111] z-10 hover:scale-110 ease-in-out duration-100 hidden sm:block"
         ></div>
      <a
         href="#"
         class="order-1 sm:order-2 flex w-full relative justify-center sm:justify-start"
         >
         <div
            class="flex flex-col items-center relative group sm:hover:scale-105 ease-in-out duration-200 sm:ml-auto"
            >
            <img
               class="max-w-[400px] w-full relative z-10 drop-shadow-[0_0px_60px_rgba(59,130,246,0.6)]"
               src="./assets/images/eazygrad.webp"
               alt=""
               />
            <span
               class="flex group-hover:-top-14 ease-jump duration-200 text-black bg-[#ffe578] sm:absolute left-1/2 sm:-translate-x-1/2 top-5 px-2 py-1 text-sm sm:text-base mt-2 rounded w-max items-center gap-1 after:hidden sm:after:block after:w-4 after:h-4 after:bg-inherit after:absolute after:left-1/2 after:-translate-x-1/2 after:rotate-45 after:-bottom-2"
               >
               EazyGrad
               <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="feather feather-external-link"
                  >
                  <path
                     d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"
                     ></path>
                  <polyline points="15 3 21 3 21 9"></polyline>
                  <line x1="10" y1="14" x2="21" y2="3"></line>
               </svg>
            </span>
         </div>
      </a>
   </div>
   <div
      class="flex flex-col sm:flex-row gap-4 mt-12 sm:gap-[80px] items-center sm:mt-20 relative"
      >
      <div
         class="h-[1px] left-1/4 right-1/2 bg-[#1788ae] absolute top-1/2 hidden sm:block"
         ></div>
      <div
         class="w-4 h-4 rounded-full border-[3px] border-[#fc815c] absolute left-1/2 -translate-x-1/2 bg-[#111] z-10 hover:scale-110 ease-in-out duration-100 hidden sm:block"
         ></div>
      <a
         href="#"
         class="flex w-full relative justify-center sm:justify-start"
         >
         <div
            class="flex flex-col items-center relative group hover:scale-105 ease-in-out sm:mr-auto duration-200"
            >
            <img
               class="max-w-[400px] w-full mr-auto relative z-10 drop-shadow-[0_0px_60px_rgba(59,130,246,0.6)]"
               src="./assets/images/harigurus.webp"
               alt=""
               />
            <span
               class="flex group-hover:-top-14 ease-jump duration-200 bg-[#fc815c] sm:absolute left-1/2 sm:-translate-x-1/2 top-5 px-2 py-1 text-sm sm:text-base mt-2 rounded w-max items-center gap-1 after:hidden sm:after:block after:w-4 after:h-4 after:bg-inherit after:absolute after:left-1/2 after:-translate-x-1/2 after:rotate-45 after:-bottom-2"
               >
               Harigurus
               <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="feather feather-external-link"
                  >
                  <path
                     d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"
                     ></path>
                  <polyline points="15 3 21 3 21 9"></polyline>
                  <line x1="10" y1="14" x2="21" y2="3"></line>
               </svg>
            </span>
         </div>
      </a>
      <div class="w-full">
         <h3 class="text-[#fc815c] font-bold text-2xl md:text-4xl">
            Harigurus
         </h3>
         <span class="text-[#fc815c] text-base md:text-lg"
            >(Event Booking)</span
            >
         <p class="text-justify text-sm md:text-base mt-2">
            HariGurus is a one-stop-shop for all Hindu religious, customs and
            traditional requirements. Built the complete site from scratch.
         </p>
         <ul class="flex flex-wrap gap-2 mt-2">
            <li
               class="border rounded-[50px] border-[#999] px-[10px] py-[5px] text-sm md:text-base"
               >
               #react.js
            </li>
            <li
               class="border rounded-[50px] border-[#999] px-[10px] py-[5px] text-sm md:text-base"
               >
               #express.js
            </li>
            <li
               class="border rounded-[50px] border-[#999] px-[10px] py-[5px] text-sm md:text-base"
               >
               #node.js
            </li>
            <li
               class="border rounded-[50px] border-[#999] px-[10px] py-[5px] text-sm md:text-base"
               >
               #swiper.js
            </li>
            <li
               class="border rounded-[50px] border-[#999] px-[10px] py-[5px] text-sm md:text-base"
               >
               #mongoDB
            </li>
            <li
               class="border rounded-[50px] border-[#999] px-[10px] py-[5px] text-sm md:text-base"
               >
               #mongoose
            </li>
            <li
               class="border rounded-[50px] border-[#999] px-[10px] py-[5px] text-sm md:text-base"
               >
               #css
            </li>
            <li
               class="border rounded-[50px] border-[#999] px-[10px] py-[5px] text-sm md:text-base"
               >
               #javascript
            </li>
            <li
               class="border rounded-[50px] border-[#999] px-[10px] py-[5px] text-sm md:text-base"
               >
               #figma
            </li>
         </ul>
      </div>
   </div>
   <div
      class="flex flex-col sm:flex-row gap-4 mt-12 sm:gap-[80px] items-center sm:mt-20 relative"
      >
      <div class="order-2 sm:order-1 w-full">
         <h3 class="text-[#47afa1] font-bold text-2xl md:text-4xl">
            Web Dev English
         </h3>
         <span class="text-[#47afa1] text-base md:text-lg"
            >(Coaching and Consulting)</span
            >
         <p class="text-justify text-sm md:text-base mt-2">
            Being a lead developer, revamped the site to a highly responsive,
            and interactive website. Created new features and pages. Worked as a
            team with product manager and ux designer.
         </p>
         <ul class="flex flex-wrap gap-2 mt-2">
            <li
               class="border rounded-[50px] border-[#999] px-[10px] py-[5px] text-sm md:text-base"
               >
               #react.js
            </li>
            <li
               class="border rounded-[50px] border-[#999] px-[10px] py-[5px] text-sm md:text-base"
               >
               #express.js
            </li>
            <li
               class="border rounded-[50px] border-[#999] px-[10px] py-[5px] text-sm md:text-base"
               >
               #node.js
            </li>
            <li
               class="border rounded-[50px] border-[#999] px-[10px] py-[5px] text-sm md:text-base"
               >
               #swiper.js
            </li>
            <li
               class="border rounded-[50px] border-[#999] px-[10px] py-[5px] text-sm md:text-base"
               >
               #mongoDB
            </li>
            <li
               class="border rounded-[50px] border-[#999] px-[10px] py-[5px] text-sm md:text-base"
               >
               #mongoose
            </li>
            <li
               class="border rounded-[50px] border-[#999] px-[10px] py-[5px] text-sm md:text-base"
               >
               #css
            </li>
            <li
               class="border rounded-[50px] border-[#999] px-[10px] py-[5px] text-sm md:text-base"
               >
               #javascript
            </li>
            <li
               class="border rounded-[50px] border-[#999] px-[10px] py-[5px] text-sm md:text-base"
               >
               #figma
            </li>
         </ul>
      </div>
      <div
         class="h-[1px] left-1/2 right-1/4 bg-[#1788ae] absolute top-1/2 hidden sm:block"
         ></div>
      <div
         class="w-4 h-4 rounded-full border-[3px] border-[#47afa1] absolute left-1/2 -translate-x-1/2 bg-[#111] z-10 hover:scale-110 ease-in-out duration-100 hidden sm:block"
         ></div>
      <a
         href="#"
         class="order-1 sm:order-2 flex w-full relative justify-center sm:justify-start"
         >
         <div
            class="flex flex-col items-center relative group sm:hover:scale-105 ease-in-out duration-200 sm:ml-auto"
            >
            <img
               class="max-w-[400px] w-full relative z-10 drop-shadow-[0_0px_60px_rgba(59,130,246,0.6)]"
               src="./assets/images/web-dev-english.webp"
               alt=""
               />
            <span
               class="flex group-hover:-top-14 ease-jump duration-200 bg-[#47afa1] sm:absolute left-1/2 sm:-translate-x-1/2 top-5 px-2 py-1 text-sm sm:text-base mt-2 rounded w-max items-center gap-1 after:hidden sm:after:block after:w-4 after:h-4 after:bg-inherit after:absolute after:left-1/2 after:-translate-x-1/2 after:rotate-45 after:-bottom-2"
               >
               Web Dev English
               <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="feather feather-external-link"
                  >
                  <path
                     d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"
                     ></path>
                  <polyline points="15 3 21 3 21 9"></polyline>
                  <line x1="10" y1="14" x2="21" y2="3"></line>
               </svg>
            </span>
         </div>
      </a>
   </div>
   <div
      class="flex flex-col sm:flex-row gap-4 mt-12 sm:gap-[80px] items-center sm:mt-20 relative"
      >
      <div
         class="h-[1px] left-1/4 right-1/2 bg-[#1788ae] absolute top-1/2 hidden sm:block"
         ></div>
      <div
         class="w-4 h-4 rounded-full border-[3px] border-[#fc815c] absolute left-1/2 -translate-x-1/2 bg-[#111] z-10 hover:scale-110 ease-in-out duration-100 hidden sm:block"
         ></div>
      <a
         href="#"
         class="flex w-full relative justify-center sm:justify-start"
         >
         <div
            class="flex flex-col items-center relative group hover:scale-105 ease-in-out sm:mr-auto duration-200"
            >
            <img
               class="max-w-[400px] w-full mr-auto relative z-10 drop-shadow-[0_0px_60px_rgba(59,130,246,0.6)]"
               src="./assets/images/pioneer-digital.webp"
               alt=""
               />
            <span
               class="flex group-hover:-top-14 ease-jump duration-200 bg-[#fc815c] sm:absolute left-1/2 sm:-translate-x-1/2 top-5 px-2 py-1 text-sm sm:text-base mt-2 rounded w-max items-center gap-1 after:hidden sm:after:block after:w-4 after:h-4 after:bg-inherit after:absolute after:left-1/2 after:-translate-x-1/2 after:rotate-45 after:-bottom-2"
               >
               Pioneer Digital
               <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="feather feather-external-link"
                  >
                  <path
                     d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"
                     ></path>
                  <polyline points="15 3 21 3 21 9"></polyline>
                  <line x1="10" y1="14" x2="21" y2="3"></line>
               </svg>
            </span>
         </div>
      </a>
      <div class="w-full">
         <h3 class="text-[#fc815c] font-bold text-2xl md:text-4xl">
            Pioneer Digital
         </h3>
         <span class="text-[#fc815c] text-base md:text-lg"
            >(Digital Marketing Agency)</span
            >
         <p class="text-justify text-sm md:text-base mt-2">
            One of the featured site while working with TheBrandWick.com
            (agency). Worked as a frontend developer to make the site
            user-interactive and responsive.
         </p>
         <ul class="flex flex-wrap gap-2 mt-2">
            <li
               class="border rounded-[50px] border-[#999] px-[10px] py-[5px] text-sm md:text-base"
               >
               #react.js
            </li>
            <li
               class="border rounded-[50px] border-[#999] px-[10px] py-[5px] text-sm md:text-base"
               >
               #express.js
            </li>
            <li
               class="border rounded-[50px] border-[#999] px-[10px] py-[5px] text-sm md:text-base"
               >
               #node.js
            </li>
            <li
               class="border rounded-[50px] border-[#999] px-[10px] py-[5px] text-sm md:text-base"
               >
               #swiper.js
            </li>
            <li
               class="border rounded-[50px] border-[#999] px-[10px] py-[5px] text-sm md:text-base"
               >
               #mongoDB
            </li>
            <li
               class="border rounded-[50px] border-[#999] px-[10px] py-[5px] text-sm md:text-base"
               >
               #mongoose
            </li>
            <li
               class="border rounded-[50px] border-[#999] px-[10px] py-[5px] text-sm md:text-base"
               >
               #css
            </li>
            <li
               class="border rounded-[50px] border-[#999] px-[10px] py-[5px] text-sm md:text-base"
               >
               #javascript
            </li>
            <li
               class="border rounded-[50px] border-[#999] px-[10px] py-[5px] text-sm md:text-base"
               >
               #figma
            </li>
         </ul>
      </div>
   </div>
   <div
      class="w-[2px] hidden sm:block bg-[#1788ae] absolute top-0 bottom-0 left-1/2 -translate-x-1/2"
      ></div>
</section>
<section class="max-w-screen-xl mx-auto pb-12">
   <h2
      class="text-3xl sm:text-[40px] bg-[#111] sm:w-max relative z-10 font-bold px-4 py-2 mx-auto text-center text-[#1788ae] sm:border-2 border-[#1788ae] rounded-md"
      >
      What my clients are saying?
   </h2>
   <div class="swiper mySwiper !py-14">
      <div class="swiper-wrapper items-center">
         <div class="swiper-slide px-4">
            <div
               class="flex flex-col md:flex-row w-full md:max-w-[800px] items-center rounded-lg p-9 shadow-[0_0px_50px_rgba(59,130,246,0.6)] cursor-grab"
               >
               <img
                  class="shrink-0 w-[120px] h-[120px] md:w-[180px] md:h-[180px] rounded-full drop-shadow-[0_0px_80px_rgba(59,130,246,1)]"
                  src="/assets/images/saatvik.webp"
                  alt="testimonial 3"
                  />
               <div
                  class="testimonial-text ml-6 text-left pt-6 md:pt-16 relative"
                  >
                  <p class="text-sm md:text-base mb-2">
                     “Anurag is a talented, committed individual who will leave no
                     stone unturned in his pursuit to provide with the best. His
                     attention to detail and in-depth experience in the of web
                     development is indeed commendable. He has exhibited exemplary
                     skills in the field, and I hope to see all the great projects
                     coming up!”
                  </p>
                  <h2
                     class="text-right text-[#459bd5] font-bold text-2xl md:text-4xl"
                     >
                     Saatvik Nagpal
                  </h2>
                  <h5 class="text-right text-[#459bd5] text-base md:text-lg">
                     Founder, EazyGrad
                  </h5>
               </div>
            </div>
         </div>
         <div class="swiper-slide px-4">
            <div
               class="flex flex-col md:flex-row max-w-[800px] items-center rounded-lg p-9 shadow-[0_0px_50px_rgba(59,130,246,0.6)] cursor-grab"
               >
               <img
                  class="shrink-0 w-[120px] h-[120px] md:w-[180px] md:h-[180px] rounded-full drop-shadow-[0_0px_80px_rgba(59,130,246,1)]"
                  src="/assets/images/kira.webp"
                  alt="testimonial 3"
                  />
               <div
                  class="testimonial-text ml-6 text-left pt-6 md:pt-16 relative"
                  >
                  <p class="text-sm md:text-base mb-2">
                     “Anurag was a wonderful developer to work with! He anticipated
                     everything I need to consider for my website. He also went the
                     extra mile and added details that I hadn't considered! He is
                     helping my business grow, and I will definitely work with him
                     again!”
                  </p>
                  <h2
                     class="text-right text-[#459bd5] font-bold text-2xl md:text-4xl"
                     >
                     Kira Bragg
                  </h2>
                  <h5 class="text-right text-[#459bd5] text-base md:text-lg">
                     English Mentor
                  </h5>
               </div>
            </div>
         </div>
         <div class="swiper-slide px-4">
            <div
               class="flex flex-col md:flex-row max-w-[800px] items-center rounded-lg p-9 shadow-[0_0px_50px_rgba(59,130,246,0.6)] cursor-grab"
               >
               <img
                  class="shrink-0 w-[120px] h-[120px] md:w-[180px] md:h-[180px] rounded-full drop-shadow-[0_0px_80px_rgba(59,130,246,1)]"
                  src="/assets/images/Srihari.webp"
                  alt="testimonial 3"
                  />
               <div
                  class="testimonial-text ml-6 text-left pt-6 md:pt-16 relative"
                  >
                  <p class="text-sm md:text-base mb-2">
                     “I worked with Anurag to make my website. I am speechless by
                     looking at his work ethic and dedication. Working with him was
                     the best decision I made.”
                  </p>
                  <h2
                     class="text-right text-[#459bd5] font-bold text-2xl md:text-4xl"
                     >
                     Srihari Kestur
                  </h2>
                  <h5 class="text-right text-[#459bd5] text-base md:text-lg">
                     Founder Harigurus
                  </h5>
               </div>
            </div>
         </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
   </div>
</section>
<section class="max-w-screen-xl mx-auto px-4 pb-12">
   <h2
      class="text-3xl sm:text-[40px] bg-[#111] relative z-10 font-bold px-4 py-2 w-max mx-auto text-center text-[#1788ae] sm:border-2 border-[#1788ae] rounded-md"
      >
      Let's Connect
   </h2>
   <div class="flex flex-col md:flex-row items-center mt-10">
      <div class="w-full">
         <img src="./assets/images/contact-me.svg" alt="phone" />
      </div>
      <form class="w-full" name="contactUS" netlify>
         <label
            for="name"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
            >Name</label
            >
         <div class="relative mb-4">
            <div
               class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none"
               >
               <svg
                  class="w-4 h-4 text-gray-500 dark:text-gray-400"
                  aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                  >
                  <path
                     d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"
                     />
               </svg>
            </div>
            <input
               type="text"
               id="name"
               name="name"
               class="bg-gray-50 border-2 outline-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#1788ae] focus:border-[#1788ae] block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
               placeholder="Enter your name"
               />
         </div>
         <label
            for="email"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
            >Your Email</label
            >
         <div class="relative mb-4">
            <div
               class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none"
               >
               <svg
                  class="w-4 h-4 text-gray-500 dark:text-gray-400"
                  aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="currentColor"
                  viewBox="0 0 20 16"
                  >
                  <path
                     d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z"
                     />
                  <path
                     d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z"
                     />
               </svg>
            </div>
            <input
               type="text"
               id="email"
               name="email"
               class="bg-gray-50 border-2 outline-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#1788ae] focus:border-[#1788ae] block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
               placeholder="name@procodrr.com"
               />
         </div>
         <label
            for="message"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
            >Message</label
            >
         <div class="relative mb-4">
            <div
               class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none"
               ></div>
            <textarea
               id="message"
               name="message"
               rows="8"
               class="bg-gray-50 border-2 outline-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#1788ae] focus:border-[#1788ae] block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
               ></textarea>
         </div>
         <button
            type="submit"
            class="w-full text-white bg-[#1788ae] hover:bg-[#1280a4] focus:ring-4 focus:ring-[#4489a0] font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none"
            >
         Send
         </button>
      </form>
   </div>
</section>
@endsection