@extends('layout.user_layout')

@section('profile')

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
                        </svg><span>Thông tin thêm</span></a></div>
                <p class="mb-2 text-sm italic leading-snug text-brand-grey-600">
                    {{$desc}}
                </p>
            </div>
            <div class="mb-2"><span class="inline-block w-20 text-brand-grey-600">Tham gia:
                </span><span class="font-medium text-brand-grey-800 dark:text-brand-grey-400">{{$created_at->format('d-m-Y')}}</span></div>
            <div class="pt-5 mt-5 border-t dark:border-brand-grey-800">
                <h2 class="mb-2 font-semibold text-brand-grey-700 dark:text-brand-grey-500">
                    I am
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
        <div
            class="px-4 py-6 mb-5 bg-white border rounded-lg dark:bg-brand-dark-grey-900 dark:border-brand-grey-700">
            <h2 class="mb-4 text-xl font-medium text-brand-grey-700 dark:text-brand-grey-400">Recent
                Activity</h2>
            <div class="widget-body recent-activity-body">
                <div class="flex flex-row items-start mb-4"><a href="/@Thanhson"
                        class="mt-2 mr-4 text-accent-blue-500"><svg class="w-5 h-5 fill-current"
                            viewBox="0 0 500 500">
                            <g transform="translate(0 20)" fill="none" fill-rule="evenodd">
                                <path
                                    d="M145.738787 47.7396292h27.922846c4.814654 0 8.753193 3.9419774 8.753193 8.760457v6.9244609c0 4.8181008-3.938539 8.7600684-8.753193 8.7600684h-27.922846c-4.814276 0-8.752814-3.9419773-8.752814-8.7600684v-6.9244609c0-4.8184796 3.938538-8.760457 8.752814-8.760457zm-39.791158 29.0504793h.008024c1.245216 5.5389548 3.16252 10.7857099 5.64837 15.6218388.048525.0944575.097432.1885321.146338.2826078-2.559588-4.9137005-4.530386-10.2572014-5.802727-15.9044029l-.000005-.0000437zm107.504853 0c1.084744-4.8161872 1.661306-9.8534136 1.661306-15.0336898 0-1.9170645-.079092-3.8146342-.233454-5.6888624-1.195545-14.5059585-6.915363-27.6003595-15.553183-37.4522189C189.243494 7.1144267 175.237089.00030112 159.699919.00030112c-15.537073 0-29.543576 7.114145-39.627232 18.61503628-8.637801 9.8518594-14.357628 22.9462604-15.553184 37.4522189-.154362 1.8742379-.233454 3.7717979-.233454 5.6888624 0 5.1802471.576567 10.2174734 1.661307 15.0336898H88.1219481V130.82366H231.278004V76.7901085h-17.825522zm-53.752523 46.7224375c15.537073 0 29.543575-7.114145 39.627232-18.615036 3.062034-3.492634 5.757647-7.3929211 8.015004-11.619415.015665-.0294463.031713-.0592749.047378-.0891036-2.701339 5.0831126-6.036568 9.6969976-9.88189 13.7005196-9.916635 10.324904-23.181871 16.623004-37.807745 16.623004l.000021.000031zm47.689635-30.3235232c2.683763-5.0494653 4.742061-10.5620093 6.054522-16.3989143h.008406c-1.31514 5.837245-3.376485 11.3497695-6.062927 16.3989143h-.000001z"
                                    fill="#FFD3B3"></path>
                                <path
                                    d="M326.510332 31.9591698c0-5.7221309-4.635074-10.3612324-10.352193-10.3612324-5.717139 0-10.352193 4.6391209-10.352193 10.3612324V446.011186c0 5.722131 4.635073 10.361233 10.352193 10.361233 5.717139 0 10.352193-4.639121 10.352193-10.361233V31.9591698z"
                                    fill="#333333" fill-rule="nonzero"></path>
                                <path
                                    d="M315.632033 56.0077118c31.147224-1.7055932 58.752523 2.1908767 83.66217 5.7072208 33.924592 4.7890284 62.475155 8.8193496 85.169157-4.330894l15.528339-8.997941V199.763685l-5.580736 2.923591c-33.798137 17.70712-63.726514 10.87449-95.060171 3.720938-25.244371-5.763433-51.511258-11.760163-80.200504-2.99243l-13.344721 4.0785V56.5461182l9.826475-.5384463-.000009.0000399zm80.831715 26.1865678c-21.280667-3.0039016-44.603163-6.2953795-69.953707-5.8896393V180.378353c28.312888-5.323268 53.264655.370564 77.369953 5.873952 25.686821 5.864394 50.300757 11.480221 75.407221.785871V82.2427545c-24.704484 8.1527938-51.734763 4.3400732-82.823467-.0489496v.0004747zM84.4674362 56.0669638h39.9160908l.754619 9.5516752c.847083 10.7226696 5.166178 20.2069724 11.635675 26.9425651 6.101524 6.3527471 14.153242 10.2281579 22.927407 10.2281579 8.773826 0 16.825116-3.8754303 22.92663-10.2281579 6.468702-6.7351653 10.788141-16.2198955 11.635676-26.9425651l.755382-9.5516752h39.915324c5.230746 0 9.797069 2.5511192 12.93818 6.6613528 2.535898 3.3171019 4.11086 7.7382532 4.11086 12.460016v57.2358794c0 4.722491-1.574952 9.142875-4.11086 12.460016-3.14112 4.110243-7.707425 6.661353-12.93818 6.661353H84.4674314c-5.2303669 0-9.7966809-2.551498-12.9385676-6.661353-2.5355201-3.317102-4.1104716-7.737864-4.1104716-12.460016V75.1883326c0-4.7224913 1.5749515-9.1428752 4.1108598-12.460016 3.1407415-4.1098548 7.7070458-6.6613528 12.9381794-6.6613528h.0000048zm21.4888398 20.7225619H88.1228128v54.0335513H231.278869V76.7895257h-17.833851c-2.633337 11.7127609-8.271002 22.1183837-15.936433 30.0994343-9.916634 10.324904-23.181871 16.623003-37.807356 16.623003-14.625874 0-27.891499-6.29806-37.808133-16.623003-7.665402-7.9810895-13.303474-18.3862849-15.93682-30.0994343z"
                                    fill="#333333" fill-rule="nonzero"></path>
                                <path
                                    d="M159.700355 0c15.537073 0 29.543576 7.11414501 39.627233 18.6150362 9.753882 11.1246119 15.786587 26.3838479 15.786587 43.1410911 0 16.7568546-6.033511 32.0168676-15.786587 43.1410907-10.083657 11.500911-24.090062 18.615037-39.627233 18.615037-15.537072 0-29.543575-7.114145-39.627232-18.615037-9.753105-11.1242231-15.786587-26.3842361-15.786587-43.1410907 0-16.7572432 6.032744-32.0164792 15.786587-43.1410911C130.15678 7.11412558 144.163185 0 159.700355 0zm24.099282 32.2138563c-6.224553-7.0996137-14.75-11.4912944-24.099282-11.4912944-9.348864 0-17.874708 4.3917001-24.099281 11.4912944-6.555435 7.4766701-10.610152 17.9155712-10.610152 29.542271 0 11.6266997 4.055076 22.0655425 10.610152 29.5422709 6.224553 7.0996137 14.750388 11.4912948 24.099281 11.4912948 9.349244 0 17.874709-4.3917005 24.099282-11.4912948 6.555057-7.4766701 10.610152-17.9155712 10.610152-29.5422709 0-11.6266998-4.054688-22.0655426-10.610152-29.542271zM248.75218 143.627823c7.667692 5.965735 15.947108 12.667981 24.095109 19.494589 23.433715 19.634559 47.001067 40.625892 51.720982 47.250946l1.900873 5.989833.000382 58.804989v20.792499l-16.538917-12.536072-76.563373-58.034033v98.360848H85.3200699v-84.654889l-36.1143246 52.889308-7.014703 10.272937-8.7963703-8.775367-27.22437891-27.160146L0 260.167079l4.99768051-7.119109c2.48890722-3.545406 7.43652949-10.909264 13.97709629-20.644465 15.4752523-23.034265 39.1771157-58.310867 57.8175466-82.877426 2.2936626 1.296783 4.8899262 2.019939 7.6745632 2.019939h12.380726c-13.0440606 19.551509-42.4970885 65.217318-60.7270963 92.35153-3.645099 5.425375-6.8313082 10.16774-9.3106561 13.842433l12.3459822 12.316937 47.9841809-70.272583 18.8846077 5.828066v97.41709H212.66283V183.744139l16.579484 12.566669 76.60394 58.064631-.000382-34.265919c-6.70789-7.22581-26.372283-24.456506-46.262131-41.12186-12.411297-10.398726-24.477194-20.472829-32.875777-27.441642h8.225912c5.230746 0 9.79707-2.551119 12.93818-6.661353.307961-.40307.601402-.822583.880325-1.256628l-.000201-.000214z"
                                    fill="#333333" fill-rule="nonzero"></path>
                                <path
                                    d="M183.220348 303.029307h50.146739v156.885507H172.868154V303.029307h10.352194zm29.442352 20.722562h-19.090159v115.440383H212.6627V323.751869zM95.6727934 303.029307H145.819533v156.885507H85.3206001V303.029307h10.3521933zm29.4423526 20.722562h-19.090159v115.440383h19.090159V323.751869zM135.121551 177.546195h59.51019v58.100473h-69.862383v-58.100473h10.352193zm38.805707 20.722562h-28.453514V214.9243h28.453514v-16.655543z"
                                    fill="#333333" fill-rule="nonzero"></path>
                                <rect fill="#333333" x="136.985876" y="47.7396292"
                                    width="45.4287655" height="24.4448504" rx="8.75281444"></rect>
                                <path
                                    d="M145.738787 47.7396292h27.922846c4.814654 0 8.753193 3.9419774 8.753193 8.760457v6.9244609c0 4.8181008-3.938539 8.7600684-8.753193 8.7600684h-27.922846c-4.814276 0-8.752814-3.9419773-8.752814-8.7600684v-6.9244609c0-4.8184796 3.938538-8.760457 8.752814-8.760457zm38.060656-15.5254815c-6.224553-7.0996137-14.75-11.4912943-24.099282-11.4912943-9.348864 0-17.874708 4.3917-24.099281 11.4912943-6.555435 7.4766701-10.610152 17.9155712-10.610152 29.542271 0 3.7916813.431374 7.457554 1.239868 10.9349083 1.819109 7.8024979 5.53718 14.6592366 10.542508 19.8704987 6.101524 6.3527471 14.153241 10.2281583 22.927019 10.2281583l.387816-.002677c8.623282-.112048 16.527465-3.9664455 22.539208-10.2255356 5.087849-5.2976534 8.846419-12.2963445 10.631114-20.260202.014137-.0634816.028275-.1265808.04203-.190062.724434-3.3044841 1.10919-6.7734071 1.10919-10.3551129 0-11.6266998-4.054687-22.0655426-10.610151-29.542271l.000113.0000242z"
                                    fill="#EBE5DF"></path>
                                <path
                                    d="M226.708314 151.546222H96.8480651c-13.0440605 19.551509-42.4970885 65.217318-60.7270963 92.35153-3.6450989 5.425375-6.8313082 10.16774-9.310656 13.842433l12.3459821 12.316937 47.9841809-70.272583 18.8846082 5.828066v97.41709H212.663185V183.744343l16.579484 12.566669 76.563762 58.034033v-34.278157c-6.74572-7.250667-26.371506-24.446502-46.222438-41.079024-12.411297-10.398726-24.477193-20.472829-32.875776-27.441642h.000097zm-32.076087 25.999876v58.100473h-69.862384v-58.100473h69.862384zM212.663283 323.750995h-19.090645v115.441354h19.090645zM125.114758 439.192349V323.750995h-19.089674v115.441354z"
                                    fill="#F45A52"></path>
                                <path fill="#FFD3B3"
                                    d="M145.473842 214.923523h28.453998v-16.655641h-28.453998z">
                                </path>
                                <path
                                    d="M326.510332 76.304922v104.073713c28.312888-5.323268 53.264655.370564 77.369954 5.873952 25.68682 5.864394 50.300757 11.480221 75.40722.785871V82.2430362c-24.704484 8.1527938-51.734763 4.3400732-82.823467-.0489496-21.280667-3.0039016-44.603163-6.2953795-69.953707-5.8896393v.0004747z"
                                    fill="#EBE5DF"></path>
                            </g>
                        </svg></a>
                    <div class="flex-1">
                        <p class="mb-1 text-base text-brand-grey-800">Joined Hashnode</p>
                        <p class="text-sm text-brand-grey-600"><a href="/@Thanhson">June 16,
                                2021</a></p>
                    </div>
                </div>
            </div>
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
                                    src="{{url('public/uploads/')}}/{{$post->image_user}}"
                                    data-src="{{url('public/uploads/')}}/{{$post->image_user}}"
                                    data-width="500" data-height="500" alt="Gaurang's photo"
                                    class="block w-full relative z-20 block overflow-hidden rounded-full lazyautosizes lazyloaded"
                                    sizes="40px"></a>
                        </div>
                        <div class="flex flex-col leading-snug">
                            <div class="flex flex-row flex-wrap items-center mb-px"><a
                                    href="/@gsdev" target="_Blank"
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
                                <div class="relative">
                                    <button aria-label="Bookmark this post"
                                        data-title="Bookmark"
                                        class="bookmark-button flex flex-row items-center focus:outline-none p-2 rounded hover:bg-brand-grey-100 dark:hover:bg-brand-dark-grey-700 tooltip-handle  tooltip-left-aligned text-brand-grey-700 dark:text-brand-grey-300 ">
                                        <svg class="w-6 h-6 fill-current" viewBox="0 0 384 512">
                                            <path
                                                d="M336 0H48C21.49 0 0 21.49 0 48v464l192-112 192 112V48c0-26.51-21.49-48-48-48zm16 456.287l-160-93.333-160 93.333V48c0-8.822 7.178-16 16-16h288c8.822 0 16 7.178 16 16v408.287z">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
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

@stop