@extends('profile.master_layout')
@section('title')
    <title>{{ __('admin.Campaign') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
@endsection
@section('frontend-content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <!-- Form Steps / Progress Bar -->
                <div class="container">
                    <ul class="form-stepper form-stepper-horizontal">
                        <!-- Step 1 -->
                        <li class="form-stepper-active text-center form-stepper-list" step="1">
                            <a class="mx-2">
                                <span class="form-stepper-circle">
                                    <span>1</span>
                                </span>
                                <div class="label">Basic</div>
                            </a>
                        </li>
                        <!-- Step 2 -->
                        <li class="form-stepper-unfinished text-center form-stepper-list" step="2">
                            <a class="mx-2">
                                <span class="form-stepper-circle text-muted">
                                    <span>2</span>
                                </span>
                                <div class="label text-muted">Content</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="container">
                    <form id="campaignForm" method="POST" action="{{ route('user.campaign.submit') }}"
                        enctype="multipart/form-data">
                        @csrf
                        {{-- Section 1 Campaign Basic  --}}
                        <div id="step-1" class="campaign-main form-step">
                            <div class="required mg-top-20">
                                <h2>{{ __('admin.Platform') }}</h2> <span style="color: red;">*</span>
                            </div>
                            <p>{{ __('admin.Platform means you want to promote this brand') }}
                            </p>
                            <div class="platform-btn">
                                <div class="campaign-btn">
                                    <input type="radio" id='facebook' value="facebook" name="platforms"
                                        class="radio-custom" required />

                                    <label for='facebook' class="radio-custom-label">{{ __('admin.Facebook') }}</label>
                                    <span><img src="{{ asset('/uploads/campaign-img/fb.svg') }}" alt="logo" />
                                    </span>
                                </div>
                                <div class="campaign-btn">
                                    <input type="radio" id='instagram' value="instagram" name="platforms"
                                        class="radio-custom" />

                                    <label for='instagram' class="radio-custom-label">{{ __('admin.Instagram') }}</label>
                                    <span>
                                        <img src="{{ asset('/uploads/campaign-img/insta.svg') }}" alt="logo" />
                                    </span>
                                </div>
                                <div class="campaign-btn">
                                    <input type="radio" id='youtube' value="youtube" name="platforms"
                                        class="radio-custom" />

                                    <label for='youtube' class="radio-custom-label">{{ __('admin.Youtube') }}</label>
                                    <span>
                                        <img src="{{ asset('/uploads/campaign-img/youtube.svg') }}" alt="logo" />
                                    </span>
                                </div>
                                <div class="campaign-btn">
                                    <input type="radio" id='snapchat' value="snapchat" name="platforms"
                                        class="radio-custom" />

                                    <label for='snapchat' class="radio-custom-label">{{ __('admin.Snapchat') }}</label>
                                    <img src="{{ asset('/uploads/campaign-img/snapchat.svg') }}" alt="logo" />
                                </div>
                                <div class="campaign-btn">
                                    <input type="radio" id='tiktok' value="tiktok" name="platforms"
                                        class="radio-custom" />

                                    <label for='tiktok' class="radio-custom-label">{{ __('admin.Tiktok') }}</label>
                                    <img src="{{ asset('/uploads/campaign-img/tiktok.svg') }}" alt="logo" />
                                </div>
                                <div class="campaign-btn">
                                    <input type="radio" id='user-Generated-Content' value="user-Generated-Content"
                                        name="platforms" class="radio-custom" />

                                    <label for='user-Generated-Content'
                                        class="radio-custom-label">{{ __('admin.User Generated Content (UGC)') }}</label>
                                </div>
                            </div>
                            <div class="dropdown-social mg-top-20">
                                <div class="dropdown" data-section="step-1" data-field="category">
                                    <h2>{{ __('admin.Category') }}</h2>
                                    <div class="dropdown-button" onclick="toggleDropdown(event)">
                                        <div class="selected-items"></div>
                                        <span class="dropdown-button-text">{{ __('admin.Select or Add Your Own') }}</span>
                                    </div>
                                    <div class="dropdown-content">
                                        <input type="text" class="hashtag-input"
                                            placeholder="{{ __('admin.Type to add your own') }}"
                                            onkeydown="addCustomHashtag(event)" />
                                        <a data-value="Fashion"
                                            onclick="toggleMultipleSelection(event)">{{ __('admin.Fashion') }}</a>
                                        <a data-value="Family & Children"
                                            onclick="toggleMultipleSelection(event)">{{ __('admin.Family & Children') }}</a>
                                        <a data-value="Travel and tourism"
                                            onclick="toggleMultipleSelection(event)">{{ __('Travel and tourism') }}</a>
                                        <a data-value="Weight loss"
                                            onclick="toggleMultipleSelection(event)">{{ __('admin.Weight loss') }}</a>
                                        <a data-value="Health and beauty"
                                            onclick="toggleMultipleSelection(event)">{{ __('admin.Health and beauty') }}</a>
                                    </div>
                                    <input type="hidden" name="category" id="selected-category" />
                                </div>
                                <div class="dropdown" data-section="step-1" data-field="country">
                                    <h2>{{ __('admin.Country') }}</h2>
                                    <div class="dropdown-button" onclick="toggleDropdown(event)">
                                        <div class="selected-items"></div>
                                        <span class="dropdown-button-text">{{ __('admin.Select or Add Your Own') }}</span>
                                    </div>
                                    <div class="dropdown-content">
                                        <input type="text" class="hashtag-input"
                                            placeholder="{{ __('admin.Type to add your own') }}"
                                            onkeydown="addCustomHashtag(event)" />
                                        <a data-value="USA"
                                            onclick="toggleMultipleSelection(event)">{{ __('admin.USA') }}</a>
                                        <a data-value="Pakistan"
                                            onclick="toggleMultipleSelection(event)">{{ __('admin.Pakistan') }}</a>
                                        <a data-value="Canada"
                                            onclick="toggleMultipleSelection(event)">{{ __('admin.Canada') }}</a>
                                        <a data-value="Chinese"
                                            onclick="toggleMultipleSelection(event)">{{ __('admin.Denmark') }}</a>
                                    </div>
                                    <input type="hidden" name="country" id="selected-country" />
                                </div>

                            </div>
                            <h2 class="">{{ __('admin.Required number of Influencer') }}</h2>
                            <div class="stepper mg-top-20">
                                <div class="stepper-btn" id="decrement">-</div>
                                <input type="text" class="stepper-input" name="no_of_influencer" id="stepper-value"
                                    value="1" readonly>
                                <div class="stepper-btn" id="increment">+</div>
                            </div>
                            <div class="navigation-btns">
                                <div class="navigation-btns-item previous">{{ __('admin.Previous') }}</div>
                                <div step_number="2" class="navigation-btns-item active">
                                    <span>{{ __('admin.Next') }}</span><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M14.6922 6.69212L20 11.9999L14.6922 17.3076L13.9845 16.5999L18.0845 12.4999L4 12.4999V11.4999L18.0845 11.4999L13.9845 7.39987L14.6922 6.69212Z"
                                            fill="black" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        {{-- Section 1 Campaign Basic Ends  --}}
                        {{-- Section 2 Campaign Content  --}}
                        <div id="step-2" class="compaign-container form-step d-none">
                            <div class="dropdown-social mg-top-20">
                                <div class="dropdown" data-section="step-2" data-field="range">
                                    <h2>{{ __('admin.Follower range') }}</h2>
                                    <div class="dropdown-button" onclick="toggleDropdown(event)">
                                        <div class="selected-items"></div>
                                        <span class="dropdown-button-text">{{ __('admin.Select or Add Your Own') }}</span>
                                    </div>
                                    <div class="dropdown-content">
                                        <input type="text" class="hashtag-input"
                                            placeholder="{{ __('admin.Type to add your own') }}"
                                            onkeydown="addCustomHashtag(event)" />
                                        <a data-value="1k-10k" onclick="toggleMultipleSelection(event)">1k-10k</a>
                                        <a data-value="10k-20k" onclick="toggleMultipleSelection(event)">10k-20k</a>
                                        <a data-value="20k-30k" onclick="toggleMultipleSelection(event)">20k-30k</a> <a
                                            data-value="30k-40k" onclick="toggleMultipleSelection(event)">30k-40k</a> <a
                                            data-value="40k-50k" onclick="toggleMultipleSelection(event)">40k-50k</a> <a
                                            data-value="60k-70k" onclick="toggleMultipleSelection(event)">60k-70k</a>
                                    </div>
                                    <input type="hidden" name="range" id="selected-range" />
                                </div>
                                <div class="dropdown" data-section="step-2" data-field="language">
                                    <h2>{{ __('admin.Language') }}</h2>
                                    <div class="dropdown-button" onclick="toggleDropdown(event)">
                                        <div class="selected-items"></div>
                                        <span class="dropdown-button-text">{{ __('admin.Select or Add Your Own') }}</span>
                                    </div>
                                    <div class="dropdown-content">
                                        <input type="text" class="hashtag-input"
                                            placeholder="{{ __('admin.Type to add your own') }}"
                                            onkeydown="addCustomHashtag(event)" />
                                        <a data-value="English"
                                            onclick="toggleMultipleSelection(event)">{{ __('admin.English') }}</a>
                                        <a data-value="Urdu"
                                            onclick="toggleMultipleSelection(event)">{{ __('admin.Urdu') }}</a>
                                        <a data-value="Arabic"
                                            onclick="toggleMultipleSelection(event)">{{ __('admin.Arabic') }}</a>
                                        <a data-value="Chinese"
                                            onclick="toggleMultipleSelection(event)">{{ __('admin.Chinese') }}</a>
                                    </div>
                                    <input type="hidden" name="language" id="selected-language" />
                                </div>
                            </div>

                            <h2>{{ __('admin.Influencer Gender') }}</h2>
                            <div class="btns-group-radio">
                                <div class="campaign-btn">
                                    <input type="radio" id='male' value="male" name="gender"
                                        class="radio-custom" checked />

                                    <label for='male' class="radio-custom-label">{{ __('admin.Male') }}</label>
                                </div>
                                <div class="campaign-btn">
                                    <input type="radio" id='female' value="female" name="gender"
                                        class="radio-custom" />

                                    <label for='female' class="radio-custom-label">{{ __('admin.Female') }}</label>
                                </div>
                                <div class="campaign-btn">
                                    <input type="radio" id='other' value="other" name="gender"
                                        class="radio-custom" />

                                    <label for='other' class="radio-custom-label">{{ __('admin.Other') }}</label>
                                </div>
                            </div>
                            <h2 class="mg-top-20">{{ __('admin.Campaign Thumbail') }}</h2>
                            <p>{{ __('admin.Upload the cmpaign thumbnail') }}
                            </p>
                            <div class="campaign-thumbnail">
                                <img src="{{ asset('/uploads/campaign-img/cloud-add.svg') }}" alt="logo"/>
                                <h1>{{ __('admin.Choose a file or drag & drop it here') }}</h1>
                                <p>{{ __('admin.JPEG, PNG, PDG, and MP4 formats, up to 50MB') }}</p>
                                <div class="file-input-wrapper">
                                    <label class="browse-button" for="image-input">{{ __('admin.Browse File') }}</label>
                                    <input type="file" name="file" id="image-input" class="file-input"
                                        accept="image/*">
                                    <p id="file-name" style="color: #555; font-size: 12px"></p>
                                </div>
                            </div>
                            <div class="navigation-btns">
                                <div step_number="1" class="navigation-btns-item"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="29" height="24" viewBox="0 0 29 24" fill="none">
                                        <path
                                            d="M11.0001 17.3079L4.85156 12.0001L11.0001 6.69238L11.82 7.40013L7.07051 11.5001H23.3862V12.5001H7.07051L11.82 16.6001L11.0001 17.3079Z"
                                            fill="black" />
                                    </svg><span>{{ __('admin.Previous') }}</span></div>
                                <button type="submit"
                                    class="navigation-btns-item active"><span>{{ __('admin.Submit') }}</span></button>
                            </div>
                        </div>
                        {{-- Section 2 Campaign Content  Ends --}}
                    </form>
                </div>
            </div>
        </section>
    </div>
    <script>
        const navigateToFormStep = (stepNumber) => {
            document.querySelectorAll(".form-step").forEach((formStepElement) => {
                formStepElement.classList.add("d-none");
            });
            document
                .querySelector("#step-" + stepNumber)
                .classList.remove("d-none");

            document.querySelectorAll(".form-stepper-list").forEach((formStepHeader) => {
                formStepHeader.classList.add("form-stepper-unfinished");
                formStepHeader.classList.remove("form-stepper-active", "form-stepper-completed");
            });

            const formStepCircle = document.querySelector('li[step="' + stepNumber + '"]');
            formStepCircle.classList.remove("form-stepper-unfinished", "form-stepper-completed");
            formStepCircle.classList.add("form-stepper-active");

            for (let index = 0; index < stepNumber; index++) {
                const completedStepCircle = document.querySelector('li[step="' + index + '"]');
                if (completedStepCircle) {
                    completedStepCircle.classList.remove("form-stepper-unfinished", "form-stepper-active");
                    completedStepCircle.classList.add("form-stepper-completed");
                }
            }
        };

        const validateStepFields = (stepNumber) => {
            const currentStep = document.querySelector("#step-" + stepNumber);
            let isValid = true;

            // Validate radio button groups
            const requiredRadios = currentStep.querySelectorAll('input[type="radio"][required]');
            requiredRadios.forEach((radio) => {
                const radioGroup = currentStep.querySelectorAll(`input[name="${radio.name}"]`);
                const isAnyChecked = Array.from(radioGroup).some((r) => r.checked);

                if (!isAnyChecked) {
                    isValid = false;
                    // Highlight the radio button group container with an error class
                    radio.closest(".platform-btn").classList.add("error");
                } else {
                    // Remove the error class if valid
                    radio.closest(".platform-btn").classList.remove("error");
                }
            });

            return isValid;
        };

        document.querySelectorAll(".navigation-btns-item").forEach((formNavigationBtn) => {
            formNavigationBtn.addEventListener("click", (e) => {
                const stepNumber = parseInt(formNavigationBtn.getAttribute("step_number"));
                const currentStep = stepNumber - 1;

                // Validate fields only for steps > 1
                if (stepNumber > 1 && !validateStepFields(currentStep)) {
                    alert("Please select a platform before proceeding.");
                    return;
                }

                navigateToFormStep(stepNumber);
            });
        });

        const platformImages = {
            facebook: "facebook.png",
            instagram: "insta.svg",
            youtube: "youtube.svg",
            snapchat: "snapchat.svg",
            tiktok: "tiktok.svg",
            "user-Generated-Content": "user.svg",
        };

        document.querySelectorAll('input[name="platforms"]').forEach((radio) => {
            radio.addEventListener("change", (e) => {
                const selectedPlatform = e.target.value;

                // Get the correct image file based on the platform
                const platformImage = platformImages[selectedPlatform];

                // Toggle platform-specific content
                document.querySelectorAll(".platforms-content").forEach((content) => {
                    content.classList.add("d-none");
                });
                const platformContent = document.querySelector(`#platform-${selectedPlatform}`);
                if (platformContent) {
                    platformContent.classList.remove("d-none");
                }

                // Update the platform image
                const thirdSectionPlatform = document.querySelector("#third-section-platform");
                if (platformImage) {
                    const platformImageElement = `
                <div class="platforms-item">
                    
                    <img src="{{ asset('/uploads/campaign-img/${platformImage}') }}" alt="${selectedPlatform} Logo" class="logo">
                    <h1>${selectedPlatform.charAt(0).toUpperCase() + selectedPlatform.slice(1)}</h1>
                </div>
            `;
                    thirdSectionPlatform.querySelector(".platforms-item")
                        ?.remove(); // Remove existing image
                    thirdSectionPlatform.insertAdjacentHTML("afterbegin", platformImageElement);
                }
            });
        });
    </script>
    <script>
        // Display the selected file name
        document.getElementById("image-input").addEventListener("change", function() {
            const fileName = this.files[0] ? this.files[0].name : "No file selected";
            document.getElementById("file-name").innerText = `Selected File: ${fileName}`;
        });
    </script>
    <script>
        const countDisplay = document.getElementById('count');
        const decrementButton = document.getElementById('decrement');
        const incrementButton = document.getElementById('increment');

        let count = 1;

        decrementButton.addEventListener('click', () => {
            if (count > 0) {
                count--;
                countDisplay.textContent = count;
            }
        });

        incrementButton.addEventListener('click', () => {
            count++;
            countDisplay.textContent = count;
        });
    </script>
    <script src="https://cdn.ckeditor.com/ckeditor5/17.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor.create(document.querySelector('#editor')).catch(error => {
            console.error(error);
        });
    </script>
    <script>
        document.getElementById('campaignForm').addEventListener('submit', function(event) {
            // Process dropdowns across both sections
            document.querySelectorAll('.form-step .dropdown').forEach((dropdown) => {
                const field = dropdown.getAttribute('data-field'); // Field name
                const section = dropdown.getAttribute('data-section'); // Section identifier
                const selectedItems = dropdown.querySelectorAll('.selected-items .selected-item');
                const selectedValues = Array.from(selectedItems).map(item => item.getAttribute(
                    'data-value'));

                // Find and update the hidden input within the same dropdown
                dropdown.querySelector(`input[name="${field}"]`).value = selectedValues.join(',');

                // Debugging (optional): Log section and selected values
                console.log(`Section: ${section}, Field: ${field}, Selected: ${selectedValues.join(',')}`);
            });
        });

        // Dropdown functions
        function toggleDropdown(event) {
            const button = event.target.closest('.dropdown-button');
            const dropdownContent = button.nextElementSibling;

            // Close other dropdowns
            document.querySelectorAll('.dropdown-content').forEach((dropdown) => {
                if (dropdown !== dropdownContent) dropdown.style.display = 'none';
            });

            // Toggle visibility
            dropdownContent.style.display = dropdownContent.style.display === 'block' ? 'none' : 'block';
        }

        function toggleMultipleSelection(event) {
            event.preventDefault();
            const option = event.target;
            const dropdownContent = option.closest('.dropdown-content');
            const dropdownButton = dropdownContent.previousElementSibling;
            const selectedItemsContainer = dropdownButton.querySelector('.selected-items');
            const selectedValue = option.getAttribute('data-value');

            // Check if value is already selected
            const existingItem = selectedItemsContainer.querySelector(`[data-value="${selectedValue}"]`);
            if (existingItem) {
                existingItem.remove(); // Remove selected item
                option.classList.remove('disabled');
            } else {
                createSelectedItem(selectedItemsContainer, selectedValue);
                option.classList.add('disabled');
            }

            updatePlaceholderText(dropdownButton, selectedItemsContainer);
        }

        function addCustomHashtag(event) {
            if (event.key === 'Enter' && event.target.value.trim() !== '') {
                const input = event.target;
                const customValue = input.value.trim();
                const dropdownContent = input.closest('.dropdown-content');
                const dropdownButton = dropdownContent.previousElementSibling;
                const selectedItemsContainer = dropdownButton.querySelector('.selected-items');

                // Avoid duplicates
                if (!selectedItemsContainer.querySelector(`[data-value="${customValue}"]`)) {
                    createSelectedItem(selectedItemsContainer, customValue);
                }

                input.value = '';
                updatePlaceholderText(dropdownButton, selectedItemsContainer);
            }
        }

        function createSelectedItem(container, value) {
            const selectedItem = document.createElement('span');
            selectedItem.classList.add('selected-item');
            selectedItem.setAttribute('data-value', value);
            selectedItem.textContent = value;

            // Add remove button
            const removeButton = document.createElement('span');
            removeButton.classList.add('remove');
            removeButton.textContent = '×';
            removeButton.onclick = () => {
                selectedItem.remove();
                const options = document.querySelectorAll('.dropdown-content a');
                options.forEach((option) => {
                    if (option.getAttribute('data-value') === value) {
                        option.classList.remove('disabled');
                    }
                });
            };

            selectedItem.appendChild(removeButton);
            container.appendChild(selectedItem);
        }

        function updatePlaceholderText(dropdownButton, selectedItemsContainer) {
            const buttonText = dropdownButton.querySelector('.dropdown-button-text');
            buttonText.style.display = selectedItemsContainer.children.length > 0 ? 'none' : 'block';
        }

        // Close dropdown when clicking outside
        window.onclick = function(event) {
            if (!event.target.closest('.dropdown')) {
                document.querySelectorAll('.dropdown-content').forEach((dropdown) => {
                    dropdown.style.display = 'none';
                });
            }
        };
    </script>
    <script>
        const decrementBtn = document.getElementById('decrement');
        const incrementBtn = document.getElementById('increment');
        const stepperValue = document.getElementById('stepper-value');

        decrementBtn.addEventListener('click', () => {
            let value = parseInt(stepperValue.value, 10);
            if (value > 0) {
                stepperValue.value = value - 1;
            }
        });

        incrementBtn.addEventListener('click', () => {
            let value = parseInt(stepperValue.value, 10);
            stepperValue.value = value + 1;
        });
    </script>
    <style>
        .custom-font {
            margin: 0;
            padding: 20px 0px;
            font-family: "Poppins", serif;
            padding-bottom: 30px;
            min-height: 100vh;
            background: linear-gradient(0deg, #f4f6f9 0%, #f4f6f9 100%), #fff;
        }

        .hashtag-input {
            font-family: 'Poppins';
            padding: 8px !important;
        }

        .campaign-main {
            border-radius: 12px;
            background: #FFF;
            padding: 24px 20px;
        }

        .compaign-container {
            font-family: "Poppins", serif;
            border-radius: 12px;
            background: #FFF;
            padding: 24px 20px;
        }

        .required {
            display: flex;
            gap: 2px;
            justify-content: start;
        }

        .step {
            display: none;
        }

        .step.active {
            display: block;
        }

        .campaign-main h1 {
            color: #21272A;
            font-size: 18px;
            font-style: normal;
            font-weight: 500;
            line-height: 20px;
            margin: 0;
        }

        .campaign-main h2 {
            color: #000;
            font-size: 16px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            margin: 0;
        }

        .campaign-main p {
            color: #747474;
            font-size: 14px;
            font-style: normal;
            font-weight: 300;
            line-height: normal;
            margin: 5px 0 0 0;
        }

        .campaign-main span {
            color: #000;
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
        }

        .campaign-title input {
            border-radius: 6.694px !important;
            border: 0.837px solid #CFCFCF !important;
            background: #FFF;
            color: #000 !important;
            font-size: 14.5px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            padding: 11px 12px !important;
            margin-top: 16px;
        }

        .campaign-btn {
            border-radius: 6.694px;
            border: 0.837px solid #CFCFCF;
            background: #FFF;
            padding: 11px 12px;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            width: 270px;
        }

        .campaign-btn:hover {
            background: #F1F1F1;
        }

        .campaign-btn label {
            margin: 0px;
        }

        .campaign-btn.custom-width {
            width: 195px;
            padding: 11px 5px;
            font-size: 14px;
        }

        .btns-group-radio {
            display: flex;
            gap: 18px;
            padding: 0;
        }

        .dropdown-budget select {
            width: 43px;
            margin: 0 auto;
            text-align: center;
        }

        .platforms .btns-group-radio input {
            border-radius: 6.694px;
            border: 0.837px solid #CFCFCF;
            background: #FFF;
            padding: 8px 12px;
            display: flex;
            justify-content: start;
            align-items: center;
            gap: 10px;
            width: 178px;
        }

        .btns-group-radio div {
            display: flex;
            justify-content: start;
            align-items: center;
            gap: 10px;
        }

        .platform-btn {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 12px;
            padding: 24px 0 0 0;
            width: 50%;
        }

        /* campaign page 2 styling  */
        .logo {
            width: 48px;
            height: 48px;
            border-radius: 50%;
        }

        .platforms-item {
            display: flex;
            gap: 8px;
            align-items: center;
            margin: 30px 0 16px 0;
        }

        .platforms .campaign-btn {
            color: #747474;
            font-size: 14px;
            font-weight: 500;
            width: 148px;
            padding: 8px;
        }

        .compaign-container h1 {
            color: #21272A;
            font-size: 18px;
            font-style: normal;
            font-weight: 500;
            line-height: 20px;
            margin: 0
        }

        .compaign-container h2 {
            color: #000;
            font-size: 16px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            margin: 20px 0 5px 0;
        }

        select#follower-rang {
            border-radius: 6.694px;
            border: 0.837px solid #CFCFCF !important;
            !i;
            !;
            background: #FFF;
            padding: 11px 12px;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            width: 270px;
        }

        select#follower-rang:focus {
            outline: none !important;
        }

        .input-container.currency {
            width: 270px;
        }

        .input-container.currency .dropdown-budget {
            height: 50px;
            padding: 0 4px;
        }

        .input-container.currency select {
            width: 60px;
            text-align: center;
        }

        .compaign-container p {
            color: #747474;
            font-size: 14px;
            font-style: normal;
            font-weight: 300;
            line-height: normal;
            margin: 0 0 16px 0;
        }

        /* campaign page 2 styling end  */
        /* radio button  */
        .checkbox-custom,
        .radio-custom {
            opacity: 0;
            position: absolute;
        }

        .checkbox-custom,
        .checkbox-custom-label,
        .radio-custom,
        .radio-custom-label {
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 14px;
        }

        .checkbox-custom-label,
        .radio-custom-label {
            position: relative;
        }

        .checkbox-custom+.checkbox-custom-label:before,
        .radio-custom+.radio-custom-label:before {
            content: '';
            background: #fff;
            display: inline-block;
            vertical-align: middle;
            margin-right: 10px;
            text-align: center;
        }


        .checkbox-custom+.checkbox-custom-label:before,
        .radio-custom+.radio-custom-label:before {
            border-radius: 50%;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2px;
            font-size: 8px;
            height: 12px;
            width: 12px;
            outline: none;
            background: #DEDDF7;
            border: none;
        }

        .checkbox-custom:checked+.checkbox-custom-label:before,
        .radio-custom:checked+.radio-custom-label:before {
            content: "\f00c";
            font-family: 'FontAwesome';
            color: #fff;
            background: #5856D6;
            text-align: center;
        }

        .radio-custom:focus+.radio-custom-label {
            outline: none;
        }

        /* radio button ends  */

        .campaign-thumbnail {
            border-radius: 12px;
            border: 1px solid #D9D9D9;
            background: #FFF;
            display: flex;
            width: 420px;
            padding: 24px 23px;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 10px;
            flex-shrink: 0;
            margin-top: 20px;
        }

        .campaign-thumbnail h1 {
            color: #292D32;
            text-align: center;
            font-size: 20px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
            margin: 0;
        }

        .campaign-thumbnail p {
            color: #A9ACB4;
            text-align: center;
            font-size: 12px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
            margin: 0;
        }

        .file-input-wrapper {
            display: inline-block;
            position: relative;
            text-align: center;
        }

        .file-input {
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0;
            cursor: pointer;
        }

        .browse-button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: #6F6F6F;
            border-radius: 12px;
            border: 3.115px solid #CBD0DC;
            background: #FFF;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .browse-button:hover {
            background-color: #e8e8e8;
            border-color: #b1b1b1;
        }

        .stepper {
            display: flex;
            align-items: center;
            overflow: hidden;
            background: #fff;
            width: 143px;
            border-radius: 10px;
            border: 1px solid #D9D9D9;
            background: #FFF;
        }

        .stepper-btn {
            flex: 1;
            border: none;
            color: #5856D6;
            font-size: 1.5rem;
            cursor: pointer;
            text-align: center;
            transition: background-color 0.3s ease;
            padding: 8px 0;
        }

        .stepper-btn:hover {
            background-color: #e0e0e0;
        }

        .stepper-input {
            flex: 1;
            border: 1px solid #CFCFCF;
            border-bottom: none !important;
            border-top: none !important;
            text-align: center;
            font-size: 16px;
            font-weight: 500;
            outline: none;
            background-color: #fff;
            color: #000;
            padding: 8px 0 !important;
        }

        .input-container {
            display: flex;
            align-items: center;
            border: 0.84px solid #CFCFCF;
            border-radius: 6px;
            overflow: hidden;
            width: 100%;
            margin: 16px 0;
        }

        .input-container .text-input {
            flex: 1;
            border: none;
            padding: 8px 10px;
            outline: none;
            font-size: 14px;
        }

        .text-input:focus {
            outline: none;
        }

        .input-container .dropdown-budget {
            display: flex;
            align-items: center;
            background-color: #f4f4f4;
            border-left: 1px solid #d1d1d1;
            cursor: pointer;
        }

        .input-container .dropdown-budget select {
            border: none;
            background: transparent;
            font-size: 14px;
            appearance: none;
            outline: none;
            cursor: pointer;
        }

        .dropdown-card {
            width: 143px;
        }

        .dropdown-card select {
            width: 200px;
            padding: 10px;
            font-size: 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            color: #555;
            background-color: #fff;
            appearance: none;
            -webkit-appearance: none;
            /* Safari */
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 10 6'%3E%3Cpath d='M0 0h10L5 6z' fill='%23333'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 10px center;
            background-size: 10px 6px;
        }

        .dropdown:focus {
            border-color: #aaa;
            outline: none;
        }

        .navigation-btns {
            display: flex;
            gap: 20px;
            justify-content: flex-end;
            margin-top: 7%;
        }

        .navigation-btns-item {
            color: #000;
            font-size: 14px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
            border-radius: 6.694px;
            border: 0.837px solid #CFCFCF;
            background: #FFF;
            padding: 10px;
            cursor: pointer;
            display: flex;
            gap: 5px;
            align-items: center;
        }

        .navigation-btns-item.active {
            border: 0.837px solid #B2A6CC;
            background: #E0CFFF;
            display: flex;
            gap: 10px;
            align-items: center;
            justify-content: centrer;
            padding: 10px 30px;
        }

        .navigation-btns-item span {
            color: #000;
            font-size: 14px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
        }

        .navigation-btns-item:hover {
            background: #F1EDF8;
            transition: 500ms linear;
        }

        .text-input:focus {
            outline: none;
        }

        /* editor style start  */
        .ck-content .table {
            width: unset;
        }

        h1 {
            color: #fff;
        }

        h1 svg {
            position: relative;
            top: 20px;
            margin-right: 10px;
        }

        .box-con {
            width: 953px;
            margin: 0;
        }

        /* Basic styling */
        .dropdown-social {
            width: 100%;
        }

        .dropdown {
            width: 100%;
            margin-bottom: 21px;
        }

        .dropdown h5 {
            color: #21272a;
            font-family: Poppins;
            font-size: 18px;
            font-style: normal;
            font-weight: 500;
            line-height: 20px;
            margin-left: 6px;
        }

        /* Dropdown button styling */
        .dropdown-button {
            background-color: #fff;
            padding: 13px 10px;
            font-size: 16px;
            width: 90%;
            cursor: pointer;
            text-align: left;
            display: flex;
            flex-wrap: wrap;
            gap: 4px;
            border-radius: 6.5px;
            border: 1px solid #d9d9d9;
            margin-top: 16px;
        }

        .dropdown-button-text {
            display: inline-block;
        }

        /* Ensure the selected items container (multiple select) is visible */
        .selected-items {
            display: flex;
            flex-wrap: wrap;
            gap: 4px;
        }

        .selected-item {
            padding: 4px 14px;
            display: flex;
            align-items: center;
            border-radius: 5px;
            justify-content: space-between;
            background: #efefef;
            width: 140px;
            height: 41px;
            flex-shrink: 0;
            color: #21272a;
            font-family: 'Poppins';
            font-weight: 500;
            order: 2;
        }

        .selected-item .remove {
            cursor: pointer;
            margin-left: 5px;
            font-size: 24px;
            color: #999;
            display: block;
        }

        /* Hidden dropdown content */
        .dropdown-content {
            display: none;
            position: absolute;
            top: 119%;
            left: 0;
            background-color: #fff;
            width: 90%;
            border: 1px solid #ccc;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        div#leftDropdown {
            left: 13px;
        }

        /* Dropdown links */
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            cursor: pointer;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
            text-decoration: none;
        }

        .dropdown-content a.selected {
            background-color: #d3f8e2;
            text-decoration: none;
            color: #4d9d44;
        }

        /* Search Button */
        .search-button {
            width: 40px;
            height: 40px;
            background: #000;
            padding: 8px;
            border-radius: 10px;
        }

        #leftDropdownButton {
            border-right: 1px solid #c8c8c8;
        }

        div#rightDropdown a {
            width: fit-content;
            background-color: #f1f1f1;
            border-radius: 16px;
            padding: 4px 11px;
            font-size: 14px;
            margin-bottom: 9px;
            text-align: left;
            float: left;
            margin-right: 5px;
        }

        div#rightDropdown {
            padding: 10px 10px;
        }

        .ck.ck-reset {
            width: 90%;
        }

        /* editor style end  */

        /* stepper styling  */
        ul.form-stepper {
            counter-reset: section;
            background: #fff;
            border-radius: 10px;
            padding: 20px 20rem;
        }

        ul.form-stepper .form-stepper-circle {
            position: relative;
        }

        ul.form-stepper .form-stepper-circle span {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translateY(-50%) translateX(-50%);
        }

        .form-stepper-horizontal {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        ul.form-stepper>li:not(:last-of-type) {
            margin-bottom: 0.625rem;
            -webkit-transition: margin-bottom 0.4s;
            -o-transition: margin-bottom 0.4s;
            transition: margin-bottom 0.4s;
        }

        .form-stepper-horizontal>li:not(:last-of-type) {
            margin-bottom: 0 !important;
        }

        .form-stepper-horizontal li {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: start;
            -webkit-transition: 0.5s;
            transition: 0.5s;
        }

        .form-stepper-horizontal li:not(:last-child):after {
            position: relative;
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
            height: 2px;
            content: "";
            top: 32%;
        }

        .form-stepper-horizontal li:after {
            background-color: #dee2e6;
        }

        .form-stepper-horizontal li.form-stepper-completed:after {
            background-color: #6036AE;
        }

        .form-stepper-horizontal li:last-child {
            flex: unset;
        }

        ul.form-stepper li a .form-stepper-circle {
            display: inline-block;
            width: 40px;
            height: 40px;
            margin-right: 0;
            line-height: 1.7rem;
            text-align: center;
            background: rgba(0, 0, 0, 0.38);
            border-radius: 50%;
        }

        .form-stepper .form-stepper-active .form-stepper-circle {
            background-color: #4361ee !important;
            color: #fff;
        }

        .form-stepper .form-stepper-active .label {
            color: #4361ee !important;
        }

        .form-stepper .form-stepper-active .form-stepper-circle:hover {
            background-color: #4361ee !important;
            color: #fff !important;
        }

        .form-stepper .form-stepper-unfinished .form-stepper-circle {
            background-color: #f8f7ff;
        }

        .form-stepper .form-stepper-completed .form-stepper-circle {
            background-color: #6036ae !important;
            color: #fff;
        }

        .form-stepper .form-stepper-completed .label {
            color: #6036ae !important;
        }

        .form-stepper .form-stepper-completed .form-stepper-circle:hover {
            background-color: #6036ae !important;
            color: #fff !important;
        }

        .form-stepper .form-stepper-active span.text-muted {
            color: #fff !important;
        }

        .form-stepper .form-stepper-completed span.text-muted {
            color: #fff !important;
        }

        .form-stepper .label {
            font-size: 14px;
            margin-top: 0.5rem;
        }

        .form-stepper a {
            cursor: default;
        }
    </style>
@endsection
