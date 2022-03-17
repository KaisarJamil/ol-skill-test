<html>

<head>
    <style>
        .container {
            padding: 10px;
        }

        .heading {
            padding: 4px 2px;
            color: green;
            text-align: center;
        }
       

    </style>
</head>

<body>
    <div class="container">
        <div class="heading">           
            <h1>Welcome to Prottoyon.gov.bd</h1>
        </div>

        <p> Dear <b>{{ $data['name'] }}</b>,</p>
        <article>
            You have sucessfully registered to Prottoyon.gov.bd.
            Your registered email address is {{ $data['email']}} and phone
            number {{ $data['phone']}}.

            Be with Prottoyon.gov.bd, we will let you know all updates. Thank You.
        </article>
     
        <p>
            Kind regards, <br>
            Admin <br>
            Prottoyon.gov.bd <br>
            Dhaka, Bangladesh <br>
        </p>
    </div>
</body>

</html>
