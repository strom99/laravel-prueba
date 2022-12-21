<header>
        <div class="profileMenu">
            <div>
                <label for="">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </label>
                <input id="searchInput" type="text" placeholder="Search any argument">
            </div>
            <div>
                <ul class="items">
                    <li>
                        <a class="item" href="">
                            <i class="fa-solid fa-star"></i>
                            <span>Wishlist</span>
                        </a>
                    </li>
                    <li>
                        <a class="item" href="">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <span>Cart</span>
                        </a>
                    </li>
                    <li>
                        <a href="profile" class="item">
                            <i class="fa-solid fa-user"></i>
                            <span>{{ auth()->user()->name }}</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <ul class="menu">
            <li>
                <a href="products">HOME</a>
            </li>
            <li>
                <a href="">BY THE WEIGHT</a>
            </li>
            <li>
                <a href="">ITEMS</a>
            </li>
            <li>
                <a href="">COMBO</a>
            </li>
            <li>
                <a href="">OUTFITS</a>
            </li>
            <li>
                <a href="">RECICLED</a>
            </li>
            <li>
                <a href="">COLLECTORS</a>
            </li>
            <li>
                <a href="">WHOLESALE</a>
            </li>
            <li>
                <a href="">MISTERYBOX</a>
            </li>
        </ul>
    </header>