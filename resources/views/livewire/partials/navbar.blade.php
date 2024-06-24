<div class="space-y-4">
    <header class="flex flex-wrap sm:justify-start sm:flex-nowrap w-full text-sm  p-4">
        <nav class="max-w-[115rem] w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between" aria-label="Global">
        <div class="flex items-center justify-between w-full">
          <a class="flex-none text-xl font-dancing-script text-white" href="#">Rossie Looks</a>
          <!-- Hamburger menu button for small screens -->
          <div class="sm:hidden">
            <button type="button" class="hs-collapse-toggle p-2 inline-flex justify-center items-center rounded-lg border border-gray-700 font-medium bg-gray-800 text-gray-400 shadow-sm hover:bg-gray-700/20 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-blue-600 transition-all text-sm dark:bg-white dark:hover:bg-gray-100 dark:border-gray-200 dark:text-gray-600 dark:focus:ring-offset-white" data-hs-collapse="#navbar-dark" aria-controls="navbar-dark" aria-label="Toggle navigation">
              <svg class="hs-collapse-open:hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/></svg>
              <svg class="hs-collapse-open:block hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
            </button>
          </div>
        </div>
        <!-- Collapsible menu items -->
        <div id="navbar-dark" class="font-playfair hs-collapse hidden sm:flex sm:flex-row sm:items-center sm:justify-end gap-4">
          <a class="font-medium text-2xl text-white px-4 py-2 hover:text-gray-500 dark:hover:text-neutral-400" href="#" aria-current="page">Home</a>
          <a class="font-medium text-white text-2xl px-4 py-2 hover:text-gray-500 dark:hover:text-neutral-400" href="#">Services</a>
          <a class="font-medium text-white text-2xl px-4 py-2 hover:text-gray-500 dark:hover:text-neutral-400" href="#">Blog</a>
          <a class="font-medium text-white text-2xl px-4 py-2 hover:text-gray-500 dark:hover:text-neutral-400" href="#">About</a>
          <a class="font-medium text-white text-2xl px-4 py-2 hover:text-gray-500 dark:hover:text-neutral-400" href="#">Contact </a>
        </div>
      </nav>
    </header>
  </div>
  
  <script>
    // JavaScript to handle toggling of navbar visibility
    const collapseToggle = document.querySelector('.hs-collapse-toggle');
    const navbar = document.querySelector('#navbar-dark');
  
    collapseToggle.addEventListener('click', function() {
      navbar.classList.toggle('hidden');
    });
  </script>
  