@extends('layout.main')
@section('content')
<div class="container mx-auto mt-8">
    <div class="bg-white rounded-lg shadow-md">
        <div class="p-4">
            <div class="flex justify-center">
                <img class="w-15 h-15 rounded-full" src="{{ asset('assets/img/bruce-mars.jpg') }}" alt="Profile Picture">
            </div>
            <div class="text-center mt-4">
                <h2 class="text-xl font-semibold">John Doe</h2>
                <p class="text-sm text-gray-600">john@example.com</p>
            </div>
        </div>
        <div class="border-t border-gray-200"></div>
        <div class="p-4">
            <h3 class="text-lg font-semibold">About Me</h3>
            <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce malesuada faucibus quam vitae accumsan. Duis pharetra, libero id eleifend ultrices, purus purus tincidunt tortor, nec pretium nibh est ac ipsum. Nulla facilisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu arcu ut est sollicitudin ultricies. Integer nec ipsum nunc. Sed sed lectus eget risus efficitur ultrices.</p>
        </div>
    </div>
</div>
@endsection
