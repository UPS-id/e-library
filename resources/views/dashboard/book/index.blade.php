@extends('dashboard.layouts.main')

@section('content')
    <div class="grid grid-cols-12 gap-4">
        <div class="col-span-12 lg:col-span-9 p-4">
            @if (session()->has('success'))
                <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <a href="{{ route('book.create') }}"
                class="px-5 py-3 bg-sky-300 rounded-md text-gray-500 hover:bg-sky-400 transition">
                Tambah Buku
            </a>
        </div>
    </div>

    <div class="grid grid-cols-12 gap-4">
        <div class="col-span-12 lg:col-span-9 p-4">
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">No</th>
                            <th scope="col" class="px-6 py-3">Name</th>
                            <th scope="col" class="px-6 py-3">Cover</th>
                            <th scope="col" class="px-6 py-3">Published</th>
                            <th scope="col" class="px-6 py-3">Category</th>
                            <th scope="col" class="px-6 py-3">Author</th>
                            <th scope="col" class="px-6 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($books as $book)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-gray-400">
                                    {{ $loop->iteration }}
                                </td>
                                <td class="px-6 py-4">{{ $book->name }}</td>
                                <td class="px-6 py-4">
                                    @if ($book->cover)
                                        <img src="{{ Storage::url($book->cover) }}" class="w-16 h-16 object-cover">
                                    @else
                                        <img src="https://picsum.photos/400/300" class="w-16 h-16 object-cover">
                                    @endif
                                </td>
                                <td class="px-6 py-4">{{ optional($book->published_at)->format('d M Y') ?? 'Belum Terbit' }}
                                </td>
                                <td class="px-6 py-4">{{ $book->category->name }}</td>
                                <td class="px-6 py-4">{{ $book->author->name }}</td>
                                <td class="px-6 py-4 flex gap-2">
                                    <a href="{{ route('book.edit', $book->slug) }}" class="text-yellow-500 hover:underline">
                                        <i class="fas fa-pen-to-square"></i> Edit
                                    </a>
                                    <span>|</span>
                                    <form action="{{ route('book.destroy', $book->slug) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-rose-500 hover:underline"
                                            onclick="return confirm('Are you sure?')">
                                            <i class="fa-solid fa-trash"></i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="px-6 py-4 text-center text-gray-500">No books found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
