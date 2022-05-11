<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Brand as BrandModel;

class Brand extends Component
{
    public $data, $name, $description, $selected_id;

    public $updateMode = false;

    public function render()
    {
        $this->data = BrandModel::all();
        return view('livewire.brand');
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|min:5',
            'description' => 'required|min:5'
        ]);
        BrandModel::create([
            'name' => $this->name,
            'description' => $this->description
        ]);
        $this->name = null;
        $this->description= null;
    }
    public function edit($id)
    {
        $brand = BrandModel::findOrFail($id);
        $this->selected_id = $id;
        $this->name = $brand->name;
        $this->description= $brand->description;
        $this->updateMode = true;
    }
    public function update()
    {
        $this->validate([
            'selected_id' => 'required|numeric',
            'name' => 'required|min:2',
            'description' => 'required|min:2'
        ]);
        if ($this->selected_id) {
            $record = BrandModel::find($this->selected_id);
            $record->update([
                'name' => $this->name,
                'description' => $this->description
            ]);
            $this->name = null;
            $this->description= null;
            $this->updateMode = false;
        }
    }
    public function destroy($id)
    {
        if ($id) {
            $record = BrandModel::where('id', $id);
            $record->delete();
        }
    }
}
