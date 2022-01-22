<div class="header">
    <div class="container">
        <a href="">
          <img src="../assets/img/dc-logo.png" alt="">
        </a>
        <ul class="nav">
            @foreach (config('links') as $link)
                <li>
                    <a href="{{$link['url']}}">{{$link['text']}}</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>