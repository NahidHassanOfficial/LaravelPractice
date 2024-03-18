<x-layout>
<nav>
    <a href="{{url('/')}}">Home</a>
    <a href="{{url('/about')}}">About</a>
    <a href="{{url('/login')}}">Login</a>
    <a href="{{url('/register')}}">Register</a>
</nav>
{{$slot}}
</x-layout>