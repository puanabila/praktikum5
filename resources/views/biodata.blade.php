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
            <p class="text-gray-600">John Doe is a versatile and accomplished individual with a diverse skill set and a passion for excellence. With a keen eye for detail and a strong work ethic, John consistently delivers exceptional results in every task he undertakes. As a team player, he excels in collaborative environments, leveraging his communication and interpersonal skills to foster positive relationships and drive projects forward.
                <br>
                <br>
                In addition to his strong interpersonal skills, John possesses a solid technical foundation. With expertise in various programming languages and frameworks, he navigates complex technical challenges with ease, finding innovative solutions to meet project objectives. His proficiency extends to project management, where he effectively plans, executes, and monitors initiatives to ensure timely delivery and client satisfaction.</p>
        </div>
    </div>
</div>
@endsection
