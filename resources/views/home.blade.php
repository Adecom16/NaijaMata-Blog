@extends('layouts.app')
{{-- @yield('style') --}}
@section('style')
<style>
    nav{
        height: 120px;
        background: rgb(235, 235, 235);
        box-shadow: 3px 5px 9px rgba(0, 0, 0, 0.3);
    }
    .foot{
        /* padding-top: 450px; */
        padding: 150px;

        width: 100%;
        background-color: rgb(0, 0, 0);
    }
    .fut{
        margin-top: 450px;
        height: 450px;
        border-radius: 15px;
        width: 49vh;
        margin-left: 450px;
        background-color: rgb(236, 236, 236);
        box-shadow: 2px 3px 5px rgba(0, 0, 0, 0.5);
    }
    .fut form{
        margin-left: 20px;
    }
    input{
        padding: 7px;
        /* width: 450px; */
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
@section('content')

<h1 class="d-flex justify-content-center pt-5">Entertainment</h1>
<div class="container mt-5">
    <h4 class="ms-4">Lastest</h4>
    <br>
<div class="row ">
    @foreach ($news as $new)

        <div class="col-lg-3 ms-4" style="border:2px solid black; height:435px; width:312px;">
            <img class="mt-3" src="{{ $new->picture}}" width="290px" alt=""><br><br>

            <p>WHAT'S NEW</p><span></span>
            <h5 style="font-size: 25px;">{{ $new->title }}</h5>
            <br>
            <span><b>{{ $new->author}}</b></span><span class="ps-5" style="font-size: 10px">{{ $new->created_at}}</span>
        </div>

    @endforeach
</div></div>
    <br>
<br>
<section class="container mt-5">
    <h4>All entertainment</h4>
<section class="">
    <div class="d-grid">
<div class="row d-flex">
    <div class="col-md-3" style="border:2px solid black; height:435px; width:312px;">
        <img class="mt-3" src="https://guardian.ng/wp-content/uploads/2022/08/ILEBAYE1-556x312.jpg" width="290px" alt=""><br><br>

        <p>WHAT'S NEW</p><span></span>
        <h5 style="font-size: 25px;">BBNaija All Stars: Nominations, <br>Emotions, and Evolving Relationships</h5>
    </div>

    <div class="col-md-3 ms-4" style="border:2px solid black;  height:435px; width:312px;">
        <img class="mt-3" src="https://guardian.ng/wp-content/uploads/2023/08/image0-100-556x312.jpeg" width="290px" alt=""><br><br>
        <p>WHAT'S NEW</p><span></span>
        <h5 style="font-size: 25px;">BBNaija Kiddwaya's Girlfriend <br> Unfollows Him Over Kiss With Mercy</h5>
    </div>

    <div class="col-md-3 ms-4" style="border:2px solid black;  height:435px; width:312px;">
        <img class="mt-3" src="https://guardian.ng/wp-content/uploads/2023/08/image2-17-556x312.jpeg" width="290px" alt=""><br><br>
        <p>WHAT'S NEW</p><span></span>
        <h5 style="font-size: 25px;">Tacha Demands For An Apology <br> From BBNaija Organizers</h5>
    </div>

    <div class="col-md-3 ms-4" style="border:2px solid black;  height:435px; width:312px;">
        <img class="mt-3" src="https://guardian.ng/wp-content/uploads/2023/08/BBN-556x312.jpg" width="290px" alt=""><br><br>
        <p>WHAT'S NEW</p><span></span>
        <h5 style="font-size: 25px;">Hero Daniels Shares Tips <br> On Emergence Of BBNaija Winners</h5>
    </div>
</div>
<br>
<br>
<br>
<div class="row d-flex">
    <div class="col-md-3" style="border:2px solid black; height:435px; width:312px;">
        <img class="mt-3" src="https://ocdn.eu/pulscms-transforms/1/QMCk9kqTURBXy8zNTMyOWE5ODY3ZjBlYzQyZDc3ZTliMGNiNzFhY2ZkNy5qcGVnkpUDAMx7zQQ4zQJfkwXNAxbNAa7eAAKhMAahMQA" width="290px" alt=""><br><br>

        <p>WHAT'S NEW</p><span></span>
        <h5 style="font-size: 25px;">I'm taking legal action - Tony Umez vows <br> to sue people claiming that he died</h5>
        <span><b>adeoluwa's blog</b></span><span class="ps-5" style="font-size: 10px">2023-9-7</span>

    </div>

    <div class="col-md-3 ms-4" style="border:2px solid black;  height:435px; width:312px;">
        <img class="mt-3" src="https://ocdn.eu/pulscms-transforms/1/9xPk9kpTURBXy9lOTVjYjFiNTI1MTgzNzExMTgwN2U3NDI0NGIzNWU2My5qcGeSlQMAMs0EsM0Co5MFzQGQzOHeAAKhMAahMQA" width="290px" alt=""><br><br>
        <p>WHAT'S NEW</p><span></span>
        <h5 style="font-size: 25px;">Asake says he would love to <br> collaborate with Kanye West</h5>
        <span><b>adeoluwa's blog</b></span><span class="ps-5" style="font-size: 10px">2023-9-7</span>

    </div>

    <div class="col-md-3 ms-4" style="border:2px solid black;  height:435px; width:312px;">
        <img class="mt-3" src="https://ocdn.eu/pulscms-transforms/1/N5yk9kpTURBXy82OGEzYzYxMDU1NTU0YjlmMThlYjRjYmE4OWE1MGMyZS5wbmeSlQMAzKPNBN7NAryTBc0BkMzh3gACoTAGoTEA" width="290px" alt=""><br><br>
        <p>WHAT'S NEW</p><span></span>
        <h5 style="font-size: 25px;">Tekno delivers an album to <br> seal his legacy in Afrobeats</h5>
        <span><b>adeoluwa's blog</b></span><span class="ps-5" style="font-size: 10px">2023-9-7</span>

    </div>

    <div class="col-md-3 ms-4" style="border:2px solid black;  height:435px; width:312px;">
        <img class="mt-3" src="https://ocdn.eu/pulscms-transforms/1/vLBk9kpTURBXy84NDQ1YWZiY2NlZTU5MjEwOGU4OTFiOWJmNzJiNDY3NC5qcGeSlQMAFs0EOM0CYJMFzQMWzQGu3gACoTAGoTEA" width="290px" alt=""><br><br>
        <p>WHAT'S NEW</p><span></span>
        <h5 style="font-size: 25px;">Burna Boy among the artists <br> selected for NBA 2K24 Soundtrack</h5>
        <span><b>adeoluwa's blog</b></span><span class="ps-5" style="font-size: 10px">2023-9-7</span>
    </div>
</div>
<br>
<br>
<br>
<div class="row ">
@foreach ($news as $new)

    <div class="col-lg-3 ms-4" style="border:2px solid black; height:435px; width:312px;">
        <img class="mt-3" src="{{ $new->picture}}" width="290px" alt=""><br><br>

        <p>WHAT'S NEW</p><span></span>
        <h5 style="font-size: 25px;">{{ $new->title }}</h5>
        <br>
        <span><b>{{ $new->author}}</b></span><span class="ps-5" style="font-size: 10px">{{ $new->created_at}}</span>
    </div>

@endforeach
</div>
</div>
</section>

{{-- 2nd side --}}


</div>
</section>




</section>
@endsection
