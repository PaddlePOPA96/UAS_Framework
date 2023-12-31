
@extends('layouts.app')
<style>
    .content.showing {
        position: relative;
        overflow: hidden;
        width: 100%;
        height: 100vh;
    }
    .content.showing .background-image {
        position: absolute;
 
        width: 100%;
        height: 100%;
        background-size: cover;
        background-repeat: no-repeat;
    }
    p{
    text-size-adjust: 10rem;
    size: 2rem;
    line-height: 2;
    font-size: 1rem;
    color:black;
    /* padding: 1rem 0; */
    }
 

.text-left{
margin-left: 5rem;
margin-top:5rem;

}
</style>

@section('content')
<div class="content showing bg-auto" style="background-image: url({{ Vite::asset('resources/images/home.jpg') }}); background-repeat: no-repeat; background-size: cover;">
    <div class="row">
      <div class="col-md-6 d-flex align-items-center justify-content-start">
        <div>
          <h3 class="text-left">make your smile shine</h3>
          <p class="text-left">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti, dolores. Ad rerum eum assumenda mollitia autem quo nulla, consequatur quisquam est? Dolorem fugiat fugit amet dolores provident velit eos est.</p>
          <button type="button" class="btn btn-primary">Primary</button>
        </div>
      </div>
    </div>
  </div>
@endsection
