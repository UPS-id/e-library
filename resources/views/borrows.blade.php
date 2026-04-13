@extends('layouts.main')
@section('content')
    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden w-full max-w-5xl">
            @if (session()->has('success'))
                <div class="mb-5 rounded-lg bg-green-100 px-6 py-5 text-sm text-green-800 border border-green-300" role="alert">
                    {{ session('success') }}
                </div>
            @endif


            <!-- Header -->
            <div class="p-6 bg-sky-950 text-white text-center rounded-t-lg">
                <h1 class="text-3xl font-bold">{{ $title }}</h1>
            </div>

            <!-- Content -->
            <div class="overflow-x-auto p-6">
                <table class="min-w-full divide-y divide-gray-200">

                    <!-- Table Head -->
                    <thead class="bg-sky-900 text-white">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase">No</th>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase">Nama</th>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase">Judul Buku</th>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase">Tanggal Pinjaman</th>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase">Deadline</th>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase">Status</th>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase">Action</th>
                        </tr>
                    </thead>

                    <!-- Table Body -->
                    <tbody class="bg-white divide-y divide-gray-200">

                        <!-- Row 1 -->
                        @if ($borrows->count())
                            @foreach ($borrows as $borrow)
                                <tr>
                                    <td class="px-6 py-4 text-sm">{{ $loop->iteration }}</td>
                                    <td class="px-6 py-4 text-sm">{{ $borrow->user->name }}</td>
                                    <td class="px-6 py-4 text-sm">{{ $borrow->book->name }}</td>
                                    <td class="px-6 py-4 text-sm">{{ $borrow->borrow_date->format('d M Y') }}</td>
                                    <td class="px-6 py-4 text-sm">{{ $borrow->due_date->format('d M Y') }}</td>
                                    <td class="px-6 py-4 capitalize">
                                        @if ($borrow->status == 'diajukan')
                                            <p class="bg-yellow-300 text-center p-1 rounded-md">{{ $borrow->status }}</p>
                                        @elseif ($borrow->status == 'dipinjam')
                                            <p class="bg-green-300 text-center p-1 rounded-md">{{ $borrow->status }}</p>
                                        @elseif ($borrow->status == 'dikembalikan')
                                            <p class="bg-blue-300 text-center p-1 rounded-md">{{ $borrow->status }}</p>
                                        @elseif ($borrow->status == 'ditolak')
                                            <p class="bg-red-300 text-center p-1 rounded-md">{{ $borrow->status }}</p>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="404 Not Found"
                                            class="bg-blue-200 px-2 py-1 rounded-lg text-blue-500 hover:bg-blue-500 hover:text-white">
                                            <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                                <td colspan="7" class="text-center px-6 py-4 text-white">
                                    Belum ada data peminjaman.
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
                <div class="mt-6">
                    {{ $borrows->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
