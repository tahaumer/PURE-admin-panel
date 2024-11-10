<div class="sidebar fixed left-0 top-[61px] h-full w-20 bg-black px-[14px] py-[6px] z-[999] transition-all duration-500 ease-in-out">
    <div class="logo-details h-[60px] flex items-center relative">
        <div class="logo_name text-white pl-5 font-bold uppercase">Admin SDS</div>
        <img id="btn" width="27" src="{{ asset('media/icons/menu.svg') }}" alt="Menu Button">
    </div>
    <div class="absolute top-0 -right-[48px] bg-white w-12 h-16 rounded-tl-full" style="box-shadow: -13px -13px 0 13px #000; "></div>
    <ul class="nav-list">
        <li class="relative my-[8px] mr-[8px]">
            <a href="{{ route('dashboard') }}"
                class="flex items-center pl-2 ml-1 h-[45px] w-full no-underline transition-all duration-400 ease-in-out {{ request()->is('dashboard') ? 'bg-light-sky' : 'hover:bg-primary' }}">
                <img class="icons" width="27" src="{{ asset('media/icons/Dashboard.svg') }}" alt="dashboard">
                <span
                    class="links_name pl-6 text-white text-[15px] font-bold whitespace-nowrap opacity-0 pointer-events-none transition-opacity duration-400">Dashboard</span>
            </a>
            <span class="tooltip">Dashboard</span>
        </li>
        {{-- <li class="relative my-[8px] mr-[8px]">
            <a href="{{ route('orders') }}" class="flex items-center pl-2 ml-1 h-[45px] w-full no-underline transition-all duration-400 ease-in-out {{ request()->is('orders') ? 'bg-light-sky' : 'hover:bg-primary' }}">
                <img class="icons" width="27" src="{{ asset('media/icons/code.svg') }}" alt="dashboard">
                <span class="links_name pl-6 text-white text-[15px] font-bold whitespace-nowrap opacity-0 pointer-events-none transition-opacity duration-400">Plans</span>
            </a>
            <span class="tooltip">Orders</span>
        </li>
        <li class="relative my-[8px] mr-[8px]">
            <a href="#" class="flex justify-between items-center pl-3 ml-1 mb-1 h-[45px] w-full no-underline transition-all duration-400 ease-in-out {{ request()->is('blogs/categories') || request()->is('blogs/categories/create') ? 'bg-light-sky' : 'hover:bg-primary' }} dropdown-toggle" data-target="categoryDropdown">
                <div class="flex items-center">
                    <img class="icons" width="22" src="{{ asset('media/icons/technologies.svg') }}" alt="category">
                    <span class="links_name pl-6 text-white text-[15px] font-bold whitespace-nowrap opacity-0 pointer-events-none select-none transition-opacity duration-400">Category</span>
                </div>
                <div class="down-arrow">
                    <img class="" src="{{ asset('media/icons/down.svg') }}" alt="">
                </div>
            </a>
            <span class="tooltip">Category</span>
            <div class="dropdown ml-1 w-full space-y-1" id="categoryDropdown">
                <a href="{{ route('categories') }}" class="dropdown-item block text-sm {{ request()->is('blogs/categories') ? 'bg-[#06c9fa98] font-black' : 'hover:bg-primary' }}"> - All Categories</a>
                <a href="{{ route('categories.create') }}" class="dropdown-item block text-sm {{ request()->is('blogs/categories/create') ? 'bg-[#06c9fa98] font-black' : 'hover:bg-primary' }}"> - Add Category</a>
            </div>
        </li>
        <li class="relative my-[8px] mr-[8px]">
            <a href="#" class="flex justify-between items-center pl-3 ml-1 mb-1 h-[45px] w-full no-underline transition-all duration-400 ease-in-out {{ request()->is('blogs') || request()->is('blogs/create-post') ? 'bg-light-sky' : 'hover:bg-primary' }} dropdown-toggle" data-target="blogsDropdown">
                <div class="flex items-center">
                    <img class="icons" width="22" src="{{ asset('media/icons/blogs.svg') }}" alt="blogs">
                    <span class="links_name pl-6 text-white text-[15px] font-bold whitespace-nowrap opacity-0 pointer-events-none select-none transition-opacity duration-400">Blogs</span>
                </div>
                <div class="down-arrow">
                    <img class="" src="{{ asset('media/icons/down.svg') }}" alt="">
                </div>
            </a>
            <span class="tooltip">Blogs</span>
            <div class="dropdown ml-1 w-full space-y-1" id="blogsDropdown">
                <a href="{{ route('blogs') }}" class="dropdown-item block text-sm {{ request()->is('blogs') ? 'bg-[#06c9fa98] font-black' : 'hover:bg-primary' }}"> - All Blogs</a>
                <a href="{{ route('createPost') }}" class="dropdown-item block text-sm {{ request()->is('blogs/create-post') ? 'bg-[#06c9fa98] font-black' : 'hover:bg-primary' }}"> - Add Blog</a>
            </div>
        </li>
        <li class="relative my-[8px] mr-[8px]">
            <a href="{{ route('media') }}" class="flex items-center pl-2 ml-1 h-[45px] w-full no-underline transition-all duration-400 ease-in-out {{ request()->is('gallery') ? 'bg-light-sky' : 'hover:bg-primary' }}">
                <img class="icons" width="27" src="{{ asset('media/icons/gallery.svg') }}" alt="plans">
                <span class="links_name pl-6 text-white text-[15px] font-bold whitespace-nowrap opacity-0 pointer-events-none select-none transition-opacity duration-400">Gallery</span>
            </a>
            <span class="tooltip">Gallery</span>
        </li>
        <li class="relative my-[8px] mr-[8px]">
            <a href="{{ route('employees') }}" class="flex items-center pl-2 ml-1 h-[45px] w-full no-underline transition-all duration-400 ease-in-out {{ request()->is('employees') ? 'bg-light-sky' : 'hover:bg-primary' }}">
                <img class="icons" width="27" src="{{ asset('media/icons/employee.svg') }}" alt="members">
                <span class="links_name pl-6 text-white text-[15px] font-bold whitespace-nowrap opacity-0 pointer-events-none select-none transition-opacity duration-400">Team Members</span>
            </a>
            <span class="tooltip">Team Members</span>
        </li>
        <li class="relative my-[8px] mr-[8px]">
            <a href="{{ route('services') }}" class="flex items-center pl-2 ml-1 h-[45px] w-full no-underline transition-all duration-400 ease-in-out {{ request()->is('services') || request()->is('service/create') ? 'bg-light-sky' : 'hover:bg-primary' }}">
                <img class="icons" width="27" src="{{ asset('media/icons/services.svg') }}" alt="services">
                <span class="links_name pl-6 text-white text-[15px] font-bold whitespace-nowrap opacity-0 pointer-events-none select-none transition-opacity duration-400">Web Services</span>
            </a>
            <span class="tooltip">Web Services</span>
        </li>
        <li class="relative my-[8px] mr-[8px]">
            <a href="{{ route('sub.services') }}" class="flex items-center pl-2 ml-1 h-[45px] w-full no-underline transition-all duration-400 ease-in-out {{ request()->is('services/sub-services') || request()->is('services/sub/service/create') ? 'bg-light-sky' : 'hover:bg-primary' }}">
                <img class="icons" width="27" src="{{ asset('media/icons/sub-service.svg') }}" alt="services">
                <span class="links_name pl-6 text-white text-[15px] font-bold whitespace-nowrap opacity-0 pointer-events-none select-none transition-opacity duration-400">Web Services</span>
            </a>
            <span class="tooltip">Sub Services</span>
        </li> --}}
    </ul>
</div>
@push('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
 $(document).ready(function() {
   const $sidebar = $(".sidebar");
   const $closeBtn = $("#btn");
   const $navList = $(".nav-list");

   $(".dropdown").css("max-height", "0").css("opacity", "0").removeClass("open");

   $closeBtn.on("click", function() {
       $sidebar.toggleClass("open");
       $navList.toggleClass("scroll");
       menuBtnChange();

       if (!$sidebar.hasClass("open")) {
           $(".dropdown").removeClass("open").css("max-height", "0").css("opacity", "0");
           $(".down-arrow").removeClass("rotate");
       }
   });

   $navList.on("click", ".dropdown-toggle", function(e) {
       e.preventDefault();
       const $toggle = $(this);
       const dropdownId = $toggle.data("target");
       const $dropdown = $("#" + dropdownId);
       const $downArrow = $toggle.find(".down-arrow");

       if (!$sidebar.hasClass("open")) {
           $sidebar.addClass("open");
           $navList.addClass("scroll");
           menuBtnChange();

           setTimeout(() => {
               toggleDropdown($dropdown, $downArrow);
           }, 300);
       } else {
           $(".dropdown").not($dropdown).each(function() {
               $(this).removeClass("open").css("max-height", "0").css("opacity", "0");
               $(this).siblings(".dropdown-toggle").find(".down-arrow").removeClass(
                   "rotate");
           });
           toggleDropdown($dropdown, $downArrow);
       }
   });

   function toggleDropdown($dropdown, $downArrow) {
       $dropdown.toggleClass("open");

       if ($dropdown.hasClass("open")) {
           $dropdown.css({
               "max-height": $dropdown.prop("scrollHeight") + "px",
               "opacity": "1"
           });
           $downArrow.addClass("rotate");
       } else {
           $dropdown.css({
               "max-height": "0",
               "opacity": "0"
           });
           $downArrow.removeClass("rotate");
       }
   }

   function menuBtnChange() {
       if ($sidebar.hasClass("open")) {
           $closeBtn.attr("src", "{{ asset('media/icons/menu-close.svg') }}");
       } else {
           $closeBtn.attr("src", "{{ asset('media/icons/menu.svg') }}");
       }
   }
});
</script> 
@endpush
