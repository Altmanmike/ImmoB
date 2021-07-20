@if($message = Session::get('warning'))
    <div class="alert alert-success alert-bloc mx-auto w-50 text-center">        
        <strong>{{ $message }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@elseif($message != Session::get('warning'))
    <div class="alert alert-danger alert-bloc mx-auto w-50 text-center">        
        <strong>{{ $message }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif