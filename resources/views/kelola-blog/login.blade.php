<!DOCTYPE html>
<html lang="id" class="bg-[#23153c] scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/output.css">
    <link rel="shortcut icon" href="favicon-96x96.png" type="image/x-icon">

    <title>Login</title>
</head>
<body>
    <div class="hero min-h-screen max-w-5xl mx-auto">
        <div class="hero-content flex-col lg:flex-row-reverse">
          <div class="text-center lg:text-left text-neutral-content">
            <h1 class="text-5xl font-bold">Login!</h1>
            <p class="py-6">Pastikan anda memasukkan username dan password dengan benar</p>
          </div>
          <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
            <div class="card-body">
              <form action="/kelola-blog" method="post">
                <div class="flex flex-col">
                  <label class="label">
                    <span class="label-text">Username</span>
                  </label>
                  <input type="text" placeholder="masukkan username" class="input input-bordered mb-4 invalid:border-red-500 empty:border-slate-300" required/>
                  <label class="label">
                    <span class="label-text">Password</span>
                  </label>
                  <input type="password" placeholder="masukkan password" class="input input-bordered mb-4 invalid:border-red-500 empty:border-slate-300" required/>
                  <button type="submit" class="btn btn-primary mt-4">Login</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
</body>
</html>