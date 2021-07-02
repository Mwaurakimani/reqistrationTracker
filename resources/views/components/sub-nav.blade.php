<div class="sub_navigation"
     style=
     "
     display: flex;
"
>
    <ul>
        <li>
            <a href="/dashboard">Dashboard</a>
        </li>
        <li>
            <a href="/Hospital">Hospital</a>
        </li>
        <li>
            <a href="/Entries">Entries</a>
        </li>
        <li>
            <a href="/Administrators">Administrators</a>
        </li>
    </ul>
    <form action="/logout" method="POST">
        @csrf
        <button type="submit"  value="submit"
                style=
                "
                width: 120px;
                height: 35px;
                border: none;
                border-radius: 5px;
                background-color: red;
                margin-top: 5px;
                color :white;
                margin-right: 20px;
                "
        >Log Out</button>

    </form>
</div>
