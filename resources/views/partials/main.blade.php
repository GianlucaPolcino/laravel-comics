<div class="main-bg">
    <div class="container">
        <div class="card-flex">
            @foreach (config('cards') as $card)
                <div class="gp-card">
                    <img src="{{$card['thumb']}}" alt="{{$card['series']}}">
                    <h5>{{$card['series']}}</h5>
                </div>
            @endforeach
        </div>
    </div>
</div>