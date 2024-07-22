<x-navuser :user="$user"></x-navuser>
<x-layoutku2>
    <section class="forum-section py-8">
        <div class="container mx-auto px-4">
            <div class="forum-content kotakreply shadow-md rounded-lg p-6">
                <div class="discussion-detail mb-6">
                    <div class="mb-4 p-4 border-b border-gray-200">
                        <div class="flex items-start">
                            <img src="../../assets/user.png" alt="Profile Picture" class="profile-picture-show mr-2">
                            <div>
                                <p class="text-gray-800 font-semibold">
                                    {{ $diskusi->user->nama }} - {{ $diskusi->created_at->format('M d, Y H:i') }}
                                    <span
                                        class="ml-2 px-2 py-1 bg-gray-200 text-gray-600 rounded text-xs">Creator</span>
                                </p>
                                <p class="text-gray-700 mt-2 font-semibold">{{ $diskusi->topik }}</p>
                                <p class="text-gray-700 mt-2">{{ $diskusi->isi }}</p>
                            </div>
                        </div>
                    </div>


                    <div class="replies">
                        <h3 class="text-lg font-semibold mb-4">Replies</h3>
                        @foreach ($replies as $reply)
                            <div class="reply mb-4 p-4 border-b border-gray-200">
                                <div class="flex items-start">
                                    <img src="../../assets/user.png" alt="Profile Picture"
                                        class="profile-picture-show mr-2">
                                    <div>
                                        <p class="text-gray-800 font-semibold">{{ $reply->user->nama }} -
                                            {{ $reply->created_at->format('M d, Y H:i') }}</p>
                                        <p class="text-gray-700 mt-2">{{ $reply->isireply }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <!-- Paginasi -->
                        <div class="mt-4">
                            {{ $replies->links() }}
                        </div>
                    </div>
                </div>

                <div class="reply-form">
                    <h3 class="text-lg font-semibold mb-4">Post a Reply</h3>
                    <form action="{{ route('user.reply-store', $diskusi->diskusiID) }}" method="POST"
                        class="flex flex-col space-y-4">
                        @csrf
                        <textarea name="isireply" rows="4" placeholder="Enter your reply here..."
                            class="p-3 border border-gray-300 rounded-md w-full"></textarea>
                        <button type="submit" class="self-end px-4 py-2 bg-blue-500 text-white rounded-md">Submit
                            Reply</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layoutku2>
<x-footer></x-footer>

<style>
    .kotakreply {
        background-color: #ffffffa7;
        max-width: 1000px;
        margin: 0 auto;
    }

    .reply-form textarea {
        width: 100%;
        margin-bottom: 0;
        /* Menghilangkan margin bawah */
    }

    .reply-form button {
        margin-top: 0;
        /* Menghilangkan margin atas */
    }

    .profile-picture-show {
        width: 70px;
        /* Atur lebar gambar sesuai kebutuhan */
        height: 70px;
        /* Atur tinggi gambar sesuai kebutuhan */
        border-radius: 50%;
        /* Membuat gambar menjadi bulat */
    }
</style>
