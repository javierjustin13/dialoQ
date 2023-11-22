@forelse ($dialog->comments as $comment)
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
        <p class=" mt-2 ml-5 pl-2" id="textcomment">Ini komennya
            blalbblalbalbalalblalablallbalblalbalballbalbalblalblbalblablabalblalbalbalbal blalablalbalba
            ballalbla</p>
    </div>
@empty
    <p class="text-center mt-4">No Comments Found.</p>
@endforelse
