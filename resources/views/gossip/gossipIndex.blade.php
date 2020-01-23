@extends("template.main")

@section('title', 'Gossip - ITBMUN 2020')

@section('content')

    @include('components.sidebar-main')
    
    <main>
        @include('components.navbar-top-main')
        
        <section class='gossip-hero' id='hero'>
            <div class="hero-desc">
                <h1>Gossips</h1>
            </div>
        </section>

        <section class='gossip-index' id='index'>
            @if(count($gossips) > 0)
                <div class="gossip-container">
                    @foreach ($gossips as $gossip)
                        <div class="gossip">
                            <div class="gossip-header">
                                @if (isset($gossip->sender))
                                    <span class="gossip-sender">{{$gossip->sender}}</span> 
                                    @if (isset($gossip->council))
                                        &nbsp;&#9679;&nbsp;
                                        <span class="gossip-sender-council">({{$gossip->council}})</span>
                                    @endif
                                @else
                                    <span class="gossip-sender">Anonymous</span>
                                @endif
                            </div>
                            
                            <span class="gossip-title">
                                {{$gossip->title}}
                            </span>
                            
                            <span class="gossip-body">
                                @if (isset($gossip->reciever))
                                    <span class="gossip-reciever">
                                        To: {{$gossip->reciever}}
                                    </span><br>
                                @endif
                                <p>{{$gossip->body}}</p>
                            </span>
                            <div class="gossip-footer">
                                <span class="gossip-time">
                                    {{$gossip->created_at}}
                                </span>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="gossip-create">
                    <a href="/gossip/create" class='button-white-transparent'>Create another gossip</a>
                </div>
                <div class="gossip-navigation">
                    {{ $gossips->links() }}
                </div>
            @else
                <div class="gossip-none">
                    <h2>There's nothing here yet</h2>
                    <a href="/gossip/create" class='button-white-transparent'>Create a gossip</a>
                </div>
            @endif
        </section>

        @include('components.footer-main')
    </main>

@endsection

@section('script')
<script src="{{URL::asset('js/nav-scroll.js')}}"></script>
<script src="{{URL::asset('js/navigation.js')}}"></script>
@endsection