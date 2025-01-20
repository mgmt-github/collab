@extends('profile.master_layout')
@section('title')
    <title>{{ __('admin.Campaign') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
@endsection
@section('frontend-content')


    <div class="main-content">
        <section class="section">

            <div class="section-body">

                <div class="container">
                    <div class="campaign-main">
                        <div class="required">
                            <h2>{{ __('admin.Campaign Title') }}</h2> <svg xmlns="http://www.w3.org/2000/svg" width="9"
                                height="9" viewBox="0 0 9 9" fill="none">
                                <path
                                    d="M4.49994 7.434L2.10643 8.95154C2.0361 8.988 1.97082 9.00277 1.9106 8.99585C1.85081 8.98846 1.79257 8.96677 1.73586 8.93077C1.67872 8.89385 1.63564 8.84169 1.60663 8.77431C1.57762 8.70692 1.57498 8.63331 1.59872 8.55346L2.23567 5.70808L0.128979 3.79038C0.0696357 3.73962 0.0305131 3.67892 0.0116112 3.60831C-0.00729076 3.53769 -0.00311472 3.47008 0.0241392 3.40546C0.0513932 3.34085 0.0876586 3.28777 0.132935 3.24623C0.178652 3.20608 0.240193 3.17885 0.317559 3.16454L3.09746 2.90977L4.18147 0.215308C4.21136 0.139154 4.25444 0.0842307 4.31071 0.0505384C4.36697 0.0168461 4.43005 0 4.49994 0C4.56984 0 4.63314 0.0168461 4.68984 0.0505384C4.74655 0.0842307 4.78941 0.139154 4.81842 0.215308L5.90242 2.90977L8.68167 3.16454C8.75947 3.17839 8.82124 3.20585 8.86695 3.24692C8.91267 3.28754 8.94915 3.34038 8.97641 3.40546C9.00322 3.47008 9.00718 3.53769 8.98828 3.60831C8.96937 3.67892 8.93025 3.73962 8.87091 3.79038L6.76422 5.70808L7.40117 8.55346C7.42579 8.63238 7.42337 8.70577 7.39392 8.77362C7.36447 8.84146 7.32117 8.89362 7.26402 8.93008C7.20776 8.967 7.14951 8.98892 7.08929 8.99585C7.02951 9.00277 6.96445 8.988 6.89412 8.95154L4.49994 7.434Z"
                                    fill="#D65656" />
                            </svg>
                        </div>
                        <p>{{ __('admin.Write the campaign title so that the influences understand what you really want?') }}
                        </p>
                        <form class="campaign-title">
                            <input type="text" placeholder="Campaign Title" />
                        </form>
                        <div class="required mg-top-20">
                            <h2>{{ __('admin.Platform') }}</h2> <svg xmlns="http://www.w3.org/2000/svg" width="9"
                                height="9" viewBox="0 0 9 9" fill="none">
                                <path
                                    d="M4.49994 7.434L2.10643 8.95154C2.0361 8.988 1.97082 9.00277 1.9106 8.99585C1.85081 8.98846 1.79257 8.96677 1.73586 8.93077C1.67872 8.89385 1.63564 8.84169 1.60663 8.77431C1.57762 8.70692 1.57498 8.63331 1.59872 8.55346L2.23567 5.70808L0.128979 3.79038C0.0696357 3.73962 0.0305131 3.67892 0.0116112 3.60831C-0.00729076 3.53769 -0.00311472 3.47008 0.0241392 3.40546C0.0513932 3.34085 0.0876586 3.28777 0.132935 3.24623C0.178652 3.20608 0.240193 3.17885 0.317559 3.16454L3.09746 2.90977L4.18147 0.215308C4.21136 0.139154 4.25444 0.0842307 4.31071 0.0505384C4.36697 0.0168461 4.43005 0 4.49994 0C4.56984 0 4.63314 0.0168461 4.68984 0.0505384C4.74655 0.0842307 4.78941 0.139154 4.81842 0.215308L5.90242 2.90977L8.68167 3.16454C8.75947 3.17839 8.82124 3.20585 8.86695 3.24692C8.91267 3.28754 8.94915 3.34038 8.97641 3.40546C9.00322 3.47008 9.00718 3.53769 8.98828 3.60831C8.96937 3.67892 8.93025 3.73962 8.87091 3.79038L6.76422 5.70808L7.40117 8.55346C7.42579 8.63238 7.42337 8.70577 7.39392 8.77362C7.36447 8.84146 7.32117 8.89362 7.26402 8.93008C7.20776 8.967 7.14951 8.98892 7.08929 8.99585C7.02951 9.00277 6.96445 8.988 6.89412 8.95154L4.49994 7.434Z"
                                    fill="#D65656" />
                            </svg>
                        </div>
                        <p>{{ __('admin.Platform means you want to promote this brand') }}
                        </p>
                        <form class="platform-btn">
                            <div class="campaign-btn">
                                <input type="radio" id='facebook' name="platforms" class="radio-custom" checked />

                                <label for='facebook' class="radio-custom-label">{{ __('admin.Facebook') }}</label>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                        viewBox="0 0 25 24" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M16.225 22V14.255H18.825L19.214 11.237H16.224V9.31C16.224 8.436 16.467 7.84 17.721 7.84H19.319V5.14C18.5452 5.05685 17.7673 5.01679 16.989 5.02C14.685 5.02 13.108 6.427 13.108 9.01V11.237H10.5V14.255H13.107V22H3.604C2.994 22 2.5 21.506 2.5 20.896V3.104C2.5 2.494 2.994 2 3.604 2H21.396C22.006 2 22.5 2.494 22.5 3.104V20.896C22.5 21.506 22.006 22 21.396 22H16.225Z"
                                            fill="#5856D6" />
                                    </svg></span>
                            </div>
                            <div class="campaign-btn">
                                <input type="radio" id='instagram' name="platforms" class="radio-custom" />

                                <label for='instagram' class="radio-custom-label">{{ __('admin.Instagram') }}</label>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="17" height="16"
                                        viewBox="0 0 17 16" fill="none">
                                        <path
                                            d="M12.75 0H4.25C2.17893 0 0.5 1.67893 0.5 3.75V12.25C0.5 14.3211 2.17893 16 4.25 16H12.75C14.8211 16 16.5 14.3211 16.5 12.25V3.75C16.5 1.67893 14.8211 0 12.75 0Z"
                                            fill="url(#paint0_radial_812_6732)" />
                                        <path
                                            d="M12.75 0H4.25C2.17893 0 0.5 1.67893 0.5 3.75V12.25C0.5 14.3211 2.17893 16 4.25 16H12.75C14.8211 16 16.5 14.3211 16.5 12.25V3.75C16.5 1.67893 14.8211 0 12.75 0Z"
                                            fill="url(#paint1_radial_812_6732)" />
                                        <path
                                            d="M8.50056 1.75C6.80319 1.75 6.59013 1.75744 5.9235 1.78775C5.25813 1.81825 4.80394 1.92356 4.40656 2.07812C3.99544 2.23775 3.64675 2.45131 3.29938 2.79881C2.95169 3.14625 2.73813 3.49494 2.578 3.90587C2.423 4.30338 2.31756 4.75775 2.28762 5.42281C2.25781 6.0895 2.25 6.30263 2.25 8.00006C2.25 9.6975 2.2575 9.90987 2.28775 10.5765C2.31838 11.2419 2.42369 11.6961 2.57812 12.0934C2.73787 12.5046 2.95144 12.8533 3.29894 13.2006C3.64625 13.5483 3.99494 13.7624 4.40575 13.922C4.80344 14.0766 5.25769 14.1819 5.92294 14.2124C6.58962 14.2427 6.8025 14.2501 8.49981 14.2501C10.1974 14.2501 10.4097 14.2427 11.0764 14.2124C11.7417 14.1819 12.1964 14.0766 12.5941 13.922C13.0051 13.7624 13.3532 13.5483 13.7005 13.2006C14.0482 12.8533 14.2617 12.5046 14.4219 12.0936C14.5755 11.6961 14.681 11.2417 14.7122 10.5766C14.7422 9.91 14.75 9.6975 14.75 8.00006C14.75 6.30263 14.7422 6.08962 14.7122 5.42294C14.681 4.75756 14.5755 4.30344 14.4219 3.90606C14.2617 3.49494 14.0482 3.14625 13.7005 2.79881C13.3529 2.45119 13.0052 2.23762 12.5938 2.07819C12.1953 1.92356 11.7409 1.81819 11.0755 1.78775C10.4088 1.75744 10.1966 1.75 8.49862 1.75H8.50056ZM7.93988 2.87631C8.10631 2.87606 8.292 2.87631 8.50056 2.87631C10.1694 2.87631 10.3671 2.88231 11.0261 2.91225C11.6355 2.94012 11.9663 3.04194 12.1866 3.1275C12.4783 3.24075 12.6862 3.37619 12.9048 3.595C13.1236 3.81375 13.2589 4.02206 13.3725 4.31375C13.4581 4.53375 13.56 4.8645 13.5878 5.47388C13.6177 6.13275 13.6242 6.33062 13.6242 7.99862C13.6242 9.66663 13.6177 9.86456 13.5878 10.5234C13.5599 11.1327 13.4581 11.4635 13.3725 11.6836C13.2593 11.9753 13.1236 12.1829 12.9048 12.4016C12.6861 12.6203 12.4784 12.7557 12.1866 12.869C11.9665 12.9549 11.6355 13.0565 11.0261 13.0844C10.3673 13.1143 10.1694 13.1208 8.50056 13.1208C6.83169 13.1208 6.63387 13.1143 5.97506 13.0844C5.36569 13.0563 5.03494 12.9544 4.81444 12.8689C4.52281 12.7556 4.31444 12.6202 4.09569 12.4014C3.87694 12.1827 3.74156 11.9749 3.628 11.6831C3.54244 11.463 3.4405 11.1322 3.41275 10.5229C3.38281 9.864 3.37681 9.66613 3.37681 7.99706C3.37681 6.328 3.38281 6.13119 3.41275 5.47231C3.44062 4.86294 3.54244 4.53219 3.628 4.31187C3.74131 4.02019 3.87694 3.81188 4.09575 3.59313C4.31456 3.37438 4.52281 3.23894 4.8145 3.12544C5.03481 3.0395 5.36569 2.93794 5.97506 2.90994C6.55162 2.88387 6.77506 2.87606 7.93988 2.87475V2.87631ZM11.8368 3.91406C11.4228 3.91406 11.0868 4.24969 11.0868 4.66381C11.0868 5.07788 11.4228 5.41381 11.8368 5.41381C12.2509 5.41381 12.5868 5.07788 12.5868 4.66381C12.5868 4.24975 12.2509 3.91381 11.8368 3.91381V3.91406ZM8.50056 4.79038C6.72806 4.79038 5.29094 6.2275 5.29094 8.00006C5.29094 9.77262 6.72806 11.2091 8.50056 11.2091C10.2731 11.2091 11.7098 9.77262 11.7098 8.00006C11.7098 6.22756 10.273 4.79038 8.50044 4.79038H8.50056ZM8.50056 5.91669C9.65112 5.91669 10.5839 6.84938 10.5839 8.00006C10.5839 9.15063 9.65112 10.0834 8.50056 10.0834C7.35 10.0834 6.41725 9.15063 6.41725 8.00006C6.41725 6.84938 7.34994 5.91669 8.50056 5.91669Z"
                                            fill="white" />
                                        <defs>
                                            <radialGradient id="paint0_radial_812_6732" cx="0" cy="0" r="1"
                                                gradientUnits="userSpaceOnUse"
                                                gradientTransform="translate(4.75 17.2323) rotate(-90) scale(15.8572 14.7484)">
                                                <stop stop-color="#FFDD55" />
                                                <stop offset="0.1" stop-color="#FFDD55" />
                                                <stop offset="0.5" stop-color="#FF543E" />
                                                <stop offset="1" stop-color="#C837AB" />
                                            </radialGradient>
                                            <radialGradient id="paint1_radial_812_6732" cx="0" cy="0" r="1"
                                                gradientUnits="userSpaceOnUse"
                                                gradientTransform="translate(-2.18006 1.15256) rotate(78.681) scale(7.08825 29.218)">
                                                <stop stop-color="#3771C8" />
                                                <stop offset="0.128" stop-color="#3771C8" />
                                                <stop offset="1" stop-color="#6600FF" stop-opacity="0" />
                                            </radialGradient>
                                        </defs>
                                    </svg></span>
                            </div>
                            <div class="campaign-btn">
                                <input type="radio" id='youtube' name="platforms" class="radio-custom" />

                                <label for='youtube' class="radio-custom-label">{{ __('admin.Youtube') }}</label>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="25" height="18"
                                        viewBox="0 0 25 18" fill="none">
                                        <g clip-path="url(#clip0_812_6736)">
                                            <path
                                                d="M23.97 3.19453C23.8323 2.6858 23.5638 2.22201 23.1911 1.84934C22.8185 1.47667 22.3547 1.20812 21.846 1.07044C19.9835 0.5625 12.4878 0.5625 12.4878 0.5625C12.4878 0.5625 4.99177 0.577875 3.12933 1.08581C2.6206 1.2235 2.15681 1.49206 1.78415 1.86475C1.4115 2.23744 1.14298 2.70125 1.00533 3.21C0.441987 6.51919 0.223455 11.5616 1.0208 14.7384C1.15846 15.2472 1.42699 15.711 1.79964 16.0836C2.1723 16.4563 2.63608 16.7248 3.1448 16.8625C5.00724 17.3705 12.5031 17.3705 12.5031 17.3705C12.5031 17.3705 19.9989 17.3705 21.8612 16.8625C22.37 16.7249 22.8338 16.4563 23.2064 16.0836C23.5791 15.711 23.8477 15.2472 23.9853 14.7384C24.5795 11.4246 24.7626 6.38522 23.97 3.19453Z"
                                                fill="#FF0000" />
                                            <path d="M10.1016 12.5681L16.3198 8.96643L10.1016 5.36475V12.5681Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_812_6736">
                                                <rect width="24" height="16.875" fill="white"
                                                    transform="translate(0.5 0.5625)" />
                                            </clipPath>
                                        </defs>
                                    </svg></span>
                            </div>
                            <div class="campaign-btn">
                                <input type="radio" id='snapchat' name="platforms" class="radio-custom" />

                                <label for='snapchat' class="radio-custom-label">{{ __('admin.Snapchat') }}</label>
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                    viewBox="0 0 25 24" fill="none">
                                    <path
                                        d="M22.2403 5.45707C22.2552 5.27404 22.2552 5.0901 22.2403 4.90707C22.1343 4.15599 21.7557 3.47016 21.1767 2.98019C20.5976 2.49022 19.8586 2.23035 19.1003 2.25007H5.92033C5.61366 2.2574 5.31166 2.30007 5.01433 2.37807C4.34865 2.56065 3.76359 2.96156 3.35304 3.51646C2.94248 4.07136 2.73023 4.74809 2.75033 5.43807V18.5131C2.747 18.7817 2.77333 19.0474 2.82933 19.3101C2.98362 20.0204 3.3826 20.6539 3.95655 21.0999C4.5305 21.5459 5.24293 21.776 5.96933 21.7501H19.0303C19.4189 21.7535 19.8051 21.6902 20.1723 21.5631C20.7873 21.3572 21.32 20.9594 21.6921 20.4282C22.0642 19.897 22.256 19.2604 22.2393 18.6121C22.2493 14.1941 22.2403 9.82607 22.2403 5.45707ZM18.9133 16.3711C18.5993 16.5511 18.3773 16.6111 18.0363 16.7321C17.9657 16.7499 17.9004 16.7842 17.8456 16.8321C17.7908 16.8801 17.7482 16.9404 17.7213 17.0081C17.6482 17.2118 17.5149 17.3885 17.3393 17.5149C17.1636 17.6413 16.9537 17.7114 16.7373 17.7161L15.9203 17.7661C15.4739 17.829 15.0488 17.9973 14.6803 18.2571C14.1429 18.6117 13.525 18.8255 12.8833 18.8788C12.2416 18.9321 11.5969 18.8232 11.0083 18.5621C10.7818 18.4738 10.5669 18.3582 10.3683 18.2181C9.86734 17.8853 9.27662 17.7137 8.67533 17.7261C8.49338 17.7292 8.31164 17.7124 8.13333 17.6761C7.95751 17.6479 7.79254 17.5729 7.6558 17.4588C7.51906 17.3448 7.4156 17.196 7.35633 17.0281C7.33261 16.9503 7.28781 16.8807 7.22692 16.8268C7.16602 16.773 7.0914 16.7371 7.01133 16.7231C6.58816 16.6277 6.19557 16.428 5.86933 16.1421C5.74713 16.0486 5.65171 15.9245 5.59268 15.7824C5.53365 15.6404 5.51308 15.4852 5.53305 15.3327C5.55302 15.1801 5.61282 15.0355 5.70644 14.9134C5.80006 14.7913 5.92418 14.696 6.06633 14.6371C6.42133 14.4301 6.77533 14.2331 7.11033 13.9971C7.52033 13.7001 7.85733 13.3131 8.09433 12.8661C8.24233 12.5711 8.23233 12.5411 7.96633 12.3641C7.68529 12.1844 7.41577 11.9874 7.15933 11.7741C6.9758 11.623 6.84266 11.4195 6.77763 11.1909C6.7126 10.9622 6.71878 10.7191 6.79533 10.4941C6.88092 10.1954 7.07727 9.94056 7.34432 9.78167C7.61136 9.62278 7.92897 9.57178 8.23233 9.63907H8.41933C8.33247 8.99102 8.40147 8.33159 8.62061 7.71556C8.83975 7.09953 9.20271 6.54467 9.67933 6.09707C10.4657 5.43579 11.4672 5.0857 12.4943 5.11307C13.0877 5.09375 13.6783 5.20133 14.2267 5.42862C14.7751 5.65592 15.2686 5.99769 15.6743 6.43107C16.0526 6.87967 16.335 7.40094 16.5042 7.96279C16.6735 8.52465 16.7259 9.11519 16.6583 9.69807C16.8817 9.67807 17.105 9.67807 17.3283 9.69807C17.5615 9.72364 17.7811 9.82052 17.9572 9.9755C18.1333 10.1305 18.2573 10.336 18.3123 10.5641C18.3772 10.7863 18.3764 11.0225 18.3101 11.2443C18.2437 11.4661 18.1146 11.664 17.9383 11.8141C17.6685 12.0401 17.3857 12.2501 17.0913 12.4431C16.8653 12.5901 16.8553 12.6201 16.9733 12.8661C17.3369 13.5341 17.8878 14.0812 18.5583 14.4401L18.9913 14.6761C19.1468 14.7469 19.2791 14.8602 19.3729 15.003C19.4666 15.1458 19.5181 15.3123 19.5212 15.4831C19.5243 15.6539 19.4791 15.8221 19.3906 15.9683C19.3021 16.1145 19.1741 16.2326 19.0213 16.3091L18.9133 16.3711Z"
                                        fill="#C8CC09" />
                                    <path
                                        d="M18.3318 15.3162C18.3318 15.3842 18.2338 15.4832 18.1548 15.5122C17.8398 15.6402 17.5248 15.7682 17.1708 15.8672C17.0445 15.8854 16.9287 15.9477 16.8439 16.043C16.7592 16.1384 16.7109 16.2607 16.7078 16.3882C16.7077 16.4287 16.6994 16.4687 16.6832 16.5058C16.6671 16.5429 16.6436 16.5763 16.6141 16.6039C16.5846 16.6315 16.5497 16.6529 16.5116 16.6665C16.4736 16.6801 16.4331 16.6858 16.3928 16.6832L15.4088 16.7522C14.9058 16.8362 14.4288 17.0312 14.0108 17.3222C13.5244 17.6401 12.9537 17.8044 12.3728 17.7941C11.7919 17.7838 11.2275 17.5992 10.7528 17.2642C10.1645 16.8906 9.48055 16.6957 8.78375 16.7032H8.73375C8.35075 16.7032 8.30175 16.6432 8.24275 16.2702C8.23792 16.1954 8.21103 16.1236 8.16547 16.064C8.11991 16.0044 8.05773 15.9596 7.98675 15.9352C7.81875 15.8672 7.65175 15.8272 7.48475 15.7582C7.31675 15.6902 7.05175 15.6012 6.84475 15.5032C6.63775 15.4042 6.65775 15.3842 6.65775 15.3062C6.65775 15.2282 6.75575 15.1582 6.83475 15.1192C7.49452 14.8086 8.08156 14.3626 8.55775 13.8102C8.85775 13.4502 9.07775 13.0312 9.20775 12.5802C9.24916 12.4866 9.25494 12.3811 9.224 12.2835C9.19307 12.1859 9.12754 12.1029 9.03975 12.0502C8.77375 11.8722 8.49875 11.6952 8.24275 11.5082C8.10721 11.4131 7.98187 11.3042 7.86875 11.1832C7.82097 11.1157 7.79531 11.035 7.79531 10.9522C7.79531 10.8695 7.82097 10.7888 7.86875 10.7212C7.90408 10.6508 7.96193 10.5941 8.03312 10.5602C8.10431 10.5263 8.18477 10.5172 8.26175 10.5342C8.46508 10.5769 8.66508 10.6292 8.86175 10.6912L8.99175 10.7212L9.12475 10.7772C9.40075 10.8762 9.39475 10.7412 9.38475 10.4552C9.34091 9.81666 9.34091 9.17583 9.38475 8.53725C9.4522 8.02656 9.6654 7.54614 9.99882 7.15348C10.3322 6.76082 10.7718 6.47258 11.2648 6.32325C12.1066 6.00671 13.0389 6.03147 13.8628 6.39225C14.3984 6.59576 14.8575 6.96063 15.1768 7.43644C15.496 7.91224 15.6595 8.47546 15.6448 9.04825V10.6232C15.6448 10.8782 15.6948 10.9082 15.9208 10.8292L16.5898 10.6032C16.6744 10.5875 16.7611 10.5875 16.8458 10.6032C16.9204 10.5967 16.9954 10.6117 17.0618 10.6467C17.1281 10.6816 17.1829 10.7349 17.2198 10.8002C17.2682 10.8637 17.2945 10.9414 17.2945 11.0212C17.2945 11.1011 17.2682 11.1788 17.2198 11.2422C17.1108 11.3667 16.9888 11.479 16.8558 11.5772C16.6288 11.7342 16.3928 11.8722 16.1558 12.0302C15.9208 12.1872 15.7828 12.3742 15.9108 12.7582C16.1411 13.4652 16.5848 14.0836 17.1808 14.5282C17.4958 14.7742 17.6868 14.8752 18.0428 15.1182C18.1938 15.2202 18.3418 15.2472 18.3318 15.3162Z"
                                        fill="white" />
                                </svg>
                            </div>
                            <div class="campaign-btn">
                                <input type="radio" id='tiktok' name="platforms" class="radio-custom" />

                                <label for='tiktok' class="radio-custom-label">{{ __('admin.Tiktok') }}</label>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M16 21.75C17.525 21.75 18.9875 21.1442 20.0659 20.0659C21.1442 18.9875 21.75 17.525 21.75 16V8C21.75 6.47501 21.1442 5.01247 20.0659 3.93414C18.9875 2.8558 17.525 2.25 16 2.25H8C6.47501 2.25 5.01247 2.8558 3.93414 3.93414C2.8558 5.01247 2.25 6.47501 2.25 8V16C2.25 17.525 2.8558 18.9875 3.93414 20.0659C5.01247 21.1442 6.47501 21.75 8 21.75H16ZM13.711 5.763C13.6544 5.59444 13.5398 5.45147 13.3876 5.35959C13.2353 5.26771 13.0554 5.2329 12.8799 5.26137C12.7044 5.28985 12.5447 5.37974 12.4293 5.51503C12.314 5.65032 12.2504 5.8222 12.25 6V15C12.25 15.445 12.118 15.88 11.8708 16.25C11.6236 16.62 11.2722 16.9084 10.861 17.0787C10.4499 17.249 9.9975 17.2936 9.56105 17.2068C9.12459 17.1199 8.72368 16.9057 8.40901 16.591C8.09434 16.2763 7.88005 15.8754 7.79323 15.439C7.70642 15.0025 7.75097 14.5501 7.92127 14.139C8.09157 13.7278 8.37996 13.3764 8.74997 13.1292C9.11998 12.882 9.55499 12.75 10 12.75C10.1989 12.75 10.3897 12.671 10.5303 12.5303C10.671 12.3897 10.75 12.1989 10.75 12C10.75 11.8011 10.671 11.6103 10.5303 11.4697C10.3897 11.329 10.1989 11.25 10 11.25C9.25832 11.25 8.5333 11.4699 7.91661 11.882C7.29993 12.294 6.81928 12.8797 6.53545 13.5649C6.25162 14.2502 6.17736 15.0042 6.32206 15.7316C6.46675 16.459 6.8239 17.1272 7.34835 17.6517C7.8728 18.1761 8.54098 18.5332 9.26841 18.6779C9.99584 18.8226 10.7498 18.7484 11.4351 18.4645C12.1203 18.1807 12.706 17.7001 13.118 17.0834C13.5301 16.4667 13.75 15.7417 13.75 15V8.458C14.517 9.17 15.597 9.75 17 9.75C17.1989 9.75 17.3897 9.67098 17.5303 9.53033C17.671 9.38968 17.75 9.19891 17.75 9C17.75 8.80109 17.671 8.61032 17.5303 8.46967C17.3897 8.32902 17.1989 8.25 17 8.25C16.028 8.25 15.289 7.85 14.741 7.331C14.181 6.799 13.843 6.158 13.711 5.763Z"
                                        fill="black" />
                                </svg></span>
                            </div>
                            <div class="campaign-btn">
                                <input type="radio" id='user-generated' name="platforms" class="radio-custom" />

                                <label for='user-generated'
                                    class="radio-custom-label">{{ __('admin.User Generated Content (UGC)') }}</label>
                            </div>
                        </form>
                        <h2 class="mg-top-20">{{ __('admin.Campaign Thumbail') }}</h2>
                        <p>{{ __('admin.Upload the cmpaign thumbnail') }}
                        </p>
                        <form class="campaign-thumbnail">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="51" viewBox="0 0 50 51"
                                fill="none">
                                <path
                                    d="M15.542 40.7919H11.5419C5.41689 40.3544 2.66699 35.646 2.66699 31.4585C2.66699 27.271 5.41691 22.5419 11.4377 22.1252C12.2919 22.0419 13.0419 22.7085 13.1044 23.5835C13.1669 24.4377 12.5212 25.1877 11.6462 25.2502C7.60449 25.5419 5.79199 28.5835 5.79199 31.4794C5.79199 34.3752 7.60449 37.4169 11.6462 37.7085H15.542C16.3961 37.7085 17.1045 38.4169 17.1045 39.271C17.1045 40.1252 16.3961 40.7919 15.542 40.7919Z"
                                    fill="#292D32" />
                                <path
                                    d="M34.7294 40.7917C34.6877 40.7917 34.6669 40.7917 34.6252 40.7917C33.771 40.7917 32.9794 40.0834 32.9794 39.2292C32.9794 38.3334 33.6461 37.6667 34.5211 37.6667C37.0836 37.6667 39.3752 36.7709 41.1669 35.1668C44.4169 32.3334 44.6252 28.2501 43.7502 25.3751C42.8752 22.5209 40.4377 19.2501 36.1877 18.7293C35.5002 18.6459 34.9585 18.1251 34.8335 17.4376C34.0002 12.4376 31.3127 8.97926 27.2294 7.72926C23.0211 6.41676 18.1043 7.70842 15.0418 10.9168C12.0627 14.0209 11.3752 18.3751 13.1043 23.1668C13.396 23.9793 12.9795 24.8751 12.167 25.1667C11.3545 25.4584 10.4586 25.0418 10.1669 24.2293C8.06274 18.3543 9.02109 12.7293 12.7919 8.77092C16.6461 4.72925 22.8336 3.12507 28.1461 4.75007C33.0211 6.25007 36.4585 10.2709 37.7085 15.8542C41.9585 16.8126 45.3752 20.0418 46.7294 24.5001C48.2085 29.3543 46.8752 34.3543 43.2294 37.5209C40.9169 39.6043 37.896 40.7917 34.7294 40.7917Z"
                                    fill="#292D32" />
                                <path
                                    d="M24.9997 46.9168C20.8122 46.9168 16.8955 44.6877 14.7497 41.0835C14.5205 40.7293 14.2914 40.3127 14.1039 39.8543C13.3955 38.3752 13.0205 36.6877 13.0205 34.9377C13.0205 28.3335 18.3955 22.9585 24.9997 22.9585C31.6038 22.9585 36.9788 28.3335 36.9788 34.9377C36.9788 36.7085 36.6039 38.3752 35.8539 39.9168C35.6872 40.3127 35.4581 40.7293 35.2081 41.1252C33.1039 44.6877 29.1872 46.9168 24.9997 46.9168ZM24.9997 26.0835C20.1247 26.0835 16.1455 30.0627 16.1455 34.9377C16.1455 36.2293 16.4164 37.4377 16.9372 38.5418C17.1039 38.896 17.2496 39.1877 17.4163 39.4585C18.9996 42.146 21.8955 43.7918 24.9788 43.7918C28.0622 43.7918 30.958 42.146 32.5205 39.5002C32.708 39.1877 32.8747 38.896 32.9997 38.6043C33.5622 37.4585 33.833 36.2502 33.833 34.9585C33.8538 30.0627 29.8747 26.0835 24.9997 26.0835Z"
                                    fill="#292D32" />
                                <path
                                    d="M23.8122 38.5626C23.4164 38.5626 23.0206 38.4168 22.7081 38.1043L20.6455 36.0417C20.0413 35.4376 20.0413 34.4376 20.6455 33.8334C21.2497 33.2292 22.2497 33.2292 22.8538 33.8334L23.8539 34.8334L27.1872 31.7501C27.833 31.1667 28.8122 31.2084 29.3955 31.8334C29.9789 32.4584 29.9372 33.4584 29.3122 34.0418L24.8747 38.1459C24.5622 38.4168 24.1872 38.5626 23.8122 38.5626Z"
                                    fill="#292D32" />
                            </svg>
                            <h1>{{ __('admin.Choose a file or drag & drop it here') }}</h1>
                            <p>{{ __('admin.JPEG, PNG, PDG, and MP4 formats, up to 50MB') }}</p>
                            <div class="file-input-wrapper">
                                <label class="browse-button" for="image-input">{{ __('admin.Browse File') }}</label>
                                <input type="file" id="image-input" class="file-input" accept="image/*">
                                <p id="file-name" style="color: #555; font-size: 12px"></p>
                            </div>

                        </form>
                        <div class="navigation-btns">
                            <div class="navigation-btns-item">{{ __('admin.Previous') }}</div>
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
            </div>
            <script>
                // Display the selected file name
                document.getElementById("image-input").addEventListener("change", function() {
                    const fileName = this.files[0] ? this.files[0].name : "No file selected";
                    document.getElementById("file-name").innerText = `Selected File: ${fileName}`;
                });
            </script>
            <style>
                .footer-cta,
                .footer-area,
                .inflanar-header.inflanar-header__v2 {
                    display: none;
                }

                .custom-font {
                    margin: 0;
                    padding: 20px 0px;
                    font-family: "Poppins", serif;
                    padding-bottom: 30px;
                    min-height: 100vh;
                    background: linear-gradient(0deg, #f4f6f9 0%, #f4f6f9 100%), #fff;
                }

                .campaign-main {
                    border-radius: 12px;
                    background: #FFF;
                    padding: 24px 20px;
                }

                .required {
                    display: flex;
                    gap: 2px;
                    justify-content: start;
                }

                .campaign-main h1 {
                    color: #21272A;
                    font-size: 18px;
                    font-style: normal;
                    font-weight: 500;
                    line-height: 20px;
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
                    padding: 28px 0 0 0;
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

                .navigation-btns {
                    display: flex;
                    gap: 20px;
                    justify-content: flex-end;
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
                    padding: 10px 20px;
                    cursor: pointer;
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

                .input-container {
                    display: flex;
                    align-items: center;
                    border: 0.84px solid #CFCFCF;
                    border-radius: 6px;
                    overflow: hidden;
                    width: 100%;
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

                .input-container .dropdown {
                    display: flex;
                    align-items: center;
                    background-color: #f4f4f4;
                    border-left: 1px solid #d1d1d1;
                    cursor: pointer;
                }

                .input-container .dropdown select {
                    border: none;
                    background: transparent;
                    font-size: 14px;
                    appearance: none;
                    outline: none;
                    cursor: pointer;
                }
            </style>
