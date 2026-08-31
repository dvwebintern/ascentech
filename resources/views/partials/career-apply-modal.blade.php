{{-- =========================================================
     CAREER APPLY POPUP
========================================================= --}}

<div
    x-data
    x-show="$store.careerModal.open"
    x-cloak
    class="career-modal-overlay"
    @click.self="$store.careerModal.open = false"
    @keydown.escape.window="$store.careerModal.open = false"
>

    <div
        class="career-modal-box"
        @click.stop
    >

        {{-- =====================================================
             CLOSE BUTTON
        ====================================================== --}}

        <button
            type="button"
            class="career-modal-close"
            @click="$store.careerModal.open = false"
            aria-label="Close"
        >
            ×
        </button>


        {{-- =====================================================
             LOGO
        ====================================================== --}}

        <div class="career-modal-logo">
            <img
                src="{{ asset('images/logo.svg') }}"
                alt="ASCENTech"
            >
        </div>


        {{-- =====================================================
             HEADING
        ====================================================== --}}

        <div class="career-modal-heading">

            <h2>
                Apply Now
<span>
                Grow Your Career</span> With Us
</h2>

        </div>


        {{-- =====================================================
             FORM
        ====================================================== --}}

       <form
    action="{{ route('career.submit') }}"
    method="POST"
    enctype="multipart/form-data"
    class="career-modal-form"
    id="careerApplicationForm"
>

            @csrf


            {{-- NAME --}}

            <div class="career-form-field">

                <input
                    type="text"
                    name="name"
                    placeholder="Name"
                    required
                >

            </div>


            {{-- EMAIL --}}

            <div class="career-form-field">

                <input
                    type="email"
                    name="email"
                    placeholder="Email Address"
                    required
                >

            </div>


            {{-- PHONE --}}

            <div class="career-form-field">

                <input
                    type="tel"
                    name="phone"
                    placeholder="Phone Number"
                    required
                >

            </div>


          <div class="career-form-field career-upload-field">

    <label for="career-cv">
        <span class="career-upload-text">
            Upload CV
        </span>

        <span class="career-upload-icon">
            <i class="fa-solid fa-cloud-arrow-up"></i>
        </span>
    </label>

    <input
        type="file"
        id="career-cv"
        name="cv"
        accept=".pdf,.doc,.docx,application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"
        required
    >

</div>

            {{-- SUBMIT --}}

            <button
                type="submit"
                class="career-modal-submit"
            >
                Apply Now
            </button>

        </form>
<div id="careerSuccessMessage" class="career-success-message">
    <div class="career-success-icon">✓</div>

    <h3>Application Submitted!</h3>

    <p>
        Thank you for applying. Our team will review your application
        and get back to you soon.
    </p>

    <button type="button" onclick="closeCareerSuccess()">
        Done
    </button>
</div>
    </div>

</div>


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

.career-modal-overlay {
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

.career-modal-box {
    position: relative;

    width: 100%;

    max-width: 500px;

    background: #ffffff;

    border-radius: 16px;

    overflow: hidden;

    box-shadow:
        0 25px 70px rgba(0, 0, 0, 0.30);

    z-index: 1000000000;
}


/* =========================================================
   CLOSE BUTTON
========================================================= */

.career-modal-close {
    position: absolute;

    top: 12px;
    right: 12px;

    width: 30px;
    height: 30px;

    border: none;

    border-radius: 50%;

    background: #ffffff;

    color: #111111;

    font-size: 22px;

    line-height: 30px;

    padding: 0;

    text-align: center;

    cursor: pointer;

    z-index: 20;
}


/* =========================================================
   LOGO
========================================================= */

.career-modal-logo {
    width: 100%;

    padding: 25px 25px 5px;

    display: flex;

    justify-content: center;

    align-items: center;
}


.career-modal-logo img {
    display: block;

    width: auto;

    max-width: 100%;

    max-height: 90px;

    object-fit: contain;
}


/* =========================================================
   HEADING
========================================================= */

.career-modal-heading {
    text-align: center;

    padding: 5px 25px 15px;
}


.career-modal-heading h2 {
    margin: 0;

    color: #090909;

    font-size: 25px;

    line-height: 1.2;

    font-weight: 700;
}


.career-modal-heading h2 span {

    color: #010465;
font-style:italic;
    font-size: 25px;

    line-height: 1.4;

    font-weight: 700;
}


/* =========================================================
   FORM
========================================================= */

.career-modal-form {
    padding: 5px 25px 25px;
}


/* =========================================================
   FORM FIELD
========================================================= */

.career-form-field {
    margin-bottom: 13px;
}


.career-form-field input[type="text"],
.career-form-field input[type="email"],
.career-form-field input[type="tel"] {
    width: 100%;

    height: 52px;

    box-sizing: border-box;

    border: 1px solid #0b0b0b;

    border-radius: 9px;

    background: #ffffff;

    padding: 0 15px;

    font-family: inherit;

    font-size: 15px;

    color: #222222;

    outline: none;
}


.career-form-field input::placeholder {
    color: #a8b2c7;

    opacity: 1;
}


.career-form-field input:focus {
    border-color: #2E3192;

    box-shadow: 0 0 0 2px rgba(46, 49, 146, 0.08);
}


/* =========================================================
   UPLOAD FIELD
========================================================= */

.career-upload-field {
    position: relative;
}


.career-upload-field label {
    width: 100%;

    height: 72px;

    box-sizing: border-box;

    border: 1px dashed #080808;

    border-radius: 9px;

    background: #ffffff;

    padding: 0 15px;

    display: flex;

    align-items: center;

    justify-content: space-between;

    cursor: pointer;

    font-size: 15px;

    color: #a8b2c7;
}


.career-upload-field label:hover {
    border-color: #2E3192;
}


.career-upload-icon {
    color: #2E3192;

    font-size: 17px;
}

.career-upload-field {
    position: relative;
}

.career-upload-field input[type="file"] {
    position: absolute;
    left: 0;
    top: 0;

    width: 100%;
    height: 72px;

    opacity: 0;

    cursor: pointer;
    z-index: 5;
}

.career-upload-field label {
    position: relative;
    z-index: 1;

    width: 100%;
    height: 72px;
    box-sizing: border-box;

    border: 1px dashed #080808;
    border-radius: 9px;

    background: #ffffff;

    padding: 0 15px;

    display: flex;
    align-items: center;
    justify-content: space-between;

    cursor: pointer;

    font-size: 15px;
    color: #a8b2c7;
}

/* =========================================================
   SUBMIT BUTTON
========================================================= */

.career-modal-submit {
    width: 100%;

    height: 52px;

    margin-top: 3px;

    border: none;

    border-radius: 20px;

    background: #0b0b0b;

    color: #ffffff;

    font-family: inherit;

    font-size: 16px;

    font-weight: 600;

    cursor: pointer;

    transition: background 0.2s ease;
}


.career-modal-submit:hover {
    background: #25277d;
}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 600px) {

    .career-modal-overlay {
        padding: 12px;
    }


    .career-modal-box {
        max-width: 100%;

        border-radius: 14px;
    }


    .career-modal-logo {
        padding: 20px 20px 3px;
    }


    .career-modal-logo img {
        max-width: 150px;

        max-height: 55px;
    }


    .career-modal-heading {
        padding: 3px 20px 12px;
    }


    .career-modal-heading h2 {
        font-size: 25px;
    }


    .career-modal-heading p {
        font-size: 15px;
    }


    .career-modal-form {
        padding: 5px 18px 20px;
    }


    .career-form-field {
        margin-bottom: 10px;
    }


    .career-form-field input[type="text"],
    .career-form-field input[type="email"],
    .career-form-field input[type="tel"],
    .career-upload-field label {
        height: 50px;
    }


    .career-modal-submit {
        height: 50px;
    }

}
/* =========================================================
   CAREER SUCCESS MESSAGE
========================================================= */

.career-success-message {
    display: none;
    text-align: center;
    padding: 35px 25px 30px;
    background: #ffffff;
}

.career-success-icon {
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
    font-weight: 700;
}

.career-success-message h3 {
    margin: 0 0 8px;

    color: #111111;

    font-size: 24px;
    font-weight: 700;
}

.career-success-message p {
    margin: 0 auto 22px;

    max-width: 360px;

    color: #666666;

    font-size: 15px;
    line-height: 1.6;
}

.career-success-message button {
    border: none;

    background: #0b0b0b;
    color: #ffffff;

    padding: 12px 30px;

    border-radius: 20px;

    font-size: 15px;
    font-weight: 600;

    cursor: pointer;
}

.career-success-message button:hover {
    background: #25277d;
}

</style>


<script>

document.addEventListener('alpine:init', () => {

    Alpine.store('careerModal', {
        open: false
    });

});


document.addEventListener('DOMContentLoaded', function () {


    /* =========================================================
       OPEN CAREER POPUP
    ========================================================= */

    document.addEventListener('click', function (e) {

        const button = e.target.closest('[data-career-apply]');

        if (!button) return;

        e.preventDefault();
        e.stopPropagation();

        if (window.Alpine) {

            Alpine.store('careerModal').open = true;

        }

    });


    /* =========================================================
       SHOW SELECTED CV FILENAME
    ========================================================= */

    const cvInput = document.getElementById('career-cv');

    if (cvInput) {

        cvInput.addEventListener('change', function () {

            const text = document.querySelector(
                '.career-upload-text'
            );

            if (this.files.length > 0) {

                text.textContent = this.files[0].name;

            } else {

                text.textContent = 'Upload CV';

            }

        });

    }


    /* =========================================================
       CAREER FORM SUBMISSION
    ========================================================= */

    const careerForm = document.getElementById(
        'careerApplicationForm'
    );

    if (careerForm) {

        careerForm.addEventListener('submit', async function (e) {

            e.preventDefault();


            const submitButton =
                careerForm.querySelector(
                    '.career-modal-submit'
                );


            const formData = new FormData(careerForm);


            /* Disable button */

            submitButton.disabled = true;

            submitButton.textContent = 'Submitting...';


            try {

                const response = await fetch(
                    careerForm.action,
                    {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'Accept': 'application/json'
                        }
                    }
                );


                const result = await response.json();


                /* =================================================
                   SUCCESS
                ================================================= */

                if (result.success) {

                    /* Hide form */

                    careerForm.style.display = 'none';


                    /* Show success message */

                    const successMessage =
                        document.getElementById(
                            'careerSuccessMessage'
                        );

                    if (successMessage) {

                        successMessage.style.display = 'block';

                    }


                    /* Reset form */

                    careerForm.reset();


                    /* Reset CV text */

                    const uploadText =
                        document.querySelector(
                            '.career-upload-text'
                        );

                    if (uploadText) {

                        uploadText.textContent = 'Upload CV';

                    }

                }


                /* =================================================
                   ERROR
                ================================================= */

                else {

                    alert(
                        result.message ||
                        'Something went wrong. Please try again.'
                    );

                }


            } catch (error) {

                console.error(
                    'Career form error:',
                    error
                );

                alert(
                    'Something went wrong while submitting your application. Please try again.'
                );

            }


            /* Enable button */

            submitButton.disabled = false;

            submitButton.textContent = 'Apply Now';

        });

    }

});


/* =========================================================
   CLOSE SUCCESS MESSAGE
========================================================= */

function closeCareerSuccess() {

    /* Close popup */

    if (window.Alpine) {

        Alpine.store('careerModal').open = false;

    }


    /* Show form again */

    const careerForm =
        document.getElementById(
            'careerApplicationForm'
        );

    if (careerForm) {

        careerForm.style.display = 'block';

    }


    /* Hide success message */

    const successMessage =
        document.getElementById(
            'careerSuccessMessage'
        );

    if (successMessage) {

        successMessage.style.display = 'none';

    }

}

</script>