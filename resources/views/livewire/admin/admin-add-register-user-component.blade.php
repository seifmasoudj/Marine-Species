<div>
    <div class="container" style="padding:100px 0px">
       <div class="col-md-12">
           <div class="panel panel-default">
               <div class="panel-heading">
                   <div class="row">
                       <div class="col-md-6">
                           Add New User
                       </div> 
                       <div class="col-md-6">
                           <a href="{{ route('admin.register') }}" class="btn btn-success pull-right">All User</a>
                       </div>
                   </div>
               </div>
               <div class="panel-body">
                   @if(Session::has('message'))
                   <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                   @endif
                   <form class="form-horizontal" wire:submit.prevent="storeUser">
                       <div class="form-group">
                           <label class="col-md-4 control-label" for="">Name  <span class="text-danger">*</span></label>
                           <div class="col-md-4">
                               <input type="text" placeholder="Name" class="form-control input-md" wire:model="name">
                               @error('name')  <p class="text-danger">{{ $message }}</p> @enderror                         
                           </div>
                       </div> 
                       
                       <div class="form-group">
                           <label class="col-md-4 control-label" for="">Email  <span class="text-danger">*</span></label>
                           <div class="col-md-4">
                               <input type="email" placeholder="email" class="form-control input-md" wire:model="email">
                               @error('email')  <p class="text-danger">{{ $message }}</p> @enderror
                           </div>
                       </div>

                       <div class="form-group">
                            <label class="col-md-4 control-label" for="">Password  <span class="text-danger">*</span></label>
                            <div class="col-md-4">
                                <input type="password" placeholder="Password" class="form-control input-md" wire:model="password">
                                @error('password')  <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                        </div>
   
                       <div class="form-group">
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
   