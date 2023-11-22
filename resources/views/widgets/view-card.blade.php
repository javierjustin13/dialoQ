@push('head')
<link rel="stylesheet" href="{{ asset('css/dialogues/show.css') }}">
@endpush


<div class="p-3 border rounded-4" id="midpane">
    <div class="p-3 border rounded-4 mb-3" id="postcard">
        <div class="card-header">
            <div class="media flex-wrap w-100 align-items-center"> <img src="{{ $dialog->user->getImageURL() }}"
                    class="d-block ui-w-40 rounded-circle" alt="">
                <div class="media-body ml-3"> <a href="" data-abc="true">{{ $dialog->user->username }}</a>
                </div>
            </div>
        </div>
        <div class="card-body pt-3">
            <h4>{{ $dialog->title }}</h4>
            <p>{{ $dialog->content }}</p>
        </div>
        <br>
        <div class="card-footer align-items-center px-0 pt-0 pb-3">
            <div class="d-flex justify-content-between">
                <div class="text-muted">
                    <span>
                        <i class="bi bi-heart"></i>
                        <span>{{ $dialog->likes }}</span>
                    </span>
                    <span class="ms-3">
                        <i class="bi bi-chat-dots"></i>
                        <span>100</span> {{-- $dialog->comments->count() --}}
                    </span>
                </div>
                <span class="text-muted">
                    <i class="bi bi-clock me-1"></i>
                    <span>
                        @php
                            $diff = date_diff(new DateTime($dialog->created_at), new DateTime());
                            @endphp
                            @if ( $diff->format('%s') <= 5 && $diff->format('%i') == 0 && $diff->format('%h') == 0 && $diff->format('%d') == 0)
                                Just now
                            @elseif ( $diff->format('%d') == 0 && $diff->format('%h') == 0 && $diff->format('%i') == 0)
                                {{ $diff->format('%s seconds ago') }}
                            @elseif ( $diff->format('%d') == 0 && $diff->format('%h') == 0)
                                {{ $diff->format('%i minutes ago') }}
                            @elseif ( $diff->format('%d') == 0)
                                {{ $diff->format('%h hours ago') }}
                            @elseif ( $diff->format('%d') > 0)
                                {{ $diff->format('%d days ago') }}
                            @elseif ( $diff->format('%d') > 30)
                                {{ $diff->format('%m months ago') }}
                            @elseif ( $diff->format('%d') > 365)
                                {{ $diff->format('%y years ago') }}
                            @endif
                    </span>
                </span>
            </div>
            <br>
            <div class="form-group" id="commentbox">
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Your Comments...">
            </div>
            <button class="btn btn-secondary" type="submit">SHARE</button>
            <hr>

            {{-- untuk komen--}}
            <div class="card-header">
                <div class="media flex-wrap w-100 align-items-center"> <img src="../image/profile-image.jpeg"
                        class="d-block ui-w-40 rounded-circle" alt="">
                    <div class="media-body ml-3"> <a href="">Nama</a>
                    </div>
                    <div class="text-muted small ml-3" id="timing">
                        <i class="bi bi-clock me-1"></i>
                        <p href="">4 Minutes ago</p>
                    </div>
                </div>
                <p class=" mt-2 ml-5 pl-2" id="textcomment">Ini komennya blalbblalbalbalalblalablallbalblalbalballbalbalblalblbalblablabalblalbalbalbal blalablalbalba ballalbla</p>
            </div>
            {{-- --}}
        </div>
    </div>


</div>
