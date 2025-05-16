<div class="p-2 bg-gray-100 dark:bg-gray-800 rounded shadow">
  <div class="font-semibold text-gray-900 dark:text-gray-100">
    Chat Answer
  </div>

    @if($calls->isNotEmpty())
    <div class="my-4 gap-4">
      @foreach($calls as $call)
        @if($call instanceof App\Models\GraphImageToolCall)
        <div x-data="{ selectedTab: 'output' }" class="flex flex-col h-full mb-4">
          <div class="w-1/2 relative flex flex-col flex-1 p-4 border border-gray-200 dark:border-gray-700 rounded-lg shadow cursor-default transition transform hover:shadow-lg hover:-translate-y-1 duration-300 min-h-[420px] bg-white dark:bg-gray-800">
            <h2 class="text-xl font-semibold cursor-pointer transition-colors duration-300 pr-20 text-gray-900 dark:text-gray-100">
              Image Tool Call
            </h2>
            <!-- Tabs -->
            <div class="w-full">
              <div class="flex gap-2 overflow-x-auto border-b border-gray-200 dark:border-gray-700" role="tablist">
                <button type="button" role="tab" aria-controls="tabpaneloutput"
                  @click="selectedTab = 'output'"
                  :aria-selected="selectedTab === 'output'"
                  :tabindex="selectedTab === 'output' ? '0' : '-1'"
                  x-bind:class="selectedTab === 'output' ? 'font-bold text-gray-900 dark:text-gray-100 border-b-2 border-gray-200 dark:border-gray-700' : 'text-gray-600 dark:text-gray-300 font-medium hover:border-b-2 hover:border-gray-200 dark:hover:border-gray-700 hover:text-gray-100'"
                  class="px-4 py-2 text-sm">
                  Output
                </button>
                <button type="button" role="tab" aria-controls="tabpanelinput"
                  @click="selectedTab = 'input'"
                  :aria-selected="selectedTab === 'input'"
                  :tabindex="selectedTab === 'input' ? '0' : '-1'"
                  x-bind:class="selectedTab === 'input' ? 'font-bold text-gray-900 dark:text-gray-100 border-b-2 border-gray-200 dark:border-gray-700' : 'text-gray-600 dark:text-gray-300 font-medium hover:border-b-2 hover:border-gray-200 dark:hover:border-gray-700 hover:text-gray-100'"
                  class="px-4 py-2 text-sm">
                  Input
                </button>
              </div>
              <div class="px-2 py-4 text-gray-700 dark:text-gray-300">
                <div x-cloak x-show="selectedTab === 'output'" id="tabpaneloutput" role="tabpanel">
                  <img src="{{ $call->image }}" alt="Graph Image" class="h-auto">
                  <p class="mt-2"><strong>planar:</strong> {{ $call->isPlanar ? 'Ja' : 'Nein' }}</p>
                </div>
                <div x-cloak x-show="selectedTab === 'input'" id="tabpanelinput" role="tabpanel">
                  <p><strong>Gerichtet:</strong> {{ $call->isDirected ? 'Ja' : 'Nein' }}</p>
                  <p><strong>Edges:</strong>
                    @foreach($call->edges as $edge)
                      {{ $edge }}
                    @endforeach
                  </p>
                </div>
              </div>
            </div>
            <!-- End Tabs -->
          </div>
        </div>
        @endif

        @if($call instanceof App\Models\RunCodeToolCall)
            <div x-data="{ selectedTab: 'output' }" class="flex flex-col h-full mb-4">
                <div class="relative flex flex-col flex-1 p-4 border border-gray-200 dark:border-gray-700 rounded-lg shadow cursor-default transition transform hover:shadow-lg hover:-translate-y-1 duration-300 min-h-[420px] bg-white dark:bg-gray-800">
                    <h2 class="text-xl font-semibold cursor-pointer transition-colors duration-300 pr-20 text-gray-900 dark:text-gray-100">
                        Run Code Tool Call
                    </h2>
                    <!-- Tabs -->
                    <div class="w-full">
                        <div class="flex gap-2 overflow-x-auto border-b border-gray-200 dark:border-gray-700" role="tablist">
                            <button type="button" role="tab" aria-controls="tabpaneloutput"
                                @click="selectedTab = 'output'"
                                :aria-selected="selectedTab === 'output'"
                                :tabindex="selectedTab === 'output' ? '0' : '-1'"
                                x-bind:class="selectedTab === 'output' ? 'font-bold text-gray-900 dark:text-gray-100 border-b-2 border-gray-200 dark:border-gray-700' : 'text-gray-600 dark:text-gray-300 font-medium hover:border-b-2 hover:border-gray-200 dark:hover:border-gray-700 hover:text-gray-100'"
                                class="px-4 py-2 text-sm">
                                Output
                            </button>
                            <button type="button" role="tab" aria-controls="tabpanelinput"
                                @click="selectedTab = 'input'"
                                :aria-selected="selectedTab === 'input'"
                                :tabindex="selectedTab === 'input' ? '0' : '-1'"
                                x-bind:class="selectedTab === 'input' ? 'font-bold text-gray-900 dark:text-gray-100 border-b-2 border-gray-200 dark:border-gray-700' : 'text-gray-600 dark:text-gray-300 font-medium hover:border-b-2 hover:border-gray-200 dark:hover:border-gray-700 hover:text-gray-100'"
                                class="px-4 py-2 text-sm">
                                Input
                            </button>
                        </div>
                        <div class="px-2 py-4 text-gray-700 dark:text-gray-300">
                            <!-- Output Tab -->
                            <div x-cloak x-show="selectedTab === 'output'" id="tabpaneloutput" role="tabpanel">
                                <pre class="p-2 bg-gray-100 dark:bg-gray-900 rounded-md text-sm text-gray-800 dark:text-gray-200">{{ $call->stdout }}</pre>
                                @if($call->stderr)
                                    <p class="mt-2 text-red-600 dark:text-red-400"><strong>Error:</strong> {{ $call->stderr }}</p>
                                @endif

                                <!-- Display Images -->
                                @if(!empty($call->images))
                                    <div class="mt-4">
                                        <h3 class="text-md font-semibold">Generated Images:</h3>
                                        <div class="grid grid-cols-2 gap-2 mt-2">
                                            @foreach($call->images as $image)
                                                <img src="{{ $image }}" class="rounded-md border border-gray-300 dark:border-gray-600 shadow-md">
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                            </div>

                            <!-- Input Tab -->
                            <div x-cloak x-show="selectedTab === 'input'" id="tabpanelinput" role="tabpanel">
                                <h3 class="text-md font-semibold">Code:</h3>
                                <pre class="p-2 bg-gray-100 dark:bg-gray-900 rounded-md text-sm text-gray-800 dark:text-gray-200">{{ $call->code }}</pre>
                            </div>
                        </div>
                    </div>
                    <!-- End Tabs -->
                </div>
            </div>
        @endif
      @endforeach
    </div>
    @endif

  @if($message->chatAnswer)
    <div class="markdown-content text-gray-900 dark:text-gray-100">
      {!! Str::markdown($message->chatAnswer->message) !!}
    </div>
    <div class="my-2">
      <span class="text-sm font-medium px-2 py-1 rounded bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-100">
        {{ $message->chatAnswer->llm }}
      </span>
    </div>
    <div class="text-xs text-gray-500 dark:text-gray-400">
      {{ $message->chatAnswer->created_at->diffForHumans() }}
    </div>
  @else
    <x-spinner />
  @endif
</div>
