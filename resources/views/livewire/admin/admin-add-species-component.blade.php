<div>
    <div class="container" style="padding:100px 0px">
       <div class="col-md-12">
           <div class="panel panel-default">
               <div class="panel-heading">
                <div class="row g-0">
                    <div class="col-sm-6 col-md-9">
                        Add Species
                    </div>
                    <div class="col-6 col-md-3">
                        <a href="{{ route('admin.species') }}" class="btn btn-success pull-right">All Species</a>
                    </div>
                </div>                     
               </div>
               <div class="mb-3">
                   @if(Session::has('message'))
                   <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                   @endif
                   <form class="form-horizontal php-email-form" wire:submit.prevent="AddSpecies">
                    <div class="row">
                        
                    <div class="form-group  col-md-6">
                        <label class="col-md-4 control-label" for="">Regular Name</label>                               
                        <input type="text" placeholder="Regular Name" class="form-control input-md @error('regularName') border border-danger @enderror" value="{{old('regularName')}}" wire:model="regularName">
                        @error('regularName')  <p class="text-danger">{{ $message }}</p> @enderror                            
                    </div>
                
                
                    <div class="form-group col-md-6">
                        <label class="col-md-4 control-label" for="">Scientific Name</label>                              
                        <input type="text" placeholder="Enter Scientific Name" class="form-control input-md @error('ScientificName') border border-danger @enderror" value="{{old('ScientificName')}}" wire:model="ScientificName">
                        @error('ScientificName')  <p class="text-danger">{{ $message }}</p> @enderror                              
                    </div>
                                    
                
                    <div class="form-group col-md-6">
                        <label class="col-md-4 control-label" for="">Description</label>    
                        <textarea name="Description" id="Description" placeholder="Enter Description" class="form-control input-md @error('Description') border border-danger @enderror" value="{{old('Description')}}" wire:model="Description"></textarea>                          
                        @error('Description')  <p class="text-danger">{{ $message }}</p> @enderror                              
                    </div>
                
                    <div class="form-group col-md-6">
                        <label class="col-md-4 control-label" for="">Details</label>    
                        <textarea name="details" id="details" placeholder="Enter Description Details" class="form-control input-md @error('details') border border-danger @enderror" value="{{old('details')}}" wire:model="details"></textarea>                          
                        @error('details')  <p class="text-danger">{{ $message }}</p> @enderror                              
                    </div>
                
                
                    <div class="form-group col-md-6">
                        <label class="col-md-4 control-label" for="">King Dome</label>                              
                        <input type="text" placeholder="Enter kingdome" class="form-control input-md @error('kingdome') border border-danger @enderror" value="{{old('kingdome')}}" wire:model="kingdome">
                        @error('kingdome')  <p class="text-danger">{{ $message }}</p> @enderror                              
                    </div>
                    
                
                    <div class="form-group col-md-6">
                        <label class="col-md-4 control-label" for="">Phylum</label>                              
                        <input type="text" placeholder="Enter phylum" class="form-control input-md @error('phylum') border border-danger @enderror" value="{{old('phylum')}}" wire:model="phylum">
                        @error('phylum')  <p class="text-danger">{{ $message }}</p> @enderror                              
                    </div>
                    
                
                    <div class="form-group col-md-6">
                        <label class="col-md-4 control-label" for="">Class</label>                              
                        <input type="text" placeholder="Enter class" class="form-control input-md @error('class') border border-danger @enderror" value="{{old('class')}}" wire:model="class">
                        @error('class')  <p class="text-danger">{{ $message }}</p> @enderror                              
                    </div>
                
                
                    <div class="form-group col-md-6">
                        <label class="col-md-4 control-label" for="">Order</label>                              
                        <input type="text" placeholder="Enter Order" class="form-control input-md @error('orders') border border-danger @enderror" value="{{old('orders')}}" wire:model="orders">
                        @error('orders')  <p class="text-danger">{{ $message }}</p> @enderror                              
                    </div>
            
            
                    <div class="form-group col-md-6">
                        <label class="col-md-4 control-label" for="">Family</label>                              
                        <input type="text" placeholder="Enter family" class="form-control input-md @error('family') border border-danger @enderror" value="{{old('family')}}" wire:model="family">
                        @error('family')  <p class="text-danger">{{ $message }}</p> @enderror                              
                    </div>
                
                    <div class="form-group col-md-6">
                        <label class="col-md-4 control-label" for="">Genus</label>                              
                        <input type="text" placeholder="Enter genus" class="form-control input-md @error('genus') border border-danger @enderror" value="{{old('genus')}}" wire:model="genus">
                        @error('genus')  <p class="text-danger">{{ $message }}</p> @enderror                              
                    </div>
                
                
                    <div class="form-group col-md-6">
                        <label class="col-md-4 control-label" for="">Species</label>                              
                        <input type="text" placeholder="Enter species" class="form-control input-md @error('species') border border-danger @enderror" value="{{old('species')}}" wire:model="species">
                        @error('species')  <p class="text-danger">{{ $message }}</p> @enderror                              
                    </div>
            
                    <div class="form-group col-md-6">                    
                        <label class="col-md-4 control-label" for="">Status</label>   
                        <div class="col-md-4">                          
                            <select class="form-control input-md @error('status') border border-danger @enderror" value="{{old('status')}}" name="status" id="status" wire:model="status">
                                <option value="Health">Health</option>
                                <option value="Exihibit">Exihibit</option>
                                <option value="Indenger">Indenger</option>
                            </select>
                            @error('status')  <p class="text-danger">{{ $message }}</p> @enderror  
                        </div>                            
                    </div>
            
                
                    <div class="form-group col-md-6">
                        <label class="col-md-4 control-label" for="">Image</label>                              
                        <input type="file" placeholder="Category Slug" class="input-file" wire:model="images">
                        @if($images)
                            <img src="{{ $images->temporaryUrl() }}" width="120" alt="">
                        @endif
                        @error('images')  <p class="text-danger">{{ $message }}</p> @enderror                                                         
                    </div>
            
                   
                    <div class="form-group col-md-6">
                        <label class="col-md-4 control-label"></label>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                      
                   </form>
               </div>
           </div>
         </div>
       </div>
   </div>
   