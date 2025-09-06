<div>
   @foreach ($posts as $post)
       <div class="p-6 text-gray-900 dark:text-gray-100 border-b border-gray-200 dark:border-gray-600">
           {{ $post }}
       </div>
       
   @endforeach
   {{ $posts->links() }}
</div>
