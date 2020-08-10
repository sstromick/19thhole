        <div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
          <form method="post" action="/tweets">
            @csrf
            <textarea name="body" placeholder="What's Up?" class="w-full"></textarea>

            <hr class="my-4">

            <footer class="flex justify-between">
              <img src="{{ current_user()->avatar }}" alt="" class="rounded-full mr-2" width="50" height="50">
              <button class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white" type="submit">Tweet</button>
            </footer>
          </form>

          @error('body')
          <p class="text-red-500 text-sm mt-2">
            {{ $message }}
          </p>
          @enderror
        </div>
