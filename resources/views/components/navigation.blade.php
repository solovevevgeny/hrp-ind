


<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">



    @foreach($items as $item) 
          @if (isset($item['childrens'])) 
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{$item['title']}}</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                @foreach($item['childrens'] as $child)
                    <a class="dropdown-item" href="{{ $child['slug'] }}">{{ $child['title'] }}</a>
                    <div class="dropdown-divider"></div>
                @endforeach
                </div>
          
            </li>
          @endif 

          <li class="nav-item active">
            <a class="nav-link" href="{{ $item['slug'] }}"> {{ $item['title'] }} </a>
          </li>
    @endforeach



    </ul>

  </div>
</nav>




        
