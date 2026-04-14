{{-- @dd($title) --}}
@extends('layouts.main')

@section('content')
    <div class="max-w-7xl mx-auto px-4 py-12">

        <div class="grid md:grid-cols-2 gap-12 items-center mb-20">
            <div>
                <h2 class="text-3xl font-bold text-slate-800 mb-4">Membangun Literasi Digital Bersama <span
                        class="text-indigo-600">E-Library</span></h2>
                <p class="text-slate-600 leading-relaxed mb-6">
                    E-Library kami bukan sekadar gudang buku digital. Kami adalah platform yang didedikasikan untuk
                    memudahkan akses ilmu pengetahuan bagi siapa saja, kapan saja. Dengan sistem peminjaman yang
                    terintegrasi, kami memastikan pengalaman membaca kamu menjadi lebih efisien.
                </p>
                <div class="flex gap-4">
                    <div class="flex items-center gap-2 bg-indigo-50 text-indigo-700 px-4 py-2 rounded-lg font-medium">
                        <i class="fas fa-book-open"></i> 1000+ Koleksi
                    </div>
                    <div class="flex items-center gap-2 bg-emerald-50 text-emerald-700 px-4 py-2 rounded-lg font-medium">
                        <i class="fas fa-users"></i> 500+ Member
                    </div>
                </div>
            </div>
            <div class="relative">
                <div
                    class="absolute -bottom-6 -left-6 w-64 h-64 bg-indigo-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob">
                </div>
                <img src="https://images.unsplash.com/photo-1507842217343-583bb7270b66?auto=format&fit=crop&q=80&w=1000"
                    alt="Library" class="relative rounded-2xl shadow-2xl object-cover h-80 w-full">
            </div>
        </div>

        <div class="grid sm:grid-cols-3 gap-8">
            <div class="p-8 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-md transition-shadow">
                <div class="w-12 h-12 bg-indigo-600 text-white rounded-xl flex items-center justify-center mb-6 text-xl">
                    <i class="fas fa-bolt"></i>
                </div>
                <h3 class="text-xl font-semibold text-slate-800 mb-3">Akses Cepat</h3>
                <p class="text-slate-500">Cari dan pinjam buku favoritmu dalam hitungan detik tanpa antre.</p>
            </div>

            <div class="p-8 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-md transition-shadow">
                <div class="w-12 h-12 bg-indigo-600 text-white rounded-xl flex items-center justify-center mb-6 text-xl">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3 class="text-xl font-semibold text-slate-800 mb-3">Sistem Aman</h3>
                <p class="text-slate-500">Data peminjaman dan privasi akunmu dilindungi dengan enkripsi tingkat tinggi.</p>
            </div>

            <div class="p-8 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-md transition-shadow">
                <div class="w-12 h-12 bg-indigo-600 text-white rounded-xl flex items-center justify-center mb-6 text-xl">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h3 class="text-xl font-semibold text-slate-800 mb-3">Multi Platform</h3>
                <p class="text-slate-500">Baca dan kelola daftar pinjamanmu dari perangkat apa saja (Desktop/Mobile).</p>
            </div>
        </div>

        <div class="mt-20 text-center py-10 border-t border-slate-100">
            <p class="text-slate-500 mb-4">Dikembangkan dengan ❤️ oleh Tim</p>
            <div class="flex justify-center gap-6 text-2xl text-slate-400">
                <a href="#" class="hover:text-indigo-600 transition-colors"><i class="fab fa-github"></i></a>
                <a href="#" class="hover:text-indigo-600 transition-colors"><i class="fab fa-instagram"></i></a>
                <a href="#" class="hover:text-indigo-600 transition-colors"><i class="fas fa-envelope"></i></a>
            </div>
        </div>
    </div>
@endsection
