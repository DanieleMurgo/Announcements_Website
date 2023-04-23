<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;
use Livewire\WithFileUploads;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CreateForm extends Component
{   

    use WithFileUploads;

    public $title;
    public $description;
    public $price;
    public $temporary_images;
    public $images = [];
    public $category_id;
    public $user_id;
    public $article;
    public $category_name;
    public $imgPreview;


    protected $rules =[
        'title' => 'required|min:6',
        'price' => 'required|min:1',
        'description'  => 'required|min:20',
        'category_id' => 'required',
        'images.*' => 'required|image|max:2048',
        'temporary_images.*' => 'required|image|max:2048',
    ];

    protected $messages =[
        'required'=> 'il campo :attribute è richiesto',
        'min'=> 'il campo :attribute è troppo corto ',
        'temporary_images.required' => 'L\'immagine è richiesta',
        'temporary_images.*.image' => 'I file devono essere immagini',
        'temporary_images.*.max' => 'L\'immagine dev\'essere massimo di 2mb',
    ];

  

    public function updatedTemporaryImages()
    {
            if($this->validate([
                    'temporary_images.*'=>'image|max:2048',
               ])){
                foreach($this->temporary_images as $image) {
                $this->images[] = $image;
            }
            $this->imgPreview = $this->images[0];
        }
    }


    public function updatedCategoryId() {
        $selected_category=Category::find($this->category_id);
        if($selected_category){
            $this->category_name=$selected_category->name;
        } else {
            $this->category_name="Categoria";
        }
    }

    public function updated($propertyName)
    {

        $this->validateOnly($propertyName);

    }
   
    public function removeImage($key)
    {
        if(in_array($key, array_keys($this->images))){
        unset($this->images[$key]);
        
        }
     }


     public function store()
     {
        $this->validate();

        $this->article = Category::find($this->category_id)->articles()->create([
            'title' => $this->title,
            'price' => $this->price,
            'description' => $this->description,
            'user_id' => Auth::user()->id,
        ]);
        if(count($this->images))
        {
        foreach($this->images as $image){
            $newFileName = "articles/{$this->article->id}";
            $newImage = $this->article->images()->create(['path'=>$image->store($newFileName, 'public')]);

        
        RemoveFaces::withChain([
            new ResizeImage($newImage->path, 640, 440),
            new GoogleVisionSafeSearch($newImage->id),
            new GoogleVisionLabelImage($newImage->id)

        ])->dispatch($newImage->id);
        

        }
        File::deleteDirectory(storage_path('/app/liwewire-tmp'));
        }
        $this->reset();
        session()->flash('message', 'Hai inviato l\'annuncio al nostro revisore, a breve sarà inserito');
        return redirect()->route('home');
     }
 

    public function render()
    {   
        $categories = Category::all();
        return view('livewire.create-form',compact('categories'));
    }
}
