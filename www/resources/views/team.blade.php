@extends('layouts.master')

@section('title', 'Team')

@section('content')
<div class="container">
    <div class="col-md-5 col-lg-4 col-xl-3">
        <img src="/img/devs.jpg" alt="Rhea and SpyTec" class="image-left"/>
    </div>
    <div class="col-md-7 col-lg-8 col-xl-8">
        <div class="row team-member padding-bottom">
            <div class="profile">
                <img class="avatar" src="img/team-rhea.gif" />
                <p class="labels">
                <span class="name">Rhea</span>
                <br />Valkyrja developer | .NET Core QE Lead at Red Hat</p>
            </div>
            <p><i>
                Inspiring the desolate whitespace of Linux world with the delicate C# letters of simplified artificial intelligence.
            </i></p>
            <div class="icons spaced">
                <a href="https://rhea.dev"><img src="/img/external.png" alt="Rhea's website"></a>
                <a href="https://github.com/RheaAyase"><img src="/img/github.png" alt="github.com/RheaAyase"></a>
                <a href="https://twitter.com/RheaAyase"><img src="/img/twitter.png" alt="twitter.com/RheaAyase"></a>
                <a href="https://youtube.com/RheaAyase"><img src="/img/youtube.png" alt="youtube.com/RheaAyase"></a>
            </div>
        </div>
        <div class="row team-member">
            <div class="profile">
                <img class="avatar" src="img/team-spytec.jpg" />
                <p class="labels">
                <span class="name">SpyTec</span>
                <br />Website developer | Software Engineer at Red Hat</p>
            </div>
            <p><i>
                Crafts websites. Also a professional slacker.
            </i></p>
            <div class="icons spaced">
                <a href="https://edassets.org"><img src="/img/external.png" alt="SpyTec's EDAssets website"></a>
                <a href="https://github.com/SpyTec"><img src="/img/github.png" alt="github.com/SpyTec"></a>
                <a href="https://twitter.com/SpyTec"><img src="/img/twitter.png" alt="twitter.com/SpyTec"></a>
            </div>
        </div>
    </div>
</div>
<section class="main-body blue">
    <section class="container team-table">
        <div class="row">
            <h1 class="cell">Dev Team</h1>
        </div>
        <div class="row container">
            <!-- freiheit -->
            <div class="col-md-6 team-member padding-bottom">
                <div class="profile">
                    <img class="avatar" src="img/team-freiheit.jpg" />
                    <p class="labels">
                    <span class="name">freiheit</span>
                    <br />Consultant</p>
                </div>
                <p><i>
                    He's just this guy, you know? And a Linux sysadmin.
                </i></p>
                <div class="icons spaced">
                    <a href="http://eric.eisenhart.com"><img src="/img/external.png" alt="freiheit's website"></a>
                    <a href="https://github.com/freiheit"><img src="/img/github.png" alt="github.com/freiheit"></a>
                    <a href="https://twitter.com/freiheit"><img src="/img/twitter.png" alt="twitter.com/freiheit"></a>
                </div>
            </div>
        </div>
        <div class="row">
            <h1 class="cell">Support Team</h1>
        </div>
        <div class="row container">
            <!-- Alice -->
            <div class="col-md-6 team-member padding-bottom">
                <div class="profile">
                    <img class="avatar" src="img/team-alice.png" />
                    <p class="labels">
                    <span class="name">Alice</span>
                    <br />Support</p>
                </div>
                <p><i>
                    System admin and technology enthusiast, supports the religion of cookies.
                </i></p>
            </div>
            <!-- DokaDoka -->
            <div class="col-md-6 team-member padding-bottom">
                <div class="profile">
                    <img class="avatar" src="img/team-dokadoka.jpg" />
                    <p class="labels">
                    <span class="name">DokaDoka</span>
                    <br />Support</p>
                </div>
                <p><i>
                    Engineering student and valkyrja enthusiast, crafts all the emojis.
                </i></p>
            </div>
            <div class="clearfix hidden-sm-down">
                <!-- endline -->
            </div>
            <!-- refi64 -->
            <div class="col-md-6 team-member padding-bottom">
                <div class="profile">
                    <img class="avatar" src="img/team-refi64.png" />
                    <p class="labels">
                    <span class="name">re:fi.64</span>
                    <br />Support</p>
                </div>
                <p><i>
                    Linux poweruser, Flatpak nerd and weeb for life.
                </i></p>
            </div>
            <!-- Tyler -->
            <div class="col-md-6 team-member padding-bottom">
                <div class="profile">
                    <img class="avatar" src="img/team-tyler.png" />
                    <p class="labels">
                    <span class="name">Tyler</span>
                    <br />Support</p>
                </div>
                <p><i>
                    Web developer & Linux user who believes in privacy and data encryption.
                </i></p>
            </div>
        </div>
    </section>
</section>
@endsection
