{{--@props(['heading'])--}}


<nav
    style="
    display: flex;
    flex-direction: row;
    justify-content: space-between;

"

>
    <p>{{$heading}}</p>
    <p
        style="
        font-size: 1em;
        padding-right: 20px;
"
    >
        @auth()
            Welcome {{ Auth::user()->name }}
        @endauth
    </p>
</nav>
