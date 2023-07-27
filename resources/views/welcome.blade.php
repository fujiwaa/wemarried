<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WeMarried</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    <!-- Navbar -->
    <header class="bg-transparent bg-light absolute top-0 left-0 w-full flex items-center z-10">
      <div class="container">
        <div class="flex items-center justify-between relative">
          <div class="px-4">
            <a href="#home" class="font-bold text-lg text-pink block py-6">WeMarried</a>
          </div>
          <div class="flex items-center px-4">
            <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
              <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
              <span class="hamburger-line transition duration-300 ease-in-out"></span>
              <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
            </button>

            <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
              <ul class="block lg:flex">
                <li class="group">
                  <a href="#desain" class="text-base text-dark py-2 mx-8 flex group-hover:text-pink">Desain</a>
                </li>
                <li class="group">
                  <a href="#about" class="text-base text-dark py-2 mx-8 flex group-hover:text-pink">About</a>
                </li>
                <li class="group">
                  <a href="#undangan" class="text-base text-dark py-2 mx-8 flex group-hover:text-pink">Undangan</a>
                </li>
                <li class="group">
                  <a href="#contact" class="text-base text-dark py-2 mx-8 flex group-hover:text-pink">Contact</a>
                </li>
                <li>
                  <button id="dropdownNavbarLink" type="button" data-dropdown-toggle="dropdownNavbar" class="flex items-center text-base text-dark w-full py-2 mx-8 hover:text-pink">
                    Lainnya
                    <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                  </button>
                  <div id="dropdownNavbar" class="hidden px-2 font-normal bg-white rounded-md border">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownNavbarLink">
                      <li>
                        <a href="#" class="block px-4 py-2 hover:text-pink">Dashboard</a>
                      </li>
                      <li>
                        <a href="#" class="block px-4 py-2 hover:text-pink">Settings</a>
                      </li>
                      <li>
                        <a href="#" class="block px-4 py-2 hover:text-pink">Earnings</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="group text-center px-4 mr-2 md:px-0">
                  <a href="#" class="inline-block text-base font-semibold text-dark mt-1 py-1 px-8 rounded-full border border-pink hover:bg-pink hover:text-white transition duration-300 ease-in-out w-full">Daftar</a>
                </li>
                <li class="group text-center px-4 md:px-0">
                  <a href="login.html" class="inline-block text-base font-semibold text-white mt-1 py-1 px-8 rounded-full border border-pink bg-pink hover:shadow-lg transition duration-300 ease-in-out w-full">Masuk</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>

    <!-- Home-->
    <section id="home" class="pt-[220px] bg-[#FBE7EC]">
      <div class="container">
        <div class="flex flex-wrap">
          <div class="w-full self-center px-4 mb-5 lg:w-1/2">
            <h2 class="text-base md:text-3xl">Invite Your Guest to The Wedding</h2>
            <h1 class="block font-bold text-pink text-5xl mt-8 mb-8 lg:text-[100px]">We Married!</h1>
            <p class="font-medium text-sm mb-10 lg:text-xl">Sebarkan Undangan hari bahagiamu dengan Cepat dengan menggunakan Undangan Digital.</p>
            <a href="#" class="text-base font-semibold text-white bg-pink py-5 px-20 rounded-full hover:shadow-lg hover:opacity-90 transition duration-300 ease-in-out">Pesan Sekarang</a>
          </div>

          <div class="w-full self-end px-4 lg:w-1/2">
            <div class="relative mt-10 lg:mt-10 lg:right-0">
              <img src="dist/img/home.png" alt="WeMarried" class="max-w-full mx-auto" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <script src="dist/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
