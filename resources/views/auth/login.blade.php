@extends('layouts.auth')

@section('title') Login @endsection

@section('auth-content')
   <form action="" class="mt-14 space-y-5">
      <div class="flex flex-col gap-2">
         <label for="email" class="font-bold text-2xl">Email</label>

         <input
            id="email" 
            type="text"
            placeholder="Enter your email"
            class="w-full border border-gray-300 p-3 rounded-lg"
            name="email"
            tabindex="1"
         />
      </div>

      <div class="flex flex-col gap-2">
         <div class="flex items-center justify-between">
            <label for="password" class="font-bold text-2xl">Password</label>
            <a href="#" class="text-indigo-950" tabindex="3">Forget your password?</a>
         </div>

         <input
            id="password" 
            type="password"
            placeholder="Enter your password"
            class="w-full border border-gray-300 p-3 rounded-lg"
            name="password"
            tabindex="2"
         />
      </div>
      <input
         type="submit"
         value="Login"
         class="bg-purple-950 hover:bg-purple-800 w-full p-3 rounded-lg text-white font-bold text-xl cursor-pointer"
      />
   </form>
@endsection