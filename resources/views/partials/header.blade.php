<div class="header">
    <div class="container">
        <a href="">
          <img src="../../../public/images/dc-logo.png" alt="">
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