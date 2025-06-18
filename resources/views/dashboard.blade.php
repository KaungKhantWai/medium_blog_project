<x-app-layout>

    <div class="py-4">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900 ">
                    <x-category-tabs></x-category-tabs>
                </div>
            </div>
        </div>

        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class=" mt-8 text-gray-900">
                @forelse ($posts as $post)
                    <x-post-item :post="$post"></x-post-item>
                @empty
                    <div class="text-center text-gray-400 py-16">No post found.</div>
                @endforelse
            </div>

            {{ $posts->links() }}
        </div>
    </div>
</x-app-layout>
