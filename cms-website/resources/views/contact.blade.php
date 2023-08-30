@extends('master')
@section('content')
 <style type="text/css">
    .tm-contact-bg { background-image: url(/img/new-vision-04.jpg); }
</style>

        <div class="row">
            <div class="col-12">
                <div class="tm-main-bg tm-contact-bg"></div>
            </div>
        </div>

        <!-- Main -->
        <main>
            <!-- Welcome section -->
            <section class="tm-welcome">
                <div class="row">
                    <div class="col-12">
                        <h2 class="tm-section-header tm-header-floating" style="background: rgb(121, 118, 118)">  معلومات الاتصال </h2>
                    </div>
                </div>

                <div class="row tm-welcome-row">
                    <div class="col-lg-6 mb-5 tm-contact-box">
                      <div class="tm-contact-form-wrap">

                        <form id="contact-form" action=" {{route('contact.store')}}" method="post" class="tm-contact-form">
                            @csrf
                            <div class="form-group">
                              <input type="text" id="contact_name" name="contact_name" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder=" الاسم " required="" />
                            </div>
                            <div class="form-group">
                              <input type="email" id="contact_email" name="contact_email" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder=" الايميل " required="" />
                            </div>

                            <div class="form-group">
                              <textarea rows="4" id="contact_message" name="contact_message" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder=" الرسالة..... " required=""></textarea>
                            </div>

                            <div class="form-group mb-0">
                              <button type="submit" class="btn rounded-0 d-block ml-auto tm-btn-primary" style="background: rgb(121, 118, 118)">
                                ارسال الان
                              </button>
                            </div>
                          </form>
                      </div>
                    </div>
                    <div class="col-lg-6 mb-5 tm-contact-box">
                      <div class="tm-double-border-1 tm-border-gray">
                        <div class="tm-double-border-2 tm-border-gray tm-box-pad">
                            <p class="mb-4">
                              <a rel="nofollow" target="_parent" href="https://templatemo.com/tm-542-new-vision" dir="rtl"> Top Apps </a>  إيجاد مشاريع مؤسسية عالية الجودة ذات قيمة مضافة للمستثمرين والسوق قائمة على أسس إدارية وتقنية حديثة بواسطة كوادر فاعلة.
                            </p>
                            <p class="mb-3">
                              120-240 Rio de Janeiro - State of Rio de Janeiro, Brazil
                            </p>
                            <p class="mb-1">الاتصال: <a href="tel:770-252-095" class="tm-link">770-252-095</a></p>
                            <p dir="rtl">الايميل: <a href="#" class="tm-link">info@company.com</a></p>
                        </div>
                      </div>
                    </div>
                </div>

                <div class="row pt-5 pb-5 mb-5">
                    <div class="col-md-6 tm-contact-l">
                        <h3 class="tm-article-title tm-color-primary"> البناء الاستراتيجي من أهم العمليات  </h3>
                        <p class="mb-4"> يعتبر البناء الاستراتيجي من أهم العمليات التي تعمل على نجاح المنظمات والمنشآت والاعمال الاستثمارية ودوام الاستمرارية لها، لأنها تعمل على رسم الخطوط العريضة لما ستؤول اليه في السنوات القادمة وبما أن هذه العملية تحتاج الى بحث عن اهم عوامل النجاح في الوضع الحالي والمستقبلي وتحويلها الى خطوات ملموسة يتم تبنيها والعمل على تنفيذها تسعى بعض المنظمات إلى بناء الفكر الاستراتيجي لها، كما تعمل جاهدة على تأسيس الخطط الإستراتيجية كي تحقق الاستمرارية وتصل الى مرحلة الاستقرار. </p>
                        <ul class="tm-ul-hyphen">
                            <li>لأجل ذلك عملنا في ريادة للدراسات والاستشارات على تصميم منهجية عملية استقيناها من خبراتنا المتراكمة في إدارة مجموعة من المشاريع في مجالات مختلفة لتصبح بمثابة خارطة طريق تؤثر ايجابا في رسم البناء الاستراتيجي لتتلاءم مع الأهداف والطموحات التي بنيت من أجلها هذه المشاريع.</li>

                        </ul>
                    </div>
                    <div class="col-md-6 tm-contact-r">
                        <h3 class="tm-article-title tm-color-primary">  التنظيم الاداري وضبط زمام الامور</h3>
                        <p class="mb-4"> لم تعد تخفى على كل مؤسسة أو صاحب مشروع الحاجة الملحة لإرساء قواعد وأساليب التنظيم الإداري الذي يهدف إلى ضبط زمام الأمور والسيطرة على العمل الداخلي الذي يشكل سور حصين يقلل من التأثر السلبي من التقلبات الخارجية ويضمن استمرارية العمل وديمومته، ولا يمكن لأي مؤسسة أن تصل إلى سلم النجاح دون وضع أسس واضحة وصلبة للتنظيم الإداري مستلهمه تجربتها الخاصة من النظريات الإدارية الحديثة. </p>
                        <p> ونحن في ريادة للدراسات والاستشارات صممنا رؤيتنا المستقاة من الخبرة في إدارة مجموعة من المشاريع في مجالات مختلفة لتصبح بمثابة خارطة طريق تؤثر ايجابا في رفع المؤشرات المالية والطموحات التي بنيت من أجلها هذه المشاريع. </p>
                    </div>
                </div>
            </section>

            <footer>
              @include('footer')
          </footer>

        </main>
    </div>
    <script src="{{asset('/theme/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('/theme/slick/slick.min.js')}}"></script>
    <script src="{{asset('/theme/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/theme/js/templatemo-script.js')}}"></script>
</body>
</html>

@endsection

@push('footer-script')

@endpush
