<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset("/asset/css/frontend.css")}}">
    <link rel="stylesheet" href="{{ asset('/asset/bootstrap/css/bootstrap.css') }}">
    <script src="{{ asset('/asset/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('/asset/js/jquery.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('/asset/fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
</head>
<body>
    <div class="m-0 p-0 row header align-items-center shadow">
        <div class="col-4 content-center">
            <img class="page-logo" src="{{emptyImage()}}" alt="">
        </div>

        <div class="col-8 ">
            <ul class="m-0 p-0 d-flex justify-content-evenly">
                <li class="algin-content-center"><a href="#">Home</a></li>
                <li class="algin-content-center"><a href="#">Category</a></li>
                <li class="algin-content-center"><a href="#">About Us</a></li>
                <li class="border border-primary pl-3 pr-3 pt-2 pb-2 open-acount">
                    <a class="m-5 text-primary">Account</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="poster">
        <div class="pt"></div>
    </div>

    {{-- <div class="blog_category">
        <div class="left_blog"><h3>Category</h3></div>
        <div class="r_blog">
            <div class="item_blog">
                <div class="category_item">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQybU2QmNu9mo8nVzxS3KKJ4-9S6H4bPg6zCw&s" alt="">
                    <div class="r_side">
                        <h3>Techology</h3>
                        <p class="txt">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
                <div class="category_item">
                    <img src="https://media.istockphoto.com/id/1480246301/vector/vector-illustration-of-high-school-building-vector-school-building.jpg?s=612x612&w=0&k=20&c=vR6dixHuh8Ypw1c3pjR-7ahN2V1vhCKxxTzDd7HlVbY=" alt="">
                    <div class="r_side">
                        <h3>School</h3>
                        <p class="txt">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
                <div class="category_item">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQS5_7oSJENwahkO0C1CutE7WjbMZqt6WREQA&s" alt="">
                    <div class="r_side">
                        <h3>Views</h3>
                        <p class="txt">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
            <div class="view_all">
                <h3><a href="">View All</a></h3>
            </div>
        </div>
    </div> --}}

    @include('modal.login')
    @include('modal.register')
</body>
<script src="{{asset("/asset/js/frontend.js")}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
</html>
