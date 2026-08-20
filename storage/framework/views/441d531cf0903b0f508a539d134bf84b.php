<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <meta
        name="csrf-token"
        content="<?php echo e(csrf_token()); ?>"
    >

    <title>Admin Login | Kalindri Agritech</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            50: '#effaf1',
                            100: '#daf2df',
                            200: '#b7e6c2',
                            300: '#85d293',
                            400: '#50b968',
                            500: '#2c9a49',
                            600: '#1d7c39',
                            700: '#17632f',
                            800: '#145028',
                            900: '#123f22',
                            950: '#082412',
                        }
                    }
                }
            }
        }
    </script>

    <link
        rel="preconnect"
        href="https://fonts.googleapis.com"
    >

    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin
    >

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Manrope:wght@600;700;800&display=swap"
        rel="stylesheet"
    >

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Inter, sans-serif;
        }

        h1,
        h2,
        h3,
        .font-display {
            font-family: Manrope, sans-serif;
        }
    </style>
</head>

<body class="min-h-screen bg-[#f7f9fb] text-slate-800">

<div class="grid min-h-screen lg:grid-cols-[1.08fr_.92fr]">

    
    
    

    <div
        class="relative hidden overflow-hidden bg-brand-950
               px-12 py-10 text-white lg:flex lg:flex-col"
    >

        

        <div
            class="absolute -left-24 -top-24 h-80 w-80
                   rounded-full bg-brand-500/10 blur-3xl"
        ></div>

        <div
            class="absolute -bottom-32 -right-20 h-96 w-96
                   rounded-full bg-lime-400/10 blur-3xl"
        ></div>


        

        <div class="relative z-10">

            <a
                href="<?php echo e(route('home')); ?>"
                class="inline-flex items-center gap-3"
            >

                <div
                    class="flex h-16 w-[76px] items-center justify-center
                           overflow-hidden rounded-2xl bg-white p-2
                           shadow-lg shadow-black/10"
                >

                    <img
                        src="<?php echo e(asset('images/kalindri-logo.png')); ?>"
                        alt="Kalindri Agritech"
                        class="h-full w-full object-contain"
                    >

                </div>

                <div>

                    <div
                        class="text-xl font-extrabold tracking-tight"
                    >
                        KALINDRI
                        <span class="text-lime-400">
                            AGRITECH
                        </span>
                    </div>

                    <div
                        class="mt-1 text-[10px] font-bold uppercase
                               tracking-[.2em] text-white/50"
                    >
                        Private Limited
                    </div>

                </div>

            </a>

        </div>


        

        <div
            class="relative z-10 my-auto max-w-xl py-16"
        >

            <div
                class="mb-6 inline-flex items-center gap-2
                       rounded-full border border-white/10
                       bg-white/10 px-4 py-2 text-xs
                       font-extrabold uppercase tracking-[.2em]
                       text-lime-300"
            >

                <span
                    class="h-2 w-2 rounded-full bg-lime-400"
                ></span>

                Admin Portal

            </div>


            <h1
                class="text-4xl font-extrabold leading-[1.15]
                       xl:text-5xl"
            >
                Manage your business
                <span class="text-lime-400">
                    efficiently
                </span>
                from one dashboard.
            </h1>


            <p
                class="mt-6 max-w-lg text-base leading-8
                       text-white/60"
            >
                Access your Kalindri Agritech admin dashboard to
                manage products, enquiries, website content and
                business operations securely.
            </p>


            

            <div class="mt-10 grid grid-cols-2 gap-4">

                <div
                    class="rounded-2xl border border-white/10
                           bg-white/[0.06] p-5"
                >

                    <div
                        class="mb-3 flex h-10 w-10 items-center
                               justify-center rounded-xl
                               bg-lime-400/10 text-lime-300"
                    >

                        <svg
                            class="h-5 w-5"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <rect
                                x="3"
                                y="3"
                                width="7"
                                height="7"
                                rx="2"
                            />

                            <rect
                                x="14"
                                y="3"
                                width="7"
                                height="7"
                                rx="2"
                            />

                            <rect
                                x="3"
                                y="14"
                                width="7"
                                height="7"
                                rx="2"
                            />

                            <rect
                                x="14"
                                y="14"
                                width="7"
                                height="7"
                                rx="2"
                            />
                        </svg>

                    </div>

                    <div class="text-sm font-bold">
                        Central Dashboard
                    </div>

                    <div
                        class="mt-1 text-xs leading-5 text-white/45"
                    >
                        Manage your complete website from one place.
                    </div>

                </div>


                <div
                    class="rounded-2xl border border-white/10
                           bg-white/[0.06] p-5"
                >

                    <div
                        class="mb-3 flex h-10 w-10 items-center
                               justify-center rounded-xl
                               bg-lime-400/10 text-lime-300"
                    >

                        <svg
                            class="h-5 w-5"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path
                                d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"
                            />

                            <path
                                d="M9 12l2 2 4-4"
                            />
                        </svg>

                    </div>

                    <div class="text-sm font-bold">
                        Secure Access
                    </div>

                    <div
                        class="mt-1 text-xs leading-5 text-white/45"
                    >
                        Protected access for authorised administrators.
                    </div>

                </div>

            </div>

        </div>


        

        <div
            class="relative z-10 flex items-center
                   justify-between text-xs text-white/35"
        >

            <span>
                © <?php echo e(date('Y')); ?> Kalindri Agritech Private Limited
            </span>

            <span>
                Admin Management System
            </span>

        </div>

    </div>



    
    
    

    <div
        class="flex min-h-screen items-center justify-center
               px-5 py-8 sm:px-8 lg:px-12"
    >

        <div class="w-full max-w-[460px]">


            

            <div class="mb-8 flex justify-center lg:hidden">

                <a
                    href="<?php echo e(route('home')); ?>"
                    class="flex items-center gap-3"
                >

                    <div
                        class="flex h-14 w-16 items-center
                               justify-center overflow-hidden
                               rounded-xl border border-slate-100
                               bg-white p-1.5 shadow-sm"
                    >

                        <img
                            src="<?php echo e(asset('images/kalindri-logo.png')); ?>"
                            alt="Kalindri Agritech"
                            class="h-full w-full object-contain"
                        >

                    </div>

                    <div>

                        <div
                            class="text-lg font-extrabold
                                   text-slate-950"
                        >
                            KALINDRI
                            <span class="text-brand-700">
                                AGRITECH
                            </span>
                        </div>

                        <div
                            class="text-[9px] font-bold uppercase
                                   tracking-[.15em] text-slate-400"
                        >
                            Admin Portal
                        </div>

                    </div>

                </a>

            </div>


            

            <div
                class="rounded-[28px] border border-slate-200
                       bg-white p-6 shadow-[0_20px_60px_rgba(15,23,42,0.08)]
                       sm:p-9"
            >

                

                <a
                    href="<?php echo e(route('home')); ?>"
                    class="inline-flex items-center gap-2
                           text-sm font-bold text-slate-500
                           transition hover:text-brand-700"
                >

                    <svg
                        class="h-4 w-4"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                        <path d="M19 12H5"/>
                        <path d="M12 19l-7-7 7-7"/>
                    </svg>

                    Back to website

                </a>


                

                <div class="mt-8">

                    <div
                        class="mb-3 inline-flex rounded-lg
                               bg-brand-50 px-3 py-1.5
                               text-[10px] font-extrabold
                               uppercase tracking-[.15em]
                               text-brand-700"
                    >
                        Administrator Login
                    </div>

                    <h2
                        class="text-3xl font-extrabold
                               tracking-tight text-slate-950"
                    >
                        Welcome back
                    </h2>

                    <p
                        class="mt-2 text-sm leading-6
                               text-slate-500"
                    >
                        Enter your login credentials to access
                        the Kalindri Agritech dashboard.
                    </p>

                </div>


                

                <?php if(session('status')): ?>

                    <div
                        class="mt-6 flex items-start gap-3
                               rounded-xl border border-emerald-200
                               bg-emerald-50 px-4 py-3
                               text-sm text-emerald-700"
                    >

                        <svg
                            class="mt-0.5 h-5 w-5 shrink-0"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <circle
                                cx="12"
                                cy="12"
                                r="9"
                            />

                            <path d="M8 12l2.5 2.5L16 9"/>
                        </svg>

                        <span>
                            <?php echo e(session('status')); ?>

                        </span>

                    </div>

                <?php endif; ?>


                

                <?php if($errors->any()): ?>

                    <div
                        class="mt-6 flex items-start gap-3
                               rounded-xl border border-rose-200
                               bg-rose-50 px-4 py-3
                               text-sm text-rose-700"
                    >

                        <svg
                            class="mt-0.5 h-5 w-5 shrink-0"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <circle
                                cx="12"
                                cy="12"
                                r="9"
                            />

                            <path d="M12 8v5"/>
                            <path d="M12 16h.01"/>
                        </svg>

                        <div>

                            <div class="font-bold">
                                Unable to sign in
                            </div>

                            <div class="mt-1">
                                <?php echo e($errors->first()); ?>

                            </div>

                        </div>

                    </div>

                <?php endif; ?>



                

                <form
                    method="POST"
                    action="<?php echo e(route('login')); ?>"
                    class="mt-7 space-y-5"
                >

                    <?php echo csrf_field(); ?>


                    

                    <div>

                        <label
                            for="email"
                            class="mb-2 block text-sm
                                   font-bold text-slate-700"
                        >
                            Email Address
                        </label>

                        <div class="relative">

                            <div
                                class="pointer-events-none absolute
                                       inset-y-0 left-0 flex
                                       items-center pl-4
                                       text-slate-400"
                            >

                                <svg
                                    class="h-5 w-5"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                >
                                    <rect
                                        x="3"
                                        y="5"
                                        width="18"
                                        height="14"
                                        rx="2"
                                    />

                                    <path d="M3 7l9 6 9-6"/>
                                </svg>

                            </div>

                            <input
                                id="email"
                                type="email"
                                name="email"
                                value="<?php echo e(old('email')); ?>"
                                required
                                autofocus
                                autocomplete="email"
                                placeholder="admin@example.com"
                                class="w-full rounded-xl border
                                       border-slate-200 bg-white
                                       py-3.5 pl-12 pr-4 text-sm
                                       text-slate-800 outline-none
                                       transition placeholder:text-slate-400
                                       focus:border-brand-600
                                       focus:ring-4 focus:ring-brand-100"
                            >

                        </div>

                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

                            <p
                                class="mt-2 text-xs font-semibold
                                       text-rose-600"
                            >
                                <?php echo e($message); ?>

                            </p>

                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    </div>



                    

                    <div>

                        <div
                            class="mb-2 flex items-center
                                   justify-between"
                        >

                            <label
                                for="password"
                                class="block text-sm font-bold
                                       text-slate-700"
                            >
                                Password
                            </label>

                        </div>


                        <div class="relative">

                            <div
                                class="pointer-events-none absolute
                                       inset-y-0 left-0 flex
                                       items-center pl-4
                                       text-slate-400"
                            >

                                <svg
                                    class="h-5 w-5"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                >
                                    <rect
                                        x="5"
                                        y="10"
                                        width="14"
                                        height="10"
                                        rx="2"
                                    />

                                    <path
                                        d="M8 10V7a4 4 0 0 1 8 0v3"
                                    />
                                </svg>

                            </div>


                            <input
                                id="password"
                                type="password"
                                name="password"
                                required
                                autocomplete="current-password"
                                placeholder="Enter your password"
                                class="w-full rounded-xl border
                                       border-slate-200 bg-white
                                       py-3.5 pl-12 pr-12 text-sm
                                       text-slate-800 outline-none
                                       transition placeholder:text-slate-400
                                       focus:border-brand-600
                                       focus:ring-4 focus:ring-brand-100"
                            >


                            <button
                                type="button"
                                onclick="togglePassword()"
                                class="absolute inset-y-0 right-0
                                       flex items-center px-4
                                       text-slate-400 transition
                                       hover:text-brand-700"
                                aria-label="Show or hide password"
                            >

                                <svg
                                    id="eyeOpen"
                                    class="h-5 w-5"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                >
                                    <path
                                        d="M2 12s3.5-7 10-7
                                           10 7 10 7
                                           -3.5 7-10 7
                                           S2 12 2 12z"
                                    />

                                    <circle
                                        cx="12"
                                        cy="12"
                                        r="3"
                                    />
                                </svg>


                                <svg
                                    id="eyeClosed"
                                    class="hidden h-5 w-5"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                >
                                    <path d="M3 3l18 18"/>

                                    <path
                                        d="M10.6 5.2A9.3 9.3 0 0 1
                                           12 5c6.5 0 10 7 10 7
                                           a15 15 0 0 1-2.1 3.2"
                                    />

                                    <path
                                        d="M6.6 6.6C3.6 8.6 2 12 2 12
                                           s3.5 7 10 7
                                           c1.4 0 2.6-.3 3.7-.8"
                                    />
                                </svg>

                            </button>

                        </div>

                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

                            <p
                                class="mt-2 text-xs font-semibold
                                       text-rose-600"
                            >
                                <?php echo e($message); ?>

                            </p>

                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    </div>



                    

                    <div
                        class="flex items-center justify-between"
                    >

                        <label
                            class="flex cursor-pointer
                                   items-center gap-2.5"
                        >

                            <input
                                type="checkbox"
                                name="remember"
                                id="remember"
                                <?php echo e(old('remember') ? 'checked' : ''); ?>

                                class="h-4 w-4 rounded
                                       border-slate-300
                                       text-brand-700
                                       focus:ring-brand-600"
                            >

                            <span
                                class="text-sm font-medium
                                       text-slate-600"
                            >
                                Remember me
                            </span>

                        </label>

                    </div>



                    

                    <button
                        type="submit"
                        class="group flex w-full items-center
                               justify-center gap-2 rounded-xl
                               bg-brand-800 px-5 py-4
                               text-sm font-extrabold text-white
                               shadow-lg shadow-brand-900/10
                               transition hover:bg-brand-900
                               focus:outline-none
                               focus:ring-4 focus:ring-brand-200"
                    >

                        Login to Dashboard

                        <svg
                            class="h-4 w-4 transition-transform
                                   group-hover:translate-x-1"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path d="M5 12h14"/>
                            <path d="M13 6l6 6-6 6"/>
                        </svg>

                    </button>

                </form>


                

                <div
                    class="mt-7 border-t border-slate-100
                           pt-6 text-center"
                >

                    <div
                        class="flex items-center justify-center
                               gap-2 text-xs text-slate-400"
                    >

                        <svg
                            class="h-4 w-4"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                        >
                            <path
                                d="M12 22s8-4 8-10V5
                                   l-8-3-8 3v7
                                   c0 6 8 10 8 10z"
                            />
                        </svg>

                        Secure administrator access

                    </div>

                </div>

            </div>


            

            <p
                class="mt-6 text-center text-xs
                       text-slate-400"
            >
                © <?php echo e(date('Y')); ?> Kalindri Agritech Private Limited.
                All rights reserved.
            </p>

        </div>

    </div>

</div>


<script>
    function togglePassword() {
        const password = document.getElementById('password');
        const eyeOpen = document.getElementById('eyeOpen');
        const eyeClosed = document.getElementById('eyeClosed');

        if (password.type === 'password') {
            password.type = 'text';

            eyeOpen.classList.add('hidden');
            eyeClosed.classList.remove('hidden');
        } else {
            password.type = 'password';

            eyeOpen.classList.remove('hidden');
            eyeClosed.classList.add('hidden');
        }
    }
</script>

</body>
</html><?php /**PATH D:\work1\agriculture-laravel-auth-dashboard\resources\views/auth/login.blade.php ENDPATH**/ ?>