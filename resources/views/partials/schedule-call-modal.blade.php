<div
    x-show="$store.scheduleModal.open"
    x-cloak
    class="sc-modal-overlay"
    @click.self="$store.scheduleModal.open = false"
    @keydown.escape.window="$store.scheduleModal.open = false"
    x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-150"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
>
    <div class="sc-modal-box" @click.stop>

        <button type="button" class="sc-modal-close" @click="$store.scheduleModal.open = false" aria-label="Close">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 6L6 18M6 6l12 12" stroke-linecap="round"/></svg>
        </button>

        <div class="sc-modal-header">
            <div class="sc-modal-header-text">
                <h2>Book Your Free</h2>
                <h2>Strategy Call</h2>
            </div>
            <img src="{{ asset('images/schedule-call-person.png') }}" alt="" class="sc-modal-header-img">
        </div>

        <form action="{{ route('contact.submit') }}" method="POST" class="sc-modal-form">
            @csrf
            <input type="text" name="name" placeholder="Name" required>
            <input type="tel" name="mobile" placeholder="Mobile Number" required>
            <input type="email" name="email" placeholder="Email Address" required>
            <textarea name="requirements" rows="3" placeholder="Enter your requirements"></textarea>
            <button type="submit" class="sc-modal-submit">Submit</button>
        </form>

    </div>
</div>