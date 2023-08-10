<div>
    <div class="container" style="padding:100px 0px">
       <div class="col-md-12">
           <div class="panel panel-default">
               <div class="panel-heading">
                <div class="row g-0">
                    <div class="col-sm-6 col-md-9">
                        Edit Taxonomy
                    </div>
                    <div class="col-6 col-md-3">
                        <a href="{{ route('admin.taxonomies') }}" class="btn btn-success pull-right">All Taxonomy</a>
                    </div>
                </div>                     
               </div>
               <div class="mb-3">
                   @if(Session::has('message'))
                   <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                   @endif
                   <form class="form-horizontal" wire:submit.prevent="EditTaxonomy">
                    <div class="row">                        
                       
                        <div class="form-group col-md-6">
                            <label class="col-md-4 control-label" for="">KingDome <span class="text-danger">*</span></label>                              
                            <input type="text" placeholder="Enter text" class="form-control input-md @error('kingdome') border border-danger @enderror" value="{{old('kingdome')}}" wire:model="kingdome">
                            @error('kingdome')  <p class="text-danger">{{ $message }}</p> @enderror                              
                        </div>          
                    
                        <div class="form-group col-md-6">
                            <label class="col-md-4 control-label" for="">Phylum <span class="text-danger">*</span></label>                              
                            <input type="text" placeholder="Enter text" class="form-control input-md @error('phylum') border border-danger @enderror" value="{{old('phylum')}}" wire:model="phylum">
                            @error('phylum')  <p class="text-danger">{{ $message }}</p> @enderror                              
                        </div> 

                        <div class="form-group col-md-6">
                            <label class="col-md-4 control-label" for="">Class <span class="text-danger">*</span></label>                              
                            <input type="text" placeholder="Enter text" class="form-control input-md @error('class') border border-danger @enderror" value="{{old('class')}}" wire:model="class">
                            @error('class')  <p class="text-danger">{{ $message }}</p> @enderror                              
                        </div> 

                        <div class="form-group col-md-6">
                            <label class="col-md-4 control-label" for="">Order <span class="text-danger">*</span></label>                              
                            <input type="text" placeholder="Enter text" class="form-control input-md @error('order') border border-danger @enderror" value="{{old('order')}}" wire:model="order">
                            @error('order')  <p class="text-danger">{{ $message }}</p> @enderror                              
                        </div> 

                        <div class="form-group col-md-6">
                            <label class="col-md-4 control-label" for="">Family <span class="text-danger">*</span></label>                              
                            <input type="text" placeholder="Enter text" class="form-control input-md @error('family') border border-danger @enderror" value="{{old('family')}}" wire:model="family">
                            @error('family')  <p class="text-danger">{{ $message }}</p> @enderror                              
                        </div> 

                        <div class="form-group col-md-6">
                            <label class="col-md-4 control-label" for="">Genus <span class="text-danger">*</span></label>                              
                            <input type="text" placeholder="Enter text" class="form-control input-md @error('genus') border border-danger @enderror" value="{{old('genus')}}" wire:model="genus">
                            @error('genus')  <p class="text-danger">{{ $message }}</p> @enderror                              
                        </div>

                        <div class="form-group col-md-6">
                            <label class="col-md-4 control-label" for="">Species <span class="text-danger">*</span></label>                              
                            <input type="text" placeholder="Enter text" class="form-control input-md @error('species') border border-danger @enderror" value="{{old('species')}}" wire:model="species">
                            @error('species')  <p class="text-danger">{{ $message }}</p> @enderror                              
                        </div>
                
                    <div class="form-group col-md-6">
                        <label class="col-md-4 control-label"></label>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>   
                   </form>
               </div>
           </div>
         </div>
       </div>
   </div>
   