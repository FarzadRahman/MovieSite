<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Login / Register</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">

                <div class="row">
                    <div class="form-group col-md-12">
                        <label>MOBILE NUMBER *</label>
                        <input type="text" class="form-control" placeholder="number">
                    </div>

                    <div class="form-group col-md-12">
                        <label>PASSWORD *</label>
                        <input type="password" class="form-control" placeholder="password">
                    </div>

                    <div class="form-group col-md-6">

                        <a  class="btn btn-default btn-sm" style="color: black;background: white">Register</a>
                    </div>
                    <div class="form-group col-md-6">
                        <label style="color: red;" class="pull-right"><a href="#">Forgot Password?</a></label>

                    </div>


                </div>


            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
{{--                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>--}}
                <button type="button" class="btn btn-success btn-sm" >Login</button>
            </div>

        </div>
    </div>
</div>



<!-- Main Header -->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#main-nav-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index-2.html">
                <img src="{{url('public')}}/images/template/logo.png" alt="Site Logo" style="width:200px">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="main-nav-collapse">
            {{--<form class="navbar-form navbar-left">--}}
            {{--<select name="type">--}}
            {{--<option value="movie" selected>Movies</option>--}}
            {{--<option value="tv">TV</option>--}}
            {{--</select>--}}
            {{--<input type="search" name="searchinput" required>--}}
            {{--<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>--}}
            {{--</form>--}}
            <ul class="nav navbar-nav navbar-left">
                <li><a href="#">Home</a></li>
                <li><a href="#">Tv</a></li>
                <li><a href="#">Movie</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Sports</a></li>
                <li><a href="#">Premium</a></li>
                <li><a href="#" data-toggle="modal" data-target="#myModal">Login</a></li>
                {{--<li class="dropdown">--}}
                    {{--<a href="movie-list.html">Movies</a>--}}
                    {{--<ul class="dropdown-menu">--}}
                        {{--<li><a href="{{url('public')}}/movie-list.html">English</a></li>--}}
                        {{--<li><a href="{{url('public')}}/movie-list.html">Hindi</a></li>--}}
                        {{--<li><a href="{{url('public')}}/movie-list.html">Chinees</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}

            </ul>
            <form class="navbar-form navbar-rigt pull-right">
                <select name="type">
                    <option value="movie" selected>Movies</option>
                    <option value="tv">TV</option>
                </select>
                <input type="search" name="searchinput" required>
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
</nav>
<!-- Main Header End -->