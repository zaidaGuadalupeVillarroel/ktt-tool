<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TireBatchForm extends Component
{
    public $identifier;
    public $batch_date;
    public $country;
    public $rubber_percentage;
    public $black_carbon_percentage;
    public $fibre_percentage;
    public $quality;

    public function render()
    {
        return view('livewire.tire-batch-form');
    }

    public function submit()
    {
            $validatedData = $this->validate([
                'identifier'                => 'required|min:6',
                'batch_date'                => 'required|date',
                'country'                   => 'required',
                'rubber_percentage'         => 'required', 
                'black_carbon_percentage'   => 'required',
                'fibre_percentage'          => 'required',
                'quality'                   => 'required'
            ]);
  
        
  
        return redirect()->to('/estimation');
    }
}
