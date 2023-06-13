<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>404 Custom Error Page Example</title>
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> --}}
    <style>
         body{
  margin: 0;
  padding: 0;
  text-align: center;
  font-family: sans-serif;
  /* background-color: #E7FFFF; */
}

h1, a{
  margin: 0;
  padding: 0;
  text-decoration: none;
}

.section{
  padding: 4rem 2rem;
}

.section .error{
  font-size: 150px;
  color: #aa8453;
  text-shadow:
    1px 1px 1px #aa8453,
    2px 2px 1px #aa8453,
    3px 3px 1px #aa8453,
    4px 4px 1px #aa8453,
    5px 5px 1px #aa8453,
    6px 6px 1px #aa8453,
    7px 7px 1px #aa8453,
    8px 8px 1px #aa8453,
    25px 25px 8px rgba(0,0,0, 0.2);
}

.page{
  margin: 2rem 0;
  font-size: 20px;
  font-weight: 600;
  color: #444;
}

.back-home{
  display: inline-block;
  border: 2px solid #222;
  color: #222;
  text-transform: uppercase;
  font-weight: 600;
  padding: 0.75rem 1rem 0.6rem;
  transition: all 0.2s linear;
  box-shadow: 0 3px 8px rgba(0,0,0, 0.3);
}
.back-home:hover{
  background: #222;
  color: #ddd;
}
    </style>
</head>
<body>
    <div class="section">
        <h1 class="error">404</h1>
        <div class="page">Ooops!!! The page you are looking for is not found</div>
        <a class="back-home" href="{{ route('home') }}">Back to home</a>
      </div>
</body>
</html>
