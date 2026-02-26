<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            height: 100vh;
            font-family: 'Segoe UI', system-ui, sans-serif;

            background:
                linear-gradient(rgba(0,0,0,0.35), rgba(0,0,0,0.35)),
                url("{{ asset('img/clinic4.jpg') }}");

            background-size: cover;
            background-position: center;

            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Glass container */
        .login-box {
            position: relative;
            width: 380px;
            padding: 40px 32px;
            border-radius: 22px;

            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);

            border: 1px solid rgba(255,255,255,0.35);
            box-shadow: 0 25px 60px rgba(0,0,0,0.45);

            animation: fadeUp 0.6s ease;
        }

        /* Gradient border glow */
        .login-box::before {
            content: "";
            position: absolute;
            inset: 0;
            border-radius: 22px;
            padding: 1.5px;
            background: linear-gradient(135deg, #6ea8fe, #1e6dfb, #6ea8fe);
            -webkit-mask:
                linear-gradient(#000 0 0) content-box,
                linear-gradient(#000 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            pointer-events: none;
        }

        .login-box h2 {
            margin-bottom: 28px;
            color: #ffffff;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-align: center;
        }

        /* Floating input group */
        .input-group {
            position: relative;
            margin-bottom: 22px;
        }

        .input-group input {
            width: 100%;
            padding: 15px 14px;
            border-radius: 12px;
            border: none;
            outline: none;
            font-size: 15px;

            background: rgba(255,255,255,0.95);
            transition: all 0.25s ease;
        }

        .input-group label {
            position: absolute;
            top: 50%;
            left: 14px;
            transform: translateY(-50%);
            color: #666;
            font-size: 14px;
            pointer-events: none;
            transition: 0.25s ease;
            background: transparent;
        }

        .input-group input:focus {
            box-shadow: 0 0 0 3px rgba(30, 109, 251, 0.25);
        }

        .input-group input:focus + label,
        .input-group input:not(:placeholder-shown) + label {
            top: -7px;
            font-size: 12px;
            color: #4A3F6B;
            background: #fff;
            padding: 0 6px;
            border-radius: 6px;
        }

        /* Button */
        .login-box button {
            width: 100%;
            padding: 14px;
            border-radius: 12px;
            border: none;

            background: linear-gradient(135deg, #4A3F6B, #4A3F6B);
            color: #fff;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;

            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .login-box button:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px  #4A3F6B;
        }

        /* Error */
        .error {
            background: rgba(255, 0, 0, 0.2);
            color: #fff;
            padding: 12px;
            border-radius: 10px;
            margin-bottom: 18px;
            font-size: 14px;
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 480px) {
            .login-box {
                width: 90%;
            }
        }
    </style>
</head>

<body>

<div class="login-box">
    <h2>Admin Login</h2>

    @if ($errors->any())
        <div class="error">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ route('admin.login') }}">
        @csrf

        <div class="input-group">
            <input type="email" name="email" required placeholder=" ">
            <label>Email Address</label>
        </div>

        <div class="input-group">
            <input type="password" name="password" required placeholder=" ">
            <label>Password</label>
        </div>

        <button type="submit">Sign In</button>
    </form>

        <div style="text-align:center; margin-top:14px;">
        <a href="{{ route('admin.forgot') }}"
           style="color:#fff; text-decoration:underline; font-size:14px;">
            Forgot password?
        </a>
  

</div>








</body>
</html>
