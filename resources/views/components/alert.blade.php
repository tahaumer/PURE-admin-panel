<div x-data="{ show: true }"
     x-show="show"
     x-init="setTimeout(() => show = false, 3000)"
     x-transition:enter="transition transform ease-out duration-500"
     x-transition:enter-start="translate-x-full"
     x-transition:enter-end="translate-x-0"
     x-transition:leave="transition transform ease-in duration-500"
     x-transition:leave-start="translate-x-0"
     x-transition:leave-end="translate-x-full"
     x-cloak
     class="fixed top-4 right-4 border-t-4 rounded-b px-4 py-3 shadow-md min-w-[300px]
     {{ session('alert.message') == 'Error' ? 'bg-red-100 border-red-500 text-red-900' : 'bg-teal-100 border-teal-500 text-teal-900' }}"
     role="alert">
  <div class="flex">
    <div class="py-1">
      <svg class="fill-current h-6 w-6 {{ session('alert.message') == 'Error' ? 'text-red-900' : 'text-teal-900' }} mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
        <path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/>
      </svg>
    </div>
    <div>
      <p class="font-bold">{{ session('alert.message') }}</p>
      <p class="text-sm">{{ session('alert.detail') }}</p>
    </div>
  </div>
</div>
