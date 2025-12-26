<div class="space-y-3">
    @forelse($expected_answer as $index => $answer)
        @php
            $letter = chr(65 + $index);
            $isCorrect = $answer['vrai'] ?? false;
            $isSelected = in_array($index, $user_answer);
            //c'est moche je ferai un truc mieux plus tard
            if ($isCorrect && $isSelected) {
                // Bonne réponse cochée => C'est bien
                $bgColor = '#4dfa0888';
                $icon = '✅';
                $iconColor = '';
            } elseif ($isCorrect && !$isSelected) {
                // Bonne réponse non cochée => Pas bien
                $bgColor = '#af1f1fad';
                $icon = '❌';
                $iconColor = '';
            } elseif (!$isCorrect && $isSelected) {
                // Mauvaise réponse cochée
                $bgColor = '#af1f1fad';
                $icon = '❌';
                $iconColor = '';
            } else {
                // Mauvaise réponse non cochée => C'est bien
                $bgColor = '#4dfa0888';
                $icon = '🔲';
                $iconColor = '';
            }
        @endphp 
        
        <div class="p-1.5 border-2 rounded-lg" style="background-color:{{ $bgColor}}; ">  

                @if($icon) 
                    <span class="font-bold text-lg shrink-0">{{ $icon }}</span>
                @endif
                

 
                        <span class="font-bold text-lg">{{ $letter }}.</span>
                        <span class="text-lg">{{ $answer['proposition'] }}</span>

                    
                    @if(!empty($answer['correction']))
                        <p class="mt-2 font-bold text-gray-700 text-md">
                            {{ $answer['correction'] }}
                        </p>
                    @endif

        </div>
    @empty
        <p class="text-gray-500">Aucune proposition disponible.</p>
    @endforelse
    
</div>

{{-- Bouton custom retiré, à remplacer par un bouton Filament standard dans la page ou le resource --}}
