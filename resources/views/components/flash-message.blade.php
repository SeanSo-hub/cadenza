@if (session()->has('message'))
    <div x-data="{ show: true }" 
        x-init="setTimeout(() => show = false, 3000)" 
        x-transition:leave="transition ease-in duration-300" 
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90" 
        x-show="show"
        class="fixed top-5 left-1/2 transform -translate-x-1/2 bg-laravel text-white px-20 py-5 rounded-lg">
        <p>{{ session('message') }}</p>
    </div>
@endif
