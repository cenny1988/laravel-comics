<header>
    <div class="container">
        <div id="logo">
            <img src="/storage/assets/img/dc-logo.png" alt="logo-dc">
        </div>
        <nav>
            <ul>
                {{-- <li><a  href="#">CHARACTERS</a></li>
                <li class="active"><a  href="#">COMICS</a></li>
                <li><a  href="#">MOVIES</a></li>
                <li><a  href="#">TV</a></li>
                <li><a  href="#">GAMES</a></li>
                <li><a  href="#">COLLECTIBLES</a></li>
                <li><a  href="#">VIDEOS</a></li>
                <li><a  href="#">FANS</a></li>
                <li><a  href="#">NEWS</a></li>
                <li><a  href="#">SHOP</a></li> --}}

                @foreach ($menuLinks as $link)
                    <li>
                        <a href="#"> {{ $link }} </a>
                    </li>
                @endforeach
            </ul>
            {{-- <a href="#" class="close">
                  <i class="fas fa-times"></i>
              </a>  --}}
        </nav>
    </div>
</header>

<section id="jumbotron">
    <img src="{{asset('/storage/assets/img/jumbotron.jpg')}}" alt="jumbo">
  
</section>