<div class="shadow ring-1 ring-black ring-opacity-5 lg:flex lg:flex-auto lg:flex-col">
    <div class="grid grid-cols-7 gap-px border-b border-gray-300 bg-gray-200 text-center text-xs font-semibold leading-6 text-gray-700 lg:flex-none">
        @php($daysNames = $firstDayOfCalendar)
        <div class="flex justify-center bg-white py-2">
            <span>{{ $daysNames->shortDayName }}</span>
            <span class="sr-only sm:not-sr-only">on</span>
        </div>
        <div class="flex justify-center bg-white py-2">
            <span>{{ $daysNames->addDay()->shortDayName }}</span>
            <span class="sr-only sm:not-sr-only">ue</span>
        </div>
        <div class="flex justify-center bg-white py-2">
            <span>{{ $daysNames->addDay()->shortDayName }}</span>
            <span class="sr-only sm:not-sr-only">ed</span>
        </div>
        <div class="flex justify-center bg-white py-2">
            <span>{{ $daysNames->addDay()->shortDayName }}</span>
            <span class="sr-only sm:not-sr-only">hu</span>
        </div>
        <div class="flex justify-center bg-white py-2">
            <span>{{ $daysNames->addDay()->shortDayName }}</span>
            <span class="sr-only sm:not-sr-only">ri</span>
        </div>
        <div class="flex justify-center bg-white py-2">
            <span>{{ $daysNames->addDay()->shortDayName }}</span>
            <span class="sr-only sm:not-sr-only">at</span>
        </div>
        <div class="flex justify-center bg-white py-2">
            <span>{{ $daysNames->addDay()->shortDayName }}</span>
            <span class="sr-only sm:not-sr-only">un</span>
        </div>
    </div>
    <div class="flex bg-gray-200 text-xs leading-6 text-gray-700 lg:flex-auto">
        <div class="hidden w-full lg:grid lg:grid-cols-7 lg:grid-rows-6 lg:gap-px">
            <!--
              Always include: "relative py-2 px-3"
              Is current month, include: "bg-white"
              Is not current month, include: "bg-gray-50 text-gray-500"
            -->
            <!--
              Is today, include: "flex h-6 w-6 items-center justify-center rounded-full bg-indigo-600 font-semibold text-white"
            -->
            @foreach(range(0,41) as $dayInMonthNumber)
                @php($thisDay = $firstDayOfCalendar->addDays($dayInMonthNumber))
                <div class="relative  px-3 py-2 {{ $thisDay->isCurrentMonth() ? 'bg-white' : 'bg-gray-50 text-gray-500' }}">
                    <time
                        @if($thisDay->isToday())
                            class="flex h-6 w-6 items-center justify-center rounded-full bg-indigo-600 font-semibold text-white"
                        @endif
                        datetime="2021-12-28">{{ $thisDay->day }}</time>
{{--                    <ol class="mt-2">--}}
{{--                        <li>--}}
{{--                            <a--}}
{{--                                href="#"--}}
{{--                                class="group flex"--}}
{{--                            >--}}
{{--                                <p class="flex-auto truncate font-medium text-gray-900 group-hover:text-indigo-600">--}}
{{--                                    Date night--}}
{{--                                </p>--}}
{{--                                <time--}}
{{--                                    datetime="2022-01-08T18:00"--}}
{{--                                    class="ml-3 hidden flex-none text-gray-500 group-hover:text-indigo-600 xl:block"--}}
{{--                                >6PM--}}
{{--                                </time>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ol>--}}
                </div>
            @endforeach


        </div>
        <div class="isolate grid w-full grid-cols-7 grid-rows-6 gap-px lg:hidden">
            <!--
              Always include: "flex h-14 flex-col py-2 px-3 hover:bg-gray-100 focus:z-10"
              Is current month, include: "bg-white"
              Is not current month, include: "bg-gray-50"
              Is selected or is today, include: "font-semibold"
              Is selected, include: "text-white"
              Is not selected and is today, include: "text-indigo-600"
              Is not selected and is current month, and is not today, include: "text-gray-900"
              Is not selected, is not current month, and is not today: "text-gray-500"
            -->
            <button
                type="button"
                class="flex h-14 flex-col bg-gray-50 px-3 py-2 text-gray-500 hover:bg-gray-100 focus:z-10"
            >
                <!--
                  Always include: "ml-auto"
                  Is selected, include: "flex h-6 w-6 items-center justify-center rounded-full"
                  Is selected and is today, include: "bg-indigo-600"
                  Is selected and is not today, include: "bg-gray-900"
                -->
                <time
                    datetime="2021-12-27"
                    class="ml-auto"
                >27
                </time>
                <span class="sr-only">0 events</span>
            </button>
            <button
                type="button"
                class="flex h-14 flex-col bg-gray-50 px-3 py-2 text-gray-500 hover:bg-gray-100 focus:z-10"
            >
                <time
                    datetime="2021-12-28"
                    class="ml-auto"
                >28
                </time>
                <span class="sr-only">0 events</span>
            </button>
            <button
                type="button"
                class="flex h-14 flex-col bg-gray-50 px-3 py-2 text-gray-500 hover:bg-gray-100 focus:z-10"
            >
                <time
                    datetime="2021-12-29"
                    class="ml-auto"
                >29
                </time>
                <span class="sr-only">0 events</span>
            </button>
            <button
                type="button"
                class="flex h-14 flex-col bg-gray-50 px-3 py-2 text-gray-500 hover:bg-gray-100 focus:z-10"
            >
                <time
                    datetime="2021-12-30"
                    class="ml-auto"
                >30
                </time>
                <span class="sr-only">0 events</span>
            </button>
            <button
                type="button"
                class="flex h-14 flex-col bg-gray-50 px-3 py-2 text-gray-500 hover:bg-gray-100 focus:z-10"
            >
                <time
                    datetime="2021-12-31"
                    class="ml-auto"
                >31
                </time>
                <span class="sr-only">0 events</span>
            </button>
            <button
                type="button"
                class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10"
            >
                <time
                    datetime="2022-01-01"
                    class="ml-auto"
                >1
                </time>
                <span class="sr-only">0 events</span>
            </button>
            <button
                type="button"
                class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10"
            >
                <time
                    datetime="2022-01-02"
                    class="ml-auto"
                >2
                </time>
                <span class="sr-only">0 events</span>
            </button>
            <button
                type="button"
                class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10"
            >
                <time
                    datetime="2022-01-03"
                    class="ml-auto"
                >3
                </time>
                <span class="sr-only">2 events</span>
                <span class="-mx-0.5 mt-auto flex flex-wrap-reverse">
            <span class="mx-0.5 mb-1 h-1.5 w-1.5 rounded-full bg-gray-400"></span>
            <span class="mx-0.5 mb-1 h-1.5 w-1.5 rounded-full bg-gray-400"></span>
          </span>
            </button>
            <button
                type="button"
                class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10"
            >
                <time
                    datetime="2022-01-04"
                    class="ml-auto"
                >4
                </time>
                <span class="sr-only">0 events</span>
            </button>
            <button
                type="button"
                class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10"
            >
                <time
                    datetime="2022-01-05"
                    class="ml-auto"
                >5
                </time>
                <span class="sr-only">0 events</span>
            </button>
            <button
                type="button"
                class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10"
            >
                <time
                    datetime="2022-01-06"
                    class="ml-auto"
                >6
                </time>
                <span class="sr-only">0 events</span>
            </button>
            <button
                type="button"
                class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10"
            >
                <time
                    datetime="2022-01-07"
                    class="ml-auto"
                >7
                </time>
                <span class="sr-only">1 event</span>
                <span class="-mx-0.5 mt-auto flex flex-wrap-reverse">
            <span class="mx-0.5 mb-1 h-1.5 w-1.5 rounded-full bg-gray-400"></span>
          </span>
            </button>
            <button
                type="button"
                class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10"
            >
                <time
                    datetime="2022-01-08"
                    class="ml-auto"
                >8
                </time>
                <span class="sr-only">0 events</span>
            </button>
            <button
                type="button"
                class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10"
            >
                <time
                    datetime="2022-01-09"
                    class="ml-auto"
                >9
                </time>
                <span class="sr-only">0 events</span>
            </button>
            <button
                type="button"
                class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10"
            >
                <time
                    datetime="2022-01-10"
                    class="ml-auto"
                >10
                </time>
                <span class="sr-only">0 events</span>
            </button>
            <button
                type="button"
                class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10"
            >
                <time
                    datetime="2022-01-11"
                    class="ml-auto"
                >11
                </time>
                <span class="sr-only">0 events</span>
            </button>
            <button
                type="button"
                class="flex h-14 flex-col bg-white px-3 py-2 font-semibold text-indigo-600 hover:bg-gray-100 focus:z-10"
            >
                <time
                    datetime="2022-01-12"
                    class="ml-auto"
                >12
                </time>
                <span class="sr-only">1 event</span>
                <span class="-mx-0.5 mt-auto flex flex-wrap-reverse">
            <span class="mx-0.5 mb-1 h-1.5 w-1.5 rounded-full bg-gray-400"></span>
          </span>
            </button>
            <button
                type="button"
                class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10"
            >
                <time
                    datetime="2022-01-13"
                    class="ml-auto"
                >13
                </time>
                <span class="sr-only">0 events</span>
            </button>
            <button
                type="button"
                class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10"
            >
                <time
                    datetime="2022-01-14"
                    class="ml-auto"
                >14
                </time>
                <span class="sr-only">0 events</span>
            </button>
            <button
                type="button"
                class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10"
            >
                <time
                    datetime="2022-01-15"
                    class="ml-auto"
                >15
                </time>
                <span class="sr-only">0 events</span>
            </button>
            <button
                type="button"
                class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10"
            >
                <time
                    datetime="2022-01-16"
                    class="ml-auto"
                >16
                </time>
                <span class="sr-only">0 events</span>
            </button>
            <button
                type="button"
                class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10"
            >
                <time
                    datetime="2022-01-17"
                    class="ml-auto"
                >17
                </time>
                <span class="sr-only">0 events</span>
            </button>
            <button
                type="button"
                class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10"
            >
                <time
                    datetime="2022-01-18"
                    class="ml-auto"
                >18
                </time>
                <span class="sr-only">0 events</span>
            </button>
            <button
                type="button"
                class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10"
            >
                <time
                    datetime="2022-01-19"
                    class="ml-auto"
                >19
                </time>
                <span class="sr-only">0 events</span>
            </button>
            <button
                type="button"
                class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10"
            >
                <time
                    datetime="2022-01-20"
                    class="ml-auto"
                >20
                </time>
                <span class="sr-only">0 events</span>
            </button>
            <button
                type="button"
                class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10"
            >
                <time
                    datetime="2022-01-21"
                    class="ml-auto"
                >21
                </time>
                <span class="sr-only">0 events</span>
            </button>
            <button
                type="button"
                class="flex h-14 flex-col bg-white px-3 py-2 font-semibold text-white hover:bg-gray-100 focus:z-10"
            >
                <time
                    datetime="2022-01-22"
                    class="ml-auto flex h-6 w-6 items-center justify-center rounded-full bg-gray-900"
                >22
                </time>
                <span class="sr-only">2 events</span>
                <span class="-mx-0.5 mt-auto flex flex-wrap-reverse">
            <span class="mx-0.5 mb-1 h-1.5 w-1.5 rounded-full bg-gray-400"></span>
            <span class="mx-0.5 mb-1 h-1.5 w-1.5 rounded-full bg-gray-400"></span>
          </span>
            </button>
            <button
                type="button"
                class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10"
            >
                <time
                    datetime="2022-01-23"
                    class="ml-auto"
                >23
                </time>
                <span class="sr-only">0 events</span>
            </button>
            <button
                type="button"
                class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10"
            >
                <time
                    datetime="2022-01-24"
                    class="ml-auto"
                >24
                </time>
                <span class="sr-only">0 events</span>
            </button>
            <button
                type="button"
                class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10"
            >
                <time
                    datetime="2022-01-25"
                    class="ml-auto"
                >25
                </time>
                <span class="sr-only">0 events</span>
            </button>
            <button
                type="button"
                class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10"
            >
                <time
                    datetime="2022-01-26"
                    class="ml-auto"
                >26
                </time>
                <span class="sr-only">0 events</span>
            </button>
            <button
                type="button"
                class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10"
            >
                <time
                    datetime="2022-01-27"
                    class="ml-auto"
                >27
                </time>
                <span class="sr-only">0 events</span>
            </button>
            <button
                type="button"
                class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10"
            >
                <time
                    datetime="2022-01-28"
                    class="ml-auto"
                >28
                </time>
                <span class="sr-only">0 events</span>
            </button>
            <button
                type="button"
                class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10"
            >
                <time
                    datetime="2022-01-29"
                    class="ml-auto"
                >29
                </time>
                <span class="sr-only">0 events</span>
            </button>
            <button
                type="button"
                class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10"
            >
                <time
                    datetime="2022-01-30"
                    class="ml-auto"
                >30
                </time>
                <span class="sr-only">0 events</span>
            </button>
            <button
                type="button"
                class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10"
            >
                <time
                    datetime="2022-01-31"
                    class="ml-auto"
                >31
                </time>
                <span class="sr-only">0 events</span>
            </button>
            <button
                type="button"
                class="flex h-14 flex-col bg-gray-50 px-3 py-2 text-gray-500 hover:bg-gray-100 focus:z-10"
            >
                <time
                    datetime="2022-02-01"
                    class="ml-auto"
                >1
                </time>
                <span class="sr-only">0 events</span>
            </button>
            <button
                type="button"
                class="flex h-14 flex-col bg-gray-50 px-3 py-2 text-gray-500 hover:bg-gray-100 focus:z-10"
            >
                <time
                    datetime="2022-02-02"
                    class="ml-auto"
                >2
                </time>
                <span class="sr-only">0 events</span>
            </button>
            <button
                type="button"
                class="flex h-14 flex-col bg-gray-50 px-3 py-2 text-gray-500 hover:bg-gray-100 focus:z-10"
            >
                <time
                    datetime="2022-02-03"
                    class="ml-auto"
                >3
                </time>
                <span class="sr-only">0 events</span>
            </button>
            <button
                type="button"
                class="flex h-14 flex-col bg-gray-50 px-3 py-2 text-gray-500 hover:bg-gray-100 focus:z-10"
            >
                <time
                    datetime="2022-02-04"
                    class="ml-auto"
                >4
                </time>
                <span class="sr-only">1 event</span>
                <span class="-mx-0.5 mt-auto flex flex-wrap-reverse">
            <span class="mx-0.5 mb-1 h-1.5 w-1.5 rounded-full bg-gray-400"></span>
          </span>
            </button>
            <button
                type="button"
                class="flex h-14 flex-col bg-gray-50 px-3 py-2 text-gray-500 hover:bg-gray-100 focus:z-10"
            >
                <time
                    datetime="2022-02-05"
                    class="ml-auto"
                >5
                </time>
                <span class="sr-only">0 events</span>
            </button>
            <button
                type="button"
                class="flex h-14 flex-col bg-gray-50 px-3 py-2 text-gray-500 hover:bg-gray-100 focus:z-10"
            >
                <time
                    datetime="2022-02-06"
                    class="ml-auto"
                >6
                </time>
                <span class="sr-only">0 events</span>
            </button>
        </div>
    </div>
</div>
