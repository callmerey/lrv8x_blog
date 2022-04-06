<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{$user->name}}</title>
    <link rel="stylesheet" type="text/css" id="style-ref"
        href="https://hashnode.com/static/css/app.min.css?v=1625504643155">
</head>

<body class="leading-normal bg-bluish-gray dark:bg-brand-dark-grey-900">
    <div class="progressbar" id="hn-progressbar" style="display: none;"></div><input type="hidden" id="hn-user"
        value="60ca23678ce4491f0f2970a3">
    <div id="__next">
        <div class="homepage new-feed">
            <div class="container grid items-stretch grid-cols-12 gap-2 px-2 mx-auto md:gap-4 xl:grid-cols-8 2xl:px-5">
                <div class="z-40 col-span-12 md:col-span-9 lg:col-span-10 xl:col-span-8">
                    <div class="w-full max-w-full ">
                        <div class="bg-white bg-center bg-cover border-l border-r profile-cover dark:border-brand-grey-800 dark:bg-brand-grey-900"
                            style="background-image: url(&quot;https://cdn.hashnode.com/res/hashnode/image/upload/v1584035951809/rA6njTVVd.jpeg?w=1600&amp;fit=crop&amp;crop=entropy&amp;auto=compress&amp;auto=compress&quot;);">
                        </div>
                        <div
                            class="px-4 pt-4 mb-4 bg-white border-b rounded-bl-lg rounded-br-lg lg:px-16 dark:bg-brand-dark-grey-900 lg:border-l lg:border-r dark:border-brand-grey-800">
                            <div class="flex flex-row flex-wrap items-center">
                                <div
                                    class="flex-shrink-0 w-24 h-24 mb-4 bg-white border-4 border-white rounded-full shadow-lg md:mb-0 md:-mt-40 lg:mb-0 lg:w-40 lg:h-40 md:mr-8 dark:bg-brand-grey-800 dark:border-brand-grey-800 xl:ml-48">
                                    <a class="block w-full h-auto relative undefined" data-title="false"><img
                                            src="{{url('public/uploads/')}}/{{$user->image_user}}"
                                            data-sizes="auto" loading="lazy"
                                            data-src="{{url('public/uploads/')}}/{{$user->image_user}}"
                                            data-width="400" data-height="400" alt="{{$user->name}}"
                                            class="block w-full undefined block w-full rounded-full z-20 relative lazyautosizes lazyloaded"
                                            sizes="152px"></a>
                                </div>
                                <div class="w-full pr-10 md:flex-1 lg:w-auto">
                                    <h1
                                        class="mb-2 text-3xl font-bold leading-tight tracking-tight text-black dark:text-white">
                                        <a>{{$user->name}}</a>
                                    </h1>
                                    <div class="flex flex-row flex-wrap items-center mt-6">
                                        <button class="flex flex-row items-center button-transparent"><svg class="w-5 h-5 mr-2 fill-current" viewBox="0 0 512 512">
                                                <path
                                                    d="M493.255 56.236l-37.49-37.49c-24.993-24.993-65.515-24.994-90.51 0L12.838 371.162.151 485.346c-1.698 15.286 11.22 28.203 26.504 26.504l114.184-12.687 352.417-352.417c24.992-24.994 24.992-65.517-.001-90.51zm-95.196 140.45L174 420.745V386h-48v-48H91.255l224.059-224.059 82.745 82.745zM126.147 468.598l-58.995 6.555-30.305-30.305 6.555-58.995L63.255 366H98v48h48v34.745l-19.853 19.853zm344.48-344.48l-49.941 49.941-82.745-82.745 49.941-49.941c12.505-12.505 32.748-12.507 45.255 0l37.49 37.49c12.506 12.506 12.507 32.747 0 45.255z">
                                                </path>
                                            </svg>
                                            <span>__('messages.profile')</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-row items-center justify-center mt-12 overflow-auto text-sm font-bold tracking-wider uppercase text-brand-grey-800 dark:text-brand-grey-400">
                                <a href="profile" class="px-6 py-2 border-b-2 border-transparent hover:bg-brand-grey-100 dark:hover:bg-brand-grey-700 border-accent-blue-A700">Bài Viết</a>
                                <a
                                    href="/lrv8_blog/post" class="px-6 py-2 border-b-2 border-transparent hover:bg-brand-grey-100 dark:hover:bg-brand-grey-700 null">Viết Bài
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row items-start flex-grow-0 w-full max-w-full">
                        <div class="flex-shrink-0 hidden w-84 xl:w-96 lg:block">
                            <div
                                class="px-4 py-6 mb-5 bg-white border rounded-lg dark:bg-brand-dark-grey-900 dark:border-brand-grey-700">
                                <div class="mb-5">
                                    <div class="flex flex-row items-center"><a href="/settings#moreAboutYou"
                                            class="flex flex-row items-center mb-2 button-transparent small"><svg
                                                class="w-5 h-5 mr-2 fill-current" viewBox="0 0 95 95">
                                                <path
                                                    d="M52.7 24.5h-9.4v18.8H24.5v9.4h18.8v18.8h9.4V52.7h18.8v-9.4H52.7V24.5zM48 1C22.056 1 1 22.056 1 48s21.056 47 47 47 47-21.056 47-47S73.944 1 48 1zm0 84.6c-20.727 0-37.6-16.873-37.6-37.6S27.273 10.4 48 10.4 85.6 27.273 85.6 48 68.727 85.6 48 85.6z"
                                                    fill-rule="nonzero"></path>
                                            </svg><span>Add Bio</span></a></div>
                                    <p class="mb-2 text-sm italic leading-snug text-brand-grey-600">Looks like your bio
                                        is empty. Tell the world who you are by writing a short description about you.
                                    </p>
                                </div>
                                <div class="mb-2"><span class="inline-block w-20 text-brand-grey-600">Joined:
                                    </span><span class="font-medium text-brand-grey-800 dark:text-brand-grey-400">June
                                        16, 2021</span></div>
                                <div class="pt-5 mt-5 border-t dark:border-brand-grey-800">
                                    <h2 class="mb-2 font-semibold text-brand-grey-700 dark:text-brand-grey-500">I am
                                        available for</h2>
                                    <div class="">
                                        <div class="flex flex-row items-center"><a href="/settings#availableFor"
                                                class="flex flex-row items-center mb-2 button-transparent small"><svg
                                                    class="w-5 h-5 mr-2 fill-current" viewBox="0 0 95 95">
                                                    <path
                                                        d="M52.7 24.5h-9.4v18.8H24.5v9.4h18.8v18.8h9.4V52.7h18.8v-9.4H52.7V24.5zM48 1C22.056 1 1 22.056 1 48s21.056 47 47 47 47-21.056 47-47S73.944 1 48 1zm0 84.6c-20.727 0-37.6-16.873-37.6-37.6S27.273 10.4 48 10.4 85.6 27.273 85.6 48 68.727 85.6 48 85.6z"
                                                        fill-rule="nonzero"></path>
                                                </svg><span>Add Available For</span></a></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="px-4 py-6 mb-5 bg-white border rounded-lg dark:bg-brand-dark-grey-900 dark:border-brand-grey-700">
                                <div class="flex flex-row">
                                    <div class="w-1/3 p-2">
                                        <h3 class="mb-px font-medium text-brand-grey-700 dark:text-brand-grey-500">
                                            Followers</h3><a href="/@Thanhson/followers" title="0"
                                            class="text-2xl font-bold text-brand-grey-800 dark:text-brand-grey-200">0</a>
                                    </div>
                                    <div class="w-1/3 p-2">
                                        <h3 class="mb-px font-medium text-brand-grey-700 dark:text-brand-grey-500">
                                            Following</h3>
                                        <p class="big-num"><a href="/@Thanhson/following" title="0"
                                                class="text-2xl font-bold text-brand-grey-800 dark:text-brand-grey-200">0</a>
                                        </p>
                                    </div>
                                    <div class="w-1/3 p-2">
                                        <h3 class="mb-px font-medium text-brand-grey-700 dark:text-brand-grey-500">
                                            Appreciations</h3>
                                        <p class="text-2xl font-bold text-brand-grey-800 dark:text-brand-grey-200">0</p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="px-4 py-6 mb-5 bg-white border rounded-lg dark:bg-brand-dark-grey-900 dark:border-brand-grey-700">
                                <h2 class="mb-4 text-xl font-medium text-brand-grey-700 dark:text-brand-grey-400">My
                                    Tech Stack</h2>
                                <div class="flex flex-row items-center"><a href="/settings#techstack"
                                        class="flex flex-row items-center button-transparent small"><svg
                                            class="w-5 h-5 mr-2 fill-current" viewBox="0 0 95 95">
                                            <path
                                                d="M52.7 24.5h-9.4v18.8H24.5v9.4h18.8v18.8h9.4V52.7h18.8v-9.4H52.7V24.5zM48 1C22.056 1 1 22.056 1 48s21.056 47 47 47 47-21.056 47-47S73.944 1 48 1zm0 84.6c-20.727 0-37.6-16.873-37.6-37.6S27.273 10.4 48 10.4 85.6 27.273 85.6 48 68.727 85.6 48 85.6z"
                                                fill-rule="nonzero"></path>
                                        </svg><span>Add Your Skills</span></a></div>
                            </div>
                        </div>
                        <div class="flex-1 w-full max-w-full lg:w-auto lg:pl-5">
                            <div class="flex flex-col flex-grow-0 w-full pb-24">
                                <div class="overflow-hidden border rounded-t-lg dark:border-brand-grey-800">
                                    @foreach ($data as $post)
                                    <div class="bg-white w-full dark:bg-brand-dark-grey-800 dark:border-brand-grey-800 border-b py-5 px-4 md:px-5">
                                        <div class="flex flex-row items-center flex-1 mb-5">
                                            <div
                                                class="flex items-center justify-center flex-shrink-0 w-10 h-10 mr-2 rounded-full bg-brand-grey-200 dark:bg-brand-grey-700">
                                                <a href="/@gsdev" target="_Blank" class="block relative w-full h-full "
                                                    data-title="false"><img data-sizes="auto" loading="lazy"
                                                    src="{{url('public/uploads/')}}/{{$user->image_user}}"
                                                        data-src="{{url('public/uploads/')}}/{{$user->image_user}}"
                                                        data-width="500" data-height="500" alt="Gaurang's photo"
                                                        class="block w-full relative z-20 block overflow-hidden rounded-full lazyautosizes lazyloaded"
                                                        sizes="40px"></a>
                                            </div>
                                            <div class="flex flex-col leading-snug">
                                                <div class="flex flex-row flex-wrap items-center mb-px"><a
                                                        href="" target="_Blank"
                                                        class="inline-block font-semibold text-brand-grey-800 dark:text-brand-grey-100">{{$post->name}}</a>
                                                </div><a
                                                    href="https://gsdev.hashnode.dev/10-vscode-extensions-ckqtio8bz0onhi2s1bw8e0wc7"
                                                    target="_blank"
                                                    class="text-sm text-brand-grey-700 dark:text-brand-grey-500">{{$post->created_at}}</a>
                                            </div>
                                        </div>
                                        <div class="flex flex-row flex-wrap flex-grow-0">
                                            <div class="flex-auto w-full pr-0 md:w-auto md:flex-1 md:pr-5">
                                                <h1
                                                    class="mb-1 text-3xl font-semibold leading-tight tracking-tight text-brand-black dark:text-brand-grey-100">
                                                    <a href="https://gsdev.hashnode.dev/10-vscode-extensions-ckqtio8bz0onhi2s1bw8e0wc7"
                                                        target="_blank" class="block">{{$post->name_post}}</a>
                                                </h1>
                                                <p
                                                    class="max-w-full min-w-full mb-2 text-lg leading-snug tracking-tight break-words text-brand-grey-700 dark:text-brand-grey-400">
                                                    <a aria-label="Post brief"
                                                        href="https://gsdev.hashnode.dev/10-vscode-extensions-ckqtio8bz0onhi2s1bw8e0wc7"
                                                        target="_blank" class="block">{{$post->desc}}</a>
                                                </p>
                                            </div>
                                            <div class="w-full h-auto md:w-72">
                                                <a href="https://gsdev.hashnode.dev/10-vscode-extensions-ckqtio8bz0onhi2s1bw8e0wc7"
                                                    class="block w-full overflow-hidden bg-gray-100 bg-center bg-cover rounded post-cover dark:bg-brand-grey-800 dark:border-brand-grey-800"
                                                    target="_blank"
                                                    aria-label="Cover photo for the post titled: 10 VSCode Extensions"
                                                    style="background-image: url({{url('public/uploads/')}}/{{$post->image_post}});"></a>
                                            </div>
                                        </div>
                                        <div class="flex flex-row items-center justify-between pt-4">
                                            <div class="flex flex-row items-center justify-between w-full">
                                                <div class="flex flex-row items-center">
                                                    <a href="https://gsdev.hashnode.dev/10-vscode-extensions-ckqtio8bz0onhi2s1bw8e0wc7"
                                                        target="_blank" aria-label="Total number of likes"
                                                        class="flex flex-row items-center mr-8 font-semibold text-brand-grey-700 dark:text-brand-grey-300"><svg
                                                            class="w-6 h-6 false fill-current" viewBox="0 0 512 512">
                                                            <path
                                                                d="M496.656 285.683C506.583 272.809 512 256 512 235.468c-.001-37.674-32.073-72.571-72.727-72.571h-70.15c8.72-17.368 20.695-38.911 20.695-69.817C389.819 34.672 366.518 0 306.91 0c-29.995 0-41.126 37.918-46.829 67.228-3.407 17.511-6.626 34.052-16.525 43.951C219.986 134.75 184 192 162.382 203.625c-2.189.922-4.986 1.648-8.032 2.223C148.577 197.484 138.931 192 128 192H32c-17.673 0-32 14.327-32 32v256c0 17.673 14.327 32 32 32h96c17.673 0 32-14.327 32-32v-8.74c32.495 0 100.687 40.747 177.455 40.726 5.505.003 37.65.03 41.013 0 59.282.014 92.255-35.887 90.335-89.793 15.127-17.727 22.539-43.337 18.225-67.105 12.456-19.526 15.126-47.07 9.628-69.405zM32 480V224h96v256H32zm424.017-203.648C472 288 472 336 450.41 347.017c13.522 22.76 1.352 53.216-15.015 61.996 8.293 52.54-18.961 70.606-57.212 70.974-3.312.03-37.247 0-40.727 0-72.929 0-134.742-40.727-177.455-40.727V235.625c37.708 0 72.305-67.939 106.183-101.818 30.545-30.545 20.363-81.454 40.727-101.817 50.909 0 50.909 35.517 50.909 61.091 0 42.189-30.545 61.09-30.545 101.817h111.999c22.73 0 40.627 20.364 40.727 40.727.099 20.363-8.001 36.375-23.984 40.727zM104 432c0 13.255-10.745 24-24 24s-24-10.745-24-24 10.745-24 24-24 24 10.745 24 24z">
                                                            </path>
                                                        </svg><span></span></a>
                                                    <div class="flex flex-row items-center mr-4">
                                                        <a href="https://gsdev.hashnode.dev/10-vscode-extensions-ckqtio8bz0onhi2s1bw8e0wc7#comments"
                                                            target="_blank" aria-label="Total number of comments"
                                                            class="flex flex-row items-center mr-1 font-medium text-brand-grey-700 dark:text-brand-grey-300"><svg
                                                                class="fill-current mr-2 w-6 h-6" viewBox="0 0 512 512">
                                                                <path
                                                                    d="M280 272H136c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h144c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8zm96-96H136c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h240c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8zM256 32C114.6 32 0 125.1 0 240c0 47.6 19.9 91.2 52.9 126.3C38 405.7 7 439.1 6.5 439.5c-6.6 7-8.4 17.2-4.6 26S14.4 480 24 480c61.5 0 110-25.7 139.1-46.3C192 442.8 223.2 448 256 448c141.4 0 256-93.1 256-208S397.4 32 256 32zm0 384c-28.3 0-56.3-4.3-83.2-12.8l-15.2-4.8-13 9.2c-23 16.3-58.5 35.3-102.6 39.6 12-15.1 29.8-40.4 40.8-69.6l7.1-18.7-13.7-14.6C47.3 313.7 32 277.6 32 240c0-97 100.5-176 224-176s224 79 224 176-100.5 176-224 176z">
                                                                </path>
                                                            </svg><span>Comment</span></a>
                                                    </div>
                                                </div>
                                                <div class="flex flex-row items-center">
                                                    <div class="relative"><button aria-label="Bookmark this post"
                                                            data-title="Bookmark"
                                                            class="bookmark-button flex flex-row items-center focus:outline-none p-2 rounded hover:bg-brand-grey-100 dark:hover:bg-brand-dark-grey-700 tooltip-handle  tooltip-left-aligned text-brand-grey-700 dark:text-brand-grey-300 "><svg
                                                                class="w-6 h-6 fill-current" viewBox="0 0 384 512">
                                                                <path
                                                                    d="M336 0H48C21.49 0 0 21.49 0 48v464l192-112 192 112V48c0-26.51-21.49-48-48-48zm16 456.287l-160-93.333-160 93.333V48c0-8.822 7.178-16 16-16h288c8.822 0 16 7.178 16 16v408.287z">
                                                                </path>
                                                            </svg></button></div>
                                                </div>
                                            </div>
                                            <div></div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div
                                    class="w-full p-6 my-5 bg-white border rounded-lg dark:bg-brand-dark-grey-800 dark:border-brand-grey-800">
                                    <p class="text-xl text-center text-brand-grey-700 dark:text-brand-grey-500">You've
                                        reached the end! 👋</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>
