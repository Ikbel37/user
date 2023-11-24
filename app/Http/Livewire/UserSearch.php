<?php

namespace App\Http\Livewire;
use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Url;


class UserSearch extends Component
{
    public $search = '';
    public $users;

    public function render()
    { 
        $this->users = User::where('name','like','%'.$this->search.'%')->get();
        return view('livewire.user-search');
    }




    public function delete($id){

        $data=User::find($id);
        $data->delete();

        return redirect()->back();
    }


    public function forceDelete($id)
    { 
        $user = User::withTrashed()->find($id);
        if ($user) {
            $user->forceDelete();
            return redirect()->route('in')->with('success', 'User permanently deleted.');
        }
        return redirect()->route('in')->with('error', 'User not found.');
    }


    public function home()
    {
        return view('');
    }


    public function trashed()
    {
        $utili = User::onlyTrashed()->get();
        return view('login.in',compact('utili'));

    }


    public function restoreAll()
    {
        User::onlyTrashed()->restore();
        return back();
    }

    
    public function restore($id)
    {
    $user = User::withTrashed()->find($id);

        if ($user) {
            $user->restore();
            return redirect()->route('in')->with('success', 'User restored successfully.');
        }
        return redirect()->route('in')->with('error', 'User not found.');
}
}
