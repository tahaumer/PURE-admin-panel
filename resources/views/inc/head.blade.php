<div class="text-white bg-black pb-8 px-4 w-full right-0 top-0 mt-0 h-[61px] fixed">
    <div class="flex items-center justify-between p-2">
        <div class="flex items-center">
            <img width="40" src="{{ asset('media/logo.svg   ') }}" />
        </div>
        <div class="flex items-center relative">
            <input class="p-3 m-3 text-black h-7 text-sm" type="text" placeholder="search" />
            <button><img class="h-5 m-2" src="{{ asset('media/icons/bellIcon.png') }}" /></button>
            <button id="dropdownToggle"><img class="h-5 m-2" src="{{ asset('media/icons/account.png') }}" /></button>
            <div class="absolute dropdown-content bg-black right-0 top-12 z-50 shadow-2xl" id="dropdownContent" style="display: none">
                <a href="" class="block p-3 bg-black hover:bg-[#3362CC] hover:text-white text-[15px]">View Profile</a>
                <a href="{{ route('admin.logout') }}" class="block p-3 bg-black hover:bg-[#3362CC] hover:text-white text-[15px]">Logout</a>
            </div>
        </div>
    </div>
</div>

@include('inc.sidebar')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var dropdownToggle = document.getElementById('dropdownToggle');
        var dropdownContent = document.getElementById('dropdownContent');
        dropdownToggle.addEventListener('click', function(event) {
            event.preventDefault();
            dropdownContent.style.display = (dropdownContent.style.display === 'block') ? 'none' :
                'block';
        });
        document.addEventListener('click', function(event) {
            if (!dropdownToggle.contains(event.target) && !dropdownContent.contains(event.target)) {
                dropdownContent.style.display = 'none';
            }
        });
    });
</script>
