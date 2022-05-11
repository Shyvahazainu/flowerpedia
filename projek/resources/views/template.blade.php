@extends('nav')
@section('title', 'index')
    
@section('konten')
<body>
    <div class="wrapper">
        <!-- untuk home -->
        <section id="">
            <div class="kolom">
                <br><br><br>
                <br>
                <h2> Hi, pretty soul!</h2>
                <p>Are you a flower lover? let’s learn about flowers.</p>
                <p><a href="/flowerpedia/fotd" class="tbl-pink">Flower of the Day</a></p>
            </div>
            <img src="\img\org.png" width="500"/>
        </section>
    </div>
    <div id="aboutus" >
        <div class="wrapper">
            <div class="footer">
                <div class="footer-section">
                    <h3>About Us</h3>
                    <p>FlowerPedia is a web-based application that provides informations about flower, dedicated for the one who loves flower.</p>
                </div>
                <div class="footer-section">
                    <h3>Disclaimer</h3>
                    <p><b>All the contents are taken from another website.</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div id="copyright">
        <div class="wrapper">
            &copy; 2022. <b>Shafira & Shyva.</b> All Rights Reserved.
        </div>
    </div>
</body>
@endsection
