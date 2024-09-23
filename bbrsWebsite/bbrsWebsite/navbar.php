<nav class="bg-neutral-100 dark:bg-neutral-600 text-neutral-600 dark:text-neutral-200">
  <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
    <div class="relative flex items-center justify-between h-16">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <button onclick="toggleNavbar()" class="inline-flex items-center justify-center p-2 rounded-md text-neutral-600 dark:text-neutral-200 hover:text-neutral-800 dark:hover:text-neutral-100 hover:bg-neutral-200 dark:hover:bg-neutral-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-neutral-500">
          <svg id="openIcon" class="block h-6 w-6" fill="none" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
          <svg id="closeIcon" class="hidden h-6 w-6" fill="none" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
      </div>
      <div class="flex-1 flex items-center justify-center sm:justify-start">
        <div>
          <a href='./index.php' class="text-neutral-600 dark:text-neutral-200 px-3 py-2 text-sm font-medium">Blue Bird Residential School</a>
        </div>
        <div class="hidden sm:block sm:ml-6">
          <div class="flex space-x-4">
            <a href='./index.php' class="bg-neutral-300 dark:bg-neutral-500 text-neutral-600 dark:text-neutral-200 px-3 py-2 rounded-md text-sm font-medium">Home</a>
            <a href='#' class="text-neutral-600 dark:text-neutral-200 hover:bg-neutral-200 dark:hover:bg-neutral-500 hover:text-neutral-800 dark:hover:text-neutral-100 px-3 py-2 rounded-md text-sm font-medium">About</a>
            <a href='./academics.php' class="text-neutral-600 dark:text-neutral-200 hover:bg-neutral-200 dark:hover:bg-neutral-500 hover:text-neutral-800 dark:hover:text-neutral-100 px-3 py-2 rounded-md text-sm font-medium">Academics</a>
            <!-- <a href='#' class="text-neutral-600 dark:text-neutral-200 hover:bg-neutral-200 dark:hover:bg-neutral-500 hover:text-neutral-800 dark:hover:text-neutral-100 px-3 py-2 rounded-md text-sm font-medium">News</a> -->
            <a href='./gallery.php' class="text-neutral-600 dark:text-neutral-200 hover:bg-neutral-200 dark:hover:bg-neutral-500 hover:text-neutral-800 dark:hover:text-neutral-100 px-3 py-2 rounded-md text-sm font-medium">Gallery</a>
            <a href='./contact.php' class="text-neutral-600 dark:text-neutral-200 hover:bg-neutral-200 dark:hover:bg-neutral-500 hover:text-neutral-800 dark:hover:text-neutral-100 px-3 py-2 rounded-md text-sm font-medium">Contacts</a>
            <a href='./faculty.php' class="text-neutral-600 dark:text-neutral-200 hover:bg-neutral-200 dark:hover:bg-neutral-500 hover:text-neutral-800 dark:hover:text-neutral-100 px-3 py-2 rounded-md text-sm font-medium">Faculty</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="mobileNavbar" class="hidden sm:hidden">
    <div class="px-2 pt-2 pb-3 space-y-1 bg-neutral-300 dark:bg-neutral-500">
      <a href='./index.php' class="bg-neutral-400 dark:bg-neutral-600 text-neutral-600 dark:text-neutral-200 block px-3 py-2 rounded-md text-base font-medium">Home</a>
      <a href='#' class="text-neutral-600 dark:text-neutral-200 hover:bg-neutral-200 dark:hover:bg-neutral-500 hover:text-neutral-800 dark:hover:text-neutral-100 block px-3 py-2 rounded-md text-base font-medium">About</a>
      <a href='./academics.php' class="text-neutral-600 dark:text-neutral-200 hover:bg-neutral-200 dark:hover:bg-neutral-500 hover:text-neutral-800 dark:hover:text-neutral-100 block px-3 py-2 rounded-md text-base font-medium">Academics</a>
      <!-- <a href='#' class="text-neutral-600 dark:text-neutral-200 hover:bg-neutral-200 dark:hover:bg-neutral-500 hover:text-neutral-800 dark:hover:text-neutral-100 block px-3 py-2 rounded-md text-base font-medium">News</a> -->
      <a href='./gallery.php' class="text-neutral-600 dark:text-neutral-200 hover:bg-neutral-200 dark:hover:bg-neutral-500 hover:text-neutral-800 dark:hover:text-neutral-100 block px-3 py-2 rounded-md text-base font-medium">Gallery</a>
      <a href='./contact.php' class="text-neutral-600 dark:text-neutral-200 hover:bg-neutral-200 dark:hover:bg-neutral-500 hover:text-neutral-800 dark:hover:text-neutral-100 px-3 py-2 rounded-md text-sm font-medium">Contacts</a>
      <a href='./faculty.php' class="text-neutral-600 dark:text-neutral-200 hover:bg-neutral-200 dark:hover:bg-neutral-500 hover:text-neutral-800 dark:hover:text-neutral-100 block px-3 py-2 rounded-md text-base font-medium">Faculty</a>
    </div>
  </div>
</nav>

<script>
  function toggleNavbar() {
    var mobileNavbar = document.getElementById("mobileNavbar");
    var openIcon = document.getElementById("openIcon");
    var closeIcon = document.getElementById("closeIcon");
    if (mobileNavbar.classList.contains("hidden")) {
      mobileNavbar.classList.remove("hidden");
      openIcon.classList.add("hidden");
      closeIcon.classList.remove("hidden");
    } else {
      mobileNavbar.classList.add("hidden");
      openIcon.classList.remove("hidden");
      closeIcon.classList.add("hidden");
    }
  }
</script>
