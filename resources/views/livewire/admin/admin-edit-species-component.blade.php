<div>
    <div class="container" style="padding:100px 0px">
       <div class="col-md-12">
           <div class="panel panel-default">
               <div class="panel-heading">
                <div class="row g-0">
                    <div class="col-sm-6 col-md-9">
                        Edit Species
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
                   <form class="form-horizontal" wire:submit.prevent="UpdatedSpecies">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="">Regular Name</label>                               
                                <input type="text" placeholder="Regular Name" class="form-control input-md @error('regularName') border border-danger @enderror" value="{{old('regularName')}}" wire:model="regularName">
                                @error('regularName')  <p class="text-danger">{{ $message }}</p> @enderror                            
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="">Scientific Name</label>                              
                                <input type="text" placeholder="Enter Scientific Name" class="form-control input-md @error('ScientificName') border border-danger @enderror" value="{{old('ScientificName')}}" wire:model="ScientificName">
                                @error('ScientificName')  <p class="text-danger">{{ $message }}</p> @enderror                              
                            </div>
                        </div>                      
                        <div class="col-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="">Description</label>                              
                                <input type="text" placeholder="Enter Description" class="form-control input-md @error('Description') border border-danger @enderror" value="{{old('Description')}}" wire:model="Description">
                                @error('Description')  <p class="text-danger">{{ $message }}</p> @enderror                              
                            </div>
                        </div>                       
                        <div class="col-6">
                            <div class="form-group">
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
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="">Image</label>                              
                                <input type="file" placeholder="Category Slug" class="input-file" wire:model="images">
                                @if($images)
                                    <img src="{{ $images->temporaryUrl() }}" width="120" alt="">
                                @endif
                                @error('images')  <p class="text-danger">{{ $message }}</p> @enderror                                                         
                            </div>
                        </div>
                    </div>
                       <div class="form-group">
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
   