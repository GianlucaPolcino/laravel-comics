<footer>
    <div class="upper">
        <div class="container">
            <div class="list">
                <div class="wrapper">
                    <div class="list-links">
                        <h2>
                            DC COMICS
                        </h2>
                        <ul>
                            @foreach (config('footerfirst') as $item)
                                <li>
                                    <a href="">{{$item['text']}}</a>
                                </li>    
                            @endforeach
                        </ul>
                        <h2 class="last-list">
                            SHOP
                        </h2>
                        <ul>
                            @foreach (config('footerfourth') as $item)
                                <li>
                                    <a href="">{{$item['text']}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="list-links">
                        <h2>
                            DC
                        </h2>
                        <ul>
                            @foreach (config('footersecond') as $item)
                                <li>
                                    <a href="">{{$item['text']}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="list-links">
                        <h2>
                            SITES
                        </h2>
                        <ul>
                            @foreach (config('footerthird') as $item)
                                <li>
                                    <a href="">{{$item['text']}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom">
        <div class="container">
            <div class="flex">
                <div>
                    <button>SIGN UP NOW!</button>
                </div>
                <div class="flex-2">
                    <h3>FOLLOW US</h3>
                    <a href=""><img src="../assets/img/footer-facebook.png" alt=""></a>
                    <a href=""><img src="../assets/img/footer-twitter.png" alt=""></a>
                    <a href=""><img src="../assets/img/footer-youtube.png" alt=""></a>
                    <a href=""><img src="../assets/img/footer-pinterest.png" alt=""></a>
                    <a href=""><img src="../assets/img/footer-periscope.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</footer>