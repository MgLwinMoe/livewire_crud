<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Image;
class Images extends Component
{
    public $images =[];
    use WithFileUploads;

    public function imageupload()
    {
        foreach($this->images as $key=>$image)
        {
            $this->images[$key] = $image->store('images', 'public');
        }
        // $this->images = json_encode($this->images);
        Image::create(['filename', $this->images]);
        session()->flash('message', 'Image File has been uploaded');
        $this->emit('imagesupload');

    }

    public function render()
    {
        return view('livewire.images');
    }
}
