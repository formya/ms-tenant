<x-static-layout>
   <div id="login" class="flex-row justify-content-center align-items-center">
      <div class="panel flex-row bg-white shadow-lg p-4 rounded-2">
         <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
               <label for="email" class="form-label">{{ __('Email') }}</label>
               <input type="email" class="form-control" name="email" autofocus required>
               <div class="invalid-feedback">
                  Please input a name
               </div>
            </div>
            <div class="mb-3">
               <label for="password" class="form-label">{{ __('Password') }}</label>
               <input type="password" class="form-control" name="password" required>
               <div class="invalid-feedback">
                  Please input a name
               </div>
            </div>

            <div class="mb-5 d-grid">
               <button type="submit" class="btn-primary btn">Submit</button>
            </div>
         </form>
      </div>
   </div>
</x-static-layout>
