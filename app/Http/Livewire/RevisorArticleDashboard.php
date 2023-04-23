<?php

namespace App\Http\Livewire;


use App\Models\Article;
use Livewire\Component;

class RevisorArticleDashboard extends Component
{
    public $article;
    public $showImages;
   
    public function toggleShowImages()
    {
        $this->showImages = !$this->showImages;
    }

    public function mount(Article $article)
    {
        $this->article = $article;
        $this->showImages = true;
        $this->showDetails = true;
    }

    public function render()
    {
        return view('livewire.revisor-article-dashboard');
    }
}
