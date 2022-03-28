@extends('Frontend.layouts.master')
@section('headerFooter')
<!-- section 1 CSS sec1Style.css -->
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <img class="result1 mb-3" src="{{ asset('img/1stLogo.png')}}" alt="{{ asset('img/1stLogo.png')}}">
                <img class="result2 mb-3" src="{{ asset('img/1stLogo.png')}}" alt="{{ asset('img/1stLogo.png')}}">
                <img class="result3 mb-3" src="{{ asset('img/1stLogo.png')}}" alt="{{ asset('img/1stLogo.png')}}">
                <div class="left_card">
                    <h4 class="card-title"><i class="fa fa-youtube" aria-hidden="true"></i> Youtube</h4>
                    <video class="video" src=""></video>
                </div>
            </div>
            <div class="col-6 my-3">
                @include('Frontend.Layouts.slides')
                <div class="noticeBoard my-3">
                    <div class="notice_title">
                        <h3>নোটিশ বোর্ড</h3>
                    </div>
                    <div class="notice_li">
                        <ul>
                            <li><a href="" title="khil">khil</a></li>
                            <li><a href="" title="ghfk ">ghfk </a></li>
                            <li><a href="" title="ghcgvj">ghcgvj</a></li>
                            <li><a href="" title="ghfj">ghfj</a></li>
                        </ul>
                    </div>
                    <div class="notice_all">
                        <a class="btn btn-success text-white float-end" href="" title="সকল নোটিশ">সকল</a>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-6 my-3">
                        <div class="box">
                            <h4>আমাদের বিষয়ে</h4>
                            <img src="{{ asset('img/1stLogo.png')}}" alt="আমাদের বিষয়ে"
                                style="width: 110px;height: 110px;background: #9b8585; float:left;">
                            <ul style="margin-left:10px">
                                <li><a href="" title="gdsfg">gdsfg</a></li>
                                <li><a href="" title="dsg ">dsg </a></li>
                                <li><a href="" title="sfdgh">sfdgh</a></li>
                                <li><a href="" title="dgdf">dgdf</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6 my-3">
                        <div class="box">
                            <h4>আমাদের বিষয়ে</h4>
                            <img src="{{ asset('img/1stLogo.png')}}" alt="আমাদের বিষয়ে"
                                style="width: 110px;height: 110px;background: #9b8585; float:left;">
                            <ul style="margin-left:10px">
                                <li><a href="" title="dg">dg</a></li>
                                <li><a href="" title="dfgdf ">dfgdf </a></li>
                                <li><a href="" title="dsfgsd">dsfgsd</a></li>
                                <li><a href="" title="sadfsd">sadfsd</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6 my-3">
                        <div class="box">
                            <h4>আমাদের বিষয়ে</h4>
                            <img src="{{ asset('img/1stLogo.png')}}" alt="আমাদের বিষয়ে"
                                style="width: 110px;height: 110px;background: #9b8585; float:left;">
                            <ul style="margin-left:10px">
                                <li><a href="" title="dg">dg</a></li>
                                <li><a href="" title="dfgdf ">dfgdf </a></li>
                                <li><a href="" title="dsfgsd">dsfgsd</a></li>
                                <li><a href="" title="sadfsd">sadfsd</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-3">
                <div class="left_card">
                    <h4 class="card-title">manonio prodhan montri</h4>
                    <p><span class="card-text">
                            <img src="{{ asset('img/hpm.jpg')}}" alt=""
                                style="float:left; height:147px; margin-right:10px; width:120px">&nbsp;
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem, numquam eum reiciendis
                            explicabo a
                            tempora quis officia tenetur, ipsa modi, eius consequatur sit quae distinctio ex repellendus
                            mollitia
                            architecto ipsum quisquam. Similique perspiciatis, magni id, voluptas totam corrupti cum
                            dolorem
                            molestias atque, consequatur fuga. Obcaecati libero quas maiores rerum! Praesentium!</span>
                    </p>
                </div>
                <div class="left_card">
                    <h4 class="card-title">manonio prodhan montri</h4>
                    <p><span class="card-text">
                            <img src="{{ asset('img/hpm.jpg')}}" alt=""
                                style="float:left; height:147px; margin-right:10px; width:120px">&nbsp;
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem, numquam eum reiciendis
                            explicabo a
                            tempora quis officia tenetur, ipsa modi, eius consequatur sit quae distinctio ex repellendus
                            mollitia
                            architecto ipsum quisquam. Similique perspiciatis, magni id, voluptas totam corrupti cum
                            dolorem
                            molestias atque, consequatur fuga. Obcaecati libero quas maiores rerum! Praesentium!</span>
                    </p>
                </div>
                <div class="left_card">
                    <h4 class="card-title"><i class="fa fa-download" aria-hidden="true"></i> Download</h4>
                    <ul class="caption fade-caption" style="margin:0">
                        <li><a href="" title="fddsaf">fddsaf</a></li>
                        <li><a href="" title="asdg">asdg</a></li>
                        <li><a href="" title="dgdfg">dgdfg</a></li>
                        <li><a href="" title="dasfgsdh">dasfgsdh</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
