{{-- =========================================================
     SCHEDULE CALL POPUP
========================================================= --}}

<div
    x-data
    x-show="$store.scheduleModal.open"
    x-cloak
    class="sc-modal-overlay"
    @click.self="$store.scheduleModal.open = false"
    @keydown.escape.window="$store.scheduleModal.open = false"
>

    <div
        class="sc-modal-box"
        @click.stop
    >

        {{-- CLOSE BUTTON --}}

        <button
            type="button"
            class="sc-modal-close"
            @click="$store.scheduleModal.open = false"
            aria-label="Close"
        >
            ×
        </button>


        {{-- HEADER --}}

        <div class="sc-modal-header">

            <div class="sc-modal-header-text">

                <h2>
                    Book Your Free
                </h2>

                <h3>
                    Strategy Call
                </h3>

            </div>

        </div>


        {{-- FORM --}}

       <form 
    action="{{ route('schedule.submit') }}" 
    method="POST" 
    class="sc-modal-form"
>
            @csrf
    <input type="hidden" name="form_type" value="schedule">

            <div class="sc-form-field">

                <input
                    type="text"
                    name="name"
                    placeholder="Name"
                    required
                >

            </div>


            <div class="sc-form-field sc-phone-field">

                <span class="sc-flag">
                    🇮🇳
                </span>

                <span class="sc-country-code">
                    +91
                </span>

                <input
                    type="tel"
                    name="mobile"
                    placeholder="Mobile Number"
                    required
                >

            </div>


            <div class="sc-form-field">

                <input
                    type="email"
                    name="email"
                    placeholder="Email Address"
                    required
                >

            </div>


            <div class="sc-form-field">

                <textarea
                    name="requirements"
                    rows="4"
                    placeholder="Enter your requirements"
                ></textarea>

            </div>


            <button
                type="submit"
                class="sc-modal-submit"
            >
                Submit
            </button>

        </form>

    </div>

</div>

@if(session('schedule_success'))
    <div class="schedule-thank-you">

        <div class="schedule-thank-you-icon">
            ✓
        </div>

        <h2>
            Thank You!
        </h2>

        <p>
            {{ session('schedule_success') }}
        </p>

        <button
            type="button"
            onclick="this.closest('.schedule-thank-you').remove()"
        >
            Close
        </button>

    </div>
@endif
<style>


/* =========================================================
   ALPINE
========================================================= */

[x-cloak] {
    display: none !important;
}


/* =========================================================
   OVERLAY
========================================================= */

.sc-modal-overlay {
    position: fixed;
    inset: 0;
    width: 100%;
    height: 100%;

    background: rgba(0, 0, 0, 0.68);

    display: flex;
    align-items: center;
    justify-content: center;

    padding: 15px;

    z-index: 999999999 !important;

    overflow: hidden;
}


/* =========================================================
   MODAL BOX
========================================================= */

.sc-modal-box {
    position: relative;

    width: 100%;
    max-width: 440px;

    background: #ffffff;

    border-radius: 14px;

    overflow: hidden;


    z-index: 1000000000;
}


/* =========================================================
   CLOSE BUTTON
========================================================= */

.sc-modal-close {
    position: absolute;

    top: 10px;
    right: 10px;

    width: 28px;
    height: 28px;

    border: none;
    border-radius: 50%;

    background: #ffffff;
    color: #111111;

    font-size: 21px;
    font-weight: 400;

    line-height: 28px;
    text-align: center;

    padding: 0;

    cursor: pointer;

    z-index: 50;
}


/* =========================================================
   HEADER
========================================================= */

.sc-modal-header {
    position: relative;

    min-height: 145px;

    background-color: #06143d;
    background-image: url('{{ asset('images/popup.webp') }}');

    background-size: cover;
    background-position: center;

    border-radius: 14px 14px 0 0;

    padding: 28px 25px;

    display: flex;
    align-items: center;

    overflow: hidden;
}


/* =========================================================
   HEADER TEXT
========================================================= */

.sc-modal-header-text {
    position: relative;
    z-index: 5;

    max-width: 300px;
}

.sc-modal-header-text h2 {
    margin: 0;

    color: #ffffff;

    font-size: 28px;
    line-height: 1.15;

    font-weight: 500;
}

.sc-modal-header-text h3 {
    margin: 4px 0 0;

    color: #ffffff;

    font-size: 32px;
    line-height: 1.15;

    font-weight: 700;
}


/* =========================================================
   FORM
========================================================= */

.sc-modal-form {
    padding: 20px 14px 0;
}


/* =========================================================
   FORM FIELDS
========================================================= */

.sc-form-field {
    margin-bottom: 8px;
}


.sc-form-field input,
.sc-form-field textarea {
    width: 100%;
    box-sizing: border-box;

    border: 1px solid #d8d8d8;

    border-radius: 10px;

    padding: 0 16px;

    font-family: inherit;
    font-size: 15px;

    color: #222222;

    outline: none;

    background: #ffffff;

    box-shadow: none;
}


.sc-form-field input {
    height: 44px;
}


.sc-form-field textarea {
    height: 70px;

    min-height: 70px;
    max-height: 103px;

    padding-top: 14px;
    padding-bottom: 14px;

    resize: none;
}


.sc-form-field input::placeholder,
.sc-form-field textarea::placeholder {
    color: #aeb8ce;
    opacity: 1;
}


.sc-form-field input:focus,
.sc-form-field textarea:focus {
    border-color: #d0d0d0;
}


/* =========================================================
   PHONE FIELD
========================================================= */

.sc-phone-field {
    height: 44px;

    display: flex;
    align-items: center;

    gap: 8px;

    box-sizing: border-box;

    border: 1px solid #d8d8d8;

    border-radius: 10px;

    padding: 0 13px;

    background: #ffffff;
}


.sc-phone-field input {
    height: 44px;

    flex: 1;

    border: none;

    padding: 0;

    min-width: 0;
}


.sc-phone-field input:focus {
    border: none;
}


.sc-flag {
    font-size: 16px;

    line-height: 1;
}


.sc-country-code {
    font-size: 15px;

    color: #333333;

    white-space: nowrap;
}


/* =========================================================
   SUBMIT BUTTON
========================================================= */

.sc-modal-submit {
    display: block;

    width: calc(100% + 28px);

    margin-left: -14px;

    height: 56px;

    border: none;

    border-radius: 0 0 14px 14px;

    padding: 0;

    background: #2E3192;

    color: #ffffff;

    font-size: 16px;

    font-weight: 600;

    cursor: pointer;
}


.sc-modal-submit:hover {
    background: #25277d;
}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 600px) {

    .sc-modal-overlay {
        padding: 12px;
    }

    .sc-modal-box {
        max-width: 100%;
        border-radius: 12px;
    }

    .sc-modal-header {
        min-height: 125px;

        padding: 22px 18px;
    }

    .sc-modal-header-text h2 {
        font-size: 23px;
    }

    .sc-modal-header-text h3 {
        font-size: 27px;
    }

    .sc-modal-form {
        padding: 15px 12px 0;
    }

    .sc-form-field {
        margin-bottom: 10px;
    }

    .sc-form-field input,
    .sc-phone-field {
        height: 55px;
    }

    .sc-phone-field input {
        height: 51px;
    }

    .sc-form-field textarea {
        height: 85px;
        min-height: 85px;
        max-height: 85px;
    }

    .sc-modal-submit {
        width: calc(100% + 24px);
        margin-left: -12px;

        height: 52px;
    }

}
.schedule-thank-you {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);

    width: calc(100% - 30px);
    max-width: 420px;

    background: #ffffff;
    padding: 35px 25px;

    border-radius: 16px;

    text-align: center;

    box-shadow: 0 20px 60px rgba(0,0,0,0.25);

    z-index: 9999999999;
}

.schedule-thank-you-icon {
    width: 55px;
    height: 55px;

    margin: 0 auto 15px;

    border-radius: 50%;

    background: #2E3192;
    color: #ffffff;

    display: flex;
    align-items: center;
    justify-content: center;

    font-size: 28px;
}

.schedule-thank-you h2 {
    margin: 0 0 10px;

    color: #06143d;

    font-size: 28px;
}

.schedule-thank-you p {
    margin: 0 0 20px;

    color: #555555;

    font-size: 15px;
    line-height: 1.6;
}

.schedule-thank-you button {
    border: none;

    padding: 12px 28px;

    border-radius: 8px;

    background: #2E3192;
    color: #ffffff;

    font-size: 15px;
    font-weight: 600;

    cursor: pointer;
}

</style>