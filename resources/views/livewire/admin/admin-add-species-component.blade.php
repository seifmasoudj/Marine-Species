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
                        <label class="col-md-4 control-label" for="">Regular Name <span class="text-danger">*</span></label>                               
                        <input type="text" placeholder="Regular Name" class="form-control input-md @error('regularName') border border-danger @enderror" value="{{old('regularName')}}" wire:model="regularName">
                        @error('regularName')  <p class="text-danger">{{ $message }}</p> @enderror                            
                    </div>
                
                
                    <div class="form-group col-md-6">
                        <label class="col-md-4 control-label" for="">Scientific Name <span class="text-danger">*</span></label>                              
                        <input type="text" placeholder="Enter Scientific Name" class="form-control input-md @error('ScientificName') border border-danger @enderror" value="{{old('ScientificName')}}" wire:model="ScientificName">
                        @error('ScientificName')  <p class="text-danger">{{ $message }}</p> @enderror                              
                    </div>
                                    
                
                    <div class="form-group col-md-6">
                        <label class="col-md-4 control-label" for="">Description <span class="text-danger">*</span></label>    
                        <textarea name="Description" id="Description" placeholder="Enter Description" class="form-control input-md @error('Description') border border-danger @enderror" value="{{old('Description')}}" wire:model="Description"></textarea>                          
                        @error('Description')  <p class="text-danger">{{ $message }}</p> @enderror                              
                    </div>
                
                    <div class="form-group col-md-6">
                        <label class="col-md-4 control-label" for="">Details <span class="text-danger">*</span></label>    
                        <textarea name="details" id="details" placeholder="Enter Description Details" class="form-control input-md @error('details') border border-danger @enderror" value="{{old('details')}}" wire:model="details"></textarea>                          
                        @error('details')  <p class="text-danger">{{ $message }}</p> @enderror                              
                    </div>
                
                
                    <div class="form-group col-md-6">
                        <label class="col-md-4 control-label" for="">King Dome <span class="text-danger">*</span></label>  
                        <select class="form-control input-md @error('kingdome') border border-danger @enderror" value="{{old('kingdome')}}" name="kingdome" id="kingdome" wire:model="kingdome">
                            <option value="Health">kingdome Protista</option>
                            <option value="Exihibit">kingdom monera</option>
                            <option value="Indenger">Kingdome Animalia</option>
                            <option value="Indenger">Kingdome Fungi</option>
                            <option value="Indenger">Kingdome Plantae</option>
                        </select>                            
                        @error('kingdome') <p class="text-danger">{{ $message }}</p> @enderror                              
                    </div>
                    
                
                    <div class="form-group col-md-6">
                        <label class="col-md-4 control-label" for="">Phylum <span class="text-danger">*</span></label>  
                        <select class="form-control input-md @error('phylum') border border-danger @enderror" value="{{old('phylum')}}" name="phylum" id="phylum" wire:model="phylum">
                            <option value="Health">Annelida</option>
                            <option value="Exihibit">Annelida</option>
                            <option value="Indenger">Arthropoda</option>
                            <option value="Indenger">Porifera</option>
                            <option value="Indenger">Mollusca</option>
                        </select>                              
                        @error('phylum')  <p class="text-danger">{{ $message }}</p> @enderror                              
                    </div>
                    
                
                    <div class="form-group col-md-6">
                        <label class="col-md-4 control-label" for="">Class <span class="text-danger">*</span></label> 
                        <select class="form-control input-md @error('class') border border-danger @enderror" value="{{old('class')}}" name="class" id="class" wire:model="class">
                            <option value="Health">Amphibia</option>
                            <option value="Exihibit">Reptilia</option>
                            <option value="Indenger">Malocostraca</option>
                            <option value="Exihibit">Mammalia</option>
                            <option value="Indenger">Mammalia</option>
                        </select>                              
                        @error('class')  <p class="text-danger">{{ $message }}</p> @enderror                              
                    </div>
                
                
                    <div class="form-group col-md-6">
                        <label class="col-md-4 control-label" for="">Order <span class="text-danger">*</span></label>
                        <select class="form-control input-md @error('orders') border border-danger @enderror" value="{{old('orders')}}" name="orders" id="orders" wire:model="orders">
                            <option value="Health">Felidae</option>
                            <option value="Exihibit">Srongylocentrotidae</option>
                            <option value="Indenger">Branchyura</option>
                            <option value="Exihibit">Felidae</option>
                            <option value="Indenger">Brachyura</option>
                        </select>                                
                        @error('orders')  <p class="text-danger">{{ $message }}</p> @enderror                              
                    </div>
            
            
                    <div class="form-group col-md-6">
                        <label class="col-md-4 control-label" for="">Family <span class="text-danger">*</span></label>  
                        <select class="form-control input-md @error('family') border border-danger @enderror" value="{{old('family')}}" name="family" id="family" wire:model="family">
                            <option value="Health">Decapoda</option>
                            <option value="Exihibit">Echinoida</option>
                            <option value="Indenger">Decapoda</option>
                            <option value="Exihibit">Primate</option>
                            <option value="Indenger">Primate</option>
                        </select>                                             
                        @error('family')  <p class="text-danger">{{ $message }}</p> @enderror                              
                    </div>
                
                    <div class="form-group col-md-6">
                        <label class="col-md-4 control-label" for="">Genus <span class="text-danger">*</span></label>     
                        <select class="form-control input-md @error('genus') border border-danger @enderror" value="{{old('genus')}}" name="genus" id="genus" wire:model="genus">
                            <option value="Health">Lynx</option>
                            <option value="Exihibit">Srongylocentrotus</option>
                            <option value="Indenger">Sylla</option>
                            <option value="Exihibit">Homo</option>
                            <option value="Indenger">Sylla</option>
                        </select>                      
                        @error('genus')  <p class="text-danger">{{ $message }}</p> @enderror                              
                    </div>
                
                    <div class="form-group col-md-6">
                        <label class="col-md-4 control-label" for="">Species <span class="text-danger">*</span></label>       
                        <select class="form-control input-md @error('species') border border-danger @enderror" value="{{old('species')}}" name="species" id="species" wire:model="species">
                            <option value="Health">lynx</option>
                            <option value="Exihibit">droebachiensis</option>
                            <option value="Indenger">Serata</option>
                            <option value="Exihibit">Sapiens</option>
                            <option value="Indenger">serata</option>
                        </select>                   
                        @error('species')  <p class="text-danger">{{ $message }}</p> @enderror                              
                    </div>
            
                    <div class="form-group col-md-6">                    
                        <label class="col-md-4 control-label" for="">Status <span class="text-danger">*</span></label>   
                        <div class="col-md-4">                          
                            <select class="form-control input-md @error('status') border border-danger @enderror" value="{{old('status')}}" name="status" id="status" wire:model="status">
                                <option value="Available">Available</option>
                                <option value="Extinct">Extinct</option>
                                <option value="Indanger">Indanger</option>
                            </select>
                            @error('status')  <p class="text-danger">{{ $message }}</p> @enderror  
                        </div>                            
                    </div>
                
                    <div class="form-group col-md-6">
                        <label class="col-md-4 control-label" for="">Image <span class="text-danger">*</span></label>                              
                        <input type="file" wire:model="images" class="form-control input-md @error('images') border border-danger @enderror" value="{{old('images')}}">
                        @if($images)
                            <img src="{{ $images->temporaryUrl() }}" width="120" alt="">
                        @endif
                        @error('images')  <p class="text-danger">{{ $message }}</p> @enderror                                                         
                    </div>   
                    
                    <div class="form-group col-md-6">                    
                        <label class="col-md-4 control-label" for="">Select Category <span class="text-danger">*</span></label>   
                        <div class="col-md-4">                          
                            <select class="form-control input-md @error('category') border border-danger @enderror" value="{{old('category')}}" name="category" id="category" wire:model="category">
                                <option value="Apostichopus japonicus">Apostichopus japonicus</option>
                                <option value="Holothuria atra">Holothuria atra</option>
                                <option value="Holothuria scabra">Holothuria scabra</option>
                                <option value="Holothuria">Holothuria</option>
                                <option value="Royal cucumber"> Royal cucumber</option>  
                                <option value=" Synallactida"> Synallactida</option>        
                                <option value="Holothuriidae"> Holothuriidae</option>    
                                <option value="Aspidochirotida"> Aspidochirotida</option>      
                                <option value="Holothuriida"> Holothuriida</option>   
                                <option value="Blue Crab"> Blue Crab</option>    
                                <option value="Blue Crab"> Blue Crab</option>          
                                <option value=" Snow Crab"> Snow Crab</option>
                                <option value="Coconut Crab"> Coconut Crab</option>          
                                <option value="Dungeness crab"> Dungeness crab </option>    
                                <option value="Stone crab"> Stone crab </option>    
                                <option value="Hermit crab"> Hermit crab  </option> 
                                <option value="European green crab"> European green crab </option> 
                                <option value="Houseshoe crab"> Houseshoe crab</option> 
                                <option value="Cancer pagurus"> Cancer pagurus</option> 
                                <option value="Flower crab"> Flower crab</option> 
                                <option value="Atlantic rock crab"> Atlantic rock crab</option> 
                                <option value="Fiddler crab"> Fiddler crab</option> 
                                <option value="Soft-shell crab"> Soft-shell crab</option> 
                                <option value="Spider crab"> Spider crab</option> 
                                <option value="Red rock crab"> Red rock crab</option> 
                                <option value="Chinese mitten crab"> Chinese mitten crab</option> 
                                <option value="Horsehair crab"> Horsehair crab</option> 
                                <option value="Jonah crab"> Jonah crab</option> 
                                <option value="Velvet crab"> Velvet crab</option> 
                                <option value="Ghost crab"> Ghost crab</option> 
                                <option value="Giant mud crab"> Giant mud crab</option>
                                <option value="Chionoecetes bairdi"> Chionoecetes bairdi</option>
                            </select>
                            @error('category')  <p class="text-danger">{{ $message }}</p> @enderror  
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
   