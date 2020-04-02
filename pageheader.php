<!-- WEBSITE BANNER -->
<div class="container">
          <img class="center-block" id="banner" src="images/banner.png">
</div>

<!-- ABOUT US -->
<div id="about" class="modal">
  <div class="modal-content">
    <span class="close" onClick="closeModal('about')">&times;</span>
      <div style="padding:20px;">
        <h2>About Us</h2>
        <p>
           Team #14:
           <br>Erica Colaco
           <br>Kylah Santos
           <br>Ting Ip
        </p>
      </div>
  </div>
</div>
<!-- Contact Us -->
<div id="contact" class="modal">
  <div class="modal-content">
    <span class="close" onClick="closeModal('contact')">&times;</span>
      <div style="padding:20px;">
        <h2>Contact Us</h2>
        <p>
          Team #14:
            <br>Erica Colaco: ecolaco@ryerson.ca
            <br>Kylah Santos: kylah.santos@ryerson.ca
            <br>Ting Ip: ting.ip@ryerson.ca
        </p>
      </div>
    </div>
</div>

<!-- WEBSITE NAVIGATION BAR -->
<div>
  <nav class="navbar navbar-expand-sm justify-content-center navigation">
     <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="./home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" onClick="displayModal('about')">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" onClick="displayModal('contact')">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./shoppingcart.php">Shopping Cart</a>
      </li>
    </ul>
    </nav>
  </div>

<!-- DROP DOWN MENUS BELOW -->
<div class="container">
    <!-- Continents -->
    <ul class="menudd" id="menu">
            <li class="parent"><a href="">Continents</a>
                    <ul class="child">
                    <li class="parent"><a href="">North America<span class="expand">➢</span></a>
                            <ul class="child">
                                    <li><b id='menutitle'>Countries</b></li>
                                    <li class="parent"><a href="">USA<span class="expand">➢</span></a>
                                            <ul class="child">
                                                    <li><b id='menutitle'>Attractions</b></li>
                                                    <li><a href="./home.php?id=1">The Statue of Liberty</a></li>
                                                    <li><a href="./home.php?id=2">Cloud Gate</a></li>
                                            </ul>
                                    </li>
                                    <li class="parent"><a href="">Canada<span class="expand">➢</span></a>
                                            <ul class="child">
                                                    <li><b id='menutitle'>Attractions</b></li>
                                                    <li><a href="./home.php?id=3">CN Tower</a></li>
                                                    <li><a href="./home.php?id=4">Niagara Falls</a></li>
                                            </ul>
                                    </li>
                            </ul>
                    </li>
                    <!-- end of continent 1 -->
                    <!-- start of continent 2 -->
                    <li class="parent"><a href="">South America<span class="expand">➢</span></a>
                            <ul class="child">
                                    <li><b id='menutitle'>Countries</b></li>
                                    <li class="parent"><a href="">Brazil<span class="expand">➢</span></a>
                                            <ul class="child">
                                                    <li><b id='menutitle'>Attractions</b></li>
                                                    <li><a href="./home.php?id=5">Christ the Redeemer</a></li>
                                                    <li><a href="./home.php?id=6">Sugarloaf Mountain</a></li>
                                            </ul>
                                    </li>
                                    <li class="parent"><a href="">Argentina<span class="expand">➢</span></a>
                                            <ul class="child">
                                                    <li><b id='menutitle'>Attractions</b></li>
                                                    <li><a href="./home.php?id=7">Parque Nacional Los Glaciares</a></li>
                                                    <li><a href="./home.php?id=8">Aconcagua</a></li>
                                            </ul>
                                    </li>
                            </ul>
                    </li>
                    <!-- end of continent 2 -->
                    <!-- start of continent 3 -->
                    <li class="parent"><a href="">Europe<span class="expand">➢</span></a>
                            <ul class="child">
                                    <li><b id='menutitle'>Countries</b></li>
                                    <li class="parent"><a href="">France<span class="expand">➢</span></a>
                                            <ul class="child">
                                                    <li><b id='menutitle'>Attractions</b></li>
                                                    <li><a href="./home.php?id=9">Eiffel Tower</a></li>
                                                    <li><a href="./home.php?id=10">Louvre Museum</a></li>
                                            </ul>
                                    </li>
                                    <li class="parent"><a href="">UK<span class="expand">➢</span></a>
                                            <ul class="child">
                                                    <li><b id='menutitle'>Attractions</b></li>
                                                    <li><a href="./home.php?id=11">Big Ben</a></li>
                                                    <li><a href="./home.php?id=12">Buckingham Place</a></li>
                                            </ul>
                                    </li>
                            </ul>
                    </li>
                    <!-- end of continent 3 -->
                    <!-- start of continent 4 -->
                    <li class="parent"><a href="">Asia<span class="expand">➢</span></a>
                            <ul class="child">
                                    <li><b id='menutitle'>Countries</b></li>
                                    <li class="parent"><a href="">India<span class="expand">➢</span></a>
                                            <ul class="child">
                                                    <li><b id='menutitle'>Attractions</b></li>
                                                    <li><a href="./home.php?id=13">Taj Mahal</a></li>
                                                    <li><a href="./home.php?id=14">Gateway Of India Mumbai</a></li>
                                            </ul>
                                    </li>
                                    <li class="parent"><a href="">Philippines<span class="expand">➢</span></a>
                                            <ul class="child">
                                                    <li><b id='menutitle'>Attractions</b></li>
                                                    <li><a href="./home.php?id=15">Boracay</a></li>
                                                    <li><a href="./home.php?id=16">Chocolate Hills</a></li>
                                            </ul>
                                    </li>
                            </ul>
                    </li>
                    <!-- end of continent 4 -->
                    <!-- start of continent 5 -->
                    <li class="parent"><a href="">Africa<span class="expand">➢</span></a>
                            <ul class="child">
                                    <li><b id='menutitle'>Countries</b></li>
                                    <li class="parent"><a href="">South Africa<span class="expand">➢</span></a>
                                            <ul class="child">
                                                    <li><b id='menutitle'>Attractions</b></li>
                                                    <li><a href="./home.php?id=17">Kruger National Park</a></li>
                                                    <li><a href="./home.php?id=18">Cape of Good Hope</a></li>
                                            </ul>
                                    </li>
                                    <li class="parent"><a href="">Egypt<span class="expand">➢</span></a>
                                            <ul class="child">
                                                    <li><b id='menutitle'>Attractions</b></li>
                                                    <li><a href="./home.php?id=19">Giza Necropolis</a></li>
                                                    <li><a href="./home.php?id=20">Great Sphinx of Giza</a></li>
                                            </ul>
                                    </li>
                            </ul>
                    </li>
    </ul>
    <li class="parent"><a href="#">Popular Places</a>
            <ul class="child">
                    <li><a href="./home.php?id=1">The Statue of Liberty</a></li>
                    <li><a href="./home.php?id=5">Christ the Redeemer</a></li>
                    <li><a href="./home.php?id=9">Eiffel Tower</a></li>
                    <li><a href="./home.php?id=13">Taj Mahal</a></li>
                    <li><a href="./home.php?id=19">Giza Necropolis</a></li>
            </ul>
  </ul>
  </div>
