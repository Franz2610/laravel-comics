<footer class="bg-black">
    <div class="container d-flex justify-content-between ">
        <div class="lists-container py-5 d-flex gap-5">
            <div>
                <div>
                    <h3 class="text-uppercase">DC Comics</h3>
                    <ul class="list-unstyled">
                        @foreach ($dcComics as $link)
                            <li>{{ $link['text'] }}</li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <h3 class="text-uppercase">Shop</h3>
                    <ul class="list-unstyled">
                        @foreach ($shop as $link)
                            <li>{{ $link['text'] }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div>
                <h3 class="text-uppercase">DC</h3>
                <ul class="list-unstyled">
                    @foreach ($dc as $link)
                        <li>{{ $link['text'] }}</li>
                    @endforeach
                </ul>
            </div>
            <div>
                <h3 class="text-uppercase">sites</h3>
                <ul class="list-unstyled">
                    @foreach ($sites as $link)
                        <li>{{ $link['text'] }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <img class="w-50" src="https://tse1.mm.bing.net/th?id=OIP.zJmB-59qhyj2eKLFn_QkYAHaEK&pid=Api&P=0&h=180" alt="dc-img">
    </div>
</footer>
