<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | KisanPro Agro Equipment</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Manrope:wght@600;700;800&display=swap" rel="stylesheet">
    <style>body{font-family:Inter,sans-serif}h1,h2{font-family:Manrope,sans-serif}</style>
</head>
<body class="min-h-screen bg-[#f7f8f2] text-slate-800">
<div class="flex min-h-screen items-center justify-center p-6">
    <div class="w-full max-w-lg rounded-3xl bg-white p-7 shadow-xl shadow-slate-900/5 sm:p-9">
        <a href="{{ route('home') }}" class="text-sm font-bold text-green-700">← Back to website</a>
        <div class="mt-7 text-2xl font-extrabold">KISAN<span class="text-green-700">PRO</span></div>
        <h1 class="mt-5 text-3xl font-extrabold text-slate-950">Create admin account</h1>
        <p class="mt-2 text-sm text-slate-500">Register once and access the protected dashboard.</p>
        @if ($errors->any())
            <div class="mt-5 rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700"><ul class="list-disc pl-5">@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>
        @endif
        <form method="POST" action="{{ route('register') }}" class="mt-7 space-y-5">
            @csrf
            <label class="block text-sm font-bold">Full Name<input name="name" value="{{ old('name') }}" required class="mt-2 w-full rounded-xl border border-slate-200 px-4 py-3.5 font-normal outline-none focus:border-green-600" placeholder="Your name"></label>
            <label class="block text-sm font-bold">Email<input type="email" name="email" value="{{ old('email') }}" required class="mt-2 w-full rounded-xl border border-slate-200 px-4 py-3.5 font-normal outline-none focus:border-green-600" placeholder="admin@example.com"></label>
            <label class="block text-sm font-bold">Password<input type="password" name="password" required class="mt-2 w-full rounded-xl border border-slate-200 px-4 py-3.5 font-normal outline-none focus:border-green-600" placeholder="Minimum 8 characters"></label>
            <label class="block text-sm font-bold">Confirm Password<input type="password" name="password_confirmation" required class="mt-2 w-full rounded-xl border border-slate-200 px-4 py-3.5 font-normal outline-none focus:border-green-600" placeholder="Repeat password"></label>
            <button class="w-full rounded-xl bg-green-800 px-5 py-4 text-sm font-extrabold text-white hover:bg-green-900">Create Account →</button>
        </form>
        <p class="mt-6 text-center text-sm text-slate-500">Already registered? <a href="{{ route('login') }}" class="font-extrabold text-green-700">Login</a></p>
    </div>
</div>
</body>
</html>
