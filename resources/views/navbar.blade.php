  <!-- Main Header -->
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index-2.html">
                    <img src="{{url('public')}}/images/template/logo.png" alt="Site Logo">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="main-nav-collapse">
                <form class="navbar-form navbar-left">
                    <select name="type">
                        <option value="movie" selected>Movies</option>
                        <option value="tv">TV</option>
                    </select>
                    <input type="search" name="searchinput" required>
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="tv-show.html">TV Show</a></li>
                    <li class="dropdown">
                        <a href="movie-list.html">Movies</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('public')}}/movie-list.html">English</a></li>
                            <li><a href="{{url('public')}}/movie-list.html">Hindi</a></li>
                            <li><a href="{{url('public')}}/movie-list.html">Chinees</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Sports</a></li>
                    <li class="dropdown">
                        <a href="#">Pages</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('public')}}/movie-list.html">Movies</a></li>
                            <li><a href="{{url('public')}}/movie-detail.html">Movie Detail</a></li>
                            <li><a href="{{url('public')}}/tv-show.html">TV Show</a></li>
                            <li><a href="{{url('public')}}/celebrities.html">Celebrities</a></li>
                            <li><a href="{{url('public')}}/celebrity-detail.html">Celebrity Details</a></li>
                            <li><a href="{{url('public')}}/news.html">News</a></li>
                            <li><a href="{{url('public')}}/news-detail.html">News Details</a></li>
                        </ul>
                    </li>
                    <li><a href="news.html">News</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Main Header End -->