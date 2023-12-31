<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="mx-auto mt-10 max-w-2xl bg-gradient-to-r from-indigo-500 from-10% via-sky-300 via-30% to-emerald-500 to-90% text-slate-700">
  <nav class="mb-8  flex justify-between text-lg font-medium">
        <ul class="flex space-x-2">
            <li>
                <a href="{{route('jobs.index')}}"> Home</a>
            </li>
        </ul>
        <ul class="flex space-x-2">
           @auth
              <li>
                {{auth()->user()->name ?? 'Anynomus'}}

              </li>
              <li>
                <form action="{{route('auth.destroy')}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button>Logout</button>
                </form>
              </li>
               @else
               <li> <a href="{{route('auth.create')}}">Sign in</a></li>
           @endauth
        </ul>
  </nav>

    {{$slot}}

</body>
</html>
