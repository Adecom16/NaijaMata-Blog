@extends('layouts.app')
{{-- @yield('style') --}}
@section('content')

@section('style')
<style>
    nav{
        height: 120px;
        background: rgb(235, 235, 235);
        box-shadow: 3px 5px 9px rgba(0, 0, 0, 0.3);
    }
    .foot{
        /* padding-top: 200px; */
        padding: 150px;

        width: 100%;
        background-color: rgb(0, 0, 0);
    }
    .fut{
        margin-top: 100px;
        height: 520px;
        border-radius: 15px;
        width: 49vh;
        margin-left: 600px;
        background-color: rgb(236, 236, 236);
        box-shadow: 2px 3px 5px rgba(0, 0, 0, 0.5);
    }
    .fut form{
        margin-left: 20px;
    }
    input{
        padding: 7px;
        /* width: 100px; */
    }
    textarea{
        width: 325px;

    }
    button{
        width: 100%;
        padding: 10px;
        border: none;
        background:gainsboro;


    }
</style>
@endsection
{{-- <h1>Admin</h1> --}}
<div class="fut">
    <h3 class="pt-5 ps-4">Admin</h3>
<form  action="{{ Route('news.post') }}" method="POST">
    @csrf
    <p>Title</p>
    <input size="37" type="text" name="title" >
    <p>Content</p>
    <textarea name="content" size=''></textarea><br>
    <p>Author</p>
    <input  size="37" type="text" name="author" id=""><br>
    <p>Picture Url</p>
    <input  size="37" type="text" name="picture">
    <br>
    <br>
    {{-- <button type="submit">Submit</button> --}}
    <input type="submit" value="Add News">
</form>
</div>
@endsection


