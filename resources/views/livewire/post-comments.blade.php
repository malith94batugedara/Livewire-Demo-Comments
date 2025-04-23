<div>
    <!-- Display Comments -->
    <div class="mt-8 p-6 bg-white dark:bg-gray-800 rounded-lg shadow-md">
        <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Comments ({{ $post->comments->count() }})</h2>

        @forelse ($post->comments as $comment)
            <div class="mb-4 pb-4 border-b border-gray-200 dark:border-gray-700 last:border-b-0">
                <p class="text-sm font-semibold text-gray-800 dark:text-gray-200">{{ $comment->user_name ?? 'Anonymous' }}</p>
                <p class="text-xs text-gray-500 dark:text-gray-400 mb-1">{{ $comment->created_at->diffForHumans() }}</p>
                <p class="text-gray-700 dark:text-gray-300">{{ $comment->body }}</p>
            </div>
        @empty
            <p class="text-gray-500 dark:text-gray-400">No comments yet. Be the first to comment!</p>
        @endforelse
    </div>

    <!-- Comment Section -->
    <div class="mt-8 p-6 bg-white dark:bg-gray-800 rounded-lg shadow-md">
        <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Add a Comment</h2>
        <form wire:submit="saveComment" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Name</label>
                <input type="text" wire:model="name" id="name" class="mt-1 block w-full px-3 py-2 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm text-gray-900 dark:text-white">
            </div>
            <div class="mb-4">
                <label for="comment" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Comment</label>
                <textarea wire:model="comment" id="comment" rows="4" class="mt-1 block w-full px-3 py-2 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm text-gray-900 dark:text-white"></textarea>
            </div>
            <div>
                <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-700 disabled:opacity-25 transition">
                    Submit Comment
                </button>
            </div>
        </form>
    </div>
</div>
