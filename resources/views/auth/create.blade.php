<x-layout>
    <h1 class=>Sign in to your account</h1>
    <x-card class=" py-8 px-16 ">
        <form action="{{route('auth.store')}}" method="POST">
            @csrf
            <div class="mb-8">
                <label for="email" class="m-2 block text-sm font-medium text text-slate-900">E mail</label>
                <x-text-input name="email" />
            </div>
            <div class="mb-8">
                <label for="password"  class="m-2 block text-sm font-medium text text-slate-900">Password</label>
                <x-text-input name="password" type="password" />
            </div>
            <div class="mb-8 flex justify-between text-sm font-medium" >
                <div>
                    <div class="flex items-center space-x-2">
                        <input type="checkbox"  name="remember"  class="rounded-sm border border-slate-500">
                        <label for="remember">Remember Me</label>
                    </div>
                </div>
                <div>
                    <a href="#" class="text-indigo-600 hover:underline">
                            Forget password ?
                </div>
            </div>
            <button type="button" class=" w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Login</button>
        </form>


    </x-card>
</x-layout>

