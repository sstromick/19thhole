<div class="bg-gray-200 border border-gray-300 rounded-lg py-4 px-6">
    <h3 class="font-bold text-xl mb-4">Following</h3>

    @auth
    <ul>
        @forelse (current_user()->follows as $user)
        <li class="mb-4">
            <div class="">
                <a class="flex items-center text-sm" href=" {{ route('profile', $user) }}">
                    <img src="{{ $user->avatar }}" alt="" width="40" height="40" class="rounded-full mr-2">
                    {{ $user->name }}
                </a>
            </div>
        </li>
        @empty
        <li>No Friends Yet</li>
        @endforelse
    </ul>

    @endauth
</div>
