<!--partial view for navbar-->

<!-- Navigation -->
<nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a href="/">Home</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-left">
                <li>
                    <div class="hidden-xs col-xs-12 searchNavbar">
                        <form action="" method="GET" class="navbar-form">
                            <div class="col-xs-offset-2 col-xs-6">
                                <input type="text" name="search" id="search" class="searchBarNavbar"">
                            </div>
                            <div class="col-xs-offset-1 col-xs-1">
                                <button type="submit" class="searchSubmitNavbar">Search</button>
                            </div>
                        </form>
                    </div>
                </li>
            </ul>
             <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>

                <li>
                    <a href="/users/account">Account</a>
                </li>
                <?php if (!isset($_SESSION['username'])) { ?>
                <?= '<li>
                        <a href="/login">Login/Signup</a>
                    </li>'; ?> 
                <?php } else if (isset($_SESSION['username'])) { ?>
                <?= '<li>
                        <a href="/logout">Logout</a>
                    </li>'; }?>
            </ul>
        </div>
    </div>
</nav>