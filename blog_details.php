
<!DOCTYPE php>
<php lang="en">
  <head>
    <!-- required meta -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- #keywords -->
    <meta name="keywords" content="boot, Bootstrap, Protfolily php Template" />
    <!-- #description -->
    <meta
      name="description"
      content="Protfolily - Responsive Personal Portfolio & Resume php Template"
    />
    <!-- swiper  -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <!-- #title -->
    <title>Portfolify - Personal Portfolio & Resume php Template</title>
    <!-- #favicon -->
    <link
      rel="shortcut icon"
      href="assets/images/logo.png"
      type="image/x-icon"
    />
    <!-- ==== css dependencies start ==== -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- AOS  -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- ICON  -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <!-- lightbox  -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css"
    />
  </head>
  <body>
    <!-- don't remove this  -->
    <svg
      xmlns="http://www.w3.org/2000/svg"
      width="11"
      height="15"
      viewBox="0 0 11 15"
      fill="none"
      class="d-none"
    >
      <g clip-path="url(#clip0_3569_434)">
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M5.69145 8.43063L1.72801 5.49387L5.69145 2.54023V0L0 4.21303V6.75919L5.69145 10.9887V8.43063Z"
          fill="rgba(var(--p1))"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M1.72801 5.49387L5.69145 2.54023V0L0 4.21303V6.75919L1.72801 5.49387Z"
          fill="rgba(var(--p1))"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M4.86328 6.5702L8.82672 9.5065L4.86328 12.4606V15.0004L10.5552 10.7864V8.24163L4.86328 4.01172V6.5702Z"
          fill="rgba(var(--p1))"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M4.86328 6.5702L8.82672 9.5065L10.5552 10.7864V8.24163L4.86328 4.01172V6.5702Z"
          fill="rgba(var(--p1))"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M8.72466 2.00391C9.52091 2.00391 10.1657 2.64912 10.1657 3.44491C10.1657 4.24115 9.52091 4.88591 8.72466 4.88591C7.92841 4.88591 7.2832 4.2407 7.2832 3.44491C7.2832 2.64912 7.92841 2.00391 8.72466 2.00391Z"
          fill="rgba(var(--p1))"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M1.83013 12.9972C1.03388 12.9972 0.388672 12.352 0.388672 11.5562C0.388672 10.7604 1.03388 10.1152 1.82967 10.1152C2.62546 10.1152 3.27067 10.76 3.27067 11.5562C3.27067 12.3525 2.62592 12.9972 1.82967 12.9972H1.83013Z"
          fill="rgba(var(--p1))"
        />
      </g>
      <defs>
        <clipPath>
          <rect width="10.5561" height="15" fill="white" />
        </clipPath>
      </defs>
    </svg>
    <!-- preloder  srart -->
    <div class="loader-wrapper">
      <div class="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
    <!-- preloder  end -->

    <div class="d-flex gap-6">
      <!-- sidebar start -->
      <div class="side-menu">
      <!-- sidebar-btn  -->
      <div class="sidebar-btn close-btn cursor-pointer d-block d-lg-none">
        <i class="ph ph-x fs-two p1-color"></i>
      </div>

      <div class="d-flex">
        <div class="side-menu-left">
          <div>
            <div
              class="d-flex flex-column gap-8 justify-content-center align-items-center mt-6">
              <a href="index.html" class="side-icon p1-color bgn2-color brn4">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="11"
                  height="15"
                  viewBox="0 0 11 15"
                  fill="none">
                  <g clip-path="url(#clip0_3569_434)">
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M5.69145 8.43063L1.72801 5.49387L5.69145 2.54023V0L0 4.21303V6.75919L5.69145 10.9887V8.43063Z"
                      fill="currentColor" />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M1.72801 5.49387L5.69145 2.54023V0L0 4.21303V6.75919L1.72801 5.49387Z"
                      fill="currentColor" />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M4.86328 6.5702L8.82672 9.5065L4.86328 12.4606V15.0004L10.5552 10.7864V8.24163L4.86328 4.01172V6.5702Z"
                      fill="currentColor" />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M4.86328 6.5702L8.82672 9.5065L10.5552 10.7864V8.24163L4.86328 4.01172V6.5702Z"
                      fill="currentColor" />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M8.72466 2.00391C9.52091 2.00391 10.1657 2.64912 10.1657 3.44491C10.1657 4.24115 9.52091 4.88591 8.72466 4.88591C7.92841 4.88591 7.2832 4.2407 7.2832 3.44491C7.2832 2.64912 7.92841 2.00391 8.72466 2.00391Z"
                      fill="currentColor" />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M1.83013 12.9972C1.03388 12.9972 0.388672 12.352 0.388672 11.5562C0.388672 10.7604 1.03388 10.1152 1.82967 10.1152C2.62546 10.1152 3.27067 10.76 3.27067 11.5562C3.27067 12.3525 2.62592 12.9972 1.82967 12.9972H1.83013Z"
                      fill="currentColor" />
                  </g>
                  <defs>
                    <clipPath>
                      <rect width="10.5561" height="15" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
              </a>
              <a href="checkout.php" class="position-relative">
                <div class="side-icon bg1-color">
                  <i class="ph ph-shopping-cart n11-color"></i>
                </div>
                <div class="cart-counter">
                  <span class="n1-color">02</span>
                </div>
              </a>
              <div class="d-flex flex-column align-items-center gap-1">
                <span class="toggle_name fs-eleven n5-color">DarkMode</span>
                <button class="side-icon bg1-color mood_toggle">
                  <i class="mood_icon ph-fill ph-moon fs-six n11-color"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="side-menu-right overflow-y-auto">
          <div
            class="d-flex flex-column gap-6 justify-content-between py-10 px-5 bgn2-color h-100">
            <div class="">
              <div class="sidebar-profile">
                <div class="position-relative">
                  <div
                    class="profile-img1 d-flex justify-content-center overflow-hidden">
                    <img
                      src="./assets/images/LinkedIn Profile Picture.png"
                      alt="user"
                      class="" />
                  </div>
                  <span class="thumb">👋</span>
                </div>

                <h4 class="n5-color fw-semibold fs-five mt-2 text-center">
                  Alex Mugo
                </h4>
                <span class="n5-color fs-nine d-block text-center">Data Analyst | Python, Excel, SQL, Tableau, Power BI Specialist | Turning Complex Data into Meaningful Insights</span>
                <div
                  class="d-flex justify-content-center gap-2 align-items-center mt-4">
                  <a href="javascript:void(0)" class="social-icon p1-color">
                    <i class="ph ph-facebook-logo"></i>
                  </a>
                  <a href="javascript:void(0)" class="social-icon p1-color">
                    <i class="ph ph-instagram-logo"></i>
                  </a>
                  <a href="javascript:void(0)" class="social-icon p1-color">
                    <i class="ph ph-x-logo"></i>
                  </a>
                  <a href="javascript:void(0)" class="social-icon p1-color">
                    <i class="ph ph-linkedin-logo"></i>
                  </a>
                </div>
              </div>
              <div class="line-divider my-4 my-md-8"></div>

              <div class="menu-list">
                <ul class="d-flex flex-column gap-3">
                  <li class="rounded-3 bg1-color">
                    <a
                      href="index.html"
                      class="d-flex align-items-center gap-2 n11-color fs-eight px-3 py-2"><i class="ph ph-user fs-six"></i> About Me</a>
                  </li>

                  <li class="rounded-3">
                    <a
                      href="portfolio.php"
                      class="d-flex justify-content-between align-items-center">
                      <div
                        class="d-flex align-items-center gap-2 n5-color fs-eight px-3 py-2">
                        <i class="ph ph-code-block fs-six"></i> Portfolio
                      </div>
                      <span
                        class="n5-color bg2-color fs-ten px-1 pt-1 rounded-2 me-3">16</span>
                    </a>
                  </li>
                  <li class="rounded-3">
                    <a
                      href="price.php"
                      class="d-flex align-items-center gap-2 n5-color fs-eight px-3 py-2"><i class="ph ph-briefcase fs-six"></i>Services &
                      Pricing</a>
                  </li>
                  <li class="rounded-3">
                    <a
                      href="resume.php"
                      class="d-flex align-items-center gap-2 n5-color fs-eight px-3 py-2"><i class="ph ph-notebook fs-six"></i> Resume</a>
                  </li>
                  <li class="rounded-3">
                    <a
                      href="products.php"
                      class="d-flex align-items-center gap-2 n5-color fs-eight px-3 py-2"><i class="ph ph-shopping-bag fs-six"></i>Products</a>
                  </li>
                  <li class="rounded-3">
                    <a
                      href="blog.php"
                      class="d-flex align-items-center gap-2 n5-color fs-eight px-3 py-2"><i class="ph ph-newspaper-clipping fs-six"></i>Blog</a>
                  </li>
                  <li class="rounded-3">
                    <a
                      href="contact.php"
                      class="d-flex align-items-center gap-2 n5-color fs-eight px-3 py-2"><i class="ph ph-envelope fs-six"></i>Contact</a>
                  </li>
                </ul>
              </div>
            </div>
            <a
              href="contact.php"
              class="primary-btn fw-medium px-3 px-md-6 py-2 py-md-4 rounded-pill d-flex align-items-center gap-2 mx-auto">
              <i class="ph ph-paper-plane-tilt"></i>Hire Me
            </a>
          </div>
        </div>
      </div>
    </div>
      <!-- sidebar end -->

      <!-- main content -->
      <div class="main-content w-100">
        <!-- top header  -->
        <div
          class="w-100 bgn1-color p-3 position-fixed z-3 top-0 d-lg-none d-flex align-items-center justify-content-between br-bottom-n5 box-shadow1"
        >
          <a href="index.html" class="side-icon bgn2-color brn4">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="11"
              height="15"
              viewBox="0 0 11 15"
              fill="none"
            >
              <g clip-path="url(#clip0_3569_434)">
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M5.69145 8.43063L1.72801 5.49387L5.69145 2.54023V0L0 4.21303V6.75919L5.69145 10.9887V8.43063Z"
                  fill="rgba(var(--p1))"
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M1.72801 5.49387L5.69145 2.54023V0L0 4.21303V6.75919L1.72801 5.49387Z"
                  fill="rgba(var(--p1))"
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M4.86328 6.5702L8.82672 9.5065L4.86328 12.4606V15.0004L10.5552 10.7864V8.24163L4.86328 4.01172V6.5702Z"
                  fill="rgba(var(--p1))"
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M4.86328 6.5702L8.82672 9.5065L10.5552 10.7864V8.24163L4.86328 4.01172V6.5702Z"
                  fill="rgba(var(--p1))"
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M8.72466 2.00391C9.52091 2.00391 10.1657 2.64912 10.1657 3.44491C10.1657 4.24115 9.52091 4.88591 8.72466 4.88591C7.92841 4.88591 7.2832 4.2407 7.2832 3.44491C7.2832 2.64912 7.92841 2.00391 8.72466 2.00391Z"
                  fill="rgba(var(--p1))"
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M1.83013 12.9972C1.03388 12.9972 0.388672 12.352 0.388672 11.5562C0.388672 10.7604 1.03388 10.1152 1.82967 10.1152C2.62546 10.1152 3.27067 10.76 3.27067 11.5562C3.27067 12.3525 2.62592 12.9972 1.82967 12.9972H1.83013Z"
                  fill="rgba(var(--p1))"
                />
              </g>
              <defs>
                <clipPath>
                  <rect width="10.5561" height="15" fill="white" />
                </clipPath>
              </defs>
            </svg>
          </a>

          <div class="d-flex gap-3 align-items-center">
            <a href="checkout.php" class="position-relative">
              <div class="side-icon bg1-color">
                <i class="ph ph-shopping-cart n11-color"></i>
              </div>
              <div class="cart-counter-header">
                <span class="n1-color">02</span>
              </div>
            </a>
            <button class="side-icon bg1-color mood_toggle">
              <i class="mood_icon ph-fill ph-moon fs-six n11-color"></i>
            </button>
          </div>
        </div>
        <!-- bottom header  -->
        <div
          class="w-100 bgn1-color p-3 position-fixed z-3 bottom-0 d-block d-lg-none br-top-n5 box-shadow1"
        >
          <div class="header-bottom-menu w-full">
            <ul class="d-flex gap-1 align-items-center justify-content-between">
              <li>
                <a
                  href="index.html"
                  class="d-flex align-items-center gap-2 n5-color fs-eight p-2"
                >
                  <span
                    class="fs-five d-flex align-items-center justify-content-center"
                  >
                    <i class="ph-fill ph-user"></i>
                  </span>
                  <span class="d-none d-md-block">About Me</span></a
                >
              </li>
              <li>
                <a
                  href="portfolio.php"
                  class="d-flex justify-content-between align-items-center"
                >
                  <div
                    class="d-flex align-items-center gap-2 n5-color fs-eight p-2"
                  >
                    <span
                      class="fs-five d-flex align-items-center justify-content-center"
                    >
                      <i class="ph-fill ph-code-block"></i>
                    </span>
                    <span class="d-none d-md-block">Portfolio</span>
                  </div>
                  <span
                    class="n5-color bg2-color fs-ten px-1 pt-1 rounded-2 me-3 d-none d-md-block"
                    >16</span
                  >
                </a>
              </li>
              <li>
                <a
                  href="price.php"
                  class="d-flex align-items-center gap-2 n5-color fs-eight p-2"
                >
                  <span
                    class="fs-five d-flex align-items-center justify-content-center"
                  >
                    <i class="ph-fill ph-briefcase"></i>
                  </span>
                  <span class="d-none d-md-block">Pricing</span>
                </a>
              </li>
              <li>
                <a
                  href="resume.php"
                  class="d-flex align-items-center gap-2 n5-color fs-eight p-2"
                >
                  <span
                    class="fs-five d-flex align-items-center justify-content-center"
                    ><i class="ph-fill ph-notebook fs-six"></i
                  ></span>
                  <span class="d-none d-md-block">Resume</span>
                </a>
              </li>
              <li>
                <a
                  href="products.php"
                  class="d-flex align-items-center gap-2 n5-color fs-eight p-2"
                >
                  <span
                    class="fs-five d-flex align-items-center justify-content-center"
                  >
                    <i class="ph-fill ph-shopping-bag"></i>
                  </span>
                  <span class="d-none d-md-block">Products</span>
                </a>
              </li>
              <li class="rounded-3 bg1-color">
                <a
                  href="blog.php"
                  class="d-flex align-items-center gap-2 n11-color fs-eight p-2"
                >
                  <span
                    class="fs-five d-flex align-items-center justify-content-center"
                  >
                    <i class="ph-fill ph-newspaper-clipping"></i>
                  </span>
                  <span class="d-none d-md-block">Blog</span>
                </a>
              </li>
              <li>
                <a
                  href="contact.php"
                  class="d-flex align-items-center gap-2 n5-color fs-eight p-2"
                >
                  <span
                    class="fs-five d-flex align-items-center justify-content-center"
                    ><i class="ph-fill ph-envelope"></i
                  ></span>
                  <span class="d-none d-md-block">Contact</span>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <!-- color palettes btns -->
        <div class="color-switcher">
          <button class="switcher-btn">
            <i class="ph ph-gear-six"></i>
          </button>
          <div class="pallates box-shadow2 brn4">
            <div class="d-flex gap-2">
              <button
                class="color-btn bg-color1"
                data-color="120, 171, 168"
              ></button>
              <button
                class="color-btn bg-color2"
                data-color="255, 145, 251"
              ></button>
              <button
                class="color-btn bg-color3"
                data-color="253, 187, 46"
              ></button>
            </div>
            <div class="d-flex gap-2 mt-2">
              <button
                class="color-btn bg-color4"
                data-color=" 82, 113, 255"
              ></button>
              <button
                class="color-btn bg-color5"
                data-color=" 0, 255, 255"
              ></button>
              <button
                class="color-btn bg-color6"
                data-color="84, 182, 137"
              ></button>
            </div>
          </div>
        </div>

        <!-- Latest Blog Posts section start -->
        <section class="blog-details-section pt-120 pb-120 mt-10 mt-lg-0">
          <div class="container">
            <div class="mb-8 mb-md-15">
              <div data-aos="fade-left">
                <h3 class="n5-color fs-one">
                  Why Every Developer Should Have A Blog
                </h3>
                <div
                  class="d-flex flex-wrap align-items-center gap-2 gap-md-3 mt-3"
                >
                  <span class="n3-color fs-eight"
                    >Published <span class="n4-color">2</span> days ago</span
                  >
                  <ul class="d-flex align-items-center gap-3">
                    <li class="n3-color fs-eight">
                      <span class="n4-color">5</span> min read
                    </li>
                    <li class="n3-color fs-eight">
                      <span class="n4-color">2</span> comments
                    </li>
                  </ul>
                </div>
              </div>
              <div class="my-5 my-md-10 overflow-hidden">
                <img
                  src="./assets/images/blog9.png"
                  alt="..."
                  class="blog-details-img"
                />
              </div>

              <p class="details-description n5-color fs-eight">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                penatibus et magnis dis parturient montes, nascetur ridiculus
                mus. Donec quam felis, ultricies nec, pellentesque eu, pretium
                quis, sem. Nulla consequat massa quis enim. Donec pede justo,
                fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo,
                rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum
                felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.
                Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.
                Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac,
                enim.
              </p>
            </div>
            <div data-aos="fade-up" class="mb-8 mb-md-15">
              <h3 class="details-description n5-color fs-two">
                Code Block Example
              </h3>
              <p class="details-description n5-color fs-eight my-3 my-md-5">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit lobortis
                arcu enim urna adipiscing praesent velit viverra sit semper
                lorem eu cursus vel hendrerit elementum morbi curabitur etiam
                nibh justo, lorem aliquet donec sed sit mi dignissim at ante
                massa mattis.
              </p>
              <div class="overflow-hidden">
                <img
                  src="./assets/images/blog7.png"
                  alt="..."
                  class="blog-details-img"
                />
              </div>
            </div>

            <div data-aos="fade-up" class="details-description mb-8 mb-md-15">
              <h3 class="n5-color fs-two">Typography</h3>
              <p class="n5-color fs-eight my-3 my-md-5">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit lobortis
                arcu enim urna adipiscing praesent velit viverra sit semper
                lorem eu cursus vel hendrerit elementum morbi curabitur etiam
                nibh justo, lorem aliquet donec sed sit mi dignissim at ante
                massa mattis.
              </p>
              <h5 class="n5-color fs-four fw-semibold mb-3 mb-md-5">
                Bullet Points:
              </h5>
              <ul class="ps-4 ps-md-8">
                <li class="n4-color fs-seven mb-3">
                  Lorem ipsum dolor sit amet, consectetuer.
                </li>
                <li class="n4-color fs-seven mb-3">
                  Aenean commodo ligula eget dolor.
                </li>
                <li class="n4-color fs-seven">
                  Etiam ultricies nisi vel augue.
                </li>
              </ul>
            </div>

            <div data-aos="fade-up" class="details-description mb-8 mb-md-15">
              <h3 class="n5-color fs-two">Quote Example:</h3>
              <p class="n5-color fs-eight my-3 my-md-5">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit lobortis
                arcu enim urna adipiscing praesent velit viverra sit semper
                lorem eu cursus vel hendrerit elementum morbi curabitur etiam
                nibh justo, lorem aliquet donec sed sit mi dignissim at ante
                massa mattis.
              </p>
              <h5 class="n5-color fs-four fw-semibold mb-3 mb-md-5">
                Bullet Points:
              </h5>
              <ul class="ps-4 ps-md-8">
                <li class="n4-color fs-seven mb-3">
                  Lorem ipsum dolor sit amet, consectetuer.
                </li>
                <li class="n4-color fs-seven mb-3">
                  Aenean commodo ligula eget dolor.
                </li>
                <li class="n4-color fs-seven">
                  Etiam ultricies nisi vel augue.
                </li>
              </ul>
            </div>

            <div
              data-aos="fade-up"
              class="details-description mb-8 mb-md-15 px-4 px-sm-8 px-md-15 py-5 py-md-10 bgn2-color br-left-p1"
            >
              <h4 class="n5-color fs-five fw-medium">
                You might not think that programmers are artists, but
                programming is an extremely creative profession. It's
                logic-based creativity.
              </h4>
              <div
                class="d-flex gap-2 gap-md-3 align-items-center mt-3 mt-md-6"
              >
                <div class="line3"></div>
                <span class="n4-color fs-eight">John Romero</span>
              </div>
            </div>

            <div data-aos="fade-up" class="mb-8 mb-md-15">
              <h3 class="details-description n5-color fs-two">Video Example</h3>
              <p class="details-description n5-color fs-eight my-3 my-md-5">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit lobortis
                arcu enim urna adipiscing praesent velit viverra sit semper
                lorem eu cursus vel hendrerit elementum morbi curabitur etiam
                nibh justo, lorem aliquet donec sed sit mi dignissim at ante
                massa mattis.
              </p>
              <div class="overflow-hidden position-relative">
                <img
                  src="./assets/images/blog2.png"
                  alt="..."
                  class="blog-details-img"
                />
                <!-- <div class="video-btn">
                  <a
                    href="https://www.youtube.com/watch?v=AVHozwCteL4"
                    class="glightbox3 display-two"
                  >
                    <i class="ph-fill ph-play-circle"></i>
                  </a>
                </div> -->

                <div class="wrapper">
                  <div class="video-main">
                    <div class="promo-video">
                      <div class="waves-block">
                        <div class="waves wave-1"></div>
                        <div class="waves wave-2"></div>
                        <div class="waves wave-3"></div>
                      </div>
                    </div>
                    <a
                      href="https://www.youtube.com/watch?v=AVHozwCteL4"
                      class="video glightbox3"
                      ><i class="ph-fill ph-play"></i
                    ></a>
                  </div>
                </div>
              </div>
              <h3 class="details-description n5-color fs-five mt-5 mt-md-10">
                Conclusion
              </h3>
              <p class="details-description n5-color fs-eight mt-3 mt-md-5">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit lobortis
                arcu enim urna adipiscing praesent velit viverra sit semper
                lorem eu cursus vel hendrerit elementum morbi curabitur etiam
                nibh justo, lorem aliquet donec sed sit mi dignissim at ante
                massa mattis.
              </p>
            </div>

            <div data-aos="fade-up" class="mb-8 mb-md-15 py-4 py-md-8 brn4-y">
              <div
                class="d-flex flex-wrap gap-3 align-items-center justify-content-between"
              >
                <div class="d-flex flex-wrap gap-4 gap-md-8 align-items-center">
                  <h4 class="fs-five fw-semibold n5-color">Tag:</h4>
                  <div class="d-flex flex-wrap align-items-center gap-2">
                    <a
                      href="javascript:void(0)"
                      class="bgn2-color n4-color py-2 py-md-3 px-3 px-md-5 d-block rounded-pill brn4"
                      >Business</a
                    >
                    <a
                      href="javascript:void(0)"
                      class="bgn2-color n4-color py-2 py-md-3 px-3 px-md-5 d-block rounded-pill brn4"
                      >Analysis</a
                    >
                    <a
                      href="javascript:void(0)"
                      class="bgn2-color n4-color py-2 py-md-3 px-3 px-md-5 d-block rounded-pill brn4"
                      >Technology</a
                    >
                    <a
                      href="javascript:void(0)"
                      class="bgn2-color n4-color py-2 py-md-3 px-3 px-md-5 d-block rounded-pill brn4"
                      >Design</a
                    >
                    <a
                      href="javascript:void(0)"
                      class="bgn2-color n4-color py-2 py-md-3 px-3 px-md-5 d-block rounded-pill brn4"
                      >Strategy</a
                    >
                  </div>
                </div>
                <div
                  class="d-flex flex-wrap justify-content-center gap-2 align-items-center"
                >
                  <a href="javascript:void(0)" class="blog-social-icon brn4">
                    <i class="ph ph-facebook-logo p1-color"></i>
                  </a>
                  <a href="javascript:void(0)" class="blog-social-icon brn4">
                    <i class="ph ph-instagram-logo p1-color"></i>
                  </a>
                  <a href="javascript:void(0)" class="blog-social-icon brn4">
                    <i class="ph ph-x-logo p1-color"></i>
                  </a>
                  <a href="javascript:void(0)" class="blog-social-icon brn4">
                    <i class="ph ph-linkedin-logo p1-color"></i>
                  </a>
                </div>
              </div>

              <div
                class="d-flex flex-wrap flex-md-nowrap gap-3 gap-md-6 mt-4 mt-md-8"
              >
                <a
                  href="javascript:void(0)"
                  class="prev-card d-flex gap-3 gap-md-6 align-items-center p-3 brn4 rounded-3"
                >
                  <div class="overflow-hidden">
                    <img
                      src="./assets/images/blog3.png"
                      alt="..."
                      class="prev-img"
                    />
                  </div>
                  <div>
                    <span class="d-flex gap-1 align-items-center p1-color">
                      <i class="ph ph-caret-double-left"></i>
                      Previous
                    </span>
                    <span class="n5-color fw-semibold fs-eight mt-2 d-block"
                      >7 Great Web Development Languages to Learn this
                      Year</span
                    >
                  </div>
                </a>
                <a
                  href="javascript:void(0)"
                  class="next-card d-flex gap-3 gap-md-6 align-items-center p-3 brn4 rounded-3"
                >
                  <div class="overflow-hidden">
                    <img
                      src="./assets/images/blog1.png"
                      alt="..."
                      class="prev-img"
                    />
                  </div>
                  <div>
                    <span class="d-flex gap-1 align-items-center p1-color">
                      Next
                      <i class="ph ph-caret-double-right"></i>
                    </span>
                    <span class="n5-color fw-semibold fs-eight mt-2 d-block"
                      >How to Optimize your Website for Better Performance</span
                    >
                  </div>
                </a>
              </div>
            </div>

            <!-- comments -->
            <section data-aos="fade-up" class="mt-8 mt-md-15">
              <h3 class="n5-color fs-three fw-semibold mb-4 mb-md-8">
                2 Comments
              </h3>
              <div class="reply-container">
                <div
                  class="d-flex flex-wrap flex-md-nowrap gap-4 gap-md-8 px-4 px-md-8 py-3 py-md-6 rounded-3 w-100 brn4"
                >
                  <div class="flex-shrink-0">
                    <img
                      src="./assets/images/buyer1.png"
                      alt="..."
                      class="cmnt-img flex-shrink-0"
                    />
                  </div>

                  <div class="w-100">
                    <div
                      class="d-flex gap-3 justify-content-between align-items-center w-100"
                    >
                      <div class="w-100">
                        <h6 class="n5-color fs-six fw-medium">Eleanor Pena</h6>
                        <span class="n5-color fs-nine fw-medium"
                          >May 9, 2014</span
                        >
                      </div>
                      <button
                        class="reply-btn px-3 px-md-5 py-2 p1-color br1 rounded-pill"
                      >
                        Reply
                      </button>
                    </div>
                    <p class="n4-color fs-eight mt-2 mt-md-4">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit
                      lobortis arcu enim urna adipiscing praesent velit viverra
                      sit semper lorem eu cursus vel hendrerit elementum morbi
                      curabitur etiam nibh justo, lorem aliquet donec sed sit mi
                      dignissim at ante massa mattis.
                    </p>
                  </div>
                </div>

                <div class="reply-answer my-3 my-md-6 ms-5 ms-md-10">
                  <form>
                    <div class="d-flex align-items-center gap-3 gap-md-5">
                      <input
                        type="text"
                        placeholder="Enter Your comments"
                        class="px-3 px-md-6 py-2 py-md-4 w-100 brn4 rounded-3 n5-color"
                      />
                      <button
                        class="fs-six n11-color bg1-color px-3 px-md-5 py-2 rounded-pill"
                      >
                        <i class="ph ph-paper-plane-right"></i>
                      </button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="reply-container">
                <div
                  class="d-flex flex-wrap flex-md-nowrap gap-4 gap-md-8 px-4 px-md-8 py-3 py-md-6 rounded-3 w-100 brn4"
                >
                  <div class="flex-shrink-0">
                    <img
                      src="./assets/images/buyer3.png"
                      alt="..."
                      class="cmnt-img flex-shrink-0"
                    />
                  </div>

                  <div class="w-100">
                    <div
                      class="d-flex gap-3 justify-content-between align-items-center w-100"
                    >
                      <div class="w-100">
                        <h6 class="n5-color fs-six fw-medium">
                          Ronald Richards
                        </h6>
                        <span class="n5-color fs-nine fw-medium"
                          >May 9, 2014</span
                        >
                      </div>
                      <button
                        class="reply-btn px-3 px-md-5 py-2 p1-color br1 rounded-pill"
                      >
                        Reply
                      </button>
                    </div>
                    <p class="n4-color fs-eight mt-2 mt-md-4">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit
                      lobortis arcu enim urna adipiscing praesent velit viverra
                      sit semper lorem eu cursus vel hendrerit elementum morbi
                      curabitur etiam nibh justo, lorem aliquet donec sed sit mi
                      dignissim at ante massa mattis.
                    </p>
                  </div>
                </div>

                <div class="reply-answer mt-3 mt-md-6 ms-5 ms-md-10">
                  <form>
                    <div class="d-flex align-items-center gap-3 gap-md-5">
                      <input
                        type="text"
                        placeholder="Enter Your comments"
                        class="px-3 px-md-6 py-2 py-md-4 w-100 brn4 rounded-3 n5-color"
                      />
                      <button
                        class="fs-six n11-color bg1-color px-3 px-md-5 py-2 rounded-pill"
                      >
                        <i class="ph ph-paper-plane-right"></i>
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </section>

            <!-- reply section -->
            <section
              data-aos="zoom-in"
              class="reply-section mt-8 mt-md-15 p-3 p-sm-5 p-md-10 brn4 rounded-3"
            >
              <h3 class="n5-color fs-three mb-2 mb-md-3">Leave a Reply</h3>
              <p class="n4-color fs-eight">
                Your email address will not be published. Required fields are
                marked *
              </p>
              <form class="mt-5 mt-md-10">
                <div
                  class="d-flex flex-wrap flex-md-nowrap align-items-center gap-3 gap-md-6"
                >
                  <input
                    type="text"
                    placeholder="First Name"
                    class="px-4 px-md-8 py-2 py-md-4 w-100 brn4 rounded-3 n5-color"
                  />
                  <input
                    type="text"
                    placeholder="Last Name"
                    class="px-4 px-md-8 py-2 py-md-4 w-100 brn4 rounded-3 n5-color"
                  />
                </div>
                <input
                  type="email"
                  placeholder="Enter Email"
                  class="px-4 px-md-8 py-2 py-md-4 w-100 brn4 rounded-3 n5-color my-3 my-md-6"
                />
                <textarea
                  class="n5-color px-3 px-md-5 py-2 py-md-4 rounded-2 brn4 w-100 h-120"
                  placeholder="Your Message:"
                ></textarea>

                <div class="d-flex gap-2 align-items-center mt-3 mt-md-5">
                  <input id="check" type="checkbox" class="cursor-pointer" />
                  <label for="check" class="n4-color fs-nine cursor-pointer">
                    Save my name, email, and website in this browser for the
                    next time.
                  </label>
                </div>
                <button
                  class="primary-btn fw-medium px-3 px-md-6 py-2 py-md-4 rounded-pill mt-5 mt-md-10"
                >
                  Post Comment
                </button>
              </form>
            </section>
          </div>
        </section>
        <!-- Latest Blog Posts section end -->

        <!-- footer section start -->
        <section
          class="container d-flex flex-wrap gap-3 gap-md-6 justify-content-center justify-content-sm-between align-items-center pb-4 pb-md-8 text-center mb-16 mb-lg-0"
        >
          <span class="fs-eight fw-medium n5-color order-sm-2"
            >Designed by
            <a
              href="https://themeforest.net/user/uiaxis"
              class="fs-eight fw-medium n5-color"
              >UIAXIS</a
            ></span
          >
          <span class="fs-eight fw-medium n5-color order-sm-1"
            >Copyright © 2024
            <a href="index.html" class="fs-eight fw-medium n5-color"
              >Portfolify</a
            >. All Rights Reserved.</span
          >
        </section>
        <!-- footer section end -->
      </div>
    </div>

    <!-- script js  -->
    <script src="./assets/js/plugins/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
    <!-- swiper js  -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- aos -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <!-- glightbox  -->
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>

  </body>
</php>
