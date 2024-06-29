<div class="w-full fixed z-50">
  <nav class="top-0 px-8 md:text-white sm:text-black z-20 h-24 my-auto md:flex md:items-center md:justify-between relative navbar-white-bg">
      <div class="flex items-center justify-between w-full h-24">
        <div class="">
          <img src="./images/logo.png" class="h-24" alt="">
        </div>
          <span class="block text-3xl text-black cursor-pointer md:hidden" onclick="Menu(this)">
              <ion-icon name="menu" id="menu-icon"></ion-icon>
          </span>
      </div>
      <ul class="md:flex  md:items-center z-[-1] md:z-auto md:static absolute w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500 bg-white md:bg-transparent">
          <li class="mx-4 my-6 md:my-0">
              <a href="#" class="text-xl  duration-500 hover:text-pink-500">HOME</a>
          </li>
          <li class="mx-4 my-6 md:my-0">
              <a href="#" class="text-xl duration-500 hover:text-pink-500">SERVICE</a>
          </li>
          <li class="mx-4 my-6 md:my-0">
              <a href="#" class="text-xl duration-500 hover:text-pink-500">ABOUT</a>
          </li>
          <li class="mx-4 my-6 md:my-0">
              <a href="#" class="text-xl duration-500 hover:text-pink-500">BLOG</a>
          </li>
          <li class="mx-4 my-6 md:my-0">
              <a href="#" class="text-xl duration-500 hover:text-pink-500">GALLERY</a>
          </li>
          <li class="mx-4 my-6 md:my-0">
              <a href="#" class="text-xl duration-500 hover:text-pink-500">CONTACT</a>
          </li>
      </ul>
  </nav>
</div>


<script>
   function Menu(e) {
        let list = document.querySelector("ul");
        let icon = document.getElementById("menu-icon");
        if (icon.getAttribute("name") === "menu") {
          icon.setAttribute("name", "close");
          list.classList.remove("top-[-400px]");
          list.classList.add("top-0");
          list.classList.add("opacity-100");
        } else {
          icon.setAttribute("name", "menu");
          list.classList.add("top-[-400px]");
          list.classList.remove("top-0");
          list.classList.remove("opacity-100");
        }
        handleScroll();
      }

      function handleScroll() {
        const nav = document.querySelector("nav");
        const ul = document.querySelector("ul");
        const icon = document.getElementById("menu-icon");

        if (window.scrollY > 50) {
          nav.classList.add("scrolled");
          if (icon.getAttribute("name") === "close") {
            ul.classList.add("scrolled");
            nav.classList.remove("scrolled");
          } else {
            ul.classList.remove("scrolled");
          }
        } else {
          nav.classList.remove("scrolled");
          ul.classList.remove("scrolled");
        }
      }

      window.addEventListener("scroll", handleScroll);
   
</script>