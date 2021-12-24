<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div>
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">logedin</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                {{ __('Log Out') }}
            </button>
        </form>
    <table class="table">
        <tr>
            <td>#</td>
            <td>სახელი</td>
            <td>აღწერა</td>
            <td>მოქმედება</td>
        </tr>
        @foreach($products as $element)
            <tr>
                <td>{{ ++$loop->index }}</td>
                <td>{{ $element->name }}</td>
                <td>{{ $element->description }}</td>
                <td>
                    @can('admin_ability')
                    <form action="/admin/delete/{{$element->id }}" method="POST">
                        @csrf
                        <button class="btn btn-danger">წაშლა</button>
                    </form>

                    <a class="btn btn-primary" href="{{ route('adminshow',['id'=> $element->id ]) }}">დათვალიერება</a>
                    <a class="btn btn-warning" href="{{ route('adminedit',['id'=> $element->id ]) }}">განახლება</a>
                    @endcan
                </td>
            </tr>
        @endforeach

        @can('admin_ability')

        <a class="btn btn-warning" href="{{ route('Admincreate') }}">დამატება</a>
        @endcan

    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>
