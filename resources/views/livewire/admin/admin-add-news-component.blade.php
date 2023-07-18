<div>
    <div class="container" style="padding:100px 0px">
       <div class="col-md-12">
           <div class="panel panel-default">
               <div class="panel-heading">
                <div class="row g-0">
                    <div class="col-sm-6 col-md-9">
                        Add News
                    </div>
                    <div class="col-6 col-md-3">
                        <a href="{{ route('admin.news') }}" class="btn btn-success pull-right">All News</a>
                    </div>
                </div>                     
               </div>
               <div class="mb-3">
                   @if(Session::has('message'))
                   <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                   @endif
                   <form class="form-horizontal php-email-form" wire:submit.prevent="AddNews">
                    <div class="row">                        
                       
                        <div class="form-group col-md-6">
                            <label class="col-md-4 control-label" for="">Title</label>                              
                            <input type="text" placeholder="Enter title" class="form-control input-md @error('title') border border-danger @enderror" value="{{old('title')}}" wire:model="title">
                            @error('title')  <p class="text-danger">{{ $message }}</p> @enderror                              
                        </div>
                                        
                    
                        <div class="form-group col-md-6">
                            <label class="col-md-4 control-label" for="">Description</label>    
                            <textarea name="Descriptions" id="Descriptions" placeholder="Enter Description" class="form-control input-md @error('Descriptions') border border-danger @enderror" value="{{old('Descriptions')}}" wire:model="Descriptions"></textarea>                          
                            @error('Descriptions')  <p class="text-danger">{{ $message }}</p> @enderror                              
                        </div>
                                        
                    
                        <div class="form-group col-md-6">
                            <label class="col-md-4 control-label" for="">Status</label>   
                            <div class="col-md-4">                          
                                <select class="form-control input-md @error('status') border border-danger @enderror" value="{{old('status')}}" name="status" id="status" wire:model="status">
                                    <option value="active">Active</option>
                                    <option value="Inactive">Inactive</option>                                       
                                </select>
                                @error('status')  <p class="text-danger">{{ $message }}</p> @enderror  
                            </div>                            
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
   