<div class="blog-post">
    <h2 class="blog-post-title">Update App logo</h2>
            
    {{ Form::open(array('route'=>'post-profile-photo', 'class'=>'form-signup', 'files'=> true)) }}
 
    @include('layout.fragments.error', ['errors' => $errors])
        
    {{ Form::file('photo', null, array('class'=>'form-control margin-bottom', 'placeholder'=>'city')) }}
    
    {{ Form::submit('Upload photo', array('class'=>'btn btn-success margin-top'))}}
    
{{ Form::close() }}
