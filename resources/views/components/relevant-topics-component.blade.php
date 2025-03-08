<div class="p-2 bg-gray-100 dark:bg-gray-800 rounded shadow">
    <div class="font-semibold text-gray-800 dark:text-gray-100">
        Relevant Topics
    </div>
    @if($relevantTopics->elementare_datentypen)
    <span class="inline-flex items-center rounded-full bg-green-100 px-2.5 py-0.5 text-xs font-semibold text-green-800 dark:bg-green-800 dark:text-green-100">
        Elementare Datentypen
    </span>
    @endif
    @if($relevantTopics->algorithmenbewertung_und_laufzeit)
    <span class="inline-flex items-center rounded-full bg-green-100 px-2.5 py-0.5 text-xs font-semibold text-green-800 dark:bg-green-800 dark:text-green-100">
        Algorithmenbewertung und Laufzeit
    </span>
    @endif
    @if($relevantTopics->graphen_baeume)
    <span class="inline-flex items-center rounded-full bg-green-100 px-2.5 py-0.5 text-xs font-semibold text-green-800 dark:bg-green-800 dark:text-green-100">
        Graphen und Bäume
    </span>
    @endif
    @if($relevantTopics->sortierung)
    <span class="inline-flex items-center rounded-full bg-green-100 px-2.5 py-0.5 text-xs font-semibold text-green-800 dark:bg-green-800 dark:text-green-100">
        Sortierung
    </span>
    @endif
    @if($relevantTopics->suchen)
    <span class="inline-flex items-center rounded-full bg-green-100 px-2.5 py-0.5 text-xs font-semibold text-green-800 dark:bg-green-800 dark:text-green-100">
        Suchen
    </span>
    @endif
    @if($relevantTopics->codierung)
    <span class="inline-flex items-center rounded-full bg-green-100 px-2.5 py-0.5 text-xs font-semibold text-green-800 dark:bg-green-800 dark:text-green-100">
        Codierung
    </span>
    @endif
    @if($relevantTopics->kompression)
    <span class="inline-flex items-center rounded-full bg-green-100 px-2.5 py-0.5 text-xs font-semibold text-green-800 dark:bg-green-800 dark:text-green-100">
        Kompression
    </span>
    @endif
    @if($noRelevantTopicFound)
      <div class="text-gray-500 dark:text-gray-400">
          Keine relevanten Themen gefunden...
      </div>
    @endif
    <div class="text-xs text-gray-500 dark:text-gray-400">
        {{ $relevantTopics->created_at->diffForHumans() }}
    </div>
</div>
