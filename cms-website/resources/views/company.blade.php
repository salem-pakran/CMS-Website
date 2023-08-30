@extends('master')

@section('content')
<style type="text/css">
    .tm-about-bg { background-image: url(/img/new-vision-02.jpg); }
</style>
        <div class="row">
            <div class="col-12">
                <div class="tm-main-bg tm-about-bg"></div>
            </div>
        </div>

        <!-- Main -->
        <main>
            <!-- Welcome section -->
            <section class="tm-welcome">
                <div class="row">
                    <div class="col-12">
                        <h2 class="tm-section-header tm-header-floating" style="background: rgb(121, 118, 118)"> عن المكتب </h2>
                    </div>
                </div>

                <div class="row tm-welcome-row">
                    <div class="tm-about">
                        <div class="col-12 tm-media tm-media-v-center">
                            <i class="fab fa-5x fa-accusoft tm-about-icon"></i>
                            <div>
                                <p><a rel="nofollow" target="_parent" href="https://templatemo.com/tm-542-new-vision"> الرؤيه </a><br> الريادة في بناء المشاريع المؤسسية متعددة المجالات. </p>
                            </div>
                        </div>
                        <div class="col-12 tm-media tm-media-v-center">
                            <i class="fas fa-5x fa-air-freshener tm-about-icon"></i>
                            <div>
                                <p><a rel="nofollow" target="_parent" href="https://templatemo.com/tm-542-new-vision"> الرساله </a><br> إيجاد مشاريع مؤسسية عالية الجودة ذات قيمة مضافة للمستثمرين والسوق قائمة على أسس إدارية وتقنية حديثة بواسطة كوادر فاعلة. </p>
                            </div>
                        </div>
                        <div class="col-12 tm-media tm-media-v-center">
                            <i class="fas fa-5x fa-fire-alt tm-about-icon"></i>
                            <div>
                                <p><a rel="nofollow" target="_parent" href="https://templatemo.com/tm-542-new-vision"> القيم </a></p>
                                <ul class="tm-ul-hyphen">
                                    <li> الاحترافية 
                                        <ul><li> o	تقديم حلول استشارية مبتكرة وفق الأسس والمعايير العلمي الحديثة تلبي تطلعات وامال العملاء. </li></ul>
                                    </li>
                                    <li> الالتزام </li>
                                    <ul><li> o	الحفاظ على خصوصية وسرية معلومات عملائنا التي يمكن الاطلاع عليها اصناء العمل. </li><li> o	الالتزام لكامل الاتفاقيات والعقود الموقعة مع العملاء وعدم التفريط فيها. </li><li> o	تقديم العروض الفنية والمالية بعيدة عن التوقعات المثالية والغير معقولة. </li><li> o	عدم الخداع او التظليل في الإعلانات والتسويق للخدمات الاستشارية. </li></ul>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row tm-welcome-row-2">
                    <div class="col-12">
                        <h2 class="tm-section-header tm-section-header-small mb-4" style="background: rgb(121, 118, 118)"> اهدافنا وبيئتنا </h2>
                    </div>
                    <div class="col-md-6">
                        <div class="tm-about-1">
                            <img src="{{asset('/img/img-3x1-01.jpg')}}" alt="Image" class="img-fluid mb-5">
                            <ul class="tm-ul-hyphen">
                                <p class="tm-article-text"> الاهداف </p>
                                <ul><li> تقديم خدمات استشارية متميزة تتناسب مع طبيعة وحجم مشاريع العملاء. </li><li> إيجاد مشاريع مؤسسية نوعية تحقق الربحية وتلبي تطلعات المستثمرين. </li><li> تبني رواد الاعمال واستيعاب افكارهم وتحويلها الى مشاريع استثمارية. </li><li> 	مساعدة المشاريع الناشئة والجديدة على النمو والتوسع. </li><li> 	تعزيز ثقافة المشروع في أوساط الشباب والخريجين  </li></ul>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tm-about-1">
                            <img src="{{asset('/img/img-3x1-02.jpg')}}" alt="Image" class="img-fluid mb-5">
                            <ul class="tm-ul-hyphen">
                                <p class="tm-article-text"> الإشراف الإداري. </p>
                                <ul><li>تقييم المشاريع الاستثمارية والتنموية. </li><li>بناء المشاريع التنموية وتنفيذها. </li><li> اعداد الدراسات والبحوث</li><li>دراسات الجدوى الاقتصادية.</li><li> النظام الإداري. </li><li> منصة الاستثمار. </li><li> 	إعداد وتطوير الخطط الاستراتيجية والتشغيلية.</li><li>التأهيل لشهادة الآيزو.</li><li>	بناء نموذج العمل التجاري.</li></ul>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Featured -->
            <section class="tm-featured">
                <div class="row">
                    <div class="col-12">
                        <h2 class="tm-section-header tm-section-header-small mb-3" style="background: rgb(121, 118, 118)"> أعضاء فريقنا </h2>
                    </div>
                </div>

                <!-- Carousel -->
                <div class="grid tm-carousel">
                    <figure class="effect-zoe">
                        <img src="{{asset('/img/team-img-01.jpg')}}" alt="Featured Item">
                        <figcaption>
                            <h2>John Stone</h2>
                            <p class="icon-links">
								<a href="https://fb.com"><i class="fab fa-facebook-f"></i></a>
								<a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
								<a href="https://instagram.com"><i class="fab fa-instagram"></i></a>
							</p>
                        </figcaption>
                    </figure>
                    <figure class="effect-zoe">
                        <img src="{{asset('/img/team-img-02.jpg')}}" alt="Featured Item">
                        <figcaption>
                            <h2>Jane Meldrum</h2>
                            <p class="icon-links">
								<a href="https://fb.com"><i class="fab fa-facebook-f"></i></a>
								<a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
								<a href="https://instagram.com"><i class="fab fa-instagram"></i></a>
							</p>
                        </figcaption>
                    </figure>
                    <figure class="effect-zoe">
                        <img src="{{asset('/img/team-img-03.jpg')}}" alt="Featured Item">
                        <figcaption>
                            <h2>Trevor Virtue</h2>
                            <p class="icon-links">
								<a href="https://fb.com"><i class="fab fa-facebook-f"></i></a>
								<a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
								<a href="https://instagram.com"><i class="fab fa-instagram"></i></a>
							</p>
                        </figcaption>
                    </figure>
                    <figure class="effect-zoe">
                        <img src="{{asset('/img/team-img-04.jpg')}}" alt="Featured Item">
                        <figcaption>
                            <h2>Emily Moore</h2>
                            <p class="icon-links">
								<a href="https://fb.com"><i class="fab fa-facebook-f"></i></a>
								<a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
								<a href="https://instagram.com"><i class="fab fa-instagram"></i></a>
							</p>
                        </figcaption>
                    </figure>
                    <figure class="effect-zoe">
                        <img src="{{asset('/img/team-img-05.jpg')}}" alt="Featured Item">
                        <figcaption>
                            <h2>Claire Li</h2>
                            <p class="icon-links">
								<a href="https://fb.com"><i class="fab fa-facebook-f"></i></a>
								<a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
								<a href="https://instagram.com"><i class="fab fa-instagram"></i></a>
							</p>
                        </figcaption>
                    </figure>
                    <figure class="effect-zoe">
                        <img src="{{asset('/img/team-img-06.jpg')}}" alt="Featured Item">
                        <figcaption>
                            <h2>Elisabeth Shu</h2>
                            <p class="icon-links">
								<a href="https://fb.com"><i class="fab fa-facebook-f"></i></a>
								<a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
								<a href="https://instagram.com"><i class="fab fa-instagram"></i></a>
							</p>
                        </figcaption>
                    </figure>
                    <figure class="effect-zoe">
                        <img src="{{asset('/img/team-img-07.jpg')}}" alt="Featured Item">
                        <figcaption>
                            <h2>Dania Liu</h2>
                            <p class="icon-links">
								<a href="https://fb.com"><i class="fab fa-facebook-f"></i></a>
								<a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
								<a href="https://instagram.com"><i class="fab fa-instagram"></i></a>
							</p>
                        </figcaption>
                    </figure>
                    <figure class="effect-zoe">
                        <img src="{{asset('/img/team-img-08.jpg')}}" alt="Featured Item">
                        <figcaption>
                            <h2>Miracle Yang</h2>
                            <p class="icon-links">
								<a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a>
								<a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
								<a href="https://instagram.com"><i class="fab fa-instagram"></i></a>
							</p>
                        </figcaption>
                    </figure>
                </div>
            </section>

            <footer>
                @include('footer')
            </footer>

        </main>

@endsection

@push('footer-script')

@endpush
