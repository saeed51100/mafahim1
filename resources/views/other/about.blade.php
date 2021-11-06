@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <p class="quote">About Me</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda commodi illum nobis nostrum numquam
                officiis possimus provident rem repellat sint? Dicta eligendi eum hic, labore nisi non quidem quos
                voluptates...
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa debitis magni modi nihil numquam odit
                pariatur recusandae repellendus sint voluptates. Blanditiis expedita minus nostrum numquam placeat porro
                praesentium quae soluta!</p>
        </div>
    </div>


    <br>
    <br>
    <br>
    {{--TODO:
     The following code adds contact us.
     https://www.w3schools.com/icons/tryit.asp?filename=tryicons_fa-telegram
     https://stackoverflow.com/questions/2906582/how-to-create-an-html-button-that-acts-like-a-link?rq=1
     saeed doc--}}

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <h3>Contact Us:</h3>
    <button style="font-size:24px"
            onclick="location.href='https://t.me/mafahimtel'">
        <i class="fa fa-telegram" style="color:red"></i>
        @mafahimtel
    </button>




@endsection
