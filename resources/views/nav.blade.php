<nav class="navigation">
  <ul class="list-unstyled">
      @if($active == 'dashboard')
        <li class="active"><a href="{{ URL::to('/') }}/console"><i class="fa fa-bookmark-o"></i><span class="nav-label">Dashboard</span></a></li>
      @else
        <li><a href="{{ URL::to('/') }}/console"><i class="fa fa-bookmark-o"></i><span class="nav-label">Dashboard</span></a></li>
      @endif
      @if($active == 'stnk')
        @if($subactive == 'list')
          <li class="has-submenu active"><a href="#"><i class="fa fa-comment-o"></i> <span class="nav-label">STNK</span></a>
            <ul class="list-unstyled">
                  <li class="active"><a href="{{ URL::to('/') }}/console/stnk">Data STNK</a></li>
                  <li><a href="{{ URL::to('/') }}/console/stnk/new">Buat / Perpanjang STNK</a></li>
              </ul>
          </li>
        @else
        <li class="has-submenu active"><a href="#"><i class="fa fa-comment-o"></i> <span class="nav-label">STNK</span></a>
          <ul class="list-unstyled">
                <li><a href="{{ URL::to('/') }}/console/stnk">Data STNK</a></li>
                <li class="active"><a href="{{ URL::to('/') }}/console/stnk/new">Buat / Perpanjang STNK</a></li>
            </ul>
        </li>
        @endif
      @else
        <li class="has-submenu"><a href="#"><i class="fa fa-comment-o"></i> <span class="nav-label">STNK</span></a>
          <ul class="list-unstyled">
                <li><a href="{{ URL::to('/') }}/console/stnk">Data STNK</a></li>
                <li><a href="{{ URL::to('/') }}/console/stnk/new">Buat / Perpanjang STNK</a></li>
            </ul>
        </li>
      @endif
    </ul>
</nav>
