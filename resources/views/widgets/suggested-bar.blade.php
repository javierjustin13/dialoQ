@push('head')
    <link rel="stylesheet" href="{{ asset('css/widgets/suggested-card.css') }}">
@endpush

<div class="card mb-3 border" style="max-width: 18rem;background-color: #342A45">
    <div class="card-body ">
        <div class="card mb-3 border" style="background-color: #241B35" id="suggestedtext">
            <p>PEOPLE YOU MAY KNOW</p>
        </div>
        @auth
            @php
                if(Auth::user()->followings->count() > 0){
                    $randomPickedFollowings = Auth::user()->followings->random();
                    if($randomPickedFollowings->followings->count() > 0){
                        $suggestedPeople = $randomPickedFollowings->followings->random(3)->where('id', '!=', Auth::user()->id)->whereNotIn('id', Auth::user()->followings->pluck('id'));
                    }
                    else{
                        $suggestedPeople = App\Models\User::where('id', '!=', Auth::user()->id)->whereNotIn('id', Auth::user()->followings->pluck('id'))->inRandomOrder()->take(3)->get();
                    }
                }
                else{
                    $suggestedPeople = App\Models\User::where('id', '!=', Auth::user()->id)->whereNotIn('id', Auth::user()->followings->pluck('id'))->inRandomOrder()->take(3)->get();
                }
            @endphp
        @endauth
        @guest
            @php
                $suggestedPeople = App\Models\User::all()->random(3);
            @endphp
        @endguest
        @foreach ($suggestedPeople as $suggested)
            <div class="suggestedpeople mt-2">
                <div class="suggestedname">
                    <img src="{{ $suggested->getImageURL() }}" alt="">
                    <p class="pl-2">{{ $suggested->username }}</p>
                </div>
                <livewire:follow.follow-list-button :user="$suggested" :key="$suggested->id" />
            </div>
        @endforeach
    </div>
</div>
