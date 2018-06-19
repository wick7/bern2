<header class="mdl-layout__header mdl-layout__header--transparent">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title nav-text" style="color: black; font-weight: 900;">\bərnallēz\</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      <nav class="mdl-navigation mdl-layout--large-screen-only">
        <a class="mdl-navigation__link" style="color: black; font-weight: 900;" href="{{ url('/')}}">Home</a>
        <a class="mdl-navigation__link" style="color: black; font-weight: 900;" href="{{ url('just-great-stuff')}}">Just Great Stuff</a>
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title nav-text">\bərnallēz\</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="{{ url('/')}}">Home</a>
      <a class="mdl-navigation__link" href="{{ url('just-great-stuff')}}">Just Great Stuff</a>
    </nav>
  </div>