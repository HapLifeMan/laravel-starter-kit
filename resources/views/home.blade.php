@extends('layouts.app')

@section('body')

    <div class="flex justify-center items-center h-screen" style="margin-top: -4rem;">
        <div class="w-full max-w-md md:mx-auto">
            <div class="rounded shadow">
                <div class="flex justify-between font-medium text-lg text-brand-darker bg-brand-lighter p-3 rounded-t">
                    <div>Hi {{ Auth::user()->username }}! 👋🏻</div>
                    <div>
                        <a href="{{ route('logout') }}" class="no-underline text-purple" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </div>
                <div class="bg-white p-3 rounded-b">
                    Welcome on your dashboard!
                </div>
            </div>
        </div>
    </div>

@endsection
