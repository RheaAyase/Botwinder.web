@extends('layouts.master')

@section('title', 'Invite Valkyrja')

@section('content')
<section class="container">
    <section class="container">
        <div class="col-xs-12">
            <div class="row">
                <h1>Valkyrja</h1>
                {{--<div>
                    <img src="/img/jefi-discord.jpg" alt="Valkyrja" class="square rounded-circle img-thumbnail" width="150px">
                </div>--}}
            </div>
            <p class="row">
              Anyone can use our hosted instance of Valkyrja for free, however only <b>Subscribers</b> will get performance-heavy Antispam and Social features (Profiles, Karma and Experience.)
            </p>
            <div class="row">
                <a href="http://invite.valkyrja.app" class="external">
                    <button class="btn btn-primary">Invite</button>
                </a>
            </div>
            <p class="row">
              <br />
              <b>Subscribe</b> either with <a href="https://github.com/sponsors/RheaAyase">GitHub (preferred)</a> or <a href="https://www.patreon.com/ValkyrjaProject" target="_blank">Patreon</a> to support the project and unlock the premium features!
              <ul>
                  <li>Powerful customizable <b>Antispam</b> that ties into moderation and logging.</li>
                  <li><b>Profiles</b> - see <a href="/img/profiles.png">this example!</a></li>
                  <li><b>Karma</b> - People receive cookies (you can change that) when they get thanked.</li>
                  <li><b>Experience</b> and levels. Send messages to gain experience, send images to gain more experience. Level up to unlock fancy roles and karma cookies!</li>
                  <li><b>Modmail</b> - We also offer our <a href="https://github.com/ValkyrjaProject/Valkyrja.modmail">Modmail bot</a> hosted in our infrastructure for our Subscribers and Partners.</li>
                  <li><b>Custom bot development</b> within reason. Discuss with Rhea.</li>
              </ul>
              <b>Partners</b> get all of the above without subscription. Only <u>non-gaming communities</u> qualify, such as <b>open source</b> projects, Linux or other geeky places. <i>(Talk to <a href="/team">Rhea</a> about it.)</i>
            </p>
            <br />
            <p class="row">
              <b>Info for subscribers:</b><ul>
                <li>Please make sure to contact <code>Rhea#1234</code> with your details (github username or patreon email)</li>
                <li>Remember that the bot is bound to the servers you own, or one extra server you explicitly ask for (talk to Rhea - PM her the <code>Server ID</code>)</li>
              </ul>
              <br /><i>Don't forget to set-up permissions and role hierarchy!</i>
            </p>
        </div>
    </section>
</section>
@endsection
