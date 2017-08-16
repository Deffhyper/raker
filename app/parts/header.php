<header uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">
    <div class="uk-offcanvas-content">
        <div id="offcanvas-usage" class="uk-offcanvas">
            <div class="uk-offcanvas-bar">

                <a href="" class="uk-close uk-close-alt"></a>

                <h3>Title</h3>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

            </div>
        </div>

    </div>

    <nav class="uk-navbar-container" uk-navbar="dropbar: true; dropbar-mode: push">
        <div class="my-container">
            <div class="uk-navbar-center">

                <a class="uk-navbar-item uk-logo" href="#">Logo</a>

                <ul class="uk-navbar-nav">
                    <li>
                        <a href="#offcanvas-usage" data-uk-offcanvas="{mode:'slide'}">
                            <span class="uk-icon uk-margin-small-right" ></span>
                            Features
                        </a>
                    </li>
                    <li data-uk-dropdown="{mode:'click'}">
                        <a href="#">Parent</a>
                        <div class="uk-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li class="uk-active"><a href="#">Active</a></li>
                                <li><a href="#">Item</a></li>
                                <li class="uk-nav-header">Header</li>
                                <li><a href="#">Item</a></li>
                                <li><a href="#">Item</a></li>
                                <li class="uk-nav-divider"></li>
                                <li><a href="#">Item</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>

                <div class="uk-navbar-item">
                    <div>Some <a href="#modal-example" data-uk-modal>Link</a></div>
                </div>

                <div class="uk-navbar-item">
                    <form action="javascript:void(0)">
                        <input class="uk-input uk-form-width-small" type="text" placeholder="Input">
                        <button class="uk-button uk-button-default">Button</button>
                    </form>
                </div>


            </div>
        </div>
    </nav>
</header>