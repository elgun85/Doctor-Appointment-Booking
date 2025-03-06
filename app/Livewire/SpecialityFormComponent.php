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

    try {
        // Yaradılma əməliyyatı
        $save = Speciality::create([
            'speciality_name' => $this->speciality_name
        ]);

        // Əgər əməliyyat uğurludursa success mesajı göndərilir
        session()->flash('message', 'Speciality created successfully.');
    } catch (\Exception $e) {
        // Əgər səhv baş verərsə error mesajı göndərilir
        session()->flash('error', 'An error occurred while creating the speciality.');
    }

    return redirect()->route('admin.speciality');
}

    public function render()
    {
        return view('livewire.speciality-form-component');
    }
}
