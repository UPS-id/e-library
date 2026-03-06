<!--sidenav -->
<div class="fixed left-0 top-0 w-64 h-full bg-[#f8f4f3] p-4 z-50 sidebar-menu transition-transform">
    <a href="#" class="flex items-center pb-4 border-b border-b-gray-800">

        <h2 class="font-bold text-2xl">LOREM <span class="bg-[#f84525] text-white px-2 rounded-md">IPSUM</span></h2>
    </a>
    <ul class="mt-4">
        <span class="text-gray-400 font-bold mb-5">ADMIN</span>
        <li class="mb-1 group space-y-3">
            <a href="/dashboard"
                class="flex font-semibold items-center py-2 px-4 rounded-md transition {{ Request::is('dashboard') ? 'bg-gray-950 text-gray-100' : 'text-gray-900 hover:bg-gray-950 hover:text-gray-100' }} group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                <i class="ri-home-2-line mr-3 text-lg"></i>
                <span class="text-sm">Dashboard</span>
            </a>

            <a href="/dashboard/category"
                class="flex font-semibold items-center py-2 px-4 rounded-md transition {{ Request::is('dashboard/category*') ? 'bg-gray-950 text-gray-100' : 'text-gray-900 hover:bg-gray-950 hover:text-gray-100' }} group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                <i class="ri-file-list-3-line mr-3 text-lg"></i>
                <span class="text-sm">Category</span>
            </a>

            <a href="/dashboard/author"
                class="flex font-semibold items-center py-2 px-4 rounded-md transition {{ Request::is('dashboard/author*') ? 'bg-gray-950 text-gray-100' : 'text-gray-900 hover:bg-gray-950 hover:text-gray-100' }} group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                <i class="fas fa-address-book mr-3 text-lg"></i>
                <span class="text-sm">Author</span>
            </a>

            <a href="/dashboard/user"
                class="flex font-semibold items-center py-2 px-4 rounded-md transition {{ Request::is('dashboard/user*') ? 'bg-gray-950 text-gray-100' : 'text-gray-900 hover:bg-gray-950 hover:text-gray-100' }} group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                <i class="ri-user-line mr-3 text-lg"></i>
                <span class="text-sm">User</span>
            </a>

            <a href="/dashboard/book"
                class="flex font-semibold items-center py-2 px-4 rounded-md transition {{ Request::is('dashboard/book*') ? 'bg-gray-950 text-gray-100' : 'text-gray-900 hover:bg-gray-950 hover:text-gray-100' }} group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                <i class="fas fa-books mr-3 text-lg"></i>
                <span class="text-sm">Book</span>
            </a>
            </li>
    </ul>
</div>
<div class="fixed top-0 left-0 w-full h-full bg-black/50 z-40 md:hidden sidebar-overlay"></div>
<!-- end sidenav -->
