<?php

namespace App\Livewire;

use App\Models\Speciality;

use Livewire\Component;

class SpecialityFormComponent extends Component
{
    public $speciality_name='';


    public function save()
    {
        $this->validate([
            'speciality_name' => 'required'
        ]);

        $save=Speciality::create([
                    'speciality_name' => $this->speciality_name
                ]);
                session()->flash('message', 'Speciality created successfully.');

        return redirect()->route('admin.speciality');
        //

        $this->name = '';
    }
    public function render()
    {
        return view('livewire.speciality-form-component');
    }
}
