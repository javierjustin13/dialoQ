@push('head')
    <link rel="stylesheet" href="{{ asset('css/widgets/suggested-card.css') }}">
@endpush
<div class="suggested-box" data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000">
    <div class="title-suggested border">
        PEOPLE YOU MAY KNOW
    </div>

    <div class="card mb-3 border" style="max-width: 18rem;background-color: #342A45" data-aos="fade-left"
        data-aos-delay="200" data-aos-duration="1000">
        <div class="suggested-card rounded">
            @auth
                @php
                    if (Auth::user()->followings->count() > 0) {
                        $randomPickedFollowings = Auth::user()->followings->random();
                        if ($randomPickedFollowings->followings->count() >= 3) {
                            $suggestedPeople = $randomPickedFollowings->followings
                                ->random(3)
                                ->where('id', '!=', Auth::user()->id)
                                ->whereNotIn('id', Auth::user()->followings->pluck('id'));
                        } else {
                            $suggestedPeople = App\Models\User::where('id', '!=', Auth::user()->id)
                                ->whereNotIn('id', Auth::user()->followings->pluck('id'))
                                ->inRandomOrder()
                                ->take(3)
                                ->get();
                        }
                    } else {
                        $suggestedPeople = App\Models\User::where('id', '!=', Auth::user()->id)
                            ->whereNotIn('id', Auth::user()->followings->pluck('id'))
                            ->inRandomOrder()
                            ->take(3)
                            ->get();
                    }
                @endphp
            @endauth
            @guest
                @php
                    $suggestedPeople = App\Models\User::all()->random(3);
                @endphp
            @endguest
            @foreach ($suggestedPeople as $suggested)
                <div class="suggestedpeople ">
                    <div class="suggestedprofile">
                        <img class="suggested-img" src="{{ $suggested->getImageURL() }}" alt="">
                        {{-- <p class="pl-2">{{ $suggested->username }}</p> --}}
                        <div class="suggested-username"><a
                                href="{{ route('users.show', $suggested->id) }}">{{ $suggested->username }} </a></div>
                    </div>
                    <livewire:follow.follow-list-button :user="$suggested" :key="$suggested->id" />
                </div>
            @endforeach
        </div>
    </div>
</div>
