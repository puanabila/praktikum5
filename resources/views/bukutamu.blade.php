@extends('layout.main')
@section('content')
<!-- cards -->
<div class="w-full px-6 py-6 mx-auto">
    <!-- row 1 -->
    <div class="flex flex-wrap -mx-3">
        <h1>Data Buku Tamu</h1>
        <table class="w-full border-collapse border border-gray-300 mt-6">
            <thead>
                <tr>
                    <th class="border border-gray-300 px-4 py-2">#</th>
                    <th class="border border-gray-300 px-4 py-2">Name</th>
                    <th class="border border-gray-300 px-4 py-2">Email</th>
                    <th class="border border-gray-300 px-4 py-2">Massage</th>
                    <th class="border border-gray-300 px-4 py-2">Date</th>
                </tr>
            </thead>
            <tbody>
                <!-- Isi data buku tamu -->
                <tr>
                    <td class="border border-gray-300 px-4 py-2">1. </td>
                    <td class="border border-gray-300 px-4 py-2">John Doe</td>
                    <td class="border border-gray-300 px-4 py-2">engglishMan123@gmail.com</td>
                    <td class="border border-gray-300 px-4 py-2">Lorem ipsum dolor sit amet consectetur adipisicing elit..... </td>
                    <td class="border border-gray-300 px-4 py-2">21 March 2024</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 px-4 py-2">2. </td>
                    <td class="border border-gray-300 px-4 py-2">Lucas Doe</td>
                    <td class="border border-gray-300 px-4 py-2">britishMan123@gmail.com</td>
                    <td class="border border-gray-300 px-4 py-2">Saepe fuga minus cupiditate ullam, excepturi perferendis.....</td>
                    <td class="border border-gray-300 px-4 py-2">21 March 2024</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 px-4 py-2">3. </td>
                    <td class="border border-gray-300 px-4 py-2">Marie Doe</td>
                    <td class="border border-gray-300 px-4 py-2">engglishWoman123@gmail.com</td>
                    <td class="border border-gray-300 px-4 py-2">Illo explicabo ut expedita commodi inventore iusto vitae, pariatur at eligendi, sed eius cum nihil!...</td>
                    <td class="border border-gray-300 px-4 py-2">21 March 2024</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- end cards -->
    <footer class="pt-4">
        <div class="w-full px-6 mx-auto">
            <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
                <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
                    <div class="text-sm leading-normal text-center text-slate-500 lg:text-left">
                        ©
                        <script>
                            document.write(new Date().getFullYear() + ",");
                        </script>
                        made with <i class="fa fa-heart"></i> by
                        <a href="https://www.creative-tim.com" class="font-semibold text-slate-700" target="_blank">Creative Tim</a>
                        for a better web.
                    </div>
                </div>
                <div class="w-full max-w-full px-3 mt-0 shrink-0 lg:w-1/2 lg:flex-none">
                    <ul class="flex flex-wrap justify-center pl-0 mb-0 list-none lg:justify-end">
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">Creative Tim</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/presentation" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://creative-tim.com/blog" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/license" class="block px-4 pt-0 pb-1 pr-0 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">License</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- end cards -->
@endsection
