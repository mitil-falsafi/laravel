<!DOCTYPE html>
<html lang="en">
<body>
<div>
        <table>
            <caption>users data</caption>
            <tr>
                <th scope="col">firstname</th>
                <th scope="col">lastname</th>
                <th scope="col">identity code</th>
                <th scope="col">phoneNum</th>
                <th scope="col">birthday</th>
                <th scope="col">address</th>
                <th scope="col">foundby</th>
            </tr>
            @foreach($bladedata as $value)
            <tr>
                <th>{{$value->firstName}}</th>
                <td>{{$value->lastName}}</td>
                <td>{{$value->identityCode}}</td>
                <td>{{$value->phoneNumber}}</td>
                <td>{{$value->birthDate}}</td>
                <td>{{$value->address}}</td>
                <td>{{$value->foundBy}}</td>
            </tr>
            @endforeach

        </table>

</div>

</body>
</html>

<style>

    th {
        border: 1px solid rgb(190, 190, 190);
        padding: 10px;
    }

    td {
        text-align: center;
    }

    tr:nth-child(even) {
        background-color: #eee;
    }

    th[scope="col"] {
        background-color: #696969;
        color: #fff;
    }

    th[scope="row"] {
        background-color: #d7d9f2;
    }

    caption {
        padding: 10px;
        caption-side: bottom;
    }

    table {
        border-collapse: collapse;
        border: 2px solid rgb(200, 200, 200);
        letter-spacing: 1px;
        font-family: sans-serif;
        font-size: .8rem;
    }
</style>
<body>

