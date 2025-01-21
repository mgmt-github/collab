@extends('profile.master_layout')
@section('title')
    <title>{{ __('admin.Campaign') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
@endsection
@section('frontend-content')

    <div class="campaign-wrap">
        <div class="compaign-container dd">
            <div class="inner-content">
                <div class="platforms">
                    <div class="platforms-item">
                        <img src="./public/frontend/img/facebook.png" alt="Facebook Logo" class="logo">
                        <h1>{{ __('admin.Facebook') }}</h1>
                    </div>
                </div>
                <h2>{{ __('admin.Select your content type') }}</h2>
                <p>{{ __('admin.Select the ways in which your brand wil be promoted on Facebook') }}</p>
                <form class="btns-group-radio">
                    <div class="campaign-btn">
                        <input type="radio" id='photos' name="content-type" class="radio-custom" checked />

                        <label for='photos' class="radio-custom-label">{{ __('admin.Photos') }}</label>
                    </div>
                    <div class="campaign-btn">
                        <input type="radio" id='text' name="content-type" class="radio-custom" />

                        <label for='text' class="radio-custom-label">{{ __('admin.Text') }}</label>
                    </div>
                    <div class="campaign-btn">
                        <input type="radio" id='videos' name="content-type" class="radio-custom" />

                        <label for='videos' class="radio-custom-label">{{ __('admin.Videos') }}</label>
                    </div>
                </form>
                <h2>{{ __('admin.Content Placement') }}</h2>
                <p>{{ __('admin.Select the content place where influencer will post content to promote your band') }}
                </p>
                <form class="btns-group-radio">
                    <div class="campaign-btn">
                        <input type="radio" id='photo' name="placement" class="radio-custom" checked />

                        <label for='photo' class="radio-custom-label">{{ __('admin.Photos') }}</label>
                    </div>
                    <div class="campaign-btn">
                        <input type="radio" id='reels' name="placement" class="radio-custom" />

                        <label for='reels' class="radio-custom-label">{{ __('admin.Reels') }}</label>
                    </div>
                    <div class="campaign-btn">
                        <input type="radio" id='stories' name="placement" class="radio-custom" />

                        <label for='stories' class="radio-custom-label">{{ __('admin.Stories') }}</label>
                    </div>
                </form>
            </div>
            <h2>{{ __('admin.Description') }}</h2>
            <p>{{ __('admin.Describe your campaign, your description will understand the influencer actually how you want to promote your brand') }}
            </p>
            <div class="box-con">
                <div id="editor">
                    <h2>{{ __('admin.Heading') }} 1</h2>
                    <p>{{ __('admin.Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. in, dolor.') }}
                    </p>
                </div>
                <div class="dropdown-social">
                    <div class="dropdown">
                        <h2>{{ __('admin.Campaign Tags') }}</h2>
                        <button class="dropdown-button" onclick="toggleDropdown(event)">
                            <div class="selected-items"></div>
                            <span class="dropdown-button-text">{{ __('admin.Select') }}</span>
                        </button>
                        <div class="dropdown-content">
                            <a href="#" data-value="Facebook"
                                onclick="toggleMultipleSelection(event)">{{ __('admin.Facebook') }}</a>
                            <a href="#" data-value="Instagram"
                                onclick="toggleMultipleSelection(event)">{{ __('admin.Instagram') }}</a>
                            <a href="#" data-value="LinkedIn"
                                onclick="toggleMultipleSelection(event)">{{ __('LinkedIn') }}</a>
                            <a href="#" data-value="TikTok"
                                onclick="toggleMultipleSelection(event)">{{ __('admin.Tiktok') }}</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <h2>{{ __('admin.Hash Tags') }}</h2>
                        <button class="dropdown-button" onclick="toggleDropdown(event)">
                            <div class="selected-items"></div>
                            <span class="dropdown-button-text">{{ __('admin.Select') }}</span>
                        </button>
                        <div class="dropdown-content">
                            <a href="#" data-value="Nature"
                                onclick="toggleMultipleSelection(event)">{{ __('admin.Nature') }}</a>
                            <a href="#" data-value="Travel"
                                onclick="toggleMultipleSelection(event)">{{ __('admin.Travel') }}</a>
                            <a href="#" data-value="Photography"
                                onclick="toggleMultipleSelection(event)">{{ __('admin.Photography') }}</a>
                            <a href="#" data-value="Foodie"
                                onclick="toggleMultipleSelection(event)">{{ __('admin.Foodie') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navigation-btns">
                <div class="navigation-btns-item active"><svg xmlns="http://www.w3.org/2000/svg" width="29"
                        height="24" viewBox="0 0 29 24" fill="none">
                        <path
                            d="M11.0001 17.3079L4.85156 12.0001L11.0001 6.69238L11.82 7.40013L7.07051 11.5001H23.3862V12.5001H7.07051L11.82 16.6001L11.0001 17.3079Z"
                            fill="black" />
                    </svg><span>{{ __('admin.Previous') }}</span></div>
                <div class="navigation-btns-item active"><span>{{ __('admin.Next') }}</span><svg
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none">
                        <path
                            d="M14.6922 6.69212L20 11.9999L14.6922 17.3076L13.9845 16.5999L18.0845 12.4999L4 12.4999V11.4999L18.0845 11.4999L13.9845 7.39987L14.6922 6.69212Z"
                            fill="black" />
                    </svg></div>
            </div>
        </div>
    </div>
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
        // Toggle dropdown visibility
        function toggleDropdown(event) {
            const button = event.target.closest('.dropdown-button');
            const dropdownContent = button.nextElementSibling;
            // Close other open dropdowns
            document.querySelectorAll('.dropdown-content').forEach((dropdown) => {
                if (dropdown !== dropdownContent) {
                    dropdown.style.display = 'none';
                }
            });
            // Toggle the current dropdown
            dropdownContent.style.display = dropdownContent.style.display === 'block' ? 'none' : 'block';
        }
        // Toggle multiple selection
        function toggleMultipleSelection(event) {
            event.preventDefault();
            const option = event.target;
            const dropdownContent = option.closest('.dropdown-content');
            const dropdownButton = dropdownContent.previousElementSibling;
            const selectedItemsContainer = dropdownButton.querySelector('.selected-items');
            const selectedValue = option.getAttribute('data-value');
            // Check if the value is already selected
            const existingItem = selectedItemsContainer.querySelector(`[data-value="${selectedValue}"]`);
            if (existingItem) {
                // Remove the selected item
                existingItem.remove();
                option.classList.remove('disabled');
            } else {
                // Add the new selected item
                const selectedItem = document.createElement('span');
                selectedItem.classList.add('selected-item');
                selectedItem.setAttribute('data-value', selectedValue);
                selectedItem.textContent = selectedValue;
                // Add a remove button
                const removeButton = document.createElement('span');
                removeButton.classList.add('remove');
                removeButton.textContent = '×';
                removeButton.onclick = () => {
                    selectedItem.remove();
                    option.classList.remove('disabled');
                };
                selectedItem.appendChild(removeButton);
                selectedItemsContainer.appendChild(selectedItem);
                option.classList.add('disabled');
            }
            // Show or hide the placeholder text
            const buttonText = dropdownButton.querySelector('.dropdown-button-text');
            if (selectedItemsContainer.children.length > 0) {
                buttonText.style.display = 'none';
            } else {
                buttonText.style.display = 'block';
            }
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
    <style>
        .footer-cta,
        .footer-area,
        .inflanar-header.inflanar-header__v2 {
            display: none;
        }

        .campaign-wrap {
            width: 100%;
            padding: 20px 0 30px 0;
            background: linear-gradient(0deg, #f4f6f9 0%, #f4f6f9 100%), #fff;
        }

        .compaign-container {
            width: 1094px;
            margin: 0 auto;
            font-family: "Poppins", serif;
            border-radius: 12px;
            background: #FFF;
            padding: 24px 20px;
        }

        .logo {
            width: 48px;
            height: 48px;
            border-radius: 50%;
        }

        .platforms-item {
            display: flex;
            gap: 8px;
            align-items: center;
            margin-bottom: 16px;
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

        .compaign-container p {
            color: #747474;
            font-size: 14px;
            font-style: normal;
            font-weight: 300;
            line-height: normal;
            margin: 0 0 16px 0;
        }

        .campaign-btn {
            border-radius: 6.694px;
            border: 0.837px solid #CFCFCF;
            background: #FFF;
            padding: 8px 12px;
            display: flex;
            justify-content: start;
            align-items: center;
            gap: 10px;
            width: 178px;
            cursor: pointer;
        }

        .campaign-btn:hover {
            background: #F1F1F1;
        }

        .campaign-btn label {
            margin: 0px;
        }

        .btns-group-radio {
            display: flex;
            gap: 18px;
        }

        /* radio button  */
        .radio-custom {
            opacity: 0;
            position: absolute;
        }

        .radio-custom,
        .radio-custom-label {
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 14px;
        }

        .radio-custom-label {
            position: relative;
        }

        .radio-custom+.radio-custom-label:before {
            content: '';
            background: #fff;
            display: inline-block;
            vertical-align: middle;
            margin-right: 10px;
            text-align: center;
        }


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
        .navigation-btns {
            display: flex;
            gap: 20px;
            justify-content: flex-end;
            margin-top: 10%;
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
            margin-bottom: 10%;
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
            width: 100%;
            cursor: pointer;
            text-align: left;
            display: flex;
            flex-wrap: wrap;
            gap: 4px;
            border-radius: 12px;
            border: 1px solid #d9d9d9;
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

        /* editor style end  */
    </style>
