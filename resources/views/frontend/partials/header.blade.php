<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{route('frontend')}}">Kodeeo Shop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        All Category
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                        @foreach($cate as $data)
                        <a class="dropdown-item" href="{{route('category.products',$data->id)}}">{{$data->name}}</a>
                        @endforeach
                    </div>
                </li>
            </ul>
            @guest
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Login | Registration
            </button>
            @endguest
            @auth
                <img style="width: 40px;border-radius: 20px;" src="{{url('/uploads/user/'.auth()->user()->photo)}}" alt="user"/>
                <a class="btn btn-success" href="{{route('user.logout')}}">Logout</a>
            @endauth
        </div>



    </nav>
</header>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">User Login or Registration</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Login</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Registration</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <form action="{{route('user.login')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

                        <form action="{{route('user.registration')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">User Name *</label>
                                <input required name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter User Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address *</label>
                                <input required  name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password *</label>
                                <input name="password" required type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mobile Numbers *</label>
                                <input  name="mobile" required type="number" class="form-control" id="exampleInputPassword1" placeholder="Mobile number">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">User image</label>
                                <input  name="photo" type="file" class="form-control" id="" placeholder="user photo">
                            </div>

                            <button type="submit" class="btn btn-primary">Register</button>
                        </form>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="">Forget password ?</a>
            </div>
        </div>
    </div>
</div>
