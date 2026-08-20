<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | KisanPro Agro Equipment</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Manrope:wght@600;700;800&display=swap" rel="stylesheet">
    <style>body{font-family:Inter,sans-serif}h1,h2{font-family:Manrope,sans-serif}</style>
</head>
<body class="min-h-screen bg-[#f7f8f2] text-slate-800">
<div class="grid min-h-screen lg:grid-cols-2">
    <div class="hidden bg-[#1f3a1d] p-12 text-white lg:flex lg:flex-col lg:justify-between">
        <a href="{{ route('home') }}" class="text-2xl font-extrabold">KISAN<span class="text-lime-400">PRO</span></a>
        <div class="max-w-xl">
            <div class="mb-5 inline-flex rounded-full bg-white/10 px-4 py-2 text-xs font-extrabold uppercase tracking-[.2em] text-lime-300">Admin Access</div>
            <h1 class="text-5xl font-extrabold leading-tight">Manage your agriculture business from one dashboard.</h1>
            <p class="mt-5 text-base leading-8 text-white/65">View enquiries, dealership requests and website activity in a clean protected area.</p>
        </div>
        <div class="text-sm text-white/45">KisanPro Agro Equipment</div>
    </div>
    <div class="flex items-center justify-center p-6 sm:p-10">
        <div class="w-full max-w-md rounded-3xl bg-white p-7 shadow-xl shadow-slate-900/5 sm:p-9">
            <a href="{{ route('home') }}" class="text-sm font-bold text-green-700">← Back to website</a>
            <h2 class="mt-8 text-3xl font-extrabold text-slate-950">Welcome back</h2>
            <p class="mt-2 text-sm text-slate-500">Sign in to open the dashboard.</p>
            @if ($errors->any())
                <div class="mt-5 rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">{{ $errors->first() }}</div>
            @endif
            <form method="POST" action="{{ route('login') }}" class="mt-7 space-y-5">
                @csrf
                <label class="block text-sm font-bold">Email
                    <input type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="email" class="mt-2 w-full rounded-xl border border-slate-200 px-4 py-3.5 font-normal outline-none focus:border-green-600" placeholder="admin@example.com">
                </label>
                <label class="block text-sm font-bold">Password
                    <input type="password" name="password" required autocomplete="current-password" class="mt-2 w-full rounded-xl border border-slate-200 px-4 py-3.5 font-normal outline-none focus:border-green-600" placeholder="••••••••">
                </label>
                <label class="flex items-center gap-2 text-sm text-slate-600"><input type="checkbox" name="remember" class="rounded"> Remember me</label>
                <button class="w-full rounded-xl bg-green-800 px-5 py-4 text-sm font-extrabold text-white hover:bg-green-900">Login to Dashboard →</button>
            </form>
            <p class="mt-6 text-center text-sm text-slate-500">No account? <a href="{{ route('register') }}" class="font-extrabold text-green-700">Create account</a></p>
        </div>
    </div>
</div>
</body>
</html>
