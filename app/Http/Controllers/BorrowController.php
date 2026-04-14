<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Borrow;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BorrowController extends Controller
{

    public function store(Request $request)
    {
        $borrow_date = Carbon::today();
        $due_date = Carbon::today()->addDays(7);

        Borrow::create([
            'user_id' => $request->user_id,
            'book_id' => $request->book_id,
            'borrow_date' => $borrow_date,
            'due_date' => $due_date,
            'status' => 'diajukan',
        ]);

        $book = Book::find($request->book_id);
        $book->status = 1;
        $book->save();

        $user = User::find($request->user_id);
        return redirect()->route('borrows', $user->slug)->with('success', 'Permintaan pinjam dikirim!');
    }

    public function index()
    {
        return view('dashboard.borrow.index', [
            'title' => 'Borrow',
            'borrows' => Borrow::latest()->paginate(10)
        ]);
    }

    public function edit(Borrow $borrow)
    {
        $title = 'Dashboard | Edit Borrow';
        return view('dashboard.borrow.edit', compact('title', 'borrow'));
    }

    public function update(Request $request, Borrow $borrow)
    {
        $borrow->status = $request->status;
        if ($request->filled('message')) {
            $borrow->message = $request->message;
        }

        $borrow->save();
        $book = Book::find($borrow->book_id);
        if ($request->status == "diajukan" || $request->status == "dipinjam") {
            $book->status = 1;
            $book->save();
        } elseif ($request->status == "dikembalikan" || $request->status == "ditolak") {
            $book->status = 0;
            $book->save();
        }
        return redirect('/dashboard/borrow')->with('success', "Borrow updated successfully!!");
    }

    public function destroy(Borrow $borrow)
    {
        Borrow::destroy($borrow->id);
        return redirect('/dashboard/borrow')->with('success', "Borrow deleted successfully!!");
    }

    public function userIndex(User $user)
    {
        $title = $user->name . "'s Borrows";
        $borrows = Borrow::where('user_id', $user->id)->latest()->paginate(10);
        return view('borrows', compact('title', 'borrows'));
    }

    public function detail(Borrow $borrow)
    {
        $title = 'Detail Peminjaman';
        return view('borrow-detail', compact('title', 'borrow'));
    }
}
