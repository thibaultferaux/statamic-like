

<form
    action="{{ route('statamic.like.store') }}"
    method="POST"
    title="like-form"
>
    @csrf
    <input type="hidden" name="entry_id" value="{{ $id }}">
    <input type="hidden" name="like_status" value="0">
    <button
        class="bg-red-500 px-4 py-2 my-2 rounded-xl text-white font-semibold shadow-md"
    >
        🤍 Like {{ $likes }}
    </button>
</form>
