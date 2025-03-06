<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Speciality;
use Livewire\WithPagination;

class SpecialityListing extends Component
{
    public $speciality_name;
    use WithPagination;

    public $rules = [
        'speciality_name' => 'required|min:3|max:255|string',
    ];

    public function resetInput()
    {
        $this->speciality_name = null;
    }



    public function save()
    {
        $this->validate();
        if (Speciality::where('speciality_name', $this->speciality_name)->exists()) {
            toastr()->error('Speciality Already Exists.');
        } else {
            $data = Speciality::create([
                'speciality_name' => $this->speciality_name,
            ]);
            if ($data) {
                toastr()->success('Speciality Created Successfully.');
                $this->resetInput();
                $this->dispatch('closeModal'); // Modal bağlanmalıdır
            } else {
                toastr()->error('Something Went Wrong.');
            }
        }
    }



    public function delete($id)
    {
        $speciality = Speciality::find($id);
        $speciality->delete();
        session()->flash('message', 'Speciality Deleted Successfully.');
    }
    public function render()
    {
        $specialities = Speciality::orderBy('id', 'desc')->paginate(5);
        return view('livewire.speciality-listing', compact('specialities'));
    }



}
