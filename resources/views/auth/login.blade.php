@extends('main')
@php
    $page = 'Login';
    $meta_title = 'Login - Admin Panel';
    $meta_description = 'Login - Admin Panel';
@endphp

@push('style')
@endpush

@section('content')
@if(session('alert'))
   <x-alert/>
@endif

    <section class="flex gap-4 bg-black/5">
        <div class="w-full lg:w-3/5 -mt-10 flex flex-col justify-center">
            <div class="flex flex-col items-center">
                <img width="450" src="{{ asset('media/logo.svg') }}" alt="">
                <p class="text-lg font-normal">Enter email and password to log In.</p>
            </div>
            <form action="{{ route('admin.login') }}" method="POST" class="mt-8 mb-2 mx-auto w-80 max-w-screen-lg lg:w-1/2">
                @csrf
                <div class="flex flex-col gap-6">
                    <label class="-mb-3 font-medium"> Email </label>
                    <input required name="email" type="email" placeholder="name@mail.com" class="w-full h-full bg-white text-gray-700 font-sans font-normal outline-none transition-all border focus:border-black text-sm px-3 py-3 rounded-md" />
                    <label class="-mb-3 font-medium"> Password </label>
                    <input required name="password" type="password" placeholder="********" class="w-full h-full bg-white text-gray-700 font-sans font-normal outline-none transition-all border focus:border-black text-sm px-3 py-3 rounded-md" />
                </div>
                @if(session('alert'))
                    <p class="text-red-600 text-sm">Incorrect email or password </p>
                @endif
                <label for="terms" class="flex items-center gap-2 my-4">
                    <input type="checkbox" required id="terms" name="terms" class="w-4 h-4 accent-black border-2 rounded-md cursor-pointer">
                    <span class="text-sm">I agree to the&nbsp;
                        <a href="#" class="font-normal text-black transition-colors hover:text-gray-900 underline">
                            Terms and Conditions
                        </a>
                    </span>
                </label>
                <x-button content="Login" bgColor="bg-[#212121]" buttonAttr='type="submit"'/>
            </form>

        </div>
        <div class="w-1/2 h-screen hidden lg:block">
            <img src="{{ asset('media/pattern.png') }}" class="h-full w-full object-cover" />
        </div>
    </section>
@endsection

@push('script')
@endpush
