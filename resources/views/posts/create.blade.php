<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <div class="p-6 text-gray-900 dark:text-gray-100 flex gap-2 items-center ">
        <div>
            <x-text-input class="w-96" id="content" type="text" autofocus name="content" value="{{ old('content') }}" required placeholder="{{ __('Content') }}" />
        </div>
        <div>
            <x-primary-button class="ms-4">
                {{ __('Create Post') }}
            </x-primary-button>
        </div>

    </div>
    <x-input-error :messages="$errors->get('content')" />

        @if (session('success'))
            <div class="p-6 text-green-600 dark:text-green-400">
                {{ session('success') }}
            </div>            
                    
        @endif

</form>