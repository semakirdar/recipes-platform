@extends('site.layout')
@section('content')
    <div class="container">
        <div class="detail pt-4">
            <h3>Nefis Soslu Tavuk Pirzola</h3>
            <div class="star-icons mb-4">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <span class="text-muted">(17 oy, ortalama: 4.06 / 5)</span>
            </div>
            <div class="detail-header">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-9">
                        <div class="recipe-detail-image">
                            <img class="img-fluid" src="{{ asset('images/hero-image1.jpeg') }}">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-3">
                        <div class="py-4">
                            <div class="user-info mb-4">
                                <div class="user-image pb-3">
                                    <img class="img-fluid" src="{{ asset('images/default-avatar.png') }}">
                                </div>
                                <p>aysununmutfaklezzeti</p>
                                <p class="follower pb-3 text-muted">2.594 Takipçi</p>
                                <form method="post" action="#">
                                    <button class="btn btn-primary btn-sm form-control">Takip Et</button>
                                </form>
                            </div>
                            <div class="recipe-info-item text-center pt-3">
                                <span><i class="fas fa-clipboard me-4"></i> 5.780 </span>
                                <p class="text-warning">Kişinin Defterinde</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="recipe-action-buttons py-3">
                <div class="button-item text-center">
                    <i class="fas fa-clipboard mt-4"></i>
                    <form method="post" action="#">
                        <button class="btn">Deftere Ekle</button>
                    </form>
                    <p>3.594 kere</p>
                </div>

                <div class="button-item text-center">
                    <i class="fas fa-comment mt-4"></i>
                    <form method="post" action="#">
                        <button class="btn">Yorumlar</button>
                    </form>
                    <p>14 yorum</p>
                </div>
                <div class="button-item text-center">
                    <i class="fas fa-share-alt mt-4"></i>
                    <form method="post" action="#">
                        <button class="btn">Paylaş</button>
                    </form>
                    <p>20 paylaşma</p>
                </div>
            </div>
        </div>
    </div>
    <div class="detail-content py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-12 col-lg-7">
                    <div class="recipe">
                        <div class="text-muted info mb-4">
                            <span><i class="fas fa-cookie-bite"></i> 4-6 kişilik</span>
                            <span><i class="fas fa-user-clock"></i> 15dk Hazırlık, 25dk Pişirme</span>
                        </div>
                        <h4>Nefis Soslu Tavuk Pirzola Tarifi İçin Malzemeler</h4>
                        <ul>
                            <li>
                                8 parça kemiksiz derisiz tavuk pirzola
                            </li>
                            <li>
                                4 yemek kaşığı sıvı yağ
                            </li>
                            <li>Tuz, karabiber,kekik, kırmızı toz biber</li>
                            <li>5 yemek kaşığı sıvı yağ</li>
                            <li>1 küçük soğan</li>
                            <li>400 gr mantar</li>
                            <li>1 çay bardağı sut</li>
                            <li>1 paket krema</li>
                            <li>1 çay bardağı rendelenmiş kaşar peyniri</li>
                            <li>1 yemek kaşığı nişasta (az sütle açılmış)</li>
                            <li>2 diş rendelenmiş sarımsak</li>
                            <li>Tuz, kırmızı toz biber,az köri,karabiber</li>
                            <li>Dereotu</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection()
