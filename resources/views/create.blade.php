<!DOCTYPE html>
<html lang="en">
<body>
<div>
    <form method="post" action={{url('clients')}}>
        @csrf
        <label for="firstName">First Name</label>
        <input type="text" id="firstName" name="firstName" placeholder="nickname">

        <label for="lastName">Last Name</label>
        <input type="text" id="lastName" name="lastName" placeholder="Your last name??:D">

        <label for="identityCode">identity code</label>
        <input type="number" id="identityCode" name="identityCode" placeholder="right down your id">

        <label for="phone">Phone Number</label>
        <input type="text" id="phone" name="phoneNumber" placeholder="0917123456789">

        <label for="birthDate">Birth Date</label>
        <input type="text" id="birthDate" name="birthDate" placeholder="year/month/day">

        <label for="address">Address</label>
        <input type="text" id="address" name="address" placeholder="address">

        <label for="introduction">introduced by</label>
        <select id="introduction" name="foundBy">
            <option value="friends">friends</option>
            <option value="social media">social media</option>
            <option value="internet">internet</option>
            <option value="ads">ads</option>

        </select>



        <input type="submit" name="submit" value="Submit">

{{--        <button type="button" class="button" onclick="window.location='{{ url("/clients/index") }}'">show the records by name</button>--}}

{{--        <button type="button" class="button" onclick="window.location='{{url("clients/index")}}'">show the records by date</button>--}}


        <a href="{{route('show.all','birthDate')}}" class="link" >show the records by date</a>

        <a href="{{route('show.all','foundBy')}}" class="link" >show the records by founded by</a>




    </form>
</div>

</body>
</html>

<style>
    input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=number],select{
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;

    }
    .link{
        text-align: center;
        background-color: #4CAF50;
        border: 1px solid green;
        color: white;
        padding: 10px 24px;
        border-radius: 10px;
        margin-left:475px ;
        cursor: pointer;
        width: 50%;
        display: block;


    }
    .link:hover{
        background-color: coral;

    }


    input[type=submit] {

        width: 50%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin-left:500px;
        border: none;
        border-radius: 4px;
        cursor: pointer;

    }

    input[type=submit]:hover {
        background-color: #6e3da0;
    }

    div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }
</style>
<body>

