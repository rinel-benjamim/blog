@props(['post'])


<div class="flex-col space-x-4 bg-slate-700 rounded-md p-4 container md:w-2/3 lg:w-1/2 mx-auto mb-6 shadow-lg">
    <div class="flex items-center">

        <!-- Profile image -->
        <div class="">
            <img src="{{  $post->user->avatar }}/{{ $post->user_id }} " alt="imagem do perfil"
                class="w-12 h-12 mr-2 object-cover rounded-full">
        </div>

        <!-- Username -->
        <div>
            <div>
                <p class="font-bold text-lg">{{ $post->user->name }}</p>
                <p class="text-sm text-gray-600 dark:text-gray-400">{{ '@' . $post->user->username }}</p>
            </div>
        </div>

        <!-- Post timestamp -->
        <div class="ml-auto">
            <p class="text-sm text-gray-600 dark:text-gray-400 mt-2">
                {{ $post->created_at->diffForHumans() }}
            </p>
        </div>
    </div>

    <hr class="my-5 border-gray-300 dark:border-gray-600">

    <!-- Post content -->
    <div class="mt-2 text-white">
        {{ $post->content }}
    </div>

    <!-- Like button and count -->
    <div class="mt-4 text-gray-400 flex items-center space-x-2">

        <i class="fa-solid fa-thumbs-up"></i>
        <p class="text-sm"">7 likes</p>        
        
    </div>

    <hr class=" my-5 border-gray-300 dark:border-gray-600">

        <div class="flex space-x-2">
            <x-secondary-button class="w-full outline-none bg-slate-400 hover:bg-slate-500 flex justify-center space-x-2">
                <i class="fa-regular fa-thumbs-up hover:text-blue-500"></i>
                <p>Like</p>
            </x-secondary-button>

            <x-secondary-button class="w-full outline-none bg-slate-400 hover:bg-slate-500 flex justify-center space-x-2">
                <i class="fa-regular fa-comment hover:text-blue-500"></i>
                <p>Comment</p>
            </x-secondary-button>
        </div>
    </div>