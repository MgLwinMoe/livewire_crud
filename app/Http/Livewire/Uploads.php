<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Upload;
use Livewire\WithFileUploads;

class Uploads extends Component
{
    public $title;
    public $filename;
    use WithFileUploads;

    public function uploadfile()
    {
        $validatedData = $this->validate([
            'title' => 'required',
            'filename' => 'required',
        ]);
        $filename = $this->filename->store('files', 'public');
        $validatedData['filename'] = $filename;
        Upload::create($validatedData);
        session()->flash('message', 'File uploaded successfully');
        $this->emit('fileupload');
    }




    public function render()
    {
        return view('livewire.uploads');
    }
}
