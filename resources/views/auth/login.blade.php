<x-guest-layout>
    <div class="min-h-full flex">
        <div class="flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
            <div class="mx-auto w-full max-w-sm lg:w-96">
                <div>
{{--                    <img class="h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow">--}}
                    <h2 class="mt-6 text-3xl font-extrabold text-gray-900">Sign in to your account</h2>
                </div>

                <div class="mt-8">
                    <div>
                        <div>

                            <div class="mt-1">
                                <div>
                                    <x-auth-session-status class="mb-4" :status="session('status')" />
                                    <a  href="{{ url('auth/google') }}"  class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                        <span class="sr-only">Sign in with Google</span>
                                        <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                                            <defs>
                                                <path id="a" d="M44.5 20H24v8.5h11.8C34.7 33.9 30.1 37 24 37c-7.2 0-13-5.8-13-13s5.8-13 13-13c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4C34.6 4.1 29.6 2 24 2 11.8 2 2 11.8 2 24s9.8 22 22 22c11 0 21-8 21-22 0-1.3-.2-2.7-.5-4z"/>
                                            </defs>
                                            <clipPath id="b">
                                                <use xlink:href="#a" overflow="visible"/>
                                            </clipPath>
                                            <path fill="#FBBC05" d="M0 37V11l17 13z" clip-path="url(#b)"/>
                                            <path fill="#EA4335" d="m0 11 17 13 7-6.1L48 14V0H0z" clip-path="url(#b)"/>
                                            <path fill="#34A853" d="m0 37 30-23 7.9 1L48 0v48H0z" clip-path="url(#b)"/>
                                            <path fill="#4285F4" d="M48 48 17 24l-4-3 35-10z" clip-path="url(#b)"/>
                                        </svg>
                                        Sign in with Google
                                    </a>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="hidden lg:block relative w-0 flex-1">
            <img class="absolute inset-0 h-full w-full object-cover" src="https://images.unsplash.com/photo-1509062522246-3755977927d7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2132&q=80" alt="">
        </div>
    </div>
</x-guest-layout>
