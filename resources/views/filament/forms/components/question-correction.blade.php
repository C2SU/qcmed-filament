<div class="space-y-3">
    @forelse($expected_answer as $index => $answer)
        @php
            $letter = chr(65 + $index);
            $isCorrect = $answer['vrai'] ?? false;
            $isSelected = in_array($index, $user_answer);
            //c'est moche je ferai un truc mieux plus tard
            if ($isCorrect && $isSelected) {
                // Bonne réponse cochée
                $bgColor = 'bg-green-50 border-green-500';
                $icon = '✓';
                $iconColor = 'text-green-600';
            } elseif ($isCorrect && !$isSelected) {
                // Bonne réponse non cochée
                $bgColor = 'bg-orange-50 border-orange-400';
                $icon = '!';
                $iconColor = 'text-orange-600';
            } elseif (!$isCorrect && $isSelected) {
                // Mauvaise réponse cochée
                $bgColor = 'bg-red-50 border-red-500';
                $icon = '✗';
                $iconColor = 'text-red-600';
            } else {
                // Mauvaise réponse non cochée
                $bgColor = 'bg-gray-50 border-gray-300';
                $icon = '';
                $iconColor = '';
            }
        @endphp
        
        <div class="p-4 rounded-lg border-2" style="@if($isCorrect && $isSelected)background-color:#d1fae5;border-color:#10b981;@elseif($isCorrect && !$isSelected)background-color:#fee2e2;border-color:#ef4444;@elseif(!$isCorrect && $isSelected)background-color:#fee2e2;border-color:#ef4444;@else background-color:#f3f4f6;border-color:#d1d5db;@endif">
            <div class="flex items-start gap-3">
                @if($icon)
                    <span class="text-xl font-bold flex-shrink-0" style="@if($isCorrect && $isSelected)color:#059669;@elseif($isCorrect && !$isSelected)color:#dc2626;@elseif(!$isCorrect && $isSelected)color:#dc2626;@endif">{{ $icon }}</span>
                @endif
                
                <div class="flex-1">
                    <div class="flex items-start gap-2">
                        <span class="font-bold">{{ $letter }}.</span>
                        <span>{{ $answer['proposition'] }}</span>
                    </div>
                    
                    @if(!empty($answer['correction']))
                        <div class="mt-2 text-sm text-gray-700 italic">
                            💡 {{ $answer['correction'] }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    @empty
        <p class="text-gray-500">Aucune proposition disponible.</p>
    @endforelse
    
    @if(!empty($user_answer))
        <div class="mt-6 p-4 bg-blue-50 border-2 border-blue-300 rounded-lg">
            <p class="text-sm font-medium text-blue-900">
                📊 Votre réponse : 
                @foreach($user_answer as $idx)
                    <span class="font-bold">{{ chr(65 + $idx) }}</span>{{ !$loop->last ? ', ' : '' }}
                @endforeach
            </p>
            <p class="text-sm font-medium text-green-900 mt-2">
                ✅ Réponses correctes :
                @php
                    $corrects = [];
                    foreach($expected_answer as $i => $ans) {
                        if($ans['vrai'] ?? false) $corrects[] = chr(65 + $i);
                    }
                @endphp
                @foreach($corrects as $letter)
                    <span class="font-bold">{{ $letter }}</span>{{ !$loop->last ? ', ' : '' }}
                @endforeach
            </p>
        </div>
    @endif
</div>

{{-- Bouton custom retiré, à remplacer par un bouton Filament standard dans la page ou le resource --}}
