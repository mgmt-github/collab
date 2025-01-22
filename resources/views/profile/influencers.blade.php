            @extends('profile.master_layout')
            @section('title')
                <title>{{ __('admin.influencer') }}</title>
            @endsection
            @section('frontend-content')
                <!-- Main Content -->
                <div class="main-content">
                    <section class="section">
                        <!-- <div class="section-header">
                                                                                                <h1>{{ __('admin.Dashboard') }}</h1>
                                                                                              </div> -->

                        <div class="section-body">
                            <div class="dropdown-container">
                                <!-- Left Dropdown (Single Select) -->
                                <div class="dropdown">
                                    <button id="leftDropdownButton" class="dropdown-button"
                                        onclick="toggleDropdown('leftDropdown')">Platform</button>
                                    <div class="dropdown-content" id="leftDropdown">
                                        @foreach ($platforms as $item)
                                            <a href="#"
                                                onclick="selectSingleOption('leftDropdown', 'leftDropdownButton', this)">{{ $item->name }}</a>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- Right Dropdown (Multiple Select) -->
                                <div class="dropdown">
                                    <button id="rightDropdownButton" class="dropdown-button"
                                        onclick="toggleDropdown('rightDropdown')">
                                        <div class="selected-items"></div>
                                        <span class="dropdown-button-text">Beauty</span>
                                    </button>
                                    <div class="dropdown-content" id="rightDropdown">
                                        @foreach ($categories as $item)
                                            <a href="#" id="option1" data-value="{{ $item->name }}"
                                                onclick="toggleMultipleSelection('rightDropdown', 'rightDropdownButton', this)">{{ $item->name }}</a>
                                        @endforeach


                                    </div>
                                </div>
                                <!-- Search Button -->
                                <button type="button" class="search-button">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.13732 0C9.7402 0.106067 10.3608 0.176778 10.9548 0.32704C12.1606 0.618725 13.2334 1.20209 14.1732 1.98876C15.574 3.1555 16.5315 4.62276 17.0014 6.39054C17.5068 8.28207 17.3826 10.1382 16.6202 11.9325C16.3365 12.5955 15.9464 13.2142 15.5917 13.8771C15.769 14.0627 15.9995 14.2837 16.3187 14.3544C16.4606 14.3809 16.6379 14.3721 16.762 14.3014C16.9659 14.1865 17.161 14.1776 17.3383 14.2837C17.5688 14.4163 17.8082 14.5665 17.9944 14.761C19.874 16.679 21.7358 18.6059 23.6065 20.5328C24.1385 21.0808 24.1296 21.6907 23.5888 22.2211C23.1012 22.6984 22.6135 23.1668 22.117 23.6353C21.6028 24.1303 20.9733 24.1214 20.4768 23.6088C18.5795 21.6554 16.6822 19.7108 14.7938 17.7486C14.6165 17.5718 14.4923 17.3331 14.3859 17.1033C14.2973 16.9265 14.3239 16.7321 14.4391 16.5465C14.5101 16.4316 14.5455 16.2459 14.5012 16.131C14.3948 15.857 14.2352 15.6095 14.1288 15.4062C13.4373 15.7952 12.8167 16.1929 12.1517 16.5023C10.8041 17.1298 9.3767 17.342 7.89609 17.2182C6.14951 17.068 4.59797 16.4404 3.24148 15.362C2.02685 14.3898 1.13139 13.17 0.572838 11.7204C-0.0123125 10.2001 -0.145302 8.62679 0.15614 7.02694C0.439849 5.53317 1.0782 4.19849 2.08005 3.04943C3.16169 1.78546 4.47385 0.883892 6.06085 0.415429C6.66373 0.238651 7.30208 0.159101 7.92269 0.0441946C7.99362 0.0265168 8.07341 0.00883892 8.14434 0C8.47238 0 8.80042 0 9.13732 0ZM8.65856 2.67819C5.37817 2.66935 2.70066 5.34755 2.69179 8.61795C2.69179 11.8884 5.36044 14.5577 8.6497 14.5665C11.9301 14.5754 14.6076 11.906 14.6165 8.62679C14.6253 5.36523 11.9478 2.68703 8.65856 2.67819Z"
                                            fill="white" />
                                    </svg>
                                </button>
                            </div>

                            <div class="content-holder">
                                @foreach ($influencers as $influencer)
                                    <div class="cards">
                                        <a href="{{ route('user.influencer', html_decode($influencer->username)) }}"
                                            class="card-link">

                                            <div class="box" style="background:url(''); no-repeat">
                                                <!-- Multiple Heart Boxes -->

                                                <div class="heart"
                                                    onclick="toggleHeart(this, {{ $influencer->id }}, event)">
                                                    <svg class="light-heart" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M12.2994 20.9191C17.3662 17.4932 22.433 13.6808 22.433 8.614C22.433 7.3169 21.9386 6.02052 20.9491 5.03105C19.9596 4.0423 18.6633 3.5472 17.3662 3.5472C16.0698 3.5472 14.7727 4.0423 13.7839 5.03105L12.2994 6.51562L10.8155 5.03105C9.82604 4.0423 8.52967 3.5472 7.23257 3.5472C5.93619 3.5472 4.63909 4.0423 3.65034 5.03105C2.66087 6.02052 2.16577 7.3169 2.16577 8.614C2.16577 13.6808 7.23257 17.4932 12.2994 20.9191Z"
                                                            stroke="#010101" stroke-width="1.44766" />
                                                    </svg>
                                                    <svg class="dark-heart" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M12.2994 20.4845C17.3662 17.0586 22.433 13.2462 22.433 8.17944C22.433 6.88234 21.9386 5.58596 20.9491 4.59649C19.9596 3.60774 18.6633 3.11264 17.3662 3.11264C16.0698 3.11264 14.7727 3.60774 13.7839 4.59649L12.2994 6.08106L10.8155 4.59649C9.82604 3.60774 8.52967 3.11264 7.23257 3.11264C5.93619 3.11264 4.63909 3.60774 3.65034 4.59649C2.66087 5.58596 2.16577 6.88234 2.16577 8.17944C2.16577 13.2462 7.23257 17.0586 12.2994 20.4845Z"
                                                            fill="#FF0000" />
                                                    </svg>
                                                </div>
                                                <img src="{{ asset($influencer->image) }}" class="img-box" />
                                                <div class="img-title">
                                                    <div>
                                                        <h5>{{ $influencer->address }}</h5>
                                                        <address>{{ $influencer->address }}</address>
                                                    </div>
                                                    <span>Top creator</span>
                                                </div>
                                            </div>
                                            <h4> {{ __('admin.Followers') }}
                                                <strong>{{ $influencer->total_follower }}</strong>
                                            </h4>
                                            <p>{{ $influencer->designation }}</p>
                                        </a>
                                    </div>
                                @endforeach


                            </div>
                        </div>


                    </section>
                </div>

                <style>
                    @import url('https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

                    .content-holder {
                        display: grid;
                        grid-template-columns: repeat(4, 1fr);
                        gap: 20px;
                    }

                    /* Cards Styles */
                    .cards {
                        /* display: flex; */
                        /* flex-wrap: wrap; */
                        color: #222;
                        font-size: 13.898px;
                        font-weight: 400;
                        line-height: normal;
                        font-family: "Poppins", serif;
                    }

                    .cards h4 {
                        color: #5856D6;
                        font-family: "Poppins", serif;
                        font-size: 13px;
                        font-weight: 600;
                        line-height: normal;
                        margin-bottom: 5px;
                        display: flex;
                        justify-content: space-between;
                        align-items: center;
                        width: 94%;
                    }

                    .cards strong {
                        color: #222;
                        font-size: 14.67px;
                        font-style: normal;
                        font-weight: 600;
                        line-height: normal;
                        font-family: "Inter", serif;
                    }

                    .cards .box {
                        position: relative;
                        overflow: hidden;
                        border-radius: 8px;
                        margin-bottom: 7px;
                        background-size: cover !important;
                        width: 100%;
                        height: 309px;
                        cursor: pointer;
                    }

                    .cards .box .img-box {
                        display: block;
                        width: 100%;
                        transition: transform 0.8s ease-in-out;
                    }

                    .cards .box:hover .img-box {
                        transform: scale(1.1);
                    }

                    .img-title {
                        align-items: end;
                        position: absolute;
                        bottom: 0;
                        background: rgba(0, 0, 0, 0.3);
                        background: url({{ asset('uploads/layout-images/overlay.svg') }}) no-repeat;
                        padding: 11px 10px 15px;
                        width: 93%;
                        color: #fff;
                        font-size: 11.5px;
                        font-family: "Inter", serif;
                        background-size: cover;
                        display: flex;
                        justify-content: space-between;
                    }

                    .img-title h5 {
                        font-family: "Inter", serif;
                        font-size: 12.8px;
                        margin-bottom: 4px;
                    }

                    .img-title address {
                        width: 87px;
                        margin-bottom: 0;
                        line-height: 21px;
                        font-weight: 300;
                    }

                    .aside.collapsed2 {
                        margin-left: 122px;
                        margin-right: 61px;
                    }

                    .cards .box span {
                        position: relative;
                        border-radius: 5px;
                        z-index: 99;
                        top: -5px;
                        border: var(--stroke-weight-1, 1px) solid var(--color-white-solid, #FFF);
                        background: var(--color-black-70, rgba(0, 0, 0, 0.70));
                        box-shadow: 0px 2px 10px 0px rgba(120, 120, 170, 0.30);
                        /* height: 23px; */
                        font-size: 13px;
                        font-family: "Inter", serif;
                        padding: 3px 5px 2px;
                    }

                    /* Hide the dark heart by default */
                    .light-heart {
                        display: block;
                    }

                    .dark-heart {
                        display: none;
                    }

                    /* Heart container styling */
                    .heart {
                        cursor: pointer;
                        display: inline-block;
                        width: 24px;
                        height: 24px;
                        float: right;
                        margin: 3px 4px 0 0;
                        position: absolute;
                        right: 2px;
                        z-index: 1;
                        top: 3px;
                    }

                    .cards .box img {
                        width: 100%;
                        height: 100%;
                    }

                    .cards .box img {
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                    }

                    .light-heart,
                    .dark-heart {
                        transition: opacity 0.3s ease;
                    }

                    @media only screen and (min-width: 1600px) {
                        .img-title h5 {
                            font-size: 19.8px;
                        }

                        .cards {
                            font-size: 15.898px;
                        }

                        .cards h4 {
                            font-size: 17px;
                            margin-top: 14px;
                        }

                        .cards strong {
                            font-size: 18px;
                        }

                        .img-title address {
                            width: 129px;
                            font-size: 16px;
                        }

                        .img-title {
                            font-size: 16.5px;
                        }


                        .cards p {
                            margin: 11px 0 0;
                        }

                        .cards .box {
                            height: 385px;
                        }

                        .sidebar-nav .nav-link {
                            font-size: 22px;
                        }

                        .sidebar {
                            width: 280px;
                        }

                        .aside {
                            margin-left: 334px;
                        }

                        .search-container {
                            width: 223px;
                        }
                    }
                </style>
                <style>
                    /* Basic styling */
                    .dropdown-container {
                        display: flex;
                        justify-content: space-between;
                        align-items: center;
                        padding: 9px;
                        width: 846px;
                        height: 56px;
                        border-radius: 100px;
                        background: var(--inflanar-mamunuiux-com-white, #FFF);
                        box-shadow: 0px 0px 30px 5px rgba(0, 0, 0, 0.08);
                        margin: 0 auto 76px;
                    }

                    .dropdown {
                        position: relative;
                        display: inline-block;
                        width: 100%;
                    }

                    /* Dropdown button styling */
                    .dropdown-button {
                        background-color: #fff;
                        border: none;
                        padding: 12px 10px;
                        font-size: 16px;
                        width: 100%;
                        cursor: pointer;
                        text-align: left;
                        display: flex;
                        flex-wrap: wrap;
                        gap: 4px;
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
                        background-color: #f1f1f1;
                        border-radius: 16px;
                        padding: 4px 8px;
                        display: flex;
                        align-items: center;
                        font-size: 14px;
                        margin-right: 5px;
                    }

                    .selected-item .remove {
                        cursor: pointer;
                        margin-left: 5px;
                        font-size: 12px;
                        color: #888;
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
                        z-index: 2;
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
                    }

                    .dropdown-content a.selected {
                        background-color: #d3f8e2;
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
                        border-right: 1px solid #C8C8C8;
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
                </style>
                <script>
                    function toggleHeart(box, influencerId, event) {
                        event.preventDefault(); // Prevent the default link behavior
                        event.stopPropagation(); // Stop event propagation to parent elements

                        const lightHeart = box.querySelector('.light-heart');
                        const darkHeart = box.querySelector('.dark-heart');
                        const csrfToken = '{{ csrf_token() }}';
                        const route = "{{ route('user.wishlist.toggle') }}";

                        // Toggle visibility
                        const isWishlist = lightHeart.style.display === "none";
                        lightHeart.style.display = isWishlist ? "block" : "none";
                        darkHeart.style.display = isWishlist ? "none" : "block";

                        // Send AJAX request to update wishlist
                        fetch(route, {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': csrfToken,
                                },
                                body: JSON.stringify({
                                    influencer_id: influencerId,
                                    action: isWishlist ? 'remove' : 'add'
                                }),
                            })
                            .then(response => response.json())
                            .then(data => {
                                if (!data.success) {
                                    // Revert toggle if the operation fails
                                    lightHeart.style.display = isWishlist ? "none" : "block";
                                    darkHeart.style.display = isWishlist ? "block" : "none";
                                    alert('Failed to update wishlist');
                                }
                            })
                            .catch(error => {
                                console.error('Error:', error);
                                alert('Failed to update wishlist');
                            });
                    }
                </script>
                <script>
                    // Toggle dropdown visibility
                    function toggleDropdown(dropdownId) {
                        var dropdown = document.getElementById(dropdownId);
                        // Toggle the dropdown visibility
                        dropdown.style.display = (dropdown.style.display === "block") ? "none" : "block";
                    }
                    // Single Select Function (for Platform)
                    function selectSingleOption(dropdownId, buttonId, element) {
                        const dropdownButton = document.getElementById(buttonId);
                        const selectedValue = element.textContent.trim();
                        // Update button text with the selected value
                        dropdownButton.textContent = selectedValue;
                        // Hide the dropdown after selection
                        document.getElementById(dropdownId).style.display = "none";
                    }
                    // Multiple Select Function (for Beauty)
                    function toggleMultipleSelection(dropdownId, buttonId, element) {
                        const dropdownButton = document.getElementById(buttonId);
                        const selectedItemsContainer = dropdownButton.querySelector('.selected-items');
                        const selectedValue = element.textContent.trim();
                        // Check if the value is already selected
                        const isSelected = selectedItemsContainer.querySelector(`[data-value="${selectedValue}"]`);
                        if (isSelected) {
                            // If selected, remove it
                            isSelected.remove();
                            element.classList.remove('selected');
                        } else {
                            // If not selected, add it
                            const selectedItem = document.createElement('span');
                            selectedItem.classList.add('selected-item');
                            selectedItem.setAttribute('data-value', selectedValue);
                            selectedItem.textContent = selectedValue;
                            // Add cross icon to remove the item
                            const removeIcon = document.createElement('span');
                            removeIcon.classList.add('remove');
                            removeIcon.textContent = '×';
                            removeIcon.onclick = function() {
                                selectedItem.remove();
                                // Also re-enable the option in the dropdown
                                const option = document.querySelector(
                                    `#${dropdownId} .dropdown-content a[data-value="${selectedValue}"]`);
                                if (option) {
                                    option.classList.remove('disabled');
                                }
                            };
                            selectedItem.appendChild(removeIcon);
                            selectedItemsContainer.appendChild(selectedItem);
                            // Disable the selected option in the dropdown list
                            const option = element;
                            option.classList.add('disabled');
                        }
                        // Hide the "Beauty" label when there are selected items
                        if (selectedItemsContainer.children.length > 0) {
                            dropdownButton.querySelector('.dropdown-button-text').style.display = "none"; // Hide the "Beauty" text
                        } else {
                            dropdownButton.querySelector('.dropdown-button-text').style.display =
                                "block"; // Show the "Beauty" text again if no items are selected
                        }
                        // Close the dropdown
                        document.getElementById(dropdownId).style.display = "none";
                    }
                    // Close the dropdown if the user clicks outside of it
                    window.onclick = function(event) {
                        if (!event.target.matches('.dropdown-button') && !event.target.matches('.dropdown-button *')) {
                            var dropdowns = document.getElementsByClassName("dropdown-content");
                            for (var i = 0; i < dropdowns.length; i++) {
                                var openDropdown = dropdowns[i];
                                if (openDropdown.style.display === "block") {
                                    openDropdown.style.display = "none";
                                }
                            }
                        }
                    }
                </script>

                <!-- End Features -->
            @endsection
