<x-app-layout>

    {{--    <div--}}
    {{--        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0 bg-[#0f0]">--}}
    {{--        @if (Route::has('login'))--}}
    {{--            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">--}}
    {{--                @auth--}}
    {{--                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>--}}
    {{--                @else--}}
    {{--                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in!</a>--}}

    {{--                    @if (Route::has('register'))--}}
    {{--                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>--}}
    {{--                    @endif--}}
    {{--                @endauth--}}
    {{--            </div>--}}
    {{--        @endif--}}
    {{--    </div>--}}

    <div class="welcome">

        <p class="">moregetsdone.com is an information tool that makes you really powerful!
        </p>
        <p class=""> It's like an easy-to-use, cloud-based project management application.
        </p>
        <p class="">
            If something needs to be done, create a task. The recipient marks the task as finished
            when they've done it.
        </p>
        <p class="">
            Your homepage will show all of your open tasks.
        </p>
        {{--    <p>--}}
        {{--        <a href="{{ URL::to('info/screenshots') }}">Screenshots</a>--}}
        {{--    </p>--}}
        <p>
            Projects can be created which are composed of multiple tasks.
        </p>
        <p>
            Projects can be saved as templates and re-used, capturing knowledge and saving
            re-inventing the wheel.
        </p>
        <p>
            Projects and tasks can be made recurring and automatically put in peoples' workflows.
        </p>
        <p>
            Metrics are automatically, effortlessly created about what's been done and who's doing
            what - how much is actually getting accomplished.
        </p>
        <p>
            Organizations define their mission statement and key metrics - what's most important -
            and projects and tasks can be associated with key metrics.
        </p>
        <p>
            Tasks can be made public so that anyone do take them - crowdsourcing magically
            get more done.
        </p>
        <p>
            You and the people you do things with get more done with better communication and less
            stress.
        </p>
        <p>
            <i>"People do what is measured."</i>
        </p>
        {{--    <p>--}}
        {{--        If this is your first time to the site, create a task, put your email address in the--}}
        {{--        recipient field, press the "Create" button, and this will create a task and an account--}}
        {{--        for you.--}}
        {{--    </p>--}}
        <p>
            Mess around with this: you'll love what you discover! &#128578;
        </p>

    </div>

</x-app-layout>
