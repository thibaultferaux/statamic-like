const rt_like = {
    init() {
        this.likes = JSON.parse(window.localStorage.getItem('likes')) ?? [];
        this.cacheDomElements();
        this.registerEventListeners();
        this.hightlightBtns();
        this.setInput();
    },
    cacheDomElements() {
        this.$btnLike = document.querySelectorAll('.btn-like');
        this.$inputId = document.querySelector('input[name="entry_id"]');
        this.$inputLike = document.querySelector('input[name="like_status"]');
    },
    registerEventListeners() {
        this.$btnLike.forEach($btn => {
            $btn.onclick = (e) => {

                const id = e.target.dataset.id;
                this.likeAction(id)
            };
        });
    },
    hightlightBtns() {
        this.$btnLike.forEach($btn => {
            const id = $btn.dataset.id;

            if (!this.likes.includes(id)) {
                // change innerhtml
                $btn.innerHTML += '🤍 Like';
                $btn.classList.remove('bg-gray-200', 'text-black', 'border-gray-500');
                $btn.classList.add('bg-red-500', 'text-white', 'border-red-500');
            } else {
                $btn.innerHTML += '🤍 Liked';
                $btn.classList.remove('bg-red-500', 'text-white', 'border-red-500');
                $btn.classList.add('bg-gray-200', 'text-black', 'border-gray-500');
            }


        });
    },
    setInput() {
        if (this.likes.includes(this.$inputId.value)) {
            this.$inputLike.value = 1;
        }
    },
    likeAction(entyId) {
        // if not already in array
        if (!this.likes.includes(entyId)) {
            this.likes.push(entyId);
        } else {
            // if already in array
            this.likes = this.likes.filter(like => like !== entyId);
        }
        window.localStorage.setItem('likes', JSON.stringify(this.likes));
    }
}

window.onload = (e) => {
    rt_like.init();
}
