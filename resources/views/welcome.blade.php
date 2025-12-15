<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LabForty</title>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet" />
  <link rel="icon" type="image/x-icon" href="{{ asset('images/Frame.svg') }}" />

  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: "Manrope", sans-serif;
    }
  </style>
</head>

<body>
  <div id="page-container">
    <header id="header" class="h-16 pt-4 pb-4 px-[120px] flex justify-between items-center mx-auto">
      <div id="header-logo" class="w-[108px] h-[20px]">
        <img src="{{ asset('images/Logo.svg') }}" alt="Labforty logo" />
      </div>
      <nav id="header-nav" class="flex items-center gap-10">
        <details class="group">
          <summary class="flex items-center cursor-pointer gap-[8px] list-none">
            Company
            <span class="transition-transform duration-300 group-open:rotate-180">
              <img src="{{ asset('images/Vector (6).png') }}" alt="vector" />
            </span>
          </summary>
        </details>
        <details class="group">
          <summary class="flex items-center cursor-pointer gap-[8px] list-none">
            Services
            <span class="transition-transform duration-300 group-open:rotate-180">
              <img src="{{ asset('images/Vector (6).png') }}" alt="vector" />
            </span>
          </summary>
        </details>
        <div class="cursor-pointer">Insights</div>
        <div class="cursor-pointer">Careers</div>
      </nav>
      <div id="header-button">
        <button class="font-bold text-[#1F1F1F]">Get in touch -></button>
      </div>
    </header>
    <main id="main-content" class="flex flex-col justify-center items-center gap-[80px] mt-[40px]">
      <section id="container-1" class="h-[868px] mx-auto">
        <div class="flex flex-col justify-center items-center gap-[40px]">
          <div id="container-1-title" class="flex flex-col justify-center">
            <h1 class="font-bold text-[55px] leading-[120%] tracking-[-0.02em] text-[#1F1F1F]">
              Global Support &<br />
            </h1>
            <span
              class="font-bold text-[55px] leading-[120%] tracking-[-0.02em] text-center bg-gradient-to-br from-[#083982] to-[#2064B5] bg-clip-text text-transparent">Maintenance</span>
          </div>

          <div id="section-1-content-container" class="flex gap-6">
            <img src="{{ asset('images/Mask group (2).png') }}" alt="Container 1 Image"
              class="w-[383px] h-[473px] rounded-[20px] object-cover bg-gray-300" />
            <div
              class="flex flex-col w-[383px] h-[473px] flex justify-between pt-[75px] pr-[40px] pb-[75px] pl-[40px] rounded-[20px] bg-[#F2F8FF]">
              <div id="container-1-right-side-wrapper" class="flex flex-col gap-[32px]">
                <div id="first-subheading"
                  class="w-[265px] h-[82px] flex gap-[10px] p-[16px] items-center bg-[#FFFFFF] shadow-[0px_4px_40px_0px_#B5D9F5BF]">
                  <img class="w-[30px] h-[30px]" src="{{ asset('images/mage_focus.png') }}" />
                  <p class="w-[190px] font-bold text-[16px] leading-[150%]">
                    Focus on
                    <span class="font-bold text-[16px] leading-[150%] text-[#818181]">expanding your
                      business</span>
                  </p>
                </div>
                <div id="second-subheading"
                  class="w-[265px] h-[79px] flex gap-[10px] rounded-[7.33px] p-[16px] items-center bg-[#6881AA]">
                  <img class="w-[30px] h-[30px]" src="{{ asset('images/ph_money-wavy-light.png') }}" />
                  <p class="font-bold text-[16px] leading-[150%] text-[#FFFFFF]">
                    While
                    <span class="font-bold text-[16px] leading-[150%]">reducing expenses</span>
                  </p>
                </div>
                <div id="third-subheading"
                  class="w-[265px] h-[82px] flex gap-[10px] p-[16px] items-center bg-[#FFFFFF] shadow-[0px_4px_40px_0px_#B5D9F5BF]">
                  <img class="w-[30px] h-[30px]" src="{{ asset('images/fluent_settings-48-regular.png') }}" />
                  <p class="font-bold text-[16px] leading-[150%] w-[145px] h-[48px]">
                    Maintenance
                    <span class="font-bold text-[16px] leading-[150%] text-[#818181]">issues
                      in-house</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div id="section-1-text" class="w-[385px] h-[96px]">
            <p class="font-semibold text-[16px] leading-[150%] text-center">
              Your project is unique, and we acknowledge this by adopting a
              tailored strategy.
              <span class="font-semibold text-[16px] leading-[150%] text-center text-gray-400">This
                ensures that your specific goals and requirements are
                met with precision and care.</span>
            </p>
          </div>
          <div id="section-1-button"
            class="flex gap-[10px] px-[32px] py-[16px] rounded-[100px] bg-[#0A59DD] shadow-[0_0_2px_0_#0000001A]">
            <button>
              <span class="w-[74px] h-[32px] text-[#FFFFFF]">Let’s talk ></span>
            </button>
          </div>
        </div>
      </section>
      <section id="container-2" class="h-[400px] gap-[32px] flex flex-col items-center mx-auto">
        <div id="benefits-title" class="flex justify-between items-center w-[992px] h-[38px]">
          <p class="font-bold text-[32px] leading-[120%] tracking-[-0.02em] text-[#1F1F1F]">
            Benefits
          </p>
          <a href="#" class="font-medium text-[16px] leading-[120%] tracking-[-0.02em] text-[#0A59DD]">Speak
            with an expert ></a>
        </div>
        <div id="benefits-containers" class="h-[330px] flex gap-[14px]">
          <div id="card-1"
            class="w-[319px] h-[330px] rounded-[20px] pt-[96px] pr-[84px] pb-[32px] pl-[84px] bg-[#F2F2F5]">
            <div class="flex flex-col gap-[16px]">
              <p id="card-1-title" class="font-bold text-[20px] leading-[150%] text-center text-[#818181]">
                Expert
              </p>
              <div id="card-1-img" class="flex justify-center">
                <img class="w-[60px] h-[60px]" src="{{ asset('images/solar_heart-bold.png') }}" alt="heart" />
              </div>

              <p id="card-1-subtitle" class="font-bold text-[20px] leading-[150%] text-center text-[#818181]">
                technical assistance
              </p>
            </div>
          </div>
          <div id="card-2"
            class="w-[319px] h-[330px] rounded-[20px] pt-[96px] pr-[84px] pb-[32px] pl-[84px] bg-[#F2F2F5]">
            <div class="w-[147px] gap-[16px]">
              <p id="card-2-title" class="font-bold text-[20px] leading-[150%] text-center text-[#818181]">
                Available
              </p>
              <p id="card-2-subtitle-1" class="font-bold text-[70px] leading-[120%] tracking-[-0.02em] text-[#1F1F1F]">
                24/7
              </p>
              <p id="card-2-subtitle-2" class="font-bold text-[20px] leading-[150%] text-center text-[#818181]">
                customer support
              </p>
            </div>
          </div>
          <div id="card-3" class="w-[321px] h-[330px] gap-[10px] rounded-[20px] p-[32px] relative bg-[#F2F2F5]">
            <div id="card-3-img-1" class="absolute top-[25px] right-[25px]">
              <img src="{{ asset('images/Icon.png') }}" alt="svg1" />
            </div>
            <p id="card-3-subtitle"
              class="absolute top-[144px] left-[55px] w-[205px] h-[48px] font-bold text-[20px] leading-[120%] text-center text-[#818181]">
              High customer satisfaction
            </p>
            <div id="card-3-img-2" class="absolute bottom-[25px] left-[25px]">
              <img src="{{ asset('images/Icon (1).png') }}" alt="svg2" />
            </div>
          </div>
        </div>
      </section>
      <section id="container-3" class="h-[797px] flex gap-[13px] pr-0 pl-[100px] mx-auto">
        <div class="flex flex-col gap-[64px]">
          <div id="container-3-left-side-container" class="gap-[24px]">
            <div class="flex flex-col gap-[24px]">
              <div id="container-3-title">
                <p class="font-bold text-[55px] leading-[120%] tracking-[-0.02em] text-[#1F1F1F]">
                  We prioritize
                </p>
                <p
                  class="font-bold text-[55px] leading-[120%] tracking-[-0.02em] text-center bg-gradient-to-br from-[#083982] to-[#2064B5] bg-clip-text text-transparent">
                  customer requests.
                </p>
              </div>
              <div id="container-3-subtitle">
                <p class="w-[303px] h-[48px] font-bold text-[16px] leading-[150%] text-[#818181]">
                  Ensuring swift and top-priority support for your needs.
                </p>
              </div>
              <div id="container-3-li" class="flex flex-col gap-[64px]">
                <div id="container-3-li-1" class="flex flex-row h-[84px] gap-[32px]">
                  <div class="w-[50px] h-[50px]">
                    <img src="{{ asset('images/arcticons_security.png') }}" alt="svg" />
                  </div>
                  <div class="w-[270px] h-[84px]">
                    <p class="font-bold text-[14px] leading-[150%]">
                      Priority service.<span class="font-semibold text-[14px] leading-[150%] text-[#818181]">
                        Your service requests are treated with the highest
                        priority. Customers will always receive a response to
                        requests within two hours.</span>
                    </p>
                  </div>
                </div>
                <div id="container-3-li-2" class="flex flex-row h-[84px] gap-[32px]">
                  <div class="w-[50px] h-[50px]">
                    <img src="{{ asset('images/bitcoin-icons_node-hardware-outline.png') }}" alt="bitcoin" />
                  </div>
                  <div class="w-[270px] h-[84px]">
                    <p class="font-bold text-[14px] leading-[150%]">
                      Monitoring & optimization.<span class="font-semibold text-[14px] leading-[150%] text-[#818181]">
                        Live monitoring ensures always-on web apps and
                        seamless user experiences by quickly identifying and
                        analyzing performance issues.</span>
                    </p>
                  </div>
                </div>
                <div id="container-3-li-3" class="flex flex-row h-[84px] gap-[32px]">
                  <div class="w-[50px] h-[50px]">
                    <img src="{{ asset('images/material-symbols-light_notifications-unread-outline-rounded.png') }}"
                      alt="material" />
                  </div>
                  <div class="w-[282px] h-[84px]">
                    <p class="font-bold text-[14px] leading-[150%]">
                      Software updates.
                      <span class="font-semibold text-[14px] leading-[150%] text-[#818181]">
                        Updates keep your software secure and fast. Our
                        support contracts ensure your business is always up to
                        date and ready to grow.</span>
                    </p>
                  </div>
                </div>
              </div>
              <div id="section-3-button"
                class="flex w-[143px] mt-[64px] h-[47] gap-[10px] px-[32px] py-[16px] rounded-[100px] bg-[#0A59DD] shadow-[0_0_2px_0_#0000001A]">
                <button>
                  <span class="w-[74px] h-[32px] text-[#FFFFFF]">Let’s talk ></span>
                </button>
              </div>
            </div>
          </div>
        </div>

        <div>
          <img src="{{ asset('images/Mask group.png') }}" alt="container-3-img" />
        </div>
      </section>
      <section id="container-4" class="h-[734px] mx-auto">
        <div class="gap-[10px]">
          <div id="container-4-title" class="flex flex-col items-center">
            <p class="font-bold text-[55px] leading-[120%] tracking-[-0.02em] text-[#1F1F1F]">
              Types of
            </p>
            <p
              class="font-bold text-[55px] leading-[120%] tracking-[-0.02em] text-center bg-gradient-to-br from-[#083982] to-[#2064B5] bg-clip-text text-transparent">
              maintenance
            </p>
          </div>
          <div id="container-4-subtitle">
            <p class="font-bold text-[14px] leading-[150%] flex flex-col items-center">
              Our support service guarantees that requests <br /><span
                class="font-semibold text-[14px] leading-[150%] text-[#818181]">are treated with the
                highest priority.</span>
            </p>
          </div>
          <div id="container-4-main-content"
            class="flex flex-row w-[986px] gap-[48px] h-[483px] mt-[64px] rounded-[20px] bg-[#F2F2F5]">
            <div class="mt-[84px] ml-[66px] gap-[120px]">
              <div id="container-4-left-side" class="flex flex-col w-[322px] h-[238px]">
                <details class="p-4 mb-2 group border-b border-b-[#D8D8D8]">
                  <summary class="flex justify-between items-center cursor-pointer font-bold">
                    Corrective maintenance
                    <span class="transition-transform duration-300 group-open:rotate-180"><img
                        src="{{ asset('images/Vector (1).png') }}" alt="vector" /></span>
                  </summary>
                  <p class="mt-2">
                    "Bug" maintenance, or corrective maintenance, fixes
                    user-reported errors and is the most urgent type,
                    addressing issues like security, compatibility, and
                    compliance.
                  </p>
                </details>

                <details class="p-4 mb-2 group border-b border-b-[#D8D8D8]">
                  <summary class="flex justify-between items-center cursor-pointer font-bold">
                    Preventive maintenance
                    <span class="transition-transform duration-300 group-open:rotate-180"><img
                        src="{{ asset('images/Vector (1).png') }}" alt="vector" /></span>
                  </summary>
                  <p class="mt-2">
                    Keeps equipment running smoothly and prevents unexpected
                    failures.
                  </p>
                </details>

                <details class="p-4 mb-2 group">
                  <summary class="flex justify-between items-center cursor-pointer font-bold">
                    Perfective maintenance
                    <span class="transition-transform duration-300 group-open:rotate-180"><img
                        src="{{ asset('images/Vector (1).png') }}" alt="vector" /></span>
                  </summary>
                  <p class="mt-2">Improves system performance.</p>
                </details>
              </div>
            </div>

            <div id="container-4-img" class="w-[480px] h-[327px] mt-[84px]">
              <img src="{{ asset('images/Container (4).png') }}" alt="img" />
            </div>
          </div>
        </div>
      </section>
      <section id="container-5" class="flex flex-col h-[632px] gap-[48px] items-center mx-auto mb-[80px]">
        <div id="container-5-content">
          <div id="container-5-outer-wrapper" class="flex flex-col gap-[64px]">
            <div id="container-5-title" class="gap-[10px] pl-[120px] pr-[120px] w-[1200px]">
              <h2 class="font-bold text-[55px] leading-[120%] tracking-[-0.02em]">
                Our process
              </h2>
            </div>
            <div id="container-5-li" class="flex flex-col gap-[48px] w-[1200px] pl-[120px] pr-[120px]">
              <div id="container-5-first-row" class="flex gap-[91px]">
                <div class="flex flex-col gap-[24px] w-[271px] h-[169]">
                  <div id="container-5-number-1"
                    class="justify-center align-center w-[40px] h-[40px] flex gap-[10px] rounded-[5px] p-[8px] bg-[#E4EFFC]">
                    <span class="font-bold text-[16px] leading-[120%] tracking-[-0.02em] text-[#0A59DD]">1.</span>
                  </div>
                  <div id="container-5-description" class="w-[271px] h-[105px]">
                    <p class="font-bold text-[14px] leading-[150%]">
                      Formal request.
                      <span class="font-semibold text-[14px] leading-[150%] text-[#818181]">After
                        receiving your request, we aim to quickly
                        implement the correct solution. We'll schedule a
                        meeting to discuss your software's current state and
                        potential factors.</span>
                    </p>
                  </div>
                </div>
                <div class="flex flex-col gap-[24px] w-[271px] h-[169]">
                  <div id="container-5-number-2"
                    class="justify-center align-center w-[40px] h-[40px] flex gap-[10px] rounded-[5px] p-[8px] bg-[#E4EFFC]">
                    <span class="font-bold text-[16px] leading-[120%] tracking-[-0.02em] text-[#0A59DD]">2.</span>
                  </div>
                  <div id="container-5-description-2" class="w-[259px] h-[105px]">
                    <p class="font-bold text-[14px] leading-[150%]">
                      System analysis.

                      <span class="font-semibold text-[14px] leading-[150%] text-[#818181]">Once
                        we understand the impacts, we assess your
                        systems to identify the root cause, reviewing code and
                        checking for outdated subscriptions and malware.</span>
                    </p>
                  </div>
                </div>
                <div class="flex flex-col gap-[24px] w-[271px] h-[169]">
                  <div id="container-5-number-3"
                    class="justify-center align-center w-[40px] h-[40px] flex gap-[10px] rounded-[5px] p-[8px] bg-[#E4EFFC]">
                    <span class="font-bold text-[16px] leading-[120%] tracking-[-0.02em] text-[#0A59DD]">3.</span>
                  </div>
                  <div id="container-5-description-2" class="w-[247px] h-[105px]">
                    <p class="font-bold text-[14px] leading-[150%]">
                      Solution evaluation.
                      <span class="font-semibold text-[14px] leading-[150%] text-[#818181]">Our
                        engineers identify solutions, scope affected
                        features, and review options with you to determine the
                        best resolution.</span>
                    </p>
                  </div>
                </div>
              </div>
              <div id="container-5-second-row" class="flex gap-[91px]">
                <div class="flex flex-col gap-[24px] w-[271px] h-[169]">
                  <div id="container-5-number-4"
                    class="justify-center align-center w-[40px] h-[40px] flex gap-[10px] rounded-[5px] p-[8px] bg-[#E4EFFC]">
                    <span class="font-bold text-[16px] leading-[120%] tracking-[-0.02em] text-[#0A59DD]">4.</span>
                  </div>
                  <div id="container-5-description-4" class="w-[263px] h-[126px]">
                    <p class="font-bold text-[14px] leading-[150%]">
                      Implementation.

                      <span class="font-semibold text-[14px] leading-[150%] text-[#818181]">Our
                        Technical Support Lead creates bug tickets for
                        immediate action. Using debugging tools and reviewing
                        logs, our team resolves each error.</span>
                    </p>
                  </div>
                </div>
                <div class="flex flex-col gap-[24px] w-[271px] h-[169]">
                  <div id="container-5-number-5"
                    class="justify-center align-center w-[40px] h-[40px] flex gap-[10px] rounded-[5px] p-[8px] bg-[#E4EFFC]">
                    <span class="font-bold text-[16px] leading-[120%] tracking-[-0.02em] text-[#0A59DD]">5.</span>
                  </div>
                  <div id="container-5-description-5" class="w-[247px] h-[105px]">
                    <p class="font-bold text-[14px] leading-[150%]">
                      Testing.

                      <span class="font-semibold text-[14px] leading-[150%] text-[#818181]">After
                        verifying stability in our test environment, we
                        deploy bug fixes to production. We then request your
                        sign-off before closing the request.</span>
                    </p>
                  </div>
                </div>
                <div class="flex flex-col gap-[24px] w-[229px] h-[169]">
                  <div id="container-5-number-6"
                    class="justify-center align-center w-[40px] h-[40px] flex gap-[10px] rounded-[5px] p-[8px] bg-[#E4EFFC]">
                    <span class="font-bold text-[16px] leading-[120%] tracking-[-0.02em] text-[#0A59DD]">6.</span>
                  </div>
                  <div id="container-5-description-6" class="w-[229px] h-[105px]">
                    <p class="font-bold text-[14px] leading-[150%]">
                      Final steps.
                      <span class="font-semibold text-[14px] leading-[150%] text-[#818181]">Once
                        you approve the changes, we monitor the live
                        environment to ensure smooth operation and remain
                        available<br />
                        for further support.</span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="container-5-button"
          class="flex w-[143px] mt-[64px] h-[47] gap-[10px] px-[32px] py-[16px] rounded-[100px] bg-[#0A59DD] shadow-[0_0_2px_0_#0000001A]">
          <button>
            <span class="w-[74px] h-[32px] text-[#FFFFFF]">Let’s talk ></span>
          </button>
        </div>
      </section>
      <section id="container-6" class="flex flex-col h-[984px] mx-auto bg-[#F2F2F5] w-[100%]">
        <div id="container-6-wrapper" class="flex flex-col gap-[64px] mt-[78px]">
          <div id="container-6-title" class="flex flex-col items-center">
            <p class="font-bold text-[55px] leading-[120%] tracking-[-0.02em] text-[#1F1F1F]">
              Find the right
            </p>
            <p
              class="font-bold text-[55px] leading-[120%] tracking-[-0.02em] text-center bg-gradient-to-br from-[#083982] to-[#2064B5] bg-clip-text text-transparent">
              support plan for you.
            </p>
          </div>
          <div id="container-6-carousel" class="h-[611px] gap-[16px] flex flex-row align-center justify-center">
            <div id="carousel-1"
              class="w-[323px] h-[611px] flex gap-[10px] rounded-[20px] pt-[32px] px-[32px] pb-[24px] bg-white">
              <div id="carouseol-1-inner-wrapper">
                <div id="container-6-main-content" class="flex flex-col gap-[40px]">
                  <div id="container-6-contact-us" class="flex flex-col gap-[24px]">
                    <p class="font-bold text-[32px] leading-[120%] tracking-[-0.02em] text-[#1F1F1F]">
                      Enterprise
                    </p>
                    <p class="font-bold text-[14px] leading-[150%] text-[#818181]">
                      Support and updates for your peace of mind.
                    </p>

                    <button id="container-6-button-2"
                      class="w-[fit-content] gap-[10px] py-[8px] px-[24px] rounded-[100px] bg-[#0A59DD] shadow-[0_0_2px_0_#0000001A]">
                      <span class="text-[#FFFFFF]">Contact us ></span>
                    </button>
                  </div>
                  <div id="container-6-features" class="flex flex-col gap-[16px]">
                    <div class="flex gap-[8px]">
                      <img src="{{ asset('images/quill_checkmark.png') }}" alt="vector2" />
                      <p class="font-semibold text-[12px] leading-[20px] text-[#1F1F1F]">
                        Free SSL Certificate
                      </p>
                    </div>
                    <div class="flex gap-[8px]">
                      <img src="{{ asset('images/quill_checkmark.png') }}" alt="vector2" />
                      <p class="font-semibold text-[12px] leading-[20px] text-[#1F1F1F]">
                        Free CDN
                      </p>
                    </div>
                    <div class="flex gap-[8px]">
                      <img src="{{ asset('images/quill_checkmark.png') }}" alt="vector2" />
                      <p class="font-semibold text-[12px] leading-[20px] text-[#1F1F1F]">
                        Certificates & software updates
                      </p>
                    </div>
                    <div class="flex gap-[8px]">
                      <img class="h-[20px]" src="{{ asset('images/quill_checkmark.png') }}" alt="vector2" />
                      <p class="w-[205px] h-[40px] font-semibold text-[12px] leading-[20px] text-[#1F1F1F]">
                        Performance scans and optimization suggestions
                      </p>
                    </div>
                    <div class="flex gap-[8px]">
                      <img src="{{ asset('images/quill_checkmark.png') }}" alt="vector2" />
                      <p class="font-semibold text-[12px] leading-[20px] text-[#1F1F1F]">
                        SEO consulting
                      </p>
                    </div>
                    <div class="flex gap-[8px]">
                      <img src="{{ asset('images/quill_checkmark.png') }}" alt="vector2" />
                      <p class="font-semibold text-[12px] leading-[20px] text-[#1F1F1F]">
                        Weekly backups
                      </p>
                    </div>
                    <div class="flex gap-[8px]">
                      <img src="{{ asset('images/quill_checkmark.png') }}" alt="vector2" />
                      <p class="font-semibold text-[12px] leading-[20px] text-[#1F1F1F]">
                        Updates to web content as needed
                      </p>
                    </div>
                  </div>
                  <div id="container-6-link"
                    class="font-medium text-[14px] leading-[120%] tracking-[-0.02em] text-center text-[#0A59DD]">
                    <a href="#">See all features ></a>
                  </div>
                </div>
              </div>
            </div>
            <div id="carousel-2"
              class="w-[323px] h-[611px] flex gap-[10px] rounded-[20px] pt-[32px] px-[32px] pb-[24px] bg-white">
              <div id="carouseol-2-inner-wrapper">
                <div id="container-6-main-content-2" class="flex flex-col gap-[40px]">
                  <div id="container-6-contact-us-2" class="flex flex-col gap-[24px]">
                    <p class="font-bold text-[32px] leading-[120%] tracking-[-0.02em] text-[#1F1F1F]">
                      Professional
                    </p>
                    <p class="font-bold text-[14px] leading-[150%] text-[#818181]">
                      Support and updates for your peace of mind.
                    </p>

                    <button id="container-6-button-2"
                      class="w-[fit-content] gap-[10px] py-[8px] px-[24px] rounded-[100px] bg-[#0A59DD] shadow-[0_0_2px_0_#0000001A]">
                      <span class="text-[#FFFFFF]">Contact us ></span>
                    </button>
                  </div>
                  <div id="container-6-features-2" class="flex flex-col gap-[16px]">
                    <div class="flex gap-[8px]">
                      <img src="{{ asset('images/quill_checkmark.png') }}" alt="vector2" />
                      <p class="font-semibold text-[12px] leading-[20px] text-[#1F1F1F]">
                        Free SSL Certificate
                      </p>
                    </div>
                    <div class="flex gap-[8px]">
                      <img src="{{ asset('images/quill_checkmark.png') }}" alt="vector2" />
                      <p class="font-semibold text-[12px] leading-[20px] text-[#1F1F1F]">
                        Certificates & software updates
                      </p>
                    </div>
                    <div class="flex gap-[8px]">
                      <img src="{{ asset('images/quill_checkmark.png') }}" alt="vector2" />
                      <p class="font-semibold text-[12px] leading-[20px] text-[#1F1F1F]">
                        Security monitoring
                      </p>
                    </div>
                    <div class="flex gap-[8px]">
                      <img class="h-[20px]" src="{{ asset('images/quill_checkmark.png') }}" alt="vector2" />
                      <p class="w-[205px] h-[40px] font-semibold text-[12px] leading-[20px] text-[#1F1F1F]">
                        Performance scans and optimization suggestions
                      </p>
                    </div>
                    <div class="flex gap-[8px]">
                      <img src="{{ asset('images/quill_checkmark.png') }}" alt="vector2" />
                      <p class="font-semibold text-[12px] leading-[20px] text-[#1F1F1F]">
                        Weekly backups
                      </p>
                    </div>
                    <div class="flex gap-[8px]">
                      <img src="{{ asset('images/quill_checkmark.png') }}" alt="vector2" />
                      <p class="font-semibold text-[12px] leading-[20px] text-[#1F1F1F]">
                        Server maintenance
                      </p>
                    </div>
                    <div class="flex gap-[8px]">
                      <img src="{{ asset('images/quill_checkmark.png') }}" alt="vector2" />
                      <p class="font-semibold text-[12px] leading-[20px] text-[#1F1F1F]">
                        Updates to web content as needed
                      </p>
                    </div>
                  </div>
                  <div id="container-6-link-2"
                    class="font-medium text-[14px] leading-[120%] tracking-[-0.02em] text-center text-[#0A59DD]">
                    <a href="#">See all features ></a>
                  </div>
                </div>
              </div>
            </div>
            <div id="carousel-3"
              class="w-[323px] h-[611px] flex gap-[10px] rounded-[20px] pt-[32px] px-[32px] pb-[24px] bg-white">
              <div id="carouseol-3-inner-wrapper">
                <div id="container-6-main-content-3" class="flex flex-col gap-[40px]">
                  <div id="container-6-contact-us-3" class="flex flex-col gap-[24px]">
                    <p class="font-bold text-[32px] leading-[120%] tracking-[-0.02em] text-[#1F1F1F]">
                      Essential
                    </p>
                    <p class="font-bold text-[14px] leading-[150%] text-[#818181]">
                      Support and updates for your peace of mind.
                    </p>

                    <button id="container-6-button-3"
                      class="w-[fit-content] gap-[10px] py-[8px] px-[24px] rounded-[100px] bg-[#0A59DD] shadow-[0_0_2px_0_#0000001A]">
                      <span class="text-[#FFFFFF]">Contact us ></span>
                    </button>
                  </div>
                  <div id="container-6-features-3" class="flex flex-col gap-[16px]">
                    <div class="flex gap-[8px]">
                      <img src="{{ asset('images/quill_checkmark.png') }}" alt="vector2" />
                      <p class="font-semibold text-[12px] leading-[20px] text-[#1F1F1F]">
                        Certificates & software updates
                      </p>
                    </div>
                    <div class="flex gap-[8px]">
                      <img src="{{ asset('images/quill_checkmark.png') }}" alt="vector2" />
                      <p class="font-semibold text-[12px] leading-[20px] text-[#1F1F1F]">
                        Performance scans
                      </p>
                    </div>
                    <div class="flex gap-[8px]">
                      <img src="{{ asset('images/quill_checkmark.png') }}" alt="vector2" />
                      <p class="font-semibold text-[12px] leading-[20px] text-[#1F1F1F]">
                        Weekly backups
                      </p>
                    </div>
                    <div class="flex gap-[8px]">
                      <img class="h-[20px]" src="{{ asset('images/quill_checkmark.png') }}" alt="vector2" />
                      <p class="font-semibold text-[12px] leading-[20px] text-[#1F1F1F]">
                        Server maintenance
                      </p>
                    </div>
                    <div class="flex gap-[8px]">
                      <img src="{{ asset('images/quill_checkmark.png') }}" alt="vector2" />
                      <p class="font-semibold text-[12px] leading-[20px] text-[#1F1F1F]">
                        Updates to web content as needed
                      </p>
                    </div>
                    <div class="flex gap-[8px]">
                      <img src="{{ asset('images/quill_checkmark.png') }}" alt="vector2" />
                      <p class="font-semibold text-[12px] leading-[20px] text-[#1F1F1F]">
                        Response within 72 hours
                      </p>
                    </div>
                    <div class="flex gap-[8px]">
                      <img src="{{ asset('images/quill_checkmark.png') }}" alt="vector2" />
                      <p class="font-semibold text-[12px] leading-[20px] text-[#1F1F1F]">
                        3 hours of support time
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
  </div>
  <footer>
    <div class="h-[278px] gap-[10px] py-[31px] px-[120px] bg-white border-t border-t-[#E3E3E3]">
      <div id="footer-wrapper" class="flex justify-between">
        <div id="footer-first-column" class="flex flex-col gap-[148px]">
          <div id="footer-logo" class="flex flex-row gap-[16px]">
            <img src="{{ asset('images/Frame.svg') }}" alt="footer-logo" />
            <p class="font-medium text-[12px] leading-[150%] text-center text-[#1F1F1F]">
              @ 2025
            </p>
          </div>
          <div id="footer-platform-links" class="flex gap-[8px]">
            <img class="w-[12px] h-[12px] mt-[4px]" src="{{ asset('images/la_facebook-f.png') }}" alt="fb-logo" />
            <img class="w-[12px] h-[12px] mt-[4px]" src="{{ asset('images/Vector (4).png') }}" alt="x-logo" />
            <img class="mt-[2px]" src="{{ asset('images/formkit_linkedin.png') }}" alt="linkedin-logo" />
          </div>
        </div>

        <div id="footer-second-column" class="flex flex-col gap-[16px]">
          <div id="footer-second-column-title">
            <p class="font-semibold text-[14px] leading-[150%] text-[#1F1F1F]">
              Products
            </p>
          </div>
          <div id="footer-second-column-subtitles" class="flex flex-col gap-[16px]">
            <p class="font-normal text-[12px] leading-[150%] text-[#1F1F1F]">
              E-commerce
            </p>
            <p class="font-normal text-[12px] leading-[150%] text-[#1F1F1F]">
              Websites
            </p>
            <p class="font-normal text-[12px] leading-[150%] text-[#1F1F1F]">
              Apps
            </p>
            <p class="font-normal text-[12px] leading-[150%] text-[#1F1F1F]">
              Fintech
            </p>
            <p class="font-normal text-[12px] leading-[150%] text-[#1F1F1F]">
              Support
            </p>
          </div>
        </div>
        <div id="footer-third-column" class="flex flex-col gap-[16px]">
          <div id="footer-third-column-title">
            <p class="font-semibold text-[14px] leading-[150%] text-[#1F1F1F]">
              Company
            </p>
          </div>
          <div id="footer-third-column-subtitles" class="flex flex-col gap-[16px]">
            <p class="font-normal text-[12px] leading-[150%] text-[#1F1F1F]">
              About us
            </p>
            <p class="font-normal text-[12px] leading-[150%] text-[#1F1F1F]">
              Insights
            </p>
            <p class="font-normal text-[12px] leading-[150%] text-[#1F1F1F]">
              FAQ
            </p>
            <p class="font-normal text-[12px] leading-[150%] text-[#1F1F1F]">
              Careers
            </p>
            <p class="font-normal text-[12px] leading-[150%] text-[#1F1F1F]">
              Privacy policy
            </p>
          </div>
        </div>
        <div id="footer-forth-column" class="flex flex-col gap-[16px]">
          <div id="footer-forth-column-title">
            <p class="font-semibold text-[14px] leading-[150%] text-[#1F1F1F]">
              Contact
            </p>
          </div>
          <div id="footer-forth-column-subtitles" class="flex flex-col gap-[16px]">
            <p class="font-normal text-[12px] leading-[150%] text-[#1F1F1F]">
              Let's talk
            </p>
            <p class="font-normal text-[12px] leading-[150%] text-[#1F1F1F]">
              hello@labforty.com
            </p>
            <p class="font-normal text-[12px] leading-[150%] text-[#1F1F1F]">
              Meet us on Teams
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>