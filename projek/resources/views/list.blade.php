@extends('nav')
@section('title', 'FlowerPedia')

    
@section('konten')
<style>
    h1{
        font-size: 30px;
    }

    .kiri{
        margin-left: 20px;
    }
</style>
    <section id="title">
            <img src="\img\list.png" width="600" height="600"/>
            <div class="kolom kiri">
                <br><br><br>
                <br>
                <h2>Flower List<h2>
                    <h1>A<h1>
                        <a href="/flowerpedia/aster">- Aster<a>
                        <br><a href="/flowerpedia/amaryllis">- Amaryllis<a>

                    <br><h1>S<h1>
                        <a href="/flowerpedia/matahari">- Sunflower<a>


                    </div>
        </section>
@endsection