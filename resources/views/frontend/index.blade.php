@extends('frontend.layout.main')
@section('main-section')
<x-home-section>
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
      <form action="{{ route('contact.send') }}" method="POST" class="w-full" name="contactUS" netlify>
            @csrf
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
               required
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
               placeholder="name@rajor.com"
               required
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
         @if (session('success'))
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 animate-fade-out-15s" role="alert">
               <span class="font-medium">Success alert!</span> {{ session('success') }}
            </div>
         @endif
      </form>
    
   </div>
</section>
@endsection