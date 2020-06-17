<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Pharmacy Tracer Data</title>

    <style>
        * {
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        body {
            font: 16px Helvetica;
            background: #448ed3;
        }
        section {
            width: 275px;
            background: #ecf0f1;
            padding: 0 30px 30px 30px;
            margin: 60px auto;
            text-align: center;
            border-radius: 5px;
        }
        span {
            display: block;
            position: relative;
            margin: 0 auto;
            top: -40px;
            height: 80px;
            width: 80px;
            background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/38816/twitter-32.png') center center no-repeat, #1572E8;
            border-radius: 50%;
            box-shadow: 1px 1px 2px rgba(0,0,0,.3);
        }
        h1 {
            font-size: 24px;
            font-weight: 100;
            margin-bottom: 30px;
        }
        input {
            width: 100%;
            background: #bdc3c7;
            border: none;
            height: 30px;
            margin-bottom: 15px;
            border-radius: 5px;
            text-align: center;
            font-size: 14px;
            color: #7f8c8d;
        }
        input:focus {
            outline: none;
        }
        button {
            width: 100%;
            height: 30px;
            border: none;
            background: #3498db;
            color: #ecf0f1;
            font-weight: 100;
            margin-bottom: 15px;
            border-radius: 5px;
            transition: all ease-in-out .2s;
            border-bottom: 3px solid #2980b9;
        }
        button:focus {
            outline: none;
        }
        button:hover {
            background: #2980b9;
        }
    </style>
</head>
<body>
    <section>
        <span></span>
        <h1>Admin Login</h1>
        <form action="">
            <input type="text" placeholder="Email">
            <input type="text" placeholder="password">
            <button type="submit">Masuk</button>
        </form>
    </section>
</body>
</html>