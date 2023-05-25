<header>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
      </div>

    <div class="container ">
        <div class="row">
            <div class="col d-flex justify-content-between">
                <a class=" justify-content-center text-center align-items-center">
                    <img src="https://tse3.mm.bing.net/th?id=OIP.DL-XesiiZEfcnyn3D4fvVQHaHa&pid=Api&P=0&h=180" alt="logo">
                </a>
                <div class="bg-black text-white-50">
                    <ul class="d-flex justify-center align-items-center h-100 list-unstyled">
                        @foreach ($headerLinks as $links)
                            <li class="p-3">
                                <a class="head-link text-whitee-50 " href="/">{{ $links['text'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>


