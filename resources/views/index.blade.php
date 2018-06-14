@extends('layouts.app')

@section('body')

    <div class="flex justify-center items-center h-screen" style="margin-top: -4rem;">
        <div class="w-full max-w-md md:mx-auto">
            <div class="rounded shadow">
                <div class="flex justify-between font-medium text-lg text-brand-darker bg-brand-lighter p-3 rounded-t">
                    <div>So fressssh! ✨</div>
                    <div>
                        <a href="{{ route('login') }}" class="no-underline text-purple">Login</a>
                        <span class="text-grey">/</span>
                        <a href="{{ route('register') }}" class="no-underline text-purple">Register</a>
                    </div>
                </div>
                <div class="bg-white p-3 rounded-b">
                    <p class="mb-2">This template includes:</p>
                    <ul>
                        <li>Laravel
                            <ul>
                                <li>Debug bar</li>
                                <li>Auth routes (login, register and password reset)</li>
                                <li>Mix with webpack</li>
                                <li>Redis queue management</li>
                                <li>Extended defaultStringLength(191)</li>
                            </ul>
                        </li>
                        <li>VueJS</li>
                        <li>TailwindCSS</li>
                        <li>Capistrano</li>
                        <li>Laravel Horizon</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
