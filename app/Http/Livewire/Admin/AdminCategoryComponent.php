<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class AdminCategoryComponent extends Component
{
    use WithPagination;
    public $searchTerm;

    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();
        session()->flash('message','Category has been deleted successfully!');
    }

    public function render()
    {
        $search = '%' . $this->searchTerm . '%';
        $categories = Category::orderBy('created_at','DESC')->where('name','LIKE',$search)
                ->orwhere('id','DESC')->paginate(5);
        return view('livewire.admin.admin-category-component',['categories'=>$categories])->layout('layouts.base');
    }
}
